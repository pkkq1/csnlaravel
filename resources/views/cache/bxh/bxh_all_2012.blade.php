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
      'music_downloads_today' => 3,
      'music_id' => 1428093,
      'music_title_url' => 'lien-khuc-mua-thu-trong-mua-bup-be-khong-tinh-yeu~nhu-quynh-lam-anh-diem-suong-q',
      'music_title' => 'Liên Khúc: Mùa Thu Trong Mưa; Búp Bê Không Tình Yêu',
      'music_artist' => 'Như Quỳnh;Lam Anh;Diễm Sương;Quỳnh Vi;Thanh Hà;Mai Thiên Vân;Hạ Vy;Minh Tuyết;Hương Giang;Hương Thuỷ;Kỳ Phương Uyên;Ngọc Anh;Như Loan;Tóc Tiên',
      'music_artist_id' => '32;12462;12461;5759;1584;2316;3807;30;1982;6572;12338;36;1871;343',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538975211,
      'music_last_update_time' => 1419080690,
      'music_title_search' => 'lin khuc; mua thu chong mua; bup be khong tinh iu',
      'music_artist_search' => '; nhu qinh; lam em; dim xung; qinh vi; thanh ha; mai thin van; ha vi; minh tit; hung dang; hung thi; ki phung in; ngoc em; nhu loan; toc tin;',
      'music_album_search' => '',
      'music_composer' => 'Trường Sa; Vũ Xuân Hùng',
      'music_album' => '',
      'music_listen' => 667325,
      'music_track_id' => 0,
      'music_filename' => '1428093-fc26dbf9.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Mùa Thu Trong Mưa]

Chiều mưa không có em
Bờ đá công viên âm thầm
Chiều mưa không có em
Giăng mắc mây không buồn trôi.

Gọi mùa thu lãng quên
Vào tiếng mưa rơi êm đềm
Trời còn mưa ướt thêm
Cho dài...',
    ),
    1 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1005406,
      'music_title_url' => 'duong-tinh-doi-nga~duong-ngoc-thai-giang-tien',
      'music_title' => 'Đường Tình Đôi Ngã',
      'music_artist' => 'Dương Ngọc Thái;Giáng Tiên',
      'music_artist_id' => '741;2355',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539004892,
      'music_last_update_time' => 1474518536,
      'music_title_search' => 'dung tinh doi nga',
      'music_artist_search' => '; dung ngoc thai; dang tin;',
      'music_album_search' => '',
      'music_composer' => 'Lê Văn Thiện',
      'music_album' => '',
      'music_listen' => 871715,
      'music_track_id' => 0,
      'music_filename' => '1005406-3a1555e4.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. Thôi em hãy đi về, vĩnh biệt kể từ đây
Còn luyến lưu làm chi, còn vấn vương làm gì
Ai thật lòng yêu ai, đến bây giờ mình đã biết
Chuyện tình đôi ta, em hãy xem là huyền thoại.

Anh đừng giận em...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1343469,
      'music_title_url' => 'thuong-lam-minh-oi~nhu-quynh',
      'music_title' => 'Thương Lắm Mình Ơi',
      'music_artist' => 'Như Quỳnh',
      'music_artist_id' => '32',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539004475,
      'music_last_update_time' => 1408670830,
      'music_title_search' => 'thung lam minh oi',
      'music_artist_search' => '; nhu qinh;',
      'music_album_search' => '',
      'music_composer' => 'Vũ Quốc Việt',
      'music_album' => '',
      'music_listen' => 23006,
      'music_track_id' => 0,
      'music_filename' => '1343469-b35ad746.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Đêm nằm lại nhớ mình ơi
Mình ơi nhớ thương mình nhiều
Đêm nằm lòng nghe thao thức
Không biết giờ này mình ngủ chưa?

Bao đời ruộng nắng cằn khô
Mình ơi sớm khuya nuôi mẹ già
Em nào một câu than thở...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1414484,
      'music_title_url' => 've-dau-mai-toc-nguoi-thuong~quang-le',
      'music_title' => 'Về Đâu Mái Tóc Người Thương',
      'music_artist' => 'Quang Lê',
      'music_artist_id' => '1770',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538739258,
      'music_last_update_time' => 1417422280,
      'music_title_search' => 've dau mai toc ngui thung',
      'music_artist_search' => '; quang le;',
      'music_album_search' => '',
      'music_composer' => 'Hoài Linh',
      'music_album' => '',
      'music_listen' => 845451,
      'music_track_id' => 0,
      'music_filename' => '1414484-8aeeb3fc.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Hồn lỡ sa vào đôi mắt em
Chiều nao xoã tóc ngồi bên rèm
Thầm ước nhưng nào đâu dám nói
Khép tâm tư lại thôi
Đường hoa vẫn chưa mở lối.

Đời lắm phong trần tay trắng tay
Trời đông ngại gió lùa vai g...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1009663,
      'music_title_url' => 'that-long-anh-xin-loi~wanbi-tuan-anh',
      'music_title' => 'Thật Lòng Anh Xin Lỗi',
      'music_artist' => 'Wanbi Tuấn Anh',
      'music_artist_id' => '948',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538998508,
      'music_last_update_time' => 1344841771,
      'music_title_search' => 'that long em xin loi',
      'music_artist_search' => '; wanbi tuan em;',
      'music_album_search' => '',
      'music_composer' => 'Wanbi Tuấn Anh',
      'music_album' => '',
      'music_listen' => 47270,
      'music_track_id' => 0,
      'music_filename' => '1009663-e3d5e5a5.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nhớ em thật nhiều làm anh buồn bao nhiêu
Rồi đã qua bao ngày không gặp
Anh suy nghĩ thật nhiều
Và anh chẳng muốn làm gì 
Chỉ muốn nghe thấy tiếng nói cười của em.

Dù đã cố rất nhiều, chỉ mong ngườ...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1182352,
      'music_title_url' => 'cam-on~dam-vinh-hung-ho-ngoc-ha-thu-m',
      'music_title' => 'Cảm Ơn',
      'music_artist' => 'Đàm Vĩnh Hưng;Hồ Ngọc Hà;Thu Minh;Lệ Quyên;Đông Nhi;Ông Cao Thắng;Thu Thuỷ;Minh Hằng;Hà Anh Tuấn;Noo Phước Thịnh;Ngô Kiến Huy;V.Music',
      'music_artist_id' => '4836;1468;2182;1662;706;849;9;447;333;1611;1013;1888',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538993801,
      'music_last_update_time' => 1386672199,
      'music_title_search' => 'cam on',
      'music_artist_search' => '; dam vinh hung; ho ngoc ha; thu minh; le qin; dong nhi; ong cao thang; thu thi; minh hang; ha em tuan; no phuc thinh; ngo kin hi; v muxic;',
      'music_album_search' => '',
      'music_composer' => 'Wanbi Tuấn Anh',
      'music_album' => '',
      'music_listen' => 175110,
      'music_track_id' => 0,
      'music_filename' => '1182352-4a8a8e44.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ngày trôi qua ngày, nhận ra quanh ta dường như biết bao điều đổi thay
Sao thời gian trôi thật mau để giờ đây tôi thầm biết được rằng
Thật hạnh phúc với những gì cuộc đời đã cho tôi.

Niềm vui nỗi b...',
    ),
    6 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1942548,
      'music_title_url' => 'tra-lai-anh~nhu-quynh',
      'music_title' => 'Trả Lại Anh',
      'music_artist' => 'Như Quỳnh',
      'music_artist_id' => '32',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538975147,
      'music_last_update_time' => 1534167918,
      'music_title_search' => 'cha lai em',
      'music_artist_search' => '; nhu qinh;',
      'music_album_search' => '',
      'music_composer' => 'Đức Quỳnh',
      'music_album' => '',
      'music_listen' => 1676,
      'music_track_id' => 0,
      'music_filename' => '1942548-f93f15e9.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Trả lại anh câu yêu mà anh đã tặng
Trả lại anh nhớ nhung mặn nồng cay đắng
Trả lại anh thư xanh, màu xanh ái ân
Dĩ vãng buồn giống nghĩa trang
Cô đơn như mộ không tên.

Trả lại anh câu yêu em, tình...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1012131,
      'music_title_url' => 'goc-khuat~dam-vinh-hung',
      'music_title' => 'Góc Khuất',
      'music_artist' => 'Đàm Vĩnh Hưng',
      'music_artist_id' => '4836',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538898336,
      'music_last_update_time' => 1345861650,
      'music_title_search' => 'goc khuat',
      'music_artist_search' => '; dam vinh hung;',
      'music_album_search' => '',
      'music_composer' => 'Trương Lê Sơn',
      'music_album' => '',
      'music_listen' => 197119,
      'music_track_id' => 0,
      'music_filename' => '1012131-ef77927a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Thế giới nơi em thuộc về 
Là một góc khuất cho anh đợi chờ
Thế giới nơi em thuộc về chỉ của riêng em.

Chuốc lấy bao nhiêu hận sầu 
Mà vẫn cứ mong em quay đầu
Chẳng lẽ yêu thương anh đây 
Không tha...',
    ),
    8 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1041782,
      'music_title_url' => 'niu-keo~noo-phuoc-thinh',
      'music_title' => 'Níu Kéo',
      'music_artist' => 'Noo Phước Thịnh',
      'music_artist_id' => '1611',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539065639,
      'music_last_update_time' => 1355106711,
      'music_title_search' => 'niu keo',
      'music_artist_search' => '; no phuc thinh;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Hoàng Tôn',
      'music_album' => '',
      'music_listen' => 25557,
      'music_track_id' => 0,
      'music_filename' => '1041782-0953f8ab.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Anh đang lê thước trong đêm mang bao yêu dấu qua thềm
Đường dài chẳng một ai với nỗi niềm tê tái
Nhưng sao đêm vẫn quá dài
Nơi đây trong anh vẫn cứ mệt nhoài cùng những nỗi đau.

I\'m sorry mah babe...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1143535,
      'music_title_url' => 'chuyen-hoa-sim~nhu-quynh',
      'music_title' => 'Chuyện Hoa Sim',
      'music_artist' => 'Như Quỳnh',
      'music_artist_id' => '32',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538839785,
      'music_last_update_time' => 1380541464,
      'music_title_search' => 'chin hoa xim',
      'music_artist_search' => '; nhu qinh;',
      'music_album_search' => '',
      'music_composer' => 'Anh Bằng',
      'music_album' => '',
      'music_listen' => 317735,
      'music_track_id' => 0,
      'music_filename' => '1143535-dc73d6a5.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Rừng hoang đẹp nhất hoa màu tím
Chuyện tình thương nhất chuyện hoa sim
Có người con gái xuân vời vợi
Tóc còn ngăn ngắn chưa đầy búi.

Ngày xưa nàng vẫn yêu màu tím
Chiều chiều lên những đồi hoa...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1475184,
      'music_title_url' => 'mua-dong-thuong-nho~ha-thanh-xuan',
      'music_title' => 'Mùa Đông Thương Nhớ',
      'music_artist' => 'Hà Thanh Xuân',
      'music_artist_id' => '7393',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538918942,
      'music_last_update_time' => 1429932744,
      'music_title_search' => 'mua dong thung nho',
      'music_artist_search' => '; ha thanh xuan;',
      'music_album_search' => '',
      'music_composer' => 'Hùng Linh',
      'music_album' => '',
      'music_listen' => 37458,
      'music_track_id' => 0,
      'music_filename' => '1475184-096bcfa6.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Người yêu hỡi nay đã ra đi về đâu
Thuyền ra bến ta biết chốn nào tìm nhau
Muà đông đến lạnh giá con tim hận sầu
Biết làm sao đễ quên người em yêu đấu.

Người yêu hỡi em có nhớ chăng mùa đông
Chuyện...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1588605,
      'music_title_url' => 'mua-dong-nam-ay~my-huyen',
      'music_title' => 'Mùa Đông Năm Ấy',
      'music_artist' => 'Mỹ Huyền',
      'music_artist_id' => '1970',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538927595,
      'music_last_update_time' => 1448499159,
      'music_title_search' => 'mua dong 5 ai',
      'music_artist_search' => '; mi hin;',
      'music_album_search' => '',
      'music_composer' => 'Hoài Đức',
      'music_album' => '',
      'music_listen' => 6511,
      'music_track_id' => 0,
      'music_filename' => '1588605-11fa0912.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Mùa đông năm ấy sao sáng soi cuối trời
Mùa đông năm ấy con Chúa sinh xuống đời
Nhịp ca véo von bao thiên thần vang hát
Tôn thờ Ngôi Hai giáng sinh trần ai.

[ĐK1:]
Con hợp với thiên thần hoà van...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1826706,
      'music_title_url' => 'mat-troi-den~cardin-nguyen-thuy-huong',
      'music_title' => 'Mặt Trời Đen',
      'music_artist' => 'Cardin Nguyễn;Thuỳ Hương',
      'music_artist_id' => '1782;1042',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538750303,
      'music_last_update_time' => 1507169673,
      'music_title_search' => 'mat choi den',
      'music_artist_search' => '; cardin ngin; thi hung;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Trung Cang',
      'music_album' => '',
      'music_listen' => 17137,
      'music_track_id' => 0,
      'music_filename' => '1826706-ee6da547.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Mặt trời đen, quá đen, đen như đời ta 
Đời hằng mong thoát đi, đi khung trời xa 
Cuộc đời như chó hoang lang thang về đêm
Cuộc tình không mấy khi nghe câu dịu êm. 

Mặt trời không muốn sáng soi cho...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1004756,
      'music_title_url' => 'tinh-ve-noi-dau~thanh-bui-tata-young',
      'music_title' => 'Tình Về Nơi Đâu',
      'music_artist' => 'Thanh Bùi;Tata Young',
      'music_artist_id' => '1418;2534',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538611560,
      'music_last_update_time' => 1347350799,
      'music_title_search' => 'tinh ve noi dau',
      'music_artist_search' => '; thanh bui; tata ioung;',
      'music_album_search' => '',
      'music_composer' => 'Dương Khắc Linh; Thanh Bùi',
      'music_album' => '',
      'music_listen' => 218596,
      'music_track_id' => 0,
      'music_filename' => '1004756-82b2fa32.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '1. Bâng khuâng trong đêm thật dài
Ở nơi niềm vui đã xa
Tình mình như đang vô vọng
Cho ta thao thức đêm dài.

Đưa nhau qua cơn mộng buồn
Màn đêm càng thêm cách xa
Mình lặng im đến lúc nào
Nghe anh n...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1013691,
      'music_title_url' => 'nguoi-dung-sau-hanh-phuc~pham-quynh-anh',
      'music_title' => 'Người Đứng Sau Hạnh Phúc',
      'music_artist' => 'Phạm Quỳnh Anh',
      'music_artist_id' => '189',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538547799,
      'music_last_update_time' => 1347288752,
      'music_title_search' => 'ngui dung xau hanh phuc',
      'music_artist_search' => '; pham qinh em;',
      'music_album_search' => '',
      'music_composer' => 'Hamlet Trương',
      'music_album' => '',
      'music_listen' => 50580,
      'music_track_id' => 0,
      'music_filename' => '1013691-284fc665.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Tình yêu đó em chỉ vừa đi tới
Thì em biết em sẽ khổ đau rất nhiều
Mà tại sao em không thể ngăn yêu
Con tim nào đã rất buồn.

Lòng tự trách em chỉ là người đứng sau
Cười lặng lẽ sau lưng hạnh phúc c...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1014374,
      'music_title_url' => 'neu-khong-phai-la-em~the-men',
      'music_title' => 'Nếu Không Phải Là Em',
      'music_artist' => 'The Men',
      'music_artist_id' => '1881',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538928702,
      'music_last_update_time' => 1346989763,
      'music_title_search' => 'neu khong phai la em',
      'music_artist_search' => '; the men;',
      'music_album_search' => '',
      'music_composer' => 'Phạm Việt Hoàng',
      'music_album' => '',
      'music_listen' => 298488,
      'music_track_id' => 0,
      'music_filename' => '1014374-1be9418e.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Từng mùa thu cứ trôi âm thầm 
Một mình anh trách than đành lỡ lầm 
Tháng năm ngày xưa êm đềm đã đi về đâu đi về đâu 
Còn lại nơi đây nỗi nhớ em.

Từng ngày anh vẫn qua con phố này
Tìm nụ cười ai rạ...',
    ),
    16 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1022181,
      'music_title_url' => 'xa-em~noo-phuoc-thinh',
      'music_title' => 'Xa Em',
      'music_artist' => 'Noo Phước Thịnh',
      'music_artist_id' => '1611',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538971674,
      'music_last_update_time' => 1349427802,
      'music_title_search' => 'xa em',
      'music_artist_search' => '; no phuc thinh;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Đức Tùng',
      'music_album' => '',
      'music_listen' => 147462,
      'music_track_id' => 0,
      'music_filename' => '1022181-75043010.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Những cơn gió khi mùa đông vừa sang
Chiếc lá úa trên nhành cây đã tan về xa ngút ngàn
Cô đơn quá nên thôi cho mình đành buông lơi.

Anh ngồi đây, con đường xưa chờ em
Những cơn gió như lạnh sâu trá...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1031351,
      'music_title_url' => 'tinh-co~emily-lil-knight-justatee',
      'music_title' => 'Tình Cờ',
      'music_artist' => 'Emily;Lil\' Knight;JustaTee',
      'music_artist_id' => '1963;395;2326',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538913021,
      'music_last_update_time' => 1352777792,
      'music_title_search' => 'tinh co',
      'music_artist_search' => '; emili; lk; juxtate;',
      'music_album_search' => '',
      'music_composer' => 'LK',
      'music_album' => '',
      'music_listen' => 89874,
      'music_track_id' => 0,
      'music_filename' => '1031351-5672a2bf.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Có những lúc chuyện thật tình cờ khi hai người ngồi thật lâu 
Mong chờ ai đến khi phố vắng người 
Bối rối gặp một nụ cười khi anh ngồi lại gần em 
Ta làm quen và quên đi thời gian cứ trôi.

Xin cho...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1039469,
      'music_title_url' => 'nhat-ky-cua-me-live~hien-thuc',
      'music_title' => 'Nhật Ký Của Mẹ (Live)',
      'music_artist' => 'Hiền Thục',
      'music_artist_id' => '437',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538454050,
      'music_last_update_time' => 1353550989,
      'music_title_search' => 'nhat ki cua me; live',
      'music_artist_search' => '; hin thuc;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Văn Chung',
      'music_album' => '',
      'music_listen' => 44893,
      'music_track_id' => 0,
      'music_filename' => '1039469-e3455ad6.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Bao ngày Mẹ ngóng, bao ngày Mẹ trông
Bao ngày Mẹ mong con chào đời
Ấp trong đáy lòng, có chăng tiếng cười
Của một hài nhi đang lớn dần?

Mẹ chợt tỉnh giấc, và Mẹ nhìn thấy
Hình hài nhỏ bé như th...',
    ),
    19 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1103121,
      'music_title_url' => 'xin-hay-roi-xa~ho-hoang-yen',
      'music_title' => 'Xin Hãy Rời Xa',
      'music_artist' => 'Hồ Hoàng Yến',
      'music_artist_id' => '7591',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539019743,
      'music_last_update_time' => 1371520658,
      'music_title_search' => 'xin hai roi xa',
      'music_artist_search' => '; ho hoang in;',
      'music_album_search' => '',
      'music_composer' => 'Vũ Tuấn Đức',
      'music_album' => '',
      'music_listen' => 91605,
      'music_track_id' => 0,
      'music_filename' => '1103121-07e832db.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Khi đã giã từ, người yêu ơi xin hãy rời xa
Cho bao ước mơ theo dòng đời trôi dần sẽ phai mờ
Để khi em đến cho ta đắm say, rồi mai xa cách ta thêm đắng cay
Này người tình hỡi, cho ta sầu với những n...',
    ),
    20 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1428093,
      'music_title_url' => 'lien-khuc-mua-thu-trong-mua-bup-be-khong-tinh-yeu~nhu-quynh-lam-anh-diem-suong-q',
      'music_title' => 'Liên Khúc: Mùa Thu Trong Mưa; Búp Bê Không Tình Yêu',
      'music_artist' => 'Như Quỳnh;Lam Anh;Diễm Sương;Quỳnh Vi;Thanh Hà;Mai Thiên Vân;Hạ Vy;Minh Tuyết;Hương Giang;Hương Thuỷ;Kỳ Phương Uyên;Ngọc Anh;Như Loan;Tóc Tiên',
      'music_artist_id' => '32;12462;12461;5759;1584;2316;3807;30;1982;6572;12338;36;1871;343',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538975211,
      'music_last_update_time' => 1419080690,
      'music_title_search' => 'lin khuc; mua thu chong mua; bup be khong tinh iu',
      'music_artist_search' => '; nhu qinh; lam em; dim xung; qinh vi; thanh ha; mai thin van; ha vi; minh tit; hung dang; hung thi; ki phung in; ngoc em; nhu loan; toc tin;',
      'music_album_search' => '',
      'music_composer' => 'Trường Sa; Vũ Xuân Hùng',
      'music_album' => '',
      'music_listen' => 667325,
      'music_track_id' => 0,
      'music_filename' => '1428093-fc26dbf9.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Mùa Thu Trong Mưa]

Chiều mưa không có em
Bờ đá công viên âm thầm
Chiều mưa không có em
Giăng mắc mây không buồn trôi.

Gọi mùa thu lãng quên
Vào tiếng mưa rơi êm đềm
Trời còn mưa ướt thêm
Cho dài...',
      'music_artist_html' => '<a href="/ca-si/Nhu-Quynh~Y3NuX2FydGlzdH4zMg==.html">Như Quỳnh</a>, <a href="/ca-si/Lam-Anh~Y3NuX2FydGlzdH4xMjQ2Mg==.html">Lam Anh</a>, <a href="/ca-si/Diem-Suong~Y3NuX2FydGlzdH4xMjQ2MQ==.html">Diễm Sương</a>, <a href="/ca-si/Quynh-Vi~Y3NuX2FydGlzdH41NzU5.html">Quỳnh Vi</a>, <a href="/ca-si/Thanh-Ha~Y3NuX2FydGlzdH4xNTg0.html">Thanh Hà</a>, <a href="/ca-si/Mai-Thien-Van~Y3NuX2FydGlzdH4yMzE2.html">Mai Thiên Vân</a>, <a href="/ca-si/Ha-Vy~Y3NuX2FydGlzdH4zODA3.html">Hạ Vy</a>, <a href="/ca-si/Minh-Tuyet~Y3NuX2FydGlzdH4zMA==.html">Minh Tuyết</a>, <a href="/ca-si/Huong-Giang~Y3NuX2FydGlzdH4xOTgy.html">Hương Giang</a>, <a href="/ca-si/Huong-Thuy~Y3NuX2FydGlzdH42NTcy.html">Hương Thuỷ</a>, <a href="/ca-si/Ky-Phuong-Uyen~Y3NuX2FydGlzdH4xMjMzOA==.html">Kỳ Phương Uyên</a>, <a href="/ca-si/Ngoc-Anh~Y3NuX2FydGlzdH4zNg==.html">Ngọc Anh</a>, <a href="/ca-si/Nhu-Loan~Y3NuX2FydGlzdH4xODcx.html">Như Loan</a>, <a href="/ca-si/Toc-Tien~Y3NuX2FydGlzdH4zNDM=.html">Tóc Tiên</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1005406,
      'music_title_url' => 'duong-tinh-doi-nga~duong-ngoc-thai-giang-tien',
      'music_title' => 'Đường Tình Đôi Ngã',
      'music_artist' => 'Dương Ngọc Thái;Giáng Tiên',
      'music_artist_id' => '741;2355',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539004892,
      'music_last_update_time' => 1474518536,
      'music_title_search' => 'dung tinh doi nga',
      'music_artist_search' => '; dung ngoc thai; dang tin;',
      'music_album_search' => '',
      'music_composer' => 'Lê Văn Thiện',
      'music_album' => '',
      'music_listen' => 871715,
      'music_track_id' => 0,
      'music_filename' => '1005406-3a1555e4.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. Thôi em hãy đi về, vĩnh biệt kể từ đây
Còn luyến lưu làm chi, còn vấn vương làm gì
Ai thật lòng yêu ai, đến bây giờ mình đã biết
Chuyện tình đôi ta, em hãy xem là huyền thoại.

Anh đừng giận em...',
      'music_artist_html' => '<a href="/ca-si/Duong-Ngoc-Thai~Y3NuX2FydGlzdH43NDE=.html">Dương Ngọc Thái</a>, <a href="/ca-si/Giang-Tien~Y3NuX2FydGlzdH4yMzU1.html">Giáng Tiên</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1343469,
      'music_title_url' => 'thuong-lam-minh-oi~nhu-quynh',
      'music_title' => 'Thương Lắm Mình Ơi',
      'music_artist' => 'Như Quỳnh',
      'music_artist_id' => '32',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539004475,
      'music_last_update_time' => 1408670830,
      'music_title_search' => 'thung lam minh oi',
      'music_artist_search' => '; nhu qinh;',
      'music_album_search' => '',
      'music_composer' => 'Vũ Quốc Việt',
      'music_album' => '',
      'music_listen' => 23006,
      'music_track_id' => 0,
      'music_filename' => '1343469-b35ad746.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Đêm nằm lại nhớ mình ơi
Mình ơi nhớ thương mình nhiều
Đêm nằm lòng nghe thao thức
Không biết giờ này mình ngủ chưa?

