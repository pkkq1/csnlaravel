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
      'music_downloads_today' => 5,
      'music_id' => 1552159,
      'music_title_url' => 'sau-tim-thiep-hong~dan-nguyen-hoang-thuc-linh',
      'music_title' => 'Sầu Tím Thiệp Hồng',
      'music_artist' => 'Đan Nguyên;Hoàng Thục Linh',
      'music_artist_id' => '2347;13153',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539047468,
      'music_last_update_time' => 1442281423,
      'music_title_search' => 'xau tim thip hong',
      'music_artist_search' => '; dan ngin; hoang thuc linh;',
      'music_album_search' => '',
      'music_composer' => 'Hoài Linh',
      'music_album' => '',
      'music_listen' => 369887,
      'music_track_id' => 0,
      'music_filename' => '1552159-7897244a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Từ lúc quen nhau chưa nói một lời gì
Tỏ tình ta mến nhau
Nhiều đêm ngắm sao, mơ ước duyên mình bền lâu
Suốt đời tình thắm sâu.

Nhớ thương đầy vơi, mộng thấy ai mỉm cười
Làn môi xinh tuyệt vời
Để r...',
    ),
    1 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1567345,
      'music_title_url' => 'con-mo-bang-gia~bang-kieu',
      'music_title' => 'Cơn Mơ Băng Giá',
      'music_artist' => 'Bằng Kiều',
      'music_artist_id' => '1258',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538944410,
      'music_last_update_time' => 1444868020,
      'music_title_search' => 'con mo bang da',
      'music_artist_search' => '; bang kiu;',
      'music_album_search' => '',
      'music_composer' => 'Lê Thành Trung',
      'music_album' => '',
      'music_listen' => 92297,
      'music_track_id' => 0,
      'music_filename' => '1567345-897916e6.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nhìn từng giọt mưa nhẹ rơi ngoài hiên
Nơi xa em có hay không
Chân trời kia ngồi trong màn sương
Chờ đợi em sẽ quay về.

Con đường xưa giờ đây ngơ ngát
Ngập đầy tuyết rơi giá lạnh
Tìm về đâu ngày xư...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1567643,
      'music_title_url' => 'mai-tim-nhau~quang-le-mai-thien-van',
      'music_title' => 'Mãi Tìm Nhau',
      'music_artist' => 'Quang Lê;Mai Thiên Vân',
      'music_artist_id' => '1770;2316',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538738685,
      'music_last_update_time' => 1474448471,
      'music_title_search' => 'mai tim nhau',
      'music_artist_search' => '; quang le; mai thin van;',
      'music_album_search' => '',
      'music_composer' => 'Hàn Châu',
      'music_album' => '',
      'music_listen' => 331278,
      'music_track_id' => 0,
      'music_filename' => '1567643-5cd85835.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Biết nhớ em nhiều cũng thế thôi
Nhớ em em có nhớ gì tôi
Từ nay vui với đời sương gió
Vui với rượu nồng với chính tôi.

1. Hôm nay chúng mình không còn gặp nhau
Bao đêm ngồi nhớ nhung ôi là sầu
Tình...',
    ),
    3 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1476862,
      'music_title_url' => 'khong-phai-dang-vua-dau~son-tung-m-tp',
      'music_title' => 'Không Phải Dạng Vừa Đâu',
      'music_artist' => 'Sơn Tùng M-TP',
      'music_artist_id' => '1953',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538995851,
      'music_last_update_time' => 1428113140,
      'music_title_search' => 'khong phai dang vua dau',
      'music_artist_search' => '; xon tung m tp;',
      'music_album_search' => '',
      'music_composer' => 'Sơn Tùng M-TP',
      'music_album' => '',
      'music_listen' => 570115,
      'music_track_id' => 0,
      'music_filename' => '1476862-54110963.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ở sau bờ vai là những sầu lo
Hình như đuổi theo là những nỗi lo
Vô tư đi cứ bám vào anh này
Suy tư anh u não cả tháng ngày
Không may cho em yêu
Tìm đến phải đúng thằng điên rồ
Trên khinh khí cầu....',
    ),
    4 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1542296,
      'music_title_url' => 'que-huong~duong-hong-loan-luu-anh-loan',
      'music_title' => 'Quê Hương',
      'music_artist' => 'Dương Hồng Loan;Lưu Ánh Loan',
      'music_artist_id' => '4293;3169',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538990455,
      'music_last_update_time' => 1440693507,
      'music_title_search' => 'que hung',
      'music_artist_search' => '; dung hong loan; lu em loan;',
      'music_album_search' => '',
      'music_composer' => 'Giáp Văn Thạch; Thơ: Đỗ Trung Quân',
      'music_album' => '',
      'music_listen' => 75696,
      'music_track_id' => 0,
      'music_filename' => '1542296-a20dc9db.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Quê hương là chùm khế ngọt
Cho con trèo hái mỗi ngày
Quê hương là đường đi học
Con về rợp bướm vàng bay.

Quê hương là con diều biếc
Tuổi thơ con thả trên đồng
Quê hương là con đò nhỏ
Êm đềm khua n...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1555364,
      'music_title_url' => 'lien-khuc-dan-ca-chuyen-tinh-ke-dua-do~luu-chi-vy-duong-hong-loan',
      'music_title' => 'Liên Khúc Dân Ca Chuyện Tình Kẻ Đưa Đò',
      'music_artist' => 'Lưu Chí Vỹ;Dương Hồng Loan',
      'music_artist_id' => '120;4293',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538888096,
      'music_last_update_time' => 1442970407,
      'music_title_search' => 'lin khuc dan ca chin tinh ke dua do',
      'music_artist_search' => '; lu chi vi; dung hong loan;',
      'music_album_search' => '',
      'music_composer' => 'Sơn Hạ; Phi Bằng; Minh Vy',
      'music_album' => '',
      'music_listen' => 58447,
      'music_track_id' => 0,
      'music_filename' => '1555364-24cf2062.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Gió Quê
2. Hai Lúa Miệt Vườn
3. Cây Đu Đủ
4. Đưa Đò
5. Tiếng Ểnh Ương Buồn
6. Đau Xót Lý Con Cua
7. Tiếng Thạch Sùng
8. Bông Ô Môi
9. Ru Lại Câu Hò
10. Lãng Tử Miền Tây',
    ),
    6 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1605137,
      'music_title_url' => 'chuyen-xe-lam-chieu~chau-ngoc-ha',
      'music_title' => 'Chuyến Xe Lam Chiều',
      'music_artist' => 'Châu Ngọc Hà',
      'music_artist_id' => '20833',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539001642,
      'music_last_update_time' => 1451452316,
      'music_title_search' => 'chin xe lam chiu',
      'music_artist_search' => '; chau ngoc ha;',
      'music_album_search' => '',
      'music_composer' => 'Vinh Sử',
      'music_album' => '',
      'music_listen' => 172825,
      'music_track_id' => 0,
      'music_filename' => '1605137-f1fbed61.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Trên chuyến xe lam đông người chiều nao
Xui mình không quen mà ngồi bên nhau
Trời mang nhiều trớ trêu chi
Người chưa hề biết quen gì
Sao ngồi gần như tình nhân si.

Em xuống xe lam đi vào hẻm sâu
A...',
    ),
    7 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1442958,
      'music_title_url' => 'co-hang-xom-remix~khanh-phuong',
      'music_title' => 'Cô Hàng Xóm (Remix)',
      'music_artist' => 'Khánh Phương',
      'music_artist_id' => '904',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538990614,
      'music_last_update_time' => 1421286457,
      'music_title_search' => 'co hang xom',
      'music_artist_search' => '; khanh phung;',
      'music_album_search' => '',
      'music_composer' => 'Lê Minh Bằng',
      'music_album' => '',
      'music_listen' => 848348,
      'music_track_id' => 0,
      'music_filename' => '1442958-b86c1148.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Vùng ngoại ô, tôi có căn nhà tranh
Tuy bé nhưng thật xinh
Tháng ngày sống riêng một mình
Nhà ở bên, em sống trong giàu sang
Quen gấm nhung đài trang
Đi về xe đón đưa.

Đêm đêm dưới ánh trăng vàng
T...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1509269,
      'music_title_url' => 'tien-len-viet-nam-oi~son-tung-m-tp',
      'music_title' => 'Tiến Lên Việt Nam Ơi',
      'music_artist' => 'Sơn Tùng M-TP',
      'music_artist_id' => '1953',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 5,
      'cover_id' => 0,
      'music_download_time' => 1538923957,
      'music_last_update_time' => 1528884957,
      'music_title_search' => 'tin len vit 5 oi',
      'music_artist_search' => '; xon tung m tp;',
      'music_album_search' => '',
      'music_composer' => 'Sơn Tùng M-TP',
      'music_album' => '',
      'music_listen' => 57295,
      'music_track_id' => 0,
      'music_filename' => '1509269-b912477b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hãy tiến lên về phía khung thành 
Hãy sút xé tan mành lưới đêm này 
Hãy bước đi dù thắng hay bại 
Màu cờ khoe sắc thắm mang trong tim 
Ánh mắt hi vọng vẫn mong chờ 
Sát cánh mãi vai kề quyết không...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1566203,
      'music_title_url' => 'trom-nhin-nhau~hoai-lam',
      'music_title' => 'Trộm Nhìn Nhau',
      'music_artist' => 'Hoài Lâm',
      'music_artist_id' => '4608',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538821505,
      'music_last_update_time' => 1444617129,
      'music_title_search' => 'chom nhin nhau',
      'music_artist_search' => '; hoai lam;',
      'music_album_search' => '',
      'music_composer' => 'Trầm Tử Thiêng',
      'music_album' => '',
      'music_listen' => 163197,
      'music_track_id' => 0,
      'music_filename' => '1566203-baab1936.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Đôi khi trộm nhìn em
Xem dung nhan đó bây giờ ra sao
Em có còn đôi má đào như ngày nào?

Kể từ khi vắng nhau, em như tấm vải lụa đào
Thương thâu đêm giấc mộng xanh xao
Anh có bề nào ai đón đưa e...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1938511,
      'music_title_url' => 'chuyen-tinh-nguoi-trinh-nu-ten-thi~huong-thuy-thai-chau',
      'music_title' => 'Chuyện Tình Người Trinh Nữ Tên Thi',
      'music_artist' => 'Hương Thuỷ;Thái Châu',
      'music_artist_id' => '6572;4648',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538559913,
      'music_last_update_time' => 1533355659,
      'music_title_search' => 'chin tinh ngui chinh nu ten thi',
      'music_artist_search' => '; hung thi; thai chau;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Thi Thơ',
      'music_album' => '',
      'music_listen' => 1142,
      'music_track_id' => 0,
      'music_filename' => '1938511-972e054f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Thuở ấy xa xưa có một nàng một nàng thiếu nữ
Một đoá hoa hồng tình phơi phới tuổi mới trăng tròn
Cuộc đời hồng nhan cay và đắng thôi thì lắm trái ngang
Bao nhiêu trai làng yêu nàng đi theo xin n...',
    ),
    11 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1440762,
      'music_title_url' => 'lien-khuc-chuc-xuan~huynh-nguyen-cong-bang-luu-chi',
      'music_title' => 'Liên Khúc: Chúc Xuân',
      'music_artist' => 'Huỳnh Nguyễn Công Bằng;Lưu Chí Vỹ;Dương Hồng Loan;Lưu Ánh Loan',
      'music_artist_id' => '31460;120;4293;3169',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 2,
      'cover_id' => 0,
      'music_download_time' => 1538994625,
      'music_last_update_time' => 1420874881,
      'music_title_search' => 'lin khuc; chuc xuan',
      'music_artist_search' => '; hinh ngin cong bang; lu chi vi; dung hong loan; lu em loan;',
      'music_album_search' => '',
      'music_composer' => 'Quý Luân; Thanh Sơn; Phạm Đình Chương; Bảo Thu; Minh Kỳ',
      'music_album' => '',
      'music_listen' => 739742,
      'music_track_id' => 0,
      'music_filename' => '1440762-8f7b8869.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Chúc Xuân
2. Đoản Ca Xuân
3. Đón Xuân
4. Nếu Xuân Này Vắng Anh
5. Xuân Đã Về',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1457411,
      'music_title_url' => 'lien-khuc-don-xuan-nay-nho-xuan-xua-canh-thiep-da~dan-nguyen-bang-tam-hoang-thuc',
      'music_title' => 'Liên Khúc: Đón Xuân Này Nhớ Xuân Xưa; Cánh Thiệp Đầu Xuân; Câu Chuyện Đầu Năm',
      'music_artist' => 'Đan Nguyên;Băng Tâm;Hoàng Thục Linh',
      'music_artist_id' => '2347;1359;13153',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 2,
      'cover_id' => 0,
      'music_download_time' => 1538671770,
      'music_last_update_time' => 1423722652,
      'music_title_search' => 'lin khuc; don xuan nai nho xuan xua; canh thip dau xuan; cau chin dau 5',
      'music_artist_search' => '; dan ngin; bang tam; hoang thuc linh;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kỳ; Minh Kỳ; Hoài An',
      'music_album' => '',
      'music_listen' => 630294,
      'music_track_id' => 0,
      'music_filename' => '1457411-7a3e96c0.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Đón Xuân Này Nhớ Xuân Xưa
2. Cánh Thiệp Đầu Xuân
3. Câu Chuyện Đầu Năm',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1458778,
      'music_title_url' => 'gap-me-trong-mo~hoang-nhung',
      'music_title' => 'Gặp Mẹ Trong Mơ',
      'music_artist' => 'Hoàng Nhung',
      'music_artist_id' => '13828',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538487673,
      'music_last_update_time' => 1424280101,
      'music_title_search' => 'gap me chong mo',
      'music_artist_search' => '; hoang nhung;',
      'music_album_search' => '',
      'music_composer' => 'Lời: Lê Tự Minh',
      'music_album' => '',
      'music_listen' => 24869,
      'music_track_id' => 0,
      'music_filename' => '1458778-bb20373c.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Này bầu trời rộng lớn ơi! Có nghe chăng tiếng em gọi
Mẹ giờ này ở chốn nao, con đang mong nhớ về mẹ
Mẹ ở phương trời xa xôi... Hay sao sáng trên bầu trời
Mẹ dịu hiền về với con nhé, con nhớ mẹ
L...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1473103,
      'music_title_url' => 'ru-lai-cau-ho~thuy-duong-hong-quyen',
      'music_title' => 'Ru Lại Câu Hò',
      'music_artist' => 'Thuỳ Dương;Hồng Quyên',
      'music_artist_id' => '3772;20322',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538629326,
      'music_last_update_time' => 1427273469,
      'music_title_search' => 'ru lai cau ho',
      'music_artist_search' => '; thi dung; hong qin;',
      'music_album_search' => '',
      'music_composer' => 'Vũ Quốc Việt',
      'music_album' => '',
      'music_listen' => 12764,
      'music_track_id' => 0,
      'music_filename' => '1473103-cd63ad00.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hò ơ buồn thương chiếc áo phong sương
Đò ai không bến 
Hò ơ đò ai không bến vấn vương câu hò.

Buồn thương chiếc áo năm nào rách đôi bờ vai
Chị Hai cứ ngóng trông hoài bóng con đò xưa
Biết người xư...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1496154,
      'music_title_url' => 'thuong-lam-minh-oi~ha-van',
      'music_title' => 'Thương Lắm Mình Ơi',
      'music_artist' => 'Hà Vân',
      'music_artist_id' => '4596',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538470145,
      'music_last_update_time' => 1432355920,
      'music_title_search' => 'thung lam minh oi',
      'music_artist_search' => '; ha van;',
      'music_album_search' => '',
      'music_composer' => 'Vũ Quốc Việt',
      'music_album' => '',
      'music_listen' => 12631,
      'music_track_id' => 0,
      'music_filename' => '1496154-9f5428e2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Đêm nằm lại nhớ mình ơi
Mình ơi nhớ thương mình nhiều
Đêm nằm lòng nghe thao thức
Không biết giờ này mình ngủ chưa?

Bao đời ruộng nắng cằn khô
Mình ơi sớm khuya nuôi mẹ già
Em nào một câu than thở...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1498345,
      'music_title_url' => 'ngay-em-di~only-c-lou-hoang',
      'music_title' => 'Ngày Em Đi',
      'music_artist' => 'Only C;Lou Hoàng',
      'music_artist_id' => '3371;14767',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538750325,
      'music_last_update_time' => 1433133198,
      'music_title_search' => 'ngai em di',
      'music_artist_search' => '; onli c; lou hoang;',
      'music_album_search' => '',
      'music_composer' => 'Miu Lê',
      'music_album' => '',
      'music_listen' => 28278,
      'music_track_id' => 0,
      'music_filename' => '1498345-cf45e375.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Đêm dần trôi mang bao khát khao
Đêm dần trôi buông lơi ước vọng
Con tim anh lạnh câm, yêu dấu đã xa xăm
Hỏi vì sao em đi quá nhanh, anh ngồi đây cô đơn ngóng chờ
Bao nhiêu ân tình xưa nay đã tàn th...',
    ),
    17 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1551717,
      'music_title_url' => 'chuyen-tau-hoang-hon~dan-nguyen',
      'music_title' => 'Chuyến Tàu Hoàng Hôn',
      'music_artist' => 'Đan Nguyên',
      'music_artist_id' => '2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539064700,
      'music_last_update_time' => 1442198069,
      'music_title_search' => 'chin tau hoang hon',
      'music_artist_search' => '; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Minh Kỳ; Hoài Linh',
      'music_album' => '',
      'music_listen' => 250942,
      'music_track_id' => 0,
      'music_filename' => '1551717-2c399d72.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Chiều nào, tiễn nhau đi khi bóng ngả xế tà
Hoàng hôn đến đâu đây màu tím dâng trong hồn ta
Muốn không gian ngừng tan, níu đôi chân thời gian
Ngừng trôi cho giây phút chia ly này kéo dài
Trước kh...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1562291,
      'music_title_url' => 'chuyen-dem-mua~thao-suong',
      'music_title' => 'Chuyện Đêm Mưa',
      'music_artist' => 'Thảo Sương',
      'music_artist_id' => '7490',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538518703,
      'music_last_update_time' => 1444016203,
      'music_title_search' => 'chin dem mua',
      'music_artist_search' => '; thao xung;',
      'music_album_search' => '',
      'music_composer' => 'Hoài Linh; Nguyễn Hiền',
      'music_album' => '',
      'music_listen' => 5939,
      'music_track_id' => 0,
      'music_filename' => '1562291-99a1a36f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ngoài trời không sao thưa
Đường lầy ướt ngõ tối
Mưa khuya về hiu hắt đi vào hồn
Chuyện đời quên đi thôi
Dĩ vãng xa lắm rồi
Gợi lại để làm chi nữa người ơi.

Chiều nào nâng ly bôi
Tình vừa mới chấp...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1563222,
      'music_title_url' => 'nang-ao-tim~dan-nguyen',
      'music_title' => 'Nàng Áo Tím',
      'music_artist' => 'Đan Nguyên',
      'music_artist_id' => '2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538664529,
      'music_last_update_time' => 1444021850,
      'music_title_search' => 'nang ao tim',
      'music_artist_search' => '; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Anh Bằng',
      'music_album' => '',
      'music_listen' => 133467,
      'music_track_id' => 0,
      'music_filename' => '1563222-34ab26ed.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Thường ngày nàng vẫn 
Đi về chung lối xóm 
Qua trước sân nhà tôi 
Một chiều nàng thấy 
Tôi nhìn vội nghiên nón 
Che miệng hé môi cười.
 
