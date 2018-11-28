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
      'music_id' => 1455016,
      'music_title_url' => 'noi-tinh-yeu-bat-dau~bang-kieu-lam-anh',
      'music_title' => 'Nơi Tình Yêu Bắt Đầu',
      'music_artist' => 'Bằng Kiều;Lam Anh',
      'music_artist_id' => '1258;12462',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538970124,
      'music_last_update_time' => 1474765786,
      'music_title_search' => 'noi tinh iu bat dau',
      'music_artist_search' => '; bang kiu; lam em;',
      'music_album_search' => '',
      'music_composer' => 'Tiến Minh',
      'music_album' => '',
      'music_listen' => 1255393,
      'music_track_id' => 0,
      'music_filename' => '1455016-c64b6eca.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Ta quen nhau đã bao lâu rồi, hỡi đêm đêm có hay
Mà giọt buồn hoài vương trên môi mặn đắng
Ta quen nhau đã bao lâu rồi, hỡi đêm sao vẫn mãi đêm dài
Để mình ta với con tim khô cằn giá băng. 

Đêm hôm...',
    ),
    1 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1466000,
      'music_title_url' => 'neu-doi-khong-co-anh~mai-thien-van',
      'music_title' => 'Nếu Đời Không Có Anh',
      'music_artist' => 'Mai Thiên Vân',
      'music_artist_id' => '2316',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539068058,
      'music_last_update_time' => 1425919024,
      'music_title_search' => 'neu doi khong co em',
      'music_artist_search' => '; mai thin van;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Trang',
      'music_album' => '',
      'music_listen' => 61376,
      'music_track_id' => 0,
      'music_filename' => '1466000-247c0ef5.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Ra phố hôm nay thấy buồn lên mắt 
Đường chiều man mác như gợi niềm thương 
Chờ người yêu đến cùng chung ngỏ hồn 
Với vòng tay xanh đón mời 
Cho đời lên ngôi thần thánh. 

Đôi mắt em say giữa rừng t...',
    ),
    2 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1483652,
      'music_title_url' => 'mua-xuan-trong-doi-mat-em~lam-thuy-van',
      'music_title' => 'Mùa Xuân Trong Đôi Mắt Em',
      'music_artist' => 'Lâm Thuý Vân',
      'music_artist_id' => '5255',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 2,
      'cover_id' => 0,
      'music_download_time' => 1538933663,
      'music_last_update_time' => 1429858231,
      'music_title_search' => 'mua xuan chong doi mat em',
      'music_artist_search' => '; lam thi van;',
      'music_album_search' => '',
      'music_composer' => 'Đức Huy',
      'music_album' => '',
      'music_listen' => 4677,
      'music_track_id' => 0,
      'music_filename' => '1483652-bcb55fdf.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Thành phố này thành phố mưa bay
Như mãi mãi mùa thu trong sương mù
Đường em về đường ướt mưa rơi
Như nước mắt người đi qua cuộc đời.

Còn hy vọng sau áng mây đen
Còn hy vọng hãy cố vươn lên
Rồi một...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1443681,
      'music_title_url' => 'xin-tra-no-nguoi~khanh-ly',
      'music_title' => 'Xin Trả Nợ Người',
      'music_artist' => 'Khánh Ly',
      'music_artist_id' => '119',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538646789,
      'music_last_update_time' => 1421373348,
      'music_title_search' => 'xin cha no ngui',
      'music_artist_search' => '; khanh li;',
      'music_album_search' => '',
      'music_composer' => 'Trịnh Công Sơn',
      'music_album' => '',
      'music_listen' => 14259,
      'music_track_id' => 0,
      'music_filename' => '1443681-22f01d6c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Hai mươi năm xin trả nợ người
Trả nợ một thời em đã bỏ ai
Hai mươi năm xin trả nợ dài
Trả nợ một đời em đã phụ tôi.

Em phụ tôi một đời bé dại
Thơ dại ra đi không nhớ gì tôi
Thơ dại ra đi quên hết...',
    ),
    4 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1947744,
      'music_title_url' => 'ngay-xua-anh-noi~quang-le-mai-thien-van',
      'music_title' => 'Ngày Xưa Anh Nói',
      'music_artist' => 'Quang Lê;Mai Thiên Vân',
      'music_artist_id' => '1770;2316',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539035811,
      'music_last_update_time' => 1535458225,
      'music_title_search' => 'ngai xua em noi',
      'music_artist_search' => '; quang le; mai thin van;',
      'music_album_search' => '',
      'music_composer' => 'Thanh Tuyền; Thúc Đăng',
      'music_album' => '',
      'music_listen' => 2379,
      'music_track_id' => 0,
      'music_filename' => '1947744-37b36a29.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Ngày xưa anh nói anh thương có em thôi không ai ngoài em nữa
Ngày xưa anh nói em như áng mây trôi theo anh về cuối trời
Muôn kiếp xây đời dựng lều hoa bên suối, sống cho nhau mà thôi
Những lúc sươn...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1068801,
      'music_title_url' => 'anh-khac-hay-em-khac~khac-viet',
      'music_title' => 'Anh Khác Hay Em Khác',
      'music_artist' => 'Khắc Việt',
      'music_artist_id' => '2128',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538886860,
      'music_last_update_time' => 1362101985,
      'music_title_search' => 'em khac hai em khac',
      'music_artist_search' => '; khac vit;',
      'music_album_search' => '',
      'music_composer' => 'Khắc Việt',
      'music_album' => '',
      'music_listen' => 523974,
      'music_track_id' => 0,
      'music_filename' => '1068801-3538bfd1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Có phải em hết yêu anh rồi
Em hãy nói đi người ơi
Anh vô tâm, hay là anh đã sai
Mà dường như ta dần xa cách.

Em nói đôi ta không hợp
Em nói anh không còn như trước
Nhưng tại sao em ơi
Những lúc ta...',
    ),
    6 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1195502,
      'music_title_url' => 'ngay-tet-viet-nam~toc-tien-quynh-vi-nguyet-anh-h',
      'music_title' => 'Ngày Tết Việt Nam',
      'music_artist' => 'Tóc Tiên;Quỳnh Vi;Nguyệt Anh;Hương Giang;Diễm Sương;Kỳ Phương Uyên',
      'music_artist_id' => '343;5759;7955;1982;12461;12338',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 2,
      'cover_id' => 0,
      'music_download_time' => 1538974553,
      'music_last_update_time' => 1389016921,
      'music_title_search' => 'ngai tet vit 5',
      'music_artist_search' => '; toc tin; qinh vi; ngit em; hung dang; dim xung; ki phung in;',
      'music_album_search' => '',
      'music_composer' => 'Hoài An',
      'music_album' => '',
      'music_listen' => 218428,
      'music_track_id' => 0,
      'music_filename' => '1195502-5629b227.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hoa đào hoa mai thắm hương xuân
Những cành hoa mang phước lộc
Gia đình về đây kể nhau nghe 
Một năm mới với bao niềm vui.

Xuân về ngoài sân ngát hương thơm
Mái nhà cùng nhau ấm lòng
Nghe tình xuân...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1171687,
      'music_title_url' => 'dang-ngoc~bang-kieu',
      'music_title' => 'Dáng Ngọc',
      'music_artist' => 'Bằng Kiều',
      'music_artist_id' => '1258',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538716404,
      'music_last_update_time' => 1387989337,
      'music_title_search' => 'dang ngoc',
      'music_artist_search' => '; bang kiu;',
      'music_album_search' => '',
      'music_composer' => 'Ngô Thuỵ Miên',
      'music_album' => '',
      'music_listen' => 34372,
      'music_track_id' => 0,
      'music_filename' => '1171687-c2141823.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Bàn tay năm ngón em vẫn kiêu sa
Vẫn tóc mây bay má môi hồng thấm
Gót bước nhẹ vương ý thơ
Tình yêu nào vương mắt ngọc
Mơ ước vẫn chưa phai nhoà.

Và một lần thôi xin mắt em cay
Xin hết đi hoang nhữ...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1476698,
      'music_title_url' => 'da-lat-xa-nhau~ngoc-huyen',
      'music_title' => 'Đà Lạt Xa Nhau',
      'music_artist' => 'Ngọc Huyền',
      'music_artist_id' => '136',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538615677,
      'music_last_update_time' => 1429932762,
      'music_title_search' => 'da lat xa nhau',
      'music_artist_search' => '; ngoc hin;',
      'music_album_search' => '',
      'music_composer' => 'Anh Bằng',
      'music_album' => '',
      'music_listen' => 9039,
      'music_track_id' => 0,
      'music_filename' => '1476698-965156c0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Làm sao anh nỡ quên Đà Lạt thơ?
Quên những đêm sương đổ trắng mặt hồ
Quên người em gái ngày xưa
Quên đường suối dốc mộng mơ
Những khi chiều vắng hẹn hò.

Giờ xa nhau quá hỡi Đà Lạt ơi!
Tôi nhớ Cam...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1075706,
      'music_title_url' => 'mua-xuan-dau-tien~nhu-quynh-the-son',
      'music_title' => 'Mùa Xuân Đầu Tiên',
      'music_artist' => 'Như Quỳnh;Thế Sơn',
      'music_artist_id' => '32;5254',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 2,
      'cover_id' => 0,
      'music_download_time' => 1538661305,
      'music_last_update_time' => 1364183492,
      'music_title_search' => 'mua xuan dau tin',
      'music_artist_search' => '; nhu qinh; the xon;',
      'music_album_search' => '',
      'music_composer' => 'Tuấn Khanh',
      'music_album' => '',
      'music_listen' => 73401,
      'music_track_id' => 0,
      'music_filename' => '1075706-7d79d474.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Bao nhiêu thương nhớ gom nhặt đầy anh trở về thăm em
Bao lần ngồi bên em nghe mùa xuân vừa đến
Em ơi hoa thắm rơi ngập đường trời nắng xế vương vương
Lòng nhớ tới em luôn khi chiều tàn chim gọi...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1167865,
      'music_title_url' => 'huyen-thoai-nguoi-con-gai~toc-tien',
      'music_title' => 'Huyền Thoại Người Con Gái',
      'music_artist' => 'Tóc Tiên',
      'music_artist_id' => '343',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538663176,
      'music_last_update_time' => 1384143640,
      'music_title_search' => 'hin thoai ngui con gai',
      'music_artist_search' => '; toc tin;',
      'music_album_search' => '',
      'music_composer' => 'Lê Hựu Hà',
      'music_album' => '',
      'music_listen' => 33807,
      'music_track_id' => 0,
      'music_filename' => '1167865-a91616ae.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Loài ngọc đá mang tên em
Đã hơn mấy mùa gọt đau từng phiến
Loài hoa trắng mang môi em
Đã hơn mấy lần ủ nhuỵ hương đêm.

Loài rêu biếc mang mắt em
Đã hơn mấy lần phiêu du dòng nước
Loài sen trắng ma...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445238,
      'music_title_url' => 'tinh-yeu-khong-co-loi~nguyen-hung',
      'music_title' => 'Tình Yêu Không Có Lỗi',
      'music_artist' => 'Nguyễn Hưng',
      'music_artist_id' => '26',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538667136,
      'music_last_update_time' => 1421985894,
      'music_title_search' => 'tinh iu khong co loi',
      'music_artist_search' => '; ngin hung;',
      'music_album_search' => '',
      'music_composer' => 'Minh Nhiên',
      'music_album' => '',
      'music_listen' => 16006,
      'music_track_id' => 0,
      'music_filename' => '1445238-ee36d6db.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nước mắt đàn ông không rơi từng giọt
Nước mắt đàn ông chôn sâu trong lòng
Ôm sầu mà vẫn tươi cười
Sao em đến đi không nói gì 
Để hồn anh chìm trong nhớ mong.

Mãi mãi từ đây xa nhau thật rồi
Nuối t...',
    ),
    12 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1467299,
      'music_title_url' => 'tram-nam-khong-quen~quang-ha',
      'music_title' => 'Trăm Năm Không Quên',
      'music_artist' => 'Quang Hà',
      'music_artist_id' => '1298',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539041832,
      'music_last_update_time' => 1426214488,
      'music_title_search' => 'cham 5 khong quen',
      'music_artist_search' => '; quang ha;',
      'music_album_search' => '',
      'music_composer' => 'Đức Thịnh',
      'music_album' => '',
      'music_listen' => 328921,
      'music_track_id' => 0,
      'music_filename' => '1467299-ac7dd4dd.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Không gian mênh mông quá những niềm vui khi xưa vẫn đây
Sao mi hoen cay bóng dáng người tình ngày nào đâu thấy
Khi xưa nơi đây có gió với mây theo ta hát ca
Giờ ngồi đây hôm nay gió mây đã xa cô đơ...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1013008,
      'music_title_url' => 'can-phong~duong-trieu-vu-le-quyen',
      'music_title' => 'Căn Phòng',
      'music_artist' => 'Dương Triệu Vũ;Lệ Quyên',
      'music_artist_id' => '2809;1662',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538898054,
      'music_last_update_time' => 1346314054,
      'music_title_search' => 'can phong',
      'music_artist_search' => '; dung chiu vu; le qin;',
      'music_album_search' => '',
      'music_composer' => 'Bảo Lê',
      'music_album' => '',
      'music_listen' => 98427,
      'music_track_id' => 0,
      'music_filename' => '1013008-3be63736.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Đêm nay sao mưa rơi lạnh buốt vai gầy
Đêm nay sao cô đơn buồn hơn bao ngày
Tình rơi khi cơn mưa tan, quanh căn phòng này
Quạnh hiu, vắng tênh.

Có những phút đắm đuối cứ ngỡ một đời
Con tim anh yêu...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1163671,
      'music_title_url' => 'thu-sau~ngoc-ha',
      'music_title' => 'Thu Sầu',
      'music_artist' => 'Ngọc Hạ',
      'music_artist_id' => '7888',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538960587,
      'music_last_update_time' => 1383529338,
      'music_title_search' => 'thu xau',
      'music_artist_search' => '; ngoc ha;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương',
      'music_album' => '',
      'music_listen' => 22563,
      'music_track_id' => 0,
      'music_filename' => '1163671-4bb88843.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Mùa thu thưa nắng gió mang niềm nhớ
Trời chiều man mác buồn nát con tim
Lệ tình đẫm ướt tà áo trinh nguyên
Kỷ niệm êm đềm còn in trên giấy.

Người ôm thương nhớ ra đi từ đấy
Trời đày hai đứa vì thi...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1163745,
      'music_title_url' => 'den-khuya~mai-thien-van',
      'music_title' => 'Đèn Khuya',
      'music_artist' => 'Mai Thiên Vân',
      'music_artist_id' => '2316',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538670353,
      'music_last_update_time' => 1383528094,
      'music_title_search' => 'den khia',
      'music_artist_search' => '; mai thin van;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương',
      'music_album' => '',
      'music_listen' => 20125,
      'music_track_id' => 0,
      'music_filename' => '1163745-2b1383e0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Không biết đêm nay vì sao tôi buồn
Buồn vì trời mưa hay bão trong tim?
Đã mấy thu qua tôi vẫn đi tìm
Để rồi buồn ơi nghe tiếng mưa đêm.

Khi bước chân đi lần trong cuộc đời
Lời mẹ hiền ru con nhớ k...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1321766,
      'music_title_url' => 'lien-khuc-trang-ve-thon-da-ruoc-tinh-ve-voi-que-huong~the-son-huong-thuy',
      'music_title' => 'Liên Khúc: Trăng Về Thôn Dã; Rước Tình Về Với Quê Hương',
      'music_artist' => 'Thế Sơn;Hương Thuỷ',
      'music_artist_id' => '5254;6572',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538794438,
      'music_last_update_time' => 1405561185,
      'music_title_search' => 'lin khuc; chang ve thon da; ruc tinh ve voi que hung',
      'music_artist_search' => '; the xon; hung thi;',
      'music_album_search' => '',
      'music_composer' => 'Hoài An; Huyền Linh; Hoàng Thi Thơ',
      'music_album' => '',
      'music_listen' => 29742,
      'music_track_id' => 0,
      'music_filename' => '1321766-e944b916.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Trăng Về Thôn Dã]

Mây trắng bay qua khi trăng dần lan
Muôn câu hò nhịp nhàng khắp thôn trang
Đoàn người say sưa vui tiếng hát vang
Lúa dâng sữa ngọt đậm tình ta với nàng.

Đêm lắng sâu khi sương...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1468884,
      'music_title_url' => 'xinh-tuoi-viet-nam~vmusic',
      'music_title' => 'Xinh Tươi Việt Nam',
      'music_artist' => 'V.Music',
      'music_artist_id' => '1888',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538964149,
      'music_last_update_time' => 1426468418,
      'music_title_search' => 'xinh tui vit 5',
      'music_artist_search' => '; v muxic;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Hồng Thuận',
      'music_album' => '',
      'music_listen' => 58150,
      'music_track_id' => 0,
      'music_filename' => '1468884-7c3bb2f2.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Người con gái bé xinh đạp xe trên phố đông
Tà áo trắng bay bay, lòng vui như nở hoa
Em mỉm cười xinh tươi, ôi khung trời hai mươi
Niềm vui tương lai đón chờ em.

Lòng tha thiết yêu đời và yêu đất n...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1941763,
      'music_title_url' => 'coi-nho~quang-le',
      'music_title' => 'Cõi Nhớ',
      'music_artist' => 'Quang Lê',
      'music_artist_id' => '1770',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538906057,
      'music_last_update_time' => 1534167907,
      'music_title_search' => 'coi nho',
      'music_artist_search' => '; quang le;',
      'music_album_search' => '',
      'music_composer' => 'Sông Trà',
      'music_album' => '',
      'music_listen' => 2121,
      'music_track_id' => 0,
      'music_filename' => '1941763-eca1fa8a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ngày đó lâu rồi hai đứa mình yêu nhau
Mộng ước dài lâu ta sẽ chung nhịp cầu
Đuổi ong bắt bướm bên góc cạnh cầu ao
Tình yêu lắng sâu đã đi vào cõi nhớ.

Thuở ấy chúng mình hay ngắm nhìn trăng lên
Sư...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 306366,
      'music_title_url' => 'chuyen-tinh-co-ban-than~lam-chan-huy',
      'music_title' => 'Chuyện Tình Cô Bạn Thân',
      'music_artist' => 'Lâm Chấn Huy',
      'music_artist_id' => '539',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1419775697,
      'music_last_update_time' => 1339213053,
      'music_title_search' => 'chin tinh co ban than',
      'music_artist_search' => '; lam chan hi;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Sang',
      'music_album' => '',
      'music_listen' => 593761,
      'music_track_id' => 0,
      'music_filename' => '306366-8aaa465d.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Ngày xưa ấy, bên nhà tôi có cô bạn thân
Dịu dàng như, bao nụ hoa nở trong sớm mai
Nàng thường làm thơ, cho tôi viết những khúc nhạc
Cho em nghe, lời tình ca tha thiết.

Nhiều năm trôi, tình yêu tôi...',
    ),
    20 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1455016,
      'music_title_url' => 'noi-tinh-yeu-bat-dau~bang-kieu-lam-anh',
      'music_title' => 'Nơi Tình Yêu Bắt Đầu',
      'music_artist' => 'Bằng Kiều;Lam Anh',
      'music_artist_id' => '1258;12462',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538970124,
      'music_last_update_time' => 1474765786,
      'music_title_search' => 'noi tinh iu bat dau',
      'music_artist_search' => '; bang kiu; lam em;',
      'music_album_search' => '',
      'music_composer' => 'Tiến Minh',
      'music_album' => '',
      'music_listen' => 1255393,
      'music_track_id' => 0,
      'music_filename' => '1455016-c64b6eca.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Ta quen nhau đã bao lâu rồi, hỡi đêm đêm có hay
Mà giọt buồn hoài vương trên môi mặn đắng
Ta quen nhau đã bao lâu rồi, hỡi đêm sao vẫn mãi đêm dài
Để mình ta với con tim khô cằn giá băng. 

Đêm hôm...',
      'music_artist_html' => '<a href="/ca-si/Bang-Kieu~Y3NuX2FydGlzdH4xMjU4.html">Bằng Kiều</a>, <a href="/ca-si/Lam-Anh~Y3NuX2FydGlzdH4xMjQ2Mg==.html">Lam Anh</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1466000,
      'music_title_url' => 'neu-doi-khong-co-anh~mai-thien-van',
      'music_title' => 'Nếu Đời Không Có Anh',
      'music_artist' => 'Mai Thiên Vân',
      'music_artist_id' => '2316',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539068058,
      'music_last_update_time' => 1425919024,
      'music_title_search' => 'neu doi khong co em',
      'music_artist_search' => '; mai thin van;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Trang',
      'music_album' => '',
      'music_listen' => 61376,
      'music_track_id' => 0,
      'music_filename' => '1466000-247c0ef5.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Ra phố hôm nay thấy buồn lên mắt 
Đường chiều man mác như gợi niềm thương 
Chờ người yêu đến cùng chung ngỏ hồn 
Với vòng tay xanh đón mời 
Cho đời lên ngôi thần thánh. 

Đôi mắt em say giữa rừng t...',
      'music_artist_html' => '<a href="/ca-si/Mai-Thien-Van~Y3NuX2FydGlzdH4yMzE2.html">Mai Thiên Vân</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1483652,
      'music_title_url' => 'mua-xuan-trong-doi-mat-em~lam-thuy-van',
      'music_title' => 'Mùa Xuân Trong Đôi Mắt Em',
      'music_artist' => 'Lâm Thuý Vân',
      'music_artist_id' => '5255',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 2,
      'cover_id' => 0,
      'music_download_time' => 1538933663,
      'music_last_update_time' => 1429858231,
      'music_title_search' => 'mua xuan chong doi mat em',
      'music_artist_search' => '; lam thi van;',
      'music_album_search' => '',
      'music_composer' => 'Đức Huy',
      'music_album' => '',
      'music_listen' => 4677,
      'music_track_id' => 0,
      'music_filename' => '1483652-bcb55fdf.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Thành phố này thành phố mưa bay
Như mãi mãi mùa thu trong sương mù
Đường em về đường ướt mưa rơi
Như nước mắt người đi qua cuộc đời.

Còn hy vọng sau áng mây đen
Còn hy vọng hãy cố vươn lên
Rồi một...',
      'music_artist_html' => '<a href="/ca-si/Lam-Thuy-Van~Y3NuX2FydGlzdH41MjU1.html">Lâm Thuý Vân</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1443681,
      'music_title_url' => 'xin-tra-no-nguoi~khanh-ly',
      'music_title' => 'Xin Trả Nợ Người',
      'music_artist' => 'Khánh Ly',
      'music_artist_id' => '119',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538646789,
      'music_last_update_time' => 1421373348,
      'music_title_search' => 'xin cha no ngui',
      'music_artist_search' => '; khanh li;',
      'music_album_search' => '',
      'music_composer' => 'Trịnh Công Sơn',
      'music_album' => '',
      'music_listen' => 14259,
      'music_track_id' => 0,
      'music_filename' => '1443681-22f01d6c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Hai mươi năm xin trả nợ người
Trả nợ một thời em đã bỏ ai
Hai mươi năm xin trả nợ dài
Trả nợ một đời em đã phụ tôi.

Em phụ tôi một đời bé dại
Thơ dại ra đi không nhớ gì tôi
Thơ dại ra đi quên hết...',
      'music_artist_html' => '<a href="/ca-si/Khanh-Ly~Y3NuX2FydGlzdH4xMTk=.html">Khánh Ly</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1947744,
      'music_title_url' => 'ngay-xua-anh-noi~quang-le-mai-thien-van',
      'music_title' => 'Ngày Xưa Anh Nói',
      'music_artist' => 'Quang Lê;Mai Thiên Vân',
      'music_artist_id' => '1770;2316',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539035811,
      'music_last_update_time' => 1535458225,
      'music_title_search' => 'ngai xua em noi',
      'music_artist_search' => '; quang le; mai thin van;',
      'music_album_search' => '',
      'music_composer' => 'Thanh Tuyền; Thúc Đăng',
      'music_album' => '',
      'music_listen' => 2379,
      'music_track_id' => 0,
      'music_filename' => '1947744-37b36a29.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Ngày xưa anh nói anh thương có em thôi không ai ngoài em nữa
Ngày xưa anh nói em như áng mây trôi theo anh về cuối trời
Muôn kiếp xây đời dựng lều hoa bên suối, sống cho nhau mà thôi
Những lúc sươn...',
      'music_artist_html' => '<a href="/ca-si/Quang-Le~Y3NuX2FydGlzdH4xNzcw.html">Quang Lê</a>, <a href="/ca-si/Mai-Thien-Van~Y3NuX2FydGlzdH4yMzE2.html">Mai Thiên Vân</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1068801,
      'music_title_url' => 'anh-khac-hay-em-khac~khac-viet',
      'music_title' => 'Anh Khác Hay Em Khác',
      'music_artist' => 'Khắc Việt',
      'music_artist_id' => '2128',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538886860,
      'music_last_update_time' => 1362101985,
      'music_title_search' => 'em khac hai em khac',
      'music_artist_search' => '; khac vit;',
      'music_album_search' => '',
      'music_composer' => 'Khắc Việt',
      'music_album' => '',
      'music_listen' => 523974,
      'music_track_id' => 0,
      'music_filename' => '1068801-3538bfd1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Có phải em hết yêu anh rồi
