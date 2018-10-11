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
    'music_artist' => 'K-ICM; T-ICM',
    'music_bitrate' => 1000,
  ),
  1 => 
  array (
    'cover_id' => 90632,
    'music_album' => 'Journey (Single)',
    'music_artist' => 'SaberZ',
    'music_bitrate' => 1000,
  ),
  2 => 
  array (
    'cover_id' => 90622,
    'music_album' => 'Spiritual Jazz 8: Japan pt. 1',
    'music_artist' => 'Takeo Moriyama',
    'music_bitrate' => 1000,
  ),
  3 => 
  array (
    'cover_id' => 90621,
    'music_album' => 'Amistad',
    'music_artist' => 'Michael Hoppé',
    'music_bitrate' => 1000,
  ),
  4 => 
  array (
    'cover_id' => 90620,
    'music_album' => 'Hero (Fight for You) - Single',
    'music_artist' => 'Max Lean; Reevo; Michael Zhonga',
    'music_bitrate' => 1000,
  ),
  5 => 
  array (
    'cover_id' => 90619,
    'music_album' => 'Hit The Club (Single)',
    'music_artist' => '',
    'music_bitrate' => '',
  ),
  6 => 
  array (
    'cover_id' => 90618,
    'music_album' => 'Yêu Em Từ Tuổi Thanh Xuân (Single)',
    'music_artist' => 'Cao Nam Thành',
    'music_bitrate' => 1000,
  ),
  7 => 
  array (
    'cover_id' => 90617,
    'music_album' => 'Độc Thân (Single)',
    'music_artist' => 'Châu Đăng Khoa; Ricky Star',
    'music_bitrate' => 1000,
  ),
  8 => 
  array (
    'cover_id' => 90616,
    'music_album' => 'Quá Khứ, Anh Xin Lỗi (Single)',
    'music_artist' => 'Khánh Phương',
    'music_bitrate' => 1000,
  ),
  9 => 
  array (
    'cover_id' => 90615,
    'music_album' => 'More And More (Single)',
    'music_artist' => 'Sanchez',
    'music_bitrate' => 1000,
  ),
  10 => 
  array (
    'cover_id' => 90614,
    'music_album' => 'Are You Human? OST - Part.4 (Single)',
    'music_artist' => '2BIC',
    'music_bitrate' => 1000,
  ),
  11 => 
  array (
    'cover_id' => 90613,
    'music_album' => 'Teen Top Story: 8PISODE (Regular)',
    'music_artist' => 'Teen Top',
    'music_bitrate' => 1000,
  ),
  12 => 
  array (
    'cover_id' => 90612,
    'music_album' => 'POP  CULTURE 6',
    'music_artist' => 'Syrufit',
    'music_bitrate' => 1000,
  ),
  13 => 
  array (
    'cover_id' => 90611,
    'music_album' => 'Good Girl (Single)',
    'music_artist' => 'Shin Ji',
    'music_bitrate' => 1000,
  ),
  14 => 
  array (
    'cover_id' => 90610,
    'music_album' => 'Love Me Please (Single)',
    'music_artist' => 'Haebi',
    'music_bitrate' => 1000,
  ),
  15 => 
  array (
    'cover_id' => 90609,
    'music_album' => 'Father (Single)',
    'music_artist' => 'Dino.T',
    'music_bitrate' => 1000,
  ),
  16 => 
  array (
    'cover_id' => 90608,
    'music_album' => 'Peppemood (EP)',
    'music_artist' => 'Peppe',
    'music_bitrate' => 1000,
  ),
  17 => 
  array (
    'cover_id' => 90607,
    'music_album' => 'Everything Changes (Single)',
    'music_artist' => 'Miyao',
    'music_bitrate' => 1000,
  ),
  18 => 
  array (
    'cover_id' => 90606,
    'music_album' => 'Zeus (Single)',
    'music_artist' => 'Ted Park',
    'music_bitrate' => 1000,
  ),
  19 => 
  array (
    'cover_id' => 90605,
    'music_album' => 'Everytime, Everyday (Single)',
    'music_artist' => 'Dinner Coat',
    'music_bitrate' => 1000,
  ),
);
$album_new = array (
  0 => 
  array (
    'cover_id' => 90633,
    'music_album' => 'Just For A While (Single)',
    'music_artist' => 'K-ICM; T-ICM',
    'music_bitrate' => 1000,
  ),
  1 => 
  array (
    'cover_id' => 90632,
    'music_album' => 'Journey (Single)',
    'music_artist' => 'SaberZ',
    'music_bitrate' => 1000,
  ),
  2 => 
  array (
    'cover_id' => 90622,
    'music_album' => 'Spiritual Jazz 8: Japan pt. 1',
    'music_artist' => 'Takeo Moriyama',
    'music_bitrate' => 1000,
  ),
  3 => 
  array (
    'cover_id' => 90621,
    'music_album' => 'Amistad',
    'music_artist' => 'Michael Hoppé',
    'music_bitrate' => 1000,
  ),
  4 => 
  array (
    'cover_id' => 90620,
    'music_album' => 'Hero (Fight for You) - Single',
    'music_artist' => 'Max Lean; Reevo; Michael Zhonga',
    'music_bitrate' => 1000,
  ),
  5 => 
  array (
    'cover_id' => 90619,
    'music_album' => 'Hit The Club (Single)',
    'music_artist' => '',
    'music_bitrate' => '',
  ),
  6 => 
  array (
    'cover_id' => 90618,
    'music_album' => 'Yêu Em Từ Tuổi Thanh Xuân (Single)',
    'music_artist' => 'Cao Nam Thành',
    'music_bitrate' => 1000,
  ),
  7 => 
  array (
    'cover_id' => 90617,
    'music_album' => 'Độc Thân (Single)',
    'music_artist' => 'Châu Đăng Khoa; Ricky Star',
    'music_bitrate' => 1000,
  ),
  8 => 
  array (
    'cover_id' => 90616,
    'music_album' => 'Quá Khứ, Anh Xin Lỗi (Single)',
    'music_artist' => 'Khánh Phương',
    'music_bitrate' => 1000,
  ),
  9 => 
  array (
    'cover_id' => 90615,
    'music_album' => 'More And More (Single)',
    'music_artist' => 'Sanchez',
    'music_bitrate' => 1000,
  ),
  10 => 
  array (
    'cover_id' => 90614,
    'music_album' => 'Are You Human? OST - Part.4 (Single)',
    'music_artist' => '2BIC',
    'music_bitrate' => 1000,
  ),
  11 => 
  array (
    'cover_id' => 90613,
    'music_album' => 'Teen Top Story: 8PISODE (Regular)',
    'music_artist' => 'Teen Top',
    'music_bitrate' => 1000,
  ),
  12 => 
  array (
    'cover_id' => 90612,
    'music_album' => 'POP  CULTURE 6',
    'music_artist' => 'Syrufit',
    'music_bitrate' => 1000,
  ),
  13 => 
  array (
    'cover_id' => 90611,
    'music_album' => 'Good Girl (Single)',
    'music_artist' => 'Shin Ji',
    'music_bitrate' => 1000,
  ),
  14 => 
  array (
    'cover_id' => 90610,
    'music_album' => 'Love Me Please (Single)',
    'music_artist' => 'Haebi',
    'music_bitrate' => 1000,
  ),
  15 => 
  array (
    'cover_id' => 90609,
    'music_album' => 'Father (Single)',
    'music_artist' => 'Dino.T',
    'music_bitrate' => 1000,
  ),
  16 => 
  array (
    'cover_id' => 90608,
    'music_album' => 'Peppemood (EP)',
    'music_artist' => 'Peppe',
    'music_bitrate' => 1000,
  ),
  17 => 
  array (
    'cover_id' => 90607,
    'music_album' => 'Everything Changes (Single)',
    'music_artist' => 'Miyao',
    'music_bitrate' => 1000,
  ),
  18 => 
  array (
    'cover_id' => 90606,
    'music_album' => 'Zeus (Single)',
    'music_artist' => 'Ted Park',
    'music_bitrate' => 1000,
  ),
  19 => 
  array (
    'cover_id' => 90605,
    'music_album' => 'Everytime, Everyday (Single)',
    'music_artist' => 'Dinner Coat',
    'music_bitrate' => 1000,
  ),
);
$album_old = array (
  0 => 
  array (
    'cover_id' => 90643,
    'music_album' => 'Barcelona (Special Edition)',
    'music_artist' => 'Freddie Mercury; Montserrat Caballe',
    'music_bitrate' => 1000,
  ),
  1 => 
  array (
    'cover_id' => 90642,
    'music_album' => 'L\'equilibrista',
    'music_artist' => 'Pupo',
    'music_bitrate' => 1000,
  ),
  2 => 
  array (
    'cover_id' => 90641,
    'music_album' => 'Tornerò',
    'music_artist' => 'Pupo',
    'music_bitrate' => 1000,
  ),
  3 => 
  array (
    'cover_id' => 90640,
    'music_album' => '1996',
    'music_artist' => 'Pupo',
    'music_bitrate' => 1000,
  ),
  4 => 
  array (
    'cover_id' => 90639,
    'music_album' => 'La Mia Preghiera',
    'music_artist' => 'Pupo',
    'music_bitrate' => 1000,
  ),
  5 => 
  array (
    'cover_id' => 90638,
    'music_album' => 'Quello Che Sono',
    'music_artist' => 'Pupo',
    'music_bitrate' => 1000,
  ),
  6 => 
  array (
    'cover_id' => 90637,
    'music_album' => 'La Vita È Molto Di Più',
    'music_artist' => 'Pupo',
    'music_bitrate' => 1000,
  ),
  7 => 
  array (
    'cover_id' => 90636,
    'music_album' => 'Malattia D\'Amore',
    'music_artist' => 'Pupo',
    'music_bitrate' => 1000,
  ),
  8 => 
  array (
    'cover_id' => 90635,
    'music_album' => 'Lo Devo Solo A Te',
    'music_artist' => 'Pupo',
    'music_bitrate' => 1000,
  ),
  9 => 
  array (
    'cover_id' => 90634,
    'music_album' => 'Più Di Prima',
    'music_artist' => 'Pupo',
    'music_bitrate' => 1000,
  ),
  10 => 
  array (
    'cover_id' => 90631,
    'music_album' => 'Ultimate 2000s (CD4)',
    'music_artist' => 'John Mayer',
    'music_bitrate' => 1000,
  ),
  11 => 
  array (
    'cover_id' => 90630,
    'music_album' => 'Ultimate 2000s (CD3)',
    'music_artist' => 'Toploader',
    'music_bitrate' => 1000,
  ),
  12 => 
  array (
    'cover_id' => 90629,
    'music_album' => 'Ultimate 2000s (CD2)',
    'music_artist' => 'Wu-Tang Clan',
    'music_bitrate' => 1000,
  ),
  13 => 
  array (
    'cover_id' => 90628,
    'music_album' => 'Ultimate 2000s (CD1)',
    'music_artist' => 'Train',
    'music_bitrate' => 1000,
  ),
  14 => 
  array (
    'cover_id' => 90627,
    'music_album' => 'Omni Sight Seeing',
    'music_artist' => 'Haruomi Hosono',
    'music_bitrate' => 1000,
  ),
  15 => 
  array (
    'cover_id' => 90626,
    'music_album' => 'The Tale of Genji OST',
    'music_artist' => 'Haruomi Hosono',
    'music_bitrate' => 1000,
  ),
  16 => 
  array (
    'cover_id' => 90625,
    'music_album' => 'Back Again',
    'music_artist' => 'Pink Turtle',
    'music_bitrate' => 1000,
  ),
  17 => 
  array (
    'cover_id' => 90624,
    'music_album' => 'Two',
    'music_artist' => 'Bob James',
    'music_bitrate' => 1000,
  ),
  18 => 
  array (
    'cover_id' => 90623,
    'music_album' => 'Urban Folktales',
    'music_artist' => 'Matt Marshak',
    'music_bitrate' => 1000,
  ),
  19 => 
  array (
    'cover_id' => 90596,
    'music_album' => 'Chúc Tụng Mẹ La Vang',
    'music_artist' => 'Phượng Vũ',
    'music_bitrate' => 320,
  ),
);
$music_new_uploads = array (
  0 => 
  array (
    'music_id' => 1961317,
    'music_title_url' => 'tuoi-tho-con-mai~luong-chan-nam',
    'music_title' => 'Tuổi Thơ Còn Mãi',
    'music_artist' => 'Lương Chấn Nam',
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
    'music_artist' => 'Lee Ji Hye; Jang Suk Hyun; DinDin; Sungyeon',
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
    'music_artist' => 'Chae Rina; Seunghee',
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
    'music_artist' => 'Spapa; Kei',
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
    'music_artist' => 'Oh Seung Hee; Kim Bo Hyung',
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
    'music_artist' => 'UJi; Kei',
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
    'music_artist' => 'Seunghee; Sojeung',
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
    'music_artist' => 'Flowsik; Kim Bo Hyung',
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
    'music_id' => 1954312,
    'music_title_url' => 'hot-stuff~luu-bich',
    'music_title' => 'Hot Stuff',
    'music_artist' => 'Lưu Bích',
    'cat_id' => 1,
    'cat_level' => 2,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537284999,
    'music_title_search' => 'hot xtuf',
    'music_artist_search' => '; lu bich;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954312-c687341b.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Sittin\' here eatin\' my heart out waitin\'
Waitin\' for some lover to call
Dialed about a thousand numbers lately
Almost rang the phone off the wall.

Lookin\' for some hot stuff baby this evenin\'
I ne...',
  ),
  1 => 
  array (
    'music_id' => 1954279,
    'music_title_url' => 'zou-zhe-zou-zhe-jiu-san-le-cang-di-cang-lac-loi~tran-ngoc-bao',
    'music_title' => 'Zou zhe zou zhe jiu san le/ Càng đi càng lạc lối',
    'music_artist' => 'Trần Ngọc Bảo',
    'cat_id' => 1,
    'cat_level' => 3,
    'cat_sublevel' => 0,
    'cat_custom' => 8,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537279800,
    'music_title_search' => 'zou zhe zou zhe jiu xan le; cang di cang lac loi',
    'music_artist_search' => '; chan ngoc bao;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954279-7192ce20.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '',
  ),
  2 => 
  array (
    'music_id' => 1954278,
    'music_title_url' => 'addiction-korean-chinese-verson~tran-ngoc-bao-anh-toan-nguyen',
    'music_title' => 'Addiction (Korean Chinese verson)',
    'music_artist' => 'Trần Ngọc Bảo, Anh Toàn Nguyễn',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537278078,
    'music_title_search' => 'adiction; korean chinexe verxon',
    'music_artist_search' => '; chan ngoc bao em toan ngin;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954278-69ff4064.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '',
  ),
  3 => 
  array (
    'music_id' => 1954277,
    'music_title_url' => 'noi-di-la-di~tran-ngoc-bao',
    'music_title' => 'Nói đi là đi /说散就散',
    'music_artist' => 'Trần Ngọc Bảo',
    'cat_id' => 1,
    'cat_level' => 3,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537277972,
    'music_title_search' => 'noi di la di ;说散就散',
    'music_artist_search' => '; chan ngoc bao;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954277-e4ac7b1e.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '',
  ),
  4 => 
  array (
    'music_id' => 1954276,
    'music_title_url' => 'dung-nhu-thoi-quen-cover-tran-ngoc-bao~tran-ngoc-bao-anh-toan-nguyen',
    'music_title' => 'Đừng như thói quen cover Trần Ngọc Bảo',
    'music_artist' => 'Trần Ngọc Bảo, Anh Toàn Nguyễn',
    'cat_id' => 1,
    'cat_level' => 1,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 1537323547,
    'music_last_update_time' => 1537277722,
    'music_title_search' => 'dung nhu thoi quen cover chan ngoc bao',
    'music_artist_search' => '; chan ngoc bao em toan ngin;',
    'music_album_search' => '',
    'music_composer' => 'Dương Khắc Linh',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954276-a39f62f4.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '',
  ),
  5 => 
  array (
    'music_id' => 1954275,
    'music_title_url' => 'hong-nhan-xua-lang-nha-bang-ost~tran-ngoc-bao',
    'music_title' => '红颜旧 / Hồng Nhan Xưa (Lang Nha Bảng OST)',
    'music_artist' => 'Trần Ngọc Bảo',
    'cat_id' => 1,
    'cat_level' => 3,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537277422,
    'music_title_search' => '红颜旧 ; hong nhan xua; lang nha bang oxt',
    'music_artist_search' => '; chan ngoc bao;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954275-9e07622f.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '',
  ),
  6 => 
  array (
    'music_id' => 1954274,
    'music_title_url' => 'dung-vi-em-la-bien-cover~tran-ngoc-bao',
    'music_title' => 'Đừng ví em là biển cover',
    'music_artist' => 'Trần Ngọc Bảo',
    'cat_id' => 1,
    'cat_level' => 1,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537277386,
    'music_title_search' => 'dung vi em la bin cover',
    'music_artist_search' => '; chan ngoc bao;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954274-ba38098b.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '',
  ),
  7 => 
  array (
    'music_id' => 1954273,
    'music_title_url' => 'dung-nhu-thoi-quenchinese-verson-beatchi-co-giong-nam-va-be~anh-toan-nguyen',
    'music_title' => 'Đừng như thói quen(Chinese verson beat)/不要只是个习惯_Chỉ có giọng nam và bè',
    'music_artist' => 'Anh Toàn Nguyễn',
    'cat_id' => 1,
    'cat_level' => 1,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537277319,
    'music_title_search' => 'dung nhu thoi quen chinexe verxon beat ;不要只是个习惯 chi co dong 5 va be',
    'music_artist_search' => '; em toan ngin;',
    'music_album_search' => '',
    'music_composer' => 'Dương khắc linh',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954273-6e7e4fc8.mp4',
    'music_bitrate' => 96,
    'music_shortlyric' => '',
  ),
  8 => 
  array (
    'music_id' => 1954262,
    'music_title_url' => 'cho-em-gan-anh-them-chut-nuamv~tran-ngoc-bao',
    'music_title' => 'Cho em gần anh thêm chút nữa(MV)',
    'music_artist' => 'Trần Ngọc Bảo',
    'cat_id' => 1,
    'cat_level' => 1,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537277074,
    'music_title_search' => 'cho em gan em them chut nua mv',
    'music_artist_search' => '; chan ngoc bao;',
    'music_album_search' => '',
    'music_composer' => 'Tăng NHât',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954262-5a9ae10c.mp4',
    'music_bitrate' => 96,
    'music_shortlyric' => '',
  ),
  9 => 
  array (
    'music_id' => 1954261,
    'music_title_url' => 'lanh-leo-ost-tam-sinh-tam-the-thap-ly-dao-hoa-cove~tran-ngoc-bao-anh-toan-nguyen',
    'music_title' => 'Lạnh Lẽo (涼涼) (OST Tam Sinh Tam Thế Thập Lý Đào Hoa) (Cover)',
    'music_artist' => 'Trần Ngọc Bảo, Anh Toàn Nguyễn',
    'cat_id' => 1,
    'cat_level' => 3,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537276955,
    'music_title_search' => 'lanh leo; 涼 ; oxt tam xinh tam the thap li dao hoa ; cover',
    'music_artist_search' => '; chan ngoc bao em toan ngin;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954261-0687f2f8.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '',
  ),
  10 => 
  array (
    'music_id' => 1954233,
    'music_title_url' => 'dung-nhu-thoi-quen-chinese-verson-karaoke~tran-ngoc-bao-anh-toan-nguyen',
    'music_title' => 'Đừng như thói quen (Chinese verson Karaoke)',
    'music_artist' => 'Trần Ngọc Bảo, Anh Toàn Nguyễn',
    'cat_id' => 1,
    'cat_level' => 1,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537275871,
    'music_title_search' => 'dung nhu thoi quen; chinexe verxon karaoke',
    'music_artist_search' => '; chan ngoc bao em toan ngin;',
    'music_album_search' => '',
    'music_composer' => 'Dương Khắc Linh',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954233-06b8831c.mp4',
    'music_bitrate' => 96,
    'music_shortlyric' => '',
  ),
  11 => 
  array (
    'music_id' => 1954232,
    'music_title_url' => 'dung-nhu-thoi-quen-chinese-versonchi-co-giong-nu-va-be~tran-ngoc-bao',
    'music_title' => 'Đừng như thói quen Chinese Verson_Chỉ có giọng nữ và bè',
    'music_artist' => 'Trần Ngọc Bảo',
    'cat_id' => 1,
    'cat_level' => 3,
    'cat_sublevel' => 0,
    'cat_custom' => 8,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537275824,
    'music_title_search' => 'dung nhu thoi quen chinexe verxon chi co dong nu va be',
    'music_artist_search' => '; chan ngoc bao;',
    'music_album_search' => '',
    'music_composer' => 'Dương Khắc Linh',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954232-378f8b2a.mp4',
    'music_bitrate' => 96,
    'music_shortlyric' => '',
  ),
  12 => 
  array (
    'music_id' => 1954231,
    'music_title_url' => 'dung-nhu-thoi-quen-chinese-verson~tran-ngoc-bao-anh-toan-nguyen',
    'music_title' => 'Đừng như thói quen Chinese Verson',
    'music_artist' => 'Trần Ngọc Bảo;Anh Toàn Nguyễn',
    'cat_id' => 1,
    'cat_level' => 1,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537327046,
    'music_title_search' => 'dung nhu thoi quen chinexe verxon',
    'music_artist_search' => '; chan ngoc bao; em toan ngin;',
    'music_album_search' => '',
    'music_composer' => 'Dương Khắc Linh',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954231-3626946b.mp4',
    'music_bitrate' => 96,
    'music_shortlyric' => '',
  ),
  13 => 
  array (
    'music_id' => 1954229,
    'music_title_url' => 'xuetuyetdo-van-thi~tran-ngoc-bao',
    'music_title' => 'Xue_Tuyet_Đỗ Vân Thị',
    'music_artist' => 'Trần Ngọc Bảo',
    'cat_id' => 1,
    'cat_level' => 3,
    'cat_sublevel' => 0,
    'cat_custom' => 0,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537275600,
    'music_title_search' => 'xue tit do van thi',
    'music_artist_search' => '; chan ngoc bao;',
    'music_album_search' => '',
    'music_composer' => 'Dương Khắc Linh',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954229-fe62c82e.mp4',
    'music_bitrate' => 96,
    'music_shortlyric' => '',
  ),
  14 => 
  array (
    'music_id' => 1954220,
    'music_title_url' => 'i-mean-18092018-the-show~unit',
    'music_title' => 'I Mean (18.09.2018 The Show)',
    'music_artist' => 'UNI.T',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537274596,
    'music_title_search' => 'i mean; 18 09 2018 the thow',
    'music_artist_search' => '; uni t;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954220-8e4867fa.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Yeah Brave Sound You ready
Let\'s get ready to Rumble
Uh Yeah UNI.T We raise you up
Uh Yeah Red Cookie baby
Nega daeche mworago
Nae mam mamdaero heundeureo
Twieonaol deusi ttwieo
Jakku meotdaero meo...',
  ),
  15 => 
  array (
    'music_id' => 1954218,
    'music_title_url' => 'begin-with-the-end-18092018-the-show~unit',
    'music_title' => 'Begin With The End (18.09.2018 The Show)',
    'music_artist' => 'UNI.T',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537274563,
    'music_title_search' => 'bedn with the end; 18 09 2018 the thow',
    'music_artist_search' => '; uni t;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954218-4fd8c1f6.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Yalmiun siganeun cham nunchi eopji
Andwae seodureujima
Motdahan aswium tase yunanhi aeteuthae
Sujubeotdeon uri mannami
Eotgeuje gateunde
Aju jamsiman deo cheoncheonhi
Naeireun bochaeji aneul teni
S...',
  ),
  16 => 
  array (
    'music_id' => 1954198,
    'music_title_url' => 'what-the-heck-18092018-the-show~shasha',
    'music_title' => 'What The Heck (18.09.2018 The Show)',
    'music_artist' => 'Shasha',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537274560,
    'music_title_search' => 'what the heck; 18 09 2018 the thow',
    'music_artist_search' => '; thatha;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954198-f6c70517.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'What the heck is going on
You know what
Hang on
Ne mameul jeonbu da
Boyeojumyeon an doelkka
Seolma naboda meonjeo
Silcheung naegiman haebwa
Ooooh eotteokae
Ooooh oh my god
Neildo badatgo
Ije ne son...',
  ),
  17 => 
  array (
    'music_id' => 1954181,
    'music_title_url' => 'on-air-18092018-the-show~we-girls',
    'music_title' => 'On Air (18.09.2018 The Show)',
    'music_artist' => 'We Girls',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537274557,
    'music_title_search' => 'on air; 18 09 2018 the thow',
    'music_artist_search' => '; we drlx;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954181-1a9d1058.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => '',
  ),
  18 => 
  array (
    'music_id' => 1954180,
    'music_title_url' => 'puzzle-moon-18092018-the-show~gwsn',
    'music_title' => 'Puzzle Moon (18.09.2018 The Show)',
    'music_artist' => 'GWSN',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537274554,
    'music_title_search' => 'puzle mon; 18 09 2018 the thow',
    'music_artist_search' => '; gwxn;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954180-dd071ab5.mp4',
    'music_bitrate' => 320,
    'music_shortlyric' => 'Jogeupae haji aneulge
Cheoncheonhi neol deureonaejwo
Sucheon gaeui neoegeseo
Nuneul mot tte nuneul mot tte Woo Woo Woo
Myeot beonigo gyesok doeneun Simulation Oh
Nae saenggakgwa matjil ana hansumeu...',
  ),
  19 => 
  array (
    'music_id' => 1954179,
    'music_title_url' => 'right-here-18092018-the-show~the-boyz',
    'music_title' => 'Right Here (18.09.2018 The Show)',
    'music_artist' => 'The Boyz',
    'cat_id' => 1,
    'cat_level' => 4,
    'cat_sublevel' => 0,
    'cat_custom' => 6,
    'cover_id' => 0,
    'music_download_time' => 0,
    'music_last_update_time' => 1537274550,
    'music_title_search' => 'right here; 18 09 2018 the thow',
    'music_artist_search' => '; the boiz;',
    'music_album_search' => '',
    'music_composer' => '',
    'music_album' => '',
    'music_listen' => 0,
    'music_track_id' => 0,
    'music_filename' => '1954179-0d8dbc83.mp4',
    'music_bitrate' => 256,
    'music_shortlyric' => 'THE BOYZ you got it right
Jigeum my time
Right here appear
Aye bigyodo andwae boyeojul tenikka
Alright get it got it
Come and find me jigeum i jarin
My zone THE BOYZ is right here
Pihal su eopseo N...',
  ),
);     
?>