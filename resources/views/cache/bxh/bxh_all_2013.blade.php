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
      'music_id' => 1577700,
      'music_title_url' => 'ta-tu-trong-dem~dan-nguyen-ha-thanh-xuan',
      'music_title' => 'Tạ Từ Trong Đêm',
      'music_artist' => 'Đan Nguyên;Hà Thanh Xuân',
      'music_artist_id' => '2347;7393',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539034035,
      'music_last_update_time' => 1446487650,
      'music_title_search' => 'ta tu chong dem',
      'music_artist_search' => '; dan ngin; ha thanh xuan;',
      'music_album_search' => '',
      'music_composer' => 'Trần Thiện Thanh',
      'music_album' => '',
      'music_listen' => 1071521,
      'music_track_id' => 0,
      'music_filename' => '1577700-a617d5e7.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Thăm thẳm chiều trôi
Khuya anh đi rồi sao trời đưa lối
Khi thương mến nhau
Hai người hai ngả tránh sao bồi hồi.

Hẹn gặp nhau đây đêm thâu lá đổ
Sương giăng kín mờ nhạt nhoà ước mơ
Đã gặp nhau rồi,...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1225127,
      'music_title_url' => 'nhat-nang~hoang-thuc-linh',
      'music_title' => 'Nhạt Nắng',
      'music_artist' => 'Hoàng Thục Linh',
      'music_artist_id' => '13153',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538788898,
      'music_last_update_time' => 1397667563,
      'music_title_search' => 'nhat nang',
      'music_artist_search' => '; hoang thuc linh;',
      'music_album_search' => '',
      'music_composer' => 'Y Vân',
      'music_album' => '',
      'music_listen' => 192985,
      'music_track_id' => 0,
      'music_filename' => '1225127-cd709e5c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Tôi thương miền quê, nhớ hoàng hôn trên đất xưa 
Nghe tiếng tiêu mơ màng chiều hè 
Tôi yêu người xưa áo nâu hương duyên thật thà 
Đời mặn nồng hồng lên đôi má. 

Nhưng thôi giờ đây nắng tàn phai...',
    ),
    2 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1908737,
      'music_title_url' => 'giong-ca-di-vang~nhu-quynh',
      'music_title' => 'Giọng Ca Dĩ Vãng',
      'music_artist' => 'Như Quỳnh',
      'music_artist_id' => '32',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538982303,
      'music_last_update_time' => 1526821213,
      'music_title_search' => 'dong ca di vang',
      'music_artist_search' => '; nhu qinh;',
      'music_album_search' => '',
      'music_composer' => 'Bảo Thu',
      'music_album' => '',
      'music_listen' => 2859,
      'music_track_id' => 0,
      'music_filename' => '1908737-a167b2f9.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Ngày xưa mỗi lần em buông tiếng hát
Thì anh tay phiếm nắn nót cung đàn
Từng nhịp nhặt khoan anh ru hồn theo tiếng tơ
Nhẹ dịu lời ca em thăng trầm theo từng lúc
Và rồi hờn yêu em mỗi lần em hát sai...',
    ),
    3 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1946619,
      'music_title_url' => 'toi-van-nho~quang-le-quynh-dung',
      'music_title' => 'Tôi Vẫn Nhớ',
      'music_artist' => 'Quang Lê;Quỳnh Dung',
      'music_artist_id' => '1770;6137',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539058919,
      'music_last_update_time' => 1535008516,
      'music_title_search' => 'toi van nho',
      'music_artist_search' => '; quang le; qinh dung;',
      'music_album_search' => '',
      'music_composer' => 'Ngân Giang',
      'music_album' => '',
      'music_listen' => 1821,
      'music_track_id' => 0,
      'music_filename' => '1946619-673d5028.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Bao năm qua dù xa anh nhưng tôi vẫn nhớ
Nhớ con đường nắng u buồn
Dìu nhau đi tìm râm bóng mát
Lòng bâng khuâng nghĩ chuyện vu vơ.

Tôi vẫn nhớ, nhớ đêm hẹn hò bên trăng sao
Từng câu nói yêu đươ...',
    ),
    4 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1133117,
      'music_title_url' => 'xa-vang~thien-kim',
      'music_title' => 'Xa Vắng',
      'music_artist' => 'Thiên Kim',
      'music_artist_id' => '2156',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539038989,
      'music_last_update_time' => 1378442524,
      'music_title_search' => 'xa vang',
      'music_artist_search' => '; thin kim;',
      'music_album_search' => '',
      'music_composer' => 'Y Vân',
      'music_album' => '',
      'music_listen' => 76231,
      'music_track_id' => 0,
      'music_filename' => '1133117-99ac1e49.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Ngày anh xa vắng
Em không trang điểm đợi chờ
Những đêm gió lạnh đầu hè
Khuê phòng ủ kín tâm tư.

Nhìn từng hạt mưa sa
Thương đời biển sầu bao la
Để cho cành hoa héo khô
Lỡ cung ái ân xuân thì.

Ngà...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1880806,
      'music_title_url' => 'hai-que~tan-nhan',
      'music_title' => 'Hai Quê',
      'music_artist' => 'Tân Nhàn',
      'music_artist_id' => '2391',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538803593,
      'music_last_update_time' => 1519873309,
      'music_title_search' => '2 que',
      'music_artist_search' => '; tan nhan;',
      'music_album_search' => '',
      'music_composer' => 'Đinh Miên Vũ',
      'music_album' => '',
      'music_listen' => 6737,
      'music_track_id' => 0,
      'music_filename' => '1880806-e3e9bb53.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ơ tôi lớn lên bờ Tam Giang nước mặn
Những chiều không mây trắng lững lờ trôi
Rồi xuôi ngược theo dòng đời năm tháng
Ơn quê người mà chạnh nhớ quê tôi.

Quê tôi nhớ thuở nào tháng ngày đời gieo neo...',
    ),
    6 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1950039,
      'music_title_url' => 'anh-hay-ve-di~truong-vu-mai-thien-van',
      'music_title' => 'Anh Hãy Về Đi',
      'music_artist' => 'Trường Vũ;Mai Thiên Vân',
      'music_artist_id' => '1163;2316',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539060219,
      'music_last_update_time' => 1536054250,
      'music_title_search' => 'em hai ve di',
      'music_artist_search' => '; chung vu; mai thin van;',
      'music_album_search' => '',
      'music_composer' => 'Sang Đông; Ngân Trang',
      'music_album' => '',
      'music_listen' => 1076,
      'music_track_id' => 0,
      'music_filename' => '1950039-ffaa534e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Đừng nói yêu em khi còn trắng tay 
Đừng để cho em khổ luỵ sau này 
Đời không đơn sơ dễ tính 
Đời mang trên vai nặng gánh 
Mà tình yêu tựa chiếc lá mong manh. 

Một mái tranh sơ khó mà ước mong 
Đừn...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1084571,
      'music_title_url' => 'vut-bay~ong-cao-thang-dong-nhi-noo-phu',
      'music_title' => 'Vút Bay',
      'music_artist' => 'Ông Cao Thắng;Đông Nhi;Noo Phước Thịnh;Thanh Bùi;365daband;Kimmese;Cường 7;Justatee;Mr.T;Yanbi;Vân Trang;Sĩ Thanh;Tâm Tít;Trương Nam Thành',
      'music_artist_id' => '849;706;1611;1418;2134;2663;3255;2057;1577;1216;3445;2925;3289;3381',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538796179,
      'music_last_update_time' => 1474095152,
      'music_title_search' => 'vut bai',
      'music_artist_search' => '; ong cao thang; dong nhi; no phuc thinh; thanh bui; 365daband; kimexe; cung 7; juxtate; mr t; ianbi; van chang; xi thanh; tam tit; chung 5 thanh;',
      'music_album_search' => '',
      'music_composer' => 'Thanh Bùi; Hoàng Huy Long',
      'music_album' => '',
      'music_listen' => 110570,
      'music_track_id' => 0,
      'music_filename' => '1084571-7f87bd36.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => '1. Có lúc cuộc đời đầy niềm vui, babe
Mà cũng có khi đôi chân ta mỏi mệt, yeah
Tìm bầu trời tự do cho ta chắp cánh
Là nơi ấy con tim bình yên
Nhẹ nhàng tựa làn mây, ta bay cùng gió khắp trần gian....',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1098415,
      'music_title_url' => 'cho-toi-xin-mot-ve-di-tuoi-tho~lynk-lee',
      'music_title' => 'Cho Tôi Xin Một Vé Đi Tuổi Thơ',
      'music_artist' => 'Lynk Lee',
      'music_artist_id' => '1328',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538608491,
      'music_last_update_time' => 1370399105,
      'music_title_search' => 'cho toi xin 1 ve di tui tho',
      'music_artist_search' => '; link le;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Mạnh Hoàng',
      'music_album' => '',
      'music_listen' => 88535,
      'music_track_id' => 0,
      'music_filename' => '1098415-449085ec.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Cho tôi xin một vé đi tuổi thơ
Để trở về với giấc mơ ngày xưa
Bút mực, truyện tranh những gói bỏng ngô trong ngăn bàn.

Cho tôi xin về lại thời tập tô
Để vẽ ông mặt trời cười hiền như bố
Những c...',
    ),
    9 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1154791,
      'music_title_url' => 'lien-khuc-nguoi-yeu-co-don-doi-con-co-don~tuan-vu-son-tuyen',
      'music_title' => 'Liên Khúc: Người Yêu Cô Đơn; Đời Còn Cô Đơn',
      'music_artist' => 'Tuấn Vũ;Sơn Tuyền',
      'music_artist_id' => '5236;4487',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539064328,
      'music_last_update_time' => 1382449633,
      'music_title_search' => 'lin khuc; ngui iu co don; doi con co don',
      'music_artist_search' => '; tuan vu; xon tin;',
      'music_album_search' => '',
      'music_composer' => 'Đài Phương Trang',
      'music_album' => '',
      'music_listen' => 94970,
      'music_track_id' => 0,
      'music_filename' => '1154791-087934f6.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '--- Người Yêu Cô Đơn ---

Đời tôi cô đơn nên yêu ai cũng không duyên
Đời tôi cô đơn nên yêu ai cũng không thành
Đời tôi cô đơn nên yêu ai cũng dở dang
Yêu ai cũng lỡ làng dù rằng tôi chẳng lỗi chi....',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1162616,
      'music_title_url' => 'lien-khuc-sa-mac-tinh-yeu-doi-da-vang~thien-kim-y-phuong',
      'music_title' => 'Liên Khúc: Sa Mạc Tình Yêu; Đời Đá Vàng',
      'music_artist' => 'Thiên Kim;Y Phương',
      'music_artist_id' => '2156;2157',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538776302,
      'music_last_update_time' => 1383489521,
      'music_title_search' => 'lin khuc; xa mac tinh iu; doi da vang',
      'music_artist_search' => '; thin kim; i phung;',
      'music_album_search' => '',
      'music_composer' => 'Lời: Khúc Lan; Vũ Thành An',
      'music_album' => '',
      'music_listen' => 35877,
      'music_track_id' => 0,
      'music_filename' => '1162616-02f432e6.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Sa Mạc Tình Yêu]

Tình yêu anh ơi cút bắt trò chơi
Em sẽ trốn khi anh đuổi tìm
Tình sẽ theo thời gian nhạt nhoà phai
Xin nhớ cho rằng
Một lần yêu phải trăm lần khổ đau.

Giọt sương ban sớm lấp lán...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1201487,
      'music_title_url' => 'nang-ha~thuy-tien',
      'music_title' => 'Nắng Hạ',
      'music_artist' => 'Thuỷ Tiên',
      'music_artist_id' => '60',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538691902,
      'music_last_update_time' => 1389603439,
      'music_title_search' => 'nang ha',
      'music_artist_search' => '; thi tin;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Trung Cang',
      'music_album' => '',
      'music_listen' => 6034,
      'music_track_id' => 0,
      'music_filename' => '1201487-05ebe14e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Bên nhau nắng hạ rộn ràng
Cho nhau thoáng rượu nồng nàn
Đừng ngủ mơ, đừng sầu thơ
Đừng vẩn vơ, cuộc tình tan trong phút giây.

Cho nhau mắt lệ nghẹn ngào
Cho nhau ước hẹn ngày nào
Đời hợp tan, tình...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1215247,
      'music_title_url' => 'dau-mua-piano-cover~an-coong',
      'music_title' => 'Dấu Mưa (Piano Cover)',
      'music_artist' => 'An Coong',
      'music_artist_id' => '4211',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538705190,
      'music_last_update_time' => 1400146134,
      'music_title_search' => 'dau mua; piano cover',
      'music_artist_search' => '; an cong;',
      'music_album_search' => '',
      'music_composer' => 'Phạm Toàn Thắng',
      'music_album' => '',
      'music_listen' => 17626,
      'music_track_id' => 0,
      'music_filename' => '1215247-d5105a10.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Một cơn mưa đi qua để lại những ký ức anh và em
Tìm em trong cơn mưa anh thẩn thờ
Lần theo những dấu vết đánh rơi.

Tưởng như rất gần mà ngờ đâu đã rất xa
Vụt mất theo cơn mưa ngày qua
Tưởng như rấ...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1722724,
      'music_title_url' => 'de-nho-mot-thoi-ta-da-yeu~bang-kieu',
      'music_title' => 'Để Nhớ Một Thời Ta Đã Yêu',
      'music_artist' => 'Bằng Kiều',
      'music_artist_id' => '1258',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538901023,
      'music_last_update_time' => 1475628933,
      'music_title_search' => 'de nho 1 thoi ta da iu',
      'music_artist_search' => '; bang kiu;',
      'music_album_search' => '',
      'music_composer' => 'Thái Thịnh',
      'music_album' => '',
      'music_listen' => 80381,
      'music_track_id' => 0,
      'music_filename' => '1722724-4d0bd72f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Hạnh phúc trong tầm với đã không còn tới
Khi vắng em trong đời
Tìm đến chân trời mới vẫn thương một thời
Giờ đã xa ngàn khơi.

Ngày đó ta lầm lỡ, bỏ mặc nhau hững hờ
Để tiếng yêu rạn vỡ rồi thời gi...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1068072,
      'music_title_url' => 'em-da-tung-yeu~bao-anh',
      'music_title' => 'Em Đã Từng Yêu',
      'music_artist' => 'Bảo Anh',
      'music_artist_id' => '2816',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538575266,
      'music_last_update_time' => 1361871815,
      'music_title_search' => 'em da tung iu',
      'music_artist_search' => '; bao em;',
      'music_album_search' => '',
      'music_composer' => 'Thái Thịnh',
      'music_album' => '',
      'music_listen' => 102545,
      'music_track_id' => 0,
      'music_filename' => '1068072-10cf739d.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Còn gì mà tìm đến nhau nữa
Khi chúng ta không cần nhau
Còn gì để lừa dối nhau nữa
Khi trái tim không còn đau.

Gặp lại mình rồi sẽ ra sao
Làm gì tìm lại được phút ban đầu
Hoặc là mình lại càng níu...',
    ),
    15 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1108024,
      'music_title_url' => 'sau-tat-ca~tien-cookie',
      'music_title' => 'Sau Tất Cả',
      'music_artist' => 'Tiên Cookie',
      'music_artist_id' => '2413',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539016750,
      'music_last_update_time' => 1372582293,
      'music_title_search' => 'xau tat ca',
      'music_artist_search' => '; tin coki;',
      'music_album_search' => '',
      'music_composer' => 'Tiên Cookie',
      'music_album' => '',
      'music_listen' => 51756,
      'music_track_id' => 0,
      'music_filename' => '1108024-3fa29944.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Anh không cho em được gì ngoài những yêu thương thật lòng
Anh không thể mua tặng em những món quà mà em thích
Anh nhận ra tình yêu không chỉ được nuôi bằng những cảm xúc
Em có thể đến một nơi mà...',
    ),
    16 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1139926,
      'music_title_url' => 'buon~ngoc-lan',
      'music_title' => 'Buồn',
      'music_artist' => 'Ngọc Lan',
      'music_artist_id' => '2176',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538987208,
      'music_last_update_time' => 1379928688,
      'music_title_search' => 'bun',
      'music_artist_search' => '; ngoc lan;',
      'music_album_search' => '',
      'music_composer' => 'Y Vân',
      'music_album' => '',
      'music_listen' => 31938,
      'music_track_id' => 0,
      'music_filename' => '1139926-e6b452da.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Buồn như ly rượu đầy, không có ai cùng cạn
Buồn như ly rượu cạn, không còn rượu để say
Buồn như trong một ngày hai đứa không gặp mặt
Buồn như khi gặp mặt không còn chuyện để vui.

[ĐK:]
Đôi ta như...',
    ),
    17 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1159350,
      'music_title_url' => 'mua-dem-ngoai-o~ha-thanh-xuan',
      'music_title' => 'Mưa Đêm Ngoại Ô',
      'music_artist' => 'Hà Thanh Xuân',
      'music_artist_id' => '7393',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538987603,
      'music_last_update_time' => 1433302445,
      'music_title_search' => 'mua dem ngoai o',
      'music_artist_search' => '; ha thanh xuan;',
      'music_album_search' => '',
      'music_composer' => 'Đỗ Kim Bảng',
      'music_album' => '',
      'music_listen' => 48361,
      'music_track_id' => 0,
      'music_filename' => '1159350-8e6f2bb1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Trời đã khuya rồi đây trăng chênh chếch xuyên ánh qua mành
Trời đã khuya rồi đây mưa trên xóm xa ánh đô thành
Đường ngoài kia không xôn xao không đẹp vì đèn màu
Ôi đường dài hun hút với đêm thâu
Bư...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1185692,
      'music_title_url' => 'lien-khuc-dem-huyen-dieu-nguoi-yeu-ly-tuong~thuy-huong-ngoc-anh-vi',
      'music_title' => 'Liên Khúc: Đêm Huyền Diệu; Người Yêu Lý Tưởng',
      'music_artist' => 'Thuỳ Hương;Ngọc Anh Vi',
      'music_artist_id' => '1042;14614',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538781423,
      'music_last_update_time' => 1387182160,
      'music_title_search' => 'lin khuc; dem hin diu; ngui iu li tung',
      'music_artist_search' => '; thi hung; ngoc em vi;',
      'music_album_search' => '',
      'music_composer' => 'Y Vân',
      'music_album' => '',
      'music_listen' => 77586,
      'music_track_id' => 0,
      'music_filename' => '1185692-94dbf776.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Đêm Huyền Diệu]

Nếu em thiếu anh trên đời
Hẳn là thương nhớ biết bao nhiêu rồi
Nếu vắng anh một ngày
Thì là một ngày chẳng vui.

Nếu luôn có anh bên mình
Hẳn là năm tháng ý xuân không tàn
Nếu thấ...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1190631,
      'music_title_url' => 'lien-khuc-nguoi-me-ban-non-tieng-vong~thanh-tuyen-hoang-oanh',
      'music_title' => 'Liên Khúc: Người Mẹ Bán Nón; Tiếng Vọng',
      'music_artist' => 'Thanh Tuyền;Hoàng Oanh',
      'music_artist_id' => '4009;1630',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538689202,
      'music_last_update_time' => 1387852022,
      'music_title_search' => 'lin khuc; ngui me ban non; ting vong',
      'music_artist_search' => '; thanh tin; hoang oanh;',
      'music_album_search' => '',
      'music_composer' => 'Thiên Duy; Thái Sơn',
      'music_album' => '',
      'music_listen' => 19715,
      'music_track_id' => 0,
      'music_filename' => '1190631-0147d771.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Người Mẹ Bán Nón]

Vạt nắng trưa hè ai che nón lá miền Nam
Hạt nước chiều mưa tròn hơn nón mẹ tôi đan
Mẹ già bán nón chợ xa nuôi con vất vả ơi à
Mẹ ngồi đan nón bài thơ cho con ghi nhớ.

Chỉ có lá...',
    ),
    20 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1577700,
      'music_title_url' => 'ta-tu-trong-dem~dan-nguyen-ha-thanh-xuan',
      'music_title' => 'Tạ Từ Trong Đêm',
      'music_artist' => 'Đan Nguyên;Hà Thanh Xuân',
      'music_artist_id' => '2347;7393',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539034035,
      'music_last_update_time' => 1446487650,
      'music_title_search' => 'ta tu chong dem',
      'music_artist_search' => '; dan ngin; ha thanh xuan;',
      'music_album_search' => '',
      'music_composer' => 'Trần Thiện Thanh',
      'music_album' => '',
      'music_listen' => 1071521,
      'music_track_id' => 0,
      'music_filename' => '1577700-a617d5e7.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Thăm thẳm chiều trôi
Khuya anh đi rồi sao trời đưa lối
Khi thương mến nhau
Hai người hai ngả tránh sao bồi hồi.

Hẹn gặp nhau đây đêm thâu lá đổ
Sương giăng kín mờ nhạt nhoà ước mơ
Đã gặp nhau rồi,...',
      'music_artist_html' => '<a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>, <a href="/ca-si/Ha-Thanh-Xuan~Y3NuX2FydGlzdH43Mzkz.html">Hà Thanh Xuân</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1225127,
      'music_title_url' => 'nhat-nang~hoang-thuc-linh',
      'music_title' => 'Nhạt Nắng',
      'music_artist' => 'Hoàng Thục Linh',
      'music_artist_id' => '13153',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538788898,
      'music_last_update_time' => 1397667563,
      'music_title_search' => 'nhat nang',
      'music_artist_search' => '; hoang thuc linh;',
      'music_album_search' => '',
      'music_composer' => 'Y Vân',
      'music_album' => '',
      'music_listen' => 192985,
      'music_track_id' => 0,
      'music_filename' => '1225127-cd709e5c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Tôi thương miền quê, nhớ hoàng hôn trên đất xưa 
Nghe tiếng tiêu mơ màng chiều hè 
Tôi yêu người xưa áo nâu hương duyên thật thà 
Đời mặn nồng hồng lên đôi má. 

Nhưng thôi giờ đây nắng tàn phai...',
      'music_artist_html' => '<a href="/ca-si/Hoang-Thuc-Linh~Y3NuX2FydGlzdH4xMzE1Mw==.html">Hoàng Thục Linh</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1908737,
      'music_title_url' => 'giong-ca-di-vang~nhu-quynh',
      'music_title' => 'Giọng Ca Dĩ Vãng',
      'music_artist' => 'Như Quỳnh',
      'music_artist_id' => '32',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538982303,
      'music_last_update_time' => 1526821213,
      'music_title_search' => 'dong ca di vang',
      'music_artist_search' => '; nhu qinh;',
      'music_album_search' => '',
      'music_composer' => 'Bảo Thu',
      'music_album' => '',
      'music_listen' => 2859,
      'music_track_id' => 0,
      'music_filename' => '1908737-a167b2f9.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Ngày xưa mỗi lần em buông tiếng hát
Thì anh tay phiếm nắn nót cung đàn
Từng nhịp nhặt khoan anh ru hồn theo tiếng tơ
Nhẹ dịu lời ca em thăng trầm theo từng lúc
Và rồi hờn yêu em mỗi lần em hát sai...',
      'music_artist_html' => '<a href="/ca-si/Nhu-Quynh~Y3NuX2FydGlzdH4zMg==.html">Như Quỳnh</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1946619,
      'music_title_url' => 'toi-van-nho~quang-le-quynh-dung',
      'music_title' => 'Tôi Vẫn Nhớ',
      'music_artist' => 'Quang Lê;Quỳnh Dung',
      'music_artist_id' => '1770;6137',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539058919,
      'music_last_update_time' => 1535008516,
      'music_title_search' => 'toi van nho',
      'music_artist_search' => '; quang le; qinh dung;',
      'music_album_search' => '',
      'music_composer' => 'Ngân Giang',
      'music_album' => '',
      'music_listen' => 1821,
      'music_track_id' => 0,
      'music_filename' => '1946619-673d5028.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Bao năm qua dù xa anh nhưng tôi vẫn nhớ
Nhớ con đường nắng u buồn
Dìu nhau đi tìm râm bóng mát
Lòng bâng khuâng nghĩ chuyện vu vơ.

Tôi vẫn nhớ, nhớ đêm hẹn hò bên trăng sao
Từng câu nói yêu đươ...',
      'music_artist_html' => '<a href="/ca-si/Quang-Le~Y3NuX2FydGlzdH4xNzcw.html">Quang Lê</a>, <a href="/ca-si/Quynh-Dung~Y3NuX2FydGlzdH42MTM3.html">Quỳnh Dung</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1133117,
      'music_title_url' => 'xa-vang~thien-kim',
      'music_title' => 'Xa Vắng',
      'music_artist' => 'Thiên Kim',
      'music_artist_id' => '2156',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539038989,
      'music_last_update_time' => 1378442524,
      'music_title_search' => 'xa vang',
      'music_artist_search' => '; thin kim;',
      'music_album_search' => '',
      'music_composer' => 'Y Vân',
      'music_album' => '',
      'music_listen' => 76231,
      'music_track_id' => 0,
      'music_filename' => '1133117-99ac1e49.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Ngày anh xa vắng
Em không trang điểm đợi chờ
Những đêm gió lạnh đầu hè
Khuê phòng ủ kín tâm tư.

Nhìn từng hạt mưa sa
Thương đời biển sầu bao la
Để cho cành hoa héo khô
Lỡ cung ái ân xuân thì.

Ngà...',
      'music_artist_html' => '<a href="/ca-si/Thien-Kim~Y3NuX2FydGlzdH4yMTU2.html">Thiên Kim</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1880806,
      'music_title_url' => 'hai-que~tan-nhan',
      'music_title' => 'Hai Quê',
      'music_artist' => 'Tân Nhàn',
      'music_artist_id' => '2391',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538803593,
      'music_last_update_time' => 1519873309,
      'music_title_search' => '2 que',
      'music_artist_search' => '; tan nhan;',
      'music_album_search' => '',
      'music_composer' => 'Đinh Miên Vũ',
      'music_album' => '',
      'music_listen' => 6737,
      'music_track_id' => 0,
      'music_filename' => '1880806-e3e9bb53.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ơ tôi lớn lên bờ Tam Giang nước mặn
Những chiều không mây trắng lững lờ trôi
Rồi xuôi ngược theo dòng đời năm tháng
Ơn quê người mà chạnh nhớ quê tôi.

