<?php
namespace App\Solr;

use Illuminate\Http\Request;

class Solarium
{
    protected $client;

    public function __construct(\Solarium\Client $client)
    {
        $this->client = $client;
    }

    public function ping()
    {
        // create a ping query
        $ping = $this->client->createPing();
        // execute the ping query
        try {
            $this->client->ping($ping);
            return response()->json('OK');
        } catch (\Solarium\Exception $e) {
            return response()->json('ERROR', 500);
        }
    }
    public function search($search = array(), $page = 1, $perPage = 10, $sort = array(), $select = array())
    {
        $query = $this->client->createSelect();
        try{
            foreach ($search as $key => $item) {
                $query->addFilterQuery(array('key' => $key, 'query' => $key . ':*' . $item . '*'));
            }
//            $query->addFilterQuery(array('key' => $key, 'query' => '*'));
            $rows = $perPage;
            $query->setRows($rows); // rows
            $query->setStart(($page == 1 ? 0 : $page - 1) * $rows); // perpage
            if($sort) {
                foreach ($sort as $key => $val) {
                    $query->addSort($key, $val);
                }
            }
            $data = [];
            // display the total number of documents found by solr
//          $facetSet = $query->getFacetSet();
//          $facetSet->createFacetField('stock')->setField('inStock');
            $resultset = $this->client->select($query);
            // show documents using the resultset iterator
            foreach ($resultset as $document) {
                $data[] = $document;
            }
            return [
                'status' => true,
                'message' => '',
                'data' => $data,
                'rows' => $perPage,
                'page' => $page,
                'row_total' => $resultset->getNumFound(),
            ];
        }
        catch (Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }
    public function solrDeleteById($id = ''){
        $update = $this->client->createUpdate();
        try{
            $update->addDeleteById($id);
            $update->addCommit();
            $result = $this->client->update($update);
            return [
                'status' => true,
                'message' => ''
            ];
        }
        catch (Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }
    public function addDocuments(array $data = array(), $overWrite = true) {
        $update = $this->client->createUpdate();

        $doc = $update->createDocument();
        foreach($data as $key => $val) {
            $doc->$key = $val;
        }
//        $doc->id = 123;
//        $doc->name = 123;
//        $doc->price = 364;
//        $doc->des = array('doc test 2', 'doc test 4', 'doc test 5');
        try{
            $update->addDocument($doc, $overWrite);
            $update->addCommit();
            $result = $this->client->update($update);
            return [
                'status' => true,
                'message' => ''
            ];
        }
        catch (Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage()
//            'time' => $result->getQueryTime(),
            ];
        }

    }
}

?>