Em hãy nói đi người ơi
Anh vô tâm, hay là anh đã sai
Mà dường như ta dần xa cách.

Em nói đôi ta không hợp
Em nói anh không còn như trước
Nhưng tại sao em ơi
Những lúc ta...',
      'music_artist_html' => '<a href="/ca-si/Khac-Viet~Y3NuX2FydGlzdH4yMTI4.html">Khắc Việt</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1195502,
      'music_title_url' => 'ngay-tet-viet-nam~toc-tien-quynh-vi-nguyet-anh-h',
      'music_title' => 'Ngày Tết Việt Nam',
      'music_artist' => 'Tóc Tiên;Quỳnh Vi;Nguyệt Anh;Hương Giang;Diễm Sương;Kỳ Phương Uyên',
      'music_artist_id' => '343;5759;7955;1982;12461;12338',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 2,
      'cover_id' => 0,
      'music_download_time' => 1538974553,
      'music_last_update_time' => 1389016921,
      'music_title_search' => 'ngai tet vit 5',
      'music_artist_search' => '; toc tin; qinh vi; ngit em; hung dang; dim xung; ki phung in;',
      'music_album_search' => '',
      'music_composer' => 'Hoài An',
      'music_album' => '',
      'music_listen' => 218428,
      'music_track_id' => 0,
      'music_filename' => '1195502-5629b227.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hoa đào hoa mai thắm hương xuân
Những cành hoa mang phước lộc
Gia đình về đây kể nhau nghe 
Một năm mới với bao niềm vui.

Xuân về ngoài sân ngát hương thơm
Mái nhà cùng nhau ấm lòng
Nghe tình xuân...',
      'music_artist_html' => '<a href="/ca-si/Toc-Tien~Y3NuX2FydGlzdH4zNDM=.html">Tóc Tiên</a>, <a href="/ca-si/Quynh-Vi~Y3NuX2FydGlzdH41NzU5.html">Quỳnh Vi</a>, <a href="/ca-si/Nguyet-Anh~Y3NuX2FydGlzdH43OTU1.html">Nguyệt Anh</a>, <a href="/ca-si/Huong-Giang~Y3NuX2FydGlzdH4xOTgy.html">Hương Giang</a>, <a href="/ca-si/Diem-Suong~Y3NuX2FydGlzdH4xMjQ2MQ==.html">Diễm Sương</a>, <a href="/ca-si/Ky-Phuong-Uyen~Y3NuX2FydGlzdH4xMjMzOA==.html">Kỳ Phương Uyên</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1171687,
      'music_title_url' => 'dang-ngoc~bang-kieu',
      'music_title' => 'Dáng Ngọc',
      'music_artist' => 'Bằng Kiều',
      'music_artist_id' => '1258',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538716404,
      'music_last_update_time' => 1387989337,
      'music_title_search' => 'dang ngoc',
      'music_artist_search' => '; bang kiu;',
      'music_album_search' => '',
      'music_composer' => 'Ngô Thuỵ Miên',
      'music_album' => '',
      'music_listen' => 34372,
      'music_track_id' => 0,
      'music_filename' => '1171687-c2141823.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Bàn tay năm ngón em vẫn kiêu sa
Vẫn tóc mây bay má môi hồng thấm
Gót bước nhẹ vương ý thơ
Tình yêu nào vương mắt ngọc
Mơ ước vẫn chưa phai nhoà.

Và một lần thôi xin mắt em cay
Xin hết đi hoang nhữ...',
      'music_artist_html' => '<a href="/ca-si/Bang-Kieu~Y3NuX2FydGlzdH4xMjU4.html">Bằng Kiều</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1476698,
      'music_title_url' => 'da-lat-xa-nhau~ngoc-huyen',
      'music_title' => 'Đà Lạt Xa Nhau',
      'music_artist' => 'Ngọc Huyền',
      'music_artist_id' => '136',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538615677,
      'music_last_update_time' => 1429932762,
      'music_title_search' => 'da lat xa nhau',
      'music_artist_search' => '; ngoc hin;',
      'music_album_search' => '',
      'music_composer' => 'Anh Bằng',
      'music_album' => '',
      'music_listen' => 9039,
      'music_track_id' => 0,
      'music_filename' => '1476698-965156c0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Làm sao anh nỡ quên Đà Lạt thơ?
Quên những đêm sương đổ trắng mặt hồ
Quên người em gái ngày xưa
Quên đường suối dốc mộng mơ
Những khi chiều vắng hẹn hò.

Giờ xa nhau quá hỡi Đà Lạt ơi!
Tôi nhớ Cam...',
      'music_artist_html' => '<a href="/ca-si/Ngoc-Huyen~Y3NuX2FydGlzdH4xMzY=.html">Ngọc Huyền</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1075706,
      'music_title_url' => 'mua-xuan-dau-tien~nhu-quynh-the-son',
      'music_title' => 'Mùa Xuân Đầu Tiên',
      'music_artist' => 'Như Quỳnh;Thế Sơn',
      'music_artist_id' => '32;5254',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 2,
      'cover_id' => 0,
      'music_download_time' => 1538661305,
      'music_last_update_time' => 1364183492,
      'music_title_search' => 'mua xuan dau tin',
      'music_artist_search' => '; nhu qinh; the xon;',
      'music_album_search' => '',
      'music_composer' => 'Tuấn Khanh',
      'music_album' => '',
      'music_listen' => 73401,
      'music_track_id' => 0,
      'music_filename' => '1075706-7d79d474.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Bao nhiêu thương nhớ gom nhặt đầy anh trở về thăm em
Bao lần ngồi bên em nghe mùa xuân vừa đến
Em ơi hoa thắm rơi ngập đường trời nắng xế vương vương
Lòng nhớ tới em luôn khi chiều tàn chim gọi...',
      'music_artist_html' => '<a href="/ca-si/Nhu-Quynh~Y3NuX2FydGlzdH4zMg==.html">Như Quỳnh</a>, <a href="/ca-si/The-Son~Y3NuX2FydGlzdH41MjU0.html">Thế Sơn</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1167865,
      'music_title_url' => 'huyen-thoai-nguoi-con-gai~toc-tien',
      'music_title' => 'Huyền Thoại Người Con Gái',
      'music_artist' => 'Tóc Tiên',
      'music_artist_id' => '343',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538663176,
      'music_last_update_time' => 1384143640,
      'music_title_search' => 'hin thoai ngui con gai',
      'music_artist_search' => '; toc tin;',
      'music_album_search' => '',
      'music_composer' => 'Lê Hựu Hà',
      'music_album' => '',
      'music_listen' => 33807,
      'music_track_id' => 0,
      'music_filename' => '1167865-a91616ae.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Loài ngọc đá mang tên em
Đã hơn mấy mùa gọt đau từng phiến
Loài hoa trắng mang môi em
Đã hơn mấy lần ủ nhuỵ hương đêm.

Loài rêu biếc mang mắt em
Đã hơn mấy lần phiêu du dòng nước
Loài sen trắng ma...',
      'music_artist_html' => '<a href="/ca-si/Toc-Tien~Y3NuX2FydGlzdH4zNDM=.html">Tóc Tiên</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445238,
      'music_title_url' => 'tinh-yeu-khong-co-loi~nguyen-hung',
      'music_title' => 'Tình Yêu Không Có Lỗi',
      'music_artist' => 'Nguyễn Hưng',
      'music_artist_id' => '26',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538667136,
      'music_last_update_time' => 1421985894,
      'music_title_search' => 'tinh iu khong co loi',
      'music_artist_search' => '; ngin hung;',
      'music_album_search' => '',
      'music_composer' => 'Minh Nhiên',
      'music_album' => '',
      'music_listen' => 16006,
      'music_track_id' => 0,
      'music_filename' => '1445238-ee36d6db.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nước mắt đàn ông không rơi từng giọt
Nước mắt đàn ông chôn sâu trong lòng
Ôm sầu mà vẫn tươi cười
Sao em đến đi không nói gì 
Để hồn anh chìm trong nhớ mong.

Mãi mãi từ đây xa nhau thật rồi
Nuối t...',
      'music_artist_html' => '<a href="/ca-si/Nguyen-Hung~Y3NuX2FydGlzdH4yNg==.html">Nguyễn Hưng</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1467299,
      'music_title_url' => 'tram-nam-khong-quen~quang-ha',
      'music_title' => 'Trăm Năm Không Quên',
      'music_artist' => 'Quang Hà',
      'music_artist_id' => '1298',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539041832,
      'music_last_update_time' => 1426214488,
      'music_title_search' => 'cham 5 khong quen',
      'music_artist_search' => '; quang ha;',
      'music_album_search' => '',
      'music_composer' => 'Đức Thịnh',
      'music_album' => '',
      'music_listen' => 328921,
      'music_track_id' => 0,
      'music_filename' => '1467299-ac7dd4dd.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Không gian mênh mông quá những niềm vui khi xưa vẫn đây
Sao mi hoen cay bóng dáng người tình ngày nào đâu thấy
Khi xưa nơi đây có gió với mây theo ta hát ca
Giờ ngồi đây hôm nay gió mây đã xa cô đơ...',
      'music_artist_html' => '<a href="/ca-si/Quang-Ha~Y3NuX2FydGlzdH4xMjk4.html">Quang Hà</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1013008,
      'music_title_url' => 'can-phong~duong-trieu-vu-le-quyen',
      'music_title' => 'Căn Phòng',
      'music_artist' => 'Dương Triệu Vũ;Lệ Quyên',
      'music_artist_id' => '2809;1662',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538898054,
      'music_last_update_time' => 1346314054,
      'music_title_search' => 'can phong',
      'music_artist_search' => '; dung chiu vu; le qin;',
      'music_album_search' => '',
      'music_composer' => 'Bảo Lê',
      'music_album' => '',
      'music_listen' => 98427,
      'music_track_id' => 0,
      'music_filename' => '1013008-3be63736.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Đêm nay sao mưa rơi lạnh buốt vai gầy
Đêm nay sao cô đơn buồn hơn bao ngày
Tình rơi khi cơn mưa tan, quanh căn phòng này
Quạnh hiu, vắng tênh.

Có những phút đắm đuối cứ ngỡ một đời
Con tim anh yêu...',
      'music_artist_html' => '<a href="/ca-si/Duong-Trieu-Vu~Y3NuX2FydGlzdH4yODA5.html">Dương Triệu Vũ</a>, <a href="/ca-si/Le-Quyen~Y3NuX2FydGlzdH4xNjYy.html">Lệ Quyên</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1163671,
      'music_title_url' => 'thu-sau~ngoc-ha',
      'music_title' => 'Thu Sầu',
      'music_artist' => 'Ngọc Hạ',
      'music_artist_id' => '7888',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538960587,
      'music_last_update_time' => 1383529338,
      'music_title_search' => 'thu xau',
      'music_artist_search' => '; ngoc ha;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương',
      'music_album' => '',
      'music_listen' => 22563,
      'music_track_id' => 0,
      'music_filename' => '1163671-4bb88843.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Mùa thu thưa nắng gió mang niềm nhớ
Trời chiều man mác buồn nát con tim
Lệ tình đẫm ướt tà áo trinh nguyên
Kỷ niệm êm đềm còn in trên giấy.

Người ôm thương nhớ ra đi từ đấy
Trời đày hai đứa vì thi...',
      'music_artist_html' => '<a href="/ca-si/Ngoc-Ha~Y3NuX2FydGlzdH43ODg4.html">Ngọc Hạ</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1163745,
      'music_title_url' => 'den-khuya~mai-thien-van',
      'music_title' => 'Đèn Khuya',
      'music_artist' => 'Mai Thiên Vân',
      'music_artist_id' => '2316',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538670353,
      'music_last_update_time' => 1383528094,
      'music_title_search' => 'den khia',
      'music_artist_search' => '; mai thin van;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương',
      'music_album' => '',
      'music_listen' => 20125,
      'music_track_id' => 0,
      'music_filename' => '1163745-2b1383e0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Không biết đêm nay vì sao tôi buồn
Buồn vì trời mưa hay bão trong tim?
Đã mấy thu qua tôi vẫn đi tìm
Để rồi buồn ơi nghe tiếng mưa đêm.

Khi bước chân đi lần trong cuộc đời
Lời mẹ hiền ru con nhớ k...',
      'music_artist_html' => '<a href="/ca-si/Mai-Thien-Van~Y3NuX2FydGlzdH4yMzE2.html">Mai Thiên Vân</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1321766,
      'music_title_url' => 'lien-khuc-trang-ve-thon-da-ruoc-tinh-ve-voi-que-huong~the-son-huong-thuy',
      'music_title' => 'Liên Khúc: Trăng Về Thôn Dã; Rước Tình Về Với Quê Hương',
      'music_artist' => 'Thế Sơn;Hương Thuỷ',
      'music_artist_id' => '5254;6572',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538794438,
      'music_last_update_time' => 1405561185,
      'music_title_search' => 'lin khuc; chang ve thon da; ruc tinh ve voi que hung',
      'music_artist_search' => '; the xon; hung thi;',
      'music_album_search' => '',
      'music_composer' => 'Hoài An; Huyền Linh; Hoàng Thi Thơ',
      'music_album' => '',
      'music_listen' => 29742,
      'music_track_id' => 0,
      'music_filename' => '1321766-e944b916.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Trăng Về Thôn Dã]

Mây trắng bay qua khi trăng dần lan
Muôn câu hò nhịp nhàng khắp thôn trang
Đoàn người say sưa vui tiếng hát vang
Lúa dâng sữa ngọt đậm tình ta với nàng.

Đêm lắng sâu khi sương...',
      'music_artist_html' => '<a href="/ca-si/The-Son~Y3NuX2FydGlzdH41MjU0.html">Thế Sơn</a>, <a href="/ca-si/Huong-Thuy~Y3NuX2FydGlzdH42NTcy.html">Hương Thuỷ</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1468884,
      'music_title_url' => 'xinh-tuoi-viet-nam~vmusic',
      'music_title' => 'Xinh Tươi Việt Nam',
      'music_artist' => 'V.Music',
      'music_artist_id' => '1888',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538964149,
      'music_last_update_time' => 1426468418,
      'music_title_search' => 'xinh tui vit 5',
      'music_artist_search' => '; v muxic;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Hồng Thuận',
      'music_album' => '',
      'music_listen' => 58150,
      'music_track_id' => 0,
      'music_filename' => '1468884-7c3bb2f2.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Người con gái bé xinh đạp xe trên phố đông
Tà áo trắng bay bay, lòng vui như nở hoa
Em mỉm cười xinh tươi, ôi khung trời hai mươi
Niềm vui tương lai đón chờ em.

Lòng tha thiết yêu đời và yêu đất n...',
      'music_artist_html' => '<a href="/ca-si/VMusic~Y3NuX2FydGlzdH4xODg4.html">V.Music</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1941763,
      'music_title_url' => 'coi-nho~quang-le',
      'music_title' => 'Cõi Nhớ',
      'music_artist' => 'Quang Lê',
      'music_artist_id' => '1770',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538906057,
      'music_last_update_time' => 1534167907,
      'music_title_search' => 'coi nho',
      'music_artist_search' => '; quang le;',
      'music_album_search' => '',
      'music_composer' => 'Sông Trà',
      'music_album' => '',
      'music_listen' => 2121,
      'music_track_id' => 0,
      'music_filename' => '1941763-eca1fa8a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ngày đó lâu rồi hai đứa mình yêu nhau
Mộng ước dài lâu ta sẽ chung nhịp cầu
Đuổi ong bắt bướm bên góc cạnh cầu ao
Tình yêu lắng sâu đã đi vào cõi nhớ.

Thuở ấy chúng mình hay ngắm nhìn trăng lên
Sư...',
      'music_artist_html' => '<a href="/ca-si/Quang-Le~Y3NuX2FydGlzdH4xNzcw.html">Quang Lê</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 306366,
      'music_title_url' => 'chuyen-tinh-co-ban-than~lam-chan-huy',
      'music_title' => 'Chuyện Tình Cô Bạn Thân',
      'music_artist' => 'Lâm Chấn Huy',
      'music_artist_id' => '539',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1419775697,
      'music_last_update_time' => 1339213053,
      'music_title_search' => 'chin tinh co ban than',
      'music_artist_search' => '; lam chan hi;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Sang',
      'music_album' => '',
      'music_listen' => 593761,
      'music_track_id' => 0,
      'music_filename' => '306366-8aaa465d.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Ngày xưa ấy, bên nhà tôi có cô bạn thân
Dịu dàng như, bao nụ hoa nở trong sớm mai
Nàng thường làm thơ, cho tôi viết những khúc nhạc
Cho em nghe, lời tình ca tha thiết.

Nhiều năm trôi, tình yêu tôi...',
      'music_artist_html' => '<a href="/ca-si/Lam-Chan-Huy~Y3NuX2FydGlzdH41Mzk=.html">Lâm Chấn Huy</a>',
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1054499,
      'music_title_url' => 'without-you~david-guetta-ft-usher',
      'music_title' => 'Without You',
      'music_artist' => 'David Guetta Ft Usher',
      'music_artist_id' => '27657',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538503660,
      'music_last_update_time' => 1357117210,
      'music_title_search' => 'without iou',
      'music_artist_search' => '; david gueta ft uther;',
      'music_album_search' => '',
      'music_composer' => 'David Guetta',
      'music_album' => '',
      'music_listen' => 11848,
      'music_track_id' => 0,
      'music_filename' => '1054499-098593be.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'I can\'t win, I can\'t wait
I will never win this game without you, without you
I am lost, I am vain
I will never be the same without you, without you.

I won\'t love, I won\'t love
I will never make i...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1062522,
      'music_title_url' => 'paradise~coldplay',
      'music_title' => 'Paradise',
      'music_artist' => 'Coldplay',
      'music_artist_id' => '6805',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538467948,
      'music_last_update_time' => 1482900795,
      'music_title_search' => 'paradixe',
      'music_artist_search' => '; coldplai;',
      'music_album_search' => '',
      'music_composer' => 'Coldplay',
      'music_album' => '',
      'music_listen' => 18648,
      'music_track_id' => 0,
      'music_filename' => '1062522-25ad4aa2.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'When she was just a girl
She inspected the world
But it flew away from her reach
So she ran away in her sleep.

Dreamed of para- para- paradise
Para- para- paradise
Para- para- paradise
Every time...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1062982,
      'music_title_url' => 'titanium~david-guetta-sia',
      'music_title' => 'Titanium',
      'music_artist' => 'David Guetta;Sia',
      'music_artist_id' => '651;9255',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538503625,
      'music_last_update_time' => 1359691310,
      'music_title_search' => 'titanium',
      'music_artist_search' => '; david gueta; xia;',
      'music_album_search' => '',
      'music_composer' => 'David Guetta; Sia',
      'music_album' => '',
      'music_listen' => 59378,
      'music_track_id' => 0,
      'music_filename' => '1062982-2e9b9019.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. You shout it loud
But I can\'t hear a word you say
I\'m talking loud not saying much
I\'m criticized but all your bull is brick of shame
You shoot me down, but I get up.

[Chorus]
I\'m bulletproof n...',
    ),
    3 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1065752,
      'music_title_url' => 'michael-meets-mozart-1-piano-2-guys-100-cello~the-piano-guys',
      'music_title' => 'Michael Meets Mozart (1 Piano, 2 Guys, 100 Cello)',
      'music_artist' => 'The Piano Guys',
      'music_artist_id' => '3802',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538950677,
      'music_last_update_time' => 1361175913,
      'music_title_search' => 'michael metx mozart; 1 piano 2 gix 10 celo',
      'music_artist_search' => '; the piano gix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 20663,
      'music_track_id' => 0,
      'music_filename' => '1065752-94144bb5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1072253,
      'music_title_url' => 'wings~macklemore-ryan-lewis',
      'music_title' => 'Wings',
      'music_artist' => 'Macklemore;Ryan Lewis',
      'music_artist_id' => '19492;29606',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538938480,
      'music_last_update_time' => 1363250526,
      'music_title_search' => 'wingx',
      'music_artist_search' => '; macklemore; rian lewix;',
      'music_album_search' => '',
      'music_composer' => 'Ben Haggerty; Hollis Wong-Wear; Ryan Lewis; Andrew Joslyn',
      'music_album' => '',
      'music_listen' => 6355,
      'music_track_id' => 0,
      'music_filename' => '1072253-7ac724fd.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Ver1:]
I was seven years old, when I got my first pair
And I stepped outside
And I was like, momma, this air bubble right here, it\'s gonna make me fly
I hit that court, and when I jumped, I jumped...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1076246,
      'music_title_url' => 'zombie~natalia-kills',
      'music_title' => 'Zombie',
      'music_artist' => 'Natalia Kills',
      'music_artist_id' => '13242',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538595152,
      'music_last_update_time' => 1365392246,
      'music_title_search' => 'zombi',
      'music_artist_search' => '; natalia kilx;',
      'music_album_search' => '',
      'music_composer' => 'Natalia Kills; Jeff Bhasker',
      'music_album' => '',
      'music_listen' => 2844,
      'music_track_id' => 0,
      'music_filename' => '1076246-8bc224d1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Zombie, Zombie

1. I\'m in love with a zombie
Can\'t keep his hands off me
I think he\'s looking at me
But he\'s looking right through me

You think you\'re so cool boy
Blood rushing through my veins no...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1175074,
      'music_title_url' => 'run-the-world-girls~beyonce',
      'music_title' => 'Run The World (Girls)',
      'music_artist' => 'Beyoncé',
      'music_artist_id' => '889',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538841409,
      'music_last_update_time' => 1385517925,
      'music_title_search' => 'run the world; drlx',
      'music_artist_search' => '; beionce;',
      'music_album_search' => '',
      'music_composer' => 'Beyoncé; Afrojack; The-Dream; Diplo; Switch; Vybz Kartel',
      'music_album' => '',
      'music_listen' => 58340,
      'music_track_id' => 0,
      'music_filename' => '1175074-6728cb54.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Girls, we run this motha (yeah!) x4
GIRLS!

[Chorus]

[Ver1:]
Some of them men think they freak this like we do
But no they don\'t
Make your cheques come at they neck
Disrespect us no they won\'t.

B...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1178407,
      'music_title_url' => 'lights-bassnectar-remix~ellie-goulding',
      'music_title' => 'Lights (Bassnectar Remix)',
      'music_artist' => 'Ellie Goulding',
      'music_artist_id' => '3787',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538775695,
      'music_last_update_time' => 1502534667,
      'music_title_search' => 'lightx; baxnectar remix',
      'music_artist_search' => '; eli goulding;',
      'music_album_search' => '',
      'music_composer' => 'Ellie Goulding; Richard Stannard; Ash Howes',
      'music_album' => '',
      'music_listen' => 3194,
      'music_track_id' => 0,
      'music_filename' => '1178407-0801e21d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I had a way then losing it all on my own
I had a heart then but the queen has been overthrown
And I\'m not sleeping now, the dark is too hard to beat
And I\'m not keeping now the strength I need t...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1265317,
      'music_title_url' => 'judas~lady-gaga',
      'music_title' => 'Judas',
      'music_artist' => 'Lady Gaga',
      'music_artist_id' => '1323',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538689727,
      'music_last_update_time' => 1501555777,
      'music_title_search' => 'judax',
      'music_artist_search' => '; ladi gaga;',
      'music_album_search' => '',
      'music_composer' => 'Lady Gaga; RedOne',
      'music_album' => '',
      'music_listen' => 61655,
      'music_track_id' => 0,
      'music_filename' => '1265317-9da132db.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Oh-oh-oh-ohoo 
I\'m in love with Juda-as, Juda-as 
Oh-oh-oh-ohoo 
I\'m in love with Juda-as, Juda-as 

Judas Juda-a-a, Judas Juda-a-a, Judas Juda-a-a, Judas GaGa 
Judas Juda-a-a, Judas Juda-a-a, Juda...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1062796,
      'music_title_url' => 'clocks~coldplay',
      'music_title' => 'Clocks',
      'music_artist' => 'Coldplay',
      'music_artist_id' => '6805',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538467985,
      'music_last_update_time' => 1483068467,
      'music_title_search' => 'clockx',
      'music_artist_search' => '; coldplai;',
      'music_album_search' => '',
      'music_composer' => 'Coldplay',
      'music_album' => '',
      'music_listen' => 3589,
      'music_track_id' => 0,
      'music_filename' => '1062796-e8df2839.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'The lights go out and I can\'t be saved