Quê tôi nhớ thuở nào tháng ngày đời gieo neo...',
      'music_artist_html' => '<a href="/ca-si/Tan-Nhan~Y3NuX2FydGlzdH4yMzkx.html">Tân Nhàn</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1950039,
      'music_title_url' => 'anh-hay-ve-di~truong-vu-mai-thien-van',
      'music_title' => 'Anh Hãy Về Đi',
      'music_artist' => 'Trường Vũ;Mai Thiên Vân',
      'music_artist_id' => '1163;2316',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539060219,
      'music_last_update_time' => 1536054250,
      'music_title_search' => 'em hai ve di',
      'music_artist_search' => '; chung vu; mai thin van;',
      'music_album_search' => '',
      'music_composer' => 'Sang Đông; Ngân Trang',
      'music_album' => '',
      'music_listen' => 1076,
      'music_track_id' => 0,
      'music_filename' => '1950039-ffaa534e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Đừng nói yêu em khi còn trắng tay 
Đừng để cho em khổ luỵ sau này 
Đời không đơn sơ dễ tính 
Đời mang trên vai nặng gánh 
Mà tình yêu tựa chiếc lá mong manh. 

Một mái tranh sơ khó mà ước mong 
Đừn...',
      'music_artist_html' => '<a href="/ca-si/Truong-Vu~Y3NuX2FydGlzdH4xMTYz.html">Trường Vũ</a>, <a href="/ca-si/Mai-Thien-Van~Y3NuX2FydGlzdH4yMzE2.html">Mai Thiên Vân</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1084571,
      'music_title_url' => 'vut-bay~ong-cao-thang-dong-nhi-noo-phu',
      'music_title' => 'Vút Bay',
      'music_artist' => 'Ông Cao Thắng;Đông Nhi;Noo Phước Thịnh;Thanh Bùi;365daband;Kimmese;Cường 7;Justatee;Mr.T;Yanbi;Vân Trang;Sĩ Thanh;Tâm Tít;Trương Nam Thành',
      'music_artist_id' => '849;706;1611;1418;2134;2663;3255;2057;1577;1216;3445;2925;3289;3381',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538796179,
      'music_last_update_time' => 1474095152,
      'music_title_search' => 'vut bai',
      'music_artist_search' => '; ong cao thang; dong nhi; no phuc thinh; thanh bui; 365daband; kimexe; cung 7; juxtate; mr t; ianbi; van chang; xi thanh; tam tit; chung 5 thanh;',
      'music_album_search' => '',
      'music_composer' => 'Thanh Bùi; Hoàng Huy Long',
      'music_album' => '',
      'music_listen' => 110570,
      'music_track_id' => 0,
      'music_filename' => '1084571-7f87bd36.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => '1. Có lúc cuộc đời đầy niềm vui, babe
Mà cũng có khi đôi chân ta mỏi mệt, yeah
Tìm bầu trời tự do cho ta chắp cánh
Là nơi ấy con tim bình yên
Nhẹ nhàng tựa làn mây, ta bay cùng gió khắp trần gian....',
      'music_artist_html' => '<a href="/ca-si/Ong-Cao-Thang~Y3NuX2FydGlzdH44NDk=.html">Ông Cao Thắng</a>, <a href="/ca-si/Dong-Nhi~Y3NuX2FydGlzdH43MDY=.html">Đông Nhi</a>, <a href="/ca-si/Noo-Phuoc-Thinh~Y3NuX2FydGlzdH4xNjEx.html">Noo Phước Thịnh</a>, <a href="/ca-si/Thanh-Bui~Y3NuX2FydGlzdH4xNDE4.html">Thanh Bùi</a>, <a href="/ca-si/365daband~Y3NuX2FydGlzdH4yMTM0.html">365daband</a>, <a href="/ca-si/Kimmese~Y3NuX2FydGlzdH4yNjYz.html">Kimmese</a>, <a href="/ca-si/Cuong-7~Y3NuX2FydGlzdH4zMjU1.html">Cường 7</a>, <a href="/ca-si/Justatee~Y3NuX2FydGlzdH4yMDU3.html">Justatee</a>, <a href="/ca-si/MrT~Y3NuX2FydGlzdH4xNTc3.html">Mr.T</a>, <a href="/ca-si/Yanbi~Y3NuX2FydGlzdH4xMjE2.html">Yanbi</a>, <a href="/ca-si/Van-Trang~Y3NuX2FydGlzdH4zNDQ1.html">Vân Trang</a>, <a href="/ca-si/Si-Thanh~Y3NuX2FydGlzdH4yOTI1.html">Sĩ Thanh</a>, <a href="/ca-si/Tam-Tit~Y3NuX2FydGlzdH4zMjg5.html">Tâm Tít</a>, <a href="/ca-si/Truong-Nam-Thanh~Y3NuX2FydGlzdH4zMzgx.html">Trương Nam Thành</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1098415,
      'music_title_url' => 'cho-toi-xin-mot-ve-di-tuoi-tho~lynk-lee',
      'music_title' => 'Cho Tôi Xin Một Vé Đi Tuổi Thơ',
      'music_artist' => 'Lynk Lee',
      'music_artist_id' => '1328',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538608491,
      'music_last_update_time' => 1370399105,
      'music_title_search' => 'cho toi xin 1 ve di tui tho',
      'music_artist_search' => '; link le;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Mạnh Hoàng',
      'music_album' => '',
      'music_listen' => 88535,
      'music_track_id' => 0,
      'music_filename' => '1098415-449085ec.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Cho tôi xin một vé đi tuổi thơ
Để trở về với giấc mơ ngày xưa
Bút mực, truyện tranh những gói bỏng ngô trong ngăn bàn.

Cho tôi xin về lại thời tập tô
Để vẽ ông mặt trời cười hiền như bố
Những c...',
      'music_artist_html' => '<a href="/ca-si/Lynk-Lee~Y3NuX2FydGlzdH4xMzI4.html">Lynk Lee</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1154791,
      'music_title_url' => 'lien-khuc-nguoi-yeu-co-don-doi-con-co-don~tuan-vu-son-tuyen',
      'music_title' => 'Liên Khúc: Người Yêu Cô Đơn; Đời Còn Cô Đơn',
      'music_artist' => 'Tuấn Vũ;Sơn Tuyền',
      'music_artist_id' => '5236;4487',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539064328,
      'music_last_update_time' => 1382449633,
      'music_title_search' => 'lin khuc; ngui iu co don; doi con co don',
      'music_artist_search' => '; tuan vu; xon tin;',
      'music_album_search' => '',
      'music_composer' => 'Đài Phương Trang',
      'music_album' => '',
      'music_listen' => 94970,
      'music_track_id' => 0,
      'music_filename' => '1154791-087934f6.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '--- Người Yêu Cô Đơn ---

Đời tôi cô đơn nên yêu ai cũng không duyên
Đời tôi cô đơn nên yêu ai cũng không thành
Đời tôi cô đơn nên yêu ai cũng dở dang
Yêu ai cũng lỡ làng dù rằng tôi chẳng lỗi chi....',
      'music_artist_html' => '<a href="/ca-si/Tuan-Vu~Y3NuX2FydGlzdH41MjM2.html">Tuấn Vũ</a>, <a href="/ca-si/Son-Tuyen~Y3NuX2FydGlzdH40NDg3.html">Sơn Tuyền</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1162616,
      'music_title_url' => 'lien-khuc-sa-mac-tinh-yeu-doi-da-vang~thien-kim-y-phuong',
      'music_title' => 'Liên Khúc: Sa Mạc Tình Yêu; Đời Đá Vàng',
      'music_artist' => 'Thiên Kim;Y Phương',
      'music_artist_id' => '2156;2157',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538776302,
      'music_last_update_time' => 1383489521,
      'music_title_search' => 'lin khuc; xa mac tinh iu; doi da vang',
      'music_artist_search' => '; thin kim; i phung;',
      'music_album_search' => '',
      'music_composer' => 'Lời: Khúc Lan; Vũ Thành An',
      'music_album' => '',
      'music_listen' => 35877,
      'music_track_id' => 0,
      'music_filename' => '1162616-02f432e6.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Sa Mạc Tình Yêu]

Tình yêu anh ơi cút bắt trò chơi
Em sẽ trốn khi anh đuổi tìm
Tình sẽ theo thời gian nhạt nhoà phai
Xin nhớ cho rằng
Một lần yêu phải trăm lần khổ đau.

Giọt sương ban sớm lấp lán...',
      'music_artist_html' => '<a href="/ca-si/Thien-Kim~Y3NuX2FydGlzdH4yMTU2.html">Thiên Kim</a>, <a href="/ca-si/Y-Phuong~Y3NuX2FydGlzdH4yMTU3.html">Y Phương</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1201487,
      'music_title_url' => 'nang-ha~thuy-tien',
      'music_title' => 'Nắng Hạ',
      'music_artist' => 'Thuỷ Tiên',
      'music_artist_id' => '60',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538691902,
      'music_last_update_time' => 1389603439,
      'music_title_search' => 'nang ha',
      'music_artist_search' => '; thi tin;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Trung Cang',
      'music_album' => '',
      'music_listen' => 6034,
      'music_track_id' => 0,
      'music_filename' => '1201487-05ebe14e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Bên nhau nắng hạ rộn ràng
Cho nhau thoáng rượu nồng nàn
Đừng ngủ mơ, đừng sầu thơ
Đừng vẩn vơ, cuộc tình tan trong phút giây.

Cho nhau mắt lệ nghẹn ngào
Cho nhau ước hẹn ngày nào
Đời hợp tan, tình...',
      'music_artist_html' => '<a href="/ca-si/Thuy-Tien~Y3NuX2FydGlzdH42MA==.html">Thuỷ Tiên</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1215247,
      'music_title_url' => 'dau-mua-piano-cover~an-coong',
      'music_title' => 'Dấu Mưa (Piano Cover)',
      'music_artist' => 'An Coong',
      'music_artist_id' => '4211',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538705190,
      'music_last_update_time' => 1400146134,
      'music_title_search' => 'dau mua; piano cover',
      'music_artist_search' => '; an cong;',
      'music_album_search' => '',
      'music_composer' => 'Phạm Toàn Thắng',
      'music_album' => '',
      'music_listen' => 17626,
      'music_track_id' => 0,
      'music_filename' => '1215247-d5105a10.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Một cơn mưa đi qua để lại những ký ức anh và em
Tìm em trong cơn mưa anh thẩn thờ
Lần theo những dấu vết đánh rơi.

Tưởng như rất gần mà ngờ đâu đã rất xa
Vụt mất theo cơn mưa ngày qua
Tưởng như rấ...',
      'music_artist_html' => '<a href="/ca-si/An-Coong~Y3NuX2FydGlzdH40MjEx.html">An Coong</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1722724,
      'music_title_url' => 'de-nho-mot-thoi-ta-da-yeu~bang-kieu',
      'music_title' => 'Để Nhớ Một Thời Ta Đã Yêu',
      'music_artist' => 'Bằng Kiều',
      'music_artist_id' => '1258',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538901023,
      'music_last_update_time' => 1475628933,
      'music_title_search' => 'de nho 1 thoi ta da iu',
      'music_artist_search' => '; bang kiu;',
      'music_album_search' => '',
      'music_composer' => 'Thái Thịnh',
      'music_album' => '',
      'music_listen' => 80381,
      'music_track_id' => 0,
      'music_filename' => '1722724-4d0bd72f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Hạnh phúc trong tầm với đã không còn tới
Khi vắng em trong đời
Tìm đến chân trời mới vẫn thương một thời
Giờ đã xa ngàn khơi.

Ngày đó ta lầm lỡ, bỏ mặc nhau hững hờ
Để tiếng yêu rạn vỡ rồi thời gi...',
      'music_artist_html' => '<a href="/ca-si/Bang-Kieu~Y3NuX2FydGlzdH4xMjU4.html">Bằng Kiều</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1068072,
      'music_title_url' => 'em-da-tung-yeu~bao-anh',
      'music_title' => 'Em Đã Từng Yêu',
      'music_artist' => 'Bảo Anh',
      'music_artist_id' => '2816',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538575266,
      'music_last_update_time' => 1361871815,
      'music_title_search' => 'em da tung iu',
      'music_artist_search' => '; bao em;',
      'music_album_search' => '',
      'music_composer' => 'Thái Thịnh',
      'music_album' => '',
      'music_listen' => 102545,
      'music_track_id' => 0,
      'music_filename' => '1068072-10cf739d.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Còn gì mà tìm đến nhau nữa
Khi chúng ta không cần nhau
Còn gì để lừa dối nhau nữa
Khi trái tim không còn đau.

Gặp lại mình rồi sẽ ra sao
Làm gì tìm lại được phút ban đầu
Hoặc là mình lại càng níu...',
      'music_artist_html' => '<a href="/ca-si/Bao-Anh~Y3NuX2FydGlzdH4yODE2.html">Bảo Anh</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1108024,
      'music_title_url' => 'sau-tat-ca~tien-cookie',
      'music_title' => 'Sau Tất Cả',
      'music_artist' => 'Tiên Cookie',
      'music_artist_id' => '2413',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539016750,
      'music_last_update_time' => 1372582293,
      'music_title_search' => 'xau tat ca',
      'music_artist_search' => '; tin coki;',
      'music_album_search' => '',
      'music_composer' => 'Tiên Cookie',
      'music_album' => '',
      'music_listen' => 51756,
      'music_track_id' => 0,
      'music_filename' => '1108024-3fa29944.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Anh không cho em được gì ngoài những yêu thương thật lòng
Anh không thể mua tặng em những món quà mà em thích
Anh nhận ra tình yêu không chỉ được nuôi bằng những cảm xúc
Em có thể đến một nơi mà...',
      'music_artist_html' => '<a href="/ca-si/Tien-Cookie~Y3NuX2FydGlzdH4yNDEz.html">Tiên Cookie</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1139926,
      'music_title_url' => 'buon~ngoc-lan',
      'music_title' => 'Buồn',
      'music_artist' => 'Ngọc Lan',
      'music_artist_id' => '2176',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538987208,
      'music_last_update_time' => 1379928688,
      'music_title_search' => 'bun',
      'music_artist_search' => '; ngoc lan;',
      'music_album_search' => '',
      'music_composer' => 'Y Vân',
      'music_album' => '',
      'music_listen' => 31938,
      'music_track_id' => 0,
      'music_filename' => '1139926-e6b452da.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Buồn như ly rượu đầy, không có ai cùng cạn
Buồn như ly rượu cạn, không còn rượu để say
Buồn như trong một ngày hai đứa không gặp mặt
Buồn như khi gặp mặt không còn chuyện để vui.

[ĐK:]
Đôi ta như...',
      'music_artist_html' => '<a href="/ca-si/Ngoc-Lan~Y3NuX2FydGlzdH4yMTc2.html">Ngọc Lan</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1159350,
      'music_title_url' => 'mua-dem-ngoai-o~ha-thanh-xuan',
      'music_title' => 'Mưa Đêm Ngoại Ô',
      'music_artist' => 'Hà Thanh Xuân',
      'music_artist_id' => '7393',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538987603,
      'music_last_update_time' => 1433302445,
      'music_title_search' => 'mua dem ngoai o',
      'music_artist_search' => '; ha thanh xuan;',
      'music_album_search' => '',
      'music_composer' => 'Đỗ Kim Bảng',
      'music_album' => '',
      'music_listen' => 48361,
      'music_track_id' => 0,
      'music_filename' => '1159350-8e6f2bb1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Trời đã khuya rồi đây trăng chênh chếch xuyên ánh qua mành
Trời đã khuya rồi đây mưa trên xóm xa ánh đô thành
Đường ngoài kia không xôn xao không đẹp vì đèn màu
Ôi đường dài hun hút với đêm thâu
Bư...',
      'music_artist_html' => '<a href="/ca-si/Ha-Thanh-Xuan~Y3NuX2FydGlzdH43Mzkz.html">Hà Thanh Xuân</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1185692,
      'music_title_url' => 'lien-khuc-dem-huyen-dieu-nguoi-yeu-ly-tuong~thuy-huong-ngoc-anh-vi',
      'music_title' => 'Liên Khúc: Đêm Huyền Diệu; Người Yêu Lý Tưởng',
      'music_artist' => 'Thuỳ Hương;Ngọc Anh Vi',
      'music_artist_id' => '1042;14614',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538781423,
      'music_last_update_time' => 1387182160,
      'music_title_search' => 'lin khuc; dem hin diu; ngui iu li tung',
      'music_artist_search' => '; thi hung; ngoc em vi;',
      'music_album_search' => '',
      'music_composer' => 'Y Vân',
      'music_album' => '',
      'music_listen' => 77586,
      'music_track_id' => 0,
      'music_filename' => '1185692-94dbf776.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Đêm Huyền Diệu]

Nếu em thiếu anh trên đời
Hẳn là thương nhớ biết bao nhiêu rồi
Nếu vắng anh một ngày
Thì là một ngày chẳng vui.

Nếu luôn có anh bên mình
Hẳn là năm tháng ý xuân không tàn
Nếu thấ...',
      'music_artist_html' => '<a href="/ca-si/Thuy-Huong~Y3NuX2FydGlzdH4xMDQy.html">Thuỳ Hương</a>, <a href="/ca-si/Ngoc-Anh-Vi~Y3NuX2FydGlzdH4xNDYxNA==.html">Ngọc Anh Vi</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1190631,
      'music_title_url' => 'lien-khuc-nguoi-me-ban-non-tieng-vong~thanh-tuyen-hoang-oanh',
      'music_title' => 'Liên Khúc: Người Mẹ Bán Nón; Tiếng Vọng',
      'music_artist' => 'Thanh Tuyền;Hoàng Oanh',
      'music_artist_id' => '4009;1630',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538689202,
      'music_last_update_time' => 1387852022,
      'music_title_search' => 'lin khuc; ngui me ban non; ting vong',
      'music_artist_search' => '; thanh tin; hoang oanh;',
      'music_album_search' => '',
      'music_composer' => 'Thiên Duy; Thái Sơn',
      'music_album' => '',
      'music_listen' => 19715,
      'music_track_id' => 0,
      'music_filename' => '1190631-0147d771.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Người Mẹ Bán Nón]

Vạt nắng trưa hè ai che nón lá miền Nam
Hạt nước chiều mưa tròn hơn nón mẹ tôi đan
Mẹ già bán nón chợ xa nuôi con vất vả ơi à
Mẹ ngồi đan nón bài thơ cho con ghi nhớ.

Chỉ có lá...',
      'music_artist_html' => '<a href="/ca-si/Thanh-Tuyen~Y3NuX2FydGlzdH40MDA5.html">Thanh Tuyền</a>, <a href="/ca-si/Hoang-Oanh~Y3NuX2FydGlzdH4xNjMw.html">Hoàng Oanh</a>',
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1072876,
      'music_title_url' => 'cant-take-my-eyes-off-you~walk-off-the-earth-selah-sue',
      'music_title' => 'Can\'t Take My Eyes Off You',
      'music_artist' => 'Walk Off The Earth;Selah Sue',
      'music_artist_id' => '4180;29692',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539062285,
      'music_last_update_time' => 1363578602,
      'music_title_search' => 'can t take mi eix of iou',
      'music_artist_search' => '; walk of the earth; xelah xue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 15037,
      'music_track_id' => 0,
      'music_filename' => '1072876-262af79c.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. You\'re just too good to be true
Can\'t take my eyes off you
You\'d be like heaven to touch
I wanna hold you so much.

At long last love has arrived
And I thank God I\'m alive
You\'re just to good to...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1118349,
      'music_title_url' => 'i-was-a-fool~tegan-and-sara',
      'music_title' => 'I Was A Fool',
      'music_artist' => 'Tegan And Sara',
      'music_artist_id' => '33369',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538685634,
      'music_last_update_time' => 1375106284,
      'music_title_search' => 'i wax a fol',
      'music_artist_search' => '; tegan and xara;',
      'music_album_search' => '',
      'music_composer' => 'Tegan Quin; Sara Quin',
      'music_album' => '',
      'music_listen' => 3346,
      'music_track_id' => 0,
      'music_filename' => '1118349-3a0baa77.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Do you remember I searched you out
How I climbed your city\'s walls?
Do you remember me as devout
How I prayed for your calls?

I stood still is what I did
Love like ours is never fixed.

I stuck ar...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1170159,
      'music_title_url' => 'applause~glee-cast',
      'music_title' => 'Applause',
      'music_artist' => 'Glee Cast',
      'music_artist_id' => '1711',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538778445,
      'music_last_update_time' => 1384593648,
      'music_title_search' => 'aplauxe',
      'music_artist_search' => '; gle caxt;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3350,
      'music_track_id' => 0,
      'music_filename' => '1170159-10ee82e3.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '1. I stand here waiting for you to bang the gong
To crash the critics saying, &quot;is it right or is it wrong?&quot;
If only fame had an IV, baby I could bear
Being away from you, I found the vein...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1261100,
      'music_title_url' => 'happy~pharrell-williams',
      'music_title' => 'Happy',
      'music_artist' => 'Pharrell Williams',
      'music_artist_id' => '4307',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538832484,
      'music_last_update_time' => 1483603370,
      'music_title_search' => 'hapi',
      'music_artist_search' => '; pharel wiliamx;',
      'music_album_search' => '',
      'music_composer' => 'Pharrell Williams',
      'music_album' => '',
      'music_listen' => 123128,
      'music_track_id' => 0,
      'music_filename' => '1261100-ad785b9f.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '[Verse 1:]
It might seem crazy what I\'m about to say
Sunshine she\'s here, you can take a break
I\'m a hot air balloon that could go to space
With the air, like I don\'t care baby by the way.

[Hook:]...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1071381,
      'music_title_url' => 'waiting-for-the-night~armin-van-buuren-fiora',
      'music_title' => 'Waiting For The Night',
      'music_artist' => 'Armin Van Buuren;Fiora',
      'music_artist_id' => '5945;17391',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538503836,
      'music_last_update_time' => 1474878735,
      'music_title_search' => 'waiting for the night',
      'music_artist_search' => '; armin van buren; fiora;',
      'music_album_search' => '',
      'music_composer' => 'Nelly Furtado',
      'music_album' => '',
      'music_listen' => 3125,
      'music_track_id' => 0,
      'music_filename' => '1071381-44657c18.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Shoot me down and I\'ll get up again
Emotions running high with double meaning
Just another day to keep it calm within
But I can\'t find a way to fight this shadow dreaming.

We\'re always waiting for...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1080813,
      'music_title_url' => 'just-give-me-a-reason~jason-chen-megan-nicole',
      'music_title' => 'Just Give Me A Reason',
      'music_artist' => 'Jason Chen;Megan Nicole',
      'music_artist_id' => '2174;3784',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538716472,
      'music_last_update_time' => 1365752620,
      'music_title_search' => 'juxt dve me a reaxon',
      'music_artist_search' => '; jaxon chen; megan nicole;',
      'music_album_search' => '',
      'music_composer' => 'Alecia Moore; Nate Ruess; Jeff Bhasker',
      'music_album' => '',
      'music_listen' => 40802,
      'music_track_id' => 0,
      'music_filename' => '1080813-3712112a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Right from the start
You were a thief
You stole my heart
And I your willing victim
I let you see the parts of me
That weren\'t all that pretty
And with every touch you fixed them
Now you\'ve been...',
    ),
    6 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1103876,
      'music_title_url' => 'i-want-it-that-way~jason-chen-joseph-vincent',
      'music_title' => 'I Want It That Way',
      'music_artist' => 'Jason Chen;Joseph Vincent',
      'music_artist_id' => '2174;23107',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539069198,
      'music_last_update_time' => 1371723877,
      'music_title_search' => 'i want it that wai',
      'music_artist_search' => '; jaxon chen; joxeph vincent;',
      'music_album_search' => '',
      'music_composer' => 'Max Martin; Andreas Carlsson',
      'music_album' => '',
      'music_listen' => 2739,
      'music_track_id' => 0,
      'music_filename' => '1103876-2d01079c.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Yeah

1. You are my fire
The one desire
Believe when I say
I want it that way.

But we are two worlds apart
Can\'t reach to your heart
When you say
That I want it that way.

[Chorus:]
Tell me why
Ai...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1112619,
      'music_title_url' => 'we-own-it~2-chainz-wiz-khalifa',
      'music_title' => 'We Own It',
      'music_artist' => '2 Chainz;Wiz Khalifa',
      'music_artist_id' => '2789;2710',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538658611,
      'music_last_update_time' => 1481682903,
      'music_title_search' => 'we own it',
      'music_artist_search' => '; 2 chainz; wiz khalifa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 27743,
      'music_track_id' => 0,
      'music_filename' => '1112619-96a2f293.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Ver1:]
Money\'s the motivation money\'s the conversation
You on vacation, we gettin\' paid, so...
We don\'t placate \'em, I did it for the fam\'
It\'s whatever we had to do, it\'s just who I am
Yeah - it\'...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1139245,
      'music_title_url' => 'beautiful-life~armin-van-buuren-cindy-alma',
      'music_title' => 'Beautiful Life',
      'music_artist' => 'Armin Van Buuren;Cindy Alma',
      'music_artist_id' => '5945;31154',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538503791,
      'music_last_update_time' => 1473665481,
      'music_title_search' => 'beautiful life',
      'music_artist_search' => '; armin van buren; cindi alma;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3497,
      'music_track_id' => 0,
      'music_filename' => '1139245-0fc8e0dc.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Some people keep wondering
Some people long without knowing
Some people never found the answer
The answer.

Come and step into the light
Let the beatings in your heart out.

We finally know how to...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1140887,
      'music_title_url' => 'twenty-eight~the-weeknd',
      'music_title' => 'Twenty Eight',
      'music_artist' => 'The Weeknd',
      'music_artist_id' => '14618',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538504990,
      'music_last_update_time' => 1380078963,
      'music_title_search' => 'twenti eight',
      'music_artist_search' => '; the weknd;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2205,
      'music_track_id' => 0,
      'music_filename' => '1140887-3e4726a8.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. This house is not a home to you
But you decide to go ahead and lay down, lay down
There are no words to describe the depth of your indifference
\'Cause I see you\'re here to stay
Should have known...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1164383,
      'music_title_url' => 'daft-punk~pentatonix',
      'music_title' => 'Daft Punk',
      'music_artist' => 'Pentatonix',
      'music_artist_id' => '3659',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538589892,
      'music_last_update_time' => 1383722072,
      'music_title_search' => 'daft punk',
      'music_artist_search' => '; pentatonix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 22806,
      'music_track_id' => 0,
      'music_filename' => '1164383-ddad7f26.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Buy it, use it, break it, fix it
