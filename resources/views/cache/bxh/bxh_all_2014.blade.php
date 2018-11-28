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
      'music_id' => 1261838,
      'music_title_url' => 'nho-nguoi-yeu~quang-le-le-quyen',
      'music_title' => 'Nhớ Người Yêu',
      'music_artist' => 'Quang Lê;Lệ Quyên',
      'music_artist_id' => '1770;1662',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539065834,
      'music_last_update_time' => 1398778868,
      'music_title_search' => 'nho ngui iu',
      'music_artist_search' => '; quang le; le qin;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Hoa; Thảo Trang',
      'music_album' => '',
      'music_listen' => 790635,
      'music_track_id' => 0,
      'music_filename' => '1261838-e37d49cf.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nhiều đêm thức trọn nhớ thương em 
Nhớ quá làm sao biết ngõ tình 
Tay trắng anh nào mơ với mộng 
Nên tình hai đứa vẫn chưa quên.

Thức trọn đêm nay để nhớ thương em
Anh nghe tình yêu nhắc nhở êm đề...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1264104,
      'music_title_url' => 'nhung-loi-nay-cho-em~dan-nguyen',
      'music_title' => 'Những Lời Này Cho Em',
      'music_artist' => 'Đan Nguyên',
      'music_artist_id' => '2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538568384,
      'music_last_update_time' => 1399477705,
      'music_title_search' => 'nhung loi nai cho em',
      'music_artist_search' => '; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Trúc Phương',
      'music_album' => '',
      'music_listen' => 81725,
      'music_track_id' => 0,
      'music_filename' => '1264104-e6ddea3a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Những lời này cho em
Ta bỏ ta chưa nửa cuộc tình
Thấy đam mê thể xác căng đầy
Nghiêng ngửa cho dù hơn lần nghe đắng cay.

Những lời này cho em
Ta hờn ta khi đối mặt đời
Đêm đơn côi chợt thấy đêm dà...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1370664,
      'music_title_url' => 'co-don-giua-cuoc-tinh~ho-ngoc-ha',
      'music_title' => 'Cô Đơn Giữa Cuộc Tình',
      'music_artist' => 'Hồ Ngọc Hà',
      'music_artist_id' => '1468',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538795602,
      'music_last_update_time' => 1411976291,
      'music_title_search' => 'co don dua cuc tinh',
      'music_artist_search' => '; ho ngoc ha;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Hồng Thuận',
      'music_album' => '',
      'music_listen' => 36487,
      'music_track_id' => 0,
      'music_filename' => '1370664-2e7f7ac4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Em cô đơn quá, giữa bao chuyện của đôi ta
Em thấy sợ hãi hai chúng ta đang trôi về hai nơi
Bao lâu ta đã chẳng còn để nói với nhau
Trong em là bế tắc những nghĩ suy cứ chồng chéo lên nhau.

Giờ đây...',
    ),
    3 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1392388,
      'music_title_url' => 'chac-ai-do-se-ve~mrbim',
      'music_title' => 'Chắc Ai Đó Sẽ Về',
      'music_artist' => 'Mr.Bim',
      'music_artist_id' => '57040',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538974360,
      'music_last_update_time' => 1414585652,
      'music_title_search' => 'chac ai do xe ve',
      'music_artist_search' => '; mr bim;',
      'music_album_search' => '',
      'music_composer' => 'M-TP',
      'music_album' => '',
      'music_listen' => 25896,
      'music_track_id' => 0,
      'music_filename' => '1392388-f834bebf.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Anh tìm nỗi nhớ, anh tìm quá khứ
Nhớ lắm kí ức anh và em
Trả lại anh yêu thương ấy, xin người hãy về nơi đây
Bàn tay yếu ớt cố níu em ở lại.

Những giọt nước mắt lăn dài trên mi
Cứ thế anh biết phả...',
    ),
    4 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1466666,
      'music_title_url' => 'chuyen-nhu-chua-bat-dau-live~my-tam',
      'music_title' => 'Chuyện Như Chưa Bắt Đầu (Live)',
      'music_artist' => 'Mỹ Tâm',
      'music_artist_id' => '4812',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539052016,
      'music_last_update_time' => 1426261525,
      'music_title_search' => 'chin nhu chua bat dau; live',
      'music_artist_search' => '; mi tam;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Nhã',
      'music_album' => '',
      'music_listen' => 83119,
      'music_track_id' => 0,
      'music_filename' => '1466666-f674170b.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Mưa rơi trên nỗi đau nào 
Lòng chợt thấy nghẹn ngào vì bao khát khao
Đợi chờ làm chi nỗi đau ai ngờ 
Tình yêu đôi ta như là mơ.

Bao yêu thương đã muộn màng 
Vì mình đã quá vội vàng để lòng nát tan...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1553472,
      'music_title_url' => 'lien-khuc-sau-lan-hen-cuoi-thuong-tinh-nhan~huynh-nguyen-cong-bang-duong-h',
      'music_title' => 'Liên Khúc: Sau Lần Hẹn Cuối; Thương Tình Nhân',
      'music_artist' => 'Huỳnh Nguyễn Công Bằng;Dương Hồng Loan;Lê Sang;Lưu Ánh Loan',
      'music_artist_id' => '31460;4293;18430;3169',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538994946,
      'music_last_update_time' => 1442551099,
      'music_title_search' => 'lin khuc; xau lan hen cui; thung tinh nhan',
      'music_artist_search' => '; hinh ngin cong bang; dung hong loan; le xang; lu em loan;',
      'music_album_search' => '',
      'music_composer' => 'Hoài Nam',
      'music_album' => '',
      'music_listen' => 217060,
      'music_track_id' => 0,
      'music_filename' => '1553472-78630ca6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Sau Lần Hẹn Cuối]

Sau lần hẹn cuối, em về với người
Còn lại anh suy tư mãi tình đời
Thương quá để rồi, yêu quá để rồi
Thành nụ cười khô héo trên môi.

Sau lần hẹn cuối, em về với chồng
Ðể mặc anh...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1345091,
      'music_title_url' => 'thon-trang~nhu-quynh',
      'music_title' => 'Thôn Trăng',
      'music_artist' => 'Như Quỳnh',
      'music_artist_id' => '32',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538453949,
      'music_last_update_time' => 1412302295,
      'music_title_search' => 'thon chang',
      'music_artist_search' => '; nhu qinh;',
      'music_album_search' => '',
      'music_composer' => 'Mạnh Bích',
      'music_album' => '',
      'music_listen' => 62465,
      'music_track_id' => 0,
      'music_filename' => '1345091-e57d1a74.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Đêm nay trăng soi thôn trang
Gió đưa gió đưa nhịp chảy vang 
Trăng đến vui thôn làng cho nặng tình yêu thương.

Êm êm trên sông ven thôn
Gió đưa gió đưa giọng hò khoan hò khoan
Nghe sóng vỗ mạn...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1350761,
      'music_title_url' => 'ten-toi-viet-nam~hoang-ton-ffboiz-o-plus-hoang-',
      'music_title' => 'Tên Tôi Việt Nam',
      'music_artist' => 'Hoàng Tôn;FFBoiz;O Plus;Hoàng Yến Chibi;Bảo Kun;Hoà Minzy;Uyên Nguyên;Hà Lê',
      'music_artist_id' => '707;53397;53398;4578;4144;4577;50707;4277',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538917986,
      'music_last_update_time' => 1409715667,
      'music_title_search' => 'ten toi vit 5',
      'music_artist_search' => '; hoang ton; fboiz; o plux; hoang in chibi; bao kun; hoa minzi; in ngin; ha le;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Tôn; Phúc Bồ',
      'music_album' => '',
      'music_listen' => 43502,
      'music_track_id' => 0,
      'music_filename' => '1350761-68b5d6a3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ah... Yêu con người Việt Nam
Tôi yêu lắm cái chất của con người Việt Nam
Oh... oh... oh... eh...
For my FB Boiz
Hello Việt Nam.

Cứ mỗi sáng thức giấc tôi ra đường
Đón lấy những ánh nắng như chan h...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1374270,
      'music_title_url' => 'ai-cung-co-ngay-xua~bui-anh-tuan',
      'music_title' => 'Ai Cũng Có Ngày Xưa',
      'music_artist' => 'Bùi Anh Tuấn',
      'music_artist_id' => '2552',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538907466,
      'music_last_update_time' => 1412384678,
      'music_title_search' => 'ai cung co ngai xua',
      'music_artist_search' => '; bui em tuan;',
      'music_album_search' => '',
      'music_composer' => 'Phan Mạnh Quỳnh',
      'music_album' => '',
      'music_listen' => 5016,
      'music_track_id' => 0,
      'music_filename' => '1374270-ad99ef6e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Dòng tin đăng quê hương tôi nay đang bão
Gió lớn cuốn mấy mái ngói bay
Nước cũng sắp cao ngang đầu
Chiều nay ai mang thêm bao nhiêu lo lắng 
Chẳng biết sẽ có chỗ trú thân
Hay thức trắng với cơn...',
    ),
    9 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1434338,
      'music_title_url' => 'co-ua-live~dan-nguyen-nguyen-hong-nhung',
      'music_title' => 'Cỏ Úa (Live)',
      'music_artist' => 'Đan Nguyên;Nguyễn Hồng Nhung',
      'music_artist_id' => '2347;2516',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538964418,
      'music_last_update_time' => 1419931670,
      'music_title_search' => 'co ua; live',
      'music_artist_search' => '; dan ngin; ngin hong nhung;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương',
      'music_album' => '',
      'music_listen' => 68180,
      'music_track_id' => 0,
      'music_filename' => '1434338-9871ae05.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Còn nhớ tên nhau xin gọi trong giấc mộng 
Còn chút thương yêu xin đưa vào dư âm 
Có phải còn yêu vì đôi lần thầm nhớ 
Mình đã thật quên cớ sao lòng vẫn chờ. 

Từ lúc em đi trong rượu cay men nồng...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1206379,
      'music_title_url' => 'duyen-kiep~anh-dung-giang-tien',
      'music_title' => 'Duyên Kiếp',
      'music_artist' => 'Anh Dũng;Giáng Tiên',
      'music_artist_id' => '8765;2355',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538630015,
      'music_last_update_time' => 1390444980,
      'music_title_search' => 'din kip',
      'music_artist_search' => '; em dung; dang tin;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương',
      'music_album' => '',
      'music_listen' => 35669,
      'music_track_id' => 0,
      'music_filename' => '1206379-d97e6c58.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Em ơi nếu mộng không thành thì sao
Non cao đất rộng biết đâu mà tìm
Đường đời mịt mờ vạn nẻo về đâu
Mong chờ duyên kiếp đưa lối bắc cầu.

Em ơi nhắc lại phút xưa gặp nhau
Trên đê vắng người lúc tan...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1261492,
      'music_title_url' => 'con-duong-mang-ten-em~dan-nguyen-y-phung',
      'music_title' => 'Con Đường Mang Tên Em',
      'music_artist' => 'Đan Nguyên;Y Phụng',
      'music_artist_id' => '2347;6767',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538902424,
      'music_last_update_time' => 1397990245,
      'music_title_search' => 'con dung mang ten em',
      'music_artist_search' => '; dan ngin; i phung;',
      'music_album_search' => '',
      'music_composer' => 'Trúc Phương',
      'music_album' => '',
      'music_listen' => 205718,
      'music_track_id' => 0,
      'music_filename' => '1261492-ac054d84.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Trở lại chuyện hai chúng mình
Khi em với anh vừa biết đam mê
Tình yêu tràn trề
Đường mòn đêm vắng bước chân em nhớ tên.

Rồi thời gian qua lối này
Khi tay trắng tay, buồn vắt lên vai
Hành trang đườ...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1328362,
      'music_title_url' => 'sao-no-minh-oi~duong-ngoc-thai',
      'music_title' => 'Sao Nỡ Mình Ơi',
      'music_artist' => 'Dương Ngọc Thái',
      'music_artist_id' => '741',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538852381,
      'music_last_update_time' => 1406597691,
      'music_title_search' => 'xao no minh oi',
      'music_artist_search' => '; dung ngoc thai;',
      'music_album_search' => '',
      'music_composer' => 'Sơn Hạ',
      'music_album' => '',
      'music_listen' => 32749,
      'music_track_id' => 0,
      'music_filename' => '1328362-70b0a18a.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Đêm buồn lẻ bóng mình tôi
Tình nỡ lìa đôi vì người ta đã phụ tôi rồi
Chăn gối lạnh lùng, duyên nồng hai đứa
Tiếng yêu ban đầu… sao nỡ phụ nhau.

Vợ chồng vẹn chữ đợi mong
Người đã bội vong em sang...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1328870,
      'music_title_url' => 'dung-noi-xa-nhau~dan-nguyen-hoang-thuc-linh',
      'music_title' => 'Đừng Nói Xa Nhau',
      'music_artist' => 'Đan Nguyên;Hoàng Thục Linh',
      'music_artist_id' => '2347;13153',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538754101,
      'music_last_update_time' => 1406684364,
      'music_title_search' => 'dung noi xa nhau',
      'music_artist_search' => '; dan ngin; hoang thuc linh;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kỳ; Hồ Đình Phương',
      'music_album' => '',
      'music_listen' => 351081,
      'music_track_id' => 0,
      'music_filename' => '1328870-3a827536.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Đừng nói xa nhau cho tâm hồn đau khổ
Đừng nói xa nhau cho mắt lệ hoen mờ
Lời thiết tha qua tâm tư tròn mộng tròn mơ
Vết tình khắc lên môi đưa mấy tuổi yêu vẫn chờ.

Mình đã đi chung trên con đường...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1331461,
      'music_title_url' => 'lien-khuc-tinh-bo-vo-dung-noi-xa-nhau~ha-thanh-xuan-dan-nguyen-hoang-thuc-linh',
      'music_title' => 'Liên Khúc: Tình Bơ Vơ; Đừng Nói Xa Nhau',
      'music_artist' => 'Hà Thanh Xuân;Đan Nguyên;Hoàng Thục Linh',
      'music_artist_id' => '7393;2347;13153',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538487960,
      'music_last_update_time' => 1407051113,
      'music_title_search' => 'lin khuc; tinh bo vo; dung noi xa nhau',
      'music_artist_search' => '; ha thanh xuan; dan ngin; hoang thuc linh;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương; Châu Kỳ; Hồ Đình Phương',
      'music_album' => '',
      'music_listen' => 384862,
      'music_track_id' => 0,
      'music_filename' => '1331461-4f8a4d3a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Tình Bơ Vơ]

Càng nhìn em yêu em hơn 
Và yêu em mãi 
Dù phút êm đềm xa xưa 
Nay đã đi vào quên lãng. 

Trời vào thu Việt Nam buồn lắm anh ơi 
Mây tím đang dâng cao vời 
Mà tình yêu chưa lên ngôi....',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1344423,
      'music_title_url' => 'nhung-loi-doi-gian~ngo-quoc-linh',
      'music_title' => 'Những Lời Dối Gian',
      'music_artist' => 'Ngô Quốc Linh',
      'music_artist_id' => '2284',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538912796,
      'music_last_update_time' => 1408759251,
      'music_title_search' => 'nhung loi doi dan',
      'music_artist_search' => '; ngo quc linh;',
      'music_album_search' => '',
      'music_composer' => 'Lời: Khúc Lan',
      'music_album' => '',
      'music_listen' => 7985,
      'music_track_id' => 0,
      'music_filename' => '1344423-d41b9128.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Đã đến lúc nói lên câu giã từ đường tình yêu hai lối đi
Để rồi em xem như hai chúng ta chưa bao giờ quen
Nếu lúc trước tiếng yêu không nói được mộng mơ kia không giữ lâu
Thì ngày nay đi trên con ph...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1347752,
      'music_title_url' => 'lien-khuc-cho-ai-di-ngoai-suong-gio~nguyen-hung-ngoc-anh',
      'music_title' => 'Liên Khúc: Chờ; Ai Đi Ngoài Sương Gió',
      'music_artist' => 'Nguyễn Hưng;Ngọc Anh',
      'music_artist_id' => '26;36',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538605351,
      'music_last_update_time' => 1409151336,
      'music_title_search' => 'lin khuc; cho; ai di ngoai xung do',
      'music_artist_search' => '; ngin hung; ngoc em;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương; Nguyễn Hữu Thiết',
      'music_album' => '',
      'music_listen' => 32983,
      'music_track_id' => 0,
      'music_filename' => '1347752-34896670.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Chờ]

Bài nhạc sầu
Là cơn đau của những đêm xa nhà
Là nuối tiếc cho ngày qua
Xa thời niên thiếu 
Nghe lòng buồn trong tình chăn chiếu. 

Bài nhạc sầu
Gửi cho em trong những đêm cô phòng
Giòng nước...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1396892,
      'music_title_url' => 'hat-cho-nguoi-tinh-nho~cam-ly',
      'music_title' => 'Hát Cho Người Tình Nhớ',
      'music_artist' => 'Cẩm Ly',
      'music_artist_id' => '198',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538579759,
      'music_last_update_time' => 1415014976,
      'music_title_search' => 'hat cho ngui tinh nho',
      'music_artist_search' => '; cam li;',
      'music_album_search' => '',
      'music_composer' => 'Vũ Quốc Việt',
      'music_album' => '',
      'music_listen' => 25626,
      'music_track_id' => 0,
      'music_filename' => '1396892-21f5aabc.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Em vẫn mãi còn yêu như em đã từng yêu
Dẫu anh là &quot;mộng hay xa xăm cuối trời
Mưa giăng vẫn về đây đêm trăng vẫn còn đây
Dẫu em ngồi lại hay bước đi về chốn xa
Em cất bước về đâu khi đêm đã chìm...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1412240,
      'music_title_url' => 'bai-ca-thit-nuong~hari-won',
      'music_title' => 'Bài Ca Thịt Nướng',
      'music_artist' => 'Hari Won',
      'music_artist_id' => '3971',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538650252,
      'music_last_update_time' => 1416966522,
      'music_title_search' => 'bai ca thit nung',
      'music_artist_search' => '; hari won;',
      'music_album_search' => '',
      'music_composer' => 'Phạm Toàn Thắng',
      'music_album' => '',
      'music_listen' => 163626,
      'music_track_id' => 0,
      'music_filename' => '1412240-3b274891.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1457164,
      'music_title_url' => 'biet-noi-gi-day~tuan-vu-thanh-tuyen',
      'music_title' => 'Biết Nói Gì Đây',
      'music_artist' => 'Tuấn Vũ;Thanh Tuyền',
      'music_artist_id' => '5236;4009',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538895867,
      'music_last_update_time' => 1423659641,
      'music_title_search' => 'bit noi d dai',
      'music_artist_search' => '; tuan vu; thanh tin;',
      'music_album_search' => '',
      'music_composer' => 'Huỳnh Anh',
      'music_album' => '',
      'music_listen' => 124458,
      'music_track_id' => 0,
      'music_filename' => '1457164-5bc9d1aa.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Biết nói gì đây khi hai đường đời ngăn chia mình rồi
Bao nhiêu thương nhớ bao nhiêu đợi chờ, chưa hoen lối đi
Đêm đêm em nhắn gió, gởi mây về cho anh
Trao cho anh tiếng hát, tìm thương nhau ngày ấy...',
    ),
    20 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1261838,
      'music_title_url' => 'nho-nguoi-yeu~quang-le-le-quyen',
      'music_title' => 'Nhớ Người Yêu',
      'music_artist' => 'Quang Lê;Lệ Quyên',
      'music_artist_id' => '1770;1662',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539065834,
      'music_last_update_time' => 1398778868,
      'music_title_search' => 'nho ngui iu',
      'music_artist_search' => '; quang le; le qin;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Hoa; Thảo Trang',
      'music_album' => '',
      'music_listen' => 790635,
      'music_track_id' => 0,
      'music_filename' => '1261838-e37d49cf.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nhiều đêm thức trọn nhớ thương em 
Nhớ quá làm sao biết ngõ tình 
Tay trắng anh nào mơ với mộng 
Nên tình hai đứa vẫn chưa quên.

Thức trọn đêm nay để nhớ thương em
Anh nghe tình yêu nhắc nhở êm đề...',
      'music_artist_html' => '<a href="/ca-si/Quang-Le~Y3NuX2FydGlzdH4xNzcw.html">Quang Lê</a>, <a href="/ca-si/Le-Quyen~Y3NuX2FydGlzdH4xNjYy.html">Lệ Quyên</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1264104,
      'music_title_url' => 'nhung-loi-nay-cho-em~dan-nguyen',
      'music_title' => 'Những Lời Này Cho Em',
      'music_artist' => 'Đan Nguyên',
      'music_artist_id' => '2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538568384,
      'music_last_update_time' => 1399477705,
      'music_title_search' => 'nhung loi nai cho em',
      'music_artist_search' => '; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Trúc Phương',
      'music_album' => '',
      'music_listen' => 81725,
      'music_track_id' => 0,
      'music_filename' => '1264104-e6ddea3a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Những lời này cho em
Ta bỏ ta chưa nửa cuộc tình
Thấy đam mê thể xác căng đầy
Nghiêng ngửa cho dù hơn lần nghe đắng cay.

Những lời này cho em
Ta hờn ta khi đối mặt đời
Đêm đơn côi chợt thấy đêm dà...',
      'music_artist_html' => '<a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1370664,
      'music_title_url' => 'co-don-giua-cuoc-tinh~ho-ngoc-ha',
      'music_title' => 'Cô Đơn Giữa Cuộc Tình',
      'music_artist' => 'Hồ Ngọc Hà',
      'music_artist_id' => '1468',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538795602,
      'music_last_update_time' => 1411976291,
      'music_title_search' => 'co don dua cuc tinh',
      'music_artist_search' => '; ho ngoc ha;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Hồng Thuận',
      'music_album' => '',
      'music_listen' => 36487,
      'music_track_id' => 0,
      'music_filename' => '1370664-2e7f7ac4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Em cô đơn quá, giữa bao chuyện của đôi ta
Em thấy sợ hãi hai chúng ta đang trôi về hai nơi
Bao lâu ta đã chẳng còn để nói với nhau
Trong em là bế tắc những nghĩ suy cứ chồng chéo lên nhau.

Giờ đây...',
      'music_artist_html' => '<a href="/ca-si/Ho-Ngoc-Ha~Y3NuX2FydGlzdH4xNDY4.html">Hồ Ngọc Hà</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1392388,
      'music_title_url' => 'chac-ai-do-se-ve~mrbim',
      'music_title' => 'Chắc Ai Đó Sẽ Về',
      'music_artist' => 'Mr.Bim',
      'music_artist_id' => '57040',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538974360,
      'music_last_update_time' => 1414585652,
      'music_title_search' => 'chac ai do xe ve',
      'music_artist_search' => '; mr bim;',
      'music_album_search' => '',
      'music_composer' => 'M-TP',
      'music_album' => '',
      'music_listen' => 25896,
      'music_track_id' => 0,
      'music_filename' => '1392388-f834bebf.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Anh tìm nỗi nhớ, anh tìm quá khứ
Nhớ lắm kí ức anh và em
Trả lại anh yêu thương ấy, xin người hãy về nơi đây
Bàn tay yếu ớt cố níu em ở lại.

Những giọt nước mắt lăn dài trên mi
Cứ thế anh biết phả...',
      'music_artist_html' => '<a href="/ca-si/MrBim~Y3NuX2FydGlzdH41NzA0MA==.html">Mr.Bim</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1466666,
      'music_title_url' => 'chuyen-nhu-chua-bat-dau-live~my-tam',
      'music_title' => 'Chuyện Như Chưa Bắt Đầu (Live)',
      'music_artist' => 'Mỹ Tâm',
      'music_artist_id' => '4812',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539052016,
      'music_last_update_time' => 1426261525,
      'music_title_search' => 'chin nhu chua bat dau; live',
      'music_artist_search' => '; mi tam;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Nhã',
      'music_album' => '',
      'music_listen' => 83119,
      'music_track_id' => 0,
      'music_filename' => '1466666-f674170b.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Mưa rơi trên nỗi đau nào 
Lòng chợt thấy nghẹn ngào vì bao khát khao
Đợi chờ làm chi nỗi đau ai ngờ 
Tình yêu đôi ta như là mơ.

Bao yêu thương đã muộn màng 
Vì mình đã quá vội vàng để lòng nát tan...',
      'music_artist_html' => '<a href="/ca-si/My-Tam~Y3NuX2FydGlzdH40ODEy.html">Mỹ Tâm</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1553472,
      'music_title_url' => 'lien-khuc-sau-lan-hen-cuoi-thuong-tinh-nhan~huynh-nguyen-cong-bang-duong-h',
      'music_title' => 'Liên Khúc: Sau Lần Hẹn Cuối; Thương Tình Nhân',
      'music_artist' => 'Huỳnh Nguyễn Công Bằng;Dương Hồng Loan;Lê Sang;Lưu Ánh Loan',
      'music_artist_id' => '31460;4293;18430;3169',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538994946,
      'music_last_update_time' => 1442551099,
      'music_title_search' => 'lin khuc; xau lan hen cui; thung tinh nhan',
      'music_artist_search' => '; hinh ngin cong bang; dung hong loan; le xang; lu em loan;',
      'music_album_search' => '',
      'music_composer' => 'Hoài Nam',
      'music_album' => '',
      'music_listen' => 217060,
      'music_track_id' => 0,
      'music_filename' => '1553472-78630ca6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Sau Lần Hẹn Cuối]

Sau lần hẹn cuối, em về với người
Còn lại anh suy tư mãi tình đời
Thương quá để rồi, yêu quá để rồi
Thành nụ cười khô héo trên môi.

Sau lần hẹn cuối, em về với chồng
Ðể mặc anh...',
      'music_artist_html' => '<a href="/ca-si/Huynh-Nguyen-Cong-Bang~Y3NuX2FydGlzdH4zMTQ2MA==.html">Huỳnh Nguyễn Công Bằng</a>, <a href="/ca-si/Duong-Hong-Loan~Y3NuX2FydGlzdH40Mjkz.html">Dương Hồng Loan</a>, <a href="/ca-si/Le-Sang~Y3NuX2FydGlzdH4xODQzMA==.html">Lê Sang</a>, <a href="/ca-si/Luu-Anh-Loan~Y3NuX2FydGlzdH4zMTY5.html">Lưu Ánh Loan</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1345091,
      'music_title_url' => 'thon-trang~nhu-quynh',
      'music_title' => 'Thôn Trăng',
      'music_artist' => 'Như Quỳnh',
      'music_artist_id' => '32',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538453949,
      'music_last_update_time' => 1412302295,
      'music_title_search' => 'thon chang',
      'music_artist_search' => '; nhu qinh;',
      'music_album_search' => '',
      'music_composer' => 'Mạnh Bích',
      'music_album' => '',
      'music_listen' => 62465,
      'music_track_id' => 0,
      'music_filename' => '1345091-e57d1a74.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Đêm nay trăng soi thôn trang
