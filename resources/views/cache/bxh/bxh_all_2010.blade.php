<?php 
if ( !ENV('IN_PHPBB') )
{
    die('Hacking attempt');
    exit;
}
global $hot_music_rows;
global $hot_video_rows;
    
$hot_music_rows = array (
  2 => 
  array (
    0 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    1 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    2 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    3 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    4 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    5 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    6 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    7 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    8 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    9 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    10 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    11 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    12 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    13 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    14 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    15 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    16 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    17 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    18 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    19 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'original' => 
      array (
        'cat_id' => 2,
        'cat_level' => 0,
        'cat_title' => 'Beat, Playback',
        'cat_short_title' => 'Playback',
        'cat_url' => 'beat-playback',
        'cat_music' => 0,
        'cat_order' => 99,
        'cat_last_hot_song' => '211567,264557,338772,1004561,1000012,1000031,1000034,1000035,1000233,1000238,1000239,1000240,1000282,1000283,1000286,1000661,1000693,1001273,1001274,1001275',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
  ),
  3 => 
  array (
    0 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    1 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    2 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    3 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    4 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    5 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    6 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    7 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    8 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    9 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    10 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    11 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    12 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    13 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    14 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    15 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    16 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    17 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    18 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    19 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'original' => 
      array (
        'cat_id' => 3,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Việt Nam',
        'cat_short_title' => 'Việt Nam',
        'cat_url' => 'vietnam',
        'cat_music' => 0,
        'cat_order' => 30,
        'cat_last_hot_song' => '1006026,236189,1003790,384996,1006028,1006027,402220,1000371,1000372,1000374,1000373,1000380,1000375,1000381,1001583,228385,228384,228359,228349,228315',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
  ),
  4 => 
  array (
    0 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    1 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    2 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    3 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    4 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    5 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    6 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    7 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    8 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    9 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    10 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    11 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    12 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    13 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    14 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    15 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    16 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    17 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    18 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    19 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'original' => 
      array (
        'cat_id' => 4,
        'cat_level' => 0,
        'cat_title' => 'Nhạc US-UK',
        'cat_short_title' => 'US-UK',
        'cat_url' => 'us-uk',
        'cat_music' => 0,
        'cat_order' => 40,
        'cat_last_hot_song' => '228563,1000009,1000015,1000030,1001347,1000278,1000399,1000548,1000852,1000851,1000734,1001355,1000916,1000917,1000918,1000919,1000920,1000921,1000922,1000923',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
  ),
  5 => 
  array (
    0 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    1 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    2 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    3 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    4 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    5 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    6 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    7 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    8 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    9 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    10 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    11 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    12 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    13 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    14 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    15 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    16 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    17 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    18 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    19 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'original' => 
      array (
        'cat_id' => 5,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hoa',
        'cat_short_title' => 'Hoa',
        'cat_url' => 'chinese',
        'cat_music' => 0,
        'cat_order' => 50,
        'cat_last_hot_song' => '1002898,1002897,1002899,1002900,1002886,1002805,1002806,1002807,1002808,1002809,1002810,1002811,1002813,1002814,1002815,1002816,1002817,1002818,1002819,1002822',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
  ),
  6 => 
  array (
    0 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    1 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    2 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    3 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    4 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    5 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    6 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    7 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    8 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    9 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    10 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    11 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    12 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    13 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    14 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    15 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    16 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    17 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    18 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    19 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'original' => 
      array (
        'cat_id' => 6,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Hàn',
        'cat_short_title' => 'Hàn',
        'cat_url' => 'korea',
        'cat_music' => 0,
        'cat_order' => 60,
        'cat_last_hot_song' => '1000202,1000208,1000943,1001224,1001231,1002827,1001841,1001976,1002825,1001642,1001843,1001844,1001845,1001846,1001847,1001848,1001849,1001850,1001852,1001853',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
  ),
  7 => 
  array (
    0 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    1 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    2 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    3 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    4 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    5 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    6 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    7 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    8 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    9 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    10 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    11 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    12 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    13 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    14 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    15 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    16 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    17 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    18 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    19 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'original' => 
      array (
        'cat_id' => 7,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Nhật',
        'cat_short_title' => 'Nhật',
        'cat_url' => 'japan',
        'cat_music' => 0,
        'cat_order' => 70,
        'cat_last_hot_song' => '1001189,1003155,1001522,1001544,1001721,1001840,1001872,1001938,1002101,1002476,1002604,1002823,1002824,1003156,1003157,1003159,1003160,1003150,1003154,1003151',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
  ),
  8 => 
  array (
    0 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    1 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    2 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    3 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    4 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    5 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    6 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    7 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    8 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    9 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    10 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    11 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    12 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    13 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    14 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    15 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    16 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    17 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    18 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    19 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 8,
        'cat_level' => 0,
        'cat_title' => 'Nhạc Pháp',
        'cat_short_title' => 'Pháp',
        'cat_url' => 'france',
        'cat_music' => 0,
        'cat_order' => 80,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
  ),
  9 => 
  array (
    0 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    1 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    2 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    3 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    4 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    5 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    6 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    7 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    8 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    9 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    10 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    11 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    12 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    13 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    14 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    15 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    16 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    17 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    18 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
    19 => 
    App\Models\CategoryCsnModel::__set_state(array(
       'timestamps' => false,
       'table' => 'csn_category',
       'primaryKey' => 'cat_id',
       'fillable' => 
      array (
        0 => 'cat_level',
        1 => 'cat_title',
        2 => 'cat_short_title',
        3 => 'cat_url',
        4 => 'cat_music',
        5 => 'cat_order',
        6 => 'cat_last_hot_song',
      ),
       'connection' => 'mysql',
       'keyType' => 'int',
       'incrementing' => true,
       'with' => 
      array (
      ),
       'withCount' => 
      array (
      ),
       'perPage' => 15,
       'exists' => true,
       'wasRecentlyCreated' => false,
       'attributes' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'original' => 
      array (
        'cat_id' => 9,
        'cat_level' => 0,
        'cat_title' => 'Nhạc nước khác',
        'cat_short_title' => 'Nước khác',
        'cat_url' => 'other',
        'cat_music' => 0,
        'cat_order' => 90,
        'cat_last_hot_song' => '',
      ),
       'changes' => 
      array (
      ),
       'casts' => 
      array (
      ),
       'dates' => 
      array (
      ),
       'dateFormat' => NULL,
       'appends' => 
      array (
      ),
       'dispatchesEvents' => 
      array (
      ),
       'observables' => 
      array (
      ),
       'relations' => 
      array (
      ),
       'touches' => 
      array (
      ),
       'hidden' => 
      array (
      ),
       'visible' => 
      array (
      ),
       'guarded' => 
      array (
        0 => '*',
      ),
    )),
  ),
);
$hot_video_rows = array (
  1 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1944687,
      'music_title_url' => 'la-thu-tran-the~giang-tu-ngoc-minh-dan-nguyen',
      'music_title' => 'Lá Thư Trần Thế',
      'music_artist' => 'Giang Tử;Ngọc Minh;Đan Nguyên',
      'music_artist_id' => '11918;2179;2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539060341,
      'music_last_update_time' => 1534594891,
      'music_title_search' => 'la thu chan the',
      'music_artist_search' => '; dang tu; ngoc minh; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Hoài Linh',
      'music_album' => '',
      'music_listen' => 4340,
      'music_track_id' => 0,
      'music_filename' => '1944687-03881e75.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'Lạy chúa con là lính trận ngoài biên
Vì xa thành phố xa quá nên quên
Đêm nay ngôi hai trời xuống
Ánh sao lung linh muôn màu
Con tưởng hoả châu soi tuyến đầu.

Lạy chúa con là thiếu phụ miền quê
Chồ...',
    ),
    1 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1167971,
      'music_title_url' => 'nhu-da-dau-yeu~bang-kieu-minh-tuyet',
      'music_title' => 'Như Đã Dấu Yêu',
      'music_artist' => 'Bằng Kiều;Minh Tuyết',
      'music_artist_id' => '1258;30',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538965633,
      'music_last_update_time' => 1384137536,
      'music_title_search' => 'nhu da dau iu',
      'music_artist_search' => '; bang kiu; minh tit;',
      'music_album_search' => '',
      'music_composer' => 'Đức Huy',
      'music_album' => '',
      'music_listen' => 167988,
      'music_track_id' => 0,
      'music_filename' => '1167971-156fe2e8.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Trong đôi mắt anh, em là tất cả
Là niềm vui, là hạnh phúc, anh dấu yêu
Nhưng anh ước gì
Mình gặp nhau, lúc anh chưa ràng buộc
Và em chưa chưa thuộc về ai. 

Em sẽ cố quên khung trời hoa mộng
Ngày h...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1172414,
      'music_title_url' => 'chan-troi-tim~huong-lan-thai-chau',
      'music_title' => 'Chân Trời Tím',
      'music_artist' => 'Hương Lan;Thái Châu',
      'music_artist_id' => '1631;4648',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538880857,
      'music_last_update_time' => 1384997142,
      'music_title_search' => 'chan choi tim',
      'music_artist_search' => '; hung lan; thai chau;',
      'music_album_search' => '',
      'music_composer' => 'Trần Thiện Thanh',
      'music_album' => '',
      'music_listen' => 17493,
      'music_track_id' => 0,
      'music_filename' => '1172414-f611e461.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Anh hứa đưa em về nơi chân trời tím
Nghe gió êm qua trái tim từng hoàng hôn
Anh chỉ muốn duyên tình hai chúng ta
Như ánh sao cao vút cao xa trần gian.

Anh hứa đưa em về nơi chân trời tím
Gom hết m...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1061549,
      'music_title_url' => 'lanh-lung~nhu-quynh',
      'music_title' => 'Lạnh Lùng',
      'music_artist' => 'Như Quỳnh',
      'music_artist_id' => '32',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538621579,
      'music_last_update_time' => 1359018580,
      'music_title_search' => 'lanh lung',
      'music_artist_search' => '; nhu qinh;',
      'music_album_search' => '',
      'music_composer' => 'Đinh Việt Lang',
      'music_album' => '',
      'music_listen' => 36987,
      'music_track_id' => 0,
      'music_filename' => '1061549-3fe3f872.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Anh nỡ lạnh lùng đến thế sao 
Tim em tan nát tự hôm nào 
Giờ đây đã nát càng thêm nát 
Muốn nói mà sao vẫn nghẹn ngào. 

Sao anh không nói một lời gì 
Dầu chỉ một lời không đáng chi 
Cũng sẽ làm lò...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1441576,
      'music_title_url' => 'lien-khuc-hoi-nguoi-tinh-troi-con-mua-mai-mua-tren-bien-vang~minh-tuyet',
      'music_title' => 'Liên Khúc: Hỡi Người Tình; Trời Còn Mưa Mãi; Mưa Trên Biển Vắng',
      'music_artist' => 'Minh Tuyết',
      'music_artist_id' => '30',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538888440,
      'music_last_update_time' => 1420977680,
      'music_title_search' => 'lin khuc; hoi ngui tinh; choi con mua mai; mua chen bin vang',
      'music_artist_search' => '; minh tit;',
      'music_album_search' => '',
      'music_composer' => 'Lời: Khúc Lan; Nhật Ngân',
      'music_album' => '',
      'music_listen' => 9689,
      'music_track_id' => 0,
      'music_filename' => '1441576-b3748341.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Hỡi Người Tình]

Trời vẫn cứ mưa mãi cho lòng em rã rời
Chờ anh trong đêm nay mi em đẫm lệ rơi
Người yêu hỡi xót xa nào
Chất ngất trong tâm hồn bấy lâu
Để đêm nay đành khóc riêng mình thôi.

Ngày...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1168673,
      'music_title_url' => 'han-mac-tu~mai-thien-van',
      'music_title' => 'Hàn Mặc Tử',
      'music_artist' => 'Mai Thiên Vân',
      'music_artist_id' => '2316',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538670062,
      'music_last_update_time' => 1384235796,
      'music_title_search' => 'han mac tu',
      'music_artist_search' => '; mai thin van;',
      'music_album_search' => '',
      'music_composer' => 'Trần Thiện Thanh',
      'music_album' => '',
      'music_listen' => 67363,
      'music_track_id' => 0,
      'music_filename' => '1168673-1263ecaf.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '&quot;Trời hỡi,làm sao khi khát đói 
Gió trăng có sẵn làm sao ăn 
Làm sao giết được người trong mộng 
Để trả thù duyên kiếp phũ phàng.
 
Ai mua trăng, tôi bán trăng cho
Trăng nằm im trên cành liễu...',
    ),
    6 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1428325,
      'music_title_url' => 'con-duong-mang-ten-em~nhu-quynh-truong-vu',
      'music_title' => 'Con Đường Mang Tên Em',
      'music_artist' => 'Như Quỳnh;Trường Vũ',
      'music_artist_id' => '32;1163',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538987428,
      'music_last_update_time' => 1419078298,
      'music_title_search' => 'con dung mang ten em',
      'music_artist_search' => '; nhu qinh; chung vu;',
      'music_album_search' => '',
      'music_composer' => 'Trúc Phương',
      'music_album' => '',
      'music_listen' => 245893,
      'music_track_id' => 0,
      'music_filename' => '1428325-6ef2f4a5.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Đường xưa anh vẫn gọi tên em ư ừ 
Sánh bước bao chiều gió dịu êm 
Nay anh tìm lại con đường cũ
Chỉ thấy quạnh hiu gió bên thềm.

Trở lại chuyện hai chúng mình
Khi em với anh vừa biết đam mê
Tình yê...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1161272,
      'music_title_url' => 'con-duong-mau-xanh~thuy-tien-tran-thai-hoa',
      'music_title' => 'Con Đường Màu Xanh',
      'music_artist' => 'Thuỷ Tiên;Trần Thái Hoà',
      'music_artist_id' => '60;2287',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538614214,
      'music_last_update_time' => 1383216774,
      'music_title_search' => 'con dung mau xanh',
      'music_artist_search' => '; thi tin; chan thai hoa;',
      'music_album_search' => '',
      'music_composer' => 'Trịnh Nam Sơn',
      'music_album' => '',
      'music_listen' => 32901,
      'music_track_id' => 0,
      'music_filename' => '1161272-cd9bffc8.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Này người yêu xin quay mặt đi
Đã hết yêu thương nhau rồi
Này người yêu em đi về đi
Nhưng xin em đừng hờn trách tôi
Vì giờ đây trái tim đã giá lạnh.

Từng giọt mưa bay trong chờ mong
Khẽ xoá môi son...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1523550,
      'music_title_url' => 'keep-on-going~binz',
      'music_title' => 'Keep On Going',
      'music_artist' => 'Binz',
      'music_artist_id' => '1336',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 8,
      'cover_id' => 0,
      'music_download_time' => 1538527735,
      'music_last_update_time' => 1463186764,
      'music_title_search' => 'kep on going',
      'music_artist_search' => '; binz;',
      'music_album_search' => '',
      'music_composer' => 'Binz',
      'music_album' => '',
      'music_listen' => 1457,
      'music_track_id' => 0,
      'music_filename' => '1523550-5a23e8d7.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Keep on going you just gotta fight it
Keep on going cause its not too late
You cant back down
You cant back down..

Keep on goin, không được bước lùi
Kệ mẹ dù cuộc sống này rượt đuổi
Bỏ hết đi, dù...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1836569,
      'music_title_url' => 'dung-noi-yeu-toi~bang-tam',
      'music_title' => 'Đừng Nói Yêu Tôi',
      'music_artist' => 'Băng Tâm',
      'music_artist_id' => '1359',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538697962,
      'music_last_update_time' => 1508726170,
      'music_title_search' => 'dung noi iu toi',
      'music_artist_search' => '; bang tam;',
      'music_album_search' => '',
      'music_composer' => 'Anh Bằng',
      'music_album' => '',
      'music_listen' => 150136,
      'music_track_id' => 0,
      'music_filename' => '1836569-fd87c986.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Đừng, đừng nói yêu tôi như loài chim trời biết nói
Đừng, đừng nói yêu tôi như đuà vui trên môi
Đừng, đừng nói yêu tôi, đừng nói yêu tôi chữ yêu không còn nghĩa
Giữa đôi ta từ đây
Chữ yêu đương trên...',
    ),
    10 => 
    array (
      'music_downloads_today' => 6,
      'music_id' => 1836518,
      'music_title_url' => 'lien-khuc-bai-khong-ten-so-2-bai-khong-ten-cuoi-cung~ho-hoang-yen-quoc-khanh',
      'music_title' => 'Liên Khúc: Bài Không Tên Số 2; Bài Không Tên Cuối Cùng',
      'music_artist' => 'Hồ Hoàng Yến;Quốc Khanh',
      'music_artist_id' => '7591;2449',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539062462,
      'music_last_update_time' => 1508724995,
      'music_title_search' => 'lin khuc; bai khong ten xo 2; bai khong ten cui cung',
      'music_artist_search' => '; ho hoang in; quc khanh;',
      'music_album_search' => '',
      'music_composer' => 'Vũ Thành An',
      'music_album' => '',
      'music_listen' => 67420,
      'music_track_id' => 0,
      'music_filename' => '1836518-4c160a43.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '[Bài Không Tên Số 2]

Lòng người như lá úa, trong cơn mưa chiều 
Nhiều cơn gió cuốn, xoay xoay trong hồn 
Và cơn đau này vẫn còn đây.

Chiều về không buông nắng, cho mây âm thầm 
Một mình trong chi...',
    ),
    11 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1004736,
      'music_title_url' => 'loi-chua-noi~trinh-thang-binh',
      'music_title' => 'Lời Chưa Nói',
      'music_artist' => 'Trịnh Thăng Bình',
      'music_artist_id' => '2106',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539053680,
      'music_last_update_time' => 1474688713,
      'music_title_search' => 'loi chua noi',
      'music_artist_search' => '; chinh thang binh;',
      'music_album_search' => '',
      'music_composer' => 'Trịnh Thăng Bình',
      'music_album' => '',
      'music_listen' => 234781,
      'music_track_id' => 0,
      'music_filename' => '1004736-42e73e4f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Những câu ân tình chưa nói 
Giờ bỗng tan như làn mây khói
Khi tình yêu đã hết thật rồi
Giờ làm gì cũng thế thôi.

Còn thiếu nhau bao lời xin lỗi
Định nói ra nhưng rồi lại thôi
Phút giây mong chờ, c...',
    ),
    12 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1085648,
      'music_title_url' => 'yeu-lai-tu-dau~khac-viet',
      'music_title' => 'Yêu Lại Từ Đầu',
      'music_artist' => 'Khắc Việt',
      'music_artist_id' => '2128',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539053414,
      'music_last_update_time' => 1367461626,
      'music_title_search' => 'iu lai tu dau',
      'music_artist_search' => '; khac vit;',
      'music_album_search' => '',
      'music_composer' => 'Khắc Việt',
      'music_album' => '',
      'music_listen' => 244734,
      'music_track_id' => 0,
      'music_filename' => '1085648-58f9d85b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Em ơi! Hình như chúng mình
Đã hết yêu nhau mất rồi
Tại vì sao em hãy nói đi
Hay vì anh vô tâm hững hờ
Nên vô tình đánh mất hai ta.

Rất khó để đến với nhau
Đừng buông xuôi tình yêu chúng mình
Mình...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1166454,
      'music_title_url' => 'lien-khuc-tien-dua-ve-mai-nha-xua~khanh-ly-thanh-tuyen',
      'music_title' => 'Liên Khúc: Tiễn Đưa; Về Mái Nhà Xưa',
      'music_artist' => 'Khánh Ly;Thanh Tuyền',
      'music_artist_id' => '119;4009',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538663282,
      'music_last_update_time' => 1383903412,
      'music_title_search' => 'lin khuc; tin dua; ve mai nha xua',
      'music_artist_search' => '; khanh li; thanh tin;',
      'music_album_search' => '',
      'music_composer' => 'Song Ngọc; Thơ: Nguyên Sa; Nguyễn Văn Đông',
      'music_album' => '',
      'music_listen' => 38767,
      'music_track_id' => 0,
      'music_filename' => '1166454-ae09ff98.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Tiễn Đưa]

Người về chiều mai hay đêm nay 
Người sắp đi hay đã đi rồi 
Muôn vị hành tinh rung rung 
Lung linh thềm ga vắng 
Hay rượu tàn rung trên môi.
 
Người về nhặt sao rơi đêm nay 
Đường sắt k...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1174458,
      'music_title_url' => 'paris-co-gi-la-khong-em~y-lan',
      'music_title' => 'Paris Có Gì Lạ Không Em',
      'music_artist' => 'Ý Lan',
      'music_artist_id' => '6201',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538526903,
      'music_last_update_time' => 1385400745,
      'music_title_search' => 'parix co d la khong em',
      'music_artist_search' => '; i lan;',
      'music_album_search' => '',
      'music_composer' => 'Ngô Thuỵ Miên',
      'music_album' => '',
      'music_listen' => 20832,
      'music_track_id' => 0,
      'music_filename' => '1174458-c0dfb69b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Paris có gì lạ không em
Mai anh về em có còn ngoan
Mùa xuân hoa lá vương đầy ngõ
Em có tìm anh trong cánh chim.

Paris có gì lạ không em
Mai anh về giữa bến sông seine
Anh về giữa một giòng sông tr...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1400402,
      'music_title_url' => 'dem-do-thi~mai-le-huyen-anh-minh',
      'music_title' => 'Đêm Đô Thị',
      'music_artist' => 'Mai Lệ Huyền;Ánh Minh',
      'music_artist_id' => '13712;7577',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538567460,
      'music_last_update_time' => 1415343172,
      'music_title_search' => 'dem do thi',
      'music_artist_search' => '; mai le hin; em minh;',
      'music_album_search' => '',
      'music_composer' => 'Y Vân',
      'music_album' => '',
      'music_listen' => 11427,
      'music_track_id' => 0,
      'music_filename' => '1400402-e051d41a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Màn đêm xuống dần, muôn ánh đèn đột nhiên như ngời sáng
Kìa bao phố phường, bao mái lầu chìm trong bóng đêm
Lá lá lá lá la la, lá lá lá lá la
Lá lá lá lá la la, lá lá lá lá la
Đời đẹp quá á a à á a...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1474137,
      'music_title_url' => 'mo-mot-tinh-yeu~nhu-quynh-minh-tuyet',
      'music_title' => 'Mơ Một Tình Yêu',
      'music_artist' => 'Như Quỳnh;Minh Tuyết',
      'music_artist_id' => '32;30',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539010295,
      'music_last_update_time' => 1427516598,
      'music_title_search' => 'mo 1 tinh iu',
      'music_artist_search' => '; nhu qinh; minh tit;',
      'music_album_search' => '',
      'music_composer' => 'Tùng Châu; Thái Thịnh',
      'music_album' => '',
      'music_listen' => 119197,
      'music_track_id' => 0,
      'music_filename' => '1474137-1c92da39.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Trời cao ngàn ánh sao, em nhìn theo biết nơi phương nào 
Ai sẽ đưa em vào tình ái ngọt ngào
Này đây niềm ước mơ, mà em đã vẫn luôn mong chờ 
Chờ anh đến hoà chung với em cùng nhịp trái tim.

[ĐK:]...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1479112,
      'music_title_url' => 'lien-khuc-doan-chuan-tu-linh~lam-nhat-tien-nguyen-hong-nhung',
      'music_title' => 'Liên Khúc Đoàn Chuẩn - Từ Linh',
      'music_artist' => 'Lâm Nhật Tiến;Nguyễn Hồng Nhung',
      'music_artist_id' => '308;2516',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538597821,
      'music_last_update_time' => 1429856636,
      'music_title_search' => 'lin khuc doan chuan; tu linh',
      'music_artist_search' => '; lam nhat tin; ngin hong nhung;',
      'music_album_search' => '',
      'music_composer' => 'Đoàn Chuẩn - Từ Linh',
      'music_album' => '',
      'music_listen' => 8161,
      'music_track_id' => 0,
      'music_filename' => '1479112-1e35d109.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Lá Thư]

Nhớ tới mùa thu năm xưa gửi nhau
Phong thư ngào ngạt hương
Nét bút đa tình lả lơi
Nhớ phút ngập ngừng lòng giấy viết rằng
Chờ đến kiếp nào, tình đầu trong gió mùa
Người yêu ơi.

Em nay về...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1548612,
      'music_title_url' => 'teen-vong-co~vinh-thuyen-kim',
      'music_title' => 'Teen Vọng Cổ',
      'music_artist' => 'Vĩnh Thuyên Kim',
      'music_artist_id' => '754',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538573256,
      'music_last_update_time' => 1441730865,
      'music_title_search' => 'ten vong co',
      'music_artist_search' => '; vinh thin kim;',
      'music_album_search' => '',
      'music_composer' => 'Trần Anh Khôi',
      'music_album' => '',
      'music_listen' => 14192,
      'music_track_id' => 0,
      'music_filename' => '1548612-fbf07035.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Xa anh mới ban chiều
Thế mà lòng sao buồn hiu
Em nhớ anh nhiều, mong được ở bên người yêu
Để nói bao điều là sao ta
Nói chung là yêu đó
À mà đó có phải là yêu không
Mà sao vắng anh thì buồn.

[ĐK:]...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 307812,
      'music_title_url' => 'tinh-dep-la-tinh-buon~khanh-don',
      'music_title' => 'Tình Đẹp Là Tình Buồn',
      'music_artist' => 'Khánh Đơn',
      'music_artist_id' => '2012',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529494733,
      'music_last_update_time' => 1341453380,
      'music_title_search' => 'tinh dep la tinh bun',
      'music_artist_search' => '; khanh don;',
      'music_album_search' => '',
      'music_composer' => 'Khánh Đơn',
      'music_album' => '',
      'music_listen' => 21026,
      'music_track_id' => 0,
      'music_filename' => '307812-b99f5772.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Một mình nhìn sao trên trời, lặng thầm giọt nước mắt rơi
Lại nhớ đến em bởi vẫn yêu em thế thôi
Người ta luôn nói với nhau, tình nếu dở dang mới đẹp
Quen nhau, yêu nhau, xa nhau thì mới nhớ nhau....',
    ),
    20 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1944687,
      'music_title_url' => 'la-thu-tran-the~giang-tu-ngoc-minh-dan-nguyen',
      'music_title' => 'Lá Thư Trần Thế',
      'music_artist' => 'Giang Tử;Ngọc Minh;Đan Nguyên',
      'music_artist_id' => '11918;2179;2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539060341,
      'music_last_update_time' => 1534594891,
      'music_title_search' => 'la thu chan the',
      'music_artist_search' => '; dang tu; ngoc minh; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Hoài Linh',
      'music_album' => '',
      'music_listen' => 4340,
      'music_track_id' => 0,
      'music_filename' => '1944687-03881e75.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'Lạy chúa con là lính trận ngoài biên
Vì xa thành phố xa quá nên quên
Đêm nay ngôi hai trời xuống
Ánh sao lung linh muôn màu
Con tưởng hoả châu soi tuyến đầu.

Lạy chúa con là thiếu phụ miền quê
Chồ...',
      'music_artist_html' => '<a href="/ca-si/Giang-Tu~Y3NuX2FydGlzdH4xMTkxOA==.html">Giang Tử</a>, <a href="/ca-si/Ngoc-Minh~Y3NuX2FydGlzdH4yMTc5.html">Ngọc Minh</a>, <a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1167971,
      'music_title_url' => 'nhu-da-dau-yeu~bang-kieu-minh-tuyet',
      'music_title' => 'Như Đã Dấu Yêu',
      'music_artist' => 'Bằng Kiều;Minh Tuyết',
      'music_artist_id' => '1258;30',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538965633,
      'music_last_update_time' => 1384137536,
      'music_title_search' => 'nhu da dau iu',
      'music_artist_search' => '; bang kiu; minh tit;',
      'music_album_search' => '',
      'music_composer' => 'Đức Huy',
      'music_album' => '',
      'music_listen' => 167988,
      'music_track_id' => 0,
      'music_filename' => '1167971-156fe2e8.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Trong đôi mắt anh, em là tất cả
Là niềm vui, là hạnh phúc, anh dấu yêu
Nhưng anh ước gì
Mình gặp nhau, lúc anh chưa ràng buộc
Và em chưa chưa thuộc về ai. 

Em sẽ cố quên khung trời hoa mộng
Ngày h...',
      'music_artist_html' => '<a href="/ca-si/Bang-Kieu~Y3NuX2FydGlzdH4xMjU4.html">Bằng Kiều</a>, <a href="/ca-si/Minh-Tuyet~Y3NuX2FydGlzdH4zMA==.html">Minh Tuyết</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1172414,
      'music_title_url' => 'chan-troi-tim~huong-lan-thai-chau',
      'music_title' => 'Chân Trời Tím',
      'music_artist' => 'Hương Lan;Thái Châu',
      'music_artist_id' => '1631;4648',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538880857,
      'music_last_update_time' => 1384997142,
      'music_title_search' => 'chan choi tim',
      'music_artist_search' => '; hung lan; thai chau;',
      'music_album_search' => '',
      'music_composer' => 'Trần Thiện Thanh',
      'music_album' => '',
      'music_listen' => 17493,
      'music_track_id' => 0,
      'music_filename' => '1172414-f611e461.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Anh hứa đưa em về nơi chân trời tím
Nghe gió êm qua trái tim từng hoàng hôn
Anh chỉ muốn duyên tình hai chúng ta
Như ánh sao cao vút cao xa trần gian.

Anh hứa đưa em về nơi chân trời tím
Gom hết m...',
      'music_artist_html' => '<a href="/ca-si/Huong-Lan~Y3NuX2FydGlzdH4xNjMx.html">Hương Lan</a>, <a href="/ca-si/Thai-Chau~Y3NuX2FydGlzdH40NjQ4.html">Thái Châu</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1061549,
      'music_title_url' => 'lanh-lung~nhu-quynh',
      'music_title' => 'Lạnh Lùng',
      'music_artist' => 'Như Quỳnh',
      'music_artist_id' => '32',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538621579,
      'music_last_update_time' => 1359018580,
      'music_title_search' => 'lanh lung',
      'music_artist_search' => '; nhu qinh;',
      'music_album_search' => '',
      'music_composer' => 'Đinh Việt Lang',
      'music_album' => '',
      'music_listen' => 36987,
      'music_track_id' => 0,
      'music_filename' => '1061549-3fe3f872.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Anh nỡ lạnh lùng đến thế sao 
Tim em tan nát tự hôm nào 
Giờ đây đã nát càng thêm nát 
Muốn nói mà sao vẫn nghẹn ngào. 

Sao anh không nói một lời gì 
Dầu chỉ một lời không đáng chi 
Cũng sẽ làm lò...',
      'music_artist_html' => '<a href="/ca-si/Nhu-Quynh~Y3NuX2FydGlzdH4zMg==.html">Như Quỳnh</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1441576,
      'music_title_url' => 'lien-khuc-hoi-nguoi-tinh-troi-con-mua-mai-mua-tren-bien-vang~minh-tuyet',
      'music_title' => 'Liên Khúc: Hỡi Người Tình; Trời Còn Mưa Mãi; Mưa Trên Biển Vắng',
      'music_artist' => 'Minh Tuyết',
      'music_artist_id' => '30',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538888440,
      'music_last_update_time' => 1420977680,
      'music_title_search' => 'lin khuc; hoi ngui tinh; choi con mua mai; mua chen bin vang',
      'music_artist_search' => '; minh tit;',
      'music_album_search' => '',
      'music_composer' => 'Lời: Khúc Lan; Nhật Ngân',
      'music_album' => '',
      'music_listen' => 9689,
      'music_track_id' => 0,
      'music_filename' => '1441576-b3748341.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Hỡi Người Tình]

Trời vẫn cứ mưa mãi cho lòng em rã rời
Chờ anh trong đêm nay mi em đẫm lệ rơi
Người yêu hỡi xót xa nào
Chất ngất trong tâm hồn bấy lâu
Để đêm nay đành khóc riêng mình thôi.

Ngày...',
      'music_artist_html' => '<a href="/ca-si/Minh-Tuyet~Y3NuX2FydGlzdH4zMA==.html">Minh Tuyết</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1168673,
      'music_title_url' => 'han-mac-tu~mai-thien-van',
      'music_title' => 'Hàn Mặc Tử',
      'music_artist' => 'Mai Thiên Vân',
      'music_artist_id' => '2316',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538670062,
      'music_last_update_time' => 1384235796,
      'music_title_search' => 'han mac tu',
      'music_artist_search' => '; mai thin van;',
      'music_album_search' => '',
      'music_composer' => 'Trần Thiện Thanh',
      'music_album' => '',
      'music_listen' => 67363,
      'music_track_id' => 0,
      'music_filename' => '1168673-1263ecaf.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '&quot;Trời hỡi,làm sao khi khát đói 
Gió trăng có sẵn làm sao ăn 
Làm sao giết được người trong mộng 
Để trả thù duyên kiếp phũ phàng.
 
Ai mua trăng, tôi bán trăng cho
Trăng nằm im trên cành liễu...',
      'music_artist_html' => '<a href="/ca-si/Mai-Thien-Van~Y3NuX2FydGlzdH4yMzE2.html">Mai Thiên Vân</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1428325,
      'music_title_url' => 'con-duong-mang-ten-em~nhu-quynh-truong-vu',
      'music_title' => 'Con Đường Mang Tên Em',
      'music_artist' => 'Như Quỳnh;Trường Vũ',
      'music_artist_id' => '32;1163',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538987428,
      'music_last_update_time' => 1419078298,
      'music_title_search' => 'con dung mang ten em',
      'music_artist_search' => '; nhu qinh; chung vu;',
      'music_album_search' => '',
      'music_composer' => 'Trúc Phương',
      'music_album' => '',
      'music_listen' => 245893,
      'music_track_id' => 0,
      'music_filename' => '1428325-6ef2f4a5.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Đường xưa anh vẫn gọi tên em ư ừ 
Sánh bước bao chiều gió dịu êm 
Nay anh tìm lại con đường cũ
Chỉ thấy quạnh hiu gió bên thềm.

Trở lại chuyện hai chúng mình
Khi em với anh vừa biết đam mê
Tình yê...',
      'music_artist_html' => '<a href="/ca-si/Nhu-Quynh~Y3NuX2FydGlzdH4zMg==.html">Như Quỳnh</a>, <a href="/ca-si/Truong-Vu~Y3NuX2FydGlzdH4xMTYz.html">Trường Vũ</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1161272,
      'music_title_url' => 'con-duong-mau-xanh~thuy-tien-tran-thai-hoa',
      'music_title' => 'Con Đường Màu Xanh',
      'music_artist' => 'Thuỷ Tiên;Trần Thái Hoà',
      'music_artist_id' => '60;2287',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538614214,
      'music_last_update_time' => 1383216774,
      'music_title_search' => 'con dung mau xanh',
      'music_artist_search' => '; thi tin; chan thai hoa;',
      'music_album_search' => '',
      'music_composer' => 'Trịnh Nam Sơn',
      'music_album' => '',
      'music_listen' => 32901,
      'music_track_id' => 0,
      'music_filename' => '1161272-cd9bffc8.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Này người yêu xin quay mặt đi
Đã hết yêu thương nhau rồi
Này người yêu em đi về đi
Nhưng xin em đừng hờn trách tôi
Vì giờ đây trái tim đã giá lạnh.

Từng giọt mưa bay trong chờ mong
Khẽ xoá môi son...',
      'music_artist_html' => '<a href="/ca-si/Thuy-Tien~Y3NuX2FydGlzdH42MA==.html">Thuỷ Tiên</a>, <a href="/ca-si/Tran-Thai-Hoa~Y3NuX2FydGlzdH4yMjg3.html">Trần Thái Hoà</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1523550,
      'music_title_url' => 'keep-on-going~binz',
      'music_title' => 'Keep On Going',
      'music_artist' => 'Binz',
      'music_artist_id' => '1336',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 8,
      'cover_id' => 0,
      'music_download_time' => 1538527735,
      'music_last_update_time' => 1463186764,
      'music_title_search' => 'kep on going',
      'music_artist_search' => '; binz;',
      'music_album_search' => '',
      'music_composer' => 'Binz',
      'music_album' => '',
      'music_listen' => 1457,
      'music_track_id' => 0,
      'music_filename' => '1523550-5a23e8d7.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Keep on going you just gotta fight it
Keep on going cause its not too late
You cant back down
You cant back down..

Keep on goin, không được bước lùi
Kệ mẹ dù cuộc sống này rượt đuổi
Bỏ hết đi, dù...',
      'music_artist_html' => '<a href="/ca-si/Binz~Y3NuX2FydGlzdH4xMzM2.html">Binz</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1836569,
      'music_title_url' => 'dung-noi-yeu-toi~bang-tam',
      'music_title' => 'Đừng Nói Yêu Tôi',
      'music_artist' => 'Băng Tâm',
      'music_artist_id' => '1359',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538697962,
      'music_last_update_time' => 1508726170,
      'music_title_search' => 'dung noi iu toi',
      'music_artist_search' => '; bang tam;',
      'music_album_search' => '',
      'music_composer' => 'Anh Bằng',
      'music_album' => '',
      'music_listen' => 150136,
      'music_track_id' => 0,
      'music_filename' => '1836569-fd87c986.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Đừng, đừng nói yêu tôi như loài chim trời biết nói
Đừng, đừng nói yêu tôi như đuà vui trên môi
Đừng, đừng nói yêu tôi, đừng nói yêu tôi chữ yêu không còn nghĩa
Giữa đôi ta từ đây
Chữ yêu đương trên...',
      'music_artist_html' => '<a href="/ca-si/Bang-Tam~Y3NuX2FydGlzdH4xMzU5.html">Băng Tâm</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 6,
      'music_id' => 1836518,
      'music_title_url' => 'lien-khuc-bai-khong-ten-so-2-bai-khong-ten-cuoi-cung~ho-hoang-yen-quoc-khanh',
      'music_title' => 'Liên Khúc: Bài Không Tên Số 2; Bài Không Tên Cuối Cùng',
      'music_artist' => 'Hồ Hoàng Yến;Quốc Khanh',
      'music_artist_id' => '7591;2449',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539062462,
      'music_last_update_time' => 1508724995,
      'music_title_search' => 'lin khuc; bai khong ten xo 2; bai khong ten cui cung',
      'music_artist_search' => '; ho hoang in; quc khanh;',
      'music_album_search' => '',
      'music_composer' => 'Vũ Thành An',
      'music_album' => '',
      'music_listen' => 67420,
      'music_track_id' => 0,
      'music_filename' => '1836518-4c160a43.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '[Bài Không Tên Số 2]

Lòng người như lá úa, trong cơn mưa chiều 
Nhiều cơn gió cuốn, xoay xoay trong hồn 
Và cơn đau này vẫn còn đây.

Chiều về không buông nắng, cho mây âm thầm 
Một mình trong chi...',
      'music_artist_html' => '<a href="/ca-si/Ho-Hoang-Yen~Y3NuX2FydGlzdH43NTkx.html">Hồ Hoàng Yến</a>, <a href="/ca-si/Quoc-Khanh~Y3NuX2FydGlzdH4yNDQ5.html">Quốc Khanh</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1004736,
      'music_title_url' => 'loi-chua-noi~trinh-thang-binh',
      'music_title' => 'Lời Chưa Nói',
      'music_artist' => 'Trịnh Thăng Bình',
      'music_artist_id' => '2106',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539053680,
      'music_last_update_time' => 1474688713,
      'music_title_search' => 'loi chua noi',
      'music_artist_search' => '; chinh thang binh;',
      'music_album_search' => '',
      'music_composer' => 'Trịnh Thăng Bình',
      'music_album' => '',
      'music_listen' => 234781,
      'music_track_id' => 0,
      'music_filename' => '1004736-42e73e4f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Những câu ân tình chưa nói 
Giờ bỗng tan như làn mây khói
Khi tình yêu đã hết thật rồi
Giờ làm gì cũng thế thôi.

Còn thiếu nhau bao lời xin lỗi
Định nói ra nhưng rồi lại thôi
Phút giây mong chờ, c...',
      'music_artist_html' => '<a href="/ca-si/Trinh-Thang-Binh~Y3NuX2FydGlzdH4yMTA2.html">Trịnh Thăng Bình</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1085648,
      'music_title_url' => 'yeu-lai-tu-dau~khac-viet',
      'music_title' => 'Yêu Lại Từ Đầu',
      'music_artist' => 'Khắc Việt',
      'music_artist_id' => '2128',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539053414,
      'music_last_update_time' => 1367461626,
      'music_title_search' => 'iu lai tu dau',
      'music_artist_search' => '; khac vit;',
      'music_album_search' => '',
      'music_composer' => 'Khắc Việt',
      'music_album' => '',
      'music_listen' => 244734,
      'music_track_id' => 0,
      'music_filename' => '1085648-58f9d85b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Em ơi! Hình như chúng mình
Đã hết yêu nhau mất rồi
Tại vì sao em hãy nói đi
Hay vì anh vô tâm hững hờ
Nên vô tình đánh mất hai ta.

Rất khó để đến với nhau
Đừng buông xuôi tình yêu chúng mình
Mình...',
      'music_artist_html' => '<a href="/ca-si/Khac-Viet~Y3NuX2FydGlzdH4yMTI4.html">Khắc Việt</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1166454,
      'music_title_url' => 'lien-khuc-tien-dua-ve-mai-nha-xua~khanh-ly-thanh-tuyen',
      'music_title' => 'Liên Khúc: Tiễn Đưa; Về Mái Nhà Xưa',
      'music_artist' => 'Khánh Ly;Thanh Tuyền',
      'music_artist_id' => '119;4009',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538663282,
      'music_last_update_time' => 1383903412,
      'music_title_search' => 'lin khuc; tin dua; ve mai nha xua',
      'music_artist_search' => '; khanh li; thanh tin;',
      'music_album_search' => '',
      'music_composer' => 'Song Ngọc; Thơ: Nguyên Sa; Nguyễn Văn Đông',
      'music_album' => '',
      'music_listen' => 38767,
      'music_track_id' => 0,
      'music_filename' => '1166454-ae09ff98.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Tiễn Đưa]

Người về chiều mai hay đêm nay 
Người sắp đi hay đã đi rồi 
Muôn vị hành tinh rung rung 
Lung linh thềm ga vắng 
Hay rượu tàn rung trên môi.
 
Người về nhặt sao rơi đêm nay 
Đường sắt k...',
      'music_artist_html' => '<a href="/ca-si/Khanh-Ly~Y3NuX2FydGlzdH4xMTk=.html">Khánh Ly</a>, <a href="/ca-si/Thanh-Tuyen~Y3NuX2FydGlzdH40MDA5.html">Thanh Tuyền</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1174458,
      'music_title_url' => 'paris-co-gi-la-khong-em~y-lan',
      'music_title' => 'Paris Có Gì Lạ Không Em',
      'music_artist' => 'Ý Lan',
      'music_artist_id' => '6201',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538526903,
      'music_last_update_time' => 1385400745,
      'music_title_search' => 'parix co d la khong em',
      'music_artist_search' => '; i lan;',
      'music_album_search' => '',
      'music_composer' => 'Ngô Thuỵ Miên',
      'music_album' => '',
      'music_listen' => 20832,
      'music_track_id' => 0,
      'music_filename' => '1174458-c0dfb69b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Paris có gì lạ không em
Mai anh về em có còn ngoan
Mùa xuân hoa lá vương đầy ngõ
Em có tìm anh trong cánh chim.

Paris có gì lạ không em
Mai anh về giữa bến sông seine
Anh về giữa một giòng sông tr...',
      'music_artist_html' => '<a href="/ca-si/Y-Lan~Y3NuX2FydGlzdH42MjAx.html">Ý Lan</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1400402,
      'music_title_url' => 'dem-do-thi~mai-le-huyen-anh-minh',
      'music_title' => 'Đêm Đô Thị',
      'music_artist' => 'Mai Lệ Huyền;Ánh Minh',
      'music_artist_id' => '13712;7577',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538567460,
      'music_last_update_time' => 1415343172,
      'music_title_search' => 'dem do thi',
      'music_artist_search' => '; mai le hin; em minh;',
      'music_album_search' => '',
      'music_composer' => 'Y Vân',
      'music_album' => '',
      'music_listen' => 11427,
      'music_track_id' => 0,
      'music_filename' => '1400402-e051d41a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Màn đêm xuống dần, muôn ánh đèn đột nhiên như ngời sáng
Kìa bao phố phường, bao mái lầu chìm trong bóng đêm
Lá lá lá lá la la, lá lá lá lá la
Lá lá lá lá la la, lá lá lá lá la
Đời đẹp quá á a à á a...',
      'music_artist_html' => '<a href="/ca-si/Mai-Le-Huyen~Y3NuX2FydGlzdH4xMzcxMg==.html">Mai Lệ Huyền</a>, <a href="/ca-si/Anh-Minh~Y3NuX2FydGlzdH43NTc3.html">Ánh Minh</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1474137,
      'music_title_url' => 'mo-mot-tinh-yeu~nhu-quynh-minh-tuyet',
      'music_title' => 'Mơ Một Tình Yêu',
      'music_artist' => 'Như Quỳnh;Minh Tuyết',
      'music_artist_id' => '32;30',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539010295,
      'music_last_update_time' => 1427516598,
      'music_title_search' => 'mo 1 tinh iu',
      'music_artist_search' => '; nhu qinh; minh tit;',
      'music_album_search' => '',
      'music_composer' => 'Tùng Châu; Thái Thịnh',
      'music_album' => '',
      'music_listen' => 119197,
      'music_track_id' => 0,
      'music_filename' => '1474137-1c92da39.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Trời cao ngàn ánh sao, em nhìn theo biết nơi phương nào 
Ai sẽ đưa em vào tình ái ngọt ngào
Này đây niềm ước mơ, mà em đã vẫn luôn mong chờ 
Chờ anh đến hoà chung với em cùng nhịp trái tim.

[ĐK:]...',
      'music_artist_html' => '<a href="/ca-si/Nhu-Quynh~Y3NuX2FydGlzdH4zMg==.html">Như Quỳnh</a>, <a href="/ca-si/Minh-Tuyet~Y3NuX2FydGlzdH4zMA==.html">Minh Tuyết</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1479112,
      'music_title_url' => 'lien-khuc-doan-chuan-tu-linh~lam-nhat-tien-nguyen-hong-nhung',
      'music_title' => 'Liên Khúc Đoàn Chuẩn - Từ Linh',
      'music_artist' => 'Lâm Nhật Tiến;Nguyễn Hồng Nhung',
      'music_artist_id' => '308;2516',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538597821,
      'music_last_update_time' => 1429856636,
      'music_title_search' => 'lin khuc doan chuan; tu linh',
      'music_artist_search' => '; lam nhat tin; ngin hong nhung;',
      'music_album_search' => '',
      'music_composer' => 'Đoàn Chuẩn - Từ Linh',
      'music_album' => '',
      'music_listen' => 8161,
      'music_track_id' => 0,
      'music_filename' => '1479112-1e35d109.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Lá Thư]

Nhớ tới mùa thu năm xưa gửi nhau
Phong thư ngào ngạt hương
Nét bút đa tình lả lơi
Nhớ phút ngập ngừng lòng giấy viết rằng
Chờ đến kiếp nào, tình đầu trong gió mùa
Người yêu ơi.

Em nay về...',
      'music_artist_html' => '<a href="/ca-si/Lam-Nhat-Tien~Y3NuX2FydGlzdH4zMDg=.html">Lâm Nhật Tiến</a>, <a href="/ca-si/Nguyen-Hong-Nhung~Y3NuX2FydGlzdH4yNTE2.html">Nguyễn Hồng Nhung</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1548612,
      'music_title_url' => 'teen-vong-co~vinh-thuyen-kim',
      'music_title' => 'Teen Vọng Cổ',
      'music_artist' => 'Vĩnh Thuyên Kim',
      'music_artist_id' => '754',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538573256,
      'music_last_update_time' => 1441730865,
      'music_title_search' => 'ten vong co',
      'music_artist_search' => '; vinh thin kim;',
      'music_album_search' => '',
      'music_composer' => 'Trần Anh Khôi',
      'music_album' => '',
      'music_listen' => 14192,
      'music_track_id' => 0,
      'music_filename' => '1548612-fbf07035.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Xa anh mới ban chiều
Thế mà lòng sao buồn hiu
Em nhớ anh nhiều, mong được ở bên người yêu
Để nói bao điều là sao ta
Nói chung là yêu đó
À mà đó có phải là yêu không
Mà sao vắng anh thì buồn.

[ĐK:]...',
      'music_artist_html' => '<a href="/ca-si/Vinh-Thuyen-Kim~Y3NuX2FydGlzdH43NTQ=.html">Vĩnh Thuyên Kim</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 307812,
      'music_title_url' => 'tinh-dep-la-tinh-buon~khanh-don',
      'music_title' => 'Tình Đẹp Là Tình Buồn',
      'music_artist' => 'Khánh Đơn',
      'music_artist_id' => '2012',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529494733,
      'music_last_update_time' => 1341453380,
      'music_title_search' => 'tinh dep la tinh bun',
      'music_artist_search' => '; khanh don;',
      'music_album_search' => '',
      'music_composer' => 'Khánh Đơn',
      'music_album' => '',
      'music_listen' => 21026,
      'music_track_id' => 0,
      'music_filename' => '307812-b99f5772.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Một mình nhìn sao trên trời, lặng thầm giọt nước mắt rơi
Lại nhớ đến em bởi vẫn yêu em thế thôi
Người ta luôn nói với nhau, tình nếu dở dang mới đẹp
Quen nhau, yêu nhau, xa nhau thì mới nhớ nhau....',
      'music_artist_html' => '<a href="/ca-si/Khanh-Don~Y3NuX2FydGlzdH4yMDEy.html">Khánh Đơn</a>',
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1092112,
      'music_title_url' => 'telephone~lady-gaga-beyonce',
      'music_title' => 'Telephone',
      'music_artist' => 'Lady Gaga;Beyoncé',
      'music_artist_id' => '1323;889',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539031650,
      'music_last_update_time' => 1501555448,
      'music_title_search' => 'telephone',
      'music_artist_search' => '; ladi gaga; beionce;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 230128,
      'music_track_id' => 0,
      'music_filename' => '1092112-d330cf08.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Hello, hello, baby
You called, I can\'t hear a thing
I have got no service
In the club, you see, see
Wha-Wha-What did you say
Oh, you\'re breaking up on me
Sorry, I cannot hear you
I\'m kinda busy....',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1104505,
      'music_title_url' => 'waka-waka-this-time-for-africa-the-official-2010-fifa-worl~shakira-freshlyground',
      'music_title' => 'Waka Waka (This Time For Africa) (The Official 2010 FIFA World Cup Song)',
      'music_artist' => 'Shakira;Freshlyground',
      'music_artist_id' => '112;12241',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 5,
      'cover_id' => 0,
      'music_download_time' => 1538816509,
      'music_last_update_time' => 1528883231,
      'music_title_search' => 'waka waka; thix time for africa ; the oficial 2010 fifa world cup xong',
      'music_artist_search' => '; thakira; frethliground;',
      'music_album_search' => '',
      'music_composer' => 'Shakira; John Hill; Freshlyground; Golden Sounds',
      'music_album' => '',
      'music_listen' => 199310,
      'music_track_id' => 0,
      'music_filename' => '1104505-5a0159f4.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'You\'re a good soldier
Choosing your battles
Pick yourself up
And dust yourself off
Get back in the saddle.

You\'re on the front line
Everyone\'s watching
You know it\'s serious
We are getting closer...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1254563,
      'music_title_url' => 'set-fire-to-the-rain~adele',
      'music_title' => 'Set Fire To The Rain',
      'music_artist' => 'Adele',
      'music_artist_id' => '9222',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505428,
      'music_last_update_time' => 1477466538,
      'music_title_search' => 'xet fire to the rain',
      'music_artist_search' => '; adele;',
      'music_album_search' => '',
      'music_composer' => 'Adele',
      'music_album' => '',
      'music_listen' => 61234,
      'music_track_id' => 0,
      'music_filename' => '1254563-1c4198b4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I let it fall, my heart
And as it fell you also claim it
It was dark and I was all right
Until you kissed my lips and you saved me.

My hands they\'re strong, but my knees were far too weak
Stand...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1099184,
      'music_title_url' => 'blame-it-on-the-girls~mika',
      'music_title' => 'Blame It On The Girls',
      'music_artist' => 'Mika',
      'music_artist_id' => '6170',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538986258,
      'music_last_update_time' => 1370574713,
      'music_title_search' => 'blame it on the drlx',
      'music_artist_search' => '; mika;',
      'music_album_search' => '',
      'music_composer' => 'Mika',
      'music_album' => '',
      'music_listen' => 1444,
      'music_track_id' => 0,
      'music_filename' => '1099184-73b5475c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. He\'s got looks that books take pages to tell
He\'s got a face to make you fall on your knees
He\'s got money in the bank to thank and I guess
You could think he\'s livin\' at ease.

Like lovers of t...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1262124,
      'music_title_url' => 'the-only-exception~paramore',
      'music_title' => 'The Only Exception',
      'music_artist' => 'Paramore',
      'music_artist_id' => '7093',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538706333,
      'music_last_update_time' => 1400857999,
      'music_title_search' => 'the onli exception',
      'music_artist_search' => '; paramore;',
      'music_album_search' => '',
      'music_composer' => 'Paramore',
      'music_album' => '',
      'music_listen' => 4777,
      'music_track_id' => 0,
      'music_filename' => '1262124-83ce97a2.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'When I was younger
I saw my daddy cry
And curse at the wind
He broke his own heart
And I watched
As he tried to reassemble it.

And my momma swore that
She would never let herself forget
And that w...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050361,
      'music_title_url' => 'pipe-dream~animusic',
      'music_title' => 'Pipe Dream',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537849195,
      'music_last_update_time' => 1355538502,
      'music_title_search' => 'pipe dream',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 5843,
      'music_track_id' => 0,
      'music_filename' => '1050361-0e33807a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050362,
      'music_title_url' => 'starship-groove~animusic',
      'music_title' => 'Starship Groove',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522252785,
      'music_last_update_time' => 1355538574,
      'music_title_search' => 'xtarthip grove',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 4303,
      'music_track_id' => 0,
      'music_filename' => '1050362-bfeae7e3.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050363,
      'music_title_url' => 'pogo-sticks~animusic',
      'music_title' => 'Pogo Sticks',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496104573,
      'music_last_update_time' => 1355538615,
      'music_title_search' => 'pogo xtickx',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 3614,
      'music_track_id' => 0,
      'music_filename' => '1050363-5f09dc5b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050364,
      'music_title_url' => 'resonant-chamber~animusic',
      'music_title' => 'Resonant Chamber',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537849520,
      'music_last_update_time' => 1355538637,
      'music_title_search' => 'rexonant chamber',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 4877,
      'music_track_id' => 0,
      'music_filename' => '1050364-bd4d2807.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050365,
      'music_title_url' => 'cathedral-pictures~animusic',
      'music_title' => 'Cathedral Pictures',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522252896,
      'music_last_update_time' => 1355538684,
      'music_title_search' => 'cathedral picturex',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 3909,
      'music_track_id' => 0,
      'music_filename' => '1050365-89f86eae.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050366,
      'music_title_url' => 'pipe-dream-2~animusic',
      'music_title' => 'Pipe Dream 2',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522252721,
      'music_last_update_time' => 1355538764,
      'music_title_search' => 'pipe dream 2',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 4177,
      'music_track_id' => 0,
      'music_filename' => '1050366-7218267b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050367,
      'music_title_url' => 'fiber-bundles~animusic',
      'music_title' => 'Fiber Bundles',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1526087539,
      'music_last_update_time' => 1355538797,
      'music_title_search' => 'fiber bundlex',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 3747,
      'music_track_id' => 0,
      'music_filename' => '1050367-e0e8324e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050368,
      'music_title_url' => 'gyro-drums~animusic',
      'music_title' => 'Gyro Drums',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522761354,
      'music_last_update_time' => 1355538836,
      'music_title_search' => 'giro drumx',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 4612,
      'music_track_id' => 0,
      'music_filename' => '1050368-4d758205.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050369,
      'music_title_url' => 'heavy-light~animusic',
      'music_title' => 'Heavy Light',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494607243,
      'music_last_update_time' => 1355541259,
      'music_title_search' => 'heavi light',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 5124,
      'music_track_id' => 0,
      'music_filename' => '1050369-c9a935c9.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1054182,
      'music_title_url' => 'hurricane~thirty-seconds-to-mars',
      'music_title' => 'Hurricane',
      'music_artist' => 'Thirty Seconds to Mars',
      'music_artist_id' => '12574',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531251030,
      'music_last_update_time' => 1356676061,
      'music_title_search' => 'huricane',
      'music_artist_search' => '; thirti xecondx to marx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 13194,
      'music_track_id' => 0,
      'music_filename' => '1054182-233b48a2.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. No matter how many times that you told me you wanted leave
No matter how many breaths that you took you still couldn\'t breathe
No matter how many nights that you\'d lie wide awake to the sound of...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1054184,
      'music_title_url' => 'we-are-the-world-25-for-haiti~various-artists',
      'music_title' => 'We Are the World 25 For Haiti',
      'music_artist' => 'Various Artists',
      'music_artist_id' => '97',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535825003,
      'music_last_update_time' => 1356681852,
      'music_title_search' => 'we are the world 25 for haiti',
      'music_artist_search' => '; varioux artixtx;',
      'music_album_search' => '',
      'music_composer' => 'Michael Jackson; Lionel Richie',
      'music_album' => '',
      'music_listen' => 24421,
      'music_track_id' => 0,
      'music_filename' => '1054184-a4d47fd5.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. There comes a time when we hear a certain call
When the world must come together as one
There are people dying
And its time to lend a hand to life
There greatest gift of all.

We cant go on pret...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1054507,
      'music_title_url' => 'california-gurls~katy-perry',
      'music_title' => 'California Gurls',
      'music_artist' => 'Katy Perry',
      'music_artist_id' => '1478',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532015045,
      'music_last_update_time' => 1480052358,
      'music_title_search' => 'california gurlx',
      'music_artist_search' => '; kati peri;',
      'music_album_search' => '',
      'music_composer' => 'Katy Perry',
      'music_album' => '',
      'music_listen' => 35791,
      'music_track_id' => 0,
      'music_filename' => '1054507-410abe3c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Greetings
Loved ones
Let\'s take
A journey

1. I know a place
Where the grass
Is really greener
Warm, wet and wild
There must be something
In the water
Sippin\' on gin and juice
Laying underneath
The...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1060775,
      'music_title_url' => 'this-is-war~thirty-seconds-to-mars',
      'music_title' => 'This Is War',
      'music_artist' => 'Thirty Seconds to Mars',
      'music_artist_id' => '12574',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531495905,
      'music_last_update_time' => 1358738171,
      'music_title_search' => 'thix ix war',
      'music_artist_search' => '; thirti xecondx to marx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7010,
      'music_track_id' => 0,
      'music_filename' => '1060775-567ef95a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. A warning to the people
The good and the evil
This is war.

To the soldier, the civilian
The martyr, the victim
This is war.

It\'s the moment of truth, and the moment to lie
The moment to live a...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1060841,
      'music_title_url' => 'kings-and-queens~thirty-seconds-to-mars',
      'music_title' => 'Kings And Queens',
      'music_artist' => 'Thirty Seconds to Mars',
      'music_artist_id' => '12574',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1515462688,
      'music_last_update_time' => 1358738502,
      'music_title_search' => 'kingx and quenx',
      'music_artist_search' => '; thirti xecondx to marx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4412,
      'music_track_id' => 0,
      'music_filename' => '1060841-0c6dcc70.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Into the night
Desperate and broken
The sound of a fight
Father has spoken.

[Chorus:]
We were the kings and queens of promise
We were the victims of ourselves
Maybe the children of a lesser God...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1061633,
      'music_title_url' => 'closer-to-the-edge~thirty-seconds-to-mars',
      'music_title' => 'Closer To The Edge',
      'music_artist' => 'Thirty Seconds to Mars',
      'music_artist_id' => '12574',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531495451,
      'music_last_update_time' => 1359165938,
      'music_title_search' => 'cloxer to the edge',
      'music_artist_search' => '; thirti xecondx to marx;',
      'music_album_search' => '',
      'music_composer' => 'Jared Leto',
      'music_album' => '',
      'music_listen' => 8620,
      'music_track_id' => 0,
      'music_filename' => '1061633-743c4246.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I don\'t remember the moment, I tried to forget
I lost myself, is it better not said
Now I\'m closer to the edge.

It was a thousand to one
And a million to two
Time to go down in flames and I\'m t...',
    ),
    20 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1092112,
      'music_title_url' => 'telephone~lady-gaga-beyonce',
      'music_title' => 'Telephone',
      'music_artist' => 'Lady Gaga;Beyoncé',
      'music_artist_id' => '1323;889',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539031650,
      'music_last_update_time' => 1501555448,
      'music_title_search' => 'telephone',
      'music_artist_search' => '; ladi gaga; beionce;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 230128,
      'music_track_id' => 0,
      'music_filename' => '1092112-d330cf08.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Hello, hello, baby
You called, I can\'t hear a thing
I have got no service
In the club, you see, see
Wha-Wha-What did you say
Oh, you\'re breaking up on me
Sorry, I cannot hear you
I\'m kinda busy....',
      'music_artist_html' => '<a href="/ca-si/Lady-Gaga~Y3NuX2FydGlzdH4xMzIz.html">Lady Gaga</a>, <a href="/ca-si/Beyonce~Y3NuX2FydGlzdH44ODk=.html">Beyoncé</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1104505,
      'music_title_url' => 'waka-waka-this-time-for-africa-the-official-2010-fifa-worl~shakira-freshlyground',
      'music_title' => 'Waka Waka (This Time For Africa) (The Official 2010 FIFA World Cup Song)',
      'music_artist' => 'Shakira;Freshlyground',
      'music_artist_id' => '112;12241',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 5,
      'cover_id' => 0,
      'music_download_time' => 1538816509,
      'music_last_update_time' => 1528883231,
      'music_title_search' => 'waka waka; thix time for africa ; the oficial 2010 fifa world cup xong',
      'music_artist_search' => '; thakira; frethliground;',
      'music_album_search' => '',
      'music_composer' => 'Shakira; John Hill; Freshlyground; Golden Sounds',
      'music_album' => '',
      'music_listen' => 199310,
      'music_track_id' => 0,
      'music_filename' => '1104505-5a0159f4.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'You\'re a good soldier
Choosing your battles
Pick yourself up
And dust yourself off
Get back in the saddle.

You\'re on the front line
Everyone\'s watching
You know it\'s serious
We are getting closer...',
      'music_artist_html' => '<a href="/ca-si/Shakira~Y3NuX2FydGlzdH4xMTI=.html">Shakira</a>, <a href="/ca-si/Freshlyground~Y3NuX2FydGlzdH4xMjI0MQ==.html">Freshlyground</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1254563,
      'music_title_url' => 'set-fire-to-the-rain~adele',
      'music_title' => 'Set Fire To The Rain',
      'music_artist' => 'Adele',
      'music_artist_id' => '9222',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505428,
      'music_last_update_time' => 1477466538,
      'music_title_search' => 'xet fire to the rain',
      'music_artist_search' => '; adele;',
      'music_album_search' => '',
      'music_composer' => 'Adele',
      'music_album' => '',
      'music_listen' => 61234,
      'music_track_id' => 0,
      'music_filename' => '1254563-1c4198b4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I let it fall, my heart
And as it fell you also claim it
It was dark and I was all right
Until you kissed my lips and you saved me.

My hands they\'re strong, but my knees were far too weak
Stand...',
      'music_artist_html' => '<a href="/ca-si/Adele~Y3NuX2FydGlzdH45MjIy.html">Adele</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1099184,
      'music_title_url' => 'blame-it-on-the-girls~mika',
      'music_title' => 'Blame It On The Girls',
      'music_artist' => 'Mika',
      'music_artist_id' => '6170',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538986258,
      'music_last_update_time' => 1370574713,
      'music_title_search' => 'blame it on the drlx',
      'music_artist_search' => '; mika;',
      'music_album_search' => '',
      'music_composer' => 'Mika',
      'music_album' => '',
      'music_listen' => 1444,
      'music_track_id' => 0,
      'music_filename' => '1099184-73b5475c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. He\'s got looks that books take pages to tell
He\'s got a face to make you fall on your knees
He\'s got money in the bank to thank and I guess
You could think he\'s livin\' at ease.

Like lovers of t...',
      'music_artist_html' => '<a href="/ca-si/Mika~Y3NuX2FydGlzdH42MTcw.html">Mika</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1262124,
      'music_title_url' => 'the-only-exception~paramore',
      'music_title' => 'The Only Exception',
      'music_artist' => 'Paramore',
      'music_artist_id' => '7093',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538706333,
      'music_last_update_time' => 1400857999,
      'music_title_search' => 'the onli exception',
      'music_artist_search' => '; paramore;',
      'music_album_search' => '',
      'music_composer' => 'Paramore',
      'music_album' => '',
      'music_listen' => 4777,
      'music_track_id' => 0,
      'music_filename' => '1262124-83ce97a2.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'When I was younger
I saw my daddy cry
And curse at the wind
He broke his own heart
And I watched
As he tried to reassemble it.

And my momma swore that
She would never let herself forget
And that w...',
      'music_artist_html' => '<a href="/ca-si/Paramore~Y3NuX2FydGlzdH43MDkz.html">Paramore</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050361,
      'music_title_url' => 'pipe-dream~animusic',
      'music_title' => 'Pipe Dream',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537849195,
      'music_last_update_time' => 1355538502,
      'music_title_search' => 'pipe dream',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 5843,
      'music_track_id' => 0,
      'music_filename' => '1050361-0e33807a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Animusic~Y3NuX2FydGlzdH4yNzA5Ng==.html">Animusic</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050362,
      'music_title_url' => 'starship-groove~animusic',
      'music_title' => 'Starship Groove',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522252785,
      'music_last_update_time' => 1355538574,
      'music_title_search' => 'xtarthip grove',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 4303,
      'music_track_id' => 0,
      'music_filename' => '1050362-bfeae7e3.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Animusic~Y3NuX2FydGlzdH4yNzA5Ng==.html">Animusic</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050363,
      'music_title_url' => 'pogo-sticks~animusic',
      'music_title' => 'Pogo Sticks',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496104573,
      'music_last_update_time' => 1355538615,
      'music_title_search' => 'pogo xtickx',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 3614,
      'music_track_id' => 0,
      'music_filename' => '1050363-5f09dc5b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Animusic~Y3NuX2FydGlzdH4yNzA5Ng==.html">Animusic</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050364,
      'music_title_url' => 'resonant-chamber~animusic',
      'music_title' => 'Resonant Chamber',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537849520,
      'music_last_update_time' => 1355538637,
      'music_title_search' => 'rexonant chamber',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 4877,
      'music_track_id' => 0,
      'music_filename' => '1050364-bd4d2807.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Animusic~Y3NuX2FydGlzdH4yNzA5Ng==.html">Animusic</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050365,
      'music_title_url' => 'cathedral-pictures~animusic',
      'music_title' => 'Cathedral Pictures',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522252896,
      'music_last_update_time' => 1355538684,
      'music_title_search' => 'cathedral picturex',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 3909,
      'music_track_id' => 0,
      'music_filename' => '1050365-89f86eae.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Animusic~Y3NuX2FydGlzdH4yNzA5Ng==.html">Animusic</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050366,
      'music_title_url' => 'pipe-dream-2~animusic',
      'music_title' => 'Pipe Dream 2',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522252721,
      'music_last_update_time' => 1355538764,
      'music_title_search' => 'pipe dream 2',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 4177,
      'music_track_id' => 0,
      'music_filename' => '1050366-7218267b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Animusic~Y3NuX2FydGlzdH4yNzA5Ng==.html">Animusic</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050367,
      'music_title_url' => 'fiber-bundles~animusic',
      'music_title' => 'Fiber Bundles',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1526087539,
      'music_last_update_time' => 1355538797,
      'music_title_search' => 'fiber bundlex',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 3747,
      'music_track_id' => 0,
      'music_filename' => '1050367-e0e8324e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Animusic~Y3NuX2FydGlzdH4yNzA5Ng==.html">Animusic</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050368,
      'music_title_url' => 'gyro-drums~animusic',
      'music_title' => 'Gyro Drums',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522761354,
      'music_last_update_time' => 1355538836,
      'music_title_search' => 'giro drumx',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 4612,
      'music_track_id' => 0,
      'music_filename' => '1050368-4d758205.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Animusic~Y3NuX2FydGlzdH4yNzA5Ng==.html">Animusic</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050369,
      'music_title_url' => 'heavy-light~animusic',
      'music_title' => 'Heavy Light',
      'music_artist' => 'Animusic',
      'music_artist_id' => '27096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494607243,
      'music_last_update_time' => 1355541259,
      'music_title_search' => 'heavi light',
      'music_artist_search' => '; animuxic;',
      'music_album_search' => '',
      'music_composer' => 'Animusic',
      'music_album' => '',
      'music_listen' => 5124,
      'music_track_id' => 0,
      'music_filename' => '1050369-c9a935c9.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Animusic~Y3NuX2FydGlzdH4yNzA5Ng==.html">Animusic</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1054182,
      'music_title_url' => 'hurricane~thirty-seconds-to-mars',
      'music_title' => 'Hurricane',
      'music_artist' => 'Thirty Seconds to Mars',
      'music_artist_id' => '12574',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531251030,
      'music_last_update_time' => 1356676061,
      'music_title_search' => 'huricane',
      'music_artist_search' => '; thirti xecondx to marx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 13194,
      'music_track_id' => 0,
      'music_filename' => '1054182-233b48a2.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. No matter how many times that you told me you wanted leave
No matter how many breaths that you took you still couldn\'t breathe
No matter how many nights that you\'d lie wide awake to the sound of...',
      'music_artist_html' => '<a href="/ca-si/Thirty-Seconds-to-Mars~Y3NuX2FydGlzdH4xMjU3NA==.html">Thirty Seconds to Mars</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1054184,
      'music_title_url' => 'we-are-the-world-25-for-haiti~various-artists',
      'music_title' => 'We Are the World 25 For Haiti',
      'music_artist' => 'Various Artists',
      'music_artist_id' => '97',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535825003,
      'music_last_update_time' => 1356681852,
      'music_title_search' => 'we are the world 25 for haiti',
      'music_artist_search' => '; varioux artixtx;',
      'music_album_search' => '',
      'music_composer' => 'Michael Jackson; Lionel Richie',
      'music_album' => '',
      'music_listen' => 24421,
      'music_track_id' => 0,
      'music_filename' => '1054184-a4d47fd5.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. There comes a time when we hear a certain call
When the world must come together as one
There are people dying
And its time to lend a hand to life
There greatest gift of all.

We cant go on pret...',
      'music_artist_html' => '<a href="/ca-si/Various-Artists~Y3NuX2FydGlzdH45Nw==.html">Various Artists</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1054507,
      'music_title_url' => 'california-gurls~katy-perry',
      'music_title' => 'California Gurls',
      'music_artist' => 'Katy Perry',
      'music_artist_id' => '1478',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532015045,
      'music_last_update_time' => 1480052358,
      'music_title_search' => 'california gurlx',
      'music_artist_search' => '; kati peri;',
      'music_album_search' => '',
      'music_composer' => 'Katy Perry',
      'music_album' => '',
      'music_listen' => 35791,
      'music_track_id' => 0,
      'music_filename' => '1054507-410abe3c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Greetings
Loved ones
Let\'s take
A journey

1. I know a place
Where the grass
Is really greener
Warm, wet and wild
There must be something
In the water
Sippin\' on gin and juice
Laying underneath
The...',
      'music_artist_html' => '<a href="/ca-si/Katy-Perry~Y3NuX2FydGlzdH4xNDc4.html">Katy Perry</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1060775,
      'music_title_url' => 'this-is-war~thirty-seconds-to-mars',
      'music_title' => 'This Is War',
      'music_artist' => 'Thirty Seconds to Mars',
      'music_artist_id' => '12574',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531495905,
      'music_last_update_time' => 1358738171,
      'music_title_search' => 'thix ix war',
      'music_artist_search' => '; thirti xecondx to marx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7010,
      'music_track_id' => 0,
      'music_filename' => '1060775-567ef95a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. A warning to the people
The good and the evil
This is war.

To the soldier, the civilian
The martyr, the victim
This is war.

It\'s the moment of truth, and the moment to lie
The moment to live a...',
      'music_artist_html' => '<a href="/ca-si/Thirty-Seconds-to-Mars~Y3NuX2FydGlzdH4xMjU3NA==.html">Thirty Seconds to Mars</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1060841,
      'music_title_url' => 'kings-and-queens~thirty-seconds-to-mars',
      'music_title' => 'Kings And Queens',
      'music_artist' => 'Thirty Seconds to Mars',
      'music_artist_id' => '12574',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1515462688,
      'music_last_update_time' => 1358738502,
      'music_title_search' => 'kingx and quenx',
      'music_artist_search' => '; thirti xecondx to marx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4412,
      'music_track_id' => 0,
      'music_filename' => '1060841-0c6dcc70.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Into the night
Desperate and broken
The sound of a fight
Father has spoken.

[Chorus:]
We were the kings and queens of promise
We were the victims of ourselves
Maybe the children of a lesser God...',
      'music_artist_html' => '<a href="/ca-si/Thirty-Seconds-to-Mars~Y3NuX2FydGlzdH4xMjU3NA==.html">Thirty Seconds to Mars</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1061633,
      'music_title_url' => 'closer-to-the-edge~thirty-seconds-to-mars',
      'music_title' => 'Closer To The Edge',
      'music_artist' => 'Thirty Seconds to Mars',
      'music_artist_id' => '12574',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531495451,
      'music_last_update_time' => 1359165938,
      'music_title_search' => 'cloxer to the edge',
      'music_artist_search' => '; thirti xecondx to marx;',
      'music_album_search' => '',
      'music_composer' => 'Jared Leto',
      'music_album' => '',
      'music_listen' => 8620,
      'music_track_id' => 0,
      'music_filename' => '1061633-743c4246.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I don\'t remember the moment, I tried to forget
I lost myself, is it better not said
Now I\'m closer to the edge.

It was a thousand to one
And a million to two
Time to go down in flames and I\'m t...',
      'music_artist_html' => '<a href="/ca-si/Thirty-Seconds-to-Mars~Y3NuX2FydGlzdH4xMjU3NA==.html">Thirty Seconds to Mars</a>',
    ),
  ),
  3 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023782,
      'music_title_url' => 'nhat-ky-chuyen-bay-tinh-yeu-live~chau-kiet-luan',
      'music_title' => 'Nhật Ký Chuyến Bay Tình Yêu (Live)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1498892292,
      'music_last_update_time' => 1349938255,
      'music_title_search' => 'nhat ki chin bai tinh iu; live',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 4402,
      'music_track_id' => 0,
      'music_filename' => '1023782-74a09446.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Chū liàng de biānjìng wǎn yībù lí tiān gèng jìn