Trời chiều dần tàn 
Ánh nắng lấp lánh 
Như đùa mái tóc buông...',
    ),
    20 => 
    array (
      'music_downloads_today' => 5,
      'music_id' => 1552159,
      'music_title_url' => 'sau-tim-thiep-hong~dan-nguyen-hoang-thuc-linh',
      'music_title' => 'Sầu Tím Thiệp Hồng',
      'music_artist' => 'Đan Nguyên;Hoàng Thục Linh',
      'music_artist_id' => '2347;13153',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539047468,
      'music_last_update_time' => 1442281423,
      'music_title_search' => 'xau tim thip hong',
      'music_artist_search' => '; dan ngin; hoang thuc linh;',
      'music_album_search' => '',
      'music_composer' => 'Hoài Linh',
      'music_album' => '',
      'music_listen' => 369887,
      'music_track_id' => 0,
      'music_filename' => '1552159-7897244a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Từ lúc quen nhau chưa nói một lời gì
Tỏ tình ta mến nhau
Nhiều đêm ngắm sao, mơ ước duyên mình bền lâu
Suốt đời tình thắm sâu.

Nhớ thương đầy vơi, mộng thấy ai mỉm cười
Làn môi xinh tuyệt vời
Để r...',
      'music_artist_html' => '<a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>, <a href="/ca-si/Hoang-Thuc-Linh~Y3NuX2FydGlzdH4xMzE1Mw==.html">Hoàng Thục Linh</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1567345,
      'music_title_url' => 'con-mo-bang-gia~bang-kieu',
      'music_title' => 'Cơn Mơ Băng Giá',
      'music_artist' => 'Bằng Kiều',
      'music_artist_id' => '1258',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538944410,
      'music_last_update_time' => 1444868020,
      'music_title_search' => 'con mo bang da',
      'music_artist_search' => '; bang kiu;',
      'music_album_search' => '',
      'music_composer' => 'Lê Thành Trung',
      'music_album' => '',
      'music_listen' => 92297,
      'music_track_id' => 0,
      'music_filename' => '1567345-897916e6.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nhìn từng giọt mưa nhẹ rơi ngoài hiên
Nơi xa em có hay không
Chân trời kia ngồi trong màn sương
Chờ đợi em sẽ quay về.

Con đường xưa giờ đây ngơ ngát
Ngập đầy tuyết rơi giá lạnh
Tìm về đâu ngày xư...',
      'music_artist_html' => '<a href="/ca-si/Bang-Kieu~Y3NuX2FydGlzdH4xMjU4.html">Bằng Kiều</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1567643,
      'music_title_url' => 'mai-tim-nhau~quang-le-mai-thien-van',
      'music_title' => 'Mãi Tìm Nhau',
      'music_artist' => 'Quang Lê;Mai Thiên Vân',
      'music_artist_id' => '1770;2316',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538738685,
      'music_last_update_time' => 1474448471,
      'music_title_search' => 'mai tim nhau',
      'music_artist_search' => '; quang le; mai thin van;',
      'music_album_search' => '',
      'music_composer' => 'Hàn Châu',
      'music_album' => '',
      'music_listen' => 331278,
      'music_track_id' => 0,
      'music_filename' => '1567643-5cd85835.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Biết nhớ em nhiều cũng thế thôi
Nhớ em em có nhớ gì tôi
Từ nay vui với đời sương gió
Vui với rượu nồng với chính tôi.

1. Hôm nay chúng mình không còn gặp nhau
Bao đêm ngồi nhớ nhung ôi là sầu
Tình...',
      'music_artist_html' => '<a href="/ca-si/Quang-Le~Y3NuX2FydGlzdH4xNzcw.html">Quang Lê</a>, <a href="/ca-si/Mai-Thien-Van~Y3NuX2FydGlzdH4yMzE2.html">Mai Thiên Vân</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1476862,
      'music_title_url' => 'khong-phai-dang-vua-dau~son-tung-m-tp',
      'music_title' => 'Không Phải Dạng Vừa Đâu',
      'music_artist' => 'Sơn Tùng M-TP',
      'music_artist_id' => '1953',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538995851,
      'music_last_update_time' => 1428113140,
      'music_title_search' => 'khong phai dang vua dau',
      'music_artist_search' => '; xon tung m tp;',
      'music_album_search' => '',
      'music_composer' => 'Sơn Tùng M-TP',
      'music_album' => '',
      'music_listen' => 570115,
      'music_track_id' => 0,
      'music_filename' => '1476862-54110963.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ở sau bờ vai là những sầu lo
Hình như đuổi theo là những nỗi lo
Vô tư đi cứ bám vào anh này
Suy tư anh u não cả tháng ngày
Không may cho em yêu
Tìm đến phải đúng thằng điên rồ
Trên khinh khí cầu....',
      'music_artist_html' => '<a href="/ca-si/Son-Tung-M-TP~Y3NuX2FydGlzdH4xOTUz.html">Sơn Tùng M-TP</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1542296,
      'music_title_url' => 'que-huong~duong-hong-loan-luu-anh-loan',
      'music_title' => 'Quê Hương',
      'music_artist' => 'Dương Hồng Loan;Lưu Ánh Loan',
      'music_artist_id' => '4293;3169',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538990455,
      'music_last_update_time' => 1440693507,
      'music_title_search' => 'que hung',
      'music_artist_search' => '; dung hong loan; lu em loan;',
      'music_album_search' => '',
      'music_composer' => 'Giáp Văn Thạch; Thơ: Đỗ Trung Quân',
      'music_album' => '',
      'music_listen' => 75696,
      'music_track_id' => 0,
      'music_filename' => '1542296-a20dc9db.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Quê hương là chùm khế ngọt
Cho con trèo hái mỗi ngày
Quê hương là đường đi học
Con về rợp bướm vàng bay.

Quê hương là con diều biếc
Tuổi thơ con thả trên đồng
Quê hương là con đò nhỏ
Êm đềm khua n...',
      'music_artist_html' => '<a href="/ca-si/Duong-Hong-Loan~Y3NuX2FydGlzdH40Mjkz.html">Dương Hồng Loan</a>, <a href="/ca-si/Luu-Anh-Loan~Y3NuX2FydGlzdH4zMTY5.html">Lưu Ánh Loan</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1555364,
      'music_title_url' => 'lien-khuc-dan-ca-chuyen-tinh-ke-dua-do~luu-chi-vy-duong-hong-loan',
      'music_title' => 'Liên Khúc Dân Ca Chuyện Tình Kẻ Đưa Đò',
      'music_artist' => 'Lưu Chí Vỹ;Dương Hồng Loan',
      'music_artist_id' => '120;4293',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538888096,
      'music_last_update_time' => 1442970407,
      'music_title_search' => 'lin khuc dan ca chin tinh ke dua do',
      'music_artist_search' => '; lu chi vi; dung hong loan;',
      'music_album_search' => '',
      'music_composer' => 'Sơn Hạ; Phi Bằng; Minh Vy',
      'music_album' => '',
      'music_listen' => 58447,
      'music_track_id' => 0,
      'music_filename' => '1555364-24cf2062.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Gió Quê
2. Hai Lúa Miệt Vườn
3. Cây Đu Đủ
4. Đưa Đò
5. Tiếng Ểnh Ương Buồn
6. Đau Xót Lý Con Cua
7. Tiếng Thạch Sùng
8. Bông Ô Môi
9. Ru Lại Câu Hò
10. Lãng Tử Miền Tây',
      'music_artist_html' => '<a href="/ca-si/Luu-Chi-Vy~Y3NuX2FydGlzdH4xMjA=.html">Lưu Chí Vỹ</a>, <a href="/ca-si/Duong-Hong-Loan~Y3NuX2FydGlzdH40Mjkz.html">Dương Hồng Loan</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1605137,
      'music_title_url' => 'chuyen-xe-lam-chieu~chau-ngoc-ha',
      'music_title' => 'Chuyến Xe Lam Chiều',
      'music_artist' => 'Châu Ngọc Hà',
      'music_artist_id' => '20833',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539001642,
      'music_last_update_time' => 1451452316,
      'music_title_search' => 'chin xe lam chiu',
      'music_artist_search' => '; chau ngoc ha;',
      'music_album_search' => '',
      'music_composer' => 'Vinh Sử',
      'music_album' => '',
      'music_listen' => 172825,
      'music_track_id' => 0,
      'music_filename' => '1605137-f1fbed61.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Trên chuyến xe lam đông người chiều nao
Xui mình không quen mà ngồi bên nhau
Trời mang nhiều trớ trêu chi
Người chưa hề biết quen gì
Sao ngồi gần như tình nhân si.

Em xuống xe lam đi vào hẻm sâu
A...',
      'music_artist_html' => '<a href="/ca-si/Chau-Ngoc-Ha~Y3NuX2FydGlzdH4yMDgzMw==.html">Châu Ngọc Hà</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1442958,
      'music_title_url' => 'co-hang-xom-remix~khanh-phuong',
      'music_title' => 'Cô Hàng Xóm (Remix)',
      'music_artist' => 'Khánh Phương',
      'music_artist_id' => '904',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538990614,
      'music_last_update_time' => 1421286457,
      'music_title_search' => 'co hang xom',
      'music_artist_search' => '; khanh phung;',
      'music_album_search' => '',
      'music_composer' => 'Lê Minh Bằng',
      'music_album' => '',
      'music_listen' => 848348,
      'music_track_id' => 0,
      'music_filename' => '1442958-b86c1148.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Vùng ngoại ô, tôi có căn nhà tranh
Tuy bé nhưng thật xinh
Tháng ngày sống riêng một mình
Nhà ở bên, em sống trong giàu sang
Quen gấm nhung đài trang
Đi về xe đón đưa.

Đêm đêm dưới ánh trăng vàng
T...',
      'music_artist_html' => '<a href="/ca-si/Khanh-Phuong~Y3NuX2FydGlzdH45MDQ=.html">Khánh Phương</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1509269,
      'music_title_url' => 'tien-len-viet-nam-oi~son-tung-m-tp',
      'music_title' => 'Tiến Lên Việt Nam Ơi',
      'music_artist' => 'Sơn Tùng M-TP',
      'music_artist_id' => '1953',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 5,
      'cover_id' => 0,
      'music_download_time' => 1538923957,
      'music_last_update_time' => 1528884957,
      'music_title_search' => 'tin len vit 5 oi',
      'music_artist_search' => '; xon tung m tp;',
      'music_album_search' => '',
      'music_composer' => 'Sơn Tùng M-TP',
      'music_album' => '',
      'music_listen' => 57295,
      'music_track_id' => 0,
      'music_filename' => '1509269-b912477b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hãy tiến lên về phía khung thành 
Hãy sút xé tan mành lưới đêm này 
Hãy bước đi dù thắng hay bại 
Màu cờ khoe sắc thắm mang trong tim 
Ánh mắt hi vọng vẫn mong chờ 
Sát cánh mãi vai kề quyết không...',
      'music_artist_html' => '<a href="/ca-si/Son-Tung-M-TP~Y3NuX2FydGlzdH4xOTUz.html">Sơn Tùng M-TP</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1566203,
      'music_title_url' => 'trom-nhin-nhau~hoai-lam',
      'music_title' => 'Trộm Nhìn Nhau',
      'music_artist' => 'Hoài Lâm',
      'music_artist_id' => '4608',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538821505,
      'music_last_update_time' => 1444617129,
      'music_title_search' => 'chom nhin nhau',
      'music_artist_search' => '; hoai lam;',
      'music_album_search' => '',
      'music_composer' => 'Trầm Tử Thiêng',
      'music_album' => '',
      'music_listen' => 163197,
      'music_track_id' => 0,
      'music_filename' => '1566203-baab1936.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Đôi khi trộm nhìn em
Xem dung nhan đó bây giờ ra sao
Em có còn đôi má đào như ngày nào?

Kể từ khi vắng nhau, em như tấm vải lụa đào
Thương thâu đêm giấc mộng xanh xao
Anh có bề nào ai đón đưa e...',
      'music_artist_html' => '<a href="/ca-si/Hoai-Lam~Y3NuX2FydGlzdH40NjA4.html">Hoài Lâm</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1938511,
      'music_title_url' => 'chuyen-tinh-nguoi-trinh-nu-ten-thi~huong-thuy-thai-chau',
      'music_title' => 'Chuyện Tình Người Trinh Nữ Tên Thi',
      'music_artist' => 'Hương Thuỷ;Thái Châu',
      'music_artist_id' => '6572;4648',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538559913,
      'music_last_update_time' => 1533355659,
      'music_title_search' => 'chin tinh ngui chinh nu ten thi',
      'music_artist_search' => '; hung thi; thai chau;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Thi Thơ',
      'music_album' => '',
      'music_listen' => 1142,
      'music_track_id' => 0,
      'music_filename' => '1938511-972e054f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Thuở ấy xa xưa có một nàng một nàng thiếu nữ
Một đoá hoa hồng tình phơi phới tuổi mới trăng tròn
Cuộc đời hồng nhan cay và đắng thôi thì lắm trái ngang
Bao nhiêu trai làng yêu nàng đi theo xin n...',
      'music_artist_html' => '<a href="/ca-si/Huong-Thuy~Y3NuX2FydGlzdH42NTcy.html">Hương Thuỷ</a>, <a href="/ca-si/Thai-Chau~Y3NuX2FydGlzdH40NjQ4.html">Thái Châu</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1440762,
      'music_title_url' => 'lien-khuc-chuc-xuan~huynh-nguyen-cong-bang-luu-chi',
      'music_title' => 'Liên Khúc: Chúc Xuân',
      'music_artist' => 'Huỳnh Nguyễn Công Bằng;Lưu Chí Vỹ;Dương Hồng Loan;Lưu Ánh Loan',
      'music_artist_id' => '31460;120;4293;3169',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 2,
      'cover_id' => 0,
      'music_download_time' => 1538994625,
      'music_last_update_time' => 1420874881,
      'music_title_search' => 'lin khuc; chuc xuan',
      'music_artist_search' => '; hinh ngin cong bang; lu chi vi; dung hong loan; lu em loan;',
      'music_album_search' => '',
      'music_composer' => 'Quý Luân; Thanh Sơn; Phạm Đình Chương; Bảo Thu; Minh Kỳ',
      'music_album' => '',
      'music_listen' => 739742,
      'music_track_id' => 0,
      'music_filename' => '1440762-8f7b8869.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Chúc Xuân
2. Đoản Ca Xuân
3. Đón Xuân
4. Nếu Xuân Này Vắng Anh
5. Xuân Đã Về',
      'music_artist_html' => '<a href="/ca-si/Huynh-Nguyen-Cong-Bang~Y3NuX2FydGlzdH4zMTQ2MA==.html">Huỳnh Nguyễn Công Bằng</a>, <a href="/ca-si/Luu-Chi-Vy~Y3NuX2FydGlzdH4xMjA=.html">Lưu Chí Vỹ</a>, <a href="/ca-si/Duong-Hong-Loan~Y3NuX2FydGlzdH40Mjkz.html">Dương Hồng Loan</a>, <a href="/ca-si/Luu-Anh-Loan~Y3NuX2FydGlzdH4zMTY5.html">Lưu Ánh Loan</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1457411,
      'music_title_url' => 'lien-khuc-don-xuan-nay-nho-xuan-xua-canh-thiep-da~dan-nguyen-bang-tam-hoang-thuc',
      'music_title' => 'Liên Khúc: Đón Xuân Này Nhớ Xuân Xưa; Cánh Thiệp Đầu Xuân; Câu Chuyện Đầu Năm',
      'music_artist' => 'Đan Nguyên;Băng Tâm;Hoàng Thục Linh',
      'music_artist_id' => '2347;1359;13153',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 2,
      'cover_id' => 0,
      'music_download_time' => 1538671770,
      'music_last_update_time' => 1423722652,
      'music_title_search' => 'lin khuc; don xuan nai nho xuan xua; canh thip dau xuan; cau chin dau 5',
      'music_artist_search' => '; dan ngin; bang tam; hoang thuc linh;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kỳ; Minh Kỳ; Hoài An',
      'music_album' => '',
      'music_listen' => 630294,
      'music_track_id' => 0,
      'music_filename' => '1457411-7a3e96c0.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Đón Xuân Này Nhớ Xuân Xưa
2. Cánh Thiệp Đầu Xuân
3. Câu Chuyện Đầu Năm',
      'music_artist_html' => '<a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>, <a href="/ca-si/Bang-Tam~Y3NuX2FydGlzdH4xMzU5.html">Băng Tâm</a>, <a href="/ca-si/Hoang-Thuc-Linh~Y3NuX2FydGlzdH4xMzE1Mw==.html">Hoàng Thục Linh</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1458778,
      'music_title_url' => 'gap-me-trong-mo~hoang-nhung',
      'music_title' => 'Gặp Mẹ Trong Mơ',
      'music_artist' => 'Hoàng Nhung',
      'music_artist_id' => '13828',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538487673,
      'music_last_update_time' => 1424280101,
      'music_title_search' => 'gap me chong mo',
      'music_artist_search' => '; hoang nhung;',
      'music_album_search' => '',
      'music_composer' => 'Lời: Lê Tự Minh',
      'music_album' => '',
      'music_listen' => 24869,
      'music_track_id' => 0,
      'music_filename' => '1458778-bb20373c.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Này bầu trời rộng lớn ơi! Có nghe chăng tiếng em gọi
Mẹ giờ này ở chốn nao, con đang mong nhớ về mẹ
Mẹ ở phương trời xa xôi... Hay sao sáng trên bầu trời
Mẹ dịu hiền về với con nhé, con nhớ mẹ
L...',
      'music_artist_html' => '<a href="/ca-si/Hoang-Nhung~Y3NuX2FydGlzdH4xMzgyOA==.html">Hoàng Nhung</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1473103,
      'music_title_url' => 'ru-lai-cau-ho~thuy-duong-hong-quyen',
      'music_title' => 'Ru Lại Câu Hò',
      'music_artist' => 'Thuỳ Dương;Hồng Quyên',
      'music_artist_id' => '3772;20322',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538629326,
      'music_last_update_time' => 1427273469,
      'music_title_search' => 'ru lai cau ho',
      'music_artist_search' => '; thi dung; hong qin;',
      'music_album_search' => '',
      'music_composer' => 'Vũ Quốc Việt',
      'music_album' => '',
      'music_listen' => 12764,
      'music_track_id' => 0,
      'music_filename' => '1473103-cd63ad00.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hò ơ buồn thương chiếc áo phong sương
Đò ai không bến 
Hò ơ đò ai không bến vấn vương câu hò.

Buồn thương chiếc áo năm nào rách đôi bờ vai
Chị Hai cứ ngóng trông hoài bóng con đò xưa
Biết người xư...',
      'music_artist_html' => '<a href="/ca-si/Thuy-Duong~Y3NuX2FydGlzdH4zNzcy.html">Thuỳ Dương</a>, <a href="/ca-si/Hong-Quyen~Y3NuX2FydGlzdH4yMDMyMg==.html">Hồng Quyên</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1496154,
      'music_title_url' => 'thuong-lam-minh-oi~ha-van',
      'music_title' => 'Thương Lắm Mình Ơi',
      'music_artist' => 'Hà Vân',
      'music_artist_id' => '4596',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538470145,
      'music_last_update_time' => 1432355920,
      'music_title_search' => 'thung lam minh oi',
      'music_artist_search' => '; ha van;',
      'music_album_search' => '',
      'music_composer' => 'Vũ Quốc Việt',
      'music_album' => '',
      'music_listen' => 12631,
      'music_track_id' => 0,
      'music_filename' => '1496154-9f5428e2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Đêm nằm lại nhớ mình ơi
Mình ơi nhớ thương mình nhiều
Đêm nằm lòng nghe thao thức
Không biết giờ này mình ngủ chưa?

Bao đời ruộng nắng cằn khô
Mình ơi sớm khuya nuôi mẹ già
Em nào một câu than thở...',
      'music_artist_html' => '<a href="/ca-si/Ha-Van~Y3NuX2FydGlzdH40NTk2.html">Hà Vân</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1498345,
      'music_title_url' => 'ngay-em-di~only-c-lou-hoang',
      'music_title' => 'Ngày Em Đi',
      'music_artist' => 'Only C;Lou Hoàng',
      'music_artist_id' => '3371;14767',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538750325,
      'music_last_update_time' => 1433133198,
      'music_title_search' => 'ngai em di',
      'music_artist_search' => '; onli c; lou hoang;',
      'music_album_search' => '',
      'music_composer' => 'Miu Lê',
      'music_album' => '',
      'music_listen' => 28278,
      'music_track_id' => 0,
      'music_filename' => '1498345-cf45e375.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Đêm dần trôi mang bao khát khao
Đêm dần trôi buông lơi ước vọng
Con tim anh lạnh câm, yêu dấu đã xa xăm
Hỏi vì sao em đi quá nhanh, anh ngồi đây cô đơn ngóng chờ
Bao nhiêu ân tình xưa nay đã tàn th...',
      'music_artist_html' => '<a href="/ca-si/Only-C~Y3NuX2FydGlzdH4zMzcx.html">Only C</a>, <a href="/ca-si/Lou-Hoang~Y3NuX2FydGlzdH4xNDc2Nw==.html">Lou Hoàng</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1551717,
      'music_title_url' => 'chuyen-tau-hoang-hon~dan-nguyen',
      'music_title' => 'Chuyến Tàu Hoàng Hôn',
      'music_artist' => 'Đan Nguyên',
      'music_artist_id' => '2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539064700,
      'music_last_update_time' => 1442198069,
      'music_title_search' => 'chin tau hoang hon',
      'music_artist_search' => '; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Minh Kỳ; Hoài Linh',
      'music_album' => '',
      'music_listen' => 250942,
      'music_track_id' => 0,
      'music_filename' => '1551717-2c399d72.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Chiều nào, tiễn nhau đi khi bóng ngả xế tà
Hoàng hôn đến đâu đây màu tím dâng trong hồn ta
Muốn không gian ngừng tan, níu đôi chân thời gian
Ngừng trôi cho giây phút chia ly này kéo dài
Trước kh...',
      'music_artist_html' => '<a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1562291,
      'music_title_url' => 'chuyen-dem-mua~thao-suong',
      'music_title' => 'Chuyện Đêm Mưa',
      'music_artist' => 'Thảo Sương',
      'music_artist_id' => '7490',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538518703,
      'music_last_update_time' => 1444016203,
      'music_title_search' => 'chin dem mua',
      'music_artist_search' => '; thao xung;',
      'music_album_search' => '',
      'music_composer' => 'Hoài Linh; Nguyễn Hiền',
      'music_album' => '',
      'music_listen' => 5939,
      'music_track_id' => 0,
      'music_filename' => '1562291-99a1a36f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ngoài trời không sao thưa
Đường lầy ướt ngõ tối
Mưa khuya về hiu hắt đi vào hồn
Chuyện đời quên đi thôi
Dĩ vãng xa lắm rồi
Gợi lại để làm chi nữa người ơi.

Chiều nào nâng ly bôi
Tình vừa mới chấp...',
      'music_artist_html' => '<a href="/ca-si/Thao-Suong~Y3NuX2FydGlzdH43NDkw.html">Thảo Sương</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1563222,
      'music_title_url' => 'nang-ao-tim~dan-nguyen',
      'music_title' => 'Nàng Áo Tím',
      'music_artist' => 'Đan Nguyên',
      'music_artist_id' => '2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538664529,
      'music_last_update_time' => 1444021850,
      'music_title_search' => 'nang ao tim',
      'music_artist_search' => '; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Anh Bằng',
      'music_album' => '',
      'music_listen' => 133467,
      'music_track_id' => 0,
      'music_filename' => '1563222-34ab26ed.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Thường ngày nàng vẫn 
Đi về chung lối xóm 
Qua trước sân nhà tôi 
Một chiều nàng thấy 
Tôi nhìn vội nghiên nón 
Che miệng hé môi cười.
 
Trời chiều dần tàn 
Ánh nắng lấp lánh 
Như đùa mái tóc buông...',
      'music_artist_html' => '<a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>',
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 6,
      'music_id' => 1598235,
      'music_title_url' => 'faded~alan-walker-iselin-solheim',
      'music_title' => 'Faded',
      'music_artist' => 'Alan Walker;Iselin Solheim',
      'music_artist_id' => '14991;14695',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539075567,
      'music_last_update_time' => 1471323591,
      'music_title_search' => 'faded',
      'music_artist_search' => '; alan walker; ixelin xolheim;',
      'music_album_search' => '',
      'music_composer' => 'Alan Walker',
      'music_album' => '',
      'music_listen' => 1418147,
      'music_track_id' => 1,
      'music_filename' => '1598235-99e9c287.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'You were the shadow to my light
Did you feel us
Another Start
You fade away.

Afraid our aim is out of sight
Wanna se us
Alight.

Where are you now
Where are you now
Where are you now
Was it all in...',
    ),
    1 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1503699,
      'music_title_url' => 'reality~lost-frequencies-janieck-devy',
      'music_title' => 'Reality',
      'music_artist' => 'Lost Frequencies;Janieck Devy',
      'music_artist_id' => '13829;67014',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539049300,
      'music_last_update_time' => 1502679358,
      'music_title_search' => 'realiti',
      'music_artist_search' => '; loxt frequencix; janick devi;',
      'music_album_search' => '',
      'music_composer' => 'Lost Frequencies; Janieck Devy',
      'music_album' => '',
      'music_listen' => 11064,
      'music_track_id' => 0,
      'music_filename' => '1503699-49151f7b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Decisions as I go, to anywhere I flow
Sometimes I belive, a time where we should know
I can\'t fly high, I can\'t go long
Today I got a million, Tomorrow, I don\'t know
Decisions as I go, to anywhere...',
    ),
    2 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1541362,
      'music_title_url' => 'locked-away~r-city-adam-levine',
      'music_title' => 'Locked Away',
      'music_artist' => 'R. City;Adam Levine',
      'music_artist_id' => '16680;2856',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538973837,
      'music_last_update_time' => 1475640078,
      'music_title_search' => 'locked awai',
      'music_artist_search' => '; r citi; adam levine;',
      'music_album_search' => '',
      'music_composer' => 'Theron Thomas; Timothy Thomas; Lukasz Gottwald; Henry Walter; Toni Tennille',
      'music_album' => '',
      'music_listen' => 45809,
      'music_track_id' => 0,
      'music_filename' => '1541362-672e6028.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Hook:]
If I got locked away
And we lost it all today
Tell me honestly would you still love me the same?
If I showed you my flaws
If I couldn\'t be strong
Tell me honestly would you still love me th...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1478508,
      'music_title_url' => 'creep-vintage-postmodern-jukebox~haley-reinhart',
      'music_title' => 'Creep (Vintage Postmodern Jukebox)',
      'music_artist' => 'Haley Reinhart',
      'music_artist_id' => '12808',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538693431,
      'music_last_update_time' => 1428489084,
      'music_title_search' => 'crep; vintage poxtmodern jukebox',
      'music_artist_search' => '; halei reinhart;',
      'music_album_search' => '',
      'music_composer' => 'Radiohead; Albert Hammond; Mike Hazlewood',
      'music_album' => '',
      'music_listen' => 5287,
      'music_track_id' => 0,
      'music_filename' => '1478508-c19cc967.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'When you were here before
Couldn\'t look you in the eye
You\'re just like an angel
Your skin makes me cry
You float like a feather
In a beautiful world
I wish I was special
You\'re so fucking special....',
    ),
    4 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1492932,
      'music_title_url' => 'dont-dream-its-over~miley-cyrus-ariana-grande',
      'music_title' => 'Don\'t Dream It\'s Over',
      'music_artist' => 'Miley Cyrus;Ariana Grande',
      'music_artist_id' => '717;3831',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1539008146,
      'music_last_update_time' => 1431735358,
      'music_title_search' => 'don t dream it x over',
      'music_artist_search' => '; milei cirux; ariana grande;',
      'music_album_search' => '',
      'music_composer' => 'Neil Finn',
      'music_album' => '',
      'music_listen' => 22098,
      'music_track_id' => 0,
      'music_filename' => '1492932-96474c0f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. There is freedom within, there is freedom without
Try to catch the deluge in a paper cup
There\'s a battle ahead, many battles are lost
But you\'ll never see the end of the road
While you\'re trave...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1505463,
      'music_title_url' => 'my-heart-will-go-on~mangastyles',
      'music_title' => 'My Heart Will Go On',
      'music_artist' => 'MangaStyles',
      'music_artist_id' => '56414',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 8,
      'cover_id' => 0,
      'music_download_time' => 1538847816,
      'music_last_update_time' => 1434164516,
      'music_title_search' => 'mi heart wil go on',
      'music_artist_search' => '; mangaxtilex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3023,
      'music_track_id' => 0,
      'music_filename' => '1505463-bd270e5a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Every night in my dreams i see you, i feel you
That is how i know you go on
Far across the distance 
And spaces between us 
You have come to show you go on.

[Chorus:]
Near, far, wherever you ar...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1572732,
      'music_title_url' => 'hello~adele',
      'music_title' => 'Hello',
      'music_artist' => 'Adele',
      'music_artist_id' => '9222',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538620193,
      'music_last_update_time' => 1473393071,
      'music_title_search' => 'helo',
      'music_artist_search' => '; adele;',
      'music_album_search' => '',
      'music_composer' => 'Lionel Richie',
      'music_album' => '',
      'music_listen' => 223613,
      'music_track_id' => 0,
      'music_filename' => '1572732-9d3cb05f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Hello, it\'s me
I was wondering
If after all these years
You\'d like to meet
To go over
Everything
They say that time\'s supposed to heal yeah but I ain\'t done much healing.

Hello, can you hear me...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1620118,
      'music_title_url' => 'dessert~dawin-silento',
      'music_title' => 'Dessert',
      'music_artist' => 'Dawin;Silentó',
      'music_artist_id' => '64020;16242',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538726365,
      'music_last_update_time' => 1480916106,
      'music_title_search' => 'dexert',
      'music_artist_search' => '; dawin; xilento;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 25566,
      'music_track_id' => 1,
      'music_filename' => '1620118-8f64dc53.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
I said D-A-W-I-N
(Silentó)

[Pre-Hook 1:]
They can imitate you
The way your body\'s movin\'
You got something special
About to make me lose it
I like the way you move, girl
I like the way yo...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1447115,
      'music_title_url' => 'love-me-like-you-do~ellie-goulding',
      'music_title' => 'Love Me Like You Do',
      'music_artist' => 'Ellie Goulding',
      'music_artist_id' => '3787',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538516888,
      'music_last_update_time' => 1475295077,
      'music_title_search' => 'love me like iou do',
      'music_artist_search' => '; eli goulding;',
      'music_album_search' => '',
      'music_composer' => 'Ilya Salmanzadeh; Tove Lo; Savan Kotecha; Max Martin; Ali Payam',
      'music_album' => '',
      'music_listen' => 226603,
      'music_track_id' => 0,
      'music_filename' => '1447115-ccf514f1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. You\'re the light, you\'re the night
You\'re the color of my blood
You\'re the cure, you\'re the pain
You\'re the only thing I wanna touch
Never knew that it could mean so much, so much.