Gió đưa gió đưa nhịp chảy vang 
Trăng đến vui thôn làng cho nặng tình yêu thương.

Êm êm trên sông ven thôn
Gió đưa gió đưa giọng hò khoan hò khoan
Nghe sóng vỗ mạn...',
      'music_artist_html' => '<a href="/ca-si/Nhu-Quynh~Y3NuX2FydGlzdH4zMg==.html">Như Quỳnh</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1350761,
      'music_title_url' => 'ten-toi-viet-nam~hoang-ton-ffboiz-o-plus-hoang-',
      'music_title' => 'Tên Tôi Việt Nam',
      'music_artist' => 'Hoàng Tôn;FFBoiz;O Plus;Hoàng Yến Chibi;Bảo Kun;Hoà Minzy;Uyên Nguyên;Hà Lê',
      'music_artist_id' => '707;53397;53398;4578;4144;4577;50707;4277',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538917986,
      'music_last_update_time' => 1409715667,
      'music_title_search' => 'ten toi vit 5',
      'music_artist_search' => '; hoang ton; fboiz; o plux; hoang in chibi; bao kun; hoa minzi; in ngin; ha le;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Tôn; Phúc Bồ',
      'music_album' => '',
      'music_listen' => 43502,
      'music_track_id' => 0,
      'music_filename' => '1350761-68b5d6a3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ah... Yêu con người Việt Nam
Tôi yêu lắm cái chất của con người Việt Nam
Oh... oh... oh... eh...
For my FB Boiz
Hello Việt Nam.

Cứ mỗi sáng thức giấc tôi ra đường
Đón lấy những ánh nắng như chan h...',
      'music_artist_html' => '<a href="/ca-si/Hoang-Ton~Y3NuX2FydGlzdH43MDc=.html">Hoàng Tôn</a>, <a href="/ca-si/FFBoiz~Y3NuX2FydGlzdH41MzM5Nw==.html">FFBoiz</a>, <a href="/ca-si/O-Plus~Y3NuX2FydGlzdH41MzM5OA==.html">O Plus</a>, <a href="/ca-si/Hoang-Yen-Chibi~Y3NuX2FydGlzdH40NTc4.html">Hoàng Yến Chibi</a>, <a href="/ca-si/Bao-Kun~Y3NuX2FydGlzdH40MTQ0.html">Bảo Kun</a>, <a href="/ca-si/Hoa-Minzy~Y3NuX2FydGlzdH40NTc3.html">Hoà Minzy</a>, <a href="/ca-si/Uyen-Nguyen~Y3NuX2FydGlzdH41MDcwNw==.html">Uyên Nguyên</a>, <a href="/ca-si/Ha-Le~Y3NuX2FydGlzdH40Mjc3.html">Hà Lê</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1374270,
      'music_title_url' => 'ai-cung-co-ngay-xua~bui-anh-tuan',
      'music_title' => 'Ai Cũng Có Ngày Xưa',
      'music_artist' => 'Bùi Anh Tuấn',
      'music_artist_id' => '2552',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538907466,
      'music_last_update_time' => 1412384678,
      'music_title_search' => 'ai cung co ngai xua',
      'music_artist_search' => '; bui em tuan;',
      'music_album_search' => '',
      'music_composer' => 'Phan Mạnh Quỳnh',
      'music_album' => '',
      'music_listen' => 5016,
      'music_track_id' => 0,
      'music_filename' => '1374270-ad99ef6e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Dòng tin đăng quê hương tôi nay đang bão
Gió lớn cuốn mấy mái ngói bay
Nước cũng sắp cao ngang đầu
Chiều nay ai mang thêm bao nhiêu lo lắng 
Chẳng biết sẽ có chỗ trú thân
Hay thức trắng với cơn...',
      'music_artist_html' => '<a href="/ca-si/Bui-Anh-Tuan~Y3NuX2FydGlzdH4yNTUy.html">Bùi Anh Tuấn</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1434338,
      'music_title_url' => 'co-ua-live~dan-nguyen-nguyen-hong-nhung',
      'music_title' => 'Cỏ Úa (Live)',
      'music_artist' => 'Đan Nguyên;Nguyễn Hồng Nhung',
      'music_artist_id' => '2347;2516',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538964418,
      'music_last_update_time' => 1419931670,
      'music_title_search' => 'co ua; live',
      'music_artist_search' => '; dan ngin; ngin hong nhung;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương',
      'music_album' => '',
      'music_listen' => 68180,
      'music_track_id' => 0,
      'music_filename' => '1434338-9871ae05.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Còn nhớ tên nhau xin gọi trong giấc mộng 
Còn chút thương yêu xin đưa vào dư âm 
Có phải còn yêu vì đôi lần thầm nhớ 
Mình đã thật quên cớ sao lòng vẫn chờ. 

Từ lúc em đi trong rượu cay men nồng...',
      'music_artist_html' => '<a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>, <a href="/ca-si/Nguyen-Hong-Nhung~Y3NuX2FydGlzdH4yNTE2.html">Nguyễn Hồng Nhung</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1206379,
      'music_title_url' => 'duyen-kiep~anh-dung-giang-tien',
      'music_title' => 'Duyên Kiếp',
      'music_artist' => 'Anh Dũng;Giáng Tiên',
      'music_artist_id' => '8765;2355',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538630015,
      'music_last_update_time' => 1390444980,
      'music_title_search' => 'din kip',
      'music_artist_search' => '; em dung; dang tin;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương',
      'music_album' => '',
      'music_listen' => 35669,
      'music_track_id' => 0,
      'music_filename' => '1206379-d97e6c58.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Em ơi nếu mộng không thành thì sao
Non cao đất rộng biết đâu mà tìm
Đường đời mịt mờ vạn nẻo về đâu
Mong chờ duyên kiếp đưa lối bắc cầu.

Em ơi nhắc lại phút xưa gặp nhau
Trên đê vắng người lúc tan...',
      'music_artist_html' => '<a href="/ca-si/Anh-Dung~Y3NuX2FydGlzdH44NzY1.html">Anh Dũng</a>, <a href="/ca-si/Giang-Tien~Y3NuX2FydGlzdH4yMzU1.html">Giáng Tiên</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1261492,
      'music_title_url' => 'con-duong-mang-ten-em~dan-nguyen-y-phung',
      'music_title' => 'Con Đường Mang Tên Em',
      'music_artist' => 'Đan Nguyên;Y Phụng',
      'music_artist_id' => '2347;6767',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538902424,
      'music_last_update_time' => 1397990245,
      'music_title_search' => 'con dung mang ten em',
      'music_artist_search' => '; dan ngin; i phung;',
      'music_album_search' => '',
      'music_composer' => 'Trúc Phương',
      'music_album' => '',
      'music_listen' => 205718,
      'music_track_id' => 0,
      'music_filename' => '1261492-ac054d84.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Trở lại chuyện hai chúng mình
Khi em với anh vừa biết đam mê
Tình yêu tràn trề
Đường mòn đêm vắng bước chân em nhớ tên.

Rồi thời gian qua lối này
Khi tay trắng tay, buồn vắt lên vai
Hành trang đườ...',
      'music_artist_html' => '<a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>, <a href="/ca-si/Y-Phung~Y3NuX2FydGlzdH42NzY3.html">Y Phụng</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1328362,
      'music_title_url' => 'sao-no-minh-oi~duong-ngoc-thai',
      'music_title' => 'Sao Nỡ Mình Ơi',
      'music_artist' => 'Dương Ngọc Thái',
      'music_artist_id' => '741',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538852381,
      'music_last_update_time' => 1406597691,
      'music_title_search' => 'xao no minh oi',
      'music_artist_search' => '; dung ngoc thai;',
      'music_album_search' => '',
      'music_composer' => 'Sơn Hạ',
      'music_album' => '',
      'music_listen' => 32749,
      'music_track_id' => 0,
      'music_filename' => '1328362-70b0a18a.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Đêm buồn lẻ bóng mình tôi
Tình nỡ lìa đôi vì người ta đã phụ tôi rồi
Chăn gối lạnh lùng, duyên nồng hai đứa
Tiếng yêu ban đầu… sao nỡ phụ nhau.

Vợ chồng vẹn chữ đợi mong
Người đã bội vong em sang...',
      'music_artist_html' => '<a href="/ca-si/Duong-Ngoc-Thai~Y3NuX2FydGlzdH43NDE=.html">Dương Ngọc Thái</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1328870,
      'music_title_url' => 'dung-noi-xa-nhau~dan-nguyen-hoang-thuc-linh',
      'music_title' => 'Đừng Nói Xa Nhau',
      'music_artist' => 'Đan Nguyên;Hoàng Thục Linh',
      'music_artist_id' => '2347;13153',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538754101,
      'music_last_update_time' => 1406684364,
      'music_title_search' => 'dung noi xa nhau',
      'music_artist_search' => '; dan ngin; hoang thuc linh;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kỳ; Hồ Đình Phương',
      'music_album' => '',
      'music_listen' => 351081,
      'music_track_id' => 0,
      'music_filename' => '1328870-3a827536.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Đừng nói xa nhau cho tâm hồn đau khổ
Đừng nói xa nhau cho mắt lệ hoen mờ
Lời thiết tha qua tâm tư tròn mộng tròn mơ
Vết tình khắc lên môi đưa mấy tuổi yêu vẫn chờ.

Mình đã đi chung trên con đường...',
      'music_artist_html' => '<a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>, <a href="/ca-si/Hoang-Thuc-Linh~Y3NuX2FydGlzdH4xMzE1Mw==.html">Hoàng Thục Linh</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1331461,
      'music_title_url' => 'lien-khuc-tinh-bo-vo-dung-noi-xa-nhau~ha-thanh-xuan-dan-nguyen-hoang-thuc-linh',
      'music_title' => 'Liên Khúc: Tình Bơ Vơ; Đừng Nói Xa Nhau',
      'music_artist' => 'Hà Thanh Xuân;Đan Nguyên;Hoàng Thục Linh',
      'music_artist_id' => '7393;2347;13153',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538487960,
      'music_last_update_time' => 1407051113,
      'music_title_search' => 'lin khuc; tinh bo vo; dung noi xa nhau',
      'music_artist_search' => '; ha thanh xuan; dan ngin; hoang thuc linh;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương; Châu Kỳ; Hồ Đình Phương',
      'music_album' => '',
      'music_listen' => 384862,
      'music_track_id' => 0,
      'music_filename' => '1331461-4f8a4d3a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Tình Bơ Vơ]

Càng nhìn em yêu em hơn 
Và yêu em mãi 
Dù phút êm đềm xa xưa 
Nay đã đi vào quên lãng. 

Trời vào thu Việt Nam buồn lắm anh ơi 
Mây tím đang dâng cao vời 
Mà tình yêu chưa lên ngôi....',
      'music_artist_html' => '<a href="/ca-si/Ha-Thanh-Xuan~Y3NuX2FydGlzdH43Mzkz.html">Hà Thanh Xuân</a>, <a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>, <a href="/ca-si/Hoang-Thuc-Linh~Y3NuX2FydGlzdH4xMzE1Mw==.html">Hoàng Thục Linh</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1344423,
      'music_title_url' => 'nhung-loi-doi-gian~ngo-quoc-linh',
      'music_title' => 'Những Lời Dối Gian',
      'music_artist' => 'Ngô Quốc Linh',
      'music_artist_id' => '2284',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538912796,
      'music_last_update_time' => 1408759251,
      'music_title_search' => 'nhung loi doi dan',
      'music_artist_search' => '; ngo quc linh;',
      'music_album_search' => '',
      'music_composer' => 'Lời: Khúc Lan',
      'music_album' => '',
      'music_listen' => 7985,
      'music_track_id' => 0,
      'music_filename' => '1344423-d41b9128.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Đã đến lúc nói lên câu giã từ đường tình yêu hai lối đi
Để rồi em xem như hai chúng ta chưa bao giờ quen
Nếu lúc trước tiếng yêu không nói được mộng mơ kia không giữ lâu
Thì ngày nay đi trên con ph...',
      'music_artist_html' => '<a href="/ca-si/Ngo-Quoc-Linh~Y3NuX2FydGlzdH4yMjg0.html">Ngô Quốc Linh</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1347752,
      'music_title_url' => 'lien-khuc-cho-ai-di-ngoai-suong-gio~nguyen-hung-ngoc-anh',
      'music_title' => 'Liên Khúc: Chờ; Ai Đi Ngoài Sương Gió',
      'music_artist' => 'Nguyễn Hưng;Ngọc Anh',
      'music_artist_id' => '26;36',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538605351,
      'music_last_update_time' => 1409151336,
      'music_title_search' => 'lin khuc; cho; ai di ngoai xung do',
      'music_artist_search' => '; ngin hung; ngoc em;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương; Nguyễn Hữu Thiết',
      'music_album' => '',
      'music_listen' => 32983,
      'music_track_id' => 0,
      'music_filename' => '1347752-34896670.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Chờ]

Bài nhạc sầu
Là cơn đau của những đêm xa nhà
Là nuối tiếc cho ngày qua
Xa thời niên thiếu 
Nghe lòng buồn trong tình chăn chiếu. 

Bài nhạc sầu
Gửi cho em trong những đêm cô phòng
Giòng nước...',
      'music_artist_html' => '<a href="/ca-si/Nguyen-Hung~Y3NuX2FydGlzdH4yNg==.html">Nguyễn Hưng</a>, <a href="/ca-si/Ngoc-Anh~Y3NuX2FydGlzdH4zNg==.html">Ngọc Anh</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1396892,
      'music_title_url' => 'hat-cho-nguoi-tinh-nho~cam-ly',
      'music_title' => 'Hát Cho Người Tình Nhớ',
      'music_artist' => 'Cẩm Ly',
      'music_artist_id' => '198',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538579759,
      'music_last_update_time' => 1415014976,
      'music_title_search' => 'hat cho ngui tinh nho',
      'music_artist_search' => '; cam li;',
      'music_album_search' => '',
      'music_composer' => 'Vũ Quốc Việt',
      'music_album' => '',
      'music_listen' => 25626,
      'music_track_id' => 0,
      'music_filename' => '1396892-21f5aabc.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Em vẫn mãi còn yêu như em đã từng yêu
Dẫu anh là &quot;mộng hay xa xăm cuối trời
Mưa giăng vẫn về đây đêm trăng vẫn còn đây
Dẫu em ngồi lại hay bước đi về chốn xa
Em cất bước về đâu khi đêm đã chìm...',
      'music_artist_html' => '<a href="/ca-si/Cam-Ly~Y3NuX2FydGlzdH4xOTg=.html">Cẩm Ly</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1412240,
      'music_title_url' => 'bai-ca-thit-nuong~hari-won',
      'music_title' => 'Bài Ca Thịt Nướng',
      'music_artist' => 'Hari Won',
      'music_artist_id' => '3971',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538650252,
      'music_last_update_time' => 1416966522,
      'music_title_search' => 'bai ca thit nung',
      'music_artist_search' => '; hari won;',
      'music_album_search' => '',
      'music_composer' => 'Phạm Toàn Thắng',
      'music_album' => '',
      'music_listen' => 163626,
      'music_track_id' => 0,
      'music_filename' => '1412240-3b274891.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Hari-Won~Y3NuX2FydGlzdH4zOTcx.html">Hari Won</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1457164,
      'music_title_url' => 'biet-noi-gi-day~tuan-vu-thanh-tuyen',
      'music_title' => 'Biết Nói Gì Đây',
      'music_artist' => 'Tuấn Vũ;Thanh Tuyền',
      'music_artist_id' => '5236;4009',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538895867,
      'music_last_update_time' => 1423659641,
      'music_title_search' => 'bit noi d dai',
      'music_artist_search' => '; tuan vu; thanh tin;',
      'music_album_search' => '',
      'music_composer' => 'Huỳnh Anh',
      'music_album' => '',
      'music_listen' => 124458,
      'music_track_id' => 0,
      'music_filename' => '1457164-5bc9d1aa.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Biết nói gì đây khi hai đường đời ngăn chia mình rồi
Bao nhiêu thương nhớ bao nhiêu đợi chờ, chưa hoen lối đi
Đêm đêm em nhắn gió, gởi mây về cho anh
Trao cho anh tiếng hát, tìm thương nhau ngày ấy...',
      'music_artist_html' => '<a href="/ca-si/Tuan-Vu~Y3NuX2FydGlzdH41MjM2.html">Tuấn Vũ</a>, <a href="/ca-si/Thanh-Tuyen~Y3NuX2FydGlzdH40MDA5.html">Thanh Tuyền</a>',
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1238911,
      'music_title_url' => 'red-lights~tiesto',
      'music_title' => 'Red Lights',
      'music_artist' => 'Tiesto',
      'music_artist_id' => '6788',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538545963,
      'music_last_update_time' => 1470797299,
      'music_title_search' => 'red lightx',
      'music_artist_search' => '; tixto;',
      'music_album_search' => '',
      'music_composer' => 'Wayne Hector; Carl Falk; Michel Zitron; Rami Yacoub; Tijs Verwest; Måns Wredenberg',
      'music_album' => '',
      'music_listen' => 12319,
      'music_track_id' => 0,
      'music_filename' => '1238911-95cb50bf.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Blacked out
Everything faded on your love
I\'m already wasted so close
That I can taste it now… now.

So let\'s break right out of these guilty cages
We\'re going to make it now
Don\'t ever turn around...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1404080,
      'music_title_url' => 'outside~calvin-harris-ellie-goulding',
      'music_title' => 'Outside',
      'music_artist' => 'Calvin Harris;Ellie Goulding',
      'music_artist_id' => '2474;3787',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538874697,
      'music_last_update_time' => 1479284422,
      'music_title_search' => 'outxide',
      'music_artist_search' => '; calvin harix; eli goulding;',
      'music_album_search' => '',
      'music_composer' => 'Calvin Harris',
      'music_album' => '',
      'music_listen' => 41653,
      'music_track_id' => 0,
      'music_filename' => '1404080-4f29984e.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Look at what you\'ve done
Stand still, fallin\' away from me
When it takes so long
Fire\'s out, what do you want to be?

[Pre-Chorus:]
I\'m holdidn\' on
Myself was never enough for me
Gotta be so str...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1248300,
      'music_title_url' => 'guy~lady-gaga',
      'music_title' => 'G.U.Y',
      'music_artist' => 'Lady Gaga',
      'music_artist_id' => '1323',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538767004,
      'music_last_update_time' => 1401119456,
      'music_title_search' => 'g u i',
      'music_artist_search' => '; ladi gaga;',
      'music_album_search' => '',
      'music_composer' => 'Lady Gaga; Zedd',
      'music_album' => '',
      'music_listen' => 27249,
      'music_track_id' => 0,
      'music_filename' => '1248300-2d100972.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
Greetings Himeros
God of sexual desire, son of Aphrodite
Lay back, and feast as this audio guides you through new and exciting positions

[Verse 1:]
I wanna be the girl under you (oh yeah)...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1275627,
      'music_title_url' => 'dare-la-la-la~shakira',
      'music_title' => 'Dare (La La La)',
      'music_artist' => 'Shakira',
      'music_artist_id' => '112',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538877465,
      'music_last_update_time' => 1401113399,
      'music_title_search' => 'dare; la la la',
      'music_artist_search' => '; thakira;',
      'music_album_search' => '',
      'music_composer' => 'Shakira; Jay Singh; Lukasz Gottwald; Mathieu Jomphe-Lepine; Max Martin; Henry Walter; Raelene Arreguin; John J.; Conte, Jr.',
      'music_album' => '',
      'music_listen' => 62016,
      'music_track_id' => 0,
      'music_filename' => '1275627-97199ddd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hola!

La la la la la
La la la la la
La la la la la la
La la la.

La la la la la
La la la la la
La la la la la la
I dare you.

(Leggo, leggo, leggo, leggo)

All of my life, too late
Till you showed...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1362179,
      'music_title_url' => 'booty~jennifer-lopez-iggy-azalea',
      'music_title' => 'Booty',
      'music_artist' => 'Jennifer Lopez;Iggy Azalea',
      'music_artist_id' => '70;4536',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538455150,
      'music_last_update_time' => 1411149123,
      'music_title_search' => 'boti',
      'music_artist_search' => '; jenifer lopez; igi azalea;',
      'music_album_search' => '',
      'music_composer' => 'Jennifer Lopez; Rooney; Benny Medina; Chris Brown; Asia Bryant; Pitbull; Thomas Wesley Pentz; Lewis D. Gittus; Tedra Renee Wilson; Danny Omerhodic',
      'music_album' => '',
      'music_listen' => 103293,
      'music_track_id' => 0,
      'music_filename' => '1362179-b988cccd.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Big, big booty
What you got a big booty
Big, big booty
What you got a big booty
Big, big booty
What you got a big booty
Big, big booty
What you.

Have you seen her on the dancefloor
She got the boo...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1385772,
      'music_title_url' => 'i-dont-want-to-change-you~damien-rice',
      'music_title' => 'I Don\'t Want To Change You',
      'music_artist' => 'Damien Rice',
      'music_artist_id' => '1139',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538940016,
      'music_last_update_time' => 1413770416,
      'music_title_search' => 'i don t want to change iou',
      'music_artist_search' => '; damin rice;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2861,
      'music_track_id' => 0,
      'music_filename' => '1385772-579eb3bd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wherever you go, I can always follow
I can feed this real slow, if it\'s a lot to swallow
If you just wanna be alone, I can wait without waiting
If you want me to let this go, I am more than willing...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1391005,
      'music_title_url' => 'young-again~hardwell-chris-jones',
      'music_title' => 'Young Again',
      'music_artist' => 'Hardwell;Chris Jones',
      'music_artist_id' => '14986;28359',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538659022,
      'music_last_update_time' => 1471859062,
      'music_title_search' => 'ioung again',
      'music_artist_search' => '; hardwel; chrix jonex;',
      'music_album_search' => '',
      'music_composer' => 'Hardwell; Chris Jones',
      'music_album' => '',
      'music_listen' => 10115,
      'music_track_id' => 0,
      'music_filename' => '1391005-0049a5e2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. When i was a boy
I dreamed of a place in the sky
Playing in the fields
Battling with my shields
Bows made out of twine.

I wish i could see this world again
Through those eyes
See the child in m...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1424357,
      'music_title_url' => 'uptown-funk~mark-ronson-bruno-mars',
      'music_title' => 'Uptown Funk',
      'music_artist' => 'Mark Ronson;Bruno Mars',
      'music_artist_id' => '695;2001',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538937598,
      'music_last_update_time' => 1471487949,
      'music_title_search' => 'uptown funk',
      'music_artist_search' => '; mark ronxon; bruno marx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 114478,
      'music_track_id' => 0,
      'music_filename' => '1424357-33044a1c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'This hit 
That ice cold 
Michelle Pfeiffer
That white gold
This one, for them hood girls
Them good girls
Straight masterpieces 
Stylin\', while in
Livin\' it up in the city
Got Chucks on with Saint L...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1453088,
      'music_title_url' => 'ayo~chris-brown-tyga',
      'music_title' => 'Ayo',
      'music_artist' => 'Chris Brown;Tyga',
      'music_artist_id' => '588;3225',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538927301,
      'music_last_update_time' => 1422979138,
      'music_title_search' => 'aio',
      'music_artist_search' => '; chrix brown; tiga;',
      'music_album_search' => '',
      'music_composer' => 'Chris Brown; Michael Ray Nguyen-Stevenson; Mark Kragen; Nicholas Balding; Jess Jackson',
      'music_album' => '',
      'music_listen' => 14265,
      'music_track_id' => 0,
      'music_filename' => '1453088-5cb7f289.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Intro:]
I need you (x8)

[Hook: Chris Brown]
We poppin\' like ayo
All my bitches got real hair chilling with the top down
Screaming like ayo
I\'mma take her ass down when she bring her friend around...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1492897,
      'music_title_url' => 'sun-goes-down~robin-schulz-jasmine-thompson',
      'music_title' => 'Sun Goes Down',
      'music_artist' => 'Robin Schulz;Jasmine Thompson',
      'music_artist_id' => '16852;35904',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538613594,
      'music_last_update_time' => 1473844021,
      'music_title_search' => 'xun goex down',
      'music_artist_search' => '; robin xchulz; jaxmine thompxon;',
      'music_album_search' => '',
      'music_composer' => 'Robin Schulz; Tom Havelock',
      'music_album' => '',
      'music_listen' => 2320,
      'music_track_id' => 0,
      'music_filename' => '1492897-ed3782fb.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Nothing\'s ever what we expect
But they keep asking where we\'re going next
All we\'re chasing is the sunset
Got my mind on you.

Doesn\'t matter where we are are are are
Doesn\'t matter where we are ar...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1510454,
      'music_title_url' => 'look-at-me-now~charlie-puth',
      'music_title' => 'Look At Me Now',
      'music_artist' => 'Charlie Puth',
      'music_artist_id' => '13568',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538449712,
      'music_last_update_time' => 1435123228,
      'music_title_search' => 'lok at me now',
      'music_artist_search' => '; charli puth;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5392,
      'music_track_id' => 0,
      'music_filename' => '1510454-e193e16d.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. I said this time next year
Imma be the one who do
Everything and more you said
I couldn\'t do
This one is for you
This time next year
I\'m gonna be stronger
A little bit taller
Top is my only view...',
    ),
    11 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1699502,
      'music_title_url' => 'young-and-beautiful~fifth-harmony',
      'music_title' => 'Young And Beautiful',
      'music_artist' => 'Fifth Harmony',
      'music_artist_id' => '15680',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538956521,
      'music_last_update_time' => 1470576654,
      'music_title_search' => 'ioung and beautiful',
      'music_artist_search' => '; fifth harmoni;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1697,
      'music_track_id' => 0,
      'music_filename' => '1699502-e0b9a765.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'We are, we are, the young and the beautiful
We\'re alive tonight, tonight.