Ài nǐ de shìqíng shuō de qīng bìng yǒu huíyīn
Ān bié le jiù lián jiù jǐ jù bùbì liàng rú jìng
Wǒ juédìng zhuānxīn fēnbiàn de chū nǐ de shēngyīn.

Yòn...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023783,
      'music_title_url' => 'i-weep-my-emotions-are-in-bits-and-pieces-anh-roi-le-cam-xuc-tron~chau-kiet-luan',
      'music_title' => 'I Weep, My Emotions Are In Bits And Pieces (Anh Rơi Lệ, Cảm Xúc Trọn Vẹn; 我落泪·情绪零落; Live)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1534963821,
      'music_last_update_time' => 1349938296,
      'music_title_search' => 'i wep mi emotionx are in bitx and picex; anh roi le cam xuc chon ven; 我落泪·情绪零落; live',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4468,
      'music_track_id' => 0,
      'music_filename' => '1023783-3a5ca340.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '地 上      断   了 翅  的 蝶
Dì shàng   duàn le chì de dié
雾 散  之  後  的   满  月
Wù sàn zhī hòu de   mǎn yuè
原   来  爱   跟  心  碎
Yuán lái ài   gēn xīn suì
都  可 以 很    细 节
Dōu ké yǐ hěn   xì jié.