Trash it, change it, mail - upgrade it
Charge it, point it, zoom it, press it
Snap it, work it, quick - erase it
Write it, cut it, paste it, save it
Load it, check...',
    ),
    11 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1473596,
      'music_title_url' => 'animals~martin-garrix',
      'music_title' => 'Animals',
      'music_artist' => 'Martin Garrix',
      'music_artist_id' => '13343',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539040921,
      'music_last_update_time' => 1502701376,
      'music_title_search' => 'animalx',
      'music_artist_search' => '; martin garix;',
      'music_album_search' => '',
      'music_composer' => 'Martijn Garritsen',
      'music_album' => '',
      'music_listen' => 16176,
      'music_track_id' => 0,
      'music_filename' => '1473596-34404864.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Mother fucker animals!',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1501752,
      'music_title_url' => 'supremacy~muse',
      'music_title' => 'Supremacy',
      'music_artist' => 'Muse',
      'music_artist_id' => '8361',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538507308,
      'music_last_update_time' => 1433470088,
      'music_title_search' => 'xupremaci',
      'music_artist_search' => '; muxe;',
      'music_album_search' => '',
      'music_composer' => 'Muse',
      'music_album' => '',
      'music_listen' => 933,
      'music_track_id' => 0,
      'music_filename' => '1501752-30d03ce4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wake to see your true emancipation is a fantasy
Policies have risen up and overcome the brave
Greatness dies, unsung and lost, invisible to history
Embedded spies brainwashing our children to be me...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1071215,
      'music_title_url' => 'please-dont-say-you-love-me~gabrielle-aplin',
      'music_title' => 'Please Don\'t Say You Love Me',
      'music_artist' => 'Gabrielle Aplin',
      'music_artist_id' => '29555',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538631485,
      'music_last_update_time' => 1362907280,
      'music_title_search' => 'pleaxe don t xai iou love me',
      'music_artist_search' => '; gabrile aplin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2591,
      'music_track_id' => 0,
      'music_filename' => '1071215-79a640f7.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Summer comes, winter fades
Here we are just the same
We don\'t need pressure, we don\'t need change
Let\'s not give the game away.

There used to be an empty space
A photograph without a face
But w...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1077730,
      'music_title_url' => 'baby-i-love-you-regular-friends~jason-chen-kimberley-chen',
      'music_title' => 'Baby I Love You, Regular Friends',
      'music_artist' => 'Jason Chen;Kimberley Chen',
      'music_artist_id' => '2174;30131',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538801686,
      'music_last_update_time' => 1365643739,
      'music_title_search' => 'babi i love iou regular frindx',
      'music_artist_search' => '; jaxon chen; kimberlei chen;',
      'music_album_search' => '',
      'music_composer' => 'Che\'nelle; David Tao',
      'music_album' => '',
      'music_listen' => 8081,
      'music_track_id' => 0,
      'music_filename' => '1077730-1d46051a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Baby I love you, I love you, I love you
I swear you\'re the only one, only one
That is meant for me
You\'re always on my mind
I\'ll go through whatever
Me and you will ride into eternity.

What\'s all...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1083270,
      'music_title_url' => 'still-in-love~jason-chen-julie-zhan',
      'music_title' => 'Still In Love',
      'music_artist' => 'Jason Chen;Julie Zhan',
      'music_artist_id' => '2174;30906',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538496967,
      'music_last_update_time' => 1387552844,
      'music_title_search' => 'xtil in love',
      'music_artist_search' => '; jaxon chen; juli zhan;',
      'music_album_search' => '',
      'music_composer' => 'Jason Chen',
      'music_album' => '',
      'music_listen' => 7809,
      'music_track_id' => 0,
      'music_filename' => '1083270-19a44c08.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. I feel the same way
That you did about me yesterday
Promised you\'d never leave me alone
The castles that we made
Were swept by the tide and washed away
And now the sunsets have all gone.

Now ti...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1101311,
      'music_title_url' => 'young-and-beautiful-rendition-original-by-lana-del-rey~somo',
      'music_title' => 'Young And Beautiful (Rendition) (Original By Lana Del Rey)',
      'music_artist' => 'SoMo',
      'music_artist_id' => '32288',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505275,
      'music_last_update_time' => 1371092400,
      'music_title_search' => 'ioung and beautiful; rendition ; oridnal bi lana del rei',
      'music_artist_search' => '; xomo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6018,
      'music_track_id' => 0,
      'music_filename' => '1101311-ae8b00ac.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1114577,
      'music_title_url' => 'first-time~jonas-brothers',
      'music_title' => 'First Time',
      'music_artist' => 'Jonas Brothers',
      'music_artist_id' => '890',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538766403,
      'music_last_update_time' => 1374233311,
      'music_title_search' => 'firxt time',
      'music_artist_search' => '; jonax brotherx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2716,
      'music_track_id' => 0,
      'music_filename' => '1114577-584de6f5.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Such a thrill of a lifetime
What a night for a good time
Let the beat be your lifeline
Make it feel like the first time.

[Chorus:]
Oh-oo, oh, oh-oo, oh, oh
Make it feel like the first time
Oh-o...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1129377,
      'music_title_url' => 'silhouettes~avicii-salem-al-fakir',
      'music_title' => 'Silhouettes',
      'music_artist' => 'Avicii;Salem Al Fakir',
      'music_artist_id' => '4033;34376',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539024583,
      'music_last_update_time' => 1377785226,
      'music_title_search' => 'xilhouetex',
      'music_artist_search' => '; avici; xalem al fakir;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4986,
      'music_track_id' => 0,
      'music_filename' => '1129377-9aecb162.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Press play, fast forward
Nonstop, we have a beaten path before us
It was all there, in plain sight
Come on people, we have all seen the signs.

So we will never get back to
To the old school
To the...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1130189,
      'music_title_url' => 'i-need-your-love~madilyn-bailey-jake-coco',
      'music_title' => 'I Need Your Love',
      'music_artist' => 'Madilyn Bailey;Jake Coco',
      'music_artist_id' => '17906;17907',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538968685,
      'music_last_update_time' => 1377786146,
      'music_title_search' => 'i ned iour love',
      'music_artist_search' => '; madilin bailei; jake coco;',
      'music_album_search' => '',
      'music_composer' => 'Calvin Harris; Ellie Goulding',
      'music_album' => '',
      'music_listen' => 13024,
      'music_track_id' => 0,
      'music_filename' => '1130189-28e64c41.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Chorus]

1. I take a deep breath every time I pass your door
I know you\'re there but I can\'t see you anymore
And that\'s the reason you\'re in the dark
I\'ve been a stranger ever since we fell apart....',
    ),
    20 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1072876,
      'music_title_url' => 'cant-take-my-eyes-off-you~walk-off-the-earth-selah-sue',
      'music_title' => 'Can\'t Take My Eyes Off You',
      'music_artist' => 'Walk Off The Earth;Selah Sue',
      'music_artist_id' => '4180;29692',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539062285,
      'music_last_update_time' => 1363578602,
      'music_title_search' => 'can t take mi eix of iou',
      'music_artist_search' => '; walk of the earth; xelah xue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 15037,
      'music_track_id' => 0,
      'music_filename' => '1072876-262af79c.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. You\'re just too good to be true
Can\'t take my eyes off you
You\'d be like heaven to touch
I wanna hold you so much.

At long last love has arrived
And I thank God I\'m alive
You\'re just to good to...',
      'music_artist_html' => '<a href="/ca-si/Walk-Off-The-Earth~Y3NuX2FydGlzdH40MTgw.html">Walk Off The Earth</a>, <a href="/ca-si/Selah-Sue~Y3NuX2FydGlzdH4yOTY5Mg==.html">Selah Sue</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1118349,
      'music_title_url' => 'i-was-a-fool~tegan-and-sara',
      'music_title' => 'I Was A Fool',
      'music_artist' => 'Tegan And Sara',
      'music_artist_id' => '33369',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538685634,
      'music_last_update_time' => 1375106284,
      'music_title_search' => 'i wax a fol',
      'music_artist_search' => '; tegan and xara;',
      'music_album_search' => '',
      'music_composer' => 'Tegan Quin; Sara Quin',
      'music_album' => '',
      'music_listen' => 3346,
      'music_track_id' => 0,
      'music_filename' => '1118349-3a0baa77.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Do you remember I searched you out
How I climbed your city\'s walls?
Do you remember me as devout
How I prayed for your calls?

I stood still is what I did
Love like ours is never fixed.

I stuck ar...',
      'music_artist_html' => '<a href="/ca-si/Tegan-And-Sara~Y3NuX2FydGlzdH4zMzM2OQ==.html">Tegan And Sara</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1170159,
      'music_title_url' => 'applause~glee-cast',
      'music_title' => 'Applause',
      'music_artist' => 'Glee Cast',
      'music_artist_id' => '1711',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538778445,
      'music_last_update_time' => 1384593648,
      'music_title_search' => 'aplauxe',
      'music_artist_search' => '; gle caxt;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3350,
      'music_track_id' => 0,
      'music_filename' => '1170159-10ee82e3.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '1. I stand here waiting for you to bang the gong
To crash the critics saying, &quot;is it right or is it wrong?&quot;
If only fame had an IV, baby I could bear
Being away from you, I found the vein...',
      'music_artist_html' => '<a href="/ca-si/Glee-Cast~Y3NuX2FydGlzdH4xNzEx.html">Glee Cast</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1261100,
      'music_title_url' => 'happy~pharrell-williams',
      'music_title' => 'Happy',
      'music_artist' => 'Pharrell Williams',
      'music_artist_id' => '4307',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538832484,
      'music_last_update_time' => 1483603370,
      'music_title_search' => 'hapi',
      'music_artist_search' => '; pharel wiliamx;',
      'music_album_search' => '',
      'music_composer' => 'Pharrell Williams',
      'music_album' => '',
      'music_listen' => 123128,
      'music_track_id' => 0,
      'music_filename' => '1261100-ad785b9f.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '[Verse 1:]
It might seem crazy what I\'m about to say
Sunshine she\'s here, you can take a break
I\'m a hot air balloon that could go to space
With the air, like I don\'t care baby by the way.

[Hook:]...',
      'music_artist_html' => '<a href="/ca-si/Pharrell-Williams~Y3NuX2FydGlzdH40MzA3.html">Pharrell Williams</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1071381,
      'music_title_url' => 'waiting-for-the-night~armin-van-buuren-fiora',
      'music_title' => 'Waiting For The Night',
      'music_artist' => 'Armin Van Buuren;Fiora',
      'music_artist_id' => '5945;17391',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538503836,
      'music_last_update_time' => 1474878735,
      'music_title_search' => 'waiting for the night',
      'music_artist_search' => '; armin van buren; fiora;',
      'music_album_search' => '',
      'music_composer' => 'Nelly Furtado',
      'music_album' => '',
      'music_listen' => 3125,
      'music_track_id' => 0,
      'music_filename' => '1071381-44657c18.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Shoot me down and I\'ll get up again
Emotions running high with double meaning
Just another day to keep it calm within
But I can\'t find a way to fight this shadow dreaming.

We\'re always waiting for...',
      'music_artist_html' => '<a href="/ca-si/Armin-Van-Buuren~Y3NuX2FydGlzdH41OTQ1.html">Armin Van Buuren</a>, <a href="/ca-si/Fiora~Y3NuX2FydGlzdH4xNzM5MQ==.html">Fiora</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1080813,
      'music_title_url' => 'just-give-me-a-reason~jason-chen-megan-nicole',
      'music_title' => 'Just Give Me A Reason',
      'music_artist' => 'Jason Chen;Megan Nicole',
      'music_artist_id' => '2174;3784',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538716472,
      'music_last_update_time' => 1365752620,
      'music_title_search' => 'juxt dve me a reaxon',
      'music_artist_search' => '; jaxon chen; megan nicole;',
      'music_album_search' => '',
      'music_composer' => 'Alecia Moore; Nate Ruess; Jeff Bhasker',
      'music_album' => '',
      'music_listen' => 40802,
      'music_track_id' => 0,
      'music_filename' => '1080813-3712112a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Right from the start
You were a thief
You stole my heart
And I your willing victim
I let you see the parts of me
That weren\'t all that pretty
And with every touch you fixed them
Now you\'ve been...',
      'music_artist_html' => '<a href="/ca-si/Jason-Chen~Y3NuX2FydGlzdH4yMTc0.html">Jason Chen</a>, <a href="/ca-si/Megan-Nicole~Y3NuX2FydGlzdH4zNzg0.html">Megan Nicole</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1103876,
      'music_title_url' => 'i-want-it-that-way~jason-chen-joseph-vincent',
      'music_title' => 'I Want It That Way',
      'music_artist' => 'Jason Chen;Joseph Vincent',
      'music_artist_id' => '2174;23107',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539069198,
      'music_last_update_time' => 1371723877,
      'music_title_search' => 'i want it that wai',
      'music_artist_search' => '; jaxon chen; joxeph vincent;',
      'music_album_search' => '',
      'music_composer' => 'Max Martin; Andreas Carlsson',
      'music_album' => '',
      'music_listen' => 2739,
      'music_track_id' => 0,
      'music_filename' => '1103876-2d01079c.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Yeah

1. You are my fire
The one desire
Believe when I say
I want it that way.

But we are two worlds apart
Can\'t reach to your heart
When you say
That I want it that way.

[Chorus:]
Tell me why
Ai...',
      'music_artist_html' => '<a href="/ca-si/Jason-Chen~Y3NuX2FydGlzdH4yMTc0.html">Jason Chen</a>, <a href="/ca-si/Joseph-Vincent~Y3NuX2FydGlzdH4yMzEwNw==.html">Joseph Vincent</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1112619,
      'music_title_url' => 'we-own-it~2-chainz-wiz-khalifa',
      'music_title' => 'We Own It',
      'music_artist' => '2 Chainz;Wiz Khalifa',
      'music_artist_id' => '2789;2710',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538658611,
      'music_last_update_time' => 1481682903,
      'music_title_search' => 'we own it',
      'music_artist_search' => '; 2 chainz; wiz khalifa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 27743,
      'music_track_id' => 0,
      'music_filename' => '1112619-96a2f293.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Ver1:]
Money\'s the motivation money\'s the conversation
You on vacation, we gettin\' paid, so...
We don\'t placate \'em, I did it for the fam\'
It\'s whatever we had to do, it\'s just who I am
Yeah - it\'...',
      'music_artist_html' => '<a href="/ca-si/2-Chainz~Y3NuX2FydGlzdH4yNzg5.html">2 Chainz</a>, <a href="/ca-si/Wiz-Khalifa~Y3NuX2FydGlzdH4yNzEw.html">Wiz Khalifa</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1139245,
      'music_title_url' => 'beautiful-life~armin-van-buuren-cindy-alma',
      'music_title' => 'Beautiful Life',
      'music_artist' => 'Armin Van Buuren;Cindy Alma',
      'music_artist_id' => '5945;31154',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538503791,
      'music_last_update_time' => 1473665481,
      'music_title_search' => 'beautiful life',
      'music_artist_search' => '; armin van buren; cindi alma;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3497,
      'music_track_id' => 0,
      'music_filename' => '1139245-0fc8e0dc.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Some people keep wondering
Some people long without knowing
Some people never found the answer
The answer.

Come and step into the light
Let the beatings in your heart out.

We finally know how to...',
      'music_artist_html' => '<a href="/ca-si/Armin-Van-Buuren~Y3NuX2FydGlzdH41OTQ1.html">Armin Van Buuren</a>, <a href="/ca-si/Cindy-Alma~Y3NuX2FydGlzdH4zMTE1NA==.html">Cindy Alma</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1140887,
      'music_title_url' => 'twenty-eight~the-weeknd',
      'music_title' => 'Twenty Eight',
      'music_artist' => 'The Weeknd',
      'music_artist_id' => '14618',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538504990,
      'music_last_update_time' => 1380078963,
      'music_title_search' => 'twenti eight',
      'music_artist_search' => '; the weknd;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2205,
      'music_track_id' => 0,
      'music_filename' => '1140887-3e4726a8.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. This house is not a home to you
But you decide to go ahead and lay down, lay down
There are no words to describe the depth of your indifference
\'Cause I see you\'re here to stay
Should have known...',
      'music_artist_html' => '<a href="/ca-si/The-Weeknd~Y3NuX2FydGlzdH4xNDYxOA==.html">The Weeknd</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1164383,
      'music_title_url' => 'daft-punk~pentatonix',
      'music_title' => 'Daft Punk',
      'music_artist' => 'Pentatonix',
      'music_artist_id' => '3659',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538589892,
      'music_last_update_time' => 1383722072,
      'music_title_search' => 'daft punk',
      'music_artist_search' => '; pentatonix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 22806,
      'music_track_id' => 0,
      'music_filename' => '1164383-ddad7f26.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Buy it, use it, break it, fix it
Trash it, change it, mail - upgrade it
Charge it, point it, zoom it, press it
Snap it, work it, quick - erase it
Write it, cut it, paste it, save it
Load it, check...',
      'music_artist_html' => '<a href="/ca-si/Pentatonix~Y3NuX2FydGlzdH4zNjU5.html">Pentatonix</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1473596,
      'music_title_url' => 'animals~martin-garrix',
      'music_title' => 'Animals',
      'music_artist' => 'Martin Garrix',
      'music_artist_id' => '13343',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539040921,
      'music_last_update_time' => 1502701376,
      'music_title_search' => 'animalx',
      'music_artist_search' => '; martin garix;',
      'music_album_search' => '',
      'music_composer' => 'Martijn Garritsen',
      'music_album' => '',
      'music_listen' => 16176,
      'music_track_id' => 0,
      'music_filename' => '1473596-34404864.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Mother fucker animals!',
      'music_artist_html' => '<a href="/ca-si/Martin-Garrix~Y3NuX2FydGlzdH4xMzM0Mw==.html">Martin Garrix</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1501752,
      'music_title_url' => 'supremacy~muse',
      'music_title' => 'Supremacy',
      'music_artist' => 'Muse',
      'music_artist_id' => '8361',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538507308,
      'music_last_update_time' => 1433470088,
      'music_title_search' => 'xupremaci',
      'music_artist_search' => '; muxe;',
      'music_album_search' => '',
      'music_composer' => 'Muse',
      'music_album' => '',
      'music_listen' => 933,
      'music_track_id' => 0,
      'music_filename' => '1501752-30d03ce4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wake to see your true emancipation is a fantasy
Policies have risen up and overcome the brave
Greatness dies, unsung and lost, invisible to history
Embedded spies brainwashing our children to be me...',
      'music_artist_html' => '<a href="/ca-si/Muse~Y3NuX2FydGlzdH44MzYx.html">Muse</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1071215,
      'music_title_url' => 'please-dont-say-you-love-me~gabrielle-aplin',
      'music_title' => 'Please Don\'t Say You Love Me',
      'music_artist' => 'Gabrielle Aplin',
      'music_artist_id' => '29555',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538631485,
      'music_last_update_time' => 1362907280,
      'music_title_search' => 'pleaxe don t xai iou love me',
      'music_artist_search' => '; gabrile aplin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2591,
      'music_track_id' => 0,
      'music_filename' => '1071215-79a640f7.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Summer comes, winter fades
Here we are just the same
We don\'t need pressure, we don\'t need change
Let\'s not give the game away.

There used to be an empty space
A photograph without a face
But w...',
      'music_artist_html' => '<a href="/ca-si/Gabrielle-Aplin~Y3NuX2FydGlzdH4yOTU1NQ==.html">Gabrielle Aplin</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1077730,
      'music_title_url' => 'baby-i-love-you-regular-friends~jason-chen-kimberley-chen',
      'music_title' => 'Baby I Love You, Regular Friends',
      'music_artist' => 'Jason Chen;Kimberley Chen',
      'music_artist_id' => '2174;30131',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538801686,
      'music_last_update_time' => 1365643739,
      'music_title_search' => 'babi i love iou regular frindx',
      'music_artist_search' => '; jaxon chen; kimberlei chen;',
      'music_album_search' => '',
      'music_composer' => 'Che\'nelle; David Tao',
      'music_album' => '',
      'music_listen' => 8081,
      'music_track_id' => 0,
      'music_filename' => '1077730-1d46051a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Baby I love you, I love you, I love you
I swear you\'re the only one, only one
That is meant for me
You\'re always on my mind
I\'ll go through whatever
Me and you will ride into eternity.

What\'s all...',
      'music_artist_html' => '<a href="/ca-si/Jason-Chen~Y3NuX2FydGlzdH4yMTc0.html">Jason Chen</a>, <a href="/ca-si/Kimberley-Chen~Y3NuX2FydGlzdH4zMDEzMQ==.html">Kimberley Chen</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1083270,
      'music_title_url' => 'still-in-love~jason-chen-julie-zhan',
      'music_title' => 'Still In Love',
      'music_artist' => 'Jason Chen;Julie Zhan',
      'music_artist_id' => '2174;30906',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538496967,
      'music_last_update_time' => 1387552844,
      'music_title_search' => 'xtil in love',
      'music_artist_search' => '; jaxon chen; juli zhan;',
      'music_album_search' => '',
      'music_composer' => 'Jason Chen',
      'music_album' => '',
      'music_listen' => 7809,
      'music_track_id' => 0,
      'music_filename' => '1083270-19a44c08.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. I feel the same way
That you did about me yesterday
Promised you\'d never leave me alone
The castles that we made
Were swept by the tide and washed away
And now the sunsets have all gone.

Now ti...',
      'music_artist_html' => '<a href="/ca-si/Jason-Chen~Y3NuX2FydGlzdH4yMTc0.html">Jason Chen</a>, <a href="/ca-si/Julie-Zhan~Y3NuX2FydGlzdH4zMDkwNg==.html">Julie Zhan</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1101311,
      'music_title_url' => 'young-and-beautiful-rendition-original-by-lana-del-rey~somo',
      'music_title' => 'Young And Beautiful (Rendition) (Original By Lana Del Rey)',
      'music_artist' => 'SoMo',
      'music_artist_id' => '32288',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505275,
      'music_last_update_time' => 1371092400,
      'music_title_search' => 'ioung and beautiful; rendition ; oridnal bi lana del rei',
      'music_artist_search' => '; xomo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6018,
      'music_track_id' => 0,
      'music_filename' => '1101311-ae8b00ac.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/SoMo~Y3NuX2FydGlzdH4zMjI4OA==.html">SoMo</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1114577,
      'music_title_url' => 'first-time~jonas-brothers',
      'music_title' => 'First Time',
      'music_artist' => 'Jonas Brothers',
      'music_artist_id' => '890',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538766403,
      'music_last_update_time' => 1374233311,
      'music_title_search' => 'firxt time',
      'music_artist_search' => '; jonax brotherx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2716,
      'music_track_id' => 0,
      'music_filename' => '1114577-584de6f5.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Such a thrill of a lifetime
What a night for a good time
Let the beat be your lifeline
Make it feel like the first time.

[Chorus:]
Oh-oo, oh, oh-oo, oh, oh
Make it feel like the first time
Oh-o...',
      'music_artist_html' => '<a href="/ca-si/Jonas-Brothers~Y3NuX2FydGlzdH44OTA=.html">Jonas Brothers</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1129377,
      'music_title_url' => 'silhouettes~avicii-salem-al-fakir',
      'music_title' => 'Silhouettes',
      'music_artist' => 'Avicii;Salem Al Fakir',
      'music_artist_id' => '4033;34376',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539024583,
      'music_last_update_time' => 1377785226,
      'music_title_search' => 'xilhouetex',
      'music_artist_search' => '; avici; xalem al fakir;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4986,
      'music_track_id' => 0,
      'music_filename' => '1129377-9aecb162.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Press play, fast forward
Nonstop, we have a beaten path before us
It was all there, in plain sight
Come on people, we have all seen the signs.

So we will never get back to
To the old school
To the...',
      'music_artist_html' => '<a href="/ca-si/Avicii~Y3NuX2FydGlzdH40MDMz.html">Avicii</a>, <a href="/ca-si/Salem-Al-Fakir~Y3NuX2FydGlzdH4zNDM3Ng==.html">Salem Al Fakir</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1130189,
      'music_title_url' => 'i-need-your-love~madilyn-bailey-jake-coco',
      'music_title' => 'I Need Your Love',
      'music_artist' => 'Madilyn Bailey;Jake Coco',
      'music_artist_id' => '17906;17907',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538968685,
      'music_last_update_time' => 1377786146,
      'music_title_search' => 'i ned iour love',
      'music_artist_search' => '; madilin bailei; jake coco;',
      'music_album_search' => '',
      'music_composer' => 'Calvin Harris; Ellie Goulding',
      'music_album' => '',
      'music_listen' => 13024,
      'music_track_id' => 0,
      'music_filename' => '1130189-28e64c41.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Chorus]

1. I take a deep breath every time I pass your door
I know you\'re there but I can\'t see you anymore
And that\'s the reason you\'re in the dark
I\'ve been a stranger ever since we fell apart....',
      'music_artist_html' => '<a href="/ca-si/Madilyn-Bailey~Y3NuX2FydGlzdH4xNzkwNg==.html">Madilyn Bailey</a>, <a href="/ca-si/Jake-Coco~Y3NuX2FydGlzdH4xNzkwNw==.html">Jake Coco</a>',
    ),
  ),
  3 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1241319,
      'music_title_url' => 'a-song-for-mom-mbc-c-radio-131116~lay-exo',
      'music_title' => 'A Song For Mom (MBC C-Radio 131116)',
      'music_artist' => 'Lay;EXO',
      'music_artist_id' => '2964;2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538578952,
      'music_last_update_time' => 1397312415,
      'music_title_search' => 'a xong for mom; mbc c radio 1316',
      'music_artist_search' => '; lai; exo;',
      'music_album_search' => '',
      'music_composer' => 'Lay',
      'music_album' => '',
      'music_listen' => 12185,
      'music_track_id' => 0,
      'music_filename' => '1241319-7837fdc3.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '(This song is dedicated to his mum and composed by him - Zhang Yixing aka Lay from EXO)