Tides that I tried to swim against
Have brought me down upon my knees
Oh I beg, I beg and plead, singing.

Come out of the things unsaid
Shoot an apple off my...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1271551,
      'music_title_url' => 'tik-tok-smtown-live-in-tokyo-110904~jessica-krystal',
      'music_title' => 'Tik Tok (SMTown Live In Tokyo 110904)',
      'music_artist' => 'Jessica;Krystal',
      'music_artist_id' => '1665;2162',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538576959,
      'music_last_update_time' => 1399706321,
      'music_title_search' => 'tik tok; xmtown live in tokio 10904',
      'music_artist_search' => '; jexica; krixtal;',
      'music_album_search' => '',
      'music_composer' => 'Ke$ha; Lukasz Gottwald; Benjamin Levin',
      'music_album' => '',
      'music_listen' => 26181,
      'music_track_id' => 0,
      'music_filename' => '1271551-1dbf4af1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Wake up in the morning feeling like P Diddy
(Hey, what up girl)
Grab my glasses, I\'m out the door
I\'m gonna hit this city (Lets go)
Before I leave, brush my teeth with a bottle of Jack
Cause when I...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 304566,
      'music_title_url' => 'born-this-way~lady-gaga',
      'music_title' => 'Born This Way',
      'music_artist' => 'Lady GaGa',
      'music_artist_id' => '971',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1368605275,
      'music_last_update_time' => 1350464186,
      'music_title_search' => 'born thix wai',
      'music_artist_search' => '; ladi gaga;',
      'music_album_search' => '',
      'music_composer' => 'Lady Gaga; Jeppe Laursen;  Fernando Garibay;  DJ White Shadow',
      'music_album' => '',
      'music_listen' => 79335,
      'music_track_id' => 0,
      'music_filename' => '304566-cdeefcdc.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'It doesn\'t matter if you love him, or capital H-I-M
Just put your paws up
\'Cause you were Born This Way, baby.

1. My mama told me when I was young
We are all born superstars
She rolled my hair and...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 309013,
      'music_title_url' => 'criminal~britney-spears',
      'music_title' => 'Criminal',
      'music_artist' => 'Britney Spears',
      'music_artist_id' => '74',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1364591045,
      'music_last_update_time' => 1350436807,
      'music_title_search' => 'criminal',
      'music_artist_search' => '; britnei xpearx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 17287,
      'music_track_id' => 0,
      'music_filename' => '309013-d1cc4346.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Britney Spears - Verse 1]

He is a hustler
He\'s no good at all
He is a loser, he\'s a bum, bum, bum, bum
He lies, he bluffs
He\'s unreliable.
He is a sucker with a gun, gun, gun, gun.

I know you to...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 364389,
      'music_title_url' => 'rain-over-me~pitbull-marc-anthony',
      'music_title' => 'Rain Over Me',
      'music_artist' => 'Pitbull;Marc Anthony',
      'music_artist_id' => '1814;2256',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1367752958,
      'music_last_update_time' => 1350547847,
      'music_title_search' => 'rain over me',
      'music_artist_search' => '; pitbul; marc anthoni;',
      'music_album_search' => '',
      'music_composer' => 'Marc Anthony',
      'music_album' => '',
      'music_listen' => 9767,
      'music_track_id' => 0,
      'music_filename' => '364389-9e12cb25.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Girl my body don\'t lie
I\'m outta my mind
Let it rain over me
I\'m rising so high
Out of my mind
So let it rain over me.

Ay ay ay
Let it rain over me
Ay ay ay
Let it rain over me.

Always a new mill...',
    ),
    14 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1015008,
      'music_title_url' => 'somebody-that-i-used-to-know~walk-off-the-earth',
      'music_title' => 'Somebody That I Used To Know',
      'music_artist' => 'Walk Off The Earth',
      'music_artist_id' => '4180',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539062302,
      'music_last_update_time' => 1347264727,
      'music_title_search' => 'xomebodi that i uxed to know',
      'music_artist_search' => '; walk of the earth;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 20360,
      'music_track_id' => 0,
      'music_filename' => '1015008-5301f264.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. Now and then I think of when we were together
Like when you said you felt so happy you could die
Told myself that you were right for me
But felt so lonely in your company
But that was love and i...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1015056,
      'music_title_url' => 'et~katy-perry-kanye-west',
      'music_title' => 'E.T.',
      'music_artist' => 'Katy Perry;Kanye West',
      'music_artist_id' => '1478;2131',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1523594131,
      'music_last_update_time' => 1347265021,
      'music_title_search' => 'e t',
      'music_artist_search' => '; kati peri; kani wext;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 189117,
      'music_track_id' => 0,
      'music_filename' => '1015056-08e8ce5b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Rap:]
I got a dirty mind
I got filthy ways
I\'m tryin\' to bathe my ape
In your milky way
I\'m a legend
I\'m irreverent
I\'ll be reverend
I\'ll be so far up
We don\'t give a fuck
Welcome to the danger zo...',
    ),
    16 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1015057,
      'music_title_url' => 'somebody-that-i-used-to-know~gotye-kimbra',
      'music_title' => 'Somebody That I Used To Know',
      'music_artist' => 'Gotye;Kimbra',
      'music_artist_id' => '13195;13196',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539062318,
      'music_last_update_time' => 1476245189,
      'music_title_search' => 'xomebodi that i uxed to know',
      'music_artist_search' => '; goti; kimbra;',
      'music_album_search' => '',
      'music_composer' => 'Gotye',
      'music_album' => '',
      'music_listen' => 94861,
      'music_track_id' => 0,
      'music_filename' => '1015057-ca2e9e41.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. Now and then I think of when we were together
Like when you said you felt so happy you could die
Told myself that you were right for me
But felt so lonely in your company
But that was love and i...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1021827,
      'music_title_url' => 'twinkle-lullaby-twinkle-little-star~the-piano-guys',
      'music_title' => 'Twinkle Lullaby (Twinkle Little Star)',
      'music_artist' => 'The Piano Guys',
      'music_artist_id' => '3802',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535424614,
      'music_last_update_time' => 1349236834,
      'music_title_search' => 'twinkle lulabi; twinkle litle xtar',
      'music_artist_search' => '; the piano gix;',
      'music_album_search' => '',
      'music_composer' => 'The Piano Guys',
      'music_album' => '',
      'music_listen' => 6702,
      'music_track_id' => 0,
      'music_filename' => '1021827-b69e4324.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024212,
      'music_title_url' => 'shot-in-the-dark~within-temptation',
      'music_title' => 'Shot In The Dark',
      'music_artist' => 'Within Temptation',
      'music_artist_id' => '12823',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495948535,
      'music_last_update_time' => 1473394068,
      'music_title_search' => 'thot in the dark',
      'music_artist_search' => '; within temptation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4338,
      'music_track_id' => 0,
      'music_filename' => '1024212-fbd73d7b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. I\'ve been left out alone like a damn criminal
I\'ve been praying for help cause I can\'t take it all
I\'m not done
It\'s not over
Now I\'m fighting this war since the day of the fall
And I\'m desperat...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1038277,
      'music_title_url' => 'rolling-in-the-deep~los-vazquez-sounds',
      'music_title' => 'Rolling In The Deep',
      'music_artist' => 'Los Vazquez Sounds',
      'music_artist_id' => '3298',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535903520,
      'music_last_update_time' => 1353290221,
      'music_title_search' => 'roling in the dep',
      'music_artist_search' => '; lox vazquez xoundx;',
      'music_album_search' => '',
      'music_composer' => 'Adele',
      'music_album' => '',
      'music_listen' => 19485,
      'music_track_id' => 0,
      'music_filename' => '1038277-6ad6bc29.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. There\'s a fire starting in my heart
Reaching a fever pitch and it\'s bring me out the dark
Finally I can see you crystal clear
Go ahead and sell me out and I\'ll lay your ship bare.

See how I\'ll...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1054499,
      'music_title_url' => 'without-you~david-guetta-ft-usher',
      'music_title' => 'Without You',
      'music_artist' => 'David Guetta Ft Usher',
      'music_artist_id' => '27657',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538503660,
      'music_last_update_time' => 1357117210,
      'music_title_search' => 'without iou',
      'music_artist_search' => '; david gueta ft uther;',
      'music_album_search' => '',
      'music_composer' => 'David Guetta',
      'music_album' => '',
      'music_listen' => 11848,
      'music_track_id' => 0,
      'music_filename' => '1054499-098593be.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'I can\'t win, I can\'t wait
I will never win this game without you, without you
I am lost, I am vain
I will never be the same without you, without you.

I won\'t love, I won\'t love
I will never make i...',
      'music_artist_html' => '<a href="/ca-si/David-Guetta-Ft-Usher~Y3NuX2FydGlzdH4yNzY1Nw==.html">David Guetta Ft Usher</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1062522,
      'music_title_url' => 'paradise~coldplay',
      'music_title' => 'Paradise',
      'music_artist' => 'Coldplay',
      'music_artist_id' => '6805',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538467948,
      'music_last_update_time' => 1482900795,
      'music_title_search' => 'paradixe',
      'music_artist_search' => '; coldplai;',
      'music_album_search' => '',
      'music_composer' => 'Coldplay',
      'music_album' => '',
      'music_listen' => 18648,
      'music_track_id' => 0,
      'music_filename' => '1062522-25ad4aa2.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'When she was just a girl
She inspected the world
But it flew away from her reach
So she ran away in her sleep.

Dreamed of para- para- paradise
Para- para- paradise
Para- para- paradise
Every time...',
      'music_artist_html' => '<a href="/ca-si/Coldplay~Y3NuX2FydGlzdH42ODA1.html">Coldplay</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1062982,
      'music_title_url' => 'titanium~david-guetta-sia',
      'music_title' => 'Titanium',
      'music_artist' => 'David Guetta;Sia',
      'music_artist_id' => '651;9255',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538503625,
      'music_last_update_time' => 1359691310,
      'music_title_search' => 'titanium',
      'music_artist_search' => '; david gueta; xia;',
      'music_album_search' => '',
      'music_composer' => 'David Guetta; Sia',
      'music_album' => '',
      'music_listen' => 59378,
      'music_track_id' => 0,
      'music_filename' => '1062982-2e9b9019.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. You shout it loud
But I can\'t hear a word you say
I\'m talking loud not saying much
I\'m criticized but all your bull is brick of shame
You shoot me down, but I get up.

[Chorus]
I\'m bulletproof n...',
      'music_artist_html' => '<a href="/ca-si/David-Guetta~Y3NuX2FydGlzdH42NTE=.html">David Guetta</a>, <a href="/ca-si/Sia~Y3NuX2FydGlzdH45MjU1.html">Sia</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1065752,
      'music_title_url' => 'michael-meets-mozart-1-piano-2-guys-100-cello~the-piano-guys',
      'music_title' => 'Michael Meets Mozart (1 Piano, 2 Guys, 100 Cello)',
      'music_artist' => 'The Piano Guys',
      'music_artist_id' => '3802',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538950677,
      'music_last_update_time' => 1361175913,
      'music_title_search' => 'michael metx mozart; 1 piano 2 gix 10 celo',
      'music_artist_search' => '; the piano gix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 20663,
      'music_track_id' => 0,
      'music_filename' => '1065752-94144bb5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/The-Piano-Guys~Y3NuX2FydGlzdH4zODAy.html">The Piano Guys</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1072253,
      'music_title_url' => 'wings~macklemore-ryan-lewis',
      'music_title' => 'Wings',
      'music_artist' => 'Macklemore;Ryan Lewis',
      'music_artist_id' => '19492;29606',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538938480,
      'music_last_update_time' => 1363250526,
      'music_title_search' => 'wingx',
      'music_artist_search' => '; macklemore; rian lewix;',
      'music_album_search' => '',
      'music_composer' => 'Ben Haggerty; Hollis Wong-Wear; Ryan Lewis; Andrew Joslyn',
      'music_album' => '',
      'music_listen' => 6355,
      'music_track_id' => 0,
      'music_filename' => '1072253-7ac724fd.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Ver1:]
I was seven years old, when I got my first pair
And I stepped outside
And I was like, momma, this air bubble right here, it\'s gonna make me fly
I hit that court, and when I jumped, I jumped...',
      'music_artist_html' => '<a href="/ca-si/Macklemore~Y3NuX2FydGlzdH4xOTQ5Mg==.html">Macklemore</a>, <a href="/ca-si/Ryan-Lewis~Y3NuX2FydGlzdH4yOTYwNg==.html">Ryan Lewis</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1076246,
      'music_title_url' => 'zombie~natalia-kills',
      'music_title' => 'Zombie',
      'music_artist' => 'Natalia Kills',
      'music_artist_id' => '13242',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538595152,
      'music_last_update_time' => 1365392246,
      'music_title_search' => 'zombi',
      'music_artist_search' => '; natalia kilx;',
      'music_album_search' => '',
      'music_composer' => 'Natalia Kills; Jeff Bhasker',
      'music_album' => '',
      'music_listen' => 2844,
      'music_track_id' => 0,
      'music_filename' => '1076246-8bc224d1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Zombie, Zombie

1. I\'m in love with a zombie
Can\'t keep his hands off me
I think he\'s looking at me
But he\'s looking right through me

You think you\'re so cool boy
Blood rushing through my veins no...',
      'music_artist_html' => '<a href="/ca-si/Natalia-Kills~Y3NuX2FydGlzdH4xMzI0Mg==.html">Natalia Kills</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1175074,
      'music_title_url' => 'run-the-world-girls~beyonce',
      'music_title' => 'Run The World (Girls)',
      'music_artist' => 'Beyoncé',
      'music_artist_id' => '889',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538841409,
      'music_last_update_time' => 1385517925,
      'music_title_search' => 'run the world; drlx',
      'music_artist_search' => '; beionce;',
      'music_album_search' => '',
      'music_composer' => 'Beyoncé; Afrojack; The-Dream; Diplo; Switch; Vybz Kartel',
      'music_album' => '',
      'music_listen' => 58340,
      'music_track_id' => 0,
      'music_filename' => '1175074-6728cb54.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Girls, we run this motha (yeah!) x4
GIRLS!

[Chorus]

[Ver1:]
Some of them men think they freak this like we do
But no they don\'t
Make your cheques come at they neck
Disrespect us no they won\'t.

B...',
      'music_artist_html' => '<a href="/ca-si/Beyonce~Y3NuX2FydGlzdH44ODk=.html">Beyoncé</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1178407,
      'music_title_url' => 'lights-bassnectar-remix~ellie-goulding',
      'music_title' => 'Lights (Bassnectar Remix)',
      'music_artist' => 'Ellie Goulding',
      'music_artist_id' => '3787',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538775695,
      'music_last_update_time' => 1502534667,
      'music_title_search' => 'lightx; baxnectar remix',
      'music_artist_search' => '; eli goulding;',
      'music_album_search' => '',
      'music_composer' => 'Ellie Goulding; Richard Stannard; Ash Howes',
      'music_album' => '',
      'music_listen' => 3194,
      'music_track_id' => 0,
      'music_filename' => '1178407-0801e21d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I had a way then losing it all on my own
I had a heart then but the queen has been overthrown
And I\'m not sleeping now, the dark is too hard to beat
And I\'m not keeping now the strength I need t...',
      'music_artist_html' => '<a href="/ca-si/Ellie-Goulding~Y3NuX2FydGlzdH4zNzg3.html">Ellie Goulding</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1265317,
      'music_title_url' => 'judas~lady-gaga',
      'music_title' => 'Judas',
      'music_artist' => 'Lady Gaga',
      'music_artist_id' => '1323',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538689727,
      'music_last_update_time' => 1501555777,
      'music_title_search' => 'judax',
      'music_artist_search' => '; ladi gaga;',
      'music_album_search' => '',
      'music_composer' => 'Lady Gaga; RedOne',
      'music_album' => '',
      'music_listen' => 61655,
      'music_track_id' => 0,
      'music_filename' => '1265317-9da132db.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Oh-oh-oh-ohoo 
I\'m in love with Juda-as, Juda-as 
Oh-oh-oh-ohoo 
I\'m in love with Juda-as, Juda-as 

Judas Juda-a-a, Judas Juda-a-a, Judas Juda-a-a, Judas GaGa 
Judas Juda-a-a, Judas Juda-a-a, Juda...',
      'music_artist_html' => '<a href="/ca-si/Lady-Gaga~Y3NuX2FydGlzdH4xMzIz.html">Lady Gaga</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1062796,
      'music_title_url' => 'clocks~coldplay',
      'music_title' => 'Clocks',
      'music_artist' => 'Coldplay',
      'music_artist_id' => '6805',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538467985,
      'music_last_update_time' => 1483068467,
      'music_title_search' => 'clockx',
      'music_artist_search' => '; coldplai;',
      'music_album_search' => '',
      'music_composer' => 'Coldplay',
      'music_album' => '',
      'music_listen' => 3589,
      'music_track_id' => 0,
      'music_filename' => '1062796-e8df2839.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'The lights go out and I can\'t be saved
Tides that I tried to swim against
Have brought me down upon my knees
Oh I beg, I beg and plead, singing.

Come out of the things unsaid
Shoot an apple off my...',
      'music_artist_html' => '<a href="/ca-si/Coldplay~Y3NuX2FydGlzdH42ODA1.html">Coldplay</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1271551,
      'music_title_url' => 'tik-tok-smtown-live-in-tokyo-110904~jessica-krystal',
      'music_title' => 'Tik Tok (SMTown Live In Tokyo 110904)',
      'music_artist' => 'Jessica;Krystal',
      'music_artist_id' => '1665;2162',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538576959,
      'music_last_update_time' => 1399706321,
      'music_title_search' => 'tik tok; xmtown live in tokio 10904',
      'music_artist_search' => '; jexica; krixtal;',
      'music_album_search' => '',
      'music_composer' => 'Ke$ha; Lukasz Gottwald; Benjamin Levin',
      'music_album' => '',
      'music_listen' => 26181,
      'music_track_id' => 0,
      'music_filename' => '1271551-1dbf4af1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Wake up in the morning feeling like P Diddy
(Hey, what up girl)
Grab my glasses, I\'m out the door
I\'m gonna hit this city (Lets go)
Before I leave, brush my teeth with a bottle of Jack
Cause when I...',
      'music_artist_html' => '<a href="/ca-si/Jessica~Y3NuX2FydGlzdH4xNjY1.html">Jessica</a>, <a href="/ca-si/Krystal~Y3NuX2FydGlzdH4yMTYy.html">Krystal</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 304566,
      'music_title_url' => 'born-this-way~lady-gaga',
      'music_title' => 'Born This Way',
      'music_artist' => 'Lady GaGa',
      'music_artist_id' => '971',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1368605275,
      'music_last_update_time' => 1350464186,
      'music_title_search' => 'born thix wai',
      'music_artist_search' => '; ladi gaga;',
      'music_album_search' => '',
      'music_composer' => 'Lady Gaga; Jeppe Laursen;  Fernando Garibay;  DJ White Shadow',
      'music_album' => '',
      'music_listen' => 79335,
      'music_track_id' => 0,
      'music_filename' => '304566-cdeefcdc.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'It doesn\'t matter if you love him, or capital H-I-M
Just put your paws up
\'Cause you were Born This Way, baby.

1. My mama told me when I was young
We are all born superstars
She rolled my hair and...',
      'music_artist_html' => '<a href="/ca-si/Lady-GaGa~Y3NuX2FydGlzdH45NzE=.html">Lady GaGa</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 309013,
      'music_title_url' => 'criminal~britney-spears',
      'music_title' => 'Criminal',
      'music_artist' => 'Britney Spears',
      'music_artist_id' => '74',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1364591045,
      'music_last_update_time' => 1350436807,
      'music_title_search' => 'criminal',
      'music_artist_search' => '; britnei xpearx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 17287,
      'music_track_id' => 0,
      'music_filename' => '309013-d1cc4346.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Britney Spears - Verse 1]

He is a hustler
He\'s no good at all
He is a loser, he\'s a bum, bum, bum, bum
He lies, he bluffs
He\'s unreliable.
He is a sucker with a gun, gun, gun, gun.

I know you to...',
      'music_artist_html' => '<a href="/ca-si/Britney-Spears~Y3NuX2FydGlzdH43NA==.html">Britney Spears</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 364389,
      'music_title_url' => 'rain-over-me~pitbull-marc-anthony',
      'music_title' => 'Rain Over Me',
      'music_artist' => 'Pitbull;Marc Anthony',
      'music_artist_id' => '1814;2256',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1367752958,
      'music_last_update_time' => 1350547847,
      'music_title_search' => 'rain over me',
      'music_artist_search' => '; pitbul; marc anthoni;',
      'music_album_search' => '',
      'music_composer' => 'Marc Anthony',
      'music_album' => '',
      'music_listen' => 9767,
      'music_track_id' => 0,
      'music_filename' => '364389-9e12cb25.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Girl my body don\'t lie
I\'m outta my mind
Let it rain over me
I\'m rising so high
Out of my mind
So let it rain over me.

Ay ay ay
Let it rain over me
Ay ay ay
Let it rain over me.

Always a new mill...',
      'music_artist_html' => '<a href="/ca-si/Pitbull~Y3NuX2FydGlzdH4xODE0.html">Pitbull</a>, <a href="/ca-si/Marc-Anthony~Y3NuX2FydGlzdH4yMjU2.html">Marc Anthony</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1015008,
      'music_title_url' => 'somebody-that-i-used-to-know~walk-off-the-earth',
      'music_title' => 'Somebody That I Used To Know',
      'music_artist' => 'Walk Off The Earth',
      'music_artist_id' => '4180',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539062302,
      'music_last_update_time' => 1347264727,
      'music_title_search' => 'xomebodi that i uxed to know',
      'music_artist_search' => '; walk of the earth;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 20360,
      'music_track_id' => 0,
      'music_filename' => '1015008-5301f264.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. Now and then I think of when we were together
Like when you said you felt so happy you could die
Told myself that you were right for me
But felt so lonely in your company
But that was love and i...',
      'music_artist_html' => '<a href="/ca-si/Walk-Off-The-Earth~Y3NuX2FydGlzdH40MTgw.html">Walk Off The Earth</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1015056,
      'music_title_url' => 'et~katy-perry-kanye-west',
      'music_title' => 'E.T.',
      'music_artist' => 'Katy Perry;Kanye West',
      'music_artist_id' => '1478;2131',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1523594131,
      'music_last_update_time' => 1347265021,
      'music_title_search' => 'e t',
      'music_artist_search' => '; kati peri; kani wext;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 189117,
      'music_track_id' => 0,
      'music_filename' => '1015056-08e8ce5b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Rap:]
I got a dirty mind
I got filthy ways
I\'m tryin\' to bathe my ape
In your milky way
I\'m a legend
I\'m irreverent
I\'ll be reverend
I\'ll be so far up
We don\'t give a fuck
Welcome to the danger zo...',
      'music_artist_html' => '<a href="/ca-si/Katy-Perry~Y3NuX2FydGlzdH4xNDc4.html">Katy Perry</a>, <a href="/ca-si/Kanye-West~Y3NuX2FydGlzdH4yMTMx.html">Kanye West</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1015057,
      'music_title_url' => 'somebody-that-i-used-to-know~gotye-kimbra',
      'music_title' => 'Somebody That I Used To Know',
      'music_artist' => 'Gotye;Kimbra',
      'music_artist_id' => '13195;13196',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539062318,
      'music_last_update_time' => 1476245189,
      'music_title_search' => 'xomebodi that i uxed to know',
      'music_artist_search' => '; goti; kimbra;',
      'music_album_search' => '',
      'music_composer' => 'Gotye',
      'music_album' => '',
      'music_listen' => 94861,
      'music_track_id' => 0,
      'music_filename' => '1015057-ca2e9e41.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. Now and then I think of when we were together
Like when you said you felt so happy you could die
Told myself that you were right for me
But felt so lonely in your company
But that was love and i...',
      'music_artist_html' => '<a href="/ca-si/Gotye~Y3NuX2FydGlzdH4xMzE5NQ==.html">Gotye</a>, <a href="/ca-si/Kimbra~Y3NuX2FydGlzdH4xMzE5Ng==.html">Kimbra</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1021827,
      'music_title_url' => 'twinkle-lullaby-twinkle-little-star~the-piano-guys',
      'music_title' => 'Twinkle Lullaby (Twinkle Little Star)',
      'music_artist' => 'The Piano Guys',
      'music_artist_id' => '3802',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535424614,
      'music_last_update_time' => 1349236834,
      'music_title_search' => 'twinkle lulabi; twinkle litle xtar',
      'music_artist_search' => '; the piano gix;',
      'music_album_search' => '',
      'music_composer' => 'The Piano Guys',
      'music_album' => '',
      'music_listen' => 6702,
      'music_track_id' => 0,
      'music_filename' => '1021827-b69e4324.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/The-Piano-Guys~Y3NuX2FydGlzdH4zODAy.html">The Piano Guys</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024212,
      'music_title_url' => 'shot-in-the-dark~within-temptation',
      'music_title' => 'Shot In The Dark',
      'music_artist' => 'Within Temptation',
      'music_artist_id' => '12823',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495948535,
      'music_last_update_time' => 1473394068,
      'music_title_search' => 'thot in the dark',
      'music_artist_search' => '; within temptation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4338,
      'music_track_id' => 0,
      'music_filename' => '1024212-fbd73d7b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. I\'ve been left out alone like a damn criminal