听   夜 风...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024278,
      'music_title_url' => 'long-time-no-see-da-lau-khong-gap~chau-kiet-luan',
      'music_title' => 'Long Time No See (Đã Lâu Không Gặp; 好久不見)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495436200,
      'music_last_update_time' => 1350028333,
      'music_title_search' => 'long time no xe; da lau khong gap; 好久不見',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8339,
      'music_track_id' => 0,
      'music_filename' => '1024278-468bb31f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Hǎo jiǔ bù jiàn nǐ hái hǎo ma
Nǐ de xiǎo gǒu zhǎng dà le ma
Wǒ de wéi jīn hái wéi zhe ma
Wǒ de xiàng piàn dōu diū le ba
Wǒ jiǎn bù dào hòu miàn tóu fǎ
Zhège jiè kǒu hái bù cuò ba
Yī bǎ jiǎn dāo yī...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024279,
      'music_title_url' => 'said-goodbye-da-noi-loi-tam-biet~chau-kiet-luan',
      'music_title' => 'Said Goodbye (Đã Nói Lời Tạm Biệt; 说了再见)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495422673,
      'music_last_update_time' => 1350028887,
      'music_title_search' => 'xaid godbi; da noi loi tam bit; 说了再见',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3861,
      'music_track_id' => 0,
      'music_filename' => '1024279-eb1f6f6a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Tiānliàng le
