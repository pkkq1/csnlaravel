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

// Top Album Hot
$album_hot = array(
    0 => array('music_id' => '1940287',
        'cat_id' => '4',
        'cat_level' => '1',
        'cat_sublevel' => '1',
        'cat_custom' => '0',
        'cover_id' => '92802',
        'music_download_time' => '1533581785',
        'music_last_update_time' => '1533578016',
        'music_title_url' => 'call-me-viva-mix~spagna',
        'music_title_search' => 'cal me; viva mix',
        'music_artist_search' => '; xpagna;',
        'music_composer_search' => '; ;',
        'music_album_search' => 'twelve inch eightix; when the going getx tough',
        'music_title' => 'Call Me (Viva Mix)',
        'music_artist' => 'Spagna',
        'music_composer' => '',
        'music_album' => 'Twelve Inch Eighties (When The Going Gets Tough)',
        'music_production' => 'Crimson',
        'music_album_id' => 'TWIN80007',
        'music_track_id' => '28',
        'music_year' => '2017',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_shortlyric' => '[Verse 1]
Hey how long I\'ve been waitin\' for a love so tender
Hey hey hey how long can I stay without your touch I wonder
You you you you tell me you can ever know oh loneliness
Hey my love no no d...',
        'music_listen' => '43',
        'music_downloads' => '3',
        'music_downloads_today' => '1',
        'music_downloads_today_0' => '0',
        'music_downloads_this_week' => '1',
        'music_downloads_max_week' => '1',
        'music_time' => '1533577481',
        'music_bitrate' => '1000',
        'music_length' => '339',
        'music_filename' => '1940287-c0635741.mp3',
        'music_32_filesize' => '1670037',
        'music_filesize' => '5497867',
        'music_320_filesize' => '13658729',
        'music_m4a_filesize' => '16769103',
        'music_lossless_filesize' => '42268219',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '784928',
        'music_username' => 'lethuananh9b',
        'music_spectrum' => '1',
        'music_bitrate_fixed_by' => '0',
        'music_lyric' => '[Verse 1]
Hey how long I\'ve been waitin\' for a love so tender
Hey hey hey how long can I stay without your touch I wonder
You you you you tell me you can ever know oh loneliness
Hey my love no no don\'t leave me on my own please

[Chorus]
Call me call me
Baby baby call me now
Call me call me
D-d-do it baby please

[Verse 2]
Hey I can wait but I beg you babe don\'t lose my number
I tell you babe call me now coz I\'m losin\' slumber
I\'ll u u u use all my fantasy to dream about you
Hey my love I can\'t resist here all alone please

[Chorus]
Call me call me
Baby baby call me now
Call me call me
D-d-do it baby please

[Chorus]
Call me call me
Baby baby call me now
Call me call me
D-d-do it baby please

[Bridge]
Baby call me now I\'m all alone
Talk to me darlin\' all night long
Call me call me baby when you want
Uh when you want baby please

[Chorus]
Call me call me
Baby baby call me now
Call me call me
D-d-do it baby please

[Chorus]
Call me call me
Baby baby call me now
Call me call me
D-d-do it baby please',
        'music_note' => '',
        'music_deleted' => '-1',
        'music_dmca' => '0',
        'music_download_ip' => '9a7904ae',
        'total' => '30',
        'update_time' => '1533586892',
        'album_artist' => ''),
    1 => array('music_id' => '1940310',
        'cat_id' => '4',
        'cat_level' => '3',
        'cat_sublevel' => '3',
        'cat_custom' => '0',
        'cover_id' => '92805',
        'music_download_time' => '1533585328',
        'music_last_update_time' => '1533579850',
        'music_title_url' => 'chicken-soup~skrillex-habstrakt',
        'music_title_search' => 'chicken xoup',
        'music_artist_search' => '; xkrilex; habxchakt;',
        'music_composer_search' => '; ;',
        'music_album_search' => 'howxla',
        'music_title' => 'Chicken Soup',
        'music_artist' => 'Skrillex; Habstrakt',
        'music_composer' => '',
        'music_album' => 'HOWSLA',
        'music_production' => 'OWSLA',
        'music_album_id' => '075679896100',
        'music_track_id' => '3',
        'music_year' => '2017',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_shortlyric' => '[Instrumental]

Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
C...',
        'music_listen' => '90',
        'music_downloads' => '2',
        'music_downloads_today' => '1',
        'music_downloads_today_0' => '0',
        'music_downloads_this_week' => '2',
        'music_downloads_max_week' => '2',
        'music_time' => '1533579629',
        'music_bitrate' => '1000',
        'music_length' => '207',
        'music_filename' => '1940310-51b5cc37.mp3',
        'music_32_filesize' => '1063890',
        'music_filesize' => '3368533',
        'music_320_filesize' => '8344546',
        'music_m4a_filesize' => '10179427',
        'music_lossless_filesize' => '26516991',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '316518',
        'music_username' => 'mdluffy1505',
        'music_spectrum' => '1',
        'music_bitrate_fixed_by' => '0',
        'music_lyric' => '[Instrumental]

Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Chicken soup, chicken soup
Chicken soup, chicken soup
Chicken soup, chicken soup
Chicken soup, chicken soup
Chi-chi-chi-chi-chi-chi...

Spice girl in the coop
[Instrumental]

Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Chicken soup, chicken soup
Chicken soup, chicken soup
Chicken soup, chicken soup
Chicken soup, chicken soup
Chi-chi-chi-chi-chi-chi...

Spice girl in the coop
[Instrumental]

Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup

Chicken soup
Chicken soup
Chicken soup
Chicken soup',
        'music_note' => '',
        'music_deleted' => '-1',
        'music_dmca' => '0',
        'music_download_ip' => '2a761dcf',
        'total' => '12',
        'update_time' => '1533580231',
        'album_artist' => ''),
    2 => array('music_id' => '1939948',
        'cat_id' => '4',
        'cat_level' => '1',
        'cat_sublevel' => '2',
        'cat_custom' => '6',
        'cover_id' => '92749',
        'music_title' => 'Creatures Of The Night (Live)',
        'music_artist' => 'Kiss',
        'music_composer' => '',
        'music_album' => 'Alive III',
        'music_production' => 'Mercury',
        'music_album_id' => '514 827-2',
        'music_track_id' => '1',
        'music_year' => '1993',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533525560',
        'music_bitrate' => '0',
        'music_length' => '279',
        'music_filename' => '1939948-fdb63803.mp3',
        'music_filename_upload' => '01 - Creatures Of The Night.flac',
        'music_32_filesize' => '1457340',
        'music_filesize' => '4539718',
        'music_320_filesize' => '11257994',
        'music_m4a_filesize' => '14442091',
        'music_lossless_filesize' => '36691609',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '784928',
        'music_username' => 'lethuananh9b',
        'music_original_id' => '1939719',
        'music_note' => '',
        'music_security_code' => '26f516e9',
        'music_last_update_time' => '1533564731',
        'music_last_update_by' => '226970',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'creatures-of-the-night-live~kiss',
        'music_tracklist' => '1. Creatures Of The Night (Live) ~ Kiss
2. Deuce (Live) ~ Kiss
3. I Just Wanna (Live) ~ Kiss
4. Unholy (Live) ~ Kiss
5. Heaven\'s On Fire (Live) ~ Kiss
6. Watchin\' You (Live) ~ Kiss
7. Domino (Live) ~ Kiss
8. I Was Made For Lovin\' You (Live) ~ Kiss
9. I Still Love You (Live) ~ Kiss
10. Rock And Roll All Nite (Live) ~ Kiss
11. Lick It Up (Live) ~ Kiss
12. Forever (Live) ~ Kiss
13. Take It Off (Live) ~ Kiss
14. I Love It Loud (Live) ~ Kiss
15. Detroit Rock City (Live) ~ Kiss
16. God Gave Rock \'N\' Roll To You II (Live) ~ Kiss
17. Star Spangled Banner (Live) ~ Kiss',
        'album_artist' => 'Kiss'),
    3 => array('music_id' => '1939915',
        'cat_id' => '4',
        'cat_level' => '1',
        'cat_sublevel' => '2',
        'cat_custom' => '6',
        'cover_id' => '92745',
        'music_title' => 'Detroit Rock City (Live)',
        'music_artist' => 'Kiss',
        'music_composer' => '',
        'music_album' => 'Alive II',
        'music_production' => 'Casablanca',
        'music_album_id' => 'NBLP-7076-2',
        'music_track_id' => '1',
        'music_year' => '1977',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533521755',
        'music_bitrate' => '0',
        'music_length' => '236',
        'music_filename' => '1939915-7027ece9.mp3',
        'music_filename_upload' => '01 - Detroit Rock City.flac',
        'music_32_filesize' => '1220168',
        'music_filesize' => '3844359',
        'music_320_filesize' => '9526932',
        'music_m4a_filesize' => '12182886',
        'music_lossless_filesize' => '29664102',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '784928',
        'music_username' => 'lethuananh9b',
        'music_original_id' => '1939718',
        'music_note' => '',
        'music_security_code' => 'd0007f63',
        'music_last_update_time' => '1533564329',
        'music_last_update_by' => '226970',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'detroit-rock-city-live~kiss',
        'music_tracklist' => '1. Detroit Rock City (Live) ~ Kiss
2. King Of The Night Time World (Live) ~ Kiss
3. Ladies\' Room (Live) ~ Kiss
4. Makin\' Love (Live) ~ Kiss
5. Love Gun (Live) ~ Kiss
6. Calling Dr. Love (Live) ~ Kiss
7. Christine Sixteen (Live) ~ Kiss
8. Shock Me (Live) ~ Kiss
9. Hard Luck Woman (Live) ~ Kiss
10. Tomorrow And Tonight ~ Kiss
11. I Stole Your Love (Live) ~ Kiss
12. Beth (Live) ~ Kiss
13. God Of Thunder (Live) ~ Kiss
14. I Want You (Live) ~ Kiss
15. Shout It Out Loud ~ Kiss
16. All American Man (Live) ~ Kiss
17. Rockin\' In The USA (Live) ~ Kiss
18. Larger Than Life (Live) ~ Kiss
19. Rocket Ride (Live) ~ Kiss
20. Any Way You Want It (Live) ~ Kiss',
        'album_artist' => 'Kiss'),
    4 => array('music_id' => '1940088',
        'cat_id' => '4',
        'cat_level' => '1',
        'cat_sublevel' => '2',
        'cat_custom' => '6',
        'cover_id' => '92778',
        'music_title' => 'Deuce (Live)',
        'music_artist' => 'Kiss',
        'music_composer' => '',
        'music_album' => 'Kiss Symphony: Alive IV',
        'music_production' => 'Sanctuary Records ‎',
        'music_album_id' => '06076-84658-2',
        'music_track_id' => '1',
        'music_year' => '2003',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533557389',
        'music_bitrate' => '0',
        'music_length' => '254',
        'music_filename' => '1940088-5b90b3a1.mp3',
        'music_filename_upload' => '01 - Deuce (live).flac',
        'music_32_filesize' => '1297161',
        'music_filesize' => '4112542',
        'music_320_filesize' => '10218299',
        'music_m4a_filesize' => '12737956',
        'music_lossless_filesize' => '30895204',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '784928',
        'music_username' => 'lethuananh9b',
        'music_original_id' => '1939724',
        'music_note' => '',
        'music_security_code' => 'c31a07ec',
        'music_last_update_time' => '1533560739',
        'music_last_update_by' => '226970',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'deuce-live~kiss',
        'music_tracklist' => '1. Deuce (Live) ~ Kiss
2. Strutter (Live) ~ Kiss
3. Let Me Go, Rock \'n\' Roll (Live) ~ Kiss
4. Lick It Up (Live) ~ Kiss
5. Calling Dr. Love (Live) ~ Kiss
6. Psycho Circus (Live) ~ Kiss
7. Beth (Live) ~ Kiss
8. Forever (Live) ~ Kiss
9. Goin\' Blind (Live) ~ Kiss
10. Sure Know Something (Live) ~ Kiss
11. Shandi (Live) ~ Kiss
12. Detroit Rock City (Live) ~ Kiss
13. King Of The Night Time World (Live) ~ Kiss
14. Do You Love Me (Live) ~ Kiss
15. Shout It Out Loud (Live) ~ Kiss
16. God Of Thunder (Live) ~ Kiss
17. Love Gun (Live) ~ Kiss
18. Black Diamond (Live) ~ Kiss
19. Great Expectations (Live) ~ Kiss
20. I Was Made For Lovin\' You (Live) ~ Kiss',
        'album_artist' => 'Kiss'),
    5 => array('music_id' => '1939882',
        'cat_id' => '4',
        'cat_level' => '1',
        'cat_sublevel' => '2',
        'cat_custom' => '0',
        'cover_id' => '92738',
        'music_download_time' => '0',
        'music_last_update_time' => '1533516323',
        'music_title_url' => 'aint-quite-right~paul-stanley-kiss',
        'music_title_search' => 'ain t quite right',
        'music_artist_search' => '; paul xtanlei; kix;',
        'music_composer_search' => '; paul xtanlei mikel jap;',
        'music_album_search' => 'paul xtanlei',
        'music_title' => 'Ain\'t Quite Right',
        'music_artist' => 'Paul Stanley (Kiss)',
        'music_composer' => 'Paul Stanley, Mikel Japp',
        'music_album' => 'Paul Stanley',
        'music_production' => 'Casablanca',
        'music_album_id' => 'NBLP 7123',
        'music_track_id' => '3',
        'music_year' => '1978',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_shortlyric' => '',
        'music_listen' => '4',
        'music_downloads' => '0',
        'music_downloads_today' => '0',
        'music_downloads_today_0' => '0',
        'music_downloads_this_week' => '0',
        'music_downloads_max_week' => '0',
        'music_time' => '1533516236',
        'music_bitrate' => '1000',
        'music_length' => '217',
        'music_filename' => '1939882-45f860e9.mp3',
        'music_32_filesize' => '993661',
        'music_filesize' => '3520806',
        'music_320_filesize' => '8742579',
        'music_m4a_filesize' => '10985499',
        'music_lossless_filesize' => '23609353',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '784928',
        'music_username' => 'lethuananh9b',
        'music_spectrum' => '1',
        'music_bitrate_fixed_by' => '0',
        'music_lyric' => '',
        'music_note' => '',
        'music_deleted' => '-1',
        'music_dmca' => '0',
        'music_download_ip' => '',
        'total' => '9',
        'update_time' => '1533560326',
        'album_artist' => ''),
    6 => array('music_id' => '1934557',
        'cat_id' => '4',
        'cat_level' => '1',
        'cat_sublevel' => '2',
        'cat_custom' => '0',
        'cover_id' => '91994',
        'music_title' => 'Toys In The Attic',
        'music_artist' => 'Aerosmith',
        'music_composer' => 'Aerosmith',
        'music_album' => 'Toys in the Attic',
        'music_production' => 'Columbia',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '1975',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1532598980',
        'music_bitrate' => '0',
        'music_length' => '186',
        'music_filename' => '1934557-ec833939.mp3',
        'music_filename_upload' => '01 - Toys In The Attic.flac',
        'music_32_filesize' => '985619',
        'music_filesize' => '3081482',
        'music_320_filesize' => '7569110',
        'music_m4a_filesize' => '9666826',
        'music_lossless_filesize' => '21396999',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '838342',
        'music_username' => 'ducducduc4594',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => 'bd3d3916',
        'music_last_update_time' => '1533560138',
        'music_last_update_by' => '226970',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '192',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'toys-in-the-attic~aerosmith',
        'music_tracklist' => '1. Toys In The Attic ~ Aerosmith
2. Uncle Salty ~ Aerosmith
3. Adams Apple ~ Aerosmith
4. Walk This Way ~ Aerosmith
5. Big Ten Inch Record ~ Aerosmith
6. Sweet Emotion ~ Aerosmith
7. No More No More ~ Aerosmith
8. Round And Round ~ Aerosmith
9. You See Me Crying ~ Aerosmith',
        'album_artist' => 'Aerosmith'),
    7 => array('music_id' => '1940074',
        'cat_id' => '6',
        'cat_level' => '1',
        'cat_sublevel' => '1',
        'cat_custom' => '0',
        'cover_id' => '92776',
        'music_title' => 'Taller Than You',
        'music_artist' => 'Mamamoo',
        'music_composer' => '',
        'music_album' => 'Melting (Regular)',
        'music_production' => 'CJ E&amp;M',
        'music_album_id' => 'CMAC-10749',
        'music_track_id' => '1',
        'music_year' => '2016',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533556674',
        'music_bitrate' => '0',
        'music_length' => '187',
        'music_filename' => '1940074-c3f4b335.mp3',
        'music_filename_upload' => '01 - 1cm의 자존심.flac',
        'music_32_filesize' => '874383',
        'music_filesize' => '3026625',
        'music_320_filesize' => '7524284',
        'music_m4a_filesize' => '8438696',
        'music_lossless_filesize' => '21511952',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '170283',
        'music_username' => 'maximus',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => '41de85b8',
        'music_last_update_time' => '1533556757',
        'music_last_update_by' => '170283',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'taller-than-you~mamamoo',
        'music_tracklist' => '1. Taller Than You ~ Mamamoo
2. Words Don\'t Come Easy ~ Mamamoo
3. You\'re The Best ~ Mamamoo
4. Friday Night ~ Junggigo; Mamamoo
5. My Hometown ~ Mamamoo
6. Emotion ~ Mamamoo
7. I Miss You ~ Mamamoo
8. Funky Boy ~ Mamamoo
9. Recipe ~ Mamamoo
10. Cat Fight ~ Mamamoo
11. Just ~ Mamamoo
12. Girl Crush ~ Mamamoo
13. You\'re The Best ~ Mamamoo',
        'album_artist' => 'Mamamoo'),
);