Guàqiān dǎng bù zhù sīniàn
Lèishuǐ xǐlǐle tòng jué
Shì nǐ jǐyǔle wǒ yīqiè
Wěidà zhège zì wǒ zhōngyú liǎojiě....',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1056484,
      'music_title_url' => 'break-down~super-junior-m',
      'music_title' => 'Break Down',
      'music_artist' => 'Super Junior M',
      'music_artist_id' => '2078',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519713852,
      'music_last_update_time' => 1357697218,
      'music_title_search' => 'break down',
      'music_artist_search' => '; xuper junior m;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 128355,
      'music_track_id' => 0,
      'music_filename' => '1056484-b4104ccd.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Zhe bu xiang shi wo
Wan quan leng jing bu lai
Lu ren dou kan chuan
Dui ni wo you zhong te bie qi dai.

Shi kong le zen me ban
Kuai yao li bu kai.

Yeah hua ti dou shi fen pu tong
Wei he xin tiao yi...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1076187,
      'music_title_url' => 'yeu-tron-mot-doi~thu-ky',
      'music_title' => 'Yêu Trọn Một Đời (一生所愛)',
      'music_artist' => 'Thư Kỳ',
      'music_artist_id' => '1266',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530156409,
      'music_last_update_time' => 1365391813,
      'music_title_search' => 'iu chon 1 doi; 一生所愛',
      'music_artist_search' => '; thu ki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 16653,
      'music_track_id' => 0,
      'music_filename' => '1076187-1bb4931f.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '昨天今天过去不再回来
Zuo tian jin tian guo qu bu zai hui lai
Tạc thiên kim thiên quá khứ bất tái hồi lai
Hôm qua hôm nay quá khứ chưa bao giờ quay lại

红颜落下色彩变苍白
Hong yan luo xia se cai bian cang bai
Hồng nh...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1096564,
      'music_title_url' => 'wolf-chinese-version~exo',
      'music_title' => 'Wolf (Chinese Version)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1524287150,
      'music_last_update_time' => 1397398237,
      'music_title_search' => 'wolf; chinexe verxion',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Kenzie; Will Simms; Nermin Harambašić; Zhou Weijie',
      'music_album' => '',
      'music_listen' => 96319,
      'music_track_id' => 0,
      'music_filename' => '1096564-16ae7b56.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Ye xing de ben neng nan kang ju
Duo muo xiang yao yi kou tun xia tian de xiang mi de ni
Xian wen xiang wei xin shang ni de xi ni
Wo yong pin chang hong jiu na yang de you ya xiang yong ni.

Ah wei...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1111269,
      'music_title_url' => 'bye-chinese-version~taeyeon',
      'music_title' => 'Bye (Chinese Version)',
      'music_artist' => 'TaeYeon',
      'music_artist_id' => '1470',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1439033694,
      'music_last_update_time' => 1373443228,
      'music_title_search' => 'bi; chinexe verxion',
      'music_artist_search' => '; taeion;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7198,
      'music_track_id' => 0,
      'music_filename' => '1111269-09d47479.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1113513,
      'music_title_url' => 'wolf-drama-version~exo-m',
      'music_title' => 'Wolf (Drama Version)',
      'music_artist' => 'EXO-M',
      'music_artist_id' => '4488',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1500737875,
      'music_last_update_time' => 1373941671,
      'music_title_search' => 'wolf; drama verxion',
      'music_artist_search' => '; exo m;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 41503,
      'music_track_id' => 0,
      'music_filename' => '1113513-bbebd23d.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '(Come on! Come on!) 

[Kris]
Ye xing de, ben neng nan kang ju
Duo me xiang yao yi kou tun xia tian de xiang mi de ni
[ChanYeol]
Xian wen xiang wei, xin shang, ni de xi ni
Wo yong pin chang hong jiu...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1119958,
      'music_title_url' => 'growl-chinese-version~exo',
      'music_title' => 'Growl (Chinese Version)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1508122646,
      'music_last_update_time' => 1375415206,
      'music_title_search' => 'growl; chinexe verxion',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'EXO',
      'music_album' => '',
      'music_listen' => 92083,
      'music_track_id' => 0,
      'music_filename' => '1119958-2603bc79.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Yo, okay
