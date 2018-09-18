<?php
/***************************************************************************
 *				def_hot.php
 *                        -------------------
 *   copyright            : (C) 2007 tuantrinh
 *   email                : letuantrinh@yahoo.com
 *   website              : http://www.tuantrinh.info/
 *   last update	  : 2018-09-13 06:07:31 (GMT) by tuantrinh
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *
 ***************************************************************************/

if ( !ENV('IN_PHPBB') )
{
    die('Hacking attempt');
    exit;
}
global $hot_music_rows;
global $hot_video_rows;
$hot_music_rows = array(
	2 => array(
		0 => array('music_id' => '1936321', 
			'cat_id' => '2', 
			'cat_level' => '4', 
			'cover_id' => '0',
			'music_title_url' => 'way-back-home-instrumental~shaun',
			'music_title' => 'Way Back Home (Instrumental)',
			'music_artist' => 'SHAUN',
			'music_shortlyric' => '',
			'music_downloads' => '2903',
			'music_bitrate' => '320',
			'music_length' => '216',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '11'),
		1 => array('music_id' => '1950376',
			'cat_id' => '2',
			'cat_level' => '1',
			'cover_id' => '0',
			'music_title_url' => 'nen-va-hoa~beat',
			'music_title' => 'Nến Và Hoa',
			'music_artist' => 'Beat',
			'music_shortlyric' => 'Buccellati lấp lánh
Ươm lên tai với nét mặt rạng ngời
Maserati hai cánh
Ngăn cho em tách biệt miệng đời.

Lướt xuống phố không phanh
Băng qua nhanh khuôn viên mỗi tối
Dinh cơ dang tay sẵn lối
Nơi...',
			'music_downloads' => '193',
			'music_bitrate' => '128',
			'music_length' => '166',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '9'),
		2 => array('music_id' => '1942849',
			'cat_id' => '2',
			'cat_level' => '2',
			'cover_id' => '0',
			'music_title_url' => 'darkside-alan-walker-instrumental~alan-walker',
			'music_title' => 'Darkside - Alan Walker Instrumental',
			'music_artist' => 'Alan walker',
			'music_shortlyric' => '[Verse 1: Tomine Harket]
We\'re not in love
Chúng ta không hề yêu nhau
We share no stories
Và câu chuyện của mỗi người cũng khác biệt
Just something in your eyes
Nhưng có điều gì đó trong đôi mắt an...',
			'music_downloads' => '1433',
			'music_bitrate' => '128',
			'music_length' => '235',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '8'),
		3 => array('music_id' => '1942231',
			'cat_id' => '2',
			'cat_level' => '1',
			'cover_id' => '93058',
			'music_title_url' => 'tan-cung-noi-nho~will',
			'music_title' => 'Tận Cùng Nỗi Nhớ',
			'music_artist' => 'Will',
			'music_shortlyric' => '1. Anh chơi vơi, nơi góc phố quen mình từng, từng là tất cả
Hôm ấy mây xanh ngát trời
Cố giữ lấy chút ấm áp từ tay em
Nhưng biết sao được hôm nay mình chia tay.

Những tấm hình kỷ niệm của chúng mì...',
			'music_downloads' => '270',
			'music_bitrate' => '1000',
			'music_length' => '286',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '7'),
		4 => array('music_id' => '1951733',
			'cat_id' => '2',
			'cat_level' => '1',
			'cover_id' => '94284',
			'music_title_url' => 'gia-ngay-dau-dung-noi-thuong-nhau~isaac',
			'music_title' => 'Giá Ngày Đầu Đừng Nói Thương Nhau',
			'music_artist' => 'Isaac',
			'music_shortlyric' => 'Dẫu đã biết người không nhung nhớ
Dẫu đã biết tình không như mơ
Thế thế sao còn buồn, thế thế sao còn hy vọng nhiều.

Dẫu đã biết càng yêu càng đau
Dẫu đã biết người chẳng về đâu
Thế thế sao c...',
			'music_downloads' => '236',
			'music_bitrate' => '1000',
			'music_length' => '270',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '5'),
		5 => array('music_id' => '1952277',
			'cat_id' => '2',
			'cat_level' => '4',
			'cover_id' => '94350',
			'music_title_url' => 'good-night-like-yesterday~lovelyz',
			'music_title' => 'Good Night Like Yesterday',
			'music_artist' => 'Lovelyz',
			'music_shortlyric' => 'Naeilbuteo mot bomyeon neoneun amureochi anheul geoni
Annyeongiran malloman cham swiun geot
Maeil neoui moksorin naege seupgwanboda museounde
Neo honjaseo junbihago geureon yaegi hajima.

Hwareul n...',
			'music_downloads' => '33',
			'music_bitrate' => '1000',
			'music_length' => '221',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '4'),
		6 => array('music_id' => '1941792',
			'cat_id' => '2',
			'cat_level' => '1',
			'cover_id' => '93021',
			'music_title_url' => 'tan-cung-noi-nho~will',
			'music_title' => 'Tận Cùng Nỗi Nhớ',
			'music_artist' => 'Will',
			'music_shortlyric' => 'Anh chơi vơi, nơi góc phố quen mình từng,
Từng là tất cả.
Hôm ấy mây xanh ngát trời.
Cố giữ lấy chút ấm áp từ tay em
Nhưng biết sao được
Hôm nay mình chia tay.
Những tấm hình kỷ niệm của chún...',
			'music_downloads' => '867',
			'music_bitrate' => '1000',
			'music_length' => '286',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		7 => array('music_id' => '1943457',
			'cat_id' => '2',
			'cat_level' => '2',
			'cover_id' => '93261',
			'music_title_url' => 'firefly~jim-yosef',
			'music_title' => 'Firefly',
			'music_artist' => 'Jim Yosef',
			'music_shortlyric' => '',
			'music_downloads' => '8444',
			'music_bitrate' => '1000',
			'music_length' => '256',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		8 => array('music_id' => '1944782',
			'cat_id' => '2',
			'cat_level' => '4',
			'cover_id' => '0',
			'music_title_url' => 'way-back-home~sao-truc',
			'music_title' => 'Way Back Home',
			'music_artist' => 'Sáo Trúc',
			'music_shortlyric' => '멈춘 시간 속 잠든 너를 찾아가
[t2]Meomchun sigan sok jamdeun neoreul chajaga
[t1]Trong phút giây thời gian ngưng đọng, anh đi tìm em và chìm vào giấc ngủ

아무리 막아도 결국 너의 곁인 걸
[t2]Amuri magado gyeolguk neoui gye...',
			'music_downloads' => '261',
			'music_bitrate' => '192',
			'music_length' => '219',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		9 => array('music_id' => '1950356',
			'cat_id' => '2',
			'cat_level' => '1',
			'cover_id' => '0',
			'music_title_url' => 'co-ay-da-tung~shine-thanh-anh',
			'music_title' => 'Cô Ấy Đã Từng',
			'music_artist' => 'Shine Thành Anh',
			'music_shortlyric' => 'Cô ấy đã từng nghĩ mình chẳng yêu ai vì những tổn thương ngày xưa sót lại
Nhưng đến một ngày nghe được thanh âm ấy khiến cô yếu lòng
Cô ấy đã từng ngân nga giai điệu yêu thương, vì đơn giản mong...',
			'music_downloads' => '33',
			'music_bitrate' => '1000',
			'music_length' => '235',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		10 => array('music_id' => '1950373',
			'cat_id' => '2',
			'cat_level' => '2',
			'cover_id' => '94090',
			'music_title_url' => 'speed~helix',
			'music_title' => 'Speed',
			'music_artist' => 'Helix',
			'music_shortlyric' => '',
			'music_downloads' => '318',
			'music_bitrate' => '1000',
			'music_length' => '217',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		11 => array('music_id' => '1950738',
			'cat_id' => '2',
			'cat_level' => '1',
			'cover_id' => '94141',
			'music_title_url' => 'phai-the-thoi~le-bao-binh',
			'music_title' => 'Phải Thế Thôi',
			'music_artist' => 'Lê Bảo Bình',
			'music_shortlyric' => 'Tối qua anh đi cà phê trà ngoài phố
Thấy em đang bên 1 người lạ
Ôi sao xót xa, ôi sao nghiệt ngã
Hoá ra bao lâu nay, anh chỉ là một ngưới thứ ba.

Tình yêu bao lâu nay em lừa dối
Để cho anh nhận nh...',
			'music_downloads' => '335',
			'music_bitrate' => '320',
			'music_length' => '286',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		12 => array('music_id' => '1951469',
			'cat_id' => '2',
			'cat_level' => '1',
			'cover_id' => '94263',
			'music_title_url' => 'em-hanh-phuc-chu~nguyen-dinh-vu',
			'music_title' => 'Em Hạnh Phúc Chứ',
			'music_artist' => 'Nguyễn Đình Vũ',
			'music_shortlyric' => '',
			'music_downloads' => '152',
			'music_bitrate' => '1000',
			'music_length' => '276',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		13 => array('music_id' => '1936324',
			'cat_id' => '2',
			'cat_level' => '2',
			'cover_id' => '92240',
			'music_title_url' => 'ocean~ikson',
			'music_title' => 'Ocean',
			'music_artist' => 'Ikson',
			'music_shortlyric' => '',
			'music_downloads' => '227',
			'music_bitrate' => '1000',
			'music_length' => '184',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '2'),
		14 => array('music_id' => '1938225',
			'cat_id' => '2',
			'cat_level' => '5',
			'cover_id' => '93797',
			'music_title_url' => 'violet-snow-for-orchestra~evan-call',
			'music_title' => 'Violet Snow For Orchestra',
			'music_artist' => 'Evan Call',
			'music_shortlyric' => '',
			'music_downloads' => '40',
			'music_bitrate' => '1000',
			'music_length' => '173',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '2'),
		15 => array('music_id' => '1943819',
			'cat_id' => '2',
			'cat_level' => '3',
			'cover_id' => '93336',
			'music_title_url' => 'ho-hap~quach-tuan-than',
			'music_title' => 'Hô Hấp (呼吸)',
			'music_artist' => 'Quách Tuấn Thần',
			'music_shortlyric' => '大海沉默不语
风向心底吹去
在回忆中遥望你
是熟悉的背影
拉住你
来不及
假如再碰到你
哪怕就寒暄几句
时间将我打捞起
心浮沉在海域
只剩下
冰冷的空气陪我叹息
放开手
让你走
我要如何假装你没来过
从此后
惩罚我
呼吸没有你的痛
以为站在原地
就可以回到曾经
那被放大的孤寂
和心上的缝隙
越刻意
越不知如何将它抹去
放开手
让你走
我要如何假装你没来过
从此后
惩罚我
呼吸没有你的痛
放开...',
			'music_downloads' => '149',
			'music_bitrate' => '1000',
			'music_length' => '276',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '2'),
		16 => array('music_id' => '1945312',
			'cat_id' => '2',
			'cat_level' => '2',
			'cover_id' => '93481',
			'music_title_url' => 'paradise~ikson',
			'music_title' => 'Paradise',
			'music_artist' => 'Ikson',
			'music_shortlyric' => '',
			'music_downloads' => '755',
			'music_bitrate' => '1000',
			'music_length' => '231',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '2'),
		17 => array('music_id' => '1945715',
			'cat_id' => '2',
			'cat_level' => '2',
			'cover_id' => '93531',
			'music_title_url' => 'dreams~piano-peace',
			'music_title' => 'Dreams',
			'music_artist' => 'Piano Peace',
			'music_shortlyric' => '',
			'music_downloads' => '186',
			'music_bitrate' => '1000',
			'music_length' => '208',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '2'),
		18 => array('music_id' => '1945730',
			'cat_id' => '2',
			'cat_level' => '2',
			'cover_id' => '93532',
			'music_title_url' => 'jazz-night~piano-peace',
			'music_title' => 'Jazz Night',
			'music_artist' => 'Piano Peace',
			'music_shortlyric' => '',
			'music_downloads' => '286',
			'music_bitrate' => '1000',
			'music_length' => '166',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '2'),
		19 => array('music_id' => '1945734',
			'cat_id' => '2',
			'cat_level' => '2',
			'cover_id' => '93532',
			'music_title_url' => 'piano-serenade~piano-peace',
			'music_title' => 'Piano Serenade',
			'music_artist' => 'Piano Peace',
			'music_shortlyric' => '',
			'music_downloads' => '65',
			'music_bitrate' => '1000',
			'music_length' => '174',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '2'),
	),
	3 => array(
		0 => array('music_id' => '1905460',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '94240',
			'music_title_url' => 'nen-va-hoa~rhymastic',
			'music_title' => 'Nến Và Hoa',
			'music_artist' => 'Rhymastic',
			'music_shortlyric' => 'Buccellati lấp lánh
Ươm lên tai với nét mặt rạng ngời
Maserati hai cánh
Ngăn cho em tách biệt miệng đời.

Lướt xuống phố không phanh
Băng qua nhanh khuôn viên mỗi tối
Dinh cơ dang tay sẵn lối
Nơi...',
			'music_downloads' => '29916',
			'music_bitrate' => '1000',
			'music_length' => '166',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '141'),
		1 => array('music_id' => '1951732',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '94284',
			'music_title_url' => 'gia-ngay-dau-dung-noi-thuong-nhau~isaac',
			'music_title' => 'Giá Ngày Đầu Đừng Nói Thương Nhau',
			'music_artist' => 'Isaac',
			'music_shortlyric' => 'Dẫu đã biết người không nhung nhớ
Dẫu đã biết tình không như mơ
Thế thế sao còn buồn, thế thế sao còn hy vọng nhiều.

Dẫu đã biết càng yêu càng đau
Dẫu đã biết người chẳng về đâu
Thế thế sao c...',
			'music_downloads' => '5152',
			'music_bitrate' => '1000',
			'music_length' => '270',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '121'),
		2 => array('music_id' => '1947516',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '93770',
			'music_title_url' => 'thanh-xuan~da-lab',
			'music_title' => 'Thanh Xuân',
			'music_artist' => 'Da LAB',
			'music_shortlyric' => '[Intro/Outro:]
Hôm nay ta thức dậy cũng như thường nhật
Thấy thanh xuân ngày nào bỗng dưng trở lại
Em soi gương cười duyên chẳng còn thấy đâu những vết đồi mồi
Mặc một chiếc váy xinh ngồi chờ an...',
			'music_downloads' => '13417',
			'music_bitrate' => '1000',
			'music_length' => '220',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '116'),
		3 => array('music_id' => '1950901',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '94194',
			'music_title_url' => 'minh-chia-tay-di~erik',
			'music_title' => 'Mình Chia Tay Đi',
			'music_artist' => 'Erik',
			'music_shortlyric' => 'Đã mất nhau thật rồi bởi vì em quá nhiều đổi thay
Đã mệt mỏi khi cố gắng chấp nhận
Sau những gì anh đã trao em, thì em có quá nhẫn tâm không?

Đừng nói yêu làm gì vì anh đã nhiều tổn thương
Môi...',
			'music_downloads' => '11308',
			'music_bitrate' => '1000',
			'music_length' => '245',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '88'),
		4 => array('music_id' => '1947840',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '0',
			'music_title_url' => 'nguoi-hay-quen-anh-di~bang-kieu-anh-khang',
			'music_title' => 'Người Hãy Quên Anh Đi',
			'music_artist' => 'Bằng Kiều; Anh Khang',
			'music_shortlyric' => 'Người yêu hỡi dù gì cũng xa nhau rồi
Ngày nào chiếc hôn bao đêm rã rời giờ đã hết rồi
Chẳng còn hơi ấm trên đầu môi
Người yêu hỡi giờ đây tiếng yêu phai phôi
Chỉ còn những đêm cô đơn rối bời giọt n...',
			'music_downloads' => '2261',
			'music_bitrate' => '320',
			'music_length' => '267',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '79'),
		5 => array('music_id' => '1936298',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '92234',
			'music_title_url' => 'buon-khong-em~dat-g',
			'music_title' => 'Buồn Không Em',
			'music_artist' => 'Đạt G',
			'music_shortlyric' => 'Còn buồn không em, sao đêm về lặng im một mình
Chuyện buồn qua chưa? Đừng khóc nữa nước mắt không thừa
Vài giọt tuôn rơi cũng đủ làm tan nát bầu trời
Không nói nên lời cứ im lặng âm thầm ôm đau.

G...',
			'music_downloads' => '49994',
			'music_bitrate' => '1000',
			'music_length' => '384',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '77'),
		6 => array('music_id' => '1952615',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '94418',
			'music_title_url' => 'do-em-biet-anh-dang-nghi-gi~justatee-den-bien',
			'music_title' => 'Đố Em Biết Anh Đang Nghĩ Gì',
			'music_artist' => 'JustaTee; Đen; Biên',
			'music_shortlyric' => '[Intro: JT &amp; Đen]
Đố em biết anh đang nghĩ gì. [x4]

[Verse: Đen]
Ngoài cửa sổ là cơn mưa đang đổ chéo
Và anh biết khói thuốc chẳng có gì là bổ béo
Khi mà người đàn ông của em trở nên lầm lì
Cũ...',
			'music_downloads' => '393',
			'music_bitrate' => '1000',
			'music_length' => '246',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '74'),
		7 => array('music_id' => '1941791',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '93021',
			'music_title_url' => 'tan-cung-noi-nho~will',
			'music_title' => 'Tận Cùng Nỗi Nhớ',
			'music_artist' => 'Will',
			'music_shortlyric' => '1. Anh chơi vơi nơi góc phố quen
Mình từng, từng là tất cả
Hôm ấy mây xanh ngát trời
Cố giữ lấy chút ấm áp từ tay em
Nhưng biết sao được, hôm nay mình chia tay.

Những tấm hình kỷ niệm của chúng mì...',
			'music_downloads' => '30535',
			'music_bitrate' => '1000',
			'music_length' => '279',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '65'),
		8 => array('music_id' => '1952365',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '94371',
			'music_title_url' => 'canh-hong-phai~hoang-yen-chibi',
			'music_title' => 'Cánh Hồng Phai',
			'music_artist' => 'Hoàng Yến Chibi',
			'music_shortlyric' => '1. Nàng như một đoá hồng phai
Hương sắc héo hon theo những ngày dài
Cuộc tình đi qua trong em mang bao tiếc nuối
Trái tim vỡ tan.

Nhặt lại từng cánh rụng rơi
Nàng vẫn xót xa cho chính đời mình
Vì...',
			'music_downloads' => '588',
			'music_bitrate' => '1000',
			'music_length' => '232',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '61'),
		9 => array('music_id' => '1950902',
			'cat_id' => '3',
			'cat_level' => '3',
			'cover_id' => '94165',
			'music_title_url' => 'ngay-tinh-phoi-pha-touliver-remix~le-hieu',
			'music_title' => 'Ngày Tình Phôi Pha (Touliver Remix)',
			'music_artist' => 'Lê Hiếu',
			'music_shortlyric' => 'Tình là cơn mộng thắm lúc ban đầu
Rồi nhạt nhoà như nắng phai trong chiều
Tình là muôn ngàn nỗi u sầu
Người đã mang cho anh rất nhiều.

Một khi yêu nào có mấy ai ngờ
Người mình yêu sẽ dối gian bao...',
			'music_downloads' => '6222',
			'music_bitrate' => '1000',
			'music_length' => '253',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '60'),
		10 => array('music_id' => '1951972',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '94318',
			'music_title_url' => 'sao-ai-van-chua-ve~quang-hung-rum',
			'music_title' => 'Sao Ai Vẫn Chưa Về',
			'music_artist' => 'Quang Hùng; Rum',
			'music_shortlyric' => 'Màn sương khuất lối bóng dáng ấy đã xa nơi này
Tìm em nơi đâu trong men say vấn vương chiều mưa
Gió cuốn ai đi mang bao sầu bi nỗi đau biệt ly tương phùng
Nỗi nhớ trong đêm như đang dài thêm tiế...',
			'music_downloads' => '1177',
			'music_bitrate' => '1000',
			'music_length' => '233',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '54'),
		11 => array('music_id' => '1946616',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '93632',
			'music_title_url' => 've-voi-anh-di~andiez',
			'music_title' => 'Về Với Anh Đi',
			'music_artist' => 'Andiez',
			'music_shortlyric' => 'Nếu sớm mai em phải rời xa nơi đây
Hãy cho anh được biết em lưu luyến điều gì
Giọng nói ấm êm này hay là những chiếc hôn thật sâu
Hay em sẽ quên đi hết.

Nếu chỉ em (Và nếu có anh) âm thầm chờ anh...',
			'music_downloads' => '6258',
			'music_bitrate' => '1000',
			'music_length' => '291',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '51'),
		12 => array('music_id' => '1948693',
			'cat_id' => '3',
			'cat_level' => '3',
			'cover_id' => '0',
			'music_title_url' => 'em-muon-anh-dua-em-ve-emadev~ho-ngoc-ha',
			'music_title' => 'Em Muốn Anh Đưa Em Về (#EMADEV)',
			'music_artist' => 'Hồ Ngọc Hà',
			'music_shortlyric' => '',
			'music_downloads' => '2405',
			'music_bitrate' => '320',
			'music_length' => '251',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '47'),
		13 => array('music_id' => '1952539',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '94407',
			'music_title_url' => 'ai-la-ai-cua-ai~trinh-thang-binh',
			'music_title' => 'Ai Là Ai Của Ai',
			'music_artist' => 'Trịnh Thăng Bình',
			'music_shortlyric' => 'Cô đơn đủ lâu thì ta mới hiểu thấu
để giữ nhau bây giờ phải đổi bằng niềm đau.
Yêu thương đủ lâu thì mới hiểu đừng nghĩ quá xa xôi
Lỡ khi ai quay đi rồi, thì ta cũng sẽ tổn thương ít hơn.
Nếu y...',
			'music_downloads' => '365',
			'music_bitrate' => '1000',
			'music_length' => '251',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '47'),
		14 => array('music_id' => '1948154',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '0',
			'music_title_url' => 'nang-dem~tri',
			'music_title' => 'Nắng Đêm',
			'music_artist' => 'T.R.I',
			'music_shortlyric' => 'Nắng long lanh hàng mi
Khẽ nhắm mắt đung đưa tình tang
Làn môi xinh nhẹ nhàng
Mang đến cho tội lạ kì
Gió mơn man cỏ cây
Và gió có thấy tim tôi lẻ loi
Chờ mội ngày tia nắng kia chạm tim tôi.

Nắn...',
			'music_downloads' => '2147',
			'music_bitrate' => '1000',
			'music_length' => '232',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '46'),
		15 => array('music_id' => '1952538',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '94406',
			'music_title_url' => 'muon~miu-le',
			'music_title' => 'Muốn',
			'music_artist' => 'Miu Lê',
			'music_shortlyric' => '',
			'music_downloads' => '269',
			'music_bitrate' => '1000',
			'music_length' => '211',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '45'),
		16 => array('music_id' => '1943500',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '93267',
			'music_title_url' => 'tram-dung-chan~kimmese-den',
			'music_title' => 'Trạm Dừng Chân',
			'music_artist' => 'Kimmese; Đen',
			'music_shortlyric' => '1. Trạm dừng chân của đôi ta trước mặt
Em tăng ga bỏ lại phía sau
Từng nhịp tim níu đau thương chìm sâu
Tiếng yêu kia chưa nói đã biến tan vào nhau
Ngọn đèn đêm với góc phố yên lặng
Tay em khô...',
			'music_downloads' => '16157',
			'music_bitrate' => '1000',
			'music_length' => '290',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '44'),
		17 => array('music_id' => '1946617',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '93633',
			'music_title_url' => 'tan-cung-noi-nho-new-version~will-han-sara',
			'music_title' => 'Tận Cùng Nỗi Nhớ (New Version)',
			'music_artist' => 'Will; Han Sara',
			'music_shortlyric' => '1. Anh chơi vơi nơi góc phố quen
Mình từng, từng là tất cả
Hôm ấy mây xanh ngát trời
Cố giữ lấy chút ấm áp từ tay em
Nhưng biết sao được, hôm nay mình chia tay.

Những tấm hình kỷ niệm của chúng mì...',
			'music_downloads' => '9887',
			'music_bitrate' => '1000',
			'music_length' => '280',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '44'),
		18 => array('music_id' => '1945523',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '93502',
			'music_title_url' => 'nguoi-khac-piano-rnb-version~phan-manh-quynh',
			'music_title' => 'Người Khác (Piano RnB Version)',
			'music_artist' => 'Phan Mạnh Quỳnh',
			'music_shortlyric' => '1. Anh đã chờ em rất lâu
Bao thu đông đi qua những xuân hạ tiếp nối
Nhiều mùa mưa tiếp nối
Anh giữ niềm riêng rất sâu
Có lẽ những góc tối quen một người hay nương nhờ.

Em tay trong tay 1 chàng lãn...',
			'music_downloads' => '6114',
			'music_bitrate' => '1000',
			'music_length' => '228',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '42'),
		19 => array('music_id' => '1950737',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '94141',
			'music_title_url' => 'phai-the-thoi~le-bao-binh',
			'music_title' => 'Phải Thế Thôi',
			'music_artist' => 'Lê Bảo Bình',
			'music_shortlyric' => 'Tối qua anh đi cà phê trà ngoài phố
Thấy em đang bên 1 người lạ
Ôi sao xót xa, ôi sao nghiệt ngã
Hoá ra bao lâu nay, anh chỉ là một ngưới thứ ba.

Tình yêu bao lâu nay em lừa dối
Để cho anh nhận nh...',
			'music_downloads' => '2432',
			'music_bitrate' => '1000',
			'music_length' => '285',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '42'),
		20 => array('music_id' => '1952322',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '94366',
			'music_title_url' => 'yeu-anh-em-nhe~huyr-tung-viu',
			'music_title' => 'Yêu Anh Em Nhé',
			'music_artist' => 'HuyR; Tùng Viu',
			'music_shortlyric' => 'Em yêu ơi có nhớ cái ngày mà anh gặp em
Anh đã nói với em một điều là anh (x4) yêu em
Bức thư tình anh trao nhớ là đưng cho ai xem nhớ
Mới xa nhau được có mấy hôm mà sao lại thấy nhớ
Nhớ từ sáng đế...',
			'music_downloads' => '413',
			'music_bitrate' => '1000',
			'music_length' => '274',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '41'),
		21 => array('music_id' => '1945844',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '93778',
			'music_title_url' => 'gui-anh-va-co-ay~huong-tram',
			'music_title' => 'Gửi Anh Và Cô Ấy',
			'music_artist' => 'Hương Tràm',
			'music_shortlyric' => '1. Em đã thấy điều này từ đầu
Em biết anh sẽ chẳng thể vượt qua những cám dỗ cuộc đời
Em chỉ không ngờ là quá nhanh
Người ta nói khi yêu đừng là kẻ yêu đối phương nhiều hơn
Nhưng lỡ yêu, em phải l...',
			'music_downloads' => '26323',
			'music_bitrate' => '1000',
			'music_length' => '284',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '40'),
		22 => array('music_id' => '1941482',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '92979',
			'music_title_url' => 'yeu-roi~tino',
			'music_title' => 'Yêu Rồi',
			'music_artist' => 'Tino',
			'music_shortlyric' => 'Khi yêu ai rồi
Chẳng cần biết bên ngoài nắng to hay là mưa rào
Chỉ cần biết phải chạy rất nhanh
Để được tới nơi có người mình thương.

Khi yêu ai rồi
Chẳng cần biết mai này có vui hay là không
C...',
			'music_downloads' => '8566',
			'music_bitrate' => '320',
			'music_length' => '196',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '37'),
		23 => array('music_id' => '1940036',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '92764',
			'music_title_url' => 'em-moi-la-nguoi-yeu-anh-acoustic-version~min',
			'music_title' => 'Em Mới Là Người Yêu Anh (Acoustic Version)',
			'music_artist' => 'Min',
			'music_shortlyric' => '1. Bây giờ hai giờ sáng ở nơi ngã tư đường
Ta ngồi bên cạnh nhau lặng im ngắm phố phường
Trong lòng em giờ đây từng cảm xúc bất thường
But I just can\'t say.

Anh hỏi em giờ đây rằng anh biết làm gì...',
			'music_downloads' => '12659',
			'music_bitrate' => '128',
			'music_length' => '235',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '33'),
		24 => array('music_id' => '1949913',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '0',
			'music_title_url' => 'dep-nhat-la-em~soobin-hoang-son-ji-yeon',
			'music_title' => 'Đẹp Nhất Là Em',
			'music_artist' => 'Soobin Hoàng Sơn, Ji Yeon',
			'music_shortlyric' => 'Điều gì làm em suy nghĩ
Vẻ mặt em đang rất buồn
Người hãy nói tất cả những suy tư trong lòng đi

Thật lòng em đang không biết
Với anh em bây giờ như thế nào
Vẫn ngốc nghếch như xưa hay vẫn là...',
			'music_downloads' => '1165',
			'music_bitrate' => '192',
			'music_length' => '186',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '33'),
		25 => array('music_id' => '1943658',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '93297',
			'music_title_url' => 'nguoi-thuong~hoang-ton',
			'music_title' => 'Người Thương',
			'music_artist' => 'Hoàng Tôn',
			'music_shortlyric' => 'Trong thế giới muôn màu của những vì sao
Lấp lánh ánh sáng phía trên trời cao
Có những ước ao của đôi tình nhân.

Rằng sau khi thành thân sẽ yêu thật lâu
Dẫu có sóng gió theo chân về sau
Tay lu...',
			'music_downloads' => '6437',
			'music_bitrate' => '1000',
			'music_length' => '282',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '31'),
		26 => array('music_id' => '1947702',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '0',
			'music_title_url' => 'mashup-nevada-x-di-di-di~daniel-mastro-mashup-remix',
			'music_title' => 'Mashup Nevada x Đi Đi Đi',
			'music_artist' => 'Daniel Mastro Mashup Remix',
			'music_shortlyric' => '',
			'music_downloads' => '1822',
			'music_bitrate' => '320',
			'music_length' => '229',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '30'),
		27 => array('music_id' => '1950468',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '0',
			'music_title_url' => 'quan-he-rong~binh-gold',
			'music_title' => 'Quan Hệ Rộng',
			'music_artist' => 'Bình Gold',
			'music_shortlyric' => 'Không cần phải quan hệ rộng,
Quan hệ nhiều thì tự nó rộng à.
Quan hệ trong giấc thì đúng thực sự là cơn ác mộng.
Mà đéo hiểu sao?
Sáng thứ 2 chào cờ thằng em mình lại khóc.
Cô đơn lâu quá rồi, khôn...',
			'music_downloads' => '917',
			'music_bitrate' => '192',
			'music_length' => '131',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '30'),
		28 => array('music_id' => '1945845',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '93543',
			'music_title_url' => 'thich-roi-day~suni-ha-linh',
			'music_title' => 'Thích Rồi Đấy',
			'music_artist' => 'Suni Hạ Linh',
			'music_shortlyric' => 'Gặp anh trên phố đông người lòng cứ rối bời
Vì ánh mắt đó ngẩn ngơ chưa thành lời
Từ lâu anh vẫn luôn chờ mà cứ thẫn thờ
Làm con tim em xuyến xao đến từng giờ.

Này chàng trai bao lần em gặp anh đứ...',
			'music_downloads' => '7691',
			'music_bitrate' => '1000',
			'music_length' => '213',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '26'),
		29 => array('music_id' => '1946030',
			'cat_id' => '3',
			'cat_level' => '1',
			'cover_id' => '93564',
			'music_title_url' => 'sai~uni5',
			'music_title' => 'Sai',
			'music_artist' => 'Uni5',
			'music_shortlyric' => 'Mưa rơi, rơi nhẹ rơi
Hạt mưa như đang khóc thay cho anh nơi đây
Mây vội bay khi buồn vương nhẹ lay
Vì vậy chắc mây không vui với nỗi nhớ nơi này
Với nỗi nhớ nơi này, với đau thương vơi đầy.

[ĐK:]...',
			'music_downloads' => '7268',
			'music_bitrate' => '1000',
			'music_length' => '184',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '26'),
	),
	4 => array(
		0 => array('music_id' => '1941312',
			'cat_id' => '4',
			'cat_level' => '1',
			'cover_id' => '92938',
			'music_title_url' => 'thunderclouds~lsd',
			'music_title' => 'Thunderclouds',
			'music_artist' => 'LSD',
			'music_shortlyric' => '[Verse 1: Sia]
All I need is one
[t1]Tất cả những gì em cần chỉ là một
One old man is enough
[t1]Một người đàn ông trưởng thành thôi là đủ
Babe, you gotta
[t1]Anh ơi, anh chì cần
Just turn your fea...',
			'music_downloads' => '24713',
			'music_bitrate' => '1000',
			'music_length' => '187',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '116'),
		1 => array('music_id' => '1945235',
			'cat_id' => '4',
			'cat_level' => '1',
			'cover_id' => '91314',
			'music_title_url' => 'natural~imagine-dragons',
			'music_title' => 'Natural',
			'music_artist' => 'Imagine Dragons',
			'music_shortlyric' => '[Verse 1:]
Well, you hold the line
[t1]Khi bạn vẫn là người đứng vững
When every one of them is giving up or giving in, tell me
[t1]Giữa một rừng người đã bỏ cuộc hoặc đầu hàng, hãy nói với tôi
In...',
			'music_downloads' => '32503',
			'music_bitrate' => '1000',
			'music_length' => '189',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '70'),
		2 => array('music_id' => '1950986',
			'cat_id' => '4',
			'cat_level' => '1',
			'cover_id' => '94182',
			'music_title_url' => 'electricity~silk-city-dua-lipa-diplo-mark-ronson',
			'music_title' => 'Electricity',
			'music_artist' => 'Silk City; Dua Lipa; Diplo; Mark Ronson',
			'music_shortlyric' => '[Verse 1: Dua Lipa]
Falling into you, baby
[t1]Em mê mẩn anh mất rồi người ơi
Even electricity can\'t compare to what I feel when I\'m with you
[t1]Ngay cả những cơn sóng điện cũng chẳng thể sánh nổi...',
			'music_downloads' => '4484',
			'music_bitrate' => '1000',
			'music_length' => '238',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '55'),
		3 => array('music_id' => '1943739',
			'cat_id' => '4',
			'cat_level' => '3',
			'cover_id' => '93315',
			'music_title_url' => 'promises~calvin-harris-sam-smith',
			'music_title' => 'Promises',
			'music_artist' => 'Calvin Harris; Sam Smith',
			'music_shortlyric' => '[Verse 1: Sam Smith]
Are you drunk enough?
[t1]Em đã say thật chưa?
Not to judge what I\'m doin\'
[t1]Để không trách móc những việc anh đang làm
Are you high enough?
[t1]Em đã mê man thật chưa?
To ex...',
			'music_downloads' => '10027',
			'music_bitrate' => '1000',
			'music_length' => '213',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '42'),
		4 => array('music_id' => '1946912',
			'cat_id' => '4',
			'cat_level' => '1',
			'cover_id' => '93667',
			'music_title_url' => 'right-now~nick-jonas-robin-schulz',
			'music_title' => 'Right Now',
			'music_artist' => 'Nick Jonas; Robin Schulz',
			'music_shortlyric' => '[Verse 1]
You are my water, my sun, my movie stars
[t1]Em là nước, là mặt trời, là nữ minh tinh của lòng anh
Your heart is all I need
[t1]Anh chỉ cần trái tim của em mà thôi
It start when you come...',
			'music_downloads' => '2762',
			'music_bitrate' => '1000',
			'music_length' => '201',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '38'),
		5 => array('music_id' => '1948856',
			'cat_id' => '4',
			'cat_level' => '2',
			'cover_id' => '93955',
			'music_title_url' => 'fall~eminem',
			'music_title' => 'Fall',
			'music_artist' => 'Eminem',
			'music_shortlyric' => '[Intro: Eminem &amp; Justin Vernon]
You know, everybody\'s been tellin\' me what they think about me for the last few months
It\'s too loud
Maybe it\'s time I tell \'em what I think about them
Can\'t hea...',
			'music_downloads' => '2618',
			'music_bitrate' => '1000',
			'music_length' => '262',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '36'),
		6 => array('music_id' => '1951175',
			'cat_id' => '4',
			'cat_level' => '3',
			'cover_id' => '94209',
			'music_title_url' => 'be-somebody~steve-aoki-nicky-romero-kiiara',
			'music_title' => 'Be Somebody',
			'music_artist' => 'Steve Aoki; Nicky Romero; Kiiara',
			'music_shortlyric' => '[Verse 1: Kiiara]
They say &quot;You should simmer down
[t1]Họ nói &quot;Con nên bình tĩnh hơn
Wait your turn, don\'t talk too loud
[t1]Hãy chờ đợi cơ hội, đừng đao to búa lớn
\'Cause maybe you\'re to...',
			'music_downloads' => '1894',
			'music_bitrate' => '1000',
			'music_length' => '205',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '36'),
		7 => array('music_id' => '1941370',
			'cat_id' => '4',
			'cat_level' => '1',
			'cover_id' => '92957',
			'music_title_url' => '8-letters~why-dont-we',
			'music_title' => '8 Letters',
			'music_artist' => 'Why Don\'t We',
			'music_shortlyric' => '[Verse 1: Jonah Marais]
You know me the best
You know my worst, see me hurt, but you don\'t judge
That, right there, is the scariest feeling
Opening and closing up again
I\'ve been hurt so I don\'t tr...',
			'music_downloads' => '1042',
			'music_bitrate' => '1000',
			'music_length' => '190',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '34'),
		8 => array('music_id' => '1951181',
			'cat_id' => '4',
			'cat_level' => '1',
			'cover_id' => '94215',
			'music_title_url' => 'love-someone~lukas-graham',
			'music_title' => 'Love Someone',
			'music_artist' => 'Lukas Graham',
			'music_shortlyric' => '[Verse 1:]
There are days
[t1]Thời gian gần đây
I wake up and I pinch myself
[t1]Cứ mỗi lần anh thức dậy, anh lại nhéo mình một cái thật đau
You\'re with me, not someone else
[t1]Em vẫn đang ở đây,...',
			'music_downloads' => '1208',
			'music_bitrate' => '1000',
			'music_length' => '205',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '34'),
		9 => array('music_id' => '1937460',
			'cat_id' => '4',
			'cat_level' => '3',
			'cover_id' => '92396',
			'music_title_url' => 'lunisolar~shaun',
			'music_title' => 'Lunisolar',
			'music_artist' => 'Shaun',
			'music_shortlyric' => '[Verse 1]
Just the sun hits on my hair
[t1]Những ánh nắng vàng xuyên qua tóc anh
Like shiny hope
[t1]Tựa một niềm hi vọng cháy bỏng
But don\'t know where to go
[t1]Nhưng anh lại chẳng biết phải đi đ...',
			'music_downloads' => '28654',
			'music_bitrate' => '1000',
			'music_length' => '222',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '32'),
		10 => array('music_id' => '1946621',
			'cat_id' => '4',
			'cat_level' => '3',
			'cover_id' => '93635',
			'music_title_url' => 'rumors~r3hab-sofia-carson',
			'music_title' => 'Rumors',
			'music_artist' => 'R3hab; Sofia Carson',
			'music_shortlyric' => '[Verse 1: Sofia Carson]
I could feel you watching me
[t1]Em có thể cảm nhận được anh đang dõi theo em
All your friends are, trying to leave
[t1]Bạn của anh, bọn nó đang về hết rồi kìa
You hit me wi...',
			'music_downloads' => '1393',
			'music_bitrate' => '1000',
			'music_length' => '138',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '31'),
		11 => array('music_id' => '1946888',
			'cat_id' => '4',
			'cat_level' => '1',
			'cover_id' => '93663',
			'music_title_url' => 'goodbye~jason-derulo-david-guetta-nicki-minaj-willy-william',
			'music_title' => 'Goodbye',
			'music_artist' => 'Jason Derulo; David Guetta; Nicki Minaj; Willy William',
			'music_shortlyric' => '[Intro: Nicki Minaj &amp; Jason Derulo]
It\'s time to say goodbye
But don\'t leave me alone, just stay for the night
I need you, I need you tonight
Derulo.

[Verse 1: Jason Derulo]
Ooh it\'s 3 in the...',
			'music_downloads' => '3863',
			'music_bitrate' => '1000',
			'music_length' => '195',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '30'),
		12 => array('music_id' => '1943549',
			'cat_id' => '4',
			'cat_level' => '1',
			'cover_id' => '93272',
			'music_title_url' => 'real-friends~camila-cabello-swae-lee',
			'music_title' => 'Real Friends',
			'music_artist' => 'Camila Cabello; Swae Lee',
			'music_shortlyric' => '[Verse 1: Camila Cabello]
No, I think I\'ll stay in tonight
[t1]Thôi, tôi nghĩ mình sẽ ở nhà tối nay
Skip the conversations and the &quot;oh, I\'m fine&quot;s
[t1]Bỏ qua những cuộc chuyện trò và cả n...',
			'music_downloads' => '2589',
			'music_bitrate' => '1000',
			'music_length' => '222',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '26'),
		13 => array('music_id' => '1943640',
			'cat_id' => '4',
			'cat_level' => '3',
			'cover_id' => '93291',
			'music_title_url' => 'happier~marshmello-bastille',
			'music_title' => 'Happier',
			'music_artist' => 'Marshmello; Bastille',
			'music_shortlyric' => '[Intro]
Lately, I\'ve been, I\'ve been thinking
[t1]Gần đây, trong đầu anh, cứ có những suy nghĩ rằng
I want you to be happier, I want you to be happier.
[t1]Anh muốn em được vui vẻ hơn, anh muốn em...',
			'music_downloads' => '7820',
			'music_bitrate' => '1000',
			'music_length' => '214',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '26'),
		14 => array('music_id' => '1952616',
			'cat_id' => '4',
			'cat_level' => '2',
			'cover_id' => '94419',
			'music_title_url' => 'rap-devil~machine-gun-kelly',
			'music_title' => 'Rap Devil',
			'music_artist' => 'Machine Gun Kelly',
			'music_shortlyric' => '[Producer Tag]
Oh my god, Ronny

[Verse 1]
Ayy, somebody grab him some clippers (zzzzt)
His fuckin\' beard is weird
Tough talk from a rapper payin\' millions for security a year
&quot;I think my dad\'...',
			'music_downloads' => '92',
			'music_bitrate' => '1000',
			'music_length' => '286',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '26'),
		15 => array('music_id' => '1943749',
			'cat_id' => '4',
			'cat_level' => '1',
			'cover_id' => '93317',
			'music_title_url' => 'breathin~ariana-grande',
			'music_title' => 'Breathin',
			'music_artist' => 'Ariana Grande',
			'music_shortlyric' => '[Verse 1]
Some days, things just take way too much of my energy
[t1]Đôi khi, có nhiều chuyện khiến em thấy kiệt quệ
I look up and the whole room\'s spinning
[t1]Em ngẩng mặt lên và cả căn phòng như...',
			'music_downloads' => '5680',
			'music_bitrate' => '1000',
			'music_length' => '198',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '25'),
		16 => array('music_id' => '1951165',
			'cat_id' => '4',
			'cat_level' => '1',
			'cover_id' => '94204',
			'music_title_url' => 'want-to~dua-lipa',
			'music_title' => 'Want To',
			'music_artist' => 'Dua Lipa',
			'music_shortlyric' => '[Verse 1]
I\'m young for tonight
[t1]Đêm nay tôi thấy mình thật trẻ trung
It\'s all under my control
[t1]Mọi thứ đều nằm dưới sự kiểm soát
I won\'t hesitate
[t1]Tôi sẽ chẳng ngập ngừng đâu
It\'s my tur...',
			'music_downloads' => '2022',
			'music_bitrate' => '1000',
			'music_length' => '211',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '25'),
		17 => array('music_id' => '1938004',
			'cat_id' => '4',
			'cat_level' => '1',
			'cover_id' => '92474',
			'music_title_url' => 'beautiful~bazzi-camila-cabello',
			'music_title' => 'Beautiful',
			'music_artist' => 'Bazzi; Camila Cabello',
			'music_shortlyric' => '[Chorus: Bazzi]
Hey
[t1]Này em,
Beautiful, beautiful, beautiful, beautiful angel
[t1]Nàng thiên thần xinh đẹp, hấp dẫn quyến rũ, lôi cuốn ơi
Love your imperfections, every angle
[t1]Anh yêu cả nhữn...',
			'music_downloads' => '13751',
			'music_bitrate' => '1000',
			'music_length' => '180',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '23'),
		18 => array('music_id' => '1952547',
			'cat_id' => '4',
			'cat_level' => '3',
			'cover_id' => '94411',
			'music_title_url' => 'in-my-mind~dynoro-gigi-dagostino',
			'music_title' => 'In My Mind',
			'music_artist' => 'Dynoro; Gigi D\'Agostino',
			'music_shortlyric' => '[Verse]
And in my mind, in my head
This is where we all came from
The dreams we have, the love we share
This is what we\'re waiting for
And in my mind, in my head
This is where we all came from
The...',
			'music_downloads' => '86',
			'music_bitrate' => '1000',
			'music_length' => '184',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '22'),
		19 => array('music_id' => '1951468',
			'cat_id' => '4',
			'cat_level' => '2',
			'cover_id' => '94262',
			'music_title_url' => 'i-love-it~kanye-west-lil-pump',
			'music_title' => 'I Love It',
			'music_artist' => 'Kanye West; Lil Pump',
			'music_shortlyric' => '[Intro: Adele Givens]
\'Cause you know in the old days
[t1]Mấy mày có biết không, hồi xưa á
They couldn\'t say the shit they wanted to say
[t1]Người ta không thể cứ muốn nói là nói đâu nha
They had t...',
			'music_downloads' => '966',
			'music_bitrate' => '1000',
			'music_length' => '127',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '20'),
	),
	5 => array(
		0 => array('music_id' => '1941317',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '0',
			'music_title_url' => 'dap-an-full-version~phuong-vu-kiet',
			'music_title' => 'Đáp Án (答案) (Full Version)',
			'music_artist' => 'Phương Vũ Kiệt',
			'music_shortlyric' => '',
			'music_downloads' => '2975',
			'music_bitrate' => '320',
			'music_length' => '150',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '20'),
		1 => array('music_id' => '1943391',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '83220',
			'music_title_url' => 'bat-nhiem~tat-dinh-dinh',
			'music_title' => 'Bất Nhiễm (不染)',
			'music_artist' => 'Tát Đỉnh Đỉnh',
			'music_shortlyric' => '不愿染是与非 怎料事与愿违
[t2]Bù yuàn rǎn shì yǔ fēi zěn liào shìyǔyuànwéi
[t1]Không nguyện nhuộm thị phi, sao đoán được kết quả mong muốn.

心中的花枯萎 时光它去不回
[t2]xīnzhōng de huā kūwěi shíguāng tā qù bù huí
[t1]Cá...',
			'music_downloads' => '791',
			'music_bitrate' => '1000',
			'music_length' => '271',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '12'),
		2 => array('music_id' => '1952299',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '94356',
			'music_title_url' => 'thieu-nien-hanh~tieu-mai-ky',
			'music_title' => 'Thiếu Niên Hành (少年行)',
			'music_artist' => 'Tiêu Mại Kỳ',
			'music_shortlyric' => '羡慕 鸟儿会飞翔
飞翔 能抵达远方
远方不枉年轻一场

我们 行走在路上
路上 铺着燎原的光
去冒险一趟

年少不轻狂
行事坦荡荡
伙伴在身旁
前路亮堂堂
火把尽情燃烧志向
意气风发
我们铁壁铜墙

年少不荒唐
少小游四方
伙伴在身旁
去乘风破浪
谈何彷徨来日方长
我的目光
要去天地荡漾

羡慕 鸟儿会飞翔
飞翔 能抵达远方
远方不枉年轻一场

我们 行走在路上
路上 铺着燎原的光
去冒险一...',
			'music_downloads' => '134',
			'music_bitrate' => '1000',
			'music_length' => '215',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '12'),
		3 => array('music_id' => '1948719',
			'cat_id' => '5',
			'cat_level' => '3',
			'cover_id' => '93931',
			'music_title_url' => 'sheep-alan-walker-relift~lay-alan-walker',
			'music_title' => 'Sheep (Alan Walker Relift)',
			'music_artist' => 'Lay; Alan Walker',
			'music_shortlyric' => '[Intro]
Big things sure enough
[t1]Những điều lớn chắc chắn đủ
There\'s a monster coming from the forest
[t1]Có một con quái vật đến từ rừng
Sheep gang glorious
[t1]Băng đảng cừu vinh quang
Run thro...',
			'music_downloads' => '2912',
			'music_bitrate' => '1000',
			'music_length' => '156',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '9'),
		4 => array('music_id' => '1941280',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '92925',
			'music_title_url' => 'am-thanh-cua-tuyet-roi~luc-ho',
			'music_title' => 'Âm Thanh Của Tuyết Rơi (雪落下的声音)',
			'music_artist' => 'Lục Hổ',
			'music_shortlyric' => '轻轻，落在我掌心，
[t2]Qīng qīng, luò zài wǒ zhǎngxīn,
[t1]Nhẹ nhàng, rơi vào lòng bàn tay ta.

静静，在掌中结冰。
[t2]jìng jìng, zài zhǎngzhōng jié bīng.
[t1]Lặng lẽ, kết thành băng giá.

相逢，是前世注定，
[t2]Xiāngféng, s...',
			'music_downloads' => '2462',
			'music_bitrate' => '1000',
			'music_length' => '311',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '8'),
		5 => array('music_id' => '1945339',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '93484',
			'music_title_url' => 'tuong-vong~to-thanh',
			'music_title' => 'Tương Vong  (相忘)',
			'music_artist' => 'Tô Thanh',
			'music_shortlyric' => '依稀相逢花影乱
[t2]Yīxī xiāngféng huāyǐng luàn
[t1]Mơ hồ gặp nhau hoa ảnh loạn.

往日翩翩眷情入耳眠
[t2]wǎngrì piānpiān juàn qíng rù\'ěr mián
[t1]Ngày nào lời yêu quyến luyến nhẹ nhàng rót bên tai.

与君初心遥许意相伴
[t2]y...',
			'music_downloads' => '976',
			'music_bitrate' => '1000',
			'music_length' => '253',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '6'),
		6 => array('music_id' => '1950883',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '94162',
			'music_title_url' => 'mot-trieu-kha-nang~christine-welch',
			'music_title' => 'Một Triệu Khả Năng (一百万个可能)',
			'music_artist' => 'Christine Welch',
			'music_shortlyric' => '幽静 窗外，满地片片寒花
一瞬间，永恒的时差 窝在棉被里
倾听 踏雪听沉默的声音
飘雪藏永恒的身影 雪树下等你

在一瞬间 有一百万个可能
该向前走 或者继续等？
这冬夜里 有百万个不确定
渐入深夜 或期盼天明？
云空的泪 一如冰凌结晶了 成雪花垂
这一瞬间 有一百万个可能
窝进棉被 或面对寒冷

幽静 寒风吹来一缕声音
一瞬间，看着你走近
暖了我冬心
倾听 踏雪听沉默的声音
飘雪藏永恒的身...',
			'music_downloads' => '97',
			'music_bitrate' => '1000',
			'music_length' => '275',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '6'),
		7 => array('music_id' => '1938258',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '92522',
			'music_title_url' => 'hong-tuong-than~ho-ha',
			'music_title' => 'Hồng Tường Thán (红墙叹)',
			'music_artist' => 'Hồ Hạ',
			'music_shortlyric' => '1. 紫禁围红墙
[t2]Zǐ jìn wéi hóng qiáng
[t1]Tường đỏ vây Tử Cấm Thành.

情为所居良
[t2]qíng wéi suǒ jū liáng
[t1]Tình yêu là chốn cư ngụ của những điều tốt đẹp.

断垣涂夕阳
[t2]duàn yuán tú xīyáng
[t1]Nắng chiều...',
			'music_downloads' => '2732',
			'music_bitrate' => '1000',
			'music_length' => '270',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '5'),
		8 => array('music_id' => '1951612',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '94274',
			'music_title_url' => 'forever-young~duong-duong',
			'music_title' => 'Forever Young',
			'music_artist' => 'Dương Dương',
			'music_shortlyric' => '[Ver 1]:
超越 自己
[t2]Chāoyuè zìjǐ
[t1]Vượt qua chính mình,

选择冒险奇迹  求无限和独立
[t2]xuǎnzé màoxiǎn qíjī qiú wúxiàn hé dúlì
[t1]lựa chọn thách thức mạo hiểm, đuổi theo vô tận và tự do.

少年 热情
[t2]shào...',
			'music_downloads' => '163',
			'music_bitrate' => '1000',
			'music_length' => '198',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '5'),
		9 => array('music_id' => '1940496',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '-18655',
			'music_title_url' => 'hoa-tinh~dieu-boi-na',
			'music_title' => 'Hoạ Tình (畫情)',
			'music_artist' => 'Diêu Bối Na',
			'music_shortlyric' => '留住你一面 画在我心间
Liú zhù nǐ yī miàn huà zài wǒ xīn jiān
谁也拿不走 初见的画面
Shuí yě ná bú zǒu chū jiàn de huà miàn
哪怕是岁月 篡改我红颜
Nǎ pà shì suì yuè cuàn gǎi wǒ hóng yán
你还是昔日 多情的少年
Nǐ hái shì xī rì duō qíng...',
			'music_downloads' => '420',
			'music_bitrate' => '1000',
			'music_length' => '326',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '4'),
		10 => array('music_id' => '1942978',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '93182',
			'music_title_url' => 'am-thanh-cua-tuyet-roi~tan-lam',
			'music_title' => 'Âm Thanh Của Tuyết Rơi (雪落下的声音)',
			'music_artist' => 'Tần Lam',
			'music_shortlyric' => '轻轻，落在我掌心，
[t2]Qīng qīng, luò zài wǒ zhǎngxīn
[t1]Nhẹ nhàng, rơi vào lòng bàn tay ta

静静，在掌中结冰。
[t2]jìng jìng, zài zhǎngzhōng jié bīng
[t1]Lặng lẽ, kết thành băng giá

相逢，是前世注定
[t2]Xiāngféng, shì qi...',
			'music_downloads' => '1491',
			'music_bitrate' => '1000',
			'music_length' => '305',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '4'),
		11 => array('music_id' => '1946671',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '93647',
			'music_title_url' => 'huong-mai-nhu-xua~mao-bat-dich-chu-tham',
			'music_title' => 'Hương Mai Như Xưa (梅香如故)',
			'music_artist' => 'Mao Bất Dịch; Chu Thâm',
			'music_shortlyric' => '落花醉了梅苑
[t2]Luòhuā zuìle méiyuàn
[t1]Hoa rơi say trong vườn mai.

恍若人生是初见
[t2]huǎng ruò rénshēng shì chū jiàn
[t1]Thoáng như đời người lần đầu gặp gỡ.

青丝染了霜烟
[t2]qīngsī rǎnle shuāng yān
[t1]Tóc xan...',
			'music_downloads' => '471',
			'music_bitrate' => '1000',
			'music_length' => '242',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '4'),
		12 => array('music_id' => '1950967',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '94175',
			'music_title_url' => '~sing-nu-doan',
			'music_title' => '想带你到霭霭晨光里',
			'music_artist' => 'SING Nữ Đoàn',
			'music_shortlyric' => 'SING-林慧：
爱你都 感觉时光 短的不够
想牵手到那慢放镜头里去走走
刚有天色的时候
洒出光晕的时候
你美了 宇宙
SING-秦瑜：
想这样 看着 你不挪走眼眸
贴在那耳边锁骨胸口他的左右
住在你手心里头
烦恼都围在外头
待到永久
SING-林慧：
我唱着歌 天亮了
当晨光醒后
SING-秦瑜：
金闪的 你和我
逆光背 对远方
合：
爱你都感觉时光短的不够
想牵手到那慢放镜头里去走走
刚...',
			'music_downloads' => '34',
			'music_bitrate' => '1000',
			'music_length' => '272',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '4'),
		13 => array('music_id' => '1947054',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '93696',
			'music_title_url' => 'tat-ca-deu-la-em-all-about-you~dragon-pig-cnballer-cloud-wang',
			'music_title' => 'Tất Cả Đều Là Em (All About You; 全部都是你)',
			'music_artist' => 'Dragon Pig; CNBALLER; CLOUD WANG',
			'music_shortlyric' => '我的眼里 都是你
[t2]Wǒ de yǎn lǐ dōu shì nǐ
[t1]Trong mắt anh đều là em

甜甜蜜蜜 u know what I mean
[t2]Tián tián mì mì YOU KNOW WHAT I MEAN
[t1]Honey, em có hiểu ý anh không

对你说我 喜欢你
[t2]Duì nǐ shuō w...',
			'music_downloads' => '486',
			'music_bitrate' => '320',
			'music_length' => '209',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		14 => array('music_id' => '1936531',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '0',
			'music_title_url' => 'doi-anh-to-tinh~mona-lavi',
			'music_title' => 'Đợi anh tỏ tình',
			'music_artist' => 'Mona Lavi',
			'music_shortlyric' => '',
			'music_downloads' => '122',
			'music_bitrate' => '64',
			'music_length' => '454',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		15 => array('music_id' => '1943393',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '83220',
			'music_title_url' => 'thien-dia-vo-suong~duong-tu-dang-luan',
			'music_title' => 'Thiên Địa Vô Sương (天地无霜)',
			'music_artist' => 'Dương Tử; Đặng Luân',
			'music_shortlyric' => '风 轻轻吹散 天地分开 相隔万丈
[t2]Fēng qīng qīng chuī sàn tiāndì fēnkāi xiānggé wànzhàng
[t1]Gió nhè nhẹ thổi bay, trời đất tách biệt, cách nhau vạn trượng.

那 又能怎么样 月光连接了 思量
[t2]nà yòu néng zěnme yàng yuèguāng...',
			'music_downloads' => '575',
			'music_bitrate' => '1000',
			'music_length' => '216',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		16 => array('music_id' => '1943610',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '93286',
			'music_title_url' => 'dem-nguoc~dang-tu-ky',
			'music_title' => 'Đếm Ngược (倒数)',
			'music_artist' => 'Đặng Tử Kỳ',
			'music_shortlyric' => '1. 還沒到的櫻花季  還沒用的照相機
[t2]Hái méi dào de yīnghuā jì hái méi yòng de zhàoxiàngjī
[t1]Mùa hoa đào còn chưa đến, chiếc máy ảnh còn chưa dùng

還沒光臨的餐廳  還在期待  有著你的旅行
[t2]hái mò guānglín de cāntīng hái zài...',
			'music_downloads' => '620',
			'music_bitrate' => '1000',
			'music_length' => '229',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		17 => array('music_id' => '1950155',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '94074',
			'music_title_url' => 'tram-huong-luu-nien~loi-giai',
			'music_title' => 'Trầm Hương Lưu Niên (沉香流年)',
			'music_artist' => 'Lôi Giai',
			'music_shortlyric' => '笙箫远去灯火稀微
[t2]Shēng xiāo yuǎn qù dēnghuǒ xī wēi
[t1]Sáo âm phiêu bồng hoà ánh nến tịch liêu

忆往昔竹马青梅
[t2]yì wǎngxī zhúmǎ qīngméi
[t1]Nhớ ban thuở đôi trúc mã thanh mai

苍茫岁月旧事难追
[t2]cāngmáng suìyuè...',
			'music_downloads' => '335',
			'music_bitrate' => '1000',
			'music_length' => '246',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		18 => array('music_id' => '1950426',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '0',
			'music_title_url' => 'mot-trieu-kha-nang~christine-welch',
			'music_title' => 'Một triệu khả năng (一百万个可能)',
			'music_artist' => 'Christine Welch',
			'music_shortlyric' => '幽靜 窗外，滿地片片寒花
Yōujìng chuāngwài, mǎn dì piàn piàn hán huā
Bên ngoài cửa sổ yên tĩnh, ngập trời hoa nở rộ giữa mùa đông
一瞬間，永恆的時差 窩在棉被裡
yī shùnjiān, yǒnghéng de shíchā wō zài mián bèi lǐ
Trong n...',
			'music_downloads' => '168',
			'music_bitrate' => '128',
			'music_length' => '275',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		19 => array('music_id' => '1950958',
			'cat_id' => '5',
			'cat_level' => '1',
			'cover_id' => '94172',
			'music_title_url' => 'tuyet-quoc-vien-phuong~na-anh',
			'music_title' => 'Tuyết Quốc Viễn Phương (雪国远方)',
			'music_artist' => 'Na Anh',
			'music_shortlyric' => '谁念念不忘 谁该放不放
[t2]Shéi niànniànbùwàng shéi gāi fàng bù fàng
[t1]Là ai nhung nhớ mãi không nguôi? Ai nên buông xuống mà chẳng thể buông được?

聚散终须 成过往
[t2]jù sàn zhōng xū chéng guòwǎng
[t1]Gặp nhau c...',
			'music_downloads' => '238',
			'music_bitrate' => '1000',
			'music_length' => '309',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
	),
	6 => array(
		0 => array('music_id' => '1950876',
			'cat_id' => '6',
			'cat_level' => '1',
			'cover_id' => '94161',
			'music_title_url' => 'lil-touch~girls-generation-ohgg',
			'music_title' => 'Lil\' Touch',
			'music_artist' => 'Girls\' Generation-Oh!GG',
			'music_shortlyric' => 'Mollanni ne mami nal wonhajanni
Seodulleo naege ppalli Lalalalala
Ppalli Lalalalala
Mollanni ne mami nal wonhajanni
Seodulleo naege ppalli
Lalalalala ppalli
Give me a lil\' touch
I just wanna kiss b...',
			'music_downloads' => '4359',
			'music_bitrate' => '1000',
			'music_length' => '189',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '43'),
		1 => array('music_id' => '1950732',
			'cat_id' => '6',
			'cat_level' => '3',
			'cover_id' => '94139',
			'music_title_url' => 'siren~sunmi',
			'music_title' => 'Siren',
			'music_artist' => 'Sunmi',
			'music_shortlyric' => 'Naega malhaetjana sokji mallago
I soneul jamneun sungan
Neoneun wiheomhaejil georago
Now you\'re bleeding
Geundedo kkeullini
Ppeonhi da almyeonseodo
Wae geuri ppanhi chyeodaboni
Nwa geunyang
Jogeumd...',
			'music_downloads' => '3434',
			'music_bitrate' => '1000',
			'music_length' => '199',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '28'),
		2 => array('music_id' => '1937711',
			'cat_id' => '6',
			'cat_level' => '3',
			'cover_id' => '92435',
			'music_title_url' => 'killing-me~ikon',
			'music_title' => 'Killing Me',
			'music_artist' => 'iKON',
			'music_shortlyric' => 'Jukgetda tto eogimeopsi
Neoui heunjeogi
Nama nal goeropinda
Jukgetda nam daehadeusi
Doraseonneunde
Wae naneun oeroulkka
Choyeonhal jul arasseo heeojime daehae
Geunde neol daleun seupgwan hana
Beori...',
			'music_downloads' => '8403',
			'music_bitrate' => '1000',
			'music_length' => '193',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '27'),
		3 => array('music_id' => '1952211',
			'cat_id' => '6',
			'cat_level' => '1',
			'cover_id' => '94344',
			'music_title_url' => 'remember-me~oh-my-girl',
			'music_title' => 'Remember Me',
			'music_artist' => 'Oh My Girl',
			'music_shortlyric' => 'Remember me do you remember me
Nal barabodeon neoui nune bichin
Nae moseubi cham mame deureonneunde
Nado mollatdeon nal alge haejun
Neol mannatdeon geon cham haengunin geol yeah
Dasi ireon uyeoneun...',
			'music_downloads' => '148',
			'music_bitrate' => '1000',
			'music_length' => '194',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '25'),
		4 => array('music_id' => '1947097',
			'cat_id' => '6',
			'cat_level' => '1',
			'cover_id' => '93710',
			'music_title_url' => 'idol~bts',
			'music_title' => 'Idol',
			'music_artist' => 'BTS',
			'music_shortlyric' => 'You can call me artist
You can call me idol
Anim eotteon dareun mwora haedo
I don\'t care
I\'m proud of it
Nan jayuromne
No more irony
Naneun hangsang nayeotgie
Songarakjil hae
Naneun jeonhyeo singye...',
			'music_downloads' => '17652',
			'music_bitrate' => '1000',
			'music_length' => '222',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '22'),
		5 => array('music_id' => '1952227',
			'cat_id' => '6',
			'cat_level' => '2',
			'cover_id' => '94346',
			'music_title_url' => 'naughty-boy~pentagon',
			'music_title' => 'Naughty Boy',
			'music_artist' => 'Pentagon',
			'music_shortlyric' => 'O deohagi oneun gugu
Gae jinneun sorineun kkulkkul
Sikkeureopda hamyeon nunnunanna
Geu nuguui maldo an deutgo
Nareul ttara haebwa
Han beon deo ttara haebwa
Ttokgateun jit sikiji malgo geunyang gase...',
			'music_downloads' => '116',
			'music_bitrate' => '1000',
			'music_length' => '198',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '18'),
		6 => array('music_id' => '1950429',
			'cat_id' => '6',
			'cat_level' => '1',
			'cover_id' => '94097',
			'music_title_url' => 'we-go-up~nct-dream',
			'music_title' => 'We Go Up',
			'music_artist' => 'NCT Dream',
			'music_shortlyric' => 'Sijakbuteo da yesang bakkui nollaun Style
Jageun Stepdeullo ppumeonae Big vibe
Keep up
Too slow too fast sokdo Control
Bopok neolpyeo Tempo ollyeo
Eodiseodo gieokae neoui bit
Gyesokae ttokgachi Wil...',
			'music_downloads' => '1047',
			'music_bitrate' => '1000',
			'music_length' => '183',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '16'),
		7 => array('music_id' => '1943175',
			'cat_id' => '6',
			'cat_level' => '1',
			'cover_id' => '93206',
			'music_title_url' => 'hann-alone~gi-dle',
			'music_title' => 'Hann (Alone)',
			'music_artist' => '(G)I-DLE',
			'music_shortlyric' => 'Do you remember you remember
Remember what you said
Neoneun naege mwodeun jul geotcheoreom
Mareul geonnetda
Don\'t you remember you remember
Remember what you said
Neoneun machi museun yageul
Meogeu...',
			'music_downloads' => '6428',
			'music_bitrate' => '1000',
			'music_length' => '205',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '13'),
		8 => array('music_id' => '1947083',
			'cat_id' => '6',
			'cat_level' => '1',
			'cover_id' => '93710',
			'music_title_url' => 'euphoria~bts',
			'music_title' => 'Euphoria',
			'music_artist' => 'BTS',
			'music_shortlyric' => 'Neoneun nae sale dasi tteun haetbit
Eorin sijeol nae kkumdeurui jaerim
Moreugesseo i gamjeongi mwonji
Hoksi yeogido kkumsogin geonji
Kkumeun samagui pureun singiru
Nae an gipeun gosui a priori
Sumi...',
			'music_downloads' => '3908',
			'music_bitrate' => '1000',
			'music_length' => '228',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '13'),
		9 => array('music_id' => '1951208',
			'cat_id' => '6',
			'cat_level' => '3',
			'cover_id' => '94139',
			'music_title_url' => 'gashina~sunmi',
			'music_title' => 'Gashina',
			'music_artist' => 'Sunmi',
			'music_shortlyric' => 'Neoui ssaneulhaejin geu nunbichi
Nareul jugineun geoya
Keojideon ni mamui bulssi
Jaeman nameun geoya wae
Sigani yagingabwa
Eojjae galsurok na yakajana
Seulpeun apeumdo
Hamkke mudyeojineun geoya...',
			'music_downloads' => '534',
			'music_bitrate' => '1000',
			'music_length' => '180',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '13'),
		10 => array('music_id' => '1947096',
			'cat_id' => '6',
			'cat_level' => '1',
			'cover_id' => '93710',
			'music_title_url' => 'im-fine~bts',
			'music_title' => 'I\'m Fine',
			'music_artist' => 'BTS',
			'music_shortlyric' => 'Siridorok pureun haneul arae nun tteo
Heumppeok ssodajineun haetsari nal eojireopge hae
Hankkeot sumi chaoreugo simjangeun ttwieo
Neukkyeojyeo neomu swipge na saraitdaneun geol
Gwaenchana uriga ani...',
			'music_downloads' => '5031',
			'music_bitrate' => '1000',
			'music_length' => '240',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '11'),
		11 => array('music_id' => '1952196',
			'cat_id' => '6',
			'cat_level' => '1',
			'cover_id' => '94342',
			'music_title_url' => 'countless~shinee',
			'music_title' => 'Countless',
			'music_artist' => 'SHINee',
			'music_shortlyric' => 'Han bareul dagaseomyeon du bal mulleoseogo
Seseul jugo namyeon neseul gidaehago
Uril gyesanhamyeo neoreul tteonal ttaereul
Gidarin geonji molla
Neoreul wonmanghago nege tujeonghago
Mopsseul iy...',
			'music_downloads' => '67',
			'music_bitrate' => '1000',
			'music_length' => '188',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '11'),
		12 => array('music_id' => '1952611',
			'cat_id' => '6',
			'cat_level' => '1',
			'cover_id' => '94417',
			'music_title_url' => 'mango~hyomin',
			'music_title' => 'Mango',
			'music_artist' => 'Hyomin',
			'music_shortlyric' => 'Jeokdanghi ne yeope dugie
Heumi eopdan iyuro
Neon nareul gollanaesseo
Ne kkadaron immase matchwoseo
Budeureopge noga jul
Neon geureon geol wonhaesseo
Naegeseo gajiryeoneun ge
Naui mami anin ge
Da n...',
			'music_downloads' => '53',
			'music_bitrate' => '1000',
			'music_length' => '189',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '11'),
		13 => array('music_id' => '1944880',
			'cat_id' => '6',
			'cat_level' => '1',
			'cover_id' => '93429',
			'music_title_url' => 'rumor~hinp-hot-issue-of-ntl-producers',
			'music_title' => 'Rumor',
			'music_artist' => 'H.I.N.P (Hot Issue Of Ntl. Producers)',
			'music_shortlyric' => 'Neon Toxic pagodeureo
Nae mameul eojireopge hae
Nan dasi ppajyeodeureo
Amugeotdo hal su eopge dwae
Oh Na na na
Neoui nuni majuchin sungan
Dareun mareun an deutge dwae
Neoreul mitgo sipge dwae
Dareu...',
			'music_downloads' => '1459',
			'music_bitrate' => '1000',
			'music_length' => '197',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '10'),
		14 => array('music_id' => '1947099',
			'cat_id' => '6',
			'cat_level' => '1',
			'cover_id' => '93712',
			'music_title_url' => 'idol~nicki-minaj-bts',
			'music_title' => 'Idol',
			'music_artist' => 'Nicki Minaj; BTS',
			'music_shortlyric' => 'You can call me artist
You can call me idol
Anim eotteon dareun mwora haedo
I don\'t care
I\'m proud of it
Nan jayuromne
No more irony
Naneun hangsang nayeotgie
Songarakjil hae
Naneun jeonhyeo singye...',
			'music_downloads' => '5473',
			'music_bitrate' => '1000',
			'music_length' => '260',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '10'),
		15 => array('music_id' => '1952216',
			'cat_id' => '6',
			'cat_level' => '1',
			'cover_id' => '94345',
			'music_title_url' => 'beautiful-feeling~day6',
			'music_title' => 'Beautiful Feeling',
			'music_artist' => 'Day6',
			'music_shortlyric' => 'Neol barabogoman isseodo
Nado moreuge misoreul
Jitgo inneun nareul bomyeon
Singihae
Haruga jinagal surok
Neol hyanghan naui mameun
Deo gipeojigo isseo
Jigeum i noraega
Tto dareun sarangnorae
Gateul...',
			'music_downloads' => '133',
			'music_bitrate' => '1000',
			'music_length' => '208',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '10'),
		16 => array('music_id' => '1947098',
			'cat_id' => '6',
			'cat_level' => '1',
			'cover_id' => '93710',
			'music_title_url' => 'answer-love-myself~bts',
			'music_title' => 'Answer: Love Myself',
			'music_artist' => 'BTS',
			'music_shortlyric' => 'Nuneul tteunda eodum sok na
Simjangi ttwineun sori natseol ttae
Maju bonda geoul sok neo
Geommeogeun nunbit haemugeun jilmun
Eojjeomyeon nugungareul
Saranghaneun geotboda
Deo eoryeoun ge na jasine...',
			'music_downloads' => '3023',
			'music_bitrate' => '1000',
			'music_length' => '251',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '9'),
		17 => array('music_id' => '1950877',
			'cat_id' => '6',
			'cat_level' => '1',
			'cover_id' => '94161',
			'music_title_url' => 'fermata~girls-generation-ohgg',
			'music_title' => 'Fermata',
			'music_artist' => 'Girls\' Generation-Oh!GG',
			'music_shortlyric' => 'Maeumi swineun dosi eopseul georan geol ara
Geureon gidaen jeobeo
Hajiman naneun dasi huimangeul geolgo mara
Waenji irwojil deuthae
Amman barabwa dallyeoga mueol wihae geurae
Han tempo swieo ga eot...',
			'music_downloads' => '926',
			'music_bitrate' => '1000',
			'music_length' => '238',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '9'),
		18 => array('music_id' => '1951209',
			'cat_id' => '6',
			'cat_level' => '3',
			'cover_id' => '94139',
			'music_title_url' => 'heroine~sunmi',
			'music_title' => 'Heroine',
			'music_artist' => 'Sunmi',
			'music_shortlyric' => 'Nae momi hwak
Meoriga hwik
Doraga eottae
Jigeum gibuni
Urineun machi
Jaseok gata
Seororeul ango
Tto milchyeonaenikka
Neoneun nal michige hago
Jeongsin mot charige hae
Geurae algetji neon cham
Nal g...',
			'music_downloads' => '369',
			'music_bitrate' => '1000',
			'music_length' => '195',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '9'),
		19 => array('music_id' => '1947085',
			'cat_id' => '6',
			'cat_level' => '1',
			'cover_id' => '93710',
			'music_title_url' => 'serendipity-full-length-edition~bts',
			'music_title' => 'Serendipity (Full Length Edition)',
			'music_artist' => 'BTS',
			'music_shortlyric' => 'I modeun geon uyeoni anya
Geunyang geunyang naui neukkimeuro
On sesangi eojewan dalla
Geunyang geunyang neoui gippeumeuro
Niga nal bulleosseul ttae
Naneun neoui kkocheuro
Gidaryeotdeon geotcheoreom...',
			'music_downloads' => '2363',
			'music_bitrate' => '1000',
			'music_length' => '276',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '8'),
	),
	7 => array(
		0 => array('music_id' => '1951563',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '94269',
			'music_title_url' => 'black-bird~aimer',
			'music_title' => 'Black Bird',
			'music_artist' => 'Aimer',
			'music_shortlyric' => '小さな頃の小さな願いは
誰のためにどんどん大きくなった?


Everyone never knows
重ね続け過ぎた嘘に
No one finds me
分からなくなるよ


Black Bird


すぐに堕ちていきそうだ
まるで一人のステージ
まっ暗闇で声を枯らすよ　I cry


きっと空の飛び方なんて
誰も教えてくれなかったよ
まっさかさまに海の底へ　I fall


愛されるよう...',
			'music_downloads' => '398',
			'music_bitrate' => '1000',
			'music_length' => '229',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '9'),
		1 => array('music_id' => '1952561',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '94413',
			'music_title_url' => 'kimi-no-inai-sekai-ni-wa-oto-mo-iro-mo-nai~hatsune-miku',
			'music_title' => 'Kimi No Inai Sekai Ni Wa Oto Mo Iro Mo Nai',
			'music_artist' => 'Hatsune Miku',
			'music_shortlyric' => 'Release Date: 30.08.2017 (2017)
Vocals: Hatsune Miku/初音ミク
Producer: doriko/きりたんP/KiritanP

Tracklist:
 1.
Kimi No Inai Sekai Ni Wa Oto Mo Iro Mo Nai - Doriko, Hatsune Miku
2.
Onomapet - Doriko, Ha...',
			'music_downloads' => '65',
			'music_bitrate' => '1000',
			'music_length' => '289',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '8'),
		2 => array('music_id' => '1943235',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '93216',
			'music_title_url' => 'livin-it-up~monsta-x',
			'music_title' => 'Livin\' It Up',
			'music_artist' => 'Monsta X',
			'music_shortlyric' => 'Let\'s livin\' it up (livin\' it up)!

Kurikaesu dake no Everyday
Nukedase hora konya wa Friday night
Yes sir, shinkuro shita sono omoi ga Passport
Geeto wo kugureba soko wa Zion.

Hibikiwataru Groo...',
			'music_downloads' => '365',
			'music_bitrate' => '1000',
			'music_length' => '225',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '7'),
		3 => array('music_id' => '1943757',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '93318',
			'music_title_url' => 'bdz~twice',
			'music_title' => 'BDZ',
			'music_artist' => 'Twice',
			'music_shortlyric' => 'Like a bulldozer
Like a tank
Like a soldier
Kowasu yo kimi no kokoro no gādo
Hito-tsu nokorazuubau yo hāto.

Konna kimochi wa hajimete! dai jiken da yo
Kimi ni deatta totan ni dokidoki tomaranai....',
			'music_downloads' => '1796',
			'music_bitrate' => '1000',
			'music_length' => '197',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '5'),
		4 => array('music_id' => '1951322',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '94237',
			'music_title_url' => 'voracity~myth-roid',
			'music_title' => 'VORACITY',
			'music_artist' => 'MYTH; ROID',
			'music_shortlyric' => 'I am very, very crazy, very
永遠に止まらない
世界の全て この口腔の中

さあいざ 闇の中で晩餐会を
誰も彼も食糧へと
Can\'t stop, can\'t stop, eating
Can\'t stop, can\'t stop, not enough

Anything can be eaten, even if you say no, hahaha...

生命...',
			'music_downloads' => '189',
			'music_bitrate' => '1000',
			'music_length' => '230',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '5'),
		5 => array('music_id' => '1946077',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '93569',
			'music_title_url' => 'koibito-yo~mayumi-itsuwa',
			'music_title' => 'Koibito yo',
			'music_artist' => 'Mayumi Itsuwa',
			'music_shortlyric' => 'Kareha chiru yuugure wa
Kuruhi no samusa wo monogatari
Ame ni kowareta benchi niwa
Ai wo sasayaku uta mo nai.

Koibito yo, soba ni ite
Kogoeru watashi no soba ni ite yo
Soshite hitokoto kono wakare...',
			'music_downloads' => '36',
			'music_bitrate' => '1000',
			'music_length' => '248',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '4'),
		6 => array('music_id' => '1951565',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '94269',
			'music_title_url' => 'omoide-wa-kirei-de~aimer',
			'music_title' => 'Omoide wa Kirei de (思い出は奇麗で)',
			'music_artist' => 'Aimer',
			'music_shortlyric' => '白い靴が泥だらけでも
公園のブランコ　秘密の子猫
日暮れまで遊んで　あなたの呼ぶ声
夕飯のにおいと伸びてゆく影


誰より一番　大きな背中
世界中で一番　優しい　その手
疲れてたくせして　肩車なんてね
触れるほど　夕陽が近くに見えた


思い出は奇麗だ　憧れがあった
ひとりでに零れたのは　あなたゆずりの癖


日曜の朝　焦げたトースト
床に落ちたシャツにママが笑う
月曜日になったら誰より強く...',
			'music_downloads' => '136',
			'music_bitrate' => '1000',
			'music_length' => '211',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '4'),
		7 => array('music_id' => '1938390',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '92545',
			'music_title_url' => 'kieta-natsu-no-yume~hatsune-miku',
			'music_title' => 'Kieta Natsu no Yume (消えた夏の夢)',
			'music_artist' => 'Hatsune Miku',
			'music_shortlyric' => 'Kieta Natsu no Yume (消えた夏の夢)/Disappearing Summer Dream.',
			'music_downloads' => '151',
			'music_bitrate' => '1000',
			'music_length' => '307',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		8 => array('music_id' => '1947864',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '93806',
			'music_title_url' => 'ambivalent~keyakizaka46',
			'music_title' => 'Ambivalent (アンビバレント)',
			'music_artist' => 'Keyakizaka46',
			'music_shortlyric' => 'M1.「アンビバレント」
石森虹花・上村莉菜・尾関梨香・織田奈那・小池美波・小林由依・齋藤冬優花・佐藤詩織・菅井友香・鈴本美愉・長沢菜々香・長濱ねる・土生瑞穂・平手友梨奈・守屋茜・米谷奈々未・渡辺梨加・渡邉理佐

M2.「Student Dance」
石森虹花・上村莉菜・尾関梨香・織田奈那・小池美波・小林由依・齋藤冬優花・佐藤詩織・菅井友香・鈴本美愉・長沢菜々香・長濱ねる・土生瑞穂・平手友梨...',
			'music_downloads' => '384',
			'music_bitrate' => '1000',
			'music_length' => '272',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		9 => array('music_id' => '1948860',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '93956',
			'music_title_url' => 'decade~hatsune-miku',
			'music_title' => 'Decade',
			'music_artist' => 'Hatsune Miku',
			'music_shortlyric' => 'HAPPY BIRTH DAY HATSUNE  MIKU 31/8/2018

HATSUNE MIKU EXPO 2018 E.P.
Lyrics:


Yoru no veil nuketa sono mukou
Ichiman mile no kanata no kimitachi e
Genki datta? Aikawarazu?
Furui shashin ni flash g...',
			'music_downloads' => '168',
			'music_bitrate' => '1000',
			'music_length' => '218',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		10 => array('music_id' => '1949961',
			'cat_id' => '7',
			'cat_level' => '3',
			'cover_id' => '94047',
			'music_title_url' => 'suki-ni-nacchaudarou~produce-48',
			'music_title' => 'Suki Ni Nacchaudarou? (好きになっちゃうだろう?)',
			'music_artist' => 'Produce 48',
			'music_shortlyric' => 'Annani gambastte itanoni Oh Oh Oh?
Omouyouna keskka dasenai ttoki
Ochikomu kimini bokuwa
Nanio ieba iinda
Soonna kantanni kanau youna
Yumejya naito daredaastte si-istteruyo
Ahureru asesae nuguut de...',
			'music_downloads' => '677',
			'music_bitrate' => '1000',
			'music_length' => '249',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		11 => array('music_id' => '1950855',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '94158',
			'music_title_url' => 'sagittarius~va',
			'music_title' => 'Sagittarius.',
			'music_artist' => 'V.A',
			'music_shortlyric' => '01. Arch - Rabi
02. yaseta - Freezing Point
03. LU-I - Sagittarius.
04. Getty - Insight
05. ginkiha - Go Out in The Sun
06. you - Re-Vit
07. Ebon - Gate
08. pollinosis - Bunbun
09. Sanaas - Quickdr...',
			'music_downloads' => '18',
			'music_bitrate' => '1000',
			'music_length' => '335',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		12 => array('music_id' => '1951550',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '94268',
			'music_title_url' => 'the-theme-from-big-wave~tatsuro-yamashita',
			'music_title' => 'The Theme From Big Wave',
			'music_artist' => 'Tatsuro Yamashita',
			'music_shortlyric' => '[Verse 1]
Out there in the ocean, that\'s my silhouette
Out there waiting where the mountains move
I\'m all alone, but I\'m at home
Livin\' with nothing left to prove

[Chorus]
We\'ve got summer right h...',
			'music_downloads' => '5',
			'music_bitrate' => '1000',
			'music_length' => '218',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		13 => array('music_id' => '1952559',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '94412',
			'music_title_url' => 'be-as-one~twice',
			'music_title' => 'Be As One',
			'music_artist' => 'TWICE',
			'music_shortlyric' => '',
			'music_downloads' => '29',
			'music_bitrate' => '266',
			'music_length' => '231',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		14 => array('music_id' => '1943667',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '93300',
			'music_title_url' => 'the-way-i-am~ayumi-hamasaki',
			'music_title' => 'The Way I Am',
			'music_artist' => 'Ayumi Hamasaki',
			'music_shortlyric' => 'Hito-tsu zutsu kaeshitai
Takusan no arigatō tasshi o
Hito-tsu zutsu yurushitai
Okizari ni shite kita kako-tachi o.

Nai tari shita ne nikurashī hodo
Sore de mo saigo no koyubi hazusenakatta.

Kagay...',
			'music_downloads' => '146',
			'music_bitrate' => '1000',
			'music_length' => '267',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '2'),
		15 => array('music_id' => '1937310',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '92382',
			'music_title_url' => 'sekai-wa-anata-ni-waraikakete-iru~little-glee-monster',
			'music_title' => 'Sekai wa Anata ni Waraikakete Iru',
			'music_artist' => 'Little Glee Monster',
			'music_shortlyric' => 'Woo smile together smile together
Smile together
Woo smile together smile together.

Hora waratte alright！
Sekai wa zutto
Anata ni kyō mo waraikakete iru
Ima kawatte iku your sight
Kikkake wa kitto...',
			'music_downloads' => '287',
			'music_bitrate' => '1000',
			'music_length' => '232',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '2'),
		16 => array('music_id' => '1938248',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '93797',
			'music_title_url' => 'sincerely-short-size~true',
			'music_title' => 'Sincerely (Short Size)',
			'music_artist' => 'TRUE',
			'music_shortlyric' => '知らない言葉を 覚えていくたび
おもかげのなか 手を伸ばすの


だけど一人では 分からない言葉も
あるのかもしれない

さよならは 苦くて
アイシテルは 遠いにおいがした
例えようのない この想いは
とても怖くて だけど とても愛おしくて

わたし なんで 泣いているんだろう
心になんて 答えたらいい？
言葉はいつでも 語るでもなくて
そこにあるばかり つのるばかり
わたしは あなたに 会...',
			'music_downloads' => '41',
			'music_bitrate' => '1000',
			'music_length' => '94',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '2'),
		17 => array('music_id' => '1938556',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '92567',
			'music_title_url' => 'thank-you-friends~aqours',
			'music_title' => 'Thank you, FRIENDS!!',
			'music_artist' => 'Aqours',
			'music_shortlyric' => 'そう、いまだから（そういま僕ら）
[t2]Sou, ima dakara (sou ima bokura)
わかるのかも（わかってきたよホントに）
[t2]Wakaru no kamo (wakatte kita yo honto ni)
ステキなこと（ステキすぎて）
[t2]Suteki na koto (suteki sugite)
まるで夢のなか泳いできた魚さ
[t2]Maru de...',
			'music_downloads' => '119',
			'music_bitrate' => '1000',
			'music_length' => '383',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '2'),
		18 => array('music_id' => '1941645',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '93013',
			'music_title_url' => 'sparkle~tatsuro-yamashita',
			'music_title' => 'Sparkle',
			'music_artist' => 'Tatsuro Yamashita',
			'music_shortlyric' => '[Verse 1]
Nanatsunomi kara atsumatte kuru
Megami-tachi no doresu ni fureta totan ni.

[Bridge 1]
Hirogaru sekai wa fushigina kagayaki o
Hanachinagara kokoro e to shinobikomu.

[Verse 2]
Takakute to...',
			'music_downloads' => '87',
			'music_bitrate' => '1000',
			'music_length' => '255',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '2'),
		19 => array('music_id' => '1942421',
			'cat_id' => '7',
			'cat_level' => '1',
			'cover_id' => '93083',
			'music_title_url' => 'ride-on-time-album-version~tatsuro-yamashita',
			'music_title' => 'Ride On Time (Album Version)',
			'music_artist' => 'Tatsuro Yamashita',
			'music_shortlyric' => 'Aoi suiheisen wo ima kakenuketeku
Togisumasareta toki no nagare kanjite
Aa tokimeki e to ugokidasu sekai wa
Wasurekaketeta tooi yume no otozure

Ride on time samayou omoi nara
Yasashiku uketomete s...',
			'music_downloads' => '19',
			'music_bitrate' => '1000',
			'music_length' => '354',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '2'),
	),
	8 => array(
		0 => array('music_id' => '1937086',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92356',
			'music_title_url' => 'naufrage~charlie-boisseau',
			'music_title' => 'Naufragé',
			'music_artist' => 'Charlie Boisseau',
			'music_shortlyric' => 'Qui es-tu?
Naufragé
Enfant du mauvais sort.

Égaré
Corps dérivé
Sur le journal tu dors.

La mer t\'as laissé là
Petit sur cette plage
Comme un dessin qui s\'efface.

La mer a fait de toi
Une ombre su...',
			'music_downloads' => '143',
			'music_bitrate' => '1000',
			'music_length' => '180',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		1 => array('music_id' => '1937087',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92356',
			'music_title_url' => 'la-vie-en-deux~charlie-boisseau',
			'music_title' => 'La Vie En Deux',
			'music_artist' => 'Charlie Boisseau',
			'music_shortlyric' => 'Comme la fissure aux creux des pierres
Qui ne tiennent qu\'accrochés aux lierres
Je me sépare, je me repend
J\'tombe à côté et j\'suis dedans.

Plus qu\'un grillage et j\'dégringole
Un bout ici, l\'autre...',
			'music_downloads' => '185',
			'music_bitrate' => '1000',
			'music_length' => '183',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		2 => array('music_id' => '1937088',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92356',
			'music_title_url' => 'a-contre-amour~charlie-boisseau',
			'music_title' => 'À Contre Amour',
			'music_artist' => 'Charlie Boisseau',
			'music_shortlyric' => 'Mes mains caressent les draps
Où tu dormais
Elle ne se rappellent pas.

Comme elles pleuraient
Elles ont même oublier
Qu\'elles ont priées
Qu\'elles tremblaient de froid
Quand tu partais.

Elles ne s...',
			'music_downloads' => '143',
			'music_bitrate' => '1000',
			'music_length' => '185',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		3 => array('music_id' => '1937085',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92356',
			'music_title_url' => 'pourquoi-tu-ten-vas~charlie-boisseau',
			'music_title' => 'Pourquoi Tu T\'en Vas',
			'music_artist' => 'Charlie Boisseau',
			'music_shortlyric' => 'A te voir j\'ai la certitude
Y\'a quelque chose qui ne va pas
J\'te connais j\'ai pris l\'habitude.

Mais là n\'te retrouve pas.

J\'essaie de croiser ton regard
Mais ta distance me suffit
Je crois compre...',
			'music_downloads' => '336',
			'music_bitrate' => '1000',
			'music_length' => '181',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		4 => array('music_id' => '1937379',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92389',
			'music_title_url' => 'joe-le-taxi~vanessa-paradis',
			'music_title' => 'Joe Le Taxi',
			'music_artist' => 'Vanessa Paradis',
			'music_shortlyric' => 'Joe le taxi
Y va pas partout
Y marche pas au soda
Son saxo jaune
Connait toutes les rues par coeur
Tous les p\'tits bars
Tous les coins noirs

Et la Seine
Et ses ponts qui brillent
Dans sa caisse
La...',
			'music_downloads' => '25',
			'music_bitrate' => '1000',
			'music_length' => '235',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		5 => array('music_id' => '1937081',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92356',
			'music_title_url' => 'jen-ai-des-tas~charlie-boisseau',
			'music_title' => 'J\'en Ai Des Tas',
			'music_artist' => 'Charlie Boisseau',
			'music_shortlyric' => 'J\'en ai des tas
Des tas de petites journées comme ça
Où je te dessine sur des vitrines
Des murs tout autour de moi
J\'en ai des tas
Des tas de petits mots doux comme ceux
Que j\'avais bien pris...',
			'music_downloads' => '214',
			'music_bitrate' => '1000',
			'music_length' => '177',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		6 => array('music_id' => '1937082',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92356',
			'music_title_url' => 'rien~charlie-boisseau',
			'music_title' => 'Rien',
			'music_artist' => 'Charlie Boisseau',
			'music_shortlyric' => 'Plus rien dans mes mains qu\'un sale brouillard
Matins de chagrin et roses noires
Non rien que l\'écrin
De notre histoire
Larmes de satin
Sous un buvard.

Plus rien en chemin quinqué de gares
Et toi...',
			'music_downloads' => '155',
			'music_bitrate' => '1000',
			'music_length' => '191',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		7 => array('music_id' => '1937083',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92356',
			'music_title_url' => 'perdue~charlie-boisseau',
			'music_title' => 'Perdue',
			'music_artist' => 'Charlie Boisseau',
			'music_shortlyric' => 'Tout s\'est emmêlé
T\'as vraiment tout oublié
De nos jours.

L\'accident passé
Ta mémoire a effacé
Notre amour.

Tu ne vois qu\'une route et la pluie
Des images qui troublent ton esprit.

Perdue, telle...',
			'music_downloads' => '133',
			'music_bitrate' => '1000',
			'music_length' => '180',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		8 => array('music_id' => '1937084',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92356',
			'music_title_url' => 'aime-moi-moins-fort~charlie-boisseau',
			'music_title' => 'Aime-Moi Moins Fort',
			'music_artist' => 'Charlie Boisseau',
			'music_shortlyric' => 'Aime-moi moins fort
Mais aime-moi longtemps
Ne dis pas encore
Si ça ne dure qu\'un temps.

Aime-moi moins fort
Mais dis le moi souvent
Sans faire un effort
Ne fait jamais semblant.

Aime-moi moins f...',
			'music_downloads' => '114',
			'music_bitrate' => '1000',
			'music_length' => '174',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		9 => array('music_id' => '1937089',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92356',
			'music_title_url' => 'si-tu-crois~charlie-boisseau',
			'music_title' => 'Si Tu Crois',
			'music_artist' => 'Charlie Boisseau',
			'music_shortlyric' => 'Si tu crois que le jour existe
Il faut que tu trouves une piste
Elle se trouve au bout de tes rêves d\'enfants
Où l\'on dit tout comme on le pense
Un pays où les heurs dansent.

Ne viennent à l\'espri...',
			'music_downloads' => '133',
			'music_bitrate' => '1000',
			'music_length' => '186',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		10 => array('music_id' => '1937090',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92356',
			'music_title_url' => 'les-gens-de-la-lune~charlie-boisseau',
			'music_title' => 'Les Gens De La Lune',
			'music_artist' => 'Charlie Boisseau',
			'music_shortlyric' => 'Ça me fait bien froid dans le dos
De mon vaisseau je vois la terre
Je croyais voir de grand oiseaux
Et j\'en aperçoit qui font la guerre.

Je vous dicède mon altitude
Je vois d\'ici des inquiétudes
J...',
			'music_downloads' => '102',
			'music_bitrate' => '1000',
			'music_length' => '205',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		11 => array('music_id' => '1937091',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92356',
			'music_title_url' => 'jessaie~charlie-boisseau',
			'music_title' => 'J\'essaie',
			'music_artist' => 'Charlie Boisseau',
			'music_shortlyric' => 'Sans alcool ni cigarette
Rien pour m\'attacher
J\'ai les idées qui s\'en vont.

Dans le ciel faire la fête et reviennent
Se poser sur mon front
Tu dois travailler pour la noblesse
Et te coucher tôt
Po...',
			'music_downloads' => '162',
			'music_bitrate' => '1000',
			'music_length' => '167',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		12 => array('music_id' => '1937092',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92356',
			'music_title_url' => 'jonathan~charlie-boisseau',
			'music_title' => 'Jonathan',
			'music_artist' => 'Charlie Boisseau',
			'music_shortlyric' => 'Jonathan réveille toi
Jonathan ton cœur est là
Depuis des mois on le cherchait
Ça y est cette fois on l\'a trouvé
Jonathan doucement se lève.

Jonathan sort de ces rêves
Son cœur malade et presque m...',
			'music_downloads' => '128',
			'music_bitrate' => '1000',
			'music_length' => '167',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		13 => array('music_id' => '1937093',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92356',
			'music_title_url' => 'mon-oxygene~charlie-boisseau',
			'music_title' => 'Mon Oxygène',
			'music_artist' => 'Charlie Boisseau',
			'music_shortlyric' => 'Au fil du rasoir dans toutes mes nuits
Elle taille dans le noir mes blanches insomnie
Dans ses yeux miroir je me vois petit
Et rien que d\'être contre son cœur
Je me sens partir ailleurs.

Elle sait...',
			'music_downloads' => '110',
			'music_bitrate' => '1000',
			'music_length' => '198',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		14 => array('music_id' => '1938786',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92598',
			'music_title_url' => 'oh-mon-amour~maurice-dat',
			'music_title' => 'Oh! Mon Amour',
			'music_artist' => 'Maurice Đạt',
			'music_shortlyric' => 'Elle a des yeux qui voient la mer
A travers la pluie qui descend
Elle fait des rкves oщ elle se perd
Entre les grands nuages blancs
Elle ne sait plus le jour ni l\'heure
Elle a des larmes au fond du...',
			'music_downloads' => '18',
			'music_bitrate' => '320',
			'music_length' => '272',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		15 => array('music_id' => '1938792',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92598',
			'music_title_url' => 'lien-khuc-nhac-phap~maurice-dat',
			'music_title' => 'Liên Khúc: Nhạc Pháp',
			'music_artist' => 'Maurice Đạt',
			'music_shortlyric' => '',
			'music_downloads' => '22',
			'music_bitrate' => '320',
			'music_length' => '333',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		16 => array('music_id' => '1938795',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '92598',
			'music_title_url' => 'ne-me-quitte-pas~maurice-dat',
			'music_title' => 'Ne Me Quitte Pas',
			'music_artist' => 'Maurice Đạt',
			'music_shortlyric' => 'Ne me quitte pas
Il faut oublier
Tout peut s´oublier
Qui s´enfuit déjà
Oublier le temps
Des malentendus
Et le temps perdu
A savoir comment
Oublier ces heures
Qui tuaient parfois
A coups de pourquoi...',
			'music_downloads' => '12',
			'music_bitrate' => '320',
			'music_length' => '281',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		17 => array('music_id' => '1944971',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '93451',
			'music_title_url' => 'confessa~adriano-celentano',
			'music_title' => 'Confessa',
			'music_artist' => 'Adriano Celentano',
			'music_shortlyric' => 'Su confessa amore mio
Io non sono piu il solo, l\'unico
Hai nascosto nel cuore tuo
Una storia irrinunciabile

Io non sono piu il tuo pensiero
Non sono piu il tuo amore vero
Sono il dolce con fondo a...',
			'music_downloads' => '10',
			'music_bitrate' => '1000',
			'music_length' => '299',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		18 => array('music_id' => '1944935',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '93453',
			'music_title_url' => 'voyage-voyage~desireless',
			'music_title' => 'Voyage, Voyage',
			'music_artist' => 'Desireless',
			'music_shortlyric' => 'Au dessus des vieux volcans
Glisse des ailes sous les tapis du vent
Voyage, voyage
Eternellement
De nuages en marécages
De vent d\'Espagne en pluie d\'équateur
Voyage, voyage
Vole dans les hauteurs
A...',
			'music_downloads' => '40',
			'music_bitrate' => '1000',
			'music_length' => '259',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
		19 => array('music_id' => '1944961',
			'cat_id' => '8',
			'cat_level' => '1',
			'cover_id' => '93452',
			'music_title_url' => 'ouragan~stephanie',
			'music_title' => 'Ouragan',
			'music_artist' => 'Stephanie',
			'music_shortlyric' => 'Vision d\'orage
J\'voudrais pas qu\'tu t\'en ailles
La passion comme une ombre
Fallait que j\'y succombe
Tu m\'enlaçais
Dans les ruines du vieux Rome
A part nous, y a personne
Seul le tonnerre résonne
M\'...',
			'music_downloads' => '35',
			'music_bitrate' => '1000',
			'music_length' => '277',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '1'),
	),
	9 => array(
		0 => array('music_id' => '1938138',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '92506',
			'music_title_url' => 'cuando-te-bese~becky-g-paulo-londra',
			'music_title' => 'Cuando Te Besé',
			'music_artist' => 'Becky G; Paulo Londra',
			'music_shortlyric' => '[Intro: Paulo Londra, Becky G]
Y cuando te vi, supe que no eras para mí (Paulo)
Seguro tenías alguien que no lo ibas a dejar ir (Becky G), ey
Pero cuando te vi, te juro que me decidí
A acercarme y...',
			'music_downloads' => '986',
			'music_bitrate' => '1000',
			'music_length' => '254',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '7'),
		1 => array('music_id' => '1951267',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '94231',
			'music_title_url' => 'ponle~rvssian-farruko-j-balvin',
			'music_title' => 'Ponle',
			'music_artist' => 'Rvssian; Farruko; J Balvin',
			'music_shortlyric' => '[Intro: J Balvin &amp; Farruko]
(Hey Rvssian)
J Balvin man (hahaha)
Leggo, leggo
Young Rvssian
Farru

[Pre-Coro: J Balvin &amp; Farruko]
Esto no es casualidad
Cuando vea lo que hay atrás
Si cuando...',
			'music_downloads' => '68',
			'music_bitrate' => '320',
			'music_length' => '164',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '6'),
		2 => array('music_id' => '1943823',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '93326',
			'music_title_url' => 'celoso~lele-pons',
			'music_title' => 'Celoso',
			'music_artist' => 'Lele Pons',
			'music_shortlyric' => '[Verse 1]
Cinco de la mañana tu me llamas
Solo pa\' ver quien está en mi cama
Yo no tengo tiempo pa\' tus dramas
A mi no me llames a la cinco de la mañana.

Porque de seguro ando de rumba con mi herm...',
			'music_downloads' => '721',
			'music_bitrate' => '1000',
			'music_length' => '179',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '5'),
		3 => array('music_id' => '1951395',
			'cat_id' => '9',
			'cat_level' => '2',
			'cover_id' => '94253',
			'music_title_url' => 'unica~ozuna',
			'music_title' => 'Unica',
			'music_artist' => 'Ozuna',
			'music_shortlyric' => '[Intro]
Salgo a gastar unos poco\' (poco\')
Música en el Lambo pa\' que te relaje\' (relaje\')
Al que me la baje unos poco\' (poco\')
Puedo reconocerla de ver su celaje.

[Coro]
Única, tiene la disco expl...',
			'music_downloads' => '68',
			'music_bitrate' => '1000',
			'music_length' => '218',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '5'),
		4 => array('music_id' => '1935935',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '92162',
			'music_title_url' => 'culpables~manuel-turizo',
			'music_title' => 'Culpables',
			'music_artist' => 'Manuel Turizo',
			'music_shortlyric' => '[Pre-Estribillo]
Perdóname, no sé lo que pasó contigo que no te veo como antes
Tus manos ya me daban frío, no tenía como calentarme
Lo siento por apenas contarte, no quería lastimarte
Confieso que,...',
			'music_downloads' => '618',
			'music_bitrate' => '320',
			'music_length' => '233',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '4'),
		5 => array('music_id' => '1938122',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '92504',
			'music_title_url' => 'cuando-te-bese~becky-g-paulo-londra',
			'music_title' => 'Cuando Te Besé',
			'music_artist' => 'Becky G; Paulo Londra',
			'music_shortlyric' => '[Intro: Paulo Londra, Becky G]
Y cuando te vi, supe que no era\' para mí (Paulo)
Seguro tenías a alguien que no lo ibas a dejar ir (Becky G), ey
Pero cuando te vi te juro que me decidí
Acercarme y d...',
			'music_downloads' => '287',
			'music_bitrate' => '320',
			'music_length' => '254',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '4'),
		6 => array('music_id' => '1944173',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '93362',
			'music_title_url' => 'chiquitita-spanish-version~abba',
			'music_title' => 'Chiquitita (Spanish Version)',
			'music_artist' => 'ABBA',
			'music_shortlyric' => 'Chiqutita tell me what\'s wrong
You\'re enchained by your own sorrow
In your eyes there is no hope for tomorrow
How I hate to see you like this
There is no way you can deny it
I can see that you\'re o...',
			'music_downloads' => '46',
			'music_bitrate' => '1000',
			'music_length' => '335',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '4'),
		7 => array('music_id' => '1951252',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '94223',
			'music_title_url' => 'caliente~de-la-ghetto-j-balvin',
			'music_title' => 'Caliente',
			'music_artist' => 'De La Ghetto; J Balvin',
			'music_shortlyric' => '[Pre-Coro: J Balvin &amp; De La Ghetto]
Ayer entre mis sabanas te hice el amor
Y todavía no toco el suelo
Todavía siento que vuelo
Dejaste tu aroma en mi cama

Solo me conformo tocar tu piel
Solo m...',
			'music_downloads' => '42',
			'music_bitrate' => '320',
			'music_length' => '206',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '4'),
		8 => array('music_id' => '1951454',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '94259',
			'music_title_url' => 'sin-querer-queriendo~lali-mau-y-ricky',
			'music_title' => 'Sin Querer Queriendo',
			'music_artist' => 'Lali; Mau Y Ricky',
			'music_shortlyric' => '[Intro: Lali &amp; Mau y Ricky]
Sí, sí.

[Verso 1: Lali]
Hoy te siento más cerquita, quizá
Esta noche está oscurita de más
Me hizo falta compañía, verdad
Y yo te vine a buscar.

[Verso 2: Mau y Ric...',
			'music_downloads' => '185',
			'music_bitrate' => '1000',
			'music_length' => '228',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '4'),
		9 => array('music_id' => '1935954',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '92177',
			'music_title_url' => 'buena-vida~natti-natasha-daddy-yankee',
			'music_title' => 'Buena Vida',
			'music_artist' => 'Natti Natasha; Daddy Yankee',
			'music_shortlyric' => '[Verso 1: Natti Natasha]
Se fue, la marea subió y se fue
No lo busquen que hasta ahora ya ni se ve
Arriba de las nubes va un avión con mi merca
Soy dueña de los cielos, cuando paso ellos tiemblan...',
			'music_downloads' => '299',
			'music_bitrate' => '320',
			'music_length' => '190',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		10 => array('music_id' => '1938640',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '92579',
			'music_title_url' => 'mocca~lalo-ebratt-trapical',
			'music_title' => 'Mocca',
			'music_artist' => 'Lalo Ebratt; Trapical',
			'music_shortlyric' => '',
			'music_downloads' => '266',
			'music_bitrate' => '320',
			'music_length' => '211',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		11 => array('music_id' => '1941812',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '93026',
			'music_title_url' => 'ya-no-tiene-novio~sebastian-yatra-mau-y-ricky',
			'music_title' => 'Ya No Tiene Novio',
			'music_artist' => 'Sebastián Yatra; Mau Y Ricky',
			'music_shortlyric' => '[Intro]
Yatra, Yatra
Okay, sí, sí
Mau y Ricky

[Coro: Sebastián Yatra, Mau y Ricky]
Hace rato no la ven, pero hoy salió a beber
Porque ya no tiene novio
Ella sabe como soy, si me llama, yo le doy
P...',
			'music_downloads' => '814',
			'music_bitrate' => '259',
			'music_length' => '198',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		12 => array('music_id' => '1947310',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '93735',
			'music_title_url' => 'sigamos-bailando~gianluca-vacchi-luis-fonsi-yandel',
			'music_title' => 'Sigamos Bailando',
			'music_artist' => 'Gianluca Vacchi; Luis Fonsi; Yandel',
			'music_shortlyric' => '[Verso 1: Luis Fonsi]
Ponte un vestido elegante, y eso tacone\' gigante\'
Y no te preocupes por la billetera
Que esta noche yo te doy lo que tú quiera\'
Saca tu estilo salvaje, goza que pa\' eso te tra...',
			'music_downloads' => '327',
			'music_bitrate' => '320',
			'music_length' => '189',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		13 => array('music_id' => '1950284',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '94088',
			'music_title_url' => 'solos~amenazzy-lary-over',
			'music_title' => 'Solos',
			'music_artist' => 'Amenazzy; Lary Over',
			'music_shortlyric' => '[Intro: El Nene &amp; Lary Over]
Te quiero ver, te quiero ver
No te olvide, no te olvide
La última vez, quedaste con toa\' las gana (bebe)
Dónde estás que no me llamas
Te noto preocupada, ahora te n...',
			'music_downloads' => '26',
			'music_bitrate' => '320',
			'music_length' => '230',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		14 => array('music_id' => '1950283',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '94087',
			'music_title_url' => 'contigo-siempre~alejandro-fernandez-sebastian-yatra',
			'music_title' => 'Contigo Siempre',
			'music_artist' => 'Alejandro Fernandez; Sebastián Yatra',
			'music_shortlyric' => '',
			'music_downloads' => '75',
			'music_bitrate' => '320',
			'music_length' => '201',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		15 => array('music_id' => '1951385',
			'cat_id' => '9',
			'cat_level' => '2',
			'cover_id' => '94253',
			'music_title_url' => 'devuelveme~ozuna',
			'music_title' => 'Devuelveme',
			'music_artist' => 'Ozuna',
			'music_shortlyric' => '[Pre-Coro]
Devuélveme lo que me llevaste-e-e
Tú mi corazón te robaste (-te)
Dime cómo hago pa\' dormir por las noches
No hago nada más que pensarte (-te)
Dime, dime (oh-oh), cómo quieres que te olvi...',
			'music_downloads' => '179',
			'music_bitrate' => '1000',
			'music_length' => '188',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		16 => array('music_id' => '1951383',
			'cat_id' => '9',
			'cat_level' => '2',
			'cover_id' => '94253',
			'music_title_url' => 'me-dijeron~ozuna',
			'music_title' => 'Me Dijeron',
			'music_artist' => 'Ozuna',
			'music_shortlyric' => '[Pre-Coro]
Ya me dijeron (oh-oh-oh-oh)
Que tú a mí me quieres ver
Y ya tu amiga me lo confesó
Que al igual que yo, tú me quieres comer.

Ya me dijeron
Que no eres feliz con él
No hay nada de malo,...',
			'music_downloads' => '284',
			'music_bitrate' => '1000',
			'music_length' => '170',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		17 => array('music_id' => '1951415',
			'cat_id' => '9',
			'cat_level' => '2',
			'cover_id' => '94254',
			'music_title_url' => 'no-es-justo~j-balvin-zion-lennox',
			'music_title' => 'No Es Justo',
			'music_artist' => 'J Balvin; Zion; Lennox',
			'music_shortlyric' => '[Intro: Zion]
Oh-oh
Uoh-oh-oh
(Eh-yeh-yeh, yeh-yeh-yeh, yeh)

[Coro: J Balvin, Zion, Lennox]
Cuando empiezas a bailar, no es justo, no es justo
Y lo noté en tu mirar, te gusto, te gusto (baby)
Sona...',
			'music_downloads' => '57',
			'music_bitrate' => '1000',
			'music_length' => '250',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '3'),
		18 => array('music_id' => '1947917',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '93818',
			'music_title_url' => 'el-baile-los-que-sobran~los-prisioneros',
			'music_title' => 'El Baile Los Que Sobran',
			'music_artist' => 'Los Prisioneros',
			'music_shortlyric' => 'Es otra noche más
De caminar
Es otro fin de mes
Sin novedad.

Mis amigos se quedaron
Igual que tú
Este año se les acabaron
Los juegos, los doce juegos.

Únanse al baile de los que sobran
Nadie nos...',
			'music_downloads' => '35',
			'music_bitrate' => '1000',
			'music_length' => '347',
			'music_thumbs_time' => '0',
			'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '2'),
		19 => array('music_id' => '1941930',
			'cat_id' => '9',
			'cat_level' => '1',
			'cover_id' => '93034',
			'music_title_url' => 'triste~bryant-myers-bad-bunny',
			'music_title' => 'Triste',
			'music_artist' => 'Bryant Myers; Bad Bunny',
			'music_shortlyric' => '[Verso 1: Bryant Myers]
Tú vienes a mis pensamientos cuando estoy fumando (yeh)
Tantos recuerdos que tengo de ti
Rondando en mi mente no puedo borrarlos (¡no!)
Solo me queda aguantarlos

[Pre-Coro:...',
			'music_downloads' => '194',
			'music_bitrate' => '320',
			'music_length' => '264',
			'music_thumbs_time' => '0',
			'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
			'points' => '2'),
	),
);

$hot_video_rows = array(
    1 => array(
        0 => array('music_id' => '1950470',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'nguoi-hay-quen-anh-di~bang-kieu-anh-khang',
            'music_title' => 'Người Hãy Quên Anh Đi',
            'music_artist' => 'Bằng Kiều; Anh Khang',
            'music_shortlyric' => '1. Người yêu hỡi dù gì cũng xa nhau rồi
Ngày nào chiếc hôn bao đêm rã rời giờ đã hết rồi
Chẳng còn hơi ấm trên đầu môi
Người yêu hỡi giờ đây tiếng yêu phai phôi
Chỉ còn những đêm cô đơn rối bời giọ...',
            'music_downloads' => '1206',
            'music_bitrate' => '96',
            'music_length' => '267',
            'music_thumbs_time' => '133',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '15'),
        1 => array('music_id' => '1942952',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'my-nhan-vao-bep~truong-quynh-anh-tran-uyen-phuong',
            'music_title' => 'Mỹ Nhân Vào Bếp',
            'music_artist' => 'Trương Quỳnh Anh; Trần Uyên Phương',
            'music_shortlyric' => 'Babe
Thế giới của em vốn rất nhiều đàn ông
Nhưng chưa từng suy nghĩ về chuyện lấy chồng
Ôi cuộc đời màu hồng.

Babe
Như bao ngày em vẫn thức dậy thật trễ
Kéo cô bạn vào bếp vô cùng đam mê
Chỉ nấu...',
            'music_downloads' => '3635',
            'music_bitrate' => '320',
            'music_length' => '355',
            'music_thumbs_time' => '79',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        2 => array('music_id' => '1948161',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'em-muon-anh-dua-em-ve~ho-ngoc-ha',
            'music_title' => 'Em Muốn Anh Đưa Em Về',
            'music_artist' => 'Hồ Ngọc Hà',
            'music_shortlyric' => '1. Trời đang tối cơn mưa phùn
Hôm nay ta hẹn nhau lần đầu tiên
Nhìn ánh mắt anh ngại ngùng
Nhẹ nhàng đặt nụ hồng lên môi em.

Nghe trong em từng khao khát như muốn đoạ
Cay đắng như đã dừng lại...
V...',
            'music_downloads' => '1361',
            'music_bitrate' => '96',
            'music_length' => '256',
            'music_thumbs_time' => '154',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        3 => array('music_id' => '1948832',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'phan-gai-thuyen-quyen~dan-nguyen-hoang-nhung',
            'music_title' => 'Phận Gái Thuyền Quyên',
            'music_artist' => 'Đan Nguyên; Hoàng Nhung',
            'music_shortlyric' => 'Từ nay thôi đành duyên mình lỡ đôi
Dù vương vấn mãi cũng thế mà thôi
Khi xưa thầm nói yêu nhau
Bao nhiêu mộng thắm ban đầu
Thôi xin đừng tiếc nhớ thương chi.

Từ nay đôi mình thôi đừng nhớ mong
Mườ...',
            'music_downloads' => '631',
            'music_bitrate' => '320',
            'music_length' => '318',
            'music_thumbs_time' => '159',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '9'),
        4 => array('music_id' => '1937279',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'darkside~alan-walker-aura-tomine-harket',
            'music_title' => 'Darkside',
            'music_artist' => 'Alan Walker; Au/Ra; Tomine Harket',
            'music_shortlyric' => '[Verse 1: Tomine Harket]
We\'re not in love
[t1]Chúng ta không hề yêu nhau
We share no stories
[t1]Và câu chuyện của mỗi người cũng khác biệt
Just something in your eyes
[t1]Nhưng có điều gì đó tron...',
            'music_downloads' => '1217',
            'music_bitrate' => '128',
            'music_length' => '224',
            'music_thumbs_time' => '112',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        5 => array('music_id' => '1942951',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-lai-tinh-xua~huong-lan-che-linh',
            'music_title' => 'Nối Lại Tình Xưa',
            'music_artist' => 'Hương Lan; Chế Linh',
            'music_shortlyric' => 'Về đây bên nhau, ta nối lại tình xưa
Chuyện tình mà bao năm qua, em gói ghém từng kỷ niệm
Phai nắng con đường xưa, những chiều hẹn hò mưa đổ
Mưa ướt lạnh vai anh, em thấy lòng mình xót xa.

Mùa thu...',
            'music_downloads' => '233',
            'music_bitrate' => '320',
            'music_length' => '348',
            'music_thumbs_time' => '174',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        6 => array('music_id' => '1951756',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'yeu-tieng-hat-ngay-xua~tam-doan-ha-vy',
            'music_title' => 'Yêu Tiếng Hát Ngày Xưa',
            'music_artist' => 'Tâm Đoan; Hạ Vy',
            'music_shortlyric' => 'Đôi mắt em buồn buồn
Gợi giấc mơ hồi tưởng
Một thời bên nhau dễ thương.

Rồi biết đâu mà tìm
Bên trời chiều loang tím
Cho kỷ niệm đau trái tim.

Hương ái ân tàn rồi
Lòng bỗng dưng bồi hồi
Còn...',
            'music_downloads' => '59',
            'music_bitrate' => '320',
            'music_length' => '266',
            'music_thumbs_time' => '53',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        7 => array('music_id' => '1938080',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'trang-tan-tren-he-pho~y-linh',
            'music_title' => 'Trăng Tàn Trên Hè Phố',
            'music_artist' => 'Ý Linh',
            'music_shortlyric' => '1. Tôi lại gặp anh
Người trai nơi chiến tuyến
Súng trên vai bước lê qua đường phố
Tôi lại gặp anh
Giờ đây nơi quán nhỏ
Tuổi 30 mà ngỡ như trẻ thơ.

Nhớ gì từ ngày anh xa mái trường
Nhớ gì từ ngà...',
            'music_downloads' => '301',
            'music_bitrate' => '96',
            'music_length' => '343',
            'music_thumbs_time' => '171',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        8 => array('music_id' => '1951941',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'giot-mua-thu~lam-anh-nguyet-anh',
            'music_title' => 'Giọt Mưa Thu',
            'music_artist' => 'Lam Anh; Nguyệt Ánh',
            'music_shortlyric' => 'Ngoài hiên giọt mưa thu thánh thót rơi
Trời lắng u buồn mây hắt hiu ngừng trôi
Nghe gió thoảng mơ hồ trong mưa thu
Ai khóc ai than hờ!

Vài con chim non chiêm chiếp kêu trên cành
Như nhủ trời...',
            'music_downloads' => '29',
            'music_bitrate' => '320',
            'music_length' => '393',
            'music_thumbs_time' => '32',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        9 => array('music_id' => '1943854',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'solo-feat-demi-lovato-japan-edition~clean-bandit',
            'music_title' => 'Solo feat. Demi Lovato [Japan Edition]',
            'music_artist' => 'Clean Bandit',
            'music_shortlyric' => '[Intro]
It solo, solo, everybody
[t1]Đây là cơ chế tự thoát nước, thưa quý vị
It solo, everybody
[t1]Tự giải toả
It solo, solo, everybody
[t1]Tự khiến mình cảm thấy hạnh phúc
Woop woop woop woop wo...',
            'music_downloads' => '189',
            'music_bitrate' => '96',
            'music_length' => '224',
            'music_thumbs_time' => '113',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        10 => array('music_id' => '1952325',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'thuo-ban-dau~trieu-khac-vinh-cat-lynh',
            'music_title' => 'Thuở Ban Đầu',
            'music_artist' => 'Triệu Khắc Vinh - Cát Lynh',
            'music_shortlyric' => 'Sao không thấy em lại
Để cùng anh thẩn thơ
Trước sân trăng vời vợi
Để rồi cùng ước mơ.

Sao không thấy em lại
Hàng dừa nghiêng thương nhớ
Và khúc ân tình biết trao về đâu?

Ôi, đẹp sao là thuở ban...',
            'music_downloads' => '21',
            'music_bitrate' => '128',
            'music_length' => '215',
            'music_thumbs_time' => '107',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        11 => array('music_id' => '1936497',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'lien-khuc-so-ngheo-ngheo-hai-dua-ngheo~tuan-vu-duy-truong-khanh-lam',
            'music_title' => 'Liên Khúc: Số Nghèo; Nghèo; Hai Đứa Nghèo',
            'music_artist' => 'Tuấn Vũ; Duy Trường; Khánh Lâm',
            'music_shortlyric' => '[Số Nghèo]

Tôi đã trót sinh ra trúng vào một con số
Con số xấu vô duyên khiến nhiều năm trắng tay
Học hành thì không khá chữ trả lại cho thầy
Văn chương vốn không hay sách đèn chưa ráo mực.

Nên v...',
            'music_downloads' => '53',
            'music_bitrate' => '320',
            'music_length' => '349',
            'music_thumbs_time' => '39',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        12 => array('music_id' => '1942553',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-buon-gac-tro~mai-thien-van',
            'music_title' => 'Nỗi Buồn Gác Trọ',
            'music_artist' => 'Mai Thiên Vân',
            'music_shortlyric' => 'Gác lạnh về khuya cơn gió lùa
Trăng gầy nghiêng bóng cài song thưa
Nhớ ai mà ánh đèn hiu hắt
Lá vàng nhè nhẹ đưa
Tưởng như bước lê hè phố.

Có người con gái buông tóc thề
Thu về e ấp chuyện vu qu...',
            'music_downloads' => '50',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '116',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        13 => array('music_id' => '1944687',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'la-thu-tran-the~giang-tu-ngoc-minh-dan-nguyen',
            'music_title' => 'Lá Thư Trần Thế',
            'music_artist' => 'Giang Tử; Ngọc Minh; Đan Nguyên',
            'music_shortlyric' => 'Lạy chúa con là lính trận ngoài biên
Vì xa thành phố xa quá nên quên
Đêm nay ngôi hai trời xuống
Ánh sao lung linh muôn màu
Con tưởng hoả châu soi tuyến đầu.

Lạy chúa con là thiếu phụ miền quê
Chồ...',
            'music_downloads' => '85',
            'music_bitrate' => '64',
            'music_length' => '328',
            'music_thumbs_time' => '164',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        14 => array('music_id' => '1948831',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'thunderclouds~lsd',
            'music_title' => 'Thunderclouds',
            'music_artist' => 'LSD',
            'music_shortlyric' => '[Verse 1: Sia]
All I need is one
[t1]Tất cả những gì em cần chỉ là một
One old man is enough
[t1]Một người đàn ông trưởng thành thôi là đủ
Babe, you gotta
[t1]Anh ơi, anh chì cần
Just turn your fea...',
            'music_downloads' => '399',
            'music_bitrate' => '96',
            'music_length' => '195',
            'music_thumbs_time' => '97',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        15 => array('music_id' => '1951494',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-voi-nguoi-tinh~truc-lam-truc-linh',
            'music_title' => 'Nói Với Người Tình',
            'music_artist' => 'Trúc Lam; Trúc Linh',
            'music_shortlyric' => 'Này người tình ơi! Này người tình ơi!

&quot;Mưa bên thềm từng hạt mưa rơi nhanh
Nghe trong tim mình rộn ràng
Ngân vang khúc nhạc tìm câu ca
Trong tình yêu, đến với anh thật thà.&quot; [x2]

Mây...',
            'music_downloads' => '41',
            'music_bitrate' => '320',
            'music_length' => '282',
            'music_thumbs_time' => '141',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        16 => array('music_id' => '1952292',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'how-deep-is-your-love~bee-gees',
            'music_title' => 'How Deep Is Your Love',
            'music_artist' => 'Bee Gees',
            'music_shortlyric' => '[Verse 1]
I know your eyes in the morning sun
I feel you touch me in the pouring rain
And the moment that you wander far from me
I wanna feel you in my arms again

[Pre-Chorus]
And you come to me o...',
            'music_downloads' => '14',
            'music_bitrate' => '320',
            'music_length' => '225',
            'music_thumbs_time' => '112',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        17 => array('music_id' => '1937727',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'killing-me~ikon',
            'music_title' => 'Killing Me',
            'music_artist' => 'iKON',
            'music_shortlyric' => 'Jukgetda tto eogimeopsi
Neoui heunjeogi
Nama nal goeropinda
Jukgetda nam daehadeusi
Doraseonneunde
Wae naneun oeroulkka
Choyeonhal jul arasseo heeojime daehae
Geunde neol daleun seupgwan hana
Beori...',
            'music_downloads' => '885',
            'music_bitrate' => '192',
            'music_length' => '201',
            'music_thumbs_time' => '100',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        18 => array('music_id' => '1939625',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'forever~kiss',
            'music_title' => 'Forever',
            'music_artist' => 'Kiss',
            'music_shortlyric' => '1. I gotta tell you what I\'m feelin\' inside, I could lie to myself, but it\'s true
There\'s no denying when I look in your eyes, girl I\'m out of my head over you
I lived so long believin\' all love is...',
            'music_downloads' => '12',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '114',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        19 => array('music_id' => '1936296',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'soulmate~zico-iu',
            'music_title' => 'SoulMate',
            'music_artist' => 'Zico; IU',
            'music_shortlyric' => 'Jeoleumui hanbokpaneseo
Du namnyeoga saneun jageun seom
Ne gibuni yeogi nalssigo
Saeppalgan yeolmaega yeollyeosseo
Jogeum natseoreotdeon majeunpyeon
Ije naega jeil akkineun got
Naogi sileun ibujari...',
            'music_downloads' => '17',
            'music_bitrate' => '96',
            'music_length' => '221',
            'music_thumbs_time' => '110',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
    ),
    2 => array(
    ),
    3 => array(
        0 => array('music_id' => '1950470',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'nguoi-hay-quen-anh-di~bang-kieu-anh-khang',
            'music_title' => 'Người Hãy Quên Anh Đi',
            'music_artist' => 'Bằng Kiều; Anh Khang',
            'music_shortlyric' => '1. Người yêu hỡi dù gì cũng xa nhau rồi
Ngày nào chiếc hôn bao đêm rã rời giờ đã hết rồi
Chẳng còn hơi ấm trên đầu môi
Người yêu hỡi giờ đây tiếng yêu phai phôi
Chỉ còn những đêm cô đơn rối bời giọ...',
            'music_downloads' => '1206',
            'music_bitrate' => '96',
            'music_length' => '267',
            'music_thumbs_time' => '133',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '15'),
        1 => array('music_id' => '1942952',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'my-nhan-vao-bep~truong-quynh-anh-tran-uyen-phuong',
            'music_title' => 'Mỹ Nhân Vào Bếp',
            'music_artist' => 'Trương Quỳnh Anh; Trần Uyên Phương',
            'music_shortlyric' => 'Babe
Thế giới của em vốn rất nhiều đàn ông
Nhưng chưa từng suy nghĩ về chuyện lấy chồng
Ôi cuộc đời màu hồng.

Babe
Như bao ngày em vẫn thức dậy thật trễ
Kéo cô bạn vào bếp vô cùng đam mê
Chỉ nấu...',
            'music_downloads' => '3635',
            'music_bitrate' => '320',
            'music_length' => '355',
            'music_thumbs_time' => '79',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        2 => array('music_id' => '1948161',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'em-muon-anh-dua-em-ve~ho-ngoc-ha',
            'music_title' => 'Em Muốn Anh Đưa Em Về',
            'music_artist' => 'Hồ Ngọc Hà',
            'music_shortlyric' => '1. Trời đang tối cơn mưa phùn
Hôm nay ta hẹn nhau lần đầu tiên
Nhìn ánh mắt anh ngại ngùng
Nhẹ nhàng đặt nụ hồng lên môi em.

Nghe trong em từng khao khát như muốn đoạ
Cay đắng như đã dừng lại...
V...',
            'music_downloads' => '1361',
            'music_bitrate' => '96',
            'music_length' => '256',
            'music_thumbs_time' => '154',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        3 => array('music_id' => '1948832',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'phan-gai-thuyen-quyen~dan-nguyen-hoang-nhung',
            'music_title' => 'Phận Gái Thuyền Quyên',
            'music_artist' => 'Đan Nguyên; Hoàng Nhung',
            'music_shortlyric' => 'Từ nay thôi đành duyên mình lỡ đôi
Dù vương vấn mãi cũng thế mà thôi
Khi xưa thầm nói yêu nhau
Bao nhiêu mộng thắm ban đầu
Thôi xin đừng tiếc nhớ thương chi.

Từ nay đôi mình thôi đừng nhớ mong
Mườ...',
            'music_downloads' => '631',
            'music_bitrate' => '320',
            'music_length' => '318',
            'music_thumbs_time' => '159',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '9'),
        4 => array('music_id' => '1937279',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'darkside~alan-walker-aura-tomine-harket',
            'music_title' => 'Darkside',
            'music_artist' => 'Alan Walker; Au/Ra; Tomine Harket',
            'music_shortlyric' => '[Verse 1: Tomine Harket]
We\'re not in love
[t1]Chúng ta không hề yêu nhau
We share no stories
[t1]Và câu chuyện của mỗi người cũng khác biệt
Just something in your eyes
[t1]Nhưng có điều gì đó tron...',
            'music_downloads' => '1217',
            'music_bitrate' => '128',
            'music_length' => '224',
            'music_thumbs_time' => '112',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        5 => array('music_id' => '1942951',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-lai-tinh-xua~huong-lan-che-linh',
            'music_title' => 'Nối Lại Tình Xưa',
            'music_artist' => 'Hương Lan; Chế Linh',
            'music_shortlyric' => 'Về đây bên nhau, ta nối lại tình xưa
Chuyện tình mà bao năm qua, em gói ghém từng kỷ niệm
Phai nắng con đường xưa, những chiều hẹn hò mưa đổ
Mưa ướt lạnh vai anh, em thấy lòng mình xót xa.

Mùa thu...',
            'music_downloads' => '233',
            'music_bitrate' => '320',
            'music_length' => '348',
            'music_thumbs_time' => '174',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        6 => array('music_id' => '1951756',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'yeu-tieng-hat-ngay-xua~tam-doan-ha-vy',
            'music_title' => 'Yêu Tiếng Hát Ngày Xưa',
            'music_artist' => 'Tâm Đoan; Hạ Vy',
            'music_shortlyric' => 'Đôi mắt em buồn buồn
Gợi giấc mơ hồi tưởng
Một thời bên nhau dễ thương.

Rồi biết đâu mà tìm
Bên trời chiều loang tím
Cho kỷ niệm đau trái tim.

Hương ái ân tàn rồi
Lòng bỗng dưng bồi hồi
Còn...',
            'music_downloads' => '59',
            'music_bitrate' => '320',
            'music_length' => '266',
            'music_thumbs_time' => '53',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        7 => array('music_id' => '1938080',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'trang-tan-tren-he-pho~y-linh',
            'music_title' => 'Trăng Tàn Trên Hè Phố',
            'music_artist' => 'Ý Linh',
            'music_shortlyric' => '1. Tôi lại gặp anh
Người trai nơi chiến tuyến
Súng trên vai bước lê qua đường phố
Tôi lại gặp anh
Giờ đây nơi quán nhỏ
Tuổi 30 mà ngỡ như trẻ thơ.

Nhớ gì từ ngày anh xa mái trường
Nhớ gì từ ngà...',
            'music_downloads' => '301',
            'music_bitrate' => '96',
            'music_length' => '343',
            'music_thumbs_time' => '171',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        8 => array('music_id' => '1951941',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'giot-mua-thu~lam-anh-nguyet-anh',
            'music_title' => 'Giọt Mưa Thu',
            'music_artist' => 'Lam Anh; Nguyệt Ánh',
            'music_shortlyric' => 'Ngoài hiên giọt mưa thu thánh thót rơi
Trời lắng u buồn mây hắt hiu ngừng trôi
Nghe gió thoảng mơ hồ trong mưa thu
Ai khóc ai than hờ!

Vài con chim non chiêm chiếp kêu trên cành
Như nhủ trời...',
            'music_downloads' => '29',
            'music_bitrate' => '320',
            'music_length' => '393',
            'music_thumbs_time' => '32',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        9 => array('music_id' => '1943854',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'solo-feat-demi-lovato-japan-edition~clean-bandit',
            'music_title' => 'Solo feat. Demi Lovato [Japan Edition]',
            'music_artist' => 'Clean Bandit',
            'music_shortlyric' => '[Intro]
It solo, solo, everybody
[t1]Đây là cơ chế tự thoát nước, thưa quý vị
It solo, everybody
[t1]Tự giải toả
It solo, solo, everybody
[t1]Tự khiến mình cảm thấy hạnh phúc
Woop woop woop woop wo...',
            'music_downloads' => '189',
            'music_bitrate' => '96',
            'music_length' => '224',
            'music_thumbs_time' => '113',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        10 => array('music_id' => '1952325',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'thuo-ban-dau~trieu-khac-vinh-cat-lynh',
            'music_title' => 'Thuở Ban Đầu',
            'music_artist' => 'Triệu Khắc Vinh - Cát Lynh',
            'music_shortlyric' => 'Sao không thấy em lại
Để cùng anh thẩn thơ
Trước sân trăng vời vợi
Để rồi cùng ước mơ.

Sao không thấy em lại
Hàng dừa nghiêng thương nhớ
Và khúc ân tình biết trao về đâu?

Ôi, đẹp sao là thuở ban...',
            'music_downloads' => '21',
            'music_bitrate' => '128',
            'music_length' => '215',
            'music_thumbs_time' => '107',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        11 => array('music_id' => '1936497',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'lien-khuc-so-ngheo-ngheo-hai-dua-ngheo~tuan-vu-duy-truong-khanh-lam',
            'music_title' => 'Liên Khúc: Số Nghèo; Nghèo; Hai Đứa Nghèo',
            'music_artist' => 'Tuấn Vũ; Duy Trường; Khánh Lâm',
            'music_shortlyric' => '[Số Nghèo]

Tôi đã trót sinh ra trúng vào một con số
Con số xấu vô duyên khiến nhiều năm trắng tay
Học hành thì không khá chữ trả lại cho thầy
Văn chương vốn không hay sách đèn chưa ráo mực.

Nên v...',
            'music_downloads' => '53',
            'music_bitrate' => '320',
            'music_length' => '349',
            'music_thumbs_time' => '39',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        12 => array('music_id' => '1942553',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-buon-gac-tro~mai-thien-van',
            'music_title' => 'Nỗi Buồn Gác Trọ',
            'music_artist' => 'Mai Thiên Vân',
            'music_shortlyric' => 'Gác lạnh về khuya cơn gió lùa
Trăng gầy nghiêng bóng cài song thưa
Nhớ ai mà ánh đèn hiu hắt
Lá vàng nhè nhẹ đưa
Tưởng như bước lê hè phố.

Có người con gái buông tóc thề
Thu về e ấp chuyện vu qu...',
            'music_downloads' => '50',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '116',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        13 => array('music_id' => '1944687',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'la-thu-tran-the~giang-tu-ngoc-minh-dan-nguyen',
            'music_title' => 'Lá Thư Trần Thế',
            'music_artist' => 'Giang Tử; Ngọc Minh; Đan Nguyên',
            'music_shortlyric' => 'Lạy chúa con là lính trận ngoài biên
Vì xa thành phố xa quá nên quên
Đêm nay ngôi hai trời xuống
Ánh sao lung linh muôn màu
Con tưởng hoả châu soi tuyến đầu.

Lạy chúa con là thiếu phụ miền quê
Chồ...',
            'music_downloads' => '85',
            'music_bitrate' => '64',
            'music_length' => '328',
            'music_thumbs_time' => '164',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        14 => array('music_id' => '1948831',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'thunderclouds~lsd',
            'music_title' => 'Thunderclouds',
            'music_artist' => 'LSD',
            'music_shortlyric' => '[Verse 1: Sia]
All I need is one
[t1]Tất cả những gì em cần chỉ là một
One old man is enough
[t1]Một người đàn ông trưởng thành thôi là đủ
Babe, you gotta
[t1]Anh ơi, anh chì cần
Just turn your fea...',
            'music_downloads' => '399',
            'music_bitrate' => '96',
            'music_length' => '195',
            'music_thumbs_time' => '97',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        15 => array('music_id' => '1951494',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-voi-nguoi-tinh~truc-lam-truc-linh',
            'music_title' => 'Nói Với Người Tình',
            'music_artist' => 'Trúc Lam; Trúc Linh',
            'music_shortlyric' => 'Này người tình ơi! Này người tình ơi!

&quot;Mưa bên thềm từng hạt mưa rơi nhanh
Nghe trong tim mình rộn ràng
Ngân vang khúc nhạc tìm câu ca
Trong tình yêu, đến với anh thật thà.&quot; [x2]

Mây...',
            'music_downloads' => '41',
            'music_bitrate' => '320',
            'music_length' => '282',
            'music_thumbs_time' => '141',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        16 => array('music_id' => '1952292',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'how-deep-is-your-love~bee-gees',
            'music_title' => 'How Deep Is Your Love',
            'music_artist' => 'Bee Gees',
            'music_shortlyric' => '[Verse 1]
I know your eyes in the morning sun
I feel you touch me in the pouring rain
And the moment that you wander far from me
I wanna feel you in my arms again

[Pre-Chorus]
And you come to me o...',
            'music_downloads' => '14',
            'music_bitrate' => '320',
            'music_length' => '225',
            'music_thumbs_time' => '112',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        17 => array('music_id' => '1937727',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'killing-me~ikon',
            'music_title' => 'Killing Me',
            'music_artist' => 'iKON',
            'music_shortlyric' => 'Jukgetda tto eogimeopsi
Neoui heunjeogi
Nama nal goeropinda
Jukgetda nam daehadeusi
Doraseonneunde
Wae naneun oeroulkka
Choyeonhal jul arasseo heeojime daehae
Geunde neol daleun seupgwan hana
Beori...',
            'music_downloads' => '885',
            'music_bitrate' => '192',
            'music_length' => '201',
            'music_thumbs_time' => '100',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        18 => array('music_id' => '1939625',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'forever~kiss',
            'music_title' => 'Forever',
            'music_artist' => 'Kiss',
            'music_shortlyric' => '1. I gotta tell you what I\'m feelin\' inside, I could lie to myself, but it\'s true
There\'s no denying when I look in your eyes, girl I\'m out of my head over you
I lived so long believin\' all love is...',
            'music_downloads' => '12',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '114',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        19 => array('music_id' => '1936296',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'soulmate~zico-iu',
            'music_title' => 'SoulMate',
            'music_artist' => 'Zico; IU',
            'music_shortlyric' => 'Jeoleumui hanbokpaneseo
Du namnyeoga saneun jageun seom
Ne gibuni yeogi nalssigo
Saeppalgan yeolmaega yeollyeosseo
Jogeum natseoreotdeon majeunpyeon
Ije naega jeil akkineun got
Naogi sileun ibujari...',
            'music_downloads' => '17',
            'music_bitrate' => '96',
            'music_length' => '221',
            'music_thumbs_time' => '110',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
    ),
    4 => array(
        0 => array('music_id' => '1950470',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'nguoi-hay-quen-anh-di~bang-kieu-anh-khang',
            'music_title' => 'Người Hãy Quên Anh Đi',
            'music_artist' => 'Bằng Kiều; Anh Khang',
            'music_shortlyric' => '1. Người yêu hỡi dù gì cũng xa nhau rồi
Ngày nào chiếc hôn bao đêm rã rời giờ đã hết rồi
Chẳng còn hơi ấm trên đầu môi
Người yêu hỡi giờ đây tiếng yêu phai phôi
Chỉ còn những đêm cô đơn rối bời giọ...',
            'music_downloads' => '1206',
            'music_bitrate' => '96',
            'music_length' => '267',
            'music_thumbs_time' => '133',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '15'),
        1 => array('music_id' => '1942952',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'my-nhan-vao-bep~truong-quynh-anh-tran-uyen-phuong',
            'music_title' => 'Mỹ Nhân Vào Bếp',
            'music_artist' => 'Trương Quỳnh Anh; Trần Uyên Phương',
            'music_shortlyric' => 'Babe
Thế giới của em vốn rất nhiều đàn ông
Nhưng chưa từng suy nghĩ về chuyện lấy chồng
Ôi cuộc đời màu hồng.

Babe
Như bao ngày em vẫn thức dậy thật trễ
Kéo cô bạn vào bếp vô cùng đam mê
Chỉ nấu...',
            'music_downloads' => '3635',
            'music_bitrate' => '320',
            'music_length' => '355',
            'music_thumbs_time' => '79',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        2 => array('music_id' => '1948161',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'em-muon-anh-dua-em-ve~ho-ngoc-ha',
            'music_title' => 'Em Muốn Anh Đưa Em Về',
            'music_artist' => 'Hồ Ngọc Hà',
            'music_shortlyric' => '1. Trời đang tối cơn mưa phùn
Hôm nay ta hẹn nhau lần đầu tiên
Nhìn ánh mắt anh ngại ngùng
Nhẹ nhàng đặt nụ hồng lên môi em.

Nghe trong em từng khao khát như muốn đoạ
Cay đắng như đã dừng lại...
V...',
            'music_downloads' => '1361',
            'music_bitrate' => '96',
            'music_length' => '256',
            'music_thumbs_time' => '154',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        3 => array('music_id' => '1948832',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'phan-gai-thuyen-quyen~dan-nguyen-hoang-nhung',
            'music_title' => 'Phận Gái Thuyền Quyên',
            'music_artist' => 'Đan Nguyên; Hoàng Nhung',
            'music_shortlyric' => 'Từ nay thôi đành duyên mình lỡ đôi
Dù vương vấn mãi cũng thế mà thôi
Khi xưa thầm nói yêu nhau
Bao nhiêu mộng thắm ban đầu
Thôi xin đừng tiếc nhớ thương chi.

Từ nay đôi mình thôi đừng nhớ mong
Mườ...',
            'music_downloads' => '631',
            'music_bitrate' => '320',
            'music_length' => '318',
            'music_thumbs_time' => '159',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '9'),
        4 => array('music_id' => '1937279',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'darkside~alan-walker-aura-tomine-harket',
            'music_title' => 'Darkside',
            'music_artist' => 'Alan Walker; Au/Ra; Tomine Harket',
            'music_shortlyric' => '[Verse 1: Tomine Harket]
We\'re not in love
[t1]Chúng ta không hề yêu nhau
We share no stories
[t1]Và câu chuyện của mỗi người cũng khác biệt
Just something in your eyes
[t1]Nhưng có điều gì đó tron...',
            'music_downloads' => '1217',
            'music_bitrate' => '128',
            'music_length' => '224',
            'music_thumbs_time' => '112',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        5 => array('music_id' => '1942951',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-lai-tinh-xua~huong-lan-che-linh',
            'music_title' => 'Nối Lại Tình Xưa',
            'music_artist' => 'Hương Lan; Chế Linh',
            'music_shortlyric' => 'Về đây bên nhau, ta nối lại tình xưa
Chuyện tình mà bao năm qua, em gói ghém từng kỷ niệm
Phai nắng con đường xưa, những chiều hẹn hò mưa đổ
Mưa ướt lạnh vai anh, em thấy lòng mình xót xa.

Mùa thu...',
            'music_downloads' => '233',
            'music_bitrate' => '320',
            'music_length' => '348',
            'music_thumbs_time' => '174',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        6 => array('music_id' => '1951756',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'yeu-tieng-hat-ngay-xua~tam-doan-ha-vy',
            'music_title' => 'Yêu Tiếng Hát Ngày Xưa',
            'music_artist' => 'Tâm Đoan; Hạ Vy',
            'music_shortlyric' => 'Đôi mắt em buồn buồn
Gợi giấc mơ hồi tưởng
Một thời bên nhau dễ thương.

Rồi biết đâu mà tìm
Bên trời chiều loang tím
Cho kỷ niệm đau trái tim.

Hương ái ân tàn rồi
Lòng bỗng dưng bồi hồi
Còn...',
            'music_downloads' => '59',
            'music_bitrate' => '320',
            'music_length' => '266',
            'music_thumbs_time' => '53',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        7 => array('music_id' => '1938080',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'trang-tan-tren-he-pho~y-linh',
            'music_title' => 'Trăng Tàn Trên Hè Phố',
            'music_artist' => 'Ý Linh',
            'music_shortlyric' => '1. Tôi lại gặp anh
Người trai nơi chiến tuyến
Súng trên vai bước lê qua đường phố
Tôi lại gặp anh
Giờ đây nơi quán nhỏ
Tuổi 30 mà ngỡ như trẻ thơ.

Nhớ gì từ ngày anh xa mái trường
Nhớ gì từ ngà...',
            'music_downloads' => '301',
            'music_bitrate' => '96',
            'music_length' => '343',
            'music_thumbs_time' => '171',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        8 => array('music_id' => '1951941',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'giot-mua-thu~lam-anh-nguyet-anh',
            'music_title' => 'Giọt Mưa Thu',
            'music_artist' => 'Lam Anh; Nguyệt Ánh',
            'music_shortlyric' => 'Ngoài hiên giọt mưa thu thánh thót rơi
Trời lắng u buồn mây hắt hiu ngừng trôi
Nghe gió thoảng mơ hồ trong mưa thu
Ai khóc ai than hờ!

Vài con chim non chiêm chiếp kêu trên cành
Như nhủ trời...',
            'music_downloads' => '29',
            'music_bitrate' => '320',
            'music_length' => '393',
            'music_thumbs_time' => '32',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        9 => array('music_id' => '1943854',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'solo-feat-demi-lovato-japan-edition~clean-bandit',
            'music_title' => 'Solo feat. Demi Lovato [Japan Edition]',
            'music_artist' => 'Clean Bandit',
            'music_shortlyric' => '[Intro]
It solo, solo, everybody
[t1]Đây là cơ chế tự thoát nước, thưa quý vị
It solo, everybody
[t1]Tự giải toả
It solo, solo, everybody
[t1]Tự khiến mình cảm thấy hạnh phúc
Woop woop woop woop wo...',
            'music_downloads' => '189',
            'music_bitrate' => '96',
            'music_length' => '224',
            'music_thumbs_time' => '113',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        10 => array('music_id' => '1952325',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'thuo-ban-dau~trieu-khac-vinh-cat-lynh',
            'music_title' => 'Thuở Ban Đầu',
            'music_artist' => 'Triệu Khắc Vinh - Cát Lynh',
            'music_shortlyric' => 'Sao không thấy em lại
Để cùng anh thẩn thơ
Trước sân trăng vời vợi
Để rồi cùng ước mơ.

Sao không thấy em lại
Hàng dừa nghiêng thương nhớ
Và khúc ân tình biết trao về đâu?

Ôi, đẹp sao là thuở ban...',
            'music_downloads' => '21',
            'music_bitrate' => '128',
            'music_length' => '215',
            'music_thumbs_time' => '107',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        11 => array('music_id' => '1936497',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'lien-khuc-so-ngheo-ngheo-hai-dua-ngheo~tuan-vu-duy-truong-khanh-lam',
            'music_title' => 'Liên Khúc: Số Nghèo; Nghèo; Hai Đứa Nghèo',
            'music_artist' => 'Tuấn Vũ; Duy Trường; Khánh Lâm',
            'music_shortlyric' => '[Số Nghèo]

Tôi đã trót sinh ra trúng vào một con số
Con số xấu vô duyên khiến nhiều năm trắng tay
Học hành thì không khá chữ trả lại cho thầy
Văn chương vốn không hay sách đèn chưa ráo mực.

Nên v...',
            'music_downloads' => '53',
            'music_bitrate' => '320',
            'music_length' => '349',
            'music_thumbs_time' => '39',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        12 => array('music_id' => '1942553',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-buon-gac-tro~mai-thien-van',
            'music_title' => 'Nỗi Buồn Gác Trọ',
            'music_artist' => 'Mai Thiên Vân',
            'music_shortlyric' => 'Gác lạnh về khuya cơn gió lùa
Trăng gầy nghiêng bóng cài song thưa
Nhớ ai mà ánh đèn hiu hắt
Lá vàng nhè nhẹ đưa
Tưởng như bước lê hè phố.

Có người con gái buông tóc thề
Thu về e ấp chuyện vu qu...',
            'music_downloads' => '50',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '116',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        13 => array('music_id' => '1944687',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'la-thu-tran-the~giang-tu-ngoc-minh-dan-nguyen',
            'music_title' => 'Lá Thư Trần Thế',
            'music_artist' => 'Giang Tử; Ngọc Minh; Đan Nguyên',
            'music_shortlyric' => 'Lạy chúa con là lính trận ngoài biên
Vì xa thành phố xa quá nên quên
Đêm nay ngôi hai trời xuống
Ánh sao lung linh muôn màu
Con tưởng hoả châu soi tuyến đầu.

Lạy chúa con là thiếu phụ miền quê
Chồ...',
            'music_downloads' => '85',
            'music_bitrate' => '64',
            'music_length' => '328',
            'music_thumbs_time' => '164',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        14 => array('music_id' => '1948831',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'thunderclouds~lsd',
            'music_title' => 'Thunderclouds',
            'music_artist' => 'LSD',
            'music_shortlyric' => '[Verse 1: Sia]
All I need is one
[t1]Tất cả những gì em cần chỉ là một
One old man is enough
[t1]Một người đàn ông trưởng thành thôi là đủ
Babe, you gotta
[t1]Anh ơi, anh chì cần
Just turn your fea...',
            'music_downloads' => '399',
            'music_bitrate' => '96',
            'music_length' => '195',
            'music_thumbs_time' => '97',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        15 => array('music_id' => '1951494',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-voi-nguoi-tinh~truc-lam-truc-linh',
            'music_title' => 'Nói Với Người Tình',
            'music_artist' => 'Trúc Lam; Trúc Linh',
            'music_shortlyric' => 'Này người tình ơi! Này người tình ơi!

&quot;Mưa bên thềm từng hạt mưa rơi nhanh
Nghe trong tim mình rộn ràng
Ngân vang khúc nhạc tìm câu ca
Trong tình yêu, đến với anh thật thà.&quot; [x2]

Mây...',
            'music_downloads' => '41',
            'music_bitrate' => '320',
            'music_length' => '282',
            'music_thumbs_time' => '141',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        16 => array('music_id' => '1952292',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'how-deep-is-your-love~bee-gees',
            'music_title' => 'How Deep Is Your Love',
            'music_artist' => 'Bee Gees',
            'music_shortlyric' => '[Verse 1]
I know your eyes in the morning sun
I feel you touch me in the pouring rain
And the moment that you wander far from me
I wanna feel you in my arms again

[Pre-Chorus]
And you come to me o...',
            'music_downloads' => '14',
            'music_bitrate' => '320',
            'music_length' => '225',
            'music_thumbs_time' => '112',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        17 => array('music_id' => '1937727',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'killing-me~ikon',
            'music_title' => 'Killing Me',
            'music_artist' => 'iKON',
            'music_shortlyric' => 'Jukgetda tto eogimeopsi
Neoui heunjeogi
Nama nal goeropinda
Jukgetda nam daehadeusi
Doraseonneunde
Wae naneun oeroulkka
Choyeonhal jul arasseo heeojime daehae
Geunde neol daleun seupgwan hana
Beori...',
            'music_downloads' => '885',
            'music_bitrate' => '192',
            'music_length' => '201',
            'music_thumbs_time' => '100',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        18 => array('music_id' => '1939625',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'forever~kiss',
            'music_title' => 'Forever',
            'music_artist' => 'Kiss',
            'music_shortlyric' => '1. I gotta tell you what I\'m feelin\' inside, I could lie to myself, but it\'s true
There\'s no denying when I look in your eyes, girl I\'m out of my head over you
I lived so long believin\' all love is...',
            'music_downloads' => '12',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '114',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        19 => array('music_id' => '1936296',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'soulmate~zico-iu',
            'music_title' => 'SoulMate',
            'music_artist' => 'Zico; IU',
            'music_shortlyric' => 'Jeoleumui hanbokpaneseo
Du namnyeoga saneun jageun seom
Ne gibuni yeogi nalssigo
Saeppalgan yeolmaega yeollyeosseo
Jogeum natseoreotdeon majeunpyeon
Ije naega jeil akkineun got
Naogi sileun ibujari...',
            'music_downloads' => '17',
            'music_bitrate' => '96',
            'music_length' => '221',
            'music_thumbs_time' => '110',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
    ),
    5 => array(
        0 => array('music_id' => '1950470',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'nguoi-hay-quen-anh-di~bang-kieu-anh-khang',
            'music_title' => 'Người Hãy Quên Anh Đi',
            'music_artist' => 'Bằng Kiều; Anh Khang',
            'music_shortlyric' => '1. Người yêu hỡi dù gì cũng xa nhau rồi
Ngày nào chiếc hôn bao đêm rã rời giờ đã hết rồi
Chẳng còn hơi ấm trên đầu môi
Người yêu hỡi giờ đây tiếng yêu phai phôi
Chỉ còn những đêm cô đơn rối bời giọ...',
            'music_downloads' => '1206',
            'music_bitrate' => '96',
            'music_length' => '267',
            'music_thumbs_time' => '133',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '15'),
        1 => array('music_id' => '1942952',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'my-nhan-vao-bep~truong-quynh-anh-tran-uyen-phuong',
            'music_title' => 'Mỹ Nhân Vào Bếp',
            'music_artist' => 'Trương Quỳnh Anh; Trần Uyên Phương',
            'music_shortlyric' => 'Babe
Thế giới của em vốn rất nhiều đàn ông
Nhưng chưa từng suy nghĩ về chuyện lấy chồng
Ôi cuộc đời màu hồng.

Babe
Như bao ngày em vẫn thức dậy thật trễ
Kéo cô bạn vào bếp vô cùng đam mê
Chỉ nấu...',
            'music_downloads' => '3635',
            'music_bitrate' => '320',
            'music_length' => '355',
            'music_thumbs_time' => '79',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        2 => array('music_id' => '1948161',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'em-muon-anh-dua-em-ve~ho-ngoc-ha',
            'music_title' => 'Em Muốn Anh Đưa Em Về',
            'music_artist' => 'Hồ Ngọc Hà',
            'music_shortlyric' => '1. Trời đang tối cơn mưa phùn
Hôm nay ta hẹn nhau lần đầu tiên
Nhìn ánh mắt anh ngại ngùng
Nhẹ nhàng đặt nụ hồng lên môi em.

Nghe trong em từng khao khát như muốn đoạ
Cay đắng như đã dừng lại...
V...',
            'music_downloads' => '1361',
            'music_bitrate' => '96',
            'music_length' => '256',
            'music_thumbs_time' => '154',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        3 => array('music_id' => '1948832',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'phan-gai-thuyen-quyen~dan-nguyen-hoang-nhung',
            'music_title' => 'Phận Gái Thuyền Quyên',
            'music_artist' => 'Đan Nguyên; Hoàng Nhung',
            'music_shortlyric' => 'Từ nay thôi đành duyên mình lỡ đôi
Dù vương vấn mãi cũng thế mà thôi
Khi xưa thầm nói yêu nhau
Bao nhiêu mộng thắm ban đầu
Thôi xin đừng tiếc nhớ thương chi.

Từ nay đôi mình thôi đừng nhớ mong
Mườ...',
            'music_downloads' => '631',
            'music_bitrate' => '320',
            'music_length' => '318',
            'music_thumbs_time' => '159',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '9'),
        4 => array('music_id' => '1937279',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'darkside~alan-walker-aura-tomine-harket',
            'music_title' => 'Darkside',
            'music_artist' => 'Alan Walker; Au/Ra; Tomine Harket',
            'music_shortlyric' => '[Verse 1: Tomine Harket]
We\'re not in love
[t1]Chúng ta không hề yêu nhau
We share no stories
[t1]Và câu chuyện của mỗi người cũng khác biệt
Just something in your eyes
[t1]Nhưng có điều gì đó tron...',
            'music_downloads' => '1217',
            'music_bitrate' => '128',
            'music_length' => '224',
            'music_thumbs_time' => '112',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        5 => array('music_id' => '1942951',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-lai-tinh-xua~huong-lan-che-linh',
            'music_title' => 'Nối Lại Tình Xưa',
            'music_artist' => 'Hương Lan; Chế Linh',
            'music_shortlyric' => 'Về đây bên nhau, ta nối lại tình xưa
Chuyện tình mà bao năm qua, em gói ghém từng kỷ niệm
Phai nắng con đường xưa, những chiều hẹn hò mưa đổ
Mưa ướt lạnh vai anh, em thấy lòng mình xót xa.

Mùa thu...',
            'music_downloads' => '233',
            'music_bitrate' => '320',
            'music_length' => '348',
            'music_thumbs_time' => '174',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        6 => array('music_id' => '1951756',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'yeu-tieng-hat-ngay-xua~tam-doan-ha-vy',
            'music_title' => 'Yêu Tiếng Hát Ngày Xưa',
            'music_artist' => 'Tâm Đoan; Hạ Vy',
            'music_shortlyric' => 'Đôi mắt em buồn buồn
Gợi giấc mơ hồi tưởng
Một thời bên nhau dễ thương.

Rồi biết đâu mà tìm
Bên trời chiều loang tím
Cho kỷ niệm đau trái tim.

Hương ái ân tàn rồi
Lòng bỗng dưng bồi hồi
Còn...',
            'music_downloads' => '59',
            'music_bitrate' => '320',
            'music_length' => '266',
            'music_thumbs_time' => '53',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        7 => array('music_id' => '1938080',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'trang-tan-tren-he-pho~y-linh',
            'music_title' => 'Trăng Tàn Trên Hè Phố',
            'music_artist' => 'Ý Linh',
            'music_shortlyric' => '1. Tôi lại gặp anh
Người trai nơi chiến tuyến
Súng trên vai bước lê qua đường phố
Tôi lại gặp anh
Giờ đây nơi quán nhỏ
Tuổi 30 mà ngỡ như trẻ thơ.

Nhớ gì từ ngày anh xa mái trường
Nhớ gì từ ngà...',
            'music_downloads' => '301',
            'music_bitrate' => '96',
            'music_length' => '343',
            'music_thumbs_time' => '171',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        8 => array('music_id' => '1951941',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'giot-mua-thu~lam-anh-nguyet-anh',
            'music_title' => 'Giọt Mưa Thu',
            'music_artist' => 'Lam Anh; Nguyệt Ánh',
            'music_shortlyric' => 'Ngoài hiên giọt mưa thu thánh thót rơi
Trời lắng u buồn mây hắt hiu ngừng trôi
Nghe gió thoảng mơ hồ trong mưa thu
Ai khóc ai than hờ!

Vài con chim non chiêm chiếp kêu trên cành
Như nhủ trời...',
            'music_downloads' => '29',
            'music_bitrate' => '320',
            'music_length' => '393',
            'music_thumbs_time' => '32',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        9 => array('music_id' => '1943854',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'solo-feat-demi-lovato-japan-edition~clean-bandit',
            'music_title' => 'Solo feat. Demi Lovato [Japan Edition]',
            'music_artist' => 'Clean Bandit',
            'music_shortlyric' => '[Intro]
It solo, solo, everybody
[t1]Đây là cơ chế tự thoát nước, thưa quý vị
It solo, everybody
[t1]Tự giải toả
It solo, solo, everybody
[t1]Tự khiến mình cảm thấy hạnh phúc
Woop woop woop woop wo...',
            'music_downloads' => '189',
            'music_bitrate' => '96',
            'music_length' => '224',
            'music_thumbs_time' => '113',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        10 => array('music_id' => '1952325',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'thuo-ban-dau~trieu-khac-vinh-cat-lynh',
            'music_title' => 'Thuở Ban Đầu',
            'music_artist' => 'Triệu Khắc Vinh - Cát Lynh',
            'music_shortlyric' => 'Sao không thấy em lại
Để cùng anh thẩn thơ
Trước sân trăng vời vợi
Để rồi cùng ước mơ.

Sao không thấy em lại
Hàng dừa nghiêng thương nhớ
Và khúc ân tình biết trao về đâu?

Ôi, đẹp sao là thuở ban...',
            'music_downloads' => '21',
            'music_bitrate' => '128',
            'music_length' => '215',
            'music_thumbs_time' => '107',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        11 => array('music_id' => '1936497',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'lien-khuc-so-ngheo-ngheo-hai-dua-ngheo~tuan-vu-duy-truong-khanh-lam',
            'music_title' => 'Liên Khúc: Số Nghèo; Nghèo; Hai Đứa Nghèo',
            'music_artist' => 'Tuấn Vũ; Duy Trường; Khánh Lâm',
            'music_shortlyric' => '[Số Nghèo]

Tôi đã trót sinh ra trúng vào một con số
Con số xấu vô duyên khiến nhiều năm trắng tay
Học hành thì không khá chữ trả lại cho thầy
Văn chương vốn không hay sách đèn chưa ráo mực.

Nên v...',
            'music_downloads' => '53',
            'music_bitrate' => '320',
            'music_length' => '349',
            'music_thumbs_time' => '39',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        12 => array('music_id' => '1942553',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-buon-gac-tro~mai-thien-van',
            'music_title' => 'Nỗi Buồn Gác Trọ',
            'music_artist' => 'Mai Thiên Vân',
            'music_shortlyric' => 'Gác lạnh về khuya cơn gió lùa
Trăng gầy nghiêng bóng cài song thưa
Nhớ ai mà ánh đèn hiu hắt
Lá vàng nhè nhẹ đưa
Tưởng như bước lê hè phố.

Có người con gái buông tóc thề
Thu về e ấp chuyện vu qu...',
            'music_downloads' => '50',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '116',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        13 => array('music_id' => '1944687',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'la-thu-tran-the~giang-tu-ngoc-minh-dan-nguyen',
            'music_title' => 'Lá Thư Trần Thế',
            'music_artist' => 'Giang Tử; Ngọc Minh; Đan Nguyên',
            'music_shortlyric' => 'Lạy chúa con là lính trận ngoài biên
Vì xa thành phố xa quá nên quên
Đêm nay ngôi hai trời xuống
Ánh sao lung linh muôn màu
Con tưởng hoả châu soi tuyến đầu.

Lạy chúa con là thiếu phụ miền quê
Chồ...',
            'music_downloads' => '85',
            'music_bitrate' => '64',
            'music_length' => '328',
            'music_thumbs_time' => '164',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        14 => array('music_id' => '1948831',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'thunderclouds~lsd',
            'music_title' => 'Thunderclouds',
            'music_artist' => 'LSD',
            'music_shortlyric' => '[Verse 1: Sia]
All I need is one
[t1]Tất cả những gì em cần chỉ là một
One old man is enough
[t1]Một người đàn ông trưởng thành thôi là đủ
Babe, you gotta
[t1]Anh ơi, anh chì cần
Just turn your fea...',
            'music_downloads' => '399',
            'music_bitrate' => '96',
            'music_length' => '195',
            'music_thumbs_time' => '97',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        15 => array('music_id' => '1951494',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-voi-nguoi-tinh~truc-lam-truc-linh',
            'music_title' => 'Nói Với Người Tình',
            'music_artist' => 'Trúc Lam; Trúc Linh',
            'music_shortlyric' => 'Này người tình ơi! Này người tình ơi!

&quot;Mưa bên thềm từng hạt mưa rơi nhanh
Nghe trong tim mình rộn ràng
Ngân vang khúc nhạc tìm câu ca
Trong tình yêu, đến với anh thật thà.&quot; [x2]

Mây...',
            'music_downloads' => '41',
            'music_bitrate' => '320',
            'music_length' => '282',
            'music_thumbs_time' => '141',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        16 => array('music_id' => '1952292',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'how-deep-is-your-love~bee-gees',
            'music_title' => 'How Deep Is Your Love',
            'music_artist' => 'Bee Gees',
            'music_shortlyric' => '[Verse 1]
I know your eyes in the morning sun
I feel you touch me in the pouring rain
And the moment that you wander far from me
I wanna feel you in my arms again

[Pre-Chorus]
And you come to me o...',
            'music_downloads' => '14',
            'music_bitrate' => '320',
            'music_length' => '225',
            'music_thumbs_time' => '112',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        17 => array('music_id' => '1937727',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'killing-me~ikon',
            'music_title' => 'Killing Me',
            'music_artist' => 'iKON',
            'music_shortlyric' => 'Jukgetda tto eogimeopsi
Neoui heunjeogi
Nama nal goeropinda
Jukgetda nam daehadeusi
Doraseonneunde
Wae naneun oeroulkka
Choyeonhal jul arasseo heeojime daehae
Geunde neol daleun seupgwan hana
Beori...',
            'music_downloads' => '885',
            'music_bitrate' => '192',
            'music_length' => '201',
            'music_thumbs_time' => '100',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        18 => array('music_id' => '1939625',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'forever~kiss',
            'music_title' => 'Forever',
            'music_artist' => 'Kiss',
            'music_shortlyric' => '1. I gotta tell you what I\'m feelin\' inside, I could lie to myself, but it\'s true
There\'s no denying when I look in your eyes, girl I\'m out of my head over you
I lived so long believin\' all love is...',
            'music_downloads' => '12',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '114',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        19 => array('music_id' => '1936296',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'soulmate~zico-iu',
            'music_title' => 'SoulMate',
            'music_artist' => 'Zico; IU',
            'music_shortlyric' => 'Jeoleumui hanbokpaneseo
Du namnyeoga saneun jageun seom
Ne gibuni yeogi nalssigo
Saeppalgan yeolmaega yeollyeosseo
Jogeum natseoreotdeon majeunpyeon
Ije naega jeil akkineun got
Naogi sileun ibujari...',
            'music_downloads' => '17',
            'music_bitrate' => '96',
            'music_length' => '221',
            'music_thumbs_time' => '110',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
    ),
    6 => array(
        0 => array('music_id' => '1950470',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'nguoi-hay-quen-anh-di~bang-kieu-anh-khang',
            'music_title' => 'Người Hãy Quên Anh Đi',
            'music_artist' => 'Bằng Kiều; Anh Khang',
            'music_shortlyric' => '1. Người yêu hỡi dù gì cũng xa nhau rồi
Ngày nào chiếc hôn bao đêm rã rời giờ đã hết rồi
Chẳng còn hơi ấm trên đầu môi
Người yêu hỡi giờ đây tiếng yêu phai phôi
Chỉ còn những đêm cô đơn rối bời giọ...',
            'music_downloads' => '1206',
            'music_bitrate' => '96',
            'music_length' => '267',
            'music_thumbs_time' => '133',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '15'),
        1 => array('music_id' => '1942952',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'my-nhan-vao-bep~truong-quynh-anh-tran-uyen-phuong',
            'music_title' => 'Mỹ Nhân Vào Bếp',
            'music_artist' => 'Trương Quỳnh Anh; Trần Uyên Phương',
            'music_shortlyric' => 'Babe
Thế giới của em vốn rất nhiều đàn ông
Nhưng chưa từng suy nghĩ về chuyện lấy chồng
Ôi cuộc đời màu hồng.

Babe
Như bao ngày em vẫn thức dậy thật trễ
Kéo cô bạn vào bếp vô cùng đam mê
Chỉ nấu...',
            'music_downloads' => '3635',
            'music_bitrate' => '320',
            'music_length' => '355',
            'music_thumbs_time' => '79',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        2 => array('music_id' => '1948161',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'em-muon-anh-dua-em-ve~ho-ngoc-ha',
            'music_title' => 'Em Muốn Anh Đưa Em Về',
            'music_artist' => 'Hồ Ngọc Hà',
            'music_shortlyric' => '1. Trời đang tối cơn mưa phùn
Hôm nay ta hẹn nhau lần đầu tiên
Nhìn ánh mắt anh ngại ngùng
Nhẹ nhàng đặt nụ hồng lên môi em.

Nghe trong em từng khao khát như muốn đoạ
Cay đắng như đã dừng lại...
V...',
            'music_downloads' => '1361',
            'music_bitrate' => '96',
            'music_length' => '256',
            'music_thumbs_time' => '154',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        3 => array('music_id' => '1948832',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'phan-gai-thuyen-quyen~dan-nguyen-hoang-nhung',
            'music_title' => 'Phận Gái Thuyền Quyên',
            'music_artist' => 'Đan Nguyên; Hoàng Nhung',
            'music_shortlyric' => 'Từ nay thôi đành duyên mình lỡ đôi
Dù vương vấn mãi cũng thế mà thôi
Khi xưa thầm nói yêu nhau
Bao nhiêu mộng thắm ban đầu
Thôi xin đừng tiếc nhớ thương chi.

Từ nay đôi mình thôi đừng nhớ mong
Mườ...',
            'music_downloads' => '631',
            'music_bitrate' => '320',
            'music_length' => '318',
            'music_thumbs_time' => '159',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '9'),
        4 => array('music_id' => '1937279',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'darkside~alan-walker-aura-tomine-harket',
            'music_title' => 'Darkside',
            'music_artist' => 'Alan Walker; Au/Ra; Tomine Harket',
            'music_shortlyric' => '[Verse 1: Tomine Harket]
We\'re not in love
[t1]Chúng ta không hề yêu nhau
We share no stories
[t1]Và câu chuyện của mỗi người cũng khác biệt
Just something in your eyes
[t1]Nhưng có điều gì đó tron...',
            'music_downloads' => '1217',
            'music_bitrate' => '128',
            'music_length' => '224',
            'music_thumbs_time' => '112',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        5 => array('music_id' => '1942951',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-lai-tinh-xua~huong-lan-che-linh',
            'music_title' => 'Nối Lại Tình Xưa',
            'music_artist' => 'Hương Lan; Chế Linh',
            'music_shortlyric' => 'Về đây bên nhau, ta nối lại tình xưa
Chuyện tình mà bao năm qua, em gói ghém từng kỷ niệm
Phai nắng con đường xưa, những chiều hẹn hò mưa đổ
Mưa ướt lạnh vai anh, em thấy lòng mình xót xa.

Mùa thu...',
            'music_downloads' => '233',
            'music_bitrate' => '320',
            'music_length' => '348',
            'music_thumbs_time' => '174',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        6 => array('music_id' => '1951756',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'yeu-tieng-hat-ngay-xua~tam-doan-ha-vy',
            'music_title' => 'Yêu Tiếng Hát Ngày Xưa',
            'music_artist' => 'Tâm Đoan; Hạ Vy',
            'music_shortlyric' => 'Đôi mắt em buồn buồn
Gợi giấc mơ hồi tưởng
Một thời bên nhau dễ thương.

Rồi biết đâu mà tìm
Bên trời chiều loang tím
Cho kỷ niệm đau trái tim.

Hương ái ân tàn rồi
Lòng bỗng dưng bồi hồi
Còn...',
            'music_downloads' => '59',
            'music_bitrate' => '320',
            'music_length' => '266',
            'music_thumbs_time' => '53',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        7 => array('music_id' => '1938080',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'trang-tan-tren-he-pho~y-linh',
            'music_title' => 'Trăng Tàn Trên Hè Phố',
            'music_artist' => 'Ý Linh',
            'music_shortlyric' => '1. Tôi lại gặp anh
Người trai nơi chiến tuyến
Súng trên vai bước lê qua đường phố
Tôi lại gặp anh
Giờ đây nơi quán nhỏ
Tuổi 30 mà ngỡ như trẻ thơ.

Nhớ gì từ ngày anh xa mái trường
Nhớ gì từ ngà...',
            'music_downloads' => '301',
            'music_bitrate' => '96',
            'music_length' => '343',
            'music_thumbs_time' => '171',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        8 => array('music_id' => '1951941',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'giot-mua-thu~lam-anh-nguyet-anh',
            'music_title' => 'Giọt Mưa Thu',
            'music_artist' => 'Lam Anh; Nguyệt Ánh',
            'music_shortlyric' => 'Ngoài hiên giọt mưa thu thánh thót rơi
Trời lắng u buồn mây hắt hiu ngừng trôi
Nghe gió thoảng mơ hồ trong mưa thu
Ai khóc ai than hờ!

Vài con chim non chiêm chiếp kêu trên cành
Như nhủ trời...',
            'music_downloads' => '29',
            'music_bitrate' => '320',
            'music_length' => '393',
            'music_thumbs_time' => '32',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        9 => array('music_id' => '1943854',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'solo-feat-demi-lovato-japan-edition~clean-bandit',
            'music_title' => 'Solo feat. Demi Lovato [Japan Edition]',
            'music_artist' => 'Clean Bandit',
            'music_shortlyric' => '[Intro]
It solo, solo, everybody
[t1]Đây là cơ chế tự thoát nước, thưa quý vị
It solo, everybody
[t1]Tự giải toả
It solo, solo, everybody
[t1]Tự khiến mình cảm thấy hạnh phúc
Woop woop woop woop wo...',
            'music_downloads' => '189',
            'music_bitrate' => '96',
            'music_length' => '224',
            'music_thumbs_time' => '113',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        10 => array('music_id' => '1952325',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'thuo-ban-dau~trieu-khac-vinh-cat-lynh',
            'music_title' => 'Thuở Ban Đầu',
            'music_artist' => 'Triệu Khắc Vinh - Cát Lynh',
            'music_shortlyric' => 'Sao không thấy em lại
Để cùng anh thẩn thơ
Trước sân trăng vời vợi
Để rồi cùng ước mơ.

Sao không thấy em lại
Hàng dừa nghiêng thương nhớ
Và khúc ân tình biết trao về đâu?

Ôi, đẹp sao là thuở ban...',
            'music_downloads' => '21',
            'music_bitrate' => '128',
            'music_length' => '215',
            'music_thumbs_time' => '107',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        11 => array('music_id' => '1936497',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'lien-khuc-so-ngheo-ngheo-hai-dua-ngheo~tuan-vu-duy-truong-khanh-lam',
            'music_title' => 'Liên Khúc: Số Nghèo; Nghèo; Hai Đứa Nghèo',
            'music_artist' => 'Tuấn Vũ; Duy Trường; Khánh Lâm',
            'music_shortlyric' => '[Số Nghèo]

Tôi đã trót sinh ra trúng vào một con số
Con số xấu vô duyên khiến nhiều năm trắng tay
Học hành thì không khá chữ trả lại cho thầy
Văn chương vốn không hay sách đèn chưa ráo mực.

Nên v...',
            'music_downloads' => '53',
            'music_bitrate' => '320',
            'music_length' => '349',
            'music_thumbs_time' => '39',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        12 => array('music_id' => '1942553',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-buon-gac-tro~mai-thien-van',
            'music_title' => 'Nỗi Buồn Gác Trọ',
            'music_artist' => 'Mai Thiên Vân',
            'music_shortlyric' => 'Gác lạnh về khuya cơn gió lùa
Trăng gầy nghiêng bóng cài song thưa
Nhớ ai mà ánh đèn hiu hắt
Lá vàng nhè nhẹ đưa
Tưởng như bước lê hè phố.

Có người con gái buông tóc thề
Thu về e ấp chuyện vu qu...',
            'music_downloads' => '50',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '116',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        13 => array('music_id' => '1944687',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'la-thu-tran-the~giang-tu-ngoc-minh-dan-nguyen',
            'music_title' => 'Lá Thư Trần Thế',
            'music_artist' => 'Giang Tử; Ngọc Minh; Đan Nguyên',
            'music_shortlyric' => 'Lạy chúa con là lính trận ngoài biên
Vì xa thành phố xa quá nên quên
Đêm nay ngôi hai trời xuống
Ánh sao lung linh muôn màu
Con tưởng hoả châu soi tuyến đầu.

Lạy chúa con là thiếu phụ miền quê
Chồ...',
            'music_downloads' => '85',
            'music_bitrate' => '64',
            'music_length' => '328',
            'music_thumbs_time' => '164',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        14 => array('music_id' => '1948831',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'thunderclouds~lsd',
            'music_title' => 'Thunderclouds',
            'music_artist' => 'LSD',
            'music_shortlyric' => '[Verse 1: Sia]
All I need is one
[t1]Tất cả những gì em cần chỉ là một
One old man is enough
[t1]Một người đàn ông trưởng thành thôi là đủ
Babe, you gotta
[t1]Anh ơi, anh chì cần
Just turn your fea...',
            'music_downloads' => '399',
            'music_bitrate' => '96',
            'music_length' => '195',
            'music_thumbs_time' => '97',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        15 => array('music_id' => '1951494',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-voi-nguoi-tinh~truc-lam-truc-linh',
            'music_title' => 'Nói Với Người Tình',
            'music_artist' => 'Trúc Lam; Trúc Linh',
            'music_shortlyric' => 'Này người tình ơi! Này người tình ơi!

&quot;Mưa bên thềm từng hạt mưa rơi nhanh
Nghe trong tim mình rộn ràng
Ngân vang khúc nhạc tìm câu ca
Trong tình yêu, đến với anh thật thà.&quot; [x2]

Mây...',
            'music_downloads' => '41',
            'music_bitrate' => '320',
            'music_length' => '282',
            'music_thumbs_time' => '141',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        16 => array('music_id' => '1952292',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'how-deep-is-your-love~bee-gees',
            'music_title' => 'How Deep Is Your Love',
            'music_artist' => 'Bee Gees',
            'music_shortlyric' => '[Verse 1]
I know your eyes in the morning sun
I feel you touch me in the pouring rain
And the moment that you wander far from me
I wanna feel you in my arms again

[Pre-Chorus]
And you come to me o...',
            'music_downloads' => '14',
            'music_bitrate' => '320',
            'music_length' => '225',
            'music_thumbs_time' => '112',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        17 => array('music_id' => '1937727',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'killing-me~ikon',
            'music_title' => 'Killing Me',
            'music_artist' => 'iKON',
            'music_shortlyric' => 'Jukgetda tto eogimeopsi
Neoui heunjeogi
Nama nal goeropinda
Jukgetda nam daehadeusi
Doraseonneunde
Wae naneun oeroulkka
Choyeonhal jul arasseo heeojime daehae
Geunde neol daleun seupgwan hana
Beori...',
            'music_downloads' => '885',
            'music_bitrate' => '192',
            'music_length' => '201',
            'music_thumbs_time' => '100',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        18 => array('music_id' => '1939625',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'forever~kiss',
            'music_title' => 'Forever',
            'music_artist' => 'Kiss',
            'music_shortlyric' => '1. I gotta tell you what I\'m feelin\' inside, I could lie to myself, but it\'s true
There\'s no denying when I look in your eyes, girl I\'m out of my head over you
I lived so long believin\' all love is...',
            'music_downloads' => '12',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '114',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        19 => array('music_id' => '1936296',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'soulmate~zico-iu',
            'music_title' => 'SoulMate',
            'music_artist' => 'Zico; IU',
            'music_shortlyric' => 'Jeoleumui hanbokpaneseo
Du namnyeoga saneun jageun seom
Ne gibuni yeogi nalssigo
Saeppalgan yeolmaega yeollyeosseo
Jogeum natseoreotdeon majeunpyeon
Ije naega jeil akkineun got
Naogi sileun ibujari...',
            'music_downloads' => '17',
            'music_bitrate' => '96',
            'music_length' => '221',
            'music_thumbs_time' => '110',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
    ),
    7 => array(
        0 => array('music_id' => '1950470',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'nguoi-hay-quen-anh-di~bang-kieu-anh-khang',
            'music_title' => 'Người Hãy Quên Anh Đi',
            'music_artist' => 'Bằng Kiều; Anh Khang',
            'music_shortlyric' => '1. Người yêu hỡi dù gì cũng xa nhau rồi
Ngày nào chiếc hôn bao đêm rã rời giờ đã hết rồi
Chẳng còn hơi ấm trên đầu môi
Người yêu hỡi giờ đây tiếng yêu phai phôi
Chỉ còn những đêm cô đơn rối bời giọ...',
            'music_downloads' => '1206',
            'music_bitrate' => '96',
            'music_length' => '267',
            'music_thumbs_time' => '133',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '15'),
        1 => array('music_id' => '1942952',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'my-nhan-vao-bep~truong-quynh-anh-tran-uyen-phuong',
            'music_title' => 'Mỹ Nhân Vào Bếp',
            'music_artist' => 'Trương Quỳnh Anh; Trần Uyên Phương',
            'music_shortlyric' => 'Babe
Thế giới của em vốn rất nhiều đàn ông
Nhưng chưa từng suy nghĩ về chuyện lấy chồng
Ôi cuộc đời màu hồng.

Babe
Như bao ngày em vẫn thức dậy thật trễ
Kéo cô bạn vào bếp vô cùng đam mê
Chỉ nấu...',
            'music_downloads' => '3635',
            'music_bitrate' => '320',
            'music_length' => '355',
            'music_thumbs_time' => '79',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        2 => array('music_id' => '1948161',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'em-muon-anh-dua-em-ve~ho-ngoc-ha',
            'music_title' => 'Em Muốn Anh Đưa Em Về',
            'music_artist' => 'Hồ Ngọc Hà',
            'music_shortlyric' => '1. Trời đang tối cơn mưa phùn
Hôm nay ta hẹn nhau lần đầu tiên
Nhìn ánh mắt anh ngại ngùng
Nhẹ nhàng đặt nụ hồng lên môi em.

Nghe trong em từng khao khát như muốn đoạ
Cay đắng như đã dừng lại...
V...',
            'music_downloads' => '1361',
            'music_bitrate' => '96',
            'music_length' => '256',
            'music_thumbs_time' => '154',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        3 => array('music_id' => '1948832',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'phan-gai-thuyen-quyen~dan-nguyen-hoang-nhung',
            'music_title' => 'Phận Gái Thuyền Quyên',
            'music_artist' => 'Đan Nguyên; Hoàng Nhung',
            'music_shortlyric' => 'Từ nay thôi đành duyên mình lỡ đôi
Dù vương vấn mãi cũng thế mà thôi
Khi xưa thầm nói yêu nhau
Bao nhiêu mộng thắm ban đầu
Thôi xin đừng tiếc nhớ thương chi.

Từ nay đôi mình thôi đừng nhớ mong
Mườ...',
            'music_downloads' => '631',
            'music_bitrate' => '320',
            'music_length' => '318',
            'music_thumbs_time' => '159',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '9'),
        4 => array('music_id' => '1937279',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'darkside~alan-walker-aura-tomine-harket',
            'music_title' => 'Darkside',
            'music_artist' => 'Alan Walker; Au/Ra; Tomine Harket',
            'music_shortlyric' => '[Verse 1: Tomine Harket]
We\'re not in love
[t1]Chúng ta không hề yêu nhau
We share no stories
[t1]Và câu chuyện của mỗi người cũng khác biệt
Just something in your eyes
[t1]Nhưng có điều gì đó tron...',
            'music_downloads' => '1217',
            'music_bitrate' => '128',
            'music_length' => '224',
            'music_thumbs_time' => '112',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        5 => array('music_id' => '1942951',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-lai-tinh-xua~huong-lan-che-linh',
            'music_title' => 'Nối Lại Tình Xưa',
            'music_artist' => 'Hương Lan; Chế Linh',
            'music_shortlyric' => 'Về đây bên nhau, ta nối lại tình xưa
Chuyện tình mà bao năm qua, em gói ghém từng kỷ niệm
Phai nắng con đường xưa, những chiều hẹn hò mưa đổ
Mưa ướt lạnh vai anh, em thấy lòng mình xót xa.

Mùa thu...',
            'music_downloads' => '233',
            'music_bitrate' => '320',
            'music_length' => '348',
            'music_thumbs_time' => '174',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        6 => array('music_id' => '1951756',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'yeu-tieng-hat-ngay-xua~tam-doan-ha-vy',
            'music_title' => 'Yêu Tiếng Hát Ngày Xưa',
            'music_artist' => 'Tâm Đoan; Hạ Vy',
            'music_shortlyric' => 'Đôi mắt em buồn buồn
Gợi giấc mơ hồi tưởng
Một thời bên nhau dễ thương.

Rồi biết đâu mà tìm
Bên trời chiều loang tím
Cho kỷ niệm đau trái tim.

Hương ái ân tàn rồi
Lòng bỗng dưng bồi hồi
Còn...',
            'music_downloads' => '59',
            'music_bitrate' => '320',
            'music_length' => '266',
            'music_thumbs_time' => '53',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        7 => array('music_id' => '1938080',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'trang-tan-tren-he-pho~y-linh',
            'music_title' => 'Trăng Tàn Trên Hè Phố',
            'music_artist' => 'Ý Linh',
            'music_shortlyric' => '1. Tôi lại gặp anh
Người trai nơi chiến tuyến
Súng trên vai bước lê qua đường phố
Tôi lại gặp anh
Giờ đây nơi quán nhỏ
Tuổi 30 mà ngỡ như trẻ thơ.

Nhớ gì từ ngày anh xa mái trường
Nhớ gì từ ngà...',
            'music_downloads' => '301',
            'music_bitrate' => '96',
            'music_length' => '343',
            'music_thumbs_time' => '171',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        8 => array('music_id' => '1951941',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'giot-mua-thu~lam-anh-nguyet-anh',
            'music_title' => 'Giọt Mưa Thu',
            'music_artist' => 'Lam Anh; Nguyệt Ánh',
            'music_shortlyric' => 'Ngoài hiên giọt mưa thu thánh thót rơi
Trời lắng u buồn mây hắt hiu ngừng trôi
Nghe gió thoảng mơ hồ trong mưa thu
Ai khóc ai than hờ!

Vài con chim non chiêm chiếp kêu trên cành
Như nhủ trời...',
            'music_downloads' => '29',
            'music_bitrate' => '320',
            'music_length' => '393',
            'music_thumbs_time' => '32',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        9 => array('music_id' => '1943854',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'solo-feat-demi-lovato-japan-edition~clean-bandit',
            'music_title' => 'Solo feat. Demi Lovato [Japan Edition]',
            'music_artist' => 'Clean Bandit',
            'music_shortlyric' => '[Intro]
It solo, solo, everybody
[t1]Đây là cơ chế tự thoát nước, thưa quý vị
It solo, everybody
[t1]Tự giải toả
It solo, solo, everybody
[t1]Tự khiến mình cảm thấy hạnh phúc
Woop woop woop woop wo...',
            'music_downloads' => '189',
            'music_bitrate' => '96',
            'music_length' => '224',
            'music_thumbs_time' => '113',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        10 => array('music_id' => '1952325',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'thuo-ban-dau~trieu-khac-vinh-cat-lynh',
            'music_title' => 'Thuở Ban Đầu',
            'music_artist' => 'Triệu Khắc Vinh - Cát Lynh',
            'music_shortlyric' => 'Sao không thấy em lại
Để cùng anh thẩn thơ
Trước sân trăng vời vợi
Để rồi cùng ước mơ.

Sao không thấy em lại
Hàng dừa nghiêng thương nhớ
Và khúc ân tình biết trao về đâu?

Ôi, đẹp sao là thuở ban...',
            'music_downloads' => '21',
            'music_bitrate' => '128',
            'music_length' => '215',
            'music_thumbs_time' => '107',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        11 => array('music_id' => '1936497',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'lien-khuc-so-ngheo-ngheo-hai-dua-ngheo~tuan-vu-duy-truong-khanh-lam',
            'music_title' => 'Liên Khúc: Số Nghèo; Nghèo; Hai Đứa Nghèo',
            'music_artist' => 'Tuấn Vũ; Duy Trường; Khánh Lâm',
            'music_shortlyric' => '[Số Nghèo]

Tôi đã trót sinh ra trúng vào một con số
Con số xấu vô duyên khiến nhiều năm trắng tay
Học hành thì không khá chữ trả lại cho thầy
Văn chương vốn không hay sách đèn chưa ráo mực.

Nên v...',
            'music_downloads' => '53',
            'music_bitrate' => '320',
            'music_length' => '349',
            'music_thumbs_time' => '39',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        12 => array('music_id' => '1942553',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-buon-gac-tro~mai-thien-van',
            'music_title' => 'Nỗi Buồn Gác Trọ',
            'music_artist' => 'Mai Thiên Vân',
            'music_shortlyric' => 'Gác lạnh về khuya cơn gió lùa
Trăng gầy nghiêng bóng cài song thưa
Nhớ ai mà ánh đèn hiu hắt
Lá vàng nhè nhẹ đưa
Tưởng như bước lê hè phố.

Có người con gái buông tóc thề
Thu về e ấp chuyện vu qu...',
            'music_downloads' => '50',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '116',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        13 => array('music_id' => '1944687',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'la-thu-tran-the~giang-tu-ngoc-minh-dan-nguyen',
            'music_title' => 'Lá Thư Trần Thế',
            'music_artist' => 'Giang Tử; Ngọc Minh; Đan Nguyên',
            'music_shortlyric' => 'Lạy chúa con là lính trận ngoài biên
Vì xa thành phố xa quá nên quên
Đêm nay ngôi hai trời xuống
Ánh sao lung linh muôn màu
Con tưởng hoả châu soi tuyến đầu.

Lạy chúa con là thiếu phụ miền quê
Chồ...',
            'music_downloads' => '85',
            'music_bitrate' => '64',
            'music_length' => '328',
            'music_thumbs_time' => '164',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        14 => array('music_id' => '1948831',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'thunderclouds~lsd',
            'music_title' => 'Thunderclouds',
            'music_artist' => 'LSD',
            'music_shortlyric' => '[Verse 1: Sia]
All I need is one
[t1]Tất cả những gì em cần chỉ là một
One old man is enough
[t1]Một người đàn ông trưởng thành thôi là đủ
Babe, you gotta
[t1]Anh ơi, anh chì cần
Just turn your fea...',
            'music_downloads' => '399',
            'music_bitrate' => '96',
            'music_length' => '195',
            'music_thumbs_time' => '97',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        15 => array('music_id' => '1951494',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-voi-nguoi-tinh~truc-lam-truc-linh',
            'music_title' => 'Nói Với Người Tình',
            'music_artist' => 'Trúc Lam; Trúc Linh',
            'music_shortlyric' => 'Này người tình ơi! Này người tình ơi!

&quot;Mưa bên thềm từng hạt mưa rơi nhanh
Nghe trong tim mình rộn ràng
Ngân vang khúc nhạc tìm câu ca
Trong tình yêu, đến với anh thật thà.&quot; [x2]

Mây...',
            'music_downloads' => '41',
            'music_bitrate' => '320',
            'music_length' => '282',
            'music_thumbs_time' => '141',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        16 => array('music_id' => '1952292',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'how-deep-is-your-love~bee-gees',
            'music_title' => 'How Deep Is Your Love',
            'music_artist' => 'Bee Gees',
            'music_shortlyric' => '[Verse 1]
I know your eyes in the morning sun
I feel you touch me in the pouring rain
And the moment that you wander far from me
I wanna feel you in my arms again

[Pre-Chorus]
And you come to me o...',
            'music_downloads' => '14',
            'music_bitrate' => '320',
            'music_length' => '225',
            'music_thumbs_time' => '112',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        17 => array('music_id' => '1937727',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'killing-me~ikon',
            'music_title' => 'Killing Me',
            'music_artist' => 'iKON',
            'music_shortlyric' => 'Jukgetda tto eogimeopsi
Neoui heunjeogi
Nama nal goeropinda
Jukgetda nam daehadeusi
Doraseonneunde
Wae naneun oeroulkka
Choyeonhal jul arasseo heeojime daehae
Geunde neol daleun seupgwan hana
Beori...',
            'music_downloads' => '885',
            'music_bitrate' => '192',
            'music_length' => '201',
            'music_thumbs_time' => '100',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        18 => array('music_id' => '1939625',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'forever~kiss',
            'music_title' => 'Forever',
            'music_artist' => 'Kiss',
            'music_shortlyric' => '1. I gotta tell you what I\'m feelin\' inside, I could lie to myself, but it\'s true
There\'s no denying when I look in your eyes, girl I\'m out of my head over you
I lived so long believin\' all love is...',
            'music_downloads' => '12',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '114',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        19 => array('music_id' => '1936296',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'soulmate~zico-iu',
            'music_title' => 'SoulMate',
            'music_artist' => 'Zico; IU',
            'music_shortlyric' => 'Jeoleumui hanbokpaneseo
Du namnyeoga saneun jageun seom
Ne gibuni yeogi nalssigo
Saeppalgan yeolmaega yeollyeosseo
Jogeum natseoreotdeon majeunpyeon
Ije naega jeil akkineun got
Naogi sileun ibujari...',
            'music_downloads' => '17',
            'music_bitrate' => '96',
            'music_length' => '221',
            'music_thumbs_time' => '110',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
    ),
    8 => array(
        0 => array('music_id' => '1950470',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'nguoi-hay-quen-anh-di~bang-kieu-anh-khang',
            'music_title' => 'Người Hãy Quên Anh Đi',
            'music_artist' => 'Bằng Kiều; Anh Khang',
            'music_shortlyric' => '1. Người yêu hỡi dù gì cũng xa nhau rồi
Ngày nào chiếc hôn bao đêm rã rời giờ đã hết rồi
Chẳng còn hơi ấm trên đầu môi
Người yêu hỡi giờ đây tiếng yêu phai phôi
Chỉ còn những đêm cô đơn rối bời giọ...',
            'music_downloads' => '1206',
            'music_bitrate' => '96',
            'music_length' => '267',
            'music_thumbs_time' => '133',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '15'),
        1 => array('music_id' => '1942952',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'my-nhan-vao-bep~truong-quynh-anh-tran-uyen-phuong',
            'music_title' => 'Mỹ Nhân Vào Bếp',
            'music_artist' => 'Trương Quỳnh Anh; Trần Uyên Phương',
            'music_shortlyric' => 'Babe
Thế giới của em vốn rất nhiều đàn ông
Nhưng chưa từng suy nghĩ về chuyện lấy chồng
Ôi cuộc đời màu hồng.

Babe
Như bao ngày em vẫn thức dậy thật trễ
Kéo cô bạn vào bếp vô cùng đam mê
Chỉ nấu...',
            'music_downloads' => '3635',
            'music_bitrate' => '320',
            'music_length' => '355',
            'music_thumbs_time' => '79',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        2 => array('music_id' => '1948161',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'em-muon-anh-dua-em-ve~ho-ngoc-ha',
            'music_title' => 'Em Muốn Anh Đưa Em Về',
            'music_artist' => 'Hồ Ngọc Hà',
            'music_shortlyric' => '1. Trời đang tối cơn mưa phùn
Hôm nay ta hẹn nhau lần đầu tiên
Nhìn ánh mắt anh ngại ngùng
Nhẹ nhàng đặt nụ hồng lên môi em.

Nghe trong em từng khao khát như muốn đoạ
Cay đắng như đã dừng lại...
V...',
            'music_downloads' => '1361',
            'music_bitrate' => '96',
            'music_length' => '256',
            'music_thumbs_time' => '154',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        3 => array('music_id' => '1948832',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'phan-gai-thuyen-quyen~dan-nguyen-hoang-nhung',
            'music_title' => 'Phận Gái Thuyền Quyên',
            'music_artist' => 'Đan Nguyên; Hoàng Nhung',
            'music_shortlyric' => 'Từ nay thôi đành duyên mình lỡ đôi
Dù vương vấn mãi cũng thế mà thôi
Khi xưa thầm nói yêu nhau
Bao nhiêu mộng thắm ban đầu
Thôi xin đừng tiếc nhớ thương chi.

Từ nay đôi mình thôi đừng nhớ mong
Mườ...',
            'music_downloads' => '631',
            'music_bitrate' => '320',
            'music_length' => '318',
            'music_thumbs_time' => '159',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '9'),
        4 => array('music_id' => '1937279',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'darkside~alan-walker-aura-tomine-harket',
            'music_title' => 'Darkside',
            'music_artist' => 'Alan Walker; Au/Ra; Tomine Harket',
            'music_shortlyric' => '[Verse 1: Tomine Harket]
We\'re not in love
[t1]Chúng ta không hề yêu nhau
We share no stories
[t1]Và câu chuyện của mỗi người cũng khác biệt
Just something in your eyes
[t1]Nhưng có điều gì đó tron...',
            'music_downloads' => '1217',
            'music_bitrate' => '128',
            'music_length' => '224',
            'music_thumbs_time' => '112',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        5 => array('music_id' => '1942951',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-lai-tinh-xua~huong-lan-che-linh',
            'music_title' => 'Nối Lại Tình Xưa',
            'music_artist' => 'Hương Lan; Chế Linh',
            'music_shortlyric' => 'Về đây bên nhau, ta nối lại tình xưa
Chuyện tình mà bao năm qua, em gói ghém từng kỷ niệm
Phai nắng con đường xưa, những chiều hẹn hò mưa đổ
Mưa ướt lạnh vai anh, em thấy lòng mình xót xa.

Mùa thu...',
            'music_downloads' => '233',
            'music_bitrate' => '320',
            'music_length' => '348',
            'music_thumbs_time' => '174',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        6 => array('music_id' => '1951756',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'yeu-tieng-hat-ngay-xua~tam-doan-ha-vy',
            'music_title' => 'Yêu Tiếng Hát Ngày Xưa',
            'music_artist' => 'Tâm Đoan; Hạ Vy',
            'music_shortlyric' => 'Đôi mắt em buồn buồn
Gợi giấc mơ hồi tưởng
Một thời bên nhau dễ thương.

Rồi biết đâu mà tìm
Bên trời chiều loang tím
Cho kỷ niệm đau trái tim.

Hương ái ân tàn rồi
Lòng bỗng dưng bồi hồi
Còn...',
            'music_downloads' => '59',
            'music_bitrate' => '320',
            'music_length' => '266',
            'music_thumbs_time' => '53',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        7 => array('music_id' => '1938080',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'trang-tan-tren-he-pho~y-linh',
            'music_title' => 'Trăng Tàn Trên Hè Phố',
            'music_artist' => 'Ý Linh',
            'music_shortlyric' => '1. Tôi lại gặp anh
Người trai nơi chiến tuyến
Súng trên vai bước lê qua đường phố
Tôi lại gặp anh
Giờ đây nơi quán nhỏ
Tuổi 30 mà ngỡ như trẻ thơ.

Nhớ gì từ ngày anh xa mái trường
Nhớ gì từ ngà...',
            'music_downloads' => '301',
            'music_bitrate' => '96',
            'music_length' => '343',
            'music_thumbs_time' => '171',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        8 => array('music_id' => '1951941',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'giot-mua-thu~lam-anh-nguyet-anh',
            'music_title' => 'Giọt Mưa Thu',
            'music_artist' => 'Lam Anh; Nguyệt Ánh',
            'music_shortlyric' => 'Ngoài hiên giọt mưa thu thánh thót rơi
Trời lắng u buồn mây hắt hiu ngừng trôi
Nghe gió thoảng mơ hồ trong mưa thu
Ai khóc ai than hờ!

Vài con chim non chiêm chiếp kêu trên cành
Như nhủ trời...',
            'music_downloads' => '29',
            'music_bitrate' => '320',
            'music_length' => '393',
            'music_thumbs_time' => '32',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        9 => array('music_id' => '1943854',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'solo-feat-demi-lovato-japan-edition~clean-bandit',
            'music_title' => 'Solo feat. Demi Lovato [Japan Edition]',
            'music_artist' => 'Clean Bandit',
            'music_shortlyric' => '[Intro]
It solo, solo, everybody
[t1]Đây là cơ chế tự thoát nước, thưa quý vị
It solo, everybody
[t1]Tự giải toả
It solo, solo, everybody
[t1]Tự khiến mình cảm thấy hạnh phúc
Woop woop woop woop wo...',
            'music_downloads' => '189',
            'music_bitrate' => '96',
            'music_length' => '224',
            'music_thumbs_time' => '113',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        10 => array('music_id' => '1952325',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'thuo-ban-dau~trieu-khac-vinh-cat-lynh',
            'music_title' => 'Thuở Ban Đầu',
            'music_artist' => 'Triệu Khắc Vinh - Cát Lynh',
            'music_shortlyric' => 'Sao không thấy em lại
Để cùng anh thẩn thơ
Trước sân trăng vời vợi
Để rồi cùng ước mơ.

Sao không thấy em lại
Hàng dừa nghiêng thương nhớ
Và khúc ân tình biết trao về đâu?

Ôi, đẹp sao là thuở ban...',
            'music_downloads' => '21',
            'music_bitrate' => '128',
            'music_length' => '215',
            'music_thumbs_time' => '107',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        11 => array('music_id' => '1936497',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'lien-khuc-so-ngheo-ngheo-hai-dua-ngheo~tuan-vu-duy-truong-khanh-lam',
            'music_title' => 'Liên Khúc: Số Nghèo; Nghèo; Hai Đứa Nghèo',
            'music_artist' => 'Tuấn Vũ; Duy Trường; Khánh Lâm',
            'music_shortlyric' => '[Số Nghèo]

Tôi đã trót sinh ra trúng vào một con số
Con số xấu vô duyên khiến nhiều năm trắng tay
Học hành thì không khá chữ trả lại cho thầy
Văn chương vốn không hay sách đèn chưa ráo mực.

Nên v...',
            'music_downloads' => '53',
            'music_bitrate' => '320',
            'music_length' => '349',
            'music_thumbs_time' => '39',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        12 => array('music_id' => '1942553',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-buon-gac-tro~mai-thien-van',
            'music_title' => 'Nỗi Buồn Gác Trọ',
            'music_artist' => 'Mai Thiên Vân',
            'music_shortlyric' => 'Gác lạnh về khuya cơn gió lùa
Trăng gầy nghiêng bóng cài song thưa
Nhớ ai mà ánh đèn hiu hắt
Lá vàng nhè nhẹ đưa
Tưởng như bước lê hè phố.

Có người con gái buông tóc thề
Thu về e ấp chuyện vu qu...',
            'music_downloads' => '50',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '116',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        13 => array('music_id' => '1944687',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'la-thu-tran-the~giang-tu-ngoc-minh-dan-nguyen',
            'music_title' => 'Lá Thư Trần Thế',
            'music_artist' => 'Giang Tử; Ngọc Minh; Đan Nguyên',
            'music_shortlyric' => 'Lạy chúa con là lính trận ngoài biên
Vì xa thành phố xa quá nên quên
Đêm nay ngôi hai trời xuống
Ánh sao lung linh muôn màu
Con tưởng hoả châu soi tuyến đầu.

Lạy chúa con là thiếu phụ miền quê
Chồ...',
            'music_downloads' => '85',
            'music_bitrate' => '64',
            'music_length' => '328',
            'music_thumbs_time' => '164',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        14 => array('music_id' => '1948831',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'thunderclouds~lsd',
            'music_title' => 'Thunderclouds',
            'music_artist' => 'LSD',
            'music_shortlyric' => '[Verse 1: Sia]
All I need is one
[t1]Tất cả những gì em cần chỉ là một
One old man is enough
[t1]Một người đàn ông trưởng thành thôi là đủ
Babe, you gotta
[t1]Anh ơi, anh chì cần
Just turn your fea...',
            'music_downloads' => '399',
            'music_bitrate' => '96',
            'music_length' => '195',
            'music_thumbs_time' => '97',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        15 => array('music_id' => '1951494',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-voi-nguoi-tinh~truc-lam-truc-linh',
            'music_title' => 'Nói Với Người Tình',
            'music_artist' => 'Trúc Lam; Trúc Linh',
            'music_shortlyric' => 'Này người tình ơi! Này người tình ơi!

&quot;Mưa bên thềm từng hạt mưa rơi nhanh
Nghe trong tim mình rộn ràng
Ngân vang khúc nhạc tìm câu ca
Trong tình yêu, đến với anh thật thà.&quot; [x2]

Mây...',
            'music_downloads' => '41',
            'music_bitrate' => '320',
            'music_length' => '282',
            'music_thumbs_time' => '141',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        16 => array('music_id' => '1952292',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'how-deep-is-your-love~bee-gees',
            'music_title' => 'How Deep Is Your Love',
            'music_artist' => 'Bee Gees',
            'music_shortlyric' => '[Verse 1]
I know your eyes in the morning sun
I feel you touch me in the pouring rain
And the moment that you wander far from me
I wanna feel you in my arms again

[Pre-Chorus]
And you come to me o...',
            'music_downloads' => '14',
            'music_bitrate' => '320',
            'music_length' => '225',
            'music_thumbs_time' => '112',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        17 => array('music_id' => '1937727',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'killing-me~ikon',
            'music_title' => 'Killing Me',
            'music_artist' => 'iKON',
            'music_shortlyric' => 'Jukgetda tto eogimeopsi
Neoui heunjeogi
Nama nal goeropinda
Jukgetda nam daehadeusi
Doraseonneunde
Wae naneun oeroulkka
Choyeonhal jul arasseo heeojime daehae
Geunde neol daleun seupgwan hana
Beori...',
            'music_downloads' => '885',
            'music_bitrate' => '192',
            'music_length' => '201',
            'music_thumbs_time' => '100',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        18 => array('music_id' => '1939625',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'forever~kiss',
            'music_title' => 'Forever',
            'music_artist' => 'Kiss',
            'music_shortlyric' => '1. I gotta tell you what I\'m feelin\' inside, I could lie to myself, but it\'s true
There\'s no denying when I look in your eyes, girl I\'m out of my head over you
I lived so long believin\' all love is...',
            'music_downloads' => '12',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '114',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        19 => array('music_id' => '1936296',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'soulmate~zico-iu',
            'music_title' => 'SoulMate',
            'music_artist' => 'Zico; IU',
            'music_shortlyric' => 'Jeoleumui hanbokpaneseo
Du namnyeoga saneun jageun seom
Ne gibuni yeogi nalssigo
Saeppalgan yeolmaega yeollyeosseo
Jogeum natseoreotdeon majeunpyeon
Ije naega jeil akkineun got
Naogi sileun ibujari...',
            'music_downloads' => '17',
            'music_bitrate' => '96',
            'music_length' => '221',
            'music_thumbs_time' => '110',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
    ),
    9 => array(
        0 => array('music_id' => '1950470',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'nguoi-hay-quen-anh-di~bang-kieu-anh-khang',
            'music_title' => 'Người Hãy Quên Anh Đi',
            'music_artist' => 'Bằng Kiều; Anh Khang',
            'music_shortlyric' => '1. Người yêu hỡi dù gì cũng xa nhau rồi
Ngày nào chiếc hôn bao đêm rã rời giờ đã hết rồi
Chẳng còn hơi ấm trên đầu môi
Người yêu hỡi giờ đây tiếng yêu phai phôi
Chỉ còn những đêm cô đơn rối bời giọ...',
            'music_downloads' => '1206',
            'music_bitrate' => '96',
            'music_length' => '267',
            'music_thumbs_time' => '133',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '15'),
        1 => array('music_id' => '1942952',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'my-nhan-vao-bep~truong-quynh-anh-tran-uyen-phuong',
            'music_title' => 'Mỹ Nhân Vào Bếp',
            'music_artist' => 'Trương Quỳnh Anh; Trần Uyên Phương',
            'music_shortlyric' => 'Babe
Thế giới của em vốn rất nhiều đàn ông
Nhưng chưa từng suy nghĩ về chuyện lấy chồng
Ôi cuộc đời màu hồng.

Babe
Như bao ngày em vẫn thức dậy thật trễ
Kéo cô bạn vào bếp vô cùng đam mê
Chỉ nấu...',
            'music_downloads' => '3635',
            'music_bitrate' => '320',
            'music_length' => '355',
            'music_thumbs_time' => '79',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        2 => array('music_id' => '1948161',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'em-muon-anh-dua-em-ve~ho-ngoc-ha',
            'music_title' => 'Em Muốn Anh Đưa Em Về',
            'music_artist' => 'Hồ Ngọc Hà',
            'music_shortlyric' => '1. Trời đang tối cơn mưa phùn
Hôm nay ta hẹn nhau lần đầu tiên
Nhìn ánh mắt anh ngại ngùng
Nhẹ nhàng đặt nụ hồng lên môi em.

Nghe trong em từng khao khát như muốn đoạ
Cay đắng như đã dừng lại...
V...',
            'music_downloads' => '1361',
            'music_bitrate' => '96',
            'music_length' => '256',
            'music_thumbs_time' => '154',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '12'),
        3 => array('music_id' => '1948832',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'phan-gai-thuyen-quyen~dan-nguyen-hoang-nhung',
            'music_title' => 'Phận Gái Thuyền Quyên',
            'music_artist' => 'Đan Nguyên; Hoàng Nhung',
            'music_shortlyric' => 'Từ nay thôi đành duyên mình lỡ đôi
Dù vương vấn mãi cũng thế mà thôi
Khi xưa thầm nói yêu nhau
Bao nhiêu mộng thắm ban đầu
Thôi xin đừng tiếc nhớ thương chi.

Từ nay đôi mình thôi đừng nhớ mong
Mườ...',
            'music_downloads' => '631',
            'music_bitrate' => '320',
            'music_length' => '318',
            'music_thumbs_time' => '159',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '9'),
        4 => array('music_id' => '1937279',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'darkside~alan-walker-aura-tomine-harket',
            'music_title' => 'Darkside',
            'music_artist' => 'Alan Walker; Au/Ra; Tomine Harket',
            'music_shortlyric' => '[Verse 1: Tomine Harket]
We\'re not in love
[t1]Chúng ta không hề yêu nhau
We share no stories
[t1]Và câu chuyện của mỗi người cũng khác biệt
Just something in your eyes
[t1]Nhưng có điều gì đó tron...',
            'music_downloads' => '1217',
            'music_bitrate' => '128',
            'music_length' => '224',
            'music_thumbs_time' => '112',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        5 => array('music_id' => '1942951',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-lai-tinh-xua~huong-lan-che-linh',
            'music_title' => 'Nối Lại Tình Xưa',
            'music_artist' => 'Hương Lan; Chế Linh',
            'music_shortlyric' => 'Về đây bên nhau, ta nối lại tình xưa
Chuyện tình mà bao năm qua, em gói ghém từng kỷ niệm
Phai nắng con đường xưa, những chiều hẹn hò mưa đổ
Mưa ướt lạnh vai anh, em thấy lòng mình xót xa.

Mùa thu...',
            'music_downloads' => '233',
            'music_bitrate' => '320',
            'music_length' => '348',
            'music_thumbs_time' => '174',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        6 => array('music_id' => '1951756',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'yeu-tieng-hat-ngay-xua~tam-doan-ha-vy',
            'music_title' => 'Yêu Tiếng Hát Ngày Xưa',
            'music_artist' => 'Tâm Đoan; Hạ Vy',
            'music_shortlyric' => 'Đôi mắt em buồn buồn
Gợi giấc mơ hồi tưởng
Một thời bên nhau dễ thương.

Rồi biết đâu mà tìm
Bên trời chiều loang tím
Cho kỷ niệm đau trái tim.

Hương ái ân tàn rồi
Lòng bỗng dưng bồi hồi
Còn...',
            'music_downloads' => '59',
            'music_bitrate' => '320',
            'music_length' => '266',
            'music_thumbs_time' => '53',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '5'),
        7 => array('music_id' => '1938080',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'trang-tan-tren-he-pho~y-linh',
            'music_title' => 'Trăng Tàn Trên Hè Phố',
            'music_artist' => 'Ý Linh',
            'music_shortlyric' => '1. Tôi lại gặp anh
Người trai nơi chiến tuyến
Súng trên vai bước lê qua đường phố
Tôi lại gặp anh
Giờ đây nơi quán nhỏ
Tuổi 30 mà ngỡ như trẻ thơ.

Nhớ gì từ ngày anh xa mái trường
Nhớ gì từ ngà...',
            'music_downloads' => '301',
            'music_bitrate' => '96',
            'music_length' => '343',
            'music_thumbs_time' => '171',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        8 => array('music_id' => '1951941',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'giot-mua-thu~lam-anh-nguyet-anh',
            'music_title' => 'Giọt Mưa Thu',
            'music_artist' => 'Lam Anh; Nguyệt Ánh',
            'music_shortlyric' => 'Ngoài hiên giọt mưa thu thánh thót rơi
Trời lắng u buồn mây hắt hiu ngừng trôi
Nghe gió thoảng mơ hồ trong mưa thu
Ai khóc ai than hờ!

Vài con chim non chiêm chiếp kêu trên cành
Như nhủ trời...',
            'music_downloads' => '29',
            'music_bitrate' => '320',
            'music_length' => '393',
            'music_thumbs_time' => '32',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '4'),
        9 => array('music_id' => '1943854',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'solo-feat-demi-lovato-japan-edition~clean-bandit',
            'music_title' => 'Solo feat. Demi Lovato [Japan Edition]',
            'music_artist' => 'Clean Bandit',
            'music_shortlyric' => '[Intro]
It solo, solo, everybody
[t1]Đây là cơ chế tự thoát nước, thưa quý vị
It solo, everybody
[t1]Tự giải toả
It solo, solo, everybody
[t1]Tự khiến mình cảm thấy hạnh phúc
Woop woop woop woop wo...',
            'music_downloads' => '189',
            'music_bitrate' => '96',
            'music_length' => '224',
            'music_thumbs_time' => '113',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        10 => array('music_id' => '1952325',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'thuo-ban-dau~trieu-khac-vinh-cat-lynh',
            'music_title' => 'Thuở Ban Đầu',
            'music_artist' => 'Triệu Khắc Vinh - Cát Lynh',
            'music_shortlyric' => 'Sao không thấy em lại
Để cùng anh thẩn thơ
Trước sân trăng vời vợi
Để rồi cùng ước mơ.

Sao không thấy em lại
Hàng dừa nghiêng thương nhớ
Và khúc ân tình biết trao về đâu?

Ôi, đẹp sao là thuở ban...',
            'music_downloads' => '21',
            'music_bitrate' => '128',
            'music_length' => '215',
            'music_thumbs_time' => '107',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        11 => array('music_id' => '1936497',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'lien-khuc-so-ngheo-ngheo-hai-dua-ngheo~tuan-vu-duy-truong-khanh-lam',
            'music_title' => 'Liên Khúc: Số Nghèo; Nghèo; Hai Đứa Nghèo',
            'music_artist' => 'Tuấn Vũ; Duy Trường; Khánh Lâm',
            'music_shortlyric' => '[Số Nghèo]

Tôi đã trót sinh ra trúng vào một con số
Con số xấu vô duyên khiến nhiều năm trắng tay
Học hành thì không khá chữ trả lại cho thầy
Văn chương vốn không hay sách đèn chưa ráo mực.

Nên v...',
            'music_downloads' => '53',
            'music_bitrate' => '320',
            'music_length' => '349',
            'music_thumbs_time' => '39',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        12 => array('music_id' => '1942553',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-buon-gac-tro~mai-thien-van',
            'music_title' => 'Nỗi Buồn Gác Trọ',
            'music_artist' => 'Mai Thiên Vân',
            'music_shortlyric' => 'Gác lạnh về khuya cơn gió lùa
Trăng gầy nghiêng bóng cài song thưa
Nhớ ai mà ánh đèn hiu hắt
Lá vàng nhè nhẹ đưa
Tưởng như bước lê hè phố.

Có người con gái buông tóc thề
Thu về e ấp chuyện vu qu...',
            'music_downloads' => '50',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '116',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        13 => array('music_id' => '1944687',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'la-thu-tran-the~giang-tu-ngoc-minh-dan-nguyen',
            'music_title' => 'Lá Thư Trần Thế',
            'music_artist' => 'Giang Tử; Ngọc Minh; Đan Nguyên',
            'music_shortlyric' => 'Lạy chúa con là lính trận ngoài biên
Vì xa thành phố xa quá nên quên
Đêm nay ngôi hai trời xuống
Ánh sao lung linh muôn màu
Con tưởng hoả châu soi tuyến đầu.

Lạy chúa con là thiếu phụ miền quê
Chồ...',
            'music_downloads' => '85',
            'music_bitrate' => '64',
            'music_length' => '328',
            'music_thumbs_time' => '164',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        14 => array('music_id' => '1948831',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'thunderclouds~lsd',
            'music_title' => 'Thunderclouds',
            'music_artist' => 'LSD',
            'music_shortlyric' => '[Verse 1: Sia]
All I need is one
[t1]Tất cả những gì em cần chỉ là một
One old man is enough
[t1]Một người đàn ông trưởng thành thôi là đủ
Babe, you gotta
[t1]Anh ơi, anh chì cần
Just turn your fea...',
            'music_downloads' => '399',
            'music_bitrate' => '96',
            'music_length' => '195',
            'music_thumbs_time' => '97',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        15 => array('music_id' => '1951494',
            'cat_id' => '1',
            'cat_level' => '1',
            'cover_id' => '0',
            'music_title_url' => 'noi-voi-nguoi-tinh~truc-lam-truc-linh',
            'music_title' => 'Nói Với Người Tình',
            'music_artist' => 'Trúc Lam; Trúc Linh',
            'music_shortlyric' => 'Này người tình ơi! Này người tình ơi!

&quot;Mưa bên thềm từng hạt mưa rơi nhanh
Nghe trong tim mình rộn ràng
Ngân vang khúc nhạc tìm câu ca
Trong tình yêu, đến với anh thật thà.&quot; [x2]

Mây...',
            'music_downloads' => '41',
            'music_bitrate' => '320',
            'music_length' => '282',
            'music_thumbs_time' => '141',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        16 => array('music_id' => '1952292',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'how-deep-is-your-love~bee-gees',
            'music_title' => 'How Deep Is Your Love',
            'music_artist' => 'Bee Gees',
            'music_shortlyric' => '[Verse 1]
I know your eyes in the morning sun
I feel you touch me in the pouring rain
And the moment that you wander far from me
I wanna feel you in my arms again

[Pre-Chorus]
And you come to me o...',
            'music_downloads' => '14',
            'music_bitrate' => '320',
            'music_length' => '225',
            'music_thumbs_time' => '112',
            'music_deleted' => '-1','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '3'),
        17 => array('music_id' => '1937727',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'killing-me~ikon',
            'music_title' => 'Killing Me',
            'music_artist' => 'iKON',
            'music_shortlyric' => 'Jukgetda tto eogimeopsi
Neoui heunjeogi
Nama nal goeropinda
Jukgetda nam daehadeusi
Doraseonneunde
Wae naneun oeroulkka
Choyeonhal jul arasseo heeojime daehae
Geunde neol daleun seupgwan hana
Beori...',
            'music_downloads' => '885',
            'music_bitrate' => '192',
            'music_length' => '201',
            'music_thumbs_time' => '100',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        18 => array('music_id' => '1939625',
            'cat_id' => '1',
            'cat_level' => '2',
            'cover_id' => '0',
            'music_title_url' => 'forever~kiss',
            'music_title' => 'Forever',
            'music_artist' => 'Kiss',
            'music_shortlyric' => '1. I gotta tell you what I\'m feelin\' inside, I could lie to myself, but it\'s true
There\'s no denying when I look in your eyes, girl I\'m out of my head over you
I lived so long believin\' all love is...',
            'music_downloads' => '12',
            'music_bitrate' => '320',
            'music_length' => '229',
            'music_thumbs_time' => '114',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
        19 => array('music_id' => '1936296',
            'cat_id' => '1',
            'cat_level' => '4',
            'cover_id' => '0',
            'music_title_url' => 'soulmate~zico-iu',
            'music_title' => 'SoulMate',
            'music_artist' => 'Zico; IU',
            'music_shortlyric' => 'Jeoleumui hanbokpaneseo
Du namnyeoga saneun jageun seom
Ne gibuni yeogi nalssigo
Saeppalgan yeolmaega yeollyeosseo
Jogeum natseoreotdeon majeunpyeon
Ije naega jeil akkineun got
Naogi sileun ibujari...',
            'music_downloads' => '17',
            'music_bitrate' => '96',
            'music_length' => '221',
            'music_thumbs_time' => '110',
            'music_deleted' => '0','music_listen' => 15231, 'music_filename' => '1937310-19833363.mp3',
            'points' => '2'),
    ),
);

?>