I\'ve been praying for help cause I can\'t take it all
I\'m not done
It\'s not over
Now I\'m fighting this war since the day of the fall
And I\'m desperat...',
      'music_artist_html' => '<a href="/ca-si/Within-Temptation~Y3NuX2FydGlzdH4xMjgyMw==.html">Within Temptation</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1038277,
      'music_title_url' => 'rolling-in-the-deep~los-vazquez-sounds',
      'music_title' => 'Rolling In The Deep',
      'music_artist' => 'Los Vazquez Sounds',
      'music_artist_id' => '3298',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535903520,
      'music_last_update_time' => 1353290221,
      'music_title_search' => 'roling in the dep',
      'music_artist_search' => '; lox vazquez xoundx;',
      'music_album_search' => '',
      'music_composer' => 'Adele',
      'music_album' => '',
      'music_listen' => 19485,
      'music_track_id' => 0,
      'music_filename' => '1038277-6ad6bc29.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. There\'s a fire starting in my heart
Reaching a fever pitch and it\'s bring me out the dark
Finally I can see you crystal clear
Go ahead and sell me out and I\'ll lay your ship bare.

See how I\'ll...',
      'music_artist_html' => '<a href="/ca-si/Los-Vazquez-Sounds~Y3NuX2FydGlzdH4zMjk4.html">Los Vazquez Sounds</a>',
    ),
  ),
  3 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023771,
      'music_title_url' => 'enchanting-melody-me-hon-khuc-mi-hun-q~chau-kiet-luan',
      'music_title' => 'Enchanting Melody (Mê Hồn Khúc; Mí Hún Qǔ; 迷魂曲)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494343403,
      'music_last_update_time' => 1350009606,
      'music_title_search' => 'enchanting melodi; me hon khuc; mi hun qǔ; 迷魂曲',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 4298,
      'music_track_id' => 0,
      'music_filename' => '1023771-3743d784.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '我用琴鍵移動 決定你一生的內容
Wo yong qin jian yi dong jue ding ni yi sheng de nei rong
黑帽戴上 穿著橫條毛衣再配上手套
Hei mao dai shang chuan zhuo heng tiao mao yi zai pei shang shou tao
接著走在一遍霧裡 我不是那佛萊迪
Jie zhe zou zai yi b...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023772,
      'music_title_url' => 'exclaimation-mark~chau-kiet-luan',
      'music_title' => 'Exclaimation Mark (惊叹号)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1428610509,
      'music_last_update_time' => 1350010028,
      'music_title_search' => 'exclaimation mark; 惊叹号',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 4010,
      'music_track_id' => 0,
      'music_filename' => '1023772-adde971c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '越山丘过哑口云端的空气稀薄
Yue shan qiu guo ya kou yun duan de kong qi xi bo
这街头敌意多烟硝弥漫不了我
Zhe jie tou di yi duo yan xiao mi man bu liao wo
空袭对我是种啰嗦
Kong xi dui wo shi zhong le suo
警报呢是让你们有时间走
Jing bao ne shi r...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023773,
      'music_title_url' => 'healing-dumplings-banh-nep-chua-benh~chau-kiet-luan',
      'music_title' => 'Healing Dumplings (Bánh Nếp Chữa Bệnh; 疗伤烧肉粽)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1509979628,
      'music_last_update_time' => 1350010564,
      'music_title_search' => 'healing dumplingx; banh nep chua benh; 疗伤烧肉粽',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 7870,
      'music_track_id' => 0,
      'music_filename' => '1023773-ca1d932f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '唉 呦    我 早  已 说   过  你 跟  他 应   该  会  分  开
Āi yōu   wǒ záo yǐ shuō guò nǐ gēn tā yīng gāi huì fēn kāi
吵   架  的 理 由  我 也 已 经   知  道  大 概
Chǎo jià de lǐ yóu wǒ yě yǐ jīng zhī dào dà gài
你 需 要  人  宠...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023774,
      'music_title_url' => 'how-are-you-em-khoe-khong~chau-kiet-luan',
      'music_title' => 'How Are You (Em Khoẻ Không; 你好吗)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531932115,
      'music_last_update_time' => 1350014656,
      'music_title_search' => 'how are iou; em khoe khong; 你好吗',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 9186,
      'music_track_id' => 0,
      'music_filename' => '1023774-2612f406.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '墙上静止的钟是为谁 停留
Qiang shang jing zhi de zhong shi wei shui ting liu
是不是和我一样赖着不走
Shi bu shi he wo yi yang lai zhe bu zou
你说故事已经结束 很久
Ni shuo gu shi yi jing jie shu hen jiu
我忘了 向前走
Wo wang le xiang qian...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023775,
      'music_title_url' => 'hydrophobic-sailor-thuy-thu-so-nuoc~chau-kiet-luan',
      'music_title' => 'Hydrophobic Sailor (Thuỷ Thủ Sợ Nước; 水手怕水)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512528464,
      'music_last_update_time' => 1350024380,
      'music_title_search' => 'hidrophobic xailor; thi thu xo nuc; 水手怕水',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 5172,
      'music_track_id' => 0,
      'music_filename' => '1023775-12e92133.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '大 海  真   可 怕   叫   我 水   手    Oh oh come on come on baby
Dà hǎi zhēn kě pà   jiào wǒ shuí shǒu  Oh oh come on come on baby
美  人  鱼 勾  引  我 这  招     卑  鄙
Měi rén yú gōu yǐn wǒ zhè zhāo   bēi bǐ
Oh 喊...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023776,
      'music_title_url' => 'mine-mine~chau-kiet-luan',
      'music_title' => 'Mine Mine',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1508717975,
      'music_last_update_time' => 1350026293,
      'music_title_search' => 'mine mine',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 10361,
      'music_track_id' => 0,
      'music_filename' => '1023776-8cb4c20d.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '沒有你的生活 我開始寫小說
Mei you ni de sheng huo wo kai shi xie xiao shuo
好多畫面好多靈感 我要把稿費都給你
Hao duo hua mian hao duo ling gan wo yao ba gao fei dou gei ni
巷口不小心經過 你的車子依舊停在紅線
Xiang kou bu xiao xin jing guo ni...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023777,
      'music_title_url' => 'cam-thuong~chau-kiet-luan',
      'music_title' => 'Cầm Thương',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530299596,
      'music_last_update_time' => 1350093523,
      'music_title_search' => 'cam thung',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 5466,
      'music_track_id' => 0,
      'music_filename' => '1023777-cd7f763d.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '海  天     连   线   的   地 方   是  那 夕 阳
Hǎi tiān   lián xiàn de   dì fang shì nà xī yáng
木 造    的 甲  板  一 整    遍     是  那 金  黄
Mù zào   de jiá bǎn yì zhěng biàn   shì nà jīn huáng
你 背  光      的 轮  廓  就...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023778,
      'music_title_url' => 'princess-syndrome-benh-cong-chua~chau-kiet-luan',
      'music_title' => 'Princess Syndrome (Bệnh Công Chúa; 公主病)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495355656,
      'music_last_update_time' => 1350093644,
      'music_title_search' => 'princex xindrome; benh cong chua; 公主病',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 8116,
      'music_track_id' => 0,
      'music_filename' => '1023778-0e245715.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Wèi shé me wǒ yào qù shài tài yáng, wǒ yào qù xué yóu yǒng
Chōng làng bǎn yào dān shǒu lái káng
Hái bù shì yīn wèi nǐ, xǐ huan yáng guāng nán
Yào wǒ bēn pǎo zài hǎi tān shàng
Nǐ diū fēi pán wǒ xué...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023779,
      'music_title_url' => 'shadow-puppetry-mua-roi-bong~chau-kiet-luan',
      'music_title' => 'Shadow Puppetry (Múa Rối Bóng; 皮影戏)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529485057,
      'music_last_update_time' => 1350093890,
      'music_title_search' => 'thadow pupechi; mua roi bong; 皮影戏',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 4654,
      'music_track_id' => 0,
      'music_filename' => '1023779-5e702792.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '微薄的身軀 刻畫出厚實尊嚴
Wei bo de shen qu ke hua chu hou shi zun yan
小小屏幕 撐起大大一片天
Xiao xiao ping mu cheng qi da da yi pian tian
觀眾靜候在我的眼前 燈光閃耀在我後面 我碎碎念
Guan zhong jing hou zai wo de yan qian deng guang shan...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023780,
      'music_title_url' => 'the-goddess-of-race-sieu-xe-nu-than~chau-kiet-luan',
      'music_title' => 'The Goddess Of Race (Siêu Xe Nữ Thần; 超跑女神)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525689384,
      'music_last_update_time' => 1350094055,
      'music_title_search' => 'the godex of race; xiu xe nu than; 超跑女神',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 11317,
      'music_track_id' => 0,
      'music_filename' => '1023780-dd7287ab.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '音乐在激动
Yīn yuè zài jī dòng
舞步在骚动
Wǔ bù zài sāo dòng 
你的心我掌控掌控懂不懂
Nǐ de xīn wǒ zhǎng kòng zhǎng kòng dǒng bù dǒng
引擎声划夜空
Yǐn qíng shēng huà yè kōng 
座椅上的安全带在紧绷
Zuò yǐ shàng de ān quán dài zài jǐn bēn...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023781,
      'music_title_url' => 'the-worlds-not-over-the-gioi-chua-ket-thuc~chau-kiet-luan',
      'music_title' => 'The World\'s Not Over (Thế Giới Chưa Kết Thúc; 世界末末日)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1504760336,
      'music_last_update_time' => 1350094365,
      'music_title_search' => 'the world x not over; the doi chua ket thuc; 世界末日',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 4888,
      'music_track_id' => 0,
      'music_filename' => '1023781-4cdb3ccf.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '這街道在下陷 我們就快失去了家園
Zhe jie dao zai xia xian wo men jiu kuai shi qu le jia yuan
你我卻都沒有埋怨 將眼淚停格瞬間
Ni wo que dou mei you mai yuan jiang yan lei ting ge shun jian
街景摧毀 我內心卻不輕易撤退
Jie ying cui hui wo nei x...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024008,
      'music_title_url' => 'those-bygone-years-nhung-nam-thang-ay~ho-ha',
      'music_title' => 'Those Bygone Years (Những Năm Tháng Ấy)',
      'music_artist' => 'Hồ Hạ',
      'music_artist_id' => '14099',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536317804,
      'music_last_update_time' => 1350011755,
      'music_title_search' => 'thoxe bigone iarx; nhung 5 thang ai',
      'music_artist_search' => '; ho ha;',
      'music_album_search' => '',
      'music_composer' => 'Mitsutoshi Kimura',
      'music_album' => '',
      'music_listen' => 43729,
      'music_track_id' => 0,
      'music_filename' => '1024008-d0066242.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'You hui dao zui chu de qi dian ji yi zhong ni qing se de lian 
Wo men zhong yu lai dao le zhe yi tian 
Zhuo dian xia de lao zhao pian wu shu hui yi lian jie 
Jin tian nan hai yao fu nuu hai zui hou...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024019,
      'music_title_url' => 'lonesome-caffeine-hiu-quanh~kha-chan-dong',
      'music_title' => 'Lonesome Caffeine (Hiu Quạnh)',
      'music_artist' => 'Kha Chấn Đông',
      'music_artist_id' => '25437',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495918295,
      'music_last_update_time' => 1350012335,
      'music_title_search' => 'lonexome cafeine; hiu quanh',
      'music_artist_search' => '; kha chan dong;',
      'music_album_search' => '',
      'music_composer' => 'Cửu Bả Đao',
      'music_album' => '',
      'music_listen' => 6929,
      'music_track_id' => 0,
      'music_filename' => '1024019-9cf11c83.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '寂 寞 的 我 　 在  寂 寞 的 夜 　 寂 寞 地 想    着  寂 寞 的 你
Jì mò de wǒ 　 zài jì mò de yè 　 jì mò dì xiǎng zhe jì mò de nǐ
寂 寞 的 风   　 寂 寞 的 雨 　 寂 寞 地 数  着  每  颗 晨   星
Jì mò de fēng 　 jì mò de yǔ 　 jì mò dì shù z...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024020,
      'music_title_url' => 'lonesome-caffeine-hiu-quanh-vietsub~kha-chan-dong',
      'music_title' => 'Lonesome Caffeine (Hiu Quạnh; Vietsub)',
      'music_artist' => 'Kha Chấn Đông',
      'music_artist_id' => '25437',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512882339,
      'music_last_update_time' => 1350093054,
      'music_title_search' => 'lonexome cafeine; hiu quanh; vitxub',
      'music_artist_search' => '; kha chan dong;',
      'music_album_search' => '',
      'music_composer' => 'Cửu Bả Đao',
      'music_album' => '',
      'music_listen' => 9117,
      'music_track_id' => 0,
      'music_filename' => '1024020-cc00771f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '寂 寞 的 我 　 在  寂 寞 的 夜 　 寂 寞 地 想    着  寂 寞 的 你
Jì mò de wǒ 　 zài jì mò de yè 　 jì mò dì xiǎng zhe jì mò de nǐ
寂 寞 的 风   　 寂 寞 的 雨 　 寂 寞 地 数  着  每  颗 晨   星
Jì mò de fēng 　 jì mò de yǔ 　 jì mò dì shù z...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024021,
      'music_title_url' => 'finding-you-in-a-sea-of-people-giua-bien-nguoi-ta-gap-duoc-nhau~lam-duc-quan',
      'music_title' => 'Finding You In A Sea Of People (Giữa Biển Người Ta Gặp Được Nhau)',
      'music_artist' => 'Lâm Dục Quần',
      'music_artist_id' => '25438',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533529071,
      'music_last_update_time' => 1350012658,
      'music_title_search' => 'finding iou in a xea of people; dua bin ngui ta gap duc nhau',
      'music_artist_search' => '; lam duc quan;',
      'music_album_search' => '',
      'music_composer' => 'Trần Dương',
      'music_album' => '',
      'music_listen' => 13815,
      'music_track_id' => 0,
      'music_filename' => '1024021-0d39f9ad.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '你 的 爱 值 得 信 赖 你 的 心 靠 在 身 边
Nǐ de ài zhí dé xìn lài nǐ de xīn kào zài shēn biān
Tình em chiếm trọn niềm tin, trái tim em luôn bên anh kề cận

只 要 你 在 我 就 有 许 多 梦 想 只 要 你 在 我 就 有 更 多 力 量
Zhǐ yào nǐ...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024022,
      'music_title_url' => 'finding-you-in-a-sea-of-people-giua-bien-nguoi-ta-gap-duoc-nhau-vie~lam-duc-quan',
      'music_title' => 'Finding You In A Sea Of People (Giữa Biển Người Ta Gặp Được Nhau; Vietsub)',
      'music_artist' => 'Lâm Dục Quần',
      'music_artist_id' => '25438',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512102445,
      'music_last_update_time' => 1350012772,
      'music_title_search' => 'finding iou in a xea of people; dua bin ngui ta gap duc nhau; vitxub',
      'music_artist_search' => '; lam duc quan;',
      'music_album_search' => '',
      'music_composer' => 'Trần Dương',
      'music_album' => '',
      'music_listen' => 15309,
      'music_track_id' => 0,
      'music_filename' => '1024022-678e2345.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '你 的 爱 值 得 信 赖 你 的 心 靠 在 身 边
Nǐ de ài zhí dé xìn lài nǐ de xīn kào zài shēn biān
Tình em chiếm trọn niềm tin, trái tim em luôn bên anh kề cận

只 要 你 在 我 就 有 许 多 梦 想 只 要 你 在 我 就 有 更 多 力 量
Zhǐ yào nǐ...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024023,
      'music_title_url' => 'childish-au-tri~tran-nghien-hy',
      'music_title' => 'Childish  (Ấu Trĩ)',
      'music_artist' => 'Trần Nghiên Hy',
      'music_artist_id' => '4446',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498915276,
      'music_last_update_time' => 1350012932,
      'music_title_search' => 'childith ; au chi',
      'music_artist_search' => '; chan nghin hi;',
      'music_album_search' => '',
      'music_composer' => 'Trần Nghiên Hy',
      'music_album' => '',
      'music_listen' => 11538,
      'music_track_id' => 0,
      'music_filename' => '1024023-fadbbec1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '看 到 当 年 教 室 窗 口 前 的 你 和 我
Kàn dào dāng nián jiào shì chuāng kǒu qián de nǐ hé wǒ
像 月 亮 在 黑 夜 起 不 了 光 合 作 用
Xiàng yuè liang zài hēi yè qǐ bù liǎo guāng hé zuò yòng
若 不 是 Cupid 错 射 苹 果 在 你 胸 口
Ruò bú...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024024,
      'music_title_url' => 'childish-au-tri-vietsub~tran-nghien-hy',
      'music_title' => 'Childish  (Ấu Trĩ; Vietsub)',
      'music_artist' => 'Trần Nghiên Hy',
      'music_artist_id' => '4446',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497018696,
      'music_last_update_time' => 1350013010,
      'music_title_search' => 'childith ; au chi; vitxub',
      'music_artist_search' => '; chan nghin hi;',
      'music_album_search' => '',
      'music_composer' => 'Trần Nghiên Hy',
      'music_album' => '',
      'music_listen' => 19253,
      'music_track_id' => 0,
      'music_filename' => '1024024-9e05eb48.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '看 到 当 年 教 室 窗 口 前 的 你 和 我
Kàn dào dāng nián jiào shì chuāng kǒu qián de nǐ hé wǒ
像 月 亮 在 黑 夜 起 不 了 光 合 作 用
Xiàng yuè liang zài hēi yè qǐ bù liǎo guāng hé zuò yòng
若 不 是 Cupid 错 射 苹 果 在 你 胸 口
Ruò bú...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1047648,
      'music_title_url' => 'trap~vien-vinh-lam',
      'music_title' => 'Trap (陷阱)',
      'music_artist' => 'Viên Vịnh Lâm',
      'music_artist_id' => '11748',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495399689,
      'music_last_update_time' => 1355366613,
      'music_title_search' => 'chap; 陷阱',
      'music_artist_search' => '; vin vinh lam;',
      'music_album_search' => '',
      'music_composer' => 'Viên Vịnh Lâm',
      'music_album' => '',
      'music_listen' => 10430,
      'music_track_id' => 0,
      'music_filename' => '1047648-5c5be3a1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '從來不問對不對
聽從我任性指揮
你說我的愛很珍貴（愛很珍貴）

如此的不顧一切
謝謝你貼心追隨
有些事我需要告解（需要告解）

那天午後美麗的相遇
讓你相信了命中注定
你說我像女神般神祕

告訴你一個小祕密
我們完美的默契 是我為了得到你
設了陷阱

偷偷愛上你以後
變身愛情的兇手
只跟蹤你的腳印
即時動態follow
我策劃每場show 你眼中只有我
都怪我太有決心
愛上你沒了救
喔喔喔喔...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1047880,
      'music_title_url' => 'break-a-broken-heart~cindy-yen',
      'music_title' => 'Break A Broken Heart (把傷心打碎)',
      'music_artist' => 'Cindy Yen',
      'music_artist_id' => '25350',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494908947,
      'music_last_update_time' => 1482830136,
      'music_title_search' => 'break a broken heart; 把傷心打碎',
      'music_artist_search' => '; cindi in;',
      'music_album_search' => '',
      'music_composer' => 'Cindy Yen',
      'music_album' => '',
      'music_listen' => 6980,
      'music_track_id' => 0,
      'music_filename' => '1047880-ee799751.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '聽見 狡猾的辯解 看見 自私的感覺
胸口的酸 要比痛更強烈
變心 我可以成全 貪心 怎麼能妥協
你不懂得 我倔強那一面

你不能拿一半的愛 來交換我的全世界
別用回憶騙我忘了一切就不變
而回憶就像紛亂的線 快把我纏繞成一個繭
但不逃出黑暗房間 就沒藍天

把傷心打碎 要先流乾眼淚
把記憶燒成灰 那苦就沒滋味
把傷心打碎 像重新活一回
等和真愛面對 我才不會防備 敢親吻玫瑰

背叛 並不是雨點...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023771,
      'music_title_url' => 'enchanting-melody-me-hon-khuc-mi-hun-q~chau-kiet-luan',
      'music_title' => 'Enchanting Melody (Mê Hồn Khúc; Mí Hún Qǔ; 迷魂曲)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494343403,
      'music_last_update_time' => 1350009606,
      'music_title_search' => 'enchanting melodi; me hon khuc; mi hun qǔ; 迷魂曲',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 4298,
      'music_track_id' => 0,
      'music_filename' => '1023771-3743d784.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '我用琴鍵移動 決定你一生的內容
Wo yong qin jian yi dong jue ding ni yi sheng de nei rong
黑帽戴上 穿著橫條毛衣再配上手套
Hei mao dai shang chuan zhuo heng tiao mao yi zai pei shang shou tao
接著走在一遍霧裡 我不是那佛萊迪
Jie zhe zou zai yi b...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023772,
      'music_title_url' => 'exclaimation-mark~chau-kiet-luan',
      'music_title' => 'Exclaimation Mark (惊叹号)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1428610509,
      'music_last_update_time' => 1350010028,
      'music_title_search' => 'exclaimation mark; 惊叹号',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 4010,
      'music_track_id' => 0,
      'music_filename' => '1023772-adde971c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '越山丘过哑口云端的空气稀薄
Yue shan qiu guo ya kou yun duan de kong qi xi bo
这街头敌意多烟硝弥漫不了我
Zhe jie tou di yi duo yan xiao mi man bu liao wo
空袭对我是种啰嗦
Kong xi dui wo shi zhong le suo
警报呢是让你们有时间走
Jing bao ne shi r...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023773,
      'music_title_url' => 'healing-dumplings-banh-nep-chua-benh~chau-kiet-luan',
      'music_title' => 'Healing Dumplings (Bánh Nếp Chữa Bệnh; 疗伤烧肉粽)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1509979628,
      'music_last_update_time' => 1350010564,
      'music_title_search' => 'healing dumplingx; banh nep chua benh; 疗伤烧肉粽',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 7870,
      'music_track_id' => 0,
      'music_filename' => '1023773-ca1d932f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '唉 呦    我 早  已 说   过  你 跟  他 应   该  会  分  开
Āi yōu   wǒ záo yǐ shuō guò nǐ gēn tā yīng gāi huì fēn kāi
吵   架  的 理 由  我 也 已 经   知  道  大 概
Chǎo jià de lǐ yóu wǒ yě yǐ jīng zhī dào dà gài
你 需 要  人  宠...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023774,
      'music_title_url' => 'how-are-you-em-khoe-khong~chau-kiet-luan',
      'music_title' => 'How Are You (Em Khoẻ Không; 你好吗)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531932115,
      'music_last_update_time' => 1350014656,
      'music_title_search' => 'how are iou; em khoe khong; 你好吗',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 9186,
      'music_track_id' => 0,
      'music_filename' => '1023774-2612f406.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '墙上静止的钟是为谁 停留
Qiang shang jing zhi de zhong shi wei shui ting liu
是不是和我一样赖着不走
Shi bu shi he wo yi yang lai zhe bu zou
你说故事已经结束 很久
Ni shuo gu shi yi jing jie shu hen jiu
我忘了 向前走
Wo wang le xiang qian...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023775,
      'music_title_url' => 'hydrophobic-sailor-thuy-thu-so-nuoc~chau-kiet-luan',
      'music_title' => 'Hydrophobic Sailor (Thuỷ Thủ Sợ Nước; 水手怕水)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512528464,
      'music_last_update_time' => 1350024380,
      'music_title_search' => 'hidrophobic xailor; thi thu xo nuc; 水手怕水',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 5172,
      'music_track_id' => 0,
      'music_filename' => '1023775-12e92133.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '大 海  真   可 怕   叫   我 水   手    Oh oh come on come on baby
Dà hǎi zhēn kě pà   jiào wǒ shuí shǒu  Oh oh come on come on baby
美  人  鱼 勾  引  我 这  招     卑  鄙
Měi rén yú gōu yǐn wǒ zhè zhāo   bēi bǐ
Oh 喊...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023776,
      'music_title_url' => 'mine-mine~chau-kiet-luan',
      'music_title' => 'Mine Mine',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1508717975,
      'music_last_update_time' => 1350026293,
      'music_title_search' => 'mine mine',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 10361,
      'music_track_id' => 0,
      'music_filename' => '1023776-8cb4c20d.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '沒有你的生活 我開始寫小說