Yǔ xià le
Nǐ zǒu liǎo qīngchu le
Wǒ ài de
Yíshī le luòyè piāo zài húmiàn shàng shuì zhe le
Xiǎng yào fàng
Fàng bù diào
Lèi zài piāo nǐ kàn kàn
Nǐ kàn kàn
Kàn bù dào wǒ jiǎzhuāng guòqù...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024280,
      'music_title_url' => 'rain-of-the-next-night-mua-roi-dem-thau~chau-kiet-luan',
      'music_title' => 'Rain Of The Next Night (Mưa Rơi Đêm Thâu; 雨下一整晚)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1460366068,
      'music_last_update_time' => 1350028684,
      'music_title_search' => 'rain of the next night; mua roi dem thau; 雨下一整晚',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 6201,
      'music_track_id' => 0,
      'music_filename' => '1024280-083bd574.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Jiē dēng xià de chú chuāng yǒu yī zhǒng luò mò de wēn nuǎn
Tú tiē zài bō lí shàng huà zhe nǐ de mú yàng
Kāi zhe chē màn wú mù dì dì zhuàn wān bù zhī yào qù nǎ ge dì fāng
Liáng què de diàn shì qiáng...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024281,
      'music_title_url' => 'firework-cool-easily-phao-hoa-mau-tan~chau-kiet-luan',
      'music_title' => 'Firework Cool Easily (Pháo Hoa Mau Tàn)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494665365,
      'music_last_update_time' => 1350029434,
      'music_title_search' => 'firework col eaxili; phao hoa mau tan',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 8965,
      'music_track_id' => 0,
      'music_filename' => '1024281-9f9ed868.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Fán huá shēng dùn rù kōng mén zhé shà le shì rén 
Mèng piān lěng nián zhuǎn yì shēng qíng zhài yòu jǐ běn 
Rú nǐ mò rèn shēng sǐ kū děng 
Kū děng yì quān yòu yì quān de nián lún. 

Fú tú tǎ duàn le...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024282,
      'music_title_url' => 'day-hoc-ghi-hinh-mien-phi~chau-kiet-luan',
      'music_title' => 'Dạy Học Ghi Hình Miễn Phí',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1506845145,
      'music_last_update_time' => 1350029143,
      'music_title_search' => 'dai hoc ghi hinh min phi',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân / Jay Chou',
      'music_album' => '',
      'music_listen' => 4588,
      'music_track_id' => 0,
      'music_filename' => '1024282-4ace7268.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '如果你 想要变成一个rocker 
Ru guo ni xiang yao bian cheng yi ge rocker 
你就必须要先有一把guitar 
Ni jiu bi xu yao xian you yi ba guitar 
刷和弦的时候尽量不用pick 
Shua he xian de shi hou jin liang bu yong pick 
啊看起来样子会比较随性...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024283,
      'music_title_url' => 'sieu-nhan-khong-biet-bay~chau-kiet-luan',
      'music_title' => 'Siêu Nhân Không Biết Bay (超人不會飛.)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1510200519,
      'music_last_update_time' => 1350029711,
      'music_title_search' => 'xiu nhan khong bit bai; 超人不會飛',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 5279,
      'music_track_id' => 0,
      'music_filename' => '1024283-54adc18e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Mām shuō hěnduō shì bié tài jìjiào
Zhǐshì shǐmìng gǎn zhǎodào le wǒ wǒ shuì bù zháo
Rúguǒ shuō màrén yào yǒudiǎn jìqiǎo
Wǒ huì jiādiǎn xuánlǜ nǐ huì juéde chāo diǎo
Wǒ de qiāng bù huì zhuāng dànyào...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024284,
      'music_title_url' => 'hip-hop-stewardess-tiep-vien-hip-hop~chau-kiet-luan',
      'music_title' => 'Hip-Hop Stewardess (Tiếp Viên Hip-Hop; 嘻哈空姐)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534697531,
      'music_last_update_time' => 1350029993,
      'music_title_search' => 'hip hop xtewardex; tip vin hip hop; 嘻哈空姐',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 11022,
      'music_track_id' => 0,
      'music_filename' => '1024284-b9e0214d.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Qǐ luòjià líkāi dìshàng kōngjiě qīnqiè de jiǎng
Qǐng wǒ dǎkāi zhēyáng bǎn jiāng ānquán dài xì shàng
Jiēzhe wèn shìfǒu yòng cān xū bù xūyào máotǎn
Ér wǒ chénshuì zài kècāng mèngjìng zài wǒ zhèng shà...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024285,
      'music_title_url' => 'tu-bien-tu-dien~chau-kiet-luan',
      'music_title' => 'Tự Biên Tự Diễn',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1418826473,
      'music_last_update_time' => 1350030010,
      'music_title_search' => 'tu bin tu din',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 4661,
      'music_track_id' => 0,
      'music_filename' => '1024285-a854e2e0.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '巷    口  甩    尾  甩    开  了 过  去 的 熟  悉
Xiàng kǒu shuǎi wěi shuǎi kāi le guò qù de shú xī
照   後  镜   的 你 比 脑  海  清   晰
Zhào hòu jìng de nǐ bǐ náo hǎi qīng xī
你 我 距 离 就  像    打 滑  和 那 飘   移
Nǐ wǒ jù l...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024286,
      'music_title_url' => 'the-era-vuot-thoi-dai~chau-kiet-luan',
      'music_title' => 'The Era (Vượt Thời Đại; 跨 時代)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1440658130,
      'music_last_update_time' => 1350030170,
      'music_title_search' => 'the era; vut thoi dai; 跨 時代',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5340,
      'music_track_id' => 0,
      'music_filename' => '1024286-8f5086ef.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Zhōng nì shízhōng ér rào è wù zhēngníng de qīngcháo
Wǒ qiānbēi ānjìng de yú chéngbǎo xià de wǎn dǎo
Yāyì yuǎngǔ liúcuàn de mánhuāng ànhào
Ér guǎnfēngqín jiàn gāoào de shuō nà zhǐshì zài túláo.

Ào...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1174137,
      'music_title_url' => 'tong-hua~jason-chen-j-rice',
      'music_title' => 'Tong Hua (童话)',
      'music_artist' => 'Jason Chen;J Rice',
      'music_artist_id' => '2174;26418',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533007981,
      'music_last_update_time' => 1385431517,
      'music_title_search' => 'tong hua; 童话',
      'music_artist_search' => '; jaxon chen; j rice;',
      'music_album_search' => '',
      'music_composer' => 'Guang Liang',
      'music_album' => '',
      'music_listen' => 7689,
      'music_track_id' => 0,
      'music_filename' => '1174137-71ab89ce.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Ver1:]
Don\'t know how long 
It\'s been a while since 
You told me...your favorite story. 

