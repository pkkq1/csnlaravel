<?php
namespace App\Library;

use DateTime;
use Config;
use Illuminate\Support\Facades\Storage;

class Helpers
{
    public static function coverImg($coverId)
    {
        $coverImg = '';
        if (isset($coverId) && $coverId > 0) {
            $coverImg = self::filePath($coverId, MUSIC_COVER_PATH, env('DATA_URL')) . $coverId . '.jpg';
        }
        return $coverImg;
    }

    public static function filePath($musicId, $dir = MUSIC_DATA_PATH, $url = '')
    {
        global $root_path;
        return ($url) ? $url . $dir . ceil($musicId / 1000) . '/' : $root_path . $dir . ceil($musicId / 1000) . '/';
    }

    public static function bitrate2str($bitrate, $color = true, $showAll = false)
    {
        if ($color) {
            if ($bitrate == 0 || $bitrate > 500)
                $bitrate2str = '<span class="card-text" style="color: red">' . LOSSLESS . '</span>';
            else if ($bitrate > 320)
                $bitrate2str = '<span class="card-text" style="color: orange">' . $bitrate . KBPS . '</span>';
            else if ($bitrate > 192)
                $bitrate2str = '<span class="card-text" style="color: darkblue">' . $bitrate . KBPS . '</span>';
            else if ($bitrate >= 128)
                $bitrate2str = '<span class="card-text" style="color: darkgreen">' . $bitrate . KBPS . '</span>';
            else
                $bitrate2str = $bitrate . KBPS;
        } else {
            if ($showAll) {
                if ($showAll == -1) {
                    $bitrate2str = '32' . KBPS;
                    $bitrate2str .= ', 128' . KBPS;
                    if ($bitrate > 128)
                        $bitrate2str .= ', 320' . KBPS;
                    if ($bitrate > 320)
                        $bitrate2str .= ', 500' . KBPS;
                } else {
                    $bitrate2str = '32' . KBPS;
                    $bitrate2str = '128' . KBPS . ', ' . $bitrate2str;
                    if ($bitrate > 128)
                        $bitrate2str = '320' . KBPS;// . ', ' . $bitrate2str;
                    if ($bitrate > 320)
                        $bitrate2str = '500' . KBPS . ', ' . $bitrate2str;
                    if ($bitrate > 500)
                        $bitrate2str = LOSSLESS . ', ' . $bitrate2str;
                }
            } else
                $bitrate2str = ($bitrate == 0 || $bitrate > 500) ? LOSSLESS : $bitrate . KBPS;
        }

        return $bitrate2str;
    }