Flying high like an airplane
Burning stars in the Milky Way
I\'m tired cause we never say
Never, never, no no
Lovers come a...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1213102,
      'music_title_url' => 'crackin-martin-garrix-edit~bassjackers',
      'music_title' => 'Crackin (Martin Garrix Edit)',
      'music_artist' => 'Bassjackers',
      'music_artist_id' => '17855',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538729875,
      'music_last_update_time' => 1403318412,
      'music_title_search' => 'crackin; martin garix edit',
      'music_artist_search' => '; baxjackerx;',
      'music_album_search' => '',
      'music_composer' => 'Bassjackers',
      'music_album' => '',
      'music_listen' => 3690,
      'music_track_id' => 0,
      'music_filename' => '1213102-75d58952.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1221235,
      'music_title_url' => 'let-it-go-hoa-tau~the-piano-guys',
      'music_title' => 'Let It Go (Hoà Tấu)',
      'music_artist' => 'The Piano Guys',
      'music_artist_id' => '3802',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538792543,
      'music_last_update_time' => 1399974726,
      'music_title_search' => 'let it go; hoa tau',
      'music_artist_search' => '; the piano gix;',
      'music_album_search' => '',
      'music_composer' => 'Kristen Anderson-Lopez; Robert Lopez',
      'music_album' => '',
      'music_listen' => 28750,
      'music_track_id' => 0,
      'music_filename' => '1221235-4957a924.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
The snow blows white on the mountain tonight
Not a footprint to be seen
A kingdom of isolation and it looks like I\'m the Queen
The wind is howling like the swirling storm inside
Couldn\'t...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1252095,
      'music_title_url' => 'summer~calvin-harris',
      'music_title' => 'Summer',
      'music_artist' => 'Calvin Harris',
      'music_artist_id' => '2474',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505905,
      'music_last_update_time' => 1482462642,
      'music_title_search' => 'xumer',
      'music_artist_search' => '; calvin harix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 42346,
      'music_track_id' => 0,
      'music_filename' => '1252095-62d0be5a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'When I met you in the summer
Took my heart a beat sound
We fell in love
As they leaves turned brown
And we could be together baby
Long the skies are blue
You act so innocent now
But you like so soo...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1331689,
      'music_title_url' => 'ultraviolence~lana-del-rey',
      'music_title' => 'Ultraviolence',
      'music_artist' => 'Lana Del Rey',
      'music_artist_id' => '3317',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505314,
      'music_last_update_time' => 1486353129,
      'music_title_search' => 'ulchaviolence',
      'music_artist_search' => '; lana del rei;',
      'music_album_search' => '',
      'music_composer' => 'Lana Del Rey; Daniel Heath',
      'music_album' => '',
      'music_listen' => 3696,
      'music_track_id' => 0,
      'music_filename' => '1331689-ad900946.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. He used to call me DN
It stood for deadly nightshade
Cause I was filled with poison
But blessed with beauty and rage
Jim told me that he hit me 
and it felt like a kiss
Jim brought me back
Remin...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1362928,
      'music_title_url' => 'fireball~pitbull-john-ryan',
      'music_title' => 'Fireball',
      'music_artist' => 'Pitbull;John Ryan',
      'music_artist_id' => '1814;33484',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538762754,
      'music_last_update_time' => 1510732253,
      'music_title_search' => 'firebal',
      'music_artist_search' => '; pitbul; john rian;',
      'music_album_search' => '',
      'music_composer' => 'John Ryan; Axident; Ricky Reed; Joe London',
      'music_album' => '',
      'music_listen' => 12302,
      'music_track_id' => 0,
      'music_filename' => '1362928-0248b4f9.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Mr. Worldwide to infinity
You know the roof on fire
We gon\' boogie oogie oggi, jiggle, wiggle and dance
Like the roof on fire
We gon\' drink drinks and take shots until we fall out
Like the roof on...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1385774,
      'music_title_url' => 'till-its-gone~yelawolf',
      'music_title' => 'Till It\'s Gone',
      'music_artist' => 'Yelawolf',
      'music_artist_id' => '2580',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538533369,
      'music_last_update_time' => 1413768840,
      'music_title_search' => 'til it x gone',
      'music_artist_search' => '; ilawolf;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2871,
      'music_track_id' => 0,
      'music_filename' => '1385774-12342815.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
I\'m not the table you can come and lay your cup down on, now
I\'m not the shoulder for a bag. The one that carried a heavy load
I\'m not the road that you take when you looking for a short...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1506696,
      'music_title_url' => 'i-think-im-in-love~kat-dahlia',
      'music_title' => 'I Think I\'m In Love',
      'music_artist' => 'Kat Dahlia',
      'music_artist_id' => '36084',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538564214,
      'music_last_update_time' => 1434329335,
      'music_title_search' => 'i think i m in love',
      'music_artist_search' => '; kat dahlia;',
      'music_album_search' => '',
      'music_composer' => 'Kat Dahlia; Justin Anthony DeSantis; Jon Levine',
      'music_album' => '',
      'music_listen' => 8319,
      'music_track_id' => 0,
      'music_filename' => '1506696-9237add9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Time\'s been ticking, hearts are runnin\'
Think that Cupid\'s up to somethin\'
You asked me how I feel, I say nothin\'
But lately color seems so bright
And the stars light up the night
My feet they feel...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1613567,
      'music_title_url' => 'often-nsfw~the-weeknd',
      'music_title' => 'Often (NSFW)',
      'music_artist' => 'The Weeknd',
      'music_artist_id' => '14618',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505006,
      'music_last_update_time' => 1498452799,
      'music_title_search' => 'often; nxfw',
      'music_artist_search' => '; the weknd;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 590,
      'music_track_id' => 1,
      'music_filename' => '1613567-7ab10570.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
&quot;Seneler sürer her günüm&quot;
Ooh yeah, ooh yeah, ooh yeah, ooh yeah, ooh yeah
&quot;Yalnız gitmekten yorgunum&quot;
Ooh yeah, ooh yeah, ooh yeah, ooh yeah
&quot;Seneler sürer her gü...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1238911,
      'music_title_url' => 'red-lights~tiesto',
      'music_title' => 'Red Lights',
      'music_artist' => 'Tiesto',
      'music_artist_id' => '6788',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538545963,
      'music_last_update_time' => 1470797299,
      'music_title_search' => 'red lightx',
      'music_artist_search' => '; tixto;',
      'music_album_search' => '',
      'music_composer' => 'Wayne Hector; Carl Falk; Michel Zitron; Rami Yacoub; Tijs Verwest; Måns Wredenberg',
      'music_album' => '',
      'music_listen' => 12319,
      'music_track_id' => 0,
      'music_filename' => '1238911-95cb50bf.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Blacked out
Everything faded on your love
I\'m already wasted so close
That I can taste it now… now.

So let\'s break right out of these guilty cages
We\'re going to make it now
Don\'t ever turn around...',
      'music_artist_html' => '<a href="/ca-si/Tiesto~Y3NuX2FydGlzdH42Nzg4.html">Tiesto</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1404080,
      'music_title_url' => 'outside~calvin-harris-ellie-goulding',
      'music_title' => 'Outside',
      'music_artist' => 'Calvin Harris;Ellie Goulding',
      'music_artist_id' => '2474;3787',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538874697,
      'music_last_update_time' => 1479284422,
      'music_title_search' => 'outxide',
      'music_artist_search' => '; calvin harix; eli goulding;',
      'music_album_search' => '',
      'music_composer' => 'Calvin Harris',
      'music_album' => '',
      'music_listen' => 41653,
      'music_track_id' => 0,
      'music_filename' => '1404080-4f29984e.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Look at what you\'ve done
Stand still, fallin\' away from me
When it takes so long
Fire\'s out, what do you want to be?

[Pre-Chorus:]
I\'m holdidn\' on
Myself was never enough for me
Gotta be so str...',
      'music_artist_html' => '<a href="/ca-si/Calvin-Harris~Y3NuX2FydGlzdH4yNDc0.html">Calvin Harris</a>, <a href="/ca-si/Ellie-Goulding~Y3NuX2FydGlzdH4zNzg3.html">Ellie Goulding</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1248300,
      'music_title_url' => 'guy~lady-gaga',
      'music_title' => 'G.U.Y',
      'music_artist' => 'Lady Gaga',
      'music_artist_id' => '1323',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538767004,
      'music_last_update_time' => 1401119456,
      'music_title_search' => 'g u i',
      'music_artist_search' => '; ladi gaga;',
      'music_album_search' => '',
      'music_composer' => 'Lady Gaga; Zedd',
      'music_album' => '',
      'music_listen' => 27249,
      'music_track_id' => 0,
      'music_filename' => '1248300-2d100972.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
Greetings Himeros
God of sexual desire, son of Aphrodite
Lay back, and feast as this audio guides you through new and exciting positions

[Verse 1:]
I wanna be the girl under you (oh yeah)...',
      'music_artist_html' => '<a href="/ca-si/Lady-Gaga~Y3NuX2FydGlzdH4xMzIz.html">Lady Gaga</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1275627,
      'music_title_url' => 'dare-la-la-la~shakira',
      'music_title' => 'Dare (La La La)',
      'music_artist' => 'Shakira',
      'music_artist_id' => '112',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538877465,
      'music_last_update_time' => 1401113399,
      'music_title_search' => 'dare; la la la',
      'music_artist_search' => '; thakira;',
      'music_album_search' => '',
      'music_composer' => 'Shakira; Jay Singh; Lukasz Gottwald; Mathieu Jomphe-Lepine; Max Martin; Henry Walter; Raelene Arreguin; John J.; Conte, Jr.',
      'music_album' => '',
      'music_listen' => 62016,
      'music_track_id' => 0,
      'music_filename' => '1275627-97199ddd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hola!

La la la la la
La la la la la
La la la la la la
La la la.

La la la la la
La la la la la
La la la la la la
I dare you.

(Leggo, leggo, leggo, leggo)

All of my life, too late
Till you showed...',
      'music_artist_html' => '<a href="/ca-si/Shakira~Y3NuX2FydGlzdH4xMTI=.html">Shakira</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1362179,
      'music_title_url' => 'booty~jennifer-lopez-iggy-azalea',
      'music_title' => 'Booty',
      'music_artist' => 'Jennifer Lopez;Iggy Azalea',
      'music_artist_id' => '70;4536',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538455150,
      'music_last_update_time' => 1411149123,
      'music_title_search' => 'boti',
      'music_artist_search' => '; jenifer lopez; igi azalea;',
      'music_album_search' => '',
      'music_composer' => 'Jennifer Lopez; Rooney; Benny Medina; Chris Brown; Asia Bryant; Pitbull; Thomas Wesley Pentz; Lewis D. Gittus; Tedra Renee Wilson; Danny Omerhodic',
      'music_album' => '',
      'music_listen' => 103293,
      'music_track_id' => 0,
      'music_filename' => '1362179-b988cccd.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Big, big booty
What you got a big booty
Big, big booty
What you got a big booty
Big, big booty
What you got a big booty
Big, big booty
What you.

Have you seen her on the dancefloor
She got the boo...',
      'music_artist_html' => '<a href="/ca-si/Jennifer-Lopez~Y3NuX2FydGlzdH43MA==.html">Jennifer Lopez</a>, <a href="/ca-si/Iggy-Azalea~Y3NuX2FydGlzdH40NTM2.html">Iggy Azalea</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1385772,
      'music_title_url' => 'i-dont-want-to-change-you~damien-rice',
      'music_title' => 'I Don\'t Want To Change You',
      'music_artist' => 'Damien Rice',
      'music_artist_id' => '1139',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538940016,
      'music_last_update_time' => 1413770416,
      'music_title_search' => 'i don t want to change iou',
      'music_artist_search' => '; damin rice;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2861,
      'music_track_id' => 0,
      'music_filename' => '1385772-579eb3bd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wherever you go, I can always follow
I can feed this real slow, if it\'s a lot to swallow
If you just wanna be alone, I can wait without waiting
If you want me to let this go, I am more than willing...',
      'music_artist_html' => '<a href="/ca-si/Damien-Rice~Y3NuX2FydGlzdH4xMTM5.html">Damien Rice</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1391005,
      'music_title_url' => 'young-again~hardwell-chris-jones',
      'music_title' => 'Young Again',
      'music_artist' => 'Hardwell;Chris Jones',
      'music_artist_id' => '14986;28359',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538659022,
      'music_last_update_time' => 1471859062,
      'music_title_search' => 'ioung again',
      'music_artist_search' => '; hardwel; chrix jonex;',
      'music_album_search' => '',
      'music_composer' => 'Hardwell; Chris Jones',
      'music_album' => '',
      'music_listen' => 10115,
      'music_track_id' => 0,
      'music_filename' => '1391005-0049a5e2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. When i was a boy
I dreamed of a place in the sky
Playing in the fields
Battling with my shields
Bows made out of twine.

I wish i could see this world again
Through those eyes
See the child in m...',
      'music_artist_html' => '<a href="/ca-si/Hardwell~Y3NuX2FydGlzdH4xNDk4Ng==.html">Hardwell</a>, <a href="/ca-si/Chris-Jones~Y3NuX2FydGlzdH4yODM1OQ==.html">Chris Jones</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1424357,
      'music_title_url' => 'uptown-funk~mark-ronson-bruno-mars',
      'music_title' => 'Uptown Funk',
      'music_artist' => 'Mark Ronson;Bruno Mars',
      'music_artist_id' => '695;2001',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538937598,
      'music_last_update_time' => 1471487949,
      'music_title_search' => 'uptown funk',
      'music_artist_search' => '; mark ronxon; bruno marx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 114478,
      'music_track_id' => 0,
      'music_filename' => '1424357-33044a1c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'This hit 
That ice cold 
Michelle Pfeiffer
That white gold
This one, for them hood girls
Them good girls
Straight masterpieces 
Stylin\', while in
Livin\' it up in the city
Got Chucks on with Saint L...',
      'music_artist_html' => '<a href="/ca-si/Mark-Ronson~Y3NuX2FydGlzdH42OTU=.html">Mark Ronson</a>, <a href="/ca-si/Bruno-Mars~Y3NuX2FydGlzdH4yMDAx.html">Bruno Mars</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1453088,
      'music_title_url' => 'ayo~chris-brown-tyga',
      'music_title' => 'Ayo',
      'music_artist' => 'Chris Brown;Tyga',
      'music_artist_id' => '588;3225',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538927301,
      'music_last_update_time' => 1422979138,
      'music_title_search' => 'aio',
      'music_artist_search' => '; chrix brown; tiga;',
      'music_album_search' => '',
      'music_composer' => 'Chris Brown; Michael Ray Nguyen-Stevenson; Mark Kragen; Nicholas Balding; Jess Jackson',
      'music_album' => '',
      'music_listen' => 14265,
      'music_track_id' => 0,
      'music_filename' => '1453088-5cb7f289.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Intro:]
I need you (x8)

[Hook: Chris Brown]
We poppin\' like ayo
All my bitches got real hair chilling with the top down
Screaming like ayo
I\'mma take her ass down when she bring her friend around...',
      'music_artist_html' => '<a href="/ca-si/Chris-Brown~Y3NuX2FydGlzdH41ODg=.html">Chris Brown</a>, <a href="/ca-si/Tyga~Y3NuX2FydGlzdH4zMjI1.html">Tyga</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1492897,
      'music_title_url' => 'sun-goes-down~robin-schulz-jasmine-thompson',
      'music_title' => 'Sun Goes Down',
      'music_artist' => 'Robin Schulz;Jasmine Thompson',
      'music_artist_id' => '16852;35904',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538613594,
      'music_last_update_time' => 1473844021,
      'music_title_search' => 'xun goex down',
      'music_artist_search' => '; robin xchulz; jaxmine thompxon;',
      'music_album_search' => '',
      'music_composer' => 'Robin Schulz; Tom Havelock',
      'music_album' => '',
      'music_listen' => 2320,
      'music_track_id' => 0,
      'music_filename' => '1492897-ed3782fb.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Nothing\'s ever what we expect
But they keep asking where we\'re going next
All we\'re chasing is the sunset
Got my mind on you.

Doesn\'t matter where we are are are are
Doesn\'t matter where we are ar...',
      'music_artist_html' => '<a href="/ca-si/Robin-Schulz~Y3NuX2FydGlzdH4xNjg1Mg==.html">Robin Schulz</a>, <a href="/ca-si/Jasmine-Thompson~Y3NuX2FydGlzdH4zNTkwNA==.html">Jasmine Thompson</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1510454,
      'music_title_url' => 'look-at-me-now~charlie-puth',
      'music_title' => 'Look At Me Now',
      'music_artist' => 'Charlie Puth',
      'music_artist_id' => '13568',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538449712,
      'music_last_update_time' => 1435123228,
      'music_title_search' => 'lok at me now',
      'music_artist_search' => '; charli puth;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5392,
      'music_track_id' => 0,
      'music_filename' => '1510454-e193e16d.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. I said this time next year
Imma be the one who do
Everything and more you said
I couldn\'t do
This one is for you
This time next year
I\'m gonna be stronger
A little bit taller
Top is my only view...',
      'music_artist_html' => '<a href="/ca-si/Charlie-Puth~Y3NuX2FydGlzdH4xMzU2OA==.html">Charlie Puth</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1699502,
      'music_title_url' => 'young-and-beautiful~fifth-harmony',
      'music_title' => 'Young And Beautiful',
      'music_artist' => 'Fifth Harmony',
      'music_artist_id' => '15680',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538956521,
      'music_last_update_time' => 1470576654,
      'music_title_search' => 'ioung and beautiful',
      'music_artist_search' => '; fifth harmoni;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1697,
      'music_track_id' => 0,
      'music_filename' => '1699502-e0b9a765.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'We are, we are, the young and the beautiful
We\'re alive tonight, tonight.

Flying high like an airplane
Burning stars in the Milky Way
I\'m tired cause we never say
Never, never, no no
Lovers come a...',
      'music_artist_html' => '<a href="/ca-si/Fifth-Harmony~Y3NuX2FydGlzdH4xNTY4MA==.html">Fifth Harmony</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1213102,
      'music_title_url' => 'crackin-martin-garrix-edit~bassjackers',
      'music_title' => 'Crackin (Martin Garrix Edit)',
      'music_artist' => 'Bassjackers',
      'music_artist_id' => '17855',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538729875,
      'music_last_update_time' => 1403318412,
      'music_title_search' => 'crackin; martin garix edit',
      'music_artist_search' => '; baxjackerx;',
      'music_album_search' => '',
      'music_composer' => 'Bassjackers',
      'music_album' => '',
      'music_listen' => 3690,
      'music_track_id' => 0,
      'music_filename' => '1213102-75d58952.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Bassjackers~Y3NuX2FydGlzdH4xNzg1NQ==.html">Bassjackers</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1221235,
      'music_title_url' => 'let-it-go-hoa-tau~the-piano-guys',
      'music_title' => 'Let It Go (Hoà Tấu)',
      'music_artist' => 'The Piano Guys',
      'music_artist_id' => '3802',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538792543,
      'music_last_update_time' => 1399974726,
      'music_title_search' => 'let it go; hoa tau',
      'music_artist_search' => '; the piano gix;',
      'music_album_search' => '',
      'music_composer' => 'Kristen Anderson-Lopez; Robert Lopez',
      'music_album' => '',
      'music_listen' => 28750,
      'music_track_id' => 0,
      'music_filename' => '1221235-4957a924.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
The snow blows white on the mountain tonight
Not a footprint to be seen
A kingdom of isolation and it looks like I\'m the Queen
The wind is howling like the swirling storm inside
Couldn\'t...',
      'music_artist_html' => '<a href="/ca-si/The-Piano-Guys~Y3NuX2FydGlzdH4zODAy.html">The Piano Guys</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1252095,
      'music_title_url' => 'summer~calvin-harris',
      'music_title' => 'Summer',
      'music_artist' => 'Calvin Harris',
      'music_artist_id' => '2474',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505905,
      'music_last_update_time' => 1482462642,
      'music_title_search' => 'xumer',
      'music_artist_search' => '; calvin harix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 42346,
      'music_track_id' => 0,
      'music_filename' => '1252095-62d0be5a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'When I met you in the summer
Took my heart a beat sound
We fell in love
As they leaves turned brown
And we could be together baby
Long the skies are blue
You act so innocent now
But you like so soo...',
      'music_artist_html' => '<a href="/ca-si/Calvin-Harris~Y3NuX2FydGlzdH4yNDc0.html">Calvin Harris</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1331689,
      'music_title_url' => 'ultraviolence~lana-del-rey',
      'music_title' => 'Ultraviolence',
      'music_artist' => 'Lana Del Rey',
      'music_artist_id' => '3317',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505314,
      'music_last_update_time' => 1486353129,
      'music_title_search' => 'ulchaviolence',
      'music_artist_search' => '; lana del rei;',
      'music_album_search' => '',
      'music_composer' => 'Lana Del Rey; Daniel Heath',
      'music_album' => '',
      'music_listen' => 3696,
      'music_track_id' => 0,
      'music_filename' => '1331689-ad900946.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. He used to call me DN
It stood for deadly nightshade
Cause I was filled with poison
But blessed with beauty and rage
Jim told me that he hit me 
and it felt like a kiss
Jim brought me back
Remin...',
      'music_artist_html' => '<a href="/ca-si/Lana-Del-Rey~Y3NuX2FydGlzdH4zMzE3.html">Lana Del Rey</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1362928,
      'music_title_url' => 'fireball~pitbull-john-ryan',
      'music_title' => 'Fireball',
      'music_artist' => 'Pitbull;John Ryan',
      'music_artist_id' => '1814;33484',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538762754,
      'music_last_update_time' => 1510732253,
      'music_title_search' => 'firebal',
      'music_artist_search' => '; pitbul; john rian;',
      'music_album_search' => '',
      'music_composer' => 'John Ryan; Axident; Ricky Reed; Joe London',
      'music_album' => '',
      'music_listen' => 12302,
      'music_track_id' => 0,
      'music_filename' => '1362928-0248b4f9.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Mr. Worldwide to infinity
You know the roof on fire
We gon\' boogie oogie oggi, jiggle, wiggle and dance
Like the roof on fire
We gon\' drink drinks and take shots until we fall out
Like the roof on...',
      'music_artist_html' => '<a href="/ca-si/Pitbull~Y3NuX2FydGlzdH4xODE0.html">Pitbull</a>, <a href="/ca-si/John-Ryan~Y3NuX2FydGlzdH4zMzQ4NA==.html">John Ryan</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1385774,
      'music_title_url' => 'till-its-gone~yelawolf',
      'music_title' => 'Till It\'s Gone',
      'music_artist' => 'Yelawolf',
      'music_artist_id' => '2580',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538533369,
      'music_last_update_time' => 1413768840,
      'music_title_search' => 'til it x gone',
      'music_artist_search' => '; ilawolf;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2871,
      'music_track_id' => 0,
      'music_filename' => '1385774-12342815.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
I\'m not the table you can come and lay your cup down on, now
I\'m not the shoulder for a bag. The one that carried a heavy load
I\'m not the road that you take when you looking for a short...',
      'music_artist_html' => '<a href="/ca-si/Yelawolf~Y3NuX2FydGlzdH4yNTgw.html">Yelawolf</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1506696,
      'music_title_url' => 'i-think-im-in-love~kat-dahlia',
      'music_title' => 'I Think I\'m In Love',
      'music_artist' => 'Kat Dahlia',
      'music_artist_id' => '36084',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538564214,
      'music_last_update_time' => 1434329335,
      'music_title_search' => 'i think i m in love',
      'music_artist_search' => '; kat dahlia;',
      'music_album_search' => '',
      'music_composer' => 'Kat Dahlia; Justin Anthony DeSantis; Jon Levine',
      'music_album' => '',
      'music_listen' => 8319,
      'music_track_id' => 0,
      'music_filename' => '1506696-9237add9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Time\'s been ticking, hearts are runnin\'
Think that Cupid\'s up to somethin\'
You asked me how I feel, I say nothin\'
But lately color seems so bright
And the stars light up the night
My feet they feel...',
      'music_artist_html' => '<a href="/ca-si/Kat-Dahlia~Y3NuX2FydGlzdH4zNjA4NA==.html">Kat Dahlia</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1613567,
      'music_title_url' => 'often-nsfw~the-weeknd',
      'music_title' => 'Often (NSFW)',
      'music_artist' => 'The Weeknd',
      'music_artist_id' => '14618',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505006,
      'music_last_update_time' => 1498452799,
      'music_title_search' => 'often; nxfw',
      'music_artist_search' => '; the weknd;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 590,
      'music_track_id' => 1,
      'music_filename' => '1613567-7ab10570.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
&quot;Seneler sürer her günüm&quot;
Ooh yeah, ooh yeah, ooh yeah, ooh yeah, ooh yeah
&quot;Yalnız gitmekten yorgunum&quot;
Ooh yeah, ooh yeah, ooh yeah, ooh yeah
&quot;Seneler sürer her gü...',
      'music_artist_html' => '<a href="/ca-si/The-Weeknd~Y3NuX2FydGlzdH4xNDYxOA==.html">The Weeknd</a>',
    ),
  ),
  3 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1409049,
      'music_title_url' => 'cam-nang-toi-luyen-thanh-xuan~tfboys',
      'music_title' => 'Cẩm Nang Tôi Luyện Thanh Xuân (青春修炼手册)',
      'music_artist' => 'TFBoys',
      'music_artist_id' => '21510',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538486611,
      'music_last_update_time' => 1416447605,
      'music_title_search' => 'cam nang toi lin thanh xuan; 青春修炼手册',
      'music_artist_search' => '; tfboix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 65816,
      'music_track_id' => 0,
      'music_filename' => '1409049-7c17c7b3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Gēnzhe wǒ zuǒshǒu yòushǒu yīgè màn dòngzuò 