Mei you ni de sheng huo wo kai shi xie xiao shuo
好多畫面好多靈感 我要把稿費都給你
Hao duo hua mian hao duo ling gan wo yao ba gao fei dou gei ni
巷口不小心經過 你的車子依舊停在紅線
Xiang kou bu xiao xin jing guo ni...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023777,
      'music_title_url' => 'cam-thuong~chau-kiet-luan',
      'music_title' => 'Cầm Thương',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530299596,
      'music_last_update_time' => 1350093523,
      'music_title_search' => 'cam thung',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 5466,
      'music_track_id' => 0,
      'music_filename' => '1023777-cd7f763d.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '海  天     连   线   的   地 方   是  那 夕 阳
Hǎi tiān   lián xiàn de   dì fang shì nà xī yáng
木 造    的 甲  板  一 整    遍     是  那 金  黄
Mù zào   de jiá bǎn yì zhěng biàn   shì nà jīn huáng
你 背  光      的 轮  廓  就...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023778,
      'music_title_url' => 'princess-syndrome-benh-cong-chua~chau-kiet-luan',
      'music_title' => 'Princess Syndrome (Bệnh Công Chúa; 公主病)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495355656,
      'music_last_update_time' => 1350093644,
      'music_title_search' => 'princex xindrome; benh cong chua; 公主病',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 8116,
      'music_track_id' => 0,
      'music_filename' => '1023778-0e245715.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Wèi shé me wǒ yào qù shài tài yáng, wǒ yào qù xué yóu yǒng
Chōng làng bǎn yào dān shǒu lái káng
Hái bù shì yīn wèi nǐ, xǐ huan yáng guāng nán
Yào wǒ bēn pǎo zài hǎi tān shàng
Nǐ diū fēi pán wǒ xué...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023779,
      'music_title_url' => 'shadow-puppetry-mua-roi-bong~chau-kiet-luan',
      'music_title' => 'Shadow Puppetry (Múa Rối Bóng; 皮影戏)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529485057,
      'music_last_update_time' => 1350093890,
      'music_title_search' => 'thadow pupechi; mua roi bong; 皮影戏',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 4654,
      'music_track_id' => 0,
      'music_filename' => '1023779-5e702792.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '微薄的身軀 刻畫出厚實尊嚴
Wei bo de shen qu ke hua chu hou shi zun yan
小小屏幕 撐起大大一片天
Xiao xiao ping mu cheng qi da da yi pian tian
觀眾靜候在我的眼前 燈光閃耀在我後面 我碎碎念
Guan zhong jing hou zai wo de yan qian deng guang shan...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023780,
      'music_title_url' => 'the-goddess-of-race-sieu-xe-nu-than~chau-kiet-luan',
      'music_title' => 'The Goddess Of Race (Siêu Xe Nữ Thần; 超跑女神)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525689384,
      'music_last_update_time' => 1350094055,
      'music_title_search' => 'the godex of race; xiu xe nu than; 超跑女神',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 11317,
      'music_track_id' => 0,
      'music_filename' => '1023780-dd7287ab.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '音乐在激动
Yīn yuè zài jī dòng
舞步在骚动
Wǔ bù zài sāo dòng 
你的心我掌控掌控懂不懂
Nǐ de xīn wǒ zhǎng kòng zhǎng kòng dǒng bù dǒng
引擎声划夜空
Yǐn qíng shēng huà yè kōng 
座椅上的安全带在紧绷
Zuò yǐ shàng de ān quán dài zài jǐn bēn...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1023781,
      'music_title_url' => 'the-worlds-not-over-the-gioi-chua-ket-thuc~chau-kiet-luan',
      'music_title' => 'The World\'s Not Over (Thế Giới Chưa Kết Thúc; 世界末末日)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1504760336,
      'music_last_update_time' => 1350094365,
      'music_title_search' => 'the world x not over; the doi chua ket thuc; 世界末日',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 4888,
      'music_track_id' => 0,
      'music_filename' => '1023781-4cdb3ccf.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '這街道在下陷 我們就快失去了家園
Zhe jie dao zai xia xian wo men jiu kuai shi qu le jia yuan
你我卻都沒有埋怨 將眼淚停格瞬間
Ni wo que dou mei you mai yuan jiang yan lei ting ge shun jian
街景摧毀 我內心卻不輕易撤退
Jie ying cui hui wo nei x...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024008,
      'music_title_url' => 'those-bygone-years-nhung-nam-thang-ay~ho-ha',
      'music_title' => 'Those Bygone Years (Những Năm Tháng Ấy)',
      'music_artist' => 'Hồ Hạ',
      'music_artist_id' => '14099',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536317804,
      'music_last_update_time' => 1350011755,
      'music_title_search' => 'thoxe bigone iarx; nhung 5 thang ai',
      'music_artist_search' => '; ho ha;',
      'music_album_search' => '',
      'music_composer' => 'Mitsutoshi Kimura',
      'music_album' => '',
      'music_listen' => 43729,
      'music_track_id' => 0,
      'music_filename' => '1024008-d0066242.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'You hui dao zui chu de qi dian ji yi zhong ni qing se de lian 
Wo men zhong yu lai dao le zhe yi tian 
Zhuo dian xia de lao zhao pian wu shu hui yi lian jie 
Jin tian nan hai yao fu nuu hai zui hou...',
      'music_artist_html' => '<a href="/ca-si/Ho-Ha~Y3NuX2FydGlzdH4xNDA5OQ==.html">Hồ Hạ</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024019,
      'music_title_url' => 'lonesome-caffeine-hiu-quanh~kha-chan-dong',
      'music_title' => 'Lonesome Caffeine (Hiu Quạnh)',
      'music_artist' => 'Kha Chấn Đông',
      'music_artist_id' => '25437',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495918295,
      'music_last_update_time' => 1350012335,
      'music_title_search' => 'lonexome cafeine; hiu quanh',
      'music_artist_search' => '; kha chan dong;',
      'music_album_search' => '',
      'music_composer' => 'Cửu Bả Đao',
      'music_album' => '',
      'music_listen' => 6929,
      'music_track_id' => 0,
      'music_filename' => '1024019-9cf11c83.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '寂 寞 的 我 　 在  寂 寞 的 夜 　 寂 寞 地 想    着  寂 寞 的 你
Jì mò de wǒ 　 zài jì mò de yè 　 jì mò dì xiǎng zhe jì mò de nǐ
寂 寞 的 风   　 寂 寞 的 雨 　 寂 寞 地 数  着  每  颗 晨   星
Jì mò de fēng 　 jì mò de yǔ 　 jì mò dì shù z...',
      'music_artist_html' => '<a href="/ca-si/Kha-Chan-Dong~Y3NuX2FydGlzdH4yNTQzNw==.html">Kha Chấn Đông</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024020,
      'music_title_url' => 'lonesome-caffeine-hiu-quanh-vietsub~kha-chan-dong',
      'music_title' => 'Lonesome Caffeine (Hiu Quạnh; Vietsub)',
      'music_artist' => 'Kha Chấn Đông',
      'music_artist_id' => '25437',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512882339,
      'music_last_update_time' => 1350093054,
      'music_title_search' => 'lonexome cafeine; hiu quanh; vitxub',
      'music_artist_search' => '; kha chan dong;',
      'music_album_search' => '',
      'music_composer' => 'Cửu Bả Đao',
      'music_album' => '',
      'music_listen' => 9117,
      'music_track_id' => 0,
      'music_filename' => '1024020-cc00771f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '寂 寞 的 我 　 在  寂 寞 的 夜 　 寂 寞 地 想    着  寂 寞 的 你
Jì mò de wǒ 　 zài jì mò de yè 　 jì mò dì xiǎng zhe jì mò de nǐ
寂 寞 的 风   　 寂 寞 的 雨 　 寂 寞 地 数  着  每  颗 晨   星
Jì mò de fēng 　 jì mò de yǔ 　 jì mò dì shù z...',
      'music_artist_html' => '<a href="/ca-si/Kha-Chan-Dong~Y3NuX2FydGlzdH4yNTQzNw==.html">Kha Chấn Đông</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024021,
      'music_title_url' => 'finding-you-in-a-sea-of-people-giua-bien-nguoi-ta-gap-duoc-nhau~lam-duc-quan',
      'music_title' => 'Finding You In A Sea Of People (Giữa Biển Người Ta Gặp Được Nhau)',
      'music_artist' => 'Lâm Dục Quần',
      'music_artist_id' => '25438',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533529071,
      'music_last_update_time' => 1350012658,
      'music_title_search' => 'finding iou in a xea of people; dua bin ngui ta gap duc nhau',
      'music_artist_search' => '; lam duc quan;',
      'music_album_search' => '',
      'music_composer' => 'Trần Dương',
      'music_album' => '',
      'music_listen' => 13815,
      'music_track_id' => 0,
      'music_filename' => '1024021-0d39f9ad.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '你 的 爱 值 得 信 赖 你 的 心 靠 在 身 边
Nǐ de ài zhí dé xìn lài nǐ de xīn kào zài shēn biān
Tình em chiếm trọn niềm tin, trái tim em luôn bên anh kề cận

只 要 你 在 我 就 有 许 多 梦 想 只 要 你 在 我 就 有 更 多 力 量
Zhǐ yào nǐ...',
      'music_artist_html' => '<a href="/ca-si/Lam-Duc-Quan~Y3NuX2FydGlzdH4yNTQzOA==.html">Lâm Dục Quần</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024022,
      'music_title_url' => 'finding-you-in-a-sea-of-people-giua-bien-nguoi-ta-gap-duoc-nhau-vie~lam-duc-quan',
      'music_title' => 'Finding You In A Sea Of People (Giữa Biển Người Ta Gặp Được Nhau; Vietsub)',
      'music_artist' => 'Lâm Dục Quần',
      'music_artist_id' => '25438',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512102445,
      'music_last_update_time' => 1350012772,
      'music_title_search' => 'finding iou in a xea of people; dua bin ngui ta gap duc nhau; vitxub',
      'music_artist_search' => '; lam duc quan;',
      'music_album_search' => '',
      'music_composer' => 'Trần Dương',
      'music_album' => '',
      'music_listen' => 15309,
      'music_track_id' => 0,
      'music_filename' => '1024022-678e2345.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '你 的 爱 值 得 信 赖 你 的 心 靠 在 身 边
Nǐ de ài zhí dé xìn lài nǐ de xīn kào zài shēn biān
Tình em chiếm trọn niềm tin, trái tim em luôn bên anh kề cận

只 要 你 在 我 就 有 许 多 梦 想 只 要 你 在 我 就 有 更 多 力 量
Zhǐ yào nǐ...',
      'music_artist_html' => '<a href="/ca-si/Lam-Duc-Quan~Y3NuX2FydGlzdH4yNTQzOA==.html">Lâm Dục Quần</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024023,
      'music_title_url' => 'childish-au-tri~tran-nghien-hy',
      'music_title' => 'Childish  (Ấu Trĩ)',
      'music_artist' => 'Trần Nghiên Hy',
      'music_artist_id' => '4446',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498915276,
      'music_last_update_time' => 1350012932,
      'music_title_search' => 'childith ; au chi',
      'music_artist_search' => '; chan nghin hi;',
      'music_album_search' => '',
      'music_composer' => 'Trần Nghiên Hy',
      'music_album' => '',
      'music_listen' => 11538,
      'music_track_id' => 0,
      'music_filename' => '1024023-fadbbec1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '看 到 当 年 教 室 窗 口 前 的 你 和 我
Kàn dào dāng nián jiào shì chuāng kǒu qián de nǐ hé wǒ
像 月 亮 在 黑 夜 起 不 了 光 合 作 用
Xiàng yuè liang zài hēi yè qǐ bù liǎo guāng hé zuò yòng
若 不 是 Cupid 错 射 苹 果 在 你 胸 口
Ruò bú...',
      'music_artist_html' => '<a href="/ca-si/Tran-Nghien-Hy~Y3NuX2FydGlzdH40NDQ2.html">Trần Nghiên Hy</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024024,
      'music_title_url' => 'childish-au-tri-vietsub~tran-nghien-hy',
      'music_title' => 'Childish  (Ấu Trĩ; Vietsub)',
      'music_artist' => 'Trần Nghiên Hy',
      'music_artist_id' => '4446',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497018696,
      'music_last_update_time' => 1350013010,
      'music_title_search' => 'childith ; au chi; vitxub',
      'music_artist_search' => '; chan nghin hi;',
      'music_album_search' => '',
      'music_composer' => 'Trần Nghiên Hy',
      'music_album' => '',
      'music_listen' => 19253,
      'music_track_id' => 0,
      'music_filename' => '1024024-9e05eb48.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '看 到 当 年 教 室 窗 口 前 的 你 和 我
Kàn dào dāng nián jiào shì chuāng kǒu qián de nǐ hé wǒ
像 月 亮 在 黑 夜 起 不 了 光 合 作 用
Xiàng yuè liang zài hēi yè qǐ bù liǎo guāng hé zuò yòng
若 不 是 Cupid 错 射 苹 果 在 你 胸 口
Ruò bú...',
      'music_artist_html' => '<a href="/ca-si/Tran-Nghien-Hy~Y3NuX2FydGlzdH40NDQ2.html">Trần Nghiên Hy</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1047648,
      'music_title_url' => 'trap~vien-vinh-lam',
      'music_title' => 'Trap (陷阱)',
      'music_artist' => 'Viên Vịnh Lâm',
      'music_artist_id' => '11748',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495399689,
      'music_last_update_time' => 1355366613,
      'music_title_search' => 'chap; 陷阱',
      'music_artist_search' => '; vin vinh lam;',
      'music_album_search' => '',
      'music_composer' => 'Viên Vịnh Lâm',
      'music_album' => '',
      'music_listen' => 10430,
      'music_track_id' => 0,
      'music_filename' => '1047648-5c5be3a1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '從來不問對不對
聽從我任性指揮
你說我的愛很珍貴（愛很珍貴）

如此的不顧一切
謝謝你貼心追隨
有些事我需要告解（需要告解）

那天午後美麗的相遇
讓你相信了命中注定
你說我像女神般神祕

告訴你一個小祕密
我們完美的默契 是我為了得到你
設了陷阱

偷偷愛上你以後
變身愛情的兇手
只跟蹤你的腳印
即時動態follow
我策劃每場show 你眼中只有我
都怪我太有決心
愛上你沒了救
喔喔喔喔...',
      'music_artist_html' => '<a href="/ca-si/Vien-Vinh-Lam~Y3NuX2FydGlzdH4xMTc0OA==.html">Viên Vịnh Lâm</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1047880,
      'music_title_url' => 'break-a-broken-heart~cindy-yen',
      'music_title' => 'Break A Broken Heart (把傷心打碎)',
      'music_artist' => 'Cindy Yen',
      'music_artist_id' => '25350',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494908947,
      'music_last_update_time' => 1482830136,
      'music_title_search' => 'break a broken heart; 把傷心打碎',
      'music_artist_search' => '; cindi in;',
      'music_album_search' => '',
      'music_composer' => 'Cindy Yen',
      'music_album' => '',
      'music_listen' => 6980,
      'music_track_id' => 0,
      'music_filename' => '1047880-ee799751.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '聽見 狡猾的辯解 看見 自私的感覺
胸口的酸 要比痛更強烈
變心 我可以成全 貪心 怎麼能妥協
你不懂得 我倔強那一面

你不能拿一半的愛 來交換我的全世界
別用回憶騙我忘了一切就不變
而回憶就像紛亂的線 快把我纏繞成一個繭
但不逃出黑暗房間 就沒藍天

把傷心打碎 要先流乾眼淚
把記憶燒成灰 那苦就沒滋味
把傷心打碎 像重新活一回
等和真愛面對 我才不會防備 敢親吻玫瑰

背叛 並不是雨點...',
      'music_artist_html' => '<a href="/ca-si/Cindy-Yen~Y3NuX2FydGlzdH4yNTM1MA==.html">Cindy Yen</a>',
    ),
  ),
  4 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1267533,
      'music_title_url' => 'the-boys~girls-generation',
      'music_title' => 'The Boys',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538555387,
      'music_last_update_time' => 1403148405,
      'music_title_search' => 'the boix',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => 'Yoo Youngjin; DOM; Richard Garcia; Taesung Kim; Teddy Riley',
      'music_album' => '',
      'music_listen' => 216057,
      'music_track_id' => 0,
      'music_filename' => '1267533-2b57e4e5.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Geobi naseo sijakjocha an hae bwatdamyeon geudaen tudeoldaeji mara jom
Jujeohamyeon gihoeneun modu neoreul bikyeoga gaseum pyeogo nawabwara jom!

Bring the boys out. [x3]

Sullie matchwo saneun geo...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1064538,
      'music_title_url' => 'dont-say-goodbye~davichi',
      'music_title' => 'Don\'t Say Goodbye',
      'music_artist' => 'Davichi',
      'music_artist_id' => '1050',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538771497,
      'music_last_update_time' => 1360130523,
      'music_title_search' => 'don t xai godbi',
      'music_artist_search' => '; davichi;',
      'music_album_search' => '',
      'music_composer' => 'Davichi',
      'music_album' => '',
      'music_listen' => 134000,
      'music_track_id' => 0,
      'music_filename' => '1064538-0c3dcaf0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Tteorineun neoui ibseurul nan nan cheoeum boaji 
Museun mal halyeogo mal halyeogo 
Oh~ tteumman deurineunji 
Seulpeun yegameun da majneundan norae gasacheorom
Seolma anigetji anilkkeoya oh~ anieoya...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 306386,
      'music_title_url' => 'mona-lisa~mblaq',
      'music_title' => 'Mona Lisa',
      'music_artist' => 'MBLAQ',
      'music_artist_id' => '2038',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534299910,
      'music_last_update_time' => 1350542716,
      'music_title_search' => 'mona lixa',
      'music_artist_search' => '; mblaq;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 26654,
      'music_track_id' => 0,
      'music_filename' => '306386-76e08ad0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Leggo everybody on the left 
everybody on the right
everybody everybody 
in the house say
Lalalalala Oh Lalalalala Oh 
Lalalalalala.

Baby say yeah yeah yeah 
yes don\'t say no no no no
눈을 뗄 수 없어
널...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 309426,
      'music_title_url' => 'cleansing-cream~brown-eyed-girls',
      'music_title' => 'Cleansing Cream',
      'music_artist' => 'Brown Eyed Girls',
      'music_artist_id' => '1574',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1513662033,
      'music_last_update_time' => 1350460357,
      'music_title_search' => 'cleanxing cream',
      'music_artist_search' => '; brown eid drlx;',
      'music_album_search' => '',
      'music_composer' => 'Brown Eyed Girls',
      'music_album' => '',
      'music_listen' => 9755,
      'music_track_id' => 0,
      'music_filename' => '309426-78cc6be4.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Apa, apa dachyeobeorin mami manhi manhi
Oh my honey, honey, baby eotteoke haeya hajyo.

Onjongil michin deusi nolgo waseon jiteun hwajangeul jiujyo
Ireondago da ichyeojilkkayo
Cham motnagedo banjje...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 362510,
      'music_title_url' => 'so-im-loving-you~nhieu-ca-si',
      'music_title' => 'So I\'m Loving You',
      'music_artist' => 'Various Artists',
      'music_artist_id' => '97',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1446479963,
      'music_last_update_time' => 1350550967,
      'music_title_search' => 'xo i m loving iou',
      'music_artist_search' => '; varioux artixtx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10496,
      'music_track_id' => 0,
      'music_filename' => '362510-542cea57.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'So I\'m loving you so I\'m loving you
Naega wonhadeon duty duty duty du
So I\'m loving you
Areumdawoyo
Neom u haengbokhajyo
Urin igoseseo
Neol kidarilke
Let\'s go.

Naega wonhadeon sesang
Geurigo naega...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 363768,
      'music_title_url' => 'so-goodbye~jonghuyn-shinee',
      'music_title' => 'So Goodbye',
      'music_artist' => 'Jonghuyn (SHINee)',
      'music_artist_id' => '108570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535475415,
      'music_last_update_time' => 1350446669,
      'music_title_search' => 'xo godbi',
      'music_artist_search' => '; jonghin; thine;',
      'music_album_search' => '',
      'music_composer' => 'OST City Hunter',
      'music_album' => '',
      'music_listen' => 68755,
      'music_track_id' => 0,
      'music_filename' => '363768-3cb1cb48.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'So goodbye don\'t cry and smile
Gaseum siridon sigandeul
Moduda bonejulgoya
So Goodbye odumsok weropdon na
Nan nega piryohe
I need your love again.

Meil tto geurewat deusi
Apeun sangchowa seulpeun...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 374835,
      'music_title_url' => 'i-am-the-best-japanese-ver~2ne1',
      'music_title' => 'I Am The Best (Japanese Ver.)',
      'music_artist' => '2NE1',
      'music_artist_id' => '1570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516799730,
      'music_last_update_time' => 1350553295,
      'music_title_search' => 'i am the bext; japanexe ver',
      'music_artist_search' => '; 2ne1;',
      'music_album_search' => '',
      'music_composer' => '2NE1',
      'music_album' => '',
      'music_listen' => 10186,
      'music_track_id' => 0,
      'music_filename' => '374835-d2d72167.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[CL]
Naegajeiljalnaga
Naegajeiljalnaga
Naegajeiljalnaga
Naegajeiljalnaga
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Oh m...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 379042,
      'music_title_url' => 'trouble-maker~trouble-maker',
      'music_title' => 'Trouble Maker',
      'music_artist' => 'Trouble Maker',
      'music_artist_id' => '3934',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534835272,
      'music_last_update_time' => 1350379503,
      'music_title_search' => 'chouble maker',
      'music_artist_search' => '; chouble maker;',
      'music_album_search' => '',
      'music_composer' => 'Trouble Maker',
      'music_album' => '',
      'music_listen' => 155081,
      'music_track_id' => 0,
      'music_filename' => '379042-cc6e8735.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Ni nuneul bomyon 
Nan Trouble Maker
Ni gyote somyeon 
Nan Trouble Maker
Jogeumssik do, do, do
Galsurok do, do, do
Ijen ne mameul nado ojjol su~ (Eobso)
Niga nareul itji mothage
Jakku ni apeso tto
N...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1021829,
      'music_title_url' => 'i-am-the-best-vietsub~2ne1',
      'music_title' => 'I Am The Best (Vietsub)',
      'music_artist' => '2NE1',
      'music_artist_id' => '1570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1515010828,
      'music_last_update_time' => 1349245877,
      'music_title_search' => 'i am the bext; vitxub',
      'music_artist_search' => '; 2ne1;',
      'music_album_search' => '',
      'music_composer' => '2NE1',
      'music_album' => '',
      'music_listen' => 47182,
      'music_track_id' => 0,
      'music_filename' => '1021829-d1d8fde5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Naegajeiljalnaga
Naegajeiljalnaga
Naegajeiljalnaga
Naegajeiljalnaga.

Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Oh my g...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1021833,
      'music_title_url' => 'danger-vietsub~fx',
      'music_title' => 'Danger (Vietsub)',
      'music_artist' => 'F(x)',
      'music_artist_id' => '1544',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538184773,
      'music_last_update_time' => 1349245854,
      'music_title_search' => 'danger; vitxub',
      'music_artist_search' => '; f x;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 44748,
      'music_track_id' => 0,
      'music_filename' => '1021833-bf0e0117.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Remember me
I\'m in d-d-d-d-danger
Pinocchio
Remember me.

Uhdeebohjah eelguhbohjah neh mahmeul ttuhruhbohjah
Ehmehrahldeuh hoomchuhbwah geuh noondongjah seureukseureuk
Muhrheeboottuh bahlggeutkkahg...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1021993,
      'music_title_url' => 'ma-boy-vietsub~sistar-19',
      'music_title' => 'Ma Boy (Vietsub)',
      'music_artist' => 'sistar 19',
      'music_artist_id' => '25319',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536761204,
      'music_last_update_time' => 1349255576,
      'music_title_search' => 'ma boi; vitxub',
      'music_artist_search' => '; xixtar 19;',
      'music_album_search' => '',
      'music_composer' => 'Sistar 19',
      'music_album' => '',
      'music_listen' => 36005,
      'music_track_id' => 0,
      'music_filename' => '1021993-5bf75fd4.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Let\'s go
S.I.S.T.A.R, Sistar
Baby stop breakin\' my heart (oh no)
You heard me? No more next time
I hope you got that boy.

Hey girls, It\'s gon\' be alright
Hey boys, Better make it right
Hey girls,...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1036206,
      'music_title_url' => 'cry-cry-live~t-ara',
      'music_title' => 'Cry Cry (Live)',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1514199274,
      'music_last_update_time' => 1352860084,
      'music_title_search' => 'cri cri; live',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 67075,
      'music_track_id' => 0,
      'music_filename' => '1036206-b3937515.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Saebbal gan jangmi cheoroem