Xian zai hen wei xian
Wo yao jing gao ni (jing gao ni)
Zen me bu zhi dao (You didn\'t know?)
Na jiu bie zai duo gei wo ci ji
Wo wang le zi ji.

Lian hu xi dou kuai zan ting
Dang ni xiang wo...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1121383,
      'music_title_url' => 'wolf-chinese-version-show-champion-130626~exo',
      'music_title' => 'Wolf (Chinese Version) (Show Champion 130626)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1461680138,
      'music_last_update_time' => 1375751551,
      'music_title_search' => 'wolf; chinexe verxion ; thow champion 130626',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Zhou Weijie; Kenzie; Will Simms; Nermin Harambašić',
      'music_album' => '',
      'music_listen' => 9440,
      'music_track_id' => 0,
      'music_filename' => '1121383-9f5ba51e.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Ye xing de ben neng nan kang ju
Duo muo xiang yao yi kou tun xia tian de xiang mi de ni
Xian wen xiang wei xin shang ni de xi ni
Wo yong pin chang hong jiu na yang de you ya xiang yong ni.

Ah wei...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1123050,
      'music_title_url' => 'still-as-ever~uong-dong-thanh',
      'music_title' => 'Still As Ever‎',
      'music_artist' => 'Uông Đông Thành',
      'music_artist_id' => '17496',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512688938,
      'music_last_update_time' => 1376098778,
      'music_title_search' => 'xtil ax ever‎',
      'music_artist_search' => '; ung dong thanh;',
      'music_album_search' => '',
      'music_composer' => 'OST Cô Nàng Đẹp Trai (Phiên Bản Đài Loan)',
      'music_album' => '',
      'music_listen' => 4159,
      'music_track_id' => 0,
      'music_filename' => '1123050-2d602f5d.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1123381,
      'music_title_url' => 'wolf-hong-kong-dome-festival-130701~exo',
      'music_title' => 'Wolf (Hong Kong Dome Festival 130701)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493373563,
      'music_last_update_time' => 1376314296,
      'music_title_search' => 'wolf; hong kong dome fextival 130701',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Zhou Weijie; Kenzie; Will Simms; Nermin Harambašić',
      'music_album' => '',
      'music_listen' => 11037,
      'music_track_id' => 0,
      'music_filename' => '1123381-54042d16.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Ye xing de ben neng nan kang ju
Duo muo xiang yao yi kou tun xia tian de xiang mi de ni
Xian wen xiang wei xin shang ni de xi ni
Wo yong pin chang hong jiu na yang de you ya xiang yong ni.

Ah wei...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1124145,
      'music_title_url' => 'growl-dance-only-chinese-version~exo',
      'music_title' => 'Growl (Dance Only) (Chinese Version)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494592119,
      'music_last_update_time' => 1376358661,
      'music_title_search' => 'growl; dance onli ; chinexe verxion',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Hyuk Shin; DK; Jordan Kyle; John Major; Jarah Gibson; Wang Ya Jun',
      'music_album' => '',
      'music_listen' => 18095,
      'music_track_id' => 0,
      'music_filename' => '1124145-59b41ed8.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Yo, OKAY!
(Sexy).

Xianzai hen weixian zheng yao jinggao ni (jing gao ni)
Zenme bu zhidao (You didn\'t know?)
Baituo bie zai duo gei wo ciji (Ciji)
Wo huangle ziji (Ah~oh~).

Lian huxi dou kuai zant...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1124507,
      'music_title_url' => 'trap-chinese-version~henry-kyuhyun-taemin',
      'music_title' => 'Trap (Chinese Version)',
      'music_artist' => 'Henry;Kyuhyun;Taemin',
      'music_artist_id' => '3573;1799;2962',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516207713,
      'music_last_update_time' => 1376449830,
      'music_title_search' => 'chap; chinexe verxion',
      'music_artist_search' => '; henri; kiuhiun; taemin;',
      'music_album_search' => '',
      'music_composer' => 'Misfit',
      'music_album' => '',
      'music_listen' => 27894,
      'music_track_id' => 0,
      'music_filename' => '1124507-c03aecbb.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Xiang zai long zi li de mao tie de ge li yi yang de tao bu liao
Jiu xiang kun zai che dao dong bu liao dong bu liao Yeah
Chu kou wo hai kan bu dao zai zhe mi tu dao dao
Huai diao de GPS mei zuo bia...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1126865,
      'music_title_url' => 'growl-2nd-version-chinese-version~exo',
      'music_title' => 'Growl (2nd Version) (Chinese Version)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512426229,
      'music_last_update_time' => 1399806024,
      'music_title_search' => 'growl; 2nd verxion ; chinexe verxion',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Hyuk Shin; DK; Jordan Kyle; John Major; Jarah Gibson; Wang Ya Jun',
      'music_album' => '',
      'music_listen' => 43726,
      'music_track_id' => 0,
      'music_filename' => '1126865-42519c20.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Yo, OKAY!
(Sexy).

Xianzai hen weixian zheng yao jinggao ni (jing gao ni)
Zenme bu zhidao (You don\'t know?)
Baituo bie zai duo gei wo ciji (Ciji)
Wo huangle ziji (Ah~oh~).

Lian huxi dou kuai zanti...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1129466,
      'music_title_url' => 'lucky-simsimtapa-130821~exo-m',
      'music_title' => 'Lucky (SimSimTaPa 130821)',
      'music_artist' => 'EXO-M',
      'music_artist_id' => '4488',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1500737681,
      'music_last_update_time' => 1377697872,
      'music_title_search' => 'lucki; ximximtapa 130821',
      'music_artist_search' => '; exo m;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 37335,
      'music_track_id' => 0,
      'music_filename' => '1129466-b2b33d53.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Zhù zài tóngyī guó de wǒ hé nǐ
Yòng tóngyàng yányǔ de wǒ hé nǐ
Shì duōme xìngyùn yǒu zhèyàng yùnqì
Zài méiyǒu gèng měihǎo de jùqíng.

Nà yītiān duō měilì de jìyù
Tūrúqílái xìngfú de jiànglín lucky...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1133069,
      'music_title_url' => 'drama-episode-2-chinese-version~exo',
      'music_title' => 'Drama Episode 2 (Chinese Version)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1459688045,
      'music_last_update_time' => 1378443777,
      'music_title_search' => 'drama epixode 2; chinexe verxion',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9463,
      'music_track_id' => 0,
      'music_filename' => '1133069-63c01661.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1134298,
      'music_title_url' => 'break-down-vietsub~super-junior-m',
      'music_title' => 'Break Down (Vietsub)',
      'music_artist' => 'Super Junior M',
      'music_artist_id' => '2078',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495267282,
      'music_last_update_time' => 1378691502,
      'music_title_search' => 'break down; vitxub',
      'music_artist_search' => '; xuper junior m;',
      'music_album_search' => '',
      'music_composer' => 'Super Junior M',
      'music_album' => '',
      'music_listen' => 20417,
      'music_track_id' => 0,
      'music_filename' => '1134298-3ce5ca2a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Zhe bu xiang shi wo
Wan quan leng jing bu lai
Lu ren dou kan chuan
Dui ni wo you zhong te bie qi dai.

Shi kong le zen me ban
Kuai yao li bu kai.

Yeah hua ti dou shi fen pu tong
Wei he xin tiao yi...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1135995,
      'music_title_url' => 'queens-cafe~ivana-wong',
      'music_title' => 'Queen\'s Café',
      'music_artist' => 'Ivana Wong',
      'music_artist_id' => '34836',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495247596,
      'music_last_update_time' => 1379576628,
      'music_title_search' => 'quen x cafe',
      'music_artist_search' => '; ivana wong;',
      'music_album_search' => '',
      'music_composer' => 'Ivana Wong',
      'music_album' => '',
      'music_listen' => 1462,
      'music_track_id' => 0,
      'music_filename' => '1135995-500175ac.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1140309,
      'music_title_url' => 'love-instantly~khalil-fong',
      'music_title' => 'Love Instantly',
      'music_artist' => 'Khalil Fong',
      'music_artist_id' => '1036',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497096413,
      'music_last_update_time' => 1380077777,
      'music_title_search' => 'love inxtantli',
      'music_artist_search' => '; khalil fong;',
      'music_album_search' => '',
      'music_composer' => 'Edward Chan; Charles Lee; Khalil Fong',
      'music_album' => '',
      'music_listen' => 1754,
      'music_track_id' => 0,
      'music_filename' => '1140309-dc61e422.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1140712,
      'music_title_url' => 'tinh-yeu-trong-vong-tay-chinese-version~luong-bich-huu',
      'music_title' => 'Tình Yêu Trong Vòng Tay (Chinese Version)',
      'music_artist' => 'Lương Bích Hữu',
      'music_artist_id' => '239',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525402343,
      'music_last_update_time' => 1380038471,
      'music_title_search' => 'tinh iu chong vong tai; chinexe verxion',
      'music_artist_search' => '; lung bich hu;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 46674,
      'music_track_id' => 0,
      'music_filename' => '1140712-2e1e0b3c.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1171268,
      'music_title_url' => 'journey~jolin-tsai',
      'music_title' => 'Journey',
      'music_artist' => 'Jolin Tsai',
      'music_artist_id' => '277',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493866386,
      'music_last_update_time' => 1384747558,
      'music_title_search' => 'journei',
      'music_artist_search' => '; jolin txai;',
      'music_album_search' => '',
      'music_composer' => 'Jolin Tsai',
      'music_album' => '',
      'music_listen' => 4523,
      'music_track_id' => 0,
      'music_filename' => '1171268-bf988cc8.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '你是谁 总能决定光的纯度
Ni shi shui zong neng jue ding guang de chun du
晶莹夺目 如星光般锋芒毕露
Jing ying duo mu ru xing guang ban feng wang bi lu
往你自信里掏 掏出微笑
Wang ni zi xin li tao tao chu wei xiao
掏出阳光闪耀 带潮流奔跑
Tao chu...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1241319,
      'music_title_url' => 'a-song-for-mom-mbc-c-radio-131116~lay-exo',
      'music_title' => 'A Song For Mom (MBC C-Radio 131116)',
      'music_artist' => 'Lay;EXO',
      'music_artist_id' => '2964;2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538578952,
      'music_last_update_time' => 1397312415,
      'music_title_search' => 'a xong for mom; mbc c radio 1316',
      'music_artist_search' => '; lai; exo;',
      'music_album_search' => '',
      'music_composer' => 'Lay',
      'music_album' => '',
      'music_listen' => 12185,
      'music_track_id' => 0,
      'music_filename' => '1241319-7837fdc3.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '(This song is dedicated to his mum and composed by him - Zhang Yixing aka Lay from EXO)

Guàqiān dǎng bù zhù sīniàn
Lèishuǐ xǐlǐle tòng jué
Shì nǐ jǐyǔle wǒ yīqiè
Wěidà zhège zì wǒ zhōngyú liǎojiě....',
      'music_artist_html' => '<a href="/ca-si/Lay~Y3NuX2FydGlzdH4yOTY0.html">Lay</a>, <a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1056484,
      'music_title_url' => 'break-down~super-junior-m',
      'music_title' => 'Break Down',
      'music_artist' => 'Super Junior M',
      'music_artist_id' => '2078',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519713852,
      'music_last_update_time' => 1357697218,
      'music_title_search' => 'break down',
      'music_artist_search' => '; xuper junior m;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 128355,
      'music_track_id' => 0,
      'music_filename' => '1056484-b4104ccd.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Zhe bu xiang shi wo
Wan quan leng jing bu lai
Lu ren dou kan chuan
Dui ni wo you zhong te bie qi dai.

Shi kong le zen me ban
Kuai yao li bu kai.

Yeah hua ti dou shi fen pu tong
Wei he xin tiao yi...',
      'music_artist_html' => '<a href="/ca-si/Super-Junior-M~Y3NuX2FydGlzdH4yMDc4.html">Super Junior M</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1076187,
      'music_title_url' => 'yeu-tron-mot-doi~thu-ky',
      'music_title' => 'Yêu Trọn Một Đời (一生所愛)',
      'music_artist' => 'Thư Kỳ',
      'music_artist_id' => '1266',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530156409,
      'music_last_update_time' => 1365391813,
      'music_title_search' => 'iu chon 1 doi; 一生所愛',
      'music_artist_search' => '; thu ki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 16653,
      'music_track_id' => 0,
      'music_filename' => '1076187-1bb4931f.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '昨天今天过去不再回来
Zuo tian jin tian guo qu bu zai hui lai
Tạc thiên kim thiên quá khứ bất tái hồi lai
Hôm qua hôm nay quá khứ chưa bao giờ quay lại

红颜落下色彩变苍白
Hong yan luo xia se cai bian cang bai
Hồng nh...',
      'music_artist_html' => '<a href="/ca-si/Thu-Ky~Y3NuX2FydGlzdH4xMjY2.html">Thư Kỳ</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1096564,
      'music_title_url' => 'wolf-chinese-version~exo',
      'music_title' => 'Wolf (Chinese Version)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1524287150,
      'music_last_update_time' => 1397398237,
      'music_title_search' => 'wolf; chinexe verxion',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Kenzie; Will Simms; Nermin Harambašić; Zhou Weijie',
      'music_album' => '',
      'music_listen' => 96319,
      'music_track_id' => 0,
      'music_filename' => '1096564-16ae7b56.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Ye xing de ben neng nan kang ju
Duo muo xiang yao yi kou tun xia tian de xiang mi de ni
Xian wen xiang wei xin shang ni de xi ni
Wo yong pin chang hong jiu na yang de you ya xiang yong ni.

Ah wei...',
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1111269,
      'music_title_url' => 'bye-chinese-version~taeyeon',
      'music_title' => 'Bye (Chinese Version)',
      'music_artist' => 'TaeYeon',
      'music_artist_id' => '1470',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1439033694,
      'music_last_update_time' => 1373443228,
      'music_title_search' => 'bi; chinexe verxion',
      'music_artist_search' => '; taeion;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7198,
      'music_track_id' => 0,
      'music_filename' => '1111269-09d47479.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/TaeYeon~Y3NuX2FydGlzdH4xNDcw.html">TaeYeon</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1113513,
      'music_title_url' => 'wolf-drama-version~exo-m',
      'music_title' => 'Wolf (Drama Version)',
      'music_artist' => 'EXO-M',
      'music_artist_id' => '4488',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1500737875,
      'music_last_update_time' => 1373941671,
      'music_title_search' => 'wolf; drama verxion',
      'music_artist_search' => '; exo m;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 41503,
      'music_track_id' => 0,
      'music_filename' => '1113513-bbebd23d.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '(Come on! Come on!) 

[Kris]
Ye xing de, ben neng nan kang ju
Duo me xiang yao yi kou tun xia tian de xiang mi de ni
[ChanYeol]
Xian wen xiang wei, xin shang, ni de xi ni
Wo yong pin chang hong jiu...',
      'music_artist_html' => '<a href="/ca-si/EXO-M~Y3NuX2FydGlzdH40NDg4.html">EXO-M</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1119958,
      'music_title_url' => 'growl-chinese-version~exo',
      'music_title' => 'Growl (Chinese Version)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1508122646,
      'music_last_update_time' => 1375415206,
      'music_title_search' => 'growl; chinexe verxion',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'EXO',
      'music_album' => '',
      'music_listen' => 92083,
      'music_track_id' => 0,
      'music_filename' => '1119958-2603bc79.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Yo, okay
Xian zai hen wei xian
Wo yao jing gao ni (jing gao ni)
Zen me bu zhi dao (You didn\'t know?)
Na jiu bie zai duo gei wo ci ji
Wo wang le zi ji.

Lian hu xi dou kuai zan ting
Dang ni xiang wo...',
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1121383,
      'music_title_url' => 'wolf-chinese-version-show-champion-130626~exo',
      'music_title' => 'Wolf (Chinese Version) (Show Champion 130626)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1461680138,
      'music_last_update_time' => 1375751551,
      'music_title_search' => 'wolf; chinexe verxion ; thow champion 130626',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Zhou Weijie; Kenzie; Will Simms; Nermin Harambašić',
      'music_album' => '',
      'music_listen' => 9440,
      'music_track_id' => 0,
      'music_filename' => '1121383-9f5ba51e.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Ye xing de ben neng nan kang ju
Duo muo xiang yao yi kou tun xia tian de xiang mi de ni
Xian wen xiang wei xin shang ni de xi ni
Wo yong pin chang hong jiu na yang de you ya xiang yong ni.

Ah wei...',
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1123050,
      'music_title_url' => 'still-as-ever~uong-dong-thanh',
      'music_title' => 'Still As Ever‎',
      'music_artist' => 'Uông Đông Thành',
      'music_artist_id' => '17496',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512688938,
      'music_last_update_time' => 1376098778,
      'music_title_search' => 'xtil ax ever‎',
      'music_artist_search' => '; ung dong thanh;',
      'music_album_search' => '',
      'music_composer' => 'OST Cô Nàng Đẹp Trai (Phiên Bản Đài Loan)',
      'music_album' => '',
      'music_listen' => 4159,
      'music_track_id' => 0,
      'music_filename' => '1123050-2d602f5d.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Uong-Dong-Thanh~Y3NuX2FydGlzdH4xNzQ5Ng==.html">Uông Đông Thành</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1123381,
      'music_title_url' => 'wolf-hong-kong-dome-festival-130701~exo',
      'music_title' => 'Wolf (Hong Kong Dome Festival 130701)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493373563,
      'music_last_update_time' => 1376314296,
      'music_title_search' => 'wolf; hong kong dome fextival 130701',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Zhou Weijie; Kenzie; Will Simms; Nermin Harambašić',
      'music_album' => '',
      'music_listen' => 11037,
      'music_track_id' => 0,
      'music_filename' => '1123381-54042d16.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Ye xing de ben neng nan kang ju
Duo muo xiang yao yi kou tun xia tian de xiang mi de ni
Xian wen xiang wei xin shang ni de xi ni
Wo yong pin chang hong jiu na yang de you ya xiang yong ni.

Ah wei...',
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1124145,
      'music_title_url' => 'growl-dance-only-chinese-version~exo',
      'music_title' => 'Growl (Dance Only) (Chinese Version)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494592119,
      'music_last_update_time' => 1376358661,
      'music_title_search' => 'growl; dance onli ; chinexe verxion',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Hyuk Shin; DK; Jordan Kyle; John Major; Jarah Gibson; Wang Ya Jun',
      'music_album' => '',
      'music_listen' => 18095,
      'music_track_id' => 0,
      'music_filename' => '1124145-59b41ed8.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Yo, OKAY!
(Sexy).

Xianzai hen weixian zheng yao jinggao ni (jing gao ni)
Zenme bu zhidao (You didn\'t know?)
Baituo bie zai duo gei wo ciji (Ciji)
Wo huangle ziji (Ah~oh~).

Lian huxi dou kuai zant...',
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1124507,
      'music_title_url' => 'trap-chinese-version~henry-kyuhyun-taemin',
      'music_title' => 'Trap (Chinese Version)',
      'music_artist' => 'Henry;Kyuhyun;Taemin',
      'music_artist_id' => '3573;1799;2962',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516207713,
      'music_last_update_time' => 1376449830,
      'music_title_search' => 'chap; chinexe verxion',
      'music_artist_search' => '; henri; kiuhiun; taemin;',
      'music_album_search' => '',
      'music_composer' => 'Misfit',
      'music_album' => '',
      'music_listen' => 27894,
      'music_track_id' => 0,
      'music_filename' => '1124507-c03aecbb.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Xiang zai long zi li de mao tie de ge li yi yang de tao bu liao
Jiu xiang kun zai che dao dong bu liao dong bu liao Yeah
Chu kou wo hai kan bu dao zai zhe mi tu dao dao
Huai diao de GPS mei zuo bia...',
      'music_artist_html' => '<a href="/ca-si/Henry~Y3NuX2FydGlzdH4zNTcz.html">Henry</a>, <a href="/ca-si/Kyuhyun~Y3NuX2FydGlzdH4xNzk5.html">Kyuhyun</a>, <a href="/ca-si/Taemin~Y3NuX2FydGlzdH4yOTYy.html">Taemin</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1126865,
      'music_title_url' => 'growl-2nd-version-chinese-version~exo',
      'music_title' => 'Growl (2nd Version) (Chinese Version)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512426229,
      'music_last_update_time' => 1399806024,
      'music_title_search' => 'growl; 2nd verxion ; chinexe verxion',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Hyuk Shin; DK; Jordan Kyle; John Major; Jarah Gibson; Wang Ya Jun',
      'music_album' => '',
      'music_listen' => 43726,
      'music_track_id' => 0,
      'music_filename' => '1126865-42519c20.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Yo, OKAY!
(Sexy).

Xianzai hen weixian zheng yao jinggao ni (jing gao ni)
Zenme bu zhidao (You don\'t know?)
Baituo bie zai duo gei wo ciji (Ciji)
Wo huangle ziji (Ah~oh~).

Lian huxi dou kuai zanti...',
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1129466,
      'music_title_url' => 'lucky-simsimtapa-130821~exo-m',
      'music_title' => 'Lucky (SimSimTaPa 130821)',
      'music_artist' => 'EXO-M',
      'music_artist_id' => '4488',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1500737681,
      'music_last_update_time' => 1377697872,
      'music_title_search' => 'lucki; ximximtapa 130821',
      'music_artist_search' => '; exo m;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 37335,
      'music_track_id' => 0,
      'music_filename' => '1129466-b2b33d53.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Zhù zài tóngyī guó de wǒ hé nǐ
Yòng tóngyàng yányǔ de wǒ hé nǐ
Shì duōme xìngyùn yǒu zhèyàng yùnqì
Zài méiyǒu gèng měihǎo de jùqíng.

Nà yītiān duō měilì de jìyù
Tūrúqílái xìngfú de jiànglín lucky...',
      'music_artist_html' => '<a href="/ca-si/EXO-M~Y3NuX2FydGlzdH40NDg4.html">EXO-M</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1133069,
      'music_title_url' => 'drama-episode-2-chinese-version~exo',
      'music_title' => 'Drama Episode 2 (Chinese Version)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1459688045,
      'music_last_update_time' => 1378443777,
      'music_title_search' => 'drama epixode 2; chinexe verxion',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9463,
      'music_track_id' => 0,
      'music_filename' => '1133069-63c01661.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1134298,
      'music_title_url' => 'break-down-vietsub~super-junior-m',
      'music_title' => 'Break Down (Vietsub)',
      'music_artist' => 'Super Junior M',
      'music_artist_id' => '2078',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495267282,
      'music_last_update_time' => 1378691502,
      'music_title_search' => 'break down; vitxub',
      'music_artist_search' => '; xuper junior m;',
      'music_album_search' => '',
      'music_composer' => 'Super Junior M',
      'music_album' => '',
      'music_listen' => 20417,
      'music_track_id' => 0,
      'music_filename' => '1134298-3ce5ca2a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Zhe bu xiang shi wo
Wan quan leng jing bu lai
Lu ren dou kan chuan
Dui ni wo you zhong te bie qi dai.

Shi kong le zen me ban
Kuai yao li bu kai.

Yeah hua ti dou shi fen pu tong
Wei he xin tiao yi...',
      'music_artist_html' => '<a href="/ca-si/Super-Junior-M~Y3NuX2FydGlzdH4yMDc4.html">Super Junior M</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1135995,
      'music_title_url' => 'queens-cafe~ivana-wong',
      'music_title' => 'Queen\'s Café',
      'music_artist' => 'Ivana Wong',
      'music_artist_id' => '34836',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495247596,
      'music_last_update_time' => 1379576628,
      'music_title_search' => 'quen x cafe',
      'music_artist_search' => '; ivana wong;',
      'music_album_search' => '',
      'music_composer' => 'Ivana Wong',
      'music_album' => '',
      'music_listen' => 1462,
      'music_track_id' => 0,
      'music_filename' => '1135995-500175ac.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Ivana-Wong~Y3NuX2FydGlzdH4zNDgzNg==.html">Ivana Wong</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1140309,
      'music_title_url' => 'love-instantly~khalil-fong',
      'music_title' => 'Love Instantly',
      'music_artist' => 'Khalil Fong',
      'music_artist_id' => '1036',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497096413,
      'music_last_update_time' => 1380077777,
      'music_title_search' => 'love inxtantli',
      'music_artist_search' => '; khalil fong;',
      'music_album_search' => '',
      'music_composer' => 'Edward Chan; Charles Lee; Khalil Fong',
      'music_album' => '',
      'music_listen' => 1754,
      'music_track_id' => 0,
      'music_filename' => '1140309-dc61e422.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Khalil-Fong~Y3NuX2FydGlzdH4xMDM2.html">Khalil Fong</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1140712,
      'music_title_url' => 'tinh-yeu-trong-vong-tay-chinese-version~luong-bich-huu',
      'music_title' => 'Tình Yêu Trong Vòng Tay (Chinese Version)',
      'music_artist' => 'Lương Bích Hữu',
      'music_artist_id' => '239',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525402343,
      'music_last_update_time' => 1380038471,
      'music_title_search' => 'tinh iu chong vong tai; chinexe verxion',
      'music_artist_search' => '; lung bich hu;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 46674,
      'music_track_id' => 0,
      'music_filename' => '1140712-2e1e0b3c.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Luong-Bich-Huu~Y3NuX2FydGlzdH4yMzk=.html">Lương Bích Hữu</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1171268,
      'music_title_url' => 'journey~jolin-tsai',
      'music_title' => 'Journey',
      'music_artist' => 'Jolin Tsai',
      'music_artist_id' => '277',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493866386,
      'music_last_update_time' => 1384747558,
      'music_title_search' => 'journei',
      'music_artist_search' => '; jolin txai;',
      'music_album_search' => '',
      'music_composer' => 'Jolin Tsai',
      'music_album' => '',
      'music_listen' => 4523,
      'music_track_id' => 0,
      'music_filename' => '1171268-bf988cc8.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '你是谁 总能决定光的纯度
Ni shi shui zong neng jue ding guang de chun du
晶莹夺目 如星光般锋芒毕露
Jing ying duo mu ru xing guang ban feng wang bi lu
往你自信里掏 掏出微笑
Wang ni zi xin li tao tao chu wei xiao
掏出阳光闪耀 带潮流奔跑
Tao chu...',
      'music_artist_html' => '<a href="/ca-si/Jolin-Tsai~Y3NuX2FydGlzdH4yNzc=.html">Jolin Tsai</a>',
    ),
  ),
  4 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1122442,
      'music_title_url' => 'do-you-love-me~2ne1',
      'music_title' => 'Do You Love Me',
      'music_artist' => '2NE1',
      'music_artist_id' => '1570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538567823,
      'music_last_update_time' => 1375970430,
      'music_title_search' => 'do iou love me',
      'music_artist_search' => '; 2ne1;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 68433,
      'music_track_id' => 0,
      'music_filename' => '1122442-26c59be3.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'D.O.Y.O.U.L.O.V.E.M.E
D.O.Y.O.U.L.O.V.E.M.E
D.O.Y.O.U.L.O.V.E.M.E
D.O.Y.O.U.L.O.V.E.
DO YOU?

Do you love me?
Do you love me?
Do you love me like the way I love you babe? (x2)

Yegami ttag maja deu...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1148658,
      'music_title_url' => 'i-know-the-feeling~t-ara',
      'music_title' => 'I Know The Feeling',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538999003,
      'music_last_update_time' => 1482986667,
      'music_title_search' => 'i know the feling',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => 'T-Ara',
      'music_album' => '',
      'music_listen' => 222147,
      'music_track_id' => 0,
      'music_filename' => '1148658-5b0058a0.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Neon naega saenggakhaneun romio
Eonjekkaji nal aetaeuo
Nae gaseumi ta deureoga
Please tell me luv luv.

Yeppeo boiryeogo hwajangdo hago
Johahadeon oseul ipgo nawatjyo
Deo jal boiryeogo gin saengmeo...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1218119,
      'music_title_url' => 'my-destiny-you-who-came-from-the-stars-ost~lyn',
      'music_title' => 'My Destiny (You Who Came From The Stars OST)',
      'music_artist' => 'Lyn',
      'music_artist_id' => '4132',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538750565,
      'music_last_update_time' => 1397372146,
      'music_title_search' => 'mi dextini; iou who came from the xtarx oxt',
      'music_artist_search' => '; lin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 42852,
      'music_track_id' => 0,
      'music_filename' => '1218119-6d2f6c96.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Na dasi heorakhandamyeon
Geudael dasi bol su itdamyeon
Nae jinan gieok sogeseo
Geu apeum sogeseo
Geudael bulleo.

You are my destiny geudaen
You are my destiny geudaen
You are my everything
Geudaem...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 539443,
      'music_title_url' => 'can-you-love-me-vietsub~f-ve-dolls-dani',
      'music_title' => 'Can You Love Me? (Vietsub)',
      'music_artist' => 'F-ve Dolls;Dani',
      'music_artist_id' => '3856;2381',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496165338,
      'music_last_update_time' => 1401692816,
      'music_title_search' => 'can iou love me ; vitxub',
      'music_artist_search' => '; f ve dolx; dani;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8332,
      'music_track_id' => 0,
      'music_filename' => '539443-454af556.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Saranghae jeojulttae
Geudae, can you love me?

Geu ipdeon naldo geuriunnaldo
Jeomjeom itjeojeoyo
Neol itjigo tteonagyeo bichigo
Nae maeum yakhaejyeoseo.

Jamkkan saireul nunmuri ssodaja
Jureureuk j...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 542538,
      'music_title_url' => 'moment-the-heirs-ost~changmin',
      'music_title' => 'Moment (The Heirs OST)',
      'music_artist' => 'Changmin',
      'music_artist_id' => '1365',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535450279,
      'music_last_update_time' => 1423239522,
      'music_title_search' => 'moment; the heirx oxt',
      'music_artist_search' => '; changmin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 70825,
      'music_track_id' => 0,
      'music_filename' => '542538-9f9131bf.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'In your eyes In your mind sarangi geuryeojyeo
uri meolli isseodo garyeojin dedo Love is you
baramgyeore nalliun geuriumi nae maeumeul jeonhaejugil.

Love is the moment niga odeon geunal geu sungan...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 544354,
      'music_title_url' => 'love-options-inkigayo-131124~bestie',
      'music_title' => 'Love Options (Inkigayo 131124)',
      'music_artist' => 'BESTie',
      'music_artist_id' => '4713',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1427533779,
      'music_last_update_time' => 1406616698,
      'music_title_search' => 'love optionx; inkigaio 13124',
      'music_artist_search' => '; bexti;',
      'music_album_search' => '',
      'music_composer' => 'Brave Brothers',
      'music_album' => '',
      'music_listen' => 1238,
      'music_track_id' => 0,
      'music_filename' => '544354-f47df3c9.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Ladies and Gentleman
Welcome to the show-off
Brave Sound and BESTie.

Geu aeneun neomu kiga jakgo 
Eolguri neomu neomu keo
Geu aeneun neomu seonggyeok joha 
Yeojaga manheul geot gata
Geu aeneun neo...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 573634,
      'music_title_url' => 'love-options~bestie',
      'music_title' => 'Love Options',
      'music_artist' => 'BESTie',
      'music_artist_id' => '4713',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1506466115,
      'music_last_update_time' => 1406616667,
      'music_title_search' => 'love optionx',
      'music_artist_search' => '; bexti;',
      'music_album_search' => '',
      'music_composer' => 'Brave Brothers',
      'music_album' => '',
      'music_listen' => 10839,
      'music_track_id' => 0,
      'music_filename' => '573634-b214ccdf.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Ladies and Gentleman
Welcome to the show-off
Brave Sound and BESTie.

Geu aeneun neomu kiga jakgo 
Eolguri neomu neomu keo
Geu aeneun neomu seonggyeok joha 
Yeojaga manheul geot gata
Geu aeneun neo...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 577932,
      'music_title_url' => 'trap-henry-dance-cover~st319',
      'music_title' => 'Trap (Henry Dance Cover)',
      'music_artist' => 'St.319',
      'music_artist_id' => '4213',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1515095791,
      'music_last_update_time' => 1404144611,
      'music_title_search' => 'chap; henri dance cover',
      'music_artist_search' => '; xt 319;',
      'music_album_search' => '',
      'music_composer' => 'Misfit; Svante Halldin; Emilh Tigerlantz; Geraldo Sandell',
      'music_album' => '',
      'music_listen' => 14081,
      'music_track_id' => 0,
      'music_filename' => '577932-ae06de82.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Umjigil su eobseo wae naneun mugeowojyeo gagiman hae 
Ne mam guseoge nohyeojin chae nohin chae yeah 
Nege dako sipeunde geujeo keomkeomhan i eodum soge 
Jakku garaanja gateun gose geu gose yeah.

N...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1056123,
      'music_title_url' => 'look-at-you-i-miss-you-ost~jeong-dong-ha',
      'music_title' => 'Look At You (I Miss You OST)',
      'music_artist' => 'Jeong Dong Ha',
      'music_artist_id' => '4067',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495377849,
      'music_last_update_time' => 1436081028,
      'music_title_search' => 'lok at iou; i mix iou oxt',
      'music_artist_search' => '; jeong dong ha;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9330,
      'music_track_id' => 0,
      'music_filename' => '1056123-d0343599.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Geobina niga nal barabolsurok
Jakkuman naega neol ulge hanabwa
Sangcheoppunin nae gaseumi neoreul kkeureoaneulkkabwa
Himgyeopge dwidoraseojiman.

Duryeowo ni gyeote meoreojilsurok
Dasineun doedorag...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1059916,
      'music_title_url' => 'its-over-dance-version~speed-park-bo-young',
      'music_title' => 'It\'s Over (Dance Version)',
      'music_artist' => 'Speed;Park Bo Young',
      'music_artist_id' => '3020;28441',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494717928,
      'music_last_update_time' => 1358388044,
      'music_title_search' => 'it x over; dance verxion',
      'music_artist_search' => '; xped; park bo ioung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7711,
      'music_track_id' => 0,
      'music_filename' => '1059916-0d911c35.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Jami anwa i can\'t believe
Urin yeogiseo kkeuchingabwa
Modeunge its over its over
Neowa nan ireoke meoreojyeo gane.

It\'s over it\'s over
I take it now its over
It\'s over it\'s over
You gonna be it...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1060078,
      'music_title_url' => '24-7~2yoon',
      'music_title' => '24-7',
      'music_artist' => '2Yoon',
      'music_artist_id' => '3060',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1506746177,
      'music_last_update_time' => 1358407878,
      'music_title_search' => '24 7',
      'music_artist_search' => '; 2ion;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12075,
      'music_track_id' => 0,
      'music_filename' => '1060078-cafe9c29.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Maeil maeirachim madabanbog
Doeneunil sangsoge
Himi ppajyeo oneuldo
(To the left To the right
To the left To the left To the right).
 
Jioggateun jiha cheorekkom
Jjagdalssag halsu eobtneun
Ireon na...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1066042,
      'music_title_url' => 'do-you-not-know~davichi',
      'music_title' => 'Do You Not Know',
      'music_artist' => 'Davichi',
      'music_artist_id' => '1050',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1509681754,
      'music_last_update_time' => 1361184721,
      'music_title_search' => 'do iou not know',
      'music_artist_search' => '; davichi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 19389,
      'music_track_id' => 0,
      'music_filename' => '1066042-aabe721b.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Chanbaram bureooni
Geudae saenggage nunmuljitne
Insa eobsi tteonasideon nal
Geuriumman namgyeonoko.

Geuriwo geulsseongineun nae gaseumsoge
Oneul geudae sucheon beoneun danyeogasine
Naneun mongnoha...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1067189,
      'music_title_url' => 'dolls~nine-muses',
      'music_title' => 'Dolls',
      'music_artist' => 'Nine Muses',
      'music_artist_id' => '1844',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535010247,
      'music_last_update_time' => 1361755604,
      'music_title_search' => 'dolx',
      'music_artist_search' => '; nine muxex;',
      'music_album_search' => '',
      'music_composer' => 'Nine Muses',
      'music_album' => '',
      'music_listen' => 30767,
      'music_track_id' => 0,
      'music_filename' => '1067189-e1ccd201.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Kkok aniragoneun mareul motagesseo
Neo gabeorin huro mami heohaejyeoseo
Shimjangeun meojeo gago
Nae sumeun jugeoga
Maeil nunmuri chajaseo
Tto chueoge meogyeoseo.

Nan deouk deouk deouk
Itorok apa m...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1067766,
      'music_title_url' => 'news~nine-muses',
      'music_title' => 'News',
      'music_artist' => 'Nine Muses',
      'music_artist_id' => '1844',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1511238838,
      'music_last_update_time' => 1361756281,
      'music_title_search' => 'newx',
      'music_artist_search' => '; nine muxex;',
      'music_album_search' => '',
      'music_composer' => 'Nine Muses',
      'music_album' => '',
      'music_listen' => 13675,
      'music_track_id' => 0,
      'music_filename' => '1067766-79f368a0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Come on, Come on
He eo jijan News
Ije waseo Oops
I love you
Yeogiseo meomchwo
Gyeolguk ttaega wasseo
Bonael ttaega dwaesseo
Ready? I\'m ready, I\'m ready
Hey!

Son hanbeon heundeulgo, jakbyeol kiseu...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1068783,
      'music_title_url' => 'im-sorry~cnblue',
      'music_title' => 'I\'m Sorry',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1501514598,
      'music_last_update_time' => 1362016645,
      'music_title_search' => 'i m xori',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 58731,
      'music_track_id' => 0,
      'music_filename' => '1068783-1628c4cf.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Romanization:]

(it\'s over i\'m sorry)
(do it do it do it now do it do it do it now)
Mworago nan ne mal moreugesseo
Na silhdaneun ne mareul moreugesseo
Wanjeonhi michyeosseo jeongsin charyeo
Michye...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1069209,
      'music_title_url' => 'bunny-style~t-ara',
      'music_title' => 'Bunny Style',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1417977211,
      'music_last_update_time' => 1362368024,
      'music_title_search' => 'buni xtile',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => 'T-Ara',
      'music_album' => '',
      'music_listen' => 485507,
      'music_track_id' => 0,
      'music_filename' => '1069209-5770af41.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Hey boy, can you hear my voice
Hey don\'t leave your love.

Banisuta baby banisuta baby banisuta baby banisuta
Banisuta baby banisuta baby banisuta baby banisuta

Bye bye shitaku sami shikunete
Anat...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1069314,
      'music_title_url' => 'its-over-dance-version~speed-park-bo-young',
      'music_title' => 'It\'s Over (Dance Version)',
      'music_artist' => 'Speed;Park Bo Young',
      'music_artist_id' => '3020;28441',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494717794,
      'music_last_update_time' => 1362369805,
      'music_title_search' => 'it x over; dance verxion',
      'music_artist_search' => '; xped; park bo ioung;',
      'music_album_search' => '',
      'music_composer' => 'Shinsadong Tiger; Kim Tae-joo; Hyuwoo',
      'music_album' => '',
      'music_listen' => 3497,
      'music_track_id' => 0,
      'music_filename' => '1069314-da8fd3b4.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Jami anwa i can\'t believe
Urin yeogiseo kkeuchingabwa
Modeunge its over its over
Neowa nan ireoke meoreojyeo gane.

It\'s over it\'s over
I take it now its over
It\'s over it\'s over
You gonna be it...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1070306,
      'music_title_url' => 'mine~kim-jae-joong',
      'music_title' => 'Mine',
      'music_artist' => 'Kim Jae Joong',
      'music_artist_id' => '16143',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516988953,
      'music_last_update_time' => 1362554591,
      'music_title_search' => 'mine',
      'music_artist_search' => '; kim jae jong;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12169,
      'music_track_id' => 0,
      'music_filename' => '1070306-20f0b5ff.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Romanized:]

Neon jidokhae
Byeonge geollin saramgata neon
Bimyeong sok gin pokjue ppajin dok
Imi nan iksukhan dok.

Wae ireoke sikkeureopge sorijireulkka (okay)
Kkumeul kkaejulge wae heomuhae
Yeog...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1072875,
      'music_title_url' => 'its-over~lee-hi',
      'music_title' => 'It\'s Over',
      'music_artist' => 'Lee Hi',
      'music_artist_id' => '2713',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1513919673,
      'music_last_update_time' => 1363578488,
      'music_title_search' => 'it x over',
      'music_artist_search' => '; le hi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 44074,
      'music_track_id' => 0,
      'music_filename' => '1072875-3d6c17c4.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Haneure bitnaneun jeo manheun byeol 
Ije urin ibyeoringayo.

Swipge boji mayo nal geureoke 
Nege mameul jun ge keun silsuyeonnayo 
Heunhideul deureogal ttaewa naol ttae 
Dareudaneun uimiga baro ige...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089456,
      'music_title_url' => 'michi-go~g-dragon',
      'music_title' => 'Michi Go',
      'music_artist' => 'G-Dragon',
      'music_artist_id' => '1682',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534850851,
      'music_last_update_time' => 1368670849,
      'music_title_search' => 'michi go',
      'music_artist_search' => '; g dragon;',
      'music_album_search' => '',
      'music_composer' => 'G-Dragon',
      'music_album' => '',
      'music_listen' => 31166,
      'music_track_id' => 0,
      'music_filename' => '1089456-87ddce25.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Namuneun michi go
Namuneun michi go
Namuneun michi go
Namuneun michi go
Sipeo (yeah~)
We gonna bamsae.

(dance dance dance dance~)
Dirty mad fiesta.

Namuneun heundu go
Namuneun heundu go
Namuneun...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1122442,
      'music_title_url' => 'do-you-love-me~2ne1',
      'music_title' => 'Do You Love Me',
      'music_artist' => '2NE1',
      'music_artist_id' => '1570',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538567823,
      'music_last_update_time' => 1375970430,
      'music_title_search' => 'do iou love me',
      'music_artist_search' => '; 2ne1;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 68433,
      'music_track_id' => 0,
      'music_filename' => '1122442-26c59be3.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'D.O.Y.O.U.L.O.V.E.M.E
D.O.Y.O.U.L.O.V.E.M.E
D.O.Y.O.U.L.O.V.E.M.E
D.O.Y.O.U.L.O.V.E.
DO YOU?

Do you love me?
Do you love me?
Do you love me like the way I love you babe? (x2)

Yegami ttag maja deu...',
      'music_artist_html' => '<a href="/ca-si/2NE1~Y3NuX2FydGlzdH4xNTcw.html">2NE1</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1148658,
      'music_title_url' => 'i-know-the-feeling~t-ara',
      'music_title' => 'I Know The Feeling',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538999003,
      'music_last_update_time' => 1482986667,
      'music_title_search' => 'i know the feling',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => 'T-Ara',
      'music_album' => '',
      'music_listen' => 222147,
      'music_track_id' => 0,
      'music_filename' => '1148658-5b0058a0.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Neon naega saenggakhaneun romio
Eonjekkaji nal aetaeuo
Nae gaseumi ta deureoga
Please tell me luv luv.

Yeppeo boiryeogo hwajangdo hago
Johahadeon oseul ipgo nawatjyo
Deo jal boiryeogo gin saengmeo...',
      'music_artist_html' => '<a href="/ca-si/T-Ara~Y3NuX2FydGlzdH4xNDEz.html">T-Ara</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1218119,
      'music_title_url' => 'my-destiny-you-who-came-from-the-stars-ost~lyn',
      'music_title' => 'My Destiny (You Who Came From The Stars OST)',
      'music_artist' => 'Lyn',
      'music_artist_id' => '4132',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538750565,
      'music_last_update_time' => 1397372146,
      'music_title_search' => 'mi dextini; iou who came from the xtarx oxt',
      'music_artist_search' => '; lin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 42852,
      'music_track_id' => 0,
      'music_filename' => '1218119-6d2f6c96.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Na dasi heorakhandamyeon
Geudael dasi bol su itdamyeon
Nae jinan gieok sogeseo
Geu apeum sogeseo
Geudael bulleo.

You are my destiny geudaen
You are my destiny geudaen
You are my everything
Geudaem...',
      'music_artist_html' => '<a href="/ca-si/Lyn~Y3NuX2FydGlzdH40MTMy.html">Lyn</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 539443,
      'music_title_url' => 'can-you-love-me-vietsub~f-ve-dolls-dani',
      'music_title' => 'Can You Love Me? (Vietsub)',
      'music_artist' => 'F-ve Dolls;Dani',
      'music_artist_id' => '3856;2381',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496165338,
      'music_last_update_time' => 1401692816,
      'music_title_search' => 'can iou love me ; vitxub',
      'music_artist_search' => '; f ve dolx; dani;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8332,
      'music_track_id' => 0,
      'music_filename' => '539443-454af556.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Saranghae jeojulttae
Geudae, can you love me?

Geu ipdeon naldo geuriunnaldo
Jeomjeom itjeojeoyo
Neol itjigo tteonagyeo bichigo
Nae maeum yakhaejyeoseo.

Jamkkan saireul nunmuri ssodaja
Jureureuk j...',
      'music_artist_html' => '<a href="/ca-si/F-ve-Dolls~Y3NuX2FydGlzdH4zODU2.html">F-ve Dolls</a>, <a href="/ca-si/Dani~Y3NuX2FydGlzdH4yMzgx.html">Dani</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 542538,
      'music_title_url' => 'moment-the-heirs-ost~changmin',
      'music_title' => 'Moment (The Heirs OST)',
      'music_artist' => 'Changmin',
      'music_artist_id' => '1365',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535450279,
      'music_last_update_time' => 1423239522,
      'music_title_search' => 'moment; the heirx oxt',
      'music_artist_search' => '; changmin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 70825,
      'music_track_id' => 0,
      'music_filename' => '542538-9f9131bf.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'In your eyes In your mind sarangi geuryeojyeo
uri meolli isseodo garyeojin dedo Love is you
baramgyeore nalliun geuriumi nae maeumeul jeonhaejugil.

Love is the moment niga odeon geunal geu sungan...',
      'music_artist_html' => '<a href="/ca-si/Changmin~Y3NuX2FydGlzdH4xMzY1.html">Changmin</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 544354,
      'music_title_url' => 'love-options-inkigayo-131124~bestie',
      'music_title' => 'Love Options (Inkigayo 131124)',
      'music_artist' => 'BESTie',
      'music_artist_id' => '4713',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1427533779,
      'music_last_update_time' => 1406616698,
      'music_title_search' => 'love optionx; inkigaio 13124',
      'music_artist_search' => '; bexti;',
      'music_album_search' => '',
      'music_composer' => 'Brave Brothers',
      'music_album' => '',
      'music_listen' => 1238,
      'music_track_id' => 0,
      'music_filename' => '544354-f47df3c9.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Ladies and Gentleman
Welcome to the show-off
Brave Sound and BESTie.

Geu aeneun neomu kiga jakgo 
Eolguri neomu neomu keo
Geu aeneun neomu seonggyeok joha 
Yeojaga manheul geot gata
Geu aeneun neo...',
      'music_artist_html' => '<a href="/ca-si/BESTie~Y3NuX2FydGlzdH40NzEz.html">BESTie</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 573634,
      'music_title_url' => 'love-options~bestie',
      'music_title' => 'Love Options',
      'music_artist' => 'BESTie',
      'music_artist_id' => '4713',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1506466115,
      'music_last_update_time' => 1406616667,
      'music_title_search' => 'love optionx',
      'music_artist_search' => '; bexti;',
      'music_album_search' => '',
      'music_composer' => 'Brave Brothers',
      'music_album' => '',
      'music_listen' => 10839,
      'music_track_id' => 0,
      'music_filename' => '573634-b214ccdf.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Ladies and Gentleman
Welcome to the show-off
Brave Sound and BESTie.

Geu aeneun neomu kiga jakgo 
Eolguri neomu neomu keo
Geu aeneun neomu seonggyeok joha 
Yeojaga manheul geot gata
Geu aeneun neo...',
      'music_artist_html' => '<a href="/ca-si/BESTie~Y3NuX2FydGlzdH40NzEz.html">BESTie</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 577932,
      'music_title_url' => 'trap-henry-dance-cover~st319',
      'music_title' => 'Trap (Henry Dance Cover)',
      'music_artist' => 'St.319',
      'music_artist_id' => '4213',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1515095791,
      'music_last_update_time' => 1404144611,
      'music_title_search' => 'chap; henri dance cover',
      'music_artist_search' => '; xt 319;',
      'music_album_search' => '',
      'music_composer' => 'Misfit; Svante Halldin; Emilh Tigerlantz; Geraldo Sandell',
      'music_album' => '',
      'music_listen' => 14081,
      'music_track_id' => 0,
      'music_filename' => '577932-ae06de82.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Umjigil su eobseo wae naneun mugeowojyeo gagiman hae 
Ne mam guseoge nohyeojin chae nohin chae yeah 
Nege dako sipeunde geujeo keomkeomhan i eodum soge 
Jakku garaanja gateun gose geu gose yeah.

N...',
      'music_artist_html' => '<a href="/ca-si/St319~Y3NuX2FydGlzdH40MjEz.html">St.319</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1056123,
      'music_title_url' => 'look-at-you-i-miss-you-ost~jeong-dong-ha',
      'music_title' => 'Look At You (I Miss You OST)',
      'music_artist' => 'Jeong Dong Ha',
      'music_artist_id' => '4067',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495377849,
      'music_last_update_time' => 1436081028,
      'music_title_search' => 'lok at iou; i mix iou oxt',
      'music_artist_search' => '; jeong dong ha;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9330,
      'music_track_id' => 0,
      'music_filename' => '1056123-d0343599.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Geobina niga nal barabolsurok
Jakkuman naega neol ulge hanabwa
Sangcheoppunin nae gaseumi neoreul kkeureoaneulkkabwa
Himgyeopge dwidoraseojiman.

Duryeowo ni gyeote meoreojilsurok
Dasineun doedorag...',
      'music_artist_html' => '<a href="/ca-si/Jeong-Dong-Ha~Y3NuX2FydGlzdH40MDY3.html">Jeong Dong Ha</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1059916,
      'music_title_url' => 'its-over-dance-version~speed-park-bo-young',
      'music_title' => 'It\'s Over (Dance Version)',
      'music_artist' => 'Speed;Park Bo Young',
      'music_artist_id' => '3020;28441',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494717928,
      'music_last_update_time' => 1358388044,
      'music_title_search' => 'it x over; dance verxion',
      'music_artist_search' => '; xped; park bo ioung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7711,
      'music_track_id' => 0,
      'music_filename' => '1059916-0d911c35.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Jami anwa i can\'t believe
Urin yeogiseo kkeuchingabwa
Modeunge its over its over
Neowa nan ireoke meoreojyeo gane.

It\'s over it\'s over
I take it now its over
It\'s over it\'s over
You gonna be it...',
      'music_artist_html' => '<a href="/ca-si/Speed~Y3NuX2FydGlzdH4zMDIw.html">Speed</a>, <a href="/ca-si/Park-Bo-Young~Y3NuX2FydGlzdH4yODQ0MQ==.html">Park Bo Young</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1060078,
      'music_title_url' => '24-7~2yoon',
      'music_title' => '24-7',
      'music_artist' => '2Yoon',
      'music_artist_id' => '3060',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1506746177,
      'music_last_update_time' => 1358407878,
      'music_title_search' => '24 7',
      'music_artist_search' => '; 2ion;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12075,
      'music_track_id' => 0,
      'music_filename' => '1060078-cafe9c29.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Maeil maeirachim madabanbog
Doeneunil sangsoge
Himi ppajyeo oneuldo
(To the left To the right
To the left To the left To the right).
 
Jioggateun jiha cheorekkom
Jjagdalssag halsu eobtneun
Ireon na...',
      'music_artist_html' => '<a href="/ca-si/2Yoon~Y3NuX2FydGlzdH4zMDYw.html">2Yoon</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1066042,
      'music_title_url' => 'do-you-not-know~davichi',
      'music_title' => 'Do You Not Know',
      'music_artist' => 'Davichi',
      'music_artist_id' => '1050',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1509681754,
      'music_last_update_time' => 1361184721,
      'music_title_search' => 'do iou not know',
      'music_artist_search' => '; davichi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 19389,
      'music_track_id' => 0,
      'music_filename' => '1066042-aabe721b.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Chanbaram bureooni
Geudae saenggage nunmuljitne
Insa eobsi tteonasideon nal
Geuriumman namgyeonoko.

Geuriwo geulsseongineun nae gaseumsoge
Oneul geudae sucheon beoneun danyeogasine
Naneun mongnoha...',
      'music_artist_html' => '<a href="/ca-si/Davichi~Y3NuX2FydGlzdH4xMDUw.html">Davichi</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1067189,
      'music_title_url' => 'dolls~nine-muses',
      'music_title' => 'Dolls',
      'music_artist' => 'Nine Muses',
      'music_artist_id' => '1844',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535010247,
      'music_last_update_time' => 1361755604,
      'music_title_search' => 'dolx',
      'music_artist_search' => '; nine muxex;',
      'music_album_search' => '',
      'music_composer' => 'Nine Muses',
      'music_album' => '',
      'music_listen' => 30767,
      'music_track_id' => 0,
      'music_filename' => '1067189-e1ccd201.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Kkok aniragoneun mareul motagesseo
Neo gabeorin huro mami heohaejyeoseo
Shimjangeun meojeo gago
Nae sumeun jugeoga
Maeil nunmuri chajaseo
Tto chueoge meogyeoseo.

Nan deouk deouk deouk
Itorok apa m...',
      'music_artist_html' => '<a href="/ca-si/Nine-Muses~Y3NuX2FydGlzdH4xODQ0.html">Nine Muses</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1067766,
      'music_title_url' => 'news~nine-muses',
      'music_title' => 'News',
      'music_artist' => 'Nine Muses',
      'music_artist_id' => '1844',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1511238838,
      'music_last_update_time' => 1361756281,
      'music_title_search' => 'newx',
      'music_artist_search' => '; nine muxex;',
      'music_album_search' => '',
      'music_composer' => 'Nine Muses',
      'music_album' => '',
      'music_listen' => 13675,
      'music_track_id' => 0,
      'music_filename' => '1067766-79f368a0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Come on, Come on
He eo jijan News
Ije waseo Oops
I love you
Yeogiseo meomchwo
Gyeolguk ttaega wasseo
Bonael ttaega dwaesseo
Ready? I\'m ready, I\'m ready
Hey!

Son hanbeon heundeulgo, jakbyeol kiseu...',
      'music_artist_html' => '<a href="/ca-si/Nine-Muses~Y3NuX2FydGlzdH4xODQ0.html">Nine Muses</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1068783,
      'music_title_url' => 'im-sorry~cnblue',
      'music_title' => 'I\'m Sorry',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1501514598,
      'music_last_update_time' => 1362016645,
      'music_title_search' => 'i m xori',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 58731,
      'music_track_id' => 0,
      'music_filename' => '1068783-1628c4cf.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Romanization:]

(it\'s over i\'m sorry)
(do it do it do it now do it do it do it now)
Mworago nan ne mal moreugesseo
Na silhdaneun ne mareul moreugesseo
Wanjeonhi michyeosseo jeongsin charyeo
Michye...',
      'music_artist_html' => '<a href="/ca-si/CNBlue~Y3NuX2FydGlzdH4yMDY5.html">CNBlue</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1069209,
      'music_title_url' => 'bunny-style~t-ara',
      'music_title' => 'Bunny Style',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1417977211,
      'music_last_update_time' => 1362368024,
      'music_title_search' => 'buni xtile',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => 'T-Ara',
      'music_album' => '',
      'music_listen' => 485507,
      'music_track_id' => 0,
      'music_filename' => '1069209-5770af41.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Hey boy, can you hear my voice
Hey don\'t leave your love.

Banisuta baby banisuta baby banisuta baby banisuta
Banisuta baby banisuta baby banisuta baby banisuta

Bye bye shitaku sami shikunete
Anat...',
      'music_artist_html' => '<a href="/ca-si/T-Ara~Y3NuX2FydGlzdH4xNDEz.html">T-Ara</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1069314,
      'music_title_url' => 'its-over-dance-version~speed-park-bo-young',
      'music_title' => 'It\'s Over (Dance Version)',
      'music_artist' => 'Speed;Park Bo Young',
      'music_artist_id' => '3020;28441',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1494717794,
      'music_last_update_time' => 1362369805,
      'music_title_search' => 'it x over; dance verxion',
      'music_artist_search' => '; xped; park bo ioung;',
      'music_album_search' => '',
      'music_composer' => 'Shinsadong Tiger; Kim Tae-joo; Hyuwoo',
      'music_album' => '',
      'music_listen' => 3497,
      'music_track_id' => 0,
      'music_filename' => '1069314-da8fd3b4.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Jami anwa i can\'t believe
Urin yeogiseo kkeuchingabwa
Modeunge its over its over
Neowa nan ireoke meoreojyeo gane.

It\'s over it\'s over
I take it now its over
It\'s over it\'s over
You gonna be it...',
      'music_artist_html' => '<a href="/ca-si/Speed~Y3NuX2FydGlzdH4zMDIw.html">Speed</a>, <a href="/ca-si/Park-Bo-Young~Y3NuX2FydGlzdH4yODQ0MQ==.html">Park Bo Young</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1070306,
      'music_title_url' => 'mine~kim-jae-joong',
      'music_title' => 'Mine',
      'music_artist' => 'Kim Jae Joong',
      'music_artist_id' => '16143',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516988953,
      'music_last_update_time' => 1362554591,
      'music_title_search' => 'mine',
      'music_artist_search' => '; kim jae jong;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12169,
      'music_track_id' => 0,
      'music_filename' => '1070306-20f0b5ff.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Romanized:]

Neon jidokhae
Byeonge geollin saramgata neon
Bimyeong sok gin pokjue ppajin dok
Imi nan iksukhan dok.

Wae ireoke sikkeureopge sorijireulkka (okay)
Kkumeul kkaejulge wae heomuhae
Yeog...',
      'music_artist_html' => '<a href="/ca-si/Kim-Jae-Joong~Y3NuX2FydGlzdH4xNjE0Mw==.html">Kim Jae Joong</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1072875,
      'music_title_url' => 'its-over~lee-hi',
      'music_title' => 'It\'s Over',
      'music_artist' => 'Lee Hi',
      'music_artist_id' => '2713',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1513919673,
      'music_last_update_time' => 1363578488,
      'music_title_search' => 'it x over',
      'music_artist_search' => '; le hi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 44074,
      'music_track_id' => 0,
      'music_filename' => '1072875-3d6c17c4.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Haneure bitnaneun jeo manheun byeol 
Ije urin ibyeoringayo.

Swipge boji mayo nal geureoke 
Nege mameul jun ge keun silsuyeonnayo 
Heunhideul deureogal ttaewa naol ttae 
Dareudaneun uimiga baro ige...',
      'music_artist_html' => '<a href="/ca-si/Lee-Hi~Y3NuX2FydGlzdH4yNzEz.html">Lee Hi</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1089456,
      'music_title_url' => 'michi-go~g-dragon',
      'music_title' => 'Michi Go',
      'music_artist' => 'G-Dragon',
      'music_artist_id' => '1682',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534850851,
      'music_last_update_time' => 1368670849,
      'music_title_search' => 'michi go',
      'music_artist_search' => '; g dragon;',
      'music_album_search' => '',
      'music_composer' => 'G-Dragon',
      'music_album' => '',
      'music_listen' => 31166,
      'music_track_id' => 0,
      'music_filename' => '1089456-87ddce25.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Namuneun michi go
Namuneun michi go
Namuneun michi go
Namuneun michi go
Sipeo (yeah~)
We gonna bamsae.

(dance dance dance dance~)
Dirty mad fiesta.

Namuneun heundu go
Namuneun heundu go
Namuneun...',
      'music_artist_html' => '<a href="/ca-si/G-Dragon~Y3NuX2FydGlzdH4xNjgy.html">G-Dragon</a>',
    ),
  ),
  5 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1760214,
      'music_title_url' => 'uza-mv-version~akb48',
      'music_title' => 'UZA (MV Version)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534596704,
      'music_last_update_time' => 1485133743,
      'music_title_search' => 'uza; mv verxion',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3958,
      'music_track_id' => 7,
      'music_filename' => '1760214-93eaa608.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '(Uza... Uza...)

[Tak/Wat/Osh/Mat] kimi wa kimi de aiseba ii
[Tak/Wat/Osh/Mat] aite no koto wa kangaenakute ii
[Shi/Ita/Kas/Mat] omou ga mama ni aiseba ii
[Shi/Ita/Kas/Mat] un ga yokereba aishiaeru...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1168388,
      'music_title_url' => 'memory-the-guidance-you-gave-me~t-ara',
      'music_title' => 'Memory ~ The Guidance You Gave Me',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1505690779,
      'music_last_update_time' => 1477458373,
      'music_title_search' => 'memori the guidance iou gave me',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11192,
      'music_track_id' => 0,
      'music_filename' => '1168388-ac93f3d0.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Doushite kimi wa konna ni
Mabushi sugiruno tooku hanarete
Mite no my heart futoshita shunkan yomigaeru koe
Watashi no jikamo ma ki nodo souyo.

Eien ni aenai nara
Wasurekata oshiete yo watashi ni
M...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1766426,
      'music_title_url' => 'endless-tears~nakamura-maiko-cliff-edge',
      'music_title' => 'Endless Tears',
      'music_artist' => 'Nakamura Maiko;CLIFF EDGE',
      'music_artist_id' => '50115;59758',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530265992,
      'music_last_update_time' => 1496974158,
      'music_title_search' => 'endlex tearx',
      'music_artist_search' => '; nakamura maiko; clif edge;',
      'music_album_search' => '',
      'music_composer' => 'Maiko Nakamura',
      'music_album' => '',
      'music_listen' => 1256,
      'music_track_id' => 0,
      'music_filename' => '1766426-e4546956.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Kimi no kokoro ni tsutsuma reta mama ai o chikai… 
Nemurenaiyoru nando sugite mo ne uketomete 
Ima sugu aitai namida tomaranai furetakute 
Sukidakara, kurushikute

Kimi no koto omou hodo, kono nami...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1588870,
      'music_title_url' => 'monday-afternoon~iu',
      'music_title' => 'Monday Afternoon',
      'music_artist' => 'IU',
      'music_artist_id' => '2059',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497155554,
      'music_last_update_time' => 1480774270,
      'music_title_search' => 'mondai afternon',
      'music_artist_search' => '; iu;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6619,
      'music_track_id' => 0,
      'music_filename' => '1588870-45aaaa69.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Hisashiburi da ne
Kawara nai kuchō ga
Mukashi no mama de
Watashi mo kitto sonomama
Muri ni ki o tsukau hitsuyō sura mo nai
Dō shiyou? Chotto I\'m feelin\' so right
Wasurete ita hazu na noni.

Say!
Oh...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1866787,
      'music_title_url' => 'lead-the-way~t-ara',
      'music_title' => 'Lead The Way',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1524984519,
      'music_last_update_time' => 1516848690,
      'music_title_search' => 'lead the wai',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 211433,
      'music_track_id' => 0,
      'music_filename' => '1866787-450dec7e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Mitsuketa shimatta no
Itsumo to chigau kimi
Konna fuunimo waraerunda ne
Umaretate no himitsu
Zawameki dasu mune ni
Kotoba nanka iranai no.

Aiwa kitto Lead The Way
Kidzuita totanni
Subete o kaete s...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1742378,
      'music_title_url' => 'w-wonder-tale~tamura-yukari',
      'music_title' => 'W-Wonder Tale',
      'music_artist' => 'Tamura Yukari',
      'music_artist_id' => '34399',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498142419,
      'music_last_update_time' => 1479599783,
      'music_title_search' => 'w wonder tale',
      'music_artist_search' => '; tamura iukari;',
      'music_album_search' => '',
      'music_composer' => 'Hata Aki',
      'music_album' => '',
      'music_listen' => 250,
      'music_track_id' => 0,
      'music_filename' => '1742378-2654d77b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '未来へと 二人のWonder tale
Mirai e to futari no Wonder tale.

背中に囁きたいの
Senaka ni sasayakitai no 
胸の中 そっと見せて
Mune no naka sotto misete 
本当は言えない 聞けないから
Hontou wa ienai kikenai kara 
意地悪したくなる
Ijiwaru shitaku...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1742379,
      'music_title_url' => 'girlish-lover~akasaki-chinatsu-tamura-yukari-kanemoto-hisako-kayano-ai',
      'music_title' => 'Girlish Lover',
      'music_artist' => 'Akasaki Chinatsu;Tamura Yukari;Kanemoto Hisako;Kayano Ai',
      'music_artist_id' => '64429;34399;47046;27292',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530958944,
      'music_last_update_time' => 1479599792,
      'music_title_search' => 'drlith lover',
      'music_artist_search' => '; akaxaki chinatxu; tamura iukari; kanemoto hixako; kaiano ai;',
      'music_album_search' => '',
      'music_composer' => 'Odakura Nachi',
      'music_album' => '',
      'music_listen' => 962,
      'music_track_id' => 0,
      'music_filename' => '1742379-2348583f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'いっせーの!
Isse ̄ no! 
おかえり (YEAH!)
Okaeri (YEAH!) 
さあ出かけよう (YEAH!)
Sā dekakeyou (YEAH!) 
抜け駆けランデブー
Nukegake randebū 
絆が大事
Kizuna ga daiji 
恋人が大事
Koibito ga daiji 
Girlish Lover.

この痛み　君のせい?
Kono itami...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1742396,
      'music_title_url' => 'girlish-lover~akasaki-chinatsu-tamura-yukari-kanemoto-hisako-kayano-ai',
      'music_title' => 'Girlish Lover',
      'music_artist' => 'Akasaki Chinatsu;Tamura Yukari;Kanemoto Hisako;Kayano Ai',
      'music_artist_id' => '64429;34399;47046;27292',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537359128,
      'music_last_update_time' => 1479599811,
      'music_title_search' => 'drlith lover',
      'music_artist_search' => '; akaxaki chinatxu; tamura iukari; kanemoto hixako; kaiano ai;',
      'music_album_search' => '',
      'music_composer' => 'Odakura Nachi',
      'music_album' => '',
      'music_listen' => 743,
      'music_track_id' => 0,
      'music_filename' => '1742396-e8cd3f87.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'いっせーの!
Isse ̄ no! 
おかえり (YEAH!)
Okaeri (YEAH!) 
さあ出かけよう (YEAH!)
Sā dekakeyou (YEAH!) 
抜け駆けランデブー
Nukegake randebū 
絆が大事
Kizuna ga daiji 
恋人が大事
Koibito ga daiji 
Girlish Lover.

この痛み　君のせい?
Kono itami...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1760215,
      'music_title_url' => 'uza-dance-version~akb48',
      'music_title' => 'UZA (Dance Version)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1523233481,
      'music_last_update_time' => 1485133728,
      'music_title_search' => 'uza; dance verxion',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 911,
      'music_track_id' => 8,
      'music_filename' => '1760215-f0cedb6a.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '(Uza... Uza...)

[Tak/Wat/Osh/Mat] kimi wa kimi de aiseba ii
[Tak/Wat/Osh/Mat] aite no koto wa kangaenakute ii
[Shi/Ita/Kas/Mat] omou ga mama ni aiseba ii
[Shi/Ita/Kas/Mat] un ga yokereba aishiaeru...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1794824,
      'music_title_url' => 'believe~nishino-kana',
      'music_title' => 'Believe',
      'music_artist' => 'Nishino Kana',
      'music_artist_id' => '13693',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537392639,
      'music_last_update_time' => 1497096942,
      'music_title_search' => 'belive',
      'music_artist_search' => '; nithino kana;',
      'music_album_search' => '',
      'music_composer' => 'Nishino Kana',
      'music_album' => '',
      'music_listen' => 1221,
      'music_track_id' => 0,
      'music_filename' => '1794824-0b9110e0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Oh Oh Oh…“Yeah!! ”
Oh Oh Oh…“Yeah!! ”
Oh Oh Oh…“Yeah!! ”
Oh Oh Oh…

Omoikitte imechen “my hair”
Tomodachi mo ii ne! Tte
Oh Yeah kirei sappari
Mō fukkireta no.

Oh katte ni kōshin sa reru
Aitsu no s...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1794827,
      'music_title_url' => 'namidairo~nishino-kana',
      'music_title' => 'Namidairo (涙色)',
      'music_artist' => 'Nishino Kana',
      'music_artist_id' => '13693',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537392681,
      'music_last_update_time' => 1497096971,
      'music_title_search' => 'namidairo; 涙色',
      'music_artist_search' => '; nithino kana;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 490,
      'music_track_id' => 0,
      'music_filename' => '1794827-9bf6e7a1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '涙色　二人のこと
思えばまた I start to cry
どうして出会い恋をしたの?
I always cry

君の言葉は　いつだって優しくて
どんなに嫌なことがあっても
私のこと一番に　思ってくれてた
all the time
一度も忘れたことないね
電話にメール　欠かさずに
You told me you loved me
君色に包まれてたの

慣れない手紙も精一杯
書いてくれる不器...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797182,
      'music_title_url' => 'nante-bohemian-undergirls~akb48',
      'music_title' => 'Nante Bohemian (なんてボヘミアン) / Undergirls',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516706746,
      'music_last_update_time' => 1497622432,
      'music_title_search' => 'nante bohemian; なんてボヘミアン ; underdrlx',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1544,
      'music_track_id' => 2,
      'music_filename' => '1797182-6225dac5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'AIAIAIYAA
AIAIAIYAA
AIAIAIYAA
Oh! Oh!
AIAIAIYAA
AIAIAIYAA
AIAIAIYAA

[Tak/Aki/Yam/Wat] hitogomi no naka de
[Tak/Aki/Yam/Wat] kangaete shimau
[Tak/Aki/Yam/Wat] jibun no kachi to wa nan darou?
[Kur/S...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797772,
      'music_title_url' => 'eien-pressure-cdtv-special-2012-2013-20130101~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (CDTV Special 2012-&gt;2013 2013.01.01)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1520433899,
      'music_last_update_time' => 1497781815,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; cdtv xpecial 2012 2013 2013 01 01',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 779,
      'music_track_id' => 0,
      'music_filename' => '1797772-37bb30b2.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1798735,
      'music_title_url' => 'gingham-check~akb48',
      'music_title' => 'Gingham Check (ギンガムチェック)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535365860,
      'music_last_update_time' => 1498098149,
      'music_title_search' => 'dngham check; ギンガムチェック',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 491,
      'music_track_id' => 1,
      'music_filename' => '1798735-c9282266.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Osh/Kas/Wat] konna ni kimi wo
[Osh/Kas/Wat] suki de iru no ni
[Osh/Kas/Wat] boku wa gomakashiteru
[Shi/Tak/Sas] jitensha wo oshite aruku
[Shi/Tak/Sas] kimi ga mujaki ni warau

[Koj/Ita/Mat] kaigan...',
    ),
    14 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1800239,
      'music_title_url' => 'time-machine-nante-iranai-vietsub~maeda-atsuko',
      'music_title' => 'Time Machine Nante Iranai (タイムマシンなんていらない) (Vietsub)',
      'music_artist' => 'Maeda Atsuko',
      'music_artist_id' => '25078',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1498445178,
      'music_title_search' => 'time machine nante iranai; タイムマシンなんていらない ; vitxub',
      'music_artist_search' => '; maeda atxuko;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 193,
      'music_track_id' => 1,
      'music_filename' => '1800239-fb2f1718.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Beep beep beep beep yeah!
Beep beep beep beep yeah!
Beep beep beep beep yeah!
Beep beep beep beep

shiranai uchi ni nemutteta mitai
KAFERATERASU de hizashi ni tsutsumarete
tokei wo mitara 5(go) bun...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1822731,
      'music_title_url' => 'nameko-no-uta-kayou-kyoku-20130611~fukuhara-haruka',
      'music_title' => 'Nameko no Uta (なめこのうた) (KAYOU-KYOKU! 2013.06.11)',
      'music_artist' => 'Fukuhara Haruka',
      'music_artist_id' => '99923',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1520387574,
      'music_last_update_time' => 1508913440,
      'music_title_search' => 'nameko no uta; なめこのうた ; kaiou kioku 2013 06 1',
      'music_artist_search' => '; fukuhara haruka;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 262,
      'music_track_id' => 0,
      'music_filename' => '1822731-ce733bcb.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827550,
      'music_title_url' => 'ponytail-to-shushu~akb48',
      'music_title' => 'Ponytail to Shushu (ポニーテールとシュシュ)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1518234901,
      'music_last_update_time' => 1506051993,
      'music_title_search' => 'ponitail to thuthu; ポニーテールとシュシュ',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 457,
      'music_track_id' => 0,
      'music_filename' => '1827550-f8978934.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827577,
      'music_title_url' => 'sayonara-crawl~akb48',
      'music_title' => 'Sayonara Crawl (さよならクロール)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1510491597,
      'music_last_update_time' => 1506069737,
      'music_title_search' => 'xaionara crawl; さよならクロール',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 195,
      'music_track_id' => 0,
      'music_filename' => '1827577-274eaf7d.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827578,
      'music_title_url' => 'sayonara-crawl-mizugi-ver~akb48',
      'music_title' => 'Sayonara Crawl (さよならクロール) ~Mizugi ver.~',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530391699,
      'music_last_update_time' => 1506069730,
      'music_title_search' => 'xaionara crawl; さよならクロール mizud ver',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 382,
      'music_track_id' => 0,
      'music_filename' => '1827578-105f2019.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827579,
      'music_title_url' => 'uza-dance-ver~akb48',
      'music_title' => 'UZA ~Dance ver.~',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534599165,
      'music_last_update_time' => 1506069727,
      'music_title_search' => 'uza dance ver',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 417,
      'music_track_id' => 0,
      'music_filename' => '1827579-e3655ac6.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1760214,
      'music_title_url' => 'uza-mv-version~akb48',
      'music_title' => 'UZA (MV Version)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534596704,
      'music_last_update_time' => 1485133743,
      'music_title_search' => 'uza; mv verxion',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3958,
      'music_track_id' => 7,
      'music_filename' => '1760214-93eaa608.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '(Uza... Uza...)

[Tak/Wat/Osh/Mat] kimi wa kimi de aiseba ii
[Tak/Wat/Osh/Mat] aite no koto wa kangaenakute ii
[Shi/Ita/Kas/Mat] omou ga mama ni aiseba ii
[Shi/Ita/Kas/Mat] un ga yokereba aishiaeru...',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1168388,
      'music_title_url' => 'memory-the-guidance-you-gave-me~t-ara',
      'music_title' => 'Memory ~ The Guidance You Gave Me',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1505690779,
      'music_last_update_time' => 1477458373,
      'music_title_search' => 'memori the guidance iou gave me',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11192,
      'music_track_id' => 0,
      'music_filename' => '1168388-ac93f3d0.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Doushite kimi wa konna ni
Mabushi sugiruno tooku hanarete
Mite no my heart futoshita shunkan yomigaeru koe
Watashi no jikamo ma ki nodo souyo.

Eien ni aenai nara
Wasurekata oshiete yo watashi ni
M...',
      'music_artist_html' => '<a href="/ca-si/T-Ara~Y3NuX2FydGlzdH4xNDEz.html">T-Ara</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1766426,
      'music_title_url' => 'endless-tears~nakamura-maiko-cliff-edge',
      'music_title' => 'Endless Tears',
      'music_artist' => 'Nakamura Maiko;CLIFF EDGE',
      'music_artist_id' => '50115;59758',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530265992,
      'music_last_update_time' => 1496974158,
      'music_title_search' => 'endlex tearx',
      'music_artist_search' => '; nakamura maiko; clif edge;',
      'music_album_search' => '',
      'music_composer' => 'Maiko Nakamura',
      'music_album' => '',
      'music_listen' => 1256,
      'music_track_id' => 0,
      'music_filename' => '1766426-e4546956.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Kimi no kokoro ni tsutsuma reta mama ai o chikai… 
Nemurenaiyoru nando sugite mo ne uketomete 
Ima sugu aitai namida tomaranai furetakute 
Sukidakara, kurushikute

Kimi no koto omou hodo, kono nami...',
      'music_artist_html' => '<a href="/ca-si/Nakamura-Maiko~Y3NuX2FydGlzdH41MDExNQ==.html">Nakamura Maiko</a>, <a href="/ca-si/CLIFF-EDGE~Y3NuX2FydGlzdH41OTc1OA==.html">CLIFF EDGE</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1588870,
      'music_title_url' => 'monday-afternoon~iu',
      'music_title' => 'Monday Afternoon',
      'music_artist' => 'IU',
      'music_artist_id' => '2059',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497155554,
      'music_last_update_time' => 1480774270,
      'music_title_search' => 'mondai afternon',
      'music_artist_search' => '; iu;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6619,
      'music_track_id' => 0,
      'music_filename' => '1588870-45aaaa69.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Hisashiburi da ne
Kawara nai kuchō ga
Mukashi no mama de
Watashi mo kitto sonomama
Muri ni ki o tsukau hitsuyō sura mo nai
Dō shiyou? Chotto I\'m feelin\' so right
Wasurete ita hazu na noni.

Say!
Oh...',
      'music_artist_html' => '<a href="/ca-si/IU~Y3NuX2FydGlzdH4yMDU5.html">IU</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1866787,
      'music_title_url' => 'lead-the-way~t-ara',
      'music_title' => 'Lead The Way',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1524984519,
      'music_last_update_time' => 1516848690,
      'music_title_search' => 'lead the wai',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 211433,
      'music_track_id' => 0,
      'music_filename' => '1866787-450dec7e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Mitsuketa shimatta no
Itsumo to chigau kimi
Konna fuunimo waraerunda ne
Umaretate no himitsu
Zawameki dasu mune ni
Kotoba nanka iranai no.

Aiwa kitto Lead The Way
Kidzuita totanni
Subete o kaete s...',
      'music_artist_html' => '<a href="/ca-si/T-Ara~Y3NuX2FydGlzdH4xNDEz.html">T-Ara</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1742378,
      'music_title_url' => 'w-wonder-tale~tamura-yukari',
      'music_title' => 'W-Wonder Tale',
      'music_artist' => 'Tamura Yukari',
      'music_artist_id' => '34399',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498142419,
      'music_last_update_time' => 1479599783,
      'music_title_search' => 'w wonder tale',
      'music_artist_search' => '; tamura iukari;',
      'music_album_search' => '',
      'music_composer' => 'Hata Aki',
      'music_album' => '',
      'music_listen' => 250,
      'music_track_id' => 0,
      'music_filename' => '1742378-2654d77b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '未来へと 二人のWonder tale
Mirai e to futari no Wonder tale.

背中に囁きたいの
Senaka ni sasayakitai no 
胸の中 そっと見せて
Mune no naka sotto misete 
本当は言えない 聞けないから
Hontou wa ienai kikenai kara 
意地悪したくなる
Ijiwaru shitaku...',
      'music_artist_html' => '<a href="/ca-si/Tamura-Yukari~Y3NuX2FydGlzdH4zNDM5OQ==.html">Tamura Yukari</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1742379,
      'music_title_url' => 'girlish-lover~akasaki-chinatsu-tamura-yukari-kanemoto-hisako-kayano-ai',
      'music_title' => 'Girlish Lover',
      'music_artist' => 'Akasaki Chinatsu;Tamura Yukari;Kanemoto Hisako;Kayano Ai',
      'music_artist_id' => '64429;34399;47046;27292',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530958944,
      'music_last_update_time' => 1479599792,
      'music_title_search' => 'drlith lover',
      'music_artist_search' => '; akaxaki chinatxu; tamura iukari; kanemoto hixako; kaiano ai;',
      'music_album_search' => '',
      'music_composer' => 'Odakura Nachi',
      'music_album' => '',
      'music_listen' => 962,
      'music_track_id' => 0,
      'music_filename' => '1742379-2348583f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'いっせーの!
Isse ̄ no! 
おかえり (YEAH!)
Okaeri (YEAH!) 
さあ出かけよう (YEAH!)
Sā dekakeyou (YEAH!) 
抜け駆けランデブー
Nukegake randebū 
絆が大事
Kizuna ga daiji 
恋人が大事
Koibito ga daiji 
Girlish Lover.

この痛み　君のせい?
Kono itami...',
      'music_artist_html' => '<a href="/ca-si/Akasaki-Chinatsu~Y3NuX2FydGlzdH42NDQyOQ==.html">Akasaki Chinatsu</a>, <a href="/ca-si/Tamura-Yukari~Y3NuX2FydGlzdH4zNDM5OQ==.html">Tamura Yukari</a>, <a href="/ca-si/Kanemoto-Hisako~Y3NuX2FydGlzdH40NzA0Ng==.html">Kanemoto Hisako</a>, <a href="/ca-si/Kayano-Ai~Y3NuX2FydGlzdH4yNzI5Mg==.html">Kayano Ai</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1742396,
      'music_title_url' => 'girlish-lover~akasaki-chinatsu-tamura-yukari-kanemoto-hisako-kayano-ai',
      'music_title' => 'Girlish Lover',
      'music_artist' => 'Akasaki Chinatsu;Tamura Yukari;Kanemoto Hisako;Kayano Ai',
      'music_artist_id' => '64429;34399;47046;27292',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537359128,
      'music_last_update_time' => 1479599811,
      'music_title_search' => 'drlith lover',
      'music_artist_search' => '; akaxaki chinatxu; tamura iukari; kanemoto hixako; kaiano ai;',
      'music_album_search' => '',
      'music_composer' => 'Odakura Nachi',
      'music_album' => '',
      'music_listen' => 743,
      'music_track_id' => 0,
      'music_filename' => '1742396-e8cd3f87.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'いっせーの!
Isse ̄ no! 
おかえり (YEAH!)
Okaeri (YEAH!) 
さあ出かけよう (YEAH!)
Sā dekakeyou (YEAH!) 
抜け駆けランデブー
Nukegake randebū 
絆が大事
Kizuna ga daiji 
恋人が大事
Koibito ga daiji 
Girlish Lover.

この痛み　君のせい?
Kono itami...',
      'music_artist_html' => '<a href="/ca-si/Akasaki-Chinatsu~Y3NuX2FydGlzdH42NDQyOQ==.html">Akasaki Chinatsu</a>, <a href="/ca-si/Tamura-Yukari~Y3NuX2FydGlzdH4zNDM5OQ==.html">Tamura Yukari</a>, <a href="/ca-si/Kanemoto-Hisako~Y3NuX2FydGlzdH40NzA0Ng==.html">Kanemoto Hisako</a>, <a href="/ca-si/Kayano-Ai~Y3NuX2FydGlzdH4yNzI5Mg==.html">Kayano Ai</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1760215,
      'music_title_url' => 'uza-dance-version~akb48',
      'music_title' => 'UZA (Dance Version)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1523233481,
      'music_last_update_time' => 1485133728,
      'music_title_search' => 'uza; dance verxion',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 911,
      'music_track_id' => 8,
      'music_filename' => '1760215-f0cedb6a.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '(Uza... Uza...)

[Tak/Wat/Osh/Mat] kimi wa kimi de aiseba ii
[Tak/Wat/Osh/Mat] aite no koto wa kangaenakute ii
[Shi/Ita/Kas/Mat] omou ga mama ni aiseba ii
[Shi/Ita/Kas/Mat] un ga yokereba aishiaeru...',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1794824,
      'music_title_url' => 'believe~nishino-kana',
      'music_title' => 'Believe',
      'music_artist' => 'Nishino Kana',
      'music_artist_id' => '13693',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537392639,
      'music_last_update_time' => 1497096942,
      'music_title_search' => 'belive',
      'music_artist_search' => '; nithino kana;',
      'music_album_search' => '',
      'music_composer' => 'Nishino Kana',
      'music_album' => '',
      'music_listen' => 1221,
      'music_track_id' => 0,
      'music_filename' => '1794824-0b9110e0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Oh Oh Oh…“Yeah!! ”
Oh Oh Oh…“Yeah!! ”
Oh Oh Oh…“Yeah!! ”
Oh Oh Oh…

Omoikitte imechen “my hair”
Tomodachi mo ii ne! Tte
Oh Yeah kirei sappari
Mō fukkireta no.

Oh katte ni kōshin sa reru
Aitsu no s...',
      'music_artist_html' => '<a href="/ca-si/Nishino-Kana~Y3NuX2FydGlzdH4xMzY5Mw==.html">Nishino Kana</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1794827,
      'music_title_url' => 'namidairo~nishino-kana',
      'music_title' => 'Namidairo (涙色)',
      'music_artist' => 'Nishino Kana',
      'music_artist_id' => '13693',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537392681,
      'music_last_update_time' => 1497096971,
      'music_title_search' => 'namidairo; 涙色',
      'music_artist_search' => '; nithino kana;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 490,
      'music_track_id' => 0,
      'music_filename' => '1794827-9bf6e7a1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '涙色　二人のこと
思えばまた I start to cry
どうして出会い恋をしたの?
I always cry

君の言葉は　いつだって優しくて
どんなに嫌なことがあっても
私のこと一番に　思ってくれてた
all the time
一度も忘れたことないね
電話にメール　欠かさずに
You told me you loved me
君色に包まれてたの

慣れない手紙も精一杯
書いてくれる不器...',
      'music_artist_html' => '<a href="/ca-si/Nishino-Kana~Y3NuX2FydGlzdH4xMzY5Mw==.html">Nishino Kana</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797182,
      'music_title_url' => 'nante-bohemian-undergirls~akb48',
      'music_title' => 'Nante Bohemian (なんてボヘミアン) / Undergirls',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516706746,
      'music_last_update_time' => 1497622432,
      'music_title_search' => 'nante bohemian; なんてボヘミアン ; underdrlx',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1544,
      'music_track_id' => 2,
      'music_filename' => '1797182-6225dac5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'AIAIAIYAA
AIAIAIYAA
AIAIAIYAA
Oh! Oh!
AIAIAIYAA
AIAIAIYAA
AIAIAIYAA

[Tak/Aki/Yam/Wat] hitogomi no naka de
[Tak/Aki/Yam/Wat] kangaete shimau
[Tak/Aki/Yam/Wat] jibun no kachi to wa nan darou?
[Kur/S...',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797772,
      'music_title_url' => 'eien-pressure-cdtv-special-2012-2013-20130101~akb48',
      'music_title' => 'Eien Pressure (永遠プレッシャー) (CDTV Special 2012-&gt;2013 2013.01.01)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1520433899,
      'music_last_update_time' => 1497781815,
      'music_title_search' => 'ein prexure; 永遠プレッシャー ; cdtv xpecial 2012 2013 2013 01 01',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 779,
      'music_track_id' => 0,
      'music_filename' => '1797772-37bb30b2.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1798735,
      'music_title_url' => 'gingham-check~akb48',
      'music_title' => 'Gingham Check (ギンガムチェック)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535365860,
      'music_last_update_time' => 1498098149,
      'music_title_search' => 'dngham check; ギンガムチェック',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 491,
      'music_track_id' => 1,
      'music_filename' => '1798735-c9282266.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Osh/Kas/Wat] konna ni kimi wo
[Osh/Kas/Wat] suki de iru no ni
[Osh/Kas/Wat] boku wa gomakashiteru
[Shi/Tak/Sas] jitensha wo oshite aruku
[Shi/Tak/Sas] kimi ga mujaki ni warau

[Koj/Ita/Mat] kaigan...',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1800239,
      'music_title_url' => 'time-machine-nante-iranai-vietsub~maeda-atsuko',
      'music_title' => 'Time Machine Nante Iranai (タイムマシンなんていらない) (Vietsub)',
      'music_artist' => 'Maeda Atsuko',
      'music_artist_id' => '25078',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1498445178,
      'music_title_search' => 'time machine nante iranai; タイムマシンなんていらない ; vitxub',
      'music_artist_search' => '; maeda atxuko;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 193,
      'music_track_id' => 1,
      'music_filename' => '1800239-fb2f1718.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Beep beep beep beep yeah!
Beep beep beep beep yeah!
Beep beep beep beep yeah!
Beep beep beep beep

shiranai uchi ni nemutteta mitai
KAFERATERASU de hizashi ni tsutsumarete
tokei wo mitara 5(go) bun...',
      'music_artist_html' => '<a href="/ca-si/Maeda-Atsuko~Y3NuX2FydGlzdH4yNTA3OA==.html">Maeda Atsuko</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1822731,
      'music_title_url' => 'nameko-no-uta-kayou-kyoku-20130611~fukuhara-haruka',
      'music_title' => 'Nameko no Uta (なめこのうた) (KAYOU-KYOKU! 2013.06.11)',
      'music_artist' => 'Fukuhara Haruka',
      'music_artist_id' => '99923',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1520387574,
      'music_last_update_time' => 1508913440,
      'music_title_search' => 'nameko no uta; なめこのうた ; kaiou kioku 2013 06 1',
      'music_artist_search' => '; fukuhara haruka;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 262,
      'music_track_id' => 0,
      'music_filename' => '1822731-ce733bcb.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Fukuhara-Haruka~Y3NuX2FydGlzdH45OTkyMw==.html">Fukuhara Haruka</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827550,
      'music_title_url' => 'ponytail-to-shushu~akb48',
      'music_title' => 'Ponytail to Shushu (ポニーテールとシュシュ)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1518234901,
      'music_last_update_time' => 1506051993,
      'music_title_search' => 'ponitail to thuthu; ポニーテールとシュシュ',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 457,
      'music_track_id' => 0,
      'music_filename' => '1827550-f8978934.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827577,
      'music_title_url' => 'sayonara-crawl~akb48',
      'music_title' => 'Sayonara Crawl (さよならクロール)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1510491597,
      'music_last_update_time' => 1506069737,
      'music_title_search' => 'xaionara crawl; さよならクロール',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 195,
      'music_track_id' => 0,
      'music_filename' => '1827577-274eaf7d.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827578,
      'music_title_url' => 'sayonara-crawl-mizugi-ver~akb48',
      'music_title' => 'Sayonara Crawl (さよならクロール) ~Mizugi ver.~',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530391699,
      'music_last_update_time' => 1506069730,
      'music_title_search' => 'xaionara crawl; さよならクロール mizud ver',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 382,
      'music_track_id' => 0,
      'music_filename' => '1827578-105f2019.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827579,
      'music_title_url' => 'uza-dance-ver~akb48',
      'music_title' => 'UZA ~Dance ver.~',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534599165,
      'music_last_update_time' => 1506069727,
      'music_title_search' => 'uza dance ver',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 417,
      'music_track_id' => 0,
      'music_filename' => '1827579-e3655ac6.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
  ),
  6 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1950792,
      'music_title_url' => 'belle-notre-dame-de-paris~olesia-shatmanbekova',
      'music_title' => 'Belle (Notre-Dame De Paris)',
      'music_artist' => 'Olesia Shatmanbekova',
      'music_artist_id' => '23278',
      'cat_id' => 1,
      'cat_level' => 6,
      'cat_sublevel' => 0,
      'cat_custom' => 8,
      'cover_id' => 0,
      'music_download_time' => 1536123660,
      'music_last_update_time' => 1536541306,
      'music_title_search' => 'bele; noche dame de parix',
      'music_artist_search' => '; olexia thatmanbekova;',
      'music_album_search' => '',
      'music_composer' => 'Luc Plamondon; Richard Cocciante',
      'music_album' => '',
      'music_listen' => 156,
      'music_track_id' => 0,
      'music_filename' => '1950792-b34ce1c9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[QUASIMODO]:
Belle, c\'est un mot qu\'on dirait inventé pour elle
Quand elle danse et qu\'elle met son corps à jour, tel
Un oiseau qui étend ses ailes pour s\'envoler
Alors je sens l\'enfer s\'ouvrir sou...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1950792,
      'music_title_url' => 'belle-notre-dame-de-paris~olesia-shatmanbekova',
      'music_title' => 'Belle (Notre-Dame De Paris)',
      'music_artist' => 'Olesia Shatmanbekova',
      'music_artist_id' => '23278',
      'cat_id' => 1,
      'cat_level' => 6,
      'cat_sublevel' => 0,
      'cat_custom' => 8,
      'cover_id' => 0,
      'music_download_time' => 1536123660,
      'music_last_update_time' => 1536541306,
      'music_title_search' => 'bele; noche dame de parix',
      'music_artist_search' => '; olexia thatmanbekova;',
      'music_album_search' => '',
      'music_composer' => 'Luc Plamondon; Richard Cocciante',
      'music_album' => '',
      'music_listen' => 156,
      'music_track_id' => 0,
      'music_filename' => '1950792-b34ce1c9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[QUASIMODO]:
Belle, c\'est un mot qu\'on dirait inventé pour elle
Quand elle danse et qu\'elle met son corps à jour, tel
Un oiseau qui étend ses ailes pour s\'envoler
Alors je sens l\'enfer s\'ouvrir sou...',
      'music_artist_html' => '<a href="/ca-si/Olesia-Shatmanbekova~Y3NuX2FydGlzdH4yMzI3OA==.html">Olesia Shatmanbekova</a>',
    ),
  ),
  7 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1114936,
      'music_title_url' => 'hoy-tengo-ganas-de-ti-today-i-have-wanted-you~alejandro-fernandez-christina-',
      'music_title' => 'Hoy Tengo Ganas De Ti (Today I Have Wanted You)',
      'music_artist' => 'Alejandro Fernandez;Christina Aguilera',
      'music_artist_id' => '7158;2648',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538511344,
      'music_last_update_time' => 1374466869,
      'music_title_search' => 'hoi tengo ganax de ti; todai i have wanted iou',
      'music_artist_search' => '; alejandro fernandez; chrixtina aguilera;',
      'music_album_search' => '',
      'music_composer' => 'Alejandro Fernandez',
      'music_album' => '',
      'music_listen' => 6521,
      'music_track_id' => 0,
      'music_filename' => '1114936-f1a02601.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Fuiste ave de paso y no sé porqué razón 
Me fui acostumbrando cada día mas a ti
Los dos inventamos la aventura del amor 
Llenaste mi vida, y después te vi partir 
Sin decirme adiós yo te vi partir....',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1184427,
      'music_title_url' => 'love-and-girls~girls-generation',
      'music_title' => 'Love And Girls',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538467072,
      'music_last_update_time' => 1387249983,
      'music_title_search' => 'love and drlx',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => 'Kamikaoru; Erik Lidbom; Ronny Svendsen; Anne Judith Wik',
      'music_album' => '',
      'music_listen' => 75566,
      'music_track_id' => 0,
      'music_filename' => '1184427-536e47d1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Hoo! Hoo! ([Yoona] 1 2 3 4!), Hoo! Hoo! ([Seohyun] 1 2 3 4!)
[Sooyoung] Jitai no oto in kuniku
Oto tano haato nin kuni
[Seohyun] Hitsu yono sonzai Don\'t see
Sou Girls wai tsumo Mystery.

Na na na n...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1073710,
      'music_title_url' => 'attention-au-depart~les-enfoires',
      'music_title' => 'Attention Au Départ',
      'music_artist' => 'Les Enfoirés',
      'music_artist_id' => '29735',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529912965,
      'music_last_update_time' => 1363583242,
      'music_title_search' => 'atention au depart',
      'music_artist_search' => '; lex enfoirex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2139,
      'music_track_id' => 0,
      'music_filename' => '1073710-89c68a4c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Attends, attends, attends
Attends, attends, attends
Attention au départ
Direction notre histoire
Larguez les amarres 
1, 2, 3,4
Pour un soir
Accordez les guitares
Les violons, les regards
Suivez l\'...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1080029,
      'music_title_url' => 'deux-ils-deux-elles~lara-fabian',
      'music_title' => 'Deux Ils, Deux Elles',
      'music_artist' => 'Lara Fabian',
      'music_artist_id' => '6062',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521565365,
      'music_last_update_time' => 1365740782,
      'music_title_search' => 'deux ilx deux elex',
      'music_artist_search' => '; lara fabian;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2858,
      'music_track_id' => 0,
      'music_filename' => '1080029-7ef27bc0.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Comme un ciel d\'hiver a ses nuits claires s\'abandonne
Comme un grand tonnerre meurt dès qu\'il résonne
Comme une source claire s\'ouvre à la mer et puis fusionne
Comme un bout de Chair fait de nous d...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1086751,
      'music_title_url' => 'vuelve~c-kan-mc-davo',
      'music_title' => 'Vuelve',
      'music_artist' => 'C-Kan;MC Davo',
      'music_artist_id' => '31161;31162',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537010995,
      'music_last_update_time' => 1368006595,
      'music_title_search' => 'vuelve',
      'music_artist_search' => '; c kan; mc davo;',
      'music_album_search' => '',
      'music_composer' => 'C-Kan; MC Davo',
      'music_album' => '',
      'music_listen' => 7870,
      'music_track_id' => 0,
      'music_filename' => '1086751-2eb41b81.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1095574,
      'music_title_url' => 'sin-ti~dyland-lenny-pitbull-beatriz-luengo',
      'music_title' => 'Sin Ti',
      'music_artist' => 'Dyland &amp;Lenny;Pitbull;Beatriz Luengo',
      'music_artist_id' => '31834;31835;1814;31836',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497484385,
      'music_last_update_time' => 1369792099,
      'music_title_search' => 'xin ti',
      'music_artist_search' => '; diland leni; pitbul; beachiz luengo;',
      'music_album_search' => '',
      'music_composer' => 'Aerosmith; Dyland &amp; Lenny',
      'music_album' => '',
      'music_listen' => 2372,
      'music_track_id' => 0,
      'music_filename' => '1095574-34029aba.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Intro:]
Mister worldwild...
Bea...
Dyland &amp; lenny...
El que ama sufre, el que sufre lucha
El que lucha gana, dale mi hermana.

[Chorus:]
Don\'t want to close my eyes
I don\'t want to fall asleep...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1096546,
      'music_title_url' => 'utaino-ballad-japanese-short-version~daesung',
      'music_title' => 'Utaino Ballad (Japanese Short Version)',
      'music_artist' => 'Daesung',
      'music_artist_id' => '981',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495487222,
      'music_last_update_time' => 1369926661,
      'music_title_search' => 'utaino balad; japanexe thort verxion',
      'music_artist_search' => '; daexung;',
      'music_album_search' => '',
      'music_composer' => 'Daesung',
      'music_album' => '',
      'music_listen' => 3136,
      'music_track_id' => 0,
      'music_filename' => '1096546-d36ab26f.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Aa  utau koto wa mudzukashii koto janai
Tada koe ni mi o makase
Atama no naka o karappo ni suru dake.

Aa  me o tojireba mune no naka ni utsuru
Natsukashii omoide ya
Anata to no mainichi.

Hontou n...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1100667,
      'music_title_url' => 'papaoutai~stromae',
      'music_title' => 'Papaoutai',
      'music_artist' => 'Stromae',
      'music_artist_id' => '19155',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535465355,
      'music_last_update_time' => 1370916286,
      'music_title_search' => 'papaoutai',
      'music_artist_search' => '; xchomae;',
      'music_album_search' => '',
      'music_composer' => 'Stromae',
      'music_album' => '',
      'music_listen' => 12388,
      'music_track_id' => 0,
      'music_filename' => '1100667-6fd3b89b.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Dites-moi d\'où il vient
Enfin je saurais où je vais
Maman dit que lorsqu\'on cherche bien
On finit toujours par trouver.

Elle dit qu\'il n\'est jamais très loin
Qu\'il part très souvent travailler
Mam...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1101617,
      'music_title_url' => 'rompe-la-cintura~alexis-y-fido',
      'music_title' => 'Rompe La Cintura',
      'music_artist' => 'Alexis Y Fido',
      'music_artist_id' => '32318',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537199612,
      'music_last_update_time' => 1371119108,
      'music_title_search' => 'rompe la cintura',
      'music_artist_search' => '; alexix i fido;',
      'music_album_search' => '',
      'music_composer' => 'Alexis Y Fido',
      'music_album' => '',
      'music_listen' => 6207,
      'music_track_id' => 0,
      'music_filename' => '1101617-eca68df8.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'La vi llegar, sexi me miro uo, uo 
Muy sensacional ei, ie 
Me cautivo oh, oh 
Me descontrolo oh, oh. 

He vuelto a la vida 
De lo que tu mama te dio 
Prende en fuego tu faldita 
Suelta te el pelo...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1101804,
      'music_title_url' => 'exclusivo~domino-saints',
      'music_title' => 'Exclusivo',
      'music_artist' => 'Domino Saints',
      'music_artist_id' => '32333',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493459914,
      'music_last_update_time' => 1371174715,
      'music_title_search' => 'excluxivo',
      'music_artist_search' => '; domino xaintx;',
      'music_album_search' => '',
      'music_composer' => 'Domino Saints',
      'music_album' => '',
      'music_listen' => 798,
      'music_track_id' => 0,
      'music_filename' => '1101804-c122ee11.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1101975,
      'music_title_url' => 'camino-de-rosas-terra-live-music~alejandro-sanz',
      'music_title' => 'Camino De Rosas (Terra Live Music)',
      'music_artist' => 'Alejandro Sanz',
      'music_artist_id' => '12079',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1526166356,
      'music_last_update_time' => 1371260895,
      'music_title_search' => 'camino de roxax; tera live muxic',
      'music_artist_search' => '; alejandro xanz;',
      'music_album_search' => '',
      'music_composer' => 'Alejandro Sanz',
      'music_album' => '',
      'music_listen' => 1291,
      'music_track_id' => 0,
      'music_filename' => '1101975-78e7b45d.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Ven, cuando viene lo que venga, ya es ayer
Que con los tiempos no se juega
no inventes... no me siento que me duermo
y pa\' empezar, el ayer
Pero es que tú, conviertes
inviertes, te diviertes... esa...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1102549,
      'music_title_url' => 'dejame-conocerte~c-kan',
      'music_title' => 'Dejame Conocerte',
      'music_artist' => 'C-Kan',
      'music_artist_id' => '31161',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537299809,
      'music_last_update_time' => 1371439008,
      'music_title_search' => 'dejame conocerte',
      'music_artist_search' => '; c kan;',
      'music_album_search' => '',
      'music_composer' => 'C-Kan',
      'music_album' => '',
      'music_listen' => 12952,
      'music_track_id' => 0,
      'music_filename' => '1102549-ca2ee54d.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Tan solo deja que amanezca cuando el sol aparezca 
El tiempo pase y me tengas cerca 
O cuando yo crezca y te tenga cerca 
Voy a abrazarte hasta que pase la tormenta. 

Parece que hoy de nuevo te de...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1103021,
      'music_title_url' => 'long-live~taylor-swift-paula-fernandes',
      'music_title' => 'Long Live',
      'music_artist' => 'Taylor Swift;Paula Fernandes',
      'music_artist_id' => '1117;32413',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1532926514,
      'music_last_update_time' => 1371519523,
      'music_title_search' => 'long live',
      'music_artist_search' => '; tailor xwift; paula fernandex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 14274,
      'music_track_id' => 0,
      'music_filename' => '1103021-fd060b91.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Lembrei desse sentimento
Gritando dentro de nós
Éramos todos meninos
E em cada um vivia uma paixão.

Como na cena de um filme
Vencemos pesadelos
Enfrentando os dragoẽs
Criados por nossos medos
Frut...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1104122,
      'music_title_url' => 'burning-love~chenelle',
      'music_title' => 'Burning Love',
      'music_artist' => 'Che\'Nelle',
      'music_artist_id' => '19734',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495703613,
      'music_last_update_time' => 1372385712,
      'music_title_search' => 'burning love',
      'music_artist_search' => '; che nele;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1779,
      'music_track_id' => 0,
      'music_filename' => '1104122-13d5d4fe.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'I\'ve been around the world
Like an animal searching for the one
And there\'s something magical
So invaluable shining like the sun
Kimi rashiku kagayaite yo.

Tsumadzuite, butsukatte, kujikete mo
Nam...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1107004,
      'music_title_url' => 'breaking-news~shinee',
      'music_title' => 'Breaking News',
      'music_artist' => 'SHINee',
      'music_artist_id' => '1821',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1468890496,
      'music_last_update_time' => 1372388246,
      'music_title_search' => 'breaking newx',
      'music_artist_search' => '; thine;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 37991,
      'music_track_id' => 0,
      'music_filename' => '1107004-33c13cfa.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'It\'s a breaking news ... 
(it\' s a breaking news) be here 
It\'s a breaking news (ahhhhhhhh!!!!) Foo!
It\'s a breaking news (check!) 
(it\'s a breaking news) let\'s go! (let\'s go!) 
It\'s a breaking new...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1110107,
      'music_title_url' => 'target~t-ara',
      'music_title' => 'Target',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1411572125,
      'music_last_update_time' => 1373126795,
      'music_title_search' => 'target',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => 'T-Ara',
      'music_album' => '',
      'music_listen' => 20368,
      'music_track_id' => 0,
      'music_filename' => '1110107-0ebef304.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'My target my target target 
My target my target target 

Stop! Hitogomi o aruku downtown 
Kare no koto dake wa sugusama check it! 
Step! Chikazuku tabi tokimeki smile 
At night boss love at first s...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1110981,
      'music_title_url' => 'kaze-no-yoni-japan-version~t-ara-qbs',
      'music_title' => 'Kaze No Yoni (Japan Version)',
      'music_artist' => 'T-Ara QBS',
      'music_artist_id' => '33097',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1514173567,
      'music_last_update_time' => 1373440533,
      'music_title_search' => 'kaze no ioni; japan verxion',
      'music_artist_search' => '; t ara qbx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7451,
      'music_track_id' => 0,
      'music_filename' => '1110981-61dadcdc.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Kokoro no naka no omoi wa fukaku yusuburareru hodo
Fuzakeatte waratte mo fui ni kowaku naru yo.

Tonari de hohoemu anata ga oshie te kure ta
Mō ichi nin ja nai aruki da sō Oh.

Sagashite ta tsunagu...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1112064,
      'music_title_url' => 'kaze-no-yoni-japan-version~t-ara-qbs',
      'music_title' => 'Kaze No Yoni (Japan Version)',
      'music_artist' => 'T-Ara QBS',
      'music_artist_id' => '33097',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1499008278,
      'music_last_update_time' => 1373553993,
      'music_title_search' => 'kaze no ioni; japan verxion',
      'music_artist_search' => '; t ara qbx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11205,
      'music_track_id' => 0,
      'music_filename' => '1112064-6ad69540.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Kokoro no naka no omoi wa fukaku yusuburareru hodo
Fuzakeatte waratte mo fui ni kowaku naru yo.

Tonari de hohoemu anata ga oshie te kure ta
Mō ichi nin ja nai aruki da sō Oh.

Sagashite ta tsunagu...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1112099,
      'music_title_url' => 'la-musica-no-se-toca~alejandro-sanz',
      'music_title' => 'La Música No Se Toca',
      'music_artist' => 'Alejandro Sanz',
      'music_artist_id' => '12079',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1523048609,
      'music_last_update_time' => 1373614761,
      'music_title_search' => 'la muxica no xe toca',
      'music_artist_search' => '; alejandro xanz;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2112,
      'music_track_id' => 0,
      'music_filename' => '1112099-968dde50.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Pasaréis, pasaran los tiempos
Se irán los momentos... Ya lo veréis
Pasaran los imperios, las guerras
Los besos y donde miréis... 
Quedaran los versos y los porqués
Recuérdalo... Esta canción
La mús...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1114309,
      'music_title_url' => 'rain-from-the-garden-of-words-movie~motohiro-hata',
      'music_title' => 'Rain (From The Garden Of Words Movie)',
      'music_artist' => 'Motohiro Hata',
      'music_artist_id' => '33301',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537151831,
      'music_last_update_time' => 1374196964,
      'music_title_search' => 'rain; from the garden of wordx movi',
      'music_artist_search' => '; motohiro hata;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 13058,
      'music_track_id' => 0,
      'music_filename' => '1114309-6ed8ffec.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Kotoba ni dekizu kogoeta mama de
Hitomae de wa yasashiku ikite ita
Shiwayose de konna fuu ni zatsu ni
Ame no yoru ni kimi wo dakishimeteta.

Douro waki no bira to kowareta jouyatou
Machikado de wa...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1114936,
      'music_title_url' => 'hoy-tengo-ganas-de-ti-today-i-have-wanted-you~alejandro-fernandez-christina-',
      'music_title' => 'Hoy Tengo Ganas De Ti (Today I Have Wanted You)',
      'music_artist' => 'Alejandro Fernandez;Christina Aguilera',
      'music_artist_id' => '7158;2648',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538511344,
      'music_last_update_time' => 1374466869,
      'music_title_search' => 'hoi tengo ganax de ti; todai i have wanted iou',
      'music_artist_search' => '; alejandro fernandez; chrixtina aguilera;',
      'music_album_search' => '',
      'music_composer' => 'Alejandro Fernandez',
      'music_album' => '',
      'music_listen' => 6521,
      'music_track_id' => 0,
      'music_filename' => '1114936-f1a02601.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Fuiste ave de paso y no sé porqué razón 
Me fui acostumbrando cada día mas a ti
Los dos inventamos la aventura del amor 
Llenaste mi vida, y después te vi partir 
Sin decirme adiós yo te vi partir....',
      'music_artist_html' => '<a href="/ca-si/Alejandro-Fernandez~Y3NuX2FydGlzdH43MTU4.html">Alejandro Fernandez</a>, <a href="/ca-si/Christina-Aguilera~Y3NuX2FydGlzdH4yNjQ4.html">Christina Aguilera</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1184427,
      'music_title_url' => 'love-and-girls~girls-generation',
      'music_title' => 'Love And Girls',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538467072,
      'music_last_update_time' => 1387249983,
      'music_title_search' => 'love and drlx',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => 'Kamikaoru; Erik Lidbom; Ronny Svendsen; Anne Judith Wik',
      'music_album' => '',
      'music_listen' => 75566,
      'music_track_id' => 0,
      'music_filename' => '1184427-536e47d1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Hoo! Hoo! ([Yoona] 1 2 3 4!), Hoo! Hoo! ([Seohyun] 1 2 3 4!)
[Sooyoung] Jitai no oto in kuniku
Oto tano haato nin kuni
[Seohyun] Hitsu yono sonzai Don\'t see
Sou Girls wai tsumo Mystery.

Na na na n...',
      'music_artist_html' => '<a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH45MjI=.html">Girls\' Generation</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1073710,
      'music_title_url' => 'attention-au-depart~les-enfoires',
      'music_title' => 'Attention Au Départ',
      'music_artist' => 'Les Enfoirés',
      'music_artist_id' => '29735',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529912965,
      'music_last_update_time' => 1363583242,
      'music_title_search' => 'atention au depart',
      'music_artist_search' => '; lex enfoirex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2139,
      'music_track_id' => 0,
      'music_filename' => '1073710-89c68a4c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Attends, attends, attends
Attends, attends, attends
Attention au départ
Direction notre histoire
Larguez les amarres 
1, 2, 3,4
Pour un soir
Accordez les guitares
Les violons, les regards
Suivez l\'...',
      'music_artist_html' => '<a href="/ca-si/Les-Enfoires~Y3NuX2FydGlzdH4yOTczNQ==.html">Les Enfoirés</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1080029,
      'music_title_url' => 'deux-ils-deux-elles~lara-fabian',
      'music_title' => 'Deux Ils, Deux Elles',
      'music_artist' => 'Lara Fabian',
      'music_artist_id' => '6062',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521565365,
      'music_last_update_time' => 1365740782,
      'music_title_search' => 'deux ilx deux elex',
      'music_artist_search' => '; lara fabian;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2858,
      'music_track_id' => 0,
      'music_filename' => '1080029-7ef27bc0.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Comme un ciel d\'hiver a ses nuits claires s\'abandonne
Comme un grand tonnerre meurt dès qu\'il résonne
Comme une source claire s\'ouvre à la mer et puis fusionne
Comme un bout de Chair fait de nous d...',
      'music_artist_html' => '<a href="/ca-si/Lara-Fabian~Y3NuX2FydGlzdH42MDYy.html">Lara Fabian</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1086751,
      'music_title_url' => 'vuelve~c-kan-mc-davo',
      'music_title' => 'Vuelve',
      'music_artist' => 'C-Kan;MC Davo',
      'music_artist_id' => '31161;31162',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537010995,
      'music_last_update_time' => 1368006595,
      'music_title_search' => 'vuelve',
      'music_artist_search' => '; c kan; mc davo;',
      'music_album_search' => '',
      'music_composer' => 'C-Kan; MC Davo',
      'music_album' => '',
      'music_listen' => 7870,
      'music_track_id' => 0,
      'music_filename' => '1086751-2eb41b81.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/C-Kan~Y3NuX2FydGlzdH4zMTE2MQ==.html">C-Kan</a>, <a href="/ca-si/MC-Davo~Y3NuX2FydGlzdH4zMTE2Mg==.html">MC Davo</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1095574,
      'music_title_url' => 'sin-ti~dyland-lenny-pitbull-beatriz-luengo',
      'music_title' => 'Sin Ti',
      'music_artist' => 'Dyland &amp;Lenny;Pitbull;Beatriz Luengo',
      'music_artist_id' => '31834;31835;1814;31836',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497484385,
      'music_last_update_time' => 1369792099,
      'music_title_search' => 'xin ti',
      'music_artist_search' => '; diland leni; pitbul; beachiz luengo;',
      'music_album_search' => '',
      'music_composer' => 'Aerosmith; Dyland &amp; Lenny',
      'music_album' => '',
      'music_listen' => 2372,
      'music_track_id' => 0,
      'music_filename' => '1095574-34029aba.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Intro:]
Mister worldwild...
Bea...
Dyland &amp; lenny...
El que ama sufre, el que sufre lucha
El que lucha gana, dale mi hermana.

[Chorus:]
Don\'t want to close my eyes
I don\'t want to fall asleep...',
      'music_artist_html' => '<a href="/ca-si/Dyland-amp~Y3NuX2FydGlzdH4zMTgzNA==.html">Dyland &amp</a>, <a href="/ca-si/Lenny~Y3NuX2FydGlzdH4zMTgzNQ==.html">Lenny</a>, <a href="/ca-si/Pitbull~Y3NuX2FydGlzdH4xODE0.html">Pitbull</a>, <a href="/ca-si/Beatriz-Luengo~Y3NuX2FydGlzdH4zMTgzNg==.html">Beatriz Luengo</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1096546,
      'music_title_url' => 'utaino-ballad-japanese-short-version~daesung',
      'music_title' => 'Utaino Ballad (Japanese Short Version)',
      'music_artist' => 'Daesung',
      'music_artist_id' => '981',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495487222,
      'music_last_update_time' => 1369926661,
      'music_title_search' => 'utaino balad; japanexe thort verxion',
      'music_artist_search' => '; daexung;',
      'music_album_search' => '',
      'music_composer' => 'Daesung',
      'music_album' => '',
      'music_listen' => 3136,
      'music_track_id' => 0,
      'music_filename' => '1096546-d36ab26f.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Aa  utau koto wa mudzukashii koto janai
Tada koe ni mi o makase
Atama no naka o karappo ni suru dake.

Aa  me o tojireba mune no naka ni utsuru
Natsukashii omoide ya
Anata to no mainichi.

Hontou n...',
      'music_artist_html' => '<a href="/ca-si/Daesung~Y3NuX2FydGlzdH45ODE=.html">Daesung</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1100667,
      'music_title_url' => 'papaoutai~stromae',
      'music_title' => 'Papaoutai',
      'music_artist' => 'Stromae',
      'music_artist_id' => '19155',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535465355,
      'music_last_update_time' => 1370916286,
      'music_title_search' => 'papaoutai',
      'music_artist_search' => '; xchomae;',
      'music_album_search' => '',
      'music_composer' => 'Stromae',
      'music_album' => '',
      'music_listen' => 12388,
      'music_track_id' => 0,
      'music_filename' => '1100667-6fd3b89b.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Dites-moi d\'où il vient
Enfin je saurais où je vais
Maman dit que lorsqu\'on cherche bien
On finit toujours par trouver.

Elle dit qu\'il n\'est jamais très loin
Qu\'il part très souvent travailler
Mam...',
      'music_artist_html' => '<a href="/ca-si/Stromae~Y3NuX2FydGlzdH4xOTE1NQ==.html">Stromae</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1101617,
      'music_title_url' => 'rompe-la-cintura~alexis-y-fido',
      'music_title' => 'Rompe La Cintura',
      'music_artist' => 'Alexis Y Fido',
      'music_artist_id' => '32318',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537199612,
      'music_last_update_time' => 1371119108,
      'music_title_search' => 'rompe la cintura',
      'music_artist_search' => '; alexix i fido;',
      'music_album_search' => '',
      'music_composer' => 'Alexis Y Fido',
      'music_album' => '',
      'music_listen' => 6207,
      'music_track_id' => 0,
      'music_filename' => '1101617-eca68df8.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'La vi llegar, sexi me miro uo, uo 
Muy sensacional ei, ie 
Me cautivo oh, oh 
Me descontrolo oh, oh. 

He vuelto a la vida 
De lo que tu mama te dio 
Prende en fuego tu faldita 
Suelta te el pelo...',
      'music_artist_html' => '<a href="/ca-si/Alexis-Y-Fido~Y3NuX2FydGlzdH4zMjMxOA==.html">Alexis Y Fido</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1101804,
      'music_title_url' => 'exclusivo~domino-saints',
      'music_title' => 'Exclusivo',
      'music_artist' => 'Domino Saints',
      'music_artist_id' => '32333',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493459914,
      'music_last_update_time' => 1371174715,
      'music_title_search' => 'excluxivo',
      'music_artist_search' => '; domino xaintx;',
      'music_album_search' => '',
      'music_composer' => 'Domino Saints',
      'music_album' => '',
      'music_listen' => 798,
      'music_track_id' => 0,
      'music_filename' => '1101804-c122ee11.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Domino-Saints~Y3NuX2FydGlzdH4zMjMzMw==.html">Domino Saints</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1101975,
      'music_title_url' => 'camino-de-rosas-terra-live-music~alejandro-sanz',
      'music_title' => 'Camino De Rosas (Terra Live Music)',
      'music_artist' => 'Alejandro Sanz',
      'music_artist_id' => '12079',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1526166356,
      'music_last_update_time' => 1371260895,
      'music_title_search' => 'camino de roxax; tera live muxic',
      'music_artist_search' => '; alejandro xanz;',
      'music_album_search' => '',
      'music_composer' => 'Alejandro Sanz',
      'music_album' => '',
      'music_listen' => 1291,
      'music_track_id' => 0,
      'music_filename' => '1101975-78e7b45d.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Ven, cuando viene lo que venga, ya es ayer
Que con los tiempos no se juega
no inventes... no me siento que me duermo
y pa\' empezar, el ayer
Pero es que tú, conviertes
inviertes, te diviertes... esa...',
      'music_artist_html' => '<a href="/ca-si/Alejandro-Sanz~Y3NuX2FydGlzdH4xMjA3OQ==.html">Alejandro Sanz</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1102549,
      'music_title_url' => 'dejame-conocerte~c-kan',
      'music_title' => 'Dejame Conocerte',
      'music_artist' => 'C-Kan',
      'music_artist_id' => '31161',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537299809,
      'music_last_update_time' => 1371439008,
      'music_title_search' => 'dejame conocerte',
      'music_artist_search' => '; c kan;',
      'music_album_search' => '',
      'music_composer' => 'C-Kan',
      'music_album' => '',
      'music_listen' => 12952,
      'music_track_id' => 0,
      'music_filename' => '1102549-ca2ee54d.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Tan solo deja que amanezca cuando el sol aparezca 
El tiempo pase y me tengas cerca 
O cuando yo crezca y te tenga cerca 
Voy a abrazarte hasta que pase la tormenta. 

Parece que hoy de nuevo te de...',
      'music_artist_html' => '<a href="/ca-si/C-Kan~Y3NuX2FydGlzdH4zMTE2MQ==.html">C-Kan</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1103021,
      'music_title_url' => 'long-live~taylor-swift-paula-fernandes',
      'music_title' => 'Long Live',
      'music_artist' => 'Taylor Swift;Paula Fernandes',
      'music_artist_id' => '1117;32413',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1532926514,
      'music_last_update_time' => 1371519523,
      'music_title_search' => 'long live',
      'music_artist_search' => '; tailor xwift; paula fernandex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 14274,
      'music_track_id' => 0,
      'music_filename' => '1103021-fd060b91.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Lembrei desse sentimento
Gritando dentro de nós
Éramos todos meninos
E em cada um vivia uma paixão.

Como na cena de um filme
Vencemos pesadelos
Enfrentando os dragoẽs
Criados por nossos medos
Frut...',
      'music_artist_html' => '<a href="/ca-si/Taylor-Swift~Y3NuX2FydGlzdH4xMTE3.html">Taylor Swift</a>, <a href="/ca-si/Paula-Fernandes~Y3NuX2FydGlzdH4zMjQxMw==.html">Paula Fernandes</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1104122,
      'music_title_url' => 'burning-love~chenelle',
      'music_title' => 'Burning Love',
      'music_artist' => 'Che\'Nelle',
      'music_artist_id' => '19734',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495703613,
      'music_last_update_time' => 1372385712,
      'music_title_search' => 'burning love',
      'music_artist_search' => '; che nele;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1779,
      'music_track_id' => 0,
      'music_filename' => '1104122-13d5d4fe.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'I\'ve been around the world
Like an animal searching for the one
And there\'s something magical
So invaluable shining like the sun
Kimi rashiku kagayaite yo.

Tsumadzuite, butsukatte, kujikete mo
Nam...',
      'music_artist_html' => '<a href="/ca-si/CheNelle~Y3NuX2FydGlzdH4xOTczNA==.html">Che\'Nelle</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1107004,
      'music_title_url' => 'breaking-news~shinee',
      'music_title' => 'Breaking News',
      'music_artist' => 'SHINee',
      'music_artist_id' => '1821',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1468890496,
      'music_last_update_time' => 1372388246,
      'music_title_search' => 'breaking newx',
      'music_artist_search' => '; thine;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 37991,
      'music_track_id' => 0,
      'music_filename' => '1107004-33c13cfa.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'It\'s a breaking news ... 
(it\' s a breaking news) be here 
It\'s a breaking news (ahhhhhhhh!!!!) Foo!
It\'s a breaking news (check!) 
(it\'s a breaking news) let\'s go! (let\'s go!) 
It\'s a breaking new...',
      'music_artist_html' => '<a href="/ca-si/SHINee~Y3NuX2FydGlzdH4xODIx.html">SHINee</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1110107,
      'music_title_url' => 'target~t-ara',
      'music_title' => 'Target',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1411572125,
      'music_last_update_time' => 1373126795,
      'music_title_search' => 'target',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => 'T-Ara',
      'music_album' => '',
      'music_listen' => 20368,
      'music_track_id' => 0,
      'music_filename' => '1110107-0ebef304.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'My target my target target 
My target my target target 

Stop! Hitogomi o aruku downtown 
Kare no koto dake wa sugusama check it! 
Step! Chikazuku tabi tokimeki smile 
At night boss love at first s...',
      'music_artist_html' => '<a href="/ca-si/T-Ara~Y3NuX2FydGlzdH4xNDEz.html">T-Ara</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1110981,
      'music_title_url' => 'kaze-no-yoni-japan-version~t-ara-qbs',
      'music_title' => 'Kaze No Yoni (Japan Version)',
      'music_artist' => 'T-Ara QBS',
      'music_artist_id' => '33097',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1514173567,
      'music_last_update_time' => 1373440533,
      'music_title_search' => 'kaze no ioni; japan verxion',
      'music_artist_search' => '; t ara qbx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7451,
      'music_track_id' => 0,
      'music_filename' => '1110981-61dadcdc.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Kokoro no naka no omoi wa fukaku yusuburareru hodo
Fuzakeatte waratte mo fui ni kowaku naru yo.

Tonari de hohoemu anata ga oshie te kure ta
Mō ichi nin ja nai aruki da sō Oh.

Sagashite ta tsunagu...',
      'music_artist_html' => '<a href="/ca-si/T-Ara-QBS~Y3NuX2FydGlzdH4zMzA5Nw==.html">T-Ara QBS</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1112064,
      'music_title_url' => 'kaze-no-yoni-japan-version~t-ara-qbs',
      'music_title' => 'Kaze No Yoni (Japan Version)',
      'music_artist' => 'T-Ara QBS',
      'music_artist_id' => '33097',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1499008278,
      'music_last_update_time' => 1373553993,
      'music_title_search' => 'kaze no ioni; japan verxion',
      'music_artist_search' => '; t ara qbx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11205,
      'music_track_id' => 0,
      'music_filename' => '1112064-6ad69540.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Kokoro no naka no omoi wa fukaku yusuburareru hodo
Fuzakeatte waratte mo fui ni kowaku naru yo.

Tonari de hohoemu anata ga oshie te kure ta
Mō ichi nin ja nai aruki da sō Oh.

Sagashite ta tsunagu...',
      'music_artist_html' => '<a href="/ca-si/T-Ara-QBS~Y3NuX2FydGlzdH4zMzA5Nw==.html">T-Ara QBS</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1112099,
      'music_title_url' => 'la-musica-no-se-toca~alejandro-sanz',
      'music_title' => 'La Música No Se Toca',
      'music_artist' => 'Alejandro Sanz',
      'music_artist_id' => '12079',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1523048609,
      'music_last_update_time' => 1373614761,
      'music_title_search' => 'la muxica no xe toca',
      'music_artist_search' => '; alejandro xanz;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2112,
      'music_track_id' => 0,
      'music_filename' => '1112099-968dde50.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Pasaréis, pasaran los tiempos
Se irán los momentos... Ya lo veréis
Pasaran los imperios, las guerras
Los besos y donde miréis... 
Quedaran los versos y los porqués
Recuérdalo... Esta canción
La mús...',
      'music_artist_html' => '<a href="/ca-si/Alejandro-Sanz~Y3NuX2FydGlzdH4xMjA3OQ==.html">Alejandro Sanz</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1114309,
      'music_title_url' => 'rain-from-the-garden-of-words-movie~motohiro-hata',
      'music_title' => 'Rain (From The Garden Of Words Movie)',
      'music_artist' => 'Motohiro Hata',
      'music_artist_id' => '33301',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537151831,
      'music_last_update_time' => 1374196964,
      'music_title_search' => 'rain; from the garden of wordx movi',
      'music_artist_search' => '; motohiro hata;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 13058,
      'music_track_id' => 0,
      'music_filename' => '1114309-6ed8ffec.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Kotoba ni dekizu kogoeta mama de
Hitomae de wa yasashiku ikite ita
Shiwayose de konna fuu ni zatsu ni
Ame no yoru ni kimi wo dakishimeteta.

Douro waki no bira to kowareta jouyatou
Machikado de wa...',
      'music_artist_html' => '<a href="/ca-si/Motohiro-Hata~Y3NuX2FydGlzdH4zMzMwMQ==.html">Motohiro Hata</a>',
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