Làm theo tôi tay trái rồi tay phải,từng động tác chầm chậm 
Yòushǒu zuǒshǒu màn dòngzuò chóngbò 
Tay phải rồi tay trái, từng động tác chẫm rãu luân phiên...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1432843,
      'music_title_url' => 'bia-vo-danh~truong-tinh-dinh',
      'music_title' => 'Bia Vô Danh (无字碑)',
      'music_artist' => 'Trương Tịnh Dĩnh',
      'music_artist_id' => '475',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538886876,
      'music_last_update_time' => 1420621565,
      'music_title_search' => 'bia vo danh; 无字碑',
      'music_artist_search' => '; chung tinh dinh;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10674,
      'music_track_id' => 0,
      'music_filename' => '1432843-adfae6d3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1436404,
      'music_title_url' => 'tin-nguong-chi-danh~tfboys',
      'music_title' => 'Tín Ngưỡng Chi Danh (信仰之名)',
      'music_artist' => 'TFBoys',
      'music_artist_id' => '21510',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538815595,
      'music_last_update_time' => 1420183292,
      'music_title_search' => 'tin ngung chi danh; 信仰之名',
      'music_artist_search' => '; tfboix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 55276,
      'music_track_id' => 0,
      'music_filename' => '1436404-b39c028f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1377683,
      'music_title_url' => 'cho-toc-em-dai-den-eo~thuong-van-tiep-tu-tu-uy',
      'music_title' => 'Chờ Tóc Em Dài Đến Eo (待我长发及腰)',
      'music_artist' => 'Thượng Văn Tiệp;Từ Tử Uy',
      'music_artist_id' => '8606;55770',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538874927,
      'music_last_update_time' => 1413881726,
      'music_title_search' => 'cho toc em dai den eo; 待我长发及腰',
      'music_artist_search' => '; thung van tip; tu tu i;',
      'music_album_search' => '',
      'music_composer' => 'Vu Chính; Từ Tử Uy',
      'music_album' => '',
      'music_listen' => 10745,
      'music_track_id' => 0,
      'music_filename' => '1377683-f0afa1e4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '嘿…待我长发及腰
Hēi … dài wǒ zhǎng fā jí yāo
Này, chờ đến khi tóc em dài đến eo

嘿…归来娶我可好
Hēi … guī lái qǔ wǒ kě hǎo
Này, quay lại lấy em được chứ?
 
等你等的忘了笑
Děng nǐ děng de wàng le xiào 
Đợi chàng, đợi đ...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1439527,
      'music_title_url' => 'vi-uoc-mo-luon-san-sang-chuan-bi~tfboys',
      'music_title' => 'Vì Ước Mơ Luôn Sẵn Sàng Chuẩn Bị',
      'music_artist' => 'TFBoys',
      'music_artist_id' => '21510',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538484563,
      'music_last_update_time' => 1420722201,
      'music_title_search' => 'vi uc mo lun xan xang chuan bi',
      'music_artist_search' => '; tfboix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 35865,
      'music_track_id' => 0,
      'music_filename' => '1439527-61c25c02.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Zhunbei hao le ma shi ke zhun bei zhe 
Chuixiang na ying chun meng xiang ji jie hao
Shi jie de jiao ao you wo men da zao
Di di da di da di di da di da
Follow me follow me shi shi ke zhun bei hao
Fo...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1217654,
      'music_title_url' => 'breath-chinese-version~chen-zhang-liyin',
      'music_title' => 'Breath (Chinese Version)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521122562,
      'music_last_update_time' => 1399714586,
      'music_title_search' => 'breath; chinexe verxion',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => 'Kim Tae Sung; Choi Hyun Joon',
      'music_album' => '',
      'music_listen' => 23833,
      'music_track_id' => 0,
      'music_filename' => '1217654-7361e024.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wo yayi buzhu sinianzhe ni botong le dianhua
Xiangni duojiu meijianguo ni
Yuanqude zhixi youshang youjizai wode xinshang
Dangchu de fangshou yigeren tanxi houhui rang ni zou.

Shi turan xilai na ge...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1217657,
      'music_title_url' => 'breath-chinese-version~chen-zhang-liyin',
      'music_title' => 'Breath (Chinese Version)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1399679687,
      'music_last_update_time' => 1399715440,
      'music_title_search' => 'breath; chinexe verxion',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11133,
      'music_track_id' => 0,
      'music_filename' => '1217657-132bf5e9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wǒ yāyì bù zhù sīniànzhe nǐ
Bō tōngle diànhuà
Xiǎng nǐ duōjiǔ méi jiànguò nǐ
Yuǎn qù de zhìxí yōushāng
Yòu xì zài wǒ de xīn shàng
Dāngchū dì fàngshǒu
Yīgè rén tànxí hòuhuǐ ràng nǐ zǒu

Shì túrán xí...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1218092,
      'music_title_url' => 'breath-chinese-version-vietsub-kara~chen-zhang-liyin',
      'music_title' => 'Breath (Chinese Version) (Vietsub + Kara)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497139429,
      'music_last_update_time' => 1399714002,
      'music_title_search' => 'breath; chinexe verxion ; vitxub kara',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => 'Kim Tae Sung; Choi Hyun Joon',
      'music_album' => '',
      'music_listen' => 8842,
      'music_track_id' => 0,
      'music_filename' => '1218092-cac5e605.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Wo yayi buzhu sinianzhe ni botong le dianhua
Xiangni duojiu meijianguo ni
Yuanqude zhixi youshang youjizai wode xinshang
Dangchu de fangshou yigeren tanxi houhui rang ni zou.

Shi turan xilai na ge...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1219554,
      'music_title_url' => 'blind-sm-the-ballad-vol2-joint-recital~zhou-mi',
      'music_title' => 'Blind (S.M. THE BALLAD Vol.2 Joint Recital)',
      'music_artist' => 'Zhou Mi',
      'music_artist_id' => '41405',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495488599,
      'music_last_update_time' => 1397315010,
      'music_title_search' => 'blind; x m the balad vol 2 joint recital',
      'music_artist_search' => '; zhou mi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2487,
      'music_track_id' => 0,
      'music_filename' => '1219554-6c57db92.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Zài yǔ nǐ xiàng yù de céng jīng
Wǒ zhǎo dào xìng fú de dìng yì
Xīn tiào měi tiān gǎn dòng de tí xǐng
Wǒ de shì xiàn zhī wéi nǐ qiān yǐn
Gēn zhe nǐ fēng le wǒ yě yuàn yì.

Cóng bú zhī yǐ ài de míng...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1219590,
      'music_title_url' => 'breath-sm-the-ballad-vol2-joint-recital~chen-zhang-liyin',
      'music_title' => 'Breath (S.M. THE BALLAD Vol.2 Joint Recital)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533045749,
      'music_last_update_time' => 1397314997,
      'music_title_search' => 'breath; x m the balad vol 2 joint recital',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => 'Kim Tae Sung; Choi Hyun Joon',
      'music_album' => '',
      'music_listen' => 5538,
      'music_track_id' => 0,
      'music_filename' => '1219590-b6cd85ac.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wo yayi buzhu sinianzhe ni botong le dianhua
Xiangni duojiu meijianguo ni
Yuanqude zhixi youshang youjizai wode xinshang
Dangchu de fangshou yigeren tanxi houhui rang ni zou.

Shi turan xilai na ge...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1221333,
      'music_title_url' => 'blind-chinese-version~zhou-mi',
      'music_title' => 'Blind (Chinese Version)',
      'music_artist' => 'Zhou Mi',
      'music_artist_id' => '41405',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1509652308,
      'music_last_update_time' => 1397616244,
      'music_title_search' => 'blind; chinexe verxion',
      'music_artist_search' => '; zhou mi;',
      'music_album_search' => '',
      'music_composer' => 'Choi Hyun Joon; Hwang Seung Chan',
      'music_album' => '',
      'music_listen' => 3300,
      'music_track_id' => 0,
      'music_filename' => '1221333-534803e4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Zài yǔ nǐ xiàng yù de céng jīng
Wǒ zhǎo dào xìng fú de dìng yì
Xīn tiào měi tiān gǎn dòng de tí xǐng
Wǒ de shì xiàn zhī wéi nǐ qiān yǐn
Gēn zhe nǐ fēng le wǒ yě yuàn yì.

Cóng bú zhī yǐ ài de míng...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1240588,
      'music_title_url' => 'swing~super-junior-m',
      'music_title' => 'Swing',
      'music_artist' => 'Super Junior M',
      'music_artist_id' => '2078',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531406058,
      'music_last_update_time' => 1397381152,
      'music_title_search' => 'xwing',
      'music_artist_search' => '; xuper junior m;',
      'music_album_search' => '',
      'music_composer' => 'Daniel Caesar; Ludwig Lindell; Olof Lindskog; Casper; Zhoumi',
      'music_album' => '',
      'music_listen' => 121628,
      'music_track_id' => 0,
      'music_filename' => '1240588-20663651.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hey, Mr.! Shi jian yi dao lai xia yao zai deng dai
Kuai pao kai zuai shui meng zhong xing lai bie ya yi shu yu ni de cun zai
Maria! Bie zong shi fa dai shi zhen zai fei zhuan.

Wang zhe de bu dao a...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1240854,
      'music_title_url' => 'breath-sbs-mtv-the-show-140218~chen-zhang-liyin',
      'music_title' => 'Breath (SBS MTV The Show 140218)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1436020534,
      'music_last_update_time' => 1397312334,
      'music_title_search' => 'breath; xbx mtv the thow 140218',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1615,
      'music_track_id' => 0,
      'music_filename' => '1240854-62ed8714.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wo yayi buzhu sinianzhe ni botong le dianhua
Xiangni duojiu meijianguo ni
Yuanqude zhixi youshang youjizai wode xinshang
Dangchu de fangshou yigeren tanxi houhui rang ni zou.

Shi turan xilai na ge...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1240856,
      'music_title_url' => 'breath-sbs-mtv-the-show-140225~chen-zhang-liyin',
      'music_title' => 'Breath (SBS MTV The Show 140225)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496760043,
      'music_last_update_time' => 1397312344,
      'music_title_search' => 'breath; xbx mtv the thow 14025',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1562,
      'music_track_id' => 0,
      'music_filename' => '1240856-eeec1362.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wo yayi buzhu sinianzhe ni botong le dianhua
Xiangni duojiu meijianguo ni
Yuanqude zhixi youshang youjizai wode xinshang
Dangchu de fangshou yigeren tanxi houhui rang ni zou.

Shi turan xilai na ge...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1241103,
      'music_title_url' => 'breath-simply-k-pop-140225~chen-zhang-liyin',
      'music_title' => 'Breath (Simply K-Pop 140225)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496590152,
      'music_last_update_time' => 1397312358,
      'music_title_search' => 'breath; ximpli k pop 14025',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1492,
      'music_track_id' => 0,
      'music_filename' => '1241103-931d2779.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wo yayi buzhu sinianzhe ni botong le dianhua
Xiangni duojiu meijianguo ni
Yuanqude zhixi youshang youjizai wode xinshang
Dangchu de fangshou yigeren tanxi houhui rang ni zou.

Shi turan xilai na ge...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1246159,
      'music_title_url' => 'sunshine-and-air~angela-zhang',
      'music_title' => 'Sunshine And Air',
      'music_artist' => 'Angela Zhang',
      'music_artist_id' => '11661',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493839297,
      'music_last_update_time' => 1403835660,
      'music_title_search' => 'xunthine and air',
      'music_artist_search' => '; angela zhang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1915,
      'music_track_id' => 0,
      'music_filename' => '1246159-ab0d794a.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1247773,
      'music_title_url' => 'ven-rem-chau~hoac-ton',
      'music_title' => 'Vén Rèm Châu (卷珠帘)',
      'music_artist' => 'Hoắc Tôn',
      'music_artist_id' => '19195',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531405768,
      'music_last_update_time' => 1398413290,
      'music_title_search' => 'ven rem chau; 卷珠帘',
      'music_artist_search' => '; hoac ton;',
      'music_album_search' => '',
      'music_composer' => 'Hoắc Tôn',
      'music_album' => '',
      'music_listen' => 31898,
      'music_track_id' => 0,
      'music_filename' => '1247773-b3845cea.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Juān kè hǎo měi dào méi jiān xīn shàng
Khắc ghi sâu trong tim từng nét mi đường mày

Huà jiān tòu guò sī liàng
Đong đầy nỗi nhớ nhung vào bức hoạ

Zhān rǎn le mò sè tǎng
Thấm nhuộm cả sắc mực tràn...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1253339,
      'music_title_url' => 'blind-chinese-version-vietsub-kara~zhoumi',
      'music_title' => 'Blind (Chinese Version) (Vietsub + Kara)',
      'music_artist' => 'Zhoumi',
      'music_artist_id' => '44898',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495461350,
      'music_last_update_time' => 1397356768,
      'music_title_search' => 'blind; chinexe verxion ; vitxub kara',
      'music_artist_search' => '; zhoumi;',
      'music_album_search' => '',
      'music_composer' => 'Choi Hyun Joon; Hwang Seung Chan',
      'music_album' => '',
      'music_listen' => 2727,
      'music_track_id' => 0,
      'music_filename' => '1253339-459ee9a1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '(Brought to you by Kitesvn.com subbing team)

Zài yǔ nǐ xiàng yù de céng jīng
Wǒ zhǎo dào xìng fú de dìng yì
Xīn tiào měi tiān gǎn dòng de tí xǐng
Wǒ de shì xiàn zhī wéi nǐ qiān yǐn
Gēn zhe nǐ fēng...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1253414,
      'music_title_url' => 'breath-chinese-version-vietsub-kara~chen-zhang-liyin',
      'music_title' => 'Breath (Chinese Version) (Vietsub + Kara)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1449196227,
      'music_last_update_time' => 1397356775,
      'music_title_search' => 'breath; chinexe verxion ; vitxub kara',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4278,
      'music_track_id' => 0,
      'music_filename' => '1253414-f4090fd5.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '(Brought to you by Kitesvn.com subbing team)

Wo yayi buzhu sinianzhe ni botong le dianhua
Xiangni duojiu meijianguo ni
Yuanqude zhixi youshang youjizai wode xinshang
Dangchu de fangshou yigeren ta...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1254206,
      'music_title_url' => 'the-great-artist-nge-thuat-gia-lon~thai-y-lam',
      'music_title' => 'The Great Artist (Ngệ Thuật Gia Lớn;大藝術家)',
      'music_artist' => 'Thái Y Lâm',
      'music_artist_id' => '276',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525157113,
      'music_last_update_time' => 1424780559,
      'music_title_search' => 'the great artixt; nge thuat da lon;大藝術家',
      'music_artist_search' => '; thai i lam;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4348,
      'music_track_id' => 0,
      'music_filename' => '1254206-2ae3dd5f.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1409049,
      'music_title_url' => 'cam-nang-toi-luyen-thanh-xuan~tfboys',
      'music_title' => 'Cẩm Nang Tôi Luyện Thanh Xuân (青春修炼手册)',
      'music_artist' => 'TFBoys',
      'music_artist_id' => '21510',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538486611,
      'music_last_update_time' => 1416447605,
      'music_title_search' => 'cam nang toi lin thanh xuan; 青春修炼手册',
      'music_artist_search' => '; tfboix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 65816,
      'music_track_id' => 0,
      'music_filename' => '1409049-7c17c7b3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Gēnzhe wǒ zuǒshǒu yòushǒu yīgè màn dòngzuò 
Làm theo tôi tay trái rồi tay phải,từng động tác chầm chậm 
Yòushǒu zuǒshǒu màn dòngzuò chóngbò 
Tay phải rồi tay trái, từng động tác chẫm rãu luân phiên...',
      'music_artist_html' => '<a href="/ca-si/TFBoys~Y3NuX2FydGlzdH4yMTUxMA==.html">TFBoys</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1432843,
      'music_title_url' => 'bia-vo-danh~truong-tinh-dinh',
      'music_title' => 'Bia Vô Danh (无字碑)',
      'music_artist' => 'Trương Tịnh Dĩnh',
      'music_artist_id' => '475',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538886876,
      'music_last_update_time' => 1420621565,
      'music_title_search' => 'bia vo danh; 无字碑',
      'music_artist_search' => '; chung tinh dinh;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10674,
      'music_track_id' => 0,
      'music_filename' => '1432843-adfae6d3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Truong-Tinh-Dinh~Y3NuX2FydGlzdH40NzU=.html">Trương Tịnh Dĩnh</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1436404,
      'music_title_url' => 'tin-nguong-chi-danh~tfboys',
      'music_title' => 'Tín Ngưỡng Chi Danh (信仰之名)',
      'music_artist' => 'TFBoys',
      'music_artist_id' => '21510',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538815595,
      'music_last_update_time' => 1420183292,
      'music_title_search' => 'tin ngung chi danh; 信仰之名',
      'music_artist_search' => '; tfboix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 55276,
      'music_track_id' => 0,
      'music_filename' => '1436404-b39c028f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/TFBoys~Y3NuX2FydGlzdH4yMTUxMA==.html">TFBoys</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1377683,
      'music_title_url' => 'cho-toc-em-dai-den-eo~thuong-van-tiep-tu-tu-uy',
      'music_title' => 'Chờ Tóc Em Dài Đến Eo (待我长发及腰)',
      'music_artist' => 'Thượng Văn Tiệp;Từ Tử Uy',
      'music_artist_id' => '8606;55770',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538874927,
      'music_last_update_time' => 1413881726,
      'music_title_search' => 'cho toc em dai den eo; 待我长发及腰',
      'music_artist_search' => '; thung van tip; tu tu i;',
      'music_album_search' => '',
      'music_composer' => 'Vu Chính; Từ Tử Uy',
      'music_album' => '',
      'music_listen' => 10745,
      'music_track_id' => 0,
      'music_filename' => '1377683-f0afa1e4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '嘿…待我长发及腰
Hēi … dài wǒ zhǎng fā jí yāo
Này, chờ đến khi tóc em dài đến eo

嘿…归来娶我可好
Hēi … guī lái qǔ wǒ kě hǎo
Này, quay lại lấy em được chứ?
 
等你等的忘了笑
Děng nǐ děng de wàng le xiào 
Đợi chàng, đợi đ...',
      'music_artist_html' => '<a href="/ca-si/Thuong-Van-Tiep~Y3NuX2FydGlzdH44NjA2.html">Thượng Văn Tiệp</a>, <a href="/ca-si/Tu-Tu-Uy~Y3NuX2FydGlzdH41NTc3MA==.html">Từ Tử Uy</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1439527,
      'music_title_url' => 'vi-uoc-mo-luon-san-sang-chuan-bi~tfboys',
      'music_title' => 'Vì Ước Mơ Luôn Sẵn Sàng Chuẩn Bị',
      'music_artist' => 'TFBoys',
      'music_artist_id' => '21510',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538484563,
      'music_last_update_time' => 1420722201,
      'music_title_search' => 'vi uc mo lun xan xang chuan bi',
      'music_artist_search' => '; tfboix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 35865,
      'music_track_id' => 0,
      'music_filename' => '1439527-61c25c02.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Zhunbei hao le ma shi ke zhun bei zhe 
Chuixiang na ying chun meng xiang ji jie hao
Shi jie de jiao ao you wo men da zao
Di di da di da di di da di da
Follow me follow me shi shi ke zhun bei hao
Fo...',
      'music_artist_html' => '<a href="/ca-si/TFBoys~Y3NuX2FydGlzdH4yMTUxMA==.html">TFBoys</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1217654,
      'music_title_url' => 'breath-chinese-version~chen-zhang-liyin',
      'music_title' => 'Breath (Chinese Version)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521122562,
      'music_last_update_time' => 1399714586,
      'music_title_search' => 'breath; chinexe verxion',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => 'Kim Tae Sung; Choi Hyun Joon',
      'music_album' => '',
      'music_listen' => 23833,
      'music_track_id' => 0,
      'music_filename' => '1217654-7361e024.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wo yayi buzhu sinianzhe ni botong le dianhua
Xiangni duojiu meijianguo ni
Yuanqude zhixi youshang youjizai wode xinshang
Dangchu de fangshou yigeren tanxi houhui rang ni zou.

Shi turan xilai na ge...',
      'music_artist_html' => '<a href="/ca-si/Chen~Y3NuX2FydGlzdH40MjQ5.html">Chen</a>, <a href="/ca-si/Zhang-Liyin~Y3NuX2FydGlzdH43MDc1.html">Zhang Liyin</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1217657,
      'music_title_url' => 'breath-chinese-version~chen-zhang-liyin',
      'music_title' => 'Breath (Chinese Version)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1399679687,
      'music_last_update_time' => 1399715440,
      'music_title_search' => 'breath; chinexe verxion',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11133,
      'music_track_id' => 0,
      'music_filename' => '1217657-132bf5e9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wǒ yāyì bù zhù sīniànzhe nǐ
Bō tōngle diànhuà
Xiǎng nǐ duōjiǔ méi jiànguò nǐ
Yuǎn qù de zhìxí yōushāng
Yòu xì zài wǒ de xīn shàng
Dāngchū dì fàngshǒu
Yīgè rén tànxí hòuhuǐ ràng nǐ zǒu

Shì túrán xí...',
      'music_artist_html' => '<a href="/ca-si/Chen~Y3NuX2FydGlzdH40MjQ5.html">Chen</a>, <a href="/ca-si/Zhang-Liyin~Y3NuX2FydGlzdH43MDc1.html">Zhang Liyin</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1218092,
      'music_title_url' => 'breath-chinese-version-vietsub-kara~chen-zhang-liyin',
      'music_title' => 'Breath (Chinese Version) (Vietsub + Kara)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497139429,
      'music_last_update_time' => 1399714002,
      'music_title_search' => 'breath; chinexe verxion ; vitxub kara',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => 'Kim Tae Sung; Choi Hyun Joon',
      'music_album' => '',
      'music_listen' => 8842,
      'music_track_id' => 0,
      'music_filename' => '1218092-cac5e605.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Wo yayi buzhu sinianzhe ni botong le dianhua
Xiangni duojiu meijianguo ni
Yuanqude zhixi youshang youjizai wode xinshang
Dangchu de fangshou yigeren tanxi houhui rang ni zou.

Shi turan xilai na ge...',
      'music_artist_html' => '<a href="/ca-si/Chen~Y3NuX2FydGlzdH40MjQ5.html">Chen</a>, <a href="/ca-si/Zhang-Liyin~Y3NuX2FydGlzdH43MDc1.html">Zhang Liyin</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1219554,
      'music_title_url' => 'blind-sm-the-ballad-vol2-joint-recital~zhou-mi',
      'music_title' => 'Blind (S.M. THE BALLAD Vol.2 Joint Recital)',
      'music_artist' => 'Zhou Mi',
      'music_artist_id' => '41405',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495488599,
      'music_last_update_time' => 1397315010,
      'music_title_search' => 'blind; x m the balad vol 2 joint recital',
      'music_artist_search' => '; zhou mi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2487,
      'music_track_id' => 0,
      'music_filename' => '1219554-6c57db92.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Zài yǔ nǐ xiàng yù de céng jīng
Wǒ zhǎo dào xìng fú de dìng yì
Xīn tiào měi tiān gǎn dòng de tí xǐng
Wǒ de shì xiàn zhī wéi nǐ qiān yǐn
Gēn zhe nǐ fēng le wǒ yě yuàn yì.

Cóng bú zhī yǐ ài de míng...',
      'music_artist_html' => '<a href="/ca-si/Zhou-Mi~Y3NuX2FydGlzdH40MTQwNQ==.html">Zhou Mi</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1219590,
      'music_title_url' => 'breath-sm-the-ballad-vol2-joint-recital~chen-zhang-liyin',
      'music_title' => 'Breath (S.M. THE BALLAD Vol.2 Joint Recital)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533045749,
      'music_last_update_time' => 1397314997,
      'music_title_search' => 'breath; x m the balad vol 2 joint recital',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => 'Kim Tae Sung; Choi Hyun Joon',
      'music_album' => '',
      'music_listen' => 5538,
      'music_track_id' => 0,
      'music_filename' => '1219590-b6cd85ac.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wo yayi buzhu sinianzhe ni botong le dianhua
Xiangni duojiu meijianguo ni
Yuanqude zhixi youshang youjizai wode xinshang
Dangchu de fangshou yigeren tanxi houhui rang ni zou.

Shi turan xilai na ge...',
      'music_artist_html' => '<a href="/ca-si/Chen~Y3NuX2FydGlzdH40MjQ5.html">Chen</a>, <a href="/ca-si/Zhang-Liyin~Y3NuX2FydGlzdH43MDc1.html">Zhang Liyin</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1221333,
      'music_title_url' => 'blind-chinese-version~zhou-mi',
      'music_title' => 'Blind (Chinese Version)',
      'music_artist' => 'Zhou Mi',
      'music_artist_id' => '41405',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1509652308,
      'music_last_update_time' => 1397616244,
      'music_title_search' => 'blind; chinexe verxion',
      'music_artist_search' => '; zhou mi;',
      'music_album_search' => '',
      'music_composer' => 'Choi Hyun Joon; Hwang Seung Chan',
      'music_album' => '',
      'music_listen' => 3300,
      'music_track_id' => 0,
      'music_filename' => '1221333-534803e4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Zài yǔ nǐ xiàng yù de céng jīng
Wǒ zhǎo dào xìng fú de dìng yì
Xīn tiào měi tiān gǎn dòng de tí xǐng
Wǒ de shì xiàn zhī wéi nǐ qiān yǐn
Gēn zhe nǐ fēng le wǒ yě yuàn yì.

Cóng bú zhī yǐ ài de míng...',
      'music_artist_html' => '<a href="/ca-si/Zhou-Mi~Y3NuX2FydGlzdH40MTQwNQ==.html">Zhou Mi</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1240588,
      'music_title_url' => 'swing~super-junior-m',
      'music_title' => 'Swing',
      'music_artist' => 'Super Junior M',
      'music_artist_id' => '2078',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531406058,
      'music_last_update_time' => 1397381152,
      'music_title_search' => 'xwing',
      'music_artist_search' => '; xuper junior m;',
      'music_album_search' => '',
      'music_composer' => 'Daniel Caesar; Ludwig Lindell; Olof Lindskog; Casper; Zhoumi',
      'music_album' => '',
      'music_listen' => 121628,
      'music_track_id' => 0,
      'music_filename' => '1240588-20663651.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hey, Mr.! Shi jian yi dao lai xia yao zai deng dai
Kuai pao kai zuai shui meng zhong xing lai bie ya yi shu yu ni de cun zai
Maria! Bie zong shi fa dai shi zhen zai fei zhuan.

Wang zhe de bu dao a...',
      'music_artist_html' => '<a href="/ca-si/Super-Junior-M~Y3NuX2FydGlzdH4yMDc4.html">Super Junior M</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1240854,
      'music_title_url' => 'breath-sbs-mtv-the-show-140218~chen-zhang-liyin',
      'music_title' => 'Breath (SBS MTV The Show 140218)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1436020534,
      'music_last_update_time' => 1397312334,
      'music_title_search' => 'breath; xbx mtv the thow 140218',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1615,
      'music_track_id' => 0,
      'music_filename' => '1240854-62ed8714.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wo yayi buzhu sinianzhe ni botong le dianhua