Kaji gateun mallo nal jjireun neo
Neom machi munshin cheroem
Ji uryeo halsu eobtge paeyeo.

Cry Cry Can\'t u see the music
Bul kkok cheoroem, tteugeobge
You\'re my boy.

[...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1045950,
      'music_title_url' => 'haru-haru-vietsub-romanji-hangul~big-bang',
      'music_title' => 'Haru Haru (Vietsub; Romanji; Hangul)',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536922423,
      'music_last_update_time' => 1354932378,
      'music_title_search' => 'haru haru; vitxub; romanji; hangul',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 96862,
      'music_track_id' => 0,
      'music_filename' => '1045950-ac4b911e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[G-Dragon] Yeah
Finally I realized
That I\'m nothing without you
I was so wrong
Forgive me
[Seungri] Ah ah ah ah.

[T.O.P] Padocheoreom buswojin nae mam
[G-Dragon] Baramcheoreom heundeullineun nae m...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1045995,
      'music_title_url' => 'mr-taxi-korean-version~girls-generation',
      'music_title' => 'Mr. Taxi (Korean Version)',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1483625683,
      'music_last_update_time' => 1354932507,
      'music_title_search' => 'mr taxi; korean verxion',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 34431,
      'music_track_id' => 0,
      'music_filename' => '1045995-701eccd1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'SEOUL 또, TOKYO LONDON, N.Y. 정신없이 내 맘대로 Drive tonight
SEOUL tto, TOKYO LONDON, N.Y. jeongsineobsi nae mamdaero Drive tonight
상상 끝에 더 먼 세상에 New style 놀랄 거야 긴장해 자 이제 시작할까
sangsang kkeute deo meon sesa...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1045997,
      'music_title_url' => 'fiction~beast',
      'music_title' => 'Fiction',
      'music_artist' => 'BEAST',
      'music_artist_id' => '1619',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535290407,
      'music_last_update_time' => 1355278401,
      'music_title_search' => 'fiction',
      'music_artist_search' => '; beaxt;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 318916,
      'music_track_id' => 0,
      'music_filename' => '1045997-60fa3c31.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Ajik nan neol itji mothago modeun geol da mitji mothago
Ireohke neol bonaeji mothago oneuldo.

Dashi mandeuleo bolke uri iyagi kkeut naji anhge aju ginagin
Salgacheul pago seumyeodeuneun sangshilga...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1046004,
      'music_title_url' => 'tonight~big-bang',
      'music_title' => 'Tonight',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531814113,
      'music_last_update_time' => 1355363904,
      'music_title_search' => 'tonight',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 488221,
      'music_track_id' => 0,
      'music_filename' => '1046004-eac29494.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Tonight such a beautiful night sing with me now 2011 follow me

BIG BANG BIG BANG we\'re back again one more time say
No way no way
BIG BANG BIG BANG don\'t stop let\'s play
Ok ok go go go.

Na michal...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1046005,
      'music_title_url' => 'why-keep-your-head-down~dbsk',
      'music_title' => 'Why (Keep Your Head Down)',
      'music_artist' => 'DBSK',
      'music_artist_id' => '212',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493750100,
      'music_last_update_time' => 1354933899,
      'music_title_search' => 'whi; kep iour head down',
      'music_artist_search' => '; dbxk;',
      'music_album_search' => '',
      'music_composer' => 'DBSK',
      'music_album' => '',
      'music_listen' => 16140,
      'music_track_id' => 0,
      'music_filename' => '1046005-c013ebca.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Keep your head down
U-Know time
Max~
You know what time it is
This is return of the king.

Modu kkeutnabeoryeotda 
Nan sijakdo an haebwanneunde
Heeojyeo beoryeotda 
Nan iyujocha mot deutgo
Jubyeon...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1046022,
      'music_title_url' => 'before-u-go~dbsk',
      'music_title' => 'Before U Go',
      'music_artist' => 'DBSK',
      'music_artist_id' => '212',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1513500361,
      'music_last_update_time' => 1354934414,
      'music_title_search' => 'before u go',
      'music_artist_search' => '; dbxk;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12804,
      'music_track_id' => 0,
      'music_filename' => '1046022-fd0fb791.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Geudaeman baraboneun geosi budahmseureopdago neukkindamyeon nan ejae geuman ddeonalgae
Nae gamjungeul daseuriji mot-hae geudael gwaeropgae haetdun georamyeon ejae nan mulleonalgae.

Nan geudaega ho...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1047445,
      'music_title_url' => 'why-keep-your-head-down~dbsk',
      'music_title' => 'Why (Keep Your Head Down)',
      'music_artist' => 'DBSK',
      'music_artist_id' => '212',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531813635,
      'music_last_update_time' => 1355908050,
      'music_title_search' => 'whi; kep iour head down',
      'music_artist_search' => '; dbxk;',
      'music_album_search' => '',
      'music_composer' => 'DBSK',
      'music_album' => '',
      'music_listen' => 14638,
      'music_track_id' => 0,
      'music_filename' => '1047445-e91783b0.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Keep your head down
U-Know time
Max~
You know what time it is
This is return of the king.

Modu kkeutnabeoryeotda 
Nan sijakdo an haebwanneunde
Heeojyeo beoryeotda 
Nan iyujocha mot deutgo
Jubyeon...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1047645,
      'music_title_url' => 'good-day~iu',
      'music_title' => 'Good Day',
      'music_artist' => 'IU',
      'music_artist_id' => '2059',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533974520,
      'music_last_update_time' => 1355365725,
      'music_title_search' => 'god dai',
      'music_artist_search' => '; iu;',
      'music_album_search' => '',
      'music_composer' => 'IU',
      'music_album' => '',
      'music_listen' => 115504,
      'music_track_id' => 0,
      'music_filename' => '1047645-6f95009a.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '어쩜 이렇게 하늘은 더 파란 건지
Eojjeom ireoke haneureun deo paran geonji
오늘따라 왜 바람은 또 완벽한지
Oneulttara wae barameun tto wanbyeokhanji
그냥 모르는 척 하나 못들은 척
Geunyang moreuneun cheok hana motdeureun cheok
지워버린 척 딴 얘길...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1267533,
      'music_title_url' => 'the-boys~girls-generation',
      'music_title' => 'The Boys',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538555387,
      'music_last_update_time' => 1403148405,
      'music_title_search' => 'the boix',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => 'Yoo Youngjin; DOM; Richard Garcia; Taesung Kim; Teddy Riley',
      'music_album' => '',
      'music_listen' => 216057,
      'music_track_id' => 0,
      'music_filename' => '1267533-2b57e4e5.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Geobi naseo sijakjocha an hae bwatdamyeon geudaen tudeoldaeji mara jom
Jujeohamyeon gihoeneun modu neoreul bikyeoga gaseum pyeogo nawabwara jom!

Bring the boys out. [x3]

Sullie matchwo saneun geo...',
      'music_artist_html' => '<a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH45MjI=.html">Girls\' Generation</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1064538,
      'music_title_url' => 'dont-say-goodbye~davichi',
      'music_title' => 'Don\'t Say Goodbye',
      'music_artist' => 'Davichi',
      'music_artist_id' => '1050',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538771497,
      'music_last_update_time' => 1360130523,
      'music_title_search' => 'don t xai godbi',
      'music_artist_search' => '; davichi;',
      'music_album_search' => '',
      'music_composer' => 'Davichi',
      'music_album' => '',
      'music_listen' => 134000,
      'music_track_id' => 0,
      'music_filename' => '1064538-0c3dcaf0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Tteorineun neoui ibseurul nan nan cheoeum boaji 
Museun mal halyeogo mal halyeogo 
Oh~ tteumman deurineunji 
Seulpeun yegameun da majneundan norae gasacheorom
Seolma anigetji anilkkeoya oh~ anieoya...',
      'music_artist_html' => '<a href="/ca-si/Davichi~Y3NuX2FydGlzdH4xMDUw.html">Davichi</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 306386,
      'music_title_url' => 'mona-lisa~mblaq',
      'music_title' => 'Mona Lisa',
      'music_artist' => 'MBLAQ',
      'music_artist_id' => '2038',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534299910,
      'music_last_update_time' => 1350542716,
      'music_title_search' => 'mona lixa',
      'music_artist_search' => '; mblaq;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 26654,
      'music_track_id' => 0,
      'music_filename' => '306386-76e08ad0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Leggo everybody on the left 
everybody on the right
everybody everybody 
in the house say
Lalalalala Oh Lalalalala Oh 
Lalalalalala.

Baby say yeah yeah yeah 
yes don\'t say no no no no
눈을 뗄 수 없어
널...',
      'music_artist_html' => '<a href="/ca-si/MBLAQ~Y3NuX2FydGlzdH4yMDM4.html">MBLAQ</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 309426,
      'music_title_url' => 'cleansing-cream~brown-eyed-girls',
      'music_title' => 'Cleansing Cream',
      'music_artist' => 'Brown Eyed Girls',
      'music_artist_id' => '1574',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1513662033,
      'music_last_update_time' => 1350460357,
      'music_title_search' => 'cleanxing cream',
      'music_artist_search' => '; brown eid drlx;',
      'music_album_search' => '',
      'music_composer' => 'Brown Eyed Girls',
      'music_album' => '',
      'music_listen' => 9755,
      'music_track_id' => 0,
      'music_filename' => '309426-78cc6be4.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Apa, apa dachyeobeorin mami manhi manhi
Oh my honey, honey, baby eotteoke haeya hajyo.

Onjongil michin deusi nolgo waseon jiteun hwajangeul jiujyo
Ireondago da ichyeojilkkayo
Cham motnagedo banjje...',
      'music_artist_html' => '<a href="/ca-si/Brown-Eyed-Girls~Y3NuX2FydGlzdH4xNTc0.html">Brown Eyed Girls</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 362510,
      'music_title_url' => 'so-im-loving-you~nhieu-ca-si',
      'music_title' => 'So I\'m Loving You',
      'music_artist' => 'Various Artists',
      'music_artist_id' => '97',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1446479963,
      'music_last_update_time' => 1350550967,
      'music_title_search' => 'xo i m loving iou',
      'music_artist_search' => '; varioux artixtx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10496,
      'music_track_id' => 0,
      'music_filename' => '362510-542cea57.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'So I\'m loving you so I\'m loving you
Naega wonhadeon duty duty duty du
So I\'m loving you
Areumdawoyo
Neom u haengbokhajyo
Urin igoseseo
Neol kidarilke
Let\'s go.

Naega wonhadeon sesang
Geurigo naega...',
      'music_artist_html' => '<a href="/ca-si/Various-Artists~Y3NuX2FydGlzdH45Nw==.html">Various Artists</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 363768,
      'music_title_url' => 'so-goodbye~jonghuyn-shinee',
      'music_title' => 'So Goodbye',
      'music_artist' => 'Jonghuyn (SHINee)',
      'music_artist_id' => '108570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535475415,
      'music_last_update_time' => 1350446669,
      'music_title_search' => 'xo godbi',
      'music_artist_search' => '; jonghin; thine;',
      'music_album_search' => '',
      'music_composer' => 'OST City Hunter',
      'music_album' => '',
      'music_listen' => 68755,
      'music_track_id' => 0,
      'music_filename' => '363768-3cb1cb48.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'So goodbye don\'t cry and smile
Gaseum siridon sigandeul
Moduda bonejulgoya
So Goodbye odumsok weropdon na
Nan nega piryohe
I need your love again.

Meil tto geurewat deusi
Apeun sangchowa seulpeun...',
      'music_artist_html' => '<a href="/ca-si/Jonghuyn-SHINee~Y3NuX2FydGlzdH4xMDg1NzA=.html">Jonghuyn (SHINee)</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 374835,
      'music_title_url' => 'i-am-the-best-japanese-ver~2ne1',
      'music_title' => 'I Am The Best (Japanese Ver.)',
      'music_artist' => '2NE1',
      'music_artist_id' => '1570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516799730,
      'music_last_update_time' => 1350553295,
      'music_title_search' => 'i am the bext; japanexe ver',
      'music_artist_search' => '; 2ne1;',
      'music_album_search' => '',
      'music_composer' => '2NE1',
      'music_album' => '',
      'music_listen' => 10186,
      'music_track_id' => 0,
      'music_filename' => '374835-d2d72167.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[CL]
Naegajeiljalnaga
Naegajeiljalnaga
Naegajeiljalnaga
Naegajeiljalnaga
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Oh m...',
      'music_artist_html' => '<a href="/ca-si/2NE1~Y3NuX2FydGlzdH4xNTcw.html">2NE1</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 379042,
      'music_title_url' => 'trouble-maker~trouble-maker',
      'music_title' => 'Trouble Maker',
      'music_artist' => 'Trouble Maker',
      'music_artist_id' => '3934',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534835272,
      'music_last_update_time' => 1350379503,
      'music_title_search' => 'chouble maker',
      'music_artist_search' => '; chouble maker;',
      'music_album_search' => '',
      'music_composer' => 'Trouble Maker',
      'music_album' => '',
      'music_listen' => 155081,
      'music_track_id' => 0,
      'music_filename' => '379042-cc6e8735.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Ni nuneul bomyon 
Nan Trouble Maker
Ni gyote somyeon 
Nan Trouble Maker
Jogeumssik do, do, do
Galsurok do, do, do
Ijen ne mameul nado ojjol su~ (Eobso)
Niga nareul itji mothage
Jakku ni apeso tto
N...',
      'music_artist_html' => '<a href="/ca-si/Trouble-Maker~Y3NuX2FydGlzdH4zOTM0.html">Trouble Maker</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1021829,
      'music_title_url' => 'i-am-the-best-vietsub~2ne1',
      'music_title' => 'I Am The Best (Vietsub)',
      'music_artist' => '2NE1',
      'music_artist_id' => '1570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1515010828,
      'music_last_update_time' => 1349245877,
      'music_title_search' => 'i am the bext; vitxub',
      'music_artist_search' => '; 2ne1;',
      'music_album_search' => '',
      'music_composer' => '2NE1',
      'music_album' => '',
      'music_listen' => 47182,
      'music_track_id' => 0,
      'music_filename' => '1021829-d1d8fde5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Naegajeiljalnaga
Naegajeiljalnaga
Naegajeiljalnaga
Naegajeiljalnaga.

Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Oh my g...',
      'music_artist_html' => '<a href="/ca-si/2NE1~Y3NuX2FydGlzdH4xNTcw.html">2NE1</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1021833,
      'music_title_url' => 'danger-vietsub~fx',
      'music_title' => 'Danger (Vietsub)',
      'music_artist' => 'F(x)',
      'music_artist_id' => '1544',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538184773,
      'music_last_update_time' => 1349245854,
      'music_title_search' => 'danger; vitxub',
      'music_artist_search' => '; f x;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 44748,
      'music_track_id' => 0,
      'music_filename' => '1021833-bf0e0117.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Remember me
I\'m in d-d-d-d-danger
Pinocchio
Remember me.

Uhdeebohjah eelguhbohjah neh mahmeul ttuhruhbohjah
Ehmehrahldeuh hoomchuhbwah geuh noondongjah seureukseureuk
Muhrheeboottuh bahlggeutkkahg...',
      'music_artist_html' => '<a href="/ca-si/Fx~Y3NuX2FydGlzdH4xNTQ0.html">F(x)</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1021993,
      'music_title_url' => 'ma-boy-vietsub~sistar-19',
      'music_title' => 'Ma Boy (Vietsub)',
      'music_artist' => 'sistar 19',
      'music_artist_id' => '25319',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536761204,
      'music_last_update_time' => 1349255576,
      'music_title_search' => 'ma boi; vitxub',
      'music_artist_search' => '; xixtar 19;',
      'music_album_search' => '',
      'music_composer' => 'Sistar 19',
      'music_album' => '',
      'music_listen' => 36005,
      'music_track_id' => 0,
      'music_filename' => '1021993-5bf75fd4.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Let\'s go
S.I.S.T.A.R, Sistar
Baby stop breakin\' my heart (oh no)
You heard me? No more next time
I hope you got that boy.

Hey girls, It\'s gon\' be alright
Hey boys, Better make it right
Hey girls,...',
      'music_artist_html' => '<a href="/ca-si/sistar-19~Y3NuX2FydGlzdH4yNTMxOQ==.html">sistar 19</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1036206,
      'music_title_url' => 'cry-cry-live~t-ara',
      'music_title' => 'Cry Cry (Live)',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1514199274,
      'music_last_update_time' => 1352860084,
      'music_title_search' => 'cri cri; live',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 67075,
      'music_track_id' => 0,
      'music_filename' => '1036206-b3937515.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Saebbal gan jangmi cheoroem
Kaji gateun mallo nal jjireun neo
Neom machi munshin cheroem
Ji uryeo halsu eobtge paeyeo.

Cry Cry Can\'t u see the music
Bul kkok cheoroem, tteugeobge
You\'re my boy.

[...',
      'music_artist_html' => '<a href="/ca-si/T-Ara~Y3NuX2FydGlzdH4xNDEz.html">T-Ara</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1045950,
      'music_title_url' => 'haru-haru-vietsub-romanji-hangul~big-bang',
      'music_title' => 'Haru Haru (Vietsub; Romanji; Hangul)',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536922423,
      'music_last_update_time' => 1354932378,
      'music_title_search' => 'haru haru; vitxub; romanji; hangul',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 96862,
      'music_track_id' => 0,
      'music_filename' => '1045950-ac4b911e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[G-Dragon] Yeah
Finally I realized
That I\'m nothing without you
I was so wrong
Forgive me
[Seungri] Ah ah ah ah.

[T.O.P] Padocheoreom buswojin nae mam
[G-Dragon] Baramcheoreom heundeullineun nae m...',
      'music_artist_html' => '<a href="/ca-si/Big-Bang~Y3NuX2FydGlzdH45ODI=.html">Big Bang</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1045995,
      'music_title_url' => 'mr-taxi-korean-version~girls-generation',
      'music_title' => 'Mr. Taxi (Korean Version)',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1483625683,
      'music_last_update_time' => 1354932507,
      'music_title_search' => 'mr taxi; korean verxion',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 34431,
      'music_track_id' => 0,
      'music_filename' => '1045995-701eccd1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'SEOUL 또, TOKYO LONDON, N.Y. 정신없이 내 맘대로 Drive tonight
SEOUL tto, TOKYO LONDON, N.Y. jeongsineobsi nae mamdaero Drive tonight
상상 끝에 더 먼 세상에 New style 놀랄 거야 긴장해 자 이제 시작할까
sangsang kkeute deo meon sesa...',
      'music_artist_html' => '<a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH45MjI=.html">Girls\' Generation</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1045997,
      'music_title_url' => 'fiction~beast',
      'music_title' => 'Fiction',
      'music_artist' => 'BEAST',
      'music_artist_id' => '1619',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535290407,
      'music_last_update_time' => 1355278401,
      'music_title_search' => 'fiction',
      'music_artist_search' => '; beaxt;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 318916,
      'music_track_id' => 0,
      'music_filename' => '1045997-60fa3c31.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Ajik nan neol itji mothago modeun geol da mitji mothago
Ireohke neol bonaeji mothago oneuldo.

Dashi mandeuleo bolke uri iyagi kkeut naji anhge aju ginagin
Salgacheul pago seumyeodeuneun sangshilga...',
      'music_artist_html' => '<a href="/ca-si/BEAST~Y3NuX2FydGlzdH4xNjE5.html">BEAST</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1046004,
      'music_title_url' => 'tonight~big-bang',
      'music_title' => 'Tonight',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531814113,
      'music_last_update_time' => 1355363904,
      'music_title_search' => 'tonight',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 488221,
      'music_track_id' => 0,
      'music_filename' => '1046004-eac29494.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Tonight such a beautiful night sing with me now 2011 follow me

BIG BANG BIG BANG we\'re back again one more time say
No way no way
BIG BANG BIG BANG don\'t stop let\'s play
Ok ok go go go.

Na michal...',
      'music_artist_html' => '<a href="/ca-si/Big-Bang~Y3NuX2FydGlzdH45ODI=.html">Big Bang</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1046005,
      'music_title_url' => 'why-keep-your-head-down~dbsk',
      'music_title' => 'Why (Keep Your Head Down)',
      'music_artist' => 'DBSK',
      'music_artist_id' => '212',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493750100,
      'music_last_update_time' => 1354933899,
      'music_title_search' => 'whi; kep iour head down',
      'music_artist_search' => '; dbxk;',
      'music_album_search' => '',
      'music_composer' => 'DBSK',
      'music_album' => '',
      'music_listen' => 16140,
      'music_track_id' => 0,
      'music_filename' => '1046005-c013ebca.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Keep your head down
U-Know time
Max~
You know what time it is
This is return of the king.

Modu kkeutnabeoryeotda 
Nan sijakdo an haebwanneunde
Heeojyeo beoryeotda 
Nan iyujocha mot deutgo
Jubyeon...',
      'music_artist_html' => '<a href="/ca-si/DBSK~Y3NuX2FydGlzdH4yMTI=.html">DBSK</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1046022,
      'music_title_url' => 'before-u-go~dbsk',
      'music_title' => 'Before U Go',
      'music_artist' => 'DBSK',
      'music_artist_id' => '212',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1513500361,
      'music_last_update_time' => 1354934414,
      'music_title_search' => 'before u go',
      'music_artist_search' => '; dbxk;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12804,
      'music_track_id' => 0,
      'music_filename' => '1046022-fd0fb791.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Geudaeman baraboneun geosi budahmseureopdago neukkindamyeon nan ejae geuman ddeonalgae
Nae gamjungeul daseuriji mot-hae geudael gwaeropgae haetdun georamyeon ejae nan mulleonalgae.

Nan geudaega ho...',
      'music_artist_html' => '<a href="/ca-si/DBSK~Y3NuX2FydGlzdH4yMTI=.html">DBSK</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1047445,
      'music_title_url' => 'why-keep-your-head-down~dbsk',
      'music_title' => 'Why (Keep Your Head Down)',
      'music_artist' => 'DBSK',
      'music_artist_id' => '212',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531813635,
      'music_last_update_time' => 1355908050,
      'music_title_search' => 'whi; kep iour head down',
      'music_artist_search' => '; dbxk;',
      'music_album_search' => '',
      'music_composer' => 'DBSK',
      'music_album' => '',
      'music_listen' => 14638,
      'music_track_id' => 0,
      'music_filename' => '1047445-e91783b0.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Keep your head down
U-Know time
Max~
You know what time it is
This is return of the king.

Modu kkeutnabeoryeotda 
Nan sijakdo an haebwanneunde
Heeojyeo beoryeotda 
Nan iyujocha mot deutgo
Jubyeon...',
      'music_artist_html' => '<a href="/ca-si/DBSK~Y3NuX2FydGlzdH4yMTI=.html">DBSK</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1047645,
      'music_title_url' => 'good-day~iu',
      'music_title' => 'Good Day',
      'music_artist' => 'IU',
      'music_artist_id' => '2059',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533974520,
      'music_last_update_time' => 1355365725,
      'music_title_search' => 'god dai',
      'music_artist_search' => '; iu;',
      'music_album_search' => '',
      'music_composer' => 'IU',
      'music_album' => '',
      'music_listen' => 115504,
      'music_track_id' => 0,
      'music_filename' => '1047645-6f95009a.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '어쩜 이렇게 하늘은 더 파란 건지
Eojjeom ireoke haneureun deo paran geonji
오늘따라 왜 바람은 또 완벽한지
Oneulttara wae barameun tto wanbyeokhanji
그냥 모르는 척 하나 못들은 척
Geunyang moreuneun cheok hana motdeureun cheok
지워버린 척 딴 얘길...',
      'music_artist_html' => '<a href="/ca-si/IU~Y3NuX2FydGlzdH4yMDU5.html">IU</a>',
    ),
  ),
  5 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1010735,
      'music_title_url' => 'strong-heart-happy-music-live~mai-kuraki',
      'music_title' => 'Strong Heart (Happy Music Live)',
      'music_artist' => 'Mai Kuraki',
      'music_artist_id' => '4308',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1530649005,
      'music_last_update_time' => 1477465906,
      'music_title_search' => 'xchong heart; hapi muxic live',
      'music_artist_search' => '; mai kuraki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5945,
      'music_track_id' => 0,
      'music_filename' => '1010735-22c72ba0.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Don\'t wanna cry kimi no sei de
Mou naki takunai ya kore ijou wa
Kono namida wo saigo ni shiyoutte
Kimeta kara i\'m here to say good-bye.

Let\'s go
Stand up... 

&quot;itsumademo aishiteru&quot; tte...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1013854,
      'music_title_url' => 'one-more-time-mou-ichido-happy-music-live~mai-kuraki',
      'music_title' => 'One More Time (Mou Ichido; もう一度; Happy Music Live)',
      'music_artist' => 'Mai Kuraki',
      'music_artist_id' => '4308',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1498456233,
      'music_last_update_time' => 1477465921,
      'music_title_search' => '1 more time; mou ichido; もう一度; hapi muxic live',
      'music_artist_search' => '; mai kuraki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5477,
      'music_track_id' => 0,
      'music_filename' => '1013854-ae913815.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Namida de nureta kokoro