// Recent lastest album this year upload
$album_new = array(
    0 => array('music_id' => '1931244',
        'cat_id' => '4',
        'cat_level' => '3',
        'cat_sublevel' => '3',
        'cat_custom' => '0',
        'cover_id' => '91500',
        'music_title' => 'Warrior Song',
        'music_artist' => 'TheFatRat; Stasia Estep',
        'music_composer' => '',
        'music_album' => 'Warrior Songs',
        'music_production' => 'Melofaktur UG',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1532002035',
        'music_bitrate' => '0',
        'music_length' => '118',
        'music_filename' => '1931244-fd8b9f75.mp3',
        'music_filename_upload' => '1. Warrior Song - TheFatRat.flac',
        'music_32_filesize' => '572584',
        'music_filesize' => '1939897',
        'music_320_filesize' => '4773033',
        'music_m4a_filesize' => '5839657',
        'music_lossless_filesize' => '11654946',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '526750',
        'music_username' => 'zenkisslove',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => '56158392',
        'music_last_update_time' => '1533561886',
        'music_last_update_by' => '58478',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '192',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'warrior-song~thefatrat-stasia-estep',
        'music_tracklist' => '1. Warrior Song ~ TheFatRat; Stasia Estep
2. Origin ~ TheFatRat
3. Elevate ~ TheFatRat
4. Threnody ~ TheFatRat
5. Envelope ~ TheFatRat
6. Reminiscence ~ TheFatRat',
        'album_artist' => 'TheFatRat'),
    1 => array('music_id' => '1938512',
        'cat_id' => '4',
        'cat_level' => '3',
        'cat_sublevel' => '3',
        'cat_custom' => '0',
        'cover_id' => '92559',
        'music_title' => 'Monophobia',
        'music_artist' => 'Deadmau5; Rob Swire',
        'music_composer' => '',
        'music_album' => 'mau5ville: Level 1',
        'music_production' => 'mau5trap',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533299385',
        'music_bitrate' => '0',
        'music_length' => '214',
        'music_filename' => '1938512-09f54479.mp3',
        'music_filename_upload' => '520004952_acae2b0df24a5a2f1d8c97f36888af59_v4 Monophobia.flac',
        'music_32_filesize' => '1063339',
        'music_filesize' => '3481678',
        'music_320_filesize' => '8634488',
        'music_m4a_filesize' => '10433304',
        'music_lossless_filesize' => '26352671',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '981245',
        'music_username' => 'usukfans',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => '911b263f',
        'music_last_update_time' => '1533366089',
        'music_last_update_by' => '8',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'monophobia~deadmau5-rob-swire',
        'music_tracklist' => '1. Monophobia ~ Deadmau5; Rob Swire
2. All Is Lost ~ Deadmau5; Getter; nothing,nowhere.
3. Something Like ~ Deadmau5; GTA
4. Monophobia (ATTLAS Remix) ~ Deadmau5; Rob Swire
5. Nyquist ~ Deadmau5
6. Monophobia (Extended Mix) ~ Deadmau5; Rob Swire',
        'album_artist' => 'Deadmau5; Rob Swire'),
    2 => array('music_id' => '1937142',
        'cat_id' => '4',
        'cat_level' => '3',
        'cat_sublevel' => '3',
        'cat_custom' => '0',
        'cover_id' => '92362',
        'music_title' => 'Moonlight',
        'music_artist' => 'Yellow Claw; DOLF; Lexie Liu',
        'music_composer' => '',
        'music_album' => 'Barong Family: Shanghai Nights, Pt. 1',
        'music_production' => 'Barong Family',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533117661',
        'music_bitrate' => '0',
        'music_length' => '189',
        'music_filename' => '1937142-90139183.mp3',
        'music_filename_upload' => '512270912_45ae9a0beec3738ca74e1b8b4b4f3737_v3 Moonlight.flac',
        'music_32_filesize' => '1068443',
        'music_filesize' => '3164624',
        'music_320_filesize' => '7703661',
        'music_m4a_filesize' => '9629896',
        'music_lossless_filesize' => '24467218',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '392471',
        'music_username' => 'ikissu102',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => 'a53ee3de',
        'music_last_update_time' => '1533194871',
        'music_last_update_by' => '8',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '320',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'moonlight~yellow-claw-dolf-lexie-liu',
        'music_tracklist' => '1. Moonlight ~ Yellow Claw; DOLF; Lexie Liu
2. Wrong Thing ~ Cesqeaux; Tsunano
3. Sappig ~ Wiwek; Moksi
4. Tiny Turner ~ Moksi; Juyen Sebulba
5. Shake It ~ Cesqeaux; LNY TNZ
6. Luxor (Part 2) ~ Mike Cervello; The Galaxy
7. Let Me Go ~ Mike Cervello; Sihk
8. OMG Dynasty ~ Yellow Claw; Wiwek',
        'album_artist' => 'Moksi'),
    3 => array('music_id' => '1937295',
        'cat_id' => '4',
        'cat_level' => '3',
        'cat_sublevel' => '3',
        'cat_custom' => '0',
        'cover_id' => '92380',
        'music_title' => '25 hrs',
        'music_artist' => 'Menasa; Tsunano',
        'music_composer' => '',
        'music_album' => 'Barong Family: Shanghai Nights, Pt. 2',
        'music_production' => 'Barong Family',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533144732',
        'music_bitrate' => '0',
        'music_length' => '180',
        'music_filename' => '1937295-dd0efaff.mp3',
        'music_filename_upload' => '515644262_b410b9a2996ce0bf9a17c2fce3b0c752_v4 25 hrs.flac',
        'music_32_filesize' => '1041986',
        'music_filesize' => '3029472',
        'music_320_filesize' => '7351588',
        'music_m4a_filesize' => '9159325',
        'music_lossless_filesize' => '23184910',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '392471',
        'music_username' => 'ikissu102',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => 'a0fd6f7a',
        'music_last_update_time' => '1533184795',
        'music_last_update_by' => '8',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '320',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => '25-hrs~menasa-tsunano',
        'music_tracklist' => '1. 25 hrs ~ Menasa; Tsunano
2. All Night Long ~ Yellow Claw; Menasa
3. Want Some Love ~ Moksi; Aazar
4. Everyday A Victory ~ Yellow Claw; Aazar
5. Fever Dream ~ Aazar; Sihk
6. Geisha ~ LNY TNZ; The Galaxy
7. Frog Face ~ Mike Cervello; Juyen Sebulba
8. Bubblegum ~ RayRay; Stoltenhoff
9. Rumba ~ LNY TNZ; Menasa; Alx Veliz
10. I Like To ~ Moksi; Mike Cervello',
        'album_artist' => 'Aazar; Menasa'),
    4 => array('music_id' => '1935826',
        'cat_id' => '4',
        'cat_level' => '3',
        'cat_sublevel' => '3',
        'cat_custom' => '0',
        'cover_id' => '92150',
        'music_title' => 'Unity',
        'music_artist' => 'Dimitri Vegas; Like Mike; Hardwell',
        'music_composer' => '',
        'music_album' => 'Tomorrowland 2018 (EP)',
        'music_production' => 'Smash The Hose',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1532827278',
        'music_bitrate' => '0',
        'music_length' => '234',
        'music_filename' => '1935826-5521489a.mp3',
        'music_filename_upload' => '1 - Dimitri Vegas & Like Mike, Hardwell - Unity.flac',
        'music_32_filesize' => '1203729',
        'music_filesize' => '3829654',
        'music_320_filesize' => '9457684',
        'music_m4a_filesize' => '11583744',
        'music_lossless_filesize' => '31510469',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '201610',
        'music_username' => 'lucifer',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => '596eaba5',
        'music_last_update_time' => '1533561367',
        'music_last_update_by' => '58478',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'unity~dimitri-vegas-like-mike-hardwell',
        'music_tracklist' => '1. Unity ~ Dimitri Vegas; Like Mike; Hardwell
2. Here We Go (Hey Boy, Hey Girl) ~ Dimitri Vegas &amp; Like Mike; Nicky Romero
3. The Jungle ~ Dimitri Vegas &amp; Like Mike; Bassjackers
4. When I Grow Up (DVLM; Brennan Heart VIP Mix) ~ Dimitri Vegas &amp; Like Mike; Wiz Khalifa; Brennan Heart',
        'album_artist' => 'Dimitri Vegas &amp; Like Mike'),
    5 => array('music_id' => '1929200',
        'cat_id' => '4',
        'cat_level' => '3',
        'cat_sublevel' => '1',
        'cat_custom' => '0',
        'cover_id' => '91192',
        'music_title' => 'Booty Time (Yellow Claw &amp; Stoltenhoff Remix)',
        'music_artist' => 'Aazar; Cesqeaux',
        'music_composer' => '',
        'music_album' => 'Booty Time (Remix Pack) (EP)',
        'music_production' => 'Barong Family',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1531702340',
        'music_bitrate' => '0',
        'music_length' => '176',
        'music_filename' => '1929200-5d122510.mp3',
        'music_filename_upload' => '513792352_a3bc93cb8475fd243a33592271e17b8b_v4 Booty Time (Yellow Claw & Stoltenhoff Remix).flac',
        'music_32_filesize' => '937486',
        'music_filesize' => '2836291',
        'music_320_filesize' => '7066247',
        'music_m4a_filesize' => '8581689',
        'music_lossless_filesize' => '22780651',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '981245',
        'music_username' => 'usukfans',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => 'fbc268ad',
        'music_last_update_time' => '1533562928',
        'music_last_update_by' => '58478',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'booty-time-yellow-claw-stoltenhoff-remix~aazar-cesqeaux',
        'music_tracklist' => '1. Booty Time (Yellow Claw &amp; Stoltenhoff Remix) ~ Aazar; Cesqeaux',
        'album_artist' => 'Cesqeaux'),
    6 => array('music_id' => '1937237',
        'cat_id' => '4',
        'cat_level' => '3',
        'cat_sublevel' => '1',
        'cat_custom' => '0',
        'cover_id' => '92371',
        'music_title' => 'Lights Go Down (Sikdope Remix)',
        'music_artist' => 'Zeds Dead; Jauz',
        'music_composer' => '',
        'music_album' => 'Lights Go Down (Remixes)',
        'music_production' => 'Bite This/Deadbeats',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533129709',
        'music_bitrate' => '0',
        'music_length' => '192',
        'music_filename' => '1937237-e742d0f8.mp3',
        'music_filename_upload' => '521589152_9c5fe4bf72dc4fbd0d6abf5265fb3657_v4 Lights Go Down (Sikdope Remix).flac',
        'music_32_filesize' => '1048322',
        'music_filesize' => '3158075',
        'music_320_filesize' => '7766702',
        'music_m4a_filesize' => '9877307',
        'music_lossless_filesize' => '26855916',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '981245',
        'music_username' => 'usukfans',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => '313d30f7',
        'music_last_update_time' => '1533561863',
        'music_last_update_by' => '58478',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'lights-go-down-sikdope-remix~zeds-dead-jauz',
        'music_tracklist' => '1. Lights Go Down (Sikdope Remix) ~ Zeds Dead; Jauz',
        'album_artist' => 'Jauz'),
    7 => array('music_id' => '1939515',
        'cat_id' => '4',
        'cat_level' => '2',
        'cat_sublevel' => '0',
        'cat_custom' => '0',
        'cover_id' => '92703',
        'music_title' => 'World Is Yours',
        'music_artist' => 'Rich The Kid',
        'music_composer' => 'Cassius Jay; Rich The Kid',
        'music_album' => 'The World Is Yours',
        'music_production' => 'Interscope',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533473369',
        'music_bitrate' => '0',
        'music_length' => '163',
        'music_filename' => '1939515-114bff7c.mp3',
        'music_filename_upload' => '1 World Is Yours.flac',
        'music_32_filesize' => '807147',
        'music_filesize' => '2712694',
        'music_320_filesize' => '6627926',
        'music_m4a_filesize' => '7268842',
        'music_lossless_filesize' => '15790444',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '637718',
        'music_username' => 'vangiahuy203',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => '4079d73b',
        'music_last_update_time' => '1533559863',
        'music_last_update_by' => '226970',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '192',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'world-is-yours~rich-the-kid',
        'music_tracklist' => '1. World Is Yours ~ Rich The Kid
2. New Freezer ~ Rich The Kid; Kendrick Lamar
3. No Question ~ Rich The Kid; Future
4. Leave Me ~ Rich The Kid
5. Plug Walk ~ Rich The Kid
6. Too Gone ~ Rich The Kid; Khalid
7. Made It ~ Rich The Kid; Jay Critch; Rick Ross
8. Drippin ~ Rich The Kid; Chris Brown
9. Lost It ~ Rich The Kid; Quavo; Offset
10. End Of Discussion ~ Rich The Kid; Lil Wayne
11. Early Morning Trappin ~ Rich The Kid; Trippie Redd
12. Small Things ~ Rich The Kid
13. Listen Up ~ Rich The Kid
14. Gargoyle ~ Rich The Kid; Swae Lee; Offset
15. Dead Friends ~ Rich The Kid',
        'album_artist' => 'Rich The Kid'),
    8 => array('music_id' => '1939545',
        'cat_id' => '4',
        'cat_level' => '2',
        'cat_sublevel' => '0',
        'cat_custom' => '0',
        'cover_id' => '92706',
        'music_title' => 'Survive The Summer',
        'music_artist' => 'Iggy Azalea',
        'music_composer' => 'Ljay Currie; Iggy Azalea',
        'music_album' => 'Survive The Summer (EP)',
        'music_production' => 'Island',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533477122',
        'music_bitrate' => '0',
        'music_length' => '164',
        'music_filename' => '1939545-1f029a7f.mp3',
        'music_filename_upload' => '1 Survive The Summer.flac',
        'music_32_filesize' => '827042',
        'music_filesize' => '2668632',
        'music_320_filesize' => '6618347',
        'music_m4a_filesize' => '7458032',
        'music_lossless_filesize' => '17826537',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '637718',
        'music_username' => 'vangiahuy203',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => '91ddc310',
        'music_last_update_time' => '1533559751',
        'music_last_update_by' => '226970',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'survive-the-summer~iggy-azalea',
        'music_tracklist' => '1. Survive The Summer ~ Iggy Azalea
2. Tokyo Snow Trip ~ Iggy Azalea
3. Kream ~ Iggy Azalea; Tyga
4. Hey Iggy ~ Iggy Azalea
5. Kawasaki ~ Iggy Azalea
6. OMG ~ Iggy Azalea; Wiz Khalifa',
        'album_artist' => 'Iggy Azalea'),
    9 => array('music_id' => '1939530',
        'cat_id' => '4',
        'cat_level' => '2',
        'cat_sublevel' => '0',
        'cat_custom' => '0',
        'cover_id' => '92704',
        'music_title' => 'Come Back To Earth',
        'music_artist' => 'Mac Miller',
        'music_composer' => 'Jeff Gitelman; Mac Miller; Jon Brion',
        'music_album' => 'Swimming',
        'music_production' => 'Warner Bros.',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533474912',
        'music_bitrate' => '0',
        'music_length' => '161',
        'music_filename' => '1939530-8008153b.mp3',
        'music_filename_upload' => '1 Come Back to Earth.flac',
        'music_32_filesize' => '749346',
        'music_filesize' => '2613342',
        'music_320_filesize' => '6499108',
        'music_m4a_filesize' => '8141186',
        'music_lossless_filesize' => '15850152',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '637718',
        'music_username' => 'vangiahuy203',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => 'eaf12038',
        'music_last_update_time' => '1533559433',
        'music_last_update_by' => '226970',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '320',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'come-back-to-earth~mac-miller',
        'music_tracklist' => '1. Come Back To Earth ~ Mac Miller
2. Hurt Feelings ~ Mac Miller
3. What\'s The Use? ~ Mac Miller
4. Perfecto ~ Mac Miller
5. Self Care ~ Mac Miller
6. Wings ~ Mac Miller
7. Ladders ~ Mac Miller
8. Small Worlds ~ Mac Miller
9. Conversation (Part 1) ~ Mac Miller
10. Dunno ~ Mac Miller
11. Jet Fuel ~ Mac Miller
12. 2009 ~ Mac Miller
13. So It Goes ~ Mac Miller',
        'album_artist' => 'Mac Miller'),
);