    public static function timeElapsedString($datetime, $full = false)
    {
        $now = new DateTime;
        $ago = new DateTime(date('Y-m-d H:i:s', $datetime));
        $diff = $now->diff($ago);
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'năm',
            'm' => 'tháng',
            'w' => 'tuần',
            'd' => 'ngày',
            'h' => 'giờ',
            'i' => 'phút',
            's' => 'giây',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                if ($v == 'giây') {
                    $v = $diff->$k . ' ' . $v . ' trước';
                }elseif ($v == 'phút') {
                    $v = $diff->$k . ' ' . $v . ' trước';
                }elseif ($v == 'giờ') {
                    $v = $diff->$k . ' ' . $v . ' trước';
                } elseif ($diff->$k <= 1) {
                    $v = 'Hôm qua, ' . date('H:i', $datetime);
                } else {
                    $v = $diff->$k . ' ' . $v . ', ' . date('H:i', $datetime);
                }
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) : 'Bây giờ';
    }

    public static function getRandLimitArr($arr = array(), $length = 1)
    {
        if (count($arr) <= $length) {
            return $arr;
        }
        $randArr = array_rand($arr, $length);
        $result = array();
        foreach ($randArr as $val) {
            $result[] = $arr[$val];
        }
        return $result;
    }

    public static function convertToReadableSize($size)
    {
        $base = log($size) / log(1024);
        $suffix = array("", "KB", "MB", "GB", "TB");
        $f_base = floor($base);
        return round(pow(1024, $base - floor($base)), 1) . ' ' . $suffix[$f_base];
    }


    public static function encodeID($id)
    {
        return intval($id);
    }

    public static function decodeID($hexID)
    {
        return intval($hexID);
    }

    public static function music_url($music_info, $mode = '')
    {
        $id = self::encodeID($music_info['music_id']);

        return ($music_info['music_title_url']) ? $music_info['music_title_url'] . "~" . $id . $mode . ".".HTMLEX : $id . $mode . "." . HTMLEX;
    }
    public static function music_id($music_info, $mode = '')
    {
        return self::encodeID($music_info['music_id']);
    }
    public static function artistUrl($artistId, $artistNickName, $mode = '')
    {
        return self::rawTiengVietUrl($artistNickName) . "~" . base64_encode(KEY_ID_ENCODE_URL . $artistId) . $mode . ".".HTMLEX;
    }
    public static function decodeArtistUrl($url)
    {
        $arrUrl = self::splitUrl($url);
        return [
            'id' => str_replace(KEY_ID_ENCODE_URL, '', base64_decode($arrUrl['id'])),
            'name' => $arrUrl['url'][0]
        ];
    }

    public static function category_url($c_info = array(), $c_id = 0, $c_level = 0)
    {
        global $cat_id2info;
        $url = '';
        if (!$c_id && !$c_level) {
            $c_id = intval($c_info['cat_id']);
            $c_level = intval($c_info['cat_level']);

            if (!$c_id && !$c_level && !isset($c_info['cat_url'])) {
                return $url;
            }
        }

        $url = ($c_id == CAT_VIDEO) ? VIEW_VIDEO_URL . '/' : VIEW_URL . '/';
        if (isset($cat_id2info[$c_id][0]['cat_url'])) {
            $url .= $cat_id2info[$c_id][0]['cat_url'] . "/";
        }

        if ($c_level > 0) {
            if (isset($c_info['cat_url'])) {
                $url .= $c_info['cat_url'] . "/";
            } else if (isset($cat_id2info[$c_id][$c_level]['cat_url'])) {
                $url .= $cat_id2info[$c_id][$c_level]['cat_url'] . "/";
            }
        }

        return $url;
    }

    public static function nav_links($c_info = array(), $c_id = 0, $c_level = 0)
    {
        global $root_path, $theme, $cat_id2info;
        $lang = Config::get('constants.lang');

        $url = ENV('URL');//$root_path;
        if (!$c_id && !$c_level) {
            $c_id = $c_info['cat_id'];
            $c_level = $c_info['cat_level'];

            if (!$c_id && !$c_level) {
                $nav_links = '<a href="' . $url . '">' . ENV('SITENAME') . '</a>';
                return $nav_links;
            }
        }

        $url .= ($c_id == CAT_VIDEO) ? VIEW_VIDEO_URL . '/' : VIEW_URL . '/';
        $ct_id = 1;
        $nav_links = ($theme['themes_id'] == 4) ? '<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="' . $url . '" itemprop="item"><span itemprop="name">' . $lang['MUSIC'] . '</span></a><meta itemprop="position" content="' . $ct_id . '"></li>' : '';
        if (isset($cat_id2info[$c_id][0]['cat_short_title'])) {
            $url .= $cat_id2info[$c_id][0]['cat_url'] . "/";
            $nav_links .= ($theme['themes_id'] == 4) ? '<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="' . $url . '" itemprop="item"><span itemprop="name">' . $cat_id2info[$c_id][0]['cat_short_title'] . '</span></a><meta itemprop="position" content="' . (++$ct_id) . '"></li>' : '<a href="' . $url . '">' . $cat_id2info[$c_id][0]['cat_short_title'] . '</a>';
        }

        if ($c_level > 0) {
            if (isset($c_info['cat_short_title'])) {
                $url .= $c_info['cat_url'] . "/";
                $nav_links .= ($theme['themes_id'] == 4) ? '<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="' . $url . '" itemprop="item"><span itemprop="name">' . $cat_id2info[$c_id][$c_level]['cat_short_title'] . '</span></a><meta itemprop="position" content="' . (++$ct_id) . '"></li>' : ' -&gt; <a href="' . $url . '">' . $cat_id2info[$c_id][$c_level]['cat_short_title'] . '</a>';
            } else if (isset($cat_id2info[$c_id][$c_level]['cat_short_title'])) {
                $url .= $cat_id2info[$c_id][$c_level]['cat_url'] . "/";
                $nav_links .= ($theme['themes_id'] == 4) ? '<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="' . $url . '" itemprop="item"><span itemprop="name">' . $cat_id2info[$c_id][$c_level]['cat_short_title'] . '</span></a><meta itemprop="position" content="' . (++$ct_id) . '"></li>' : ' -&gt; <a href="' . $url . '">' . $cat_id2info[$c_id][$c_level]['cat_short_title'] . '</a>';
            }

            $c_sublevel = $c_info['cat_sublevel'];
            if ($c_sublevel > 0) {
                if ($c_id == 2) {
                    $nav_links .= ($lang['CAT_SUBLEVEL_PLAYBACK'][$c_sublevel]['cat_title']) ? (($theme['themes_id'] == 4) ? '<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="name">' . $lang['CAT_SUBLEVEL_PLAYBACK'][$c_sublevel]['cat_title'] . '</span><meta itemprop="position" content="' . (++$ct_id) . '"></li>' : ' -&gt; ' . $lang['CAT_SUBLEVEL_PLAYBACK'][$c_sublevel]['cat_title']) : "";
                } else if ($c_id == 3) {
                    $nav_links .= ($lang['CAT_SUBLEVEL_VN'][$c_level][$c_sublevel]['cat_title']) ? (($theme['themes_id'] == 4) ? '<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="name">' . $lang['CAT_SUBLEVEL_VN'][$c_level][$c_sublevel]['cat_title'] . '</span><meta itemprop="position" content="' . (++$ct_id) . '"></li>' : ' -&gt; ' . $lang['CAT_SUBLEVEL_VN'][$c_level][$c_sublevel]['cat_title']) : "";
                } else if ($c_id > 3) {
                    $nav_links .= ($lang['CAT_SUBLEVEL'][$c_level][$c_sublevel]['cat_title']) ? (($theme['themes_id'] == 4) ? '<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="name">' . $lang['CAT_SUBLEVEL'][$c_level][$c_sublevel]['cat_title'] . '</span><meta itemprop="position" content="' . (++$ct_id) . '"></li>' : ' -&gt; ' . $lang['CAT_SUBLEVEL'][$c_level][$c_sublevel]['cat_title']) : "";
                }
            }
        }

        return $nav_links;
    }

    public static function listen_url($music_info, $domain = true)
    {
        global $cat_id2info;
        include_once($_SERVER['DOCUMENT_ROOT'] . '/../resources/views/cache/def_main_cat.blade.php');
        return ($domain ? ENV('LISTEN_URL') : '') . self::category_url($cat_id2info[$music_info['cat_id']][$music_info['cat_level']]) . self::music_url($music_info);
    }

    public static function download_url($music_info)
    {
        global $cat_id2info, $phpEx;

        return ENV('DOWNLOAD_URL') . self::category_url($cat_id2info[$music_info[cat_id]][$music_info[cat_level]]) . self::music_url($music_info, DOWNLOAD_URL);
    }


    public static function thumbnail_url($video_info, $mode = '')
    {
        $music_id = $video_info['music_id'];
        if ($video_info['cat_id'] != CAT_VIDEO) {
            return '';
        } else if ($mode == 'preview') {
            $url = env('DATA_URL');
            return $url . MUSIC_THUMBNAIL_PATH . ceil($music_id / 1000) . '/' . $music_id . '_prv.jpg';
        } else {
            $url = env('DATA_URL');
            return $url . MUSIC_THUMBNAIL_PATH . ceil($music_id / 1000) . '/' . $music_id . '.jpg';
        }
    }
    public static function saveBase64Image($data, $path, $fileName = null, $type = 'png')
    {
        $data = str_replace('data:image/png;base64,', '', $data);
        $data = str_replace(' ', '+', $data);
        $data = base64_decode($data);
        $fileName = ($fileName ?? rand() . '_' . time()) . '.' .$type;
        Storage::put('public' . $path . $fileName, $data);
        return $fileName;
    }

    public static function copySourceImage($data, $path, $fileName = null, $type = 'png')
    {
        $data->storeAs(
            'public' . $path, $fileName . '.' .$type
        );
        return $fileName;
    }
    public static function moveFile($source, $path, $fileName, $overWrite = false){
        if (file_exists($path . '/' . $fileName) && !$overWrite) {
            $fileName = '(' . time() . ')' . $fileName;
            $source->move($path, $fileName);
        } else {
            $source->move($path, $fileName);
        }
        return $fileName;
    }
    public  static function splitUrl($url) {
        $arrSplit = explode('~', $url);
        return [
            'id' => last(str_replace('.html', '', $arrSplit)),
            'url' => str_replace(last($arrSplit),"",$arrSplit)
        ];
    }

    public static function fbShareLink($url, $domain = false)
    {
        return 'https://www.facebook.com/dialog/share?app_id=' . env('FACEBOOK_APP_ID') . '&display=popup&href=' . ($domain ? ENV('LISTEN_URL') : '') . $url . '&redirect_uri=' . ($domain ? ENV('LISTEN_URL') : '') . $url;
    }
    public static function ajaxResult($is_success = true,
                         $message = '',
                         $data = array(),
                         $terminer = true)
    {
        echo json_encode(array(
                'success' => $is_success,
                'message' => $message,
                'data' => $data)
        );
        if ($terminer) {
            exit();
        }
    }
    public static function sessionListenMusic($idMusic) {
        session_start();
        if(!isset($_SESSION["listen"])) {
            $newSession[$idMusic] = [
                'time_expiry' => strtotime('+1 hour')
            ];
            $_SESSION["listen"] = $newSession;
            return true;
        }else{
            $listen = $_SESSION["listen"];
            if(isset($listen[$idMusic])) {
                if($listen[$idMusic]['time_expiry'] <= time()) {
                    $listen[$idMusic] = [
                        'time_expiry' => strtotime(TIME_EXPIRY_ADD_LISTEN_MUSIC)
                    ];
                    $_SESSION["listen"] = $listen;
                    return true;
                }
                return false;
            }else{
                $listen[$idMusic] = [
                    'time_expiry' => strtotime('+1 hour')
                ];
                $_SESSION["listen"] = $listen;
                return true;
            }
        }
    }
    public static function rawTiengVietUrl ($str, $spaceReplace = '-'){
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
            'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        }
        $str = str_replace(' ', $spaceReplace, $str);
        return $str;
    }
}