Yubisaki de sotto nugui tottara
Afurete kuru omoide
Wasurerarenai mama
Tada setsunakute.

Itsuka kitto futari de
Mienai hoshi wo sagashitai.

Mou ichido deaeru nara
Mou ichi...',
    ),
    2 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1800237,
      'music_title_url' => 'namida-surprise~akb48',
      'music_title' => 'Namida Surprise! (涙サプライズ！)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1498445154,
      'music_title_search' => 'namida xurprixe ; 涙サプライズ！',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 132,
      'music_track_id' => 0,
      'music_filename' => '1800237-eff38277.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Mae/Mat] jugyou owaru BERU ga nattara
[Mae/Mat] fui ni kimi wo mekakushi shite
[Koj/Tak] umu iwasazu ude wo tsukande
[Koj/Tak] tsuresaru taiikukan

[Ita/Osh] BASUKETTOBOORU GOORU atari
[Ita/Osh] f...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1728541,
      'music_title_url' => 'koi-no-onawa~team-z-akb48',
      'music_title' => 'Koi no Onawa (恋のお縄)',
      'music_artist' => 'Team Z;AKB48',
      'music_artist_id' => '90542;723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537507062,
      'music_last_update_time' => 1477379335,
      'music_title_search' => 'koi no onawa; 恋のお縄',
      'music_artist_search' => '; team z; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 835,
      'music_track_id' => 5,
      'music_filename' => '1728541-6277fde0.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'ROMAJI
[Osh/Miy/Mat] chotto soko yuku oniisan yo
[Osh/Miy/Mat] nani wo isoideiru no?
[Osh/Miy/Mat] chotto bakari kikitai no yo
[Osh/Miy/Mat] yuube wa doko ni ita no

[Tak/Aki/Kit] kenka to hanabi [...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1741047,
      'music_title_url' => 'natsuiro-surprise~touyama-nao',
      'music_title' => 'Natsuiro Surprise (夏色サプライズ)',
      'music_artist' => 'Touyama Nao',
      'music_artist_id' => '40761',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1500255111,
      'music_last_update_time' => 1479315613,
      'music_title_search' => 'natxuiro xurprixe; 夏色サプライズ',
      'music_artist_search' => '; toiama nao;',
      'music_album_search' => '',
      'music_composer' => 'Zopp',
      'music_album' => '',
      'music_listen' => 677,
      'music_track_id' => 0,
      'music_filename' => '1741047-ba5fc9af.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'もぎたての青い空　海岸線を走る影
Mogitate no aoi sora kaigansen wo hashiru kage
白いパラソル　砂浜は花壇
Shiroi parasoru sunahama ha kadan
遊び疲れた帰り道　肩を叩いたにわか雨
Asobitsukareta kaerimichi kata wo tataita niwaka ame
バス停二人　雨宿りしたね
B...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1741888,
      'music_title_url' => 'nonstop-hunters-pv-edit~kaketamatai-hayami-saori-itou-kanae',
      'music_title' => 'Nonstop!! Hunters (PV Edit)',
      'music_artist' => 'Kaketamatai: Hayami Saori;Itou Kanae',
      'music_artist_id' => '91793;50584',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1506045615,
      'music_last_update_time' => 1479599037,
      'music_title_search' => 'nonxtop hunterx; pv edit',
      'music_artist_search' => '; kaketamatai; haiami xaori; itou kanae;',
      'music_album_search' => '',
      'music_composer' => 'Mutsumi Sumiyo',
      'music_album' => '',
      'music_listen' => 552,
      'music_track_id' => 0,
      'music_filename' => '1741888-1354a3e4.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '駆けめぐれこのセカイ!
Kake megure kono sekai! 
鼓動探知してる!Nonstop!! Hunters
Kodō tanchi shi teru! Nonstop!! Hunters 
笑顔と愛が武器です!
Egao to ai ga bukidesu! 
一心同体We can do it now!
Isshindōtai We can do it now! 

ネガテ...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1775892,
      'music_title_url' => 'zenigata-heiji~team-z-akb48',
      'music_title' => 'Zenigata Heiji (銭形平次)',
      'music_artist' => 'Team Z;AKB48',
      'music_artist_id' => '90542;723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498774740,
      'music_last_update_time' => 1490604067,
      'music_title_search' => 'zenigata heiji; 銭形平次',
      'music_artist_search' => '; team z; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 468,
      'music_track_id' => 0,
      'music_filename' => '1775892-6c036b50.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1775891,
      'music_title_url' => 'aitakatta-oedo-version~team-z-akb48',
      'music_title' => 'Aitakatta (会いたかった) (Oedo Version)',
      'music_artist' => 'Team Z;AKB48',
      'music_artist_id' => '90542;723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535387372,
      'music_last_update_time' => 1490747767,
      'music_title_search' => 'aitakata; 会いたかった ; oedo verxion',
      'music_artist_search' => '; team z; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 938,
      'music_track_id' => 0,
      'music_filename' => '1775891-476dc328.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1800238,
      'music_title_url' => 'baby-baby-baby~akb48',
      'music_title' => 'Baby! Baby! Baby!',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534315523,
      'music_last_update_time' => 1498445168,
      'music_title_search' => 'babi babi babi',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => 'Akimoto Yasushi',
      'music_album' => '',
      'music_listen' => 1018,
      'music_track_id' => 0,
      'music_filename' => '1800238-51b5b8e5.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'I love you, Baby! Baby! Baby!
furimuite kure
dareka ni muketeru sono shisen
boku no NOKKU ni mo kidzuite
itoshisa no kotae ga hoshii

I love you, Baby! Baby! Baby!
hohoende kure
boku wo toriko ni s...',
    ),
    9 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1866710,
      'music_title_url' => 'bo-peep-bo-peep-drama-version-japanese~t-ara',
      'music_title' => 'Bo Peep Bo Peep (Drama Version; Japanese)',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1516844779,
      'music_title_search' => 'bo pep bo pep; drama verxion; japanexe',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 106,
      'music_track_id' => 0,
      'music_filename' => '1866710-7dfc71ea.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Don\'t lose your temper so- so- so quickly 
Don\'t lose your temper so- so- so quickly 
Don\'t lose- don\'t lose- don\'t lose- quickly 
Don\'t lose your temper so- so- so quickly, your- so quickly. 

Bo...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1941523,
      'music_title_url' => 'i-am-the-best-japanese-version~2ne1',
      'music_title' => 'I Am The Best (Japanese Version)',
      'music_artist' => '2NE1',
      'music_artist_id' => '1570',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533915002,
      'music_last_update_time' => 1533919397,
      'music_title_search' => 'i am the bext; japanexe verxion',
      'music_artist_search' => '; 2ne1;',
      'music_album_search' => '',
      'music_composer' => 'Teddy Park',
      'music_album' => '',
      'music_listen' => 10260,
      'music_track_id' => 0,
      'music_filename' => '1941523-a95b84a1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Naega jeil jal naga
Naega jeil jal naga
Naega jeil jal naga
Naega jeil jal naga
je je jeil jal naga

Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1010735,
      'music_title_url' => 'strong-heart-happy-music-live~mai-kuraki',
      'music_title' => 'Strong Heart (Happy Music Live)',
      'music_artist' => 'Mai Kuraki',
      'music_artist_id' => '4308',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1530649005,
      'music_last_update_time' => 1477465906,
      'music_title_search' => 'xchong heart; hapi muxic live',
      'music_artist_search' => '; mai kuraki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5945,
      'music_track_id' => 0,
      'music_filename' => '1010735-22c72ba0.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Don\'t wanna cry kimi no sei de
Mou naki takunai ya kore ijou wa
Kono namida wo saigo ni shiyoutte
Kimeta kara i\'m here to say good-bye.

Let\'s go
Stand up... 

&quot;itsumademo aishiteru&quot; tte...',
      'music_artist_html' => '<a href="/ca-si/Mai-Kuraki~Y3NuX2FydGlzdH40MzA4.html">Mai Kuraki</a>',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1013854,
      'music_title_url' => 'one-more-time-mou-ichido-happy-music-live~mai-kuraki',
      'music_title' => 'One More Time (Mou Ichido; もう一度; Happy Music Live)',
      'music_artist' => 'Mai Kuraki',
      'music_artist_id' => '4308',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1498456233,
      'music_last_update_time' => 1477465921,
      'music_title_search' => '1 more time; mou ichido; もう一度; hapi muxic live',
      'music_artist_search' => '; mai kuraki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5477,
      'music_track_id' => 0,
      'music_filename' => '1013854-ae913815.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Namida de nureta kokoro
Yubisaki de sotto nugui tottara
Afurete kuru omoide
Wasurerarenai mama
Tada setsunakute.

Itsuka kitto futari de
Mienai hoshi wo sagashitai.

Mou ichido deaeru nara
Mou ichi...',
      'music_artist_html' => '<a href="/ca-si/Mai-Kuraki~Y3NuX2FydGlzdH40MzA4.html">Mai Kuraki</a>',
    ),
    13 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1800237,
      'music_title_url' => 'namida-surprise~akb48',
      'music_title' => 'Namida Surprise! (涙サプライズ！)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1498445154,
      'music_title_search' => 'namida xurprixe ; 涙サプライズ！',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 132,
      'music_track_id' => 0,
      'music_filename' => '1800237-eff38277.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Mae/Mat] jugyou owaru BERU ga nattara
[Mae/Mat] fui ni kimi wo mekakushi shite
[Koj/Tak] umu iwasazu ude wo tsukande
[Koj/Tak] tsuresaru taiikukan

[Ita/Osh] BASUKETTOBOORU GOORU atari
[Ita/Osh] f...',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1728541,
      'music_title_url' => 'koi-no-onawa~team-z-akb48',
      'music_title' => 'Koi no Onawa (恋のお縄)',
      'music_artist' => 'Team Z;AKB48',
      'music_artist_id' => '90542;723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537507062,
      'music_last_update_time' => 1477379335,
      'music_title_search' => 'koi no onawa; 恋のお縄',
      'music_artist_search' => '; team z; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 835,
      'music_track_id' => 5,
      'music_filename' => '1728541-6277fde0.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'ROMAJI
[Osh/Miy/Mat] chotto soko yuku oniisan yo
[Osh/Miy/Mat] nani wo isoideiru no?
[Osh/Miy/Mat] chotto bakari kikitai no yo
[Osh/Miy/Mat] yuube wa doko ni ita no