You\'re the f...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1472410,
      'music_title_url' => 'lean-on~major-lazer-dj-snake-m',
      'music_title' => 'Lean On',
      'music_artist' => 'Major Lazer;DJ Snake;MØ',
      'music_artist_id' => '13367;14774;15003',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538507695,
      'music_last_update_time' => 1427104377,
      'music_title_search' => 'lean on',
      'music_artist_search' => '; major lazer; dj xnake; mØ;',
      'music_album_search' => '',
      'music_composer' => 'Major Lazer',
      'music_album' => '',
      'music_listen' => 81883,
      'music_track_id' => 0,
      'music_filename' => '1472410-83d48ce1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. Do you recall, not long ago
We would walk on the sidewalk
Innocent, remember?
All we did was care for each other.

But the night was warm
We were bold and young
All around the wind blows
We woul...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1473366,
      'music_title_url' => 'bloodstream~ed-sheeran-rudimental',
      'music_title' => 'Bloodstream',
      'music_artist' => 'Ed Sheeran;Rudimental­',
      'music_artist_id' => '2653;64223',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538897710,
      'music_last_update_time' => 1496646477,
      'music_title_search' => 'blodxcheam',
      'music_artist_search' => '; ed theran; rudimental­;',
      'music_album_search' => '',
      'music_composer' => 'Ed Sheeran; McDaid; Gary Lightbody; Rudimental',
      'music_album' => '',
      'music_listen' => 5576,
      'music_track_id' => 0,
      'music_filename' => '1473366-ab6eb201.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Verse 1:]
I\'ve been spinning now for time
Couple women by my side
I got sinning on my mind
Sipping on red wine
I\'ve been sitting here for ages
Ripping out the pages
How\'d I get so faded?
How\'d I g...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1475126,
      'music_title_url' => 'return-of-the-mack~lady-bee-rochelle',
      'music_title' => 'Return Of The Mack',
      'music_artist' => 'Lady Bee;Rochelle',
      'music_artist_id' => '21812;17806',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538837673,
      'music_last_update_time' => 1427864431,
      'music_title_search' => 'return of the mack',
      'music_artist_search' => '; ladi be; rochele;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 803,
      'music_track_id' => 0,
      'music_filename' => '1475126-8c494b54.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Oh, oo-o-oh, come on, ooh, yeah
Well I tried to tell you so (yes, I did)
But I guess you didn\'t know,  
As I said the story goes
Baby, now I got the flow
\'Cos I knew it from the start
Baby, when yo...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1477796,
      'music_title_url' => 'see-you-again~wiz-khalifa-charlie-puth',
      'music_title' => 'See You Again',
      'music_artist' => 'Wiz Khalifa;Charlie Puth',
      'music_artist_id' => '2710;13568',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538477228,
      'music_last_update_time' => 1476782676,
      'music_title_search' => 'xe iou again',
      'music_artist_search' => '; wiz khalifa; charli puth;',
      'music_album_search' => '',
      'music_composer' => 'Wiz Khalifa',
      'music_album' => '',
      'music_listen' => 276037,
      'music_track_id' => 0,
      'music_filename' => '1477796-9d7c389d.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '[Hook:] 
It\'s been a long day, without you my friend
And I\'ll tell you all about it when I see you again
We\'ve come a long way from where we began
Oh I\'ll tell you all about it when I see you again...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1479033,
      'music_title_url' => 'ride-out~kid-ink-tyga-wale-yg-rich-homie-quan',
      'music_title' => 'Ride Out',
      'music_artist' => 'Kid Ink;Tyga;Wale;YG;Rich Homie Quan',
      'music_artist_id' => '19121;3225;8840;13947;41528',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538927971,
      'music_last_update_time' => 1428569712,
      'music_title_search' => 'ride out',
      'music_artist_search' => '; kid ink; tiga; wale; ig; rich homi quan;',
      'music_album_search' => '',
      'music_composer' => 'Kid Ink; Tyga; Wale; YG; Rich Homie Quan',
      'music_album' => '',
      'music_listen' => 10638,
      'music_track_id' => 0,
      'music_filename' => '1479033-551d65e5.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
Came in at first had bad luck
Got a whole lot, remember I ain\'t had none
We done sold now everybody mad at me
Tell \'em roll down now everybody smashin\'
Keep ready cause you know we bout to...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1489656,
      'music_title_url' => 'when-im-around-u~burns',
      'music_title' => 'When I\'m Around U',
      'music_artist' => 'Burns',
      'music_artist_id' => '34309',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538802961,
      'music_last_update_time' => 1430881115,
      'music_title_search' => 'when i m around u',
      'music_artist_search' => '; burnx;',
      'music_album_search' => '',
      'music_composer' => 'Burns',
      'music_album' => '',
      'music_listen' => 1686,
      'music_track_id' => 0,
      'music_filename' => '1489656-2ec43cca.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'When I\'m around you
You make my temperature rise 
All I wanted 
You there beside me.  

When I\'m around you 
You make my temperature rise 
All I wanted 
You there beside me. 

When I\'m around you...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1498841,
      'music_title_url' => 'dead-inside~muse',
      'music_title' => 'Dead Inside',
      'music_artist' => 'Muse',
      'music_artist_id' => '8361',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538507325,
      'music_last_update_time' => 1432804692,
      'music_title_search' => 'dead inxide',
      'music_artist_search' => '; muxe;',
      'music_album_search' => '',
      'music_composer' => 'Matthew Bellamy',
      'music_album' => '',
      'music_listen' => 778,
      'music_track_id' => 0,
      'music_filename' => '1498841-cc17de88.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Revere a million prayers
And draw me into the holiness
But theres nothing there
Light only shines
From those who share.

Unleash a million drones
And confine me and then erase me babe
Do you have n...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1500149,
      'music_title_url' => 'universe~don-diablo-emeni',
      'music_title' => 'Universe',
      'music_artist' => 'Don Diablo;Emeni',
      'music_artist_id' => '13776;66004',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538886015,
      'music_last_update_time' => 1433130019,
      'music_title_search' => 'univerxe',
      'music_artist_search' => '; don diablo; emeni;',
      'music_album_search' => '',
      'music_composer' => 'Don Diablo; Emeni',
      'music_album' => '',
      'music_listen' => 2537,
      'music_track_id' => 0,
      'music_filename' => '1500149-3a82a853.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Fireflies and coloursky 
Twinkles in our eyes 
Twinkles in our eyes 
Hold my hand 
And walk me through the night 
Twinkles in our eyes 
Were brave enough to fly. 

We are the children, the universe...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1512473,
      'music_title_url' => 'shades-of-grey~oliver-heldens-shaun-frank-delaney-jane',
      'music_title' => 'Shades Of Grey',
      'music_artist' => 'Oliver Heldens;Shaun Frank;Delaney Jane',
      'music_artist_id' => '18874;23019;52703',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538706274,
      'music_last_update_time' => 1472523117,
      'music_title_search' => 'thadex of grei',
      'music_artist_search' => '; oliver heldenx; thaun frank; delanei jane;',
      'music_album_search' => '',
      'music_composer' => 'Oliver Heldens; Shaun Frank; Delaney Jane',
      'music_album' => '',
      'music_listen' => 2700,
      'music_track_id' => 0,
      'music_filename' => '1512473-9180e5fb.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'I\'m losing sleep
Light a smoke so I can breathe
It\'s too dark, it\'s too loud in the city
If I had a god, I would say he was wrong
Got these scars, but I think they\'re pretty.

So I say Hey!
Been hi...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1532114,
      'music_title_url' => 'how-deep-is-your-love~calvin-harris-disciples',
      'music_title' => 'How Deep Is Your Love',
      'music_artist' => 'Calvin Harris;Disciples',
      'music_artist_id' => '2474;58818',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505992,
      'music_last_update_time' => 1471507775,
      'music_title_search' => 'how dep ix iour love',
      'music_artist_search' => '; calvin harix; dixciplex;',
      'music_album_search' => '',
      'music_composer' => 'Calvin Harris; Ina Wrolsden',
      'music_album' => '',
      'music_listen' => 40876,
      'music_track_id' => 0,
      'music_filename' => '1532114-81064747.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Verse 1:]
I want you to breathe me in
Let me be your air
Let me roam your body freely
No inhibition, no fear.

[Chorus:]
How deep is your love?
Is it like the ocean?
What devotion? Are you?
How de...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1641497,
      'music_title_url' => 'sax~fleur-east',
      'music_title' => 'Sax',
      'music_artist' => 'Fleur East',
      'music_artist_id' => '19018',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538503930,
      'music_last_update_time' => 1498041121,
      'music_title_search' => 'xax',
      'music_artist_search' => '; fleur eaxt;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 550,
      'music_track_id' => 1,
      'music_filename' => '1641497-b9adb307.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Give it to me!
Give it to me!
I met a boy last week tryna run that game
Made it sound so sweet when he say my name
I said boy, stop, run it back
You can talk that talk but can you play that sax?

I...',
    ),
    20 => 
    array (
      'music_downloads_today' => 6,
      'music_id' => 1598235,
      'music_title_url' => 'faded~alan-walker-iselin-solheim',
      'music_title' => 'Faded',
      'music_artist' => 'Alan Walker;Iselin Solheim',
      'music_artist_id' => '14991;14695',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539075567,
      'music_last_update_time' => 1471323591,
      'music_title_search' => 'faded',
      'music_artist_search' => '; alan walker; ixelin xolheim;',
      'music_album_search' => '',
      'music_composer' => 'Alan Walker',
      'music_album' => '',
      'music_listen' => 1418147,
      'music_track_id' => 1,
      'music_filename' => '1598235-99e9c287.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'You were the shadow to my light
Did you feel us
Another Start
You fade away.

Afraid our aim is out of sight
Wanna se us
Alight.

Where are you now
Where are you now
Where are you now
Was it all in...',
      'music_artist_html' => '<a href="/ca-si/Alan-Walker~Y3NuX2FydGlzdH4xNDk5MQ==.html">Alan Walker</a>, <a href="/ca-si/Iselin-Solheim~Y3NuX2FydGlzdH4xNDY5NQ==.html">Iselin Solheim</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1503699,
      'music_title_url' => 'reality~lost-frequencies-janieck-devy',
      'music_title' => 'Reality',
      'music_artist' => 'Lost Frequencies;Janieck Devy',
      'music_artist_id' => '13829;67014',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539049300,
      'music_last_update_time' => 1502679358,
      'music_title_search' => 'realiti',
      'music_artist_search' => '; loxt frequencix; janick devi;',
      'music_album_search' => '',
      'music_composer' => 'Lost Frequencies; Janieck Devy',
      'music_album' => '',
      'music_listen' => 11064,
      'music_track_id' => 0,
      'music_filename' => '1503699-49151f7b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Decisions as I go, to anywhere I flow
Sometimes I belive, a time where we should know
I can\'t fly high, I can\'t go long
Today I got a million, Tomorrow, I don\'t know
Decisions as I go, to anywhere...',
      'music_artist_html' => '<a href="/ca-si/Lost-Frequencies~Y3NuX2FydGlzdH4xMzgyOQ==.html">Lost Frequencies</a>, <a href="/ca-si/Janieck-Devy~Y3NuX2FydGlzdH42NzAxNA==.html">Janieck Devy</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1541362,
      'music_title_url' => 'locked-away~r-city-adam-levine',
      'music_title' => 'Locked Away',
      'music_artist' => 'R. City;Adam Levine',
      'music_artist_id' => '16680;2856',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538973837,
      'music_last_update_time' => 1475640078,
      'music_title_search' => 'locked awai',
      'music_artist_search' => '; r citi; adam levine;',
      'music_album_search' => '',
      'music_composer' => 'Theron Thomas; Timothy Thomas; Lukasz Gottwald; Henry Walter; Toni Tennille',
      'music_album' => '',
      'music_listen' => 45809,
      'music_track_id' => 0,
      'music_filename' => '1541362-672e6028.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Hook:]
If I got locked away
And we lost it all today
Tell me honestly would you still love me the same?
If I showed you my flaws
If I couldn\'t be strong
Tell me honestly would you still love me th...',
      'music_artist_html' => '<a href="/ca-si/R-City~Y3NuX2FydGlzdH4xNjY4MA==.html">R. City</a>, <a href="/ca-si/Adam-Levine~Y3NuX2FydGlzdH4yODU2.html">Adam Levine</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1478508,
      'music_title_url' => 'creep-vintage-postmodern-jukebox~haley-reinhart',
      'music_title' => 'Creep (Vintage Postmodern Jukebox)',
      'music_artist' => 'Haley Reinhart',
      'music_artist_id' => '12808',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538693431,
      'music_last_update_time' => 1428489084,
      'music_title_search' => 'crep; vintage poxtmodern jukebox',
      'music_artist_search' => '; halei reinhart;',
      'music_album_search' => '',
      'music_composer' => 'Radiohead; Albert Hammond; Mike Hazlewood',
      'music_album' => '',
      'music_listen' => 5287,
      'music_track_id' => 0,
      'music_filename' => '1478508-c19cc967.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'When you were here before
Couldn\'t look you in the eye
You\'re just like an angel
Your skin makes me cry
You float like a feather
In a beautiful world
I wish I was special
You\'re so fucking special....',
      'music_artist_html' => '<a href="/ca-si/Haley-Reinhart~Y3NuX2FydGlzdH4xMjgwOA==.html">Haley Reinhart</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1492932,
      'music_title_url' => 'dont-dream-its-over~miley-cyrus-ariana-grande',
      'music_title' => 'Don\'t Dream It\'s Over',
      'music_artist' => 'Miley Cyrus;Ariana Grande',
      'music_artist_id' => '717;3831',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1539008146,
      'music_last_update_time' => 1431735358,
      'music_title_search' => 'don t dream it x over',
      'music_artist_search' => '; milei cirux; ariana grande;',
      'music_album_search' => '',
      'music_composer' => 'Neil Finn',
      'music_album' => '',
      'music_listen' => 22098,
      'music_track_id' => 0,
      'music_filename' => '1492932-96474c0f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. There is freedom within, there is freedom without
Try to catch the deluge in a paper cup
There\'s a battle ahead, many battles are lost
But you\'ll never see the end of the road
While you\'re trave...',
      'music_artist_html' => '<a href="/ca-si/Miley-Cyrus~Y3NuX2FydGlzdH43MTc=.html">Miley Cyrus</a>, <a href="/ca-si/Ariana-Grande~Y3NuX2FydGlzdH4zODMx.html">Ariana Grande</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1505463,
      'music_title_url' => 'my-heart-will-go-on~mangastyles',
      'music_title' => 'My Heart Will Go On',
      'music_artist' => 'MangaStyles',
      'music_artist_id' => '56414',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 8,
      'cover_id' => 0,
      'music_download_time' => 1538847816,
      'music_last_update_time' => 1434164516,
      'music_title_search' => 'mi heart wil go on',
      'music_artist_search' => '; mangaxtilex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3023,
      'music_track_id' => 0,
      'music_filename' => '1505463-bd270e5a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '1. Every night in my dreams i see you, i feel you
That is how i know you go on
Far across the distance 
And spaces between us 
You have come to show you go on.

[Chorus:]
Near, far, wherever you ar...',
      'music_artist_html' => '<a href="/ca-si/MangaStyles~Y3NuX2FydGlzdH41NjQxNA==.html">MangaStyles</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1572732,
      'music_title_url' => 'hello~adele',
      'music_title' => 'Hello',
      'music_artist' => 'Adele',
      'music_artist_id' => '9222',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538620193,
      'music_last_update_time' => 1473393071,
      'music_title_search' => 'helo',
      'music_artist_search' => '; adele;',
      'music_album_search' => '',
      'music_composer' => 'Lionel Richie',
      'music_album' => '',
      'music_listen' => 223613,
      'music_track_id' => 0,
      'music_filename' => '1572732-9d3cb05f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Hello, it\'s me
I was wondering
If after all these years
You\'d like to meet
To go over
Everything
They say that time\'s supposed to heal yeah but I ain\'t done much healing.

Hello, can you hear me...',
      'music_artist_html' => '<a href="/ca-si/Adele~Y3NuX2FydGlzdH45MjIy.html">Adele</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1620118,
      'music_title_url' => 'dessert~dawin-silento',
      'music_title' => 'Dessert',
      'music_artist' => 'Dawin;Silentó',
      'music_artist_id' => '64020;16242',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538726365,
      'music_last_update_time' => 1480916106,
      'music_title_search' => 'dexert',
      'music_artist_search' => '; dawin; xilento;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 25566,
      'music_track_id' => 1,
      'music_filename' => '1620118-8f64dc53.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
I said D-A-W-I-N
(Silentó)

[Pre-Hook 1:]
They can imitate you
The way your body\'s movin\'
You got something special
About to make me lose it
I like the way you move, girl
I like the way yo...',
      'music_artist_html' => '<a href="/ca-si/Dawin~Y3NuX2FydGlzdH42NDAyMA==.html">Dawin</a>, <a href="/ca-si/Silento~Y3NuX2FydGlzdH4xNjI0Mg==.html">Silentó</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1447115,
      'music_title_url' => 'love-me-like-you-do~ellie-goulding',
      'music_title' => 'Love Me Like You Do',
      'music_artist' => 'Ellie Goulding',
      'music_artist_id' => '3787',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538516888,
      'music_last_update_time' => 1475295077,
      'music_title_search' => 'love me like iou do',
      'music_artist_search' => '; eli goulding;',
      'music_album_search' => '',
      'music_composer' => 'Ilya Salmanzadeh; Tove Lo; Savan Kotecha; Max Martin; Ali Payam',
      'music_album' => '',
      'music_listen' => 226603,
      'music_track_id' => 0,
      'music_filename' => '1447115-ccf514f1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. You\'re the light, you\'re the night
You\'re the color of my blood
You\'re the cure, you\'re the pain
You\'re the only thing I wanna touch
Never knew that it could mean so much, so much.

You\'re the f...',
      'music_artist_html' => '<a href="/ca-si/Ellie-Goulding~Y3NuX2FydGlzdH4zNzg3.html">Ellie Goulding</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1472410,
      'music_title_url' => 'lean-on~major-lazer-dj-snake-m',
      'music_title' => 'Lean On',
      'music_artist' => 'Major Lazer;DJ Snake;MØ',
      'music_artist_id' => '13367;14774;15003',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538507695,
      'music_last_update_time' => 1427104377,
      'music_title_search' => 'lean on',
      'music_artist_search' => '; major lazer; dj xnake; mØ;',
      'music_album_search' => '',
      'music_composer' => 'Major Lazer',
      'music_album' => '',
      'music_listen' => 81883,
      'music_track_id' => 0,
      'music_filename' => '1472410-83d48ce1.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '1. Do you recall, not long ago
We would walk on the sidewalk
Innocent, remember?
All we did was care for each other.

But the night was warm
We were bold and young
All around the wind blows
We woul...',
      'music_artist_html' => '<a href="/ca-si/Major-Lazer~Y3NuX2FydGlzdH4xMzM2Nw==.html">Major Lazer</a>, <a href="/ca-si/DJ-Snake~Y3NuX2FydGlzdH4xNDc3NA==.html">DJ Snake</a>, <a href="/ca-si/M~Y3NuX2FydGlzdH4xNTAwMw==.html">MØ</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1473366,
      'music_title_url' => 'bloodstream~ed-sheeran-rudimental',
      'music_title' => 'Bloodstream',
      'music_artist' => 'Ed Sheeran;Rudimental­',
      'music_artist_id' => '2653;64223',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538897710,
      'music_last_update_time' => 1496646477,
      'music_title_search' => 'blodxcheam',
      'music_artist_search' => '; ed theran; rudimental­;',
      'music_album_search' => '',
      'music_composer' => 'Ed Sheeran; McDaid; Gary Lightbody; Rudimental',
      'music_album' => '',
      'music_listen' => 5576,
      'music_track_id' => 0,
      'music_filename' => '1473366-ab6eb201.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Verse 1:]
I\'ve been spinning now for time
Couple women by my side
I got sinning on my mind
Sipping on red wine
I\'ve been sitting here for ages
Ripping out the pages
How\'d I get so faded?
How\'d I g...',
      'music_artist_html' => '<a href="/ca-si/Ed-Sheeran~Y3NuX2FydGlzdH4yNjUz.html">Ed Sheeran</a>, <a href="/ca-si/Rudimental~Y3NuX2FydGlzdH42NDIyMw==.html">Rudimental­</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1475126,
      'music_title_url' => 'return-of-the-mack~lady-bee-rochelle',
      'music_title' => 'Return Of The Mack',
      'music_artist' => 'Lady Bee;Rochelle',
      'music_artist_id' => '21812;17806',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538837673,
      'music_last_update_time' => 1427864431,
      'music_title_search' => 'return of the mack',
      'music_artist_search' => '; ladi be; rochele;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 803,
      'music_track_id' => 0,
      'music_filename' => '1475126-8c494b54.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Oh, oo-o-oh, come on, ooh, yeah
Well I tried to tell you so (yes, I did)
But I guess you didn\'t know,  
As I said the story goes
Baby, now I got the flow
\'Cos I knew it from the start
Baby, when yo...',
      'music_artist_html' => '<a href="/ca-si/Lady-Bee~Y3NuX2FydGlzdH4yMTgxMg==.html">Lady Bee</a>, <a href="/ca-si/Rochelle~Y3NuX2FydGlzdH4xNzgwNg==.html">Rochelle</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1477796,
      'music_title_url' => 'see-you-again~wiz-khalifa-charlie-puth',
      'music_title' => 'See You Again',
      'music_artist' => 'Wiz Khalifa;Charlie Puth',
      'music_artist_id' => '2710;13568',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538477228,
      'music_last_update_time' => 1476782676,
      'music_title_search' => 'xe iou again',
      'music_artist_search' => '; wiz khalifa; charli puth;',
      'music_album_search' => '',
      'music_composer' => 'Wiz Khalifa',
      'music_album' => '',
      'music_listen' => 276037,
      'music_track_id' => 0,
      'music_filename' => '1477796-9d7c389d.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '[Hook:] 
It\'s been a long day, without you my friend
And I\'ll tell you all about it when I see you again
We\'ve come a long way from where we began
Oh I\'ll tell you all about it when I see you again...',
      'music_artist_html' => '<a href="/ca-si/Wiz-Khalifa~Y3NuX2FydGlzdH4yNzEw.html">Wiz Khalifa</a>, <a href="/ca-si/Charlie-Puth~Y3NuX2FydGlzdH4xMzU2OA==.html">Charlie Puth</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1479033,
      'music_title_url' => 'ride-out~kid-ink-tyga-wale-yg-rich-homie-quan',
      'music_title' => 'Ride Out',
      'music_artist' => 'Kid Ink;Tyga;Wale;YG;Rich Homie Quan',
      'music_artist_id' => '19121;3225;8840;13947;41528',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538927971,
      'music_last_update_time' => 1428569712,
      'music_title_search' => 'ride out',
      'music_artist_search' => '; kid ink; tiga; wale; ig; rich homi quan;',
      'music_album_search' => '',
      'music_composer' => 'Kid Ink; Tyga; Wale; YG; Rich Homie Quan',
      'music_album' => '',
      'music_listen' => 10638,
      'music_track_id' => 0,
      'music_filename' => '1479033-551d65e5.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
Came in at first had bad luck
Got a whole lot, remember I ain\'t had none
We done sold now everybody mad at me
Tell \'em roll down now everybody smashin\'
Keep ready cause you know we bout to...',
      'music_artist_html' => '<a href="/ca-si/Kid-Ink~Y3NuX2FydGlzdH4xOTEyMQ==.html">Kid Ink</a>, <a href="/ca-si/Tyga~Y3NuX2FydGlzdH4zMjI1.html">Tyga</a>, <a href="/ca-si/Wale~Y3NuX2FydGlzdH44ODQw.html">Wale</a>, <a href="/ca-si/YG~Y3NuX2FydGlzdH4xMzk0Nw==.html">YG</a>, <a href="/ca-si/Rich-Homie-Quan~Y3NuX2FydGlzdH40MTUyOA==.html">Rich Homie Quan</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1489656,
      'music_title_url' => 'when-im-around-u~burns',
      'music_title' => 'When I\'m Around U',
      'music_artist' => 'Burns',
      'music_artist_id' => '34309',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538802961,
      'music_last_update_time' => 1430881115,
      'music_title_search' => 'when i m around u',
      'music_artist_search' => '; burnx;',
      'music_album_search' => '',
      'music_composer' => 'Burns',
      'music_album' => '',
      'music_listen' => 1686,
      'music_track_id' => 0,
      'music_filename' => '1489656-2ec43cca.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'When I\'m around you
You make my temperature rise 
All I wanted 
You there beside me.  

When I\'m around you 
You make my temperature rise 
All I wanted 
You there beside me. 

When I\'m around you...',
      'music_artist_html' => '<a href="/ca-si/Burns~Y3NuX2FydGlzdH4zNDMwOQ==.html">Burns</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1498841,
      'music_title_url' => 'dead-inside~muse',
      'music_title' => 'Dead Inside',
      'music_artist' => 'Muse',
      'music_artist_id' => '8361',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538507325,
      'music_last_update_time' => 1432804692,
      'music_title_search' => 'dead inxide',
      'music_artist_search' => '; muxe;',
      'music_album_search' => '',
      'music_composer' => 'Matthew Bellamy',
      'music_album' => '',
      'music_listen' => 778,
      'music_track_id' => 0,
      'music_filename' => '1498841-cc17de88.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Revere a million prayers
And draw me into the holiness
But theres nothing there
Light only shines
From those who share.

Unleash a million drones
And confine me and then erase me babe
Do you have n...',
      'music_artist_html' => '<a href="/ca-si/Muse~Y3NuX2FydGlzdH44MzYx.html">Muse</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1500149,
      'music_title_url' => 'universe~don-diablo-emeni',
      'music_title' => 'Universe',
      'music_artist' => 'Don Diablo;Emeni',
      'music_artist_id' => '13776;66004',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538886015,
      'music_last_update_time' => 1433130019,
      'music_title_search' => 'univerxe',
      'music_artist_search' => '; don diablo; emeni;',
      'music_album_search' => '',
      'music_composer' => 'Don Diablo; Emeni',
      'music_album' => '',
      'music_listen' => 2537,
      'music_track_id' => 0,
      'music_filename' => '1500149-3a82a853.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Fireflies and coloursky 
Twinkles in our eyes 
Twinkles in our eyes 
Hold my hand 
And walk me through the night 
Twinkles in our eyes 
Were brave enough to fly. 

We are the children, the universe...',
      'music_artist_html' => '<a href="/ca-si/Don-Diablo~Y3NuX2FydGlzdH4xMzc3Ng==.html">Don Diablo</a>, <a href="/ca-si/Emeni~Y3NuX2FydGlzdH42NjAwNA==.html">Emeni</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1512473,
      'music_title_url' => 'shades-of-grey~oliver-heldens-shaun-frank-delaney-jane',
      'music_title' => 'Shades Of Grey',
      'music_artist' => 'Oliver Heldens;Shaun Frank;Delaney Jane',
      'music_artist_id' => '18874;23019;52703',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538706274,
      'music_last_update_time' => 1472523117,
      'music_title_search' => 'thadex of grei',
      'music_artist_search' => '; oliver heldenx; thaun frank; delanei jane;',
      'music_album_search' => '',
      'music_composer' => 'Oliver Heldens; Shaun Frank; Delaney Jane',
      'music_album' => '',
      'music_listen' => 2700,
      'music_track_id' => 0,
      'music_filename' => '1512473-9180e5fb.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'I\'m losing sleep
Light a smoke so I can breathe
It\'s too dark, it\'s too loud in the city
If I had a god, I would say he was wrong
Got these scars, but I think they\'re pretty.

So I say Hey!
Been hi...',
      'music_artist_html' => '<a href="/ca-si/Oliver-Heldens~Y3NuX2FydGlzdH4xODg3NA==.html">Oliver Heldens</a>, <a href="/ca-si/Shaun-Frank~Y3NuX2FydGlzdH4yMzAxOQ==.html">Shaun Frank</a>, <a href="/ca-si/Delaney-Jane~Y3NuX2FydGlzdH41MjcwMw==.html">Delaney Jane</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1532114,
      'music_title_url' => 'how-deep-is-your-love~calvin-harris-disciples',
      'music_title' => 'How Deep Is Your Love',
      'music_artist' => 'Calvin Harris;Disciples',
      'music_artist_id' => '2474;58818',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505992,
      'music_last_update_time' => 1471507775,
      'music_title_search' => 'how dep ix iour love',
      'music_artist_search' => '; calvin harix; dixciplex;',
      'music_album_search' => '',
      'music_composer' => 'Calvin Harris; Ina Wrolsden',
      'music_album' => '',
      'music_listen' => 40876,
      'music_track_id' => 0,
      'music_filename' => '1532114-81064747.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Verse 1:]
I want you to breathe me in
Let me be your air
Let me roam your body freely
No inhibition, no fear.

[Chorus:]
How deep is your love?
Is it like the ocean?
What devotion? Are you?
How de...',
      'music_artist_html' => '<a href="/ca-si/Calvin-Harris~Y3NuX2FydGlzdH4yNDc0.html">Calvin Harris</a>, <a href="/ca-si/Disciples~Y3NuX2FydGlzdH41ODgxOA==.html">Disciples</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1641497,
      'music_title_url' => 'sax~fleur-east',
      'music_title' => 'Sax',
      'music_artist' => 'Fleur East',
      'music_artist_id' => '19018',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538503930,
      'music_last_update_time' => 1498041121,
      'music_title_search' => 'xax',
      'music_artist_search' => '; fleur eaxt;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 550,
      'music_track_id' => 1,
      'music_filename' => '1641497-b9adb307.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Give it to me!
Give it to me!
I met a boy last week tryna run that game
Made it sound so sweet when he say my name
I said boy, stop, run it back
You can talk that talk but can you play that sax?

I...',
      'music_artist_html' => '<a href="/ca-si/Fleur-East~Y3NuX2FydGlzdH4xOTAxOA==.html">Fleur East</a>',
    ),
  ),
  3 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1758954,
      'music_title_url' => 'hoa-tam~truong-tinh-dinh',
      'music_title' => 'Hoạ Tâm',
      'music_artist' => 'Trương Tịnh Dĩnh',
      'music_artist_id' => '475',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538835245,
      'music_last_update_time' => 1484616420,
      'music_title_search' => 'hoa tam',
      'music_artist_search' => '; chung tinh dinh;',
      'music_album_search' => '',
      'music_composer' => 'Triệu Vy',
      'music_album' => '',
      'music_listen' => 2220,
      'music_track_id' => 0,
      'music_filename' => '1758954-b929f3bd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Kan bu chuan shi ni shi luo de hun po