Xiangni duojiu meijianguo ni
Yuanqude zhixi youshang youjizai wode xinshang
Dangchu de fangshou yigeren tanxi houhui rang ni zou.

Shi turan xilai na ge...',
      'music_artist_html' => '<a href="/ca-si/Chen~Y3NuX2FydGlzdH40MjQ5.html">Chen</a>, <a href="/ca-si/Zhang-Liyin~Y3NuX2FydGlzdH43MDc1.html">Zhang Liyin</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1240856,
      'music_title_url' => 'breath-sbs-mtv-the-show-140225~chen-zhang-liyin',
      'music_title' => 'Breath (SBS MTV The Show 140225)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496760043,
      'music_last_update_time' => 1397312344,
      'music_title_search' => 'breath; xbx mtv the thow 14025',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1562,
      'music_track_id' => 0,
      'music_filename' => '1240856-eeec1362.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wo yayi buzhu sinianzhe ni botong le dianhua
Xiangni duojiu meijianguo ni
Yuanqude zhixi youshang youjizai wode xinshang
Dangchu de fangshou yigeren tanxi houhui rang ni zou.

Shi turan xilai na ge...',
      'music_artist_html' => '<a href="/ca-si/Chen~Y3NuX2FydGlzdH40MjQ5.html">Chen</a>, <a href="/ca-si/Zhang-Liyin~Y3NuX2FydGlzdH43MDc1.html">Zhang Liyin</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1241103,
      'music_title_url' => 'breath-simply-k-pop-140225~chen-zhang-liyin',
      'music_title' => 'Breath (Simply K-Pop 140225)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496590152,
      'music_last_update_time' => 1397312358,
      'music_title_search' => 'breath; ximpli k pop 14025',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1492,
      'music_track_id' => 0,
      'music_filename' => '1241103-931d2779.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wo yayi buzhu sinianzhe ni botong le dianhua
Xiangni duojiu meijianguo ni
Yuanqude zhixi youshang youjizai wode xinshang
Dangchu de fangshou yigeren tanxi houhui rang ni zou.

Shi turan xilai na ge...',
      'music_artist_html' => '<a href="/ca-si/Chen~Y3NuX2FydGlzdH40MjQ5.html">Chen</a>, <a href="/ca-si/Zhang-Liyin~Y3NuX2FydGlzdH43MDc1.html">Zhang Liyin</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1246159,
      'music_title_url' => 'sunshine-and-air~angela-zhang',
      'music_title' => 'Sunshine And Air',
      'music_artist' => 'Angela Zhang',
      'music_artist_id' => '11661',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493839297,
      'music_last_update_time' => 1403835660,
      'music_title_search' => 'xunthine and air',
      'music_artist_search' => '; angela zhang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1915,
      'music_track_id' => 0,
      'music_filename' => '1246159-ab0d794a.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Angela-Zhang~Y3NuX2FydGlzdH4xMTY2MQ==.html">Angela Zhang</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1247773,
      'music_title_url' => 'ven-rem-chau~hoac-ton',
      'music_title' => 'Vén Rèm Châu (卷珠帘)',
      'music_artist' => 'Hoắc Tôn',
      'music_artist_id' => '19195',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531405768,
      'music_last_update_time' => 1398413290,
      'music_title_search' => 'ven rem chau; 卷珠帘',
      'music_artist_search' => '; hoac ton;',
      'music_album_search' => '',
      'music_composer' => 'Hoắc Tôn',
      'music_album' => '',
      'music_listen' => 31898,
      'music_track_id' => 0,
      'music_filename' => '1247773-b3845cea.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Juān kè hǎo měi dào méi jiān xīn shàng
Khắc ghi sâu trong tim từng nét mi đường mày

Huà jiān tòu guò sī liàng
Đong đầy nỗi nhớ nhung vào bức hoạ

Zhān rǎn le mò sè tǎng
Thấm nhuộm cả sắc mực tràn...',
      'music_artist_html' => '<a href="/ca-si/Hoac-Ton~Y3NuX2FydGlzdH4xOTE5NQ==.html">Hoắc Tôn</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1253339,
      'music_title_url' => 'blind-chinese-version-vietsub-kara~zhoumi',
      'music_title' => 'Blind (Chinese Version) (Vietsub + Kara)',
      'music_artist' => 'Zhoumi',
      'music_artist_id' => '44898',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495461350,
      'music_last_update_time' => 1397356768,
      'music_title_search' => 'blind; chinexe verxion ; vitxub kara',
      'music_artist_search' => '; zhoumi;',
      'music_album_search' => '',
      'music_composer' => 'Choi Hyun Joon; Hwang Seung Chan',
      'music_album' => '',
      'music_listen' => 2727,
      'music_track_id' => 0,
      'music_filename' => '1253339-459ee9a1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '(Brought to you by Kitesvn.com subbing team)

Zài yǔ nǐ xiàng yù de céng jīng
Wǒ zhǎo dào xìng fú de dìng yì
Xīn tiào měi tiān gǎn dòng de tí xǐng
Wǒ de shì xiàn zhī wéi nǐ qiān yǐn
Gēn zhe nǐ fēng...',
      'music_artist_html' => '<a href="/ca-si/Zhoumi~Y3NuX2FydGlzdH40NDg5OA==.html">Zhoumi</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1253414,
      'music_title_url' => 'breath-chinese-version-vietsub-kara~chen-zhang-liyin',
      'music_title' => 'Breath (Chinese Version) (Vietsub + Kara)',
      'music_artist' => 'Chen;Zhang Liyin',
      'music_artist_id' => '4249;7075',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1449196227,
      'music_last_update_time' => 1397356775,
      'music_title_search' => 'breath; chinexe verxion ; vitxub kara',
      'music_artist_search' => '; chen; zhang lin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4278,
      'music_track_id' => 0,
      'music_filename' => '1253414-f4090fd5.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '(Brought to you by Kitesvn.com subbing team)

Wo yayi buzhu sinianzhe ni botong le dianhua
Xiangni duojiu meijianguo ni
Yuanqude zhixi youshang youjizai wode xinshang
Dangchu de fangshou yigeren ta...',
      'music_artist_html' => '<a href="/ca-si/Chen~Y3NuX2FydGlzdH40MjQ5.html">Chen</a>, <a href="/ca-si/Zhang-Liyin~Y3NuX2FydGlzdH43MDc1.html">Zhang Liyin</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1254206,
      'music_title_url' => 'the-great-artist-nge-thuat-gia-lon~thai-y-lam',
      'music_title' => 'The Great Artist (Ngệ Thuật Gia Lớn;大藝術家)',
      'music_artist' => 'Thái Y Lâm',
      'music_artist_id' => '276',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525157113,
      'music_last_update_time' => 1424780559,
      'music_title_search' => 'the great artixt; nge thuat da lon;大藝術家',
      'music_artist_search' => '; thai i lam;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4348,
      'music_track_id' => 0,
      'music_filename' => '1254206-2ae3dd5f.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Thai-Y-Lam~Y3NuX2FydGlzdH4yNzY=.html">Thái Y Lâm</a>',
    ),
  ),
  4 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1292166,
      'music_title_url' => 'eyes-nose-lips~taeyang',
      'music_title' => 'Eyes, Nose, Lips',
      'music_artist' => 'Taeyang',
      'music_artist_id' => '12145',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538622100,
      'music_last_update_time' => 1401940507,
      'music_title_search' => 'eix noxe lipx',
      'music_artist_search' => '; taeiang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 117544,
      'music_track_id' => 0,
      'music_filename' => '1292166-b0a1a2a9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Mianhae mianhae hajima
Naega chorahaejijanha
Ppal gan yeppeun ibsullo
Eoseo nareul jugigo ga
Naneun gwaenchanha
Majimage uro nareul barabwajwo
Amureohji anheun deus useojwo
Nega bogo sipeul ttae
Gi...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1361017,
      'music_title_url' => 'holler~taetiseo',
      'music_title' => 'Holler',
      'music_artist' => 'TaeTiSeo',
      'music_artist_id' => '4787',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538926979,
      'music_last_update_time' => 1410972454,
      'music_title_search' => 'holer',
      'music_artist_search' => '; taetixeo;',
      'music_album_search' => '',
      'music_composer' => 'Figge Boström; Anna Engh fd Nordell; Mafly',
      'music_album' => '',
      'music_listen' => 122829,
      'music_track_id' => 0,
      'music_filename' => '1361017-9a7aa077.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ladies and gentlemen, can you hear me?
I hope you are ready for a fast ride
\'Cause that\'s what we\'re going for tonight
So sit back and buckle up
\'Cause you\'ll be racing with the stars tonight
Liste...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1432497,
      'music_title_url' => 'cant-stop-kbs-gayo-daechukje-2014-141226~cnblue',
      'music_title' => 'Can\'t Stop (KBS Gayo Daechukje 2014 141226)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538541942,
      'music_last_update_time' => 1419825696,
      'music_title_search' => 'can t xtop; kbx gaio daechukje 2014 14126',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1030,
      'music_track_id' => 0,
      'music_filename' => '1432497-e101f75f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Harue han beonman geudaen tteoollyeojwoyo miss you
Harue han beonman naneun ijeobolgeyo
Geugeotdo andwaeyo geugeotdo andwaeyo
Geugeotdo andoemyeon geureom nan eotteokhanayo.

Geudae han madie naneu...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1581794,
      'music_title_url' => 'i-need-you-inkigayo-20150524~bts',
      'music_title' => 'I Need You (Inkigayo 20150524)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538925446,
      'music_last_update_time' => 1447377135,
      'music_title_search' => 'i ned iou; inkigaio 20150524',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2790,
      'music_track_id' => 0,
      'music_filename' => '1581794-c69f8137.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Fall fall fall heuteojine
Fall fall fall tteoreojine.

Neo ttaeme na ireohge manggajyeo
Geumanhallae ije neo an gajyeo
Moshagesseo mwot gataseo
Jebal pinggye gateun geon samgajwo.

Niga nahante ire...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1338058,
      'music_title_url' => 'empty~winner',
      'music_title' => 'Empty',
      'music_artist' => 'Winner',
      'music_artist_id' => '4747',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538661188,
      'music_last_update_time' => 1409574955,
      'music_title_search' => 'empti',
      'music_artist_search' => '; winer;',
      'music_album_search' => '',
      'music_composer' => 'B.I; PK; Mino; Bobby',
      'music_album' => '',
      'music_listen' => 66586,
      'music_track_id' => 0,
      'music_filename' => '1338058-e70feae6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Geoul soge nae moseubeun teong bin geotcheoreom gongheohae
Honja gireul georeobwado teong bin geori neomu gongheohae
Da ra dat dat dat dat dat dat, baby don\'t worry
Neoran kkumeseo kkaen hyeonsirui...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1356087,
      'music_title_url' => 'sugar-free~t-ara',
      'music_title' => 'Sugar Free',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538963604,
      'music_last_update_time' => 1410549580,
      'music_title_search' => 'xugar fre',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => 'Shinsadong Tiger; Nangi; Beomi',
      'music_album' => '',
      'music_listen' => 797196,
      'music_track_id' => 0,
      'music_filename' => '1356087-06414fa2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Yeogiro wa naegero wa
Yeogiro yeogiro yeogiro wa
Eodireul bwa naegero wa
Syugapeuri syugapeuri syugapeuri syugapeuri.

Eotteoke dodaeche ireoke byeonhaneungeonji machi
Dalkomhan gibuni ijen byeollo...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1375596,
      'music_title_url' => 'im-sorry-cant-stop-live~cnblue',
      'music_title' => 'I\'m Sorry; Can\'t Stop (Live)',
      'music_artist' => 'CNBLUE',
      'music_artist_id' => '4301',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538465640,
      'music_last_update_time' => 1412603405,
      'music_title_search' => 'i m xori; can t xtop; live',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2052,
      'music_track_id' => 0,
      'music_filename' => '1375596-c320e2fc.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[I\'m Sorry]