Bao đời ruộng nắng cằn khô
Mình ơi sớm khuya nuôi mẹ già
Em nào một câu than thở...',
      'music_artist_html' => '<a href="/ca-si/Nhu-Quynh~Y3NuX2FydGlzdH4zMg==.html">Như Quỳnh</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1414484,
      'music_title_url' => 've-dau-mai-toc-nguoi-thuong~quang-le',
      'music_title' => 'Về Đâu Mái Tóc Người Thương',
      'music_artist' => 'Quang Lê',
      'music_artist_id' => '1770',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538739258,
      'music_last_update_time' => 1417422280,
      'music_title_search' => 've dau mai toc ngui thung',
      'music_artist_search' => '; quang le;',
      'music_album_search' => '',
      'music_composer' => 'Hoài Linh',
      'music_album' => '',
      'music_listen' => 845451,
      'music_track_id' => 0,
      'music_filename' => '1414484-8aeeb3fc.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Hồn lỡ sa vào đôi mắt em
Chiều nao xoã tóc ngồi bên rèm
Thầm ước nhưng nào đâu dám nói
Khép tâm tư lại thôi
Đường hoa vẫn chưa mở lối.

Đời lắm phong trần tay trắng tay
Trời đông ngại gió lùa vai g...',
      'music_artist_html' => '<a href="/ca-si/Quang-Le~Y3NuX2FydGlzdH4xNzcw.html">Quang Lê</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1009663,
      'music_title_url' => 'that-long-anh-xin-loi~wanbi-tuan-anh',
      'music_title' => 'Thật Lòng Anh Xin Lỗi',
      'music_artist' => 'Wanbi Tuấn Anh',
      'music_artist_id' => '948',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538998508,
      'music_last_update_time' => 1344841771,
      'music_title_search' => 'that long em xin loi',
      'music_artist_search' => '; wanbi tuan em;',
      'music_album_search' => '',
      'music_composer' => 'Wanbi Tuấn Anh',
      'music_album' => '',
      'music_listen' => 47270,
      'music_track_id' => 0,
      'music_filename' => '1009663-e3d5e5a5.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nhớ em thật nhiều làm anh buồn bao nhiêu
Rồi đã qua bao ngày không gặp
Anh suy nghĩ thật nhiều
Và anh chẳng muốn làm gì 
Chỉ muốn nghe thấy tiếng nói cười của em.

Dù đã cố rất nhiều, chỉ mong ngườ...',
      'music_artist_html' => '<a href="/ca-si/Wanbi-Tuan-Anh~Y3NuX2FydGlzdH45NDg=.html">Wanbi Tuấn Anh</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1182352,
      'music_title_url' => 'cam-on~dam-vinh-hung-ho-ngoc-ha-thu-m',
      'music_title' => 'Cảm Ơn',
      'music_artist' => 'Đàm Vĩnh Hưng;Hồ Ngọc Hà;Thu Minh;Lệ Quyên;Đông Nhi;Ông Cao Thắng;Thu Thuỷ;Minh Hằng;Hà Anh Tuấn;Noo Phước Thịnh;Ngô Kiến Huy;V.Music',
      'music_artist_id' => '4836;1468;2182;1662;706;849;9;447;333;1611;1013;1888',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538993801,
      'music_last_update_time' => 1386672199,
      'music_title_search' => 'cam on',
      'music_artist_search' => '; dam vinh hung; ho ngoc ha; thu minh; le qin; dong nhi; ong cao thang; thu thi; minh hang; ha em tuan; no phuc thinh; ngo kin hi; v muxic;',
      'music_album_search' => '',
      'music_composer' => 'Wanbi Tuấn Anh',
      'music_album' => '',
      'music_listen' => 175110,
      'music_track_id' => 0,
      'music_filename' => '1182352-4a8a8e44.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ngày trôi qua ngày, nhận ra quanh ta dường như biết bao điều đổi thay
Sao thời gian trôi thật mau để giờ đây tôi thầm biết được rằng
Thật hạnh phúc với những gì cuộc đời đã cho tôi.

Niềm vui nỗi b...',
      'music_artist_html' => '<a href="/ca-si/Dam-Vinh-Hung~Y3NuX2FydGlzdH40ODM2.html">Đàm Vĩnh Hưng</a>, <a href="/ca-si/Ho-Ngoc-Ha~Y3NuX2FydGlzdH4xNDY4.html">Hồ Ngọc Hà</a>, <a href="/ca-si/Thu-Minh~Y3NuX2FydGlzdH4yMTgy.html">Thu Minh</a>, <a href="/ca-si/Le-Quyen~Y3NuX2FydGlzdH4xNjYy.html">Lệ Quyên</a>, <a href="/ca-si/Dong-Nhi~Y3NuX2FydGlzdH43MDY=.html">Đông Nhi</a>, <a href="/ca-si/Ong-Cao-Thang~Y3NuX2FydGlzdH44NDk=.html">Ông Cao Thắng</a>, <a href="/ca-si/Thu-Thuy~Y3NuX2FydGlzdH45.html">Thu Thuỷ</a>, <a href="/ca-si/Minh-Hang~Y3NuX2FydGlzdH40NDc=.html">Minh Hằng</a>, <a href="/ca-si/Ha-Anh-Tuan~Y3NuX2FydGlzdH4zMzM=.html">Hà Anh Tuấn</a>, <a href="/ca-si/Noo-Phuoc-Thinh~Y3NuX2FydGlzdH4xNjEx.html">Noo Phước Thịnh</a>, <a href="/ca-si/Ngo-Kien-Huy~Y3NuX2FydGlzdH4xMDEz.html">Ngô Kiến Huy</a>, <a href="/ca-si/VMusic~Y3NuX2FydGlzdH4xODg4.html">V.Music</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1942548,
      'music_title_url' => 'tra-lai-anh~nhu-quynh',
      'music_title' => 'Trả Lại Anh',
      'music_artist' => 'Như Quỳnh',
      'music_artist_id' => '32',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538975147,
      'music_last_update_time' => 1534167918,
      'music_title_search' => 'cha lai em',
      'music_artist_search' => '; nhu qinh;',
      'music_album_search' => '',
      'music_composer' => 'Đức Quỳnh',
      'music_album' => '',
      'music_listen' => 1676,
      'music_track_id' => 0,
      'music_filename' => '1942548-f93f15e9.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Trả lại anh câu yêu mà anh đã tặng
Trả lại anh nhớ nhung mặn nồng cay đắng
Trả lại anh thư xanh, màu xanh ái ân
Dĩ vãng buồn giống nghĩa trang
Cô đơn như mộ không tên.

Trả lại anh câu yêu em, tình...',
      'music_artist_html' => '<a href="/ca-si/Nhu-Quynh~Y3NuX2FydGlzdH4zMg==.html">Như Quỳnh</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1012131,
      'music_title_url' => 'goc-khuat~dam-vinh-hung',
      'music_title' => 'Góc Khuất',
      'music_artist' => 'Đàm Vĩnh Hưng',
      'music_artist_id' => '4836',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538898336,
      'music_last_update_time' => 1345861650,
      'music_title_search' => 'goc khuat',
      'music_artist_search' => '; dam vinh hung;',
      'music_album_search' => '',
      'music_composer' => 'Trương Lê Sơn',
      'music_album' => '',
      'music_listen' => 197119,
      'music_track_id' => 0,
      'music_filename' => '1012131-ef77927a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Thế giới nơi em thuộc về 
Là một góc khuất cho anh đợi chờ
Thế giới nơi em thuộc về chỉ của riêng em.

Chuốc lấy bao nhiêu hận sầu 
Mà vẫn cứ mong em quay đầu
Chẳng lẽ yêu thương anh đây 
Không tha...',
      'music_artist_html' => '<a href="/ca-si/Dam-Vinh-Hung~Y3NuX2FydGlzdH40ODM2.html">Đàm Vĩnh Hưng</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1041782,
      'music_title_url' => 'niu-keo~noo-phuoc-thinh',
      'music_title' => 'Níu Kéo',
      'music_artist' => 'Noo Phước Thịnh',
      'music_artist_id' => '1611',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539065639,
      'music_last_update_time' => 1355106711,
      'music_title_search' => 'niu keo',
      'music_artist_search' => '; no phuc thinh;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Hoàng Tôn',
      'music_album' => '',
      'music_listen' => 25557,
      'music_track_id' => 0,
      'music_filename' => '1041782-0953f8ab.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Anh đang lê thước trong đêm mang bao yêu dấu qua thềm
Đường dài chẳng một ai với nỗi niềm tê tái
Nhưng sao đêm vẫn quá dài
Nơi đây trong anh vẫn cứ mệt nhoài cùng những nỗi đau.

I\'m sorry mah babe...',
      'music_artist_html' => '<a href="/ca-si/Noo-Phuoc-Thinh~Y3NuX2FydGlzdH4xNjEx.html">Noo Phước Thịnh</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1143535,
      'music_title_url' => 'chuyen-hoa-sim~nhu-quynh',
      'music_title' => 'Chuyện Hoa Sim',
      'music_artist' => 'Như Quỳnh',
      'music_artist_id' => '32',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538839785,
      'music_last_update_time' => 1380541464,
      'music_title_search' => 'chin hoa xim',
      'music_artist_search' => '; nhu qinh;',
      'music_album_search' => '',
      'music_composer' => 'Anh Bằng',
      'music_album' => '',
      'music_listen' => 317735,
      'music_track_id' => 0,
      'music_filename' => '1143535-dc73d6a5.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Rừng hoang đẹp nhất hoa màu tím
Chuyện tình thương nhất chuyện hoa sim
Có người con gái xuân vời vợi
Tóc còn ngăn ngắn chưa đầy búi.

Ngày xưa nàng vẫn yêu màu tím
Chiều chiều lên những đồi hoa...',
      'music_artist_html' => '<a href="/ca-si/Nhu-Quynh~Y3NuX2FydGlzdH4zMg==.html">Như Quỳnh</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1475184,
      'music_title_url' => 'mua-dong-thuong-nho~ha-thanh-xuan',
      'music_title' => 'Mùa Đông Thương Nhớ',
      'music_artist' => 'Hà Thanh Xuân',
      'music_artist_id' => '7393',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538918942,
      'music_last_update_time' => 1429932744,
      'music_title_search' => 'mua dong thung nho',
      'music_artist_search' => '; ha thanh xuan;',
      'music_album_search' => '',
      'music_composer' => 'Hùng Linh',
      'music_album' => '',
      'music_listen' => 37458,
      'music_track_id' => 0,
      'music_filename' => '1475184-096bcfa6.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Người yêu hỡi nay đã ra đi về đâu
Thuyền ra bến ta biết chốn nào tìm nhau
Muà đông đến lạnh giá con tim hận sầu
Biết làm sao đễ quên người em yêu đấu.

Người yêu hỡi em có nhớ chăng mùa đông
Chuyện...',
      'music_artist_html' => '<a href="/ca-si/Ha-Thanh-Xuan~Y3NuX2FydGlzdH43Mzkz.html">Hà Thanh Xuân</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1588605,
      'music_title_url' => 'mua-dong-nam-ay~my-huyen',
      'music_title' => 'Mùa Đông Năm Ấy',
      'music_artist' => 'Mỹ Huyền',
      'music_artist_id' => '1970',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538927595,
      'music_last_update_time' => 1448499159,
      'music_title_search' => 'mua dong 5 ai',
      'music_artist_search' => '; mi hin;',
      'music_album_search' => '',
      'music_composer' => 'Hoài Đức',
      'music_album' => '',
      'music_listen' => 6511,
      'music_track_id' => 0,
      'music_filename' => '1588605-11fa0912.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Mùa đông năm ấy sao sáng soi cuối trời
Mùa đông năm ấy con Chúa sinh xuống đời
Nhịp ca véo von bao thiên thần vang hát
Tôn thờ Ngôi Hai giáng sinh trần ai.

[ĐK1:]
Con hợp với thiên thần hoà van...',
      'music_artist_html' => '<a href="/ca-si/My-Huyen~Y3NuX2FydGlzdH4xOTcw.html">Mỹ Huyền</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1826706,
      'music_title_url' => 'mat-troi-den~cardin-nguyen-thuy-huong',
      'music_title' => 'Mặt Trời Đen',
      'music_artist' => 'Cardin Nguyễn;Thuỳ Hương',
      'music_artist_id' => '1782;1042',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538750303,
      'music_last_update_time' => 1507169673,
      'music_title_search' => 'mat choi den',
      'music_artist_search' => '; cardin ngin; thi hung;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Trung Cang',
      'music_album' => '',
      'music_listen' => 17137,
      'music_track_id' => 0,
      'music_filename' => '1826706-ee6da547.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Mặt trời đen, quá đen, đen như đời ta 
Đời hằng mong thoát đi, đi khung trời xa 
Cuộc đời như chó hoang lang thang về đêm
Cuộc tình không mấy khi nghe câu dịu êm. 

Mặt trời không muốn sáng soi cho...',
      'music_artist_html' => '<a href="/ca-si/Cardin-Nguyen~Y3NuX2FydGlzdH4xNzgy.html">Cardin Nguyễn</a>, <a href="/ca-si/Thuy-Huong~Y3NuX2FydGlzdH4xMDQy.html">Thuỳ Hương</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1004756,
      'music_title_url' => 'tinh-ve-noi-dau~thanh-bui-tata-young',
      'music_title' => 'Tình Về Nơi Đâu',
      'music_artist' => 'Thanh Bùi;Tata Young',
      'music_artist_id' => '1418;2534',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538611560,
      'music_last_update_time' => 1347350799,
      'music_title_search' => 'tinh ve noi dau',
      'music_artist_search' => '; thanh bui; tata ioung;',
      'music_album_search' => '',
      'music_composer' => 'Dương Khắc Linh; Thanh Bùi',
      'music_album' => '',
      'music_listen' => 218596,
      'music_track_id' => 0,
      'music_filename' => '1004756-82b2fa32.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '1. Bâng khuâng trong đêm thật dài
Ở nơi niềm vui đã xa
Tình mình như đang vô vọng
Cho ta thao thức đêm dài.

Đưa nhau qua cơn mộng buồn
Màn đêm càng thêm cách xa
Mình lặng im đến lúc nào
Nghe anh n...',
      'music_artist_html' => '<a href="/ca-si/Thanh-Bui~Y3NuX2FydGlzdH4xNDE4.html">Thanh Bùi</a>, <a href="/ca-si/Tata-Young~Y3NuX2FydGlzdH4yNTM0.html">Tata Young</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1013691,
      'music_title_url' => 'nguoi-dung-sau-hanh-phuc~pham-quynh-anh',
      'music_title' => 'Người Đứng Sau Hạnh Phúc',
      'music_artist' => 'Phạm Quỳnh Anh',
      'music_artist_id' => '189',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538547799,
      'music_last_update_time' => 1347288752,
      'music_title_search' => 'ngui dung xau hanh phuc',
      'music_artist_search' => '; pham qinh em;',
      'music_album_search' => '',
      'music_composer' => 'Hamlet Trương',
      'music_album' => '',
      'music_listen' => 50580,
      'music_track_id' => 0,
      'music_filename' => '1013691-284fc665.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Tình yêu đó em chỉ vừa đi tới
Thì em biết em sẽ khổ đau rất nhiều
Mà tại sao em không thể ngăn yêu
Con tim nào đã rất buồn.

Lòng tự trách em chỉ là người đứng sau
Cười lặng lẽ sau lưng hạnh phúc c...',
      'music_artist_html' => '<a href="/ca-si/Pham-Quynh-Anh~Y3NuX2FydGlzdH4xODk=.html">Phạm Quỳnh Anh</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1014374,
      'music_title_url' => 'neu-khong-phai-la-em~the-men',
      'music_title' => 'Nếu Không Phải Là Em',
      'music_artist' => 'The Men',
      'music_artist_id' => '1881',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538928702,
      'music_last_update_time' => 1346989763,
      'music_title_search' => 'neu khong phai la em',
      'music_artist_search' => '; the men;',
      'music_album_search' => '',
      'music_composer' => 'Phạm Việt Hoàng',
      'music_album' => '',
      'music_listen' => 298488,
      'music_track_id' => 0,
      'music_filename' => '1014374-1be9418e.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Từng mùa thu cứ trôi âm thầm 
Một mình anh trách than đành lỡ lầm 
Tháng năm ngày xưa êm đềm đã đi về đâu đi về đâu 
Còn lại nơi đây nỗi nhớ em.

Từng ngày anh vẫn qua con phố này
Tìm nụ cười ai rạ...',
      'music_artist_html' => '<a href="/ca-si/The-Men~Y3NuX2FydGlzdH4xODgx.html">The Men</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1022181,
      'music_title_url' => 'xa-em~noo-phuoc-thinh',
      'music_title' => 'Xa Em',
      'music_artist' => 'Noo Phước Thịnh',
      'music_artist_id' => '1611',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538971674,
      'music_last_update_time' => 1349427802,
      'music_title_search' => 'xa em',
      'music_artist_search' => '; no phuc thinh;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Đức Tùng',
      'music_album' => '',
      'music_listen' => 147462,
      'music_track_id' => 0,
      'music_filename' => '1022181-75043010.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Những cơn gió khi mùa đông vừa sang
Chiếc lá úa trên nhành cây đã tan về xa ngút ngàn
Cô đơn quá nên thôi cho mình đành buông lơi.

Anh ngồi đây, con đường xưa chờ em
Những cơn gió như lạnh sâu trá...',
      'music_artist_html' => '<a href="/ca-si/Noo-Phuoc-Thinh~Y3NuX2FydGlzdH4xNjEx.html">Noo Phước Thịnh</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1031351,
      'music_title_url' => 'tinh-co~emily-lil-knight-justatee',
      'music_title' => 'Tình Cờ',
      'music_artist' => 'Emily;Lil\' Knight;JustaTee',
      'music_artist_id' => '1963;395;2326',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538913021,
      'music_last_update_time' => 1352777792,
      'music_title_search' => 'tinh co',
      'music_artist_search' => '; emili; lk; juxtate;',
      'music_album_search' => '',
      'music_composer' => 'LK',
      'music_album' => '',
      'music_listen' => 89874,
      'music_track_id' => 0,
      'music_filename' => '1031351-5672a2bf.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Có những lúc chuyện thật tình cờ khi hai người ngồi thật lâu 
Mong chờ ai đến khi phố vắng người 
Bối rối gặp một nụ cười khi anh ngồi lại gần em 
Ta làm quen và quên đi thời gian cứ trôi.

Xin cho...',
      'music_artist_html' => '<a href="/ca-si/Emily~Y3NuX2FydGlzdH4xOTYz.html">Emily</a>, <a href="/ca-si/Lil-Knight~Y3NuX2FydGlzdH4zOTU=.html">Lil\' Knight</a>, <a href="/ca-si/JustaTee~Y3NuX2FydGlzdH4yMzI2.html">JustaTee</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1039469,
      'music_title_url' => 'nhat-ky-cua-me-live~hien-thuc',
      'music_title' => 'Nhật Ký Của Mẹ (Live)',
      'music_artist' => 'Hiền Thục',
      'music_artist_id' => '437',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538454050,
      'music_last_update_time' => 1353550989,
      'music_title_search' => 'nhat ki cua me; live',
      'music_artist_search' => '; hin thuc;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Văn Chung',
      'music_album' => '',
      'music_listen' => 44893,
      'music_track_id' => 0,
      'music_filename' => '1039469-e3455ad6.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Bao ngày Mẹ ngóng, bao ngày Mẹ trông
Bao ngày Mẹ mong con chào đời
Ấp trong đáy lòng, có chăng tiếng cười
Của một hài nhi đang lớn dần?

Mẹ chợt tỉnh giấc, và Mẹ nhìn thấy
Hình hài nhỏ bé như th...',
      'music_artist_html' => '<a href="/ca-si/Hien-Thuc~Y3NuX2FydGlzdH40Mzc=.html">Hiền Thục</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1103121,
      'music_title_url' => 'xin-hay-roi-xa~ho-hoang-yen',
      'music_title' => 'Xin Hãy Rời Xa',
      'music_artist' => 'Hồ Hoàng Yến',
      'music_artist_id' => '7591',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539019743,
      'music_last_update_time' => 1371520658,
      'music_title_search' => 'xin hai roi xa',
      'music_artist_search' => '; ho hoang in;',
      'music_album_search' => '',
      'music_composer' => 'Vũ Tuấn Đức',
      'music_album' => '',
      'music_listen' => 91605,
      'music_track_id' => 0,
      'music_filename' => '1103121-07e832db.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Khi đã giã từ, người yêu ơi xin hãy rời xa
Cho bao ước mơ theo dòng đời trôi dần sẽ phai mờ
Để khi em đến cho ta đắm say, rồi mai xa cách ta thêm đắng cay
Này người tình hỡi, cho ta sầu với những n...',
      'music_artist_html' => '<a href="/ca-si/Ho-Hoang-Yen~Y3NuX2FydGlzdH43NTkx.html">Hồ Hoàng Yến</a>',
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1064389,
      'music_title_url' => 'titanium-piano-cello-cover~the-piano-guys',
      'music_title' => 'Titanium (Piano, Cello Cover)',
      'music_artist' => 'The Piano Guys',
      'music_artist_id' => '3802',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538985416,
      'music_last_update_time' => 1360026677,
      'music_title_search' => 'titanium; piano celo cover',
      'music_artist_search' => '; the piano gix;',
      'music_album_search' => '',
      'music_composer' => 'Sia Furler; David Guetta; Giorgio Tuinfort; Nick Van De Wall',
      'music_album' => '',
      'music_listen' => 32587,
      'music_track_id' => 0,
      'music_filename' => '1064389-53bb2aad.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1069711,
      'music_title_url' => 'dont-you-worry-child~swedish-house-mafia-john-martin',
      'music_title' => 'Don\'t You Worry Child',
      'music_artist' => 'Swedish House Mafia;John Martin',
      'music_artist_id' => '24410;26312',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538862607,
      'music_last_update_time' => 1470908492,
      'music_title_search' => 'don t iou wori child',
      'music_artist_search' => '; xwedith houxe mafia; john martin;',
      'music_album_search' => '',
      'music_composer' => 'Axel Hedfors; Steve Angello; Sebastian Ingrosso; John Martin Lindström; Michel Zitron',
      'music_album' => '',
      'music_listen' => 7995,
      'music_track_id' => 0,
      'music_filename' => '1069711-5a8ab3cd.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. There was a time, I used to look into my father\'s eyes
In a happy home, I was a king I had a gold throne
Those days are gone, now the memories are on the wall
I hear the sounds from the places w...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1064428,
      'music_title_url' => 'secrets-cello-orchestral-cover~the-piano-guys',
      'music_title' => 'Secrets (Cello, Orchestral Cover)',
      'music_artist' => 'The Piano Guys',
      'music_artist_id' => '3802',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538937809,
      'music_last_update_time' => 1360026758,
      'music_title_search' => 'xecretx; celo orchexchal cover',
      'music_artist_search' => '; the piano gix;',
      'music_album_search' => '',
      'music_composer' => 'Ryan Tedder',
      'music_album' => '',
      'music_listen' => 7326,
      'music_track_id' => 0,
      'music_filename' => '1064428-cae5651a.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1073729,
      'music_title_url' => 'what-could-have-been-love~aerosmith',
      'music_title' => 'What Could Have Been Love',
      'music_artist' => 'Aerosmith',
      'music_artist_id' => '2655',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538941174,
      'music_last_update_time' => 1364782141,
      'music_title_search' => 'what could have ben love',
      'music_artist_search' => '; aeroxmith;',
      'music_album_search' => '',
      'music_composer' => 'Marti Frederiksen; Russ Irwin; Steven Tyler',
      'music_album' => '',
      'music_listen' => 3797,
      'music_track_id' => 0,
      'music_filename' => '1073729-032adb45.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'I wake up and wonder how everything went wrong
Am I the one to blame
I gave up and left you for a nowhere-bound train
Now that train has come and gone
I close my eyes and see you lying in my bed
An...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1087389,
      'music_title_url' => 'tchu-tchu-tcha~pitbull-enrique-iglesias',
      'music_title' => 'Tchu Tchu Tcha',
      'music_artist' => 'Pitbull;Enrique Iglesias',
      'music_artist_id' => '1814;604',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538650124,
      'music_last_update_time' => 1368067099,
      'music_title_search' => 'tchu tchu tcha',
      'music_artist_search' => '; pitbul; enrique iglexiax;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8143,
      'music_track_id' => 0,
      'music_filename' => '1087389-88f43f13.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Caperucita Roja, a donde tu va?
Pa lavante la thcu tchu tchu tcha
Wow como ha cambiado este cuento
Pero me gusta

[Chorus:]
I\'m picking you, you what I want
I want your thcu thca tcha tchu tchu thc...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1099936,
      'music_title_url' => 'windows-down~big-time-rush',
      'music_title' => 'Windows Down',
      'music_artist' => 'Big Time Rush',
      'music_artist_id' => '2264',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538542111,
      'music_last_update_time' => 1370831991,
      'music_title_search' => 'windowx down',
      'music_artist_search' => '; big time ruth;',
      'music_album_search' => '',
      'music_composer' => 'Bei Maejor; Alex James; Damon Albarn; Dave Rowntree; Graham Coxon; Matt Squire; Matthew Musto; Mike Posner',
      'music_album' => '',
      'music_listen' => 10694,
      'music_track_id' => 0,
      'music_filename' => '1099936-858532bd.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Throw it up, woo hoo!
Woo hoo! [x2] Yeah, yeah.
Woo hoo! Yeah, yeah.

1. You\'re pretty baby, but you know that
Wish I could bring ya, across the map, yeah
I can feel it in the air that it\'s on toni...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1143359,
      'music_title_url' => '10000-reasons-bless-the-lord~matt-redman',
      'music_title' => '10,000 Reasons (Bless The Lord)',
      'music_artist' => 'Matt Redman',
      'music_artist_id' => '35229',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538884773,
      'music_last_update_time' => 1380541654,
      'music_title_search' => '10 0 reaxonx; blex the lord',
      'music_artist_search' => '; mat redman;',
      'music_album_search' => '',
      'music_composer' => 'Jonas Myrin; Matt Redman',
      'music_album' => '',
      'music_listen' => 4888,
      'music_track_id' => 0,
      'music_filename' => '1143359-c3b7e481.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Chorus:]