[Tak/Aki/Kit] kenka to hanabi [...',
      'music_artist_html' => '<a href="/ca-si/Team-Z~Y3NuX2FydGlzdH45MDU0Mg==.html">Team Z</a>, <a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1741047,
      'music_title_url' => 'natsuiro-surprise~touyama-nao',
      'music_title' => 'Natsuiro Surprise (夏色サプライズ)',
      'music_artist' => 'Touyama Nao',
      'music_artist_id' => '40761',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1500255111,
      'music_last_update_time' => 1479315613,
      'music_title_search' => 'natxuiro xurprixe; 夏色サプライズ',
      'music_artist_search' => '; toiama nao;',
      'music_album_search' => '',
      'music_composer' => 'Zopp',
      'music_album' => '',
      'music_listen' => 677,
      'music_track_id' => 0,
      'music_filename' => '1741047-ba5fc9af.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'もぎたての青い空　海岸線を走る影
Mogitate no aoi sora kaigansen wo hashiru kage
白いパラソル　砂浜は花壇
Shiroi parasoru sunahama ha kadan
遊び疲れた帰り道　肩を叩いたにわか雨
Asobitsukareta kaerimichi kata wo tataita niwaka ame
バス停二人　雨宿りしたね
B...',
      'music_artist_html' => '<a href="/ca-si/Touyama-Nao~Y3NuX2FydGlzdH40MDc2MQ==.html">Touyama Nao</a>',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1741888,
      'music_title_url' => 'nonstop-hunters-pv-edit~kaketamatai-hayami-saori-itou-kanae',
      'music_title' => 'Nonstop!! Hunters (PV Edit)',
      'music_artist' => 'Kaketamatai: Hayami Saori;Itou Kanae',
      'music_artist_id' => '91793;50584',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1506045615,
      'music_last_update_time' => 1479599037,
      'music_title_search' => 'nonxtop hunterx; pv edit',
      'music_artist_search' => '; kaketamatai; haiami xaori; itou kanae;',
      'music_album_search' => '',
      'music_composer' => 'Mutsumi Sumiyo',
      'music_album' => '',
      'music_listen' => 552,
      'music_track_id' => 0,
      'music_filename' => '1741888-1354a3e4.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '駆けめぐれこのセカイ!
Kake megure kono sekai! 
鼓動探知してる!Nonstop!! Hunters
Kodō tanchi shi teru! Nonstop!! Hunters 
笑顔と愛が武器です!
Egao to ai ga bukidesu! 
一心同体We can do it now!
Isshindōtai We can do it now! 

ネガテ...',
      'music_artist_html' => '<a href="/ca-si/Kaketamatai-Hayami-Saori~Y3NuX2FydGlzdH45MTc5Mw==.html">Kaketamatai: Hayami Saori</a>, <a href="/ca-si/Itou-Kanae~Y3NuX2FydGlzdH41MDU4NA==.html">Itou Kanae</a>',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1775892,
      'music_title_url' => 'zenigata-heiji~team-z-akb48',
      'music_title' => 'Zenigata Heiji (銭形平次)',
      'music_artist' => 'Team Z;AKB48',
      'music_artist_id' => '90542;723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498774740,
      'music_last_update_time' => 1490604067,
      'music_title_search' => 'zenigata heiji; 銭形平次',
      'music_artist_search' => '; team z; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 468,
      'music_track_id' => 0,
      'music_filename' => '1775892-6c036b50.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Team-Z~Y3NuX2FydGlzdH45MDU0Mg==.html">Team Z</a>, <a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1775891,
      'music_title_url' => 'aitakatta-oedo-version~team-z-akb48',
      'music_title' => 'Aitakatta (会いたかった) (Oedo Version)',
      'music_artist' => 'Team Z;AKB48',
      'music_artist_id' => '90542;723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535387372,
      'music_last_update_time' => 1490747767,
      'music_title_search' => 'aitakata; 会いたかった ; oedo verxion',
      'music_artist_search' => '; team z; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 938,
      'music_track_id' => 0,
      'music_filename' => '1775891-476dc328.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Team-Z~Y3NuX2FydGlzdH45MDU0Mg==.html">Team Z</a>, <a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1800238,
      'music_title_url' => 'baby-baby-baby~akb48',
      'music_title' => 'Baby! Baby! Baby!',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534315523,
      'music_last_update_time' => 1498445168,
      'music_title_search' => 'babi babi babi',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => 'Akimoto Yasushi',
      'music_album' => '',
      'music_listen' => 1018,
      'music_track_id' => 0,
      'music_filename' => '1800238-51b5b8e5.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'I love you, Baby! Baby! Baby!
furimuite kure
dareka ni muketeru sono shisen
boku no NOKKU ni mo kidzuite
itoshisa no kotae ga hoshii

I love you, Baby! Baby! Baby!
hohoende kure
boku wo toriko ni s...',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    20 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1866710,
      'music_title_url' => 'bo-peep-bo-peep-drama-version-japanese~t-ara',
      'music_title' => 'Bo Peep Bo Peep (Drama Version; Japanese)',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1516844779,
      'music_title_search' => 'bo pep bo pep; drama verxion; japanexe',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 106,
      'music_track_id' => 0,
      'music_filename' => '1866710-7dfc71ea.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Don\'t lose your temper so- so- so quickly 
Don\'t lose your temper so- so- so quickly 
Don\'t lose- don\'t lose- don\'t lose- quickly 
Don\'t lose your temper so- so- so quickly, your- so quickly. 

Bo...',
      'music_artist_html' => '<a href="/ca-si/T-Ara~Y3NuX2FydGlzdH4xNDEz.html">T-Ara</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1941523,
      'music_title_url' => 'i-am-the-best-japanese-version~2ne1',
      'music_title' => 'I Am The Best (Japanese Version)',
      'music_artist' => '2NE1',
      'music_artist_id' => '1570',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533915002,
      'music_last_update_time' => 1533919397,
      'music_title_search' => 'i am the bext; japanexe verxion',
      'music_artist_search' => '; 2ne1;',
      'music_album_search' => '',
      'music_composer' => 'Teddy Park',
      'music_album' => '',
      'music_listen' => 10260,
      'music_track_id' => 0,
      'music_filename' => '1941523-a95b84a1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Naega jeil jal naga
Naega jeil jal naga
Naega jeil jal naga
Naega jeil jal naga
je je jeil jal naga

Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata
Bam Ratatata Tatatatata...',
      'music_artist_html' => '<a href="/ca-si/2NE1~Y3NuX2FydGlzdH4xNTcw.html">2NE1</a>',
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
      'music_id' => 1045034,
      'music_title_url' => 'only-you-vietsub~noona',
      'music_title' => 'Only You (Vietsub)',
      'music_artist' => 'Noona',
      'music_artist_id' => '26786',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1514385705,
      'music_last_update_time' => 1355277323,
      'music_title_search' => 'onli iou; vitxub',
      'music_artist_search' => '; nona;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 101341,
      'music_track_id' => 0,
      'music_filename' => '1045034-933ad975.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Only only you chun roo laeo wah
Only only you, I now know
เธอคื อคนท�� keu kon tee fah song mah chai mai
You\'re the one heaven sent for me, right
รักเธอ ฟังไว้
Ruk tur fung wai
I love you, listen
O...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1045996,
      'music_title_url' => 'mr-taxi-japanese-version~girls-generation',
      'music_title' => 'Mr. Taxi (Japanese Version)',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1526038930,
      'music_last_update_time' => 1355278077,
      'music_title_search' => 'mr taxi; japanexe verxion',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 49945,
      'music_track_id' => 0,
      'music_filename' => '1045996-d8c6f85f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Tokyo, seoul, london, new york
Kimama ni sekai wo drive tonight
Kakuchi de hirou suru nyuu sutairu
Mita koto nai mono dake misetageru.

Hora kochi wo mite sukoshi keikai seyo
Ano hidari handoru yor...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764742,
      'music_title_url' => 'o-que-faltou-ser-live~sandy-leah',
      'music_title' => 'O Que Faltou Ser (Live)',
      'music_artist' => 'Sandy Leah',
      'music_artist_id' => '92764',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1512472460,
      'music_last_update_time' => 1486806809,
      'music_title_search' => 'o que faltou xer; live',
      'music_artist_search' => '; xandi leah;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 249,
      'music_track_id' => 0,
      'music_filename' => '1764742-c453bf2b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764744,
      'music_title_url' => 'perdida-e-salva-live~sandy-leah',
      'music_title' => 'Perdida E Salva (Live)',
      'music_artist' => 'Sandy Leah',
      'music_artist_id' => '92764',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1494487705,
      'music_last_update_time' => 1486806820,
      'music_title_search' => 'perdida e xalva; live',
      'music_artist_search' => '; xandi leah;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 140,
      'music_track_id' => 0,
      'music_filename' => '1764744-ef965c2b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1069833,
      'music_title_url' => 'everyday-katyusha~akb48',
      'music_title' => 'Everyday, Katyusha',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1491268542,
      'music_last_update_time' => 1362453315,
      'music_title_search' => 'everidai katiutha',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => 'Yasushi Akimoto',
      'music_album' => '',
      'music_listen' => 12861,
      'music_track_id' => 0,
      'music_filename' => '1069833-77f8753a.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Taiyou ga kinou yori
Mabushiku teritsuke hajimetara
Masshiro na t-shirt ni
Ima sugu kigaete kimi wo sasoitai.

Umizoi no
Kokudou wo
Mada mada suiteru bus ni nori
Shiokaze wo oikakete
Dare yori mo h...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1075987,
      'music_title_url' => 'un-monde-parfait~les-enfoires',
      'music_title' => 'Un Monde Parfait',
      'music_artist' => 'Les Enfoirés',
      'music_artist_id' => '29735',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495499947,
      'music_last_update_time' => 1364606453,
      'music_title_search' => 'un monde parfait',
      'music_artist_search' => '; lex enfoirex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3838,
      'music_track_id' => 0,
      'music_filename' => '1075987-570a6937.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Ce matin j\'imagine un dessin sans nuage
Avec quelques couleurs comme vient mon pinceau
Du bleu, du rouge je me sens sage comme une image
Avec quelques maisons et quelques animaux.

Ce matin j\'imagi...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1086558,
      'music_title_url' => 'tu-cuerpo~pitbull-jencarlos',
      'music_title' => 'Tu Cuerpo',
      'music_artist' => 'Pitbull;Jencarlos',
      'music_artist_id' => '1814;14513',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1526162817,
      'music_last_update_time' => 1484118609,
      'music_title_search' => 'tu cuerpo',
      'music_artist_search' => '; pitbul; jencarlox;',
      'music_album_search' => '',
      'music_composer' => 'Pitbull; Jencarlos; David Miranda',
      'music_album' => '',
      'music_listen' => 2080,
      'music_track_id' => 0,
      'music_filename' => '1086558-ae139ef2.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Hola mami! (Jencarlos)
Mucho gusto (Mr. Worldwide)
Acércate un poquito me introduzco...tu, tu, tu, tu
Esa carita tan sensual, que a mi… que a mi… me provoca besar
Desconecta... de este mundo
Ven y...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1086756,
      'music_title_url' => 'bon-bon-live-at-axe-lounge~pitbull',
      'music_title' => 'Bon Bon (Live At AXE Lounge)',
      'music_artist' => 'Pitbull',
      'music_artist_id' => '1814',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1495268445,
      'music_last_update_time' => 1367913879,
      'music_title_search' => 'bon bon; live at axe lounge',
      'music_artist_search' => '; pitbul;',
      'music_album_search' => '',
      'music_composer' => 'Pitbull',
      'music_album' => '',
      'music_listen' => 1069,
      'music_track_id' => 0,
      'music_filename' => '1086756-b4a0e066.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'This is worldwide
Esto aquí es para las mujeres
En la discoteca que están buenísimas bellísimas lindísimas
Y ya tú sabes el resto
Yo se lo doy a directtv je, je, je, je, je mira que tu estas rica (...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1092800,
      'music_title_url' => 'un-jour-de-plus-au-paradis~les-enfoires',
      'music_title' => 'Un Jour De Plus Au Paradis',
      'music_artist' => 'Les Enfoirés',
      'music_artist_id' => '29735',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495496770,
      'music_last_update_time' => 1369537751,
      'music_title_search' => 'un jour de plux au paradix',
      'music_artist_search' => '; lex enfoirex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1461,
      'music_track_id' => 0,
      'music_filename' => '1092800-08bf6e78.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Elle appelle mais personne ne l\'entends
Saisir un regard
Elle implore au milieu des passants
La nuit tombe, il est si tard
Juste un toit, juste un sourire
Mais elle encombre et dérange
Mais l\'adres...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1098156,
      'music_title_url' => 'melancholic-hatsune-miku-live-party-2011-in-sapporo~kagamine-rin',
      'music_title' => 'Melancholic (Hatsune Miku Live Party 2011 In Sapporo)',
      'music_artist' => 'Kagamine Rin',
      'music_artist_id' => '1317',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1536813271,
      'music_last_update_time' => 1370311006,
      'music_title_search' => 'melancholic; hatxune miku live parti 201 in xaporo',
      'music_artist_search' => '; kagamine rin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7298,
      'music_track_id' => 0,
      'music_filename' => '1098156-e0610fb1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Zenzen tsukamenai kimi no koto 
Zenzen shiranai uchi ni 
Kokoro ubawareru nante koto 
Aru hazu nai desho.

I can\'t figure you out at all 
So when i\'m not aware at all 
There\'s no possible way 
You...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1132546,
      'music_title_url' => 'te-he-echado-de-menos~pablo-alboran',
      'music_title' => 'Te He Echado De Menos',
      'music_artist' => 'Pablo Alborán',
      'music_artist_id' => '23322',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535499701,
      'music_last_update_time' => 1378277982,
      'music_title_search' => 'te he echado de menox',
      'music_artist_search' => '; pablo alboran;',
      'music_album_search' => '',
      'music_composer' => 'Pablo Alborán',
      'music_album' => '',
      'music_listen' => 4034,
      'music_track_id' => 0,
      'music_filename' => '1132546-3f4d73b1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'No queda mas que tu 
No queda mas que yo 
En este extraño salon 
Sin nadie que nos diga donde como 
Y cuando nos besamos 
Tenía ganas ya 
De pasar junto a ti 
Unos minutos soñando
Sin un reloj que...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1134396,
      'music_title_url' => 'i-cant-breathe-version-2~golf-pichaya',
      'music_title' => 'I Can\'t Breathe (Version 2)',
      'music_artist' => 'Golf Pichaya',
      'music_artist_id' => '34663',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1465890458,
      'music_last_update_time' => 1378691770,
      'music_title_search' => 'i can t breathe; verxion 2',
      'music_artist_search' => '; golf pichaia;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1759,
      'music_track_id' => 0,
      'music_filename' => '1134396-ae75f319.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1161049,
      'music_title_url' => 'ambadhari~revanth-sravana-bhargavi',
      'music_title' => 'Ambadhari',
      'music_artist' => 'Revanth;Sravana Bhargavi',
      'music_artist_id' => '36053;36054',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1410591279,
      'music_last_update_time' => 1383186683,
      'music_title_search' => 'ambadhari',
      'music_artist_search' => '; revanth; xravana bhargavi;',
      'music_album_search' => '',
      'music_composer' => 'Chandrabose',
      'music_album' => '',
      'music_listen' => 3553,
      'music_track_id' => 0,
      'music_filename' => '1161049-80808549.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Ambadhari jagadhaambadhari
Naa vennadhiri kudi kannadhiri.

Lambadhdhari bramarambadhari
Naa chempadhiri ara cheyyadhiri.

Nuvva aa dhari nenaa ee dhari
Nee naa aashalu mudhiri.

Reeye aa dhari pag...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1229288,
      'music_title_url' => 'flower~atsuko-maeda',
      'music_title' => 'Flower',
      'music_artist' => 'Atsuko Maeda',
      'music_artist_id' => '42770',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519741526,
      'music_last_update_time' => 1401524636,
      'music_title_search' => 'flower',
      'music_artist_search' => '; atxuko maeda;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1743,
      'music_track_id' => 0,
      'music_filename' => '1229288-a6206d85.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Kokoro no katasumi
Flower
Chisana hana ga saita
Ano hi no negai wa
Yukkuri to
Hinata no naka saita.

Sore wa nagai michi nori
Kaze ni fukarete
Ame ni utareta
Ima dekiru koto dake wo
Tada shoujiki n...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1267642,
      'music_title_url' => 'why~4minute',
      'music_title' => 'Why',
      'music_artist' => '4Minute',
      'music_artist_id' => '1571',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497603918,
      'music_last_update_time' => 1403147537,
      'music_title_search' => 'whi',
      'music_artist_search' => '; 4minute;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 105237,
      'music_track_id' => 0,
      'music_filename' => '1267642-8727eab7.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. Yuuwaku ga hisomu sekai de
Shoujikimono ni wa narenai
Tsuyokina fashion de katame
Atashi o mamoru no wa atashi

Hitori kiri kaeru train de nagareru
(City light and tired eyes)
Oodono ne keshiki...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1298452,
      'music_title_url' => 'endless-story~tamura-yukari',
      'music_title' => 'Endless Story',
      'music_artist' => 'Tamura Yukari',
      'music_artist_id' => '34399',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533449355,
      'music_last_update_time' => 1403141884,
      'music_title_search' => 'endlex xtori',
      'music_artist_search' => '; tamura iukari;',
      'music_album_search' => '',
      'music_composer' => 'Matsui Gorou; Oota Masatomo',
      'music_album' => '',
      'music_listen' => 2312,
      'music_track_id' => 1,
      'music_filename' => '1298452-a04fb5bd.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Dare mo shiru hito no inai 
Machi ni afureru kage no mukou ni 
Anata ga iru.

Onaji bamen no replay 
Arifureta hibi wo kaete shimau 
Hohoemi no mahou.

Dou ni mo naranai no ni 
Kinou ni mayou toki...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1318552,
      'music_title_url' => 'blue-bird~kobukuro',
      'music_title' => 'Blue Bird',
      'music_artist' => 'Kobukuro',
      'music_artist_id' => '18181',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497009423,
      'music_last_update_time' => 1459858104,
      'music_title_search' => 'blue bird',
      'music_artist_search' => '; kobukuro;',
      'music_album_search' => '',
      'music_composer' => 'Kobuchi Kentarou',
      'music_album' => '',
      'music_listen' => 1806,
      'music_track_id' => 0,
      'music_filename' => '1318552-e5760a85.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Your love 青空飛び交う Blue Bird あの鳥が見えますか？
幸せはいつも 見えない Color 感じている Your love

心配事ばかりが 積もる春の空を
見上げて うつむいて また顔を上げてる
似合わない鞄には 要らないものと 大切なもの
ぐちゃぐちゃに押し込んだまま

この街で見つけるって決めた自分
無くしちゃいけないものを胸に

Your Love　青空飛び交う...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1345958,
      'music_title_url' => 'mister~kara',
      'music_title' => 'Mister',
      'music_artist' => 'Kara',
      'music_artist_id' => '2793',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1417425343,
      'music_last_update_time' => 1409019088,
      'music_title_search' => 'mixter',
      'music_artist_search' => '; kara;',
      'music_album_search' => '',
      'music_composer' => 'Kara',
      'music_album' => '',
      'music_listen' => 37599,
      'music_track_id' => 0,
      'music_filename' => '1345958-a86c3713.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'La La La La La La
La La La La La La
La La La La La La
1 2 3 4 5 6 Boom it.

La La La La La La
La La La La La La
La La La La La La(Hey hey).

Tomodachi ijou koibito miman
Aimai na kankei wa akita wa...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1345981,
      'music_title_url' => 'go-go-summer~kara',
      'music_title' => 'Go Go Summer!',
      'music_artist' => 'Kara',
      'music_artist_id' => '2793',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1452019261,
      'music_last_update_time' => 1409020115,
      'music_title_search' => 'go go xumer',
      'music_artist_search' => '; kara;',
      'music_album_search' => '',
      'music_composer' => 'Han Sang Won; Lee Sang Ho; Kimzart; Yu Shimoji',
      'music_album' => '',
      'music_listen' => 13218,
      'music_track_id' => 0,
      'music_filename' => '1345981-046abf3a.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Here we are
Here you are
Yeah!
I wish for you
SHOW WINDOW wa
Natsu iro no SIGN
Saa tobidesou
Guzu guzu shichau ira renai
Mabushii taiyou ga
Dorama mitai koi no yokan
Mune no tokimeki
Tomaranai
Get...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1346010,
      'music_title_url' => 'go-go-summer-close-up-version~kara',
      'music_title' => 'Go Go Summer (Close-Up Version)',
      'music_artist' => 'Kara',
      'music_artist_id' => '2793',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1507454609,
      'music_last_update_time' => 1409020605,
      'music_title_search' => 'go go xumer; cloxe up verxion',
      'music_artist_search' => '; kara;',
      'music_album_search' => '',
      'music_composer' => 'Han Sang Won; Lee Sang Ho; Kimzart; Yu Shimoji',
      'music_album' => '',
      'music_listen' => 3812,
      'music_track_id' => 0,
      'music_filename' => '1346010-c55b6324.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Here we are
Here you are
Yeah!!
I wish for you.

Show window wa natsu iro no sain
Saa tobidasou guzu guzu shicha irarenai.

Mabushii taiyou ga dorama mitai koi no yokan
Mune no tokimeki tomaranai....',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1045034,
      'music_title_url' => 'only-you-vietsub~noona',
      'music_title' => 'Only You (Vietsub)',
      'music_artist' => 'Noona',
      'music_artist_id' => '26786',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1514385705,
      'music_last_update_time' => 1355277323,
      'music_title_search' => 'onli iou; vitxub',
      'music_artist_search' => '; nona;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 101341,
      'music_track_id' => 0,
      'music_filename' => '1045034-933ad975.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Only only you chun roo laeo wah
Only only you, I now know
เธอคื อคนท�� keu kon tee fah song mah chai mai
You\'re the one heaven sent for me, right
รักเธอ ฟังไว้
Ruk tur fung wai
I love you, listen
O...',
      'music_artist_html' => '<a href="/ca-si/Noona~Y3NuX2FydGlzdH4yNjc4Ng==.html">Noona</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1045996,
      'music_title_url' => 'mr-taxi-japanese-version~girls-generation',
      'music_title' => 'Mr. Taxi (Japanese Version)',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1526038930,
      'music_last_update_time' => 1355278077,
      'music_title_search' => 'mr taxi; japanexe verxion',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 49945,
      'music_track_id' => 0,
      'music_filename' => '1045996-d8c6f85f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Tokyo, seoul, london, new york
Kimama ni sekai wo drive tonight
Kakuchi de hirou suru nyuu sutairu
Mita koto nai mono dake misetageru.

Hora kochi wo mite sukoshi keikai seyo
Ano hidari handoru yor...',
      'music_artist_html' => '<a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH45MjI=.html">Girls\' Generation</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764742,
      'music_title_url' => 'o-que-faltou-ser-live~sandy-leah',
      'music_title' => 'O Que Faltou Ser (Live)',
      'music_artist' => 'Sandy Leah',
      'music_artist_id' => '92764',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1512472460,
      'music_last_update_time' => 1486806809,
      'music_title_search' => 'o que faltou xer; live',
      'music_artist_search' => '; xandi leah;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 249,
      'music_track_id' => 0,
      'music_filename' => '1764742-c453bf2b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Sandy-Leah~Y3NuX2FydGlzdH45Mjc2NA==.html">Sandy Leah</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764744,
      'music_title_url' => 'perdida-e-salva-live~sandy-leah',
      'music_title' => 'Perdida E Salva (Live)',
      'music_artist' => 'Sandy Leah',
      'music_artist_id' => '92764',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1494487705,
      'music_last_update_time' => 1486806820,
      'music_title_search' => 'perdida e xalva; live',
      'music_artist_search' => '; xandi leah;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 140,
      'music_track_id' => 0,
      'music_filename' => '1764744-ef965c2b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Sandy-Leah~Y3NuX2FydGlzdH45Mjc2NA==.html">Sandy Leah</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1069833,
      'music_title_url' => 'everyday-katyusha~akb48',
      'music_title' => 'Everyday, Katyusha',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1491268542,
      'music_last_update_time' => 1362453315,
      'music_title_search' => 'everidai katiutha',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => 'Yasushi Akimoto',
      'music_album' => '',
      'music_listen' => 12861,
      'music_track_id' => 0,
      'music_filename' => '1069833-77f8753a.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Taiyou ga kinou yori
Mabushiku teritsuke hajimetara
Masshiro na t-shirt ni
Ima sugu kigaete kimi wo sasoitai.

Umizoi no
Kokudou wo
Mada mada suiteru bus ni nori
Shiokaze wo oikakete
Dare yori mo h...',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1075987,
      'music_title_url' => 'un-monde-parfait~les-enfoires',
      'music_title' => 'Un Monde Parfait',
      'music_artist' => 'Les Enfoirés',
      'music_artist_id' => '29735',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495499947,
      'music_last_update_time' => 1364606453,
      'music_title_search' => 'un monde parfait',
      'music_artist_search' => '; lex enfoirex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3838,
      'music_track_id' => 0,
      'music_filename' => '1075987-570a6937.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Ce matin j\'imagine un dessin sans nuage
Avec quelques couleurs comme vient mon pinceau
Du bleu, du rouge je me sens sage comme une image
Avec quelques maisons et quelques animaux.

Ce matin j\'imagi...',
      'music_artist_html' => '<a href="/ca-si/Les-Enfoires~Y3NuX2FydGlzdH4yOTczNQ==.html">Les Enfoirés</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1086558,
      'music_title_url' => 'tu-cuerpo~pitbull-jencarlos',
      'music_title' => 'Tu Cuerpo',
      'music_artist' => 'Pitbull;Jencarlos',
      'music_artist_id' => '1814;14513',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1526162817,
      'music_last_update_time' => 1484118609,
      'music_title_search' => 'tu cuerpo',
      'music_artist_search' => '; pitbul; jencarlox;',
      'music_album_search' => '',
      'music_composer' => 'Pitbull; Jencarlos; David Miranda',
      'music_album' => '',
      'music_listen' => 2080,
      'music_track_id' => 0,
      'music_filename' => '1086558-ae139ef2.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Hola mami! (Jencarlos)
Mucho gusto (Mr. Worldwide)
Acércate un poquito me introduzco...tu, tu, tu, tu
Esa carita tan sensual, que a mi… que a mi… me provoca besar
Desconecta... de este mundo
Ven y...',
      'music_artist_html' => '<a href="/ca-si/Pitbull~Y3NuX2FydGlzdH4xODE0.html">Pitbull</a>, <a href="/ca-si/Jencarlos~Y3NuX2FydGlzdH4xNDUxMw==.html">Jencarlos</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1086756,
      'music_title_url' => 'bon-bon-live-at-axe-lounge~pitbull',
      'music_title' => 'Bon Bon (Live At AXE Lounge)',
      'music_artist' => 'Pitbull',
      'music_artist_id' => '1814',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1495268445,
      'music_last_update_time' => 1367913879,
      'music_title_search' => 'bon bon; live at axe lounge',
      'music_artist_search' => '; pitbul;',
      'music_album_search' => '',
      'music_composer' => 'Pitbull',
      'music_album' => '',
      'music_listen' => 1069,
      'music_track_id' => 0,
      'music_filename' => '1086756-b4a0e066.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'This is worldwide
Esto aquí es para las mujeres
En la discoteca que están buenísimas bellísimas lindísimas
Y ya tú sabes el resto
Yo se lo doy a directtv je, je, je, je, je mira que tu estas rica (...',
      'music_artist_html' => '<a href="/ca-si/Pitbull~Y3NuX2FydGlzdH4xODE0.html">Pitbull</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1092800,
      'music_title_url' => 'un-jour-de-plus-au-paradis~les-enfoires',
      'music_title' => 'Un Jour De Plus Au Paradis',
      'music_artist' => 'Les Enfoirés',
      'music_artist_id' => '29735',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495496770,
      'music_last_update_time' => 1369537751,
      'music_title_search' => 'un jour de plux au paradix',
      'music_artist_search' => '; lex enfoirex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1461,
      'music_track_id' => 0,
      'music_filename' => '1092800-08bf6e78.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Elle appelle mais personne ne l\'entends
Saisir un regard
Elle implore au milieu des passants
La nuit tombe, il est si tard
Juste un toit, juste un sourire
Mais elle encombre et dérange
Mais l\'adres...',
      'music_artist_html' => '<a href="/ca-si/Les-Enfoires~Y3NuX2FydGlzdH4yOTczNQ==.html">Les Enfoirés</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1098156,
      'music_title_url' => 'melancholic-hatsune-miku-live-party-2011-in-sapporo~kagamine-rin',
      'music_title' => 'Melancholic (Hatsune Miku Live Party 2011 In Sapporo)',
      'music_artist' => 'Kagamine Rin',
      'music_artist_id' => '1317',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1536813271,
      'music_last_update_time' => 1370311006,
      'music_title_search' => 'melancholic; hatxune miku live parti 201 in xaporo',
      'music_artist_search' => '; kagamine rin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7298,
      'music_track_id' => 0,
      'music_filename' => '1098156-e0610fb1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Zenzen tsukamenai kimi no koto 
Zenzen shiranai uchi ni 
Kokoro ubawareru nante koto 
Aru hazu nai desho.

I can\'t figure you out at all 
So when i\'m not aware at all 
There\'s no possible way 
You...',
      'music_artist_html' => '<a href="/ca-si/Kagamine-Rin~Y3NuX2FydGlzdH4xMzE3.html">Kagamine Rin</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1132546,
      'music_title_url' => 'te-he-echado-de-menos~pablo-alboran',
      'music_title' => 'Te He Echado De Menos',
      'music_artist' => 'Pablo Alborán',
      'music_artist_id' => '23322',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535499701,
      'music_last_update_time' => 1378277982,
      'music_title_search' => 'te he echado de menox',
      'music_artist_search' => '; pablo alboran;',
      'music_album_search' => '',
      'music_composer' => 'Pablo Alborán',
      'music_album' => '',
      'music_listen' => 4034,
      'music_track_id' => 0,
      'music_filename' => '1132546-3f4d73b1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'No queda mas que tu 
No queda mas que yo 
En este extraño salon 
Sin nadie que nos diga donde como 
Y cuando nos besamos 
Tenía ganas ya 
De pasar junto a ti 
Unos minutos soñando
Sin un reloj que...',
      'music_artist_html' => '<a href="/ca-si/Pablo-Alboran~Y3NuX2FydGlzdH4yMzMyMg==.html">Pablo Alborán</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1134396,
      'music_title_url' => 'i-cant-breathe-version-2~golf-pichaya',
      'music_title' => 'I Can\'t Breathe (Version 2)',
      'music_artist' => 'Golf Pichaya',
      'music_artist_id' => '34663',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1465890458,
      'music_last_update_time' => 1378691770,
      'music_title_search' => 'i can t breathe; verxion 2',
      'music_artist_search' => '; golf pichaia;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1759,
      'music_track_id' => 0,
      'music_filename' => '1134396-ae75f319.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Golf-Pichaya~Y3NuX2FydGlzdH4zNDY2Mw==.html">Golf Pichaya</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1161049,
      'music_title_url' => 'ambadhari~revanth-sravana-bhargavi',
      'music_title' => 'Ambadhari',
      'music_artist' => 'Revanth;Sravana Bhargavi',
      'music_artist_id' => '36053;36054',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1410591279,
      'music_last_update_time' => 1383186683,
      'music_title_search' => 'ambadhari',
      'music_artist_search' => '; revanth; xravana bhargavi;',
      'music_album_search' => '',
      'music_composer' => 'Chandrabose',
      'music_album' => '',
      'music_listen' => 3553,
      'music_track_id' => 0,
      'music_filename' => '1161049-80808549.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Ambadhari jagadhaambadhari
Naa vennadhiri kudi kannadhiri.

Lambadhdhari bramarambadhari
Naa chempadhiri ara cheyyadhiri.

Nuvva aa dhari nenaa ee dhari
Nee naa aashalu mudhiri.

Reeye aa dhari pag...',
      'music_artist_html' => '<a href="/ca-si/Revanth~Y3NuX2FydGlzdH4zNjA1Mw==.html">Revanth</a>, <a href="/ca-si/Sravana-Bhargavi~Y3NuX2FydGlzdH4zNjA1NA==.html">Sravana Bhargavi</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1229288,
      'music_title_url' => 'flower~atsuko-maeda',
      'music_title' => 'Flower',
      'music_artist' => 'Atsuko Maeda',
      'music_artist_id' => '42770',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519741526,
      'music_last_update_time' => 1401524636,
      'music_title_search' => 'flower',
      'music_artist_search' => '; atxuko maeda;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1743,
      'music_track_id' => 0,
      'music_filename' => '1229288-a6206d85.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Kokoro no katasumi
Flower
Chisana hana ga saita
Ano hi no negai wa
Yukkuri to
Hinata no naka saita.

Sore wa nagai michi nori
Kaze ni fukarete
Ame ni utareta
Ima dekiru koto dake wo
Tada shoujiki n...',
      'music_artist_html' => '<a href="/ca-si/Atsuko-Maeda~Y3NuX2FydGlzdH40Mjc3MA==.html">Atsuko Maeda</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1267642,
      'music_title_url' => 'why~4minute',
      'music_title' => 'Why',
      'music_artist' => '4Minute',
      'music_artist_id' => '1571',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497603918,
      'music_last_update_time' => 1403147537,
      'music_title_search' => 'whi',
      'music_artist_search' => '; 4minute;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 105237,
      'music_track_id' => 0,
      'music_filename' => '1267642-8727eab7.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. Yuuwaku ga hisomu sekai de
Shoujikimono ni wa narenai
Tsuyokina fashion de katame
Atashi o mamoru no wa atashi

Hitori kiri kaeru train de nagareru
(City light and tired eyes)
Oodono ne keshiki...',
      'music_artist_html' => '<a href="/ca-si/4Minute~Y3NuX2FydGlzdH4xNTcx.html">4Minute</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1298452,
      'music_title_url' => 'endless-story~tamura-yukari',
      'music_title' => 'Endless Story',
      'music_artist' => 'Tamura Yukari',
      'music_artist_id' => '34399',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533449355,
      'music_last_update_time' => 1403141884,
      'music_title_search' => 'endlex xtori',
      'music_artist_search' => '; tamura iukari;',
      'music_album_search' => '',
      'music_composer' => 'Matsui Gorou; Oota Masatomo',
      'music_album' => '',
      'music_listen' => 2312,
      'music_track_id' => 1,
      'music_filename' => '1298452-a04fb5bd.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Dare mo shiru hito no inai 
Machi ni afureru kage no mukou ni 
Anata ga iru.

Onaji bamen no replay 
Arifureta hibi wo kaete shimau 
Hohoemi no mahou.

Dou ni mo naranai no ni 
Kinou ni mayou toki...',
      'music_artist_html' => '<a href="/ca-si/Tamura-Yukari~Y3NuX2FydGlzdH4zNDM5OQ==.html">Tamura Yukari</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1318552,
      'music_title_url' => 'blue-bird~kobukuro',
      'music_title' => 'Blue Bird',
      'music_artist' => 'Kobukuro',
      'music_artist_id' => '18181',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497009423,
      'music_last_update_time' => 1459858104,
      'music_title_search' => 'blue bird',
      'music_artist_search' => '; kobukuro;',
      'music_album_search' => '',
      'music_composer' => 'Kobuchi Kentarou',
      'music_album' => '',
      'music_listen' => 1806,
      'music_track_id' => 0,
      'music_filename' => '1318552-e5760a85.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Your love 青空飛び交う Blue Bird あの鳥が見えますか？
幸せはいつも 見えない Color 感じている Your love

心配事ばかりが 積もる春の空を
見上げて うつむいて また顔を上げてる
似合わない鞄には 要らないものと 大切なもの
ぐちゃぐちゃに押し込んだまま

この街で見つけるって決めた自分
無くしちゃいけないものを胸に

Your Love　青空飛び交う...',
      'music_artist_html' => '<a href="/ca-si/Kobukuro~Y3NuX2FydGlzdH4xODE4MQ==.html">Kobukuro</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1345958,
      'music_title_url' => 'mister~kara',
      'music_title' => 'Mister',
      'music_artist' => 'Kara',
      'music_artist_id' => '2793',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1417425343,
      'music_last_update_time' => 1409019088,
      'music_title_search' => 'mixter',
      'music_artist_search' => '; kara;',
      'music_album_search' => '',
      'music_composer' => 'Kara',
      'music_album' => '',
      'music_listen' => 37599,
      'music_track_id' => 0,
      'music_filename' => '1345958-a86c3713.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'La La La La La La
La La La La La La
La La La La La La
1 2 3 4 5 6 Boom it.

La La La La La La
La La La La La La
La La La La La La(Hey hey).

Tomodachi ijou koibito miman
Aimai na kankei wa akita wa...',
      'music_artist_html' => '<a href="/ca-si/Kara~Y3NuX2FydGlzdH4yNzkz.html">Kara</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1345981,
      'music_title_url' => 'go-go-summer~kara',
      'music_title' => 'Go Go Summer!',
      'music_artist' => 'Kara',
      'music_artist_id' => '2793',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1452019261,
      'music_last_update_time' => 1409020115,
      'music_title_search' => 'go go xumer',
      'music_artist_search' => '; kara;',
      'music_album_search' => '',
      'music_composer' => 'Han Sang Won; Lee Sang Ho; Kimzart; Yu Shimoji',
      'music_album' => '',
      'music_listen' => 13218,
      'music_track_id' => 0,
      'music_filename' => '1345981-046abf3a.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Here we are
Here you are
Yeah!
I wish for you
SHOW WINDOW wa
Natsu iro no SIGN
Saa tobidesou
Guzu guzu shichau ira renai
Mabushii taiyou ga
Dorama mitai koi no yokan
Mune no tokimeki
Tomaranai
Get...',
      'music_artist_html' => '<a href="/ca-si/Kara~Y3NuX2FydGlzdH4yNzkz.html">Kara</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1346010,
      'music_title_url' => 'go-go-summer-close-up-version~kara',
      'music_title' => 'Go Go Summer (Close-Up Version)',
      'music_artist' => 'Kara',
      'music_artist_id' => '2793',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1507454609,
      'music_last_update_time' => 1409020605,
      'music_title_search' => 'go go xumer; cloxe up verxion',
      'music_artist_search' => '; kara;',
      'music_album_search' => '',
      'music_composer' => 'Han Sang Won; Lee Sang Ho; Kimzart; Yu Shimoji',
      'music_album' => '',
      'music_listen' => 3812,
      'music_track_id' => 0,
      'music_filename' => '1346010-c55b6324.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Here we are
Here you are
Yeah!!
I wish for you.

Show window wa natsu iro no sain
Saa tobidasou guzu guzu shicha irarenai.

Mabushii taiyou ga dorama mitai koi no yokan
Mune no tokimeki tomaranai....',
      'music_artist_html' => '<a href="/ca-si/Kara~Y3NuX2FydGlzdH4yNzkz.html">Kara</a>',
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