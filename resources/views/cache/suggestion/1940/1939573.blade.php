<?php 
if ( !ENV('IN_PHPBB') )
{
    die('Hacking attempt');
    exit;
}
global $sug;
global $video;
    
$sug = array (
  0 => 
  array (
    'music_id' => 1917801,
    'cat_id' => 1,
    'cat_level' => 1,
    'cover_id' => 0,
    'music_title_url' => 'dung-quen-ten-anh~hoa-vinh',
    'music_title' => 'Đừng Quên Tên Anh',
    'music_artist' => 'Hoa Vinh',
    'music_album_id' => '',
    'music_listen' => 46224,
    'music_shortlyric' => 'Có mấy lúc ta được ngồi lại bên nhau 
Để nói cho em nghe những câu chuyện mà em từng làm cho anh đau
Cố cắn đôi môi để kể lý do tại sao như thế này
Tại sao em ngồi nơi đây còn hồn em bay.

Thế giới...',
    'music_bitrate' => 96,
    'music_filename' => '1917801-351bf064.mp4',
  ),
);
$video = array (
);
?>