Cai bu tou shi ni tong kong de yan se
Yi zhen feng yi chang meng ai ru sheng ming ban mo ce
Ni de xin dao di bei shen mo gu huo.

Ni de lun kuo zai hei ye zhi...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1558921,
      'music_title_url' => 'con-lai-mua-he~tfboys',
      'music_title' => 'Còn Lại Mùa Hè',
      'music_artist' => 'TFBoys',
      'music_artist_id' => '21510',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538486343,
      'music_last_update_time' => 1443403925,
      'music_title_search' => 'con lai mua he',
      'music_artist_search' => '; tfboix;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kie',
      'music_album' => '',
      'music_listen' => 18033,
      'music_track_id' => 0,
      'music_filename' => '1558921-006ca8b7.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'Chán míng shì chuāng wài jiàn jiàn dǎo shù de zhōng shēng 
Kǎo juàn de fèn shù shì wǎng shàng pá de shù téng 
Wǒ huà zài nǐ shǒu zhǎng shàng de hú dié 
Fēi zǒu le ma 
Bái yún shì lán tiān zhèng zài...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1560150,
      'music_title_url' => 'thieu-nien-noi~tfboys',
      'music_title' => 'Thiếu Niên Nói (少年说)',
      'music_artist' => 'TFBoys',
      'music_artist_id' => '21510',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538485711,
      'music_last_update_time' => 1443690282,
      'music_title_search' => 'thiu nin noi; 少年说',
      'music_artist_search' => '; tfboix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 17754,
      'music_track_id' => 0,
      'music_filename' => '1560150-88f52dbc.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1438569,
      'music_title_url' => 'our-tomorrow-ngay-mai-cua-chung-ta~luhan',
      'music_title' => 'Our Tomorrow (Ngày Mai Của Chúng Ta; 我們的明天)',
      'music_artist' => 'Luhan',
      'music_artist_id' => '17771',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1517149236,
      'music_last_update_time' => 1420624735,
      'music_title_search' => 'our tomorow; ngai mai cua chung ta; 我們的明天',
      'music_artist_search' => '; luhan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 32848,
      'music_track_id' => 0,
      'music_filename' => '1438569-a6e167af.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '一个人走到终点
不小心回到起点
一个新的世界
此刻我才发现
时间没有绝对
直到有另一个人
能体会我的感觉
不用说不用问
就明白就了解
每一刻都像永远
我看着
没剩多少时间 能许愿
好想多一天 我们的明天
我问着
还有多少时间 在眼前
以为多一天
能实现我们的预言
直到有另一个人
能体会我的感觉
不用说不用问
就明白就了解
每一刻都像永远
我看着
没剩多少时间 能许愿
好想多一天
我们的明天...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1443811,
      'music_title_url' => 'give-me-five~snh48',
      'music_title' => 'Give Me Five! (青春的约定)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512554918,
      'music_last_update_time' => 1421380139,
      'music_title_search' => 'dve me five ; 青春的约定',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8085,
      'music_track_id' => 0,
      'music_filename' => '1443811-9d88cda6.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1443812,
      'music_title_url' => 'our-destiny-in-this-world~snh48-ju-jingyizhao-jiamin-xu-jiaqi',
      'music_title' => 'Our Destiny In This World (缘尽世间)',
      'music_artist' => 'SNH48 Ju Jingyi,Zhao Jiamin &amp;Xu Jiaqi',
      'music_artist_id' => '61512;61513',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521260230,
      'music_last_update_time' => 1424601439,
      'music_title_search' => 'our dextini in thix world; 缘尽世间',
      'music_artist_search' => '; xnh48 ju jingi zhao jiamin xu jiaqi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9031,
      'music_track_id' => 0,
      'music_filename' => '1443812-5675b493.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '天地间 有你我的缘
tiān dì jiān yǒu nǐ wǒ de yuán 
Trong trời đất có chàng là duyên phận của ta
交汇在前世和今生之间
jiāo huì zài qián shì hé jīn shēng zhī jiān 
Giữa giao lộ của kiếp trước cùng kiếp này
忘不了你一身的绒血
wà...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445287,
      'music_title_url' => 'ookami-to-pride-live~snh48-kong-xiaoyin-qian-beiting',
      'music_title' => 'Ookami to Pride (狼与自尊) (Live)',
      'music_artist' => 'SNH48 Kong Xiaoyin &amp;Qian Beiting',
      'music_artist_id' => '61635;61636',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1480857095,
      'music_last_update_time' => 1421668198,
      'music_title_search' => 'okami to pride; 狼与自尊 ; live',
      'music_artist_search' => '; xnh48 kong xiaoin qian beiting;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1528,
      'music_track_id' => 0,
      'music_filename' => '1445287-4aee8c1b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445302,
      'music_title_url' => '31415~selina',
      'music_title' => '3.1415 ...',
      'music_artist' => 'Selina',
      'music_artist_id' => '635',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495459095,
      'music_last_update_time' => 1421668170,
      'music_title_search' => '3 1415',
      'music_artist_search' => '; xelina;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1165,
      'music_track_id' => 0,
      'music_filename' => '1445302-27b29f9d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445305,
      'music_title_url' => 'da-diep-live~snh48-yi-jiaai-ju-jingyi',
      'music_title' => 'Dạ Điệp (夜蝶) (Live)',
      'music_artist' => 'SNH48 Yi Jiaai &amp;Ju Jingyi',
      'music_artist_id' => '61640;61641',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1521260197,
      'music_last_update_time' => 1421666907,
      'music_title_search' => 'da dip; 夜蝶 ; live',
      'music_artist_search' => '; xnh48 i jiai ju jingi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2936,
      'music_track_id' => 0,
      'music_filename' => '1445305-e8879bf3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445328,
      'music_title_url' => 'da-diep-live~snh48-mo-han-qiu-xinyi',
      'music_title' => 'Dạ Điệp (夜蝶) (Live)',
      'music_artist' => 'SNH48 Mo Han &amp;Qiu Xinyi',
      'music_artist_id' => '61643;61644',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1495486126,
      'music_last_update_time' => 1421666893,
      'music_title_search' => 'da dip; 夜蝶 ; live',
      'music_artist_search' => '; xnh48 mo han qiu xini;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1471,
      'music_track_id' => 0,
      'music_filename' => '1445328-0fde41ce.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445356,
      'music_title_url' => 'itoshisa-no-accel-live~snh48-xu-yang-yuzhuo',
      'music_title' => 'Itoshisa no Accel (爱的加速器) (Live)',
      'music_artist' => 'SNH48 Xu Yang Yuzhuo',
      'music_artist_id' => '61647',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1496222144,
      'music_last_update_time' => 1421666110,
      'music_title_search' => 'itothixa no acel; 爱的加速器 ; live',
      'music_artist_search' => '; xnh48 xu iang iuzhu;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1079,
      'music_track_id' => 0,
      'music_filename' => '1445356-8c214206.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445357,
      'music_title_url' => 'nakinagara-hohoende-live~snh48-wu-zhehan',
      'music_title' => 'Nakinagara Hohoende (流着泪微笑) (Live)',
      'music_artist' => 'SNH48 Wu Zhehan',
      'music_artist_id' => '61648',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1531240363,
      'music_last_update_time' => 1422033193,
      'music_title_search' => 'nakinagara hohoende; 流着泪微笑 ; live',
      'music_artist_search' => '; xnh48 wu zhehan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2446,
      'music_track_id' => 0,
      'music_filename' => '1445357-f881de09.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445358,
      'music_title_url' => 'mushi-no-ballad-live~snh48-wen-jingjie',
      'music_title' => 'Mushi no Ballad (虫之诗) (Live)',
      'music_artist' => 'SNH48 Wen Jingjie',
      'music_artist_id' => '61649',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1428484646,
      'music_last_update_time' => 1421666476,
      'music_title_search' => 'muthi no balad; 虫之诗 ; live',
      'music_artist_search' => '; xnh48 wen jingji;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1164,
      'music_track_id' => 0,
      'music_filename' => '1445358-68748757.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445360,
      'music_title_url' => 'candy-live~snh48-xu-yang-yuzhuo-zhang-xin-xu-yiren',
      'music_title' => 'Candy (糖) (Live)',
      'music_artist' => 'SNH48 Xu Yang Yuzhuo, Zhang Xin &amp;Xu Yiren',
      'music_artist_id' => '61650;61651',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1525574441,
      'music_last_update_time' => 1421666644,
      'music_title_search' => 'candi; 糖 ; live',
      'music_artist_search' => '; xnh48 xu iang iuzhu zhang xin xu iren;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1741,
      'music_track_id' => 0,
      'music_filename' => '1445360-4119788e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445361,
      'music_title_url' => 'shonichi-live~snh48-team-sii',
      'music_title' => 'Shonichi (初日) (Live)',
      'music_artist' => 'SNH48 Team SII',
      'music_artist_id' => '58152',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1495202241,
      'music_last_update_time' => 1421666789,
      'music_title_search' => 'thonichi; 初日 ; live',
      'music_artist_search' => '; xnh48 team xi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1671,
      'music_track_id' => 0,
      'music_filename' => '1445361-ad2a34bb.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445363,
      'music_title_url' => 'kuroi-tenshi-live~snh48-liu-peixin-wu-yanwen-lin-nan',
      'music_title' => 'Kuroi Tenshi (黑天使) (Live)',
      'music_artist' => 'SNH48 Liu Peixin, Wu Yanwen &amp;Lin Nan',
      'music_artist_id' => '61652;61653',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1498618243,
      'music_last_update_time' => 1421666987,
      'music_title_search' => 'kuroi tenthi; 黑天使 ; live',
      'music_artist_search' => '; xnh48 liu peixin wu ianwen lin nan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1404,
      'music_track_id' => 0,
      'music_filename' => '1445363-e2e07f4e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445478,
      'music_title_url' => 'thien-thu~ton-nam',
      'music_title' => 'Thiên Thu (千秋)',
      'music_artist' => 'Tôn Nam',
      'music_artist_id' => '16',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1523087793,
      'music_last_update_time' => 1421710782,
      'music_title_search' => 'thin thu; 千秋',
      'music_artist_search' => '; ton 5;',
      'music_album_search' => '',
      'music_composer' => 'Nhạc: Đổng Đông Đông; Lời: Trần Hy',
      'music_album' => '',
      'music_listen' => 5582,
      'music_track_id' => 0,
      'music_filename' => '1445478-2638208b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445639,
      'music_title_url' => 'lu-khach-chan-troi~chau-kien-luan',
      'music_title' => 'Lữ Khách Chân Trời (天涯過客)',
      'music_artist' => 'Châu Kiện Luân',
      'music_artist_id' => '61668',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531405631,
      'music_last_update_time' => 1421723786,
      'music_title_search' => 'lu khach chan choi; 天涯過客',
      'music_artist_search' => '; chau kin luan;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân, Phương Văn Sơn',
      'music_album' => '',
      'music_listen' => 9618,
      'music_track_id' => 0,
      'music_filename' => '1445639-df8c2003.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '風起雁南下 景蕭蕭 落黃沙
獨坐沏壺茶 沏成一夜 燈下
你在 幾里外 的人家 想著他
一針一線 綉著花

晨霜攀黛瓦 抖落霜 冷了茶
撫琴欲對話 欲問琴聲 初落下
弦外 思念透窗花 而你卻什麼也不回答

琴絃斷了 緣盡了 你也走了
愛恨起落 故事經過 只留下我
幾番離愁 世事參透 都入酒
問你是否 心不在這 少了什麼

琴絃斷了 緣已盡了 你也走了
你是過客 溫柔到這 沉默了
拱橋斜坡 水岸...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445640,
      'music_title_url' => 'tinh-yeu-ha-di~chung-han-luong',
      'music_title' => 'Tình Yêu Hà Dĩ (何以爱情)',
      'music_artist' => 'Chung Hán Lương',
      'music_artist_id' => '25463',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1520228686,
      'music_last_update_time' => 1421724550,
      'music_title_search' => 'tinh iu ha di; 何以爱情',
      'music_artist_search' => '; chung han lung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12191,
      'music_track_id' => 0,
      'music_filename' => '1445640-661ad282.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '我轻轻放开了手 低头沉默
Anh nhẹ nhàng buông tay, cúi đầu trầm mặc
安静地嘶吼
Lặng lẽ kêu gào
分开不过是眼泪 暂时停留
Chia tay chẳng qua chỉ là giọt nước mắt tạm thời lắng đọng
在我的眼眸
Trên khoé mắt anh
从今后你的难过 不再有我
Từ nay về s...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445862,
      'music_title_url' => 'chinh-la-hien-tai~vuong-luc-hoanh',
      'music_title' => 'Chính Là Hiện Tại (就是现在)',
      'music_artist' => 'Vương Lực Hoành',
      'music_artist_id' => '303',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495895622,
      'music_last_update_time' => 1421746886,
      'music_title_search' => 'chinh la hin tai; 就是现在',
      'music_artist_search' => '; vung luc hoanh;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1128,
      'music_track_id' => 0,
      'music_filename' => '1445862-dbd11a2f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1758954,
      'music_title_url' => 'hoa-tam~truong-tinh-dinh',
      'music_title' => 'Hoạ Tâm',
      'music_artist' => 'Trương Tịnh Dĩnh',
      'music_artist_id' => '475',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538835245,
      'music_last_update_time' => 1484616420,
      'music_title_search' => 'hoa tam',
      'music_artist_search' => '; chung tinh dinh;',
      'music_album_search' => '',
      'music_composer' => 'Triệu Vy',
      'music_album' => '',
      'music_listen' => 2220,
      'music_track_id' => 0,
      'music_filename' => '1758954-b929f3bd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Kan bu chuan shi ni shi luo de hun po
Cai bu tou shi ni tong kong de yan se
Yi zhen feng yi chang meng ai ru sheng ming ban mo ce
Ni de xin dao di bei shen mo gu huo.

Ni de lun kuo zai hei ye zhi...',
      'music_artist_html' => '<a href="/ca-si/Truong-Tinh-Dinh~Y3NuX2FydGlzdH40NzU=.html">Trương Tịnh Dĩnh</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1558921,
      'music_title_url' => 'con-lai-mua-he~tfboys',
      'music_title' => 'Còn Lại Mùa Hè',
      'music_artist' => 'TFBoys',
      'music_artist_id' => '21510',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538486343,
      'music_last_update_time' => 1443403925,
      'music_title_search' => 'con lai mua he',
      'music_artist_search' => '; tfboix;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kie',
      'music_album' => '',
      'music_listen' => 18033,
      'music_track_id' => 0,
      'music_filename' => '1558921-006ca8b7.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'Chán míng shì chuāng wài jiàn jiàn dǎo shù de zhōng shēng 
Kǎo juàn de fèn shù shì wǎng shàng pá de shù téng 
Wǒ huà zài nǐ shǒu zhǎng shàng de hú dié 
Fēi zǒu le ma 
Bái yún shì lán tiān zhèng zài...',
      'music_artist_html' => '<a href="/ca-si/TFBoys~Y3NuX2FydGlzdH4yMTUxMA==.html">TFBoys</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1560150,
      'music_title_url' => 'thieu-nien-noi~tfboys',
      'music_title' => 'Thiếu Niên Nói (少年说)',
      'music_artist' => 'TFBoys',
      'music_artist_id' => '21510',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538485711,
      'music_last_update_time' => 1443690282,
      'music_title_search' => 'thiu nin noi; 少年说',
      'music_artist_search' => '; tfboix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 17754,
      'music_track_id' => 0,
      'music_filename' => '1560150-88f52dbc.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/TFBoys~Y3NuX2FydGlzdH4yMTUxMA==.html">TFBoys</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1438569,
      'music_title_url' => 'our-tomorrow-ngay-mai-cua-chung-ta~luhan',
      'music_title' => 'Our Tomorrow (Ngày Mai Của Chúng Ta; 我們的明天)',
      'music_artist' => 'Luhan',
      'music_artist_id' => '17771',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1517149236,
      'music_last_update_time' => 1420624735,
      'music_title_search' => 'our tomorow; ngai mai cua chung ta; 我們的明天',
      'music_artist_search' => '; luhan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 32848,
      'music_track_id' => 0,
      'music_filename' => '1438569-a6e167af.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '一个人走到终点
不小心回到起点
一个新的世界
此刻我才发现
时间没有绝对
直到有另一个人
能体会我的感觉
不用说不用问
就明白就了解
每一刻都像永远
我看着
没剩多少时间 能许愿
好想多一天 我们的明天
我问着
还有多少时间 在眼前
以为多一天
能实现我们的预言
直到有另一个人
能体会我的感觉
不用说不用问
就明白就了解
每一刻都像永远
我看着
没剩多少时间 能许愿
好想多一天
我们的明天...',
      'music_artist_html' => '<a href="/ca-si/Luhan~Y3NuX2FydGlzdH4xNzc3MQ==.html">Luhan</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1443811,
      'music_title_url' => 'give-me-five~snh48',
      'music_title' => 'Give Me Five! (青春的约定)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512554918,
      'music_last_update_time' => 1421380139,
      'music_title_search' => 'dve me five ; 青春的约定',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8085,
      'music_track_id' => 0,
      'music_filename' => '1443811-9d88cda6.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/SNH48~Y3NuX2FydGlzdH4xNTk2Ng==.html">SNH48</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1443812,
      'music_title_url' => 'our-destiny-in-this-world~snh48-ju-jingyizhao-jiamin-xu-jiaqi',
      'music_title' => 'Our Destiny In This World (缘尽世间)',
      'music_artist' => 'SNH48 Ju Jingyi,Zhao Jiamin &amp;Xu Jiaqi',
      'music_artist_id' => '61512;61513',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521260230,
      'music_last_update_time' => 1424601439,
      'music_title_search' => 'our dextini in thix world; 缘尽世间',
      'music_artist_search' => '; xnh48 ju jingi zhao jiamin xu jiaqi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9031,
      'music_track_id' => 0,
      'music_filename' => '1443812-5675b493.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '天地间 有你我的缘