Bless the Lord, O my soul
O my soul
Worship His holy name
Sing like never before
O my soul
I\'ll worship Your holy name.

1. The sun comes up, it\'s a new day dawning
It\'s time to sing Your...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1502039,
      'music_title_url' => 'follow-me~muse',
      'music_title' => 'Follow Me',
      'music_artist' => 'Muse',
      'music_artist_id' => '8361',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538507338,
      'music_last_update_time' => 1433469196,
      'music_title_search' => 'folow me',
      'music_artist_search' => '; muxe;',
      'music_album_search' => '',
      'music_composer' => 'Matthew Bellamy',
      'music_album' => '',
      'music_listen' => 876,
      'music_track_id' => 0,
      'music_filename' => '1502039-044b818c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'When darkness falls
And surrounds you
When you fall down
When you\'re scared
And you\'re lost
Be brave
I\'m coming to hold you now
When all your strength has gone 
And you feel wrong
Like your life ha...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1613504,
      'music_title_url' => 'rolling-stone-explicit~the-weeknd',
      'music_title' => 'Rolling Stone (Explicit)',
      'music_artist' => 'The Weeknd',
      'music_artist_id' => '14618',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505092,
      'music_last_update_time' => 1452817148,
      'music_title_search' => 'roling xtone; explicit',
      'music_artist_search' => '; the weknd;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 445,
      'music_track_id' => 1,
      'music_filename' => '1613504-c7ae603b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Now your thinkin\' bout it
Girl your thinkin\' bout it
What we got here
How we fuckin\' got here
They recognize
They just recognize
I\'m in a life without a home so this recognitions not enough
I don\'t...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1062376,
      'music_title_url' => 'good-time~owl-city-carly-rae-jepsen',
      'music_title' => 'Good Time',
      'music_artist' => 'Owl City;Carly Rae Jepsen',
      'music_artist_id' => '1087;3072',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539021810,
      'music_last_update_time' => 1491645718,
      'music_title_search' => 'god time',
      'music_artist_search' => '; owl citi; carli rae jepxen;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 73891,
      'music_track_id' => 0,
      'music_filename' => '1062376-f5c5ce65.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Woah-oh-oh-oh
It\'s always a good time
Woah-oh-oh-oh
It\'s always a good time.

1. Woke up on the right side of the bed
What\'s up with this Prince song inside my head
Hands up if you\'re down to get d...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1062818,
      'music_title_url' => 'charlie-brown~coldplay',
      'music_title' => 'Charlie Brown',
      'music_artist' => 'Coldplay',
      'music_artist_id' => '6805',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538467908,
      'music_last_update_time' => 1493889304,
      'music_title_search' => 'charli brown',
      'music_artist_search' => '; coldplai;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2755,
      'music_track_id' => 0,
      'music_filename' => '1062818-279745d2.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Wooh, ooh ooh ooh

Stole a key
Took a car downtown where the lost boys meet
Took a car downtown and took what they offered me
To set me free
I saw the lights go down at the end of the scene
I saw t...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1179555,
      'music_title_url' => 'pop-danthology-2012~daniel-kim',
      'music_title' => 'Pop Danthology 2012',
      'music_artist' => 'Daniel Kim',
      'music_artist_id' => '27073',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538811564,
      'music_last_update_time' => 1386295254,
      'music_title_search' => 'pop danthologi 2012',
      'music_artist_search' => '; danil kim;',
      'music_album_search' => '',
      'music_composer' => 'Daniel Kim',
      'music_album' => '',
      'music_listen' => 11712,
      'music_track_id' => 0,
      'music_filename' => '1179555-d239a6c3.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Adele - &quot;Set Fire To The Rain&quot;
2. Adele - &quot;Skyfall&quot;
3. Alex Clare - &quot;Too Close&quot;
4. Calvin Harris feat. Ne-Yo - &quot;Let\'s Go&quot;
5. Carly Rae Jepson - &quot;Call...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 311598,
      'music_title_url' => 'dance-again~jennifer-lopez-pitbull',
      'music_title' => 'Dance Again',
      'music_artist' => 'Jennifer Lopez;Pitbull',
      'music_artist_id' => '70;1814',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1362387627,
      'music_last_update_time' => 1350523907,
      'music_title_search' => 'dance again',
      'music_artist_search' => '; jenifer lopez; pitbul;',
      'music_album_search' => '',
      'music_composer' => 'Jennifer Lopez',
      'music_album' => '',
      'music_listen' => 12711,
      'music_track_id' => 0,
      'music_filename' => '311598-c2ecfcb5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Dance, yes (RedOne)
Love, next
Dance, yes (J.Lo)
Love, next.

Shimmy Shimmy yah, Shimmer yam
Shimmer yay
I\'m a ol\' dirty dog all day
No way Jose
Your girl only go one way, ay mi madre
You should ch...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 412136,
      'music_title_url' => 'goin-in~jennifer-lopez-flo-rida',
      'music_title' => 'Goin\' In',
      'music_artist' => 'Jennifer Lopez;Flo Rida',
      'music_artist_id' => '70;737',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525446144,
      'music_last_update_time' => 1478591806,
      'music_title_search' => 'goin in',
      'music_artist_search' => '; jenifer lopez; flo rida;',
      'music_album_search' => '',
      'music_composer' => 'Jennifer Lopez',
      'music_album' => '',
      'music_listen' => 65338,
      'music_track_id' => 0,
      'music_filename' => '412136-68e5d7df.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Tonight feels like we can do anything we like, oh
Tonight feels like the best night of my life
I\'m goin\' in, i\'m goin\' in, i\'m goin\' in
I\'m goin\' in, i\'m goin\' in, in in in in

(put your, put your...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 412624,
      'music_title_url' => 'boyfriend-as-long-as-you-love-me-teen-choice-awards-2012~justin-bieber',
      'music_title' => 'Boyfriend &amp; As Long As you Love me (Teen Choice Awards 2012)',
      'music_artist' => 'Justin Bieber',
      'music_artist_id' => '1798',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1524929292,
      'music_last_update_time' => 1355200708,
      'music_title_search' => 'boifrind ax long ax iou love me; ten choice awardx 2012',
      'music_artist_search' => '; juxtin biber;',
      'music_album_search' => '',
      'music_composer' => 'Justin Bieber',
      'music_album' => '',
      'music_listen' => 9897,
      'music_track_id' => 0,
      'music_filename' => '412624-af7fc691.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Boyfriend]

[Verse 1]
If I was your boyfriend, I\'d never let you go
I can take you places you ain\'t never been before
Baby, take a chance or you\'ll never ever know
I got money in my hands that I\'d...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 412625,
      'music_title_url' => 'good-time~owl-city-carly-rae-jepsen',
      'music_title' => 'Good Time',
      'music_artist' => 'Owl City;Carly Rae Jepsen',
      'music_artist_id' => '1087;3072',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1386948405,
      'music_last_update_time' => 1350450138,
      'music_title_search' => 'god time',
      'music_artist_search' => '; owl citi; carli rae jepxen;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 20228,
      'music_track_id' => 0,
      'music_filename' => '412625-75fce153.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Woah-oh-oh-oh
It\'s always a good time
Woah-oh-oh-oh
It\'s always a good time.

1. Woke up on the right side of the bed
What\'s up with this Prince song inside my head
Hands up if you\'re down to get d...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 418161,
      'music_title_url' => 'we-are-never-ever-getting-back-together~taylor-swift',
      'music_title' => 'We Are Never Ever Getting Back Together',
      'music_artist' => 'Taylor Swift',
      'music_artist_id' => '1117',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1365596234,
      'music_last_update_time' => 1350523531,
      'music_title_search' => 'we are never ever geting back together',
      'music_artist_search' => '; tailor xwift;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 14666,
      'music_track_id' => 0,
      'music_filename' => '418161-6726638e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I remember when we broke up the first time
Saying, &quot;This is it, I\'ve had enough,&quot; \'cause like
We hadn\'t seen each other in a month
When you said you needed space. What?

Then you come...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 424984,
      'music_title_url' => 'forever-and-one~dinh-huong',
      'music_title' => 'Forever And One',
      'music_artist' => 'Đinh Hương',
      'music_artist_id' => '2920',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531166651,
      'music_last_update_time' => 1471340223,
      'music_title_search' => 'forever and 1',
      'music_artist_search' => '; dinh hung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 24401,
      'music_track_id' => 0,
      'music_filename' => '424984-a59b6bf3.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. What can I do?
Will I be getting through?
Now that I must try to leave it all behind
Did you see what you have done to me?
So hard to justify
Slowly it\'s passing by.

[Chorus:]
Forever and one I...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 425326,
      'music_title_url' => 'beauty-and-a-beat~justin-bieber-nicki-minaj',
      'music_title' => 'Beauty And A Beat',
      'music_artist' => 'Justin Bieber;Nicki Minaj',
      'music_artist_id' => '1798;2664',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1369490066,
      'music_last_update_time' => 1350964398,
      'music_title_search' => 'beauti and a beat',
      'music_artist_search' => '; juxtin biber; nicki minaj;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 35338,
      'music_track_id' => 0,
      'music_filename' => '425326-39240b71.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Yeah
Young Money
Nicki Minaj
Justin.

1. Show you off
Tonight I wanna show you off (aye,aye,aye)
What you got
A billion could\'ve never bought (aye,aye,aye).

We gonna party like it\'s 3012 tonight
I...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1005446,
      'music_title_url' => 'hold-you-down~suboi-thai-viet-g',
      'music_title' => 'Hold You Down',
      'music_artist' => 'Suboi;Thái Việt G',
      'music_artist_id' => '2094;13096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496010884,
      'music_last_update_time' => 1338863621,
      'music_title_search' => 'hold iou down',
      'music_artist_search' => '; xuboi; thai vit g;',
      'music_album_search' => '',
      'music_composer' => 'Thái Việt G',
      'music_album' => '',
      'music_listen' => 9086,
      'music_track_id' => 0,
      'music_filename' => '1005446-daedc47f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Chorus:]
When time gets hard
Just run into my arms right now
Cuz baby imma hold you down
Imma hold you down [x4].

When time gets hard
Just run into my arms right now
Cuz baby imma hold you down
I...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1064389,
      'music_title_url' => 'titanium-piano-cello-cover~the-piano-guys',
      'music_title' => 'Titanium (Piano, Cello Cover)',
      'music_artist' => 'The Piano Guys',
      'music_artist_id' => '3802',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538985416,
      'music_last_update_time' => 1360026677,
      'music_title_search' => 'titanium; piano celo cover',
      'music_artist_search' => '; the piano gix;',
      'music_album_search' => '',
      'music_composer' => 'Sia Furler; David Guetta; Giorgio Tuinfort; Nick Van De Wall',
      'music_album' => '',
      'music_listen' => 32587,
      'music_track_id' => 0,
      'music_filename' => '1064389-53bb2aad.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/The-Piano-Guys~Y3NuX2FydGlzdH4zODAy.html">The Piano Guys</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1069711,
      'music_title_url' => 'dont-you-worry-child~swedish-house-mafia-john-martin',
      'music_title' => 'Don\'t You Worry Child',
      'music_artist' => 'Swedish House Mafia;John Martin',
      'music_artist_id' => '24410;26312',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538862607,
      'music_last_update_time' => 1470908492,
      'music_title_search' => 'don t iou wori child',
      'music_artist_search' => '; xwedith houxe mafia; john martin;',
      'music_album_search' => '',
      'music_composer' => 'Axel Hedfors; Steve Angello; Sebastian Ingrosso; John Martin Lindström; Michel Zitron',
      'music_album' => '',
      'music_listen' => 7995,
      'music_track_id' => 0,
      'music_filename' => '1069711-5a8ab3cd.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. There was a time, I used to look into my father\'s eyes
In a happy home, I was a king I had a gold throne
Those days are gone, now the memories are on the wall
I hear the sounds from the places w...',
      'music_artist_html' => '<a href="/ca-si/Swedish-House-Mafia~Y3NuX2FydGlzdH4yNDQxMA==.html">Swedish House Mafia</a>, <a href="/ca-si/John-Martin~Y3NuX2FydGlzdH4yNjMxMg==.html">John Martin</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1064428,
      'music_title_url' => 'secrets-cello-orchestral-cover~the-piano-guys',
      'music_title' => 'Secrets (Cello, Orchestral Cover)',
      'music_artist' => 'The Piano Guys',
      'music_artist_id' => '3802',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538937809,
      'music_last_update_time' => 1360026758,
      'music_title_search' => 'xecretx; celo orchexchal cover',
      'music_artist_search' => '; the piano gix;',
      'music_album_search' => '',
      'music_composer' => 'Ryan Tedder',
      'music_album' => '',
      'music_listen' => 7326,
      'music_track_id' => 0,
      'music_filename' => '1064428-cae5651a.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/The-Piano-Guys~Y3NuX2FydGlzdH4zODAy.html">The Piano Guys</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1073729,
      'music_title_url' => 'what-could-have-been-love~aerosmith',
      'music_title' => 'What Could Have Been Love',
      'music_artist' => 'Aerosmith',
      'music_artist_id' => '2655',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538941174,
      'music_last_update_time' => 1364782141,
      'music_title_search' => 'what could have ben love',
      'music_artist_search' => '; aeroxmith;',
      'music_album_search' => '',
      'music_composer' => 'Marti Frederiksen; Russ Irwin; Steven Tyler',
      'music_album' => '',
      'music_listen' => 3797,
      'music_track_id' => 0,
      'music_filename' => '1073729-032adb45.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'I wake up and wonder how everything went wrong
Am I the one to blame
I gave up and left you for a nowhere-bound train
Now that train has come and gone
I close my eyes and see you lying in my bed
An...',
      'music_artist_html' => '<a href="/ca-si/Aerosmith~Y3NuX2FydGlzdH4yNjU1.html">Aerosmith</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1087389,
      'music_title_url' => 'tchu-tchu-tcha~pitbull-enrique-iglesias',
      'music_title' => 'Tchu Tchu Tcha',
      'music_artist' => 'Pitbull;Enrique Iglesias',
      'music_artist_id' => '1814;604',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538650124,
      'music_last_update_time' => 1368067099,
      'music_title_search' => 'tchu tchu tcha',
      'music_artist_search' => '; pitbul; enrique iglexiax;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8143,
      'music_track_id' => 0,
      'music_filename' => '1087389-88f43f13.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Caperucita Roja, a donde tu va?
Pa lavante la thcu tchu tchu tcha
Wow como ha cambiado este cuento
Pero me gusta

[Chorus:]
I\'m picking you, you what I want
I want your thcu thca tcha tchu tchu thc...',
      'music_artist_html' => '<a href="/ca-si/Pitbull~Y3NuX2FydGlzdH4xODE0.html">Pitbull</a>, <a href="/ca-si/Enrique-Iglesias~Y3NuX2FydGlzdH42MDQ=.html">Enrique Iglesias</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1099936,
      'music_title_url' => 'windows-down~big-time-rush',
      'music_title' => 'Windows Down',
      'music_artist' => 'Big Time Rush',
      'music_artist_id' => '2264',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538542111,
      'music_last_update_time' => 1370831991,
      'music_title_search' => 'windowx down',
      'music_artist_search' => '; big time ruth;',
      'music_album_search' => '',
      'music_composer' => 'Bei Maejor; Alex James; Damon Albarn; Dave Rowntree; Graham Coxon; Matt Squire; Matthew Musto; Mike Posner',
      'music_album' => '',
      'music_listen' => 10694,
      'music_track_id' => 0,
      'music_filename' => '1099936-858532bd.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Throw it up, woo hoo!
Woo hoo! [x2] Yeah, yeah.
Woo hoo! Yeah, yeah.

1. You\'re pretty baby, but you know that
Wish I could bring ya, across the map, yeah
I can feel it in the air that it\'s on toni...',
      'music_artist_html' => '<a href="/ca-si/Big-Time-Rush~Y3NuX2FydGlzdH4yMjY0.html">Big Time Rush</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1143359,
      'music_title_url' => '10000-reasons-bless-the-lord~matt-redman',
      'music_title' => '10,000 Reasons (Bless The Lord)',
      'music_artist' => 'Matt Redman',
      'music_artist_id' => '35229',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538884773,
      'music_last_update_time' => 1380541654,
      'music_title_search' => '10 0 reaxonx; blex the lord',
      'music_artist_search' => '; mat redman;',
      'music_album_search' => '',
      'music_composer' => 'Jonas Myrin; Matt Redman',
      'music_album' => '',
      'music_listen' => 4888,
      'music_track_id' => 0,
      'music_filename' => '1143359-c3b7e481.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Chorus:]
Bless the Lord, O my soul
O my soul
Worship His holy name
Sing like never before
O my soul
I\'ll worship Your holy name.

1. The sun comes up, it\'s a new day dawning
It\'s time to sing Your...',
      'music_artist_html' => '<a href="/ca-si/Matt-Redman~Y3NuX2FydGlzdH4zNTIyOQ==.html">Matt Redman</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1502039,
      'music_title_url' => 'follow-me~muse',
      'music_title' => 'Follow Me',
      'music_artist' => 'Muse',
      'music_artist_id' => '8361',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538507338,
      'music_last_update_time' => 1433469196,
      'music_title_search' => 'folow me',
      'music_artist_search' => '; muxe;',
      'music_album_search' => '',
      'music_composer' => 'Matthew Bellamy',
      'music_album' => '',
      'music_listen' => 876,
      'music_track_id' => 0,
      'music_filename' => '1502039-044b818c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'When darkness falls
And surrounds you
When you fall down
When you\'re scared
And you\'re lost
Be brave
I\'m coming to hold you now
When all your strength has gone 
And you feel wrong
Like your life ha...',
      'music_artist_html' => '<a href="/ca-si/Muse~Y3NuX2FydGlzdH44MzYx.html">Muse</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1613504,
      'music_title_url' => 'rolling-stone-explicit~the-weeknd',
      'music_title' => 'Rolling Stone (Explicit)',
      'music_artist' => 'The Weeknd',
      'music_artist_id' => '14618',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505092,
      'music_last_update_time' => 1452817148,
      'music_title_search' => 'roling xtone; explicit',
      'music_artist_search' => '; the weknd;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 445,
      'music_track_id' => 1,
      'music_filename' => '1613504-c7ae603b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Now your thinkin\' bout it
Girl your thinkin\' bout it
What we got here
How we fuckin\' got here
They recognize
They just recognize
I\'m in a life without a home so this recognitions not enough
I don\'t...',
      'music_artist_html' => '<a href="/ca-si/The-Weeknd~Y3NuX2FydGlzdH4xNDYxOA==.html">The Weeknd</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1062376,
      'music_title_url' => 'good-time~owl-city-carly-rae-jepsen',
      'music_title' => 'Good Time',
      'music_artist' => 'Owl City;Carly Rae Jepsen',
      'music_artist_id' => '1087;3072',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539021810,
      'music_last_update_time' => 1491645718,
      'music_title_search' => 'god time',
      'music_artist_search' => '; owl citi; carli rae jepxen;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 73891,
      'music_track_id' => 0,
      'music_filename' => '1062376-f5c5ce65.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Woah-oh-oh-oh
It\'s always a good time
Woah-oh-oh-oh
It\'s always a good time.

1. Woke up on the right side of the bed
What\'s up with this Prince song inside my head
Hands up if you\'re down to get d...',
      'music_artist_html' => '<a href="/ca-si/Owl-City~Y3NuX2FydGlzdH4xMDg3.html">Owl City</a>, <a href="/ca-si/Carly-Rae-Jepsen~Y3NuX2FydGlzdH4zMDcy.html">Carly Rae Jepsen</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1062818,
      'music_title_url' => 'charlie-brown~coldplay',
      'music_title' => 'Charlie Brown',
      'music_artist' => 'Coldplay',
      'music_artist_id' => '6805',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538467908,
      'music_last_update_time' => 1493889304,
      'music_title_search' => 'charli brown',
      'music_artist_search' => '; coldplai;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2755,
      'music_track_id' => 0,
      'music_filename' => '1062818-279745d2.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Wooh, ooh ooh ooh

Stole a key
Took a car downtown where the lost boys meet
Took a car downtown and took what they offered me
To set me free
I saw the lights go down at the end of the scene
I saw t...',
      'music_artist_html' => '<a href="/ca-si/Coldplay~Y3NuX2FydGlzdH42ODA1.html">Coldplay</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1179555,
      'music_title_url' => 'pop-danthology-2012~daniel-kim',
      'music_title' => 'Pop Danthology 2012',
      'music_artist' => 'Daniel Kim',
      'music_artist_id' => '27073',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538811564,
      'music_last_update_time' => 1386295254,
      'music_title_search' => 'pop danthologi 2012',
      'music_artist_search' => '; danil kim;',
      'music_album_search' => '',
      'music_composer' => 'Daniel Kim',
      'music_album' => '',
      'music_listen' => 11712,
      'music_track_id' => 0,
      'music_filename' => '1179555-d239a6c3.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Adele - &quot;Set Fire To The Rain&quot;
2. Adele - &quot;Skyfall&quot;
3. Alex Clare - &quot;Too Close&quot;
4. Calvin Harris feat. Ne-Yo - &quot;Let\'s Go&quot;
5. Carly Rae Jepson - &quot;Call...',
      'music_artist_html' => '<a href="/ca-si/Daniel-Kim~Y3NuX2FydGlzdH4yNzA3Mw==.html">Daniel Kim</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 311598,
      'music_title_url' => 'dance-again~jennifer-lopez-pitbull',
      'music_title' => 'Dance Again',
      'music_artist' => 'Jennifer Lopez;Pitbull',
      'music_artist_id' => '70;1814',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1362387627,
      'music_last_update_time' => 1350523907,
      'music_title_search' => 'dance again',
      'music_artist_search' => '; jenifer lopez; pitbul;',
      'music_album_search' => '',
      'music_composer' => 'Jennifer Lopez',
      'music_album' => '',
      'music_listen' => 12711,
      'music_track_id' => 0,
      'music_filename' => '311598-c2ecfcb5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Dance, yes (RedOne)
Love, next
Dance, yes (J.Lo)
Love, next.

Shimmy Shimmy yah, Shimmer yam
Shimmer yay
I\'m a ol\' dirty dog all day
No way Jose
Your girl only go one way, ay mi madre
You should ch...',
      'music_artist_html' => '<a href="/ca-si/Jennifer-Lopez~Y3NuX2FydGlzdH43MA==.html">Jennifer Lopez</a>, <a href="/ca-si/Pitbull~Y3NuX2FydGlzdH4xODE0.html">Pitbull</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 412136,
      'music_title_url' => 'goin-in~jennifer-lopez-flo-rida',
      'music_title' => 'Goin\' In',
      'music_artist' => 'Jennifer Lopez;Flo Rida',
      'music_artist_id' => '70;737',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525446144,
      'music_last_update_time' => 1478591806,
      'music_title_search' => 'goin in',
      'music_artist_search' => '; jenifer lopez; flo rida;',
      'music_album_search' => '',
      'music_composer' => 'Jennifer Lopez',
      'music_album' => '',
      'music_listen' => 65338,
      'music_track_id' => 0,
      'music_filename' => '412136-68e5d7df.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Tonight feels like we can do anything we like, oh
Tonight feels like the best night of my life
I\'m goin\' in, i\'m goin\' in, i\'m goin\' in
I\'m goin\' in, i\'m goin\' in, in in in in

(put your, put your...',
      'music_artist_html' => '<a href="/ca-si/Jennifer-Lopez~Y3NuX2FydGlzdH43MA==.html">Jennifer Lopez</a>, <a href="/ca-si/Flo-Rida~Y3NuX2FydGlzdH43Mzc=.html">Flo Rida</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 412624,
      'music_title_url' => 'boyfriend-as-long-as-you-love-me-teen-choice-awards-2012~justin-bieber',
      'music_title' => 'Boyfriend &amp; As Long As you Love me (Teen Choice Awards 2012)',
      'music_artist' => 'Justin Bieber',
      'music_artist_id' => '1798',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1524929292,
      'music_last_update_time' => 1355200708,
      'music_title_search' => 'boifrind ax long ax iou love me; ten choice awardx 2012',
      'music_artist_search' => '; juxtin biber;',
      'music_album_search' => '',
      'music_composer' => 'Justin Bieber',
      'music_album' => '',
      'music_listen' => 9897,
      'music_track_id' => 0,
      'music_filename' => '412624-af7fc691.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Boyfriend]

[Verse 1]
If I was your boyfriend, I\'d never let you go
I can take you places you ain\'t never been before
Baby, take a chance or you\'ll never ever know
I got money in my hands that I\'d...',
      'music_artist_html' => '<a href="/ca-si/Justin-Bieber~Y3NuX2FydGlzdH4xNzk4.html">Justin Bieber</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 412625,
      'music_title_url' => 'good-time~owl-city-carly-rae-jepsen',
      'music_title' => 'Good Time',
      'music_artist' => 'Owl City;Carly Rae Jepsen',
      'music_artist_id' => '1087;3072',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1386948405,
      'music_last_update_time' => 1350450138,
      'music_title_search' => 'god time',
      'music_artist_search' => '; owl citi; carli rae jepxen;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 20228,
      'music_track_id' => 0,
      'music_filename' => '412625-75fce153.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Woah-oh-oh-oh
It\'s always a good time
Woah-oh-oh-oh
It\'s always a good time.

1. Woke up on the right side of the bed
What\'s up with this Prince song inside my head
Hands up if you\'re down to get d...',
      'music_artist_html' => '<a href="/ca-si/Owl-City~Y3NuX2FydGlzdH4xMDg3.html">Owl City</a>, <a href="/ca-si/Carly-Rae-Jepsen~Y3NuX2FydGlzdH4zMDcy.html">Carly Rae Jepsen</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 418161,
      'music_title_url' => 'we-are-never-ever-getting-back-together~taylor-swift',
      'music_title' => 'We Are Never Ever Getting Back Together',
      'music_artist' => 'Taylor Swift',
      'music_artist_id' => '1117',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1365596234,
      'music_last_update_time' => 1350523531,
      'music_title_search' => 'we are never ever geting back together',
      'music_artist_search' => '; tailor xwift;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 14666,
      'music_track_id' => 0,
      'music_filename' => '418161-6726638e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I remember when we broke up the first time
Saying, &quot;This is it, I\'ve had enough,&quot; \'cause like
We hadn\'t seen each other in a month
When you said you needed space. What?

Then you come...',
      'music_artist_html' => '<a href="/ca-si/Taylor-Swift~Y3NuX2FydGlzdH4xMTE3.html">Taylor Swift</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 424984,
      'music_title_url' => 'forever-and-one~dinh-huong',
      'music_title' => 'Forever And One',
      'music_artist' => 'Đinh Hương',
      'music_artist_id' => '2920',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531166651,
      'music_last_update_time' => 1471340223,
      'music_title_search' => 'forever and 1',
      'music_artist_search' => '; dinh hung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 24401,
      'music_track_id' => 0,
      'music_filename' => '424984-a59b6bf3.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. What can I do?
Will I be getting through?
Now that I must try to leave it all behind
Did you see what you have done to me?
So hard to justify
Slowly it\'s passing by.

[Chorus:]
Forever and one I...',
      'music_artist_html' => '<a href="/ca-si/Dinh-Huong~Y3NuX2FydGlzdH4yOTIw.html">Đinh Hương</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 425326,
      'music_title_url' => 'beauty-and-a-beat~justin-bieber-nicki-minaj',
      'music_title' => 'Beauty And A Beat',
      'music_artist' => 'Justin Bieber;Nicki Minaj',
      'music_artist_id' => '1798;2664',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1369490066,
      'music_last_update_time' => 1350964398,
      'music_title_search' => 'beauti and a beat',
      'music_artist_search' => '; juxtin biber; nicki minaj;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 35338,
      'music_track_id' => 0,
      'music_filename' => '425326-39240b71.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Yeah
Young Money
Nicki Minaj
Justin.

1. Show you off
Tonight I wanna show you off (aye,aye,aye)
What you got
A billion could\'ve never bought (aye,aye,aye).

We gonna party like it\'s 3012 tonight
I...',
      'music_artist_html' => '<a href="/ca-si/Justin-Bieber~Y3NuX2FydGlzdH4xNzk4.html">Justin Bieber</a>, <a href="/ca-si/Nicki-Minaj~Y3NuX2FydGlzdH4yNjY0.html">Nicki Minaj</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1005446,
      'music_title_url' => 'hold-you-down~suboi-thai-viet-g',
      'music_title' => 'Hold You Down',
      'music_artist' => 'Suboi;Thái Việt G',
      'music_artist_id' => '2094;13096',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496010884,
      'music_last_update_time' => 1338863621,
      'music_title_search' => 'hold iou down',
      'music_artist_search' => '; xuboi; thai vit g;',
      'music_album_search' => '',
      'music_composer' => 'Thái Việt G',
      'music_album' => '',
      'music_listen' => 9086,
      'music_track_id' => 0,
      'music_filename' => '1005446-daedc47f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Chorus:]
When time gets hard
Just run into my arms right now
Cuz baby imma hold you down
Imma hold you down [x4].

When time gets hard
Just run into my arms right now
Cuz baby imma hold you down
I...',
      'music_artist_html' => '<a href="/ca-si/Suboi~Y3NuX2FydGlzdH4yMDk0.html">Suboi</a>, <a href="/ca-si/Thai-Viet-G~Y3NuX2FydGlzdH4xMzA5Ng==.html">Thái Việt G</a>',
    ),
  ),
  3 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1009273,
      'music_title_url' => 'the-most-happy-thing-chuyen-hanh-phuc-nhat~chung-gia-han',
      'music_title' => 'The Most Happy Thing (Chuyện Hạnh Phúc Nhất; 最幸福的事)',
      'music_artist' => 'Chung Gia Hân',
      'music_artist_id' => '1492',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519446623,
      'music_last_update_time' => 1344308500,
      'music_title_search' => 'the moxt hapi thing; chin hanh phuc nhat; 最幸福的事',
      'music_artist_search' => '; chung da han;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11293,
      'music_track_id' => 0,
      'music_filename' => '1009273-51f33afa.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024762,
      'music_title_url' => 'thien-nhai-minh-nguyet-dao~chung-han-luong',
      'music_title' => 'Thiên Nhai Minh Nguyệt Đao (天涯明月刀)',
      'music_artist' => 'Chung Hán Lương',
      'music_artist_id' => '25463',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533739703,
      'music_last_update_time' => 1350293383,
      'music_title_search' => 'thin nhai minh ngit dao; 天涯明月刀',
      'music_artist_search' => '; chung han lung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 20220,
      'music_track_id' => 0,
      'music_filename' => '1024762-3b52e8c6.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '不怕黄金刀 有情天亦老