It\'s been on my mind 
Driving me crazy 
Am I the reason that (you\'re crying now) harmony 
B-section. 

I s...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1182635,
      'music_title_url' => 'phao-hoa-chong-tan-yan-hua-yi-leng-vietsub~chau-kiet-luan',
      'music_title' => 'Pháo Hoa Chóng Tàn (Yan Hua Yi Leng) (Vietsub)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536470813,
      'music_last_update_time' => 1386931025,
      'music_title_search' => 'phao hoa chong tan; ian hua i leng ; vitxub',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 20072,
      'music_track_id' => 3,
      'music_filename' => '1182635-c0275481.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Fánhuá shēng dùn rù kōngmén zhé shā le shìrén
Mèng piān lěng zhǎnzhuǎn yīshēng qíng zhài yòu jǐ běn
Rú nǐ mòrèn shēngsǐ kū děng
Kū děng yī quān yòu yī quān de niánlún.

Fútú tǎ duàn le jǐ céng duàn...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1184898,
      'music_title_url' => 'mua-roi-thau-dem-yu-xia-yi-zheng-wen-vietsub~chau-kiet-luan',
      'music_title' => 'Mưa Rơi Thâu Đêm (Yu Xia Yi Zheng Wen) (Vietsub)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525661729,
      'music_last_update_time' => 1387419965,
      'music_title_search' => 'mua roi thau dem; iu xia i zheng wen ; vitxub',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3914,
      'music_track_id' => 6,
      'music_filename' => '1184898-fff273f4.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '街灯下的橱窗 有一种落寞的温暖
Jiē dēng xià de chú chuāng yǒu yī zhǒng luò mò de wēn nuǎn
吐气在玻璃上 画着你的模样
Tú tiē zài bō lí shàng huà zhe nǐ de mú yàng
开着车漫无目的的转弯 不知要去哪个地方
Kāi zhe chē màn wú mù dì dì zhuàn wān bù zh...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1233001,
      'music_title_url' => 'tuy-hong-nhan~luu-y-doa',
      'music_title' => 'Tuý Hồng Nhan',
      'music_artist' => 'Lưu Y Đoá',
      'music_artist_id' => '33257',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536657033,
      'music_last_update_time' => 1424778986,
      'music_title_search' => 'ti hong nhan',
      'music_artist_search' => '; lu i doa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 29263,
      'music_track_id' => 0,
      'music_filename' => '1233001-4b298b36.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Á là là lá la là la...
Là á lá là lá la...
Lá a là lá la là là lá la...
Lá a à á a hà ha ...
Hà há há a a à à a ...
Há a ha à hà ha hà...
Là á là há á la là...
Lá la lá là la...
Há a há à hà a à......',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1422961,
      'music_title_url' => 'cha-father~chau-kiet-luan-chris-hung',
      'music_title' => 'Cha (Father; 阿爸)',
      'music_artist' => 'Châu Kiệt Luân;Chris Hung',
      'music_artist_id' => '13;25355',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496240637,
      'music_last_update_time' => 1418263671,
      'music_title_search' => 'cha; father; 阿爸',
      'music_artist_search' => '; jai chou; chrix hung;',
      'music_album_search' => '',
      'music_composer' => 'Phương Văn Sơn',
      'music_album' => '',
      'music_listen' => 588,
      'music_track_id' => 0,
      'music_filename' => '1422961-fb5df911.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '我尚親愛ㄟ阿爸
Wǒ shàng qīn ài ei ā bà

阮想馬擱叫你一聲
Ruǎn xiǎng mǎ gē jiào nǐ yī shēng

唱以早你寫ㄟ歌
Chàng yǐ zǎo nǐ xiě ei gē

感情放落唱不煞
Gǎn qíng fàng luò chàng bù shā
-----------------------------------

我尚思念ㄟ阿爸
W...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1460706,
      'music_title_url' => 'than-thoai-trang-sao~kim-sa',
      'music_title' => 'Thần Thoại Trăng Sao (星月神话)',
      'music_artist' => 'Kim Sa',
      'music_artist_id' => '4417',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1513693031,
      'music_last_update_time' => 1424742874,
      'music_title_search' => 'than thoai chang xao; 星月神话',
      'music_artist_search' => '; kim xa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 57499,
      'music_track_id' => 0,
      'music_filename' => '1460706-55a664f6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '我的一生最美好的场景
Wo de yi sheng zui mei hao de chang jing
就是遇见你
Jiu shi yu jian ni
在人海茫茫中静静凝望着你
Zai ren hai mang mang zhong jing jing ning wang zhe ni
陌生又熟悉
Mo sheng you shou xi.

尽管呼吸着同一天空的气息
Jin guan h...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1548873,
      'music_title_url' => 'co-ai-tung-noi-voi-em-chua~tran-kha-sinh',
      'music_title' => 'Có Ai Từng Nói Với Em Chưa (有没有人告诉你)',
      'music_artist' => 'Trần Khả Sinh',
      'music_artist_id' => '71822',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537010466,
      'music_last_update_time' => 1441773277,
      'music_title_search' => 'co ai tung noi voi em chua; 有没有人告诉你',
      'music_artist_search' => '; chan kha xinh;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5857,
      'music_track_id' => 0,
      'music_filename' => '1548873-b133b29d.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1724781,
      'music_title_url' => 'than-thoai-trang-sao~kim-sa',
      'music_title' => 'Thần Thoại Trăng Sao',
      'music_artist' => 'Kim Sa',
      'music_artist_id' => '4417',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1476000826,
      'music_last_update_time' => 1475990832,
      'music_title_search' => 'than thoai chang xao',
      'music_artist_search' => '; kim xa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 166,
      'music_track_id' => 0,
      'music_filename' => '1724781-ce19aca1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023782,
      'music_title_url' => 'nhat-ky-chuyen-bay-tinh-yeu-live~chau-kiet-luan',
      'music_title' => 'Nhật Ký Chuyến Bay Tình Yêu (Live)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1498892292,
      'music_last_update_time' => 1349938255,
      'music_title_search' => 'nhat ki chin bai tinh iu; live',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 4402,
      'music_track_id' => 0,
      'music_filename' => '1023782-74a09446.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Chū liàng de biānjìng wǎn yībù lí tiān gèng jìn
Ài nǐ de shìqíng shuō de qīng bìng yǒu huíyīn
Ān bié le jiù lián jiù jǐ jù bùbì liàng rú jìng
Wǒ juédìng zhuānxīn fēnbiàn de chū nǐ de shēngyīn.

Yòn...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023783,
      'music_title_url' => 'i-weep-my-emotions-are-in-bits-and-pieces-anh-roi-le-cam-xuc-tron~chau-kiet-luan',
      'music_title' => 'I Weep, My Emotions Are In Bits And Pieces (Anh Rơi Lệ, Cảm Xúc Trọn Vẹn; 我落泪·情绪零落; Live)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1534963821,
      'music_last_update_time' => 1349938296,
      'music_title_search' => 'i wep mi emotionx are in bitx and picex; anh roi le cam xuc chon ven; 我落泪·情绪零落; live',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4468,
      'music_track_id' => 0,
      'music_filename' => '1023783-3a5ca340.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '地 上      断   了 翅  的 蝶
Dì shàng   duàn le chì de dié
雾 散  之  後  的   满  月
Wù sàn zhī hòu de   mǎn yuè
原   来  爱   跟  心  碎
Yuán lái ài   gēn xīn suì
都  可 以 很    细 节
Dōu ké yǐ hěn   xì jié.


听   夜 风...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024278,
      'music_title_url' => 'long-time-no-see-da-lau-khong-gap~chau-kiet-luan',
      'music_title' => 'Long Time No See (Đã Lâu Không Gặp; 好久不見)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495436200,
      'music_last_update_time' => 1350028333,
      'music_title_search' => 'long time no xe; da lau khong gap; 好久不見',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8339,
      'music_track_id' => 0,
      'music_filename' => '1024278-468bb31f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Hǎo jiǔ bù jiàn nǐ hái hǎo ma
Nǐ de xiǎo gǒu zhǎng dà le ma
Wǒ de wéi jīn hái wéi zhe ma
Wǒ de xiàng piàn dōu diū le ba
Wǒ jiǎn bù dào hòu miàn tóu fǎ
Zhège jiè kǒu hái bù cuò ba
Yī bǎ jiǎn dāo yī...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024279,
      'music_title_url' => 'said-goodbye-da-noi-loi-tam-biet~chau-kiet-luan',
      'music_title' => 'Said Goodbye (Đã Nói Lời Tạm Biệt; 说了再见)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495422673,
      'music_last_update_time' => 1350028887,
      'music_title_search' => 'xaid godbi; da noi loi tam bit; 说了再见',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3861,
      'music_track_id' => 0,
      'music_filename' => '1024279-eb1f6f6a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Tiānliàng le
Yǔ xià le
Nǐ zǒu liǎo qīngchu le
Wǒ ài de
Yíshī le luòyè piāo zài húmiàn shàng shuì zhe le
Xiǎng yào fàng
Fàng bù diào
Lèi zài piāo nǐ kàn kàn
Nǐ kàn kàn
Kàn bù dào wǒ jiǎzhuāng guòqù...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024280,
      'music_title_url' => 'rain-of-the-next-night-mua-roi-dem-thau~chau-kiet-luan',
      'music_title' => 'Rain Of The Next Night (Mưa Rơi Đêm Thâu; 雨下一整晚)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1460366068,
      'music_last_update_time' => 1350028684,
      'music_title_search' => 'rain of the next night; mua roi dem thau; 雨下一整晚',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 6201,
      'music_track_id' => 0,
      'music_filename' => '1024280-083bd574.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Jiē dēng xià de chú chuāng yǒu yī zhǒng luò mò de wēn nuǎn
Tú tiē zài bō lí shàng huà zhe nǐ de mú yàng
Kāi zhe chē màn wú mù dì dì zhuàn wān bù zhī yào qù nǎ ge dì fāng
Liáng què de diàn shì qiáng...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024281,
      'music_title_url' => 'firework-cool-easily-phao-hoa-mau-tan~chau-kiet-luan',
      'music_title' => 'Firework Cool Easily (Pháo Hoa Mau Tàn)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494665365,
      'music_last_update_time' => 1350029434,
      'music_title_search' => 'firework col eaxili; phao hoa mau tan',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 8965,
      'music_track_id' => 0,
      'music_filename' => '1024281-9f9ed868.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Fán huá shēng dùn rù kōng mén zhé shà le shì rén 
Mèng piān lěng nián zhuǎn yì shēng qíng zhài yòu jǐ běn 
Rú nǐ mò rèn shēng sǐ kū děng 
Kū děng yì quān yòu yì quān de nián lún. 

Fú tú tǎ duàn le...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024282,
      'music_title_url' => 'day-hoc-ghi-hinh-mien-phi~chau-kiet-luan',
      'music_title' => 'Dạy Học Ghi Hình Miễn Phí',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1506845145,
      'music_last_update_time' => 1350029143,
      'music_title_search' => 'dai hoc ghi hinh min phi',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân / Jay Chou',
      'music_album' => '',
      'music_listen' => 4588,
      'music_track_id' => 0,
      'music_filename' => '1024282-4ace7268.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '如果你 想要变成一个rocker 
Ru guo ni xiang yao bian cheng yi ge rocker 
你就必须要先有一把guitar 
Ni jiu bi xu yao xian you yi ba guitar 
刷和弦的时候尽量不用pick 
Shua he xian de shi hou jin liang bu yong pick 
啊看起来样子会比较随性...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024283,
      'music_title_url' => 'sieu-nhan-khong-biet-bay~chau-kiet-luan',
      'music_title' => 'Siêu Nhân Không Biết Bay (超人不會飛.)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1510200519,
      'music_last_update_time' => 1350029711,
      'music_title_search' => 'xiu nhan khong bit bai; 超人不會飛',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 5279,
      'music_track_id' => 0,
      'music_filename' => '1024283-54adc18e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Mām shuō hěnduō shì bié tài jìjiào
Zhǐshì shǐmìng gǎn zhǎodào le wǒ wǒ shuì bù zháo
Rúguǒ shuō màrén yào yǒudiǎn jìqiǎo
Wǒ huì jiādiǎn xuánlǜ nǐ huì juéde chāo diǎo
Wǒ de qiāng bù huì zhuāng dànyào...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024284,
      'music_title_url' => 'hip-hop-stewardess-tiep-vien-hip-hop~chau-kiet-luan',
      'music_title' => 'Hip-Hop Stewardess (Tiếp Viên Hip-Hop; 嘻哈空姐)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534697531,
      'music_last_update_time' => 1350029993,
      'music_title_search' => 'hip hop xtewardex; tip vin hip hop; 嘻哈空姐',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 11022,
      'music_track_id' => 0,
      'music_filename' => '1024284-b9e0214d.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Qǐ luòjià líkāi dìshàng kōngjiě qīnqiè de jiǎng
Qǐng wǒ dǎkāi zhēyáng bǎn jiāng ānquán dài xì shàng
Jiēzhe wèn shìfǒu yòng cān xū bù xūyào máotǎn
Ér wǒ chénshuì zài kècāng mèngjìng zài wǒ zhèng shà...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024285,
      'music_title_url' => 'tu-bien-tu-dien~chau-kiet-luan',
      'music_title' => 'Tự Biên Tự Diễn',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1418826473,
      'music_last_update_time' => 1350030010,
      'music_title_search' => 'tu bin tu din',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 4661,
      'music_track_id' => 0,
      'music_filename' => '1024285-a854e2e0.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '巷    口  甩    尾  甩    开  了 过  去 的 熟  悉
Xiàng kǒu shuǎi wěi shuǎi kāi le guò qù de shú xī
照   後  镜   的 你 比 脑  海  清   晰
Zhào hòu jìng de nǐ bǐ náo hǎi qīng xī
你 我 距 离 就  像    打 滑  和 那 飘   移
Nǐ wǒ jù l...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024286,
      'music_title_url' => 'the-era-vuot-thoi-dai~chau-kiet-luan',
      'music_title' => 'The Era (Vượt Thời Đại; 跨 時代)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1440658130,
      'music_last_update_time' => 1350030170,
      'music_title_search' => 'the era; vut thoi dai; 跨 時代',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5340,
      'music_track_id' => 0,
      'music_filename' => '1024286-8f5086ef.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Zhōng nì shízhōng ér rào è wù zhēngníng de qīngcháo
Wǒ qiānbēi ānjìng de yú chéngbǎo xià de wǎn dǎo
Yāyì yuǎngǔ liúcuàn de mánhuāng ànhào
Ér guǎnfēngqín jiàn gāoào de shuō nà zhǐshì zài túláo.

Ào...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1174137,
      'music_title_url' => 'tong-hua~jason-chen-j-rice',
      'music_title' => 'Tong Hua (童话)',
      'music_artist' => 'Jason Chen;J Rice',
      'music_artist_id' => '2174;26418',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533007981,
      'music_last_update_time' => 1385431517,
      'music_title_search' => 'tong hua; 童话',
      'music_artist_search' => '; jaxon chen; j rice;',
      'music_album_search' => '',
      'music_composer' => 'Guang Liang',
      'music_album' => '',
      'music_listen' => 7689,
      'music_track_id' => 0,
      'music_filename' => '1174137-71ab89ce.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Ver1:]
Don\'t know how long 
It\'s been a while since 
You told me...your favorite story. 

It\'s been on my mind 
Driving me crazy 
Am I the reason that (you\'re crying now) harmony 
B-section. 

I s...',
      'music_artist_html' => '<a href="/ca-si/Jason-Chen~Y3NuX2FydGlzdH4yMTc0.html">Jason Chen</a>, <a href="/ca-si/J-Rice~Y3NuX2FydGlzdH4yNjQxOA==.html">J Rice</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1182635,
      'music_title_url' => 'phao-hoa-chong-tan-yan-hua-yi-leng-vietsub~chau-kiet-luan',
      'music_title' => 'Pháo Hoa Chóng Tàn (Yan Hua Yi Leng) (Vietsub)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536470813,
      'music_last_update_time' => 1386931025,
      'music_title_search' => 'phao hoa chong tan; ian hua i leng ; vitxub',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 20072,
      'music_track_id' => 3,
      'music_filename' => '1182635-c0275481.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Fánhuá shēng dùn rù kōngmén zhé shā le shìrén
Mèng piān lěng zhǎnzhuǎn yīshēng qíng zhài yòu jǐ běn
Rú nǐ mòrèn shēngsǐ kū děng
Kū děng yī quān yòu yī quān de niánlún.

Fútú tǎ duàn le jǐ céng duàn...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1184898,
      'music_title_url' => 'mua-roi-thau-dem-yu-xia-yi-zheng-wen-vietsub~chau-kiet-luan',
      'music_title' => 'Mưa Rơi Thâu Đêm (Yu Xia Yi Zheng Wen) (Vietsub)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525661729,
      'music_last_update_time' => 1387419965,
      'music_title_search' => 'mua roi thau dem; iu xia i zheng wen ; vitxub',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3914,
      'music_track_id' => 6,
      'music_filename' => '1184898-fff273f4.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '街灯下的橱窗 有一种落寞的温暖
Jiē dēng xià de chú chuāng yǒu yī zhǒng luò mò de wēn nuǎn
吐气在玻璃上 画着你的模样
Tú tiē zài bō lí shàng huà zhe nǐ de mú yàng
开着车漫无目的的转弯 不知要去哪个地方
Kāi zhe chē màn wú mù dì dì zhuàn wān bù zh...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1233001,
      'music_title_url' => 'tuy-hong-nhan~luu-y-doa',
      'music_title' => 'Tuý Hồng Nhan',
      'music_artist' => 'Lưu Y Đoá',
      'music_artist_id' => '33257',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536657033,
      'music_last_update_time' => 1424778986,
      'music_title_search' => 'ti hong nhan',
      'music_artist_search' => '; lu i doa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 29263,
      'music_track_id' => 0,
      'music_filename' => '1233001-4b298b36.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Á là là lá la là la...
Là á lá là lá la...
Lá a là lá la là là lá la...
Lá a à á a hà ha ...
Hà há há a a à à a ...
Há a ha à hà ha hà...
Là á là há á la là...
Lá la lá là la...
Há a há à hà a à......',
      'music_artist_html' => '<a href="/ca-si/Luu-Y-Doa~Y3NuX2FydGlzdH4zMzI1Nw==.html">Lưu Y Đoá</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1422961,
      'music_title_url' => 'cha-father~chau-kiet-luan-chris-hung',
      'music_title' => 'Cha (Father; 阿爸)',
      'music_artist' => 'Châu Kiệt Luân;Chris Hung',
      'music_artist_id' => '13;25355',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496240637,
      'music_last_update_time' => 1418263671,
      'music_title_search' => 'cha; father; 阿爸',
      'music_artist_search' => '; jai chou; chrix hung;',
      'music_album_search' => '',
      'music_composer' => 'Phương Văn Sơn',
      'music_album' => '',
      'music_listen' => 588,
      'music_track_id' => 0,
      'music_filename' => '1422961-fb5df911.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '我尚親愛ㄟ阿爸
Wǒ shàng qīn ài ei ā bà

阮想馬擱叫你一聲
Ruǎn xiǎng mǎ gē jiào nǐ yī shēng

唱以早你寫ㄟ歌
Chàng yǐ zǎo nǐ xiě ei gē

感情放落唱不煞
Gǎn qíng fàng luò chàng bù shā
-----------------------------------

我尚思念ㄟ阿爸
W...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>, <a href="/ca-si/Chris-Hung~Y3NuX2FydGlzdH4yNTM1NQ==.html">Chris Hung</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1460706,
      'music_title_url' => 'than-thoai-trang-sao~kim-sa',
      'music_title' => 'Thần Thoại Trăng Sao (星月神话)',
      'music_artist' => 'Kim Sa',
      'music_artist_id' => '4417',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1513693031,
      'music_last_update_time' => 1424742874,
      'music_title_search' => 'than thoai chang xao; 星月神话',
      'music_artist_search' => '; kim xa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 57499,
      'music_track_id' => 0,
      'music_filename' => '1460706-55a664f6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '我的一生最美好的场景
Wo de yi sheng zui mei hao de chang jing
就是遇见你
Jiu shi yu jian ni
在人海茫茫中静静凝望着你
Zai ren hai mang mang zhong jing jing ning wang zhe ni
陌生又熟悉
Mo sheng you shou xi.

尽管呼吸着同一天空的气息
Jin guan h...',
      'music_artist_html' => '<a href="/ca-si/Kim-Sa~Y3NuX2FydGlzdH40NDE3.html">Kim Sa</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1548873,
      'music_title_url' => 'co-ai-tung-noi-voi-em-chua~tran-kha-sinh',
      'music_title' => 'Có Ai Từng Nói Với Em Chưa (有没有人告诉你)',
      'music_artist' => 'Trần Khả Sinh',
      'music_artist_id' => '71822',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537010466,
      'music_last_update_time' => 1441773277,
      'music_title_search' => 'co ai tung noi voi em chua; 有没有人告诉你',
      'music_artist_search' => '; chan kha xinh;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5857,
      'music_track_id' => 0,
      'music_filename' => '1548873-b133b29d.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Tran-Kha-Sinh~Y3NuX2FydGlzdH43MTgyMg==.html">Trần Khả Sinh</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1724781,
      'music_title_url' => 'than-thoai-trang-sao~kim-sa',
      'music_title' => 'Thần Thoại Trăng Sao',
      'music_artist' => 'Kim Sa',
      'music_artist_id' => '4417',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1476000826,
      'music_last_update_time' => 1475990832,
      'music_title_search' => 'than thoai chang xao',
      'music_artist_search' => '; kim xa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 166,
      'music_track_id' => 0,
      'music_filename' => '1724781-ce19aca1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Kim-Sa~Y3NuX2FydGlzdH40NDE3.html">Kim Sa</a>',
    ),
  ),
  4 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1151344,
      'music_title_url' => 'no-other~super-junior',
      'music_title' => 'No Other',
      'music_artist' => 'Super Junior',
      'music_artist_id' => '213',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538780934,
      'music_last_update_time' => 1382341125,
      'music_title_search' => 'no other',
      'music_artist_search' => '; xuper junior;',
      'music_album_search' => '',
      'music_composer' => 'Kenzie; Denzil &quot;DR&quot; Remedios; Kibwe &quot;12Keyz&quot; Luke; Ryan Jhun; Reefa',
      'music_album' => '',
      'music_listen' => 140513,
      'music_track_id' => 0,
      'music_filename' => '1151344-99a442fd.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '[Siwon] Neo gateun saram tto eopseo juwireul dureobwado geujeo georeohdeongeol eodiseo channi