(It\'s over I\'m sorry)
(Do it do it do it now do it do it do it now)
(Do it do it do it now do it do it do it now).

Mworago nan ne mal moreugesseo
Na sirtaneun ne mareul moreugesseo
W...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1409512,
      'music_title_url' => 'erase~hyolyn-jooyoung-iron',
      'music_title' => 'Erase',
      'music_artist' => 'Hyolyn;Jooyoung;Iron',
      'music_artist_id' => '13639;23698;8356',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538967811,
      'music_last_update_time' => 1416536236,
      'music_title_search' => 'eraxe',
      'music_artist_search' => '; hiolin; joioung; iron;',
      'music_album_search' => '',
      'music_composer' => 'Foo Fighters',
      'music_album' => '',
      'music_listen' => 20466,
      'music_track_id' => 0,
      'music_filename' => '1409512-4ca123b9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '(Hello) manhi bakkwieonne jjarbajin heeoseutaildo
(Hello) jiteun hwajangdo ttansaram gateunde
(Hello) ije ara naran saram
negen uimieopdangeol neukkyeo neukkyeo
kkameokgetji mwo dareun yeoja mannam...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1421830,
      'music_title_url' => 'angel~yoon-mi-rae-tiger-jk-bizzy',
      'music_title' => 'Angel',
      'music_artist' => 'Yoon Mi Rae;Tiger JK;Bizzy',
      'music_artist_id' => '22857;18997;24288',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538966418,
      'music_last_update_time' => 1418112444,
      'music_title_search' => 'angel',
      'music_artist_search' => '; ion mi rae; tiger jk; bizi;',
      'music_album_search' => '',
      'music_composer' => 'Jason Park; Smells; Reno; Yoon Mi Rae; Tiger JK; Bizzy',
      'music_album' => '',
      'music_listen' => 2761,
      'music_track_id' => 0,
      'music_filename' => '1421830-88ff3c53.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'You will always be my
You will always be my.

Neon naui A N G E L seulpeun nareul hangsang miso jitge hae
Nuga mwora haedo you (you) nae mameul nogyeo neoui I love you (you)
Cause you will always b...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1421846,
      'music_title_url' => 'cant-stop-im-a-loner-korean-music-wave-in-beijing-141207~cnblue',
      'music_title' => 'Can\'t Stop; I\'m A Loner (Korean Music Wave In Beijing 141207)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538561185,
      'music_last_update_time' => 1418026189,
      'music_title_search' => 'can t xtop; i m a loner; korean muxic wave in beijing 141207',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2161,
      'music_track_id' => 0,
      'music_filename' => '1421846-1917715c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Harue han beonman geudaen tteoollyeojwoyo miss you
Harue han beonman naneun ijeobolgeyo
Geugeotdo andwaeyo geugeotdo andwaeyo
Geugeotdo andoemyeon geureom nan eotteokhanayo.

Geudae han madie naneu...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1427200,
      'music_title_url' => 'piano-man-the-show-141216~mamamoo',
      'music_title' => 'Piano Man (The Show 141216)',
      'music_artist' => 'Mamamoo',
      'music_artist_id' => '14892',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538521952,
      'music_last_update_time' => 1418951145,
      'music_title_search' => 'piano man; the thow 141216',
      'music_artist_search' => '; mamamo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1222,
      'music_track_id' => 0,
      'music_filename' => '1427200-d6c7f84b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'I\'m ready for some action
Are you ready for perfection
Hey piano man~
Hello um~.

Ani maeryeok eomneun daehwadeuri cham
Senseu hana eomneun aedeul cham
Himjun nae haihildo gongdeurin ripseutikdo
Mo...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1429038,
      'music_title_url' => 'cant-stop-gayo-daejun-141221~cnblue',
      'music_title' => 'Can\'t Stop (Gayo Daejun 141221)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538449082,
      'music_last_update_time' => 1419256552,
      'music_title_search' => 'can t xtop; gaio daejun 14121',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1308,
      'music_track_id' => 0,
      'music_filename' => '1429038-3e78dcc6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Harue han beonman geudaen tteoollyeojwoyo miss you
Harue han beonman naneun ijeobolgeyo
Geugeotdo andwaeyo geugeotdo andwaeyo
Geugeotdo andoemyeon geureom nan eotteokhanayo.

Geudae han madie naneu...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1520531,
      'music_title_url' => 'i-need-you~bts',
      'music_title' => 'I Need You',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538925218,
      'music_last_update_time' => 1436765231,
      'music_title_search' => 'i ned iou',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 72042,
      'music_track_id' => 0,
      'music_filename' => '1520531-305572bd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Fall fall fall heuteojine
Fall fall fall tteoreojine.

Neo ttaeme na ireohge manggajyeo
Geumanhallae ije neo an gajyeo
Moshagesseo mwot gataseo
Jebal pinggye gateun geon samgajwo.

Niga nahante ire...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 542923,
      'music_title_url' => 'thorn-love-empress-ki-ost~4men',
      'music_title' => 'Thorn Love (Empress Ki OST)',
      'music_artist' => '4Men',
      'music_artist_id' => '3466',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533173716,
      'music_last_update_time' => 1405953457,
      'music_title_search' => 'thorn love; emprex ki oxt',
      'music_artist_search' => '; 4men;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 22268,
      'music_track_id' => 0,
      'music_filename' => '542923-03181056.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Naneun wiheomhanikka nae sarangeun
Nareul saranghamyeon halsurok
Gyeolguk neoman dachilji molla
Nareul siheomhajima nae sarangeul
Jeoldae motae motae motae motae motae
Wiheomhanikka neol wihan geon...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 577467,
      'music_title_url' => '30-sexy-music-bank-140110~rain',
      'music_title' => '30 Sexy (Music Bank 140110)',
      'music_artist' => 'Rain',
      'music_artist_id' => '964',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493552107,
      'music_last_update_time' => 1399635799,
      'music_title_search' => '30 xexi; muxic bank 14010',
      'music_artist_search' => '; rain;',
      'music_album_search' => '',
      'music_composer' => 'Bae Jin Ryul; Rain',
      'music_album' => '',
      'music_listen' => 2211,
      'music_track_id' => 0,
      'music_filename' => '577467-90e27a03.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Cause I\'m 30 baby~ Come on over here
I bam gagi jeone naegero wa
Cause I\'m 30 sexy~ hey sexy lady
Jigeum i mudae wie neowa danduri.

I know you modeungeol ara singyeongsseujima
Neukkil su inneun ge...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 577708,
      'music_title_url' => '30-sexy-inkigayo-140112~rain',
      'music_title' => '30 Sexy (Inkigayo 140112)',
      'music_artist' => 'Rain',
      'music_artist_id' => '964',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498221264,
      'music_last_update_time' => 1399635781,
      'music_title_search' => '30 xexi; inkigaio 14012',
      'music_artist_search' => '; rain;',
      'music_album_search' => '',
      'music_composer' => 'Bae Jin Ryul; Rain',
      'music_album' => '',
      'music_listen' => 1899,
      'music_track_id' => 0,
      'music_filename' => '577708-a3474646.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Cause I\'m 30 baby~ Come on over here
I bam gagi jeone naegero wa
Cause I\'m 30 sexy~ hey sexy lady
Jigeum i mudae wie neowa danduri.

I know you modeungeol ara singyeongsseujima
Neukkil su inneun ge...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 578126,
      'music_title_url' => 'follow-me-190114-sbs-inkigayo~got7',
      'music_title' => 'Follow Me (19.01.14 SBS Inkigayo)',
      'music_artist' => 'GOT7',
      'music_artist_id' => '4464',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495095035,
      'music_last_update_time' => 1404144382,
      'music_title_search' => 'folow me; 19 01 14 xbx inkigaio',
      'music_artist_search' => '; got7;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 14002,
      'music_track_id' => 0,
      'music_filename' => '578126-2e310bf1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1 step and 2 step girl
Everyone wanna make that noise
Modu da gachi hands up
Yeogi moyeo hands up
Gireul gireul bikyeora.

Uh wae jakku nal chyedaboji
Naega ganeun gilmada nuguna do hanbeonsshik
Ye...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 578414,
      'music_title_url' => 'shadow-seoul-music-awards-2013~beast',
      'music_title' => 'Shadow (Seoul Music Awards 2013)',
      'music_artist' => 'BEAST',
      'music_artist_id' => '1619',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1476472977,
      'music_last_update_time' => 1399796410,
      'music_title_search' => 'thadow; xeoul muxic awardx 2013',
      'music_artist_search' => '; beaxt;',
      'music_album_search' => '',
      'music_composer' => 'Yong Jun Hyung; Kim Tae Joo',
      'music_album' => '',
      'music_listen' => 3268,
      'music_track_id' => 0,
      'music_filename' => '578414-ce7e4beb.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Shadow Shadow Because I\'m a shadow shadow shadow.

Ha, Rainy Cloudy No light Darkness day N Night neo tteonabeorin
Geuttaebuteo eojjeomyeon Maybe nae jonjae jachega eobseojyeotji
Back in the day hw...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 578562,
      'music_title_url' => 'like-a-star-you-who-came-from-the-stars-ost~kwill',
      'music_title' => 'Like A Star (You Who Came From The Stars OST)',
      'music_artist' => 'K.Will',
      'music_artist_id' => '1528',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532585507,
      'music_last_update_time' => 1425733681,
      'music_title_search' => 'like a xtar; iou who came from the xtarx oxt',
      'music_artist_search' => '; k wil;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5368,
      'music_track_id' => 0,
      'music_filename' => '578562-af192311.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Geudae eodi isseodo
Mueol hago isseodo
Geujeo i nae gaseumeun
Geudael neukkil su itjyo.

Saranghal geot gatatjyo
Saranghal su bakke eobtjyo
Nae nune
Nae mam geu ane
Geudaen byeolcheoreom bitnanikka...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 579733,
      'music_title_url' => 'boy-in-luv-dance-version~bts',
      'music_title' => 'Boy In Luv (Dance Version)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529050894,
      'music_last_update_time' => 1405406292,
      'music_title_search' => 'boi in love; dance verxion',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 37134,
      'music_track_id' => 0,
      'music_filename' => '579733-398a34df.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Doegopa neoui oppa
Neoui sarangi nan neomu gopa
Doegopa neoui oppa
Neol gatgo mal geoya dugo bwa.

Wae nae mameul heundeuneun geonde
Wae nae mameul heundeuneun geonde
Wae nae mameul heundeuneun geo...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1292166,
      'music_title_url' => 'eyes-nose-lips~taeyang',
      'music_title' => 'Eyes, Nose, Lips',
      'music_artist' => 'Taeyang',
      'music_artist_id' => '12145',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538622100,
      'music_last_update_time' => 1401940507,
      'music_title_search' => 'eix noxe lipx',
      'music_artist_search' => '; taeiang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 117544,
      'music_track_id' => 0,
      'music_filename' => '1292166-b0a1a2a9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Mianhae mianhae hajima
Naega chorahaejijanha
Ppal gan yeppeun ibsullo
Eoseo nareul jugigo ga
Naneun gwaenchanha
Majimage uro nareul barabwajwo
Amureohji anheun deus useojwo
Nega bogo sipeul ttae
Gi...',
      'music_artist_html' => '<a href="/ca-si/Taeyang~Y3NuX2FydGlzdH4xMjE0NQ==.html">Taeyang</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1361017,
      'music_title_url' => 'holler~taetiseo',
      'music_title' => 'Holler',
      'music_artist' => 'TaeTiSeo',
      'music_artist_id' => '4787',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538926979,
      'music_last_update_time' => 1410972454,
      'music_title_search' => 'holer',
      'music_artist_search' => '; taetixeo;',
      'music_album_search' => '',
      'music_composer' => 'Figge Boström; Anna Engh fd Nordell; Mafly',
      'music_album' => '',
      'music_listen' => 122829,
      'music_track_id' => 0,
      'music_filename' => '1361017-9a7aa077.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ladies and gentlemen, can you hear me?
I hope you are ready for a fast ride
\'Cause that\'s what we\'re going for tonight
So sit back and buckle up
\'Cause you\'ll be racing with the stars tonight
Liste...',
      'music_artist_html' => '<a href="/ca-si/TaeTiSeo~Y3NuX2FydGlzdH40Nzg3.html">TaeTiSeo</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1432497,
      'music_title_url' => 'cant-stop-kbs-gayo-daechukje-2014-141226~cnblue',
      'music_title' => 'Can\'t Stop (KBS Gayo Daechukje 2014 141226)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538541942,
      'music_last_update_time' => 1419825696,
      'music_title_search' => 'can t xtop; kbx gaio daechukje 2014 14126',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1030,
      'music_track_id' => 0,
      'music_filename' => '1432497-e101f75f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Harue han beonman geudaen tteoollyeojwoyo miss you
Harue han beonman naneun ijeobolgeyo
Geugeotdo andwaeyo geugeotdo andwaeyo
Geugeotdo andoemyeon geureom nan eotteokhanayo.

Geudae han madie naneu...',
      'music_artist_html' => '<a href="/ca-si/CNBlue~Y3NuX2FydGlzdH4yMDY5.html">CNBlue</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1581794,
      'music_title_url' => 'i-need-you-inkigayo-20150524~bts',
      'music_title' => 'I Need You (Inkigayo 20150524)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538925446,
      'music_last_update_time' => 1447377135,
      'music_title_search' => 'i ned iou; inkigaio 20150524',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2790,
      'music_track_id' => 0,
      'music_filename' => '1581794-c69f8137.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Fall fall fall heuteojine
Fall fall fall tteoreojine.

Neo ttaeme na ireohge manggajyeo
Geumanhallae ije neo an gajyeo
Moshagesseo mwot gataseo
Jebal pinggye gateun geon samgajwo.

Niga nahante ire...',
      'music_artist_html' => '<a href="/ca-si/BTS~Y3NuX2FydGlzdH40NzQ4.html">BTS</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1338058,
      'music_title_url' => 'empty~winner',
      'music_title' => 'Empty',
      'music_artist' => 'Winner',
      'music_artist_id' => '4747',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538661188,
      'music_last_update_time' => 1409574955,
      'music_title_search' => 'empti',
      'music_artist_search' => '; winer;',
      'music_album_search' => '',
      'music_composer' => 'B.I; PK; Mino; Bobby',
      'music_album' => '',
      'music_listen' => 66586,
      'music_track_id' => 0,
      'music_filename' => '1338058-e70feae6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Geoul soge nae moseubeun teong bin geotcheoreom gongheohae
Honja gireul georeobwado teong bin geori neomu gongheohae
Da ra dat dat dat dat dat dat, baby don\'t worry
Neoran kkumeseo kkaen hyeonsirui...',
      'music_artist_html' => '<a href="/ca-si/Winner~Y3NuX2FydGlzdH40NzQ3.html">Winner</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1356087,
      'music_title_url' => 'sugar-free~t-ara',
      'music_title' => 'Sugar Free',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538963604,
      'music_last_update_time' => 1410549580,
      'music_title_search' => 'xugar fre',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => 'Shinsadong Tiger; Nangi; Beomi',
      'music_album' => '',
      'music_listen' => 797196,
      'music_track_id' => 0,
      'music_filename' => '1356087-06414fa2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Yeogiro wa naegero wa
Yeogiro yeogiro yeogiro wa
Eodireul bwa naegero wa
Syugapeuri syugapeuri syugapeuri syugapeuri.

Eotteoke dodaeche ireoke byeonhaneungeonji machi
Dalkomhan gibuni ijen byeollo...',
      'music_artist_html' => '<a href="/ca-si/T-Ara~Y3NuX2FydGlzdH4xNDEz.html">T-Ara</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1375596,
      'music_title_url' => 'im-sorry-cant-stop-live~cnblue',
      'music_title' => 'I\'m Sorry; Can\'t Stop (Live)',
      'music_artist' => 'CNBLUE',
      'music_artist_id' => '4301',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538465640,
      'music_last_update_time' => 1412603405,
      'music_title_search' => 'i m xori; can t xtop; live',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2052,
      'music_track_id' => 0,
      'music_filename' => '1375596-c320e2fc.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[I\'m Sorry]

(It\'s over I\'m sorry)
(Do it do it do it now do it do it do it now)
(Do it do it do it now do it do it do it now).

Mworago nan ne mal moreugesseo
Na sirtaneun ne mareul moreugesseo
W...',
      'music_artist_html' => '<a href="/ca-si/CNBLUE~Y3NuX2FydGlzdH40MzAx.html">CNBLUE</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1409512,
      'music_title_url' => 'erase~hyolyn-jooyoung-iron',
      'music_title' => 'Erase',
      'music_artist' => 'Hyolyn;Jooyoung;Iron',
      'music_artist_id' => '13639;23698;8356',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538967811,
      'music_last_update_time' => 1416536236,
      'music_title_search' => 'eraxe',
      'music_artist_search' => '; hiolin; joioung; iron;',
      'music_album_search' => '',
      'music_composer' => 'Foo Fighters',
      'music_album' => '',
      'music_listen' => 20466,
      'music_track_id' => 0,
      'music_filename' => '1409512-4ca123b9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '(Hello) manhi bakkwieonne jjarbajin heeoseutaildo
(Hello) jiteun hwajangdo ttansaram gateunde
(Hello) ije ara naran saram
negen uimieopdangeol neukkyeo neukkyeo
kkameokgetji mwo dareun yeoja mannam...',
      'music_artist_html' => '<a href="/ca-si/Hyolyn~Y3NuX2FydGlzdH4xMzYzOQ==.html">Hyolyn</a>, <a href="/ca-si/Jooyoung~Y3NuX2FydGlzdH4yMzY5OA==.html">Jooyoung</a>, <a href="/ca-si/Iron~Y3NuX2FydGlzdH44MzU2.html">Iron</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1421830,
      'music_title_url' => 'angel~yoon-mi-rae-tiger-jk-bizzy',
      'music_title' => 'Angel',
      'music_artist' => 'Yoon Mi Rae;Tiger JK;Bizzy',
      'music_artist_id' => '22857;18997;24288',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538966418,
      'music_last_update_time' => 1418112444,
      'music_title_search' => 'angel',
      'music_artist_search' => '; ion mi rae; tiger jk; bizi;',
      'music_album_search' => '',
      'music_composer' => 'Jason Park; Smells; Reno; Yoon Mi Rae; Tiger JK; Bizzy',
      'music_album' => '',
      'music_listen' => 2761,
      'music_track_id' => 0,
      'music_filename' => '1421830-88ff3c53.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'You will always be my
You will always be my.

Neon naui A N G E L seulpeun nareul hangsang miso jitge hae
Nuga mwora haedo you (you) nae mameul nogyeo neoui I love you (you)
Cause you will always b...',
      'music_artist_html' => '<a href="/ca-si/Yoon-Mi-Rae~Y3NuX2FydGlzdH4yMjg1Nw==.html">Yoon Mi Rae</a>, <a href="/ca-si/Tiger-JK~Y3NuX2FydGlzdH4xODk5Nw==.html">Tiger JK</a>, <a href="/ca-si/Bizzy~Y3NuX2FydGlzdH4yNDI4OA==.html">Bizzy</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1421846,
      'music_title_url' => 'cant-stop-im-a-loner-korean-music-wave-in-beijing-141207~cnblue',
      'music_title' => 'Can\'t Stop; I\'m A Loner (Korean Music Wave In Beijing 141207)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538561185,
      'music_last_update_time' => 1418026189,
      'music_title_search' => 'can t xtop; i m a loner; korean muxic wave in beijing 141207',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2161,
      'music_track_id' => 0,
      'music_filename' => '1421846-1917715c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Harue han beonman geudaen tteoollyeojwoyo miss you
Harue han beonman naneun ijeobolgeyo
Geugeotdo andwaeyo geugeotdo andwaeyo
Geugeotdo andoemyeon geureom nan eotteokhanayo.

Geudae han madie naneu...',
      'music_artist_html' => '<a href="/ca-si/CNBlue~Y3NuX2FydGlzdH4yMDY5.html">CNBlue</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1427200,
      'music_title_url' => 'piano-man-the-show-141216~mamamoo',
      'music_title' => 'Piano Man (The Show 141216)',
      'music_artist' => 'Mamamoo',
      'music_artist_id' => '14892',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538521952,
      'music_last_update_time' => 1418951145,
      'music_title_search' => 'piano man; the thow 141216',
      'music_artist_search' => '; mamamo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1222,
      'music_track_id' => 0,
      'music_filename' => '1427200-d6c7f84b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'I\'m ready for some action
Are you ready for perfection
Hey piano man~
Hello um~.

Ani maeryeok eomneun daehwadeuri cham
Senseu hana eomneun aedeul cham
Himjun nae haihildo gongdeurin ripseutikdo
Mo...',
      'music_artist_html' => '<a href="/ca-si/Mamamoo~Y3NuX2FydGlzdH4xNDg5Mg==.html">Mamamoo</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1429038,
      'music_title_url' => 'cant-stop-gayo-daejun-141221~cnblue',
      'music_title' => 'Can\'t Stop (Gayo Daejun 141221)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538449082,
      'music_last_update_time' => 1419256552,
      'music_title_search' => 'can t xtop; gaio daejun 14121',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1308,
      'music_track_id' => 0,
      'music_filename' => '1429038-3e78dcc6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Harue han beonman geudaen tteoollyeojwoyo miss you
Harue han beonman naneun ijeobolgeyo
Geugeotdo andwaeyo geugeotdo andwaeyo
Geugeotdo andoemyeon geureom nan eotteokhanayo.

Geudae han madie naneu...',
      'music_artist_html' => '<a href="/ca-si/CNBlue~Y3NuX2FydGlzdH4yMDY5.html">CNBlue</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1520531,
      'music_title_url' => 'i-need-you~bts',
      'music_title' => 'I Need You',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538925218,
      'music_last_update_time' => 1436765231,
      'music_title_search' => 'i ned iou',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 72042,
      'music_track_id' => 0,
      'music_filename' => '1520531-305572bd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Fall fall fall heuteojine
Fall fall fall tteoreojine.

Neo ttaeme na ireohge manggajyeo
Geumanhallae ije neo an gajyeo
Moshagesseo mwot gataseo
Jebal pinggye gateun geon samgajwo.

Niga nahante ire...',
      'music_artist_html' => '<a href="/ca-si/BTS~Y3NuX2FydGlzdH40NzQ4.html">BTS</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 542923,
      'music_title_url' => 'thorn-love-empress-ki-ost~4men',
      'music_title' => 'Thorn Love (Empress Ki OST)',
      'music_artist' => '4Men',
      'music_artist_id' => '3466',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533173716,
      'music_last_update_time' => 1405953457,
      'music_title_search' => 'thorn love; emprex ki oxt',
      'music_artist_search' => '; 4men;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 22268,
      'music_track_id' => 0,
      'music_filename' => '542923-03181056.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Naneun wiheomhanikka nae sarangeun
Nareul saranghamyeon halsurok
Gyeolguk neoman dachilji molla
Nareul siheomhajima nae sarangeul
Jeoldae motae motae motae motae motae
Wiheomhanikka neol wihan geon...',
      'music_artist_html' => '<a href="/ca-si/4Men~Y3NuX2FydGlzdH4zNDY2.html">4Men</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 577467,
      'music_title_url' => '30-sexy-music-bank-140110~rain',
      'music_title' => '30 Sexy (Music Bank 140110)',
      'music_artist' => 'Rain',
      'music_artist_id' => '964',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1493552107,
      'music_last_update_time' => 1399635799,
      'music_title_search' => '30 xexi; muxic bank 14010',
      'music_artist_search' => '; rain;',
      'music_album_search' => '',
      'music_composer' => 'Bae Jin Ryul; Rain',
      'music_album' => '',
      'music_listen' => 2211,
      'music_track_id' => 0,
      'music_filename' => '577467-90e27a03.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Cause I\'m 30 baby~ Come on over here
I bam gagi jeone naegero wa
Cause I\'m 30 sexy~ hey sexy lady
Jigeum i mudae wie neowa danduri.

I know you modeungeol ara singyeongsseujima
Neukkil su inneun ge...',
      'music_artist_html' => '<a href="/ca-si/Rain~Y3NuX2FydGlzdH45NjQ=.html">Rain</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 577708,
      'music_title_url' => '30-sexy-inkigayo-140112~rain',
      'music_title' => '30 Sexy (Inkigayo 140112)',
      'music_artist' => 'Rain',
      'music_artist_id' => '964',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498221264,
      'music_last_update_time' => 1399635781,
      'music_title_search' => '30 xexi; inkigaio 14012',
      'music_artist_search' => '; rain;',
      'music_album_search' => '',
      'music_composer' => 'Bae Jin Ryul; Rain',
      'music_album' => '',
      'music_listen' => 1899,
      'music_track_id' => 0,
      'music_filename' => '577708-a3474646.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Cause I\'m 30 baby~ Come on over here
I bam gagi jeone naegero wa
Cause I\'m 30 sexy~ hey sexy lady
Jigeum i mudae wie neowa danduri.

I know you modeungeol ara singyeongsseujima
Neukkil su inneun ge...',
      'music_artist_html' => '<a href="/ca-si/Rain~Y3NuX2FydGlzdH45NjQ=.html">Rain</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 578126,
      'music_title_url' => 'follow-me-190114-sbs-inkigayo~got7',
      'music_title' => 'Follow Me (19.01.14 SBS Inkigayo)',
      'music_artist' => 'GOT7',
      'music_artist_id' => '4464',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495095035,
      'music_last_update_time' => 1404144382,
      'music_title_search' => 'folow me; 19 01 14 xbx inkigaio',
      'music_artist_search' => '; got7;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 14002,
      'music_track_id' => 0,
      'music_filename' => '578126-2e310bf1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1 step and 2 step girl
Everyone wanna make that noise
Modu da gachi hands up
Yeogi moyeo hands up
Gireul gireul bikyeora.

Uh wae jakku nal chyedaboji
Naega ganeun gilmada nuguna do hanbeonsshik
Ye...',
      'music_artist_html' => '<a href="/ca-si/GOT7~Y3NuX2FydGlzdH40NDY0.html">GOT7</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 578414,
      'music_title_url' => 'shadow-seoul-music-awards-2013~beast',
      'music_title' => 'Shadow (Seoul Music Awards 2013)',
      'music_artist' => 'BEAST',
      'music_artist_id' => '1619',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1476472977,
      'music_last_update_time' => 1399796410,
      'music_title_search' => 'thadow; xeoul muxic awardx 2013',
      'music_artist_search' => '; beaxt;',
      'music_album_search' => '',
      'music_composer' => 'Yong Jun Hyung; Kim Tae Joo',
      'music_album' => '',
      'music_listen' => 3268,
      'music_track_id' => 0,
      'music_filename' => '578414-ce7e4beb.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Shadow Shadow Because I\'m a shadow shadow shadow.

Ha, Rainy Cloudy No light Darkness day N Night neo tteonabeorin
Geuttaebuteo eojjeomyeon Maybe nae jonjae jachega eobseojyeotji
Back in the day hw...',
      'music_artist_html' => '<a href="/ca-si/BEAST~Y3NuX2FydGlzdH4xNjE5.html">BEAST</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 578562,
      'music_title_url' => 'like-a-star-you-who-came-from-the-stars-ost~kwill',
      'music_title' => 'Like A Star (You Who Came From The Stars OST)',
      'music_artist' => 'K.Will',
      'music_artist_id' => '1528',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532585507,
      'music_last_update_time' => 1425733681,
      'music_title_search' => 'like a xtar; iou who came from the xtarx oxt',
      'music_artist_search' => '; k wil;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5368,
      'music_track_id' => 0,
      'music_filename' => '578562-af192311.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Geudae eodi isseodo
Mueol hago isseodo
Geujeo i nae gaseumeun
Geudael neukkil su itjyo.

Saranghal geot gatatjyo
Saranghal su bakke eobtjyo
Nae nune
Nae mam geu ane
Geudaen byeolcheoreom bitnanikka...',
      'music_artist_html' => '<a href="/ca-si/KWill~Y3NuX2FydGlzdH4xNTI4.html">K.Will</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 579733,
      'music_title_url' => 'boy-in-luv-dance-version~bts',
      'music_title' => 'Boy In Luv (Dance Version)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529050894,
      'music_last_update_time' => 1405406292,
      'music_title_search' => 'boi in love; dance verxion',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 37134,
      'music_track_id' => 0,
      'music_filename' => '579733-398a34df.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Doegopa neoui oppa
Neoui sarangi nan neomu gopa
Doegopa neoui oppa
Neol gatgo mal geoya dugo bwa.

Wae nae mameul heundeuneun geonde
Wae nae mameul heundeuneun geonde
Wae nae mameul heundeuneun geo...',
      'music_artist_html' => '<a href="/ca-si/BTS~Y3NuX2FydGlzdH40NzQ4.html">BTS</a>',
    ),
  ),
  5 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1217655,
      'music_title_url' => 'breath-japanese-version~changmin-krystal',
      'music_title' => 'Breath (Japanese Version)',
      'music_artist' => 'Changmin;Krystal',
      'music_artist_id' => '1365;2162',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1500713233,
      'music_last_update_time' => 1477461230,
      'music_title_search' => 'breath; japanexe verxion',
      'music_artist_search' => '; changmin; krixtal;',
      'music_album_search' => '',
      'music_composer' => 'Kim Tae Sung; Choi Hyun Joon; Ishiwatari Jyunji',
      'music_album' => '',
      'music_listen' => 23856,
      'music_track_id' => 0,
      'music_filename' => '1217655-6421d589.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Detewaikenaitowa kattetanoni
Ya hisashiburi da ne
Denwa no koe ga furue te sugu ni
Kokai ga tameiki e to kawatte ku.

De te kureru wake nai to omotte ta kara
Gomen koe ni nara nai no
Ima doko de na...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1775346,
      'music_title_url' => 'yasashiku-suru-yori-kisu-wo-shite-live-b-20141223~watanabe-miyuki',
      'music_title' => 'Yasashiku Suru Yori Kisu wo Shite (やさしくするよりキスをして) (LIVE B 2014.12.23)',
      'music_artist' => 'Watanabe Miyuki',
      'music_artist_id' => '42217',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530134795,
      'music_last_update_time' => 1491363092,
      'music_title_search' => 'iaxathiku xuru iori kixu wo thite; やさしくするよりキスをして ; live b 2014 12 23',
      'music_artist_search' => '; watanabe miuki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1141,
      'music_track_id' => 1,
      'music_filename' => '1775346-4ad7b3b8.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1231984,
      'music_title_url' => 'senbonzakura~yuko-suzuhana-wagakki-band',
      'music_title' => 'Senbonzakura (千本桜)',
      'music_artist' => 'Yuko Suzuhana;Wagakki Band (鈴華ゆう子;和楽器バンド)',
      'music_artist_id' => '41910;42961;42962',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529558634,
      'music_last_update_time' => 1477461220,
      'music_title_search' => 'xenbonzakura; 千本桜',
      'music_artist_search' => '; iuko xuzuhana; wagaki band; 鈴華ゆう子; 和楽器バンド;',
      'music_album_search' => '',
      'music_composer' => 'Kurousa-P',
      'music_album' => '',
      'music_listen' => 31834,
      'music_track_id' => 0,
      'music_filename' => '1231984-71271a6a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Daitan-futeki ni HAIKARA kakumei 
Rairai-rakuraku hansen kokka 
Hinomaru-jirushi no nirinsha korogashi 
Akuryou-taisan AI-SHII-BII-EMU.

Kanjousen o hashirinukete 
Touhon-seisou nan no sono 
Shoune...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1388311,
      'music_title_url' => 'seek-a-light~happiness',
      'music_title' => 'Seek A Light',
      'music_artist' => 'Happiness',
      'music_artist_id' => '56755',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521434964,
      'music_last_update_time' => 1477473518,
      'music_title_search' => 'xek a light',
      'music_artist_search' => '; hapinex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3409,
      'music_track_id' => 0,
      'music_filename' => '1388311-8c140a56.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1390357,
      'music_title_url' => 'do-you-know-me-japanese-version~t-ara',
      'music_title' => 'Do You Know Me? (Japanese Version)',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516788453,
      'music_last_update_time' => 1477465896,
      'music_title_search' => 'do iou know me ; japanexe verxion',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7363,
      'music_track_id' => 0,
      'music_filename' => '1390357-0ad15328.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Na eotteokhae
Wasure tai noni wasure rare nai
Na eotteokhae
Masaka maji ni natte shimai sou
Nee anata dare datta kke?

Hey baby yo baby yo
Hey baby yo baby yo
Nee, you&amp;me
Na na na eotteokhae
He...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1871858,
      'music_title_url' => 'divine~girls-generation',
      'music_title' => 'Divine',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536969957,
      'music_last_update_time' => 1519266095,
      'music_title_search' => 'divine',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 96333,
      'music_track_id' => 0,
      'music_filename' => '1871858-200b36cd.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Oh~ oh~.

Amarini mo moroi no ne
Kimochi wa tayasuku yurete
Yogaakeru to kieru kotae sagashite teru
Tada tachihadakaru kono crossroad
Michishirube ni naru starlight
Oshiete hoshī no ikubeki basho o...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1765585,
      'music_title_url' => 'yume-to-hazakura~hatsune-miku',
      'music_title' => 'Yume To Hazakura (夢と葉桜)',
      'music_artist' => 'Hatsune Miku',
      'music_artist_id' => '2021',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535995685,
      'music_last_update_time' => 1487554038,
      'music_title_search' => 'iume to hazakura; 夢と葉桜',
      'music_artist_search' => '; hatxune miku;',
      'music_album_search' => '',
      'music_composer' => 'Aoki Gekkou',
      'music_album' => '',
      'music_listen' => 1519,
      'music_track_id' => 0,
      'music_filename' => '1765585-c7496c18.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'kono kawa no nagareru ga gotoku
odayaka ni neiro ga kikoeru
fuku kaze ga hoo wo nadete iku
natsukashii omoide ga nijimu

haruka naru sora wa
mune wo saku you ni
wasure kaketa kioku wo samasu
afurer...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1775400,
      'music_title_url' => '12gatsu-no-kangaroo-12-yasashiku-suru-yori-kisu-wo-shite-music-japan-20141~akb48',
      'music_title' => '12gatsu no Kangaroo (12月のカンガルー) ＆ Yasashiku Suru Yori Kisu wo Shite (やさしくするよりキスをして)  (Music Japan 2014.11.30)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498461981,
      'music_last_update_time' => 1490359721,
      'music_title_search' => '12gatxu no kangaro; 12月のカンガルー ＆ iaxathiku xuru iori kixu wo thite; やさしくするよりキスをして ; muxic japan 2014 1 30',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 823,
      'music_track_id' => 1,
      'music_filename' => '1775400-32029c6e.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'SKE48 - 12gatsu no Kangaroo (12月のカンガルー)
Watanabe Miyuki - Yasashiku Suru Yori Kisu wo Shite (やさしくするよりキスをして)',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1793102,
      'music_title_url' => 'sayonara-no-mae-ni~aaa',
      'music_title' => 'Sayonara no Mae ni (さよならの前に)',
      'music_artist' => 'AAA',
      'music_artist_id' => '4400',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1511672239,
      'music_last_update_time' => 1496580006,
      'music_title_search' => 'xaionara no mae ni; さよならの前に',
      'music_artist_search' => '; a;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 880,
      'music_track_id' => 1,
      'music_filename' => '1793102-e0927419.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Saigo no peeji ni ketsumatsu ga aru you ni
Futari no hibi mo owaru toki ga kuru no kana
Yureru kimochi wo mune no oku ni himeta mama
Gomakasu you ni dakishimetari kisu wo shita ne

Furueru yubisaki...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1794825,
      'music_title_url' => 'darling~nishino-kana',
      'music_title' => 'Darling',
      'music_artist' => 'Nishino Kana',
      'music_artist_id' => '13693',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537392664,
      'music_last_update_time' => 1497096949,
      'music_title_search' => 'darling',
      'music_artist_search' => '; nithino kana;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1156,
      'music_track_id' => 0,
      'music_filename' => '1794825-8171d0c6.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Nee Darling nee Darling
Mata terebi tsuketa mama de
Suyasuya donna yume miteru no?
Nee Darling nugippanashi
Kutsushita mo ura gaeshi de
Mou, dare ga katazukeru no?

Itsuka tomodachi to katari atta...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1794830,
      'music_title_url' => 'suki~nishino-kana',
      'music_title' => 'Suki (好き)',
      'music_artist' => 'Nishino Kana',
      'music_artist_id' => '13693',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537392739,
      'music_last_update_time' => 1497096989,
      'music_title_search' => 'xuki; 好き',
      'music_artist_search' => '; nithino kana;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1289,
      'music_track_id' => 0,
      'music_filename' => '1794830-dee78d83.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Kimi ni mo misetai kirei na keshiki mitsuketa kara
Kiite hoshii ano uta wa saikin ki ni naru kara
Kamigata wo sukoshi kaeta toki ichiban ni kimi ni
Misetai no wa doushite?
Oseji datte home kotoba m...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1794832,
      'music_title_url' => 'we-dont-stop~nishino-kana',
      'music_title' => 'We Don\'t Stop',
      'music_artist' => 'Nishino Kana',
      'music_artist_id' => '13693',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537397995,
      'music_last_update_time' => 1497096922,
      'music_title_search' => 'we don t xtop',
      'music_artist_search' => '; nithino kana;',
      'music_album_search' => '',
      'music_composer' => 'GIORGIO 13',
      'music_album' => '',
      'music_listen' => 896,
      'music_track_id' => 0,
      'music_filename' => '1794832-e094f300.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Hiiru mo haki konashite
Sorenari ni jibun de aruiteru
Sukoshi no shippai mo
Mou dekinai koto wakatteru

All the girls, let\'s get wild and let\'s get loud
Onaji saikuru no hibi no naka de
Mada nandat...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1814843,
      'music_title_url' => 'rgto~aklo-salu-hteflon-k-dub-shine',
      'music_title' => 'RGTO',
      'music_artist' => 'AKLO;SALU;H.TEFLON;K DUB SHINE',
      'music_artist_id' => '93924;99016;99112;99113',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530977349,
      'music_last_update_time' => 1502326392,
      'music_title_search' => 'rgto',
      'music_artist_search' => '; aklo; xalu; h teflon; k dub thine;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 386,
      'music_track_id' => 0,
      'music_filename' => '1814843-d416e193.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1816739,
      'music_title_url' => 'seifuku-no-hane-team8~akb48',
      'music_title' => 'Seifuku no Hane (制服の羽) / Team8',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530443789,
      'music_last_update_time' => 1502938912,
      'music_title_search' => 'xeifuku no hane; 制服の羽 ; team8',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 758,
      'music_track_id' => 0,
      'music_filename' => '1816739-d5be3728.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'shigyou CHAIMU ga (shigyou CHAIMU ga)
hibiku chokuzen (hibiku chokuzen)
koutei hashiru kimi wo mado kara miteta
SUKAATO no suso (SUKAATO no suso)
kaze ni hirugaesu sugata ni
KYUN to shiteta

KURASU...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1866785,
      'music_title_url' => 'number-9-japanese-version~t-ara',
      'music_title' => 'Number 9 (Japanese Version)',
      'music_artist' => 'T-ara',
      'music_artist_id' => '4779',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1518775066,
      'music_last_update_time' => 1516843698,
      'music_title_search' => 'number 9; japanexe verxion',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => 'Shinsadong Tiger; Choi Gyu Sung',
      'music_album' => '',
      'music_listen' => 5637,
      'music_track_id' => 0,
      'music_filename' => '1866785-d060623e.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Ooh ooh
Number nine.

Saigo ni miseta anata no kao
Hitomi no oku-yaki tsuita mama
Konna kimochi ni sa setanoni
Zurui wa mou nidoto aenai no?

(number nine) egao no wake mo
(number nine) namida no w...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1866796,
      'music_title_url' => 'do-you-know-me-japanese-version~t-ara',
      'music_title' => 'Do You Know Me? (Japanese Version)',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519330986,
      'music_last_update_time' => 1516844518,
      'music_title_search' => 'do iou know me ; japanexe verxion',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7522,
      'music_track_id' => 0,
      'music_filename' => '1866796-3866cb16.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Na eotteokhae
Wasure tai noni wasure rare nai
Na eotteokhae
Masaka maji ni natte shimai sou.

Nee anata dare datta kke?

Hey baby yo baby yo
Hey baby yo baby yo
Nee, you and me
Na na na eotteokhae...',
    ),
    16 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1882606,
      'music_title_url' => 'eg-anthem-we-are-venus~e-girls',
      'music_title' => 'E.G. Anthem -We Are Venus-',
      'music_artist' => 'E-girls',
      'music_artist_id' => '16093',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1520254345,
      'music_title_search' => 'e g anthem we are venux',
      'music_artist_search' => '; e drlx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 104,
      'music_track_id' => 0,
      'music_filename' => '1882606-22ae21c5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '右にHappiness