流血只一笑 有你真好
不怕青霜剑 斩断无情缘
画空破云烟 寄语明月
看大江东去 好一夜的无声雨
洗不净往事伤痕 问酒怎忘记
问江湖红尘能有几多颜如玉
宁愿孤单 也不要无趣
你是彼岸花 红得太无瑕
带你走天涯 跟我好不好
情像一把刀 伤人知多少
要 还是不要
你是彼岸花 红得太无瑕
带你走天涯 跟我好不好
情像一把刀 伤人知多少
要 还是不要
沧海一声笑',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1038817,
      'music_title_url' => 'co-nguoi-that-tot~tieu-cuong',
      'music_title' => 'Có Người Thật Tốt (有你真好)',
      'music_artist' => 'Tiểu Cường',
      'music_artist_id' => '26408',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498358344,
      'music_last_update_time' => 1353379949,
      'music_title_search' => 'co ngui that tot; 有你真好',
      'music_artist_search' => '; tiu cung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11656,
      'music_track_id' => 0,
      'music_filename' => '1038817-abc446f2.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '每个人 都想快乐
有多少人 可以拥有
人海中 你遇过谁
那个人 你一定没有忘记
有人说 要爱自己
往事不值得 再回味
还是会 想起从前
一个人在夜里 偷偷流泪
花花世界 花开花谢
不用我开口 你都能感觉
人来人往 过往云烟
只要我受委屈 你都在我身边
我想说 有你真好
有个人 可以拥抱
悲伤有 快乐有
你从没有 离开过

每个人 都要爱自己
往事不值得 再回味
还是会 想起从前
一个人在夜里...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1047878,
      'music_title_url' => 'forgetting-the-hug~wilber-pan',
      'music_title' => 'Forgetting The Hug (忘記擁抱)',
      'music_artist' => 'Wilber Pan',
      'music_artist_id' => '10895',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1528631387,
      'music_last_update_time' => 1355367675,
      'music_title_search' => 'forgeting the hug; 忘記擁抱',
      'music_artist_search' => '; wilber pan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3728,
      'music_track_id' => 0,
      'music_filename' => '1047878-8b5fed4c.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '你给的回忆太好
Nǐ gěi de huí yì tài hǎo 
像刺青很难抹掉
Xiàng cì qīng hěn nán mǒ diào
我一直保持微笑
Wǒ yī zhí bǎo chí wéi xiào 
真的我 别被你看到
Zhēn de wǒ bié bèi nǐ kàn dào.

我逃进汹涌人潮
Wǒ táo jìn xiōng yǒng rén cháo
寻找藏身的一角...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1047879,
      'music_title_url' => 'baby-tonight~wilber-pan',
      'music_title' => 'Baby Tonight',
      'music_artist' => 'Wilber Pan',
      'music_artist_id' => '10895',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495403876,
      'music_last_update_time' => 1355367964,
      'music_title_search' => 'babi tonight',
      'music_artist_search' => '; wilber pan;',
      'music_album_search' => '',
      'music_composer' => 'Wilber Pan',
      'music_album' => '',
      'music_listen' => 3756,
      'music_track_id' => 0,
      'music_filename' => '1047879-9a3a1f07.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'You packed up all your clothes said you want to be alone
Left the keys at the door I guess you wanna leave tonight
Looking at the picture frame that had both of us inside
Ad all the things I did fo...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1048383,
      'music_title_url' => 'hong-tran-khach-tram~chau-kiet-luan',
      'music_title' => 'Hồng Trần Khách Trạm (紅塵客棧)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1508815147,
      'music_last_update_time' => 1355379287,
      'music_title_search' => 'hong chan khach cham; 紅塵客棧',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 90402,
      'music_track_id' => 0,
      'music_filename' => '1048383-3db4c760.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '天涯 的盡頭是風沙
紅塵 的故事叫牽掛
封刀隱沒在尋常人家 東籬下
閑雲 野鶴 古剎

快馬 在江湖裡廝殺
無非 是名跟利放不下
心中有江山的人豈能快意瀟灑
我只求與你共 華髮

劍出鞘 恩怨了 誰笑
我只求今朝 擁你入 懷抱
紅塵客棧風似刀 驟雨落 宿命敲
任武林誰領風騷我卻 只為你 折腰
過荒村野橋 尋世外 古道
遠離人間塵囂 柳絮飄執子之手逍遙

檐下 窗欞斜映枝椏
與你 席地對座飲茶...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050370,
      'music_title_url' => 'hong-tran-khach-tram~chau-kiet-luan',
      'music_title' => 'Hồng Trần Khách Trạm (紅塵客棧)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1418178465,
      'music_last_update_time' => 1355543531,
      'music_title_search' => 'hong chan khach cham; 紅塵客棧',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 31219,
      'music_track_id' => 0,
      'music_filename' => '1050370-11c55380.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '天涯 的盡頭是風沙
紅塵 的故事叫牽掛
封刀隱沒在尋常人家 東籬下
閑雲 野鶴 古剎

快馬 在江湖裡廝殺
無非 是名跟利放不下
心中有江山的人豈能快意瀟灑
我只求與你共 華髮

劍出鞘 恩怨了 誰笑
我只求今朝 擁你入 懷抱
紅塵客棧風似刀 驟雨落 宿命敲
任武林誰領風騷我卻 只為你 折腰
過荒村野橋 尋世外 古道
遠離人間塵囂 柳絮飄執子之手逍遙

檐下 窗欞斜映枝椏
與你 席地對座飲茶...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1052312,
      'music_title_url' => 'obviously-on-ro-rang-roi~chau-kiet-luan',
      'music_title' => 'Obviously On (Rõ Ràng Rồi; 明明就)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496555455,
      'music_last_update_time' => 1356488642,
      'music_title_search' => 'obviouxli on; ro rang roi; 明就',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 7128,
      'music_track_id' => 0,
      'music_filename' => '1052312-a777be56.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Tang guo guan li hao duo yan se wei xiao que bu tian le
Ni de mou xie kuai le zai mei you wo de shi ke
Cong gu shi ji de cheng shi li wo xiang jiu zou dao zhe
Hai ou bu zai juan lian da hai ke yi f...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1058428,
      'music_title_url' => 'red-dust-inn-live~chau-kiet-luan',
      'music_title' => 'Red Dust Inn (红尘客栈; Live)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1498479326,
      'music_last_update_time' => 1357957120,
      'music_title_search' => 'red duxt in; 红尘客栈; live',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 4373,
      'music_track_id' => 0,
      'music_filename' => '1058428-ee29505a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Tian ya de jin tou shi feng sha
Hong chen de gu shi jiao qian gua
Feng dao yin mei zai xun chang ren jia dong li xia
Xian yun ye he gu cha.

Kuai ma zai jiang hu li si sha
Wu fei shi ming gen li fa...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1059610,
      'music_title_url' => 'dizzy-eunuch~jay-chou',
      'music_title' => 'Dizzy Eunuch (公公偏頭痛)',
      'music_artist' => 'Jay Chou',
      'music_artist_id' => '12',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516203033,
      'music_last_update_time' => 1358153949,
      'music_title_search' => 'dizi eunuch; 公偏頭痛',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 11578,
      'music_track_id' => 0,
      'music_filename' => '1059610-01c32eaf.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Gōnggōng tā piān tóutòng gōnggōng tā piān tóutòng 
公公他偏頭痛 公公他偏頭痛 
Shuō yínliǎng bùgòu zhòng gōnggōnggōnggōnggōng gōng gōng gōng
說銀兩不夠重 公公公 公公公 公公.

Gōnggōng tā wū hěn xiōng gōnggōng tā wū hěn xiōng...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1059611,
      'music_title_url' => 'big-ben~jay-chou',
      'music_title' => 'Big Ben (大笨鐘)',
      'music_artist' => 'Jay Chou',
      'music_artist_id' => '12',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493897239,
      'music_last_update_time' => 1358221155,
      'music_title_search' => 'big ben; 大笨鐘',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 7348,
      'music_track_id' => 0,
      'music_filename' => '1059611-b395ee7d.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nǐ shuō wǒ bǐ dà bèn zhōng hái bèn yào zěnme bǐ 
Chǎozhe wǒ de ānjìng zhōng shēng shàng hái yǒu shēngyīn 
Yào wǒ líkāi wǒ zǎo jiù dǎbāo hǎo xínglǐ 
Hē wán zhè bēi kāfēi wǒ jiù zǒu dāyìng nǐ.

Ōguò...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1062228,
      'music_title_url' => 'tram-nam-luan-hoi~phung-thieu-phong',
      'music_title' => 'Trăm Năm Luân Hồi (百年轮回)',
      'music_artist' => 'Phùng Thiệu Phong',
      'music_artist_id' => '28767',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521224164,
      'music_last_update_time' => 1359347042,
      'music_title_search' => 'cham 5 luan hoi; 百年轮回',
      'music_artist_search' => '; phung thiu phong;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 20605,
      'music_track_id' => 0,
      'music_filename' => '1062228-1c4c6e82.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Chū jiàn nǐ zài xiáguāng lǐ
Zhí qín yōuyōu yù fēngxíng
Bùzhēng rì yuè tíngtíng dúlì
Yǎnbō zhuǎn shèng chénxīng.

Lǜ yáng fāng cǎo wǔyuèqíng
Yú yuè zài shuǐ yàn zài yún
Liángchén měijǐng qiān zhǒng...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1065862,
      'music_title_url' => 'cheers~mayday',
      'music_title' => 'Cheers',
      'music_artist' => 'Mayday',
      'music_artist_id' => '24117',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530591001,
      'music_last_update_time' => 1361182718,
      'music_title_search' => 'cherx',
      'music_artist_search' => '; maidai;',
      'music_album_search' => '',
      'music_composer' => 'Mayday',
      'music_album' => '',
      'music_listen' => 4802,
      'music_track_id' => 0,
      'music_filename' => '1065862-140ffa12.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '会不会 有一天 时间真的能倒退
Hui bu hui you yi tian shi jian zhen de neng dao tui
退回 你的我的 回不去的 悠悠的岁月
Tui hui ni de wo de hui bu qu de you you de sui yue
也许会 有一天 世界真的有终点
Ye xu hui you yi tian shi jie zhen de you...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1090930,
      'music_title_url' => 'why-are-you-being-like-this~momo-danz',
      'music_title' => 'Why Are You Being Like This',
      'music_artist' => 'Momo Danz',
      'music_artist_id' => '31113',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1514825007,
      'music_last_update_time' => 1410007176,
      'music_title_search' => 'whi are iou being like thix',
      'music_artist_search' => '; momo danz;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 104466,
      'music_track_id' => 0,
      'music_filename' => '1090930-5fb86856.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1091544,
      'music_title_url' => 'history-chinese-version~exo-m',
      'music_title' => 'History (Chinese Version)',
      'music_artist' => 'EXO-M',
      'music_artist_id' => '4488',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1500866975,
      'music_last_update_time' => 1399805917,
      'music_title_search' => 'hixtori; chinexe verxion',
      'music_artist_search' => '; exo m;',
      'music_album_search' => '',
      'music_composer' => 'Yoo Young Jin; Thomas Troelsen; Remee Mikkel; Sigvardt Jackman; Liu Yuan',
      'music_album' => '',
      'music_listen' => 106277,
      'music_track_id' => 0,
      'music_filename' => '1091544-c78207b5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Listen, gan jue dao mei you