tiān dì jiān yǒu nǐ wǒ de yuán 
Trong trời đất có chàng là duyên phận của ta
交汇在前世和今生之间
jiāo huì zài qián shì hé jīn shēng zhī jiān 
Giữa giao lộ của kiếp trước cùng kiếp này
忘不了你一身的绒血
wà...',
      'music_artist_html' => '<a href="/ca-si/SNH48-Ju-JingyiZhao-Jiamin-amp~Y3NuX2FydGlzdH42MTUxMg==.html">SNH48 Ju Jingyi,Zhao Jiamin &amp</a>, <a href="/ca-si/Xu-Jiaqi~Y3NuX2FydGlzdH42MTUxMw==.html">Xu Jiaqi</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445287,
      'music_title_url' => 'ookami-to-pride-live~snh48-kong-xiaoyin-qian-beiting',
      'music_title' => 'Ookami to Pride (狼与自尊) (Live)',
      'music_artist' => 'SNH48 Kong Xiaoyin &amp;Qian Beiting',
      'music_artist_id' => '61635;61636',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1480857095,
      'music_last_update_time' => 1421668198,
      'music_title_search' => 'okami to pride; 狼与自尊 ; live',
      'music_artist_search' => '; xnh48 kong xiaoin qian beiting;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1528,
      'music_track_id' => 0,
      'music_filename' => '1445287-4aee8c1b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/SNH48-Kong-Xiaoyin-amp~Y3NuX2FydGlzdH42MTYzNQ==.html">SNH48 Kong Xiaoyin &amp</a>, <a href="/ca-si/Qian-Beiting~Y3NuX2FydGlzdH42MTYzNg==.html">Qian Beiting</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445302,
      'music_title_url' => '31415~selina',
      'music_title' => '3.1415 ...',
      'music_artist' => 'Selina',
      'music_artist_id' => '635',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495459095,
      'music_last_update_time' => 1421668170,
      'music_title_search' => '3 1415',
      'music_artist_search' => '; xelina;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1165,
      'music_track_id' => 0,
      'music_filename' => '1445302-27b29f9d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Selina~Y3NuX2FydGlzdH42MzU=.html">Selina</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445305,
      'music_title_url' => 'da-diep-live~snh48-yi-jiaai-ju-jingyi',
      'music_title' => 'Dạ Điệp (夜蝶) (Live)',
      'music_artist' => 'SNH48 Yi Jiaai &amp;Ju Jingyi',
      'music_artist_id' => '61640;61641',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1521260197,
      'music_last_update_time' => 1421666907,
      'music_title_search' => 'da dip; 夜蝶 ; live',
      'music_artist_search' => '; xnh48 i jiai ju jingi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2936,
      'music_track_id' => 0,
      'music_filename' => '1445305-e8879bf3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/SNH48-Yi-Jiaai-amp~Y3NuX2FydGlzdH42MTY0MA==.html">SNH48 Yi Jiaai &amp</a>, <a href="/ca-si/Ju-Jingyi~Y3NuX2FydGlzdH42MTY0MQ==.html">Ju Jingyi</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445328,
      'music_title_url' => 'da-diep-live~snh48-mo-han-qiu-xinyi',
      'music_title' => 'Dạ Điệp (夜蝶) (Live)',
      'music_artist' => 'SNH48 Mo Han &amp;Qiu Xinyi',
      'music_artist_id' => '61643;61644',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1495486126,
      'music_last_update_time' => 1421666893,
      'music_title_search' => 'da dip; 夜蝶 ; live',
      'music_artist_search' => '; xnh48 mo han qiu xini;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1471,
      'music_track_id' => 0,
      'music_filename' => '1445328-0fde41ce.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/SNH48-Mo-Han-amp~Y3NuX2FydGlzdH42MTY0Mw==.html">SNH48 Mo Han &amp</a>, <a href="/ca-si/Qiu-Xinyi~Y3NuX2FydGlzdH42MTY0NA==.html">Qiu Xinyi</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445356,
      'music_title_url' => 'itoshisa-no-accel-live~snh48-xu-yang-yuzhuo',
      'music_title' => 'Itoshisa no Accel (爱的加速器) (Live)',
      'music_artist' => 'SNH48 Xu Yang Yuzhuo',
      'music_artist_id' => '61647',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1496222144,
      'music_last_update_time' => 1421666110,
      'music_title_search' => 'itothixa no acel; 爱的加速器 ; live',
      'music_artist_search' => '; xnh48 xu iang iuzhu;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1079,
      'music_track_id' => 0,
      'music_filename' => '1445356-8c214206.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/SNH48-Xu-Yang-Yuzhuo~Y3NuX2FydGlzdH42MTY0Nw==.html">SNH48 Xu Yang Yuzhuo</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445357,
      'music_title_url' => 'nakinagara-hohoende-live~snh48-wu-zhehan',
      'music_title' => 'Nakinagara Hohoende (流着泪微笑) (Live)',
      'music_artist' => 'SNH48 Wu Zhehan',
      'music_artist_id' => '61648',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1531240363,
      'music_last_update_time' => 1422033193,
      'music_title_search' => 'nakinagara hohoende; 流着泪微笑 ; live',
      'music_artist_search' => '; xnh48 wu zhehan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2446,
      'music_track_id' => 0,
      'music_filename' => '1445357-f881de09.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/SNH48-Wu-Zhehan~Y3NuX2FydGlzdH42MTY0OA==.html">SNH48 Wu Zhehan</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445358,
      'music_title_url' => 'mushi-no-ballad-live~snh48-wen-jingjie',
      'music_title' => 'Mushi no Ballad (虫之诗) (Live)',
      'music_artist' => 'SNH48 Wen Jingjie',
      'music_artist_id' => '61649',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1428484646,
      'music_last_update_time' => 1421666476,
      'music_title_search' => 'muthi no balad; 虫之诗 ; live',
      'music_artist_search' => '; xnh48 wen jingji;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1164,
      'music_track_id' => 0,
      'music_filename' => '1445358-68748757.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/SNH48-Wen-Jingjie~Y3NuX2FydGlzdH42MTY0OQ==.html">SNH48 Wen Jingjie</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445360,
      'music_title_url' => 'candy-live~snh48-xu-yang-yuzhuo-zhang-xin-xu-yiren',
      'music_title' => 'Candy (糖) (Live)',
      'music_artist' => 'SNH48 Xu Yang Yuzhuo, Zhang Xin &amp;Xu Yiren',
      'music_artist_id' => '61650;61651',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1525574441,
      'music_last_update_time' => 1421666644,
      'music_title_search' => 'candi; 糖 ; live',
      'music_artist_search' => '; xnh48 xu iang iuzhu zhang xin xu iren;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1741,
      'music_track_id' => 0,
      'music_filename' => '1445360-4119788e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/SNH48-Xu-Yang-Yuzhuo-Zhang-Xin-amp~Y3NuX2FydGlzdH42MTY1MA==.html">SNH48 Xu Yang Yuzhuo, Zhang Xin &amp</a>, <a href="/ca-si/Xu-Yiren~Y3NuX2FydGlzdH42MTY1MQ==.html">Xu Yiren</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445361,
      'music_title_url' => 'shonichi-live~snh48-team-sii',
      'music_title' => 'Shonichi (初日) (Live)',
      'music_artist' => 'SNH48 Team SII',
      'music_artist_id' => '58152',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1495202241,
      'music_last_update_time' => 1421666789,
      'music_title_search' => 'thonichi; 初日 ; live',
      'music_artist_search' => '; xnh48 team xi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1671,
      'music_track_id' => 0,
      'music_filename' => '1445361-ad2a34bb.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/SNH48-Team-SII~Y3NuX2FydGlzdH41ODE1Mg==.html">SNH48 Team SII</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445363,
      'music_title_url' => 'kuroi-tenshi-live~snh48-liu-peixin-wu-yanwen-lin-nan',
      'music_title' => 'Kuroi Tenshi (黑天使) (Live)',
      'music_artist' => 'SNH48 Liu Peixin, Wu Yanwen &amp;Lin Nan',
      'music_artist_id' => '61652;61653',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1498618243,
      'music_last_update_time' => 1421666987,
      'music_title_search' => 'kuroi tenthi; 黑天使 ; live',
      'music_artist_search' => '; xnh48 liu peixin wu ianwen lin nan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1404,
      'music_track_id' => 0,
      'music_filename' => '1445363-e2e07f4e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/SNH48-Liu-Peixin-Wu-Yanwen-amp~Y3NuX2FydGlzdH42MTY1Mg==.html">SNH48 Liu Peixin, Wu Yanwen &amp</a>, <a href="/ca-si/Lin-Nan~Y3NuX2FydGlzdH42MTY1Mw==.html">Lin Nan</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445478,
      'music_title_url' => 'thien-thu~ton-nam',
      'music_title' => 'Thiên Thu (千秋)',
      'music_artist' => 'Tôn Nam',
      'music_artist_id' => '16',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1523087793,
      'music_last_update_time' => 1421710782,
      'music_title_search' => 'thin thu; 千秋',
      'music_artist_search' => '; ton 5;',
      'music_album_search' => '',
      'music_composer' => 'Nhạc: Đổng Đông Đông; Lời: Trần Hy',
      'music_album' => '',
      'music_listen' => 5582,
      'music_track_id' => 0,
      'music_filename' => '1445478-2638208b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Ton-Nam~Y3NuX2FydGlzdH4xNg==.html">Tôn Nam</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445639,
      'music_title_url' => 'lu-khach-chan-troi~chau-kien-luan',
      'music_title' => 'Lữ Khách Chân Trời (天涯過客)',
      'music_artist' => 'Châu Kiện Luân',
      'music_artist_id' => '61668',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531405631,
      'music_last_update_time' => 1421723786,
      'music_title_search' => 'lu khach chan choi; 天涯過客',
      'music_artist_search' => '; chau kin luan;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kiệt Luân, Phương Văn Sơn',
      'music_album' => '',
      'music_listen' => 9618,
      'music_track_id' => 0,
      'music_filename' => '1445639-df8c2003.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '風起雁南下 景蕭蕭 落黃沙
獨坐沏壺茶 沏成一夜 燈下
你在 幾里外 的人家 想著他
一針一線 綉著花

晨霜攀黛瓦 抖落霜 冷了茶
撫琴欲對話 欲問琴聲 初落下
弦外 思念透窗花 而你卻什麼也不回答

琴絃斷了 緣盡了 你也走了
愛恨起落 故事經過 只留下我
幾番離愁 世事參透 都入酒
問你是否 心不在這 少了什麼

琴絃斷了 緣已盡了 你也走了
你是過客 溫柔到這 沉默了
拱橋斜坡 水岸...',
      'music_artist_html' => '<a href="/ca-si/Chau-Kien-Luan~Y3NuX2FydGlzdH42MTY2OA==.html">Châu Kiện Luân</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445640,
      'music_title_url' => 'tinh-yeu-ha-di~chung-han-luong',
      'music_title' => 'Tình Yêu Hà Dĩ (何以爱情)',
      'music_artist' => 'Chung Hán Lương',
      'music_artist_id' => '25463',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1520228686,
      'music_last_update_time' => 1421724550,
      'music_title_search' => 'tinh iu ha di; 何以爱情',
      'music_artist_search' => '; chung han lung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12191,
      'music_track_id' => 0,
      'music_filename' => '1445640-661ad282.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '我轻轻放开了手 低头沉默
Anh nhẹ nhàng buông tay, cúi đầu trầm mặc
安静地嘶吼
Lặng lẽ kêu gào
分开不过是眼泪 暂时停留
Chia tay chẳng qua chỉ là giọt nước mắt tạm thời lắng đọng
在我的眼眸
Trên khoé mắt anh
从今后你的难过 不再有我
Từ nay về s...',
      'music_artist_html' => '<a href="/ca-si/Chung-Han-Luong~Y3NuX2FydGlzdH4yNTQ2Mw==.html">Chung Hán Lương</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1445862,
      'music_title_url' => 'chinh-la-hien-tai~vuong-luc-hoanh',
      'music_title' => 'Chính Là Hiện Tại (就是现在)',
      'music_artist' => 'Vương Lực Hoành',
      'music_artist_id' => '303',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495895622,
      'music_last_update_time' => 1421746886,
      'music_title_search' => 'chinh la hin tai; 就是现在',
      'music_artist_search' => '; vung luc hoanh;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1128,
      'music_track_id' => 0,
      'music_filename' => '1445862-dbd11a2f.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Vuong-Luc-Hoanh~Y3NuX2FydGlzdH4zMDM=.html">Vương Lực Hoành</a>',
    ),
  ),
  4 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1494802,
      'music_title_url' => 'arirang-alone~so-hyang',
      'music_title' => 'Arirang Alone',
      'music_artist' => 'So Hyang',
      'music_artist_id' => '23804',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538788754,
      'music_last_update_time' => 1432085185,
      'music_title_search' => 'arirang alone',
      'music_artist_search' => '; xo hiang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11060,
      'music_track_id' => 0,
      'music_filename' => '1494802-6a375814.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1447359,
      'music_title_url' => 'sorry-im-happy~davichi',
      'music_title' => 'Sorry, I\'m Happy (행복해서 미안해)',
      'music_artist' => 'Davichi',
      'music_artist_id' => '1050',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538558511,
      'music_last_update_time' => 1422016655,
      'music_title_search' => 'xori i m hapi; 행복해서 미안해',
      'music_artist_search' => '; davichi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7344,
      'music_track_id' => 0,
      'music_filename' => '1447359-a15c0378.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1454615,
      'music_title_url' => 'cant-stop-im-sorry-love-light-29th-golden-disk-awards-150125~cnblue',
      'music_title' => 'Can\'t Stop; I\'m Sorry; Love Light (29th Golden Disk Awards 150125)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538562119,
      'music_last_update_time' => 1423240943,
      'music_title_search' => 'can t xtop; i m xori; love light; 29th golden dixk awardx 150125',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1805,
      'music_track_id' => 0,
      'music_filename' => '1454615-2bd7c5d2.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Can\'t Stop]

Harue han beonman geudaen tteoollyeojwoyo miss you
Harue han beonman naneun ijeobolgeyo
Geugeotdo andwaeyo geugeotdo andwaeyo
Geugeotdo andoemyeon geureom nan eotteokhanayo.

Geudae h...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1468383,
      'music_title_url' => 'automatic~red-velvet',
      'music_title' => 'Automatic',
      'music_artist' => 'Red Velvet',
      'music_artist_id' => '4719',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538819909,
      'music_last_update_time' => 1426483141,
      'music_title_search' => 'automatic',
      'music_artist_search' => '; red velvet;',
      'music_album_search' => '',
      'music_composer' => 'Tokio Hotel',
      'music_album' => '',
      'music_listen' => 22376,
      'music_track_id' => 0,
      'music_filename' => '1468383-21ae0af1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'I love the way
Naemameul gamssa ana chaeugo isseo
Cheoeumen mollatdeon it just comes automatic
Aju jageun momjise gamgagdeuri umjigyeo
It just comes so natural
It just comes automatic.

Maeil gidar...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1469013,
      'music_title_url' => 'ice-cream-cake~red-velvet',
      'music_title' => 'Ice Cream Cake',
      'music_artist' => 'Red Velvet',
      'music_artist_id' => '4719',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538827169,
      'music_last_update_time' => 1428747613,
      'music_title_search' => 'ice cream cake',
      'music_artist_search' => '; red velvet;',
      'music_album_search' => '',
      'music_composer' => 'Hayley Aitken; Sebastian Lundberg; Fredrik Haggstam; Johan Gustafson; A.K.A Trinity Music; Jo Yoon Kyung',
      'music_album' => '',
      'music_listen' => 76309,
      'music_track_id' => 0,
      'music_filename' => '1469013-52a02ebd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Lalalalala lalalala
Lalalalala lalalala.

Oh haessal nunbusin hangaron hyuil
Yeppeun saehayan wonpiseureul ipgo oh oh
Nan jibeul naseotji kotnorae naoji
Lalalalala lalalala.

Neon nareul barabwa ne...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1480299,
      'music_title_url' => 'only-you-music-core-live~miss-a',
      'music_title' => 'Only You (Music Core Live)',
      'music_artist' => 'Miss A',
      'music_artist_id' => '2486',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538589896,
      'music_last_update_time' => 1449653620,
      'music_title_search' => 'onli iou; muxic core live',
      'music_artist_search' => '; mix a;',
      'music_album_search' => '',
      'music_composer' => 'Black Eyed Pilseung; Sam Lewis',
      'music_album' => '',
      'music_listen' => 7908,
      'music_track_id' => 0,
      'music_filename' => '1480299-c61a6a5e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Dareun namja malgo neo
Dareun namja malgo neoneoneoneo neo.

Jangnanhae jangnanhae haneunde
Naneun jeoldaero jangnani aninde
Mwonmari mwonmari pilyohae
Bwabwa onmomi seolmyeonghae baby.

Namjaching...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1527479,
      'music_title_url' => 'i-need-you-dance-practice~bts',
      'music_title' => 'I Need You (Dance Practice)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538925270,
      'music_last_update_time' => 1437978472,
      'music_title_search' => 'i ned iou; dance practice',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 46333,
      'music_track_id' => 0,
      'music_filename' => '1527479-9ef2d307.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Fall fall fall heuteojine
Fall fall fall tteoreojine.

Neo ttaeme na ireohge manggajyeo
Geumanhallae ije neo an gajyeo
Moshagesseo mwot gataseo
Jebal pinggye gateun geon samgajwo.

Niga nahante ire...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1543680,
      'music_title_url' => 'lion-heart-inkigayo-150830~girls-generation',
      'music_title' => 'Lion Heart (Inkigayo 150830)',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538481491,
      'music_last_update_time' => 1440996742,
      'music_title_search' => 'lion heart; inkigaio 150830',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => 'Sean Alexander; Darren \'Baby Dee Beats\' Smith; Claudia Brant',
      'music_album' => '',
      'music_listen' => 12209,
      'music_track_id' => 0,
      'music_filename' => '1543680-bd6f7022.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Oooh neowa na cheom mannasseul ttae
Oooh machi sajacheoreom maemdolda
Gihoereul noryeo nae mam ppaeseun neo.

Ah neon dallajin ge eopseo yeojeonhae
Nan aega tago tto ta
Sanyanggam chaja han nun pan...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1554137,
      'music_title_url' => 'love-im-sorry-grand-k-pop-festival-150916~cnblue',
      'music_title' => 'Love; I\'m Sorry (Grand K-pop Festival 150916)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538555872,
      'music_last_update_time' => 1442638178,
      'music_title_search' => 'love; i m xori; grand k pop fextival 150916',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 507,
      'music_track_id' => 0,
      'music_filename' => '1554137-bd858528.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Love]

Yeah CN to the BLUE (that\'s right)
To the sky high get \'em, huh
Yes, we ready to go.

Chagapke deo chagapke mareul haebwa
Nal tteonal su itdago
Keu mareun Mis Mis Oh Mistake
Everybody got i...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1554309,
      'music_title_url' => 'hold-my-hand-cinderella-music-bank-comeback-stage-150918~cnblue',
      'music_title' => 'Hold My Hand; Cinderella (Music Bank Comeback Stage 150918)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538556216,
      'music_last_update_time' => 1442640211,
      'music_title_search' => 'hold mi hand; cinderela; muxic bank comeback xtage 150918',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 582,
      'music_track_id' => 0,
      'music_filename' => '1554309-1d146bf6.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Hold My Hand]

Bamsae naerin bisjulgi sori eobsi jinagamyeon
Geudaega ddeonadeon nal gieoge jamgijyo.

Yunanhido gipeun bam himeobsi bultaneun chosbul
Nae mamgwa gateulgga bwa geunyang ggeo jueoss...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1555191,
      'music_title_url' => 'domino-cinderella-inkigayo-comeback-stage-150920~cnblue',
      'music_title' => 'Domino; Cinderella (Inkigayo Comeback Stage 150920)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538453429,
      'music_last_update_time' => 1445592172,
      'music_title_search' => 'domino; cinderela; inkigaio comeback xtage 150920',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => 'Jung Yonghwa',
      'music_album' => '',
      'music_listen' => 1637,
      'music_track_id' => 0,
      'music_filename' => '1555191-6c5fa293.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Domino]

My love is gone 
Just let it go
You break me down
Like them dominos
My love is gone
Just let it go
You break me down
Like them dominos.

Uriga ssahatdeon sungandeul modeun geot muneojyeon...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1560485,
      'music_title_url' => 'rhythm-ta~ikon',
      'music_title' => 'Rhythm Ta',
      'music_artist' => 'iKON',
      'music_artist_id' => '14359',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538886694,
      'music_last_update_time' => 1443716605,
      'music_title_search' => 'rhithm ta',
      'music_artist_search' => '; ikon;',
      'music_album_search' => '',
      'music_composer' => 'P.K; B.I; Ju-ne; Bobby',
      'music_album' => '',
      'music_listen' => 41423,
      'music_track_id' => 0,
      'music_filename' => '1560485-dba746fb.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'We gon get it pop it
We gon we gon get it pop it
Igeon geunyang noraeniggan rideum ta
(Bounce) rideum ta
(Bounce) rideum ta
(Bounce) rideum ta
Igeon geunyang noraeniggan rideum ta.

Mweohae eoseo g...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1564748,
      'music_title_url' => 'closer~oh-my-girl',
      'music_title' => 'Closer',
      'music_artist' => 'Oh My Girl',
      'music_artist_id' => '17169',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538894781,
      'music_last_update_time' => 1444263189,
      'music_title_search' => 'cloxer',
      'music_artist_search' => '; oh mi drl;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 17039,
      'music_track_id' => 0,
      'music_filename' => '1564748-a456410d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Yooa] han georeum closer nae mam
Han ppyeom closer to you
Ireoke geuriun naren.

[hyojung] cham meolli inna bwa
Maeil dagagado adeukhagiman hae
[arin] byeolttongbyeora annyeong
Nae sowon deureojur...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1440080,
      'music_title_url' => 'crazy-guilty-pleasure~jonghyun',
      'music_title' => 'Crazy (Guilty Pleasure)',
      'music_artist' => 'Jonghyun',
      'music_artist_id' => '4252',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538877191,
      'music_last_update_time' => 1420772174,
      'music_title_search' => 'crazi; guilti pleaxure',
      'music_artist_search' => '; jonghiun;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10951,
      'music_track_id' => 0,
      'music_filename' => '1440080-2f1cab0b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1476879,
      'music_title_url' => 'love-song-only-you-music-bank-comeback-stage-150403~miss-a',
      'music_title' => 'Love Song; Only You (Music Bank Comeback Stage 150403)',
      'music_artist' => 'Miss A',
      'music_artist_id' => '2486',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538589634,
      'music_last_update_time' => 1428119244,
      'music_title_search' => 'love xong; onli iou; muxic bank comeback xtage 150403',
      'music_artist_search' => '; mix a;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7957,
      'music_track_id' => 0,
      'music_filename' => '1476879-9056f48e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Love Song]

Neol bureuneun Love Song.

Lo-o-o-o-o-o, Love song
Lo-o-o-o-o-o, Love song
Lo-o-o-o, lo-o-o-o, lo-o-o-o-o-o, love song.

Amu mal haji anhado
Ne moksorin naui meoril maemdolgo.

Jungdok...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1485709,
      'music_title_url' => 'celepretty~park-boram',
      'music_title' => 'Celepretty',
      'music_artist' => 'Park Boram',
      'music_artist_id' => '15435',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538543967,
      'music_last_update_time' => 1430021659,
      'music_title_search' => 'celepreti',
      'music_artist_search' => '; park boram;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11349,
      'music_track_id' => 0,
      'music_filename' => '1485709-3b60d794.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Moningkoreun eomma daesine maenijeo jeonhwa
Eolleun nagalge mian oppa
Sinderella machaga naegen hayan kanibal
Nae yuriguduneun yeppeojyeossda.

Mulgwang seumoki maeil dareun eolgul
Pingkeu yellou j...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1502161,
      'music_title_url' => 'we-like-2-party~big-bang',
      'music_title' => 'We Like 2 Party',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538445832,
      'music_last_update_time' => 1433468492,
      'music_title_search' => 'we like 2 parti',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => 'Teddy; Kush; Seo Won Jin; G-Dragon',
      'music_album' => '',
      'music_listen' => 70238,
      'music_track_id' => 0,
      'music_filename' => '1502161-9747470b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Oneuldo chingudeuri wasseo
Man how you been whats up
Aye yeogi han janman jullae
Jeil neutge masineun saram sullae
Geunyang seokkeo masyeo champagne
And if u know what I\'m sayin\'
Nae sonmogeul boni...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1516404,
      'music_title_url' => 'overdose-the-lost-planet-in-japan-150117~exo',
      'music_title' => 'Overdose (The Lost Planet In Japan 150117)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538986960,
      'music_last_update_time' => 1436116267,
      'music_title_search' => 'overdoxe; the loxt planet in japan 15017',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Harvey Mason Jr; Damon Thomas; Kenzie; Chaz Jackson; Orlando Williamson; Brit Burton; Rodnae &quot;Chikk&quot; Bell; January 8th',
      'music_album' => '',
      'music_listen' => 2255,
      'music_track_id' => 0,
      'music_filename' => '1516404-d7041393.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '(Come in)

Modeungeol geolgo neol deurikin nan
Ije dorikilsudo eopda
Igeon bunmyeong wiheomhan jungdok
So bad, no one can stop her.

(Her love her love) ojik geugeotman bara
Geunyeoui sarang hanapp...',
    ),
    18 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1538855,
      'music_title_url' => 'roll-deep~hyuna-jung-ilhoon',
      'music_title' => 'Roll Deep',
      'music_artist' => 'HyunA;Jung Ilhoon',
      'music_artist_id' => '2274;15873',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539051305,
      'music_last_update_time' => 1440649249,
      'music_title_search' => 'rol dep',
      'music_artist_search' => '; hiuna; jung ilhon;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 28891,
      'music_track_id' => 0,
      'music_filename' => '1538855-019ad39a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Jeoldae mollaboneun saram eopsi
Eodil gana wanna touch me
Look ige wollae nae swag
Bulman inneun aedeureun murina jwodo dwae.