左にFlower
E-g-i-r-l-s Go! E-girls!!
前にDream
後ろにGirls
E-g-i-r-l-s Go! E-girls!!
E-g-i-r-l-s Go! E-girls!!
E-g-i-r-l-s Go! E-girls!!

Freakyな夜 揺さぶるFlavor
窮屈な時間にBye-Bye
STEP 鳴らせば 振り向くスポットライ...',
    ),
    17 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1882604,
      'music_title_url' => 'highschoollove~e-girls',
      'music_title' => 'Highschool♡love',
      'music_artist' => 'E-girls',
      'music_artist_id' => '16093',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1520254353,
      'music_title_search' => 'highxchol♡love',
      'music_artist_search' => '; e drlx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 63,
      'music_track_id' => 0,
      'music_filename' => '1882604-72308798.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1901694,
      'music_title_url' => 'nonono-japanese-version~a-pink',
      'music_title' => 'NoNoNo (Japanese Version)',
      'music_artist' => 'A Pink',
      'music_artist_id' => '2310',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1525242831,
      'music_title_search' => 'nonono; japanexe verxion',
      'music_artist_search' => '; a pink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 44405,
      'music_track_id' => 0,
      'music_filename' => '1901694-13fb6162.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Kanashi wa no no no hitorijanai no no no
Itsumo hikari ni natte kureru anata
Ne e kono-te o nigidde itsu datte tayodde mo kowagaranaide.

Kurushi koto areba yasashiku sotto
Yori sottote kiss o kure...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1919074,
      'music_title_url' => 'odoru-ponpokorin~e-girls',
      'music_title' => 'Odoru Ponpokorin (おどるポンポコリン)',
      'music_artist' => 'E-Girls',
      'music_artist_id' => '17821',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538219031,
      'music_last_update_time' => 1529058049,
      'music_title_search' => 'odoru ponpokorin; おどるポンポコリン',
      'music_artist_search' => '; e drlx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 278,
      'music_track_id' => 0,
      'music_filename' => '1919074-21bea8db.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nan demo kan demo minna (hey)
Odori wo odo tte iru yo (iru yo)
Onabe no naka kara bowatto (bowatto)
Inchiki ojisan toujou (hey everybody)

Itsudatte wasurenai Edison wa erai hito
Sonna no joushiki...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1217655,
      'music_title_url' => 'breath-japanese-version~changmin-krystal',
      'music_title' => 'Breath (Japanese Version)',
      'music_artist' => 'Changmin;Krystal',
      'music_artist_id' => '1365;2162',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1500713233,
      'music_last_update_time' => 1477461230,
      'music_title_search' => 'breath; japanexe verxion',
      'music_artist_search' => '; changmin; krixtal;',
      'music_album_search' => '',
      'music_composer' => 'Kim Tae Sung; Choi Hyun Joon; Ishiwatari Jyunji',
      'music_album' => '',
      'music_listen' => 23856,
      'music_track_id' => 0,
      'music_filename' => '1217655-6421d589.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Detewaikenaitowa kattetanoni
Ya hisashiburi da ne
Denwa no koe ga furue te sugu ni
Kokai ga tameiki e to kawatte ku.

De te kureru wake nai to omotte ta kara
Gomen koe ni nara nai no
Ima doko de na...',
      'music_artist_html' => '<a href="/ca-si/Changmin~Y3NuX2FydGlzdH4xMzY1.html">Changmin</a>, <a href="/ca-si/Krystal~Y3NuX2FydGlzdH4yMTYy.html">Krystal</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1775346,
      'music_title_url' => 'yasashiku-suru-yori-kisu-wo-shite-live-b-20141223~watanabe-miyuki',
      'music_title' => 'Yasashiku Suru Yori Kisu wo Shite (やさしくするよりキスをして) (LIVE B 2014.12.23)',
      'music_artist' => 'Watanabe Miyuki',
      'music_artist_id' => '42217',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530134795,
      'music_last_update_time' => 1491363092,
      'music_title_search' => 'iaxathiku xuru iori kixu wo thite; やさしくするよりキスをして ; live b 2014 12 23',
      'music_artist_search' => '; watanabe miuki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1141,
      'music_track_id' => 1,
      'music_filename' => '1775346-4ad7b3b8.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Watanabe-Miyuki~Y3NuX2FydGlzdH40MjIxNw==.html">Watanabe Miyuki</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1231984,
      'music_title_url' => 'senbonzakura~yuko-suzuhana-wagakki-band',
      'music_title' => 'Senbonzakura (千本桜)',
      'music_artist' => 'Yuko Suzuhana;Wagakki Band (鈴華ゆう子;和楽器バンド)',
      'music_artist_id' => '41910;42961;42962',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529558634,
      'music_last_update_time' => 1477461220,
      'music_title_search' => 'xenbonzakura; 千本桜',
      'music_artist_search' => '; iuko xuzuhana; wagaki band; 鈴華ゆう子; 和楽器バンド;',
      'music_album_search' => '',
      'music_composer' => 'Kurousa-P',
      'music_album' => '',
      'music_listen' => 31834,
      'music_track_id' => 0,
      'music_filename' => '1231984-71271a6a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Daitan-futeki ni HAIKARA kakumei 
Rairai-rakuraku hansen kokka 
Hinomaru-jirushi no nirinsha korogashi 
Akuryou-taisan AI-SHII-BII-EMU.

Kanjousen o hashirinukete 
Touhon-seisou nan no sono 
Shoune...',
      'music_artist_html' => '<a href="/ca-si/Yuko-Suzuhana~Y3NuX2FydGlzdH40MTkxMA==.html">Yuko Suzuhana</a>, <a href="/ca-si/Wagakki-Band~Y3NuX2FydGlzdH40Mjk2MQ==.html">Wagakki Band (鈴華ゆう子</a>, <a href="/ca-si/~Y3NuX2FydGlzdH40Mjk2Mg==.html">和楽器バンド)</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1388311,
      'music_title_url' => 'seek-a-light~happiness',
      'music_title' => 'Seek A Light',
      'music_artist' => 'Happiness',
      'music_artist_id' => '56755',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521434964,
      'music_last_update_time' => 1477473518,
      'music_title_search' => 'xek a light',
      'music_artist_search' => '; hapinex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3409,
      'music_track_id' => 0,
      'music_filename' => '1388311-8c140a56.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Happiness~Y3NuX2FydGlzdH41Njc1NQ==.html">Happiness</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1390357,
      'music_title_url' => 'do-you-know-me-japanese-version~t-ara',
      'music_title' => 'Do You Know Me? (Japanese Version)',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516788453,
      'music_last_update_time' => 1477465896,
      'music_title_search' => 'do iou know me ; japanexe verxion',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7363,
      'music_track_id' => 0,
      'music_filename' => '1390357-0ad15328.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Na eotteokhae
Wasure tai noni wasure rare nai
Na eotteokhae
Masaka maji ni natte shimai sou
Nee anata dare datta kke?

Hey baby yo baby yo
Hey baby yo baby yo
Nee, you&amp;me
Na na na eotteokhae
He...',
      'music_artist_html' => '<a href="/ca-si/T-Ara~Y3NuX2FydGlzdH4xNDEz.html">T-Ara</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1871858,
      'music_title_url' => 'divine~girls-generation',
      'music_title' => 'Divine',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536969957,
      'music_last_update_time' => 1519266095,
      'music_title_search' => 'divine',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 96333,
      'music_track_id' => 0,
      'music_filename' => '1871858-200b36cd.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Oh~ oh~.

Amarini mo moroi no ne
Kimochi wa tayasuku yurete
Yogaakeru to kieru kotae sagashite teru
Tada tachihadakaru kono crossroad
Michishirube ni naru starlight
Oshiete hoshī no ikubeki basho o...',
      'music_artist_html' => '<a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH45MjI=.html">Girls\' Generation</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1765585,
      'music_title_url' => 'yume-to-hazakura~hatsune-miku',
      'music_title' => 'Yume To Hazakura (夢と葉桜)',
      'music_artist' => 'Hatsune Miku',
      'music_artist_id' => '2021',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535995685,
      'music_last_update_time' => 1487554038,
      'music_title_search' => 'iume to hazakura; 夢と葉桜',
      'music_artist_search' => '; hatxune miku;',
      'music_album_search' => '',
      'music_composer' => 'Aoki Gekkou',
      'music_album' => '',
      'music_listen' => 1519,
      'music_track_id' => 0,
      'music_filename' => '1765585-c7496c18.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'kono kawa no nagareru ga gotoku
odayaka ni neiro ga kikoeru
fuku kaze ga hoo wo nadete iku
natsukashii omoide ga nijimu

haruka naru sora wa
mune wo saku you ni
wasure kaketa kioku wo samasu
afurer...',
      'music_artist_html' => '<a href="/ca-si/Hatsune-Miku~Y3NuX2FydGlzdH4yMDIx.html">Hatsune Miku</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1775400,
      'music_title_url' => '12gatsu-no-kangaroo-12-yasashiku-suru-yori-kisu-wo-shite-music-japan-20141~akb48',
      'music_title' => '12gatsu no Kangaroo (12月のカンガルー) ＆ Yasashiku Suru Yori Kisu wo Shite (やさしくするよりキスをして)  (Music Japan 2014.11.30)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498461981,
      'music_last_update_time' => 1490359721,
      'music_title_search' => '12gatxu no kangaro; 12月のカンガルー ＆ iaxathiku xuru iori kixu wo thite; やさしくするよりキスをして ; muxic japan 2014 1 30',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 823,
      'music_track_id' => 1,
      'music_filename' => '1775400-32029c6e.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'SKE48 - 12gatsu no Kangaroo (12月のカンガルー)
Watanabe Miyuki - Yasashiku Suru Yori Kisu wo Shite (やさしくするよりキスをして)',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1793102,
      'music_title_url' => 'sayonara-no-mae-ni~aaa',
      'music_title' => 'Sayonara no Mae ni (さよならの前に)',
      'music_artist' => 'AAA',
      'music_artist_id' => '4400',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1511672239,
      'music_last_update_time' => 1496580006,
      'music_title_search' => 'xaionara no mae ni; さよならの前に',
      'music_artist_search' => '; a;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 880,
      'music_track_id' => 1,
      'music_filename' => '1793102-e0927419.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Saigo no peeji ni ketsumatsu ga aru you ni
Futari no hibi mo owaru toki ga kuru no kana
Yureru kimochi wo mune no oku ni himeta mama
Gomakasu you ni dakishimetari kisu wo shita ne

Furueru yubisaki...',
      'music_artist_html' => '<a href="/ca-si/AAA~Y3NuX2FydGlzdH40NDAw.html">AAA</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1794825,
      'music_title_url' => 'darling~nishino-kana',
      'music_title' => 'Darling',
      'music_artist' => 'Nishino Kana',
      'music_artist_id' => '13693',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537392664,
      'music_last_update_time' => 1497096949,
      'music_title_search' => 'darling',
      'music_artist_search' => '; nithino kana;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1156,
      'music_track_id' => 0,
      'music_filename' => '1794825-8171d0c6.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Nee Darling nee Darling
Mata terebi tsuketa mama de
Suyasuya donna yume miteru no?
Nee Darling nugippanashi
Kutsushita mo ura gaeshi de
Mou, dare ga katazukeru no?

Itsuka tomodachi to katari atta...',
      'music_artist_html' => '<a href="/ca-si/Nishino-Kana~Y3NuX2FydGlzdH4xMzY5Mw==.html">Nishino Kana</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1794830,
      'music_title_url' => 'suki~nishino-kana',
      'music_title' => 'Suki (好き)',
      'music_artist' => 'Nishino Kana',
      'music_artist_id' => '13693',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537392739,
      'music_last_update_time' => 1497096989,
      'music_title_search' => 'xuki; 好き',
      'music_artist_search' => '; nithino kana;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1289,
      'music_track_id' => 0,
      'music_filename' => '1794830-dee78d83.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Kimi ni mo misetai kirei na keshiki mitsuketa kara
Kiite hoshii ano uta wa saikin ki ni naru kara
Kamigata wo sukoshi kaeta toki ichiban ni kimi ni
Misetai no wa doushite?
Oseji datte home kotoba m...',
      'music_artist_html' => '<a href="/ca-si/Nishino-Kana~Y3NuX2FydGlzdH4xMzY5Mw==.html">Nishino Kana</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1794832,
      'music_title_url' => 'we-dont-stop~nishino-kana',
      'music_title' => 'We Don\'t Stop',
      'music_artist' => 'Nishino Kana',
      'music_artist_id' => '13693',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537397995,
      'music_last_update_time' => 1497096922,
      'music_title_search' => 'we don t xtop',
      'music_artist_search' => '; nithino kana;',
      'music_album_search' => '',
      'music_composer' => 'GIORGIO 13',
      'music_album' => '',
      'music_listen' => 896,
      'music_track_id' => 0,
      'music_filename' => '1794832-e094f300.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Hiiru mo haki konashite
Sorenari ni jibun de aruiteru
Sukoshi no shippai mo
Mou dekinai koto wakatteru

All the girls, let\'s get wild and let\'s get loud
Onaji saikuru no hibi no naka de
Mada nandat...',
      'music_artist_html' => '<a href="/ca-si/Nishino-Kana~Y3NuX2FydGlzdH4xMzY5Mw==.html">Nishino Kana</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1814843,
      'music_title_url' => 'rgto~aklo-salu-hteflon-k-dub-shine',
      'music_title' => 'RGTO',
      'music_artist' => 'AKLO;SALU;H.TEFLON;K DUB SHINE',
      'music_artist_id' => '93924;99016;99112;99113',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530977349,
      'music_last_update_time' => 1502326392,
      'music_title_search' => 'rgto',
      'music_artist_search' => '; aklo; xalu; h teflon; k dub thine;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 386,
      'music_track_id' => 0,
      'music_filename' => '1814843-d416e193.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKLO~Y3NuX2FydGlzdH45MzkyNA==.html">AKLO</a>, <a href="/ca-si/SALU~Y3NuX2FydGlzdH45OTAxNg==.html">SALU</a>, <a href="/ca-si/HTEFLON~Y3NuX2FydGlzdH45OTExMg==.html">H.TEFLON</a>, <a href="/ca-si/K-DUB-SHINE~Y3NuX2FydGlzdH45OTExMw==.html">K DUB SHINE</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1816739,
      'music_title_url' => 'seifuku-no-hane-team8~akb48',
      'music_title' => 'Seifuku no Hane (制服の羽) / Team8',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530443789,
      'music_last_update_time' => 1502938912,
      'music_title_search' => 'xeifuku no hane; 制服の羽 ; team8',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 758,
      'music_track_id' => 0,
      'music_filename' => '1816739-d5be3728.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'shigyou CHAIMU ga (shigyou CHAIMU ga)
hibiku chokuzen (hibiku chokuzen)
koutei hashiru kimi wo mado kara miteta
SUKAATO no suso (SUKAATO no suso)
kaze ni hirugaesu sugata ni
KYUN to shiteta

KURASU...',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1866785,
      'music_title_url' => 'number-9-japanese-version~t-ara',
      'music_title' => 'Number 9 (Japanese Version)',
      'music_artist' => 'T-ara',
      'music_artist_id' => '4779',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1518775066,
      'music_last_update_time' => 1516843698,
      'music_title_search' => 'number 9; japanexe verxion',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => 'Shinsadong Tiger; Choi Gyu Sung',
      'music_album' => '',
      'music_listen' => 5637,
      'music_track_id' => 0,
      'music_filename' => '1866785-d060623e.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Ooh ooh
Number nine.

Saigo ni miseta anata no kao
Hitomi no oku-yaki tsuita mama
Konna kimochi ni sa setanoni
Zurui wa mou nidoto aenai no?

(number nine) egao no wake mo
(number nine) namida no w...',
      'music_artist_html' => '<a href="/ca-si/T-ara~Y3NuX2FydGlzdH40Nzc5.html">T-ara</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1866796,
      'music_title_url' => 'do-you-know-me-japanese-version~t-ara',
      'music_title' => 'Do You Know Me? (Japanese Version)',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519330986,
      'music_last_update_time' => 1516844518,
      'music_title_search' => 'do iou know me ; japanexe verxion',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7522,
      'music_track_id' => 0,
      'music_filename' => '1866796-3866cb16.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Na eotteokhae
Wasure tai noni wasure rare nai
Na eotteokhae
Masaka maji ni natte shimai sou.

Nee anata dare datta kke?

Hey baby yo baby yo
Hey baby yo baby yo
Nee, you and me
Na na na eotteokhae...',
      'music_artist_html' => '<a href="/ca-si/T-Ara~Y3NuX2FydGlzdH4xNDEz.html">T-Ara</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1882606,
      'music_title_url' => 'eg-anthem-we-are-venus~e-girls',
      'music_title' => 'E.G. Anthem -We Are Venus-',
      'music_artist' => 'E-girls',
      'music_artist_id' => '16093',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1520254345,
      'music_title_search' => 'e g anthem we are venux',
      'music_artist_search' => '; e drlx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 104,
      'music_track_id' => 0,
      'music_filename' => '1882606-22ae21c5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '右にHappiness
左にFlower
E-g-i-r-l-s Go! E-girls!!
前にDream
後ろにGirls
E-g-i-r-l-s Go! E-girls!!
E-g-i-r-l-s Go! E-girls!!
E-g-i-r-l-s Go! E-girls!!

Freakyな夜 揺さぶるFlavor
窮屈な時間にBye-Bye
STEP 鳴らせば 振り向くスポットライ...',
      'music_artist_html' => '<a href="/ca-si/E-girls~Y3NuX2FydGlzdH4xNjA5Mw==.html">E-girls</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1882604,
      'music_title_url' => 'highschoollove~e-girls',
      'music_title' => 'Highschool♡love',
      'music_artist' => 'E-girls',
      'music_artist_id' => '16093',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1520254353,
      'music_title_search' => 'highxchol♡love',
      'music_artist_search' => '; e drlx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 63,
      'music_track_id' => 0,
      'music_filename' => '1882604-72308798.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/E-girls~Y3NuX2FydGlzdH4xNjA5Mw==.html">E-girls</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1901694,
      'music_title_url' => 'nonono-japanese-version~a-pink',
      'music_title' => 'NoNoNo (Japanese Version)',
      'music_artist' => 'A Pink',
      'music_artist_id' => '2310',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1525242831,
      'music_title_search' => 'nonono; japanexe verxion',
      'music_artist_search' => '; a pink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 44405,
      'music_track_id' => 0,
      'music_filename' => '1901694-13fb6162.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Kanashi wa no no no hitorijanai no no no
Itsumo hikari ni natte kureru anata
Ne e kono-te o nigidde itsu datte tayodde mo kowagaranaide.

Kurushi koto areba yasashiku sotto
Yori sottote kiss o kure...',
      'music_artist_html' => '<a href="/ca-si/A-Pink~Y3NuX2FydGlzdH4yMzEw.html">A Pink</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1919074,
      'music_title_url' => 'odoru-ponpokorin~e-girls',
      'music_title' => 'Odoru Ponpokorin (おどるポンポコリン)',
      'music_artist' => 'E-Girls',
      'music_artist_id' => '17821',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538219031,
      'music_last_update_time' => 1529058049,
      'music_title_search' => 'odoru ponpokorin; おどるポンポコリン',
      'music_artist_search' => '; e drlx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 278,
      'music_track_id' => 0,
      'music_filename' => '1919074-21bea8db.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nan demo kan demo minna (hey)
Odori wo odo tte iru yo (iru yo)
Onabe no naka kara bowatto (bowatto)
Inchiki ojisan toujou (hey everybody)

Itsudatte wasurenai Edison wa erai hito
Sonna no joushiki...',
      'music_artist_html' => '<a href="/ca-si/E-Girls~Y3NuX2FydGlzdH4xNzgyMQ==.html">E-Girls</a>',
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
      'music_id' => 1401977,
      'music_title_url' => 'radio~cnblue',
      'music_title' => 'Radio',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538871461,
      'music_last_update_time' => 1415603081,
      'music_title_search' => 'radio',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2567,
      'music_track_id' => 0,
      'music_filename' => '1401977-4f5c7548.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Tooku sora ni hibiku youni
Motto boryumu wo agete ikou
Konnya you wanna dance.

Sousa kono shunkan datte
Kitto omoide ni tokete ikuno darou
Itsuka wa.

Ano hi mune wo kogashita radio
Bokura tsunaid...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1485322,
      'music_title_url' => 'dream~shimizu-shota',
      'music_title' => 'Dream',
      'music_artist' => 'Shimizu Shota',
      'music_artist_id' => '1956',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538562978,
      'music_last_update_time' => 1429752980,
      'music_title_search' => 'dream',
      'music_artist_search' => '; thimizu thota;',
      'music_album_search' => '',
      'music_composer' => 'Shimizu Shota',
      'music_album' => '',
      'music_listen' => 679,
      'music_track_id' => 0,
      'music_filename' => '1485322-e293ea49.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Chorus:]
Kimi ga iru nara 
Donna yume mo kanau youna ki ga shiteru yo 
Kimi ga iru kara 
Akiramenai arigatou kimi ni aete yokatta. 

Hitori bocchi lonely 
Ano koro no koto omoidashite 
Doushiyou m...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1206968,
      'music_title_url' => 'el-perdedor-pop-version~enrique-iglesias-marco-antonio-solis',
      'music_title' => 'El Perdedor (Pop Version)',
      'music_artist' => 'Enrique Iglesias;Marco Antonio Solís',
      'music_artist_id' => '604;40904',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532122457,
      'music_last_update_time' => 1390269630,
      'music_title_search' => 'el perdedor; pop verxion',
      'music_artist_search' => '; enrique iglexiax; marco antonio xolix;',
      'music_album_search' => '',
      'music_composer' => 'Enrique Iglesias',
      'music_album' => '',
      'music_listen' => 13504,
      'music_track_id' => 0,
      'music_filename' => '1206968-5fc6e58e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Qué más quieres de mí 
Si el pasado está a prueba de tu amor 
Y no tengo el valor 
De escapar para siempre del dolor 
Demasiado pedir 
Que sigamos en esta hipocresía 
Cuánto tiempo más podré vivir...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1207500,
      'music_title_url' => 'shout-it-out~boa',
      'music_title' => 'Shout It Out',
      'music_artist' => 'BoA',
      'music_artist_id' => '924',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497626401,
      'music_last_update_time' => 1397464531,
      'music_title_search' => 'thout it out',
      'music_artist_search' => '; boa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 16952,
      'music_track_id' => 0,
      'music_filename' => '1207500-cfbe3bf6.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Sawagidasu weekend sweet shake it out the boogie on parade
Kono sekai wa dancefloor come on DJ do it once more.

Hapuningu tsukimono yori rifujin nara kiku shite odorou
Can you hear me party people...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1213986,
      'music_title_url' => 'let-it-go~jannina-w',
      'music_title' => 'Let It Go',
      'music_artist' => 'Jannina W',
      'music_artist_id' => '36130',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536578892,
      'music_last_update_time' => 1415610293,
      'music_title_search' => 'let it go',
      'music_artist_search' => '; janina w;',
      'music_album_search' => '',
      'music_composer' => 'Kristen Anderson-Lopez; Robert Lopez',
      'music_album' => '',
      'music_listen' => 46039,
      'music_track_id' => 0,
      'music_filename' => '1213986-2a0edb78.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
The snow blows white on the mountain tonight
Not a footprint to be seen
A kingdom of isolation and it looks like I\'m the Queen
The wind is howling like the swirling storm inside
Couldn\'t...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1216774,
      'music_title_url' => 'dont-tell-her-live~sungha-jung',
      'music_title' => 'Don\'t Tell Her (ไม่บอกเธอ) (Live)',
      'music_artist' => 'Sungha Jung',
      'music_artist_id' => '4561',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1392121752,
      'music_last_update_time' => 1403229803,
      'music_title_search' => 'don t tel her; ไม่บอกเธอ ; live',
      'music_artist_search' => '; xungha jung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 557,
      'music_track_id' => 0,
      'music_filename' => '1216774-d74521ef.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1217656,
      'music_title_url' => 'breath-japanese-version~changmin-krystal',
      'music_title' => 'Breath (Japanese Version)',
      'music_artist' => 'Changmin;Krystal',
      'music_artist_id' => '1365;2162',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1399253316,
      'music_last_update_time' => 1392218925,
      'music_title_search' => 'breath; japanexe verxion',
      'music_artist_search' => '; changmin; krixtal;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2885,
      'music_track_id' => 0,
      'music_filename' => '1217656-7e39ac7c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Detewaikenaitowa kattetanoni
Ya hisashiburi da ne
Denwa no koe ga furue te sugu ni
Kokai ga tameiki e to kawatte ku.

De te kureru wake nai to omotte ta kara
Gomen koe ni nara nai no
Ima doko de na...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1218097,
      'music_title_url' => 'breath-japanese-version-vietsub-kara~changmin-krystal',
      'music_title' => 'Breath (Japanese Version) (Vietsub + Kara)',
      'music_artist' => 'Changmin;Krystal',
      'music_artist_id' => '1365;2162',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1415430027,
      'music_last_update_time' => 1399713841,
      'music_title_search' => 'breath; japanexe verxion ; vitxub kara',
      'music_artist_search' => '; changmin; krixtal;',
      'music_album_search' => '',
      'music_composer' => 'Kim Tae Sung; Choi Hyun Joon; Ishiwatari Jyunji',
      'music_album' => '',
      'music_listen' => 5858,
      'music_track_id' => 0,
      'music_filename' => '1218097-31c4cbb3.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Detewaikenaitowa kattetanoni
Ya hisashiburi da ne
Denwa no koe ga furue te sugu ni
Kokai ga tameiki e to kawatte ku.

