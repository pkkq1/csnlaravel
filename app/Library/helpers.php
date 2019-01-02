<?php
namespace App\Library;

use DateTime;
use Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;

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
            else if ($bitrate >= 64)
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
                    $v = $diff->$k . ' ' . $v;
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
        return isset($music_info['music_title_url']) ? $music_info['music_title_url'] . "~" . $id . $mode . ".".HTMLEX : $id . $mode . "." . HTMLEX;
    }
    public static function music_id($music_info, $mode = '')
    {
        return self::encodeID($music_info['music_id']);
    }
    public static function artistUrl($artistId, $artistNickName, $mode = '')
    {
        if(!$artistId || $artistId == -1){
            return '/tim-kiem?q='.trim($artistNickName).'&mode=ca-si';
        }
        return '/ca-si/'.self::rawTiengVietUrl($artistNickName) . "~" . base64_encode(KEY_ID_ARTIST_ENCODE_URL . $artistId) . $mode . ".".HTMLEX;
    }
    public static function rawHtmlArtists($artistId, $artistNickName) {
        $artistId = explode(';', $artistId);
        $artistNickName = explode(';', $artistNickName);
        if($artistNickName && $artistId) {
            $html = '';
            foreach ($artistNickName as $key => $val) {
                $html = $html.', <a href="'.self::artistUrl(isset($artistId[$key]) ? $artistId[$key] : -1, $val).'">'.$val.'</a>';
            }
            return substr($html, 2);
        }
        return '';
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

        $url = ($c_id == CAT_VIDEO) ? VIEW_VIDEO_URL . '/' : VIEW_MUSIC_URL . '/';
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

        $url .= ($c_id == CAT_VIDEO) ? VIEW_VIDEO_URL . '/' : VIEW_MUSIC_URL . '/';
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
        include_once(__DIR__.'/../../resources/views/cache/def_main_cat.blade.php');
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
        $data = str_replace('data:image/jpeg;base64,', '', $data);
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
    public  static function splitMusicUrl($url) {
        $arrSplit = explode('~', $url);
        $id_encode = last(str_replace('.html', '', $arrSplit));
        return [
            'id' => self::decodeID($id_encode),
            'type' => substr($id_encode, 0, 1) == 'v' ? 'video' : 'music',
            'url' => str_replace(last($arrSplit), "", $arrSplit)
        ];
    }

    public  static function splitPlaylistUrl($url) {
        $arrSplit = explode('~', $url);
        $id_encode = last(str_replace('.html', '', $arrSplit));
        $type = explode('/', url()->current())[3];
        return [
            'id' => str_replace($type == 'playlist' ? KEY_ID_PLAYLIST_ENCODE_URL : KEY_ID_ALBUM_ENCODE_URL, "", base64_decode($id_encode)),
            'type' => $type,
            'url' => str_replace(last($arrSplit), "", $arrSplit)
        ];
    }
    public  static function splitArtistUrl($url) {
        $arrSplit = explode('~', $url);
        $id_encode = last(str_replace('.html', '', $arrSplit));
        return [
            'id' => str_replace(KEY_ID_ARTIST_ENCODE_URL, "", base64_decode($id_encode)),
            'type' => explode('/', url()->current())[3],
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
    public static function sessionCountTimesMusic($idMusic, $type = 'listen') {
        session_start();
        if(!isset($_SESSION[$type])) {
            $newSession[$idMusic] = [
                'time_expiry' => strtotime('+1 hour')
            ];
            $_SESSION[$type] = $newSession;
            return true;
        }else{
            $listen = $_SESSION[$type];
            if(isset($listen[$idMusic])) {
                if($listen[$idMusic]['time_expiry'] <= time()) {
                    $listen[$idMusic] = [
                        'time_expiry' => strtotime(TIME_EXPIRY_ADD_LISTEN_MUSIC)
                    ];
                    $_SESSION[$type] = $listen;
                    return true;
                }
                return false;
            }else{
                $listen[$idMusic] = [
                    'time_expiry' => strtotime('+1 hour')
                ];
                $_SESSION[$type] = $listen;
                return true;
            }
        }
    }

    public static function file_path($id, $dir = '', $url = '')
    {
        $url = ($url == '') ? env('DATA_URL') : '';
        return $url . $dir . ceil($id/1000) . '/';
    }
    public static function filePath($musicId, $dir = MUSIC_DATA_PATH, $url = '')
    {
        global $root_path;
        return ($url) ? $url . $dir . ceil($musicId / 1000) . '/' : $root_path . $dir . ceil($musicId / 1000) . '/';
    }

    public static function cover_path($cover_id = 0)
    {
        return self::file_path($cover_id, MUSIC_COVER_PATH);
    }

    public static function cover_url($cover_id = 0)
    {
        return ($cover_id > 0) ? self::cover_path($cover_id) . $cover_id . '.jpg' : '/imgs/no_cover.jpg';
    }
    public static function artist_cover($artist_id)
    {
        return self::cover_path($artist_id) . $artist_id . '.jpg';
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

    public static function rawTiengVietUrl($str, $spaceReplace = '-')
    {
        return preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', $spaceReplace, ''), self::khongdau($str));
    }

    public static function relaceKeySearch($str) {
        return preg_replace(['/y/', '/ý/', '/ỳ/', '/ỷ/', '/ỵ/', '/ỹ/', '/s/'], ['i', 'í', 'ì', 'ỉ', 'ị', 'ĩ', 'x'], mb_strtolower($str, 'UTF-8'));
    }

    public static function album_url($album_info, $id = 0)
    {
        $album_title_url = self::rawTiengVietUrl(htmlspecialchars_decode($album_info['music_album']));
        $album_url = $album_title_url . '~' . base64_encode(KEY_ID_ALBUM_ENCODE_URL . $album_info['cover_id']) . "." . HTMLEX;;

        return ($id == 0) ? SUB_ALLBUM . $album_url : SUB_ALLBUM . $album_url . '?id='. $id;
    }
    public static function playlist_url($playlist_info, $id = 0)
    {
        $playlist_title_url = self::rawTiengVietUrl(htmlspecialchars_decode($playlist_info['playlist_title']));
        $playlist_url = $playlist_title_url . '~' . base64_encode(KEY_ID_PLAYLIST_ENCODE_URL . $playlist_info['playlist_id']) . "." . HTMLEX;;

        return ($id == 0) ? SUB_PLAYLIST . $playlist_url : SUB_PLAYLIST . $playlist_url . '?id='. $id;
    }

    public static function pagingCustom($page, $rows, $total, $url) {
        echo '<ul class="pagination">';
        echo PaginationLinksCustom::create($page, intval($total / $rows), 1, '<li>'.$url.'</li>', '<li class="active"><a>%d</a></li>', '<li><a>&hellip;</a></li>');
        echo '</ul>';
    }


    public static function music_filename($music_info)
    {
        $name = htmlspecialchars_decode(self::khongdau($music_info['music_title'] . ' - ' . $music_info['music_artist']));
        $temp = '';
        $last_char = ' ';
        for ($i = 0; $i < strlen($name); $i++) {
            $char = $name[$i];
            if (('a' <= $char && $char <= 'z') || ('A' <= $char && $char <= 'Z') || ('0' <= $char && $char <= '9') || $char == '-') {
                $last_char = $char;
                $temp .= $last_char;
            } else if ($last_char != ' ') {
                $last_char = ($char == ' ') ? ' ' : '_';
                $temp .= $last_char;
            }
        }

        return trim(substr($temp, 0, 40));
    }

    public static function filesize2str($bytes, $precision = 2)
    {
        $units = array('Bytes', 'KB', 'MB', 'GB', 'TB');

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        // Uncomment one of the following alternatives
        $bytes /= pow(1024, $pow);
        // $bytes /= (1 << (10 * $pow));

        return round($bytes, $precision) . ' ' . $units[$pow];
    }
    public static function getIp(){
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']) == true){
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        }else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) == true){
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else if(isset($_SERVER['HTTP_X_FORWARDED']) == true){
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        }else if(isset($_SERVER['HTTP_FORWARDED_FOR']) == true){
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        }else if(isset($_SERVER['$_SERVER[\'REMOTE_ADDR\']']) == true){
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        }else if(isset($_SERVER['REMOTE_ADDR']) == true){
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        }else{
            $ipaddress = 'UNKNOWN';
        }
        return $ipaddress;
    }
    public static function domain_hosted($music_info)
    {
        $music_id = $music_info['music_id'];

        if ($music_id <= 200000)
            $url = 'http://data02.chiasenhac.com/';
        else if ($music_id < 1000000)
            $url = 'http://data3.chiasenhac.com/';
//        else if ($music_id <= 1005000)
//            $url = 'http://data5.chiasenhac.com/';
        else if ($music_id <= 1005000)
            $url = 'http://data4.chiasenhac.com/';
        else if ($music_id <= 1029000)
            $url = 'http://data16.chiasenhac.com/';
        else if ($music_id <= 1059000)
            $url = 'http://data17.chiasenhac.com/';
        else if ($music_id <= 1089000)
            $url = 'http://data18.chiasenhac.com/';
        else if ($music_id <= 1119000)
            $url = 'http://data19.chiasenhac.com/';
        else if ($music_id <= 1149000)
            $url = 'http://data20.chiasenhac.com/';
        else if ($music_id <= 1179000)
            $url = 'http://data21.chiasenhac.com/';
        else if ($music_id <= 1209000)
            $url = 'http://data22.chiasenhac.com/';
        else if ($music_id <= 1239000)
            $url = 'http://data23.chiasenhac.com/';
        else if ($music_id <= 1269000)
            $url = 'http://data24.chiasenhac.com/';
        else if ($music_id <= 1299000)
            $url = 'http://data00.chiasenhac.com/';
        else if ($music_id <= 1319000)
            $url = 'http://data.chiasenhac.com/';
        else if ($music_id <= 1349000)
            $url = 'http://data02.chiasenhac.com/';
        else if ($music_id <= 1379000)
            $url = 'http://data01.chiasenhac.com/';
        else if ($music_id <= 1419000)
            $url = 'http://data25.chiasenhac.com/';
        else if ($music_id <= 1449000)
            $url = 'http://data26.chiasenhac.com/';
        else if ($music_id <= 1489000)
            $url = 'http://data27.chiasenhac.com/';
        else if ($music_id <= 1529000)
            $url = 'http://data04.chiasenhac.com/';
        else if ($music_id <= 1569000)
            $url = 'http://data03.chiasenhac.com/';
        else if ($music_id <= 1649000)
            $url = 'http://data2.chiasenhac.com/';
        else if ($music_id <= 1689000)
            $url = 'http://data05.chiasenhac.com/';
        else if ($music_id <= 1729000)
            $url = 'http://data2.chiasenhac.com/';
        else if ($music_id <= 1739000)
            $url = 'http://data01.chiasenhac.com/';
        else if ($music_id <= 1809000)
            $url = 'http://data3.chiasenhac.com/';
        else if ($music_id <= 1859000)
            $url = 'http://data00.chiasenhac.com/';
        else if ($music_id <= 1919000)
            $url = (rand(1, 2) == 1) ? 'http://data38.chiasenhac.com/' : 'http://data37.chiasenhac.com/';
        else if ($music_id <= 1934000)
            $url = 'http://data32.chiasenhac.com/';
        else if ($music_id <= 1949000)
            $url = 'http://data34.chiasenhac.com/';
        else if ($music_id <= 1962000)
            $url = 'http://data35.chiasenhac.com/';
        else if ($music_id <= 1968000)
            $url = 'http://data36.chiasenhac.com/';
        else if ($music_id <= 1969000)
            $url = 'http://data31.chiasenhac.com/';
        else
            $url = 'http://data.chiasenhac.com/';

        return $url;
    }

    public static function file_url(&$music_info)
    {
        if (!isset($music_info['music_id'])) {
            return '';
        }

        $music_id = $music_info['music_id'];
        if (!$music_info['music_file_cache']) {
            $music_info['music_file_cache'] = self::music_filename($music_info);
        }
        $url = self::domain_hosted($music_info);

        $pathinfo = pathinfo($music_info['music_filename']);
        $music_info['music_extension'] = $pathinfo['extension'];
        $music_info['music_filename_noext'] = $pathinfo['filename'];

        $music_info['url1'] = $url . 'downloads/' . ceil($music_id / 1000) . '/' . date('w') . '/';
        $music_info['url2'] = rawurlencode($music_info['music_filename_noext']);
        $music_info['url3'] = "/128/" . rawurlencode($music_info['music_file_cache']) . "." . $music_info['music_extension'];

        if ($music_info['music_extension'] == 'mp4') {
            $file_url = array();

            if ($music_info['music_32_filesize'] > 0) {
                $file_url[] = array(
                    'url' => $url . 'downloads/' . ceil($music_id / 1000) . '/' . date('w') . '/' . rawurlencode($music_info['music_filename_noext']) . "/32/" . rawurlencode($music_info['music_file_cache']) . "." . $music_info['music_extension'],
                    'label' => '180p',
                    'size' => self::filesize2str($music_info['music_32_filesize']),
                    'type' => 'mp4'
                );
            }
            if ($music_info['music_filesize'] > 0) {
                $file_url[] = array(
                    'url' => $url . 'downloads/' . ceil($music_id / 1000) . '/' . date('w') . '/' . rawurlencode($music_info['music_filename_noext']) . "/128/" . rawurlencode($music_info['music_file_cache']) . "." . $music_info['music_extension'],
                    'label' => '360p',
                    'size' => self::filesize2str($music_info['music_filesize']),
                    'type' => 'mp4'
                );
            }
            if ($music_info['music_320_filesize'] > 0) {
                $file_url[] = array(
                    'url' => $url . 'downloads/' . ceil($music_id / 1000) . '/' . date('w') . '/' . rawurlencode($music_info['music_filename_noext']) . "/320/" . rawurlencode($music_info['music_file_cache']) . "." . $music_info['music_extension'],
                    'label' => '480p',
                    'size' => self::filesize2str($music_info['music_320_filesize']),
                    'type' => 'mp4'
                );
            }
            if ($music_info['music_m4a_filesize'] > 0) {
                $file_url[] = array(
                    'url' => $url . 'downloads/' . ceil($music_id / 1000) . '/' . date('w') . '/' . rawurlencode($music_info['music_filename_noext']) . "/m4a/" . rawurlencode($music_info['music_file_cache']) . "." . $music_info['music_extension'],
                    'label' => '720p',
                    'size' => self::filesize2str($music_info['music_m4a_filesize']),
                    'type' => 'mp4'
                );
            }
            if ($music_info['music_lossless_filesize'] > 0) {
                $file_url[] = array(
                    'url' => $url . 'downloads/' . ceil($music_id / 1000) . '/' . date('w') . '/' . rawurlencode($music_info['music_filename_noext']) . "/flac/" . rawurlencode($music_info['music_file_cache']) . "." . $music_info['music_extension'],
                    'label' => '1080p',
                    'size' => self::filesize2str($music_info['music_flac_filesize']),
                    'type' => 'mp4'
                );
            }
        } else {
            $file_url = array();
            if ($music_info['music_32_filesize'] > 0) {
                $file_url[] = array(
                    'url' => $url . 'downloads/' . ceil($music_id / 1000) . '/' . date('w') . '/' . rawurlencode($music_info['music_filename_noext']) . "/32/" . rawurlencode($music_info['music_file_cache']) . ".m4a",
                    'label' => '32kbps',
                    'size' => self::filesize2str($music_info['music_32_filesize']),
                    'type' => 'm4a'
                );
            }
            if ($music_info['music_filesize'] > 0) {
                $file_url[] = array(
                    'url' => $url . 'downloads/' . ceil($music_id / 1000) . '/' . date('w') . '/' . rawurlencode($music_info['music_filename_noext']) . "/128/" . rawurlencode($music_info['music_file_cache']) . "." . $music_info['music_extension'],
                    'label' => '128kbps',
                    'size' => self::filesize2str($music_info['music_filesize']),
                    'type' => 'mp3'
                );
            }
            if ($music_info['music_320_filesize'] > 0) {
                $file_url[] = array(
                    'url' => $url . 'downloads/' . ceil($music_id / 1000) . '/' . date('w') . '/' . rawurlencode($music_info['music_filename_noext']) . "/320/" . rawurlencode($music_info['music_file_cache']) . "." . $music_info['music_extension'],
                    'label' => '320kbps',
                    'size' => self::filesize2str($music_info['music_320_filesize']),
                    'type' => 'mp3'
                );
            }
            if ($music_info['music_m4a_filesize'] > 0) {
                $file_url[] = array(
                    'url' => $url . 'downloads/' . ceil($music_id / 1000) . '/' . date('w') . '/' . rawurlencode($music_info['music_filename_noext']) . "/m4a/" . rawurlencode($music_info['music_file_cache']) . ".m4a",
                    'label' => '500kbps',
                    'size' => self::filesize2str($music_info['music_m4a_filesize']),
                    'type' => 'm4a'
                );
            }
            if ($music_info['music_lossless_filesize'] > 0) {
                $file_url[] = array(
                    'url' => $url . 'downloads/' . ceil($music_id / 1000) . '/' . date('w') . '/' . rawurlencode($music_info['music_filename_noext']) . "/flac/" . rawurlencode($music_info['music_file_cache']) . ".flac",
                    'label' => 'Lossless',
                    'size' => self::filesize2str($music_info['music_lossless_filesize']),
                    'type' => 'flac'
                );
            }
        }

        return $file_url;
    }
    public static function rawLyrics($lyrics) {
//        $lyrics = str_replace("]\r\n", ']', $lyrics);
//        $lyrics = str_replace("][", "]\r\n[", $lyrics);
//
//        $lyrics = explode("\r\n", $lyrics);
//        foreach ($lyrics as &$item) {
//            preg_match_all("[(.*)]", $item, $matches);
//            dd($matches);
//        }
//
//        dd($lyrics);
        return $lyrics;
    }

    public static function lyric_to_web($lyric)
    {
        if (strlen($lyric) < 100)
        {
            return $lyric;
        }

        $lyrics = array();
        $lyric_line = explode("\n", $lyric);
        $nosub = true;

        foreach($lyric_line as $line) {
            $preline = substr($line, 0, 4);
            if ($preline == '[t1]')
            {
                // SUB
                $line .= '[/t1]';
                $nosub = false;
            }
            else if ($preline == '[t2]')
            {
                // SUB
                $line .= '[/t2]';
                $nosub = false;
            }
            else if (!$nosub && $preline == 'Ngư')
            {
                if (substr($line, 0, 16) == 'Người dịch:') {
                    // SUB
                    $line = '[t2]' . $line . '[/t2]';
                    $nosub = false;
                }
            }
            $lyrics[] = $line;
        }

        $web_lyric = implode("\n", $lyrics);

        if (!$nosub) {
            $web_lyric = str_replace("[t1]", '<div class="vietsub1 sub_line">', $web_lyric);
            $web_lyric = str_replace("[t2]", '<div class="vietsub2 sub_line">', $web_lyric);
            $web_lyric = str_replace(array("[/t1]\n", "[/t2]\n", "[/t1]", "[/t2]"), '</div>', $web_lyric);
        }

        return array(
            'lyric' => nl2br($web_lyric),
            'sub' => $nosub ? false : true
        );
    }
    public static function size2str($width, $height, $color = true, $show_all = false)
    {
        if ($width == 1920 && $height <= 1080)
            $size2str = 'HD 1080p';
        else if ($width == 1280 && $height <= 720)
            $size2str = 'HD 720p';
        else if ($width == 854 && $height <= 480)
            $size2str = 'MV 480p';
        else if ($width == 640 && $height <= 360)
            $size2str = 'MV 360p';
        else if ($width == 320 && $height <= 180)
            $size2str = 'MV 180p';
        else
            $size2str = $width .'x'. $height;

        if ($color)
        {
            if ($width >= 1920)// && $height >= 1080)
                $size2str = '<span style="color: red">'. $size2str .'</span>';
            else if ($width >= 1280)// && $height >= 720)
                $size2str = '<span style="color: orange">'. $size2str .'</span>';
            else if ($width >= 854)// && $height >= 480)
                $size2str = '<span style="color: darkblue">'. $size2str .'</span>';
            else if ($width >= 640)// && $height >= 360)
                $size2str = '<span style="color: darkgreen">'. $size2str .'</span>';
        }
        else
        {
            if ($show_all)
            {
                if ( $show_all == -1 )
                {
                    $size2str = 'MV 360p';
                    if ($width >= 854)
                        $size2str .= ', MV 480p';
                    if ($width >= 1280)
                        $size2str .= ', HD 720p';
                    if ($width >= 1920)
                        $size2str .= ', HD 1080p';
                }
                else
                {
                    $size2str = 'MV 360p';
                    if ($width >= 854)
                        $size2str = 'MV 480p, ' . $size2str;
                    if ($width >= 1280)
                        $size2str = 'HD 720p, ' . $size2str;
                    if ($width >= 1920)
                        $size2str = 'HD 1080p, ' . $size2str;
                }
            }
        }

        return $size2str;
    }
    public static function MusicCookie($request, $music) {
        if(isset($_COOKIE['music_history'])) {
            $musicHistory = unserialize($_COOKIE['music_history']);
            $musicHistory = array_diff(array_reverse($musicHistory), [$music->music_id]);
            array_push($musicHistory, $music->music_id);
            $musicHistory = array_slice(array_reverse($musicHistory),0, LIMIT_HISTORY_MUSIC);
        }else{
            $musicHistory[] = $music->music_id;
        }
        $musicHistorySer = serialize($musicHistory);
        setcookie('music_history', $musicHistorySer, time()+31536000,'/');
        return [
            'cookie' => $musicHistorySer,
            'value' => $musicHistory
        ];

    }
    public static function numberShorten($number) {
        $numberFormat = number_format($number);
        if($number < 999) {
            return $numberFormat;
        }elseif($number < 999999) {
            return substr($numberFormat, 0, strlen($numberFormat) - 2) . 'k';
        }elseif($number < 999999999) {
            return substr($numberFormat, 0, strlen($numberFormat) - 5) . 'm';
        }elseif($number < 999999999999) {
            return substr($numberFormat, 0, strlen($numberFormat) - 8) . 't';
        }else{
            return $numberFormat;
        }
    }
    public static function formatBytes($size) {
        $base = log($size) / log(1024);
        $suffix = array("", "KB", "MB", "GB", "TB");
        $f_base = floor($base);
        return round(pow(1024, $base - floor($base)), 1) . $suffix[$f_base];
    }
    public static function pathAvatar($userAvatar, $userId) {
        if(!$userAvatar)
            return '/imgs/no_avatar.png';
        return (strpos($userAvatar, 'http') !== false) ? $userAvatar : Helpers::file_path($userId, PUBLIC_AVATAR_PATH, true) . $userAvatar;
    }
}