Ja olchi geurae olchi
(queen\'s back moreumyeon swit)
Seukeiri dalla yo...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1538902,
      'music_title_url' => 'because-im-the-best~hyuna-ilhoon',
      'music_title' => 'Because I\'m The Best',
      'music_artist' => 'HyunA;IlHoon',
      'music_artist_id' => '2274;70878',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538791020,
      'music_last_update_time' => 1440289070,
      'music_title_search' => 'becauxe i m the bext',
      'music_artist_search' => '; hiuna; ilhon;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 18121,
      'music_track_id' => 0,
      'music_filename' => '1538902-9111cc10.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Jeoldae mollaboneun saram
Eopsi 
Eodil gana wanna touch me
Look ige nae wonrae swag
Bulman issneun aedeureun 
Murina jwodo dwae
Ja olhji geurae olhji
(queen\'s back moreumyeon swis)
Seukeiri dalla
Y...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1494802,
      'music_title_url' => 'arirang-alone~so-hyang',
      'music_title' => 'Arirang Alone',
      'music_artist' => 'So Hyang',
      'music_artist_id' => '23804',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538788754,
      'music_last_update_time' => 1432085185,
      'music_title_search' => 'arirang alone',
      'music_artist_search' => '; xo hiang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11060,
      'music_track_id' => 0,
      'music_filename' => '1494802-6a375814.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/So-Hyang~Y3NuX2FydGlzdH4yMzgwNA==.html">So Hyang</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1447359,
      'music_title_url' => 'sorry-im-happy~davichi',
      'music_title' => 'Sorry, I\'m Happy (행복해서 미안해)',
      'music_artist' => 'Davichi',
      'music_artist_id' => '1050',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538558511,
      'music_last_update_time' => 1422016655,
      'music_title_search' => 'xori i m hapi; 행복해서 미안해',
      'music_artist_search' => '; davichi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7344,
      'music_track_id' => 0,
      'music_filename' => '1447359-a15c0378.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Davichi~Y3NuX2FydGlzdH4xMDUw.html">Davichi</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1454615,
      'music_title_url' => 'cant-stop-im-sorry-love-light-29th-golden-disk-awards-150125~cnblue',
      'music_title' => 'Can\'t Stop; I\'m Sorry; Love Light (29th Golden Disk Awards 150125)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538562119,
      'music_last_update_time' => 1423240943,
      'music_title_search' => 'can t xtop; i m xori; love light; 29th golden dixk awardx 150125',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1805,
      'music_track_id' => 0,
      'music_filename' => '1454615-2bd7c5d2.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Can\'t Stop]

Harue han beonman geudaen tteoollyeojwoyo miss you
Harue han beonman naneun ijeobolgeyo
Geugeotdo andwaeyo geugeotdo andwaeyo
Geugeotdo andoemyeon geureom nan eotteokhanayo.

Geudae h...',
      'music_artist_html' => '<a href="/ca-si/CNBlue~Y3NuX2FydGlzdH4yMDY5.html">CNBlue</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1468383,
      'music_title_url' => 'automatic~red-velvet',
      'music_title' => 'Automatic',
      'music_artist' => 'Red Velvet',
      'music_artist_id' => '4719',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538819909,
      'music_last_update_time' => 1426483141,
      'music_title_search' => 'automatic',
      'music_artist_search' => '; red velvet;',
      'music_album_search' => '',
      'music_composer' => 'Tokio Hotel',
      'music_album' => '',
      'music_listen' => 22376,
      'music_track_id' => 0,
      'music_filename' => '1468383-21ae0af1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'I love the way
Naemameul gamssa ana chaeugo isseo
Cheoeumen mollatdeon it just comes automatic
Aju jageun momjise gamgagdeuri umjigyeo
It just comes so natural
It just comes automatic.

Maeil gidar...',
      'music_artist_html' => '<a href="/ca-si/Red-Velvet~Y3NuX2FydGlzdH40NzE5.html">Red Velvet</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1469013,
      'music_title_url' => 'ice-cream-cake~red-velvet',
      'music_title' => 'Ice Cream Cake',
      'music_artist' => 'Red Velvet',
      'music_artist_id' => '4719',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538827169,
      'music_last_update_time' => 1428747613,
      'music_title_search' => 'ice cream cake',
      'music_artist_search' => '; red velvet;',
      'music_album_search' => '',
      'music_composer' => 'Hayley Aitken; Sebastian Lundberg; Fredrik Haggstam; Johan Gustafson; A.K.A Trinity Music; Jo Yoon Kyung',
      'music_album' => '',
      'music_listen' => 76309,
      'music_track_id' => 0,
      'music_filename' => '1469013-52a02ebd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Lalalalala lalalala
Lalalalala lalalala.

Oh haessal nunbusin hangaron hyuil
Yeppeun saehayan wonpiseureul ipgo oh oh
Nan jibeul naseotji kotnorae naoji
Lalalalala lalalala.

Neon nareul barabwa ne...',
      'music_artist_html' => '<a href="/ca-si/Red-Velvet~Y3NuX2FydGlzdH40NzE5.html">Red Velvet</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1480299,
      'music_title_url' => 'only-you-music-core-live~miss-a',
      'music_title' => 'Only You (Music Core Live)',
      'music_artist' => 'Miss A',
      'music_artist_id' => '2486',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538589896,
      'music_last_update_time' => 1449653620,
      'music_title_search' => 'onli iou; muxic core live',
      'music_artist_search' => '; mix a;',
      'music_album_search' => '',
      'music_composer' => 'Black Eyed Pilseung; Sam Lewis',
      'music_album' => '',
      'music_listen' => 7908,
      'music_track_id' => 0,
      'music_filename' => '1480299-c61a6a5e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Dareun namja malgo neo
Dareun namja malgo neoneoneoneo neo.

Jangnanhae jangnanhae haneunde
Naneun jeoldaero jangnani aninde
Mwonmari mwonmari pilyohae
Bwabwa onmomi seolmyeonghae baby.

Namjaching...',
      'music_artist_html' => '<a href="/ca-si/Miss-A~Y3NuX2FydGlzdH4yNDg2.html">Miss A</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1527479,
      'music_title_url' => 'i-need-you-dance-practice~bts',
      'music_title' => 'I Need You (Dance Practice)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538925270,
      'music_last_update_time' => 1437978472,
      'music_title_search' => 'i ned iou; dance practice',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 46333,
      'music_track_id' => 0,
      'music_filename' => '1527479-9ef2d307.mp4',
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
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1543680,
      'music_title_url' => 'lion-heart-inkigayo-150830~girls-generation',
      'music_title' => 'Lion Heart (Inkigayo 150830)',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538481491,
      'music_last_update_time' => 1440996742,
      'music_title_search' => 'lion heart; inkigaio 150830',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => 'Sean Alexander; Darren \'Baby Dee Beats\' Smith; Claudia Brant',
      'music_album' => '',
      'music_listen' => 12209,
      'music_track_id' => 0,
      'music_filename' => '1543680-bd6f7022.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Oooh neowa na cheom mannasseul ttae
Oooh machi sajacheoreom maemdolda
Gihoereul noryeo nae mam ppaeseun neo.

Ah neon dallajin ge eopseo yeojeonhae
Nan aega tago tto ta
Sanyanggam chaja han nun pan...',
      'music_artist_html' => '<a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH45MjI=.html">Girls\' Generation</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1554137,
      'music_title_url' => 'love-im-sorry-grand-k-pop-festival-150916~cnblue',
      'music_title' => 'Love; I\'m Sorry (Grand K-pop Festival 150916)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538555872,
      'music_last_update_time' => 1442638178,
      'music_title_search' => 'love; i m xori; grand k pop fextival 150916',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 507,
      'music_track_id' => 0,
      'music_filename' => '1554137-bd858528.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Love]

Yeah CN to the BLUE (that\'s right)
To the sky high get \'em, huh
Yes, we ready to go.

Chagapke deo chagapke mareul haebwa
Nal tteonal su itdago
Keu mareun Mis Mis Oh Mistake
Everybody got i...',
      'music_artist_html' => '<a href="/ca-si/CNBlue~Y3NuX2FydGlzdH4yMDY5.html">CNBlue</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1554309,
      'music_title_url' => 'hold-my-hand-cinderella-music-bank-comeback-stage-150918~cnblue',
      'music_title' => 'Hold My Hand; Cinderella (Music Bank Comeback Stage 150918)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538556216,
      'music_last_update_time' => 1442640211,
      'music_title_search' => 'hold mi hand; cinderela; muxic bank comeback xtage 150918',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 582,
      'music_track_id' => 0,
      'music_filename' => '1554309-1d146bf6.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Hold My Hand]

Bamsae naerin bisjulgi sori eobsi jinagamyeon
Geudaega ddeonadeon nal gieoge jamgijyo.

Yunanhido gipeun bam himeobsi bultaneun chosbul
Nae mamgwa gateulgga bwa geunyang ggeo jueoss...',
      'music_artist_html' => '<a href="/ca-si/CNBlue~Y3NuX2FydGlzdH4yMDY5.html">CNBlue</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1555191,
      'music_title_url' => 'domino-cinderella-inkigayo-comeback-stage-150920~cnblue',
      'music_title' => 'Domino; Cinderella (Inkigayo Comeback Stage 150920)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538453429,
      'music_last_update_time' => 1445592172,
      'music_title_search' => 'domino; cinderela; inkigaio comeback xtage 150920',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => 'Jung Yonghwa',
      'music_album' => '',
      'music_listen' => 1637,
      'music_track_id' => 0,
      'music_filename' => '1555191-6c5fa293.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Domino]

My love is gone 
Just let it go
You break me down
Like them dominos
My love is gone
Just let it go
You break me down
Like them dominos.

Uriga ssahatdeon sungandeul modeun geot muneojyeon...',
      'music_artist_html' => '<a href="/ca-si/CNBlue~Y3NuX2FydGlzdH4yMDY5.html">CNBlue</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1560485,
      'music_title_url' => 'rhythm-ta~ikon',
      'music_title' => 'Rhythm Ta',
      'music_artist' => 'iKON',
      'music_artist_id' => '14359',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538886694,
      'music_last_update_time' => 1443716605,
      'music_title_search' => 'rhithm ta',
      'music_artist_search' => '; ikon;',
      'music_album_search' => '',
      'music_composer' => 'P.K; B.I; Ju-ne; Bobby',
      'music_album' => '',
      'music_listen' => 41423,
      'music_track_id' => 0,
      'music_filename' => '1560485-dba746fb.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'We gon get it pop it
We gon we gon get it pop it
Igeon geunyang noraeniggan rideum ta
(Bounce) rideum ta
(Bounce) rideum ta
(Bounce) rideum ta
Igeon geunyang noraeniggan rideum ta.

Mweohae eoseo g...',
      'music_artist_html' => '<a href="/ca-si/iKON~Y3NuX2FydGlzdH4xNDM1OQ==.html">iKON</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1564748,
      'music_title_url' => 'closer~oh-my-girl',
      'music_title' => 'Closer',
      'music_artist' => 'Oh My Girl',
      'music_artist_id' => '17169',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538894781,
      'music_last_update_time' => 1444263189,
      'music_title_search' => 'cloxer',
      'music_artist_search' => '; oh mi drl;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 17039,
      'music_track_id' => 0,
      'music_filename' => '1564748-a456410d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Yooa] han georeum closer nae mam
Han ppyeom closer to you
Ireoke geuriun naren.

[hyojung] cham meolli inna bwa
Maeil dagagado adeukhagiman hae
[arin] byeolttongbyeora annyeong
Nae sowon deureojur...',
      'music_artist_html' => '<a href="/ca-si/Oh-My-Girl~Y3NuX2FydGlzdH4xNzE2OQ==.html">Oh My Girl</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1440080,
      'music_title_url' => 'crazy-guilty-pleasure~jonghyun',
      'music_title' => 'Crazy (Guilty Pleasure)',
      'music_artist' => 'Jonghyun',
      'music_artist_id' => '4252',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538877191,
      'music_last_update_time' => 1420772174,
      'music_title_search' => 'crazi; guilti pleaxure',
      'music_artist_search' => '; jonghiun;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10951,
      'music_track_id' => 0,
      'music_filename' => '1440080-2f1cab0b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Jonghyun~Y3NuX2FydGlzdH40MjUy.html">Jonghyun</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1476879,
      'music_title_url' => 'love-song-only-you-music-bank-comeback-stage-150403~miss-a',
      'music_title' => 'Love Song; Only You (Music Bank Comeback Stage 150403)',
      'music_artist' => 'Miss A',
      'music_artist_id' => '2486',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538589634,
      'music_last_update_time' => 1428119244,
      'music_title_search' => 'love xong; onli iou; muxic bank comeback xtage 150403',
      'music_artist_search' => '; mix a;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7957,
      'music_track_id' => 0,
      'music_filename' => '1476879-9056f48e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Love Song]

Neol bureuneun Love Song.

Lo-o-o-o-o-o, Love song
Lo-o-o-o-o-o, Love song
Lo-o-o-o, lo-o-o-o, lo-o-o-o-o-o, love song.

Amu mal haji anhado
Ne moksorin naui meoril maemdolgo.

Jungdok...',
      'music_artist_html' => '<a href="/ca-si/Miss-A~Y3NuX2FydGlzdH4yNDg2.html">Miss A</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1485709,
      'music_title_url' => 'celepretty~park-boram',
      'music_title' => 'Celepretty',
      'music_artist' => 'Park Boram',
      'music_artist_id' => '15435',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538543967,
      'music_last_update_time' => 1430021659,
      'music_title_search' => 'celepreti',
      'music_artist_search' => '; park boram;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11349,
      'music_track_id' => 0,
      'music_filename' => '1485709-3b60d794.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Moningkoreun eomma daesine maenijeo jeonhwa
Eolleun nagalge mian oppa
Sinderella machaga naegen hayan kanibal
Nae yuriguduneun yeppeojyeossda.

Mulgwang seumoki maeil dareun eolgul
Pingkeu yellou j...',
      'music_artist_html' => '<a href="/ca-si/Park-Boram~Y3NuX2FydGlzdH4xNTQzNQ==.html">Park Boram</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1502161,
      'music_title_url' => 'we-like-2-party~big-bang',
      'music_title' => 'We Like 2 Party',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538445832,
      'music_last_update_time' => 1433468492,
      'music_title_search' => 'we like 2 parti',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => 'Teddy; Kush; Seo Won Jin; G-Dragon',
      'music_album' => '',
      'music_listen' => 70238,
      'music_track_id' => 0,
      'music_filename' => '1502161-9747470b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Oneuldo chingudeuri wasseo
Man how you been whats up
Aye yeogi han janman jullae
Jeil neutge masineun saram sullae
Geunyang seokkeo masyeo champagne
And if u know what I\'m sayin\'
Nae sonmogeul boni...',
      'music_artist_html' => '<a href="/ca-si/Big-Bang~Y3NuX2FydGlzdH45ODI=.html">Big Bang</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1516404,
      'music_title_url' => 'overdose-the-lost-planet-in-japan-150117~exo',
      'music_title' => 'Overdose (The Lost Planet In Japan 150117)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538986960,
      'music_last_update_time' => 1436116267,
      'music_title_search' => 'overdoxe; the loxt planet in japan 15017',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Harvey Mason Jr; Damon Thomas; Kenzie; Chaz Jackson; Orlando Williamson; Brit Burton; Rodnae &quot;Chikk&quot; Bell; January 8th',
      'music_album' => '',
      'music_listen' => 2255,
      'music_track_id' => 0,
      'music_filename' => '1516404-d7041393.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '(Come in)

Modeungeol geolgo neol deurikin nan
Ije dorikilsudo eopda
Igeon bunmyeong wiheomhan jungdok
So bad, no one can stop her.

(Her love her love) ojik geugeotman bara
Geunyeoui sarang hanapp...',
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1538855,
      'music_title_url' => 'roll-deep~hyuna-jung-ilhoon',
      'music_title' => 'Roll Deep',
      'music_artist' => 'HyunA;Jung Ilhoon',
      'music_artist_id' => '2274;15873',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539051305,
      'music_last_update_time' => 1440649249,
      'music_title_search' => 'rol dep',
      'music_artist_search' => '; hiuna; jung ilhon;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 28891,
      'music_track_id' => 0,
      'music_filename' => '1538855-019ad39a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Jeoldae mollaboneun saram eopsi
Eodil gana wanna touch me
Look ige wollae nae swag
Bulman inneun aedeureun murina jwodo dwae.

Ja olchi geurae olchi
(queen\'s back moreumyeon swit)
Seukeiri dalla yo...',
      'music_artist_html' => '<a href="/ca-si/HyunA~Y3NuX2FydGlzdH4yMjc0.html">HyunA</a>, <a href="/ca-si/Jung-Ilhoon~Y3NuX2FydGlzdH4xNTg3Mw==.html">Jung Ilhoon</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1538902,
      'music_title_url' => 'because-im-the-best~hyuna-ilhoon',
      'music_title' => 'Because I\'m The Best',
      'music_artist' => 'HyunA;IlHoon',
      'music_artist_id' => '2274;70878',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538791020,
      'music_last_update_time' => 1440289070,
      'music_title_search' => 'becauxe i m the bext',
      'music_artist_search' => '; hiuna; ilhon;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 18121,
      'music_track_id' => 0,
      'music_filename' => '1538902-9111cc10.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Jeoldae mollaboneun saram
Eopsi 
Eodil gana wanna touch me
Look ige nae wonrae swag
Bulman issneun aedeureun 
Murina jwodo dwae
Ja olhji geurae olhji
(queen\'s back moreumyeon swis)
Seukeiri dalla
Y...',
      'music_artist_html' => '<a href="/ca-si/HyunA~Y3NuX2FydGlzdH4yMjc0.html">HyunA</a>, <a href="/ca-si/IlHoon~Y3NuX2FydGlzdH43MDg3OA==.html">IlHoon</a>',
    ),
  ),
  5 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1796940,
      'music_title_url' => 'bokutachi-wa-tatakawanai~akb48',
      'music_title' => 'Bokutachi wa Tatakawanai (僕たちは戦わない)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538629287,
      'music_last_update_time' => 1497598476,
      'music_title_search' => 'bokutachi wa tatakawanai; 僕たちは戦わない',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 545,
      'music_track_id' => 1,
      'music_filename' => '1796940-97f1a39b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'bokutachi wa tatakawanai
ai wo shinjiteru
furiageta sono kobushi
dare mo orosu hi ga kuru yo

nikushimi wa rensa suru
dakara ima tachikirunda

kono sekai de nagareochiru namida no souryou kimatteru...',
    ),
    1 => 
    array (
      'music_downloads_today' => 4,
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
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1754200,
      'music_title_url' => 'galaxy-supernova~girls-generation',
      'music_title' => 'Galaxy Supernova',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530893017,
      'music_last_update_time' => 1482719569,
      'music_title_search' => 'galaxi xupernova',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => 'Kamikaoru; Frederik Tao Nordsoe Schjoldan; Fridolin Nordsoe Schjoldan; Martin Hoberg Hedegaard',
      'music_album' => '',
      'music_listen' => 1280,
      'music_track_id' => 0,
      'music_filename' => '1754200-dd9a3ab3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Oh! My Boy nanika ga
(na-na-na-na-na)
Isso isso Someone Talking 
(ah-ah-ah-ah-ah-ah-ah)
Nee zutto.

Looking at you lo-looking at you I
Looking at you lo-looking at you I
Anata miteru wa
Nee sore wa...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1457953,
      'music_title_url' => 'mr-chu-on-stage-japanese-version~a-pink',
      'music_title' => 'Mr. Chu (On Stage) (Japanese Version)',
      'music_artist' => 'A Pink',
      'music_artist_id' => '2310',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1501563441,
      'music_last_update_time' => 1524792706,
      'music_title_search' => 'mr chu; on xtage ; japanexe verxion',
      'music_artist_search' => '; a pink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 26052,
      'music_track_id' => 0,
      'music_filename' => '1457953-d4ef27f4.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Sakki aeta bakari de mo 
Kaerimichi hitori aitakute 
Peakappururingu kappuru ringu osoroide 
Te o tsunagi arukitai na 
Yume janai no? Hontōna no? 
Kagami mite hoppe tsune tte mo 
Like a dreaming dr...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1477667,
      'music_title_url' => 'idol-wa-unyanya-no-kudan~nyaakb-with-tsuchinoko-panda',
      'music_title' => 'Idol Wa U~Nyanya No Kudan',
      'music_artist' => 'Nyaakb With Tsuchinoko Panda',
      'music_artist_id' => '64634',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1501669357,
      'music_last_update_time' => 1477415200,
      'music_title_search' => 'idol wa u niania no kudan',
      'music_artist_search' => '; niakb with txuchinoko panda;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2182,
      'music_track_id' => 0,
      'music_filename' => '1477667-06ce6b65.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1585264,
      'music_title_url' => 'dancing-all-night~crayon-pop',
      'music_title' => 'Dancing All Night',
      'music_artist' => 'Crayon Pop',
      'music_artist_id' => '3776',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535692227,
      'music_last_update_time' => 1480774237,
      'music_title_search' => 'dancing al night',
      'music_artist_search' => '; craion pop;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5299,
      'music_track_id' => 0,
      'music_filename' => '1585264-a34668bb.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hey baby, come on! It\'s show time.

Dancing all night, everything\'s all right
Dancing all night, everything\'s all right.

isshōkenmei na no tsutawara nai ne kokoro no naka giza giza
kiyō ja naku te...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1585499,
      'music_title_url' => 'beautiful-dancer~iu',
      'music_title' => 'Beautiful Dancer',
      'music_artist' => 'IU',
      'music_artist_id' => '2059',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1511681639,
      'music_last_update_time' => 1480774255,
      'music_title_search' => 'beautiful dancer',
      'music_artist_search' => '; iu;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12233,
      'music_track_id' => 0,
      'music_filename' => '1585499-41d6295f.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Don\'t you be afraid… 
You\'ll be okay… 

Shoe lace kataku shimete kakedashita with my dreams 
Ima demo kawaranai Dreams 
Kimi wa totemo kireinanoni 
Doushite son\'na kanashii kao shite naite iru no?...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1641212,
      'music_title_url' => '2588-days-2588~matsui-rena',
      'music_title' => '2588 Days (2588日)',
      'music_artist' => 'Matsui Rena',
      'music_artist_id' => '42188',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529695377,
      'music_last_update_time' => 1477450311,
      'music_title_search' => '258 daix; 258日',
      'music_artist_search' => '; matxui rena;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1719,
      'music_track_id' => 2,
      'music_filename' => '1641212-537b85f1.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Hana ga hissori kareru no wa
Kanashii koto ja nainda yo
Isshoukenmei sakitsudzuke
Sono yakuwari wo ima oetanda.

Tsugi no kisetsu wa (kawari ni)
Doko ka de saku yo (dareka ga)
Eien yori mou tsukush...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1641214,
      'music_title_url' => 'must-be-now~nmb48',
      'music_title' => 'Must Be Now',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534886033,
      'music_last_update_time' => 1477450308,
      'music_title_search' => 'muxt be now',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2097,
      'music_track_id' => 1,
      'music_filename' => '1641214-ebad4d2b.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'Tozasareteta
Yami no naka de
Sagasu mono wa
Hikari ja nai
Sakenderu
Kokoro no koe
Sono omoi wa
Doko e mukau?

Nobashita te ni
Fureru mono wa
Kyozetsu sareta
Dakyou no kabe
Me wo tojire ba
Miete kur...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1641215,
      'music_title_url' => 'must-be-now-dance-version~nmb48',
      'music_title' => 'Must Be Now (Dance Version)',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498335210,
      'music_last_update_time' => 1477450297,
      'music_title_search' => 'muxt be now; dance verxion',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1576,
      'music_track_id' => 2,
      'music_filename' => '1641215-c44de60f.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'Tozasareteta
Yami no naka de
Sagasu mono wa
Hikari ja nai
Sakenderu
Kokoro no koe
Sono omoi wa
Doko e mukau?

Nobashita te ni
Fureru mono wa
Kyozetsu sareta
Dakyou no kabe
Me wo tojire ba
Miete kur...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797945,
      'music_title_url' => 'durian-shounen-music-japan-20150719~nmb48',
      'music_title' => 'Durian Shounen (ドリアン少年) (Music Japan 2015.07.19)',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498663296,
      'music_last_update_time' => 1497839921,
      'music_title_search' => 'durian thounen; ドリアン少年 ; muxic japan 2015 07 19',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 772,
      'music_track_id' => 0,
      'music_filename' => '1797945-e28b0e4c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1701544,
      'music_title_url' => 'subobjective~boku-no-lyric-no-boyomi',
      'music_title' => 'Sub/Objective',
      'music_artist' => 'Boku No Lyric No Boyomi',
      'music_artist_id' => '88137',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496413143,
      'music_last_update_time' => 1477608197,
      'music_title_search' => 'xub;objective',
      'music_artist_search' => '; boku no liric no boiomi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1097,
      'music_track_id' => 0,
      'music_filename' => '1701544-e478bba9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1717318,
      'music_title_url' => 'taiyou-knock~nogizaka46',
      'music_title' => 'Taiyou Knock (太陽ノック)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521059061,
      'music_last_update_time' => 1477451224,
      'music_title_search' => 'taiou knock; 太陽ノック',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2022,
      'music_track_id' => 1,
      'music_filename' => '1717318-9fbeda57.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'ねえ 夏の強い陽射しに
街が乱反射しているよ
もう 君が影に隠れてても
誰かにすぐ見つかるだろう

一人きり 閉じ籠ってた
心から飛び出してみよう

太陽ノック
誘っているよ
空の下は自由だと言ってる
何か始める
いいきっかけだ
熱くなれる季節に
Open the door!

ああ 光り輝いてても
やがて 夏は過ぎ去って行く
そう 君はその時の寂しさ
感じ取って臆病になる

未来とは 今が...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1719419,
      'music_title_url' => 'reflection~tokyo-girls-style',
      'music_title' => 'Reflection (リフレクション)',
      'music_artist' => 'TOKYO GIRLS\' STYLE',
      'music_artist_id' => '63898',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498941848,
      'music_last_update_time' => 1477451210,
      'music_title_search' => 'reflection; リフレクション',
      'music_artist_search' => '; tokio drlx xtile;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 776,
      'music_track_id' => 1,
      'music_filename' => '1719419-eef786cf.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1719420,
      'music_title_url' => 'never-ever-tjo-yusuke-from-blu-swing-remix~tokyo-girls-style',
      'music_title' => 'Never ever (TJO &amp; YUSUKE from BLU-SWING Remix)',
      'music_artist' => 'TOKYO GIRLS\' STYLE',
      'music_artist_id' => '63898',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1499324434,
      'music_last_update_time' => 1477451206,
      'music_title_search' => 'never ever; tjo iuxuke from blu xwing remix',
      'music_artist_search' => '; tokio drlx xtile;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 618,
      'music_track_id' => 2,
      'music_filename' => '1719420-ad01b9b5.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1719421,
      'music_title_url' => 'junpaku-no-yakusoku~tokyo-girls-style',
      'music_title' => 'Junpaku no Yakusoku (純白の約束)',
      'music_artist' => 'TOKYO GIRLS\' STYLE',
      'music_artist_id' => '63898',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535473987,
      'music_last_update_time' => 1477451203,
      'music_title_search' => 'junpaku no iakuxoku; 純白の約束',
      'music_artist_search' => '; tokio drlx xtile;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 687,
      'music_track_id' => 7,
      'music_filename' => '1719421-02ed60f2.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1735647,
      'music_title_url' => 'colorful-fantasy~elfin',
      'music_title' => 'Colorful Fantasy',
      'music_artist' => 'elfin\'',
      'music_artist_id' => '91258',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498473268,
      'music_last_update_time' => 1478025019,
      'music_title_search' => 'colorful fantaxi',
      'music_artist_search' => '; elfin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2366,
      'music_track_id' => 1,
      'music_filename' => '1735647-44579f62.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '手を伸ばしてみよう　夢に触れるまで
誰も見たことない　輝く未来へ
飛び立つよ

風が笑ってる　意気地なしの心を
ラビリンスな今　だけど夢を叶えたい

魔法の未来地図と　勇気コンパス
騒ぐ向かい風も　気にしないで　旅立とう

飛び出してみよう　この広い海へ
青い絨毯　永遠の空　胸が躍りだす
答えなんてないよ未来に　大事なのは自分
誰も見たことない　光の向こう
新しい世界へ旅立とう

夢は蜃気楼...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1740166,
      'music_title_url' => 'tomorrow~flower',
      'music_title' => 'Tomorrow',
      'music_artist' => 'Flower',
      'music_artist_id' => '33212',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1504244116,
      'music_last_update_time' => 1479109248,
      'music_title_search' => 'tomorow',
      'music_artist_search' => '; flower;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 520,
      'music_track_id' => 0,
      'music_filename' => '1740166-11d996d5.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Asa ga kureba tomorrow
Ī koto ga aru tomorrow.

Ashita yumemiru dake de tomorrow
Tsurai koto mo wasureru min\'na.

Sabishikute yūutsuna hi ni wa
Munewohatte utau no oh!

Asa ga kureba tomorrow
Namid...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1740168,
      'music_title_url' => 'dreamin-together~flower-little-mix',
      'music_title' => 'Dreamin\' Together',
      'music_artist' => 'Flower;Little Mix',
      'music_artist_id' => '33212;18147',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531054878,
      'music_last_update_time' => 1479145139,
      'music_title_search' => 'dreamin together',
      'music_artist_search' => '; flower; litle mix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1707,
      'music_track_id' => 0,
      'music_filename' => '1740168-84a45b7b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Dreamin\' together, dreamin\' together, dreamin\' together ashita wa
Dreamin\' together, dreamin\' together, dreamin\' together soko ni aru.

Girl kono goro sukoshi Girl genki naidesho?
Girl whenever you...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1740169,
      'music_title_url' => 'blue-sky-blue~flower',
      'music_title' => 'Blue Sky Blue',
      'music_artist' => 'Flower',
      'music_artist_id' => '33212',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1511856345,
      'music_last_update_time' => 1479145217,
      'music_title_search' => 'blue xki blue',
      'music_artist_search' => '; flower;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1263,
      'music_track_id' => 0,
      'music_filename' => '1740169-7de3b971.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '風の色が Every moment　鮮やかに変わる
踊る光の粒 Such a beautiful day
気の早い初夏(なつ)の花たちが　蕾をつけてる
離れ離れの二人は「逢いたい」って言い合うたび強くなるのね
次の待ち合わせは　新しい笑顔纏(まと)って　あなたへと駈け出すわ
 
Kaze no iro ga Every moment azayaka ni kawaru
Odoru hikar...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1796940,
      'music_title_url' => 'bokutachi-wa-tatakawanai~akb48',
      'music_title' => 'Bokutachi wa Tatakawanai (僕たちは戦わない)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538629287,
      'music_last_update_time' => 1497598476,
      'music_title_search' => 'bokutachi wa tatakawanai; 僕たちは戦わない',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 545,
      'music_track_id' => 1,
      'music_filename' => '1796940-97f1a39b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'bokutachi wa tatakawanai
ai wo shinjiteru
furiageta sono kobushi
dare mo orosu hi ga kuru yo

nikushimi wa rensa suru
dakara ima tachikirunda

kono sekai de nagareochiru namida no souryou kimatteru...',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 4,
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
      'music_artist_html' => '<a href="/ca-si/Kana-Hanazawa~Y3NuX2FydGlzdH4xNDczOA==.html">Kana Hanazawa</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1754200,
      'music_title_url' => 'galaxy-supernova~girls-generation',
      'music_title' => 'Galaxy Supernova',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530893017,
      'music_last_update_time' => 1482719569,
      'music_title_search' => 'galaxi xupernova',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => 'Kamikaoru; Frederik Tao Nordsoe Schjoldan; Fridolin Nordsoe Schjoldan; Martin Hoberg Hedegaard',
      'music_album' => '',
      'music_listen' => 1280,
      'music_track_id' => 0,
      'music_filename' => '1754200-dd9a3ab3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Oh! My Boy nanika ga
(na-na-na-na-na)
Isso isso Someone Talking 
(ah-ah-ah-ah-ah-ah-ah)
Nee zutto.

Looking at you lo-looking at you I
Looking at you lo-looking at you I
Anata miteru wa
Nee sore wa...',
      'music_artist_html' => '<a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH45MjI=.html">Girls\' Generation</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1457953,
      'music_title_url' => 'mr-chu-on-stage-japanese-version~a-pink',
      'music_title' => 'Mr. Chu (On Stage) (Japanese Version)',
      'music_artist' => 'A Pink',
      'music_artist_id' => '2310',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1501563441,
      'music_last_update_time' => 1524792706,
      'music_title_search' => 'mr chu; on xtage ; japanexe verxion',
      'music_artist_search' => '; a pink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 26052,
      'music_track_id' => 0,
      'music_filename' => '1457953-d4ef27f4.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Sakki aeta bakari de mo 
Kaerimichi hitori aitakute 
Peakappururingu kappuru ringu osoroide 
Te o tsunagi arukitai na 
Yume janai no? Hontōna no? 
Kagami mite hoppe tsune tte mo 
Like a dreaming dr...',
      'music_artist_html' => '<a href="/ca-si/A-Pink~Y3NuX2FydGlzdH4yMzEw.html">A Pink</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1477667,
      'music_title_url' => 'idol-wa-unyanya-no-kudan~nyaakb-with-tsuchinoko-panda',
      'music_title' => 'Idol Wa U~Nyanya No Kudan',
      'music_artist' => 'Nyaakb With Tsuchinoko Panda',
      'music_artist_id' => '64634',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1501669357,
      'music_last_update_time' => 1477415200,
      'music_title_search' => 'idol wa u niania no kudan',
      'music_artist_search' => '; niakb with txuchinoko panda;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2182,
      'music_track_id' => 0,
      'music_filename' => '1477667-06ce6b65.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Nyaakb-With-Tsuchinoko-Panda~Y3NuX2FydGlzdH42NDYzNA==.html">Nyaakb With Tsuchinoko Panda</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1585264,
      'music_title_url' => 'dancing-all-night~crayon-pop',
      'music_title' => 'Dancing All Night',
      'music_artist' => 'Crayon Pop',
      'music_artist_id' => '3776',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535692227,
      'music_last_update_time' => 1480774237,
      'music_title_search' => 'dancing al night',
      'music_artist_search' => '; craion pop;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5299,
      'music_track_id' => 0,
      'music_filename' => '1585264-a34668bb.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hey baby, come on! It\'s show time.

Dancing all night, everything\'s all right
Dancing all night, everything\'s all right.

isshōkenmei na no tsutawara nai ne kokoro no naka giza giza
kiyō ja naku te...',
      'music_artist_html' => '<a href="/ca-si/Crayon-Pop~Y3NuX2FydGlzdH4zNzc2.html">Crayon Pop</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1585499,
      'music_title_url' => 'beautiful-dancer~iu',
      'music_title' => 'Beautiful Dancer',
      'music_artist' => 'IU',
      'music_artist_id' => '2059',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1511681639,
      'music_last_update_time' => 1480774255,
      'music_title_search' => 'beautiful dancer',
      'music_artist_search' => '; iu;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12233,
      'music_track_id' => 0,
      'music_filename' => '1585499-41d6295f.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Don\'t you be afraid… 
You\'ll be okay… 

Shoe lace kataku shimete kakedashita with my dreams 
Ima demo kawaranai Dreams 
Kimi wa totemo kireinanoni 
Doushite son\'na kanashii kao shite naite iru no?...',
      'music_artist_html' => '<a href="/ca-si/IU~Y3NuX2FydGlzdH4yMDU5.html">IU</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1641212,
      'music_title_url' => '2588-days-2588~matsui-rena',
      'music_title' => '2588 Days (2588日)',
      'music_artist' => 'Matsui Rena',
      'music_artist_id' => '42188',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529695377,
      'music_last_update_time' => 1477450311,
      'music_title_search' => '258 daix; 258日',
      'music_artist_search' => '; matxui rena;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1719,
      'music_track_id' => 2,
      'music_filename' => '1641212-537b85f1.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Hana ga hissori kareru no wa
Kanashii koto ja nainda yo
Isshoukenmei sakitsudzuke
Sono yakuwari wo ima oetanda.

Tsugi no kisetsu wa (kawari ni)
Doko ka de saku yo (dareka ga)
Eien yori mou tsukush...',
      'music_artist_html' => '<a href="/ca-si/Matsui-Rena~Y3NuX2FydGlzdH40MjE4OA==.html">Matsui Rena</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1641214,
      'music_title_url' => 'must-be-now~nmb48',
      'music_title' => 'Must Be Now',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534886033,
      'music_last_update_time' => 1477450308,
      'music_title_search' => 'muxt be now',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2097,
      'music_track_id' => 1,
      'music_filename' => '1641214-ebad4d2b.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'Tozasareteta
Yami no naka de
Sagasu mono wa
Hikari ja nai
Sakenderu
Kokoro no koe
Sono omoi wa
Doko e mukau?

Nobashita te ni
Fureru mono wa
Kyozetsu sareta
Dakyou no kabe
Me wo tojire ba
Miete kur...',
      'music_artist_html' => '<a href="/ca-si/NMB48~Y3NuX2FydGlzdH4xNjgyNg==.html">NMB48</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1641215,
      'music_title_url' => 'must-be-now-dance-version~nmb48',
      'music_title' => 'Must Be Now (Dance Version)',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498335210,
      'music_last_update_time' => 1477450297,
      'music_title_search' => 'muxt be now; dance verxion',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1576,
      'music_track_id' => 2,
      'music_filename' => '1641215-c44de60f.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'Tozasareteta
Yami no naka de
Sagasu mono wa
Hikari ja nai
Sakenderu
Kokoro no koe
Sono omoi wa
Doko e mukau?

Nobashita te ni
Fureru mono wa
Kyozetsu sareta
Dakyou no kabe
Me wo tojire ba
Miete kur...',
      'music_artist_html' => '<a href="/ca-si/NMB48~Y3NuX2FydGlzdH4xNjgyNg==.html">NMB48</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1797945,
      'music_title_url' => 'durian-shounen-music-japan-20150719~nmb48',
      'music_title' => 'Durian Shounen (ドリアン少年) (Music Japan 2015.07.19)',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498663296,
      'music_last_update_time' => 1497839921,
      'music_title_search' => 'durian thounen; ドリアン少年 ; muxic japan 2015 07 19',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 772,
      'music_track_id' => 0,
      'music_filename' => '1797945-e28b0e4c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/NMB48~Y3NuX2FydGlzdH4xNjgyNg==.html">NMB48</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1701544,
      'music_title_url' => 'subobjective~boku-no-lyric-no-boyomi',
      'music_title' => 'Sub/Objective',
      'music_artist' => 'Boku No Lyric No Boyomi',
      'music_artist_id' => '88137',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496413143,
      'music_last_update_time' => 1477608197,
      'music_title_search' => 'xub;objective',
      'music_artist_search' => '; boku no liric no boiomi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1097,
      'music_track_id' => 0,
      'music_filename' => '1701544-e478bba9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Boku-No-Lyric-No-Boyomi~Y3NuX2FydGlzdH44ODEzNw==.html">Boku No Lyric No Boyomi</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1717318,
      'music_title_url' => 'taiyou-knock~nogizaka46',
      'music_title' => 'Taiyou Knock (太陽ノック)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521059061,
      'music_last_update_time' => 1477451224,
      'music_title_search' => 'taiou knock; 太陽ノック',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2022,
      'music_track_id' => 1,
      'music_filename' => '1717318-9fbeda57.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'ねえ 夏の強い陽射しに
街が乱反射しているよ
もう 君が影に隠れてても
誰かにすぐ見つかるだろう

一人きり 閉じ籠ってた
心から飛び出してみよう

太陽ノック
誘っているよ
空の下は自由だと言ってる
何か始める
いいきっかけだ
熱くなれる季節に
Open the door!

ああ 光り輝いてても
やがて 夏は過ぎ去って行く
そう 君はその時の寂しさ
感じ取って臆病になる

未来とは 今が...',
      'music_artist_html' => '<a href="/ca-si/Nogizaka46~Y3NuX2FydGlzdH4xMzU1Nw==.html">Nogizaka46</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1719419,
      'music_title_url' => 'reflection~tokyo-girls-style',
      'music_title' => 'Reflection (リフレクション)',
      'music_artist' => 'TOKYO GIRLS\' STYLE',
      'music_artist_id' => '63898',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498941848,
      'music_last_update_time' => 1477451210,
      'music_title_search' => 'reflection; リフレクション',
      'music_artist_search' => '; tokio drlx xtile;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 776,
      'music_track_id' => 1,
      'music_filename' => '1719419-eef786cf.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/TOKYO-GIRLS-STYLE~Y3NuX2FydGlzdH42Mzg5OA==.html">TOKYO GIRLS\' STYLE</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1719420,
      'music_title_url' => 'never-ever-tjo-yusuke-from-blu-swing-remix~tokyo-girls-style',
      'music_title' => 'Never ever (TJO &amp; YUSUKE from BLU-SWING Remix)',
      'music_artist' => 'TOKYO GIRLS\' STYLE',
      'music_artist_id' => '63898',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1499324434,
      'music_last_update_time' => 1477451206,
      'music_title_search' => 'never ever; tjo iuxuke from blu xwing remix',
      'music_artist_search' => '; tokio drlx xtile;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 618,
      'music_track_id' => 2,
      'music_filename' => '1719420-ad01b9b5.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/TOKYO-GIRLS-STYLE~Y3NuX2FydGlzdH42Mzg5OA==.html">TOKYO GIRLS\' STYLE</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1719421,
      'music_title_url' => 'junpaku-no-yakusoku~tokyo-girls-style',
      'music_title' => 'Junpaku no Yakusoku (純白の約束)',
      'music_artist' => 'TOKYO GIRLS\' STYLE',
      'music_artist_id' => '63898',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535473987,
      'music_last_update_time' => 1477451203,
      'music_title_search' => 'junpaku no iakuxoku; 純白の約束',
      'music_artist_search' => '; tokio drlx xtile;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 687,
      'music_track_id' => 7,
      'music_filename' => '1719421-02ed60f2.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/TOKYO-GIRLS-STYLE~Y3NuX2FydGlzdH42Mzg5OA==.html">TOKYO GIRLS\' STYLE</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1735647,
      'music_title_url' => 'colorful-fantasy~elfin',
      'music_title' => 'Colorful Fantasy',
      'music_artist' => 'elfin\'',
      'music_artist_id' => '91258',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498473268,
      'music_last_update_time' => 1478025019,
      'music_title_search' => 'colorful fantaxi',
      'music_artist_search' => '; elfin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2366,
      'music_track_id' => 1,
      'music_filename' => '1735647-44579f62.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '手を伸ばしてみよう　夢に触れるまで
誰も見たことない　輝く未来へ
飛び立つよ

風が笑ってる　意気地なしの心を
ラビリンスな今　だけど夢を叶えたい

魔法の未来地図と　勇気コンパス
騒ぐ向かい風も　気にしないで　旅立とう

飛び出してみよう　この広い海へ
青い絨毯　永遠の空　胸が躍りだす
答えなんてないよ未来に　大事なのは自分
誰も見たことない　光の向こう
新しい世界へ旅立とう

夢は蜃気楼...',
      'music_artist_html' => '<a href="/ca-si/elfin~Y3NuX2FydGlzdH45MTI1OA==.html">elfin\'</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1740166,
      'music_title_url' => 'tomorrow~flower',
      'music_title' => 'Tomorrow',
      'music_artist' => 'Flower',
      'music_artist_id' => '33212',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1504244116,
      'music_last_update_time' => 1479109248,
      'music_title_search' => 'tomorow',
      'music_artist_search' => '; flower;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 520,
      'music_track_id' => 0,
      'music_filename' => '1740166-11d996d5.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Asa ga kureba tomorrow
Ī koto ga aru tomorrow.

Ashita yumemiru dake de tomorrow
Tsurai koto mo wasureru min\'na.

Sabishikute yūutsuna hi ni wa
Munewohatte utau no oh!

Asa ga kureba tomorrow
Namid...',
      'music_artist_html' => '<a href="/ca-si/Flower~Y3NuX2FydGlzdH4zMzIxMg==.html">Flower</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1740168,
      'music_title_url' => 'dreamin-together~flower-little-mix',
      'music_title' => 'Dreamin\' Together',
      'music_artist' => 'Flower;Little Mix',
      'music_artist_id' => '33212;18147',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531054878,
      'music_last_update_time' => 1479145139,
      'music_title_search' => 'dreamin together',
      'music_artist_search' => '; flower; litle mix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1707,
      'music_track_id' => 0,
      'music_filename' => '1740168-84a45b7b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Dreamin\' together, dreamin\' together, dreamin\' together ashita wa
Dreamin\' together, dreamin\' together, dreamin\' together soko ni aru.

Girl kono goro sukoshi Girl genki naidesho?
Girl whenever you...',
      'music_artist_html' => '<a href="/ca-si/Flower~Y3NuX2FydGlzdH4zMzIxMg==.html">Flower</a>, <a href="/ca-si/Little-Mix~Y3NuX2FydGlzdH4xODE0Nw==.html">Little Mix</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1740169,
      'music_title_url' => 'blue-sky-blue~flower',
      'music_title' => 'Blue Sky Blue',
      'music_artist' => 'Flower',
      'music_artist_id' => '33212',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1511856345,
      'music_last_update_time' => 1479145217,
      'music_title_search' => 'blue xki blue',
      'music_artist_search' => '; flower;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1263,
      'music_track_id' => 0,
      'music_filename' => '1740169-7de3b971.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '風の色が Every moment　鮮やかに変わる
踊る光の粒 Such a beautiful day
気の早い初夏(なつ)の花たちが　蕾をつけてる
離れ離れの二人は「逢いたい」って言い合うたび強くなるのね
次の待ち合わせは　新しい笑顔纏(まと)って　あなたへと駈け出すわ
 
Kaze no iro ga Every moment azayaka ni kawaru
Odoru hikar...',
      'music_artist_html' => '<a href="/ca-si/Flower~Y3NuX2FydGlzdH4zMzIxMg==.html">Flower</a>',
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
      'music_id' => 1476365,
      'music_title_url' => 'kimi-wa-boku-to-awanai-hou-ga-yokatta-no-kana~nogizaka46',
      'music_title' => 'Kimi wa Boku to Awanai Hou ga Yokatta no Kana (君は僕と会わない方がよかったのかな)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538479816,
      'music_last_update_time' => 1428023205,
      'music_title_search' => 'kimi wa boku to awanai hou ga iokata no kana; 君は僕と会わない方がよかったのかな',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6746,
      'music_track_id' => 0,
      'music_filename' => '1476365-dc175692.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Kimi wa boku to awanai hou ga yokatta no ka na
Nante omou
Yuugure no machi hitogomi ni magire
Senaka marumete aruita
Shiawase ni dekinakatta fugaina sa ni
Kyou no boku wa hekonderu.

Bokutachi wa d...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1569035,
      'music_title_url' => 'ly-keo-chai-live~trish-luong',
      'music_title' => 'Lý Kéo Chài (Live)',
      'music_artist' => 'Trish Lương',
      'music_artist_id' => '73862',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538477088,
      'music_last_update_time' => 1445044705,
      'music_title_search' => 'li keo chai; live',
      'music_artist_search' => '; chith lung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1420,
      'music_track_id' => 0,
      'music_filename' => '1569035-6d550196.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Gió lên rồi căng buồm cho khoái
Gác chèo lên ta nướng khô khoai... hò ơi
Nhậu cho tiêu hết mấy chai... 
Khoan hỡi khoan hò.

Bỏ ghe mà nghiêng ngửa... ơ … hơ là hò
Không ai chống chèo. Không ai chố...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1490194,
      'music_title_url' => 'bokutachi-wa-tatakawanai~akb48',
      'music_title' => 'Bokutachi Wa Tatakawanai (僕たちは戦わない)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538629249,
      'music_last_update_time' => 1431062588,
      'music_title_search' => 'bokutachi wa tatakawanai; 僕たちは戦わない',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8627,
      'music_track_id' => 0,
      'music_filename' => '1490194-42a281c5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Bokutachi wa tatakawanai 
Ai o shinjiteru 
Furiageta sono ken 
Dare mo orosu hi ga kuru yo. 

Nikushimi ga rensa suru
Dakara ima tachikirunda. 

Kono sekai de nagareochiru namida no souryou 
Kimatt...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1534420,
      'music_title_url' => 'lover~aaa',
      'music_title' => 'Lover',
      'music_artist' => 'AAA',
      'music_artist_id' => '4400',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538793121,
      'music_last_update_time' => 1439249758,
      'music_title_search' => 'lover',
      'music_artist_search' => '; a;',
      'music_album_search' => '',
      'music_composer' => 'AAA',
      'music_album' => '',
      'music_listen' => 815,
      'music_track_id' => 0,
      'music_filename' => '1534420-5f072ca3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Lover Lover..
Lover Lover..
My Lover I miss you..
Người yêu!
Người yêu!
Anh nhớ em
巡り来る季節が今 色付いて染まってゆく
Happy Happy 始まりだした love story
こんなにもあなたが 近くにいるなんて
I never feel good 想い溢れる
Oh, love you.. (love...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1591530,
      'music_title_url' => 'kuchibiru-ni-be-my-baby-be-my-baby~akb48',
      'music_title' => 'Kuchibiru Ni Be My Baby (唇にBe My Baby)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538630005,
      'music_last_update_time' => 1448941603,
      'music_title_search' => 'kuchibiru ni be mi babi; 唇にbe mi babi',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => 'Akimoto Yasushi',
      'music_album' => '',
      'music_listen' => 11171,
      'music_track_id' => 0,
      'music_filename' => '1591530-9fe9b069.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Wowow(wowow)
Daisukinanoni (kotoba ni wa dekinai)
Kono (kono) mune ga setsunai (dousureba ii?)
Wowow(wowow) imeeji shiyou
Sa kuchibiru ni be my beby.

Fuyuzora no kaze no kabu (magari)
Ontaimu de b...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1815499,
      'music_title_url' => 'piquete~wisin-plan-b',
      'music_title' => 'Piquete',
      'music_artist' => 'Wisin;Plan B',
      'music_artist_id' => '959;9533',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536635532,
      'music_last_update_time' => 1502672592,
      'music_title_search' => 'piquete',
      'music_artist_search' => '; wixin; plan b;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1157,
      'music_track_id' => 0,
      'music_filename' => '1815499-b7d58ed9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ella desde chamaquita
La tenia montada en la escuela
(Piquete!)
W, Plan B!
La Trilogia.

[Chencho:]
Piquete, la nena no quiere me la acosen
Que la atiende el novio ni de grillete
Anda con sus amiga...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1447310,
      'music_title_url' => 'mr-chu-on-stage-japanese-version~a-pink',
      'music_title' => 'Mr. Chu (On Stage) (Japanese Version)',
      'music_artist' => 'A Pink',
      'music_artist_id' => '2310',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1423943814,
      'music_last_update_time' => 1422015691,
      'music_title_search' => 'mr chu; on xtage ; japanexe verxion',
      'music_artist_search' => '; a pink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5718,
      'music_track_id' => 0,
      'music_filename' => '1447310-dae70de2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1454507,
      'music_title_url' => 'americas~chipmunk-rabbit-solar',
      'music_title' => 'Americas (เมรี)',
      'music_artist' => 'Chipmunk;Rabbit Solar',
      'music_artist_id' => '10205;62435',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1425047110,
      'music_last_update_time' => 1423274102,
      'music_title_search' => 'americax; เมรี',
      'music_artist_search' => '; chipmunk; rabit xolar;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 630,
      'music_track_id' => 0,
      'music_filename' => '1454507-cb32e908.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1454825,
      'music_title_url' => 'on-the-eighth-day-before-the-rain-stops~suzumu-hatsune-miku',
      'music_title' => 'On The Eighth Day, Before The Rain Stops',
      'music_artist' => 'Suzumu;Hatsune Miku',
      'music_artist_id' => '62249;2021',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495608838,
      'music_last_update_time' => 1423238704,
      'music_title_search' => 'on the eighth dai before the rain xtopx',
      'music_artist_search' => '; xuzumu; hatxune miku;',
      'music_album_search' => '',
      'music_composer' => 'Suzumu',
      'music_album' => '',
      'music_listen' => 1374,
      'music_track_id' => 0,
      'music_filename' => '1454825-55b74168.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Houkago ame ga yamu mae ni boku to utaou 
Bukiyou de tsukurikake no urenai uta wo 
Saigo ni boku no kotoba ga kimi ni todoku to ii na 
Nee 
Ashita ha konnanimo yasashiindakara 
Mata hitori naitenai...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1455400,
      'music_title_url' => 'middle-schooler-disease-outburst-boy-chuubyou-gekihatsu-boy~soraru-mafumafu',
      'music_title' => 'Middle Schooler Disease Outburst Boy (Chuubyou Gekihatsu Boy)',
      'music_artist' => 'Soraru;Mafumafu',
      'music_artist_id' => '62498;57301',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521467799,
      'music_last_update_time' => 1423584687,
      'music_title_search' => 'midle xcholer dixeaxe outburxt boi; chubiou gekihatxu boi',
      'music_artist_search' => '; xoraru; mafumafu;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1772,
      'music_track_id' => 0,
      'music_filename' => '1455400-a053ea92.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Sou sa ore wa mezamete shimatta tokubetsuna chikara motte shimatta
Kono baria no mae ni wa
Donna yatsura mo muryokuda ze.

Tenshi ka akuma no umarekawari ka
Mienai mono ga miete shimaunda
Migiude g...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1456687,
      'music_title_url' => 'miiro~akino-from-bless4',
      'music_title' => 'Miiro (海色)',
      'music_artist' => 'AKINO from bless4',
      'music_artist_id' => '62622',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1504106103,
      'music_last_update_time' => 1423989842,
      'music_title_search' => 'miro; 海色',
      'music_artist_search' => '; akino from blex4;',
      'music_album_search' => '',
      'music_composer' => 'WEST GROUND, Yuya Saito',
      'music_album' => '',
      'music_listen' => 2561,
      'music_track_id' => 0,
      'music_filename' => '1456687-aaf7f644.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Asa no hikari mabushikute… Wake Up!
Kotoba mo nakute tada nami no oto kiiteta
Kioku no imi tamesareteiru mitai ni
Yami no naka demo omoidasu.

Mae ni susumu no miteite yo
So repeatedly we would reg...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1456777,
      'music_title_url' => 'seven-deadly-sins~man-with-a-mission',
      'music_title' => 'Seven Deadly Sins',
      'music_artist' => 'MAN WITH A MISSION',
      'music_artist_id' => '13335',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536180821,
      'music_last_update_time' => 1488964929,
      'music_title_search' => 'xeven deadli xinx',
      'music_artist_search' => '; man with a mixion;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3216,
      'music_track_id' => 0,
      'music_filename' => '1456777-1a7019ed.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wow oh oh oh oh oh
The pain and the pleasure all come together, there is no reason why
Wow oh oh oh oh oh
The pain and the pleasure all come together there\'s no reason why.

I got my demons,they do...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1457342,
      'music_title_url' => 'against-the-world-glcr18~wenzi-ham-kiyoshi-catalyst-pairi',
      'music_title' => 'Against The World (GLC:R18)',
      'music_artist' => 'Wenzi;Ham;Kiyoshi;Catalyst;Pairi',
      'music_artist_id' => '62662;12766;62663;62664;62665',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512471835,
      'music_last_update_time' => 1423710741,
      'music_title_search' => 'againxt the world; glc;r18',
      'music_artist_search' => '; wenzi; ham; kiothi; catalixt; pairi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1618,
      'music_track_id' => 0,
      'music_filename' => '1457342-86df0554.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Zankokuna monogatarinara ketsumatsu o kaki kaeyou
Nattoku dekinai ehon osanai koro kara zutto.

Moshimo kimi o sukuu koto ga
Dekiru nonara sekaiju o Teki ni mawashite mo i yo
Hora te o toki yuko....',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1457825,
      'music_title_url' => 'pom-pen-kaung-koon-pai-laaw~bie-sukrit',
      'music_title' => 'Pom Pen Kaung Koon Pai Laaw (ผมเป็นของคุณไปแล้ว)',
      'music_artist' => 'Bie Sukrit',
      'music_artist_id' => '46391',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1433591304,
      'music_last_update_time' => 1423811283,
      'music_title_search' => 'pom pen kaung kon pai law; ผมเป็นของคุณไปแล้ว',
      'music_artist_search' => '; bi xukrit;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1691,
      'music_track_id' => 0,
      'music_filename' => '1457825-98baf55d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1457844,
      'music_title_url' => 'one-love~nat-sakdatorn',
      'music_title' => 'One Love (รักเธอคนเดียว)',
      'music_artist' => 'Nat Sakdatorn',
      'music_artist_id' => '62708',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496962592,
      'music_last_update_time' => 1423812613,
      'music_title_search' => '1 love; รักเธอคนเดียว',
      'music_artist_search' => '; nat xakdatorn;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8316,
      'music_track_id' => 0,
      'music_filename' => '1457844-f3162838.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1461049,
      'music_title_url' => 'knowledge-and-understanding~crescendo',
      'music_title' => 'Knowledge And Understanding (รู้และเข้าใจ)',
      'music_artist' => 'Crescendo',
      'music_artist_id' => '53123',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1445415228,
      'music_last_update_time' => 1424850145,
      'music_title_search' => 'knowledge and underxtanding; รู้และเข้าใจ',
      'music_artist_search' => '; crexcendo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1151,
      'music_track_id' => 0,
      'music_filename' => '1461049-44012795.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1461295,
      'music_title_url' => 'same-difference~getsunova-jannina-w-see-scape',
      'music_title' => 'Same Difference (แตกต่างเหมือนกัน)',
      'music_artist' => 'Getsunova;Jannina W;See Scape',
      'music_artist_id' => '34067;36130;46753',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1508667850,
      'music_last_update_time' => 1424957549,
      'music_title_search' => 'xame diference; แตกต่างเหมือนกัน',
      'music_artist_search' => '; getxunova; janina w; xe xcape;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2151,
      'music_track_id' => 0,
      'music_filename' => '1461295-6738b79a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1461298,
      'music_title_url' => 'balance~potato',
      'music_title' => 'Balance (	สมดุล)',
      'music_artist' => 'Potato',
      'music_artist_id' => '44226',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1502807259,
      'music_last_update_time' => 1424957044,
      'music_title_search' => 'balance; 	สมดุล',
      'music_artist_search' => '; potato;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2133,
      'music_track_id' => 0,
      'music_filename' => '1461298-43d7b07e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1461587,
      'music_title_url' => 'desi-look~sunny-leone-kanika-kapoor-ek-paheli-leela',
      'music_title' => 'Desi Look',
      'music_artist' => 'Sunny Leone;Kanika Kapoor;Ek Paheli Leela',
      'music_artist_id' => '63147;63148;63149',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1514641208,
      'music_last_update_time' => 1425039904,
      'music_title_search' => 'dexi lok',
      'music_artist_search' => '; xuni leone; kanika kapor; ek paheli lela;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4564,
      'music_track_id' => 0,
      'music_filename' => '1461587-f04846ef.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1461601,
      'music_title_url' => 'noche-y-de-dia~enrique-iglesias-yandel-juan-magan',
      'music_title' => 'Noche Y De Dia',
      'music_artist' => 'Enrique Iglesias;Yandel;Juan Magan',
      'music_artist_id' => '604;960;19167',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536609669,
      'music_last_update_time' => 1425040021,
      'music_title_search' => 'noche i de dia',
      'music_artist_search' => '; enrique iglexiax; iandel; juan magan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 16126,
      'music_track_id' => 0,
      'music_filename' => '1461601-57005ae0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hoy, me dijeron que te vieron por la ciudad 
Caminando por la calle en la oscuridad 
Ya llegó la noche hay un efecto 
Y se detiene el tiempo. 

Hoy, me dijeron que te vieron en la arena 
En la fies...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1476365,
      'music_title_url' => 'kimi-wa-boku-to-awanai-hou-ga-yokatta-no-kana~nogizaka46',
      'music_title' => 'Kimi wa Boku to Awanai Hou ga Yokatta no Kana (君は僕と会わない方がよかったのかな)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538479816,
      'music_last_update_time' => 1428023205,
      'music_title_search' => 'kimi wa boku to awanai hou ga iokata no kana; 君は僕と会わない方がよかったのかな',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6746,
      'music_track_id' => 0,
      'music_filename' => '1476365-dc175692.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Kimi wa boku to awanai hou ga yokatta no ka na
Nante omou
Yuugure no machi hitogomi ni magire
Senaka marumete aruita
Shiawase ni dekinakatta fugaina sa ni
Kyou no boku wa hekonderu.

Bokutachi wa d...',
      'music_artist_html' => '<a href="/ca-si/Nogizaka46~Y3NuX2FydGlzdH4xMzU1Nw==.html">Nogizaka46</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1569035,
      'music_title_url' => 'ly-keo-chai-live~trish-luong',
      'music_title' => 'Lý Kéo Chài (Live)',
      'music_artist' => 'Trish Lương',
      'music_artist_id' => '73862',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538477088,
      'music_last_update_time' => 1445044705,
      'music_title_search' => 'li keo chai; live',
      'music_artist_search' => '; chith lung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1420,
      'music_track_id' => 0,
      'music_filename' => '1569035-6d550196.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Gió lên rồi căng buồm cho khoái
Gác chèo lên ta nướng khô khoai... hò ơi
Nhậu cho tiêu hết mấy chai... 
Khoan hỡi khoan hò.

Bỏ ghe mà nghiêng ngửa... ơ … hơ là hò
Không ai chống chèo. Không ai chố...',
      'music_artist_html' => '<a href="/ca-si/Trish-Luong~Y3NuX2FydGlzdH43Mzg2Mg==.html">Trish Lương</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1490194,
      'music_title_url' => 'bokutachi-wa-tatakawanai~akb48',
      'music_title' => 'Bokutachi Wa Tatakawanai (僕たちは戦わない)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538629249,
      'music_last_update_time' => 1431062588,
      'music_title_search' => 'bokutachi wa tatakawanai; 僕たちは戦わない',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8627,
      'music_track_id' => 0,
      'music_filename' => '1490194-42a281c5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Bokutachi wa tatakawanai 
Ai o shinjiteru 
Furiageta sono ken 
Dare mo orosu hi ga kuru yo. 

Nikushimi ga rensa suru
Dakara ima tachikirunda. 

Kono sekai de nagareochiru namida no souryou 
Kimatt...',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1534420,
      'music_title_url' => 'lover~aaa',
      'music_title' => 'Lover',
      'music_artist' => 'AAA',
      'music_artist_id' => '4400',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538793121,
      'music_last_update_time' => 1439249758,
      'music_title_search' => 'lover',
      'music_artist_search' => '; a;',
      'music_album_search' => '',
      'music_composer' => 'AAA',
      'music_album' => '',
      'music_listen' => 815,
      'music_track_id' => 0,
      'music_filename' => '1534420-5f072ca3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Lover Lover..
Lover Lover..
My Lover I miss you..
Người yêu!
Người yêu!
Anh nhớ em
巡り来る季節が今 色付いて染まってゆく
Happy Happy 始まりだした love story
こんなにもあなたが 近くにいるなんて
I never feel good 想い溢れる
Oh, love you.. (love...',
      'music_artist_html' => '<a href="/ca-si/AAA~Y3NuX2FydGlzdH40NDAw.html">AAA</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1591530,
      'music_title_url' => 'kuchibiru-ni-be-my-baby-be-my-baby~akb48',
      'music_title' => 'Kuchibiru Ni Be My Baby (唇にBe My Baby)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538630005,
      'music_last_update_time' => 1448941603,
      'music_title_search' => 'kuchibiru ni be mi babi; 唇にbe mi babi',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => 'Akimoto Yasushi',
      'music_album' => '',
      'music_listen' => 11171,
      'music_track_id' => 0,
      'music_filename' => '1591530-9fe9b069.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Wowow(wowow)
Daisukinanoni (kotoba ni wa dekinai)
Kono (kono) mune ga setsunai (dousureba ii?)
Wowow(wowow) imeeji shiyou
Sa kuchibiru ni be my beby.

Fuyuzora no kaze no kabu (magari)
Ontaimu de b...',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1815499,
      'music_title_url' => 'piquete~wisin-plan-b',
      'music_title' => 'Piquete',
      'music_artist' => 'Wisin;Plan B',
      'music_artist_id' => '959;9533',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536635532,
      'music_last_update_time' => 1502672592,
      'music_title_search' => 'piquete',
      'music_artist_search' => '; wixin; plan b;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1157,
      'music_track_id' => 0,
      'music_filename' => '1815499-b7d58ed9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ella desde chamaquita
La tenia montada en la escuela
(Piquete!)
W, Plan B!
La Trilogia.

[Chencho:]
Piquete, la nena no quiere me la acosen
Que la atiende el novio ni de grillete
Anda con sus amiga...',
      'music_artist_html' => '<a href="/ca-si/Wisin~Y3NuX2FydGlzdH45NTk=.html">Wisin</a>, <a href="/ca-si/Plan-B~Y3NuX2FydGlzdH45NTMz.html">Plan B</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1447310,
      'music_title_url' => 'mr-chu-on-stage-japanese-version~a-pink',
      'music_title' => 'Mr. Chu (On Stage) (Japanese Version)',
      'music_artist' => 'A Pink',
      'music_artist_id' => '2310',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1423943814,
      'music_last_update_time' => 1422015691,
      'music_title_search' => 'mr chu; on xtage ; japanexe verxion',
      'music_artist_search' => '; a pink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5718,
      'music_track_id' => 0,
      'music_filename' => '1447310-dae70de2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/A-Pink~Y3NuX2FydGlzdH4yMzEw.html">A Pink</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1454507,
      'music_title_url' => 'americas~chipmunk-rabbit-solar',
      'music_title' => 'Americas (เมรี)',
      'music_artist' => 'Chipmunk;Rabbit Solar',
      'music_artist_id' => '10205;62435',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1425047110,
      'music_last_update_time' => 1423274102,
      'music_title_search' => 'americax; เมรี',
      'music_artist_search' => '; chipmunk; rabit xolar;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 630,
      'music_track_id' => 0,
      'music_filename' => '1454507-cb32e908.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Chipmunk~Y3NuX2FydGlzdH4xMDIwNQ==.html">Chipmunk</a>, <a href="/ca-si/Rabbit-Solar~Y3NuX2FydGlzdH42MjQzNQ==.html">Rabbit Solar</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1454825,
      'music_title_url' => 'on-the-eighth-day-before-the-rain-stops~suzumu-hatsune-miku',
      'music_title' => 'On The Eighth Day, Before The Rain Stops',
      'music_artist' => 'Suzumu;Hatsune Miku',
      'music_artist_id' => '62249;2021',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1495608838,
      'music_last_update_time' => 1423238704,
      'music_title_search' => 'on the eighth dai before the rain xtopx',
      'music_artist_search' => '; xuzumu; hatxune miku;',
      'music_album_search' => '',
      'music_composer' => 'Suzumu',
      'music_album' => '',
      'music_listen' => 1374,
      'music_track_id' => 0,
      'music_filename' => '1454825-55b74168.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Houkago ame ga yamu mae ni boku to utaou 
Bukiyou de tsukurikake no urenai uta wo 
Saigo ni boku no kotoba ga kimi ni todoku to ii na 
Nee 
Ashita ha konnanimo yasashiindakara 
Mata hitori naitenai...',
      'music_artist_html' => '<a href="/ca-si/Suzumu~Y3NuX2FydGlzdH42MjI0OQ==.html">Suzumu</a>, <a href="/ca-si/Hatsune-Miku~Y3NuX2FydGlzdH4yMDIx.html">Hatsune Miku</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1455400,
      'music_title_url' => 'middle-schooler-disease-outburst-boy-chuubyou-gekihatsu-boy~soraru-mafumafu',
      'music_title' => 'Middle Schooler Disease Outburst Boy (Chuubyou Gekihatsu Boy)',
      'music_artist' => 'Soraru;Mafumafu',
      'music_artist_id' => '62498;57301',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1521467799,
      'music_last_update_time' => 1423584687,
      'music_title_search' => 'midle xcholer dixeaxe outburxt boi; chubiou gekihatxu boi',
      'music_artist_search' => '; xoraru; mafumafu;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1772,
      'music_track_id' => 0,
      'music_filename' => '1455400-a053ea92.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Sou sa ore wa mezamete shimatta tokubetsuna chikara motte shimatta
Kono baria no mae ni wa
Donna yatsura mo muryokuda ze.

Tenshi ka akuma no umarekawari ka
Mienai mono ga miete shimaunda
Migiude g...',
      'music_artist_html' => '<a href="/ca-si/Soraru~Y3NuX2FydGlzdH42MjQ5OA==.html">Soraru</a>, <a href="/ca-si/Mafumafu~Y3NuX2FydGlzdH41NzMwMQ==.html">Mafumafu</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1456687,
      'music_title_url' => 'miiro~akino-from-bless4',
      'music_title' => 'Miiro (海色)',
      'music_artist' => 'AKINO from bless4',
      'music_artist_id' => '62622',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1504106103,
      'music_last_update_time' => 1423989842,
      'music_title_search' => 'miro; 海色',
      'music_artist_search' => '; akino from blex4;',
      'music_album_search' => '',
      'music_composer' => 'WEST GROUND, Yuya Saito',
      'music_album' => '',
      'music_listen' => 2561,
      'music_track_id' => 0,
      'music_filename' => '1456687-aaf7f644.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Asa no hikari mabushikute… Wake Up!
Kotoba mo nakute tada nami no oto kiiteta
Kioku no imi tamesareteiru mitai ni
Yami no naka demo omoidasu.

Mae ni susumu no miteite yo
So repeatedly we would reg...',
      'music_artist_html' => '<a href="/ca-si/AKINO-from-bless4~Y3NuX2FydGlzdH42MjYyMg==.html">AKINO from bless4</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1456777,
      'music_title_url' => 'seven-deadly-sins~man-with-a-mission',
      'music_title' => 'Seven Deadly Sins',
      'music_artist' => 'MAN WITH A MISSION',
      'music_artist_id' => '13335',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536180821,
      'music_last_update_time' => 1488964929,
      'music_title_search' => 'xeven deadli xinx',
      'music_artist_search' => '; man with a mixion;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3216,
      'music_track_id' => 0,
      'music_filename' => '1456777-1a7019ed.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wow oh oh oh oh oh
The pain and the pleasure all come together, there is no reason why
Wow oh oh oh oh oh
The pain and the pleasure all come together there\'s no reason why.

I got my demons,they do...',
      'music_artist_html' => '<a href="/ca-si/MAN-WITH-A-MISSION~Y3NuX2FydGlzdH4xMzMzNQ==.html">MAN WITH A MISSION</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1457342,
      'music_title_url' => 'against-the-world-glcr18~wenzi-ham-kiyoshi-catalyst-pairi',
      'music_title' => 'Against The World (GLC:R18)',
      'music_artist' => 'Wenzi;Ham;Kiyoshi;Catalyst;Pairi',
      'music_artist_id' => '62662;12766;62663;62664;62665',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512471835,
      'music_last_update_time' => 1423710741,
      'music_title_search' => 'againxt the world; glc;r18',
      'music_artist_search' => '; wenzi; ham; kiothi; catalixt; pairi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1618,
      'music_track_id' => 0,
      'music_filename' => '1457342-86df0554.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Zankokuna monogatarinara ketsumatsu o kaki kaeyou
Nattoku dekinai ehon osanai koro kara zutto.

Moshimo kimi o sukuu koto ga
Dekiru nonara sekaiju o Teki ni mawashite mo i yo
Hora te o toki yuko....',
      'music_artist_html' => '<a href="/ca-si/Wenzi~Y3NuX2FydGlzdH42MjY2Mg==.html">Wenzi</a>, <a href="/ca-si/Ham~Y3NuX2FydGlzdH4xMjc2Ng==.html">Ham</a>, <a href="/ca-si/Kiyoshi~Y3NuX2FydGlzdH42MjY2Mw==.html">Kiyoshi</a>, <a href="/ca-si/Catalyst~Y3NuX2FydGlzdH42MjY2NA==.html">Catalyst</a>, <a href="/ca-si/Pairi~Y3NuX2FydGlzdH42MjY2NQ==.html">Pairi</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1457825,
      'music_title_url' => 'pom-pen-kaung-koon-pai-laaw~bie-sukrit',
      'music_title' => 'Pom Pen Kaung Koon Pai Laaw (ผมเป็นของคุณไปแล้ว)',
      'music_artist' => 'Bie Sukrit',
      'music_artist_id' => '46391',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1433591304,
      'music_last_update_time' => 1423811283,
      'music_title_search' => 'pom pen kaung kon pai law; ผมเป็นของคุณไปแล้ว',
      'music_artist_search' => '; bi xukrit;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1691,
      'music_track_id' => 0,
      'music_filename' => '1457825-98baf55d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Bie-Sukrit~Y3NuX2FydGlzdH40NjM5MQ==.html">Bie Sukrit</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1457844,
      'music_title_url' => 'one-love~nat-sakdatorn',
      'music_title' => 'One Love (รักเธอคนเดียว)',
      'music_artist' => 'Nat Sakdatorn',
      'music_artist_id' => '62708',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1496962592,
      'music_last_update_time' => 1423812613,
      'music_title_search' => '1 love; รักเธอคนเดียว',
      'music_artist_search' => '; nat xakdatorn;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8316,
      'music_track_id' => 0,
      'music_filename' => '1457844-f3162838.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Nat-Sakdatorn~Y3NuX2FydGlzdH42MjcwOA==.html">Nat Sakdatorn</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1461049,
      'music_title_url' => 'knowledge-and-understanding~crescendo',
      'music_title' => 'Knowledge And Understanding (รู้และเข้าใจ)',
      'music_artist' => 'Crescendo',
      'music_artist_id' => '53123',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1445415228,
      'music_last_update_time' => 1424850145,
      'music_title_search' => 'knowledge and underxtanding; รู้และเข้าใจ',
      'music_artist_search' => '; crexcendo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1151,
      'music_track_id' => 0,
      'music_filename' => '1461049-44012795.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Crescendo~Y3NuX2FydGlzdH41MzEyMw==.html">Crescendo</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1461295,
      'music_title_url' => 'same-difference~getsunova-jannina-w-see-scape',
      'music_title' => 'Same Difference (แตกต่างเหมือนกัน)',
      'music_artist' => 'Getsunova;Jannina W;See Scape',
      'music_artist_id' => '34067;36130;46753',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1508667850,
      'music_last_update_time' => 1424957549,
      'music_title_search' => 'xame diference; แตกต่างเหมือนกัน',
      'music_artist_search' => '; getxunova; janina w; xe xcape;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2151,
      'music_track_id' => 0,
      'music_filename' => '1461295-6738b79a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Getsunova~Y3NuX2FydGlzdH4zNDA2Nw==.html">Getsunova</a>, <a href="/ca-si/Jannina-W~Y3NuX2FydGlzdH4zNjEzMA==.html">Jannina W</a>, <a href="/ca-si/See-Scape~Y3NuX2FydGlzdH40Njc1Mw==.html">See Scape</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1461298,
      'music_title_url' => 'balance~potato',
      'music_title' => 'Balance (	สมดุล)',
      'music_artist' => 'Potato',
      'music_artist_id' => '44226',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1502807259,
      'music_last_update_time' => 1424957044,
      'music_title_search' => 'balance; 	สมดุล',
      'music_artist_search' => '; potato;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2133,
      'music_track_id' => 0,
      'music_filename' => '1461298-43d7b07e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Potato~Y3NuX2FydGlzdH40NDIyNg==.html">Potato</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1461587,
      'music_title_url' => 'desi-look~sunny-leone-kanika-kapoor-ek-paheli-leela',
      'music_title' => 'Desi Look',
      'music_artist' => 'Sunny Leone;Kanika Kapoor;Ek Paheli Leela',
      'music_artist_id' => '63147;63148;63149',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1514641208,
      'music_last_update_time' => 1425039904,
      'music_title_search' => 'dexi lok',
      'music_artist_search' => '; xuni leone; kanika kapor; ek paheli lela;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4564,
      'music_track_id' => 0,
      'music_filename' => '1461587-f04846ef.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Sunny-Leone~Y3NuX2FydGlzdH42MzE0Nw==.html">Sunny Leone</a>, <a href="/ca-si/Kanika-Kapoor~Y3NuX2FydGlzdH42MzE0OA==.html">Kanika Kapoor</a>, <a href="/ca-si/Ek-Paheli-Leela~Y3NuX2FydGlzdH42MzE0OQ==.html">Ek Paheli Leela</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1461601,
      'music_title_url' => 'noche-y-de-dia~enrique-iglesias-yandel-juan-magan',
      'music_title' => 'Noche Y De Dia',
      'music_artist' => 'Enrique Iglesias;Yandel;Juan Magan',
      'music_artist_id' => '604;960;19167',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536609669,
      'music_last_update_time' => 1425040021,
      'music_title_search' => 'noche i de dia',
      'music_artist_search' => '; enrique iglexiax; iandel; juan magan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 16126,
      'music_track_id' => 0,
      'music_filename' => '1461601-57005ae0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hoy, me dijeron que te vieron por la ciudad 
Caminando por la calle en la oscuridad 
Ya llegó la noche hay un efecto 
Y se detiene el tiempo. 

Hoy, me dijeron que te vieron en la arena 
En la fies...',
      'music_artist_html' => '<a href="/ca-si/Enrique-Iglesias~Y3NuX2FydGlzdH42MDQ=.html">Enrique Iglesias</a>, <a href="/ca-si/Yandel~Y3NuX2FydGlzdH45NjA=.html">Yandel</a>, <a href="/ca-si/Juan-Magan~Y3NuX2FydGlzdH4xOTE2Nw==.html">Juan Magan</a>',
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