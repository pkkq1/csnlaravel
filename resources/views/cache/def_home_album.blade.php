<?php 
if ( !ENV('IN_PHPBB') )
{
    die('Hacking attempt');
    exit;
}
global $album_hot;
global $album_new;
global $album_old;
global $music_new_uploads;
global $video_new_uploads;
    
$album_hot = array (
  0 => 
  array (
    'cover_id' => 90633,
    'music_album' => 'Just For A While (Single)',
    'music_artist' => '<a href="/ca-si/K-ICM~Y3NuX2FydGlzdH4xNDQ5MQ==.html">K-ICM</a>, <a href="/ca-si/T-ICM~Y3NuX2FydGlzdH4xODg0Mg==.html">T-ICM</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  1 => 
  array (
    'cover_id' => 90632,
    'music_album' => 'Journey (Single)',
    'music_artist' => '<a href="/ca-si/SaberZ~Y3NuX2FydGlzdH4xODg0MQ==.html">SaberZ</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  2 => 
  array (
    'cover_id' => 90622,
    'music_album' => 'Spiritual Jazz 8: Japan pt. 1',
    'music_artist' => '<a href="/ca-si/Takeo-Moriyama~Y3NuX2FydGlzdH4xODgxMQ==.html">Takeo Moriyama</a>, <a href="/ca-si/Yoshio-Ikeda~Y3NuX2FydGlzdH4xODgyMw==.html">Yoshio Ikeda</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  3 => 
  array (
    'cover_id' => 90621,
    'music_album' => 'Amistad',
    'music_artist' => '<a href="/ca-si/Michael-Hoppe~Y3NuX2FydGlzdH4xODgwNw==.html">Michael Hoppé</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  4 => 
  array (
    'cover_id' => 90620,
    'music_album' => 'Hero (Fight for You) - Single',
    'music_artist' => '<a href="/ca-si/Max-Lean~Y3NuX2FydGlzdH4xODgwNA==.html">Max Lean</a>, <a href="/ca-si/Reevo~Y3NuX2FydGlzdH4xODgwNQ==.html">Reevo</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  5 => 
  array (
    'cover_id' => 90619,
    'music_album' => 'Hit The Club (Single)',
    'music_artist' => '',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  6 => 
  array (
    'cover_id' => 90618,
    'music_album' => 'Yêu Em Từ Tuổi Thanh Xuân (Single)',
    'music_artist' => '<a href="/ca-si/Cao-Nam-Thanh~Y3NuX2FydGlzdH4xNTU1NA==.html">Cao Nam Thành</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  7 => 
  array (
    'cover_id' => 90617,
    'music_album' => 'Độc Thân (Single)',
    'music_artist' => '<a href="/ca-si/Chau-Dang-Khoa~Y3NuX2FydGlzdH4xODgwMQ==.html">Châu Đăng Khoa</a>, <a href="/ca-si/Ricky-Star~Y3NuX2FydGlzdH4xODgwMg==.html">Ricky Star</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  8 => 
  array (
    'cover_id' => 90616,
    'music_album' => 'Quá Khứ, Anh Xin Lỗi (Single)',
    'music_artist' => '<a href="/ca-si/Khanh-Phuong~Y3NuX2FydGlzdH45MDQ=.html">Khánh Phương</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  9 => 
  array (
    'cover_id' => 90615,
    'music_album' => 'More And More (Single)',
    'music_artist' => '<a href="/ca-si/Sanchez~Y3NuX2FydGlzdH4xODgwMA==.html">Sanchez</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  10 => 
  array (
    'cover_id' => 90614,
    'music_album' => 'Are You Human? OST - Part.4 (Single)',
    'music_artist' => '<a href="/ca-si/2BIC~Y3NuX2FydGlzdH4xODc5OQ==.html">2BIC</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  11 => 
  array (
    'cover_id' => 90613,
    'music_album' => 'Teen Top Story: 8PISODE (Regular)',
    'music_artist' => '<a href="/ca-si/Teen-Top~Y3NuX2FydGlzdH4yNTU4.html">Teen Top</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  12 => 
  array (
    'cover_id' => 90612,
    'music_album' => 'POP  CULTURE 6',
    'music_artist' => '<a href="/ca-si/Syrufit~Y3NuX2FydGlzdH42OTE3MQ==.html">Syrufit</a>, <a href="/ca-si/Tracy~Y3NuX2FydGlzdH4xNzQ2Mg==.html">Tracy</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  13 => 
  array (
    'cover_id' => 90611,
    'music_album' => 'Good Girl (Single)',
    'music_artist' => '<a href="/ca-si/Shin-Ji~Y3NuX2FydGlzdH4xODc5OA==.html">Shin Ji</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  14 => 
  array (
    'cover_id' => 90610,
    'music_album' => 'Love Me Please (Single)',
    'music_artist' => '<a href="/ca-si/Haebi~Y3NuX2FydGlzdH4xODc5Nw==.html">Haebi</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  15 => 
  array (
    'cover_id' => 90609,
    'music_album' => 'Father (Single)',
    'music_artist' => '<a href="/ca-si/DinoT~Y3NuX2FydGlzdH4xODc5Ng==.html">Dino.T</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  16 => 
  array (
    'cover_id' => 90608,
    'music_album' => 'Peppemood (EP)',
    'music_artist' => '<a href="/ca-si/Peppe~Y3NuX2FydGlzdH4xODc5NQ==.html">Peppe</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  17 => 
  array (
    'cover_id' => 90607,
    'music_album' => 'Everything Changes (Single)',
    'music_artist' => '<a href="/ca-si/Miyao~Y3NuX2FydGlzdH4xODc5Mw==.html">Miyao</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  18 => 
  array (
    'cover_id' => 90606,
    'music_album' => 'Zeus (Single)',
    'music_artist' => '<a href="/ca-si/Ted-Park~Y3NuX2FydGlzdH4xMzk2NA==.html">Ted Park</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  19 => 
  array (
    'cover_id' => 90605,
    'music_album' => 'Everytime, Everyday (Single)',
    'music_artist' => '<a href="/ca-si/Dinner-Coat~Y3NuX2FydGlzdH4xMzk3MQ==.html">Dinner Coat</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
);
$album_new = array (
  0 => 
  array (
    'cover_id' => 90633,
    'music_album' => 'Just For A While (Single)',
    'music_artist' => '<a href="/ca-si/K-ICM~Y3NuX2FydGlzdH4xNDQ5MQ==.html">K-ICM</a>, <a href="/ca-si/T-ICM~Y3NuX2FydGlzdH4xODg0Mg==.html">T-ICM</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  1 => 
  array (
    'cover_id' => 90632,
    'music_album' => 'Journey (Single)',
    'music_artist' => '<a href="/ca-si/SaberZ~Y3NuX2FydGlzdH4xODg0MQ==.html">SaberZ</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  2 => 
  array (
    'cover_id' => 90622,
    'music_album' => 'Spiritual Jazz 8: Japan pt. 1',
    'music_artist' => '<a href="/ca-si/Takeo-Moriyama~Y3NuX2FydGlzdH4xODgxMQ==.html">Takeo Moriyama</a>, <a href="/ca-si/Yoshio-Ikeda~Y3NuX2FydGlzdH4xODgyMw==.html">Yoshio Ikeda</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  3 => 
  array (
    'cover_id' => 90621,
    'music_album' => 'Amistad',
    'music_artist' => '<a href="/ca-si/Michael-Hoppe~Y3NuX2FydGlzdH4xODgwNw==.html">Michael Hoppé</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  4 => 
  array (
    'cover_id' => 90620,
    'music_album' => 'Hero (Fight for You) - Single',
    'music_artist' => '<a href="/ca-si/Max-Lean~Y3NuX2FydGlzdH4xODgwNA==.html">Max Lean</a>, <a href="/ca-si/Reevo~Y3NuX2FydGlzdH4xODgwNQ==.html">Reevo</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  5 => 
  array (
    'cover_id' => 90619,
    'music_album' => 'Hit The Club (Single)',
    'music_artist' => '',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  6 => 
  array (
    'cover_id' => 90618,
    'music_album' => 'Yêu Em Từ Tuổi Thanh Xuân (Single)',
    'music_artist' => '<a href="/ca-si/Cao-Nam-Thanh~Y3NuX2FydGlzdH4xNTU1NA==.html">Cao Nam Thành</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  7 => 
  array (
    'cover_id' => 90617,
    'music_album' => 'Độc Thân (Single)',
    'music_artist' => '<a href="/ca-si/Chau-Dang-Khoa~Y3NuX2FydGlzdH4xODgwMQ==.html">Châu Đăng Khoa</a>, <a href="/ca-si/Ricky-Star~Y3NuX2FydGlzdH4xODgwMg==.html">Ricky Star</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  8 => 
  array (
    'cover_id' => 90616,
    'music_album' => 'Quá Khứ, Anh Xin Lỗi (Single)',
    'music_artist' => '<a href="/ca-si/Khanh-Phuong~Y3NuX2FydGlzdH45MDQ=.html">Khánh Phương</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  9 => 
  array (
    'cover_id' => 90615,
    'music_album' => 'More And More (Single)',
    'music_artist' => '<a href="/ca-si/Sanchez~Y3NuX2FydGlzdH4xODgwMA==.html">Sanchez</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  10 => 
  array (
    'cover_id' => 90614,
    'music_album' => 'Are You Human? OST - Part.4 (Single)',
    'music_artist' => '<a href="/ca-si/2BIC~Y3NuX2FydGlzdH4xODc5OQ==.html">2BIC</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  11 => 
  array (
    'cover_id' => 90613,
    'music_album' => 'Teen Top Story: 8PISODE (Regular)',
    'music_artist' => '<a href="/ca-si/Teen-Top~Y3NuX2FydGlzdH4yNTU4.html">Teen Top</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  12 => 
  array (
    'cover_id' => 90612,
    'music_album' => 'POP  CULTURE 6',
    'music_artist' => '<a href="/ca-si/Syrufit~Y3NuX2FydGlzdH42OTE3MQ==.html">Syrufit</a>, <a href="/ca-si/Tracy~Y3NuX2FydGlzdH4xNzQ2Mg==.html">Tracy</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  13 => 
  array (
    'cover_id' => 90611,
    'music_album' => 'Good Girl (Single)',
    'music_artist' => '<a href="/ca-si/Shin-Ji~Y3NuX2FydGlzdH4xODc5OA==.html">Shin Ji</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  14 => 
  array (
    'cover_id' => 90610,
    'music_album' => 'Love Me Please (Single)',
    'music_artist' => '<a href="/ca-si/Haebi~Y3NuX2FydGlzdH4xODc5Nw==.html">Haebi</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  15 => 
  array (
    'cover_id' => 90609,
    'music_album' => 'Father (Single)',
    'music_artist' => '<a href="/ca-si/DinoT~Y3NuX2FydGlzdH4xODc5Ng==.html">Dino.T</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  16 => 
  array (
    'cover_id' => 90608,
    'music_album' => 'Peppemood (EP)',
    'music_artist' => '<a href="/ca-si/Peppe~Y3NuX2FydGlzdH4xODc5NQ==.html">Peppe</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  17 => 
  array (
    'cover_id' => 90607,
    'music_album' => 'Everything Changes (Single)',
    'music_artist' => '<a href="/ca-si/Miyao~Y3NuX2FydGlzdH4xODc5Mw==.html">Miyao</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  18 => 
  array (
    'cover_id' => 90606,
    'music_album' => 'Zeus (Single)',
    'music_artist' => '<a href="/ca-si/Ted-Park~Y3NuX2FydGlzdH4xMzk2NA==.html">Ted Park</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  19 => 
  array (
    'cover_id' => 90605,
    'music_album' => 'Everytime, Everyday (Single)',
    'music_artist' => '<a href="/ca-si/Dinner-Coat~Y3NuX2FydGlzdH4xMzk3MQ==.html">Dinner Coat</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
);
$album_old = array (
  0 => 
  array (
    'cover_id' => 90643,
    'music_album' => 'Barcelona (Special Edition)',
    'music_artist' => '<a href="/ca-si/Montserrat-Caballe~Y3NuX2FydGlzdH4xODc0Mw==.html">Montserrat Caballe</a>, <a href="/ca-si/Freddie-Mercury~Y3NuX2FydGlzdH4xMDA0MQ==.html">Freddie Mercury</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  1 => 
  array (
    'cover_id' => 90642,
    'music_album' => 'L\'equilibrista',
    'music_artist' => '<a href="/ca-si/Pupo~Y3NuX2FydGlzdH4xODg0Mw==.html">Pupo</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  2 => 
  array (
    'cover_id' => 90641,
    'music_album' => 'Tornerò',
    'music_artist' => '<a href="/ca-si/Pupo~Y3NuX2FydGlzdH4xODg0Mw==.html">Pupo</a>, <a href="/ca-si/Petra-Magoni~Y3NuX2FydGlzdH4xODg0NQ==.html">Petra Magoni</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  3 => 
  array (
    'cover_id' => 90640,
    'music_album' => '1996',
    'music_artist' => '<a href="/ca-si/Pupo~Y3NuX2FydGlzdH4xODg0Mw==.html">Pupo</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  4 => 
  array (
    'cover_id' => 90639,
    'music_album' => 'La Mia Preghiera',
    'music_artist' => '<a href="/ca-si/Pupo~Y3NuX2FydGlzdH4xODg0Mw==.html">Pupo</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  5 => 
  array (
    'cover_id' => 90638,
    'music_album' => 'Quello Che Sono',
    'music_artist' => '<a href="/ca-si/Pupo~Y3NuX2FydGlzdH4xODg0Mw==.html">Pupo</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  6 => 
  array (
    'cover_id' => 90637,
    'music_album' => 'La Vita È Molto Di Più',
    'music_artist' => '<a href="/ca-si/Pupo~Y3NuX2FydGlzdH4xODg0Mw==.html">Pupo</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  7 => 
  array (
    'cover_id' => 90636,
    'music_album' => 'Malattia D\'Amore',
    'music_artist' => '<a href="/ca-si/Pupo~Y3NuX2FydGlzdH4xODg0Mw==.html">Pupo</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  8 => 
  array (
    'cover_id' => 90635,
    'music_album' => 'Lo Devo Solo A Te',
    'music_artist' => '<a href="/ca-si/Pupo~Y3NuX2FydGlzdH4xODg0Mw==.html">Pupo</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  9 => 
  array (
    'cover_id' => 90634,
    'music_album' => 'Più Di Prima',
    'music_artist' => '<a href="/ca-si/Pupo~Y3NuX2FydGlzdH4xODg0Mw==.html">Pupo</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  10 => 
  array (
    'cover_id' => 90631,
    'music_album' => 'Ultimate 2000s (CD4)',
    'music_artist' => '<a href="/ca-si/John-Mayer~Y3NuX2FydGlzdH43MjIw.html">John Mayer</a>, <a href="/ca-si/The-Ting-Tings~Y3NuX2FydGlzdH43NTIz.html">The Ting Tings</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  11 => 
  array (
    'cover_id' => 90630,
    'music_album' => 'Ultimate 2000s (CD3)',
    'music_artist' => '<a href="/ca-si/Toploader~Y3NuX2FydGlzdH4xODgzMw==.html">Toploader</a>, <a href="/ca-si/The-Calling~Y3NuX2FydGlzdH41NTEx.html">The Calling</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  12 => 
  array (
    'cover_id' => 90629,
    'music_album' => 'Ultimate 2000s (CD2)',
    'music_artist' => '<a href="/ca-si/Wu-Tang-Clan~Y3NuX2FydGlzdH4xMDg5OQ==.html">Wu-Tang Clan</a>, <a href="/ca-si/Chris-Brown~Y3NuX2FydGlzdH41ODg=.html">Chris Brown</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  13 => 
  array (
    'cover_id' => 90628,
    'music_album' => 'Ultimate 2000s (CD1)',
    'music_artist' => '<a href="/ca-si/Train~Y3NuX2FydGlzdH4xMjAyNw==.html">Train</a>, <a href="/ca-si/Backstreet-Boys~Y3NuX2FydGlzdH4xMTE=.html">Backstreet Boys</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  14 => 
  array (
    'cover_id' => 90627,
    'music_album' => 'Omni Sight Seeing',
    'music_artist' => '<a href="/ca-si/Haruomi-Hosono~Y3NuX2FydGlzdH4xODgyOQ==.html">Haruomi Hosono</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  15 => 
  array (
    'cover_id' => 90626,
    'music_album' => 'The Tale of Genji OST',
    'music_artist' => '<a href="/ca-si/Haruomi-Hosono~Y3NuX2FydGlzdH4xODgyOQ==.html">Haruomi Hosono</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  16 => 
  array (
    'cover_id' => 90625,
    'music_album' => 'Back Again',
    'music_artist' => '<a href="/ca-si/Pink-Turtle~Y3NuX2FydGlzdH4xODgyOA==.html">Pink Turtle</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  17 => 
  array (
    'cover_id' => 90624,
    'music_album' => 'Two',
    'music_artist' => '<a href="/ca-si/Bob-James~Y3NuX2FydGlzdH4xODgyNg==.html">Bob James</a>, <a href="/ca-si/Bob-James-feat-Patti-Austin~Y3NuX2FydGlzdH4xODgyNw==.html">Bob James (feat. Patti Austin)</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  18 => 
  array (
    'cover_id' => 90623,
    'music_album' => 'Urban Folktales',
    'music_artist' => '<a href="/ca-si/Matt-Marshak~Y3NuX2FydGlzdH4xODgyNA==.html">Matt Marshak</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
  19 => 
  array (
    'cover_id' => 90596,
    'music_album' => 'Chúc Tụng Mẹ La Vang',
    'music_artist' => '<a href="/ca-si/Phuong-Vu~Y3NuX2FydGlzdH4xODc3Mw==.html">Phượng Vũ</a>, <a href="/ca-si/Le-Uyen~Y3NuX2FydGlzdH44MzY=.html">Lê Uyên</a>',
    'music_bitrate' => '<span class="card-text" style="color: red">Lossless</span>',
  ),
);
$music_new_uploads = array (
  0 => 
  array (
    'music_id' => 1961317,
    'music_title_url' => 'tuoi-tho-con-mai~luong-chan-nam',
    'music_title' => 'Tuổi Thơ Còn Mãi',
    'music_artist' => 'Lương Chấn Nam',
    'music_artist_id' => '63599',
    'cat_id' => 3,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95617,
    'music_download_time' => 0,
    'music_last_update_time' => 1539077664,
    'music_title_search' => 'tui tho con mai',
    'music_artist_search' => '; lung chan 5;',
    'music_album_search' => 'tui tho con mai; xingle',
    'music_composer' => 'Lương Chấn Nam',
    'music_album' => 'Tuổi Thơ Còn Mãi (Single)',
    'music_listen' => 0,
    'music_track_id' => 1,
    'music_filename' => '1961317-a54343fa.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Ở 1 nơi xa xôi nào đó 
Tôi thèm nghe tiếng nói trẻ thơ 
Nghe tiếng nói của tôi 
Cùng mẹ và cha với những tiếng cười 
Ở 1 nơi xa xôi nào đó 
Từng khoảnh khắc muốn níu kéo về 
Về nơi tôi sinh ra 
Về...',
  ),
  1 => 
  array (
    'music_id' => 1961316,
    'music_title_url' => 'tuoi-tho-con-mai~luong-chan-nam',
    'music_title' => 'Tuổi Thơ Còn Mãi',
    'music_artist' => 'Lương Chấn Nam',
    'music_artist_id' => '63599',
    'cat_id' => 2,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95617,
    'music_download_time' => 0,
    'music_last_update_time' => 1539077647,
    'music_title_search' => 'tui tho con mai',
    'music_artist_search' => '; lung chan 5;',
    'music_album_search' => 'tui tho con mai; xingle',
    'music_composer' => 'Lương Chấn Nam',
    'music_album' => 'Tuổi Thơ Còn Mãi (Single)',
    'music_listen' => 0,
    'music_track_id' => 2,
    'music_filename' => '1961316-6608041f.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Ở 1 nơi xa xôi nào đó 
Tôi thèm nghe tiếng nói trẻ thơ 
Nghe tiếng nói của tôi 
Cùng mẹ và cha với những tiếng cười 
Ở 1 nơi xa xôi nào đó 
Từng khoảnh khắc muốn níu kéo về 
Về nơi tôi sinh ra 
Về...',
  ),
  2 => 
  array (
    'music_id' => 1961315,
    'music_title_url' => 'praying-for-a-hundred-days~lee-ji-hye-jang-suk-hyun-dindin-sungyeon',
    'music_title' => 'Praying For A Hundred Days',
    'music_artist' => 'Lee Ji Hye;Jang Suk Hyun;DinDin;Sungyeon',
    'music_artist_id' => '8813;122612;13673;98167',
    'cat_id' => 6,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95616,
    'music_download_time' => 0,
    'music_last_update_time' => 1539077511,
    'music_title_search' => 'praing for a hundred daix',
    'music_artist_search' => '; le ji hi; jang xuk hiun; dindin; xungion;',
    'music_album_search' => 'idol vocal league; drl xpirit ep 07; xingle',
    'music_composer' => '',
    'music_album' => 'Idol Vocal League - Girl Spirit Ep. 07 (Single)',
    'music_listen' => 0,
    'music_track_id' => 3,
    'music_filename' => '1961315-5c16400f.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Barae barae barae
Barae barae barae

Barae barae barae niga naege ogireul barae 
Barae barae barae ttan de gaji malgo whoa 
Barae barae barae eonjena gachi itgireul barae

Barae barae barae
Barae b...',
  ),
  3 => 
  array (
    'music_id' => 1961314,
    'music_title_url' => 'maybe-i-love-you-lover~chae-rina-seunghee',
    'music_title' => 'Maybe I Love You; Lover',
    'music_artist' => 'Chae Rina;Seunghee',
    'music_artist_id' => '122614;16146',
    'cat_id' => 6,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95616,
    'music_download_time' => 0,
    'music_last_update_time' => 1539077389,
    'music_title_search' => 'maibe i love iou; lover',
    'music_artist_search' => '; chae rina; xeunghe;',
    'music_album_search' => 'idol vocal league; drl xpirit ep 07; xingle',
    'music_composer' => '',
    'music_album' => 'Idol Vocal League - Girl Spirit Ep. 07 (Single)',
    'music_listen' => 0,
    'music_track_id' => 2,
    'music_filename' => '1961314-597ea8b1.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Maybe I love you
Maybe I need you
Maybe I love you saranghana bwa

Hamkke Maybe I love you 
Hamkke Maybe I need you
Hamkke Maybe I love you

Hangsang sum gappatdeon chagaun nae sale hanjulgi 
Bichi...',
  ),
  4 => 
  array (
    'music_id' => 1961313,
    'music_title_url' => 'kiss~spapa-kei',
    'music_title' => 'Kiss',
    'music_artist' => 'Spapa;Kei',
    'music_artist_id' => '122616;2868',
    'cat_id' => 6,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95616,
    'music_download_time' => 0,
    'music_last_update_time' => 1539077519,
    'music_title_search' => 'kix',
    'music_artist_search' => '; xpapa; kei;',
    'music_album_search' => 'idol vocal league; drl xpirit ep 07; xingle',
    'music_composer' => '',
    'music_album' => 'Idol Vocal League - Girl Spirit Ep. 07 (Single)',
    'music_listen' => 0,
    'music_track_id' => 1,
    'music_filename' => '1961313-418c4f0f.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Geunyeoui geomeun meoritgyeoreun jeongmal 
Naneun saranghaji aneul suga eopseosseo 
Geuraeseo ppajyeo beoryeotji 
Jidokan geu sarang soge ppajigo man geoya
Geunyeoui yeppeun du nuni dallyeowaseo 
N...',
  ),
  5 => 
  array (
    'music_id' => 1961312,
    'music_title_url' => 'qua-khu-hom-qua~luong-chan-nam',
    'music_title' => 'Quá Khứ Hôm Qua',
    'music_artist' => 'Lương Chấn Nam',
    'music_artist_id' => '63599',
    'cat_id' => 3,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95615,
    'music_download_time' => 0,
    'music_last_update_time' => 1539076971,
    'music_title_search' => 'qua khu hom qua',
    'music_artist_search' => '; lung chan 5;',
    'music_album_search' => 'du em khong mun; xingle',
    'music_composer' => 'Lâm Nguyên',
    'music_album' => 'Dù Anh Không Muốn (Single)',
    'music_listen' => 0,
    'music_track_id' => 2,
    'music_filename' => '1961312-5342043b.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Có những nỗi nhớ rung động mãi không thể quên.. 
Có những nỗi buồn không làm sao xoá hết. 
Nhớ những lúc xưa đôi mình 

Giận nhau em hay trách anh vô tình, 
Vì sao không đến bên dỗ dành để cho em...',
  ),
  6 => 
  array (
    'music_id' => 1961311,
    'music_title_url' => 'du-anh-khong-muon~luong-chan-nam',
    'music_title' => 'Dù Anh Không Muốn',
    'music_artist' => 'Lương Chấn Nam',
    'music_artist_id' => '63599',
    'cat_id' => 3,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95615,
    'music_download_time' => 0,
    'music_last_update_time' => 1539076935,
    'music_title_search' => 'du em khong mun',
    'music_artist_search' => '; lung chan 5;',
    'music_album_search' => 'du em khong mun; xingle',
    'music_composer' => 'Phạm Văn Chương; Lương Chấn Nam',
    'music_album' => 'Dù Anh Không Muốn (Single)',
    'music_listen' => 0,
    'music_track_id' => 1,
    'music_filename' => '1961311-d01d8f4a.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Chiều hoàng hôn nắng nhẹ buông 
Màn đêm cũng dần buông xuống 
A lại viết nỗi nhớ về e 
Cố dằn vặt trong tiềm thức 
Chia tay dù chẳng ai muốn 
Là đàn ông sao giọt lệ cứ tuôn 

Khóc hay buồn gì cũng...',
  ),
  7 => 
  array (
    'music_id' => 1961310,
    'music_title_url' => 'mom~oh-seung-hee-kim-bo-hyung',
    'music_title' => 'Mom',
    'music_artist' => 'Oh Seung Hee;Kim Bo Hyung',
    'music_artist_id' => '122618;90015',
    'cat_id' => 6,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95614,
    'music_download_time' => 0,
    'music_last_update_time' => 1539077080,
    'music_title_search' => 'mom',
    'music_artist_search' => '; oh xeung he; kim bo hiung;',
    'music_album_search' => 'idol vocal league; drl xpirit ep 06; xingle',
    'music_composer' => '',
    'music_album' => 'Idol Vocal League - Girl Spirit Ep. 06 (Single)',
    'music_listen' => 0,
    'music_track_id' => 3,
    'music_filename' => '1961310-08aeb320.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Cheoeum dangsineul mannatjyo
Mannaja maja ureotjyo
Gippeoseo geuraenneunji
Seulpeoseo geuraenneunji
Gieokdo naji anneyo
Deuril geosi eopseotgie
Geujeo batgiman haetjyo
Geureogodo geuttaen
Gomaumeul...',
  ),
  8 => 
  array (
    'music_id' => 1961309,
    'music_title_url' => 'twinkle-something~uji-kei',
    'music_title' => 'Twinkle; Something',
    'music_artist' => 'UJi;Kei',
    'music_artist_id' => '122620;2868',
    'cat_id' => 6,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95614,
    'music_download_time' => 0,
    'music_last_update_time' => 1539076954,
    'music_title_search' => 'twinkle; xomething',
    'music_artist_search' => '; uji; kei;',
    'music_album_search' => 'idol vocal league; drl xpirit ep 06; xingle',
    'music_composer' => '',
    'music_album' => 'Idol Vocal League - Girl Spirit Ep. 06 (Single)',
    'music_listen' => 0,
    'music_track_id' => 2,
    'music_filename' => '1961309-cc39d6fd.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Sumgyeodo twinkle eojjeona 
Nune hwak ttuijana 
Beire ssayeo isseodo 
Naneun twinkle tiga na

Sumgyeodo twinkle eojjeona 
Nune hwak ttuijana 
Beire ssayeo isseodo 
Naneun twinkle tiga na

Ttan sara...',
  ),
  9 => 
  array (
    'music_id' => 1961308,
    'music_title_url' => '24-hours-nonono~seunghee-sojeung',
    'music_title' => '24 Hours; NoNoNo',
    'music_artist' => 'Seunghee;Sojeung',
    'music_artist_id' => '16146;122622',
    'cat_id' => 6,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95614,
    'music_download_time' => 0,
    'music_last_update_time' => 1539076907,
    'music_title_search' => '24 hourx; nonono',
    'music_artist_search' => '; xeunghe; xojeung;',
    'music_album_search' => 'idol vocal league; drl xpirit ep 06; xingle',
    'music_composer' => '',
    'music_album' => 'Idol Vocal League - Girl Spirit Ep. 06 (Single)',
    'music_listen' => 0,
    'music_track_id' => 1,
    'music_filename' => '1961308-368620af.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Sigani neomuna ppalli ga 
Neowaui haruga ilbun gata 
Nan michil geot gata 

Neoege gal ttaeneun dallyeoga 
Tteonaya hal ttaeneun bari anga 
Tteoreojijil ana

(neol bogo isseumyeon) 
Modeun geol da...',
  ),
  10 => 
  array (
    'music_id' => 1961307,
    'music_title_url' => 'woo-ah~jinsol',
    'music_title' => 'Woo Ah',
    'music_artist' => 'Jinsol',
    'music_artist_id' => '13679',
    'cat_id' => 6,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95613,
    'music_download_time' => 0,
    'music_last_update_time' => 1539076656,
    'music_title_search' => 'wo ah',
    'music_artist_search' => '; jinxol;',
    'music_album_search' => 'idol vocal league; drl xpirit ep 05; xingle',
    'music_composer' => '',
    'music_album' => 'Idol Vocal League - Girl Spirit Ep. 05 (Single)',
    'music_listen' => 0,
    'music_track_id' => 3,
    'music_filename' => '1961307-0ce5affe.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Ua ua uahae
Ua ua uahae ua ua uahae
Ua ua 

Nareunhaeyo geudae gyeote isseul ttae 
Konnorael bureuge haejuneyo 
Neomu areumdawo hwanhage unneun 
Geu moseubeun nuni busige
Malgeun haetsal gatayo nal...',
  ),
  11 => 
  array (
    'music_id' => 1961306,
    'music_title_url' => 'across-the-universe~flowsik-kim-bo-hyung',
    'music_title' => 'Across The Universe',
    'music_artist' => 'Flowsik;Kim Bo Hyung',
    'music_artist_id' => '25543;90015',
    'cat_id' => 6,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95613,
    'music_download_time' => 0,
    'music_last_update_time' => 1539076603,
    'music_title_search' => 'acrox the univerxe',
    'music_artist_search' => '; flowxik; kim bo hiung;',
    'music_album_search' => 'idol vocal league; drl xpirit ep 05; xingle',
    'music_composer' => '',
    'music_album' => 'Idol Vocal League - Girl Spirit Ep. 05 (Single)',
    'music_listen' => 0,
    'music_track_id' => 2,
    'music_filename' => '1961306-6cf1b750.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Neowa na saiui ujureul geonneo 
Naegero would you 
Like to come over to me
Neowa na saiui ujureul geonneo 
Naegero nara wajwo 
Deo isang gidarige haji ma

Would you like to come over to me 
Would y...',
  ),
  12 => 
  array (
    'music_id' => 1961305,
    'music_title_url' => 'i-dont-love-you~sojeong',
    'music_title' => 'I Don\'t Love You',
    'music_artist' => 'Sojeong',
    'music_artist_id' => '121020',
    'cat_id' => 6,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95613,
    'music_download_time' => 0,
    'music_last_update_time' => 1539076532,
    'music_title_search' => 'i don t love iou',
    'music_artist_search' => '; xojeong;',
    'music_album_search' => 'idol vocal league; drl xpirit ep 05; xingle',
    'music_composer' => '',
    'music_album' => 'Idol Vocal League - Girl Spirit Ep. 05 (Single)',
    'music_listen' => 0,
    'music_track_id' => 1,
    'music_filename' => '1961305-4f68555f.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Museun mareul halkka 
Eodiseobuteo eotteoke
Gogaeman tteolguneun na 
Geureon nal baraboneun neo 
Geu eosaekan chimmuk 
Neol saranghaji ana 
Neodo algo itgetjiman 
Nunmul heullineun neoui moseubedo...',
  ),
  13 => 
  array (
    'music_id' => 1961304,
    'music_title_url' => 'yeu-em-tung-phut-giay~luong-chan-nam',
    'music_title' => 'Yêu Em Từng Phút Giây',
    'music_artist' => 'Lương Chấn Nam',
    'music_artist_id' => '63599',
    'cat_id' => 2,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 42774,
    'music_download_time' => 0,
    'music_last_update_time' => 1539076128,
    'music_title_search' => 'iu em tung phut dai',
    'music_artist_search' => '; lung chan 5;',
    'music_album_search' => 'iu em tung phut dai; xingle',
    'music_composer' => 'Lương Chấn Nam',
    'music_album' => 'Yêu Em Từng Phút Giây (Single)',
    'music_listen' => 0,
    'music_track_id' => 4,
    'music_filename' => '1961304-752b3fb1.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Khi ánh bình minh này sớm mai thức dậy
Anh muốn cùng em nhặt chiếc lá thu rơi
Đếm dòng thời gian ngày tháng năm qua dần
Cùng nhau đi đến nơi phía xa chân trời.

Anh muốn cùng em đi trên con đường d...',
  ),
  14 => 
  array (
    'music_id' => 1961303,
    'music_title_url' => 'khuc-hat-cho-em~luong-chan-nam',
    'music_title' => 'Khúc Hát Cho Em',
    'music_artist' => 'Lương Chấn Nam',
    'music_artist_id' => '63599',
    'cat_id' => 2,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 42774,
    'music_download_time' => 0,
    'music_last_update_time' => 1539076114,
    'music_title_search' => 'khuc hat cho em',
    'music_artist_search' => '; lung chan 5;',
    'music_album_search' => 'iu em tung phut dai; xingle',
    'music_composer' => 'Lương Chấn Nam',
    'music_album' => 'Yêu Em Từng Phút Giây (Single)',
    'music_listen' => 0,
    'music_track_id' => 3,
    'music_filename' => '1961303-428b8252.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Anh muốn là người mang cho em nụ cười vào mỗi sớm mai
Anh muốn là người chăm sóc em suốt đời ôm chặt em với giấc mơ đêm
Anh sẽ mãi luôn ở bên chở che dù đời có bao ngàn khó khăn
Và anh hứa sẽ mãi l...',
  ),
  15 => 
  array (
    'music_id' => 1961302,
    'music_title_url' => 'camellia-lady~soyeon',
    'music_title' => 'Camellia Lady',
    'music_artist' => 'Soyeon',
    'music_artist_id' => '14760',
    'cat_id' => 6,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95612,
    'music_download_time' => 0,
    'music_last_update_time' => 1539076236,
    'music_title_search' => 'camelia ladi',
    'music_artist_search' => '; xoion;',
    'music_album_search' => 'idol vocal league; drl xpirit ep 03; xingle',
    'music_composer' => '',
    'music_album' => 'Idol Vocal League - Girl Spirit Ep. 03 (Single)',
    'music_listen' => 0,
    'music_track_id' => 3,
    'music_filename' => '1961302-a0c62a71.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Heil su eopsi sumaneun bameul 
Nae gaseum doryeonaeneun apeume gyeowo 
Eolmana ureotdeonga dongbaek agassi 

Geuriume jichyeoseo ulda jichyeoseo 
Kkochipeun ppalgake meongi deureotso 

Dongbaekkkoc...',
  ),
  16 => 
  array (
    'music_id' => 1961301,
    'music_title_url' => 'the-unwritten-legend~kim-bo-hyung',
    'music_title' => 'The Unwritten Legend',
    'music_artist' => 'Kim Bo Hyung',
    'music_artist_id' => '90015',
    'cat_id' => 6,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95612,
    'music_download_time' => 0,
    'music_last_update_time' => 1539076155,
    'music_title_search' => 'the unwriten legend',
    'music_artist_search' => '; kim bo hiung;',
    'music_album_search' => 'idol vocal league; drl xpirit ep 03; xingle',
    'music_composer' => '',
    'music_album' => 'Idol Vocal League - Girl Spirit Ep. 03 (Single)',
    'music_listen' => 0,
    'music_track_id' => 2,
    'music_filename' => '1961301-316bfb8f.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Geoul sogui geudae moseubeul 
Barabon jeok inneunga
Bukkeureopji aneun salinga 
Tteugeoun nunmul heullyeobon jeok eonjenga
Nugul wihae sarawanneunga 
Yeogin jigeum eodinga
Eoril jeok geudaeui kkumd...',
  ),
  17 => 
  array (
    'music_id' => 1961300,
    'music_title_url' => 'i-have-nothing~uji',
    'music_title' => 'I Have Nothing',
    'music_artist' => 'UJi',
    'music_artist_id' => '122620',
    'cat_id' => 6,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 95612,
    'music_download_time' => 0,
    'music_last_update_time' => 1539076248,
    'music_title_search' => 'i have nothing',
    'music_artist_search' => '; uji;',
    'music_album_search' => 'idol vocal league; drl xpirit ep 03; xingle',
    'music_composer' => '',
    'music_album' => 'Idol Vocal League - Girl Spirit Ep. 03 (Single)',
    'music_listen' => 0,
    'music_track_id' => 1,
    'music_filename' => '1961300-54b60c3f.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Share my life 
Take me for what I am	
Cause I\'ll never change all my colors for you
Take my love
I\'ll never ask for too much
Just all that you are
And everything that you do

I don\'t really need to...',
  ),
  18 => 
  array (
    'music_id' => 1961296,
    'music_title_url' => 'a-friend-like-you~andy-grammer',
    'music_title' => 'A Friend Like You',
    'music_artist' => 'Andy Grammer',
    'music_artist_id' => '13789',
    'cat_id' => 4,
    'cat_level' => 1,
    'cat_sublevel' => 1,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1539075247,
    'music_title_search' => 'a frind like iou',
    'music_artist_search' => '; andi gramer;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1961296-314a8a58.mp3',
    'music_bitrate' => 320,
    'music_shortlyric' => '[Verse 1]
Right from the start, couldn\'t pull us apart, it just works
Nobody else ever gets me as well on this earth
Like rock and roll, Marshall\'s and telly\'s
Mac and cheese, PB\'s and jellies
Some...',
  ),
  19 => 
  array (
    'music_id' => 1961295,
    'music_title_url' => 'secret-time~spica',
    'music_title' => 'Secret Time',
    'music_artist' => 'Spica',
    'music_artist_id' => '3923',
    'cat_id' => 2,
    'cat_level' => 4,
    'cat_sublevel' => 2,
    'cat_custom' => 0,
    'cover_id' => 95611,
    'music_download_time' => 0,
    'music_last_update_time' => 1539075217,
    'music_title_search' => 'xecret time',
    'music_artist_search' => '; xpica;',
    'music_album_search' => 'xecret time; xingle',
    'music_composer' => '',
    'music_album' => 'Secret Time (Single)',
    'music_listen' => 0,
    'music_track_id' => 3,
    'music_filename' => '1961295-cb663f96.mp3',
    'music_bitrate' => 1000,
    'music_shortlyric' => 'Secret Time
We don\'t need you boy ah
What do you want
Eoneu ttaeboda deo deo eunmilhan 
Bimilseureongeol deo wonhae
This is real 
Han yeoreum bamui 
Kkumeun No kkumeun No
Ppuyeon yeongi sogeun 
Nar...',
  ),
);   
$video_new_uploads = array (
  0 => 
  array (
    'music_id' => 1961073,
    'music_title_url' => 'doi-cho~phuong-trang',
    'music_title' => 'Đợi Chờ',
    'music_artist' => 'Phương Trăng',
    'music_artist_id' => '122634',
    'cat_id' => 1,
    'cat_level' => 1,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 1539078321,
    'music_last_update_time' => 1539069935,
    'music_title_search' => 'doi cho',
    'music_artist_search' => '; phung chang;',
    'music_album_search' => '',
    'music_composer' => 'Phạm Đình Chương - Nhật Bằng',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1961073-db5d44fe.mp4',
    'music_bitrate' => 192,
    'music_shortlyric' => 'Trăng lắng sâu vào đêm đợi chờ. 
Đêm thế gian quạnh khô mịt mờ. 
Như ném ai vào cõi bơ vơ. 
Nhưng vẫn chưa tìm thấy người mơ. 

Ta đi ngóng trông em, 
trong tiếng đêm dài ... tan. 
Ngàn tơ vàng chì...',
  ),
  1 => 
  array (
    'music_id' => 1961026,
    'music_title_url' => 'you-in-my-eyes-special-edition~snuper',
    'music_title' => 'You In My Eyes (Special Edition)',
    'music_artist' => 'Snuper',
    'music_artist_id' => '13927',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1539062189,
    'music_title_search' => 'iou in mi eix; xpecial edition',
    'music_artist_search' => '; xnuper;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 6,
    'music_filename' => '1961026-a414c5d5.mp4',
    'music_bitrate' => 192,
    'music_shortlyric' => 'Nae nuneneun niga
Eonjebuteonga niga
Naege deureowa hansungan
Hollyeo beorin gibune hwangholhae
Ne saenggage meomchul suga eopseo
Geuraegeurae gachi isseum eoreum
Ttan namja gyeonggyehae nan tto bu...',
  ),
  2 => 
  array (
    'music_id' => 1961019,
    'music_title_url' => 'truong-ca-hoi-trung-duong~le-uyen-hue-thy-bich-dao',
    'music_title' => 'Trường Ca Hội Trùng Dương',
    'music_artist' => 'Lê Uyên;Huệ Thy;Bích Đào',
    'music_artist_id' => '836;14608;14605',
    'cat_id' => 1,
    'cat_level' => 1,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1539056225,
    'music_title_search' => 'chung ca hoi chung dung',
    'music_artist_search' => '; le in; hue thi; bich dao;',
    'music_album_search' => '',
    'music_composer' => 'Phạm Đình Chương',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1961019-d8f66834.mp4',
    'music_bitrate' => 96,
    'music_shortlyric' => '1. Tiếng Sông Hồng 
2. Tiếng Sông Hương 
3. Tiếng Cửu Long',
  ),
  3 => 
  array (
    'music_id' => 1960828,
    'music_title_url' => 'renai-circulation~kana-hanazawa',
    'music_title' => 'Renai Circulation',
    'music_artist' => 'Kana Hanazawa',
    'music_artist_id' => '14738',
    'cat_id' => 1,
    'cat_level' => 5,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 1539067796,
    'music_last_update_time' => 1538995373,
    'music_title_search' => 'renai circulation',
    'music_artist_search' => '; kana hanazawa;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 108,
    'music_track_id' => 0,
    'music_filename' => '1960828-243e6e3f.mp4',
    'music_bitrate' => 192,
    'music_shortlyric' => '(se~ no!)

Demo sonnan ja dame
Mou sonnan ja hora
Kokoro wa shinka suru yo
Motto motto

Kotoba ni sureba kiechau kankei nara
Kotoba wo keseba ii ya tte
Omotteta? Osoreteta?
Dakedo are? Nanka chigau...',
  ),
  4 => 
  array (
    'music_id' => 1960817,
    'music_title_url' => 'dung-dien-gia~loren-kid-ho-gia-hung',
    'music_title' => 'Đừng Diễn Giả',
    'music_artist' => 'Loren Kid;Hồ Gia Hùng',
    'music_artist_id' => '2278;16665',
    'cat_id' => 1,
    'cat_level' => 1,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538992442,
    'music_title_search' => 'dung din da',
    'music_artist_search' => '; loren kid; ho da hung;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 7,
    'music_track_id' => 0,
    'music_filename' => '1960817-8dea063d.mp4',
    'music_bitrate' => 96,
    'music_shortlyric' => 'Em à, cái điều mà khó nhất trên đời này là mình phải đi vá 1 trái tim mà mình ko phải là người làm ...',
  ),
  5 => 
  array (
    'music_id' => 1960802,
    'music_title_url' => 'one-more-time-otra-vez~reik-super-junior',
    'music_title' => 'One More Time (Otra Vez)',
    'music_artist' => 'Reik;Super Junior',
    'music_artist_id' => '23423;213',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 1539077910,
    'music_last_update_time' => 1538995948,
    'music_title_search' => '1 more time; ocha vez',
    'music_artist_search' => '; reik; xuper junior;',
    'music_album_search' => '',
    'music_composer' => 'Znee; Pablo Preciado; Andreas Stone Johansson; Denniz Jamm; Rudi \'Rudy\' Daouk; Jakob \'Jay\' Mihoubi; Button Pushers',
    'music_album' => '',
    'music_listen' => 464,
    'music_track_id' => 6,
    'music_filename' => '1960802-f5164ad2.mp4',
    'music_bitrate' => 192,
    'music_shortlyric' => 'Baby nareul tteonajima nega eopsin
Amugeotdo anin i bameun an doegesseo nan
Neukkyeojineun geol sechage ttwigo inneun
Sarangui heunjeok nal ttokbaro bwa
Jeo bulkkotcheoreom taneun nae nunbit
Tteuge...',
  ),
  6 => 
  array (
    'music_id' => 1960781,
    'music_title_url' => 'anh-di-chien-dich~the-son',
    'music_title' => 'Anh Đi Chiến Dịch',
    'music_artist' => 'Thế Sơn',
    'music_artist_id' => '5254',
    'cat_id' => 1,
    'cat_level' => 1,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 1539049694,
    'music_last_update_time' => 1538982421,
    'music_title_search' => 'em di chin dich',
    'music_artist_search' => '; the xon;',
    'music_album_search' => '',
    'music_composer' => 'Phạm Đình Chương',
    'music_album' => '',
    'music_listen' => 14,
    'music_track_id' => 0,
    'music_filename' => '1960781-3bef35f0.mp4',
    'music_bitrate' => 128,
    'music_shortlyric' => 'Anh đi chiến dịch xa vời, lòng súng nhân đạo cứu người lầm than 
Thương dân nghèo ruộng hoang cỏ cháy 
Thấy nỗi xót xa của kiếp đoạ đầy anh đi. 

Không quên lời xưa đã ước thề, dâng cả đời trai với...',
  ),
  7 => 
  array (
    'music_id' => 1960752,
    'music_title_url' => 'i-cant-find-you~hoaprox-ftbel-red',
    'music_title' => 'I CAN\'T FIND YOU',
    'music_artist' => 'HOAPROX ft.Bel Red',
    'music_artist_id' => '122638',
    'cat_id' => 1,
    'cat_level' => 2,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 1539013313,
    'music_last_update_time' => 1538976527,
    'music_title_search' => 'i can t find iou',
    'music_artist_search' => '; hoaprox ft bel red;',
    'music_album_search' => '',
    'music_composer' => 'HOAPROX',
    'music_album' => '',
    'music_listen' => 211,
    'music_track_id' => 0,
    'music_filename' => '1960752-15803f8d.mp4',
    'music_bitrate' => 96,
    'music_shortlyric' => 'Oh ye!… Oh ye!… Oh ye!…eh.eh.eh.eh.eh!
I can\'t find you!!!!!!!!!

Sailing Sailing on the sea deep in my brain
I can\'t find where I gotta go
Do you know from that day I\'ve got insane
The pain remind...',
  ),
  8 => 
  array (
    'music_id' => 1960670,
    'music_title_url' => 'dung-hoai-nghi-anh-nhe~bao-han',
    'music_title' => 'Đừng Hoài Nghi Anh Nhé',
    'music_artist' => 'Bảo Hân',
    'music_artist_id' => '967',
    'cat_id' => 1,
    'cat_level' => 1,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538913428,
    'music_title_search' => 'dung hoai nghi em nhe',
    'music_artist_search' => '; bao han;',
    'music_album_search' => '',
    'music_composer' => 'Lời: Nguyễn Ngọc Thiện',
    'music_album' => '',
    'music_listen' => 24,
    'music_track_id' => 0,
    'music_filename' => '1960670-cb3ec338.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '1. Nhớ, đừng hoài nghi, em như thế 
Dẫu quanh em, nhiêu kẻ si tình 
Em lơ đãng, trước bao lời bướm hoa 
Vì, em luôn có bóng anh, soi sáng, đêm dài. 

[ĐK:]
Mong anh đừng nghĩ sai, cho tình ta chóng...',
  ),
  9 => 
  array (
    'music_id' => 1960663,
    'music_title_url' => 'dangerous-american-music-awards-1993~michael-jackson',
    'music_title' => 'Dangerous (American Music Awards 1993)',
    'music_artist' => 'Michael Jackson',
    'music_artist_id' => '1510',
    'cat_id' => 1,
    'cat_level' => 2,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 1538994849,
    'music_last_update_time' => 1538909152,
    'music_title_search' => 'dangeroux; american muxic awardx 193',
    'music_artist_search' => '; michael jackxon;',
    'music_album_search' => '',
    'music_composer' => 'Michael Jackson',
    'music_album' => '',
    'music_listen' => 556,
    'music_track_id' => 0,
    'music_filename' => '1960663-c1a58e00.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '[Spoken Intro]
The way she came into the place
I knew right then and there
There was something different
About this girl

The way she moved
Her hair, her face, her lines
Divinity in motion

As she...',
  ),
  10 => 
  array (
    'music_id' => 1960628,
    'music_title_url' => 'shes-in-the-rain-sbs-inkigayo-07102018~the-rose',
    'music_title' => 'She\'s In The Rain (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'The Rose',
    'music_artist_id' => '21913',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538904410,
    'music_title_search' => 'the x in the rain; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; the roxe;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 4,
    'music_track_id' => 0,
    'music_filename' => '1960628-8be406fc.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Do you hear me
[t2]Do you hear me
[t1]Người có nghe thấy lời tôi nói không?

회색빛 안개 덮인
[t2]Hoesaekbit angae deopin
[t1]Không gian bị bao trùm bởi màn khói sương màu xám

Gloomy day
[t2]Gloomy day
[...',
  ),
  11 => 
  array (
    'music_id' => 1960627,
    'music_title_url' => 'your-difference-sbs-inkigayo-07102018~lucente',
    'music_title' => 'Your Difference (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'Lucente',
    'music_artist_id' => '122726',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538904277,
    'music_title_search' => 'iour diference; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; lucente;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 5,
    'music_track_id' => 0,
    'music_filename' => '1960627-4cc4c455.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Nalssiga byeolloyeonneunji 
Gibuni an joeun geonji
Oneulttara eomneun useumgie 
Naega mwol jalmothan geonji
Keopineun jeokdanghi masyeonneunde 
Dodaeche museun il itdeongeonde
Neo ttaemune jami an...',
  ),
  12 => 
  array (
    'music_id' => 1960626,
    'music_title_url' => 'all-my-days-sbs-inkigayo-07102018~seo-ji-an',
    'music_title' => 'All My Days (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'Seo Ji An',
    'music_artist_id' => '122727',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538904160,
    'music_title_search' => 'al mi daix; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; xeo ji an;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 3,
    'music_track_id' => 0,
    'music_filename' => '1960626-4d943b8a.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Achimimyeon ttasaroun haetsare
Hamkke nun tteo misoreul jitgo
Jichin jeonyeogen sugohan haru
Pume ana swige hal saram
Himdeun naren seoroege gidaeeo
Gwaenchantago dodangnyeojumyeo
Nae saengui modeu...',
  ),
  13 => 
  array (
    'music_id' => 1960625,
    'music_title_url' => 'lullaby-sbs-inkigayo-07102018~got7',
    'music_title' => 'Lullaby (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'GOT7',
    'music_artist_id' => '4464',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538904062,
    'music_title_search' => 'lulabi; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; got7;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 7,
    'music_track_id' => 0,
    'music_filename' => '1960625-3ba66a32.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '한낮에 꾸는 꿈
[t2]Hannaje kkuneun kkum
[t1]Một giấc mộng giữa ban ngày

믿기지 않을 뿐
[t2]Mitgiji aneul ppun
[t1]Mà đến chính tôi cũng không thể tin được

여전히 난 거짓말 같아
[t2]Yeojeonhi nan geojinmal gata
[t1]Dư...',
  ),
  14 => 
  array (
    'music_id' => 1960624,
    'music_title_url' => 'into-you-sbs-inkigayo-07102018~yuri',
    'music_title' => 'Into You (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'Yuri',
    'music_artist_id' => '4627',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 1538974259,
    'music_last_update_time' => 1538904059,
    'music_title_search' => 'into iou; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; iuri;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 59,
    'music_track_id' => 0,
    'music_filename' => '1960624-11d8cdba.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '더 빠져가 깊이 너와 나 같이
[t2]Deo ppajyeoga gipi neowa na gachi
[t1]Đắm chìm sâu hơn vào thứ tình cảm này, anh cùng với em

빠져가 깊이 너와 나 같이
[t2]Ppajyeoga gipi neowa na gachi
[t1]Ta say mê nhau đậm sâu hơn, a...',
  ),
  15 => 
  array (
    'music_id' => 1960623,
    'music_title_url' => 'illusion-sbs-inkigayo-07102018~yuri',
    'music_title' => 'Illusion (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'Yuri',
    'music_artist_id' => '4627',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538904056,
    'music_title_search' => 'iluxion; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; iuri;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 6,
    'music_track_id' => 0,
    'music_filename' => '1960623-f4160921.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Jinjjain cheokaji ma 
Neol garyeonaegi beokcha nan nan 
Ontong yesang bakkiya 
Ansimhal su eopjana ah 
Simjangi ppalli ttwineun geon mwoni 
Haneureul mak naldagado 
Kkeutdo eopsi tteoreojyeo tto 
E...',
  ),
  16 => 
  array (
    'music_id' => 1960622,
    'music_title_url' => 'save-me-save-you-sbs-inkigayo-07102018~cosmic-girls',
    'music_title' => 'Save Me, Save You (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'Cosmic Girls',
    'music_artist_id' => '15071',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 1539062039,
    'music_last_update_time' => 1538904052,
    'music_title_search' => 'xave me xave iou; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; coxmic drlx;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 91,
    'music_track_id' => 0,
    'music_filename' => '1960622-4dbe1d59.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '부탁해 너의 얘길 들려줄래
[t2]Butakhae neoui yaegil deullyeojullae
[t1]Có thể hay không, kể cho em nghe về chuyện đời anh

알고 싶어 그래
[t2]Algo sipeo geurae
[t1]Vì em muốn biết về những câu chuyện đó

네가 내게 그랬듯...',
  ),
  17 => 
  array (
    'music_id' => 1960620,
    'music_title_url' => 'what-sbs-inkigayo-07102018~dreamcatcher',
    'music_title' => 'What (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'Dreamcatcher',
    'music_artist_id' => '15016',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 1538975284,
    'music_last_update_time' => 1538903531,
    'music_title_search' => 'what; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; dreamcatcher;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 49,
    'music_track_id' => 0,
    'music_filename' => '1960620-674aa8e8.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'What What What
[t2]What What What
[t1]What What What

What What 
[t2]What What 
[t1]What What

깨어나지 못한 깊어진 Lucid Dream
[t2]Kkaeeonaji mothan gipeojin Lucid Dream
[t1]Thật khó để có thể tỉnh dậy và...',
  ),
  18 => 
  array (
    'music_id' => 1960619,
    'music_title_url' => 'right-here-sbs-inkigayo-07102018~the-boyz',
    'music_title' => 'Right Here (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'The Boyz',
    'music_artist_id' => '19380',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538903528,
    'music_title_search' => 'right here; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; the boiz;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 4,
    'music_track_id' => 0,
    'music_filename' => '1960619-6a20adae.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'THE BOYZ you got it right
Jigeum my time
Right here appear
Aye bigyodo andwae boyeojul tenikka
Alright get it got it
Come and find me jigeum i jarin
My zone THE BOYZ is right here
Pihal su eopseo N...',
  ),
  19 => 
  array (
    'music_id' => 1960618,
    'music_title_url' => 'decrescendo-sbs-inkigayo-07102018~soyou',
    'music_title' => 'Decrescendo (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'Soyou',
    'music_artist_id' => '15704',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 1538926496,
    'music_last_update_time' => 1538903282,
    'music_title_search' => 'decrexcendo; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; xoiou;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 53,
    'music_track_id' => 0,
    'music_filename' => '1960618-f038e9fc.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Modeun ge da mugiryeokaejyeo
Deo byeonhaeganeun neoreul bomyeon
Nae gyeote niga itdaneun ge deo oerowo
Nal geokjeonghadeon neoui jansoriga
Naui harureul gunggeumhae hadeon
Neoui gwansimi
Nan yeojeo...',
  ),
  20 => 
  array (
    'music_id' => 1960617,
    'music_title_url' => 'all-night-sbs-inkigayo-07102018~sik-k-soyou',
    'music_title' => 'All Night (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'Sik-K;Soyou',
    'music_artist_id' => '16384;15704',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538903135,
    'music_title_search' => 'al night; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; xik k; xoiou;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 2,
    'music_track_id' => 0,
    'music_filename' => '1960617-55f9144b.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '다가온 어둠 사이 사이로
[t2]Dagaon eodum sai sairo
[t1]Giữa bóng đêm đang dần đến gần

숨죽여 조심 조심 내게로 와
[t2]Sumjungnyeo josim josim naegero wa
[t1]Nín thở và thận trọng tiến đến gần bên em

적당히 달아오른 분위기
[t2]J...',
  ),
  21 => 
  array (
    'music_id' => 1960615,
    'music_title_url' => 'puzzle-moon-sbs-inkigayo-07102018~gwsn',
    'music_title' => 'Puzzle Moon (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'GWSN',
    'music_artist_id' => '23324',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538903046,
    'music_title_search' => 'puzle mon; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; gwxn;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 4,
    'music_track_id' => 0,
    'music_filename' => '1960615-6163bcf2.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '조급해 하지 않을게
[t2]Jogeuphae haji aneulge
[t1]Em sẽ không quá vội vã đâu

천천히 널 드러내줘
[t2]Cheoncheonhi neol deureonaejwo
[t1]Hãy chầm chậm bộc lộ về bản thân anh đi

수천 개의 너에게서
[t2]Sucheon gaeui neoeges...',
  ),
  22 => 
  array (
    'music_id' => 1960614,
    'music_title_url' => 'maemmaeya-sbs-inkigayo-07102018~purple',
    'music_title' => 'Maemmaeya (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'Purple',
    'music_artist_id' => '36881',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538903043,
    'music_title_search' => 'maemaeia; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; purple;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 5,
    'music_track_id' => 0,
    'music_filename' => '1960614-44e86335.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Ah Ah ai ssuinna
Mae mae mae maem maemmaeya
Ah Ah ai ssuinna
Jeoldaero kaldapjangeun NOPE
Neul yakgan bappeuncheok
Milgodanggigineun pilsurae
Oh eonniui kkultip
Seonggeupan deiteuneun NOPE
Neul seu...',
  ),
  23 => 
  array (
    'music_id' => 1960613,
    'music_title_url' => 'naughty-boy-sbs-inkigayo-07102018~pentagon',
    'music_title' => 'Naughty Boy (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'Pentagon',
    'music_artist_id' => '14095',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538902760,
    'music_title_search' => 'naughti boi; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; pentagon;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 18,
    'music_track_id' => 0,
    'music_filename' => '1960613-9f1b5ec1.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '오 더하기 오는 구구
[t2]O deohagi oneun gugu
[t1]Năm cộng năm là &quot;cục tác&quot;

개 짖는 소리는 꿀꿀
[t2]Gae jinneun sorineun kkulkkul
[t1]Chó sủa &quot;ụt ịt&quot;

시끄럽다 하면 눈누난나
[t2]Sikkeureopda hamyeon nunn...',
  ),
  24 => 
  array (
    'music_id' => 1960612,
    'music_title_url' => 'remember-me-sbs-inkigayo-07102018~oh-my-girl',
    'music_title' => 'Remember Me (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'Oh My Girl',
    'music_artist_id' => '17169',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538902654,
    'music_title_search' => 'remember me; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; oh mi drl;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 7,
    'music_track_id' => 0,
    'music_filename' => '1960612-3d0da414.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Remember me do you remember me
[t2]Remember me do you remember me
[t1]Nhớ đến em, anh có còn nhớ đến em không?

날 바라보던 너의 눈에 비친
[t2]Nal barabodeon neoui nune bichin
[t1]Hình ảnh phản chiếu của em t...',
  ),
  25 => 
  array (
    'music_id' => 1960611,
    'music_title_url' => 'goodbye-road-sbs-inkigayo-07102018~ikon',
    'music_title' => 'Goodbye Road (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'iKON',
    'music_artist_id' => '14359',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538902522,
    'music_title_search' => 'godbi road; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; ikon;',
    'music_album_search' => '',
    'music_composer' => 'B.I; Bobby; Future Bounce; Bekuh Boom',
    'music_album' => '',
    'music_listen' => 12,
    'music_track_id' => 0,
    'music_filename' => '1960611-fb85c2c5.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Goodbye goodbye
[t2]Goodbye goodbye
[t1]Tạm biệt, tạm biệt nhé

이별을 알았다면
[t2]Ibyeoreul aratdamyeon
[t1]Nếu tôi đoán được trước sự chia ly này

그토록 사랑하지 말 걸 그랬나 봐요
[t2]Geutorok saranghaji mal geol g...',
  ),
  26 => 
  array (
    'music_id' => 1960609,
    'music_title_url' => 'adore-you-sbs-inkigayo-07102018~ikon',
    'music_title' => 'Adore You (SBS Inkigayo 07.10.2018)',
    'music_artist' => 'iKON',
    'music_artist_id' => '14359',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 1538904421,
    'music_last_update_time' => 1538902141,
    'music_title_search' => 'adore iou; xbx inkigaio 07 10 2018',
    'music_artist_search' => '; ikon;',
    'music_album_search' => '',
    'music_composer' => 'B.I; Bobby; Seo Won Jin; R.Tee',
    'music_album' => '',
    'music_listen' => 64,
    'music_track_id' => 0,
    'music_filename' => '1960609-03e1f606.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '살아가며 내가 널 만나 많은 기억을 남기고
[t2]Saragamyeo naega neol manna maneun gieogeul namgigo
[t1]Anh cố sống tiếp và để lại những kí ức về ngày anh gặp em

가까워질수록 새어 나오는 내 진심을 삼키고
[t2]Gakkawojilsurok saeeo naon...',
  ),
  27 => 
  array (
    'music_id' => 1960561,
    'music_title_url' => 'la-thu-nguoi-chien-si~dang-the-luan',
    'music_title' => 'Lá Thư Người Chiến Sĩ',
    'music_artist' => 'Đặng Thế Luân',
    'music_artist_id' => '6737',
    'cat_id' => 1,
    'cat_level' => 1,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 1538958851,
    'music_last_update_time' => 1538970758,
    'music_title_search' => 'la thu ngui chin xi',
    'music_artist_search' => '; dang the luan;',
    'music_album_search' => '',
    'music_composer' => 'Phạm Đình Chương',
    'music_album' => '',
    'music_listen' => 67,
    'music_track_id' => 0,
    'music_filename' => '1960561-19855cf9.mp4',
    'music_bitrate' => 128,
    'music_shortlyric' => 'Thư rằng: thư từ biên ải xa xa 
gửi người em nho nhỏ quê nhà. 
Đã cách xa bao năm 
sống cuộc đời quân nhân 
súng bên mình nay mai rày đây đó. 
Chiến đấu ngăn quân thù 
vì anh xót thương khi quê hươ...',
  ),
  28 => 
  array (
    'music_id' => 1960502,
    'music_title_url' => 'memoria-buzz-rhythm-02-06102018~gfriend',
    'music_title' => 'Memoria (Buzz Rhythm 02 06.10.2018)',
    'music_artist' => 'GFRIEND',
    'music_artist_id' => '14564',
    'cat_id' => 1,
    'cat_level' => 5,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 1538936308,
    'music_last_update_time' => 1538887658,
    'music_title_search' => 'memoria; buz rhithm 02 06 10 2018',
    'music_artist_search' => '; gfrind;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 112,
    'music_track_id' => 0,
    'music_filename' => '1960502-c8f50c2b.mp4',
    'music_bitrate' => 128,
    'music_shortlyric' => 'Memoria memoria
Memoria memoria
Hitori taiyou no shimo hitomi o tojitemita
Sou always kanjita nukumori Come back to me
Donnani kanashikute namida o nagashite mo
Kimi to no daiarii kokoro ni kizamar...',
  ),
  29 => 
  array (
    'music_id' => 1960408,
    'music_title_url' => 'right-here-music-core-06102018-live~the-boyz',
    'music_title' => 'Right Here (Music Core 06.10.2018 Live)',
    'music_artist' => 'The Boyz',
    'music_artist_id' => '19380',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538841074,
    'music_title_search' => 'right here; muxic core 06 10 2018 live',
    'music_artist_search' => '; the boiz;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 7,
    'music_track_id' => 0,
    'music_filename' => '1960408-91c03e5f.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'THE BOYZ you got it right
Jigeum my time
Right here appear
Aye bigyodo andwae boyeojul tenikka
Alright get it got it
Come and find me jigeum i jarin
My zone THE BOYZ is right here
Pihal su eopseo N...',
  ),
  30 => 
  array (
    'music_id' => 1960407,
    'music_title_url' => 'lullaby-music-core-06102018-live~got7',
    'music_title' => 'Lullaby (Music Core 06.10.2018 Live)',
    'music_artist' => 'GOT7',
    'music_artist_id' => '4464',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 1539015884,
    'music_last_update_time' => 1538841070,
    'music_title_search' => 'lulabi; muxic core 06 10 2018 live',
    'music_artist_search' => '; got7;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 102,
    'music_track_id' => 0,
    'music_filename' => '1960407-7b1d5e0a.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '한낮에 꾸는 꿈
[t2]Hannaje kkuneun kkum
[t1]Một giấc mộng giữa ban ngày

믿기지 않을 뿐
[t2]Mitgiji aneul ppun
[t1]Mà đến chính tôi cũng không thể tin được

여전히 난 거짓말 같아
[t2]Yeojeonhi nan geojinmal gata
[t1]Dư...',
  ),
  31 => 
  array (
    'music_id' => 1960406,
    'music_title_url' => 'shes-in-the-rain-music-core-06102018-live~the-rose',
    'music_title' => 'She\'s In The Rain (Music Core 06.10.2018 Live)',
    'music_artist' => 'The Rose',
    'music_artist_id' => '21913',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538840813,
    'music_title_search' => 'the x in the rain; muxic core 06 10 2018 live',
    'music_artist_search' => '; the roxe;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 4,
    'music_track_id' => 0,
    'music_filename' => '1960406-fffbf6a6.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Do you hear me
Hoesaekbit angae deopin
Gloomy day
Nunapi garyeojin ge duryeowo
Ijen amugeotdo heungmiga an na
Nouwoeo
Do you hear me
Georireul geotda boni
Different way
Dwidoraboni amudo eomne
Naeg...',
  ),
  32 => 
  array (
    'music_id' => 1960404,
    'music_title_url' => 'drama-music-core-06102018-live~blanc7',
    'music_title' => 'Drama (Music Core 06.10.2018 Live)',
    'music_artist' => 'Blanc7',
    'music_artist_id' => '23323',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538840810,
    'music_title_search' => 'drama; muxic core 06 10 2018 live',
    'music_artist_search' => '; blanc7;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 5,
    'music_track_id' => 0,
    'music_filename' => '1960404-05784d75.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '',
  ),
  33 => 
  array (
    'music_id' => 1960378,
    'music_title_url' => 'yellow-pink-music-core-06102018-live~lipbubble',
    'music_title' => 'Yellow Pink (Music Core 06.10.2018 Live)',
    'music_artist' => 'LipBubble',
    'music_artist_id' => '122758',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538826109,
    'music_title_search' => 'ilow pink; muxic core 06 10 2018 live',
    'music_artist_search' => '; lipbuble;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 6,
    'music_track_id' => 0,
    'music_filename' => '1960378-cb25ac94.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '',
  ),
  34 => 
  array (
    'music_id' => 1960377,
    'music_title_url' => 'save-me-save-you-music-core-06102018-live~cosmic-girls',
    'music_title' => 'Save Me, Save You (Music Core 06.10.2018 Live)',
    'music_artist' => 'Cosmic Girls',
    'music_artist_id' => '15071',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 1538885588,
    'music_last_update_time' => 1538826053,
    'music_title_search' => 'xave me xave iou; muxic core 06 10 2018 live',
    'music_artist_search' => '; coxmic drlx;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 59,
    'music_track_id' => 0,
    'music_filename' => '1960377-5fc6779d.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '부탁해 너의 얘길 들려줄래
[t2]Butakhae neoui yaegil deullyeojullae
[t1]Có thể hay không, kể cho em nghe về chuyện đời anh

알고 싶어 그래
[t2]Algo sipeo geurae
[t1]Vì em muốn biết về những câu chuyện đó

네가 내게 그랬듯...',
  ),
  35 => 
  array (
    'music_id' => 1960376,
    'music_title_url' => 'what-music-core-06102018-live~dreamcatcher',
    'music_title' => 'What (Music Core 06.10.2018 Live)',
    'music_artist' => 'Dreamcatcher',
    'music_artist_id' => '15016',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 1538885661,
    'music_last_update_time' => 1538826037,
    'music_title_search' => 'what; muxic core 06 10 2018 live',
    'music_artist_search' => '; dreamcatcher;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 99,
    'music_track_id' => 0,
    'music_filename' => '1960376-ea15deac.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'What What What
[t2]What What What
[t1]What What What

What What 
[t2]What What 
[t1]What What

깨어나지 못한 깊어진 Lucid Dream
[t2]Kkaeeonaji mothan gipeojin Lucid Dream
[t1]Thật khó để có thể tỉnh dậy và...',
  ),
  36 => 
  array (
    'music_id' => 1960375,
    'music_title_url' => 'i-mean-music-core-06102018-live~unit',
    'music_title' => 'I Mean (Music Core 06.10.2018 Live)',
    'music_artist' => 'UNI.T',
    'music_artist_id' => '15655',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 1538840826,
    'music_last_update_time' => 1538825940,
    'music_title_search' => 'i mean; muxic core 06 10 2018 live',
    'music_artist_search' => '; uni t;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 108,
    'music_track_id' => 0,
    'music_filename' => '1960375-0e9f434e.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Yeah Brave Sound You ready
[t2]Yeah Brave Sound You ready
[t1]Yeah Brave Sound cưng đã sẵn sàng chưa nào

Let\'s get ready to Rumble
[t2]Let\'s get ready to Rumble
[t1]Chuẩn bị quẩy tung trời thôi nà...',
  ),
  37 => 
  array (
    'music_id' => 1960366,
    'music_title_url' => 'puzzle-moon-music-core-06102018-live~gwsn',
    'music_title' => 'Puzzle Moon (Music Core 06.10.2018 Live)',
    'music_artist' => 'GWSN',
    'music_artist_id' => '23324',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538820746,
    'music_title_search' => 'puzle mon; muxic core 06 10 2018 live',
    'music_artist_search' => '; gwxn;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 3,
    'music_track_id' => 0,
    'music_filename' => '1960366-b0572acf.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '조급해 하지 않을게
[t2]Jogeuphae haji aneulge
[t1]Em sẽ không quá vội vã đâu

천천히 널 드러내줘
[t2]Cheoncheonhi neol deureonaejwo
[t1]Hãy chầm chậm bộc lộ về bản thân anh đi

수천 개의 너에게서
[t2]Sucheon gaeui neoeges...',
  ),
  38 => 
  array (
    'music_id' => 1960364,
    'music_title_url' => 'naughty-boy-music-core-06102018-live~pentagon',
    'music_title' => 'Naughty Boy (Music Core 06.10.2018 Live)',
    'music_artist' => 'Pentagon',
    'music_artist_id' => '14095',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538820742,
    'music_title_search' => 'naughti boi; muxic core 06 10 2018 live',
    'music_artist_search' => '; pentagon;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 4,
    'music_track_id' => 0,
    'music_filename' => '1960364-6bbae179.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '오 더하기 오는 구구
[t2]O deohagi oneun gugu
[t1]Năm cộng năm là &quot;cục tác&quot;

개 짖는 소리는 꿀꿀
[t2]Gae jinneun sorineun kkulkkul
[t1]Chó sủa &quot;ụt ịt&quot;

시끄럽다 하면 눈누난나
[t2]Sikkeureopda hamyeon nunn...',
  ),
  39 => 
  array (
    'music_id' => 1960360,
    'music_title_url' => 'remember-me-music-core-06102018-live~oh-my-girl',
    'music_title' => 'Remember Me (Music Core 06.10.2018 Live)',
    'music_artist' => 'Oh My Girl',
    'music_artist_id' => '17169',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538820357,
    'music_title_search' => 'remember me; muxic core 06 10 2018 live',
    'music_artist_search' => '; oh mi drl;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 9,
    'music_track_id' => 0,
    'music_filename' => '1960360-d4c7b2e4.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Remember me do you remember me
[t2]Remember me do you remember me
[t1]Nhớ đến em, anh có còn nhớ đến em không?

날 바라보던 너의 눈에 비친
[t2]Nal barabodeon neoui nune bichin
[t1]Hình ảnh phản chiếu của em t...',
  ),
  40 => 
  array (
    'music_id' => 1960356,
    'music_title_url' => 'little-moments-music-core-06102018-live~soyou',
    'music_title' => 'Little Moments (Music Core 06.10.2018 Live)',
    'music_artist' => 'Soyou',
    'music_artist_id' => '15704',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538820329,
    'music_title_search' => 'litle momentx; muxic core 06 10 2018 live',
    'music_artist_search' => '; xoiou;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 6,
    'music_track_id' => 0,
    'music_filename' => '1960356-1216e196.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Achime ireona 
Seupgwanjeogeuro gogael dollimyeon 
Niga isseul geot gata
Changmuneul yeolgoseo 
Sideopji aneun kkumeseo kkaen dwi 
Nagal junbireul haji
Jipbakke nawaseo 
Kyeojyeo inneun haendeupone...',
  ),
  41 => 
  array (
    'music_id' => 1960355,
    'music_title_url' => 'all-night-music-core-06102018-live~sik-k-soyou',
    'music_title' => 'All Night (Music Core 06.10.2018 Live)',
    'music_artist' => 'Sik-K;Soyou',
    'music_artist_id' => '16384;15704',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538820326,
    'music_title_search' => 'al night; muxic core 06 10 2018 live',
    'music_artist_search' => '; xik k; xoiou;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 8,
    'music_track_id' => 0,
    'music_filename' => '1960355-c1387f14.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '다가온 어둠 사이 사이로
[t2]Dagaon eodum sai sairo
[t1]Giữa bóng đêm đang dần đến gần

숨죽여 조심 조심 내게로 와
[t2]Sumjungnyeo josim josim naegero wa
[t1]Nín thở và thận trọng tiến đến gần bên em

적당히 달아오른 분위기
[t2]J...',
  ),
  42 => 
  array (
    'music_id' => 1960352,
    'music_title_url' => 'into-you-music-core-06102018-live~yuri',
    'music_title' => 'Into You (Music Core 06.10.2018 Live)',
    'music_artist' => 'Yuri',
    'music_artist_id' => '4627',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538820324,
    'music_title_search' => 'into iou; muxic core 06 10 2018 live',
    'music_artist_search' => '; iuri;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 16,
    'music_track_id' => 0,
    'music_filename' => '1960352-a3acdd23.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '더 빠져가 깊이 너와 나 같이
[t2]Deo ppajyeoga gipi neowa na gachi
[t1]Đắm chìm sâu hơn vào thứ tình cảm này, anh cùng với em

빠져가 깊이 너와 나 같이
[t2]Ppajyeoga gipi neowa na gachi
[t1]Ta say mê nhau đậm sâu hơn, a...',
  ),
  43 => 
  array (
    'music_id' => 1960346,
    'music_title_url' => 'illusion-music-core-06102018-live~yuri',
    'music_title' => 'Illusion (Music Core 06.10.2018 Live)',
    'music_artist' => 'Yuri',
    'music_artist_id' => '4627',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 1538840279,
    'music_last_update_time' => 1538820321,
    'music_title_search' => 'iluxion; muxic core 06 10 2018 live',
    'music_artist_search' => '; iuri;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 57,
    'music_track_id' => 0,
    'music_filename' => '1960346-44846b86.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Jinjjain cheokaji ma 
Neol garyeonaegi beokcha nan nan 
Ontong yesang bakkiya 
Ansimhal su eopjana ah 
Simjangi ppalli ttwineun geon mwoni 
Haneureul mak naldagado 
Kkeutdo eopsi tteoreojyeo tto 
E...',
  ),
  44 => 
  array (
    'music_id' => 1960344,
    'music_title_url' => 'goodbye-road-music-core-06102018-live~ikon',
    'music_title' => 'Goodbye Road (Music Core 06.10.2018 Live)',
    'music_artist' => 'iKON',
    'music_artist_id' => '14359',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 1538885677,
    'music_last_update_time' => 1538820317,
    'music_title_search' => 'godbi road; muxic core 06 10 2018 live',
    'music_artist_search' => '; ikon;',
    'music_album_search' => '',
    'music_composer' => 'B.I; Bobby; Future Bounce; Bekuh Boom',
    'music_album' => '',
    'music_listen' => 218,
    'music_track_id' => 0,
    'music_filename' => '1960344-7e03d35a.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Goodbye goodbye
[t2]Goodbye goodbye
[t1]Tạm biệt, tạm biệt nhé

이별을 알았다면
[t2]Ibyeoreul aratdamyeon
[t1]Nếu tôi đoán được trước sự chia ly này

그토록 사랑하지 말 걸 그랬나 봐요
[t2]Geutorok saranghaji mal geol g...',
  ),
  45 => 
  array (
    'music_id' => 1960343,
    'music_title_url' => 'adore-you-music-core-06102018-live~ikon',
    'music_title' => 'Adore You (Music Core 06.10.2018 Live)',
    'music_artist' => 'iKON',
    'music_artist_id' => '14359',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538820313,
    'music_title_search' => 'adore iou; muxic core 06 10 2018 live',
    'music_artist_search' => '; ikon;',
    'music_album_search' => '',
    'music_composer' => 'B.I; Bobby; Seo Won Jin; R.Tee',
    'music_album' => '',
    'music_listen' => 11,
    'music_track_id' => 0,
    'music_filename' => '1960343-2fc60ed9.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '살아가며 내가 널 만나 많은 기억을 남기고
[t2]Saragamyeo naega neol manna maneun gieogeul namgigo
[t1]Anh cố sống tiếp và để lại những kí ức về ngày anh gặp em

가까워질수록 새어 나오는 내 진심을 삼키고
[t2]Gakkawojilsurok saeeo naon...',
  ),
  46 => 
  array (
    'music_id' => 1960323,
    'music_title_url' => 'memoria-06102018-ntv-buzz-rhythm-02~gfriend',
    'music_title' => 'Memoria (06.10.2018 NTV Buzz Rhythm 02)',
    'music_artist' => 'GFriend',
    'music_artist_id' => '13390',
    'cat_id' => 1,
    'cat_level' => 5,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 1538826451,
    'music_last_update_time' => 1538813135,
    'music_title_search' => 'memoria; 06 10 2018 ntv buz rhithm 02',
    'music_artist_search' => '; gfrind;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 109,
    'music_track_id' => 0,
    'music_filename' => '1960323-e024370a.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Memoria memoria
Memoria memoria
Hitori taiyou no shimo hitomi o tojitemita
Sou always kanjita nukumori Come back to me
Donnani kanashikute namida o nagashite mo
Kimi to no daiarii kokoro ni kizamar...',
  ),
  47 => 
  array (
    'music_id' => 1960265,
    'music_title_url' => 'decalcomanie-japanese-version~mamamoo',
    'music_title' => 'Décalcomanie (Japanese Version)',
    'music_artist' => 'Mamamoo',
    'music_artist_id' => '14892',
    'cat_id' => 1,
    'cat_level' => 5,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 1538826391,
    'music_last_update_time' => 1538806929,
    'music_title_search' => 'decalcomani; japanexe verxion',
    'music_artist_search' => '; mamamo;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 102,
    'music_track_id' => 0,
    'music_filename' => '1960265-6fb130db.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Knock knock minarenu hitomi
You\'re so chigau manazashi
Mon amour Gimme your tenderness
Nagai yoru wa kore kara.
 
Tokimeki kanjita no
Shisen terashi aeba
Chinmoku sae It\'s OK!
Sakerarenai unmei....',
  ),
  48 => 
  array (
    'music_id' => 1960178,
    'music_title_url' => 'nhe-anh~my-tam',
    'music_title' => 'Nhé Anh',
    'music_artist' => 'Mỹ Tâm',
    'music_artist_id' => '4812',
    'cat_id' => 1,
    'cat_level' => 1,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538777668,
    'music_title_search' => 'nhe em',
    'music_artist_search' => '; mi tam;',
    'music_album_search' => '',
    'music_composer' => 'Nguyễn Hà',
    'music_album' => '',
    'music_listen' => 38,
    'music_track_id' => 0,
    'music_filename' => '1960178-08738e4e.mp4',
    'music_bitrate' => 64,
    'music_shortlyric' => '1. Tình yêu như mật ngọt trên cao
Làm lòng ta luôn khát khao
Tình yêu như mộng đẹp nên thơ
Làm lòng ta luôn ước mơ.

Trái tim em nguyện thề yêu anh
Gửi trọn tình yêu đến anh
Dấu yêu ơi, gửi đến mai...',
  ),
  49 => 
  array (
    'music_id' => 1960177,
    'music_title_url' => 'hat-cho-nguoi-o-lai~my-tam',
    'music_title' => 'Hát Cho Người Ở Lại',
    'music_artist' => 'Mỹ Tâm',
    'music_artist_id' => '4812',
    'cat_id' => 1,
    'cat_level' => 1,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1538776391,
    'music_title_search' => 'hat cho ngui o lai',
    'music_artist_search' => '; mi tam;',
    'music_album_search' => '',
    'music_composer' => 'Quốc An; Lời: Lê Quang; Thanh Tâm',
    'music_album' => '',
    'music_listen' => 15,
    'music_track_id' => 0,
    'music_filename' => '1960177-0e629cbb.mp4',
    'music_bitrate' => 64,
    'music_shortlyric' => 'Ngày nào em đến bên anh
Tim anh ngẩn ngơ chợt buồn vu vơ
Em rất vô tư, em quá ngây thơ
Làm anh thẫn thờ.

Rồi em cất bước ra đi
Tim anh giá băng, hồn anh chết lặng
Em đã ra đi, không nói năng chi
A...',
  ),
);     
?>