Wo de xin zang ting diao le jie zou
(My heart be breakin\')
Lei shui ceng jing fen nu de diao luo
Da sheng si hou Ha! Yi bu xiang yi hou
(My pain be creepin\').

Hui de ya...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1091545,
      'music_title_url' => 'what-is-love-chinese-version~exo-m',
      'music_title' => 'What Is Love (Chinese Version)',
      'music_artist' => 'EXO-M',
      'music_artist_id' => '4488',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1524286886,
      'music_last_update_time' => 1399805816,
      'music_title_search' => 'what ix love; chinexe verxion',
      'music_artist_search' => '; exo m;',
      'music_album_search' => '',
      'music_composer' => 'Han Kilin',
      'music_album' => '',
      'music_listen' => 55104,
      'music_track_id' => 0,
      'music_filename' => '1091545-28740c73.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Girl, I can\'t explain what I feel
Oh-baby, my baby, baby, baby, baby yeah
Manchang deyi tian fang fu jiu xiang duanzan yi miao deganjue
Mei tian au xiang shi wei ni xie xia qingjie
Zhe yimu langman...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1091546,
      'music_title_url' => 'mama-chinese-version~exo-m',
      'music_title' => 'Mama (Chinese Version)',
      'music_artist' => 'EXO-M',
      'music_artist_id' => '4488',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531998040,
      'music_last_update_time' => 1399805849,
      'music_title_search' => 'mama; chinexe verxion',
      'music_artist_search' => '; exo m;',
      'music_album_search' => '',
      'music_composer' => 'Yoo Young Jin; Wang Yajun',
      'music_album' => '',
      'music_listen' => 135671,
      'music_track_id' => 0,
      'music_filename' => '1091546-1ef1392f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Careless, careless
Shoot anonymous, anonymous
Heartless, mindless
No one, who care about me?

Shi luo de gan jue
Shui zai hu zhi you ren nai
Wo zai ye wu fa jie shou
Bi shang le shuang yan.

Mama k...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1091547,
      'music_title_url' => 'history-chinese-version~exo-m',
      'music_title' => 'History (Chinese Version)',
      'music_artist' => 'EXO-M',
      'music_artist_id' => '4488',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498708149,
      'music_last_update_time' => 1399805883,
      'music_title_search' => 'hixtori; chinexe verxion',
      'music_artist_search' => '; exo m;',
      'music_album_search' => '',
      'music_composer' => 'Yoo Young Jin; Thomas Troelsen; Remee Mikkel; Sigvardt Jackman; Liu Yuan',
      'music_album' => '',
      'music_listen' => 36321,
      'music_track_id' => 0,
      'music_filename' => '1091547-727e79d7.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Listen, gan jue dao mei you
Wo de xin zang ting diao le jie zou
(My heart be breakin\')
Lei shui ceng jing fen nu de diao luo
Da sheng si hou Ha! Yi bu xiang yi hou
(My pain be creepin\').

Hui de ya...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1171554,
      'music_title_url' => 'best-friend-chinese-version~jason-chen',
      'music_title' => 'Best Friend (Chinese Version)',
      'music_artist' => 'Jason Chen',
      'music_artist_id' => '2174',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498224262,
      'music_last_update_time' => 1384828090,
      'music_title_search' => 'bext frind; chinexe verxion',
      'music_artist_search' => '; jaxon chen;',
      'music_album_search' => '',
      'music_composer' => 'Jason Chen',
      'music_album' => '',
      'music_listen' => 1428,
      'music_track_id' => 0,
      'music_filename' => '1171554-c7dcfbfb.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Hai ji de wo shuo guo, wo yong yuan bu hui zou yuan,
Jiu zai shi san nian qian, yi tian
Na huo hua jiu zai wo men yan qian, que shi er bu jian
Jiu cha na me yi dian
Zhong yu fa xian ni jiu shi wo s...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1171600,
      'music_title_url' => 'summer-breeze~jason-chen-sharon-kwan',
      'music_title' => 'Summer Breeze (被風吹过的夏天)',
      'music_artist' => 'Jason Chen;Sharon Kwan',
      'music_artist_id' => '2174;37165',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493765684,
      'music_last_update_time' => 1384911391,
      'music_title_search' => 'xumer breze; 被風吹过的夏天',
      'music_artist_search' => '; jaxon chen; tharon kwan;',
      'music_album_search' => '',
      'music_composer' => 'JJ Lin',
      'music_album' => '',
      'music_listen' => 3695,
      'music_track_id' => 0,
      'music_filename' => '1171600-c66878ca.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Hai ji de zuo tian na ge xia tian
Wei feng chui guo de na yi shun jian
Shi hu chui fan yi qie
Zhi sheng ji mo geng shen ding
Ru jin feng yi jui zai chui
Qiu tian de yuu gen shui xin zhong de re que...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1009273,
      'music_title_url' => 'the-most-happy-thing-chuyen-hanh-phuc-nhat~chung-gia-han',
      'music_title' => 'The Most Happy Thing (Chuyện Hạnh Phúc Nhất; 最幸福的事)',
      'music_artist' => 'Chung Gia Hân',
      'music_artist_id' => '1492',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519446623,
      'music_last_update_time' => 1344308500,
      'music_title_search' => 'the moxt hapi thing; chin hanh phuc nhat; 最幸福的事',
      'music_artist_search' => '; chung da han;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11293,
      'music_track_id' => 0,
      'music_filename' => '1009273-51f33afa.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Chung-Gia-Han~Y3NuX2FydGlzdH4xNDky.html">Chung Gia Hân</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1024762,
      'music_title_url' => 'thien-nhai-minh-nguyet-dao~chung-han-luong',
      'music_title' => 'Thiên Nhai Minh Nguyệt Đao (天涯明月刀)',
      'music_artist' => 'Chung Hán Lương',
      'music_artist_id' => '25463',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533739703,
      'music_last_update_time' => 1350293383,
      'music_title_search' => 'thin nhai minh ngit dao; 天涯明月刀',
      'music_artist_search' => '; chung han lung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 20220,
      'music_track_id' => 0,
      'music_filename' => '1024762-3b52e8c6.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '不怕黄金刀 有情天亦老
流血只一笑 有你真好
不怕青霜剑 斩断无情缘
画空破云烟 寄语明月
看大江东去 好一夜的无声雨
洗不净往事伤痕 问酒怎忘记
问江湖红尘能有几多颜如玉
宁愿孤单 也不要无趣
你是彼岸花 红得太无瑕
带你走天涯 跟我好不好
情像一把刀 伤人知多少
要 还是不要
你是彼岸花 红得太无瑕
带你走天涯 跟我好不好
情像一把刀 伤人知多少
要 还是不要
沧海一声笑',
      'music_artist_html' => '<a href="/ca-si/Chung-Han-Luong~Y3NuX2FydGlzdH4yNTQ2Mw==.html">Chung Hán Lương</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1038817,
      'music_title_url' => 'co-nguoi-that-tot~tieu-cuong',
      'music_title' => 'Có Người Thật Tốt (有你真好)',
      'music_artist' => 'Tiểu Cường',
      'music_artist_id' => '26408',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498358344,
      'music_last_update_time' => 1353379949,
      'music_title_search' => 'co ngui that tot; 有你真好',
      'music_artist_search' => '; tiu cung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11656,
      'music_track_id' => 0,
      'music_filename' => '1038817-abc446f2.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '每个人 都想快乐
有多少人 可以拥有
人海中 你遇过谁
那个人 你一定没有忘记
有人说 要爱自己
往事不值得 再回味
还是会 想起从前
一个人在夜里 偷偷流泪
花花世界 花开花谢
不用我开口 你都能感觉
人来人往 过往云烟
只要我受委屈 你都在我身边
我想说 有你真好
有个人 可以拥抱
悲伤有 快乐有
你从没有 离开过

每个人 都要爱自己
往事不值得 再回味
还是会 想起从前
一个人在夜里...',
      'music_artist_html' => '<a href="/ca-si/Tieu-Cuong~Y3NuX2FydGlzdH4yNjQwOA==.html">Tiểu Cường</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1047878,
      'music_title_url' => 'forgetting-the-hug~wilber-pan',
      'music_title' => 'Forgetting The Hug (忘記擁抱)',
      'music_artist' => 'Wilber Pan',
      'music_artist_id' => '10895',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1528631387,
      'music_last_update_time' => 1355367675,
      'music_title_search' => 'forgeting the hug; 忘記擁抱',
      'music_artist_search' => '; wilber pan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3728,
      'music_track_id' => 0,
      'music_filename' => '1047878-8b5fed4c.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '你给的回忆太好
Nǐ gěi de huí yì tài hǎo 
像刺青很难抹掉
Xiàng cì qīng hěn nán mǒ diào
我一直保持微笑
Wǒ yī zhí bǎo chí wéi xiào 
真的我 别被你看到
Zhēn de wǒ bié bèi nǐ kàn dào.

我逃进汹涌人潮
Wǒ táo jìn xiōng yǒng rén cháo
寻找藏身的一角...',
      'music_artist_html' => '<a href="/ca-si/Wilber-Pan~Y3NuX2FydGlzdH4xMDg5NQ==.html">Wilber Pan</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1047879,
      'music_title_url' => 'baby-tonight~wilber-pan',
      'music_title' => 'Baby Tonight',
      'music_artist' => 'Wilber Pan',
      'music_artist_id' => '10895',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495403876,
      'music_last_update_time' => 1355367964,
      'music_title_search' => 'babi tonight',
      'music_artist_search' => '; wilber pan;',
      'music_album_search' => '',
      'music_composer' => 'Wilber Pan',
      'music_album' => '',
      'music_listen' => 3756,
      'music_track_id' => 0,
      'music_filename' => '1047879-9a3a1f07.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'You packed up all your clothes said you want to be alone
Left the keys at the door I guess you wanna leave tonight
Looking at the picture frame that had both of us inside
Ad all the things I did fo...',
      'music_artist_html' => '<a href="/ca-si/Wilber-Pan~Y3NuX2FydGlzdH4xMDg5NQ==.html">Wilber Pan</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1048383,
      'music_title_url' => 'hong-tran-khach-tram~chau-kiet-luan',
      'music_title' => 'Hồng Trần Khách Trạm (紅塵客棧)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1508815147,
      'music_last_update_time' => 1355379287,
      'music_title_search' => 'hong chan khach cham; 紅塵客棧',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 90402,
      'music_track_id' => 0,
      'music_filename' => '1048383-3db4c760.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '天涯 的盡頭是風沙
紅塵 的故事叫牽掛
封刀隱沒在尋常人家 東籬下
閑雲 野鶴 古剎

快馬 在江湖裡廝殺
無非 是名跟利放不下
心中有江山的人豈能快意瀟灑
我只求與你共 華髮

劍出鞘 恩怨了 誰笑
我只求今朝 擁你入 懷抱
紅塵客棧風似刀 驟雨落 宿命敲
任武林誰領風騷我卻 只為你 折腰
過荒村野橋 尋世外 古道
遠離人間塵囂 柳絮飄執子之手逍遙

檐下 窗欞斜映枝椏
與你 席地對座飲茶...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1050370,
      'music_title_url' => 'hong-tran-khach-tram~chau-kiet-luan',
      'music_title' => 'Hồng Trần Khách Trạm (紅塵客棧)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1418178465,
      'music_last_update_time' => 1355543531,
      'music_title_search' => 'hong chan khach cham; 紅塵客棧',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 31219,
      'music_track_id' => 0,
      'music_filename' => '1050370-11c55380.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '天涯 的盡頭是風沙
紅塵 的故事叫牽掛
封刀隱沒在尋常人家 東籬下
閑雲 野鶴 古剎

快馬 在江湖裡廝殺
無非 是名跟利放不下
心中有江山的人豈能快意瀟灑
我只求與你共 華髮

劍出鞘 恩怨了 誰笑
我只求今朝 擁你入 懷抱
紅塵客棧風似刀 驟雨落 宿命敲
任武林誰領風騷我卻 只為你 折腰
過荒村野橋 尋世外 古道
遠離人間塵囂 柳絮飄執子之手逍遙

檐下 窗欞斜映枝椏
與你 席地對座飲茶...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1052312,
      'music_title_url' => 'obviously-on-ro-rang-roi~chau-kiet-luan',
      'music_title' => 'Obviously On (Rõ Ràng Rồi; 明明就)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496555455,
      'music_last_update_time' => 1356488642,
      'music_title_search' => 'obviouxli on; ro rang roi; 明就',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 7128,
      'music_track_id' => 0,
      'music_filename' => '1052312-a777be56.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Tang guo guan li hao duo yan se wei xiao que bu tian le
Ni de mou xie kuai le zai mei you wo de shi ke
Cong gu shi ji de cheng shi li wo xiang jiu zou dao zhe
Hai ou bu zai juan lian da hai ke yi f...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1058428,
      'music_title_url' => 'red-dust-inn-live~chau-kiet-luan',
      'music_title' => 'Red Dust Inn (红尘客栈; Live)',
      'music_artist' => 'Châu Kiệt Luân',
      'music_artist_id' => '13',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1498479326,
      'music_last_update_time' => 1357957120,
      'music_title_search' => 'red duxt in; 红尘客栈; live',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 4373,
      'music_track_id' => 0,
      'music_filename' => '1058428-ee29505a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Tian ya de jin tou shi feng sha
Hong chen de gu shi jiao qian gua
Feng dao yin mei zai xun chang ren jia dong li xia
Xian yun ye he gu cha.

Kuai ma zai jiang hu li si sha
Wu fei shi ming gen li fa...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kiet-Luan~Y3NuX2FydGlzdH4xMw==.html">Châu Kiệt Luân</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1059610,
      'music_title_url' => 'dizzy-eunuch~jay-chou',
      'music_title' => 'Dizzy Eunuch (公公偏頭痛)',
      'music_artist' => 'Jay Chou',
      'music_artist_id' => '12',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516203033,
      'music_last_update_time' => 1358153949,
      'music_title_search' => 'dizi eunuch; 公偏頭痛',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 11578,
      'music_track_id' => 0,
      'music_filename' => '1059610-01c32eaf.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Gōnggōng tā piān tóutòng gōnggōng tā piān tóutòng 
公公他偏頭痛 公公他偏頭痛 
Shuō yínliǎng bùgòu zhòng gōnggōnggōnggōnggōng gōng gōng gōng
說銀兩不夠重 公公公 公公公 公公.

Gōnggōng tā wū hěn xiōng gōnggōng tā wū hěn xiōng...',
      'music_artist_html' => '<a href="/ca-si/Jay-Chou~Y3NuX2FydGlzdH4xMg==.html">Jay Chou</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1059611,
      'music_title_url' => 'big-ben~jay-chou',
      'music_title' => 'Big Ben (大笨鐘)',
      'music_artist' => 'Jay Chou',
      'music_artist_id' => '12',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493897239,
      'music_last_update_time' => 1358221155,
      'music_title_search' => 'big ben; 大笨鐘',
      'music_artist_search' => '; jai chou;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân',
      'music_album' => '',
      'music_listen' => 7348,
      'music_track_id' => 0,
      'music_filename' => '1059611-b395ee7d.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nǐ shuō wǒ bǐ dà bèn zhōng hái bèn yào zěnme bǐ 
Chǎozhe wǒ de ānjìng zhōng shēng shàng hái yǒu shēngyīn 
Yào wǒ líkāi wǒ zǎo jiù dǎbāo hǎo xínglǐ 
Hē wán zhè bēi kāfēi wǒ jiù zǒu dāyìng nǐ.

Ōguò...',
      'music_artist_html' => '<a href="/ca-si/Jay-Chou~Y3NuX2FydGlzdH4xMg==.html">Jay Chou</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1062228,
      'music_title_url' => 'tram-nam-luan-hoi~phung-thieu-phong',
      'music_title' => 'Trăm Năm Luân Hồi (百年轮回)',
      'music_artist' => 'Phùng Thiệu Phong',
      'music_artist_id' => '28767',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521224164,
      'music_last_update_time' => 1359347042,
      'music_title_search' => 'cham 5 luan hoi; 百年轮回',
      'music_artist_search' => '; phung thiu phong;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 20605,
      'music_track_id' => 0,
      'music_filename' => '1062228-1c4c6e82.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Chū jiàn nǐ zài xiáguāng lǐ
Zhí qín yōuyōu yù fēngxíng
Bùzhēng rì yuè tíngtíng dúlì
Yǎnbō zhuǎn shèng chénxīng.

Lǜ yáng fāng cǎo wǔyuèqíng
Yú yuè zài shuǐ yàn zài yún
Liángchén měijǐng qiān zhǒng...',
      'music_artist_html' => '<a href="/ca-si/Phung-Thieu-Phong~Y3NuX2FydGlzdH4yODc2Nw==.html">Phùng Thiệu Phong</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1065862,
      'music_title_url' => 'cheers~mayday',
      'music_title' => 'Cheers',
      'music_artist' => 'Mayday',
      'music_artist_id' => '24117',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530591001,
      'music_last_update_time' => 1361182718,
      'music_title_search' => 'cherx',
      'music_artist_search' => '; maidai;',
      'music_album_search' => '',
      'music_composer' => 'Mayday',
      'music_album' => '',
      'music_listen' => 4802,
      'music_track_id' => 0,
      'music_filename' => '1065862-140ffa12.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '会不会 有一天 时间真的能倒退
Hui bu hui you yi tian shi jian zhen de neng dao tui
退回 你的我的 回不去的 悠悠的岁月
Tui hui ni de wo de hui bu qu de you you de sui yue
也许会 有一天 世界真的有终点
Ye xu hui you yi tian shi jie zhen de you...',
      'music_artist_html' => '<a href="/ca-si/Mayday~Y3NuX2FydGlzdH4yNDExNw==.html">Mayday</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1090930,
      'music_title_url' => 'why-are-you-being-like-this~momo-danz',
      'music_title' => 'Why Are You Being Like This',
      'music_artist' => 'Momo Danz',
      'music_artist_id' => '31113',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1514825007,
      'music_last_update_time' => 1410007176,
      'music_title_search' => 'whi are iou being like thix',
      'music_artist_search' => '; momo danz;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 104466,
      'music_track_id' => 0,
      'music_filename' => '1090930-5fb86856.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Momo-Danz~Y3NuX2FydGlzdH4zMTExMw==.html">Momo Danz</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1091544,
      'music_title_url' => 'history-chinese-version~exo-m',
      'music_title' => 'History (Chinese Version)',
      'music_artist' => 'EXO-M',
      'music_artist_id' => '4488',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1500866975,
      'music_last_update_time' => 1399805917,
      'music_title_search' => 'hixtori; chinexe verxion',
      'music_artist_search' => '; exo m;',
      'music_album_search' => '',
      'music_composer' => 'Yoo Young Jin; Thomas Troelsen; Remee Mikkel; Sigvardt Jackman; Liu Yuan',
      'music_album' => '',
      'music_listen' => 106277,
      'music_track_id' => 0,
      'music_filename' => '1091544-c78207b5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Listen, gan jue dao mei you
Wo de xin zang ting diao le jie zou
(My heart be breakin\')
Lei shui ceng jing fen nu de diao luo
Da sheng si hou Ha! Yi bu xiang yi hou
(My pain be creepin\').

Hui de ya...',
      'music_artist_html' => '<a href="/ca-si/EXO-M~Y3NuX2FydGlzdH40NDg4.html">EXO-M</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1091545,
      'music_title_url' => 'what-is-love-chinese-version~exo-m',
      'music_title' => 'What Is Love (Chinese Version)',
      'music_artist' => 'EXO-M',
      'music_artist_id' => '4488',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1524286886,
      'music_last_update_time' => 1399805816,
      'music_title_search' => 'what ix love; chinexe verxion',
      'music_artist_search' => '; exo m;',
      'music_album_search' => '',
      'music_composer' => 'Han Kilin',
      'music_album' => '',
      'music_listen' => 55104,
      'music_track_id' => 0,
      'music_filename' => '1091545-28740c73.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Girl, I can\'t explain what I feel
Oh-baby, my baby, baby, baby, baby yeah
Manchang deyi tian fang fu jiu xiang duanzan yi miao deganjue
Mei tian au xiang shi wei ni xie xia qingjie
Zhe yimu langman...',
      'music_artist_html' => '<a href="/ca-si/EXO-M~Y3NuX2FydGlzdH40NDg4.html">EXO-M</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1091546,
      'music_title_url' => 'mama-chinese-version~exo-m',
      'music_title' => 'Mama (Chinese Version)',
      'music_artist' => 'EXO-M',
      'music_artist_id' => '4488',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531998040,
      'music_last_update_time' => 1399805849,
      'music_title_search' => 'mama; chinexe verxion',
      'music_artist_search' => '; exo m;',
      'music_album_search' => '',
      'music_composer' => 'Yoo Young Jin; Wang Yajun',
      'music_album' => '',
      'music_listen' => 135671,
      'music_track_id' => 0,
      'music_filename' => '1091546-1ef1392f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Careless, careless
Shoot anonymous, anonymous
Heartless, mindless
No one, who care about me?

Shi luo de gan jue
Shui zai hu zhi you ren nai
Wo zai ye wu fa jie shou
Bi shang le shuang yan.

Mama k...',
      'music_artist_html' => '<a href="/ca-si/EXO-M~Y3NuX2FydGlzdH40NDg4.html">EXO-M</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1091547,
      'music_title_url' => 'history-chinese-version~exo-m',
      'music_title' => 'History (Chinese Version)',
      'music_artist' => 'EXO-M',
      'music_artist_id' => '4488',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498708149,
      'music_last_update_time' => 1399805883,
      'music_title_search' => 'hixtori; chinexe verxion',
      'music_artist_search' => '; exo m;',
      'music_album_search' => '',
      'music_composer' => 'Yoo Young Jin; Thomas Troelsen; Remee Mikkel; Sigvardt Jackman; Liu Yuan',
      'music_album' => '',
      'music_listen' => 36321,
      'music_track_id' => 0,
      'music_filename' => '1091547-727e79d7.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Listen, gan jue dao mei you
Wo de xin zang ting diao le jie zou
(My heart be breakin\')
Lei shui ceng jing fen nu de diao luo
Da sheng si hou Ha! Yi bu xiang yi hou
(My pain be creepin\').

Hui de ya...',
      'music_artist_html' => '<a href="/ca-si/EXO-M~Y3NuX2FydGlzdH40NDg4.html">EXO-M</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1171554,
      'music_title_url' => 'best-friend-chinese-version~jason-chen',
      'music_title' => 'Best Friend (Chinese Version)',
      'music_artist' => 'Jason Chen',
      'music_artist_id' => '2174',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498224262,
      'music_last_update_time' => 1384828090,
      'music_title_search' => 'bext frind; chinexe verxion',
      'music_artist_search' => '; jaxon chen;',
      'music_album_search' => '',
      'music_composer' => 'Jason Chen',
      'music_album' => '',
      'music_listen' => 1428,
      'music_track_id' => 0,
      'music_filename' => '1171554-c7dcfbfb.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Hai ji de wo shuo guo, wo yong yuan bu hui zou yuan,
Jiu zai shi san nian qian, yi tian
Na huo hua jiu zai wo men yan qian, que shi er bu jian
Jiu cha na me yi dian
Zhong yu fa xian ni jiu shi wo s...',
      'music_artist_html' => '<a href="/ca-si/Jason-Chen~Y3NuX2FydGlzdH4yMTc0.html">Jason Chen</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1171600,
      'music_title_url' => 'summer-breeze~jason-chen-sharon-kwan',
      'music_title' => 'Summer Breeze (被風吹过的夏天)',
      'music_artist' => 'Jason Chen;Sharon Kwan',
      'music_artist_id' => '2174;37165',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493765684,
      'music_last_update_time' => 1384911391,
      'music_title_search' => 'xumer breze; 被風吹过的夏天',
      'music_artist_search' => '; jaxon chen; tharon kwan;',
      'music_album_search' => '',
      'music_composer' => 'JJ Lin',
      'music_album' => '',
      'music_listen' => 3695,
      'music_track_id' => 0,
      'music_filename' => '1171600-c66878ca.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Hai ji de zuo tian na ge xia tian
Wei feng chui guo de na yi shun jian
Shi hu chui fan yi qie
Zhi sheng ji mo geng shen ding
Ru jin feng yi jui zai chui
Qiu tian de yuu gen shui xin zhong de re que...',
      'music_artist_html' => '<a href="/ca-si/Jason-Chen~Y3NuX2FydGlzdH4yMTc0.html">Jason Chen</a>, <a href="/ca-si/Sharon-Kwan~Y3NuX2FydGlzdH4zNzE2NQ==.html">Sharon Kwan</a>',
    ),
  ),
  4 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1046002,
      'music_title_url' => 'paparazzi~girls-generation',
      'music_title' => 'Paparazzi',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538970755,
      'music_last_update_time' => 1355303097,
      'music_title_search' => 'paparazi',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 283958,
      'music_track_id' => 0,
      'music_filename' => '1046002-01db090e.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Uh la la la, la la la la
Uh la la la, Wow wow
Uh la la la, la la la la
Uh la la la
We\'re the Girls, we\'re the Girls Generation
Cha cha cha cha.

Kocchi mite baby denwa shiteru Ring-Ring
Fushizen na...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1046001,
      'music_title_url' => 'beautiful-night~beast',
      'music_title' => 'Beautiful Night',
      'music_artist' => 'BEAST',
      'music_artist_id' => '1619',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538627212,
      'music_last_update_time' => 1355299607,
      'music_title_search' => 'beautiful night',
      'music_artist_search' => '; beaxt;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 223436,
      'music_track_id' => 0,
      'music_filename' => '1046001-e042258b.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Byeo-ri binnaneun areumda-un bamiya-iya
I bami yeongwonhagil nae soneul jababwah
Pureun talbichi areumda-un bamiya-iya
Nawah jeo haneu-reul keo-reobwah.

I\'m yours neomani nareul seolle-ge hae i\'m...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1046003,
      'music_title_url' => 'roly-poly~t-ara',
      'music_title' => 'Roly Poly',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538640839,
      'music_last_update_time' => 1355363684,
      'music_title_search' => 'roli poli',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1045662,
      'music_track_id' => 0,
      'music_filename' => '1046003-a7d977f5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Eodi-kkaji wah-nna tto eodi- sumeo-nna
Mame deu-reo wah-nna yayayayaya
I like you.

Eodi-seo osyeo-nnayo
Jakku nuni kaneyo
Keudae nunbichi
Naneun cham mame deuneyo.

Yeopeuro ka-go ship-jiman
Yongg...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1015379,
      'music_title_url' => 'gangnam-style~psy',
      'music_title' => 'Gangnam Style',
      'music_artist' => 'PSY',
      'music_artist_id' => '2645',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538481214,
      'music_last_update_time' => 1347270919,
      'music_title_search' => 'gangnam xtile',
      'music_artist_search' => '; pxi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6870203,
      'music_track_id' => 0,
      'music_filename' => '1015379-082a7571.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Oppan gang-namseutayil
Kang-namseutayil.

Naje-neun ttasaroun inkanjeo-gin yeoja
Keopi hanjanye yeoyureuraneun pumkyeok i-nneun yeoja
Bami omyeon shimjangi tteugeowojineun yeoja
Keureon banjeon i-n...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1068782,
      'music_title_url' => 'blue~big-bang',
      'music_title' => 'Blue',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538987194,
      'music_last_update_time' => 1362016771,
      'music_title_search' => 'blue',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => 'Teddy; G-Dragon',
      'music_album' => '',
      'music_listen' => 455526,
      'music_track_id' => 0,
      'music_filename' => '1068782-a1f8d417.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Keuri-um so-ge mami meongdeu-reot-jyo
(i singing my blues) paran nun-mu-re paran seulpeume gildeulyeojyeo
(i\'m singing my blues) tteunkureume nallyeobonaen sarang oh oh.

Gateun haneul dareun gos n...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1638055,
      'music_title_url' => 'to-you~teen-top',
      'music_title' => 'To You',
      'music_artist' => 'Teen Top',
      'music_artist_id' => '2558',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538955562,
      'music_last_update_time' => 1458005143,
      'music_title_search' => 'to iou',
      'music_artist_search' => '; ten top;',
      'music_album_search' => '',
      'music_composer' => 'Teen Top',
      'music_album' => '',
      'music_listen' => 47773,
      'music_track_id' => 0,
      'music_filename' => '1638055-4784dbd6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'We gotta go. Teen Top and Brave Sound
Whoo woo hoo whoo woo hoo whoo woo hoo
Hey to you, to you, to you now
Whoo woo hoo whoo woo hoo whoo woo hoo
Hey to you, to you, to you now.

Neon nae mami deu...',
    ),
    6 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1935204,
      'music_title_url' => 'dont-say-goodbye-hoang-mang-vietnam-korea-festival-06042012~davichi',
      'music_title' => 'Don\'t Say Goodbye (안녕이라고 말하지마) + Hoang Mang (Vietnam Korea Festival 06.04.2012)',
      'music_artist' => 'Davichi',
      'music_artist_id' => '1050',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1533188451,
      'music_title_search' => 'don t xai godbi; 안녕이라고 말하지마 hoang mang; vitnam korea fextival 06 04 2012',
      'music_artist_search' => '; davichi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 58,
      'music_track_id' => 0,
      'music_filename' => '1935204-ff48b9b2.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 388168,
      'music_title_url' => 'superstar~nhieu-ca-si',
      'music_title' => 'Superstar',
      'music_artist' => 'Various Artists',
      'music_artist_id' => '97',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1473195296,
      'music_last_update_time' => 1350622937,
      'music_title_search' => 'xuperxtar',
      'music_artist_search' => '; varioux artixtx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6831,
      'music_track_id' => 0,
      'music_filename' => '388168-b1fdbc57.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 403385,
      'music_title_url' => 'believe-comeback-stage-070612-m-countdown~u-kiss',
      'music_title' => 'Believe (Comeback Stage 070612 M Countdown)',
      'music_artist' => 'U-Kiss',
      'music_artist_id' => '1809',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1457338253,
      'music_last_update_time' => 1350632692,
      'music_title_search' => 'belive; comeback xtage 070612 m countdown',
      'music_artist_search' => '; u kix;',
      'music_album_search' => '',
      'music_composer' => 'U-Kiss',
      'music_album' => '',
      'music_listen' => 4638,
      'music_track_id' => 0,
      'music_filename' => '403385-3dbe939f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Hey ladies and gentlemen
Want you to listen
Wanna know what it is
Hear this yeah
It\' our belief.

Shijakkwah kkeu-teun hangsang chesbakwiira-go
Saen ggakhajima ma-eumi
Kudke muneul dadjanha
Yeollin...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 408079,
      'music_title_url' => 'beautiful-night~ulala-session',
      'music_title' => 'Beautiful Night',
      'music_artist' => 'Ulala Session',
      'music_artist_id' => '14752',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1402048357,
      'music_last_update_time' => 1350542295,
      'music_title_search' => 'beautiful night',
      'music_artist_search' => '; ulala xexion;',
      'music_album_search' => '',
      'music_composer' => 'Ulala Session',
      'music_album' => '',
      'music_listen' => 8953,
      'music_track_id' => 0,
      'music_filename' => '408079-c1a33976.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'O u ne nun so ge nol
Gu ri go 
Ni nun so ge nal
U rin 
Ya gyong cho rom 
Ban ja ko ri ne.

Na nun 
Nol cha u nun 
Champagne
No nun nal ke u nun 
Caffeine
Gu de wa na ye 
Bam i
A rum da un bam i
Yon...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 408821,
      'music_title_url' => 'loving-u-dance-practice~sistar',
      'music_title' => 'Loving U (Dance Practice)',
      'music_artist' => 'Sistar',
      'music_artist_id' => '1916',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516651983,
      'music_last_update_time' => 1350366391,
      'music_title_search' => 'loving u; dance practice',
      'music_artist_search' => '; xixtar;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 57937,
      'music_track_id' => 0,
      'music_filename' => '408821-19d87c58.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Hey cham isanghae jeongmal strange
Ireon jeok eobseonneunde neol bolttaemada na dugeundugeun tteollineunge.

When i see your face honja mak sangsangeul hae
Na pyojeong gwalli andwae michil geot gat...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 411137,
      'music_title_url' => 'only-one-dance-version~boa',
      'music_title' => 'Only One (Dance Version)',
      'music_artist' => 'BoA',
      'music_artist_id' => '924',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1352697769,
      'music_last_update_time' => 1350445927,
      'music_title_search' => 'onli 1; dance verxion',
      'music_artist_search' => '; boa;',
      'music_album_search' => '',
      'music_composer' => 'BoA',
      'music_album' => '',
      'music_listen' => 6872,
      'music_track_id' => 0,
      'music_filename' => '411137-be7c37b4.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Meo-reojyeoman ganeun geudae you\'re the only one nae-ga sarang-haet-deon geonmankeum you\'re the only one
Apeu-go apeujiman pabo katjiman go-od bye tashi neol mot bonda haedo you\'re the only one
Onl...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 413636,
      'music_title_url' => 'beautiful-night-practice-version~beast',
      'music_title' => 'Beautiful Night (Practice Version)',
      'music_artist' => 'BEAST',
      'music_artist_id' => '1619',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1518630711,
      'music_last_update_time' => 1350525913,
      'music_title_search' => 'beautiful night; practice verxion',
      'music_artist_search' => '; beaxt;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 24832,
      'music_track_id' => 0,
      'music_filename' => '413636-1918d1eb.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Byeo-ri binnaneun areumda-un bamiya-iya
I bami yeongwonhagil nae soneul jababwah
Pureun talbichi areumda-un bamiya-iya
Nawah jeo haneu-reul keo-reobwah.

I\'m yours neomani nareul seolle-ge hae i\'m...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 417175,
      'music_title_url' => 'gangnam-style-290712-sbs-inkigayo~psy',
      'music_title' => 'Gangnam Style (29/07/12 SBS Inkigayo)',
      'music_artist' => 'PSY',
      'music_artist_id' => '2645',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497484623,
      'music_last_update_time' => 1477555314,
      'music_title_search' => 'gangnam xtile; 29;07;12 xbx inkigaio',
      'music_artist_search' => '; pxi;',
      'music_album_search' => '',
      'music_composer' => 'PSY',
      'music_album' => '',
      'music_listen' => 38516,
      'music_track_id' => 0,
      'music_filename' => '417175-99e42853.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Oppan Gang-namseutayil
Kang-namseutayil.

Naje-neun ttasaroun inkanjeo-gin yeoja
Keopi hanjanye yeoyureuraneun pumkyeok i-nneun yeoja
Bami omyeon shimjangi tteugeowojineun yeoja
Keureon banjeon i-n...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 420277,
      'music_title_url' => 'gangnam-style-che~psy',
      'music_title' => 'Gangnam Style (Chế)',
      'music_artist' => 'PSY',
      'music_artist_id' => '2645',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519008548,
      'music_last_update_time' => 1478676547,
      'music_title_search' => 'gangnam xtile; che',
      'music_artist_search' => '; pxi;',
      'music_album_search' => '',
      'music_composer' => 'PSY',
      'music_album' => '',
      'music_listen' => 144015,
      'music_track_id' => 0,
      'music_filename' => '420277-0ab47131.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Oppan Gang-namseutayil
Kang-namseutayil.

Naje-neun ttasaroun inkanjeo-gin yeoja
Keopi hanjanye yeoyureuraneun pumkyeok i-nneun yeoja
Bami omyeon shimjangi tteugeowojineun yeoja
Keureon banjeon i-n...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 423200,
      'music_title_url' => 'gangnam-style-new-york-style-version~psy',
      'music_title' => 'Gangnam Style (New York Style Version)',
      'music_artist' => 'PSY',
      'music_artist_id' => '2645',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1361977815,
      'music_last_update_time' => 1350523299,
      'music_title_search' => 'gangnam xtile; new iork xtile verxion',
      'music_artist_search' => '; pxi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 38830,
      'music_track_id' => 0,
      'music_filename' => '423200-adbacbf9.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Oppan gang-namseutayil
Kang-namseutayil.

Naje-neun ttasaroun inkanjeo-gin yeoja
Keopi hanjanye yeoyureuraneun pumkyeok i-nneun yeoja
Bami omyeon shimjangi tteugeowojineun yeoja
Keureon banjeon i-n...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 423383,
      'music_title_url' => 'gangnam-style-live~psy',
      'music_title' => 'Gangnam Style (Live)',
      'music_artist' => 'PSY',
      'music_artist_id' => '2645',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1353556467,
      'music_last_update_time' => 1350541627,
      'music_title_search' => 'gangnam xtile; live',
      'music_artist_search' => '; pxi;',
      'music_album_search' => '',
      'music_composer' => 'PSY',
      'music_album' => '',
      'music_listen' => 6217,
      'music_track_id' => 0,
      'music_filename' => '423383-edfd13a9.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Oppan gang-namseutayil
Kang-namseutayil.

Naje-neun ttasaroun inkanjeo-gin yeoja
Keopi hanjanye yeoyureuraneun pumkyeok i-nneun yeoja
Bami omyeon shimjangi tteugeowojineun yeoja
Keureon banjeon i-n...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 424419,
      'music_title_url' => 'get-out~aoa',
      'music_title' => 'Get Out',
      'music_artist' => 'AOA',
      'music_artist_id' => '4133',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1394340655,
      'music_last_update_time' => 1350375475,
      'music_title_search' => 'get out',
      'music_artist_search' => '; aoa;',
      'music_album_search' => '',
      'music_composer' => 'JYJ',
      'music_album' => '',
      'music_listen' => 14615,
      'music_track_id' => 0,
      'music_filename' => '424419-4c539626.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Pillyo eobseo I will kick you ah ah ah I wanna say good bye to you
Why neoneun naega animyeon maeryeok eomneun namja huh Chakgakhajima jebal you dont wanna taking about.

Neoneun dareun namjadeulg...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 426803,
      'music_title_url' => 'please-don-t-261012-music-bank~kwill',
      'music_title' => 'Please Don\' t... (261012 Music Bank)',
      'music_artist' => 'K.Will',
      'music_artist_id' => '1528',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1449222465,
      'music_last_update_time' => 1357703797,
      'music_title_search' => 'pleaxe don t ; 261012 muxic bank',
      'music_artist_search' => '; k wil;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5348,
      'music_track_id' => 0,
      'music_filename' => '426803-02cb5e17.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Naranhi anjeun jadongcha sogeseon
Eumakdo heureuji anha
Neul japgo itdeon ni oensoneuro neo
Ipsulman tteutgo isseo.

Niga hal mal ara geu malmaneun mara
Dont know why dont know why
Ilbun ilcho de...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1006798,
      'music_title_url' => 'sadness~led-apple',
      'music_title' => 'Sadness',
      'music_artist' => 'LED Apple',
      'music_artist_id' => '2533',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1423214558,
      'music_last_update_time' => 1341388702,
      'music_title_search' => 'xadnex',
      'music_artist_search' => '; led aple;',
      'music_album_search' => '',
      'music_composer' => 'LED Apple',
      'music_album' => '',
      'music_listen' => 10687,
      'music_track_id' => 0,
      'music_filename' => '1006798-babe7050.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Baby I don`t wanna cry
Jebal nal ullijima
Ireoda jugeulji molla
Baby don`t you break my heart
Naege sangcheo jujima
Dorawa niga piryohae.

Neoeui jib ape
Jaju gadeon cafe
Jigeum neoreul kidarineund...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1046002,
      'music_title_url' => 'paparazzi~girls-generation',
      'music_title' => 'Paparazzi',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538970755,
      'music_last_update_time' => 1355303097,
      'music_title_search' => 'paparazi',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 283958,
      'music_track_id' => 0,
      'music_filename' => '1046002-01db090e.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Uh la la la, la la la la
Uh la la la, Wow wow
Uh la la la, la la la la
Uh la la la
We\'re the Girls, we\'re the Girls Generation
Cha cha cha cha.

Kocchi mite baby denwa shiteru Ring-Ring
Fushizen na...',
      'music_artist_html' => '<a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH45MjI=.html">Girls\' Generation</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1046001,
      'music_title_url' => 'beautiful-night~beast',
      'music_title' => 'Beautiful Night',
      'music_artist' => 'BEAST',
      'music_artist_id' => '1619',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538627212,
      'music_last_update_time' => 1355299607,
      'music_title_search' => 'beautiful night',
      'music_artist_search' => '; beaxt;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 223436,
      'music_track_id' => 0,
      'music_filename' => '1046001-e042258b.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Byeo-ri binnaneun areumda-un bamiya-iya
I bami yeongwonhagil nae soneul jababwah
Pureun talbichi areumda-un bamiya-iya
Nawah jeo haneu-reul keo-reobwah.

I\'m yours neomani nareul seolle-ge hae i\'m...',
      'music_artist_html' => '<a href="/ca-si/BEAST~Y3NuX2FydGlzdH4xNjE5.html">BEAST</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1046003,
      'music_title_url' => 'roly-poly~t-ara',
      'music_title' => 'Roly Poly',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538640839,
      'music_last_update_time' => 1355363684,
      'music_title_search' => 'roli poli',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1045662,
      'music_track_id' => 0,
      'music_filename' => '1046003-a7d977f5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Eodi-kkaji wah-nna tto eodi- sumeo-nna
Mame deu-reo wah-nna yayayayaya
I like you.

Eodi-seo osyeo-nnayo
Jakku nuni kaneyo
Keudae nunbichi
Naneun cham mame deuneyo.

Yeopeuro ka-go ship-jiman
Yongg...',
      'music_artist_html' => '<a href="/ca-si/T-Ara~Y3NuX2FydGlzdH4xNDEz.html">T-Ara</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1015379,
      'music_title_url' => 'gangnam-style~psy',
      'music_title' => 'Gangnam Style',
      'music_artist' => 'PSY',
      'music_artist_id' => '2645',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538481214,
      'music_last_update_time' => 1347270919,
      'music_title_search' => 'gangnam xtile',
      'music_artist_search' => '; pxi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6870203,
      'music_track_id' => 0,
      'music_filename' => '1015379-082a7571.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Oppan gang-namseutayil
Kang-namseutayil.

Naje-neun ttasaroun inkanjeo-gin yeoja
Keopi hanjanye yeoyureuraneun pumkyeok i-nneun yeoja
Bami omyeon shimjangi tteugeowojineun yeoja
Keureon banjeon i-n...',
      'music_artist_html' => '<a href="/ca-si/PSY~Y3NuX2FydGlzdH4yNjQ1.html">PSY</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1068782,
      'music_title_url' => 'blue~big-bang',
      'music_title' => 'Blue',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538987194,
      'music_last_update_time' => 1362016771,
      'music_title_search' => 'blue',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => 'Teddy; G-Dragon',
      'music_album' => '',
      'music_listen' => 455526,
      'music_track_id' => 0,
      'music_filename' => '1068782-a1f8d417.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Keuri-um so-ge mami meongdeu-reot-jyo
(i singing my blues) paran nun-mu-re paran seulpeume gildeulyeojyeo
(i\'m singing my blues) tteunkureume nallyeobonaen sarang oh oh.

Gateun haneul dareun gos n...',
      'music_artist_html' => '<a href="/ca-si/Big-Bang~Y3NuX2FydGlzdH45ODI=.html">Big Bang</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1638055,
      'music_title_url' => 'to-you~teen-top',
      'music_title' => 'To You',
      'music_artist' => 'Teen Top',
      'music_artist_id' => '2558',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538955562,
      'music_last_update_time' => 1458005143,
      'music_title_search' => 'to iou',
      'music_artist_search' => '; ten top;',
      'music_album_search' => '',
      'music_composer' => 'Teen Top',
      'music_album' => '',
      'music_listen' => 47773,
      'music_track_id' => 0,
      'music_filename' => '1638055-4784dbd6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'We gotta go. Teen Top and Brave Sound
Whoo woo hoo whoo woo hoo whoo woo hoo
Hey to you, to you, to you now
Whoo woo hoo whoo woo hoo whoo woo hoo
Hey to you, to you, to you now.

Neon nae mami deu...',
      'music_artist_html' => '<a href="/ca-si/Teen-Top~Y3NuX2FydGlzdH4yNTU4.html">Teen Top</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1935204,
      'music_title_url' => 'dont-say-goodbye-hoang-mang-vietnam-korea-festival-06042012~davichi',
      'music_title' => 'Don\'t Say Goodbye (안녕이라고 말하지마) + Hoang Mang (Vietnam Korea Festival 06.04.2012)',
      'music_artist' => 'Davichi',
      'music_artist_id' => '1050',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1533188451,
      'music_title_search' => 'don t xai godbi; 안녕이라고 말하지마 hoang mang; vitnam korea fextival 06 04 2012',
      'music_artist_search' => '; davichi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 58,
      'music_track_id' => 0,
      'music_filename' => '1935204-ff48b9b2.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Davichi~Y3NuX2FydGlzdH4xMDUw.html">Davichi</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 388168,
      'music_title_url' => 'superstar~nhieu-ca-si',
      'music_title' => 'Superstar',
      'music_artist' => 'Various Artists',
      'music_artist_id' => '97',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1473195296,
      'music_last_update_time' => 1350622937,
      'music_title_search' => 'xuperxtar',
      'music_artist_search' => '; varioux artixtx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6831,
      'music_track_id' => 0,
      'music_filename' => '388168-b1fdbc57.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Various-Artists~Y3NuX2FydGlzdH45Nw==.html">Various Artists</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 403385,
      'music_title_url' => 'believe-comeback-stage-070612-m-countdown~u-kiss',
      'music_title' => 'Believe (Comeback Stage 070612 M Countdown)',
      'music_artist' => 'U-Kiss',
      'music_artist_id' => '1809',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1457338253,
      'music_last_update_time' => 1350632692,
      'music_title_search' => 'belive; comeback xtage 070612 m countdown',
      'music_artist_search' => '; u kix;',
      'music_album_search' => '',
      'music_composer' => 'U-Kiss',
      'music_album' => '',
      'music_listen' => 4638,
      'music_track_id' => 0,
      'music_filename' => '403385-3dbe939f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Hey ladies and gentlemen
Want you to listen
Wanna know what it is
Hear this yeah
It\' our belief.

Shijakkwah kkeu-teun hangsang chesbakwiira-go
Saen ggakhajima ma-eumi
Kudke muneul dadjanha
Yeollin...',
      'music_artist_html' => '<a href="/ca-si/U-Kiss~Y3NuX2FydGlzdH4xODA5.html">U-Kiss</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 408079,
      'music_title_url' => 'beautiful-night~ulala-session',
      'music_title' => 'Beautiful Night',
      'music_artist' => 'Ulala Session',
      'music_artist_id' => '14752',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1402048357,
      'music_last_update_time' => 1350542295,
      'music_title_search' => 'beautiful night',
      'music_artist_search' => '; ulala xexion;',
      'music_album_search' => '',
      'music_composer' => 'Ulala Session',
      'music_album' => '',
      'music_listen' => 8953,
      'music_track_id' => 0,
      'music_filename' => '408079-c1a33976.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'O u ne nun so ge nol
Gu ri go 
Ni nun so ge nal
U rin 
Ya gyong cho rom 
Ban ja ko ri ne.

Na nun 
Nol cha u nun 
Champagne
No nun nal ke u nun 
Caffeine
Gu de wa na ye 
Bam i
A rum da un bam i
Yon...',
      'music_artist_html' => '<a href="/ca-si/Ulala-Session~Y3NuX2FydGlzdH4xNDc1Mg==.html">Ulala Session</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 408821,
      'music_title_url' => 'loving-u-dance-practice~sistar',
      'music_title' => 'Loving U (Dance Practice)',
      'music_artist' => 'Sistar',
      'music_artist_id' => '1916',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516651983,
      'music_last_update_time' => 1350366391,
      'music_title_search' => 'loving u; dance practice',
      'music_artist_search' => '; xixtar;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 57937,
      'music_track_id' => 0,
      'music_filename' => '408821-19d87c58.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Hey cham isanghae jeongmal strange
Ireon jeok eobseonneunde neol bolttaemada na dugeundugeun tteollineunge.

When i see your face honja mak sangsangeul hae
Na pyojeong gwalli andwae michil geot gat...',
      'music_artist_html' => '<a href="/ca-si/Sistar~Y3NuX2FydGlzdH4xOTE2.html">Sistar</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 411137,
      'music_title_url' => 'only-one-dance-version~boa',
      'music_title' => 'Only One (Dance Version)',
      'music_artist' => 'BoA',
      'music_artist_id' => '924',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1352697769,
      'music_last_update_time' => 1350445927,
      'music_title_search' => 'onli 1; dance verxion',
      'music_artist_search' => '; boa;',
      'music_album_search' => '',
      'music_composer' => 'BoA',
      'music_album' => '',
      'music_listen' => 6872,
      'music_track_id' => 0,
      'music_filename' => '411137-be7c37b4.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Meo-reojyeoman ganeun geudae you\'re the only one nae-ga sarang-haet-deon geonmankeum you\'re the only one
Apeu-go apeujiman pabo katjiman go-od bye tashi neol mot bonda haedo you\'re the only one
Onl...',
      'music_artist_html' => '<a href="/ca-si/BoA~Y3NuX2FydGlzdH45MjQ=.html">BoA</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 413636,
      'music_title_url' => 'beautiful-night-practice-version~beast',
      'music_title' => 'Beautiful Night (Practice Version)',
      'music_artist' => 'BEAST',
      'music_artist_id' => '1619',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1518630711,
      'music_last_update_time' => 1350525913,
      'music_title_search' => 'beautiful night; practice verxion',
      'music_artist_search' => '; beaxt;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 24832,
      'music_track_id' => 0,
      'music_filename' => '413636-1918d1eb.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Byeo-ri binnaneun areumda-un bamiya-iya
I bami yeongwonhagil nae soneul jababwah
Pureun talbichi areumda-un bamiya-iya
Nawah jeo haneu-reul keo-reobwah.

I\'m yours neomani nareul seolle-ge hae i\'m...',
      'music_artist_html' => '<a href="/ca-si/BEAST~Y3NuX2FydGlzdH4xNjE5.html">BEAST</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 417175,
      'music_title_url' => 'gangnam-style-290712-sbs-inkigayo~psy',
      'music_title' => 'Gangnam Style (29/07/12 SBS Inkigayo)',
      'music_artist' => 'PSY',
      'music_artist_id' => '2645',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497484623,
      'music_last_update_time' => 1477555314,
      'music_title_search' => 'gangnam xtile; 29;07;12 xbx inkigaio',
      'music_artist_search' => '; pxi;',
      'music_album_search' => '',
      'music_composer' => 'PSY',
      'music_album' => '',
      'music_listen' => 38516,
      'music_track_id' => 0,
      'music_filename' => '417175-99e42853.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Oppan Gang-namseutayil
Kang-namseutayil.

Naje-neun ttasaroun inkanjeo-gin yeoja
Keopi hanjanye yeoyureuraneun pumkyeok i-nneun yeoja
Bami omyeon shimjangi tteugeowojineun yeoja
Keureon banjeon i-n...',
      'music_artist_html' => '<a href="/ca-si/PSY~Y3NuX2FydGlzdH4yNjQ1.html">PSY</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 420277,
      'music_title_url' => 'gangnam-style-che~psy',
      'music_title' => 'Gangnam Style (Chế)',
      'music_artist' => 'PSY',
      'music_artist_id' => '2645',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519008548,
      'music_last_update_time' => 1478676547,
      'music_title_search' => 'gangnam xtile; che',
      'music_artist_search' => '; pxi;',
      'music_album_search' => '',
      'music_composer' => 'PSY',
      'music_album' => '',
      'music_listen' => 144015,
      'music_track_id' => 0,
      'music_filename' => '420277-0ab47131.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Oppan Gang-namseutayil
Kang-namseutayil.

Naje-neun ttasaroun inkanjeo-gin yeoja
Keopi hanjanye yeoyureuraneun pumkyeok i-nneun yeoja
Bami omyeon shimjangi tteugeowojineun yeoja
Keureon banjeon i-n...',
      'music_artist_html' => '<a href="/ca-si/PSY~Y3NuX2FydGlzdH4yNjQ1.html">PSY</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 423200,
      'music_title_url' => 'gangnam-style-new-york-style-version~psy',
      'music_title' => 'Gangnam Style (New York Style Version)',
      'music_artist' => 'PSY',
      'music_artist_id' => '2645',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1361977815,
      'music_last_update_time' => 1350523299,
      'music_title_search' => 'gangnam xtile; new iork xtile verxion',
      'music_artist_search' => '; pxi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 38830,
      'music_track_id' => 0,
      'music_filename' => '423200-adbacbf9.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Oppan gang-namseutayil
Kang-namseutayil.

Naje-neun ttasaroun inkanjeo-gin yeoja
Keopi hanjanye yeoyureuraneun pumkyeok i-nneun yeoja
Bami omyeon shimjangi tteugeowojineun yeoja
Keureon banjeon i-n...',
      'music_artist_html' => '<a href="/ca-si/PSY~Y3NuX2FydGlzdH4yNjQ1.html">PSY</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 423383,
      'music_title_url' => 'gangnam-style-live~psy',
      'music_title' => 'Gangnam Style (Live)',
      'music_artist' => 'PSY',
      'music_artist_id' => '2645',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1353556467,
      'music_last_update_time' => 1350541627,
      'music_title_search' => 'gangnam xtile; live',
      'music_artist_search' => '; pxi;',
      'music_album_search' => '',
      'music_composer' => 'PSY',
      'music_album' => '',
      'music_listen' => 6217,
      'music_track_id' => 0,
      'music_filename' => '423383-edfd13a9.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Oppan gang-namseutayil
Kang-namseutayil.

Naje-neun ttasaroun inkanjeo-gin yeoja
Keopi hanjanye yeoyureuraneun pumkyeok i-nneun yeoja
Bami omyeon shimjangi tteugeowojineun yeoja
Keureon banjeon i-n...',
      'music_artist_html' => '<a href="/ca-si/PSY~Y3NuX2FydGlzdH4yNjQ1.html">PSY</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 424419,
      'music_title_url' => 'get-out~aoa',
      'music_title' => 'Get Out',
      'music_artist' => 'AOA',
      'music_artist_id' => '4133',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1394340655,
      'music_last_update_time' => 1350375475,
      'music_title_search' => 'get out',
      'music_artist_search' => '; aoa;',
      'music_album_search' => '',
      'music_composer' => 'JYJ',
      'music_album' => '',
      'music_listen' => 14615,
      'music_track_id' => 0,
      'music_filename' => '424419-4c539626.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Pillyo eobseo I will kick you ah ah ah I wanna say good bye to you
Why neoneun naega animyeon maeryeok eomneun namja huh Chakgakhajima jebal you dont wanna taking about.

Neoneun dareun namjadeulg...',
      'music_artist_html' => '<a href="/ca-si/AOA~Y3NuX2FydGlzdH40MTMz.html">AOA</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 426803,
      'music_title_url' => 'please-don-t-261012-music-bank~kwill',
      'music_title' => 'Please Don\' t... (261012 Music Bank)',
      'music_artist' => 'K.Will',
      'music_artist_id' => '1528',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1449222465,
      'music_last_update_time' => 1357703797,
      'music_title_search' => 'pleaxe don t ; 261012 muxic bank',
      'music_artist_search' => '; k wil;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5348,
      'music_track_id' => 0,
      'music_filename' => '426803-02cb5e17.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Naranhi anjeun jadongcha sogeseon
Eumakdo heureuji anha
Neul japgo itdeon ni oensoneuro neo
Ipsulman tteutgo isseo.

Niga hal mal ara geu malmaneun mara
Dont know why dont know why
Ilbun ilcho de...',
      'music_artist_html' => '<a href="/ca-si/KWill~Y3NuX2FydGlzdH4xNTI4.html">K.Will</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1006798,
      'music_title_url' => 'sadness~led-apple',
      'music_title' => 'Sadness',
      'music_artist' => 'LED Apple',
      'music_artist_id' => '2533',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1423214558,
      'music_last_update_time' => 1341388702,
      'music_title_search' => 'xadnex',
      'music_artist_search' => '; led aple;',
      'music_album_search' => '',
      'music_composer' => 'LED Apple',
      'music_album' => '',
      'music_listen' => 10687,
      'music_track_id' => 0,
      'music_filename' => '1006798-babe7050.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Baby I don`t wanna cry
Jebal nal ullijima
Ireoda jugeulji molla
Baby don`t you break my heart
Naege sangcheo jujima
Dorawa niga piryohae.

Neoeui jib ape
Jaju gadeon cafe
Jigeum neoreul kidarineund...',
      'music_artist_html' => '<a href="/ca-si/LED-Apple~Y3NuX2FydGlzdH4yNTMz.html">LED Apple</a>',
    ),
  ),
  5 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1015072,
      'music_title_url' => 'all-my-love-is-for-you~girls-generation',
      'music_title' => 'All My Love Is For You',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516811447,
      'music_last_update_time' => 1477465782,
      'music_title_search' => 'al mi love ix for iou',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => 'Sebastian Thott; Junji Ishiwatari; Didrik Thott; Robin Lerner',
      'music_album' => '',
      'music_listen' => 155263,
      'music_track_id' => 0,
      'music_filename' => '1015072-d66fee6e.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Atarashī machi de notta densha no mado utsutta
Fuan sona me o shita watashi wa.

Anata ga oshiete kureta
Jibunrashisa wasurenaide
Ima mo kagayaite iru ka na.

Nagare teku keshiki futo shinkokyushit...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1017453,
      'music_title_url' => 'in-love-with-someone-koi-ni-koishite~mai-kuraki',
      'music_title' => 'In Love With Someone (Koi Ni Koishite; 恋に恋して)',
      'music_artist' => 'Mai Kuraki',
      'music_artist_id' => '4308',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1515679228,
      'music_last_update_time' => 1477465842,
      'music_title_search' => 'in love with xomeone; koi ni koithite; 恋に恋して',
      'music_artist_search' => '; mai kuraki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7409,
      'music_track_id' => 0,
      'music_filename' => '1017453-148bd95a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Kimi to no koi ni koi wo shiteru dake de tsutaetakute mo mada
Himitsu ni shiteru hou ga shiawase dakara ima wa watashi dake no secret love.

Kimi ni zenzen kyoumi nai
Uso you are my perfect guy
Tok...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1029520,
      'music_title_url' => 'niji-short-version~aaa',
      'music_title' => 'Niji | (虹; Short Version)',
      'music_artist' => 'AAA',
      'music_artist_id' => '4400',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512558554,
      'music_last_update_time' => 1477465657,
      'music_title_search' => 'niji ; 虹; thort verxion',
      'music_artist_search' => '; a;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5410,
      'music_track_id' => 0,
      'music_filename' => '1029520-b93572e7.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Kokomade aruite kita ashiato furikaeri nagamete ita doremo oboete iru yo
Hitotsu hitotsu mayotte ita magarikuneri nando mo tsumazuki kizutsuita yume ni chikazukitakute.

Nagedashite yowane wo haite...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089639,
      'music_title_url' => 'monster-japanese-short-verssion~big-bang',
      'music_title' => 'Monster (Japanese Short Verssion)',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498459466,
      'music_last_update_time' => 1477458574,
      'music_title_search' => 'monxter; japanexe thort verxion',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => 'G-Dragon; Teddy',
      'music_album' => '',
      'music_listen' => 1437,
      'music_track_id' => 0,
      'music_filename' => '1089639-3134118c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Still a long time since I\'ve seen you
You\'re beautiful forever in my eyes
You weren\'t the same you changed
So close but so distant
It\'s called miles away from the love you once.

Nantomo nai furish...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1213964,
      'music_title_url' => 'mangetsu-ni-hoero~chatmonchy',
      'music_title' => 'Mangetsu Ni Hoero (満月に吠えろ)',
      'music_artist' => 'Chatmonchy',
      'music_artist_id' => '18027',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530667061,
      'music_last_update_time' => 1477461273,
      'music_title_search' => 'mangetxu ni hoero; 満月に吠えろ',
      'music_artist_search' => '; chatmonchi;',
      'music_album_search' => '',
      'music_composer' => 'Chatmonchy',
      'music_album' => '',
      'music_listen' => 3089,
      'music_track_id' => 1,
      'music_filename' => '1213964-47dfe1ed.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Nimotsu wo nosete hashiridasu yoru wa nagai darou
Me no mae tobideta marugao no tsuki
Samayou tabibito odokashite
Kako no MEDARU kitori.

Kimi wa nani wo kanjiteru?
Daijoubu wa mou daremo iwanai
Da...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1714842,
      'music_title_url' => 'boku-ga-mou-sukoshi-daitan-nara-akagumi~nmb48',
      'music_title' => 'Boku ga Mou Sukoshi Daitan Nara (僕がもう少し大胆なら) / Akagumi',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1503744467,
      'music_last_update_time' => 1504333739,
      'music_title_search' => 'boku ga mou xukothi daitan nara; 僕がもう少し大胆なら ; akagumi',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 723,
      'music_track_id' => 2,
      'music_filename' => '1714842-9ce67bbc.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1715397,
      'music_title_url' => 'nagiichi~nmb48',
      'music_title' => 'Nagiichi (ナギイチ)',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537916877,
      'music_last_update_time' => 1504333720,
      'music_title_search' => 'nadichi; ナギイチ',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 28323,
      'music_track_id' => 1,
      'music_filename' => '1715397-96b2ab25.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1729545,
      'music_title_url' => 'shizuka-ni~natsumi-takamori',
      'music_title' => 'Shizuka Ni',
      'music_artist' => 'Natsumi Takamori',
      'music_artist_id' => '90650',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497009877,
      'music_last_update_time' => 1477379175,
      'music_title_search' => 'thizuka ni',
      'music_artist_search' => '; natxumi takamori;',
      'music_album_search' => '',
      'music_composer' => 'Hata Aki',
      'music_album' => '',
      'music_listen' => 275,
      'music_track_id' => 0,
      'music_filename' => '1729545-cf62f199.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Shizuka ni kanata wo nagameru
Shizuka ni subete wo akirame
Hitorikiri wo ukeireru.

Nanimokamo watashi no yoko wo
Toorisugite yuku kanashimi ni
Kimi ga kizuku furikaeru.

Tsubasa wo ushinatta (you...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1763063,
      'music_title_url' => 'esoragoto-answer-song~nanoripe',
      'music_title' => 'Esoragoto; Answer Song',
      'music_artist' => 'nano.RIPE',
      'music_artist_id' => '62800',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1515458627,
      'music_last_update_time' => 1486460302,
      'music_title_search' => 'exoragoto; anxwer xong',
      'music_artist_search' => '; nano ripe;',
      'music_album_search' => '',
      'music_composer' => 'Kimiko',
      'music_album' => '',
      'music_listen' => 2074,
      'music_track_id' => 0,
      'music_filename' => '1763063-41a61093.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797773,
      'music_title_url' => 'eien-pressure-cdtv-20121208~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (CDTV 2012.12.08)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1523499430,
      'music_last_update_time' => 1498000457,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; cdtv 2012 12 08',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1216,
      'music_track_id' => 0,
      'music_filename' => '1797773-ac590647.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797784,
      'music_title_url' => 'eien-pressure-fns-kayousai-2012-20121205~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (FNS Kayousai 2012 2012.12.05)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1517979013,
      'music_last_update_time' => 1498000463,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; fnx kaiouxai 2012 2012 12 05',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 569,
      'music_track_id' => 0,
      'music_filename' => '1797784-728ad1be.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797786,
      'music_title_url' => 'eien-pressure-kayou-kyoku-20121211~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (KAYOU-KYOKU 2012.12.11)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1505699130,
      'music_last_update_time' => 1498000467,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; kaiou kioku 2012 12 1',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 974,
      'music_track_id' => 0,
      'music_filename' => '1797786-387d2c5a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797792,
      'music_title_url' => 'eien-pressure-best-artist-2012-20121128~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (Best Artist 2012 2012.11.28)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530170719,
      'music_last_update_time' => 1497784639,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; bext artixt 2012 2012 1 28',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 577,
      'music_track_id' => 0,
      'music_filename' => '1797792-bf670310.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797787,
      'music_title_url' => 'eien-pressure-kayou-kyoku-20121225~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (KAYOU-KYOKU 2012.12.25)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530691290,
      'music_last_update_time' => 1498000470,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; kaiou kioku 2012 12 25',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 559,
      'music_track_id' => 0,
      'music_filename' => '1797787-6e3ac86f.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    14 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1797793,
      'music_title_url' => 'eien-pressure-best-hits-kayousai-20121122~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (Best Hits! Kayousai 2012.11.22)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1497786843,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; bext hitx kaiouxai 2012 1 2',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 92,
      'music_track_id' => 0,
      'music_filename' => '1797793-6be12ebf.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797820,
      'music_title_url' => 'eien-pressure-music-station-20121130~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (Music Station 2012.11.30)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1499863403,
      'music_last_update_time' => 1497786433,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; muxic xtation 2012 1 30',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 328,
      'music_track_id' => 0,
      'music_filename' => '1797820-d5520ada.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797821,
      'music_title_url' => 'eien-pressure-music-japan-20121209~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (Music Japan 2012.12.09)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1520561335,
      'music_last_update_time' => 1497786443,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; muxic japan 2012 12 09',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 936,
      'music_track_id' => 0,
      'music_filename' => '1797821-b48a2bdc.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797824,
      'music_title_url' => 'eien-pressure-kayou-kyoku-20121113~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (KAYOU-KYOKU 2012.11.13)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497970690,
      'music_last_update_time' => 1497786420,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; kaiou kioku 2012 1 13',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 326,
      'music_track_id' => 0,
      'music_filename' => '1797824-a7e639bb.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1810328,
      'music_title_url' => 'mousou-girlfriend~nmb48',
      'music_title' => 'Mousou Girlfriend (妄想ガールフレンド)',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519316816,
      'music_last_update_time' => 1501128226,
      'music_title_search' => 'mouxou drlfrind; 妄想ガールフレンド',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1224,
      'music_track_id' => 0,
      'music_filename' => '1810328-8ecfca2a.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'kimi wa GAARUFURENDO (GAARUFURENDO)
boku no GAARUFURENDO (GAARUFURENDO)
zutto daisuki datta yo
mune no oku no RABU KOORU ni
yatto kotaete kuretanda ne

[Yam/Wat] TEREBI no naka de
[Yam/Wat] hohoemu...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1810329,
      'music_title_url' => 'sonzai-shitenai-mono-akagumi~nmb48',
      'music_title' => 'Sonzai Shitenai Mono (存在してないもの) / Akagumi',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530188592,
      'music_last_update_time' => 1501128639,
      'music_title_search' => 'xonzai thitenai mono; 存在してないもの ; akagumi',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 317,
      'music_track_id' => 0,
      'music_filename' => '1810329-09bf45db.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'mado ni burasagaru kiyowa na tsuki wo
settoku dekiru no kana
donna utsukushii yozora de arou to
yagate asahi ni owareru darou

kono yo ni wa eien nado nainda
sou kimi wa usure kiete yuku zansou

so...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1015072,
      'music_title_url' => 'all-my-love-is-for-you~girls-generation',
      'music_title' => 'All My Love Is For You',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516811447,
      'music_last_update_time' => 1477465782,
      'music_title_search' => 'al mi love ix for iou',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => 'Sebastian Thott; Junji Ishiwatari; Didrik Thott; Robin Lerner',
      'music_album' => '',
      'music_listen' => 155263,
      'music_track_id' => 0,
      'music_filename' => '1015072-d66fee6e.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Atarashī machi de notta densha no mado utsutta
Fuan sona me o shita watashi wa.

Anata ga oshiete kureta
Jibunrashisa wasurenaide
Ima mo kagayaite iru ka na.

Nagare teku keshiki futo shinkokyushit...',
      'music_artist_html' => '<a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH45MjI=.html">Girls\' Generation</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1017453,
      'music_title_url' => 'in-love-with-someone-koi-ni-koishite~mai-kuraki',
      'music_title' => 'In Love With Someone (Koi Ni Koishite; 恋に恋して)',
      'music_artist' => 'Mai Kuraki',
      'music_artist_id' => '4308',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1515679228,
      'music_last_update_time' => 1477465842,
      'music_title_search' => 'in love with xomeone; koi ni koithite; 恋に恋して',
      'music_artist_search' => '; mai kuraki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7409,
      'music_track_id' => 0,
      'music_filename' => '1017453-148bd95a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Kimi to no koi ni koi wo shiteru dake de tsutaetakute mo mada
Himitsu ni shiteru hou ga shiawase dakara ima wa watashi dake no secret love.

Kimi ni zenzen kyoumi nai
Uso you are my perfect guy
Tok...',
      'music_artist_html' => '<a href="/ca-si/Mai-Kuraki~Y3NuX2FydGlzdH40MzA4.html">Mai Kuraki</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1029520,
      'music_title_url' => 'niji-short-version~aaa',
      'music_title' => 'Niji | (虹; Short Version)',
      'music_artist' => 'AAA',
      'music_artist_id' => '4400',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512558554,
      'music_last_update_time' => 1477465657,
      'music_title_search' => 'niji ; 虹; thort verxion',
      'music_artist_search' => '; a;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5410,
      'music_track_id' => 0,
      'music_filename' => '1029520-b93572e7.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Kokomade aruite kita ashiato furikaeri nagamete ita doremo oboete iru yo
Hitotsu hitotsu mayotte ita magarikuneri nando mo tsumazuki kizutsuita yume ni chikazukitakute.

Nagedashite yowane wo haite...',
      'music_artist_html' => '<a href="/ca-si/AAA~Y3NuX2FydGlzdH40NDAw.html">AAA</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089639,
      'music_title_url' => 'monster-japanese-short-verssion~big-bang',
      'music_title' => 'Monster (Japanese Short Verssion)',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498459466,
      'music_last_update_time' => 1477458574,
      'music_title_search' => 'monxter; japanexe thort verxion',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => 'G-Dragon; Teddy',
      'music_album' => '',
      'music_listen' => 1437,
      'music_track_id' => 0,
      'music_filename' => '1089639-3134118c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Still a long time since I\'ve seen you
You\'re beautiful forever in my eyes
You weren\'t the same you changed
So close but so distant
It\'s called miles away from the love you once.

Nantomo nai furish...',
      'music_artist_html' => '<a href="/ca-si/Big-Bang~Y3NuX2FydGlzdH45ODI=.html">Big Bang</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1213964,
      'music_title_url' => 'mangetsu-ni-hoero~chatmonchy',
      'music_title' => 'Mangetsu Ni Hoero (満月に吠えろ)',
      'music_artist' => 'Chatmonchy',
      'music_artist_id' => '18027',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530667061,
      'music_last_update_time' => 1477461273,
      'music_title_search' => 'mangetxu ni hoero; 満月に吠えろ',
      'music_artist_search' => '; chatmonchi;',
      'music_album_search' => '',
      'music_composer' => 'Chatmonchy',
      'music_album' => '',
      'music_listen' => 3089,
      'music_track_id' => 1,
      'music_filename' => '1213964-47dfe1ed.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Nimotsu wo nosete hashiridasu yoru wa nagai darou
Me no mae tobideta marugao no tsuki
Samayou tabibito odokashite
Kako no MEDARU kitori.

Kimi wa nani wo kanjiteru?
Daijoubu wa mou daremo iwanai
Da...',
      'music_artist_html' => '<a href="/ca-si/Chatmonchy~Y3NuX2FydGlzdH4xODAyNw==.html">Chatmonchy</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1714842,
      'music_title_url' => 'boku-ga-mou-sukoshi-daitan-nara-akagumi~nmb48',
      'music_title' => 'Boku ga Mou Sukoshi Daitan Nara (僕がもう少し大胆なら) / Akagumi',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1503744467,
      'music_last_update_time' => 1504333739,
      'music_title_search' => 'boku ga mou xukothi daitan nara; 僕がもう少し大胆なら ; akagumi',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 723,
      'music_track_id' => 2,
      'music_filename' => '1714842-9ce67bbc.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/NMB48~Y3NuX2FydGlzdH4xNjgyNg==.html">NMB48</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1715397,
      'music_title_url' => 'nagiichi~nmb48',
      'music_title' => 'Nagiichi (ナギイチ)',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537916877,
      'music_last_update_time' => 1504333720,
      'music_title_search' => 'nadichi; ナギイチ',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 28323,
      'music_track_id' => 1,
      'music_filename' => '1715397-96b2ab25.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/NMB48~Y3NuX2FydGlzdH4xNjgyNg==.html">NMB48</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1729545,
      'music_title_url' => 'shizuka-ni~natsumi-takamori',
      'music_title' => 'Shizuka Ni',
      'music_artist' => 'Natsumi Takamori',
      'music_artist_id' => '90650',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497009877,
      'music_last_update_time' => 1477379175,
      'music_title_search' => 'thizuka ni',
      'music_artist_search' => '; natxumi takamori;',
      'music_album_search' => '',
      'music_composer' => 'Hata Aki',
      'music_album' => '',
      'music_listen' => 275,
      'music_track_id' => 0,
      'music_filename' => '1729545-cf62f199.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Shizuka ni kanata wo nagameru
Shizuka ni subete wo akirame
Hitorikiri wo ukeireru.

Nanimokamo watashi no yoko wo
Toorisugite yuku kanashimi ni
Kimi ga kizuku furikaeru.

Tsubasa wo ushinatta (you...',
      'music_artist_html' => '<a href="/ca-si/Natsumi-Takamori~Y3NuX2FydGlzdH45MDY1MA==.html">Natsumi Takamori</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1763063,
      'music_title_url' => 'esoragoto-answer-song~nanoripe',
      'music_title' => 'Esoragoto; Answer Song',
      'music_artist' => 'nano.RIPE',
      'music_artist_id' => '62800',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1515458627,
      'music_last_update_time' => 1486460302,
      'music_title_search' => 'exoragoto; anxwer xong',
      'music_artist_search' => '; nano ripe;',
      'music_album_search' => '',
      'music_composer' => 'Kimiko',
      'music_album' => '',
      'music_listen' => 2074,
      'music_track_id' => 0,
      'music_filename' => '1763063-41a61093.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/nanoRIPE~Y3NuX2FydGlzdH42MjgwMA==.html">nano.RIPE</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797773,
      'music_title_url' => 'eien-pressure-cdtv-20121208~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (CDTV 2012.12.08)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1523499430,
      'music_last_update_time' => 1498000457,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; cdtv 2012 12 08',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1216,
      'music_track_id' => 0,
      'music_filename' => '1797773-ac590647.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797784,
      'music_title_url' => 'eien-pressure-fns-kayousai-2012-20121205~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (FNS Kayousai 2012 2012.12.05)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1517979013,
      'music_last_update_time' => 1498000463,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; fnx kaiouxai 2012 2012 12 05',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 569,
      'music_track_id' => 0,
      'music_filename' => '1797784-728ad1be.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797786,
      'music_title_url' => 'eien-pressure-kayou-kyoku-20121211~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (KAYOU-KYOKU 2012.12.11)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1505699130,
      'music_last_update_time' => 1498000467,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; kaiou kioku 2012 12 1',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 974,
      'music_track_id' => 0,
      'music_filename' => '1797786-387d2c5a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797792,
      'music_title_url' => 'eien-pressure-best-artist-2012-20121128~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (Best Artist 2012 2012.11.28)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530170719,
      'music_last_update_time' => 1497784639,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; bext artixt 2012 2012 1 28',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 577,
      'music_track_id' => 0,
      'music_filename' => '1797792-bf670310.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797787,
      'music_title_url' => 'eien-pressure-kayou-kyoku-20121225~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (KAYOU-KYOKU 2012.12.25)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530691290,
      'music_last_update_time' => 1498000470,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; kaiou kioku 2012 12 25',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 559,
      'music_track_id' => 0,
      'music_filename' => '1797787-6e3ac86f.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1797793,
      'music_title_url' => 'eien-pressure-best-hits-kayousai-20121122~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (Best Hits! Kayousai 2012.11.22)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1497786843,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; bext hitx kaiouxai 2012 1 2',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 92,
      'music_track_id' => 0,
      'music_filename' => '1797793-6be12ebf.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797820,
      'music_title_url' => 'eien-pressure-music-station-20121130~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (Music Station 2012.11.30)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1499863403,
      'music_last_update_time' => 1497786433,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; muxic xtation 2012 1 30',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 328,
      'music_track_id' => 0,
      'music_filename' => '1797820-d5520ada.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797821,
      'music_title_url' => 'eien-pressure-music-japan-20121209~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (Music Japan 2012.12.09)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1520561335,
      'music_last_update_time' => 1497786443,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; muxic japan 2012 12 09',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 936,
      'music_track_id' => 0,
      'music_filename' => '1797821-b48a2bdc.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797824,
      'music_title_url' => 'eien-pressure-kayou-kyoku-20121113~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (KAYOU-KYOKU 2012.11.13)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497970690,
      'music_last_update_time' => 1497786420,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; kaiou kioku 2012 1 13',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 326,
      'music_track_id' => 0,
      'music_filename' => '1797824-a7e639bb.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1810328,
      'music_title_url' => 'mousou-girlfriend~nmb48',
      'music_title' => 'Mousou Girlfriend (妄想ガールフレンド)',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519316816,
      'music_last_update_time' => 1501128226,
      'music_title_search' => 'mouxou drlfrind; 妄想ガールフレンド',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1224,
      'music_track_id' => 0,
      'music_filename' => '1810328-8ecfca2a.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'kimi wa GAARUFURENDO (GAARUFURENDO)
boku no GAARUFURENDO (GAARUFURENDO)
zutto daisuki datta yo
mune no oku no RABU KOORU ni
yatto kotaete kuretanda ne

[Yam/Wat] TEREBI no naka de
[Yam/Wat] hohoemu...',
      'music_artist_html' => '<a href="/ca-si/NMB48~Y3NuX2FydGlzdH4xNjgyNg==.html">NMB48</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1810329,
      'music_title_url' => 'sonzai-shitenai-mono-akagumi~nmb48',
      'music_title' => 'Sonzai Shitenai Mono (存在してないもの) / Akagumi',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530188592,
      'music_last_update_time' => 1501128639,
      'music_title_search' => 'xonzai thitenai mono; 存在してないもの ; akagumi',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 317,
      'music_track_id' => 0,
      'music_filename' => '1810329-09bf45db.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'mado ni burasagaru kiyowa na tsuki wo
settoku dekiru no kana
donna utsukushii yozora de arou to
yagate asahi ni owareru darou

kono yo ni wa eien nado nainda
sou kimi wa usure kiete yuku zansou

so...',
      'music_artist_html' => '<a href="/ca-si/NMB48~Y3NuX2FydGlzdH4xNjgyNg==.html">NMB48</a>',
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
      'music_id' => 1485179,
      'music_title_url' => 'got-to-believe-in-magic~juris',
      'music_title' => 'Got To Believe In Magic',
      'music_artist' => 'Juris',
      'music_artist_id' => '34085',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538493235,
      'music_last_update_time' => 1429665371,
      'music_title_search' => 'got to belive in madc',
      'music_artist_search' => '; jurix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5863,
      'music_track_id' => 0,
      'music_filename' => '1485179-db3fcec5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Take me to your heart
Show me where to start 
Let me play the part of your first love
All the stars are right
Ev\'ry wish is ours tonight, my love.

Pity those who wait
Trust in love to faith
Findin...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1288499,
      'music_title_url' => 'crossing-field~lisa',
      'music_title' => 'Crossing Field',
      'music_artist' => 'Lisa',
      'music_artist_id' => '11272',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538977792,
      'music_last_update_time' => 1403167395,
      'music_title_search' => 'croxing fild',
      'music_artist_search' => '; lixa;',
      'music_album_search' => '',
      'music_composer' => 'Watanabe Shou; Toku',
      'music_album' => '',
      'music_listen' => 13577,
      'music_track_id' => 0,
      'music_filename' => '1288499-aca63ec1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Mitomete ita okubyou na kako
Wakaranai mama ni kowagatte ita
Ushiro no jibun ga genjitsu wo ima ni utsusu.

Ikutsu mono sora wo kaita koko wa kitto
Hakanai kokoro midashite.

Yume de takaku tonda k...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1391804,
      'music_title_url' => 'uza-dance-version~akb48',
      'music_title' => 'UZA (Dance Version)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538629944,
      'music_last_update_time' => 1414549112,
      'music_title_search' => 'uza; dance verxion',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3200,
      'music_track_id' => 0,
      'music_filename' => '1391804-4969de80.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Kimi wa kimi de aiseba ii
Aite no koto wa kangaenakute ii
Omou ga mama ni aiseba ii
Un ga yokoreba aishi aeru kamo...

Kizutsuite mo kizutsukete mo
Honki de areba aru hodo kidzukanainda
No way

Sai...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1010561,
      'music_title_url' => 'in-love-with-someone-koi-ni-koishite~mai-kuraki',
      'music_title' => 'In Love With Someone (Koi Ni Koishite; 恋に恋して)',
      'music_artist' => 'Mai Kuraki',
      'music_artist_id' => '4308',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1509536594,
      'music_last_update_time' => 1345271989,
      'music_title_search' => 'in love with xomeone; koi ni koithite; 恋に恋して',
      'music_artist_search' => '; mai kuraki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12741,
      'music_track_id' => 0,
      'music_filename' => '1010561-cfc5cf5c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Kimi to no koi ni koi wo shiteru dake de tsutaetakute mo mada
Himitsu ni shiteru hou ga shiawase dakara ima wa watashi dake no secret love.

Kimi ni zenzen kyoumi nai
Uso you are my perfect guy
Tok...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1032516,
      'music_title_url' => 'flower-power~girls-generation',
      'music_title' => 'Flower Power',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1506086036,
      'music_last_update_time' => 1352858484,
      'music_title_search' => 'flower power',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 164211,
      'music_track_id' => 0,
      'music_filename' => '1032516-d9052b57.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Higari tto, yami no, maiyo naka weekend 
Dancin\' floors, scream and shout, sekai da human nature 
Kowasesen, wometome, kokei kino bota 
Asoubite, sekasueta, koi wa antabana.

Ah ah ah 
I\'m not gonn...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1042399,
      'music_title_url' => '1000-years-always-by-your-side~shinee',
      'music_title' => '1000 Years, Always By Your Side',
      'music_artist' => 'SHINee',
      'music_artist_id' => '1821',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512681739,
      'music_last_update_time' => 1355295012,
      'music_title_search' => '10 iarx alwaix bi iour xide',
      'music_artist_search' => '; thine;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 16423,
      'music_track_id' => 0,
      'music_filename' => '1042399-c2427853.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'I have to tell you something
How I wanna be with you, be with you.

Me ni mienai mono da atte katachi ga aru
Muri ni oshikondara kowarete shimau
Mune no kagi sashikondara
Hora onaji konna kiseki
Ko...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1069620,
      'music_title_url' => 'something-good~alt-j',
      'music_title' => 'Something Good',
      'music_artist' => 'Alt-J',
      'music_artist_id' => '29525',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537988438,
      'music_last_update_time' => 1478677959,
      'music_title_search' => 'xomething god',
      'music_artist_search' => '; alt j;',
      'music_album_search' => '',
      'music_composer' => 'Joe Newman; Gus Unger-Hamilton; Gwilym Sainsbury; Thom Green',
      'music_album' => '',
      'music_listen' => 1449,
      'music_track_id' => 0,
      'music_filename' => '1069620-25c4e1a8.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Something good, oh something good, oh something good
Oh something good tonight will make me forget about you for now.

Get high, hit the floor before you go
Matador, estocada, you\'re my blood sport...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1086796,
      'music_title_url' => 'bon-bon-vevo-live-carnival-2012~pitbull',
      'music_title' => 'Bon, Bon (Vevo Live! Carnival 2012)',
      'music_artist' => 'Pitbull',
      'music_artist_id' => '1814',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1517926649,
      'music_last_update_time' => 1368064877,
      'music_title_search' => 'bon bon; vevo live carnival 2012',
      'music_artist_search' => '; pitbul;',
      'music_album_search' => '',
      'music_composer' => 'Pitbull',
      'music_album' => '',
      'music_listen' => 1890,
      'music_track_id' => 0,
      'music_filename' => '1086796-e50eb987.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'This is worldwide
Esto aquí es para las mujeres
En la discoteca que están buenísimas… bellísimas… lindísimas
Y ya tú sabes el resto
Yo se lo doy a directtv je, je, je, je, je mira que tu estas rica...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089636,
      'music_title_url' => 'fantastic-baby-japanese-short-verssion~big-bang',
      'music_title' => 'Fantastic Baby (Japanese Short Verssion)',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493230039,
      'music_last_update_time' => 1368413452,
      'music_title_search' => 'fantaxtic babi; japanexe thort verxion',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => 'G-Dragon; Teddy',
      'music_album' => '',
      'music_listen' => 2994,
      'music_track_id' => 0,
      'music_filename' => '1089636-d148abc3.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Yoru ga kita mezama shina
We g\'on party like li li li la la la
Atsumari na kono party wa korekarasa
Li li li la la la.

Shunkan de kyacchi shitasono me wa
Mada asobi tari tenai alright
Hanbun demo...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089638,
      'music_title_url' => 'blue-japanese-short-verssion~big-bang',
      'music_title' => 'Blue (Japanese Short Verssion)',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496627036,
      'music_last_update_time' => 1368413563,
      'music_title_search' => 'blue; japanexe thort verxion',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => 'G-Dragon',
      'music_album' => '',
      'music_listen' => 906,
      'music_track_id' => 0,
      'music_filename' => '1089638-f65a9984.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Fuyu kara haru he kawaru
Kokoro wa natsukashi sa de aza darake.

I\'m singing my blues kanashimi mo namida mo aoku somaru
I\'m singing my blues ukigumo ni hanashi ta ai oh oh.

Mizukara hanare ta kar...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089640,
      'music_title_url' => 'bad-boy-japanese-short-version~big-bang',
      'music_title' => 'Bad Boy (Japanese Short Version)',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1430668982,
      'music_last_update_time' => 1368413737,
      'music_title_search' => 'bad boi; japanexe thort verxion',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => 'G-Dragon; Choice37',
      'music_album' => '',
      'music_listen' => 1161,
      'music_track_id' => 0,
      'music_filename' => '1089640-90f9bdfb.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Baby come back
Your choice drop it on me.

Ore ga hidosugita yoru no
Hontou ni wakareru to wa omowazu
Maji gomen no hitokoto iezu
Saigo made ore no warui seikaku
Konnani chiisai na koto de kenkau w...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1095229,
      'music_title_url' => 'algo-me-gusta-de-ti~wisin-yandel-chris-brown-t-pain',
      'music_title' => 'Algo Me Gusta De Ti',
      'music_artist' => 'Wisin &amp;Yandel;Chris Brown;T-Pain',
      'music_artist_id' => '16016;960;588;573',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1528591867,
      'music_last_update_time' => 1369639388,
      'music_title_search' => 'algo me guxta de ti',
      'music_artist_search' => '; wixin iandel; chrix brown; t pain;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4067,
      'music_track_id' => 0,
      'music_filename' => '1095229-c625e9e1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'WY Records
Presenta
A la leyenda viviente yandel
W.

Yandel
Hay algo que me gusta de ti
Y ese algo me encanta
Siento que eres necesaria para mi.

Me vuelve loco tu pelo, tu boca, tu piel, tu cintur...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1101383,
      'music_title_url' => 'ula-ula~illya-kuryaki-the-valderramas',
      'music_title' => 'Ula Ula',
      'music_artist' => 'Illya Kuryaki;The Valderramas',
      'music_artist_id' => '32293;32294',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498823979,
      'music_last_update_time' => 1371093124,
      'music_title_search' => 'ula ula',
      'music_artist_search' => '; ilia kuriaki; the valderamax;',
      'music_album_search' => '',
      'music_composer' => 'Illya Kuryaki; The Valderramas',
      'music_album' => '',
      'music_listen' => 948,
      'music_track_id' => 0,
      'music_filename' => '1101383-04e8ac23.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Hago que lo imposible sea posible
Que todo lo increíble se vuelva visible
Que todos tus sueños sean irrompibles 
Que tu imaginación vuele como un dirigible. 

Que los presidentes sean inteligentes...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1101776,
      'music_title_url' => 'si-te-agarro~dj-chino-fito-blanko-papayo',
      'music_title' => 'Si Te Agarro',
      'music_artist' => 'DJ Chino;Fito Blanko;Papayo',
      'music_artist_id' => '32331;32332;26499',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494715296,
      'music_last_update_time' => 1371119211,
      'music_title_search' => 'xi te agaro',
      'music_artist_search' => '; dj chino; fito blanko; papaio;',
      'music_album_search' => '',
      'music_composer' => 'DJ Chino; Fito Blanko; Papayo',
      'music_album' => '',
      'music_listen' => 1408,
      'music_track_id' => 0,
      'music_filename' => '1101776-cc0c1491.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1132542,
      'music_title_url' => 'el-beso~pablo-alboran',
      'music_title' => 'El Beso',
      'music_artist' => 'Pablo Alborán',
      'music_artist_id' => '23322',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533943617,
      'music_last_update_time' => 1378278110,
      'music_title_search' => 'el bexo',
      'music_artist_search' => '; pablo alboran;',
      'music_album_search' => '',
      'music_composer' => 'Pablo Alborán',
      'music_album' => '',
      'music_listen' => 1700,
      'music_track_id' => 0,
      'music_filename' => '1132542-e0fd5ebd.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Si un mar separa continentes 
Cien mares nos separan a los dos
Si yo pudiera ser valiente 
Sabría declararte mi amor 
Que en esta canción derrite mi voz 
Así es como yo traduzco el corazón. 

Me ll...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1132543,
      'music_title_url' => 'tanto~pablo-alboran',
      'music_title' => 'Tanto',
      'music_artist' => 'Pablo Alborán',
      'music_artist_id' => '23322',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534041453,
      'music_last_update_time' => 1378278041,
      'music_title_search' => 'tanto',
      'music_artist_search' => '; pablo alboran;',
      'music_album_search' => '',
      'music_composer' => 'Pablo Alborán',
      'music_album' => '',
      'music_listen' => 1628,
      'music_track_id' => 0,
      'music_filename' => '1132543-a194fb85.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Enséñame a rozarte lento
Quiero aprender a quererte, de nuevo
Susurrarte al oído, que puedo. 

Si quieres te dejo un minuto
Pensarte mis besos, mi cuerpo, y mi fuego 
Que yo espero si tardas, porqu...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1132545,
      'music_title_url' => 'tanto-version-fans~pablo-alboran',
      'music_title' => 'Tanto (Version Fans)',
      'music_artist' => 'Pablo Alborán',
      'music_artist_id' => '23322',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495493483,
      'music_last_update_time' => 1378278047,
      'music_title_search' => 'tanto; verxion fanx',
      'music_artist_search' => '; pablo alboran;',
      'music_album_search' => '',
      'music_composer' => 'Pablo Alborán',
      'music_album' => '',
      'music_listen' => 887,
      'music_track_id' => 0,
      'music_filename' => '1132545-90d86df1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Enséñame a rozarte lento
Quiero aprender a quererte, de nuevo
Susurrarte al oído, que puedo. 

Si quieres te dejo un minuto
Pensarte mis besos, mi cuerpo, y mi fuego 
Que yo espero si tardas, porqu...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1134221,
      'music_title_url' => 'clover-club-vietsub~hatsune-miku',
      'music_title' => 'Clover Club (Vietsub)',
      'music_artist' => 'Hatsune Miku',
      'music_artist_id' => '2021',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1518105460,
      'music_last_update_time' => 1378690981,
      'music_title_search' => 'clover club; vitxub',
      'music_artist_search' => '; hatxune miku;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9198,
      'music_track_id' => 0,
      'music_filename' => '1134221-b308d2af.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Aha kono sekai ga kurukuru mawaru yume de
Bokura kizuite runda
Min na shiranai furi de
Zutto kini naatteita
Anoko wa sotto boku ni
Naifu o tsuki tsukete warai
Mata ashitane to nosoku
Mawaru mawaru...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1154867,
      'music_title_url' => 'gloria-vietsub~yui',
      'music_title' => 'Gloria (Vietsub)',
      'music_artist' => 'Yui',
      'music_artist_id' => '11233',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512421267,
      'music_last_update_time' => 1382436514,
      'music_title_search' => 'gloria; vitxub',
      'music_artist_search' => '; iui;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3103,
      'music_track_id' => 0,
      'music_filename' => '1154867-1e2a8676.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Ah ah ah ah ah
Miwaku no tobira jyuurai no tenbou datte
Yuragisou ni naru seishun jidai de
Jinsei ga kawaru koishitai no ni
Okubyou ni naru mondai yamadzuminan da
Kotae wo michibiku tame ni ha this...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1169779,
      'music_title_url' => 'platinum-disco-nisemonogatari~iguchi-yuka',
      'music_title' => 'Platinum Disco (Nisemonogatari)',
      'music_artist' => 'Iguchi Yuka',
      'music_artist_id' => '36497',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522404503,
      'music_last_update_time' => 1384478534,
      'music_title_search' => 'platinum dixco; nixemonogatari',
      'music_artist_search' => '; iguchi iuka;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4858,
      'music_track_id' => 0,
      'music_filename' => '1169779-e6f6bf2e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Miwataseba ichimen
Hakkin no sekai ni
Ippo dake fumidashite
Itsu made mo tomaranai
Kono mune no tokimeki de
Issho ni odorou.

Kimi no senaka de ano hi mitsuketa tsuki ga
Kyou mo miraa booru mitai n...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1485179,
      'music_title_url' => 'got-to-believe-in-magic~juris',
      'music_title' => 'Got To Believe In Magic',
      'music_artist' => 'Juris',
      'music_artist_id' => '34085',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538493235,
      'music_last_update_time' => 1429665371,
      'music_title_search' => 'got to belive in madc',
      'music_artist_search' => '; jurix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5863,
      'music_track_id' => 0,
      'music_filename' => '1485179-db3fcec5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Take me to your heart
Show me where to start 
Let me play the part of your first love
All the stars are right
Ev\'ry wish is ours tonight, my love.

Pity those who wait
Trust in love to faith
Findin...',
      'music_artist_html' => '<a href="/ca-si/Juris~Y3NuX2FydGlzdH4zNDA4NQ==.html">Juris</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1288499,
      'music_title_url' => 'crossing-field~lisa',
      'music_title' => 'Crossing Field',
      'music_artist' => 'Lisa',
      'music_artist_id' => '11272',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538977792,
      'music_last_update_time' => 1403167395,
      'music_title_search' => 'croxing fild',
      'music_artist_search' => '; lixa;',
      'music_album_search' => '',
      'music_composer' => 'Watanabe Shou; Toku',
      'music_album' => '',
      'music_listen' => 13577,
      'music_track_id' => 0,
      'music_filename' => '1288499-aca63ec1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Mitomete ita okubyou na kako
Wakaranai mama ni kowagatte ita
Ushiro no jibun ga genjitsu wo ima ni utsusu.

Ikutsu mono sora wo kaita koko wa kitto
Hakanai kokoro midashite.

Yume de takaku tonda k...',
      'music_artist_html' => '<a href="/ca-si/Lisa~Y3NuX2FydGlzdH4xMTI3Mg==.html">Lisa</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1391804,
      'music_title_url' => 'uza-dance-version~akb48',
      'music_title' => 'UZA (Dance Version)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538629944,
      'music_last_update_time' => 1414549112,
      'music_title_search' => 'uza; dance verxion',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3200,
      'music_track_id' => 0,
      'music_filename' => '1391804-4969de80.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Kimi wa kimi de aiseba ii
Aite no koto wa kangaenakute ii
Omou ga mama ni aiseba ii
Un ga yokoreba aishi aeru kamo...

Kizutsuite mo kizutsukete mo
Honki de areba aru hodo kidzukanainda
No way

Sai...',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1010561,
      'music_title_url' => 'in-love-with-someone-koi-ni-koishite~mai-kuraki',
      'music_title' => 'In Love With Someone (Koi Ni Koishite; 恋に恋して)',
      'music_artist' => 'Mai Kuraki',
      'music_artist_id' => '4308',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1509536594,
      'music_last_update_time' => 1345271989,
      'music_title_search' => 'in love with xomeone; koi ni koithite; 恋に恋して',
      'music_artist_search' => '; mai kuraki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12741,
      'music_track_id' => 0,
      'music_filename' => '1010561-cfc5cf5c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Kimi to no koi ni koi wo shiteru dake de tsutaetakute mo mada
Himitsu ni shiteru hou ga shiawase dakara ima wa watashi dake no secret love.

Kimi ni zenzen kyoumi nai
Uso you are my perfect guy
Tok...',
      'music_artist_html' => '<a href="/ca-si/Mai-Kuraki~Y3NuX2FydGlzdH40MzA4.html">Mai Kuraki</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1032516,
      'music_title_url' => 'flower-power~girls-generation',
      'music_title' => 'Flower Power',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1506086036,
      'music_last_update_time' => 1352858484,
      'music_title_search' => 'flower power',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 164211,
      'music_track_id' => 0,
      'music_filename' => '1032516-d9052b57.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Higari tto, yami no, maiyo naka weekend 
Dancin\' floors, scream and shout, sekai da human nature 
Kowasesen, wometome, kokei kino bota 
Asoubite, sekasueta, koi wa antabana.

Ah ah ah 
I\'m not gonn...',
      'music_artist_html' => '<a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH45MjI=.html">Girls\' Generation</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1042399,
      'music_title_url' => '1000-years-always-by-your-side~shinee',
      'music_title' => '1000 Years, Always By Your Side',
      'music_artist' => 'SHINee',
      'music_artist_id' => '1821',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512681739,
      'music_last_update_time' => 1355295012,
      'music_title_search' => '10 iarx alwaix bi iour xide',
      'music_artist_search' => '; thine;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 16423,
      'music_track_id' => 0,
      'music_filename' => '1042399-c2427853.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'I have to tell you something
How I wanna be with you, be with you.

Me ni mienai mono da atte katachi ga aru
Muri ni oshikondara kowarete shimau
Mune no kagi sashikondara
Hora onaji konna kiseki
Ko...',
      'music_artist_html' => '<a href="/ca-si/SHINee~Y3NuX2FydGlzdH4xODIx.html">SHINee</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1069620,
      'music_title_url' => 'something-good~alt-j',
      'music_title' => 'Something Good',
      'music_artist' => 'Alt-J',
      'music_artist_id' => '29525',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537988438,
      'music_last_update_time' => 1478677959,
      'music_title_search' => 'xomething god',
      'music_artist_search' => '; alt j;',
      'music_album_search' => '',
      'music_composer' => 'Joe Newman; Gus Unger-Hamilton; Gwilym Sainsbury; Thom Green',
      'music_album' => '',
      'music_listen' => 1449,
      'music_track_id' => 0,
      'music_filename' => '1069620-25c4e1a8.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Something good, oh something good, oh something good
Oh something good tonight will make me forget about you for now.

Get high, hit the floor before you go
Matador, estocada, you\'re my blood sport...',
      'music_artist_html' => '<a href="/ca-si/Alt-J~Y3NuX2FydGlzdH4yOTUyNQ==.html">Alt-J</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1086796,
      'music_title_url' => 'bon-bon-vevo-live-carnival-2012~pitbull',
      'music_title' => 'Bon, Bon (Vevo Live! Carnival 2012)',
      'music_artist' => 'Pitbull',
      'music_artist_id' => '1814',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1517926649,
      'music_last_update_time' => 1368064877,
      'music_title_search' => 'bon bon; vevo live carnival 2012',
      'music_artist_search' => '; pitbul;',
      'music_album_search' => '',
      'music_composer' => 'Pitbull',
      'music_album' => '',
      'music_listen' => 1890,
      'music_track_id' => 0,
      'music_filename' => '1086796-e50eb987.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'This is worldwide
Esto aquí es para las mujeres
En la discoteca que están buenísimas… bellísimas… lindísimas
Y ya tú sabes el resto
Yo se lo doy a directtv je, je, je, je, je mira que tu estas rica...',
      'music_artist_html' => '<a href="/ca-si/Pitbull~Y3NuX2FydGlzdH4xODE0.html">Pitbull</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089636,
      'music_title_url' => 'fantastic-baby-japanese-short-verssion~big-bang',
      'music_title' => 'Fantastic Baby (Japanese Short Verssion)',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493230039,
      'music_last_update_time' => 1368413452,
      'music_title_search' => 'fantaxtic babi; japanexe thort verxion',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => 'G-Dragon; Teddy',
      'music_album' => '',
      'music_listen' => 2994,
      'music_track_id' => 0,
      'music_filename' => '1089636-d148abc3.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Yoru ga kita mezama shina
We g\'on party like li li li la la la
Atsumari na kono party wa korekarasa
Li li li la la la.

Shunkan de kyacchi shitasono me wa
Mada asobi tari tenai alright
Hanbun demo...',
      'music_artist_html' => '<a href="/ca-si/Big-Bang~Y3NuX2FydGlzdH45ODI=.html">Big Bang</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089638,
      'music_title_url' => 'blue-japanese-short-verssion~big-bang',
      'music_title' => 'Blue (Japanese Short Verssion)',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496627036,
      'music_last_update_time' => 1368413563,
      'music_title_search' => 'blue; japanexe thort verxion',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => 'G-Dragon',
      'music_album' => '',
      'music_listen' => 906,
      'music_track_id' => 0,
      'music_filename' => '1089638-f65a9984.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Fuyu kara haru he kawaru
Kokoro wa natsukashi sa de aza darake.

I\'m singing my blues kanashimi mo namida mo aoku somaru
I\'m singing my blues ukigumo ni hanashi ta ai oh oh.

Mizukara hanare ta kar...',
      'music_artist_html' => '<a href="/ca-si/Big-Bang~Y3NuX2FydGlzdH45ODI=.html">Big Bang</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089640,
      'music_title_url' => 'bad-boy-japanese-short-version~big-bang',
      'music_title' => 'Bad Boy (Japanese Short Version)',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1430668982,
      'music_last_update_time' => 1368413737,
      'music_title_search' => 'bad boi; japanexe thort verxion',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => 'G-Dragon; Choice37',
      'music_album' => '',
      'music_listen' => 1161,
      'music_track_id' => 0,
      'music_filename' => '1089640-90f9bdfb.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Baby come back
Your choice drop it on me.

Ore ga hidosugita yoru no
Hontou ni wakareru to wa omowazu
Maji gomen no hitokoto iezu
Saigo made ore no warui seikaku
Konnani chiisai na koto de kenkau w...',
      'music_artist_html' => '<a href="/ca-si/Big-Bang~Y3NuX2FydGlzdH45ODI=.html">Big Bang</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1095229,
      'music_title_url' => 'algo-me-gusta-de-ti~wisin-yandel-chris-brown-t-pain',
      'music_title' => 'Algo Me Gusta De Ti',
      'music_artist' => 'Wisin &amp;Yandel;Chris Brown;T-Pain',
      'music_artist_id' => '16016;960;588;573',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1528591867,
      'music_last_update_time' => 1369639388,
      'music_title_search' => 'algo me guxta de ti',
      'music_artist_search' => '; wixin iandel; chrix brown; t pain;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4067,
      'music_track_id' => 0,
      'music_filename' => '1095229-c625e9e1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'WY Records
Presenta
A la leyenda viviente yandel
W.

Yandel
Hay algo que me gusta de ti
Y ese algo me encanta
Siento que eres necesaria para mi.

Me vuelve loco tu pelo, tu boca, tu piel, tu cintur...',
      'music_artist_html' => '<a href="/ca-si/Wisin-amp~Y3NuX2FydGlzdH4xNjAxNg==.html">Wisin &amp</a>, <a href="/ca-si/Yandel~Y3NuX2FydGlzdH45NjA=.html">Yandel</a>, <a href="/ca-si/Chris-Brown~Y3NuX2FydGlzdH41ODg=.html">Chris Brown</a>, <a href="/ca-si/T-Pain~Y3NuX2FydGlzdH41NzM=.html">T-Pain</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1101383,
      'music_title_url' => 'ula-ula~illya-kuryaki-the-valderramas',
      'music_title' => 'Ula Ula',
      'music_artist' => 'Illya Kuryaki;The Valderramas',
      'music_artist_id' => '32293;32294',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498823979,
      'music_last_update_time' => 1371093124,
      'music_title_search' => 'ula ula',
      'music_artist_search' => '; ilia kuriaki; the valderamax;',
      'music_album_search' => '',
      'music_composer' => 'Illya Kuryaki; The Valderramas',
      'music_album' => '',
      'music_listen' => 948,
      'music_track_id' => 0,
      'music_filename' => '1101383-04e8ac23.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Hago que lo imposible sea posible
Que todo lo increíble se vuelva visible
Que todos tus sueños sean irrompibles 
Que tu imaginación vuele como un dirigible. 

Que los presidentes sean inteligentes...',
      'music_artist_html' => '<a href="/ca-si/Illya-Kuryaki~Y3NuX2FydGlzdH4zMjI5Mw==.html">Illya Kuryaki</a>, <a href="/ca-si/The-Valderramas~Y3NuX2FydGlzdH4zMjI5NA==.html">The Valderramas</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1101776,
      'music_title_url' => 'si-te-agarro~dj-chino-fito-blanko-papayo',
      'music_title' => 'Si Te Agarro',
      'music_artist' => 'DJ Chino;Fito Blanko;Papayo',
      'music_artist_id' => '32331;32332;26499',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494715296,
      'music_last_update_time' => 1371119211,
      'music_title_search' => 'xi te agaro',
      'music_artist_search' => '; dj chino; fito blanko; papaio;',
      'music_album_search' => '',
      'music_composer' => 'DJ Chino; Fito Blanko; Papayo',
      'music_album' => '',
      'music_listen' => 1408,
      'music_track_id' => 0,
      'music_filename' => '1101776-cc0c1491.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/DJ-Chino~Y3NuX2FydGlzdH4zMjMzMQ==.html">DJ Chino</a>, <a href="/ca-si/Fito-Blanko~Y3NuX2FydGlzdH4zMjMzMg==.html">Fito Blanko</a>, <a href="/ca-si/Papayo~Y3NuX2FydGlzdH4yNjQ5OQ==.html">Papayo</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1132542,
      'music_title_url' => 'el-beso~pablo-alboran',
      'music_title' => 'El Beso',
      'music_artist' => 'Pablo Alborán',
      'music_artist_id' => '23322',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533943617,
      'music_last_update_time' => 1378278110,
      'music_title_search' => 'el bexo',
      'music_artist_search' => '; pablo alboran;',
      'music_album_search' => '',
      'music_composer' => 'Pablo Alborán',
      'music_album' => '',
      'music_listen' => 1700,
      'music_track_id' => 0,
      'music_filename' => '1132542-e0fd5ebd.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Si un mar separa continentes 
Cien mares nos separan a los dos
Si yo pudiera ser valiente 
Sabría declararte mi amor 
Que en esta canción derrite mi voz 
Así es como yo traduzco el corazón. 

Me ll...',
      'music_artist_html' => '<a href="/ca-si/Pablo-Alboran~Y3NuX2FydGlzdH4yMzMyMg==.html">Pablo Alborán</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1132543,
      'music_title_url' => 'tanto~pablo-alboran',
      'music_title' => 'Tanto',
      'music_artist' => 'Pablo Alborán',
      'music_artist_id' => '23322',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534041453,
      'music_last_update_time' => 1378278041,
      'music_title_search' => 'tanto',
      'music_artist_search' => '; pablo alboran;',
      'music_album_search' => '',
      'music_composer' => 'Pablo Alborán',
      'music_album' => '',
      'music_listen' => 1628,
      'music_track_id' => 0,
      'music_filename' => '1132543-a194fb85.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Enséñame a rozarte lento
Quiero aprender a quererte, de nuevo
Susurrarte al oído, que puedo. 

Si quieres te dejo un minuto
Pensarte mis besos, mi cuerpo, y mi fuego 
Que yo espero si tardas, porqu...',
      'music_artist_html' => '<a href="/ca-si/Pablo-Alboran~Y3NuX2FydGlzdH4yMzMyMg==.html">Pablo Alborán</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1132545,
      'music_title_url' => 'tanto-version-fans~pablo-alboran',
      'music_title' => 'Tanto (Version Fans)',
      'music_artist' => 'Pablo Alborán',
      'music_artist_id' => '23322',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495493483,
      'music_last_update_time' => 1378278047,
      'music_title_search' => 'tanto; verxion fanx',
      'music_artist_search' => '; pablo alboran;',
      'music_album_search' => '',
      'music_composer' => 'Pablo Alborán',
      'music_album' => '',
      'music_listen' => 887,
      'music_track_id' => 0,
      'music_filename' => '1132545-90d86df1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Enséñame a rozarte lento
Quiero aprender a quererte, de nuevo
Susurrarte al oído, que puedo. 

Si quieres te dejo un minuto
Pensarte mis besos, mi cuerpo, y mi fuego 
Que yo espero si tardas, porqu...',
      'music_artist_html' => '<a href="/ca-si/Pablo-Alboran~Y3NuX2FydGlzdH4yMzMyMg==.html">Pablo Alborán</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1134221,
      'music_title_url' => 'clover-club-vietsub~hatsune-miku',
      'music_title' => 'Clover Club (Vietsub)',
      'music_artist' => 'Hatsune Miku',
      'music_artist_id' => '2021',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1518105460,
      'music_last_update_time' => 1378690981,
      'music_title_search' => 'clover club; vitxub',
      'music_artist_search' => '; hatxune miku;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9198,
      'music_track_id' => 0,
      'music_filename' => '1134221-b308d2af.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Aha kono sekai ga kurukuru mawaru yume de
Bokura kizuite runda
Min na shiranai furi de
Zutto kini naatteita
Anoko wa sotto boku ni
Naifu o tsuki tsukete warai
Mata ashitane to nosoku
Mawaru mawaru...',
      'music_artist_html' => '<a href="/ca-si/Hatsune-Miku~Y3NuX2FydGlzdH4yMDIx.html">Hatsune Miku</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1154867,
      'music_title_url' => 'gloria-vietsub~yui',
      'music_title' => 'Gloria (Vietsub)',
      'music_artist' => 'Yui',
      'music_artist_id' => '11233',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512421267,
      'music_last_update_time' => 1382436514,
      'music_title_search' => 'gloria; vitxub',
      'music_artist_search' => '; iui;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3103,
      'music_track_id' => 0,
      'music_filename' => '1154867-1e2a8676.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Ah ah ah ah ah
Miwaku no tobira jyuurai no tenbou datte
Yuragisou ni naru seishun jidai de
Jinsei ga kawaru koishitai no ni
Okubyou ni naru mondai yamadzuminan da
Kotae wo michibiku tame ni ha this...',
      'music_artist_html' => '<a href="/ca-si/Yui~Y3NuX2FydGlzdH4xMTIzMw==.html">Yui</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1169779,
      'music_title_url' => 'platinum-disco-nisemonogatari~iguchi-yuka',
      'music_title' => 'Platinum Disco (Nisemonogatari)',
      'music_artist' => 'Iguchi Yuka',
      'music_artist_id' => '36497',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522404503,
      'music_last_update_time' => 1384478534,
      'music_title_search' => 'platinum dixco; nixemonogatari',
      'music_artist_search' => '; iguchi iuka;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4858,
      'music_track_id' => 0,
      'music_filename' => '1169779-e6f6bf2e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Miwataseba ichimen
Hakkin no sekai ni
Ippo dake fumidashite
Itsu made mo tomaranai
Kono mune no tokimeki de
Issho ni odorou.

Kimi no senaka de ano hi mitsuketa tsuki ga
Kyou mo miraa booru mitai n...',
      'music_artist_html' => '<a href="/ca-si/Iguchi-Yuka~Y3NuX2FydGlzdH4zNjQ5Nw==.html">Iguchi Yuka</a>',
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