// Recent lastest old album upload
$album_old = array(
    0 => array('music_id' => '1935114',
        'cat_id' => '3',
        'cat_level' => '1',
        'cat_sublevel' => '4',
        'cat_custom' => '0',
        'cover_id' => '92069',
        'music_title' => 'Yêu Là Chết Trong Lòng',
        'music_artist' => 'Julie',
        'music_composer' => 'Phạm Duy',
        'music_album' => 'Bài Thơ Vu Quy - Tango',
        'music_production' => 'Làng Văn',
        'music_album_id' => 'LVCD111',
        'music_track_id' => '1',
        'music_year' => '1992',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1532683363',
        'music_bitrate' => '320',
        'music_length' => '378',
        'music_filename' => '1935114-f79f705e.mp3',
        'music_filename_upload' => '02. Yeu La Chet Trong Long.mp3',
        'music_32_filesize' => '1940591',
        'music_filesize' => '6099900',
        'music_320_filesize' => '15172476',
        'music_m4a_filesize' => '0',
        'music_lossless_filesize' => '0',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '915872',
        'music_username' => 'chi4camly',
        'music_original_id' => '1047021',
        'music_note' => '',
        'music_security_code' => 'b7eac367',
        'music_last_update_time' => '1533704425',
        'music_last_update_by' => '226970',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '192',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'yeu-la-chet-trong-long~julie',
        'music_tracklist' => '1. Yêu Là Chết Trong Lòng ~ Julie
2. Bài Thơ Vu Quy ~ Julie
3. Tương Tư 3 ~ Julie
4. Mất Nhau Mùa Đông ~ Julie
5. Tìm Đâu ~ Julie
6. Khi Người Yêu Cúi Mặt ~ Julie
7. Hoa Bướm Ngày Xưa ~ Julie
8. Nắng Chưa Xa Trời ~ Julie
9. Chiều Mưa Anh Đưa Em Về ~ Julie
10. Hờn Ghen ~ Julie',
        'album_artist' => 'Julie'),
    1 => array('music_id' => '1939896',
        'cat_id' => '4',
        'cat_level' => '1',
        'cat_sublevel' => '2',
        'cat_custom' => '6',
        'cover_id' => '92743',
        'music_title' => 'Deuce (Live)',
        'music_artist' => 'Kiss',
        'music_composer' => '',
        'music_album' => 'Alive!',
        'music_production' => 'Casablanca',
        'music_album_id' => 'NBLP 7020-798',
        'music_track_id' => '1',
        'music_year' => '1975',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533519565',
        'music_bitrate' => '0',
        'music_length' => '236',
        'music_filename' => '1939896-21e1b6c4.mp3',
        'music_filename_upload' => '01 - Deuce.flac',
        'music_32_filesize' => '1254479',
        'music_filesize' => '3865366',
        'music_320_filesize' => '9552955',
        'music_m4a_filesize' => '12131794',
        'music_lossless_filesize' => '31110561',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '784928',
        'music_username' => 'lethuananh9b',
        'music_original_id' => '1939724',
        'music_note' => '',
        'music_security_code' => 'd555cbf1',
        'music_last_update_time' => '1533553271',
        'music_last_update_by' => '8',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'deuce-live~kiss',
        'music_tracklist' => '1. Deuce (Live) ~ Kiss
2. Strutter (Live) ~ Kiss
3. Got To Choose (Live) ~ Kiss
4. Hotter Than Hell (Live) ~ Kiss
5. Firehouse (Live) ~ Kiss
6. Nothin\' To Lose (Live) ~ Kiss
7. C\'mon And Love Me (Live) ~ Kiss
8. Parasite (Live) ~ Kiss
9. She (Live) ~ Kiss
10. Watchin\' You (Live) ~ Kiss
11. 100,000 Years (Live) ~ Kiss
12. Black Diamond (Live) ~ Kiss
13. Rock Bottom (Live) ~ Kiss
14. Cold Gin (Live) ~ Kiss
15. Rock And Roll All Nite (Live) ~ Kiss
16. Let Me Go, Rock \'n\' Roll (Live) ~ Kiss',
        'album_artist' => 'Kiss'),

    2 => array('music_id' => '1937142',
        'cat_id' => '4',
        'cat_level' => '3',
        'cat_sublevel' => '3',
        'cat_custom' => '0',
        'cover_id' => '92362',
        'music_title' => 'Moonlight',
        'music_artist' => 'Yellow Claw; DOLF; Lexie Liu',
        'music_composer' => '',
        'music_album' => 'Barong Family: Shanghai Nights, Pt. 1',
        'music_production' => 'Barong Family',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533117661',
        'music_bitrate' => '0',
        'music_length' => '189',
        'music_filename' => '1937142-90139183.mp3',
        'music_filename_upload' => '512270912_45ae9a0beec3738ca74e1b8b4b4f3737_v3 Moonlight.flac',
        'music_32_filesize' => '1068443',
        'music_filesize' => '3164624',
        'music_320_filesize' => '7703661',
        'music_m4a_filesize' => '9629896',
        'music_lossless_filesize' => '24467218',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '392471',
        'music_username' => 'ikissu102',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => 'a53ee3de',
        'music_last_update_time' => '1533194871',
        'music_last_update_by' => '8',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '320',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'moonlight~yellow-claw-dolf-lexie-liu',
        'music_tracklist' => '1. Moonlight ~ Yellow Claw; DOLF; Lexie Liu
2. Wrong Thing ~ Cesqeaux; Tsunano
3. Sappig ~ Wiwek; Moksi
4. Tiny Turner ~ Moksi; Juyen Sebulba
5. Shake It ~ Cesqeaux; LNY TNZ
6. Luxor (Part 2) ~ Mike Cervello; The Galaxy
7. Let Me Go ~ Mike Cervello; Sihk
8. OMG Dynasty ~ Yellow Claw; Wiwek',
        'album_artist' => 'Moksi'),
    3 => array('music_id' => '1937295',
        'cat_id' => '4',
        'cat_level' => '3',
        'cat_sublevel' => '3',
        'cat_custom' => '0',
        'cover_id' => '92380',
        'music_title' => '25 hrs',
        'music_artist' => 'Menasa; Tsunano',
        'music_composer' => '',
        'music_album' => 'Barong Family: Shanghai Nights, Pt. 2',
        'music_production' => 'Barong Family',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533144732',
        'music_bitrate' => '0',
        'music_length' => '180',
        'music_filename' => '1937295-dd0efaff.mp3',
        'music_filename_upload' => '515644262_b410b9a2996ce0bf9a17c2fce3b0c752_v4 25 hrs.flac',
        'music_32_filesize' => '1041986',
        'music_filesize' => '3029472',
        'music_320_filesize' => '7351588',
        'music_m4a_filesize' => '9159325',
        'music_lossless_filesize' => '23184910',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '392471',
        'music_username' => 'ikissu102',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => 'a0fd6f7a',
        'music_last_update_time' => '1533184795',
        'music_last_update_by' => '8',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '320',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => '25-hrs~menasa-tsunano',
        'music_tracklist' => '1. 25 hrs ~ Menasa; Tsunano
2. All Night Long ~ Yellow Claw; Menasa
3. Want Some Love ~ Moksi; Aazar
4. Everyday A Victory ~ Yellow Claw; Aazar
5. Fever Dream ~ Aazar; Sihk
6. Geisha ~ LNY TNZ; The Galaxy
7. Frog Face ~ Mike Cervello; Juyen Sebulba
8. Bubblegum ~ RayRay; Stoltenhoff
9. Rumba ~ LNY TNZ; Menasa; Alx Veliz
10. I Like To ~ Moksi; Mike Cervello',
        'album_artist' => 'Aazar; Menasa'),
    4 => array('music_id' => '1935826',
        'cat_id' => '4',
        'cat_level' => '3',
        'cat_sublevel' => '3',
        'cat_custom' => '0',
        'cover_id' => '92150',
        'music_title' => 'Unity',
        'music_artist' => 'Dimitri Vegas; Like Mike; Hardwell',
        'music_composer' => '',
        'music_album' => 'Tomorrowland 2018 (EP)',
        'music_production' => 'Smash The Hose',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1532827278',
        'music_bitrate' => '0',
        'music_length' => '234',
        'music_filename' => '1935826-5521489a.mp3',
        'music_filename_upload' => '1 - Dimitri Vegas & Like Mike, Hardwell - Unity.flac',
        'music_32_filesize' => '1203729',
        'music_filesize' => '3829654',
        'music_320_filesize' => '9457684',
        'music_m4a_filesize' => '11583744',
        'music_lossless_filesize' => '31510469',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '201610',
        'music_username' => 'lucifer',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => '596eaba5',
        'music_last_update_time' => '1533561367',
        'music_last_update_by' => '58478',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'unity~dimitri-vegas-like-mike-hardwell',
        'music_tracklist' => '1. Unity ~ Dimitri Vegas; Like Mike; Hardwell
2. Here We Go (Hey Boy, Hey Girl) ~ Dimitri Vegas &amp; Like Mike; Nicky Romero
3. The Jungle ~ Dimitri Vegas &amp; Like Mike; Bassjackers
4. When I Grow Up (DVLM; Brennan Heart VIP Mix) ~ Dimitri Vegas &amp; Like Mike; Wiz Khalifa; Brennan Heart',
        'album_artist' => 'Dimitri Vegas &amp; Like Mike'),
    5 => array('music_id' => '1929200',
        'cat_id' => '4',
        'cat_level' => '3',
        'cat_sublevel' => '1',
        'cat_custom' => '0',
        'cover_id' => '91192',
        'music_title' => 'Booty Time (Yellow Claw &amp; Stoltenhoff Remix)',
        'music_artist' => 'Aazar; Cesqeaux',
        'music_composer' => '',
        'music_album' => 'Booty Time (Remix Pack) (EP)',
        'music_production' => 'Barong Family',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1531702340',
        'music_bitrate' => '0',
        'music_length' => '176',
        'music_filename' => '1929200-5d122510.mp3',
        'music_filename_upload' => '513792352_a3bc93cb8475fd243a33592271e17b8b_v4 Booty Time (Yellow Claw & Stoltenhoff Remix).flac',
        'music_32_filesize' => '937486',
        'music_filesize' => '2836291',
        'music_320_filesize' => '7066247',
        'music_m4a_filesize' => '8581689',
        'music_lossless_filesize' => '22780651',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '981245',
        'music_username' => 'usukfans',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => 'fbc268ad',
        'music_last_update_time' => '1533562928',
        'music_last_update_by' => '58478',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'booty-time-yellow-claw-stoltenhoff-remix~aazar-cesqeaux',
        'music_tracklist' => '1. Booty Time (Yellow Claw &amp; Stoltenhoff Remix) ~ Aazar; Cesqeaux',
        'album_artist' => 'Cesqeaux'),
    6 => array('music_id' => '1937237',
        'cat_id' => '4',
        'cat_level' => '3',
        'cat_sublevel' => '1',
        'cat_custom' => '0',
        'cover_id' => '92371',
        'music_title' => 'Lights Go Down (Sikdope Remix)',
        'music_artist' => 'Zeds Dead; Jauz',
        'music_composer' => '',
        'music_album' => 'Lights Go Down (Remixes)',
        'music_production' => 'Bite This/Deadbeats',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533129709',
        'music_bitrate' => '0',
        'music_length' => '192',
        'music_filename' => '1937237-e742d0f8.mp3',
        'music_filename_upload' => '521589152_9c5fe4bf72dc4fbd0d6abf5265fb3657_v4 Lights Go Down (Sikdope Remix).flac',
        'music_32_filesize' => '1048322',
        'music_filesize' => '3158075',
        'music_320_filesize' => '7766702',
        'music_m4a_filesize' => '9877307',
        'music_lossless_filesize' => '26855916',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '981245',
        'music_username' => 'usukfans',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => '313d30f7',
        'music_last_update_time' => '1533561863',
        'music_last_update_by' => '58478',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'lights-go-down-sikdope-remix~zeds-dead-jauz',
        'music_tracklist' => '1. Lights Go Down (Sikdope Remix) ~ Zeds Dead; Jauz',
        'album_artist' => 'Jauz'),
    7 => array('music_id' => '1939515',
        'cat_id' => '4',
        'cat_level' => '2',
        'cat_sublevel' => '0',
        'cat_custom' => '0',
        'cover_id' => '92703',
        'music_title' => 'World Is Yours',
        'music_artist' => 'Rich The Kid',
        'music_composer' => 'Cassius Jay; Rich The Kid',
        'music_album' => 'The World Is Yours',
        'music_production' => 'Interscope',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533473369',
        'music_bitrate' => '0',
        'music_length' => '163',
        'music_filename' => '1939515-114bff7c.mp3',
        'music_filename_upload' => '1 World Is Yours.flac',
        'music_32_filesize' => '807147',
        'music_filesize' => '2712694',
        'music_320_filesize' => '6627926',
        'music_m4a_filesize' => '7268842',
        'music_lossless_filesize' => '15790444',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '637718',
        'music_username' => 'vangiahuy203',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => '4079d73b',
        'music_last_update_time' => '1533559863',
        'music_last_update_by' => '226970',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '192',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'world-is-yours~rich-the-kid',
        'music_tracklist' => '1. World Is Yours ~ Rich The Kid
2. New Freezer ~ Rich The Kid; Kendrick Lamar
3. No Question ~ Rich The Kid; Future
4. Leave Me ~ Rich The Kid
5. Plug Walk ~ Rich The Kid
6. Too Gone ~ Rich The Kid; Khalid
7. Made It ~ Rich The Kid; Jay Critch; Rick Ross
8. Drippin ~ Rich The Kid; Chris Brown
9. Lost It ~ Rich The Kid; Quavo; Offset
10. End Of Discussion ~ Rich The Kid; Lil Wayne
11. Early Morning Trappin ~ Rich The Kid; Trippie Redd
12. Small Things ~ Rich The Kid
13. Listen Up ~ Rich The Kid
14. Gargoyle ~ Rich The Kid; Swae Lee; Offset
15. Dead Friends ~ Rich The Kid',
        'album_artist' => 'Rich The Kid'),
    8 => array('music_id' => '1939545',
        'cat_id' => '4',
        'cat_level' => '2',
        'cat_sublevel' => '0',
        'cat_custom' => '0',
        'cover_id' => '92706',
        'music_title' => 'Survive The Summer',
        'music_artist' => 'Iggy Azalea',
        'music_composer' => 'Ljay Currie; Iggy Azalea',
        'music_album' => 'Survive The Summer (EP)',
        'music_production' => 'Island',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533477122',
        'music_bitrate' => '0',
        'music_length' => '164',
        'music_filename' => '1939545-1f029a7f.mp3',
        'music_filename_upload' => '1 Survive The Summer.flac',
        'music_32_filesize' => '827042',
        'music_filesize' => '2668632',
        'music_320_filesize' => '6618347',
        'music_m4a_filesize' => '7458032',
        'music_lossless_filesize' => '17826537',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '637718',
        'music_username' => 'vangiahuy203',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => '91ddc310',
        'music_last_update_time' => '1533559751',
        'music_last_update_by' => '226970',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'survive-the-summer~iggy-azalea',
        'music_tracklist' => '1. Survive The Summer ~ Iggy Azalea
2. Tokyo Snow Trip ~ Iggy Azalea
3. Kream ~ Iggy Azalea; Tyga
4. Hey Iggy ~ Iggy Azalea
5. Kawasaki ~ Iggy Azalea
6. OMG ~ Iggy Azalea; Wiz Khalifa',
        'album_artist' => 'Iggy Azalea'),
    9 => array('music_id' => '1939530',
        'cat_id' => '4',
        'cat_level' => '2',
        'cat_sublevel' => '0',
        'cat_custom' => '0',
        'cover_id' => '92704',
        'music_title' => 'Come Back To Earth',
        'music_artist' => 'Mac Miller',
        'music_composer' => 'Jeff Gitelman; Mac Miller; Jon Brion',
        'music_album' => 'Swimming',
        'music_production' => 'Warner Bros.',
        'music_album_id' => '',
        'music_track_id' => '1',
        'music_year' => '2018',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533474912',
        'music_bitrate' => '0',
        'music_length' => '161',
        'music_filename' => '1939530-8008153b.mp3',
        'music_filename_upload' => '1 Come Back to Earth.flac',
        'music_32_filesize' => '749346',
        'music_filesize' => '2613342',
        'music_320_filesize' => '6499108',
        'music_m4a_filesize' => '8141186',
        'music_lossless_filesize' => '15850152',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '637718',
        'music_username' => 'vangiahuy203',
        'music_original_id' => '0',
        'music_note' => '',
        'music_security_code' => 'eaf12038',
        'music_last_update_time' => '1533559433',
        'music_last_update_by' => '226970',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '320',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'come-back-to-earth~mac-miller',
        'music_tracklist' => '1. Come Back To Earth ~ Mac Miller
2. Hurt Feelings ~ Mac Miller
3. What\'s The Use? ~ Mac Miller
4. Perfecto ~ Mac Miller
5. Self Care ~ Mac Miller
6. Wings ~ Mac Miller
7. Ladders ~ Mac Miller
8. Small Worlds ~ Mac Miller
9. Conversation (Part 1) ~ Mac Miller
10. Dunno ~ Mac Miller
11. Jet Fuel ~ Mac Miller
12. 2009 ~ Mac Miller
13. So It Goes ~ Mac Miller',
        'album_artist' => 'Mac Miller'),
    10 => array('music_id' => '1940287',
        'cat_id' => '4',
        'cat_level' => '1',
        'cat_sublevel' => '1',
        'cat_custom' => '0',
        'cover_id' => '92802',
        'music_download_time' => '1533581785',
        'music_last_update_time' => '1533578016',
        'music_title_url' => 'call-me-viva-mix~spagna',
        'music_title_search' => 'cal me; viva mix',
        'music_artist_search' => '; xpagna;',
        'music_composer_search' => '; ;',
        'music_album_search' => 'twelve inch eightix; when the going getx tough',
        'music_title' => 'Call Me (Viva Mix)',
        'music_artist' => 'Spagna',
        'music_composer' => '',
        'music_album' => 'Twelve Inch Eighties (When The Going Gets Tough)',
        'music_production' => 'Crimson',
        'music_album_id' => 'TWIN80007',
        'music_track_id' => '28',
        'music_year' => '2017',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_shortlyric' => '[Verse 1]
Hey how long I\'ve been waitin\' for a love so tender
Hey hey hey how long can I stay without your touch I wonder
You you you you tell me you can ever know oh loneliness
Hey my love no no d...',
        'music_listen' => '43',
        'music_downloads' => '3',
        'music_downloads_today' => '1',
        'music_downloads_today_0' => '0',
        'music_downloads_this_week' => '1',
        'music_downloads_max_week' => '1',
        'music_time' => '1533577481',
        'music_bitrate' => '1000',
        'music_length' => '339',
        'music_filename' => '1940287-c0635741.mp3',
        'music_32_filesize' => '1670037',
        'music_filesize' => '5497867',
        'music_320_filesize' => '13658729',
        'music_m4a_filesize' => '16769103',
        'music_lossless_filesize' => '42268219',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '784928',
        'music_username' => 'lethuananh9b',
        'music_spectrum' => '1',
        'music_bitrate_fixed_by' => '0',
        'music_lyric' => '[Verse 1]
Hey how long I\'ve been waitin\' for a love so tender
Hey hey hey how long can I stay without your touch I wonder
You you you you tell me you can ever know oh loneliness
Hey my love no no don\'t leave me on my own please

[Chorus]
Call me call me
Baby baby call me now
Call me call me
D-d-do it baby please

[Verse 2]
Hey I can wait but I beg you babe don\'t lose my number
I tell you babe call me now coz I\'m losin\' slumber
I\'ll u u u use all my fantasy to dream about you
Hey my love I can\'t resist here all alone please

[Chorus]
Call me call me
Baby baby call me now
Call me call me
D-d-do it baby please

[Chorus]
Call me call me
Baby baby call me now
Call me call me
D-d-do it baby please

[Bridge]
Baby call me now I\'m all alone
Talk to me darlin\' all night long
Call me call me baby when you want
Uh when you want baby please

[Chorus]
Call me call me
Baby baby call me now
Call me call me
D-d-do it baby please

[Chorus]
Call me call me
Baby baby call me now
Call me call me
D-d-do it baby please',
        'music_note' => '',
        'music_deleted' => '-1',
        'music_dmca' => '0',
        'music_download_ip' => '9a7904ae',
        'total' => '30',
        'update_time' => '1533586892',
        'album_artist' => ''),
    11 => array('music_id' => '1940310',
        'cat_id' => '4',
        'cat_level' => '3',
        'cat_sublevel' => '3',
        'cat_custom' => '0',
        'cover_id' => '92805',
        'music_download_time' => '1533585328',
        'music_last_update_time' => '1533579850',
        'music_title_url' => 'chicken-soup~skrillex-habstrakt',
        'music_title_search' => 'chicken xoup',
        'music_artist_search' => '; xkrilex; habxchakt;',
        'music_composer_search' => '; ;',
        'music_album_search' => 'howxla',
        'music_title' => 'Chicken Soup',
        'music_artist' => 'Skrillex; Habstrakt',
        'music_composer' => '',
        'music_album' => 'HOWSLA',
        'music_production' => 'OWSLA',
        'music_album_id' => '075679896100',
        'music_track_id' => '3',
        'music_year' => '2017',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_shortlyric' => '[Instrumental]

Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
C...',
        'music_listen' => '90',
        'music_downloads' => '2',
        'music_downloads_today' => '1',
        'music_downloads_today_0' => '0',
        'music_downloads_this_week' => '2',
        'music_downloads_max_week' => '2',
        'music_time' => '1533579629',
        'music_bitrate' => '1000',
        'music_length' => '207',
        'music_filename' => '1940310-51b5cc37.mp3',
        'music_32_filesize' => '1063890',
        'music_filesize' => '3368533',
        'music_320_filesize' => '8344546',
        'music_m4a_filesize' => '10179427',
        'music_lossless_filesize' => '26516991',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '316518',
        'music_username' => 'mdluffy1505',
        'music_spectrum' => '1',
        'music_bitrate_fixed_by' => '0',
        'music_lyric' => '[Instrumental]

Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Chicken soup, chicken soup
Chicken soup, chicken soup
Chicken soup, chicken soup
Chicken soup, chicken soup
Chi-chi-chi-chi-chi-chi...

Spice girl in the coop
[Instrumental]

Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Chicken soup, chicken soup
Chicken soup, chicken soup
Chicken soup, chicken soup
Chicken soup, chicken soup
Chi-chi-chi-chi-chi-chi...

Spice girl in the coop
[Instrumental]

Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup
Spice girl in the coop
So sick, chicken soup
Walk in, kill the room
So sick, chicken soup

Chicken soup
Chicken soup
Chicken soup
Chicken soup',
        'music_note' => '',
        'music_deleted' => '-1',
        'music_dmca' => '0',
        'music_download_ip' => '2a761dcf',
        'total' => '12',
        'update_time' => '1533580231',
        'album_artist' => ''),
    12 => array('music_id' => '1939948',
        'cat_id' => '4',
        'cat_level' => '1',
        'cat_sublevel' => '2',
        'cat_custom' => '6',
        'cover_id' => '92749',
        'music_title' => 'Creatures Of The Night (Live)',
        'music_artist' => 'Kiss',
        'music_composer' => '',
        'music_album' => 'Alive III',
        'music_production' => 'Mercury',
        'music_album_id' => '514 827-2',
        'music_track_id' => '1',
        'music_year' => '1993',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533525560',
        'music_bitrate' => '0',
        'music_length' => '279',
        'music_filename' => '1939948-fdb63803.mp3',
        'music_filename_upload' => '01 - Creatures Of The Night.flac',
        'music_32_filesize' => '1457340',
        'music_filesize' => '4539718',
        'music_320_filesize' => '11257994',
        'music_m4a_filesize' => '14442091',
        'music_lossless_filesize' => '36691609',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '784928',
        'music_username' => 'lethuananh9b',
        'music_original_id' => '1939719',
        'music_note' => '',
        'music_security_code' => '26f516e9',
        'music_last_update_time' => '1533564731',
        'music_last_update_by' => '226970',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'creatures-of-the-night-live~kiss',
        'music_tracklist' => '1. Creatures Of The Night (Live) ~ Kiss
2. Deuce (Live) ~ Kiss
3. I Just Wanna (Live) ~ Kiss
4. Unholy (Live) ~ Kiss
5. Heaven\'s On Fire (Live) ~ Kiss
6. Watchin\' You (Live) ~ Kiss
7. Domino (Live) ~ Kiss
8. I Was Made For Lovin\' You (Live) ~ Kiss
9. I Still Love You (Live) ~ Kiss
10. Rock And Roll All Nite (Live) ~ Kiss
11. Lick It Up (Live) ~ Kiss
12. Forever (Live) ~ Kiss
13. Take It Off (Live) ~ Kiss
14. I Love It Loud (Live) ~ Kiss
15. Detroit Rock City (Live) ~ Kiss
16. God Gave Rock \'N\' Roll To You II (Live) ~ Kiss
17. Star Spangled Banner (Live) ~ Kiss',
        'album_artist' => 'Kiss'),
    13 => array('music_id' => '1939915',
        'cat_id' => '4',
        'cat_level' => '1',
        'cat_sublevel' => '2',
        'cat_custom' => '6',
        'cover_id' => '92745',
        'music_title' => 'Detroit Rock City (Live)',
        'music_artist' => 'Kiss',
        'music_composer' => '',
        'music_album' => 'Alive II',
        'music_production' => 'Casablanca',
        'music_album_id' => 'NBLP-7076-2',
        'music_track_id' => '1',
        'music_year' => '1977',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533521755',
        'music_bitrate' => '0',
        'music_length' => '236',
        'music_filename' => '1939915-7027ece9.mp3',
        'music_filename_upload' => '01 - Detroit Rock City.flac',
        'music_32_filesize' => '1220168',
        'music_filesize' => '3844359',
        'music_320_filesize' => '9526932',
        'music_m4a_filesize' => '12182886',
        'music_lossless_filesize' => '29664102',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '784928',
        'music_username' => 'lethuananh9b',
        'music_original_id' => '1939718',
        'music_note' => '',
        'music_security_code' => 'd0007f63',
        'music_last_update_time' => '1533564329',
        'music_last_update_by' => '226970',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'detroit-rock-city-live~kiss',
        'music_tracklist' => '1. Detroit Rock City (Live) ~ Kiss
2. King Of The Night Time World (Live) ~ Kiss
3. Ladies\' Room (Live) ~ Kiss
4. Makin\' Love (Live) ~ Kiss
5. Love Gun (Live) ~ Kiss
6. Calling Dr. Love (Live) ~ Kiss
7. Christine Sixteen (Live) ~ Kiss
8. Shock Me (Live) ~ Kiss
9. Hard Luck Woman (Live) ~ Kiss
10. Tomorrow And Tonight ~ Kiss
11. I Stole Your Love (Live) ~ Kiss
12. Beth (Live) ~ Kiss
13. God Of Thunder (Live) ~ Kiss
14. I Want You (Live) ~ Kiss
15. Shout It Out Loud ~ Kiss
16. All American Man (Live) ~ Kiss
17. Rockin\' In The USA (Live) ~ Kiss
18. Larger Than Life (Live) ~ Kiss
19. Rocket Ride (Live) ~ Kiss
20. Any Way You Want It (Live) ~ Kiss',
        'album_artist' => 'Kiss'),
    14 => array('music_id' => '1940088',
        'cat_id' => '4',
        'cat_level' => '1',
        'cat_sublevel' => '2',
        'cat_custom' => '6',
        'cover_id' => '92778',
        'music_title' => 'Deuce (Live)',
        'music_artist' => 'Kiss',
        'music_composer' => '',
        'music_album' => 'Kiss Symphony: Alive IV',
        'music_production' => 'Sanctuary Records ‎',
        'music_album_id' => '06076-84658-2',
        'music_track_id' => '1',
        'music_year' => '2003',
        'music_code_1' => '0',
        'music_code_2' => '0',
        'music_time' => '1533557389',
        'music_bitrate' => '0',
        'music_length' => '254',
        'music_filename' => '1940088-5b90b3a1.mp3',
        'music_filename_upload' => '01 - Deuce (live).flac',
        'music_32_filesize' => '1297161',
        'music_filesize' => '4112542',
        'music_320_filesize' => '10218299',
        'music_m4a_filesize' => '12737956',
        'music_lossless_filesize' => '30895204',
        'music_width' => '0',
        'music_height' => '0',
        'music_thumbs_time' => '0',
        'music_user_id' => '784928',
        'music_username' => 'lethuananh9b',
        'music_original_id' => '1939724',
        'music_note' => '',
        'music_security_code' => 'c31a07ec',
        'music_last_update_time' => '1533560739',
        'music_last_update_by' => '226970',
        'music_bitrate_fixed_time' => '0',
        'music_bitrate_fixed_by' => '0',
        'music_metadata' => '1',
        'music_spectrum' => '1',
        'music_bitrate_fixed' => '0',
        'music_state' => '3',
        'music_dmca' => '0',
        'music_deleted' => '0',
        'music_updated' => '1',
        'music_title_url' => 'deuce-live~kiss',
        'music_tracklist' => '1. Deuce (Live) ~ Kiss
2. Strutter (Live) ~ Kiss
3. Let Me Go, Rock \'n\' Roll (Live) ~ Kiss
4. Lick It Up (Live) ~ Kiss
5. Calling Dr. Love (Live) ~ Kiss
6. Psycho Circus (Live) ~ Kiss
7. Beth (Live) ~ Kiss
8. Forever (Live) ~ Kiss
9. Goin\' Blind (Live) ~ Kiss
10. Sure Know Something (Live) ~ Kiss
11. Shandi (Live) ~ Kiss
12. Detroit Rock City (Live) ~ Kiss
13. King Of The Night Time World (Live) ~ Kiss
14. Do You Love Me (Live) ~ Kiss
15. Shout It Out Loud (Live) ~ Kiss
16. God Of Thunder (Live) ~ Kiss
17. Love Gun (Live) ~ Kiss
18. Black Diamond (Live) ~ Kiss
19. Great Expectations (Live) ~ Kiss
20. I Was Made For Lovin\' You (Live) ~ Kiss',
        'album_artist' => 'Kiss'),
);

