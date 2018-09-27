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


    public static function encodeID($id, $type = 'music')
    {
        $id_encode = dechex(MAX_ID_CONST - $id);
        $id_encode2 = str_replace(array(1,2,4,8,9,'a','e','f'), array('z','v','s','m','w','r','q','t'), $id_encode);
        $id_encode3 = str_replace(array(0,3,5,6,7,'b','c','d'), array('n','w','h','k','t','q','v','m'), $id_encode);
        return (($type=='video') ? 'v' : 't') . $id_encode2 . 'q' . substr($id_encode3, 2, 5);
    }

    public static function decodeID($hexID)
    {
        $id_decode2 = str_replace(array('z','v','s','m','w','r','q','t'), array(1,2,4,8,9,'a','e','f'), substr($hexID, 1, -6));
        $id_decode = hexdec($id_decode2);
        $id_encode3 = str_replace(array(0,3,5,6,7,'b','c','d'), array('n','w','h','k','t','q','v','m'), $id_decode2);

        // check ID fake
        $type = substr($hexID, 0, 1);
        if ( $type !== 't' && $type !== 'v' ) return intval($hexID);
        if ( substr($hexID, -6, 1) !== 'q' ) return intval($hexID);
        if ( substr($hexID, -5) != substr($id_encode3, 2, 5) ) return intval($hexID);

        return (MAX_ID_CONST - $id_decode);
    }

    public static function music_url($music_info, $mode = '')
    {
        $id = ($music_info['cat_id'] == CAT_VIDEO) ? self::encodeID($music_info['music_id'], 'video') : self::encodeID($music_info['music_id']);

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
        $id_encode = last(str_replace('.html', '', $arrSplit));
        return [
            'id' => self::decodeID($id_encode),
            'type' => substr($id_encode, 0, 1) == 'v' ? 'video' : 'music',
            'url' => str_replace(last($arrSplit), "", $arrSplit)
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

    public static function file_path($id, $dir, $url = '')
    {
        $url = ($url == '') ? env('DATA_URL') : '';

        return $url . $dir . ceil($id/1000) . '/';
    }

    public static function cover_path($cover_id = 0)
    {
        return self::file_path($cover_id, MUSIC_COVER_PATH);
    }

    public static function cover_url($cover_id = 0)
    {
        return ($cover_id > 0) ? self::cover_path($cover_id) . $cover_id . '.jpg' : 'no_cover.jpg';
    }

    public static function khongdau($str)
    {
        static $unicode_trans = array(
            "á" => "a", "à" => "a", "ả" => "a", "ã" => "a", "ạ" => "a", "ă" => "a", "ắ" => "a", "ằ" => "a", "ẳ" => "a", "ẵ" => "a", "ặ" => "a", "â" => "a", "ấ" => "a", "ầ" => "a", "ẩ" => "a", "ẫ" => "a", "ậ" => "a",
            "Á" => "A", "À" => "A", "Ả" => "A", "Ã" => "A", "Ạ" => "A", "Ă" => "A", "Ắ" => "A", "Ằ" => "A", "Ẳ" => "A", "Ẵ" => "A", "Ặ" => "A", "Â" => "A", "Ấ" => "A", "Ầ" => "A", "Ẩ" => "A", "Ẫ" => "A", "Ậ" => "A",
            "é" => "e", "è" => "e", "ẻ" => "e", "ẽ" => "e", "ẹ" => "e", "ê" => "e", "ế" => "e", "ề" => "e", "ể" => "e", "ễ" => "e", "ệ" => "e",
            "É" => "E", "È" => "E", "Ẻ" => "E", "Ẽ" => "E", "Ẹ" => "E", "Ê" => "E", "Ế" => "E", "Ề" => "E", "Ể" => "E", "Ễ" => "E", "Ệ" => "E",
            "í" => "i", "ì" => "i", "ỉ" => "i", "ĩ" => "i", "ị" => "i",
            "Í" => "I", "Ì" => "I", "Ỉ" => "I", "Ĩ" => "I", "Ị" => "I",
            "ó" => "o", "ò" => "o", "ỏ" => "o", "õ" => "o", "ọ" => "o", "ô" => "o", "ố" => "o", "ồ" => "o", "ổ" => "o", "ỗ" => "o", "ộ" => "o", "ơ" => "o", "ớ" => "o", "ờ" => "o", "ở" => "o", "ỡ" => "o", "ợ" => "o",
            "Ó" => "O", "Ò" => "O", "Ỏ" => "O", "Õ" => "O", "Ọ" => "O", "Ô" => "O", "Ố" => "O", "Ồ" => "O", "Ổ" => "O", "Ỗ" => "O", "Ộ" => "O", "Ơ" => "O", "Ớ" => "O", "Ờ" => "O", "Ở" => "O", "Ỡ" => "O", "Ợ" => "O",
            "ú" => "u", "ù" => "u", "ủ" => "u", "ũ" => "u", "ụ" => "u", "ư" => "u", "ứ" => "u", "ừ" => "u", "ử" => "u", "ữ" => "u", "ự" => "u",
            "Ú" => "U", "Ù" => "U", "Ủ" => "U", "Ũ" => "U", "Ụ" => "U", "Ư" => "U", "Ứ" => "U", "Ừ" => "U", "Ử" => "U", "Ữ" => "U", "Ự" => "U",
            "ý" => "y", "ỳ" => "y", "ỷ" => "y", "ỹ" => "y", "ỵ" => "y",
            "Ý" => "Y", "Ỳ" => "Y", "Ỷ" => "Y", "Ỹ" => "Y", "Ỵ" => "Y",
            "đ" => "d",
            "Đ" => "D",
        );

        return strtr($str, $unicode_trans);
    }

    public static function rawTiengVietUrl($str)
    {
        return preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), self::khongdau($str));
    }

    public static function album_url($album_info, $id = 0)
    {
        $album_title_url = rawTiengVietUrl(htmlspecialchars_decode($album_info['music_album']));
        $album_url = $album_title_url . '~' . base64_encode(KEY_ID_ENCODE_URL . $album_info['cover_id']);

        return ($id == 0) ? '/nghe-album/' . $album_url : '/nghe-album/' . $album_url . '?id='. $id;
    }

    public static function pagingCustom($page, $rows, $total, $url, $pageVar) {
        if(intval($total / $rows) > 1) {
            ?>
            <ul class="pagination">
                <li class="<?php echo ($page == 1) ? ' disabled' : '' ?>">
                    <a href="<?php echo $url . $pageVar ?>">&laquo; Trước</a>
                </li>
                <?php for ($i = 1; $i <= intval($total / $rows); $i++) {
                    ?>
                    <li class="<?php echo ($page == $i) ? ' active' : '' ?>">
                        <a href="<?php echo $url . $pageVar . $i ?>"><?php echo $i ?></a>
                    </li>
                    <?php
                }
                ?>
                <li class="<?php echo ($page == intval($total / $rows)) ? ' disabled' : '' ?>">
                    <a href="<?php echo $url . $pageVar . ($i + 1) ?>" >Sau &raquo</a>
                </li>
            </ul>
            <?php
        }
    }
}