Neo gatchi joheun saram neo gatchi joheun saram neo gatchi joheun ma eum neo gatchi joheun seonmul
[Yes...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 301261,
      'music_title_url' => 'bonamana~super-junior',
      'music_title' => 'Bonamana',
      'music_artist' => 'Super Junior',
      'music_artist_id' => '213',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1435652763,
      'music_last_update_time' => 1437313153,
      'music_title_search' => 'bonamana',
      'music_artist_search' => '; xuper junior;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9998,
      'music_track_id' => 0,
      'music_filename' => '301261-07502b73.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => '(Nal barabwara)

Ddanddaranddan, ddanddaranddan, ddanddaranddan, ddadaddarabba
Ddanddaranddan, ddanddaranddan, ddanddaranddan, ddadaddarabba.

Neon alkkamalkka alkkamalkka neomu yeppeun miinah
Nal...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1018088,
      'music_title_url' => 'oh-yeah-live~g-dragon-top-park-bom-2ne1',
      'music_title' => 'Oh Yeah (Live)',
      'music_artist' => 'G-Dragon;TOP;Park Bom;2NE1',
      'music_artist_id' => '1682;2035;2036;1570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1528260773,
      'music_last_update_time' => 1348130826,
      'music_title_search' => 'oh iah; live',
      'music_artist_search' => '; g dragon; top; park bom; 2ne1;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 22661,
      'music_track_id' => 0,
      'music_filename' => '1018088-a17da417.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Oh yeah oh yeah
Oh yeah oh yeah
Oh yeah oh yeah
Oh yeah oh yeah.

Sarangeun bolling nae mal hanmadimyeon neomeoga
Gwishine hollin deut neol bomyeon naega neomeoga
Ti naegin shirhjiman imi you ro-ro...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1036220,
      'music_title_url' => 'losing-my-mind~lee-seung-gi',
      'music_title' => 'Losing My Mind',
      'music_artist' => 'Lee Seung Gi',
      'music_artist_id' => '3823',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534866386,
      'music_last_update_time' => 1383797699,
      'music_title_search' => 'loxing mi mind',
      'music_artist_search' => '; le xeung d;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 91715,
      'music_track_id' => 0,
      'music_filename' => '1036220-0e7b2f13.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'No~no~ jeong shi ni na gas seo na bwa geut taen
Nae ga eot teoh ge neo reul teo na ga
Neo ma neul sa rang hea jeong mal mi ann hea
Nun mul man heul leo nael yeo
Jeong shi ni na gas seo na bwa geut...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1045946,
      'music_title_url' => 'cant-nobody~2ne1',
      'music_title' => 'Can\'t Nobody',
      'music_artist' => '2NE1',
      'music_artist_id' => '1570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1506896557,
      'music_last_update_time' => 1355277457,
      'music_title_search' => 'can t nobodi',
      'music_artist_search' => '; 2ne1;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 140617,
      'music_track_id' => 0,
      'music_filename' => '1045946-e870cb83.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Galmankeum gagaetji
Oneulbamdo gilgaetji
Boonwigi tagaetji
Joljol ddara ol taeji
Nan cham bappeun geol
I welcome you to my world
2-N-E-1.

Areumdaun Seoul city
Shikkeuro-un eumaksori
Kkaman noon ga...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1045949,
      'music_title_url' => 'queen~iu',
      'music_title' => 'Queen',
      'music_artist' => 'IU',
      'music_artist_id' => '2059',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1511668612,
      'music_last_update_time' => 1354931469,
      'music_title_search' => 'quen',
      'music_artist_search' => '; iu;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 16984,
      'music_track_id' => 0,
      'music_filename' => '1045949-9489e507.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Oh Ladies~
This is your story
잘 듣고 널 찾아봐 hey listen.

더 높은 네 Kill heels
네 over denim loo~looks
손끝엔 빛나는 bling bling
핑크빛 lip glo~loss.

거울 속에 비친 널 한번 바라봐
Oh! 그래 그래
You So Cool!

* 널 사로잡은 Girl So Sexy...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1045966,
      'music_title_url' => 'cabi-song~2pm-girls-generation',
      'music_title' => 'Cabi Song',
      'music_artist' => '2PM;Girls\' Generation',
      'music_artist_id' => '1820;922',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1511415242,
      'music_last_update_time' => 1354933672,
      'music_title_search' => 'cabi xong',
      'music_artist_search' => '; 2pm; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 393937,
      'music_track_id' => 0,
      'music_filename' => '1045966-87d410be.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'C A B I yeogi e moyeobwa
C A B I tteugeo un neowa na
C A B I every time all right
C A B I Oh~ wild river.

* Oh Cabi Cabi deo Hottest Hottest
Oh Cabi Cabi in crazy crazy
Oh Cabi Cabi oh Cabi Cabi
I...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1046007,
      'music_title_url' => 'bonamana~super-junior',
      'music_title' => 'Bonamana',
      'music_artist' => 'Super Junior',
      'music_artist_id' => '213',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1437260055,
      'music_last_update_time' => 1354932839,
      'music_title_search' => 'bonamana',
      'music_artist_search' => '; xuper junior;',
      'music_album_search' => '',
      'music_composer' => 'Super Junior',
      'music_album' => '',
      'music_listen' => 1146168,
      'music_track_id' => 0,
      'music_filename' => '1046007-012669d0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '(Nal barabwara)

Ddanddaranddan, ddanddaranddan, ddanddaranddan,ddadaddarabba
Ddanddaranddan, ddanddaranddan,ddanddaranddan,ddadaddarabba.

[Siwon] Neon alkkamalkka alkkamalkka neomu yeppeun miinah...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1055433,
      'music_title_url' => 'hot-issue~4minute',
      'music_title' => 'Hot Issue',
      'music_artist' => '4Minute',
      'music_artist_id' => '1571',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538187232,
      'music_last_update_time' => 1357358245,
      'music_title_search' => 'hot ixue',
      'music_artist_search' => '; 4minute;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 43746,
      'music_track_id' => 0,
      'music_filename' => '1055433-3766bf1d.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Stop
Yo, let me show you something
Girls, you ready
Let\'s go
4 M i n u t e
4 M i n u t e girl.

Meoli bootuh balggeut ggaji hot issue
Nae modeun gut hana hana hot issue
Modooda take control
Nan han...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1055434,
      'music_title_url' => 'muzik~4minute',
      'music_title' => 'Muzik',
      'music_artist' => '4Minute',
      'music_artist_id' => '1571',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519827902,
      'music_last_update_time' => 1357359364,
      'music_title_search' => 'muzik',
      'music_artist_search' => '; 4minute;',
      'music_album_search' => '',
      'music_composer' => '4Minute',
      'music_album' => '',
      'music_listen' => 39189,
      'music_track_id' => 0,
      'music_filename' => '1055434-6c4a35f0.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Boom, boom, boom, like it, like it
Boom, boom, boom, like it
Boom, boom, boom, like it, like it
Boom, boom, boom, like it,

Neowa naega ppajyeo deuneun rideum soge move
Geochim eobshi ssodajineun i...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1067049,
      'music_title_url' => 'lucifer~shinee',
      'music_title' => 'Lucifer',
      'music_artist' => 'SHINee',
      'music_artist_id' => '1821',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522209243,
      'music_last_update_time' => 1361584757,
      'music_title_search' => 'lucifer',
      'music_artist_search' => '; thine;',
      'music_album_search' => '',
      'music_composer' => 'SHINee',
      'music_album' => '',
      'music_listen' => 48189,
      'music_track_id' => 0,
      'music_filename' => '1067049-b6d3f07e.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. Soomeul gotdo chatji mothae naneun piharyeogo aesseobwado
Geobu jocha hal su eopneun negae gad hyeobeorin na
Sarang eeyeot damyeon jungmal sarang haetdeon geo ramyeon
Naegae eereo jineun mala
He...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1067050,
      'music_title_url' => 'hello~shinee',
      'music_title' => 'Hello',
      'music_artist' => 'SHINee',
      'music_artist_id' => '1821',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1517472284,
      'music_last_update_time' => 1361584778,
      'music_title_search' => 'helo',
      'music_artist_search' => '; thine;',
      'music_album_search' => '',
      'music_composer' => 'SHINee',
      'music_album' => '',
      'music_listen' => 17766,
      'music_track_id' => 0,
      'music_filename' => '1067050-5bb1e04b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Jonghyun] eereol ddaereul bomyeon na origineun hangabwa nun ape dugodo ojji hal jul molla
[Onew] Eotteohke deul sarangeul shijakhago itneunji saranghaneun saramdeul marhaejwoyo

[Taemin] eonjenga...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1068020,
      'music_title_url' => 'cabi-song-caribbean-bay-cf~girls-generation-2pm',
      'music_title' => 'Cabi Song (Caribbean Bay CF)',
      'music_artist' => 'Girls Generation;2PM',
      'music_artist_id' => '10391;1820',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536739566,
      'music_last_update_time' => 1361844197,
      'music_title_search' => 'cabi xong; caribean bai cf',
      'music_artist_search' => '; drlx generation; 2pm;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 60961,
      'music_track_id' => 0,
      'music_filename' => '1068020-55e18fe1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'C A B I yeogi e moyeobwa
C A B I tteugeo un neowa na
C A B I every time all right
C A B I Oh~ wild river.

* Oh Cabi Cabi deo Hottest Hottest
Oh Cabi Cabi in crazy crazy
Oh Cabi Cabi oh Cabi Cabi
I...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1068593,
      'music_title_url' => 'i-need-a-girl~tae-yang-g-dragon',
      'music_title' => 'I Need A Girl',
      'music_artist' => 'Tae Yang;G-Dragon',
      'music_artist_id' => '983;1682',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1513782503,
      'music_last_update_time' => 1362015486,
      'music_title_search' => 'i ned a drl',
      'music_artist_search' => '; tae iang; g dragon;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 200176,
      'music_track_id' => 0,
      'music_filename' => '1068593-514c6dee.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Tired of being alone
Sick of being single
I think I need me a girl
I need a Girl like...

Saenggak eopneun altu 
Eorinaedeul malgu nal gamssa anajul yeah~
Simsim halttae gakkeum
Noneun yeoja malgu...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1068815,
      'music_title_url' => 'beautiful-hangover~big-bang',
      'music_title' => 'Beautiful Hangover',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1513725711,
      'music_last_update_time' => 1362102208,
      'music_title_search' => 'beautiful hangover',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => 'Big Bang',
      'music_album' => '',
      'music_listen' => 153454,
      'music_track_id' => 0,
      'music_filename' => '1068815-63f7038b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Kimi wa my beautiful hangover
Hangover yeah

Kagayaku headlight nemuranai machi e　are you ready
Koko kara ga shoubu　ase-razu ni　genkai made zenkai de ikou!

Nagareru radio　chijimeru kyori wo　oh oh...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089476,
      'music_title_url' => 'ill-be-there~taeyang',
      'music_title' => 'I\'ll Be There',
      'music_artist' => 'Taeyang',
      'music_artist_id' => '12145',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532535775,
      'music_last_update_time' => 1368685225,
      'music_title_search' => 'i l be there',
      'music_artist_search' => '; taeiang;',
      'music_album_search' => '',
      'music_composer' => 'Taeyang',
      'music_album' => '',
      'music_listen' => 13539,
      'music_track_id' => 0,
      'music_filename' => '1089476-8591b13f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'I\'ll be, i\'ll be, i\'ll be there girl
I\'ll be, i\'ll be, i\'ll be there girl

Idaero majimagiran
Malmaneun jebal hajima
Chakhan neol apeuge haetdeon
Maeil nunmul heullige haetdeon
Naraneun sarameun co...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089504,
      'music_title_url' => 'baby-goodnight~g-dragontop',
      'music_title' => 'Baby Goodnight',
      'music_artist' => 'G-Dragon;TOP',
      'music_artist_id' => '1682;2035',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538148004,
      'music_last_update_time' => 1369033325,
      'music_title_search' => 'babi godnight',
      'music_artist_search' => '; g dragon;top;',
      'music_album_search' => '',
      'music_composer' => 'G-Dragon',
      'music_album' => '',
      'music_listen' => 13436,
      'music_track_id' => 0,
      'music_filename' => '1089504-14810d1a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Baby good night [x5]

Geudaega jamdeun moseup geuryeobolkka
Deoneun sujubeo ma
Neon imi namanui yeojaingeol
Jareun mollado naegen geurae
Geudaen naege gwabunhan jonjae
Neon wanbyeokhae nae gyeote i...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089643,
      'music_title_url' => 'it-hurts~2ne1',
      'music_title' => 'It Hurts',
      'music_artist' => '2NE1',
      'music_artist_id' => '1570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535560932,
      'music_last_update_time' => 1483503969,
      'music_title_search' => 'it hurtx',
      'music_artist_search' => '; 2ne1;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 164755,
      'music_track_id' => 0,
      'music_filename' => '1089643-31c82ca8.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Naega jun sinbareul singo keunyeowa gireul geolgo
Amureohji anhge keunyeowa kiss hago
Naega jun hyangsu ppurigo keunyeoreul pume ango
Nawa haetdeon keu yaksuk ddo dasi hagetjyo.

Urin imi neujeotna...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089653,
      'music_title_url' => 'clap-your-hands~2ne1',
      'music_title' => 'Clap Your Hands',
      'music_artist' => '2NE1',
      'music_artist_id' => '1570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538293740,
      'music_last_update_time' => 1369033955,
      'music_title_search' => 'clap iour handx',
      'music_artist_search' => '; 2ne1;',
      'music_album_search' => '',
      'music_composer' => '2NE1',
      'music_album' => '',
      'music_listen' => 82023,
      'music_track_id' => 0,
      'music_filename' => '1089653-c6294fdb.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Minzi
Bakssu cheo
Modu bakssu cheo
Minzi
Bakssu cheo
Modu bakssu cheo
Minzi
Modu bakssu cheo
Modu bakssu cheo
Minzi
Nega eodieseo mueoseul hadeon
Geokjjeong geunsim ttawin beorigo da sonppyeok cheo...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089655,
      'music_title_url' => 'you-i~park-bom',
      'music_title' => 'You &amp; I',
      'music_artist' => 'Park Bom',
      'music_artist_id' => '2036',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521166475,
      'music_last_update_time' => 1369034210,
      'music_title_search' => 'iou i',
      'music_artist_search' => '; park bom;',
      'music_album_search' => '',
      'music_composer' => 'Teddy; Choice37; CL',
      'music_album' => '',
      'music_listen' => 10280,
      'music_track_id' => 0,
      'music_filename' => '1089655-3aa0bc5c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'No matter what happens
Even when the sky is falling down
I\'ll promise you
That I\'ll never let you go.

You naega sseureojilddae
Jeoldae heundeullimeopsi
Ganghan nunbicheuro
Myeotbeonigo nal ileukye...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1151344,
      'music_title_url' => 'no-other~super-junior',
      'music_title' => 'No Other',
      'music_artist' => 'Super Junior',
      'music_artist_id' => '213',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538780934,
      'music_last_update_time' => 1382341125,
      'music_title_search' => 'no other',
      'music_artist_search' => '; xuper junior;',
      'music_album_search' => '',
      'music_composer' => 'Kenzie; Denzil &quot;DR&quot; Remedios; Kibwe &quot;12Keyz&quot; Luke; Ryan Jhun; Reefa',
      'music_album' => '',
      'music_listen' => 140513,
      'music_track_id' => 0,
      'music_filename' => '1151344-99a442fd.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '[Siwon] Neo gateun saram tto eopseo juwireul dureobwado geujeo georeohdeongeol eodiseo channi
Neo gatchi joheun saram neo gatchi joheun saram neo gatchi joheun ma eum neo gatchi joheun seonmul
[Yes...',
      'music_artist_html' => '<a href="/ca-si/Super-Junior~Y3NuX2FydGlzdH4yMTM=.html">Super Junior</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 301261,
      'music_title_url' => 'bonamana~super-junior',
      'music_title' => 'Bonamana',
      'music_artist' => 'Super Junior',
      'music_artist_id' => '213',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1435652763,
      'music_last_update_time' => 1437313153,
      'music_title_search' => 'bonamana',
      'music_artist_search' => '; xuper junior;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9998,
      'music_track_id' => 0,
      'music_filename' => '301261-07502b73.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => '(Nal barabwara)

Ddanddaranddan, ddanddaranddan, ddanddaranddan, ddadaddarabba
Ddanddaranddan, ddanddaranddan, ddanddaranddan, ddadaddarabba.

Neon alkkamalkka alkkamalkka neomu yeppeun miinah
Nal...',
      'music_artist_html' => '<a href="/ca-si/Super-Junior~Y3NuX2FydGlzdH4yMTM=.html">Super Junior</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1018088,
      'music_title_url' => 'oh-yeah-live~g-dragon-top-park-bom-2ne1',
      'music_title' => 'Oh Yeah (Live)',
      'music_artist' => 'G-Dragon;TOP;Park Bom;2NE1',
      'music_artist_id' => '1682;2035;2036;1570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1528260773,
      'music_last_update_time' => 1348130826,
      'music_title_search' => 'oh iah; live',
      'music_artist_search' => '; g dragon; top; park bom; 2ne1;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 22661,
      'music_track_id' => 0,
      'music_filename' => '1018088-a17da417.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Oh yeah oh yeah
Oh yeah oh yeah
Oh yeah oh yeah
Oh yeah oh yeah.

Sarangeun bolling nae mal hanmadimyeon neomeoga
Gwishine hollin deut neol bomyeon naega neomeoga
Ti naegin shirhjiman imi you ro-ro...',
      'music_artist_html' => '<a href="/ca-si/G-Dragon~Y3NuX2FydGlzdH4xNjgy.html">G-Dragon</a>, <a href="/ca-si/TOP~Y3NuX2FydGlzdH4yMDM1.html">TOP</a>, <a href="/ca-si/Park-Bom~Y3NuX2FydGlzdH4yMDM2.html">Park Bom</a>, <a href="/ca-si/2NE1~Y3NuX2FydGlzdH4xNTcw.html">2NE1</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1036220,
      'music_title_url' => 'losing-my-mind~lee-seung-gi',
      'music_title' => 'Losing My Mind',
      'music_artist' => 'Lee Seung Gi',
      'music_artist_id' => '3823',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534866386,
      'music_last_update_time' => 1383797699,
      'music_title_search' => 'loxing mi mind',
      'music_artist_search' => '; le xeung d;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 91715,
      'music_track_id' => 0,
      'music_filename' => '1036220-0e7b2f13.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'No~no~ jeong shi ni na gas seo na bwa geut taen
Nae ga eot teoh ge neo reul teo na ga
Neo ma neul sa rang hea jeong mal mi ann hea
Nun mul man heul leo nael yeo
Jeong shi ni na gas seo na bwa geut...',
      'music_artist_html' => '<a href="/ca-si/Lee-Seung-Gi~Y3NuX2FydGlzdH4zODIz.html">Lee Seung Gi</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1045946,
      'music_title_url' => 'cant-nobody~2ne1',
      'music_title' => 'Can\'t Nobody',
      'music_artist' => '2NE1',
      'music_artist_id' => '1570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1506896557,
      'music_last_update_time' => 1355277457,
      'music_title_search' => 'can t nobodi',
      'music_artist_search' => '; 2ne1;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 140617,
      'music_track_id' => 0,
      'music_filename' => '1045946-e870cb83.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Galmankeum gagaetji
Oneulbamdo gilgaetji
Boonwigi tagaetji
Joljol ddara ol taeji
Nan cham bappeun geol
I welcome you to my world
2-N-E-1.

Areumdaun Seoul city
Shikkeuro-un eumaksori
Kkaman noon ga...',
      'music_artist_html' => '<a href="/ca-si/2NE1~Y3NuX2FydGlzdH4xNTcw.html">2NE1</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1045949,
      'music_title_url' => 'queen~iu',
      'music_title' => 'Queen',
      'music_artist' => 'IU',
      'music_artist_id' => '2059',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1511668612,
      'music_last_update_time' => 1354931469,
      'music_title_search' => 'quen',
      'music_artist_search' => '; iu;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 16984,
      'music_track_id' => 0,
      'music_filename' => '1045949-9489e507.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Oh Ladies~
This is your story
잘 듣고 널 찾아봐 hey listen.

더 높은 네 Kill heels
네 over denim loo~looks
손끝엔 빛나는 bling bling
핑크빛 lip glo~loss.

거울 속에 비친 널 한번 바라봐
Oh! 그래 그래
You So Cool!

* 널 사로잡은 Girl So Sexy...',
      'music_artist_html' => '<a href="/ca-si/IU~Y3NuX2FydGlzdH4yMDU5.html">IU</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1045966,
      'music_title_url' => 'cabi-song~2pm-girls-generation',
      'music_title' => 'Cabi Song',
      'music_artist' => '2PM;Girls\' Generation',
      'music_artist_id' => '1820;922',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1511415242,
      'music_last_update_time' => 1354933672,
      'music_title_search' => 'cabi xong',
      'music_artist_search' => '; 2pm; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 393937,
      'music_track_id' => 0,
      'music_filename' => '1045966-87d410be.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'C A B I yeogi e moyeobwa
C A B I tteugeo un neowa na
C A B I every time all right
C A B I Oh~ wild river.

* Oh Cabi Cabi deo Hottest Hottest
Oh Cabi Cabi in crazy crazy
Oh Cabi Cabi oh Cabi Cabi
I...',
      'music_artist_html' => '<a href="/ca-si/2PM~Y3NuX2FydGlzdH4xODIw.html">2PM</a>, <a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH45MjI=.html">Girls\' Generation</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1046007,
      'music_title_url' => 'bonamana~super-junior',
      'music_title' => 'Bonamana',
      'music_artist' => 'Super Junior',
      'music_artist_id' => '213',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1437260055,
      'music_last_update_time' => 1354932839,
      'music_title_search' => 'bonamana',
      'music_artist_search' => '; xuper junior;',
      'music_album_search' => '',
      'music_composer' => 'Super Junior',
      'music_album' => '',
      'music_listen' => 1146168,
      'music_track_id' => 0,
      'music_filename' => '1046007-012669d0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '(Nal barabwara)

Ddanddaranddan, ddanddaranddan, ddanddaranddan,ddadaddarabba
Ddanddaranddan, ddanddaranddan,ddanddaranddan,ddadaddarabba.

[Siwon] Neon alkkamalkka alkkamalkka neomu yeppeun miinah...',
      'music_artist_html' => '<a href="/ca-si/Super-Junior~Y3NuX2FydGlzdH4yMTM=.html">Super Junior</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1055433,
      'music_title_url' => 'hot-issue~4minute',
      'music_title' => 'Hot Issue',
      'music_artist' => '4Minute',
      'music_artist_id' => '1571',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538187232,
      'music_last_update_time' => 1357358245,
      'music_title_search' => 'hot ixue',
      'music_artist_search' => '; 4minute;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 43746,
      'music_track_id' => 0,
      'music_filename' => '1055433-3766bf1d.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Stop
Yo, let me show you something
Girls, you ready
Let\'s go
4 M i n u t e
4 M i n u t e girl.

Meoli bootuh balggeut ggaji hot issue
Nae modeun gut hana hana hot issue
Modooda take control
Nan han...',
      'music_artist_html' => '<a href="/ca-si/4Minute~Y3NuX2FydGlzdH4xNTcx.html">4Minute</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1055434,
      'music_title_url' => 'muzik~4minute',
      'music_title' => 'Muzik',
      'music_artist' => '4Minute',
      'music_artist_id' => '1571',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519827902,
      'music_last_update_time' => 1357359364,
      'music_title_search' => 'muzik',
      'music_artist_search' => '; 4minute;',
      'music_album_search' => '',
      'music_composer' => '4Minute',
      'music_album' => '',
      'music_listen' => 39189,
      'music_track_id' => 0,
      'music_filename' => '1055434-6c4a35f0.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Boom, boom, boom, like it, like it
Boom, boom, boom, like it
Boom, boom, boom, like it, like it
Boom, boom, boom, like it,

Neowa naega ppajyeo deuneun rideum soge move
Geochim eobshi ssodajineun i...',
      'music_artist_html' => '<a href="/ca-si/4Minute~Y3NuX2FydGlzdH4xNTcx.html">4Minute</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1067049,
      'music_title_url' => 'lucifer~shinee',
      'music_title' => 'Lucifer',
      'music_artist' => 'SHINee',
      'music_artist_id' => '1821',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522209243,
      'music_last_update_time' => 1361584757,
      'music_title_search' => 'lucifer',
      'music_artist_search' => '; thine;',
      'music_album_search' => '',
      'music_composer' => 'SHINee',
      'music_album' => '',
      'music_listen' => 48189,
      'music_track_id' => 0,
      'music_filename' => '1067049-b6d3f07e.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. Soomeul gotdo chatji mothae naneun piharyeogo aesseobwado
Geobu jocha hal su eopneun negae gad hyeobeorin na
Sarang eeyeot damyeon jungmal sarang haetdeon geo ramyeon
Naegae eereo jineun mala
He...',
      'music_artist_html' => '<a href="/ca-si/SHINee~Y3NuX2FydGlzdH4xODIx.html">SHINee</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1067050,
      'music_title_url' => 'hello~shinee',
      'music_title' => 'Hello',
      'music_artist' => 'SHINee',
      'music_artist_id' => '1821',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1517472284,
      'music_last_update_time' => 1361584778,
      'music_title_search' => 'helo',
      'music_artist_search' => '; thine;',
      'music_album_search' => '',
      'music_composer' => 'SHINee',
      'music_album' => '',
      'music_listen' => 17766,
      'music_track_id' => 0,
      'music_filename' => '1067050-5bb1e04b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Jonghyun] eereol ddaereul bomyeon na origineun hangabwa nun ape dugodo ojji hal jul molla
[Onew] Eotteohke deul sarangeul shijakhago itneunji saranghaneun saramdeul marhaejwoyo

[Taemin] eonjenga...',
      'music_artist_html' => '<a href="/ca-si/SHINee~Y3NuX2FydGlzdH4xODIx.html">SHINee</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1068020,
      'music_title_url' => 'cabi-song-caribbean-bay-cf~girls-generation-2pm',
      'music_title' => 'Cabi Song (Caribbean Bay CF)',
      'music_artist' => 'Girls Generation;2PM',
      'music_artist_id' => '10391;1820',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536739566,
      'music_last_update_time' => 1361844197,
      'music_title_search' => 'cabi xong; caribean bai cf',
      'music_artist_search' => '; drlx generation; 2pm;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 60961,
      'music_track_id' => 0,
      'music_filename' => '1068020-55e18fe1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'C A B I yeogi e moyeobwa
C A B I tteugeo un neowa na
C A B I every time all right
C A B I Oh~ wild river.

* Oh Cabi Cabi deo Hottest Hottest
Oh Cabi Cabi in crazy crazy
Oh Cabi Cabi oh Cabi Cabi
I...',
      'music_artist_html' => '<a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH4xMDM5MQ==.html">Girls Generation</a>, <a href="/ca-si/2PM~Y3NuX2FydGlzdH4xODIw.html">2PM</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1068593,
      'music_title_url' => 'i-need-a-girl~tae-yang-g-dragon',
      'music_title' => 'I Need A Girl',
      'music_artist' => 'Tae Yang;G-Dragon',
      'music_artist_id' => '983;1682',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1513782503,
      'music_last_update_time' => 1362015486,
      'music_title_search' => 'i ned a drl',
      'music_artist_search' => '; tae iang; g dragon;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 200176,
      'music_track_id' => 0,
      'music_filename' => '1068593-514c6dee.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Tired of being alone
Sick of being single
I think I need me a girl
I need a Girl like...

Saenggak eopneun altu 
Eorinaedeul malgu nal gamssa anajul yeah~
Simsim halttae gakkeum
Noneun yeoja malgu...',
      'music_artist_html' => '<a href="/ca-si/Tae-Yang~Y3NuX2FydGlzdH45ODM=.html">Tae Yang</a>, <a href="/ca-si/G-Dragon~Y3NuX2FydGlzdH4xNjgy.html">G-Dragon</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1068815,
      'music_title_url' => 'beautiful-hangover~big-bang',
      'music_title' => 'Beautiful Hangover',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1513725711,
      'music_last_update_time' => 1362102208,
      'music_title_search' => 'beautiful hangover',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => 'Big Bang',
      'music_album' => '',
      'music_listen' => 153454,
      'music_track_id' => 0,
      'music_filename' => '1068815-63f7038b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Kimi wa my beautiful hangover
Hangover yeah

Kagayaku headlight nemuranai machi e　are you ready
Koko kara ga shoubu　ase-razu ni　genkai made zenkai de ikou!

Nagareru radio　chijimeru kyori wo　oh oh...',
      'music_artist_html' => '<a href="/ca-si/Big-Bang~Y3NuX2FydGlzdH45ODI=.html">Big Bang</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089476,
      'music_title_url' => 'ill-be-there~taeyang',
      'music_title' => 'I\'ll Be There',
      'music_artist' => 'Taeyang',
      'music_artist_id' => '12145',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532535775,
      'music_last_update_time' => 1368685225,
      'music_title_search' => 'i l be there',
      'music_artist_search' => '; taeiang;',
      'music_album_search' => '',
      'music_composer' => 'Taeyang',
      'music_album' => '',
      'music_listen' => 13539,
      'music_track_id' => 0,
      'music_filename' => '1089476-8591b13f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'I\'ll be, i\'ll be, i\'ll be there girl
I\'ll be, i\'ll be, i\'ll be there girl

Idaero majimagiran
Malmaneun jebal hajima
Chakhan neol apeuge haetdeon
Maeil nunmul heullige haetdeon
Naraneun sarameun co...',
      'music_artist_html' => '<a href="/ca-si/Taeyang~Y3NuX2FydGlzdH4xMjE0NQ==.html">Taeyang</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089504,
      'music_title_url' => 'baby-goodnight~g-dragontop',
      'music_title' => 'Baby Goodnight',
      'music_artist' => 'G-Dragon;TOP',
      'music_artist_id' => '1682;2035',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538148004,
      'music_last_update_time' => 1369033325,
      'music_title_search' => 'babi godnight',
      'music_artist_search' => '; g dragon;top;',
      'music_album_search' => '',
      'music_composer' => 'G-Dragon',
      'music_album' => '',
      'music_listen' => 13436,
      'music_track_id' => 0,
      'music_filename' => '1089504-14810d1a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Baby good night [x5]

Geudaega jamdeun moseup geuryeobolkka
Deoneun sujubeo ma
Neon imi namanui yeojaingeol
Jareun mollado naegen geurae
Geudaen naege gwabunhan jonjae
Neon wanbyeokhae nae gyeote i...',
      'music_artist_html' => '<a href="/ca-si/G-Dragon~Y3NuX2FydGlzdH4xNjgy.html">G-Dragon</a>, <a href="/ca-si/TOP~Y3NuX2FydGlzdH4yMDM1.html">TOP</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089643,
      'music_title_url' => 'it-hurts~2ne1',
      'music_title' => 'It Hurts',
      'music_artist' => '2NE1',
      'music_artist_id' => '1570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535560932,
      'music_last_update_time' => 1483503969,
      'music_title_search' => 'it hurtx',
      'music_artist_search' => '; 2ne1;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 164755,
      'music_track_id' => 0,
      'music_filename' => '1089643-31c82ca8.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Naega jun sinbareul singo keunyeowa gireul geolgo
Amureohji anhge keunyeowa kiss hago
Naega jun hyangsu ppurigo keunyeoreul pume ango
Nawa haetdeon keu yaksuk ddo dasi hagetjyo.

Urin imi neujeotna...',
      'music_artist_html' => '<a href="/ca-si/2NE1~Y3NuX2FydGlzdH4xNTcw.html">2NE1</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089653,
      'music_title_url' => 'clap-your-hands~2ne1',
      'music_title' => 'Clap Your Hands',
      'music_artist' => '2NE1',
      'music_artist_id' => '1570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538293740,
      'music_last_update_time' => 1369033955,
      'music_title_search' => 'clap iour handx',
      'music_artist_search' => '; 2ne1;',
      'music_album_search' => '',
      'music_composer' => '2NE1',
      'music_album' => '',
      'music_listen' => 82023,
      'music_track_id' => 0,
      'music_filename' => '1089653-c6294fdb.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Minzi
Bakssu cheo
Modu bakssu cheo
Minzi
Bakssu cheo
Modu bakssu cheo
Minzi
Modu bakssu cheo
Modu bakssu cheo
Minzi
Nega eodieseo mueoseul hadeon
Geokjjeong geunsim ttawin beorigo da sonppyeok cheo...',
      'music_artist_html' => '<a href="/ca-si/2NE1~Y3NuX2FydGlzdH4xNTcw.html">2NE1</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089655,
      'music_title_url' => 'you-i~park-bom',
      'music_title' => 'You &amp; I',
      'music_artist' => 'Park Bom',
      'music_artist_id' => '2036',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521166475,
      'music_last_update_time' => 1369034210,
      'music_title_search' => 'iou i',
      'music_artist_search' => '; park bom;',
      'music_album_search' => '',
      'music_composer' => 'Teddy; Choice37; CL',
      'music_album' => '',
      'music_listen' => 10280,
      'music_track_id' => 0,
      'music_filename' => '1089655-3aa0bc5c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'No matter what happens
Even when the sky is falling down
I\'ll promise you
That I\'ll never let you go.

You naega sseureojilddae
Jeoldae heundeullimeopsi
Ganghan nunbicheuro
Myeotbeonigo nal ileukye...',
      'music_artist_html' => '<a href="/ca-si/Park-Bom~Y3NuX2FydGlzdH4yMDM2.html">Park Bom</a>',
    ),
  ),
  5 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1510185,
      'music_title_url' => 'genie-japanese-version~girls-generation',
      'music_title' => 'Genie (Japanese Version)',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512617370,
      'music_last_update_time' => 1477465946,
      'music_title_search' => 'geni; japanexe verxion',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 195307,
      'music_track_id' => 0,
      'music_filename' => '1510185-78484cc2.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Soweoneul malhaebwa 