// Recent lastest music upload
$music_new_uploads = array(
    0 => array('music_id' => '1940045',
        'cat_id' => '6',
        'cat_level' => '1',
        'cover_id' => '92769',
        'music_title' => 'Power Up',
        'music_artist' => 'Red Velvet',
        'music_lyric' => 'Ba banana ba ba banana nana
Ba banana ba ba banana nana
Ba banana ba ba banana nana
Ba banana ba ba banana nana
Oh amugeotdo an haenneunde
Wae siganeun beolsseo 3si
Aiseu amerikano masyeodo
Wae deo hukkeunhukkeunhani
Taeyangeun uril nolligo
Aseupalteu ondo 50do (Wow)
Wonhaeyo eneoji
Chagapgeona aye tteugeopge
Summer magic
Banjjagin geu Ocean wiro
Nan beolsseo nara
Go go eeopeullein beongaecheoreom narara
Kauai pado sok nareul deonjyeo beorige
Iyeiye iyeiyeiyeiye
Let\'s power up
Kkamake da tabeoril geoyeyo
Ba banana ba ba banana nana
Ba banana ba ba banana nana
Ba banana ba ba banana nana ba
Let\'s power up
Nol ttae jeil sinnanikkayo
Oh joahaneun geol wonhaebwayo
I want it I want it
Want it want it yeah
Maeil geudae yeoljeongeun taoreujyo
I\'ll take it I\'ll take it
Take it take it yeah
Geureon ge uriui cheonjaejeogin pawoya
Jeukeungjeok bonneungjeok maja geuge pillyohae
Tteonayo oneul bam
Jjarithameul chajeureo rebereop
Enjin sori
Deultteun mamui baekgeuraundeu myujik
Bwa beolsseo nara
Go go eeopeullein taeyang wiro narara
Diving to the sky wanjeon soreum dodasseo
Iyeiye iyeiyeiyeiye
Let\'s power up
Kkamake da tabeoril geoyeyo
Go go eeopeullein beongaecheoreom narara
Kauai pado sok nareul deonjyeo beorige
Iyeiye iyeiyeiyeiye
Let\'s power up
Kkamake da tabeoril geoyeyo
Ba banana ba ba banana nana
Ba banana ba ba banana nana
Ba banana ba ba banana nana ba
Let\'s power up nol ttae jeil sinnanikkayo
Seonsaengnimeun naege malsseumhasyeotjyo
Nol ttaedo ilhal ttaedo jeulgeopge hae
Geurae nan yudalli banjjakgeoryeotjyo
Tteugeoumdo saeroumdo It\'s mine
Go go eeopeullein beongaecheoreom narara
Kauai pado sok nareul deonjyeo beorige
Iyeiye iyeiyeiyeiye
Let\'s power up
Kkamake da tabeoril geoyeyo
Go go eeopeullein taeyang wiro narara
Diving to the sky wanjeon soreum dodasseo
Iyeiye iyeiyeiyeiye
Let\'s power up
Kkamake da tabeoril geoyeyo
Ba banana ba ba banana nana
Ba banana ba ba banana nana
Ba banana ba ba banana nana ba
Let\'s power up
Nol ttae jeil sinnanikkayo.',
        'music_username' => 'maximus',
        'music_time' => '1533550920',
        'music_last_update_time' => '1533551240',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '202',
        'music_thumbs_time' => '0',
        'music_title_url' => 'power-up~red-velvet',
        'music_shortlyric' => 'Ba banana ba ba banana nana
Ba banana ba ba banana nana
Ba banana ba ba banana nana
Ba banana ba ba banana nana
Oh amugeotdo an haenneunde
Wae siganeun beolsseo 3si
Aiseu amerikano masyeodo
Wae deo...'),
    1 => array('music_id' => '1937970',
        'cat_id' => '4',
        'cat_level' => '3',
        'cover_id' => '92469',
        'music_title' => 'Neverland',
        'music_artist' => 'KSHMR; 7 Skies',
        'music_lyric' => '',
        'music_username' => 'usukfans',
        'music_time' => '1533219468',
        'music_last_update_time' => '1533561371',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '189',
        'music_thumbs_time' => '0',
        'music_title_url' => 'neverland~kshmr-7-skies',
        'music_shortlyric' => ''),
    2 => array('music_id' => '1940036',
        'cat_id' => '3',
        'cat_level' => '1',
        'cover_id' => '92764',
        'music_title' => 'Em Mới Là Người Yêu Anh (Acoustic Version)',
        'music_artist' => 'Min',
        'music_lyric' => '1. Bây giờ hai giờ sáng ở nơi ngã tư đường
Ta ngồi bên cạnh nhau lặng im ngắm phố phường
Trong lòng em giờ đây từng cảm xúc bất thường
But I just can\'t say.

Anh hỏi em giờ đây rằng anh biết làm gì
Khi người anh từng yêu giờ đây đã chia ly
Mang theo con tim của anh mà chẳng nói câu gì
But why can\'t you see?

[ĐK:]
Sao anh không nhận ra
Sau bao nhiêu ngày qua
Khi người mà anh luôn luôn gần bên
Không thể mang cho anh từng cảm xúc
Như em làm, như em làm
Sao người đành lỡ yêu vội vàng
Em mới là người yêu anh.

Sao anh không nhận ra
Cô ta đâu còn yêu anh
Như ngày hôm qua anh từng mơ
Không còn quan tâm anh từng ngày
Giống như em làm, như em làm
Tuy là người đến sau muộn màng
Em mới là người yêu anh.

2. Anh tựa lên bờ vai của em khóc một mình
Bao lần vì người đó mà anh đã hy sinh
Chỉ muốn nắm lấy bàn tay của anh khẽ nói rằng
Em thương anh rất nhiều.

Mà vì sao con tim này không thể nói
Tuy rằng hai chúng ta đã bao lần đi chung nhau một lối
Nhưng sao bây giờ đây từng cảm xúc không nên lời
Bởi vì trong lòng anh vẫn luôn yêu người.

[Coda:]
Bây giờ hai giờ sáng ở nơi ngã tư đường
But I just can\'t say
Ta ngồi bên cạnh nhau lặng im ngắm phố phường
But why can\'t you see?',
        'music_username' => 'phambao198',
        'music_time' => '1533545639',
        'music_last_update_time' => '1533608208',
        'music_bitrate' => '128',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '235',
        'music_thumbs_time' => '0',
        'music_title_url' => 'em-moi-la-nguoi-yeu-anh-acoustic-version~min',
        'music_shortlyric' => '1. Bây giờ hai giờ sáng ở nơi ngã tư đường
Ta ngồi bên cạnh nhau lặng im ngắm phố phường
Trong lòng em giờ đây từng cảm xúc bất thường
But I just can\'t say.

Anh hỏi em giờ đây rằng anh biết làm gì...'),
    3 => array('music_id' => '1939707',
        'cat_id' => '4',
        'cat_level' => '3',
        'cover_id' => '92725',
        'music_title' => 'Everytime We Touch (Hardwell &amp; Maurice West Remix)',
        'music_artist' => 'Cascada; Hardwell; Maurice West',
        'music_lyric' => '[Verse 1:]
I still hear your voice when you sleep next to me
[t1]Em vẫn nghe giọng nói của anh ngay cả khi anh nằm kề bên em
I still feel your touch in my dream
[t1]Em vẫn cảm nhận được những xúc cảm anh trao trong giấc mơ này
Forgive me my weakness, but I don\'t know why
[t1]Đừng giận em vì sự yếu đuối này, nhưng em không thể giải thích vì sao
Without you it\'s hard to survive.
[t1]Thiếu vắng anh cuộc sống trở nên thật khó khăn.

[Chorus:]
\'Cause everytime we touch, I get this feeling
[t1]Vì cứ mỗi lần anh chạm, em lại có những cảm xúc này
And everytime we kiss, I swear I could fly
[t1]Và mỗi lần anh trao em nụ hôn, em thề em bay lên tận trời xanh
Can\'t you feel my heart beat fast, I want this to last
[t1]Anh có cảm nhận được trái tim em đang thổn thức, em muốn tình yêu này là mãi mãi
Need you by my side
[t1]Em cần có anh bên cạnh
\'Cause everytime we touch, I feel the static
[t1]Vì mỗi lần anh chạm vào, như có một dòng điện chạy qua
And everytime we kiss, I reach for the sky
[t1]Và mỗi lần anh hôn, em như chạm được vào trời xanh kia
Can\'t you hear my heart beat so...
[t1]Anh có nghe được trái tim em đang rung động
I can\'t let you go
[t1]Em chẳng thể để anh rời xa đâu
Want you in my life.
[t1]Em muốn có anh bên đời.

[Verse 2:]
Your arms are my castle, your heart is my sky
[t1]Vòng tay anh vững chắc như thành luỹ, trái tim anh rộng lớn tựa trời cao
They wipe away tears that I cry
[t1]Chúng lau khô những giọt nước mắt mỗi lần em mít ướt
The good and the bad times, we\'ve been through them all
[t1]Những niềm vui và cảm những nỗi buồn, ta đều cùng nhau vượt qua
You make me rise when I fall.
[t1]Anh khiến em mạnh mẽ hơn mỗi khi em gục ngã.

[Chorus]
\'Cause everytime we touch, I get this feeling
[t1]Vì cứ mỗi lần anh chạm, em lại có những cảm xúc này
And everytime we kiss, I swear I could fly
[t1]Và mỗi lần anh trao em nụ hôn, em thề em bay lên tận trời xanh
Can\'t you feel my heart beat fast, I want this to last
[t1]Anh có cảm nhận được trái tim em đang thổn thức, em muốn tình yêu này là mãi mãi
Need you by my side
[t1]Em cần có anh bên cạnh
\'Cause everytime we touch, I feel the static
[t1]Vì mỗi lần anh chạm vào, như có một dòng điện chạy qua
And everytime we kiss, I reach for the sky
[t1]Và mỗi lần anh hôn, em như chạm được vào trời xanh kia
Can\'t you hear my heart beat so...
[t1]Anh có nghe được trái tim em đang rung động
I can\'t let you go
[t1]Em chẳng thể để anh rời xa đâu
Want you in my life.
[t1]Em muốn có anh bên đời.

[Outro:]
\'Cause everytime we touch, I get this feeling
[t1]Vì cứ mỗi lần anh chạm, em lại có những cảm xúc này
And everytime we kiss, I swear I could fly
[t1]Và mỗi lần anh trao em nụ hôn, em thề em bay lên tận trời xanh
Can\'t you feel my heart beat fast, I want this to last
[t1]Anh có cảm nhận được trái tim em đang thổn thức, em muốn tình yêu này là mãi mãi
Need you by my side.
[t1]Em cần có anh bên cạnh em.

Người dịch: Công Minh',
        'music_username' => 'ikissu102',
        'music_time' => '1533494945',
        'music_last_update_time' => '1533618756',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '216',
        'music_thumbs_time' => '0',
        'music_title_url' => 'everytime-we-touch-hardwell-maurice-west-remix~cascada-hardwell-maurice-west',
        'music_shortlyric' => '[Verse 1:]
I still hear your voice when you sleep next to me
[t1]Em vẫn nghe giọng nói của anh ngay cả khi anh nằm kề bên em
I still feel your touch in my dream
[t1]Em vẫn cảm nhận được những xúc c...'),
    4 => array('music_id' => '1938289',
        'cat_id' => '4',
        'cat_level' => '3',
        'cover_id' => '92458',
        'music_title' => 'Tie Me Down',
        'music_artist' => 'Gryffin; Elley Duhé',
        'music_lyric' => '[Verse 1]
Don\'t lie
[t1]Đừng chối nữa
I know you\'ve been thinking it
[t1]Em biết anh đã nghĩ về chuyện chúng mình
And two times, you let it slip from your lips
[t1]Và tận 2 lần, anh đã buột miệng nói ra
You got too much pride to make any promises
[t1]Anh quá kiêu hãnh để hứa bất kì lời hứa nào
Thinking that we got time
[t1]Anh cứ nghĩ rằng chúng ta còn nhiều thời gian
And you wanna keep it in.
[t1]Và muốn giữ tình yêu ấy trong lòng ư.

[Pre-Chorus]
I want you out in the pouring rain
[t1]Em muốn anh chờ em trong cơn mưa rào tầm tã
I want you down on your knees
[t1]Em muốn anh quỳ xuống
Praying to God that I\'ll feel the same
[t1]Và cầu Chúa rằng em sẽ đồng ý lời tỏ tình của anh
I\'m right here baby so please.
[t1]Em ở ngay đây, anh yêu ơi, hãy làm gì đi.

[Chorus]
Hold me up, tie me down
[t1]Hãy giữ chặt em, hãy kiểm soát em
Cause I never wana leave your side
[t1]Vì em chẳng bao giờ muốn rời xa anh đâu
Swear to never let you down
[t1]Em thề sẽ không bao giờ làm anh thất vọng
And it\'s been eatin\' me alive
[t1]Và chuyện này khiến em gục ngã
You can take me home
[t1]Anh có thể thoải mái đem em về nhà anh
You can never let me go
[t1]Và bắt em bên anh mãi mãi
Hold me up, hold me up
[t1]Hãy giữ thật chặt em
And tie me, tie me
[t1]Và biến em thành...
Down, down (down)
[t1]Biến em thành của anh
And tie me, tie me
[t1]Hãy kiểm soát em...
Down, down
[t1]Kiểm soát em
And tie me, tie me
[t1]Hãy biến em thành...
Down, down (down)
[t1]Biến em thành của anh
And tie me, tie me
[t1]Hãy kiểm soát em...
Down, down.
[t1]Kiểm soát em.

[Verse 2]
Nine lives until you fall at my feet
[t1]Anh giỏi né thính đấy, cho đến khi sa vào lưới em
Don\'t hide, you\'re wasting your energy
[t1]Đừng cố giấu, anh chỉ đang phí năng lượng thôi
You\'re not shy, so baby it\'s useless
[t1]Anh không hề ngại ngùng, vậy nên, điều đó thật vô dụng
So don\'t try, cause you\'ll end up losing it.
[t1]Và đừng ngừng cố gắng, vì dù sao cuối cùng anh cũng là của em thôi.

[Pre-Chorus]
I want you out in the pouring rain
[t1]Em muốn anh chờ em trong cơn mưa rào tầm tã
I want you down on your knees
[t1]Em muốn anh quỳ xuống
Praying to God that I\'ll feel the same
[t1]Và cầu Chúa rằng em sẽ đồng ý lời tỏ tình của anh
I\'m right here baby so please.
[t1]Em ở ngay đây, anh yêu ơi, hãy làm gì đi.

[Chorus]
Hold me up, tie me down
[t1]Hãy giữ chặt em, hãy kiểm soát em
Cause I never wana leave your side
[t1]Vì em chẳng bao giờ muốn rời xa anh đâu
Swear to never let you down
[t1]Em thề sẽ không bao giờ làm anh thất vọng
And it\'s been eatin\' me alive
[t1]Và chuyện này khiến em gục ngã
You can take me home
[t1]Anh có thể thoải mái đem em về nhà anh
You can never let me go
[t1]Và bắt em bên anh mãi mãi
Hold me up, hold me up
[t1]Hãy giữ thật chặt em
And tie me, tie me
[t1]Và biến em thành...
Down, down (down)
[t1]Biến em thành của anh
And tie me, tie me
[t1]Hãy kiểm soát em...
Down, down
[t1]Kiểm soát em
And tie me, tie me
[t1]Hãy biến em thành...
Down, down (down)
[t1]Biến em thành của anh
And tie me, tie me
[t1]Hãy kiểm soát em...
Down, down.
[t1]Kiểm soát em.

[Bridge]
So wrap your arms around my chest
[t1]Anh ơi hãy dùng vòng tay anh bao bọc lồng ngục em
And I\'ll put my hands around your neck
[t1]Còn em thì dịu dàng quấn tay quanh cổ anh
Cause nobody waste this waiting game
[t1]Vì chẳng có ai tốn thời gian vào mấy trò đợi với chờ
You push and you pull, but you should stay
[t1]Anh dùng dằng, anh khó chịu, nhưng anh nên ở lại đây với em
Stay.
[t1]Ở lại với em.

[Chorus]
Hold me up, tie me down
[t1]Hãy giữ chặt em, hãy kiểm soát em
Cause I never wana leave your side
[t1]Vì em chẳng bao giờ muốn rời xa anh đâu
Swear to never let you down
[t1]Em thề sẽ không bao giờ làm anh thất vọng
And it\'s been eatin\' me alive
[t1]Và chuyện này khiến em gục ngã
You can take me home
[t1]Anh có thể thoải mái đem em về nhà anh
You can never let me go
[t1]Và bắt em bên anh mãi mãi
Hold me up, hold me up
[t1]Hãy giữ thật chặt em
And tie me, tie me
[t1]Và biến em thành...
Down, down (down)
[t1]Biến em thành của anh
And tie me, tie me
[t1]Hãy kiểm soát em...
Down, down
[t1]Kiểm soát em
And tie me, tie me
[t1]Hãy biến em thành...
Down, down (down)
[t1]Biến em thành của anh
And tie me, tie me
[t1]Hãy kiểm soát em...
Down, down.
[t1]Kiểm soát em.

Người dịch: Công Minh',
        'music_username' => 'usukfans',
        'music_time' => '1533273911',
        'music_last_update_time' => '1533617975',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '218',
        'music_thumbs_time' => '0',
        'music_title_url' => 'tie-me-down~gryffin-elley-duhe',
        'music_shortlyric' => '[Verse 1]
Don\'t lie
[t1]Đừng chối nữa
I know you\'ve been thinking it
[t1]Em biết anh đã nghĩ về chuyện chúng mình
And two times, you let it slip from your lips
[t1]Và tận 2 lần, anh đã buột miệng n...'),
    5 => array('music_id' => '1938552',
        'cat_id' => '4',
        'cat_level' => '3',
        'cover_id' => '92565',
        'music_title' => 'United',
        'music_artist' => 'Armin Van Buuren; Vini Vici; Alok; Zafrir',
        'music_lyric' => '',
        'music_username' => 'ikissu102',
        'music_time' => '1533308866',
        'music_last_update_time' => '1533561395',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '217',
        'music_thumbs_time' => '0',
        'music_title_url' => 'united~armin-van-buuren-vini-vici-alok-zafrir',
        'music_shortlyric' => ''),
    6 => array('music_id' => '1940051',
        'cat_id' => '4',
        'cat_level' => '1',
        'cover_id' => '92769',
        'music_title' => 'Bad Boy (English Version)',
        'music_artist' => 'Red Velvet',
        'music_lyric' => 'Who dat who dat who dat is
Coming in the back back talking slick
Tell me cuz I like that I like that
Yea I know what to do with trouble
Oh he don\'t he don\'t he don\'t know
I can take em head to head go toe to toe
Oh if you play I fight back I fight back
I\'ll show you who\'s in control
Cuz I I know how to make the devil cry
Break em down looking in my eyes
That\'s what I\'m doing here tonight
Every time I come around
Notha bad boy down
Got em like ooh ooh
(Oh eh oh eh oh)
Hit em with my love like ooh ooh
(Oh eh oh eh oh)
But they come back another round
Just one look from me lights out
Watch em hit the ground
Got em like ooh ooh
(Oh eh oh eh oh)
Hit em with my love like ooh ooh
(Oh eh oh eh oh)
I shot another bad boy down
Whoa whoa
I shot another bad boy down
Whoa whoa
Put you round my finger
Im\'ma tell you what you wanna hear
Running through your mind
Get you hooked
I\'ll have you shedding tears
Oh no boy this ain\'t a fair fight
I\'m winning you over alright
Oh baby my apologies
I don\'t mean to leave you
Hanging on a string
The more you wanna fight
That you fight that
The more I will pull you right back
Cuz I I know how to make the devil cry
Break em down looking in my eyes
That\'s what I\'ll do to you tonight
Every time I come around
Notha bad boy down
Got em like ooh ooh
(Oh eh oh eh oh)
Hit em with my love like ooh ooh
(Oh eh oh eh oh)
But they come back another round
Just one look from me lights out
Watch em hit the ground
Got em like ooh ooh
(Oh eh oh eh oh)
Hit em with my love like ooh ooh
(Oh eh oh eh oh)
I shot another bad boy down
Oh you\'re gonna know what it feels like
To be free and open your mind
Falling in deep so hard to breathe
It\'s only a matter of time
Baby I think you should know
That I ain\'t like all the others
I\'m making u fall
I\'m making u fall to your knees
Every time I come around
Notha bad boy down
Got em like ooh ooh
(Oh eh oh eh oh)
Hit em with my love like ooh ooh
(Oh eh oh eh oh)
But they come back another round
Just one look from me lights out
Watch em hit the ground
Got em like ooh ooh
(Oh eh oh eh oh)
Hit em with my love like ooh ooh
(Oh eh oh eh oh)
I shot another bad boy down.',
        'music_username' => 'maximus',
        'music_time' => '1533550920',
        'music_last_update_time' => '1533551790',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '208',
        'music_thumbs_time' => '0',
        'music_title_url' => 'bad-boy-english-version~red-velvet',
        'music_shortlyric' => 'Who dat who dat who dat is
Coming in the back back talking slick
Tell me cuz I like that I like that
Yea I know what to do with trouble
Oh he don\'t he don\'t he don\'t know
I can take em head to head...'),
    7 => array('music_id' => '1940046',
        'cat_id' => '6',
        'cat_level' => '1',
        'cover_id' => '92769',
        'music_title' => 'With You',
        'music_artist' => 'Red Velvet',
        'music_lyric' => 'Hayan morae wie uri dul
Kkok machi nuni deopin punggyeong gata
Nunbusin taeyang arae geueullin
Ppalgan kokkeuchi rudolpeu gata (Hoo)
When I\'m with you
When I\'m with you
Han yeoreum soge keuriseumaseu gata
When I\'m with you
When I\'m with you
Gidaryeowatdeon seonmuldeul gata
Yeah nega challangchallang
Nae mame chaolla
Neoran padoe oreun yoteu gata
Dallin gibun sangkwaedo hada
I seolleim sairo
Jongsori ullyeo jongsori ullyeo
Naui meoritsok ne moksoriro
Jeogi meolli ppalgan deungdaedo
Teuricheoreom boyeoseo
Sowoneul bilgo sipeojineun geol
When I\'m with you
When I\'m with you
Han yeoreum soge keuriseumaseu gata
When I\'m with you
When I\'m with you
Gidaryeowatdeon seonmuldeul gata
With you with you
With you with you
I yeoreumi gado
With you with you
With you with you
Uri duri geudaeroigil
Hayan cheonnun gateun byeolbitdeul
Geu arae neowa naui immatchum
Kkumman gata
When I\'m with you
When I\'m with you
Han yeoreum soge keuriseumaseu gata
When I\'m with you
When I\'m with you
Sangsangdo mothan seonmuldeul gata
When I\'m with you
When I\'m with you
Han yeoreum soge keuriseumaseu gata
When I\'m with you
When I\'m with you
Seollem gadeukan seonmuldeul gata
Santakeulloseu gyesindamyeon
Je sowoneun itjanayo
Oh oh oh oh oh
Oh oh oh oh oh
Dagaoneun modeun yeoreumedo
Hamkke itge hae juseyo
Oh oh oh oh oh
Ulji aneulgeyo
With you with you
With you with you
With you with you
With you with you
Han yeoreum keuriseumaseu Yeah
When I\'m with you.',
        'music_username' => 'maximus',
        'music_time' => '1533550920',
        'music_last_update_time' => '1533551430',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '207',
        'music_thumbs_time' => '0',
        'music_title_url' => 'with-you~red-velvet',
        'music_shortlyric' => 'Hayan morae wie uri dul
Kkok machi nuni deopin punggyeong gata
Nunbusin taeyang arae geueullin
Ppalgan kokkeuchi rudolpeu gata (Hoo)
When I\'m with you
When I\'m with you
Han yeoreum soge keuriseumas...'),
    8 => array('music_id' => '1940128',
        'cat_id' => '4',
        'cat_level' => '3',
        'cover_id' => '92783',
        'music_title' => 'Lose Control',
        'music_artist' => 'Maddix',
        'music_lyric' => '',
        'music_username' => 'usukfans',
        'music_time' => '1533559965',
        'music_last_update_time' => '1533559991',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '179',
        'music_thumbs_time' => '0',
        'music_title_url' => 'lose-control~maddix',
        'music_shortlyric' => ''),
    9 => array('music_id' => '1940058',
        'cat_id' => '6',
        'cat_level' => '1',
        'cover_id' => '92770',
        'music_title' => 'My Pace',
        'music_artist' => 'Stray Kids',
        'music_lyric' => 'NaNaNaNaNaNa
A ige aninde
NaNaNaNaNaNa
Geurae igeoji Let\'s go
NaNaNaNaNaNa
Jyaecheoreom doego sipeo bureowo
Yes I\'m bureowo Yes I\'m
Banuibanirado dalasseumyeon nan jokesseo
Useuwo naega useuwo naega
Nugungawa nal bigyohandaneun ge
Neomu useuwo
Haji ma haji ma
Geureon bigyo ttawin uimi eopjana
Geureoji ma Stop it now
Geunyang neon jigeum neoui gireul gamyeon dwae
Injeonghagi silchiman
Yeopeul boge doejana
Apseogandago meonjeo ganeun geon anya Baby
Jeo meolli bogo Take your time
Jogeupal pillyo eopseo My Pace
Bigyo ttawin haji ma
Cheoncheonhi dallyeodo gwaenchana
Naui gireul ttara My lane
Geupan mam naeryeonwa
Amman bogo dallyeoga
You ready Let\'s go
NaNaNaNaNaNa
Just stay in my lane
NaNaNaNaNaNa
A geunde
Tto nameul chyeodabwa geurigo nareul bwa
Mwonga naboda hanassigeun
Deo jallan geot gata
Wae ilkka wae ilkka
Jakku boge dwae nado moreuge
Moreugo goreuneun seontaegui yeonsok
Igeorado mworado
Haebolkka naman dwicheojilkka
Burangami gyesok nareul joreugeodeun
Dareun aedeul bwa dareun aedeul bwa
Nan dareun aedeulgwan dareun aedeulgwan
Dareudago mareun hajiman
Nae bin jane yoksimman gadeuk
Injeonghagi silchiman
Yeopeul boge doejana
Apseogandago meonjeo ganeun geon anya Baby
Jeo meolli bogo Take your time
Jogeupal pillyo eopseo My Pace
Bigyo ttawin haji ma
Cheoncheonhi dallyeodo gwaenchana
Naui gireul ttara My lane
Geupan mam naeryeonwa
Amman bogo dallyeoga
Nan ajik naui mokjeokjiga
Eodiinjineun molla
I don\'t know
Jeogi gyeolseungseonui nae moseubi
Eotteon moseubilji molla
I want to know
Hajiman ildan nae ape gireul dallyeo
Gomineun daeum gallimgireseo
Geuttaekkajineun jakku
Naui yeopeul doraboji ma
Itjima My speed My lane My pace
Jogeupal pillyo eopseo My Pace
Bigyo ttawin haji ma
Cheoncheonhi dallyeodo gwaenchana
Naui gireul ttara My lane
Geupan mam naeryeonwa
Amman bogo dallyeoga
You ready Let\'s go
NaNaNaNaNaNa
Just stay in my lane
NaNaNaNaNaNa.',
        'music_username' => 'maximus',
        'music_time' => '1533552776',
        'music_last_update_time' => '1533553746',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '189',
        'music_thumbs_time' => '0',
        'music_title_url' => 'my-pace~stray-kids',
        'music_shortlyric' => 'NaNaNaNaNaNa
A ige aninde
NaNaNaNaNaNa
Geurae igeoji Let\'s go
NaNaNaNaNaNa
Jyaecheoreom doego sipeo bureowo
Yes I\'m bureowo Yes I\'m
Banuibanirado dalasseumyeon nan jokesseo
Useuwo naega useuwo...'),
    10 => array('music_id' => '1940127',
        'cat_id' => '4',
        'cat_level' => '3',
        'cover_id' => '92782',
        'music_title' => 'Without You (Rhannes Remix)',
        'music_artist' => 'The Parakit; Alden Jacob; Lola Bambola',
        'music_lyric' => '',
        'music_username' => 'usukfans',
        'music_time' => '1533559792',
        'music_last_update_time' => '1533559840',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '202',
        'music_thumbs_time' => '0',
        'music_title_url' => 'without-you-rhannes-remix~the-parakit-alden-jacob-lola-bambola',
        'music_shortlyric' => ''),
    11 => array('music_id' => '1939115',
        'cat_id' => '4',
        'cat_level' => '2',
        'cover_id' => '92648',
        'music_title' => 'Stargazing',
        'music_artist' => 'Travis Scott',
        'music_lyric' => 'Part I

[Chorus:]
Rollin\', rollin\', rollin\', got me stargazin\' (yeah)
Sippin\' on purp, feelin\' like the Barre Baby (it\'s lit)
Whenever I\'m down, it got me goin\' crazy (yah)
Psychedelics got me goin\' crazy (alright)

[Post-Chorus:]
I was always high up on the lean (yeah, yeah)
Then this girl came here to save my life
Look up to the sky, down on my knees (straight up)
Out of nowhere, you came here to stay the night
In the night-time (woo, yah)

[Verse 1:]
Rollin\', rollin\', rollin\', got me stargazin\' (roll)
Psychedelics got me goin\' crazy (oh no)
Niggas femalin\', they excellin\' (yeah)
Are they intelli\'? (what you tellin\'?)
We propellin\', up top with Ellen, uh (with the choppers)
Kill the jealous with propane repellent
Got me goin\' crazy (it\'s lit)
On tour, we\'ll tell \'em, we brought the section (gang)
They keep on callin\' up, it\'s getting hectic like we projected
So we cut the plug, he\'s interjected (got me goin\' crazy)

[Chorus:]
Rollin\', rollin\', rollin\', got me stargazin\' (yeah)
Sippin\' on purp, feelin\' like the Barre Baby (it\'s lit)
Whatever I\'m downin\' got me goin\' crazy (yah)
Psychedelics got me goin\' crazy (alright)

[Post-Chorus:]
I was always high up on the lean (yeah, yeah)
Then this girl came here to save my life
Girl, look to the sky, down on my knees (straight up)
Out of nowhere, you came here to stay the night
In the night-time (woo, yah)

[Interlude:]
Got me goin\' crazy
*Sound of a rollercoaster*

Part II

[Verse 2:]
Ok, I been up for some days, I ain\'t got time to lay
Just to drown out all these thoughts, I tried all kind of things
If I take you to my past you will be traumatized
Got a thousand kids outside that\'s tryna come alive
\'99, took AstroWorld, it had to relocate
Told the dogs I\'d bring it back, it was a seal of faith
Before no carnivals, baby girl, she played the tourist guide
Got the keys into my city, now she know the rides
Got new money, got new problems, got new enemies
When you make it to the top, it\'s the amenities
Packin\' out Toyota like I\'m in the lead
And it ain\'t a mosh pit if ain\'t no injuries
I got \'em stage divin\' out the nose bleeds
And she hit that booger sugar \'til her nose bleed
Bounce that shit forever, she on both knees
She was talkin\' \'bout forever got a whole week
But she know my baby mama is a trophy
She be throwing up them B\'s feel like we both bleed
She keep my dick jumpin\' up, I feel like I\'m Moby
I\'m way too gold for this beef, feel like I\'m Kobe, yeah
This right here is astronomical
I see you picked up all my ways, I feel responsible
They tryna say that all my problems is improbable
They keep itching at my spit, I\'m diabolical
You feel me?',
        'music_username' => 'usukfans',
        'music_time' => '1533385919',
        'music_last_update_time' => '1533554545',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '270',
        'music_thumbs_time' => '0',
        'music_title_url' => 'stargazing~travis-scott',
        'music_shortlyric' => 'Part I

[Chorus:]
Rollin\', rollin\', rollin\', got me stargazin\' (yeah)
Sippin\' on purp, feelin\' like the Barre Baby (it\'s lit)
Whenever I\'m down, it got me goin\' crazy (yah)
Psychedelics got me goin...'),
    12 => array('music_id' => '1939543',
        'cat_id' => '5',
        'cat_level' => '1',
        'cover_id' => '92705',
        'music_title' => 'Thích Anh Như Vậy (那么喜欢你)',
        'music_artist' => 'Châu Bút Sướng',
        'music_lyric' => '像一个梦遥不可及
一碰就碎了一地
假装不在意 只能远远的惦记
就那么一句我想你
放在心里受了委屈
故作不介意 抱自己在怀里
哭了又哭 笑了又笑
想要走去你的心里
原来爱一个人 是这样的感觉
写了又写 改了又改
到底下笔落在哪里
谁让我偏偏 那么的喜欢你
梦中的那个人好想说爱你
从天而降准确落在我心里
整个人变得傻里傻气 都怪你
心里的那个人 长得好像你
从里到外无一不合我心意
一颗心变得无法控制我自己
自己
哭了又哭 笑了又笑
想要走去你的心里
原来爱一个人 是这样的感觉
写了又写 改了又改
到底下笔落在哪里
谁让我偏偏 那么的喜欢你
梦中的那个人好想说爱你
从天而降准确落在我心里
整个人变得傻里傻气 都怪你
心里的那个人 长得好像你
从里到外无一不合我心意
一颗心变得无法控制我自己
哭了又哭 笑了又笑
想要走去你的心里
原来爱一个人 是这样的感觉
写了又写 改了又改
到底下笔落在哪里
谁让我偏偏 那么的喜欢你',
        'music_username' => 'danjustince',
        'music_time' => '1533476497',
        'music_last_update_time' => '1533608531',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '237',
        'music_thumbs_time' => '0',
        'music_title_url' => 'thich-anh-nhu-vay~chau-but-suong',
        'music_shortlyric' => '像一个梦遥不可及
一碰就碎了一地
假装不在意 只能远远的惦记
就那么一句我想你
放在心里受了委屈
故作不介意 抱自己在怀里
哭了又哭 笑了又笑
想要走去你的心里
原来爱一个人 是这样的感觉
写了又写 改了又改
到底下笔落在哪里
谁让我偏偏 那么的喜欢你
梦中的那个人好想说爱你
从天而降准确落在我心里
整个人变得傻里傻气 都怪你
心里的那个人 长得好像你
从里到外无一不合我心意
一颗心变得无法...'),
    13 => array('music_id' => '1940069',
        'cat_id' => '6',
        'cat_level' => '1',
        'cover_id' => '92773',
        'music_title' => 'Close Your Eyes',
        'music_artist' => 'Sojin (Girls\' Day)',
        'music_lyric' => 'Modu sarajyeobeoryeo kkumcheoreom
Eodironga heulleo baramcheoreom
Heuteojyeobeoryeo apeumdo
Saebyeogi ol ttae jeo eodumgwa hamkke
Close your eyes i bam seoseohi jina
Amureochi anke amu il eopsi
Close your eyes jamsi naerida geuchil
Amugeotdo anin sonagicheoreom
Ttaeron pihal su eomneun nunmuldo
Godanhaetdeon salui momburimdo
Jinagarira goyohi
Sumjungnyeo uldeon su maneun nalcheoreom
Close your eyes i bam seoseohi jina
Amureochi anke amu il eopsi
Close your eyes jamsi naerida geuchil
Amugeotdo anin sonagicheoreom
Najimagi oechinda.',
        'music_username' => 'maximus',
        'music_time' => '1533555155',
        'music_last_update_time' => '1533555207',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '213',
        'music_thumbs_time' => '0',
        'music_title_url' => 'close-your-eyes~sojin-girls-day',
        'music_shortlyric' => 'Modu sarajyeobeoryeo kkumcheoreom
Eodironga heulleo baramcheoreom
Heuteojyeobeoryeo apeumdo
Saebyeogi ol ttae jeo eodumgwa hamkke
Close your eyes i bam seoseohi jina
Amureochi anke amu il eopsi
Clo...'),
    14 => array('music_id' => '1940057',
        'cat_id' => '6',
        'cat_level' => '1',
        'cover_id' => '92770',
        'music_title' => 'Who?',
        'music_artist' => 'Stray Kids',
        'music_lyric' => 'I am WHO
I am WHAT
What\'s the reason
For my real existence
Don\'t know why
Don\'t know why
Question Question
Gyesokaeseo mutgo tto mureodo
Daedabeul chajeul su eopseo amugeotdo
Oneul bamedo
Thinking through the night
Tteunnuneuro jisae Insomnia
Saenggage saenggagi ssayeo
Hanaui byeogi doego
Jeomjeom nopajineun byeogeul
Barabomyeo duryeowojinda
Sesangeun ige dabirajiman
Naega wonhaneun dabeun eopjana
Sueopsi ssodajineun
Voice Voice
Goerowo deutgi sileo
Noise Noise
Eodiro gaya al su isseulkka
Naega wonhaneun dabeun
Daeche eodijjeume sumeoinna
I lost my path to the answer
Gal goseul ileobeorin mia gata
Gal goseul ileobeorin mia gata
I am WHO.',
        'music_username' => 'maximus',
        'music_time' => '1533552776',
        'music_last_update_time' => '1533552832',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '104',
        'music_thumbs_time' => '0',
        'music_title_url' => 'who~stray-kids',
        'music_shortlyric' => 'I am WHO
I am WHAT
What\'s the reason
For my real existence
Don\'t know why
Don\'t know why
Question Question
Gyesokaeseo mutgo tto mureodo
Daedabeul chajeul su eopseo amugeotdo
Oneul bamedo
Thinking...'),
    15 => array('music_id' => '1939545',
        'cat_id' => '4',
        'cat_level' => '2',
        'cover_id' => '92706',
        'music_title' => 'Survive The Summer',
        'music_artist' => 'Iggy Azalea',
        'music_lyric' => '[Intro: Alejandra Hernandez &amp; Iggy Azalea]
Eh-eh-Ahem, special announcement, rich bitches don\'t die
And that\'s why you won\'t survive the summer!
Amen!

[Verse 1: Iggy Azalea]
Uh, she\'s salty, I satay the bitch, Alaïa jacket and I slay the bitch
Big body on display and shit, this is just another day and shit
Was down for love, I got played and shit, cameras flashing down, play the dick
I would never ever claim your dick, in interviews, I\'m like who is this?
Bitches tryna put a end to me, producers still sending beats
I send it back in like a day or so, you bitches writing slow like centipedes
My crib got amenities, I just bought a T-Rex tooth
\'Cause I\'m tryna stunt on Mr. Flintstone, one look and your bitch gone
Turn a T-Rex tooth to a chain, shit cost more than your Range
I\'m a diamond in the rough, fancy diamonds by the way
I been making moves, been writing rhymes, been stacking commas
But you? Hold up, bitch, can you survive the summer?

[Chorus: Iggy Azalea]
Woah, uh
You won\'t survive the summer, look, yeah, uh
You won\'t survive the summer, yeah, yeah, yeah
Can\'t stay alive much longer, look, look
You won\'t survive the summer!

[Refrain: Alejandra Hernandez]
Ummm, I just wanna get on my Ferrari and drive real slow, so everyone can see my face.

[Verse 2: Iggy Azalea]
I know you bitches gon\' hate this shit
Get the fuck up out my way and shit, give \'em hell 365
You would think I\'m \'bout to bake a bitch, summer\'s over, it\'s a cold front
Tryna stop me is a witch hunt, lemme\' drop a lil\' wisdom
Crack kills, you a victim, you a victim, you a victim
If I don\'t like it then, I switch (uh), label tripping so I switch (uh)
Which one? Which one? Bring the bag and it\'s done.

[Chorus: Iggy Azalea]
Woah, uh
You won\'t survive the summer, look, yeah, uh
You won\'t survive the summer, yeah, yeah, uh
Can\'t stay alive much longer, look, look
You won\'t survive the summer!

[Bridge: Iggy Azalea]
Hold up bitch (hold up bitch), I think you\'re moving too fast (fast)
Money spent (money spent), ain\'t even counting the cash (cash)
Hold up bitch (hold up bitch), I think you\'re moving too fast (fast)
Money spent (money spent), ain\'t even counting the cash (cash)
Trust me it ain\'t gonna last, it ain\'t gonna last, it ain\'t gonna last
You\'re \'bout to fall on your ass.

[Chorus: Iggy Azalea]
Look, you won\'t survive the summer!
You won\'t survive the summer, damn, uh
They ain\'t getting dumber and dumber (dumber and dumber and dumber and dumber and dumber and dumber)
Shit, you won\'t survive the summer!

[Outro: Alejandra Hernandez]
I know these Chanel shoes are ugly but...
That\'s your rent, bitch!',
        'music_username' => 'vangiahuy203',
        'music_time' => '1533477122',
        'music_last_update_time' => '1533559751',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '164',
        'music_thumbs_time' => '0',
        'music_title_url' => 'survive-the-summer~iggy-azalea',
        'music_shortlyric' => '[Intro: Alejandra Hernandez &amp; Iggy Azalea]
Eh-eh-Ahem, special announcement, rich bitches don\'t die
And that\'s why you won\'t survive the summer!
Amen!

[Verse 1: Iggy Azalea]
Uh, she\'s salty, I...'),
    16 => array('music_id' => '1939492',
        'cat_id' => '4',
        'cat_level' => '3',
        'cover_id' => '92695',
        'music_title' => 'Stay By Your Side',
        'music_artist' => 'Diviners',
        'music_lyric' => '',
        'music_username' => 'ikissu102',
        'music_time' => '1533460853',
        'music_last_update_time' => '1533562555',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '205',
        'music_thumbs_time' => '0',
        'music_title_url' => 'stay-by-your-side~diviners',
        'music_shortlyric' => ''),
    17 => array('music_id' => '1939122',
        'cat_id' => '4',
        'cat_level' => '2',
        'cover_id' => '92648',
        'music_title' => 'Wake Up',
        'music_artist' => 'Travis Scott; The Weeknd',
        'music_lyric' => '[Chorus: The Weeknd]
I don\'t wanna wake up
I want you spread out on the sheets
Said her pussy so good
And her pussy so sweet
I don\'t wanna wake up
I want it flowing through my streams
Getting me hot
Under my feet
I don\'t wanna wake up.

[Verse 1: Travis Scott]
Please don\'t wake me up, I feel it creeping (yeah)
Controlling how you moving, lucid dreaming (dreams)
Always on the side of different seasons, yeah, yeah
Took the belt-way down to your hood
Say you was in the crowd, I never looked
Looking back how things came back around
Guess I was hooked
Burn the bread and then we burn the town
We both was cooked, yeah
Nah, nah, please don\'t wake me up, feel like I\'m dreamin\'
Any given Sunday, you can get it, Willie Beamon
I can make your Mondays even better like the weekend
That\'s my coco out my ice tea (coco, yeah, yeah)
Bend her over for some piping (it\'s lit!)
Bust a cloud, shoot the lightning (pop it)
Pop it now, no, we can\'t sleep.

[Chorus: Travis Scott]
I don\'t wanna wake up (yeah)
Want you spread out on the sheets (it\'s lit!)
Say, pussy so good (pop it)
Oh, pussy so sweet (yeah)
When I wake up (yeah, yeah)
Wanna drop top on the beach (straight up)
Getting me high, yeah (yeah)
Under my feet
When I wake up.

[Verse 2: The Weeknd]
You decide if I live or die
When you\'re close, I\'m alive, I can feel the sky
I just want your body close to me (oh)
And if I OD
I\'ll be alone with no heartbeat
I hold the hills with a coast in the Lambo
And the doors going up, suicide.

[Chorus: The Weeknd]
I don\'t wanna wake up (I don\'t wanna wake up)
I want you spread out on the sheets (want you spread out on the sheets)
\'Cause that pussy so good (pussy so good)
Girl, that pussy so sweet (pussy so sweet)
I don\'t wanna wake up (I don\'t wanna wake up)
I want it flowing through my streams (want it flowing through my streams)
Ha, getting me hot (getting me hot)
Oh, under my feet (under my feet)
I don\'t wanna wake up (yeah)',
        'music_username' => 'usukfans',
        'music_time' => '1533385919',
        'music_last_update_time' => '1533554712',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '231',
        'music_thumbs_time' => '0',
        'music_title_url' => 'wake-up~travis-scott-the-weeknd',
        'music_shortlyric' => '[Chorus: The Weeknd]
I don\'t wanna wake up
I want you spread out on the sheets
Said her pussy so good
And her pussy so sweet
I don\'t wanna wake up
I want it flowing through my streams
Getting me ho...'),
    18 => array('music_id' => '1938551',
        'cat_id' => '4',
        'cat_level' => '3',
        'cover_id' => '92565',
        'music_title' => 'United (Extended Mix)',
        'music_artist' => 'Armin Van Buuren; Vini Vici; Alok; Zafrir',
        'music_lyric' => '',
        'music_username' => 'ikissu102',
        'music_time' => '1533308730',
        'music_last_update_time' => '1533561536',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '433',
        'music_thumbs_time' => '0',
        'music_title_url' => 'united-extended-mix~armin-van-buuren-vini-vici-alok-zafrir',
        'music_shortlyric' => ''),
    19 => array('music_id' => '1938520',
        'cat_id' => '4',
        'cat_level' => '3',
        'cover_id' => '92560',
        'music_title' => 'Reaction',
        'music_artist' => 'Sick Individuals; Jewelz &amp; Sparks',
        'music_lyric' => '',
        'music_username' => 'usukfans',
        'music_time' => '1533300017',
        'music_last_update_time' => '1533561529',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '172',
        'music_thumbs_time' => '0',
        'music_title_url' => 'reaction~sick-individuals-jewelz-sparks',
        'music_shortlyric' => ''),
    20 => array('music_id' => '1939117',
        'cat_id' => '4',
        'cat_level' => '2',
        'cover_id' => '92648',
        'music_title' => 'Sicko Mode',
        'music_artist' => 'Travis Scott; Drake',
        'music_lyric' => '[Part I]

[Intro: Drake]
Astro, yeah
Sun is down, freezin\' cold
That\'s how we already know winter\'s here
My dawg would probably do it for a Louis belt
That\'s just all he know, he don\'t know
Nothin\' else
I tried to show \'em, yeah
I tried to show \'em, yeah, yeah
Yeah, yeah, yeah
Gone on you with the pick and roll
Young La Flame, he in sicko mode.

[Part II]

[Verse 1: Travis Scott]
Woo, made this here with all the ice on in the booth
At the gate outside, when they pull up, they get me loose
Yeah, Jump Out boys, that\'s Nike boys, hoppin\' out coupes
This shit way too big when we pull up give me the loot
(gimme the loot!)
Was off the Remy, had to Papoose
Had to hit my old town to duck the news
Two-four hour lockdown, we made no moves
Now it\'s 4 AM and I\'m back up poppin\' with the crew
I just landed in, Chase B mixes pop like Jamba Juice
Different colored chains, think my jeweler really sellin\' fruits
And they chokin\', man, know the crackers wish it was a noose

[Bridge: Juicy J, Swae Lee &amp; Travis Scott]
Some-some-some, someone said
To win the retreat, we all in too deep
P-p-playin\' for keeps, don\'t play us for weak (someone said)
To win the retreat, we all in too deep
P-p-playin\' for keeps, don\'t play us for weak (yeah)

[Verse 2: Travis Scott &amp; Swae Lee]
This shit way too formal, y\'all know I don\'t follow suit
Stacey Dash, most of these girls ain\'t got a clue
All of these hoes I made off records I produced
I might take all my exes and put \'em all in a group
Hit my eses, I need the booch
\'Bout to turn this function to Bonnaroo
Told her &quot;hop in, you comin\' too&quot;
In the 305, bitches treat me like I\'m Uncle Luke
(don\'t stop, pop that pussy!)
Had to slop the top off, it\'s just a roof, uh
She said, &quot;where we goin\'?&quot; I said &quot;the moon&quot;
We ain\'t even make it to the room
She thought it was the ocean, it\'s just the pool
Now I got her open, it\'s just the Goose
Who put this shit together? I\'m the glue (someone said)
Shorty FaceTimed me out the blue.

[Bridge: Juicy J &amp; Swae Lee]
Someone said
P-playin\' for keeps
Someone said motherf- what someone said
Don\'t play us for weak.

[Part III]

[Intro: Drake &amp; Travis Scott]
Yeah
Astro
Yeah, yeah
Tay Keith, fuck these niggas up
Ay, ay.

[Chorus: Drake &amp; Travis Scott]
She\'s in love with who I am
Back in high school, I used to buss it to the dance (yeah)
Now I hit the FBO with duffels in my hands
I did half a Xan, thirteen hours \'til I land
Had me out like a light, ayy, yeah
Like a light, ayy, yeah
Like a light, ayy.

[Verse 3: Drake &amp; Travis Scott]
Slept through the flight, ayy
Knocked for the night, ayy, 767, man
This shit got double bedroom, man
I still got scores to settle, man
I crept down the block (down the block), made a right (yeah, right)
Cut the lights (yeah, what?), paid the price (yeah)
Niggas think it\'s sweet (nah, nah), it\'s on sight (yeah, what?)
Nothin\' nice (yeah), baguettes in my ice (aww, man)
Jesus Christ (yeah), checks over stripes (yeah)
That\'s what I like (yeah), that\'s what we like (yeah)
Lost my respect, you not a threat
When I shoot my shot, that shit wetty like I\'m Sheck (bitch!)
See the shots that I took (ayy), wet like I\'m Book (ayy)
Wet like I\'m Lizzie, I be spending Folie\'s
Circle blocks \'til I\'m dizzy (yeah, what?)
Like where is he? (Yeah, what?)
No one seen him (yeah, yeah)
I\'m tryna clean \'em (yeah)

[Chorus: Drake &amp; Travis Scott]
She\'s in love with who I am
Back in high school, I used to bus it to the dance
Now I hit the FBO with duffels in my hand (woo!)
I did half a Xan, thirteen hours \'til I land
Had me out like a light, like a light
Like a light, like a light
Like a light (yeah), like a light
Like a light.

[Verse 4: Travis Scott]
Yeah, pass the dawgs in celly
Sendin\' texts ain\'t sendin\' kites, yeah
He said &quot;keep that on lock&quot;
I said &quot;you know this shit, it\'s life”, yeah
It\'s absolute, yeah (yeah), I\'m back reboot (it\'s lit!)
LaFerrari to Jamba juice, yeah (skrrt, skrrt)
We back on the road, they jumpin\' off, no parachute, yeah
Shorty in the back
She said she workin\' on her glutes, yeah (oh my God)
Ain\'t by the book, yeah
This how it look, yeah
\'Bout a check, yeah (check)
Just check the foots, yeah
Pass this to my daughter, I\'ma show her what it took (yeah)
Baby mama cover Forbes, got these other bitches shook, yeah.

[Outro: Travis Scott]
Ye-ah.',
        'music_username' => 'usukfans',
        'music_time' => '1533385919',
        'music_last_update_time' => '1533554603',
        'music_bitrate' => '1000',
        'music_width' => '0',
        'music_height' => '0',
        'music_length' => '312',
        'music_thumbs_time' => '0',
        'music_title_url' => 'sicko-mode~travis-scott-drake',
        'music_shortlyric' => '[Part I]

[Intro: Drake]
Astro, yeah
Sun is down, freezin\' cold
That\'s how we already know winter\'s here
My dawg would probably do it for a Louis belt
That\'s just all he know, he don\'t know
Nothin\'...'),
);

// Recent lastest video upload
$video_new_uploads = array(
    0 => array('music_id' => '1940072',
        'cat_id' => '1',
        'cat_level' => '4',
        'cover_id' => '0',
        'music_title' => 'Allegro Cantabile (너의 곁으로)',
        'music_artist' => 'NATURE',
        'music_title_url' => 'allegro-cantabile~nature',
        'music_shortlyric' => '',
        'music_downloads' => '0',
        'music_username' => '48music',
        'music_time' => '1533555495',
        'music_bitrate' => '192',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '260',
        'music_thumbs_time' => '130'),
    1 => array('music_id' => '1940037',
        'cat_id' => '1',
        'cat_level' => '4',
        'cover_id' => '0',
        'music_title' => 'Power Up',
        'music_artist' => 'Red Velvet',
        'music_title_url' => 'power-up~red-velvet',
        'music_shortlyric' => 'Ba banana ba ba banana nana
Ba banana ba ba banana nana
Ba banana ba ba banana nana
Ba banana ba ba banana nana
Oh amugeotdo an haenneunde
Wae siganeun beolsseo 3si
Aiseu amerikano masyeodo
Wae deo...',
        'music_downloads' => '88',
        'music_username' => '48music',
        'music_time' => '1533548086',
        'music_bitrate' => '128',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '207',
        'music_thumbs_time' => '103'),
    2 => array('music_id' => '1939078',
        'cat_id' => '1',
        'cat_level' => '1',
        'cover_id' => '0',
        'music_title' => 'Nắm Tay Em Khi Mưa Đến',
        'music_artist' => 'Ái Phương',
        'music_title_url' => 'nam-tay-em-khi-mua-den~ai-phuong',
        'music_shortlyric' => 'Mưa chiều nay rơi mãi
Tí tách mưa rơi lặng yên trên lối
Em cầu mong mưa sẽ mang yêu thương về.

Vẫn cần vòng tay ấm
Với chiếc môi hôn nồng nàn thơm ngát
Mưa sẽ chẳng lạnh vì ta có nhau.

Lại gần...',
        'music_downloads' => '9',
        'music_username' => 'vuconghoan969',
        'music_time' => '1533383417',
        'music_bitrate' => '96',
        'music_width' => '1920',
        'music_height' => '1012',
        'music_length' => '578',
        'music_thumbs_time' => '296'),
    3 => array('music_id' => '1939077',
        'cat_id' => '1',
        'cat_level' => '1',
        'cover_id' => '0',
        'music_title' => 'Yêu Rồi',
        'music_artist' => 'Tino',
        'music_title_url' => 'yeu-roi~tino',
        'music_shortlyric' => 'Yêu Rồi
Khi yêu ai rồi
Chẳng cần biết bên ngoài nắng to hay là mưa rào
Chỉ cần biết và chạy rất nhanh để được tới nơi, có ngưòi mình thương
Khi iu ai rồi, chẳng cần biết mai này có vui hay là k...',
        'music_downloads' => '47',
        'music_username' => 'vuconghoan969',
        'music_time' => '1533383136',
        'music_bitrate' => '96',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '203',
        'music_thumbs_time' => '101'),
    4 => array('music_id' => '1938335',
        'cat_id' => '1',
        'cat_level' => '4',
        'cover_id' => '0',
        'music_title' => 'Touch &amp; Sketch',
        'music_artist' => 'Leo',
        'music_title_url' => 'touch-sketch~leo',
        'music_shortlyric' => 'Seomsehage touch
Jeonggyohage seukechi
Nege modeun jipjungeul
Ieojineun line
Wanbyeokan gamgak
Deo diteilhage drawin\'
Nae soni daeumyeon
Hyanggiga pieona
Han beondo eopgetji
Jigeum nega ne...',
        'music_downloads' => '2',
        'music_username' => 'maximus',
        'music_time' => '1533275584',
        'music_bitrate' => '192',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '201',
        'music_thumbs_time' => '100'),
    5 => array('music_id' => '1938291',
        'cat_id' => '1',
        'cat_level' => '4',
        'cover_id' => '0',
        'music_title' => '9MUSES Special Stage (2018 KOREA MUSIC FESTIVAL DAY2 02.08.2018)',
        'music_artist' => '9MUSES',
        'music_title_url' => '9muses-special-stage-2018-korea-music-festival-day2-02082018~9muses',
        'music_shortlyric' => '',
        'music_downloads' => '23',
        'music_username' => '48music',
        'music_time' => '1533273952',
        'music_bitrate' => '128',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '109',
        'music_thumbs_time' => '54'),
    6 => array('music_id' => '1938080',
        'cat_id' => '1',
        'cat_level' => '1',
        'cover_id' => '0',
        'music_title' => 'Trăng Tàn Trên Hè Phố',
        'music_artist' => 'Ý Linh',
        'music_title_url' => 'trang-tan-tren-he-pho~y-linh',
        'music_shortlyric' => '1. Tôi lại gặp anh
Người trai nơi chiến tuyến
Súng trên vai bước lê qua đường phố
Tôi lại gặp anh
Giờ đây nơi quán nhỏ
Tuổi 30 mà ngỡ như trẻ thơ.

Nhớ gì từ ngày anh xa mái trường
Nhớ gì từ ngà...',
        'music_downloads' => '65',
        'music_username' => 'vuconghoan969',
        'music_time' => '1533227059',
        'music_bitrate' => '96',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '343',
        'music_thumbs_time' => '171'),
    7 => array('music_id' => '1938078',
        'cat_id' => '1',
        'cat_level' => '1',
        'cover_id' => '0',
        'music_title' => 'Ký Ức Vỡ Đôi',
        'music_artist' => 'Jang Mi',
        'music_title_url' => 'ky-uc-vo-doi~jang-mi',
        'music_shortlyric' => 'Vì yêu thương cất ở nơi sâu nhất chắc anh chẳng nhìn ra
Vì yêu thương giữ nhịp tim em cháy
Vì yêu em tiếc từng ngày em sống trước khi em gặp anh
Vì yêu em mất anh em nào hay.

Lời yêu đã nói ra chư...',
        'music_downloads' => '155',
        'music_username' => 'vuconghoan969',
        'music_time' => '1533226759',
        'music_bitrate' => '96',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '266',
        'music_thumbs_time' => '111'),
    8 => array('music_id' => '1937831',
        'cat_id' => '1',
        'cat_level' => '1',
        'cover_id' => '0',
        'music_title' => 'TRUNG THU TUYÊN QUANG',
        'music_artist' => 'CÒI THIKI',
        'music_title_url' => 'trung-thu-tuyen-quang~coi-thiki',
        'music_shortlyric' => '',
        'music_downloads' => '11',
        'music_username' => 'nicc103',
        'music_time' => '1533207627',
        'music_bitrate' => '96',
        'music_width' => '1920',
        'music_height' => '918',
        'music_length' => '220',
        'music_thumbs_time' => '110'),
    9 => array('music_id' => '1937815',
        'cat_id' => '1',
        'cat_level' => '4',
        'cover_id' => '0',
        'music_title' => 'Y-shirt ft. Heedo (M Countdown 02.08.2018)',
        'music_artist' => 'Soya',
        'music_title_url' => 'y-shirt-ft-heedo-m-countdown-02082018~soya',
        'music_shortlyric' => '',
        'music_downloads' => '5',
        'music_username' => '48music',
        'music_time' => '1533206212',
        'music_bitrate' => '256',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '219',
        'music_thumbs_time' => '109'),
    10 => array('music_id' => '1937776',
        'cat_id' => '1',
        'cat_level' => '4',
        'cover_id' => '0',
        'music_title' => 'Now Or Never',
        'music_artist' => 'SF9',
        'music_title_url' => 'now-or-never~sf9',
        'music_shortlyric' => 'Jilleosseo
You\'re destiny
Neoreul bon sungan modeun ge Magic history
Geunyang nongnyeobeoryeosseo
Stop it
Beautiful day Beautiful life
Sesangi muldeureo
Nuneul gamgo nuneul tteodo ne moseup tteooll...',
        'music_downloads' => '16',
        'music_username' => 'maximus',
        'music_time' => '1533203175',
        'music_bitrate' => '192',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '212',
        'music_thumbs_time' => '106'),
    11 => array('music_id' => '1937727',
        'cat_id' => '1',
        'cat_level' => '4',
        'cover_id' => '0',
        'music_title' => 'Killing Me',
        'music_artist' => 'iKON',
        'music_title_url' => 'killing-me~ikon',
        'music_shortlyric' => 'Jukgetda tto eogimeopsi
Neoui heunjeogi
Nama nal goeropinda
Jukgetda nam daehadeusi
Doraseonneunde
Wae naneun oeroulkka
Choyeonhal jul arasseo heeojime daehae
Geunde neol daleun seupgwan hana
Beori...',
        'music_downloads' => '508',
        'music_username' => 'maximus',
        'music_time' => '1533201328',
        'music_bitrate' => '192',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '201',
        'music_thumbs_time' => '100'),
    12 => array('music_id' => '1937400',
        'cat_id' => '1',
        'cat_level' => '4',
        'cover_id' => '0',
        'music_title' => 'You&amp;I',
        'music_artist' => 'A-YEON',
        'music_title_url' => 'youi~a-yeon',
        'music_shortlyric' => '',
        'music_downloads' => '14',
        'music_username' => '48music',
        'music_time' => '1533177113',
        'music_bitrate' => '320',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '210',
        'music_thumbs_time' => '105'),
    13 => array('music_id' => '1937309',
        'cat_id' => '1',
        'cat_level' => '1',
        'cover_id' => '0',
        'music_title' => 'Thương Muộn',
        'music_artist' => 'Lam Anh',
        'music_title_url' => 'thuong-muon~lam-anh',
        'music_shortlyric' => 'Muốn viết anh đôi hàng
Ngại lòng anh xót xa
Vì ngày mai em gái lên xe kết hoa hồng
Đốt hết bao hình bóng
Chờ giờ bước sang sông.

Chớ trách em thay lòng
Sầu này anh biết không
Vì đời người co...',
        'music_downloads' => '894',
        'music_username' => 'trongle1199',
        'music_time' => '1533145936',
        'music_bitrate' => '128',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '273',
        'music_thumbs_time' => '136'),
    14 => array('music_id' => '1937279',
        'cat_id' => '1',
        'cat_level' => '2',
        'cover_id' => '0',
        'music_title' => 'Darkside',
        'music_artist' => 'Alan Walker; Au/Ra; Tomine Harket',
        'music_title_url' => 'darkside~alan-walker-aura-tomine-harket',
        'music_shortlyric' => '[Verse 1: Tomine Harket]
We\'re not in love
[t1]Chúng ta không hề yêu nhau
We share no stories
[t1]Và câu chuyện của mỗi người cũng khác biệt
Just something in your eyes
[t1]Nhưng có điều gì đó tron...',
        'music_downloads' => '91',
        'music_username' => 'hoanggiang201166',
        'music_time' => '1533137615',
        'music_bitrate' => '128',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '224',
        'music_thumbs_time' => '112'),
    15 => array('music_id' => '1936836',
        'cat_id' => '1',
        'cat_level' => '5',
        'cover_id' => '0',
        'music_title' => 'Let Me Know',
        'music_artist' => 'Perfume',
        'music_title_url' => 'let-me-know~perfume',
        'music_shortlyric' => '',
        'music_downloads' => '24',
        'music_username' => '48music',
        'music_time' => '1533090137',
        'music_bitrate' => '128',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '202',
        'music_thumbs_time' => '101'),
    16 => array('music_id' => '1936678',
        'cat_id' => '1',
        'cat_level' => '1',
        'cover_id' => '0',
        'music_title' => 'Cô Nữ Sinh Gia Long',
        'music_artist' => 'Ngọc Ngữ; Châu Ngọc Hà',
        'music_title_url' => 'co-nu-sinh-gia-long~ngoc-ngu-chau-ngoc-ha',
        'music_shortlyric' => 'Đường xa cô gái Gia Long về đâu
Dừng chân cho nhắn thăm cô vài câu
Bao cô dưới cùng mái trường
Khi xưa đã tặng hoa mừng
Nay có còn theo bước thương không.

Người trai lính chiến em hằng chờ mong
Ng...',
        'music_downloads' => '148',
        'music_username' => 'trongle1199',
        'music_time' => '1533060875',
        'music_bitrate' => '128',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '279',
        'music_thumbs_time' => '139'),
    17 => array('music_id' => '1936640',
        'cat_id' => '1',
        'cat_level' => '1',
        'cover_id' => '0',
        'music_title' => 'Liên Khúc: Phiên Gác Đêm Xuân; Sắc Hoa Màu Nhớ',
        'music_artist' => 'Khải Đăng; Hà Thanh Xuân',
        'music_title_url' => 'lien-khuc-phien-gac-dem-xuan-sac-hoa-mau-nho~khai-dang-ha-thanh-xuan',
        'music_shortlyric' => '[Phiên Gác Đêm Xuân]

Đón Giao Thừa một phiên gác đêm
Chào xuân đến súng xa vang rền
Xác hoa tàn rơi trên báng súng
Ngỡ rằng pháo tung bay, ngờ đâu hoa lá rơi.

Bấy nhiêu tình là bao nước sông...',
        'music_downloads' => '362',
        'music_username' => 'trongle1199',
        'music_time' => '1533051153',
        'music_bitrate' => '128',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '548',
        'music_thumbs_time' => '53'),
    18 => array('music_id' => '1936467',
        'cat_id' => '1',
        'cat_level' => '2',
        'cover_id' => '0',
        'music_title' => 'Holy',
        'music_artist' => 'King Princess',
        'music_title_url' => 'holy~king-princess',
        'music_shortlyric' => '[Verse 1:]
I ain\'t got no time, no
\'Cause when this day is done
I still got shit to run
I could make it for you
\'Cause you\'re so beautiful
I\'d rather drink you up.

[Chorus:]
Honey, on your knees w...',
        'music_downloads' => '8',
        'music_username' => 'hoanggiang201166',
        'music_time' => '1533041328',
        'music_bitrate' => '96',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '174',
        'music_thumbs_time' => '13'),
    19 => array('music_id' => '1936466',
        'cat_id' => '1',
        'cat_level' => '2',
        'cover_id' => '0',
        'music_title' => 'High On Life',
        'music_artist' => 'Martin Garrix; Bonn',
        'music_title_url' => 'high-on-life~martin-garrix-bonn',
        'music_shortlyric' => '[Verse 1: BONN]
Killed the demons of my mind
Ever since you came around
We at river, running wild
How could I have been so blind?

[Pre-Chorus: BONN]
I just live a fast life
Forget about the past t...',
        'music_downloads' => '14',
        'music_username' => 'hoanggiang201166',
        'music_time' => '1533041181',
        'music_bitrate' => '96',
        'music_width' => '1920',
        'music_height' => '1080',
        'music_length' => '226',
        'music_thumbs_time' => '48'),
);

?>