De te kureru wake nai to omotte ta kara
Gomen koe ni nara nai no
Ima doko de na...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1218495,
      'music_title_url' => 'dont-tell-her~sungha-jung',
      'music_title' => 'Don\'t Tell Her (ไม่บอกเธอ)',
      'music_artist' => 'Sungha Jung',
      'music_artist_id' => '4561',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1442366072,
      'music_last_update_time' => 1403230916,
      'music_title_search' => 'don t tel her; ไม่บอกเธอ',
      'music_artist_search' => '; xungha jung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1646,
      'music_track_id' => 0,
      'music_filename' => '1218495-f1ff4575.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1219644,
      'music_title_url' => 'sigo-haciendo-rap~c-kan-ari-cordova-tito-playaz',
      'music_title' => 'Sigo Haciendo Rap',
      'music_artist' => 'C-Kan;Ari Cordova;Tito Playaz',
      'music_artist_id' => '31161;41865;41866',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495499901,
      'music_last_update_time' => 1403233630,
      'music_title_search' => 'xigo hacindo rap',
      'music_artist_search' => '; c kan; ari cordova; tito plaiaz;',
      'music_album_search' => '',
      'music_composer' => 'C-Kan; Ari Cordova; Tito Playaz',
      'music_album' => '',
      'music_listen' => 2735,
      'music_track_id' => 0,
      'music_filename' => '1219644-16c07dbb.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Mi rap rap sigo haciendo 
Mi rap rap sigo haciendo 
Mi rap rap sigo haciendo 
Mi rap rap sigo haciendo 

Desde pequeño siempre supe 
Que iba a ser un rapero 
Rap de primero rap callejero 
Muchas no...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1221345,
      'music_title_url' => 'blind-japanese-version~yesung',
      'music_title' => 'Blind (Japanese Version)',
      'music_artist' => 'Yesung',
      'music_artist_id' => '14412',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495419507,
      'music_last_update_time' => 1397616258,
      'music_title_search' => 'blind; japanexe verxion',
      'music_artist_search' => '; ixung;',
      'music_album_search' => '',
      'music_composer' => 'Choi Hyun Joon; Hwang Seung Chan; Hamasaki Natsuko',
      'music_album' => '',
      'music_listen' => 3857,
      'music_track_id' => 0,
      'music_filename' => '1221345-b345fb23.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Yume no youdatta kimi ni deaeta hi
Kokoro ga zawameite nazedaka itoshikute
Isshun de koi shita yo.

Demo sono kimochi wa
Kimi wo kurushimete shimatteta.

Nee boku no seida yo kimi ga kiete ku
Namid...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1221501,
      'music_title_url' => 'lead-the-way~t-ara',
      'music_title' => 'Lead The Way',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1392998901,
      'music_last_update_time' => 1392992273,
      'music_title_search' => 'lead the wai',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10452,
      'music_track_id' => 0,
      'music_filename' => '1221501-2617a850.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'mitsukete shimatta no itsumo to chigau kimi 
konna fuuni mo waraerunda ne 
umaretate no himitsu zawameki dasu mune ni 
kotoba nanka irai no

ai wa kitto Lead the way kidzuita totan ni 
subete wo ka...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1221541,
      'music_title_url' => 'lead-the-way~t-ara',
      'music_title' => 'Lead The Way',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1506564099,
      'music_last_update_time' => 1396823114,
      'music_title_search' => 'lead the wai',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 211095,
      'music_track_id' => 0,
      'music_filename' => '1221541-b431f610.mp4',
      'music_bitrate' => 96,
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
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1225368,
      'music_title_url' => 'arriettys-song~sungha-jung',
      'music_title' => 'Arrietty\'s Song',
      'music_artist' => 'Sungha Jung',
      'music_artist_id' => '4561',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1458462936,
      'music_last_update_time' => 1403182536,
      'music_title_search' => 'ariti x xong',
      'music_artist_search' => '; xungha jung;',
      'music_album_search' => '',
      'music_composer' => 'Cecile Corbel',
      'music_album' => '',
      'music_listen' => 1440,
      'music_track_id' => 0,
      'music_filename' => '1225368-1e0ac704.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'I\'m 14 years old, I\'m pretty
Genki na chiisai lady.

Yuka shita ni zutto
Karigurashi shiteta no.

Toki ni wa happy toki ni wa blue
Dareka ni aitai.

Kaze kami ni kanjite
Sora wo nagametai
Anata ni...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1228823,
      'music_title_url' => 'adrenalina~wisin-jennifer-lopez-ricky-martin',
      'music_title' => 'Adrenalina',
      'music_artist' => 'Wisin;Jennifer Lopez;Ricky Martin',
      'music_artist_id' => '959;70;4983',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531128483,
      'music_last_update_time' => 1478507720,
      'music_title_search' => 'adrenalina',
      'music_artist_search' => '; wixin; jenifer lopez; ricki martin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 36588,
      'music_track_id' => 0,
      'music_filename' => '1228823-87c987dc.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Te di?? but you keep playing harder
When you work out, damn you know how to move!
You like to play me, and tease me with your lips
Es puro sexo all the thing that you do.

Because your body is pure...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1231297,
      'music_title_url' => 'senbonzakura~yuko-suzuhana-with-wagakki-band-with',
      'music_title' => 'Senbonzakura (千本桜)',
      'music_artist' => 'Yuko Suzuhana with Wagakki Band (鈴華ゆう子with和楽器バンド)',
      'music_artist_id' => '42881',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1400064368,
      'music_last_update_time' => 1394343048,
      'music_title_search' => 'xenbonzakura; 千本桜',
      'music_artist_search' => '; iuko xuzuhana with wagaki band; 鈴華ゆう子with和楽器バンド;',
      'music_album_search' => '',
      'music_composer' => 'Kurousa-P',
      'music_album' => '',
      'music_listen' => 3953,
      'music_track_id' => 0,
      'music_filename' => '1231297-78883111.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'SenbonZakura Muôn ngàn đoá hoa anh đào
Link youtube 1080p http://www.youtube.com/watch?v=K_xTet06SUo

Daitan-futeki ni HAIKARA kakumei 
rairai-rakuraku hansen kokka 
hinomaru-jirushi no nirinsha ko...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1232001,
      'music_title_url' => 'lead-the-way-jiyeon-version~t-ara',
      'music_title' => 'Lead The Way (Jiyeon Version)',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496971940,
      'music_last_update_time' => 1399709826,
      'music_title_search' => 'lead the wai; jion verxion',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 15899,
      'music_track_id' => 0,
      'music_filename' => '1232001-ce7f1ce3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Mitsuketa shimatta no
Itsumo to chigau kimi
Konna fuunimo waraerunda ne
Umaretate no himitsu
Zawameki dasu mune ni
Kotoba nanka iranai no.

Aiwa kitto lead the way
Kidzuita totanni
Subete o kaete s...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1232430,
      'music_title_url' => 'mai-mai~mark-withawat',
      'music_title' => 'Mãi Mãi',
      'music_artist' => 'Mark Withawat',
      'music_artist_id' => '42997',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496610178,
      'music_last_update_time' => 1403838585,
      'music_title_search' => 'mai mai',
      'music_artist_search' => '; mark withawat;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2824,
      'music_track_id' => 0,
      'music_filename' => '1232430-6cced6e9.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1233022,
      'music_title_url' => 'lead-the-way-soyeon-version~t-ara',
      'music_title' => 'Lead The Way (Soyeon Version)',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1502862368,
      'music_last_update_time' => 1399709711,
      'music_title_search' => 'lead the wai; xoion verxion',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 18762,
      'music_track_id' => 0,
      'music_filename' => '1233022-e3c71a86.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Mitsuketa shimatta no
Itsumo to chigau kimi
Konna fuunimo waraerunda ne
Umaretate no himitsu
Zawameki dasu mune ni
Kotoba nanka iranai no.

Aiwa kitto lead the way
Kidzuita totanni
Subete o kaete s...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1233532,
      'music_title_url' => 'tree-of-life-vietsub-kara~dbsk',
      'music_title' => 'Tree Of Life (Vietsub + Kara)',
      'music_artist' => 'DBSK',
      'music_artist_id' => '212',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495276547,
      'music_last_update_time' => 1397370697,
      'music_title_search' => 'che of life; vitxub kara',
      'music_artist_search' => '; dbxk;',
      'music_album_search' => '',
      'music_composer' => 'Shinjiroh Inoue',
      'music_album' => '',
      'music_listen' => 15701,
      'music_track_id' => 0,
      'music_filename' => '1233532-169185ae.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '(Brought to you by 360kpop.com subbing team)

Namo nai futaba ga kono basho ni mebuite
Hikari aru sora ni mukete kenmei ni miki o nobashi
Itsu no hinika yurugi nonai okina kini natteita.

Haruni wa...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1401977,
      'music_title_url' => 'radio~cnblue',
      'music_title' => 'Radio',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538871461,
      'music_last_update_time' => 1415603081,
      'music_title_search' => 'radio',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2567,
      'music_track_id' => 0,
      'music_filename' => '1401977-4f5c7548.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Tooku sora ni hibiku youni
Motto boryumu wo agete ikou
Konnya you wanna dance.

Sousa kono shunkan datte
Kitto omoide ni tokete ikuno darou
Itsuka wa.

Ano hi mune wo kogashita radio
Bokura tsunaid...',
      'music_artist_html' => '<a href="/ca-si/CNBlue~Y3NuX2FydGlzdH4yMDY5.html">CNBlue</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1485322,
      'music_title_url' => 'dream~shimizu-shota',
      'music_title' => 'Dream',
      'music_artist' => 'Shimizu Shota',
      'music_artist_id' => '1956',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538562978,
      'music_last_update_time' => 1429752980,
      'music_title_search' => 'dream',
      'music_artist_search' => '; thimizu thota;',
      'music_album_search' => '',
      'music_composer' => 'Shimizu Shota',
      'music_album' => '',
      'music_listen' => 679,
      'music_track_id' => 0,
      'music_filename' => '1485322-e293ea49.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Chorus:]
Kimi ga iru nara 
Donna yume mo kanau youna ki ga shiteru yo 
Kimi ga iru kara 
Akiramenai arigatou kimi ni aete yokatta. 

Hitori bocchi lonely 
Ano koro no koto omoidashite 
Doushiyou m...',
      'music_artist_html' => '<a href="/ca-si/Shimizu-Shota~Y3NuX2FydGlzdH4xOTU2.html">Shimizu Shota</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1206968,
      'music_title_url' => 'el-perdedor-pop-version~enrique-iglesias-marco-antonio-solis',
      'music_title' => 'El Perdedor (Pop Version)',
      'music_artist' => 'Enrique Iglesias;Marco Antonio Solís',
      'music_artist_id' => '604;40904',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532122457,
      'music_last_update_time' => 1390269630,
      'music_title_search' => 'el perdedor; pop verxion',
      'music_artist_search' => '; enrique iglexiax; marco antonio xolix;',
      'music_album_search' => '',
      'music_composer' => 'Enrique Iglesias',
      'music_album' => '',
      'music_listen' => 13504,
      'music_track_id' => 0,
      'music_filename' => '1206968-5fc6e58e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Qué más quieres de mí 
Si el pasado está a prueba de tu amor 
Y no tengo el valor 
De escapar para siempre del dolor 
Demasiado pedir 
Que sigamos en esta hipocresía 
Cuánto tiempo más podré vivir...',
      'music_artist_html' => '<a href="/ca-si/Enrique-Iglesias~Y3NuX2FydGlzdH42MDQ=.html">Enrique Iglesias</a>, <a href="/ca-si/Marco-Antonio-Solis~Y3NuX2FydGlzdH40MDkwNA==.html">Marco Antonio Solís</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1207500,
      'music_title_url' => 'shout-it-out~boa',
      'music_title' => 'Shout It Out',
      'music_artist' => 'BoA',
      'music_artist_id' => '924',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1497626401,
      'music_last_update_time' => 1397464531,
      'music_title_search' => 'thout it out',
      'music_artist_search' => '; boa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 16952,
      'music_track_id' => 0,
      'music_filename' => '1207500-cfbe3bf6.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Sawagidasu weekend sweet shake it out the boogie on parade
Kono sekai wa dancefloor come on DJ do it once more.

Hapuningu tsukimono yori rifujin nara kiku shite odorou
Can you hear me party people...',
      'music_artist_html' => '<a href="/ca-si/BoA~Y3NuX2FydGlzdH45MjQ=.html">BoA</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1213986,
      'music_title_url' => 'let-it-go~jannina-w',
      'music_title' => 'Let It Go',
      'music_artist' => 'Jannina W',
      'music_artist_id' => '36130',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536578892,
      'music_last_update_time' => 1415610293,
      'music_title_search' => 'let it go',
      'music_artist_search' => '; janina w;',
      'music_album_search' => '',
      'music_composer' => 'Kristen Anderson-Lopez; Robert Lopez',
      'music_album' => '',
      'music_listen' => 46039,
      'music_track_id' => 0,
      'music_filename' => '1213986-2a0edb78.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
The snow blows white on the mountain tonight
Not a footprint to be seen
A kingdom of isolation and it looks like I\'m the Queen
The wind is howling like the swirling storm inside
Couldn\'t...',
      'music_artist_html' => '<a href="/ca-si/Jannina-W~Y3NuX2FydGlzdH4zNjEzMA==.html">Jannina W</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1216774,
      'music_title_url' => 'dont-tell-her-live~sungha-jung',
      'music_title' => 'Don\'t Tell Her (ไม่บอกเธอ) (Live)',
      'music_artist' => 'Sungha Jung',
      'music_artist_id' => '4561',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1392121752,
      'music_last_update_time' => 1403229803,
      'music_title_search' => 'don t tel her; ไม่บอกเธอ ; live',
      'music_artist_search' => '; xungha jung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 557,
      'music_track_id' => 0,
      'music_filename' => '1216774-d74521ef.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Sungha-Jung~Y3NuX2FydGlzdH40NTYx.html">Sungha Jung</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1217656,
      'music_title_url' => 'breath-japanese-version~changmin-krystal',
      'music_title' => 'Breath (Japanese Version)',
      'music_artist' => 'Changmin;Krystal',
      'music_artist_id' => '1365;2162',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1399253316,
      'music_last_update_time' => 1392218925,
      'music_title_search' => 'breath; japanexe verxion',
      'music_artist_search' => '; changmin; krixtal;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2885,
      'music_track_id' => 0,
      'music_filename' => '1217656-7e39ac7c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Detewaikenaitowa kattetanoni
Ya hisashiburi da ne
Denwa no koe ga furue te sugu ni
Kokai ga tameiki e to kawatte ku.

De te kureru wake nai to omotte ta kara
Gomen koe ni nara nai no
Ima doko de na...',
      'music_artist_html' => '<a href="/ca-si/Changmin~Y3NuX2FydGlzdH4xMzY1.html">Changmin</a>, <a href="/ca-si/Krystal~Y3NuX2FydGlzdH4yMTYy.html">Krystal</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1218097,
      'music_title_url' => 'breath-japanese-version-vietsub-kara~changmin-krystal',
      'music_title' => 'Breath (Japanese Version) (Vietsub + Kara)',
      'music_artist' => 'Changmin;Krystal',
      'music_artist_id' => '1365;2162',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1415430027,
      'music_last_update_time' => 1399713841,
      'music_title_search' => 'breath; japanexe verxion ; vitxub kara',
      'music_artist_search' => '; changmin; krixtal;',
      'music_album_search' => '',
      'music_composer' => 'Kim Tae Sung; Choi Hyun Joon; Ishiwatari Jyunji',
      'music_album' => '',
      'music_listen' => 5858,
      'music_track_id' => 0,
      'music_filename' => '1218097-31c4cbb3.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Detewaikenaitowa kattetanoni
Ya hisashiburi da ne
Denwa no koe ga furue te sugu ni
Kokai ga tameiki e to kawatte ku.

De te kureru wake nai to omotte ta kara
Gomen koe ni nara nai no
Ima doko de na...',
      'music_artist_html' => '<a href="/ca-si/Changmin~Y3NuX2FydGlzdH4xMzY1.html">Changmin</a>, <a href="/ca-si/Krystal~Y3NuX2FydGlzdH4yMTYy.html">Krystal</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1218495,
      'music_title_url' => 'dont-tell-her~sungha-jung',
      'music_title' => 'Don\'t Tell Her (ไม่บอกเธอ)',
      'music_artist' => 'Sungha Jung',
      'music_artist_id' => '4561',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1442366072,
      'music_last_update_time' => 1403230916,
      'music_title_search' => 'don t tel her; ไม่บอกเธอ',
      'music_artist_search' => '; xungha jung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1646,
      'music_track_id' => 0,
      'music_filename' => '1218495-f1ff4575.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Sungha-Jung~Y3NuX2FydGlzdH40NTYx.html">Sungha Jung</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1219644,
      'music_title_url' => 'sigo-haciendo-rap~c-kan-ari-cordova-tito-playaz',
      'music_title' => 'Sigo Haciendo Rap',
      'music_artist' => 'C-Kan;Ari Cordova;Tito Playaz',
      'music_artist_id' => '31161;41865;41866',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495499901,
      'music_last_update_time' => 1403233630,
      'music_title_search' => 'xigo hacindo rap',
      'music_artist_search' => '; c kan; ari cordova; tito plaiaz;',
      'music_album_search' => '',
      'music_composer' => 'C-Kan; Ari Cordova; Tito Playaz',
      'music_album' => '',
      'music_listen' => 2735,
      'music_track_id' => 0,
      'music_filename' => '1219644-16c07dbb.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Mi rap rap sigo haciendo 
Mi rap rap sigo haciendo 
Mi rap rap sigo haciendo 
Mi rap rap sigo haciendo 

Desde pequeño siempre supe 
Que iba a ser un rapero 
Rap de primero rap callejero 
Muchas no...',
      'music_artist_html' => '<a href="/ca-si/C-Kan~Y3NuX2FydGlzdH4zMTE2MQ==.html">C-Kan</a>, <a href="/ca-si/Ari-Cordova~Y3NuX2FydGlzdH40MTg2NQ==.html">Ari Cordova</a>, <a href="/ca-si/Tito-Playaz~Y3NuX2FydGlzdH40MTg2Ng==.html">Tito Playaz</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1221345,
      'music_title_url' => 'blind-japanese-version~yesung',
      'music_title' => 'Blind (Japanese Version)',
      'music_artist' => 'Yesung',
      'music_artist_id' => '14412',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495419507,
      'music_last_update_time' => 1397616258,
      'music_title_search' => 'blind; japanexe verxion',
      'music_artist_search' => '; ixung;',
      'music_album_search' => '',
      'music_composer' => 'Choi Hyun Joon; Hwang Seung Chan; Hamasaki Natsuko',
      'music_album' => '',
      'music_listen' => 3857,
      'music_track_id' => 0,
      'music_filename' => '1221345-b345fb23.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Yume no youdatta kimi ni deaeta hi
Kokoro ga zawameite nazedaka itoshikute
Isshun de koi shita yo.

Demo sono kimochi wa
Kimi wo kurushimete shimatteta.

Nee boku no seida yo kimi ga kiete ku
Namid...',
      'music_artist_html' => '<a href="/ca-si/Yesung~Y3NuX2FydGlzdH4xNDQxMg==.html">Yesung</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1221501,
      'music_title_url' => 'lead-the-way~t-ara',
      'music_title' => 'Lead The Way',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1392998901,
      'music_last_update_time' => 1392992273,
      'music_title_search' => 'lead the wai',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10452,
      'music_track_id' => 0,
      'music_filename' => '1221501-2617a850.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'mitsukete shimatta no itsumo to chigau kimi 
konna fuuni mo waraerunda ne 
umaretate no himitsu zawameki dasu mune ni 
kotoba nanka irai no

ai wa kitto Lead the way kidzuita totan ni 
subete wo ka...',
      'music_artist_html' => '<a href="/ca-si/T-Ara~Y3NuX2FydGlzdH4xNDEz.html">T-Ara</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1221541,
      'music_title_url' => 'lead-the-way~t-ara',
      'music_title' => 'Lead The Way',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1506564099,
      'music_last_update_time' => 1396823114,
      'music_title_search' => 'lead the wai',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 211095,
      'music_track_id' => 0,
      'music_filename' => '1221541-b431f610.mp4',
      'music_bitrate' => 96,
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
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1225368,
      'music_title_url' => 'arriettys-song~sungha-jung',
      'music_title' => 'Arrietty\'s Song',
      'music_artist' => 'Sungha Jung',
      'music_artist_id' => '4561',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1458462936,
      'music_last_update_time' => 1403182536,
      'music_title_search' => 'ariti x xong',
      'music_artist_search' => '; xungha jung;',
      'music_album_search' => '',
      'music_composer' => 'Cecile Corbel',
      'music_album' => '',
      'music_listen' => 1440,
      'music_track_id' => 0,
      'music_filename' => '1225368-1e0ac704.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'I\'m 14 years old, I\'m pretty
Genki na chiisai lady.

Yuka shita ni zutto
Karigurashi shiteta no.

Toki ni wa happy toki ni wa blue
Dareka ni aitai.

Kaze kami ni kanjite
Sora wo nagametai
Anata ni...',
      'music_artist_html' => '<a href="/ca-si/Sungha-Jung~Y3NuX2FydGlzdH40NTYx.html">Sungha Jung</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1228823,
      'music_title_url' => 'adrenalina~wisin-jennifer-lopez-ricky-martin',
      'music_title' => 'Adrenalina',
      'music_artist' => 'Wisin;Jennifer Lopez;Ricky Martin',
      'music_artist_id' => '959;70;4983',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531128483,
      'music_last_update_time' => 1478507720,
      'music_title_search' => 'adrenalina',
      'music_artist_search' => '; wixin; jenifer lopez; ricki martin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 36588,
      'music_track_id' => 0,
      'music_filename' => '1228823-87c987dc.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Te di?? but you keep playing harder
When you work out, damn you know how to move!
You like to play me, and tease me with your lips
Es puro sexo all the thing that you do.

Because your body is pure...',
      'music_artist_html' => '<a href="/ca-si/Wisin~Y3NuX2FydGlzdH45NTk=.html">Wisin</a>, <a href="/ca-si/Jennifer-Lopez~Y3NuX2FydGlzdH43MA==.html">Jennifer Lopez</a>, <a href="/ca-si/Ricky-Martin~Y3NuX2FydGlzdH40OTgz.html">Ricky Martin</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1231297,
      'music_title_url' => 'senbonzakura~yuko-suzuhana-with-wagakki-band-with',
      'music_title' => 'Senbonzakura (千本桜)',
      'music_artist' => 'Yuko Suzuhana with Wagakki Band (鈴華ゆう子with和楽器バンド)',
      'music_artist_id' => '42881',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1400064368,
      'music_last_update_time' => 1394343048,
      'music_title_search' => 'xenbonzakura; 千本桜',
      'music_artist_search' => '; iuko xuzuhana with wagaki band; 鈴華ゆう子with和楽器バンド;',
      'music_album_search' => '',
      'music_composer' => 'Kurousa-P',
      'music_album' => '',
      'music_listen' => 3953,
      'music_track_id' => 0,
      'music_filename' => '1231297-78883111.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'SenbonZakura Muôn ngàn đoá hoa anh đào
Link youtube 1080p http://www.youtube.com/watch?v=K_xTet06SUo

Daitan-futeki ni HAIKARA kakumei 
rairai-rakuraku hansen kokka 
hinomaru-jirushi no nirinsha ko...',
      'music_artist_html' => '<a href="/ca-si/Yuko-Suzuhana-with-Wagakki-Band-with~Y3NuX2FydGlzdH40Mjg4MQ==.html">Yuko Suzuhana with Wagakki Band (鈴華ゆう子with和楽器バンド)</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1232001,
      'music_title_url' => 'lead-the-way-jiyeon-version~t-ara',
      'music_title' => 'Lead The Way (Jiyeon Version)',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496971940,
      'music_last_update_time' => 1399709826,
      'music_title_search' => 'lead the wai; jion verxion',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 15899,
      'music_track_id' => 0,
      'music_filename' => '1232001-ce7f1ce3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Mitsuketa shimatta no
Itsumo to chigau kimi
Konna fuunimo waraerunda ne
Umaretate no himitsu
Zawameki dasu mune ni
Kotoba nanka iranai no.

Aiwa kitto lead the way
Kidzuita totanni
Subete o kaete s...',
      'music_artist_html' => '<a href="/ca-si/T-Ara~Y3NuX2FydGlzdH4xNDEz.html">T-Ara</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1232430,
      'music_title_url' => 'mai-mai~mark-withawat',
      'music_title' => 'Mãi Mãi',
      'music_artist' => 'Mark Withawat',
      'music_artist_id' => '42997',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496610178,
      'music_last_update_time' => 1403838585,
      'music_title_search' => 'mai mai',
      'music_artist_search' => '; mark withawat;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2824,
      'music_track_id' => 0,
      'music_filename' => '1232430-6cced6e9.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Mark-Withawat~Y3NuX2FydGlzdH40Mjk5Nw==.html">Mark Withawat</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1233022,
      'music_title_url' => 'lead-the-way-soyeon-version~t-ara',
      'music_title' => 'Lead The Way (Soyeon Version)',
      'music_artist' => 'T-Ara',
      'music_artist_id' => '1413',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1502862368,
      'music_last_update_time' => 1399709711,
      'music_title_search' => 'lead the wai; xoion verxion',
      'music_artist_search' => '; t ara;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 18762,
      'music_track_id' => 0,
      'music_filename' => '1233022-e3c71a86.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Mitsuketa shimatta no
Itsumo to chigau kimi
Konna fuunimo waraerunda ne
Umaretate no himitsu
Zawameki dasu mune ni
Kotoba nanka iranai no.

Aiwa kitto lead the way
Kidzuita totanni
Subete o kaete s...',
      'music_artist_html' => '<a href="/ca-si/T-Ara~Y3NuX2FydGlzdH4xNDEz.html">T-Ara</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1233532,
      'music_title_url' => 'tree-of-life-vietsub-kara~dbsk',
      'music_title' => 'Tree Of Life (Vietsub + Kara)',
      'music_artist' => 'DBSK',
      'music_artist_id' => '212',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495276547,
      'music_last_update_time' => 1397370697,
      'music_title_search' => 'che of life; vitxub kara',
      'music_artist_search' => '; dbxk;',
      'music_album_search' => '',
      'music_composer' => 'Shinjiroh Inoue',
      'music_album' => '',
      'music_listen' => 15701,
      'music_track_id' => 0,
      'music_filename' => '1233532-169185ae.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '(Brought to you by 360kpop.com subbing team)

Namo nai futaba ga kono basho ni mebuite
Hikari aru sora ni mukete kenmei ni miki o nobashi
Itsu no hinika yurugi nonai okina kini natteita.

Haruni wa...',
      'music_artist_html' => '<a href="/ca-si/DBSK~Y3NuX2FydGlzdH4yMTI=.html">DBSK</a>',
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