Ni maeumsogeh itneun jageun ggumeul malhaebwa
Ni meolieh itneun isanghyeongeul geulyeobwa
Geuligo naleul bwa
Nan neoyi genieya, ggumiya, genieya
Deulimkaleul tago dallyeobwa
Ne...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1510185,
      'music_title_url' => 'genie-japanese-version~girls-generation',
      'music_title' => 'Genie (Japanese Version)',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512617370,
      'music_last_update_time' => 1477465946,
      'music_title_search' => 'geni; japanexe verxion',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 195307,
      'music_track_id' => 0,
      'music_filename' => '1510185-78484cc2.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Soweoneul malhaebwa 
Ni maeumsogeh itneun jageun ggumeul malhaebwa
Ni meolieh itneun isanghyeongeul geulyeobwa
Geuligo naleul bwa
Nan neoyi genieya, ggumiya, genieya
Deulimkaleul tago dallyeobwa
Ne...',
      'music_artist_html' => '<a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH45MjI=.html">Girls\' Generation</a>',
    ),
  ),
  6 => 
  array (
  ),
  7 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1566133,
      'music_title_url' => 'thuo-ban-dau~philip-huy',
      'music_title' => 'Thuở Ban Đầu',
      'music_artist' => 'Philip Huy',
      'music_artist_id' => '1971',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538876605,
      'music_last_update_time' => 1444617033,
      'music_title_search' => 'thu ban dau',
      'music_artist_search' => '; philip hi;',
      'music_album_search' => '',
      'music_composer' => 'Phạm Đình Chương',
      'music_album' => '',
      'music_listen' => 1949,
      'music_track_id' => 0,
      'music_filename' => '1566133-8bdd44f4.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Sao không thấy em lại 
Để cùng anh thẩn thơ 
Trước sân trăng vời vợi 
Để rồi cùng ước mơ. 

Sao không thấy em lại 
Hàng dừa nghiêng thương nhớ 
Và khúc ân tình biết đưa về đâu. 

Ôi đẹp thay là thu...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1010629,
      'music_title_url' => 'tomorrow-is-the-last-time-live~mai-kuraki',
      'music_title' => 'Tomorrow Is The Last Time (Live)',
      'music_artist' => 'Mai Kuraki',
      'music_artist_id' => '4308',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1496540762,
      'music_last_update_time' => 1355815513,
      'music_title_search' => 'tomorow ix the laxt time; live',
      'music_artist_search' => '; mai kuraki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6300,
      'music_track_id' => 0,
      'music_filename' => '1010629-61a7a965.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Kinou wa anna ni naitari shita kedo
Ima nara wakaru yo I LISTEN TO THE SONG
Jibun no omoi wo kotoba ni shiyou to
Anata wo mitara koe ni naranai MY HEART.

Sonna ni yasashikunai de
Ashita wa kitto s...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1070493,
      'music_title_url' => 'survivor~dbsk',
      'music_title' => 'Survivor',
      'music_artist' => 'DBSK',
      'music_artist_id' => '212',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1504375615,
      'music_last_update_time' => 1362626324,
      'music_title_search' => 'xurvivor',
      'music_artist_search' => '; dbxk;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 24123,
      'music_track_id' => 0,
      'music_filename' => '1070493-9f9532f2.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Junsu]
Everytime, everyday
Ima dare mo ga Survivor
Looking for every way
Kono jitai ni Don\'t give up.

[Changmin]
Koko kara tachiagatte
Hikari sagashite
Chance ni kaeyo
Issho ni Let\'s try
[Yoochun...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1086332,
      'music_title_url' => 'maldito-alcohol~pitbull-afrojack',
      'music_title' => 'Maldito Alcohol',
      'music_artist' => 'Pitbull;Afrojack',
      'music_artist_id' => '1814;11796',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535595904,
      'music_last_update_time' => 1495770386,
      'music_title_search' => 'maldito alcohol',
      'music_artist_search' => '; pitbul; afrojack;',
      'music_album_search' => '',
      'music_composer' => 'Pitbull',
      'music_album' => '',
      'music_listen' => 3081,
      'music_track_id' => 0,
      'music_filename' => '1086332-6807651f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Amo\' a ver si esto despierta a los Latin Grammys

Maldito alcohol
Dulce tormento
Que tu haces afuera
Ven pa\' dentro.

Maldito alcohol
Dulce tormento
Que tu haces afuera
Ven pa\' dentro
(dale).

Mami...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1086561,
      'music_title_url' => 'bon-bon~pitbull',
      'music_title' => 'Bon, Bon',
      'music_artist' => 'Pitbull',
      'music_artist_id' => '1814',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525998919,
      'music_last_update_time' => 1498032719,
      'music_title_search' => 'bon bon',
      'music_artist_search' => '; pitbul;',
      'music_album_search' => '',
      'music_composer' => 'Nicola Salerno; Renato Carosone; Pitbull; Johnson Peterson; Sylvester Martinez; Duncan MacLellan',
      'music_album' => '',
      'music_listen' => 12380,
      'music_track_id' => 0,
      'music_filename' => '1086561-de3adee7.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'This is worldwide…
Esto aquí es para las mujeres…
En la discoteca que están buenísimas… bellísimas… lindísimas…
Y ya tú sabes el resto…
Yo se lo doy a directTV… je, je, je, je, je mira que tu estas...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1086836,
      'music_title_url' => 'throw-your-hands-up~qwote-pitbull-lucenzo',
      'music_title' => 'Throw Your Hands Up',
      'music_artist' => 'Qwote;Pitbull;Lucenzo',
      'music_artist_id' => '10827;1814;4230',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1515766411,
      'music_last_update_time' => 1368065017,
      'music_title_search' => 'throw iour handx up',
      'music_artist_search' => '; qwote; pitbul; lucenzo;',
      'music_album_search' => '',
      'music_composer' => 'Qwote; Pitbull; Lucenzo',
      'music_album' => '',
      'music_listen' => 5476,
      'music_track_id' => 0,
      'music_filename' => '1086836-3331ef70.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. This is your boy Qwote 
And my man Lucenzo 
Along side Mr. Worldwide himself 
(Mr. Worldwide).

Let\'s go, let\'s go, let\'s go 
Let\'s go, let\'s go,.

Throw it up in the air 
Shake it like you don\'...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1103503,
      'music_title_url' => 'yerbatero-in-the-studio~juanes',
      'music_title' => 'Yerbatero (In The Studio)',
      'music_artist' => 'Juanes',
      'music_artist_id' => '5228',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531720078,
      'music_last_update_time' => 1371611441,
      'music_title_search' => 'irbatero; in the xtudio',
      'music_artist_search' => '; juanex;',
      'music_album_search' => '',
      'music_composer' => 'Juanes',
      'music_album' => '',
      'music_listen' => 2478,
      'music_track_id' => 0,
      'music_filename' => '1103503-64b7b3ad.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Te traigo el remedio para este mal de amor que lo estremece
Y no se merece sufrir si su pareja le dejó
Tengo toda clase de brebajes, plantas medicinales
Los he traido desde muy lejanos bosques hast...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1123059,
      'music_title_url' => 'intoxication-live~xiah-junsu',
      'music_title' => 'Intoxication (Live)',
      'music_artist' => 'Xiah Junsu',
      'music_artist_id' => '1051',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1434023679,
      'music_last_update_time' => 1376100096,
      'music_title_search' => 'intoxication; live',
      'music_artist_search' => '; xiah junxu;',
      'music_album_search' => '',
      'music_composer' => 'Xiah Junsu',
      'music_album' => '',
      'music_listen' => 1921,
      'music_track_id' => 0,
      'music_filename' => '1123059-4fc0d535.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Chiisaku furu wa seru youni kasani au hada wa foreplay
Yubisaki sagashi ateta no wa deep inside [x3] crazy
Touch you baby nando mo squeeze you baby
Let me feel your madness
Stroke you like a arpegg...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1123064,
      'music_title_url' => 'intoxication~xiah-junsu',
      'music_title' => 'Intoxication',
      'music_artist' => 'Xiah Junsu',
      'music_artist_id' => '1051',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494406064,
      'music_last_update_time' => 1376099797,
      'music_title_search' => 'intoxication',
      'music_artist_search' => '; xiah junxu;',
      'music_album_search' => '',
      'music_composer' => 'Xiah Junsu',
      'music_album' => '',
      'music_listen' => 1719,
      'music_track_id' => 0,
      'music_filename' => '1123064-374cb4b2.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'Chiisaku furu wa seru youni kasani au hada wa foreplay
Yubisaki sagashi ateta no wa deep inside [x3] crazy
Touch you baby nando mo squeeze you baby
Let me feel your madness
Stroke you like a arpegg...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1197462,
      'music_title_url' => 'best-friend-vietsub~kana-nishino',
      'music_title' => 'Best Friend (Vietsub)',
      'music_artist' => 'Kana Nishino',
      'music_artist_id' => '1661',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537400649,
      'music_last_update_time' => 1389016743,
      'music_title_search' => 'bext frind; vitxub',
      'music_artist_search' => '; kana nithino;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 17205,
      'music_track_id' => 0,
      'music_filename' => '1197462-d072b745.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Arigatou
Kimi ga ite kurete hontou yokatta yo
Donna toki datte itsumo
Waratte irareru
Tatoeba, hanarete itemo nannen tatte mo
Zutto kawaranai deshou
Watashitachi best friend
Suki dayo, daisuki da y...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1199422,
      'music_title_url' => 'heavy-rotation~akb48',
      'music_title' => 'Heavy Rotation  (ヘビーローション)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521285578,
      'music_last_update_time' => 1389321614,
      'music_title_search' => 'heavi rotation ; ヘビーローション',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12839,
      'music_track_id' => 1,
      'music_filename' => '1199422-d0593c9c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'I want you
I need you
I love you
Atama no naka
Gangan natteru music
Hebii rooteeshon.

Poppukoon ga
Hajikeru you ni
Suki to iu moji ga odoru
Kao ya koe wo
Omou dake de
Ite mo tatte mo irarenai.

Ko...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1199866,
      'music_title_url' => 'beginner-oshima-yuko-ver~akb48',
      'music_title' => 'Beginner (Oshima Yuko Ver)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1514561991,
      'music_last_update_time' => 1389403607,
      'music_title_search' => 'bedner; othima iuko ver',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => 'Akimoto Yasushi',
      'music_album' => '',
      'music_listen' => 8049,
      'music_track_id' => 0,
      'music_filename' => '1199866-b22b21d9.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'N your position set! 

Kinou made no keiken to ka
Chishiki nanka nimotsu na dake
Kaze wa itsumo toorisugite
Ato ni nani mo nokosanai yo.

Atarashii michi wo sagase! 
Hito no chizu wo hirogeru na!...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1338977,
      'music_title_url' => 'everlasting~fripside',
      'music_title' => 'Everlasting',
      'music_artist' => 'FripSide',
      'music_artist_id' => '29607',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1499198450,
      'music_last_update_time' => 1408068127,
      'music_title_search' => 'everlaxting',
      'music_artist_search' => '; fripxide;',
      'music_album_search' => '',
      'music_composer' => 'Satoshi Yaginuma; Kai Kawasaki',
      'music_album' => '',
      'music_listen' => 1941,
      'music_track_id' => 0,
      'music_filename' => '1338977-b895d41c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Yoake no kaze ga hikari wo tsumugi 
Chiheisen ga kagayaiteiku 
Kono shunkan mo kimi no egao mo 
Eien ni dakishimetai.

Deatta koro wa mada 
Mirai nante mietenakute 
Egao namida subete hisshi ni ats...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1366495,
      'music_title_url' => 'lies-japanese-version~t-ara',
      'music_title' => 'Lies (Japanese Version)',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1523011684,
      'music_last_update_time' => 1411564295,
      'music_title_search' => 'lix; japanexe verxion',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => 'T-Ara',
      'music_album' => '',
      'music_listen' => 50278,
      'music_track_id' => 0,
      'music_filename' => '1366495-e74bd309.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Suki dato, Kojima
Aitai nante, Kojima
Watashi dake dato, Kojima
Sasayaite ita no.

Mamoruto, Kojima
Hanasenai nado, Kojima
Naraberareta uso
Anata no uso mimi ni kotte.

Yasashii egao de watashi wo...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1494599,
      'music_title_url' => 'lien-khuc-phuong-hoang~doan-phi-quoc-khanh-nguyen-khang-mai-thanh-son',
      'music_title' => 'Liên Khúc: Phượng Hoàng',
      'music_artist' => 'Đoàn Phi;Quốc Khanh;Nguyên Khang;Mai Thanh Sơn',
      'music_artist_id' => '2208;2449;787;10390',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535491219,
      'music_last_update_time' => 1432029344,
      'music_title_search' => 'lin khuc; phung hoang',
      'music_artist_search' => '; doan phi; quc khanh; ngin khang; mai thanh xon;',
      'music_album_search' => '',
      'music_composer' => 'Phượng Hoàng',
      'music_album' => '',
      'music_listen' => 8674,
      'music_track_id' => 0,
      'music_filename' => '1494599-60aa3d4e.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Yêu Em]

Yêu em vì ta nghét buồn 
Yêu em vì ta ngét hờn 
Yêu em vì ta khinh khi rối gian 
Yêu em vì ta chán người 
Yêu em vì ta chán đời 
Yêu em vì ta không tin ở trời.

[Yêu Đời Yêu Người]

Bạn t...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1502599,
      'music_title_url' => 'tttere-pa-himlen~nik-jay-burhan-g',
      'music_title' => 'Tættere Pa Himlen',
      'music_artist' => 'Nik;Jay;Burhan G',
      'music_artist_id' => '1629;9932;34367',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496490729,
      'music_last_update_time' => 1433724854,
      'music_title_search' => 'tætere pa himlen',
      'music_artist_search' => '; nik; jai; burhan g;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1331,
      'music_track_id' => 0,
      'music_filename' => '1502599-70f71d65.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Du ta\'r mig tættere på himlen, yeah
Du hvisker mit navn som ingen har gjort det før
Og vore silhuetter hører sammen her i natten
Baby, det\' så vidunderligt
Så vink farvel til dine tårer
Det\' vanvit...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1504890,
      'music_title_url' => 'sakura-girl~news',
      'music_title' => 'Sakura Girl',
      'music_artist' => 'NewS',
      'music_artist_id' => '708',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495369693,
      'music_last_update_time' => 1434072062,
      'music_title_search' => 'xakura drl',
      'music_artist_search' => '; newx;',
      'music_album_search' => '',
      'music_composer' => 'Her0ism; Hacchin\' Maya',
      'music_album' => '',
      'music_listen' => 1201,
      'music_track_id' => 0,
      'music_filename' => '1504890-f5780ce8.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'さくらのような　君でした
春のような　恋でした
いつまでも　続いてゆくと　
そんな気がしてた
風が吹いて　散るように
はらはらと　散るように
あの風が　連れさってゆく
舞って　舞って　僕のさくら
（僕のさくら）
さくら

突然の出会い　教室で二人
なんてことない　台詞ばかり
でも　僕にとっては　ぜんぶ忘れない
きっと　一生　忘れない

散りゆくから　奇麗なんだってさ
そんなこと　知らない僕に...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1570057,
      'music_title_url' => 'tieng-vong~le-anh-quan',
      'music_title' => 'Tiếng Vọng',
      'music_artist' => 'Lê Anh Quân',
      'music_artist_id' => '12013',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512471619,
      'music_last_update_time' => 1445386133,
      'music_title_search' => 'ting vong',
      'music_artist_search' => '; le em quan;',
      'music_album_search' => '',
      'music_composer' => 'Thái Sơn',
      'music_album' => '',
      'music_listen' => 1124,
      'music_track_id' => 0,
      'music_filename' => '1570057-94af6c86.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Ngày hôm nao con đã, ước mơ sinh ra bên mẹ cha mãi
Và vòng tay ấm áp, sẽ luôn ôm con qua bao tháng ngày
Được cha yêu tặng khúc hát, và dòng sữa mẹ thơm mát
Hoà lên muôn khúc ca, nuôi lớn đời con....',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1719304,
      'music_title_url' => 'one-day-one-dream~tackey-tsubasa',
      'music_title' => 'One Day One Dream',
      'music_artist' => 'Tackey;Tsubasa',
      'music_artist_id' => '39523;39524',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493201984,
      'music_last_update_time' => 1474898327,
      'music_title_search' => '1 dai 1 dream',
      'music_artist_search' => '; tackei; txubaxa;',
      'music_album_search' => '',
      'music_composer' => 'Inuyasha',
      'music_album' => '',
      'music_listen' => 283,
      'music_track_id' => 0,
      'music_filename' => '1719304-02a9dd06.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'You can now dream (yuukan na dream) furikazashi
I\'m in a world (aimai na world) kakenuke you.

Yuuutsu ni naru genjitsu ni tachi mukau
Mune no naka de seichou shiteru yuusha
Yuube mita yume ga sono...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1566133,
      'music_title_url' => 'thuo-ban-dau~philip-huy',
      'music_title' => 'Thuở Ban Đầu',
      'music_artist' => 'Philip Huy',
      'music_artist_id' => '1971',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538876605,
      'music_last_update_time' => 1444617033,
      'music_title_search' => 'thu ban dau',
      'music_artist_search' => '; philip hi;',
      'music_album_search' => '',
      'music_composer' => 'Phạm Đình Chương',
      'music_album' => '',
      'music_listen' => 1949,
      'music_track_id' => 0,
      'music_filename' => '1566133-8bdd44f4.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Sao không thấy em lại 
Để cùng anh thẩn thơ 
Trước sân trăng vời vợi 
Để rồi cùng ước mơ. 

Sao không thấy em lại 
Hàng dừa nghiêng thương nhớ 
Và khúc ân tình biết đưa về đâu. 

Ôi đẹp thay là thu...',
      'music_artist_html' => '<a href="/ca-si/Philip-Huy~Y3NuX2FydGlzdH4xOTcx.html">Philip Huy</a>',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1010629,
      'music_title_url' => 'tomorrow-is-the-last-time-live~mai-kuraki',
      'music_title' => 'Tomorrow Is The Last Time (Live)',
      'music_artist' => 'Mai Kuraki',
      'music_artist_id' => '4308',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1496540762,
      'music_last_update_time' => 1355815513,
      'music_title_search' => 'tomorow ix the laxt time; live',
      'music_artist_search' => '; mai kuraki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6300,
      'music_track_id' => 0,
      'music_filename' => '1010629-61a7a965.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Kinou wa anna ni naitari shita kedo
Ima nara wakaru yo I LISTEN TO THE SONG
Jibun no omoi wo kotoba ni shiyou to
Anata wo mitara koe ni naranai MY HEART.

Sonna ni yasashikunai de
Ashita wa kitto s...',
      'music_artist_html' => '<a href="/ca-si/Mai-Kuraki~Y3NuX2FydGlzdH40MzA4.html">Mai Kuraki</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1070493,
      'music_title_url' => 'survivor~dbsk',
      'music_title' => 'Survivor',
      'music_artist' => 'DBSK',
      'music_artist_id' => '212',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1504375615,
      'music_last_update_time' => 1362626324,
      'music_title_search' => 'xurvivor',
      'music_artist_search' => '; dbxk;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 24123,
      'music_track_id' => 0,
      'music_filename' => '1070493-9f9532f2.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Junsu]
Everytime, everyday
Ima dare mo ga Survivor
Looking for every way
Kono jitai ni Don\'t give up.

[Changmin]
Koko kara tachiagatte
Hikari sagashite
Chance ni kaeyo
Issho ni Let\'s try
[Yoochun...',
      'music_artist_html' => '<a href="/ca-si/DBSK~Y3NuX2FydGlzdH4yMTI=.html">DBSK</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1086332,
      'music_title_url' => 'maldito-alcohol~pitbull-afrojack',
      'music_title' => 'Maldito Alcohol',
      'music_artist' => 'Pitbull;Afrojack',
      'music_artist_id' => '1814;11796',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535595904,
      'music_last_update_time' => 1495770386,
      'music_title_search' => 'maldito alcohol',
      'music_artist_search' => '; pitbul; afrojack;',
      'music_album_search' => '',
      'music_composer' => 'Pitbull',
      'music_album' => '',
      'music_listen' => 3081,
      'music_track_id' => 0,
      'music_filename' => '1086332-6807651f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Amo\' a ver si esto despierta a los Latin Grammys

Maldito alcohol
Dulce tormento
Que tu haces afuera
Ven pa\' dentro.

Maldito alcohol
Dulce tormento
Que tu haces afuera
Ven pa\' dentro
(dale).

Mami...',
      'music_artist_html' => '<a href="/ca-si/Pitbull~Y3NuX2FydGlzdH4xODE0.html">Pitbull</a>, <a href="/ca-si/Afrojack~Y3NuX2FydGlzdH4xMTc5Ng==.html">Afrojack</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1086561,
      'music_title_url' => 'bon-bon~pitbull',
      'music_title' => 'Bon, Bon',
      'music_artist' => 'Pitbull',
      'music_artist_id' => '1814',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525998919,
      'music_last_update_time' => 1498032719,
      'music_title_search' => 'bon bon',
      'music_artist_search' => '; pitbul;',
      'music_album_search' => '',
      'music_composer' => 'Nicola Salerno; Renato Carosone; Pitbull; Johnson Peterson; Sylvester Martinez; Duncan MacLellan',
      'music_album' => '',
      'music_listen' => 12380,
      'music_track_id' => 0,
      'music_filename' => '1086561-de3adee7.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'This is worldwide…
Esto aquí es para las mujeres…
En la discoteca que están buenísimas… bellísimas… lindísimas…
Y ya tú sabes el resto…
Yo se lo doy a directTV… je, je, je, je, je mira que tu estas...',
      'music_artist_html' => '<a href="/ca-si/Pitbull~Y3NuX2FydGlzdH4xODE0.html">Pitbull</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1086836,
      'music_title_url' => 'throw-your-hands-up~qwote-pitbull-lucenzo',
      'music_title' => 'Throw Your Hands Up',
      'music_artist' => 'Qwote;Pitbull;Lucenzo',
      'music_artist_id' => '10827;1814;4230',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1515766411,
      'music_last_update_time' => 1368065017,
      'music_title_search' => 'throw iour handx up',
      'music_artist_search' => '; qwote; pitbul; lucenzo;',
      'music_album_search' => '',
      'music_composer' => 'Qwote; Pitbull; Lucenzo',
      'music_album' => '',
      'music_listen' => 5476,
      'music_track_id' => 0,
      'music_filename' => '1086836-3331ef70.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. This is your boy Qwote 
And my man Lucenzo 
Along side Mr. Worldwide himself 
(Mr. Worldwide).

Let\'s go, let\'s go, let\'s go 
Let\'s go, let\'s go,.

Throw it up in the air 
Shake it like you don\'...',
      'music_artist_html' => '<a href="/ca-si/Qwote~Y3NuX2FydGlzdH4xMDgyNw==.html">Qwote</a>, <a href="/ca-si/Pitbull~Y3NuX2FydGlzdH4xODE0.html">Pitbull</a>, <a href="/ca-si/Lucenzo~Y3NuX2FydGlzdH40MjMw.html">Lucenzo</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1103503,
      'music_title_url' => 'yerbatero-in-the-studio~juanes',
      'music_title' => 'Yerbatero (In The Studio)',
      'music_artist' => 'Juanes',
      'music_artist_id' => '5228',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531720078,
      'music_last_update_time' => 1371611441,
      'music_title_search' => 'irbatero; in the xtudio',
      'music_artist_search' => '; juanex;',
      'music_album_search' => '',
      'music_composer' => 'Juanes',
      'music_album' => '',
      'music_listen' => 2478,
      'music_track_id' => 0,
      'music_filename' => '1103503-64b7b3ad.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Te traigo el remedio para este mal de amor que lo estremece
Y no se merece sufrir si su pareja le dejó
Tengo toda clase de brebajes, plantas medicinales
Los he traido desde muy lejanos bosques hast...',
      'music_artist_html' => '<a href="/ca-si/Juanes~Y3NuX2FydGlzdH41MjI4.html">Juanes</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1123059,
      'music_title_url' => 'intoxication-live~xiah-junsu',
      'music_title' => 'Intoxication (Live)',
      'music_artist' => 'Xiah Junsu',
      'music_artist_id' => '1051',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1434023679,
      'music_last_update_time' => 1376100096,
      'music_title_search' => 'intoxication; live',
      'music_artist_search' => '; xiah junxu;',
      'music_album_search' => '',
      'music_composer' => 'Xiah Junsu',
      'music_album' => '',
      'music_listen' => 1921,
      'music_track_id' => 0,
      'music_filename' => '1123059-4fc0d535.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Chiisaku furu wa seru youni kasani au hada wa foreplay
Yubisaki sagashi ateta no wa deep inside [x3] crazy
Touch you baby nando mo squeeze you baby
Let me feel your madness
Stroke you like a arpegg...',
      'music_artist_html' => '<a href="/ca-si/Xiah-Junsu~Y3NuX2FydGlzdH4xMDUx.html">Xiah Junsu</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1123064,
      'music_title_url' => 'intoxication~xiah-junsu',
      'music_title' => 'Intoxication',
      'music_artist' => 'Xiah Junsu',
      'music_artist_id' => '1051',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494406064,
      'music_last_update_time' => 1376099797,
      'music_title_search' => 'intoxication',
      'music_artist_search' => '; xiah junxu;',
      'music_album_search' => '',
      'music_composer' => 'Xiah Junsu',
      'music_album' => '',
      'music_listen' => 1719,
      'music_track_id' => 0,
      'music_filename' => '1123064-374cb4b2.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'Chiisaku furu wa seru youni kasani au hada wa foreplay
Yubisaki sagashi ateta no wa deep inside [x3] crazy
Touch you baby nando mo squeeze you baby
Let me feel your madness
Stroke you like a arpegg...',
      'music_artist_html' => '<a href="/ca-si/Xiah-Junsu~Y3NuX2FydGlzdH4xMDUx.html">Xiah Junsu</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1197462,
      'music_title_url' => 'best-friend-vietsub~kana-nishino',
      'music_title' => 'Best Friend (Vietsub)',
      'music_artist' => 'Kana Nishino',
      'music_artist_id' => '1661',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537400649,
      'music_last_update_time' => 1389016743,
      'music_title_search' => 'bext frind; vitxub',
      'music_artist_search' => '; kana nithino;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 17205,
      'music_track_id' => 0,
      'music_filename' => '1197462-d072b745.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Arigatou
Kimi ga ite kurete hontou yokatta yo
Donna toki datte itsumo
Waratte irareru
Tatoeba, hanarete itemo nannen tatte mo
Zutto kawaranai deshou
Watashitachi best friend
Suki dayo, daisuki da y...',
      'music_artist_html' => '<a href="/ca-si/Kana-Nishino~Y3NuX2FydGlzdH4xNjYx.html">Kana Nishino</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1199422,
      'music_title_url' => 'heavy-rotation~akb48',
      'music_title' => 'Heavy Rotation  (ヘビーローション)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521285578,
      'music_last_update_time' => 1389321614,
      'music_title_search' => 'heavi rotation ; ヘビーローション',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12839,
      'music_track_id' => 1,
      'music_filename' => '1199422-d0593c9c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'I want you
I need you
I love you
Atama no naka
Gangan natteru music
Hebii rooteeshon.

Poppukoon ga
Hajikeru you ni
Suki to iu moji ga odoru
Kao ya koe wo
Omou dake de
Ite mo tatte mo irarenai.

Ko...',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1199866,
      'music_title_url' => 'beginner-oshima-yuko-ver~akb48',
      'music_title' => 'Beginner (Oshima Yuko Ver)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1514561991,
      'music_last_update_time' => 1389403607,
      'music_title_search' => 'bedner; othima iuko ver',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => 'Akimoto Yasushi',
      'music_album' => '',
      'music_listen' => 8049,
      'music_track_id' => 0,
      'music_filename' => '1199866-b22b21d9.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'N your position set! 

Kinou made no keiken to ka
Chishiki nanka nimotsu na dake
Kaze wa itsumo toorisugite
Ato ni nani mo nokosanai yo.

Atarashii michi wo sagase! 
Hito no chizu wo hirogeru na!...',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1338977,
      'music_title_url' => 'everlasting~fripside',
      'music_title' => 'Everlasting',
      'music_artist' => 'FripSide',
      'music_artist_id' => '29607',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1499198450,
      'music_last_update_time' => 1408068127,
      'music_title_search' => 'everlaxting',
      'music_artist_search' => '; fripxide;',
      'music_album_search' => '',
      'music_composer' => 'Satoshi Yaginuma; Kai Kawasaki',
      'music_album' => '',
      'music_listen' => 1941,
      'music_track_id' => 0,
      'music_filename' => '1338977-b895d41c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Yoake no kaze ga hikari wo tsumugi 
Chiheisen ga kagayaiteiku 
Kono shunkan mo kimi no egao mo 
Eien ni dakishimetai.

Deatta koro wa mada 
Mirai nante mietenakute 
Egao namida subete hisshi ni ats...',
      'music_artist_html' => '<a href="/ca-si/FripSide~Y3NuX2FydGlzdH4yOTYwNw==.html">FripSide</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1366495,
      'music_title_url' => 'lies-japanese-version~t-ara',
      'music_title' => 'Lies (Japanese Version)',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1523011684,
      'music_last_update_time' => 1411564295,
      'music_title_search' => 'lix; japanexe verxion',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => 'T-Ara',
      'music_album' => '',
      'music_listen' => 50278,
      'music_track_id' => 0,
      'music_filename' => '1366495-e74bd309.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Suki dato, Kojima
Aitai nante, Kojima
Watashi dake dato, Kojima
Sasayaite ita no.

Mamoruto, Kojima
Hanasenai nado, Kojima
Naraberareta uso
Anata no uso mimi ni kotte.

Yasashii egao de watashi wo...',
      'music_artist_html' => '<a href="/ca-si/T-Ara~Y3NuX2FydGlzdH4xNDEz.html">T-Ara</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1494599,
      'music_title_url' => 'lien-khuc-phuong-hoang~doan-phi-quoc-khanh-nguyen-khang-mai-thanh-son',
      'music_title' => 'Liên Khúc: Phượng Hoàng',
      'music_artist' => 'Đoàn Phi;Quốc Khanh;Nguyên Khang;Mai Thanh Sơn',
      'music_artist_id' => '2208;2449;787;10390',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535491219,
      'music_last_update_time' => 1432029344,
      'music_title_search' => 'lin khuc; phung hoang',
      'music_artist_search' => '; doan phi; quc khanh; ngin khang; mai thanh xon;',
      'music_album_search' => '',
      'music_composer' => 'Phượng Hoàng',
      'music_album' => '',
      'music_listen' => 8674,
      'music_track_id' => 0,
      'music_filename' => '1494599-60aa3d4e.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Yêu Em]

Yêu em vì ta nghét buồn 
Yêu em vì ta ngét hờn 
Yêu em vì ta khinh khi rối gian 
Yêu em vì ta chán người 
Yêu em vì ta chán đời 
Yêu em vì ta không tin ở trời.

[Yêu Đời Yêu Người]

Bạn t...',
      'music_artist_html' => '<a href="/ca-si/Doan-Phi~Y3NuX2FydGlzdH4yMjA4.html">Đoàn Phi</a>, <a href="/ca-si/Quoc-Khanh~Y3NuX2FydGlzdH4yNDQ5.html">Quốc Khanh</a>, <a href="/ca-si/Nguyen-Khang~Y3NuX2FydGlzdH43ODc=.html">Nguyên Khang</a>, <a href="/ca-si/Mai-Thanh-Son~Y3NuX2FydGlzdH4xMDM5MA==.html">Mai Thanh Sơn</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1502599,
      'music_title_url' => 'tttere-pa-himlen~nik-jay-burhan-g',
      'music_title' => 'Tættere Pa Himlen',
      'music_artist' => 'Nik;Jay;Burhan G',
      'music_artist_id' => '1629;9932;34367',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496490729,
      'music_last_update_time' => 1433724854,
      'music_title_search' => 'tætere pa himlen',
      'music_artist_search' => '; nik; jai; burhan g;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1331,
      'music_track_id' => 0,
      'music_filename' => '1502599-70f71d65.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Du ta\'r mig tættere på himlen, yeah
Du hvisker mit navn som ingen har gjort det før
Og vore silhuetter hører sammen her i natten
Baby, det\' så vidunderligt
Så vink farvel til dine tårer
Det\' vanvit...',
      'music_artist_html' => '<a href="/ca-si/Nik~Y3NuX2FydGlzdH4xNjI5.html">Nik</a>, <a href="/ca-si/Jay~Y3NuX2FydGlzdH45OTMy.html">Jay</a>, <a href="/ca-si/Burhan-G~Y3NuX2FydGlzdH4zNDM2Nw==.html">Burhan G</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1504890,
      'music_title_url' => 'sakura-girl~news',
      'music_title' => 'Sakura Girl',
      'music_artist' => 'NewS',
      'music_artist_id' => '708',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495369693,
      'music_last_update_time' => 1434072062,
      'music_title_search' => 'xakura drl',
      'music_artist_search' => '; newx;',
      'music_album_search' => '',
      'music_composer' => 'Her0ism; Hacchin\' Maya',
      'music_album' => '',
      'music_listen' => 1201,
      'music_track_id' => 0,
      'music_filename' => '1504890-f5780ce8.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'さくらのような　君でした
春のような　恋でした
いつまでも　続いてゆくと　
そんな気がしてた
風が吹いて　散るように
はらはらと　散るように
あの風が　連れさってゆく
舞って　舞って　僕のさくら
（僕のさくら）
さくら

突然の出会い　教室で二人
なんてことない　台詞ばかり
でも　僕にとっては　ぜんぶ忘れない
きっと　一生　忘れない

散りゆくから　奇麗なんだってさ
そんなこと　知らない僕に...',
      'music_artist_html' => '<a href="/ca-si/NewS~Y3NuX2FydGlzdH43MDg=.html">NewS</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1570057,
      'music_title_url' => 'tieng-vong~le-anh-quan',
      'music_title' => 'Tiếng Vọng',
      'music_artist' => 'Lê Anh Quân',
      'music_artist_id' => '12013',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512471619,
      'music_last_update_time' => 1445386133,
      'music_title_search' => 'ting vong',
      'music_artist_search' => '; le em quan;',
      'music_album_search' => '',
      'music_composer' => 'Thái Sơn',
      'music_album' => '',
      'music_listen' => 1124,
      'music_track_id' => 0,
      'music_filename' => '1570057-94af6c86.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Ngày hôm nao con đã, ước mơ sinh ra bên mẹ cha mãi
Và vòng tay ấm áp, sẽ luôn ôm con qua bao tháng ngày
Được cha yêu tặng khúc hát, và dòng sữa mẹ thơm mát
Hoà lên muôn khúc ca, nuôi lớn đời con....',
      'music_artist_html' => '<a href="/ca-si/Le-Anh-Quan~Y3NuX2FydGlzdH4xMjAxMw==.html">Lê Anh Quân</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1719304,
      'music_title_url' => 'one-day-one-dream~tackey-tsubasa',
      'music_title' => 'One Day One Dream',
      'music_artist' => 'Tackey;Tsubasa',
      'music_artist_id' => '39523;39524',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493201984,
      'music_last_update_time' => 1474898327,
      'music_title_search' => '1 dai 1 dream',
      'music_artist_search' => '; tackei; txubaxa;',
      'music_album_search' => '',
      'music_composer' => 'Inuyasha',
      'music_album' => '',
      'music_listen' => 283,
      'music_track_id' => 0,
      'music_filename' => '1719304-02a9dd06.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'You can now dream (yuukan na dream) furikazashi
I\'m in a world (aimai na world) kakenuke you.

Yuuutsu ni naru genjitsu ni tachi mukau
Mune no naka de seichou shiteru yuusha
Yuube mita yume ga sono...',
      'music_artist_html' => '<a href="/ca-si/Tackey~Y3NuX2FydGlzdH4zOTUyMw==.html">Tackey</a>, <a href="/ca-si/Tsubasa~Y3NuX2FydGlzdH4zOTUyNA==.html">Tsubasa</a>',
    ),
  ),
  8 => 
  array (
  ),
  9 => 
  array (
  ),
);
?>