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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
        'cat_title' => 'Nhạc Nước Khác',
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
      'music_downloads_today' => 4,
      'music_id' => 1711765,
      'music_title_url' => 'xin-goi-nhau-la-co-nhan~bang-kieu-quang-le-dan-nguyen',
      'music_title' => 'Xin Gọi Nhau Là Cố Nhân',
      'music_artist' => 'Bằng Kiều;Quang Lê;Đan Nguyên',
      'music_artist_id' => '1258;1770;2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539074606,
      'music_last_update_time' => 1474533283,
      'music_title_search' => 'xin goi nhau la co nhan',
      'music_artist_search' => '; bang kiu; quang le; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Song Ngọc',
      'music_album' => '',
      'music_listen' => 550221,
      'music_track_id' => 0,
      'music_filename' => '1711765-90773754.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Tôi trở về đây lúc đêm vừa lên
Giăng mắt trời mưa phố xưa buồn tênh
Gót mòn tìm dư hương ngày xưa
Bao nhiêu kỷ niệm êm ái
Một tình yêu thoát trên tầm tay.

2. Tôi trở về đây với con đường xưa
Đâ...',
      'music_length' => 301,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    1 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1688201,
      'music_title_url' => 'go-cua-trai-tim~quang-le-le-quyen',
      'music_title' => 'Gõ Cửa Trái Tim',
      'music_artist' => 'Quang Lê;Lệ Quyên',
      'music_artist_id' => '1770;1662',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539004234,
      'music_last_update_time' => 1468547345,
      'music_title_search' => 'go cua chai tim',
      'music_artist_search' => '; quang le; le qin;',
      'music_album_search' => '',
      'music_composer' => 'Vinh Sử',
      'music_album' => '',
      'music_listen' => 637992,
      'music_track_id' => 0,
      'music_filename' => '1688201-b8332199.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Gõ cửa trái tim van em được vào
Dù tình xót đau chung thân huyệt đào
Ngủ vùi với chiêm bao
Nỗi niềm mắt xanh xao
Nhưng em vẫn ngóng tim anh mở cửa.

Gõ cửa trái tim sao em hững hờ
Ngõ hồn tái tê nă...',
      'music_length' => 271,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    2 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1712556,
      'music_title_url' => 'lai-nho-nguoi-yeu~dan-nguyen',
      'music_title' => 'Lại Nhớ Người Yêu',
      'music_artist' => 'Đan Nguyên',
      'music_artist_id' => '2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539050850,
      'music_last_update_time' => 1474958455,
      'music_title_search' => 'lai nho ngui iu',
      'music_artist_search' => '; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Hoa; Thảo Trang',
      'music_album' => '',
      'music_listen' => 591182,
      'music_track_id' => 0,
      'music_filename' => '1712556-58342f9e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Vì sao anh nhớ em thế này
Thương nhớ đong đầy trong lòng mắt
Buổi chiều còn gặp nhau đây
Mà đêm nay nhớ như vậy
Em hỡi em có thấy có hay.

2. Tình em như núi cao biển rộng
Gom bốn phương trời xâ...',
      'music_length' => 290,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1701192,
      'music_title_url' => 'mai-tim-nhau~thien-quang-quynh-trang',
      'music_title' => 'Mãi Tìm Nhau',
      'music_artist' => 'Thiên Quang;Quỳnh Trang',
      'music_artist_id' => '4784;14182',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538837740,
      'music_last_update_time' => 1470894182,
      'music_title_search' => 'mai tim nhau',
      'music_artist_search' => '; thin quang; qinh chang;',
      'music_album_search' => '',
      'music_composer' => 'Hàn Châu',
      'music_album' => '',
      'music_listen' => 43068,
      'music_track_id' => 0,
      'music_filename' => '1701192-db92ad8e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '&quot;Biết nhớ em nhiều cũng thế thôi
Nhớ em em có nhớ gì tôi
Từ nay vui với đời sương gió
Vui với rượu nồng với chính tôi.&quot;

Hôm nay chúng mình không còn gặp nhau
Bao đêm ngồi nhớ nhung ôi là...',
      'music_length' => 288,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    4 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1716085,
      'music_title_url' => 'nguoi-tinh-khong-den~quynh-trang',
      'music_title' => 'Người Tình Không Đến',
      'music_artist' => 'Quỳnh Trang',
      'music_artist_id' => '14182',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539003734,
      'music_last_update_time' => 1473903936,
      'music_title_search' => 'ngui tinh khong den',
      'music_artist_search' => '; qinh chang;',
      'music_album_search' => '',
      'music_composer' => 'Thương Ngân',
      'music_album' => '',
      'music_listen' => 72807,
      'music_track_id' => 0,
      'music_filename' => '1716085-08fa6ef3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Tôi quen biết anh giữa một đêm thật tình cờ
Sân ga vắng thưa người và ngoài kia vẫn mưa rơi
Tình chưa thành lời vì còn ngại tình gian dối
Rồi ta đã quen nhau và cho nhau phút hẹn hò.

Còi tàu vang...',
      'music_length' => 317,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    5 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1623629,
      'music_title_url' => 'toi-thay-hoa-vang-tren-co-xanh~bang-kieu',
      'music_title' => 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh',
      'music_artist' => 'Bằng Kiều',
      'music_artist_id' => '1258',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539067625,
      'music_last_update_time' => 1454469068,
      'music_title_search' => 'toi thai hoa vang chen co xanh',
      'music_artist_search' => '; bang kiu;',
      'music_album_search' => '',
      'music_composer' => 'Châu Đăng Khoa',
      'music_album' => '',
      'music_listen' => 360790,
      'music_track_id' => 0,
      'music_filename' => '1623629-2592829a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Tôi thấy lặng lẽ vương sau hè
Tôi thấy ngày ấy tìm đến đây
Tôi thấy thảnh thơi như mây trời
Dần dần cứ xa rời tôi.

Tôi thấy hạnh phúc bên kia đồi
Gọi những bình yên nào ghé chơi
Cần lắm gần lắm sa...',
      'music_length' => 282,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1713479,
      'music_title_url' => 'chuyen-tau-hoang-hon~hoang-oanh',
      'music_title' => 'Chuyến Tàu Hoàng Hôn',
      'music_artist' => 'Hoàng Oanh',
      'music_artist_id' => '1630',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538785185,
      'music_last_update_time' => 1474956437,
      'music_title_search' => 'chin tau hoang hon',
      'music_artist_search' => '; hoang oanh;',
      'music_album_search' => '',
      'music_composer' => 'Minh Kỳ; Hoài Linh',
      'music_album' => '',
      'music_listen' => 103023,
      'music_track_id' => 0,
      'music_filename' => '1713479-2e9f0bc0.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Chiều nào, tiễn nhau đi khi bóng ngả xế tà
Hoàng hôn đến đâu đây màu tím dâng trong hồn ta
Muốn không gian ngừng tan, níu đôi chân thời gian
Ngừng trôi cho giây phút chia ly này kéo dài
Trước kh...',
      'music_length' => 364,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1744456,
      'music_title_url' => 'em-ve-tinh-khoi~ha-anh-tuan-phuong-linh',
      'music_title' => 'Em Về Tinh Khôi',
      'music_artist' => 'Hà Anh Tuấn;Phương Linh',
      'music_artist_id' => '333;2986',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538832913,
      'music_last_update_time' => 1480312708,
      'music_title_search' => 'em ve tinh khoi',
      'music_artist_search' => '; ha em tuan; phung linh;',
      'music_album_search' => '',
      'music_composer' => 'Quốc Bảo',
      'music_album' => '',
      'music_listen' => 87079,
      'music_track_id' => 0,
      'music_filename' => '1744456-246d8570.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Bờ vai ơi đừng quá nghiêng nghiêng 
Đánh rơi buổi chiều thơm ngát
Làn môi ơi đừng quá run run 
Lỡ tia nắng hồng tan mất.

Xin âu lo không về qua đây
Xin yêu thương dâng thành mê say
Xin cho ta nhìn...',
      'music_length' => 263,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    8 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1750701,
      'music_title_url' => 'anh-nang-cua-anh-cho-em-den-ngay-mai-ost~duc-phuc',
      'music_title' => 'Ánh Nắng Của Anh (Chờ Em Đến Ngày Mai OST)',
      'music_artist' => 'Đức Phúc',
      'music_artist_id' => '15824',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539043558,
      'music_last_update_time' => 1481721557,
      'music_title_search' => 'em nang cua em; cho em den ngai mai oxt',
      'music_artist_search' => '; duc phuc;',
      'music_album_search' => '',
      'music_composer' => 'Khắc Hưng',
      'music_album' => '',
      'music_listen' => 57750,
      'music_track_id' => 0,
      'music_filename' => '1750701-d5616d9c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 265,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    9 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1753129,
      'music_title_url' => 'thao-thuc-vi-em~quang-le',
      'music_title' => 'Thao Thức Vì Em',
      'music_artist' => 'Quang Lê',
      'music_artist_id' => '1770',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538990271,
      'music_last_update_time' => 1482511335,
      'music_title_search' => 'thao thuc vi em',
      'music_artist_search' => '; quang le;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương',
      'music_album' => '',
      'music_listen' => 9800,
      'music_track_id' => 0,
      'music_filename' => '1753129-829082a1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Em ơi suốt đêm thao thức vì em
Vì lời giã từ lúc anh ra về
Rằng mai đây anh lại đến
Ước nguyện trọn một đời
Là mình luôn luôn có đôi.

2. Em ơi nhớ thương, thương nhớ cả đêm
Làm sao quên được ph...',
      'music_length' => 223,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1624309,
      'music_title_url' => 'con-duong-xua-em-di-live~quang-le-le-quyen',
      'music_title' => 'Con Đường Xưa Em Đi (Live)',
      'music_artist' => 'Quang Lê;Lệ Quyên',
      'music_artist_id' => '1770;1662',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538905771,
      'music_last_update_time' => 1454566773,
      'music_title_search' => 'con dung xua em di; live',
      'music_artist_search' => '; quang le; le qin;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương',
      'music_album' => '',
      'music_listen' => 285341,
      'music_track_id' => 0,
      'music_filename' => '1624309-bc4a3cc7.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Con đường xưa em đi
Vàng lên mái tóc thề
Ngõ hồn dâng tái tê.
 
Anh làm thơ vu quy
Khách qua đường lắng nghe 
Chuyện tình ta đã ghi.

Những mùa trăng vu quy
Vì mưa gió không về 
Chiến trường anh bư...',
      'music_length' => 274,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1669597,
      'music_title_url' => 'that-tinh~trinh-dinh-quang',
      'music_title' => 'Thất Tình',
      'music_artist' => 'Trịnh Đình Quang',
      'music_artist_id' => '3914',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538742290,
      'music_last_update_time' => 1465149264,
      'music_title_search' => 'that tinh',
      'music_artist_search' => '; chinh dinh quang;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Đạo',
      'music_album' => '',
      'music_listen' => 249428,
      'music_track_id' => 0,
      'music_filename' => '1669597-3211e84d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Anh đã không giữ được nhiều hạnh phúc cho em
Nhiều khi giận nhau nước mắt em cứ rơi thật nhiều
Anh xin lỗi em hãy tha thứ cho anh lần này
Đừng rời xa anh em nói đi em rất yêu anh.

Nhưng nay cuộc s...',
      'music_length' => 345,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    12 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1698086,
      'music_title_url' => 'noi-lai-tinh-xua~mai-tran-lam-to-my',
      'music_title' => 'Nối Lại Tình Xưa',
      'music_artist' => 'Mai Trần Lâm;Tố My',
      'music_artist_id' => '21917;18402',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538969759,
      'music_last_update_time' => 1470191581,
      'music_title_search' => 'noi lai tinh xua',
      'music_artist_search' => '; mai chan lam; to mi;',
      'music_album_search' => '',
      'music_composer' => 'Ngân Giang',
      'music_album' => '',
      'music_listen' => 26417,
      'music_track_id' => 0,
      'music_filename' => '1698086-3b70f050.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Về đây bên nhau, ta nối lại tình xưa
Chuyện tình mà bao năm qua, em gói ghém từng kỷ niệm
Phai nắng con đường xưa, những chiều hẹn hò mưa đổ
Mưa ướt lạnh vai anh, em thấy lòng mình xót xa.

Mùa thu...',
      'music_length' => 312,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1713501,
      'music_title_url' => 'doi-nga-chia-ly~thanh-tuyen',
      'music_title' => 'Đôi Ngả Chia Ly',
      'music_artist' => 'Thanh Tuyền',
      'music_artist_id' => '4009',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538560137,
      'music_last_update_time' => 1474956294,
      'music_title_search' => 'doi nga chia li',
      'music_artist_search' => '; thanh tin;',
      'music_album_search' => '',
      'music_composer' => 'Khánh Băng',
      'music_album' => '',
      'music_listen' => 60019,
      'music_track_id' => 0,
      'music_filename' => '1713501-c41aef50.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Anh ơi, nép vào lòng em
Má kề bên nhau ta nhắc chuyện ngày qua
Cho mối duyên thêm mặn mà.

Anh ơi, nếu mà sau này giấc mộng không thành
Thì đành đôi ngả chia ly
Chớ đừng u sầu làm chi.

[ĐK:]
An...',
      'music_length' => 334,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    14 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1733656,
      'music_title_url' => 'sau-tim-thiep-hong-remix~khuu-huy-vu-duong-hong-loan',
      'music_title' => 'Sầu Tím Thiệp Hồng (Remix)',
      'music_artist' => 'Khưu Huy Vũ;Dương Hồng Loan',
      'music_artist_id' => '3166;4293',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538992809,
      'music_last_update_time' => 1477576157,
      'music_title_search' => 'xau tim thip hong',
      'music_artist_search' => '; khu hi vu; dung hong loan;',
      'music_album_search' => '',
      'music_composer' => 'Minh Kỳ; Hoài Linh',
      'music_album' => '',
      'music_listen' => 58294,
      'music_track_id' => 0,
      'music_filename' => '1733656-9b3ef2f1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Từ lúc quen nhau chưa nói một lời gì
Tỏ tình ta mến nhau
Nhiều đêm ngắm sao, mơ ước duyên mình 
Suốt dời tình thắm sâu.

Nhớ thương đầy vơi, mộng thấy ai mỉm cười
Làng môi xinh tuyệt vời
Để rồi...',
      'music_length' => 227,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1745692,
      'music_title_url' => 'cho-em-gan-anh-them-chut-nua~huong-tram',
      'music_title' => 'Cho Em Gần Anh Thêm Chút Nữa',
      'music_artist' => 'Hương Tràm',
      'music_artist_id' => '2537',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538923972,
      'music_last_update_time' => 1480486962,
      'music_title_search' => 'cho em gan em them chut nua',
      'music_artist_search' => '; hung cham;',
      'music_album_search' => '',
      'music_composer' => 'Tăng Nhật Tuệ',
      'music_album' => '',
      'music_listen' => 66954,
      'music_track_id' => 0,
      'music_filename' => '1745692-d71b19e5.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Một chút nhớ anh đấy, một chút mơ chưa đầy
Một chút thương anh mà xa như khói mây
Một chút ít hơi ấm, một chút hương âm thầm
Một chút yêu thôi nằm sâu như sóng ngầm.

Một chút nhớ thành hai, một ch...',
      'music_length' => 336,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1652295,
      'music_title_url' => 'ung-hoang-phuc-mashup-hit~mmax',
      'music_title' => 'Ưng Hoàng Phúc Mashup Hit',
      'music_artist' => 'M.max',
      'music_artist_id' => '82230',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538921432,
      'music_last_update_time' => 1460431814,
      'music_title_search' => 'ung hoang phuc mathup hit',
      'music_artist_search' => '; m max;',
      'music_album_search' => '',
      'music_composer' => 'Quang Huy; Phan Mạnh Quỳnh; Nguyễn Hoài Anh',
      'music_album' => '',
      'music_listen' => 9508,
      'music_track_id' => 0,
      'music_filename' => '1652295-6f7b7278.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Có một người vẫn yêu một người
Vẫn đợi chờ dẫu cho người ấy không về
Người ta cứ nói đừng quá yêu
Người ta cứ nói đừng quá tin
Tình yêu có lúc tự tìm đến với ta trong đêm tối cô đơn.

Baby, I love...',
      'music_length' => 294,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    17 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1710969,
      'music_title_url' => 'con-duong-xua-em-di~to-my',
      'music_title' => 'Con Đường Xưa Em Đi',
      'music_artist' => 'Tố My',
      'music_artist_id' => '18402',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538965419,
      'music_last_update_time' => 1472983843,
      'music_title_search' => 'con dung xua em di',
      'music_artist_search' => '; to mi;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kỳ',
      'music_album' => '',
      'music_listen' => 40070,
      'music_track_id' => 0,
      'music_filename' => '1710969-ee7a4889.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Con đường xưa em đi
Vàng lên mái tóc thề
Ngõ hồn dâng tái tê.
 
Anh làm thơ vu quy
Khách qua đường lắng nghe 
Chuyện tình ta đã ghi.

Những mùa trăng vu quy
Vì mưa gió không về 
Chiến trường anh bư...',
      'music_length' => 301,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1714126,
      'music_title_url' => 'co-the-thoi~che-linh',
      'music_title' => 'Có Thế Thôi',
      'music_artist' => 'Chế Linh',
      'music_artist_id' => '4615',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538604647,
      'music_last_update_time' => 1473660788,
      'music_title_search' => 'co the thoi',
      'music_artist_search' => '; che linh;',
      'music_album_search' => '',
      'music_composer' => 'Văn Giảng',
      'music_album' => '',
      'music_listen' => 7338,
      'music_track_id' => 0,
      'music_filename' => '1714126-d461d710.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Thôi đừng nói làm chi khi tình yêu tan vỡ
Đừng nói làm chi, đừng nói làm chi em ơi
Em đi đường em, tôi đi đường tôi
Tình nghĩa đôi ta có thế thôi.

Đừng trách người ơi cuộc sống nổi trôi
Bóng mê đư...',
      'music_length' => 259,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    19 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1739311,
      'music_title_url' => 'tinh-that~phan-duy-anh',
      'music_title' => 'Tình Thất',
      'music_artist' => 'Phan Duy Anh',
      'music_artist_id' => '3165',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 8,
      'cover_id' => 0,
      'music_download_time' => 1539021078,
      'music_last_update_time' => 1479047119,
      'music_title_search' => 'tinh that',
      'music_artist_search' => '; phan di em;',
      'music_album_search' => '',
      'music_composer' => 'Thiên Dũng',
      'music_album' => '',
      'music_listen' => 6649,
      'music_track_id' => 0,
      'music_filename' => '1739311-eea44583.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Biết không em nơi đây là mãi mãi
Phải chăng em không muốn anh tồn tại
Bên ai rồi người vẫn vui đấy thôi
Môi mỉm cười nhưng lòng anh đau.

Cố quên đi nhưng lòng vẫn nghĩ
Trách con tim anh sao quá yế...',
      'music_length' => 335,
      'music_width' => 960,
      'music_height' => 720,
    ),
    20 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1711765,
      'music_title_url' => 'xin-goi-nhau-la-co-nhan~bang-kieu-quang-le-dan-nguyen',
      'music_title' => 'Xin Gọi Nhau Là Cố Nhân',
      'music_artist' => 'Bằng Kiều;Quang Lê;Đan Nguyên',
      'music_artist_id' => '1258;1770;2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539074606,
      'music_last_update_time' => 1474533283,
      'music_title_search' => 'xin goi nhau la co nhan',
      'music_artist_search' => '; bang kiu; quang le; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Song Ngọc',
      'music_album' => '',
      'music_listen' => 550221,
      'music_track_id' => 0,
      'music_filename' => '1711765-90773754.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Tôi trở về đây lúc đêm vừa lên
Giăng mắt trời mưa phố xưa buồn tênh
Gót mòn tìm dư hương ngày xưa
Bao nhiêu kỷ niệm êm ái
Một tình yêu thoát trên tầm tay.

2. Tôi trở về đây với con đường xưa
Đâ...',
      'music_length' => 301,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Bang-Kieu~Y3NuX2FydGlzdH4xMjU4.html">Bằng Kiều</a>, <a href="/ca-si/Quang-Le~Y3NuX2FydGlzdH4xNzcw.html">Quang Lê</a>, <a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    21 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1688201,
      'music_title_url' => 'go-cua-trai-tim~quang-le-le-quyen',
      'music_title' => 'Gõ Cửa Trái Tim',
      'music_artist' => 'Quang Lê;Lệ Quyên',
      'music_artist_id' => '1770;1662',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539004234,
      'music_last_update_time' => 1468547345,
      'music_title_search' => 'go cua chai tim',
      'music_artist_search' => '; quang le; le qin;',
      'music_album_search' => '',
      'music_composer' => 'Vinh Sử',
      'music_album' => '',
      'music_listen' => 637992,
      'music_track_id' => 0,
      'music_filename' => '1688201-b8332199.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Gõ cửa trái tim van em được vào
Dù tình xót đau chung thân huyệt đào
Ngủ vùi với chiêm bao
Nỗi niềm mắt xanh xao
Nhưng em vẫn ngóng tim anh mở cửa.

Gõ cửa trái tim sao em hững hờ
Ngõ hồn tái tê nă...',
      'music_length' => 271,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Quang-Le~Y3NuX2FydGlzdH4xNzcw.html">Quang Lê</a>, <a href="/ca-si/Le-Quyen~Y3NuX2FydGlzdH4xNjYy.html">Lệ Quyên</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    22 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1712556,
      'music_title_url' => 'lai-nho-nguoi-yeu~dan-nguyen',
      'music_title' => 'Lại Nhớ Người Yêu',
      'music_artist' => 'Đan Nguyên',
      'music_artist_id' => '2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539050850,
      'music_last_update_time' => 1474958455,
      'music_title_search' => 'lai nho ngui iu',
      'music_artist_search' => '; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Hoa; Thảo Trang',
      'music_album' => '',
      'music_listen' => 591182,
      'music_track_id' => 0,
      'music_filename' => '1712556-58342f9e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Vì sao anh nhớ em thế này
Thương nhớ đong đầy trong lòng mắt
Buổi chiều còn gặp nhau đây
Mà đêm nay nhớ như vậy
Em hỡi em có thấy có hay.

2. Tình em như núi cao biển rộng
Gom bốn phương trời xâ...',
      'music_length' => 290,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1701192,
      'music_title_url' => 'mai-tim-nhau~thien-quang-quynh-trang',
      'music_title' => 'Mãi Tìm Nhau',
      'music_artist' => 'Thiên Quang;Quỳnh Trang',
      'music_artist_id' => '4784;14182',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538837740,
      'music_last_update_time' => 1470894182,
      'music_title_search' => 'mai tim nhau',
      'music_artist_search' => '; thin quang; qinh chang;',
      'music_album_search' => '',
      'music_composer' => 'Hàn Châu',
      'music_album' => '',
      'music_listen' => 43068,
      'music_track_id' => 0,
      'music_filename' => '1701192-db92ad8e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '&quot;Biết nhớ em nhiều cũng thế thôi
Nhớ em em có nhớ gì tôi
Từ nay vui với đời sương gió
Vui với rượu nồng với chính tôi.&quot;

Hôm nay chúng mình không còn gặp nhau
Bao đêm ngồi nhớ nhung ôi là...',
      'music_length' => 288,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Thien-Quang~Y3NuX2FydGlzdH40Nzg0.html">Thiên Quang</a>, <a href="/ca-si/Quynh-Trang~Y3NuX2FydGlzdH4xNDE4Mg==.html">Quỳnh Trang</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    24 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1716085,
      'music_title_url' => 'nguoi-tinh-khong-den~quynh-trang',
      'music_title' => 'Người Tình Không Đến',
      'music_artist' => 'Quỳnh Trang',
      'music_artist_id' => '14182',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539003734,
      'music_last_update_time' => 1473903936,
      'music_title_search' => 'ngui tinh khong den',
      'music_artist_search' => '; qinh chang;',
      'music_album_search' => '',
      'music_composer' => 'Thương Ngân',
      'music_album' => '',
      'music_listen' => 72807,
      'music_track_id' => 0,
      'music_filename' => '1716085-08fa6ef3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Tôi quen biết anh giữa một đêm thật tình cờ
Sân ga vắng thưa người và ngoài kia vẫn mưa rơi
Tình chưa thành lời vì còn ngại tình gian dối
Rồi ta đã quen nhau và cho nhau phút hẹn hò.

Còi tàu vang...',
      'music_length' => 317,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Quynh-Trang~Y3NuX2FydGlzdH4xNDE4Mg==.html">Quỳnh Trang</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    25 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1623629,
      'music_title_url' => 'toi-thay-hoa-vang-tren-co-xanh~bang-kieu',
      'music_title' => 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh',
      'music_artist' => 'Bằng Kiều',
      'music_artist_id' => '1258',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539067625,
      'music_last_update_time' => 1454469068,
      'music_title_search' => 'toi thai hoa vang chen co xanh',
      'music_artist_search' => '; bang kiu;',
      'music_album_search' => '',
      'music_composer' => 'Châu Đăng Khoa',
      'music_album' => '',
      'music_listen' => 360790,
      'music_track_id' => 0,
      'music_filename' => '1623629-2592829a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Tôi thấy lặng lẽ vương sau hè
Tôi thấy ngày ấy tìm đến đây
Tôi thấy thảnh thơi như mây trời
Dần dần cứ xa rời tôi.

Tôi thấy hạnh phúc bên kia đồi
Gọi những bình yên nào ghé chơi
Cần lắm gần lắm sa...',
      'music_length' => 282,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Bang-Kieu~Y3NuX2FydGlzdH4xMjU4.html">Bằng Kiều</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1713479,
      'music_title_url' => 'chuyen-tau-hoang-hon~hoang-oanh',
      'music_title' => 'Chuyến Tàu Hoàng Hôn',
      'music_artist' => 'Hoàng Oanh',
      'music_artist_id' => '1630',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538785185,
      'music_last_update_time' => 1474956437,
      'music_title_search' => 'chin tau hoang hon',
      'music_artist_search' => '; hoang oanh;',
      'music_album_search' => '',
      'music_composer' => 'Minh Kỳ; Hoài Linh',
      'music_album' => '',
      'music_listen' => 103023,
      'music_track_id' => 0,
      'music_filename' => '1713479-2e9f0bc0.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Chiều nào, tiễn nhau đi khi bóng ngả xế tà
Hoàng hôn đến đâu đây màu tím dâng trong hồn ta
Muốn không gian ngừng tan, níu đôi chân thời gian
Ngừng trôi cho giây phút chia ly này kéo dài
Trước kh...',
      'music_length' => 364,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Hoang-Oanh~Y3NuX2FydGlzdH4xNjMw.html">Hoàng Oanh</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1744456,
      'music_title_url' => 'em-ve-tinh-khoi~ha-anh-tuan-phuong-linh',
      'music_title' => 'Em Về Tinh Khôi',
      'music_artist' => 'Hà Anh Tuấn;Phương Linh',
      'music_artist_id' => '333;2986',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538832913,
      'music_last_update_time' => 1480312708,
      'music_title_search' => 'em ve tinh khoi',
      'music_artist_search' => '; ha em tuan; phung linh;',
      'music_album_search' => '',
      'music_composer' => 'Quốc Bảo',
      'music_album' => '',
      'music_listen' => 87079,
      'music_track_id' => 0,
      'music_filename' => '1744456-246d8570.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Bờ vai ơi đừng quá nghiêng nghiêng 
Đánh rơi buổi chiều thơm ngát
Làn môi ơi đừng quá run run 
Lỡ tia nắng hồng tan mất.

Xin âu lo không về qua đây
Xin yêu thương dâng thành mê say
Xin cho ta nhìn...',
      'music_length' => 263,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Ha-Anh-Tuan~Y3NuX2FydGlzdH4zMzM=.html">Hà Anh Tuấn</a>, <a href="/ca-si/Phuong-Linh~Y3NuX2FydGlzdH4yOTg2.html">Phương Linh</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    28 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1750701,
      'music_title_url' => 'anh-nang-cua-anh-cho-em-den-ngay-mai-ost~duc-phuc',
      'music_title' => 'Ánh Nắng Của Anh (Chờ Em Đến Ngày Mai OST)',
      'music_artist' => 'Đức Phúc',
      'music_artist_id' => '15824',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539043558,
      'music_last_update_time' => 1481721557,
      'music_title_search' => 'em nang cua em; cho em den ngai mai oxt',
      'music_artist_search' => '; duc phuc;',
      'music_album_search' => '',
      'music_composer' => 'Khắc Hưng',
      'music_album' => '',
      'music_listen' => 57750,
      'music_track_id' => 0,
      'music_filename' => '1750701-d5616d9c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 265,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Duc-Phuc~Y3NuX2FydGlzdH4xNTgyNA==.html">Đức Phúc</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    29 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1753129,
      'music_title_url' => 'thao-thuc-vi-em~quang-le',
      'music_title' => 'Thao Thức Vì Em',
      'music_artist' => 'Quang Lê',
      'music_artist_id' => '1770',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538990271,
      'music_last_update_time' => 1482511335,
      'music_title_search' => 'thao thuc vi em',
      'music_artist_search' => '; quang le;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương',
      'music_album' => '',
      'music_listen' => 9800,
      'music_track_id' => 0,
      'music_filename' => '1753129-829082a1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Em ơi suốt đêm thao thức vì em
Vì lời giã từ lúc anh ra về
Rằng mai đây anh lại đến
Ước nguyện trọn một đời
Là mình luôn luôn có đôi.

2. Em ơi nhớ thương, thương nhớ cả đêm
Làm sao quên được ph...',
      'music_length' => 223,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Quang-Le~Y3NuX2FydGlzdH4xNzcw.html">Quang Lê</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1624309,
      'music_title_url' => 'con-duong-xua-em-di-live~quang-le-le-quyen',
      'music_title' => 'Con Đường Xưa Em Đi (Live)',
      'music_artist' => 'Quang Lê;Lệ Quyên',
      'music_artist_id' => '1770;1662',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538905771,
      'music_last_update_time' => 1454566773,
      'music_title_search' => 'con dung xua em di; live',
      'music_artist_search' => '; quang le; le qin;',
      'music_album_search' => '',
      'music_composer' => 'Lam Phương',
      'music_album' => '',
      'music_listen' => 285341,
      'music_track_id' => 0,
      'music_filename' => '1624309-bc4a3cc7.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Con đường xưa em đi
Vàng lên mái tóc thề
Ngõ hồn dâng tái tê.
 
Anh làm thơ vu quy
Khách qua đường lắng nghe 
Chuyện tình ta đã ghi.

Những mùa trăng vu quy
Vì mưa gió không về 
Chiến trường anh bư...',
      'music_length' => 274,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Quang-Le~Y3NuX2FydGlzdH4xNzcw.html">Quang Lê</a>, <a href="/ca-si/Le-Quyen~Y3NuX2FydGlzdH4xNjYy.html">Lệ Quyên</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1669597,
      'music_title_url' => 'that-tinh~trinh-dinh-quang',
      'music_title' => 'Thất Tình',
      'music_artist' => 'Trịnh Đình Quang',
      'music_artist_id' => '3914',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538742290,
      'music_last_update_time' => 1465149264,
      'music_title_search' => 'that tinh',
      'music_artist_search' => '; chinh dinh quang;',
      'music_album_search' => '',
      'music_composer' => 'Hoàng Đạo',
      'music_album' => '',
      'music_listen' => 249428,
      'music_track_id' => 0,
      'music_filename' => '1669597-3211e84d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Anh đã không giữ được nhiều hạnh phúc cho em
Nhiều khi giận nhau nước mắt em cứ rơi thật nhiều
Anh xin lỗi em hãy tha thứ cho anh lần này
Đừng rời xa anh em nói đi em rất yêu anh.

Nhưng nay cuộc s...',
      'music_length' => 345,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Trinh-Dinh-Quang~Y3NuX2FydGlzdH4zOTE0.html">Trịnh Đình Quang</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    32 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1698086,
      'music_title_url' => 'noi-lai-tinh-xua~mai-tran-lam-to-my',
      'music_title' => 'Nối Lại Tình Xưa',
      'music_artist' => 'Mai Trần Lâm;Tố My',
      'music_artist_id' => '21917;18402',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538969759,
      'music_last_update_time' => 1470191581,
      'music_title_search' => 'noi lai tinh xua',
      'music_artist_search' => '; mai chan lam; to mi;',
      'music_album_search' => '',
      'music_composer' => 'Ngân Giang',
      'music_album' => '',
      'music_listen' => 26417,
      'music_track_id' => 0,
      'music_filename' => '1698086-3b70f050.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Về đây bên nhau, ta nối lại tình xưa
Chuyện tình mà bao năm qua, em gói ghém từng kỷ niệm
Phai nắng con đường xưa, những chiều hẹn hò mưa đổ
Mưa ướt lạnh vai anh, em thấy lòng mình xót xa.

Mùa thu...',
      'music_length' => 312,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Mai-Tran-Lam~Y3NuX2FydGlzdH4yMTkxNw==.html">Mai Trần Lâm</a>, <a href="/ca-si/To-My~Y3NuX2FydGlzdH4xODQwMg==.html">Tố My</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1713501,
      'music_title_url' => 'doi-nga-chia-ly~thanh-tuyen',
      'music_title' => 'Đôi Ngả Chia Ly',
      'music_artist' => 'Thanh Tuyền',
      'music_artist_id' => '4009',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538560137,
      'music_last_update_time' => 1474956294,
      'music_title_search' => 'doi nga chia li',
      'music_artist_search' => '; thanh tin;',
      'music_album_search' => '',
      'music_composer' => 'Khánh Băng',
      'music_album' => '',
      'music_listen' => 60019,
      'music_track_id' => 0,
      'music_filename' => '1713501-c41aef50.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Anh ơi, nép vào lòng em
Má kề bên nhau ta nhắc chuyện ngày qua
Cho mối duyên thêm mặn mà.

Anh ơi, nếu mà sau này giấc mộng không thành
Thì đành đôi ngả chia ly
Chớ đừng u sầu làm chi.

[ĐK:]
An...',
      'music_length' => 334,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Thanh-Tuyen~Y3NuX2FydGlzdH40MDA5.html">Thanh Tuyền</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    34 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1733656,
      'music_title_url' => 'sau-tim-thiep-hong-remix~khuu-huy-vu-duong-hong-loan',
      'music_title' => 'Sầu Tím Thiệp Hồng (Remix)',
      'music_artist' => 'Khưu Huy Vũ;Dương Hồng Loan',
      'music_artist_id' => '3166;4293',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538992809,
      'music_last_update_time' => 1477576157,
      'music_title_search' => 'xau tim thip hong',
      'music_artist_search' => '; khu hi vu; dung hong loan;',
      'music_album_search' => '',
      'music_composer' => 'Minh Kỳ; Hoài Linh',
      'music_album' => '',
      'music_listen' => 58294,
      'music_track_id' => 0,
      'music_filename' => '1733656-9b3ef2f1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Từ lúc quen nhau chưa nói một lời gì
Tỏ tình ta mến nhau
Nhiều đêm ngắm sao, mơ ước duyên mình 
Suốt dời tình thắm sâu.

Nhớ thương đầy vơi, mộng thấy ai mỉm cười
Làng môi xinh tuyệt vời
Để rồi...',
      'music_length' => 227,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Khuu-Huy-Vu~Y3NuX2FydGlzdH4zMTY2.html">Khưu Huy Vũ</a>, <a href="/ca-si/Duong-Hong-Loan~Y3NuX2FydGlzdH40Mjkz.html">Dương Hồng Loan</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1745692,
      'music_title_url' => 'cho-em-gan-anh-them-chut-nua~huong-tram',
      'music_title' => 'Cho Em Gần Anh Thêm Chút Nữa',
      'music_artist' => 'Hương Tràm',
      'music_artist_id' => '2537',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538923972,
      'music_last_update_time' => 1480486962,
      'music_title_search' => 'cho em gan em them chut nua',
      'music_artist_search' => '; hung cham;',
      'music_album_search' => '',
      'music_composer' => 'Tăng Nhật Tuệ',
      'music_album' => '',
      'music_listen' => 66954,
      'music_track_id' => 0,
      'music_filename' => '1745692-d71b19e5.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Một chút nhớ anh đấy, một chút mơ chưa đầy
Một chút thương anh mà xa như khói mây
Một chút ít hơi ấm, một chút hương âm thầm
Một chút yêu thôi nằm sâu như sóng ngầm.

Một chút nhớ thành hai, một ch...',
      'music_length' => 336,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Huong-Tram~Y3NuX2FydGlzdH4yNTM3.html">Hương Tràm</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1652295,
      'music_title_url' => 'ung-hoang-phuc-mashup-hit~mmax',
      'music_title' => 'Ưng Hoàng Phúc Mashup Hit',
      'music_artist' => 'M.max',
      'music_artist_id' => '82230',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538921432,
      'music_last_update_time' => 1460431814,
      'music_title_search' => 'ung hoang phuc mathup hit',
      'music_artist_search' => '; m max;',
      'music_album_search' => '',
      'music_composer' => 'Quang Huy; Phan Mạnh Quỳnh; Nguyễn Hoài Anh',
      'music_album' => '',
      'music_listen' => 9508,
      'music_track_id' => 0,
      'music_filename' => '1652295-6f7b7278.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Có một người vẫn yêu một người
Vẫn đợi chờ dẫu cho người ấy không về
Người ta cứ nói đừng quá yêu
Người ta cứ nói đừng quá tin
Tình yêu có lúc tự tìm đến với ta trong đêm tối cô đơn.

Baby, I love...',
      'music_length' => 294,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Mmax~Y3NuX2FydGlzdH44MjIzMA==.html">M.max</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    37 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1710969,
      'music_title_url' => 'con-duong-xua-em-di~to-my',
      'music_title' => 'Con Đường Xưa Em Đi',
      'music_artist' => 'Tố My',
      'music_artist_id' => '18402',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538965419,
      'music_last_update_time' => 1472983843,
      'music_title_search' => 'con dung xua em di',
      'music_artist_search' => '; to mi;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kỳ',
      'music_album' => '',
      'music_listen' => 40070,
      'music_track_id' => 0,
      'music_filename' => '1710969-ee7a4889.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Con đường xưa em đi
Vàng lên mái tóc thề
Ngõ hồn dâng tái tê.
 
Anh làm thơ vu quy
Khách qua đường lắng nghe 
Chuyện tình ta đã ghi.

Những mùa trăng vu quy
Vì mưa gió không về 
Chiến trường anh bư...',
      'music_length' => 301,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/To-My~Y3NuX2FydGlzdH4xODQwMg==.html">Tố My</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1714126,
      'music_title_url' => 'co-the-thoi~che-linh',
      'music_title' => 'Có Thế Thôi',
      'music_artist' => 'Chế Linh',
      'music_artist_id' => '4615',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538604647,
      'music_last_update_time' => 1473660788,
      'music_title_search' => 'co the thoi',
      'music_artist_search' => '; che linh;',
      'music_album_search' => '',
      'music_composer' => 'Văn Giảng',
      'music_album' => '',
      'music_listen' => 7338,
      'music_track_id' => 0,
      'music_filename' => '1714126-d461d710.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Thôi đừng nói làm chi khi tình yêu tan vỡ
Đừng nói làm chi, đừng nói làm chi em ơi
Em đi đường em, tôi đi đường tôi
Tình nghĩa đôi ta có thế thôi.

Đừng trách người ơi cuộc sống nổi trôi
Bóng mê đư...',
      'music_length' => 259,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Che-Linh~Y3NuX2FydGlzdH40NjE1.html">Chế Linh</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    39 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1739311,
      'music_title_url' => 'tinh-that~phan-duy-anh',
      'music_title' => 'Tình Thất',
      'music_artist' => 'Phan Duy Anh',
      'music_artist_id' => '3165',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 8,
      'cover_id' => 0,
      'music_download_time' => 1539021078,
      'music_last_update_time' => 1479047119,
      'music_title_search' => 'tinh that',
      'music_artist_search' => '; phan di em;',
      'music_album_search' => '',
      'music_composer' => 'Thiên Dũng',
      'music_album' => '',
      'music_listen' => 6649,
      'music_track_id' => 0,
      'music_filename' => '1739311-eea44583.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Biết không em nơi đây là mãi mãi
Phải chăng em không muốn anh tồn tại
Bên ai rồi người vẫn vui đấy thôi
Môi mỉm cười nhưng lòng anh đau.

Cố quên đi nhưng lòng vẫn nghĩ
Trách con tim anh sao quá yế...',
      'music_length' => 335,
      'music_width' => 960,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/Phan-Duy-Anh~Y3NuX2FydGlzdH4zMTY1.html">Phan Duy Anh</a>',
      'music_bitrate_html' => '<span style="color: darkblue">960x720</span>',
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1705727,
      'music_title_url' => 'let-me-love-you~atc-alex-goot',
      'music_title' => 'Let Me Love You',
      'music_artist' => 'ATC;Alex Goot',
      'music_artist_id' => '5607;21523',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538756605,
      'music_last_update_time' => 1480496704,
      'music_title_search' => 'let me love iou',
      'music_artist_search' => '; atc; alex got;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 34479,
      'music_track_id' => 1,
      'music_filename' => '1705727-556e353f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Don\'t fall asleep
At the wheel, we\'ve got a million miles ahead of us
Miles ahead of us
All that we need
Is a rude awakening to know we\'re good enough
Know we\'re good enough.

Say, go through th...',
      'music_length' => 213,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    1 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1747086,
      'music_title_url' => 'alone~alan-walker',
      'music_title' => 'Alone',
      'music_artist' => 'Alan Walker',
      'music_artist_id' => '14991',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538994517,
      'music_last_update_time' => 1503292603,
      'music_title_search' => 'alone',
      'music_artist_search' => '; alan walker;',
      'music_album_search' => '',
      'music_composer' => 'Fredrik Borch Olsen; Jonnali Parmenius; Alan Walker; Jesper Borgen Anders Froen; Mood Melodies; Gunnar Greve',
      'music_album' => '',
      'music_listen' => 512762,
      'music_track_id' => 0,
      'music_filename' => '1747086-912c4a3e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Lost in your mind
[t1]Lạc lối giữa tâm trí anh
I wanna know
[t1]Và em muốn biết
Am I losing my mind?
[t1]Phải chăng em đang đánh mất chính mình?
Never let me go.
[t1]Xin đừng để em rời xa.

If t...',
      'music_length' => 163,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1678754,
      'music_title_url' => 'this-is-what-you-came-for~calvin-harris-rihanna',
      'music_title' => 'This Is What You Came For',
      'music_artist' => 'Calvin Harris;Rihanna',
      'music_artist_id' => '2474;587',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538898027,
      'music_last_update_time' => 1466842864,
      'music_title_search' => 'thix ix what iou came for',
      'music_artist_search' => '; calvin harix; rihana;',
      'music_album_search' => '',
      'music_composer' => 'Calvin Harris; Kuk Harrell',
      'music_album' => '',
      'music_listen' => 37562,
      'music_track_id' => 0,
      'music_filename' => '1678754-de3a2ad8.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Baby, this is what you came for
Lightning strikes every time she moves
And everybody\'s watching her
But she\'s looking at you, oh, oh
You, oh, oh, you, oh, oh
You, oh, oh, you, oh, oh
You, oh, oh, o...',
      'music_length' => 238,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1707088,
      'music_title_url' => 'in-the-name-of-love~martin-garrix-bebe-rexha',
      'music_title' => 'In The Name Of Love',
      'music_artist' => 'Martin Garrix;Bebe Rexha',
      'music_artist_id' => '13343;14088',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538740121,
      'music_last_update_time' => 1473309823,
      'music_title_search' => 'in the name of love',
      'music_artist_search' => '; martin garix; bebe rexha;',
      'music_album_search' => '',
      'music_composer' => 'Martijn Garritsen; Matthew Radosevich; Ruth Anne Cunningham; Stephen Philibin; Ilsey Juber; Yael Nahar',
      'music_album' => '',
      'music_listen' => 88803,
      'music_track_id' => 1,
      'music_filename' => '1707088-13e0de4f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
If I told you this was only gonna hurt
If I warned you that the fire\'s gonna burn
Would you walk in? Would you let me do it first?
Do it all in the name of love
Would you let me lead you...',
      'music_length' => 205,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1678305,
      'music_title_url' => 'sing-me-to-sleep~alan-walker',
      'music_title' => 'Sing Me To Sleep',
      'music_artist' => 'Alan Walker',
      'music_artist_id' => '14991',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538641068,
      'music_last_update_time' => 1471323188,
      'music_title_search' => 'xing me to xlep',
      'music_artist_search' => '; alan walker;',
      'music_album_search' => '',
      'music_composer' => 'Tommy La Verdi; Alan Walker; Iselin Solheim; Jesper Borgen; Anders Froen; Magnus Bertelsen; Gunnar Greve',
      'music_album' => '',
      'music_listen' => 312843,
      'music_track_id' => 0,
      'music_filename' => '1678305-98fe17a6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wait a second, let me catch my breath
Remind me how it feels to hear your voice
Your lips are moving, I can\'t hear a thing
Living life as if we had a choice.

Anywhere, anytime
I would do anything...',
      'music_length' => 191,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1715790,
      'music_title_url' => 'send-it-lyric-video~austin-mahone-rich-homie-quan',
      'music_title' => 'Send It (Lyric Video)',
      'music_artist' => 'Austin Mahone;Rich Homie Quan',
      'music_artist_id' => '4439;41528',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538751007,
      'music_last_update_time' => 1473903751,
      'music_title_search' => 'xend it; liric video',
      'music_artist_search' => '; auxtin mahone; rich homi quan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3922,
      'music_track_id' => 0,
      'music_filename' => '1715790-0f664c30.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Chorus:]
Send it to my phone, send it to my phone
You already know I keep it on the low
Baby, you can trust me, promise I\'m alone
I won\'t tell a soul, send it to my phone
Send it to my phone, send...',
      'music_length' => 180,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    6 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1730900,
      'music_title_url' => 'rockabye~clean-bandit-sean-paul-anne-marie',
      'music_title' => 'Rockabye',
      'music_artist' => 'Clean Bandit;Sean Paul;Anne-Marie',
      'music_artist_id' => '13836;257;13369',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539028868,
      'music_last_update_time' => 1477415134,
      'music_title_search' => 'rockabi',
      'music_artist_search' => '; clean bandit; xean paul; ane mari;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 42157,
      'music_track_id' => 0,
      'music_filename' => '1730900-4ce4054e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'She works the night, by the water
She\'s gon\' to stress, so far away
From her father\'s daughter
She just wants a life for her baby
All on her own, no one will come
She\'s got to save him
She says, uh...',
      'music_length' => 253,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1743236,
      'music_title_url' => 'dust-my-shoulders-off~jane-zhang',
      'music_title' => 'Dust My Shoulders Off',
      'music_artist' => 'Jane Zhang',
      'music_artist_id' => '8440',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538693968,
      'music_last_update_time' => 1479772320,
      'music_title_search' => 'duxt mi thoulderx of',
      'music_artist_search' => '; jane zhang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1587,
      'music_track_id' => 0,
      'music_filename' => '1743236-d94302a2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Just had a bad day
Had car trouble on the highway
My stupid boss don\'t like me
Spilled hot coffee on my blue jeans
I\'m low on money and ain\'t shit funny
But it\'s still sunny outside
So I keep smili...',
      'music_length' => 220,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1799974,
      'music_title_url' => 'oceans-away~a-r-i-z-o-n-a',
      'music_title' => 'Oceans Away',
      'music_artist' => 'A R I Z O N A',
      'music_artist_id' => '21979',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538878712,
      'music_last_update_time' => 1498444031,
      'music_title_search' => 'oceanx awai',
      'music_artist_search' => '; a r i z o n a;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2413,
      'music_track_id' => 0,
      'music_filename' => '1799974-06ae1650.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
I never let
My guard go down
But you messed me up
When you came around
When the high wore off
Know you needed space
But I don\'t wanna wait
I don\'t wanna mistake.

[Pre-Chorus:]
Few thous...',
      'music_length' => 195,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1672913,
      'music_title_url' => 'the-show-must-go-on-live~celine-dion-lindsey-stirling',
      'music_title' => 'The Show Must Go On (Live)',
      'music_artist' => 'Celine Dion;Lindsey Stirling',
      'music_artist_id' => '192;19015',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538469001,
      'music_last_update_time' => 1464410645,
      'music_title_search' => 'the thow muxt go on; live',
      'music_artist_search' => '; celine dion; lindxei xtirling;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2721,
      'music_track_id' => 15,
      'music_filename' => '1672913-362fce4e.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '[Verse 1:]
Empty spaces, what are we living for?
Abandoned places, I guess we know the score
On and on, does anybody know what we are looking for?
Another hero, another mindless crime
Behind the cu...',
      'music_length' => 334,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1678581,
      'music_title_url' => 'pop-songs-world-2016~dj-konsky',
      'music_title' => 'Pop Songs World 2016',
      'music_artist' => 'DJ Konsky',
      'music_artist_id' => '85769',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538845730,
      'music_last_update_time' => 1466855111,
      'music_title_search' => 'pop xongx world 2016',
      'music_artist_search' => '; dj konxki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1544,
      'music_track_id' => 0,
      'music_filename' => '1678581-023426e4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 365,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1681350,
      'music_title_url' => 'work-from-home-live~fifth-harmony',
      'music_title' => 'Work From Home (Live)',
      'music_artist' => 'Fifth Harmony',
      'music_artist_id' => '15680',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538454357,
      'music_last_update_time' => 1488947837,
      'music_title_search' => 'work from home; live',
      'music_artist_search' => '; fifth harmoni;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1506,
      'music_track_id' => 0,
      'music_filename' => '1681350-9dad8536.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'I ain\'t worried \'bout nothin\'
I ain\'t wearin\' na nada
I\'m sittin\' pretty, impatient, but I know you gotta
Put in them hours, I\'mma make it harder
I\'m sending pic after picture, I\'mma get you fired....',
      'music_length' => 239,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1686870,
      'music_title_url' => 'hymn-for-the-weekend-remix~alan-walker-beyonce',
      'music_title' => 'Hymn For The Weekend (Remix)',
      'music_artist' => 'Alan Walker;Beyoncé',
      'music_artist_id' => '14991;889',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538541768,
      'music_last_update_time' => 1472457078,
      'music_title_search' => 'himn for the wekend',
      'music_artist_search' => '; alan walker; beionce;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 17920,
      'music_track_id' => 0,
      'music_filename' => '1686870-cf8ad3c7.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Drink from me, drink from me
Then we\'ll shoot across the sky
Symphony
Then we\'ll shoot across the sky
We\'re on a...
Drink from me, drink from me
Then we\'ll shoot across the sky
Symphony
(So high, s...',
      'music_length' => 230,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1694764,
      'music_title_url' => 'second-nature~stalking-gia',
      'music_title' => 'Second Nature',
      'music_artist' => 'Stalking Gia',
      'music_artist_id' => '73440',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538893951,
      'music_last_update_time' => 1469606528,
      'music_title_search' => 'xecond nature',
      'music_artist_search' => '; xtalking da;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 700,
      'music_track_id' => 0,
      'music_filename' => '1694764-a05d6c3f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
Hear me baby
I\'m about to rain
And I\'m so tired I can\'t get out of my own way
I\'m at the height of my anxiety
I know you love me but I\'m just searching for security.

[Pre-Chorus:]
Memor...',
      'music_length' => 246,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1721112,
      'music_title_url' => 'this-town~niall-horan',
      'music_title' => 'This Town',
      'music_artist' => 'Niall Horan',
      'music_artist_id' => '18887',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538538898,
      'music_last_update_time' => 1475244924,
      'music_title_search' => 'thix town',
      'music_artist_search' => '; nial horan;',
      'music_album_search' => '',
      'music_composer' => 'Niall Horan; Jamie Scott; Mike Needle; Daniel Bryer',
      'music_album' => '',
      'music_listen' => 10958,
      'music_track_id' => 0,
      'music_filename' => '1721112-c754c491.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
Waking up to kiss you and nobody\'s there
The smell of your perfume still stuck in the air
It\'s hard
Yesterday I thought I saw your shadow running round
It\'s funny how things never change...',
      'music_length' => 229,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1732597,
      'music_title_url' => 'closer~the-chainsmokers-halsey',
      'music_title' => 'Closer',
      'music_artist' => 'The Chainsmokers;Halsey',
      'music_artist_id' => '13339;13350',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538580827,
      'music_last_update_time' => 1480650646,
      'music_title_search' => 'cloxer',
      'music_artist_search' => '; the chainxmokerx; halxei;',
      'music_album_search' => '',
      'music_composer' => 'Andrew Taggart; Shaun Frank; Frederic Kennett',
      'music_album' => '',
      'music_listen' => 56071,
      'music_track_id' => 0,
      'music_filename' => '1732597-3fcda6c0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Hey, I was doing just fine just before I met you
I drank too much and that\'s an issue but I\'m okay
Hey, you tell your friends it was nice to meet them
But I hope I never see them again.

I know...',
      'music_length' => 246,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1734003,
      'music_title_url' => 'my-way~calvin-harris',
      'music_title' => 'My Way',
      'music_artist' => 'Calvin Harris',
      'music_artist_id' => '2474',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505923,
      'music_last_update_time' => 1478149187,
      'music_title_search' => 'mi wai',
      'music_artist_search' => '; calvin harix;',
      'music_album_search' => '',
      'music_composer' => 'Calvin Harris',
      'music_album' => '',
      'music_listen' => 6770,
      'music_track_id' => 0,
      'music_filename' => '1734003-814342f0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Why wait to say, at least I did it my way
Lie awake, two faced
But in my heart I understand
I made my move and it was all about you
Now I feel so far removed.

[Chorus:]
You were the one thing in m...',
      'music_length' => 244,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    17 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1747016,
      'music_title_url' => 'sleep-on-the-floor~the-lumineers',
      'music_title' => 'Sleep On The Floor',
      'music_artist' => 'The Lumineers',
      'music_artist_id' => '25034',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538986717,
      'music_last_update_time' => 1480681966,
      'music_title_search' => 'xlep on the flor',
      'music_artist_search' => '; the luminerx;',
      'music_album_search' => '',
      'music_composer' => 'Wesley Schultz; Jeremiah Fraites',
      'music_album' => '',
      'music_listen' => 521,
      'music_track_id' => 0,
      'music_filename' => '1747016-b3734ed7.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Pack yourself a toothbrush dear
Pack yourself a favorite blouse
Take a withdrawal slip
Take all of your savings out
\'Cause if we don\'t leave this town
We might never make it out
I was not born to d...',
      'music_length' => 285,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1748741,
      'music_title_url' => 'starboy-victorias-secret-fashion-show-2016~the-weeknd',
      'music_title' => 'Starboy (Victoria\'s Secret Fashion Show 2016)',
      'music_artist' => 'The Weeknd',
      'music_artist_id' => '14618',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538505224,
      'music_last_update_time' => 1481109036,
      'music_title_search' => 'xtarboi; victoria x xecret fathion thow 2016',
      'music_artist_search' => '; the weknd;',
      'music_album_search' => '',
      'music_composer' => 'Abel Tesfaye; Thomas Bangalter; Guy-Manuel de Homem-Christo; Martin McKinney; Henry Russell Walter',
      'music_album' => '',
      'music_listen' => 12133,
      'music_track_id' => 0,
      'music_filename' => '1748741-6833edbf.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I\'m tryna put you in the worst mood, ah
P1 cleaner than your church shoes, ah
Milli point two just to hurt you, ah
All red Lamb\' just to tease you, ah
None of these toys on lease too, ah
Made yo...',
      'music_length' => 243,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1748481,
      'music_title_url' => '24k-magic-victorias-secret-fashion-show-2016~bruno-mars',
      'music_title' => '24K Magic (Victoria\'s Secret Fashion Show 2016)',
      'music_artist' => 'Bruno Mars',
      'music_artist_id' => '2001',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538764477,
      'music_last_update_time' => 1482118203,
      'music_title_search' => '24k madc; victoria x xecret fathion thow 2016',
      'music_artist_search' => '; bruno marx;',
      'music_album_search' => '',
      'music_composer' => 'Christopher Brody Brown; Bruno Mars; Phillip Lawrence; Tom Coyne; Shampoo Press; Curl',
      'music_album' => '',
      'music_listen' => 6810,
      'music_track_id' => 0,
      'music_filename' => '1748481-b7ceec36.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
Tonight
I just want to take you higher
Throw your hands up in the sky
Let\'s set this party off right.

[Chorus:]
Players, put yo\' pinky rings up to the moon
Girls, what y\'all trying to do?...',
      'music_length' => 224,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1705727,
      'music_title_url' => 'let-me-love-you~atc-alex-goot',
      'music_title' => 'Let Me Love You',
      'music_artist' => 'ATC;Alex Goot',
      'music_artist_id' => '5607;21523',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538756605,
      'music_last_update_time' => 1480496704,
      'music_title_search' => 'let me love iou',
      'music_artist_search' => '; atc; alex got;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 34479,
      'music_track_id' => 1,
      'music_filename' => '1705727-556e353f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Don\'t fall asleep
At the wheel, we\'ve got a million miles ahead of us
Miles ahead of us
All that we need
Is a rude awakening to know we\'re good enough
Know we\'re good enough.

Say, go through th...',
      'music_length' => 213,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/ATC~Y3NuX2FydGlzdH41NjA3.html">ATC</a>, <a href="/ca-si/Alex-Goot~Y3NuX2FydGlzdH4yMTUyMw==.html">Alex Goot</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    21 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1747086,
      'music_title_url' => 'alone~alan-walker',
      'music_title' => 'Alone',
      'music_artist' => 'Alan Walker',
      'music_artist_id' => '14991',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538994517,
      'music_last_update_time' => 1503292603,
      'music_title_search' => 'alone',
      'music_artist_search' => '; alan walker;',
      'music_album_search' => '',
      'music_composer' => 'Fredrik Borch Olsen; Jonnali Parmenius; Alan Walker; Jesper Borgen Anders Froen; Mood Melodies; Gunnar Greve',
      'music_album' => '',
      'music_listen' => 512762,
      'music_track_id' => 0,
      'music_filename' => '1747086-912c4a3e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Lost in your mind
[t1]Lạc lối giữa tâm trí anh
I wanna know
[t1]Và em muốn biết
Am I losing my mind?
[t1]Phải chăng em đang đánh mất chính mình?
Never let me go.
[t1]Xin đừng để em rời xa.

If t...',
      'music_length' => 163,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Alan-Walker~Y3NuX2FydGlzdH4xNDk5MQ==.html">Alan Walker</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1678754,
      'music_title_url' => 'this-is-what-you-came-for~calvin-harris-rihanna',
      'music_title' => 'This Is What You Came For',
      'music_artist' => 'Calvin Harris;Rihanna',
      'music_artist_id' => '2474;587',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538898027,
      'music_last_update_time' => 1466842864,
      'music_title_search' => 'thix ix what iou came for',
      'music_artist_search' => '; calvin harix; rihana;',
      'music_album_search' => '',
      'music_composer' => 'Calvin Harris; Kuk Harrell',
      'music_album' => '',
      'music_listen' => 37562,
      'music_track_id' => 0,
      'music_filename' => '1678754-de3a2ad8.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Baby, this is what you came for
Lightning strikes every time she moves
And everybody\'s watching her
But she\'s looking at you, oh, oh
You, oh, oh, you, oh, oh
You, oh, oh, you, oh, oh
You, oh, oh, o...',
      'music_length' => 238,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Calvin-Harris~Y3NuX2FydGlzdH4yNDc0.html">Calvin Harris</a>, <a href="/ca-si/Rihanna~Y3NuX2FydGlzdH41ODc=.html">Rihanna</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1707088,
      'music_title_url' => 'in-the-name-of-love~martin-garrix-bebe-rexha',
      'music_title' => 'In The Name Of Love',
      'music_artist' => 'Martin Garrix;Bebe Rexha',
      'music_artist_id' => '13343;14088',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538740121,
      'music_last_update_time' => 1473309823,
      'music_title_search' => 'in the name of love',
      'music_artist_search' => '; martin garix; bebe rexha;',
      'music_album_search' => '',
      'music_composer' => 'Martijn Garritsen; Matthew Radosevich; Ruth Anne Cunningham; Stephen Philibin; Ilsey Juber; Yael Nahar',
      'music_album' => '',
      'music_listen' => 88803,
      'music_track_id' => 1,
      'music_filename' => '1707088-13e0de4f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
If I told you this was only gonna hurt
If I warned you that the fire\'s gonna burn
Would you walk in? Would you let me do it first?
Do it all in the name of love
Would you let me lead you...',
      'music_length' => 205,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Martin-Garrix~Y3NuX2FydGlzdH4xMzM0Mw==.html">Martin Garrix</a>, <a href="/ca-si/Bebe-Rexha~Y3NuX2FydGlzdH4xNDA4OA==.html">Bebe Rexha</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1678305,
      'music_title_url' => 'sing-me-to-sleep~alan-walker',
      'music_title' => 'Sing Me To Sleep',
      'music_artist' => 'Alan Walker',
      'music_artist_id' => '14991',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538641068,
      'music_last_update_time' => 1471323188,
      'music_title_search' => 'xing me to xlep',
      'music_artist_search' => '; alan walker;',
      'music_album_search' => '',
      'music_composer' => 'Tommy La Verdi; Alan Walker; Iselin Solheim; Jesper Borgen; Anders Froen; Magnus Bertelsen; Gunnar Greve',
      'music_album' => '',
      'music_listen' => 312843,
      'music_track_id' => 0,
      'music_filename' => '1678305-98fe17a6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wait a second, let me catch my breath
Remind me how it feels to hear your voice
Your lips are moving, I can\'t hear a thing
Living life as if we had a choice.

Anywhere, anytime
I would do anything...',
      'music_length' => 191,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Alan-Walker~Y3NuX2FydGlzdH4xNDk5MQ==.html">Alan Walker</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1715790,
      'music_title_url' => 'send-it-lyric-video~austin-mahone-rich-homie-quan',
      'music_title' => 'Send It (Lyric Video)',
      'music_artist' => 'Austin Mahone;Rich Homie Quan',
      'music_artist_id' => '4439;41528',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538751007,
      'music_last_update_time' => 1473903751,
      'music_title_search' => 'xend it; liric video',
      'music_artist_search' => '; auxtin mahone; rich homi quan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3922,
      'music_track_id' => 0,
      'music_filename' => '1715790-0f664c30.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Chorus:]
Send it to my phone, send it to my phone
You already know I keep it on the low
Baby, you can trust me, promise I\'m alone
I won\'t tell a soul, send it to my phone
Send it to my phone, send...',
      'music_length' => 180,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Austin-Mahone~Y3NuX2FydGlzdH40NDM5.html">Austin Mahone</a>, <a href="/ca-si/Rich-Homie-Quan~Y3NuX2FydGlzdH40MTUyOA==.html">Rich Homie Quan</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    26 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1730900,
      'music_title_url' => 'rockabye~clean-bandit-sean-paul-anne-marie',
      'music_title' => 'Rockabye',
      'music_artist' => 'Clean Bandit;Sean Paul;Anne-Marie',
      'music_artist_id' => '13836;257;13369',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539028868,
      'music_last_update_time' => 1477415134,
      'music_title_search' => 'rockabi',
      'music_artist_search' => '; clean bandit; xean paul; ane mari;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 42157,
      'music_track_id' => 0,
      'music_filename' => '1730900-4ce4054e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'She works the night, by the water
She\'s gon\' to stress, so far away
From her father\'s daughter
She just wants a life for her baby
All on her own, no one will come
She\'s got to save him
She says, uh...',
      'music_length' => 253,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Clean-Bandit~Y3NuX2FydGlzdH4xMzgzNg==.html">Clean Bandit</a>, <a href="/ca-si/Sean-Paul~Y3NuX2FydGlzdH4yNTc=.html">Sean Paul</a>, <a href="/ca-si/Anne-Marie~Y3NuX2FydGlzdH4xMzM2OQ==.html">Anne-Marie</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1743236,
      'music_title_url' => 'dust-my-shoulders-off~jane-zhang',
      'music_title' => 'Dust My Shoulders Off',
      'music_artist' => 'Jane Zhang',
      'music_artist_id' => '8440',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538693968,
      'music_last_update_time' => 1479772320,
      'music_title_search' => 'duxt mi thoulderx of',
      'music_artist_search' => '; jane zhang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1587,
      'music_track_id' => 0,
      'music_filename' => '1743236-d94302a2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Just had a bad day
Had car trouble on the highway
My stupid boss don\'t like me
Spilled hot coffee on my blue jeans
I\'m low on money and ain\'t shit funny
But it\'s still sunny outside
So I keep smili...',
      'music_length' => 220,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Jane-Zhang~Y3NuX2FydGlzdH44NDQw.html">Jane Zhang</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1799974,
      'music_title_url' => 'oceans-away~a-r-i-z-o-n-a',
      'music_title' => 'Oceans Away',
      'music_artist' => 'A R I Z O N A',
      'music_artist_id' => '21979',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538878712,
      'music_last_update_time' => 1498444031,
      'music_title_search' => 'oceanx awai',
      'music_artist_search' => '; a r i z o n a;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2413,
      'music_track_id' => 0,
      'music_filename' => '1799974-06ae1650.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
I never let
My guard go down
But you messed me up
When you came around
When the high wore off
Know you needed space
But I don\'t wanna wait
I don\'t wanna mistake.

[Pre-Chorus:]
Few thous...',
      'music_length' => 195,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/A-R-I-Z-O-N-A~Y3NuX2FydGlzdH4yMTk3OQ==.html">A R I Z O N A</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1672913,
      'music_title_url' => 'the-show-must-go-on-live~celine-dion-lindsey-stirling',
      'music_title' => 'The Show Must Go On (Live)',
      'music_artist' => 'Celine Dion;Lindsey Stirling',
      'music_artist_id' => '192;19015',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538469001,
      'music_last_update_time' => 1464410645,
      'music_title_search' => 'the thow muxt go on; live',
      'music_artist_search' => '; celine dion; lindxei xtirling;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2721,
      'music_track_id' => 15,
      'music_filename' => '1672913-362fce4e.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '[Verse 1:]
Empty spaces, what are we living for?
Abandoned places, I guess we know the score
On and on, does anybody know what we are looking for?
Another hero, another mindless crime
Behind the cu...',
      'music_length' => 334,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Celine-Dion~Y3NuX2FydGlzdH4xOTI=.html">Celine Dion</a>, <a href="/ca-si/Lindsey-Stirling~Y3NuX2FydGlzdH4xOTAxNQ==.html">Lindsey Stirling</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1678581,
      'music_title_url' => 'pop-songs-world-2016~dj-konsky',
      'music_title' => 'Pop Songs World 2016',
      'music_artist' => 'DJ Konsky',
      'music_artist_id' => '85769',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538845730,
      'music_last_update_time' => 1466855111,
      'music_title_search' => 'pop xongx world 2016',
      'music_artist_search' => '; dj konxki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1544,
      'music_track_id' => 0,
      'music_filename' => '1678581-023426e4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 365,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/DJ-Konsky~Y3NuX2FydGlzdH44NTc2OQ==.html">DJ Konsky</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1681350,
      'music_title_url' => 'work-from-home-live~fifth-harmony',
      'music_title' => 'Work From Home (Live)',
      'music_artist' => 'Fifth Harmony',
      'music_artist_id' => '15680',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538454357,
      'music_last_update_time' => 1488947837,
      'music_title_search' => 'work from home; live',
      'music_artist_search' => '; fifth harmoni;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1506,
      'music_track_id' => 0,
      'music_filename' => '1681350-9dad8536.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'I ain\'t worried \'bout nothin\'
I ain\'t wearin\' na nada
I\'m sittin\' pretty, impatient, but I know you gotta
Put in them hours, I\'mma make it harder
I\'m sending pic after picture, I\'mma get you fired....',
      'music_length' => 239,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Fifth-Harmony~Y3NuX2FydGlzdH4xNTY4MA==.html">Fifth Harmony</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1686870,
      'music_title_url' => 'hymn-for-the-weekend-remix~alan-walker-beyonce',
      'music_title' => 'Hymn For The Weekend (Remix)',
      'music_artist' => 'Alan Walker;Beyoncé',
      'music_artist_id' => '14991;889',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538541768,
      'music_last_update_time' => 1472457078,
      'music_title_search' => 'himn for the wekend',
      'music_artist_search' => '; alan walker; beionce;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 17920,
      'music_track_id' => 0,
      'music_filename' => '1686870-cf8ad3c7.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Drink from me, drink from me
Then we\'ll shoot across the sky
Symphony
Then we\'ll shoot across the sky
We\'re on a...
Drink from me, drink from me
Then we\'ll shoot across the sky
Symphony
(So high, s...',
      'music_length' => 230,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/Alan-Walker~Y3NuX2FydGlzdH4xNDk5MQ==.html">Alan Walker</a>, <a href="/ca-si/Beyonce~Y3NuX2FydGlzdH44ODk=.html">Beyoncé</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1694764,
      'music_title_url' => 'second-nature~stalking-gia',
      'music_title' => 'Second Nature',
      'music_artist' => 'Stalking Gia',
      'music_artist_id' => '73440',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538893951,
      'music_last_update_time' => 1469606528,
      'music_title_search' => 'xecond nature',
      'music_artist_search' => '; xtalking da;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 700,
      'music_track_id' => 0,
      'music_filename' => '1694764-a05d6c3f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
Hear me baby
I\'m about to rain
And I\'m so tired I can\'t get out of my own way
I\'m at the height of my anxiety
I know you love me but I\'m just searching for security.

[Pre-Chorus:]
Memor...',
      'music_length' => 246,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Stalking-Gia~Y3NuX2FydGlzdH43MzQ0MA==.html">Stalking Gia</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1721112,
      'music_title_url' => 'this-town~niall-horan',
      'music_title' => 'This Town',
      'music_artist' => 'Niall Horan',
      'music_artist_id' => '18887',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538538898,
      'music_last_update_time' => 1475244924,
      'music_title_search' => 'thix town',
      'music_artist_search' => '; nial horan;',
      'music_album_search' => '',
      'music_composer' => 'Niall Horan; Jamie Scott; Mike Needle; Daniel Bryer',
      'music_album' => '',
      'music_listen' => 10958,
      'music_track_id' => 0,
      'music_filename' => '1721112-c754c491.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
Waking up to kiss you and nobody\'s there
The smell of your perfume still stuck in the air
It\'s hard
Yesterday I thought I saw your shadow running round
It\'s funny how things never change...',
      'music_length' => 229,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Niall-Horan~Y3NuX2FydGlzdH4xODg4Nw==.html">Niall Horan</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1732597,
      'music_title_url' => 'closer~the-chainsmokers-halsey',
      'music_title' => 'Closer',
      'music_artist' => 'The Chainsmokers;Halsey',
      'music_artist_id' => '13339;13350',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538580827,
      'music_last_update_time' => 1480650646,
      'music_title_search' => 'cloxer',
      'music_artist_search' => '; the chainxmokerx; halxei;',
      'music_album_search' => '',
      'music_composer' => 'Andrew Taggart; Shaun Frank; Frederic Kennett',
      'music_album' => '',
      'music_listen' => 56071,
      'music_track_id' => 0,
      'music_filename' => '1732597-3fcda6c0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Hey, I was doing just fine just before I met you
I drank too much and that\'s an issue but I\'m okay
Hey, you tell your friends it was nice to meet them
But I hope I never see them again.

I know...',
      'music_length' => 246,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/The-Chainsmokers~Y3NuX2FydGlzdH4xMzMzOQ==.html">The Chainsmokers</a>, <a href="/ca-si/Halsey~Y3NuX2FydGlzdH4xMzM1MA==.html">Halsey</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1734003,
      'music_title_url' => 'my-way~calvin-harris',
      'music_title' => 'My Way',
      'music_artist' => 'Calvin Harris',
      'music_artist_id' => '2474',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538505923,
      'music_last_update_time' => 1478149187,
      'music_title_search' => 'mi wai',
      'music_artist_search' => '; calvin harix;',
      'music_album_search' => '',
      'music_composer' => 'Calvin Harris',
      'music_album' => '',
      'music_listen' => 6770,
      'music_track_id' => 0,
      'music_filename' => '1734003-814342f0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Why wait to say, at least I did it my way
Lie awake, two faced
But in my heart I understand
I made my move and it was all about you
Now I feel so far removed.

[Chorus:]
You were the one thing in m...',
      'music_length' => 244,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Calvin-Harris~Y3NuX2FydGlzdH4yNDc0.html">Calvin Harris</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    37 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1747016,
      'music_title_url' => 'sleep-on-the-floor~the-lumineers',
      'music_title' => 'Sleep On The Floor',
      'music_artist' => 'The Lumineers',
      'music_artist_id' => '25034',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538986717,
      'music_last_update_time' => 1480681966,
      'music_title_search' => 'xlep on the flor',
      'music_artist_search' => '; the luminerx;',
      'music_album_search' => '',
      'music_composer' => 'Wesley Schultz; Jeremiah Fraites',
      'music_album' => '',
      'music_listen' => 521,
      'music_track_id' => 0,
      'music_filename' => '1747016-b3734ed7.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Pack yourself a toothbrush dear
Pack yourself a favorite blouse
Take a withdrawal slip
Take all of your savings out
\'Cause if we don\'t leave this town
We might never make it out
I was not born to d...',
      'music_length' => 285,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/The-Lumineers~Y3NuX2FydGlzdH4yNTAzNA==.html">The Lumineers</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1748741,
      'music_title_url' => 'starboy-victorias-secret-fashion-show-2016~the-weeknd',
      'music_title' => 'Starboy (Victoria\'s Secret Fashion Show 2016)',
      'music_artist' => 'The Weeknd',
      'music_artist_id' => '14618',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538505224,
      'music_last_update_time' => 1481109036,
      'music_title_search' => 'xtarboi; victoria x xecret fathion thow 2016',
      'music_artist_search' => '; the weknd;',
      'music_album_search' => '',
      'music_composer' => 'Abel Tesfaye; Thomas Bangalter; Guy-Manuel de Homem-Christo; Martin McKinney; Henry Russell Walter',
      'music_album' => '',
      'music_listen' => 12133,
      'music_track_id' => 0,
      'music_filename' => '1748741-6833edbf.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I\'m tryna put you in the worst mood, ah
P1 cleaner than your church shoes, ah
Milli point two just to hurt you, ah
All red Lamb\' just to tease you, ah
None of these toys on lease too, ah
Made yo...',
      'music_length' => 243,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/The-Weeknd~Y3NuX2FydGlzdH4xNDYxOA==.html">The Weeknd</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1748481,
      'music_title_url' => '24k-magic-victorias-secret-fashion-show-2016~bruno-mars',
      'music_title' => '24K Magic (Victoria\'s Secret Fashion Show 2016)',
      'music_artist' => 'Bruno Mars',
      'music_artist_id' => '2001',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538764477,
      'music_last_update_time' => 1482118203,
      'music_title_search' => '24k madc; victoria x xecret fathion thow 2016',
      'music_artist_search' => '; bruno marx;',
      'music_album_search' => '',
      'music_composer' => 'Christopher Brody Brown; Bruno Mars; Phillip Lawrence; Tom Coyne; Shampoo Press; Curl',
      'music_album' => '',
      'music_listen' => 6810,
      'music_track_id' => 0,
      'music_filename' => '1748481-b7ceec36.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
Tonight
I just want to take you higher
Throw your hands up in the sky
Let\'s set this party off right.

[Chorus:]
Players, put yo\' pinky rings up to the moon
Girls, what y\'all trying to do?...',
      'music_length' => 224,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Bruno-Mars~Y3NuX2FydGlzdH4yMDAx.html">Bruno Mars</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
  ),
  3 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1815747,
      'music_title_url' => 'a-little-happiness-live~dien-phuc-chan',
      'music_title' => 'A Little Happiness (小幸運) (Live)',
      'music_artist' => 'Điền Phức Chân',
      'music_artist_id' => '13729',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538450791,
      'music_last_update_time' => 1502672176,
      'music_title_search' => 'a litle hapinex; 小幸運 ; live',
      'music_artist_search' => '; din phuc chan;',
      'music_album_search' => '',
      'music_composer' => 'Đang cập nhật',
      'music_album' => '',
      'music_listen' => 2578,
      'music_track_id' => 0,
      'music_filename' => '1815747-ad974a44.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wǒ tīngjiàn yǔdī luò zài qīngqīng cǎodì
Wǒ tīngjiàn yuǎnfāng xiàkè zhōng shēng xiǎngqǐ
Kěshì wǒ méiyǒu tīngjiàn nǐ de shēngyīn
Rènzhēn hūhuàn wǒ xìngmíng.

Ài shàng nǐ de shíhòu hái bù dǒng gǎnqíng...',
      'music_length' => 266,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1640985,
      'music_title_url' => 'loi-that-long-qua-mao-hiem~tfboys',
      'music_title' => 'Lời Thật Lòng Quá Mạo Hiểm (真心话太冒险)',
      'music_artist' => 'TFBoys',
      'music_artist_id' => '21510',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538486066,
      'music_last_update_time' => 1458615478,
      'music_title_search' => 'loi that long qua mao him; 真心话太冒险',
      'music_artist_search' => '; tfboix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11057,
      'music_track_id' => 0,
      'music_filename' => '1640985-eab7ca2a.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'Qí guài nǐ ài xiǎo gǒu 
Qí guài nǐ zǒng shén yóu 
Zǒng shì huàn xiǎng nǚ shēng zhǎng zhǎng hēi fā 
Dài nǐ zǒu ba.

Yóu xì jué zhàn dào tiān liàng 
Hēi yǎn quān jiū jí jìn huà 
Áo yè tài kě pà kuài...',
      'music_length' => 230,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1704138,
      'music_title_url' => 'lotto-chinese-version~exo',
      'music_title' => 'Lotto (Chinese Version)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538716907,
      'music_last_update_time' => 1471581797,
      'music_title_search' => 'loto; chinexe verxion',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3997,
      'music_track_id' => 0,
      'music_filename' => '1704138-742a2d60.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Yeah! Yeah yeah yeah, yeah yeah yeah
Yeah, oh yeah yeah oh yeah yeah yeah.

Líkāi zhīqián wǒ liú xià kèyì àimèi de shìxiàn
Wǒ lǐjiě ài nǐ de chóumǎ cǐkè fēngkuáng biāo gāo
Wǒ yǐ bèi jīngyàn oh yeah...',
      'music_length' => 201,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1760172,
      'music_title_url' => 'hands-up-handsome~michiyo-ho',
      'music_title' => 'Hands Up Handsome (男神请举手!)',
      'music_artist' => 'Michiyo Ho',
      'music_artist_id' => '93898',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516014712,
      'music_last_update_time' => 1487066330,
      'music_title_search' => 'handx up handxome; 男神请举手',
      'music_artist_search' => '; michio ho;',
      'music_album_search' => '',
      'music_composer' => 'Namewee',
      'music_album' => '',
      'music_listen' => 16000,
      'music_track_id' => 0,
      'music_filename' => '1760172-a52bb912.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '哥哥们在高岗上 勤奋地在播种
妹妹随着小溪流 洗衣裳挑水桶
在叹啊 在盼啊 为情郎在等候
为理想 为祖国 怎么一去就不回头

哥哥晒的红通通 汗水流在胸口
妹妹吟唱山谷中 今年又大丰收
一箩箩 大香蕉 一口接着一口
笑嘻嘻 拍拍手 咱嘻闹在花丛中

今天我没有男朋友 男神呀帅哥啊请举手
今天我没有男朋友 天菜 小鲜肉 请摆摆你的头

爱人怎么不回家 电话都打不通
妹妹Waiting for...',
      'music_length' => 300,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1623965,
      'music_title_url' => 'dung-cam~ngu-nguyet-thien',
      'music_title' => 'Dũng Cảm (勇敢)',
      'music_artist' => 'Ngũ Nguyệt Thiên',
      'music_artist_id' => '289',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530541521,
      'music_last_update_time' => 1457076440,
      'music_title_search' => 'dung cam; 勇敢',
      'music_artist_search' => '; ngu ngit thin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2388,
      'music_track_id' => 0,
      'music_filename' => '1623965-7e49cf73.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '甘讲这是失去希望的时代
Could it be that this is the era of losing hope?

甘讲这是失去期待的所在
Could it be that this is the place of losing expectation?

甘讲咱一世人只有忍耐　只有愤慨　只有无奈
Could it be that the life only has toleranc...',
      'music_length' => 289,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1630101,
      'music_title_url' => 'excited~luhan',
      'music_title' => 'Excited',
      'music_artist' => 'Luhan',
      'music_artist_id' => '17771',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529978779,
      'music_last_update_time' => 1456124160,
      'music_title_search' => 'excited',
      'music_artist_search' => '; luhan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9528,
      'music_track_id' => 0,
      'music_filename' => '1630101-18e118d4.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Rúguǒ hái kěyǐ xuǎnzé
Shīqù de guòcuò
Quándōu duìhuàn chéngwéi xìngyùn hé yòuhuò
Láibují qù bǎocún de jìyì hé chéngnuò
Shān chú liǎo jiéguǒ
Yǐjīng xuānbù guīzé yānmò xiànsuǒ
Bāngzhùle jìmò kāishǐ r...',
      'music_length' => 249,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1633276,
      'music_title_url' => 'shi-shang-zhi-you-mama-hao~be-tu-anh',
      'music_title' => 'Shi Shang Zhi You Mama Hao',
      'music_artist' => 'Bé Tú Anh',
      'music_artist_id' => '77778',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531581872,
      'music_last_update_time' => 1456887263,
      'music_title_search' => 'thi thang zhi iou mama hao',
      'music_artist_search' => '; be tu em;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4270,
      'music_track_id' => 0,
      'music_filename' => '1633276-1df1ccdd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 178,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1635786,
      'music_title_url' => 'long-tam-chien-ky~eunjung',
      'music_title' => 'Long Tâm Chiến Kỷ (龙心战记)',
      'music_artist' => 'Eunjung',
      'music_artist_id' => '2153',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512552606,
      'music_last_update_time' => 1457515204,
      'music_title_search' => 'long tam chin ki; 龙心战记',
      'music_artist_search' => '; eunjung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3459,
      'music_track_id' => 0,
      'music_filename' => '1635786-5a3ef451.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Chōng pò hēi àn de nà yī mò lí míng 
Qiān yǐn zhù wǒ men cháo zhe xī wàng yī lù qián jìn 
Dāng yǎn lèi róng huà bú xìng 
Dāng mìng yùn chén rù hǎi dǐ 
Face  our  destiny
Wǒ duì míng tiān xǔ xià yuē...',
      'music_length' => 90,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1639375,
      'music_title_url' => 'night-butterfly~snh48',
      'music_title' => 'Night Butterfly (夜蝶)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519213020,
      'music_last_update_time' => 1458201731,
      'music_title_search' => 'night buterfli; 夜蝶',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '星四芭',
      'music_album' => '',
      'music_listen' => 12713,
      'music_track_id' => 1,
      'music_filename' => '1639375-2043d8ea.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '悄悄的 今晚相遇这里

不要向任何人提起

要保密

悄悄的 来到隐秘之地

接下来 做什么事情

ＡＨ月光在辉映 这般妖娆

ＡＨ云雾变得浓密 邀请了你

来到了这里

你有什么目的

在这迷人少女花园里

黑暗的夜 原来蕴藏这般甜蜜

不知…不觉…

这危险却已成禁忌

一步一步 心跳不息

是否原意 当然愿意

充满危险的游戏

无意间两双对质的眼睛

为何 为何

沉默让彼此更坚定...',
      'music_length' => 356,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1643937,
      'music_title_url' => 'chuong-gio-nho~chau-dong-vu',
      'music_title' => 'Chuông Gió Nhỏ',
      'music_artist' => 'Châu Đông Vũ',
      'music_artist_id' => '81225',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512391012,
      'music_last_update_time' => 1459144843,
      'music_title_search' => 'chung do nho',
      'music_artist_search' => '; chau dong vu;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3531,
      'music_track_id' => 0,
      'music_filename' => '1643937-ddef6c67.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_length' => 170,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1646191,
      'music_title_url' => 'sketch-chinese-version~hyomin',
      'music_title' => 'Sketch (Chinese Version)',
      'music_artist' => 'Hyomin',
      'music_artist_id' => '3663',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530290142,
      'music_last_update_time' => 1459523782,
      'music_title_search' => 'xketch; chinexe verxion',
      'music_artist_search' => '; hiomin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4009,
      'music_track_id' => 0,
      'music_filename' => '1646191-36d0ce3b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'I\'ll be your canvas
You draw me all night long
看到你 迷人微笑 baby
心動的那一秒正
Drive me crazy
你单纯像孩子一样
能看你的内心
Right now right now
好想问你 幻想 画面
是否像梦里一样
快讲给我听
那天月光 跟随着我和你
帮我记录 这一秒
这一秒 你眼中的我
Babe
是我们两人一起去完成这美丽素描...',
      'music_length' => 203,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1646491,
      'music_title_url' => 'nguon-dong-luc~snh48',
      'music_title' => 'Nguồn Động Lực (源动力)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1459778723,
      'music_last_update_time' => 1459520369,
      'music_title_search' => 'ngun dong luc; 源动力',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 228,
      'music_track_id' => 1,
      'music_filename' => '1646491-de7ef787.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_length' => 206,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1646782,
      'music_title_url' => 'nguon-dong-luc~snh48',
      'music_title' => 'Nguồn Động Lực (源动力)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533404922,
      'music_last_update_time' => 1459517183,
      'music_title_search' => 'ngun dong luc; 源动力',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4910,
      'music_track_id' => 1,
      'music_filename' => '1646782-ca7bf5c0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 225,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1650364,
      'music_title_url' => 'nho-ma-khong-the-noi~thinh-nhat-luan-thoi-tu-cach',
      'music_title' => 'Nhớ Mà Không Thể Nói (可念不可说)',
      'music_artist' => 'Thịnh Nhất Luân;Thôi Tử Cách',
      'music_artist_id' => '76864;14926',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533375460,
      'music_last_update_time' => 1460087561,
      'music_title_search' => 'nho ma khong the noi; 可念不可说',
      'music_artist_search' => '; thinh nhat luan; thoi tu cach;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6585,
      'music_track_id' => 0,
      'music_filename' => '1650364-13c1d1b0.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_length' => 288,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1651756,
      'music_title_url' => 'call-me-baby-love-me-right-chinese-version-16th-top-chinese-music-awards~exo',
      'music_title' => 'Call Me Baby; Love Me Right (Chinese Version) (16th Top Chinese Music Awards)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1529916893,
      'music_last_update_time' => 1460432765,
      'music_title_search' => 'cal me babi; love me right; chinexe verxion ; 16th top chinexe muxic awardx',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4186,
      'music_track_id' => 0,
      'music_filename' => '1651756-9f1ed7c1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Call Me Baby]

Call me baby zheng tiao jie xuan nao le qi lai
Call me baby mei yi ge ren mo sheng de cun zai
Call me baby zai yi qi de mei ge shun jian
Like boom boom boom boom boom what up.

Hey...',
      'music_length' => 510,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1653125,
      'music_title_url' => 'melos-no-michi~snh48-team-x',
      'music_title' => 'Melos no Michi (梅洛斯之路)',
      'music_artist' => 'SNH48  Team X',
      'music_artist_id' => '82392',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1501261971,
      'music_last_update_time' => 1460615848,
      'music_title_search' => 'melox no michi; 梅洛斯之路',
      'music_artist_search' => '; xnh48 team x;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3198,
      'music_track_id' => 1,
      'music_filename' => '1653125-7d3766b5.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_length' => 341,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1655154,
      'music_title_url' => 'buoc-cham-cham~hua-nguy-chau',
      'music_title' => 'Bước Chầm Chậm',
      'music_artist' => 'Hứa Nguỵ Châu',
      'music_artist_id' => '15011',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532444701,
      'music_last_update_time' => 1461053965,
      'music_title_search' => 'buc cham cham',
      'music_artist_search' => '; hua ngi chau;',
      'music_album_search' => '',
      'music_composer' => 'Hứa Nguỵ Châu',
      'music_album' => '',
      'music_listen' => 10112,
      'music_track_id' => 0,
      'music_filename' => '1655154-5685b6f9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Huan huan zheng kai shui jiu de yan
Hei an zhong liang qui ni lian
Wo bu zhi gai ru he mian dui
Zhe sheng huo de tu ru qi bian
Wo zong xiang zheng tuo
Bu gai shu yu wo de shou
Ni que bao jin wo
Sho...',
      'music_length' => 299,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1672837,
      'music_title_url' => 'dao-mong-tuong~snh48',
      'music_title' => 'Đảo Mộng Tưởng (梦想岛)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1527402409,
      'music_last_update_time' => 1464404592,
      'music_title_search' => 'dao mong tung; 梦想岛',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7687,
      'music_track_id' => 1,
      'music_filename' => '1672837-3aa79a6d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'HEY```````OHH````````

追寻着我的梦想出发

漂洋过海暂别了繁华

心中的梦想岛就在那

和大自然拥抱对话

穿越热情撒哈拉

把我融化

探访古老金字塔

揭开奇迹 神秘的面纱

青春的嘉年华

诗和远方在哪

沿着尼罗河

一路到麦加

世界踩在脚下

梦想不要问代价

我的梦不止一克拉

Oh……Oh……

Oh……Oh……

海天一色连成一幅画

微风吹过轻抚我...',
      'music_length' => 309,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1673480,
      'music_title_url' => 'monodrama~lay',
      'music_title' => 'Monodrama',
      'music_artist' => 'LAY',
      'music_artist_id' => '85210',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530892059,
      'music_last_update_time' => 1464587313,
      'music_title_search' => 'monodrama',
      'music_artist_search' => '; lai;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5686,
      'music_track_id' => 0,
      'music_filename' => '1673480-2a543472.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Jing jing de, wo ling ting zhe
Wo xie de ge lue dai xie hui se
Ba ai qiao qiao fang jin kou dai
Rang suo you de ren kan bu chu lai.

Bu xiang yan zhe chang xi
Wo zhi dao zhe jie ju
Zui hou wo hui s...',
      'music_length' => 253,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1675852,
      'music_title_url' => 'dao-mong-tuong-dance-version~snh48',
      'music_title' => 'Đảo Mộng Tưởng (梦想岛) (Dance Version)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1510403474,
      'music_last_update_time' => 1466840625,
      'music_title_search' => 'dao mong tung; 梦想岛 ; dance verxion',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7035,
      'music_track_id' => 1,
      'music_filename' => '1675852-e1f40253.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'HEY```````OHH````````

追寻着我的梦想出发

漂洋过海暂别了繁华

心中的梦想岛就在那

和大自然拥抱对话

穿越热情撒哈拉

把我融化

探访古老金字塔

揭开奇迹 神秘的面纱

青春的嘉年华

诗和远方在哪

沿着尼罗河

一路到麦加

世界踩在脚下

梦想不要问代价

我的梦不止一克拉

Oh……Oh……

Oh……Oh……

海天一色连成一幅画

微风吹过轻抚我...',
      'music_length' => 214,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1815747,
      'music_title_url' => 'a-little-happiness-live~dien-phuc-chan',
      'music_title' => 'A Little Happiness (小幸運) (Live)',
      'music_artist' => 'Điền Phức Chân',
      'music_artist_id' => '13729',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538450791,
      'music_last_update_time' => 1502672176,
      'music_title_search' => 'a litle hapinex; 小幸運 ; live',
      'music_artist_search' => '; din phuc chan;',
      'music_album_search' => '',
      'music_composer' => 'Đang cập nhật',
      'music_album' => '',
      'music_listen' => 2578,
      'music_track_id' => 0,
      'music_filename' => '1815747-ad974a44.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wǒ tīngjiàn yǔdī luò zài qīngqīng cǎodì
Wǒ tīngjiàn yuǎnfāng xiàkè zhōng shēng xiǎngqǐ
Kěshì wǒ méiyǒu tīngjiàn nǐ de shēngyīn
Rènzhēn hūhuàn wǒ xìngmíng.

Ài shàng nǐ de shíhòu hái bù dǒng gǎnqíng...',
      'music_length' => 266,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Dien-Phuc-Chan~Y3NuX2FydGlzdH4xMzcyOQ==.html">Điền Phức Chân</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1640985,
      'music_title_url' => 'loi-that-long-qua-mao-hiem~tfboys',
      'music_title' => 'Lời Thật Lòng Quá Mạo Hiểm (真心话太冒险)',
      'music_artist' => 'TFBoys',
      'music_artist_id' => '21510',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538486066,
      'music_last_update_time' => 1458615478,
      'music_title_search' => 'loi that long qua mao him; 真心话太冒险',
      'music_artist_search' => '; tfboix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11057,
      'music_track_id' => 0,
      'music_filename' => '1640985-eab7ca2a.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'Qí guài nǐ ài xiǎo gǒu 
Qí guài nǐ zǒng shén yóu 
Zǒng shì huàn xiǎng nǚ shēng zhǎng zhǎng hēi fā 
Dài nǐ zǒu ba.

Yóu xì jué zhàn dào tiān liàng 
Hēi yǎn quān jiū jí jìn huà 
Áo yè tài kě pà kuài...',
      'music_length' => 230,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/TFBoys~Y3NuX2FydGlzdH4yMTUxMA==.html">TFBoys</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1704138,
      'music_title_url' => 'lotto-chinese-version~exo',
      'music_title' => 'Lotto (Chinese Version)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538716907,
      'music_last_update_time' => 1471581797,
      'music_title_search' => 'loto; chinexe verxion',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3997,
      'music_track_id' => 0,
      'music_filename' => '1704138-742a2d60.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Yeah! Yeah yeah yeah, yeah yeah yeah
Yeah, oh yeah yeah oh yeah yeah yeah.

Líkāi zhīqián wǒ liú xià kèyì àimèi de shìxiàn
Wǒ lǐjiě ài nǐ de chóumǎ cǐkè fēngkuáng biāo gāo
Wǒ yǐ bèi jīngyàn oh yeah...',
      'music_length' => 201,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1760172,
      'music_title_url' => 'hands-up-handsome~michiyo-ho',
      'music_title' => 'Hands Up Handsome (男神请举手!)',
      'music_artist' => 'Michiyo Ho',
      'music_artist_id' => '93898',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1516014712,
      'music_last_update_time' => 1487066330,
      'music_title_search' => 'handx up handxome; 男神请举手',
      'music_artist_search' => '; michio ho;',
      'music_album_search' => '',
      'music_composer' => 'Namewee',
      'music_album' => '',
      'music_listen' => 16000,
      'music_track_id' => 0,
      'music_filename' => '1760172-a52bb912.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '哥哥们在高岗上 勤奋地在播种
妹妹随着小溪流 洗衣裳挑水桶
在叹啊 在盼啊 为情郎在等候
为理想 为祖国 怎么一去就不回头

哥哥晒的红通通 汗水流在胸口
妹妹吟唱山谷中 今年又大丰收
一箩箩 大香蕉 一口接着一口
笑嘻嘻 拍拍手 咱嘻闹在花丛中

今天我没有男朋友 男神呀帅哥啊请举手
今天我没有男朋友 天菜 小鲜肉 请摆摆你的头

爱人怎么不回家 电话都打不通
妹妹Waiting for...',
      'music_length' => 300,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Michiyo-Ho~Y3NuX2FydGlzdH45Mzg5OA==.html">Michiyo Ho</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1623965,
      'music_title_url' => 'dung-cam~ngu-nguyet-thien',
      'music_title' => 'Dũng Cảm (勇敢)',
      'music_artist' => 'Ngũ Nguyệt Thiên',
      'music_artist_id' => '289',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530541521,
      'music_last_update_time' => 1457076440,
      'music_title_search' => 'dung cam; 勇敢',
      'music_artist_search' => '; ngu ngit thin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2388,
      'music_track_id' => 0,
      'music_filename' => '1623965-7e49cf73.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '甘讲这是失去希望的时代
Could it be that this is the era of losing hope?

甘讲这是失去期待的所在
Could it be that this is the place of losing expectation?

甘讲咱一世人只有忍耐　只有愤慨　只有无奈
Could it be that the life only has toleranc...',
      'music_length' => 289,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Ngu-Nguyet-Thien~Y3NuX2FydGlzdH4yODk=.html">Ngũ Nguyệt Thiên</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1630101,
      'music_title_url' => 'excited~luhan',
      'music_title' => 'Excited',
      'music_artist' => 'Luhan',
      'music_artist_id' => '17771',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529978779,
      'music_last_update_time' => 1456124160,
      'music_title_search' => 'excited',
      'music_artist_search' => '; luhan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9528,
      'music_track_id' => 0,
      'music_filename' => '1630101-18e118d4.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Rúguǒ hái kěyǐ xuǎnzé
Shīqù de guòcuò
Quándōu duìhuàn chéngwéi xìngyùn hé yòuhuò
Láibují qù bǎocún de jìyì hé chéngnuò
Shān chú liǎo jiéguǒ
Yǐjīng xuānbù guīzé yānmò xiànsuǒ
Bāngzhùle jìmò kāishǐ r...',
      'music_length' => 249,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Luhan~Y3NuX2FydGlzdH4xNzc3MQ==.html">Luhan</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1633276,
      'music_title_url' => 'shi-shang-zhi-you-mama-hao~be-tu-anh',
      'music_title' => 'Shi Shang Zhi You Mama Hao',
      'music_artist' => 'Bé Tú Anh',
      'music_artist_id' => '77778',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531581872,
      'music_last_update_time' => 1456887263,
      'music_title_search' => 'thi thang zhi iou mama hao',
      'music_artist_search' => '; be tu em;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4270,
      'music_track_id' => 0,
      'music_filename' => '1633276-1df1ccdd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 178,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Be-Tu-Anh~Y3NuX2FydGlzdH43Nzc3OA==.html">Bé Tú Anh</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1635786,
      'music_title_url' => 'long-tam-chien-ky~eunjung',
      'music_title' => 'Long Tâm Chiến Kỷ (龙心战记)',
      'music_artist' => 'Eunjung',
      'music_artist_id' => '2153',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512552606,
      'music_last_update_time' => 1457515204,
      'music_title_search' => 'long tam chin ki; 龙心战记',
      'music_artist_search' => '; eunjung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3459,
      'music_track_id' => 0,
      'music_filename' => '1635786-5a3ef451.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Chōng pò hēi àn de nà yī mò lí míng 
Qiān yǐn zhù wǒ men cháo zhe xī wàng yī lù qián jìn 
Dāng yǎn lèi róng huà bú xìng 
Dāng mìng yùn chén rù hǎi dǐ 
Face  our  destiny
Wǒ duì míng tiān xǔ xià yuē...',
      'music_length' => 90,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Eunjung~Y3NuX2FydGlzdH4yMTUz.html">Eunjung</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1639375,
      'music_title_url' => 'night-butterfly~snh48',
      'music_title' => 'Night Butterfly (夜蝶)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1519213020,
      'music_last_update_time' => 1458201731,
      'music_title_search' => 'night buterfli; 夜蝶',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '星四芭',
      'music_album' => '',
      'music_listen' => 12713,
      'music_track_id' => 1,
      'music_filename' => '1639375-2043d8ea.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '悄悄的 今晚相遇这里

不要向任何人提起

要保密

悄悄的 来到隐秘之地

接下来 做什么事情

ＡＨ月光在辉映 这般妖娆

ＡＨ云雾变得浓密 邀请了你

来到了这里

你有什么目的

在这迷人少女花园里

黑暗的夜 原来蕴藏这般甜蜜

不知…不觉…

这危险却已成禁忌

一步一步 心跳不息

是否原意 当然愿意

充满危险的游戏

无意间两双对质的眼睛

为何 为何

沉默让彼此更坚定...',
      'music_length' => 356,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SNH48~Y3NuX2FydGlzdH4xNTk2Ng==.html">SNH48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1643937,
      'music_title_url' => 'chuong-gio-nho~chau-dong-vu',
      'music_title' => 'Chuông Gió Nhỏ',
      'music_artist' => 'Châu Đông Vũ',
      'music_artist_id' => '81225',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512391012,
      'music_last_update_time' => 1459144843,
      'music_title_search' => 'chung do nho',
      'music_artist_search' => '; chau dong vu;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3531,
      'music_track_id' => 0,
      'music_filename' => '1643937-ddef6c67.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_length' => 170,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/Chau-Dong-Vu~Y3NuX2FydGlzdH44MTIyNQ==.html">Châu Đông Vũ</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1646191,
      'music_title_url' => 'sketch-chinese-version~hyomin',
      'music_title' => 'Sketch (Chinese Version)',
      'music_artist' => 'Hyomin',
      'music_artist_id' => '3663',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530290142,
      'music_last_update_time' => 1459523782,
      'music_title_search' => 'xketch; chinexe verxion',
      'music_artist_search' => '; hiomin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4009,
      'music_track_id' => 0,
      'music_filename' => '1646191-36d0ce3b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'I\'ll be your canvas
You draw me all night long
看到你 迷人微笑 baby
心動的那一秒正
Drive me crazy
你单纯像孩子一样
能看你的内心
Right now right now
好想问你 幻想 画面
是否像梦里一样
快讲给我听
那天月光 跟随着我和你
帮我记录 这一秒
这一秒 你眼中的我
Babe
是我们两人一起去完成这美丽素描...',
      'music_length' => 203,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Hyomin~Y3NuX2FydGlzdH4zNjYz.html">Hyomin</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1646491,
      'music_title_url' => 'nguon-dong-luc~snh48',
      'music_title' => 'Nguồn Động Lực (源动力)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1459778723,
      'music_last_update_time' => 1459520369,
      'music_title_search' => 'ngun dong luc; 源动力',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 228,
      'music_track_id' => 1,
      'music_filename' => '1646491-de7ef787.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_length' => 206,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/SNH48~Y3NuX2FydGlzdH4xNTk2Ng==.html">SNH48</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1646782,
      'music_title_url' => 'nguon-dong-luc~snh48',
      'music_title' => 'Nguồn Động Lực (源动力)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533404922,
      'music_last_update_time' => 1459517183,
      'music_title_search' => 'ngun dong luc; 源动力',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4910,
      'music_track_id' => 1,
      'music_filename' => '1646782-ca7bf5c0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 225,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SNH48~Y3NuX2FydGlzdH4xNTk2Ng==.html">SNH48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1650364,
      'music_title_url' => 'nho-ma-khong-the-noi~thinh-nhat-luan-thoi-tu-cach',
      'music_title' => 'Nhớ Mà Không Thể Nói (可念不可说)',
      'music_artist' => 'Thịnh Nhất Luân;Thôi Tử Cách',
      'music_artist_id' => '76864;14926',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533375460,
      'music_last_update_time' => 1460087561,
      'music_title_search' => 'nho ma khong the noi; 可念不可说',
      'music_artist_search' => '; thinh nhat luan; thoi tu cach;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6585,
      'music_track_id' => 0,
      'music_filename' => '1650364-13c1d1b0.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_length' => 288,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/Thinh-Nhat-Luan~Y3NuX2FydGlzdH43Njg2NA==.html">Thịnh Nhất Luân</a>, <a href="/ca-si/Thoi-Tu-Cach~Y3NuX2FydGlzdH4xNDkyNg==.html">Thôi Tử Cách</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1651756,
      'music_title_url' => 'call-me-baby-love-me-right-chinese-version-16th-top-chinese-music-awards~exo',
      'music_title' => 'Call Me Baby; Love Me Right (Chinese Version) (16th Top Chinese Music Awards)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1529916893,
      'music_last_update_time' => 1460432765,
      'music_title_search' => 'cal me babi; love me right; chinexe verxion ; 16th top chinexe muxic awardx',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4186,
      'music_track_id' => 0,
      'music_filename' => '1651756-9f1ed7c1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Call Me Baby]

Call me baby zheng tiao jie xuan nao le qi lai
Call me baby mei yi ge ren mo sheng de cun zai
Call me baby zai yi qi de mei ge shun jian
Like boom boom boom boom boom what up.

Hey...',
      'music_length' => 510,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1653125,
      'music_title_url' => 'melos-no-michi~snh48-team-x',
      'music_title' => 'Melos no Michi (梅洛斯之路)',
      'music_artist' => 'SNH48  Team X',
      'music_artist_id' => '82392',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1501261971,
      'music_last_update_time' => 1460615848,
      'music_title_search' => 'melox no michi; 梅洛斯之路',
      'music_artist_search' => '; xnh48 team x;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3198,
      'music_track_id' => 1,
      'music_filename' => '1653125-7d3766b5.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_length' => 341,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SNH48-Team-X~Y3NuX2FydGlzdH44MjM5Mg==.html">SNH48  Team X</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1655154,
      'music_title_url' => 'buoc-cham-cham~hua-nguy-chau',
      'music_title' => 'Bước Chầm Chậm',
      'music_artist' => 'Hứa Nguỵ Châu',
      'music_artist_id' => '15011',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532444701,
      'music_last_update_time' => 1461053965,
      'music_title_search' => 'buc cham cham',
      'music_artist_search' => '; hua ngi chau;',
      'music_album_search' => '',
      'music_composer' => 'Hứa Nguỵ Châu',
      'music_album' => '',
      'music_listen' => 10112,
      'music_track_id' => 0,
      'music_filename' => '1655154-5685b6f9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Huan huan zheng kai shui jiu de yan
Hei an zhong liang qui ni lian
Wo bu zhi gai ru he mian dui
Zhe sheng huo de tu ru qi bian
Wo zong xiang zheng tuo
Bu gai shu yu wo de shou
Ni que bao jin wo
Sho...',
      'music_length' => 299,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Hua-Nguy-Chau~Y3NuX2FydGlzdH4xNTAxMQ==.html">Hứa Nguỵ Châu</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1672837,
      'music_title_url' => 'dao-mong-tuong~snh48',
      'music_title' => 'Đảo Mộng Tưởng (梦想岛)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1527402409,
      'music_last_update_time' => 1464404592,
      'music_title_search' => 'dao mong tung; 梦想岛',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7687,
      'music_track_id' => 1,
      'music_filename' => '1672837-3aa79a6d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'HEY```````OHH````````

追寻着我的梦想出发

漂洋过海暂别了繁华

心中的梦想岛就在那

和大自然拥抱对话

穿越热情撒哈拉

把我融化

探访古老金字塔

揭开奇迹 神秘的面纱

青春的嘉年华

诗和远方在哪

沿着尼罗河

一路到麦加

世界踩在脚下

梦想不要问代价

我的梦不止一克拉

Oh……Oh……

Oh……Oh……

海天一色连成一幅画

微风吹过轻抚我...',
      'music_length' => 309,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SNH48~Y3NuX2FydGlzdH4xNTk2Ng==.html">SNH48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1673480,
      'music_title_url' => 'monodrama~lay',
      'music_title' => 'Monodrama',
      'music_artist' => 'LAY',
      'music_artist_id' => '85210',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530892059,
      'music_last_update_time' => 1464587313,
      'music_title_search' => 'monodrama',
      'music_artist_search' => '; lai;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5686,
      'music_track_id' => 0,
      'music_filename' => '1673480-2a543472.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Jing jing de, wo ling ting zhe
Wo xie de ge lue dai xie hui se
Ba ai qiao qiao fang jin kou dai
Rang suo you de ren kan bu chu lai.

Bu xiang yan zhe chang xi
Wo zhi dao zhe jie ju
Zui hou wo hui s...',
      'music_length' => 253,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/LAY~Y3NuX2FydGlzdH44NTIxMA==.html">LAY</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1675852,
      'music_title_url' => 'dao-mong-tuong-dance-version~snh48',
      'music_title' => 'Đảo Mộng Tưởng (梦想岛) (Dance Version)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1510403474,
      'music_last_update_time' => 1466840625,
      'music_title_search' => 'dao mong tung; 梦想岛 ; dance verxion',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7035,
      'music_track_id' => 1,
      'music_filename' => '1675852-e1f40253.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'HEY```````OHH````````

追寻着我的梦想出发

漂洋过海暂别了繁华

心中的梦想岛就在那

和大自然拥抱对话

穿越热情撒哈拉

把我融化

探访古老金字塔

揭开奇迹 神秘的面纱

青春的嘉年华

诗和远方在哪

沿着尼罗河

一路到麦加

世界踩在脚下

梦想不要问代价

我的梦不止一克拉

Oh……Oh……

Oh……Oh……

海天一色连成一幅画

微风吹过轻抚我...',
      'music_length' => 214,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SNH48~Y3NuX2FydGlzdH4xNTk2Ng==.html">SNH48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
  ),
  4 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1714696,
      'music_title_url' => 'talk-love-live~kwill',
      'music_title' => 'Talk Love (Live)',
      'music_artist' => 'K.Will',
      'music_artist_id' => '1528',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538930423,
      'music_last_update_time' => 1473822483,
      'music_title_search' => 'talk love; live',
      'music_artist_search' => '; k wil;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 17676,
      'music_track_id' => 0,
      'music_filename' => '1714696-fb504d37.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Amu mal eopsi,
Naegeseo keojyeoman ganeun ge
Amuraedo idaeron an doegesseo
Eojjeoda naega ireohge
Nege ppajin geonji
Iyureul nado moreugesseo.

Neon wae naegeseo maemdora
Mwol haedo singyeong sseui...',
      'music_length' => 213,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1725090,
      'music_title_url' => 'blood-sweat-tears~bts',
      'music_title' => 'Blood Sweat &amp; Tears',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539021125,
      'music_last_update_time' => 1504687653,
      'music_title_search' => 'blod xweat tearx',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 110293,
      'music_track_id' => 0,
      'music_filename' => '1725090-3328f58c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Nae pi ttam nunmul
Nae majimak chumeul
Da gajyeoga ga
Nae pi ttam nunmul
Nae chagaun sumeul
Da gajyeoga ga
Nae pi ttam nunmul
Nae pi ttam nunmuldo
Nae mom maeum yeonghondo
Neoui geosin geol jal alg...',
      'music_length' => 363,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1700651,
      'music_title_url' => 'whistle~blackpink',
      'music_title' => 'Whistle',
      'music_artist' => 'BlackPink',
      'music_artist_id' => '14673',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538828365,
      'music_last_update_time' => 1472996432,
      'music_title_search' => 'whixtle',
      'music_artist_search' => '; blackpink;',
      'music_album_search' => '',
      'music_composer' => 'Teddy; Future Bounce; Bekuh Boom',
      'music_album' => '',
      'music_listen' => 78431,
      'music_track_id' => 0,
      'music_filename' => '1700651-40518ad9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hey boy.

Make\' em whistle like
A missile bomb, bomb
Every time I show up, blow up uh
Make\' em whistle like
A missile bomb, bomb
Every time I show up, blow up uh.

Neon neomu areumdawo
Neol ijeul s...',
      'music_length' => 230,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1647231,
      'music_title_url' => 'once-again-music-bank-descendants-of-the-sun-special-stage-live~mad-clown-dawon',
      'music_title' => 'Once Again (Music Bank Descendants Of The Sun Special Stage Live)',
      'music_artist' => 'Mad Clown;Dawon',
      'music_artist_id' => '4521;15974',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538551804,
      'music_last_update_time' => 1459753670,
      'music_title_search' => 'once again; muxic bank dexcendantx of the xun xpecial xtage live',
      'music_artist_search' => '; mad clown; dawon;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9272,
      'music_track_id' => 0,
      'music_filename' => '1647231-f690ab34.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Dasi neoreul bol su isseulkka
Dasi seuchyeo jinaga beorin
Unmyeong ape seo isseo
Kkaeji moshal kkumieosseulkka uri
Meoreojineun neoege
Jeonhaji moshaesseo
Hanbeondo.

Neol saranghae
Nae gipeun maeu...',
      'music_length' => 247,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1663636,
      'music_title_url' => 'fire~bts',
      'music_title' => 'Fire',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538888677,
      'music_last_update_time' => 1462252884,
      'music_title_search' => 'fire',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 109501,
      'music_track_id' => 0,
      'music_filename' => '1663636-4d2a17e6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Bltaoreune.

Fire
Fire
Fire
Fire

When I wake up in my room nan mwodo eopji
Haega jigo nan hu biteuldaemyeo geotji
Da mansinchangiro chwihaesseo chwihaesseo
Mak yokhae gireseo gireseo
Na masi gaji...',
      'music_length' => 294,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1712493,
      'music_title_url' => 'russian-roulette~red-velvet',
      'music_title' => 'Russian Roulette',
      'music_artist' => 'Red Velvet',
      'music_artist_id' => '4719',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538886501,
      'music_last_update_time' => 1473522553,
      'music_title_search' => 'ruxian roulete',
      'music_artist_search' => '; red velvet;',
      'music_album_search' => '',
      'music_composer' => 'Albi Albertsson; Belle Humble; Markus Lindell; Jo Yoon Kyung',
      'music_album' => '',
      'music_listen' => 26910,
      'music_track_id' => 0,
      'music_filename' => '1712493-45bfa42e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'La-la-la-la-la~.

Nalkaroun secret dulleossan
Yaegin beil soge
Jeomjeom deo gipeun h-h-hush
Mameul gyeonweo ije
Yeogin ontong eoduun bamhaneulsaek
Geurimjajocha gireul ilke hae.

Oh neon hangsang l...',
      'music_length' => 211,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1622822,
      'music_title_url' => 'im-young~taehyun',
      'music_title' => 'I\'m Young',
      'music_artist' => 'Taehyun',
      'music_artist_id' => '52323',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538798842,
      'music_last_update_time' => 1454317392,
      'music_title_search' => 'i m ioung',
      'music_artist_search' => '; taehiun;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4224,
      'music_track_id' => 0,
      'music_filename' => '1622822-eef24627.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Neoui hyeonsireneun nae jariga eopseosseo
Mundeuk bureoon seollem ttaemune
Jari jabasseo
Sigani jinalsurok
Joeyeooneun sesangi museopjiman
Nan nega johdeora.

Geuegen naega jimiya
Geuegen ajik kkum...',
      'music_length' => 340,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1628597,
      'music_title_url' => 'i-need-you-dope-5th-gaon-chart-k-pop-awards-live~bts',
      'music_title' => 'I Need You; Dope (5th Gaon Chart K-Pop Awards Live)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538925349,
      'music_last_update_time' => 1455783964,
      'music_title_search' => 'i ned iou; dope; 5th gaon chart k pop awardx live',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3432,
      'music_track_id' => 0,
      'music_filename' => '1628597-f3acb7ea.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Fall fall fall heuteojine
Fall fall fall tteoreojine.

Neo ttaeme na ireohge manggajyeo
Geumanhallae ije neo an gajyeo
Moshagesseo mwot gataseo
Jebal pinggye gateun geon samgajwo.

Niga nahante ire...',
      'music_length' => 305,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1635659,
      'music_title_url' => 'breathe~lee-hi',
      'music_title' => 'Breathe',
      'music_artist' => 'Lee Hi',
      'music_artist_id' => '2713',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538827354,
      'music_last_update_time' => 1457495104,
      'music_title_search' => 'breathe',
      'music_artist_search' => '; le hi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 13584,
      'music_track_id' => 0,
      'music_filename' => '1635659-a5277d6f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Sumeul keuge swieobwayo
Dangsinui gaseum yangjjogi jeorige
Jogeumeun apaol ttaekkaji
Sumeul deo baeteobwayo
Dangsinui ane nameun ge eopsdago
Neukkyeojil ttaekkaji
Sumi beokchaollado gwaenchanhayo
A...',
      'music_length' => 294,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1639042,
      'music_title_url' => 'one-of-these-nights~red-velvet',
      'music_title' => 'One Of These Nights',
      'music_artist' => 'Red Velvet',
      'music_artist_id' => '4719',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538826665,
      'music_last_update_time' => 1458203063,
      'music_title_search' => '1 of thexe nightx',
      'music_artist_search' => '; red velvet;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 17200,
      'music_track_id' => 0,
      'music_filename' => '1639042-51c2b882.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Geunyang kkumeseo kkaen geosppuniya
Tto dasi kkamadeukhan jeo seulpeun byeol hana
Jal ga seotulge insahago
Dwidoraseo oneun gireun
Cham meolgido hada
Gateun sigane just for a minute
Gateun gonggane...',
      'music_length' => 270,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1644487,
      'music_title_url' => 'talk-love-music-bank-descendants-of-the-sun-special-stage-live~kwill',
      'music_title' => 'Talk Love (Music Bank Descendants Of The Sun Special Stage Live)',
      'music_artist' => 'K.Will',
      'music_artist_id' => '1528',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538930332,
      'music_last_update_time' => 1459143364,
      'music_title_search' => 'talk love; muxic bank dexcendantx of the xun xpecial xtage live',
      'music_artist_search' => '; k wil;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 25488,
      'music_track_id' => 0,
      'music_filename' => '1644487-f9b9223a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Amu mal eopsi naegeseo
Keojyeoman ganeun ge
Amuraedo idaeron an doegesseo
Eojjeoda naega ireohge.

Nege ppajin geonji
Iyureul nado moreugesseo.

Neon wae naegeseo maemdora
Mwol haedo singyeongdo ss...',
      'music_length' => 225,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1656462,
      'music_title_url' => 'youre-so-fine-the-show-live~cnblue',
      'music_title' => 'You\'re So Fine (The Show Live)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538468026,
      'music_last_update_time' => 1461224719,
      'music_title_search' => 'iou re xo fine; the thow live',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3208,
      'music_track_id' => 0,
      'music_filename' => '1656462-65f03aa1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nae chingudeuri neol bogo nan dwi
Hanagati malhae neon neungryeogi joha
Wanbyeokhan chemistry seoroga bappeul ttaemyeon
Aegyo seokkin selfiero daedaphaneun girl.

Namjadeureun da ttokgatdae cheoeum...',
      'music_length' => 236,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    12 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1677486,
      'music_title_url' => 'if-i-leave-king-of-mask-singer-live~hyelin',
      'music_title' => 'If I Leave (King Of Mask Singer Live)',
      'music_artist' => 'Hyelin',
      'music_artist_id' => '17258',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538997879,
      'music_last_update_time' => 1466839716,
      'music_title_search' => 'if i leave; king of maxk xinger live',
      'music_artist_search' => '; hilin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1980,
      'music_track_id' => 0,
      'music_filename' => '1677486-2a2cb639.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Sseulsseulhan dalbich alae
Nae geulimja hana saeng-gi geodeun
Geuttaen malhae bolkkayoi ma-eum deul-eo na julago
Mundeug saebyeog-eul allineun geu balam hanagajina geodeun
Geujeo hansum swideus mul...',
      'music_length' => 264,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1679844,
      'music_title_url' => 'monster-m-countdown-live~exo',
      'music_title' => 'Monster (M Countdown Live)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538717150,
      'music_last_update_time' => 1466828280,
      'music_title_search' => 'monxter; m countdown live',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Kenzie; Deepflow; LDN Noise; Rodnae &quot;Chikk&quot; Bell',
      'music_album' => '',
      'music_listen' => 4495,
      'music_track_id' => 0,
      'music_filename' => '1679844-82fb812f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'She got me gone crazy
Wae simjangi ttwini.

Neon areumdawo naui goddess
Dathyeoissji Yeah yeah 
Dudeuril teni nal deuryeobonaellae? 
Gamchwojin seurireul julge.

Nundongjaui hogisime imi neon ppajy...',
      'music_length' => 232,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1681576,
      'music_title_url' => 'lucky-one-monster-suwon-k-pop-concert-live~exo',
      'music_title' => 'Lucky One; Monster (Suwon K-Pop Concert Live)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538460518,
      'music_last_update_time' => 1467335217,
      'music_title_search' => 'lucki one; monxter; xuwon k pop concert live',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2812,
      'music_track_id' => 0,
      'music_filename' => '1681576-716d6b31.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '[Lucky One]

Oh taeyangi tteunda
Neol chajajul jidoreul deulgo
Jwapyoreul ttara naseoneun hangro
No matter jeo eunbit nachimbaneun neoreul hyanghal teni.

Neoreul talmeun haneureun areumdawo
Oneuld...',
      'music_length' => 460,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    15 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1682273,
      'music_title_url' => 'lie-show-champion-goodbye-stage-live~exid',
      'music_title' => 'L.I.E (Show Champion Goodbye Stage Live)',
      'music_artist' => 'EXID',
      'music_artist_id' => '13209',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1539015756,
      'music_last_update_time' => 1467597273,
      'music_title_search' => 'l i e; thow champion godbi xtage live',
      'music_artist_search' => '; exid;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1147,
      'music_track_id' => 0,
      'music_filename' => '1682273-ec7a25c2.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Lie lie lie lie eh eh.

I bame daeche eodi yeonrakhae
Cham aneun yeoja dongsaengdeul manhne
Go (go) a way (a way)
Nae chinguga neol gireseo bwassdae
Nega naege jandago han geuttae
Go (go) a way
(li...',
      'music_length' => 211,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1685585,
      'music_title_url' => 'lie-the-show-goodbye-stage-live~exid',
      'music_title' => 'L.I.E (The Show Goodbye Stage Live)',
      'music_artist' => 'EXID',
      'music_artist_id' => '13209',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538917786,
      'music_last_update_time' => 1467854656,
      'music_title_search' => 'l i e; the thow godbi xtage live',
      'music_artist_search' => '; exid;',
      'music_album_search' => '',
      'music_composer' => 'Shinsadong Tiger; Beomi; Nangi; LE',
      'music_album' => '',
      'music_listen' => 1926,
      'music_track_id' => 0,
      'music_filename' => '1685585-98ada065.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Lie lie lie lie eh eh.

I bame daeche eodi yeonrakhae
Cham aneun yeoja dongsaengdeul manhne
Go (go) a way (a way)
Nae chinguga neol gireseo bwassdae
Nega naege jandago han geuttae
Go (go) a way
(li...',
      'music_length' => 215,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1700648,
      'music_title_url' => 'boombayah~blackpink',
      'music_title' => 'Boombayah',
      'music_artist' => 'BlackPink',
      'music_artist_id' => '14673',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538468520,
      'music_last_update_time' => 1472996260,
      'music_title_search' => 'bombaiah',
      'music_artist_search' => '; blackpink;',
      'music_album_search' => '',
      'music_composer' => 'Teddy; Bekuh Boom',
      'music_album' => '',
      'music_listen' => 90473,
      'music_track_id' => 0,
      'music_filename' => '1700648-39dee9e0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Blackpink in your area
Blackpink in your area.

Been a bad girl, I know I am
And I\'m so hot, I need a fan
I don\'t want a boy, I need a man.

Click-clack
Badda bing badda boom
Muneul bakchamyeon mod...',
      'music_length' => 243,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1708127,
      'music_title_url' => 'louder-lotto-music-bank-live~exo',
      'music_title' => 'Louder (Lotto) (Music Bank Live)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538453039,
      'music_last_update_time' => 1472217481,
      'music_title_search' => 'louder; loto ; muxic bank live',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'JQ; Jo Yun Gyeong; Kim Min Ji; Seo Rim; Rodnae &quot;Chikk&quot; Bell; LDN Noise; Adrian Mckinnon',
      'music_album' => '',
      'music_listen' => 6312,
      'music_track_id' => 0,
      'music_filename' => '1708127-59d040a2.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Oh yeah yeah oh yeah yeah.

Byeol gwansimi eopsneun cheok siseoneul pihaeseo ga
Ihaehae modeun geol georeoyaman hal tenikka
Seuchyeoman bwado Oh yeah
Dareun yeojawaneun hwak dalla
Dwidorabwado bunm...',
      'music_length' => 203,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1720617,
      'music_title_url' => 'lotto-star-show-360-ep02~exo',
      'music_title' => 'Lotto (Star Show 360 EP.02)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538716653,
      'music_last_update_time' => 1475134263,
      'music_title_search' => 'loto; xtar thow 360 ep 02',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'LDN Noise',
      'music_album' => '',
      'music_listen' => 2208,
      'music_track_id' => 0,
      'music_filename' => '1720617-2863c42a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Oh yeah yeah oh yeah yeah
Byeol gwansimi eopsneun cheok
Siseoneul pihaeseo ga
Ihaehae modeun geol
Georeoyaman hal tenikka
Seuchyeoman bwado Oh yeah
Dareun yeojawaneun hwak dalla
Dwidorabwado bunmye...',
      'music_length' => 193,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    20 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1714696,
      'music_title_url' => 'talk-love-live~kwill',
      'music_title' => 'Talk Love (Live)',
      'music_artist' => 'K.Will',
      'music_artist_id' => '1528',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538930423,
      'music_last_update_time' => 1473822483,
      'music_title_search' => 'talk love; live',
      'music_artist_search' => '; k wil;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 17676,
      'music_track_id' => 0,
      'music_filename' => '1714696-fb504d37.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Amu mal eopsi,
Naegeseo keojyeoman ganeun ge
Amuraedo idaeron an doegesseo
Eojjeoda naega ireohge
Nege ppajin geonji
Iyureul nado moreugesseo.

Neon wae naegeseo maemdora
Mwol haedo singyeong sseui...',
      'music_length' => 213,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/KWill~Y3NuX2FydGlzdH4xNTI4.html">K.Will</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1725090,
      'music_title_url' => 'blood-sweat-tears~bts',
      'music_title' => 'Blood Sweat &amp; Tears',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539021125,
      'music_last_update_time' => 1504687653,
      'music_title_search' => 'blod xweat tearx',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 110293,
      'music_track_id' => 0,
      'music_filename' => '1725090-3328f58c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Nae pi ttam nunmul
Nae majimak chumeul
Da gajyeoga ga
Nae pi ttam nunmul
Nae chagaun sumeul
Da gajyeoga ga
Nae pi ttam nunmul
Nae pi ttam nunmuldo
Nae mom maeum yeonghondo
Neoui geosin geol jal alg...',
      'music_length' => 363,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/BTS~Y3NuX2FydGlzdH40NzQ4.html">BTS</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1700651,
      'music_title_url' => 'whistle~blackpink',
      'music_title' => 'Whistle',
      'music_artist' => 'BlackPink',
      'music_artist_id' => '14673',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538828365,
      'music_last_update_time' => 1472996432,
      'music_title_search' => 'whixtle',
      'music_artist_search' => '; blackpink;',
      'music_album_search' => '',
      'music_composer' => 'Teddy; Future Bounce; Bekuh Boom',
      'music_album' => '',
      'music_listen' => 78431,
      'music_track_id' => 0,
      'music_filename' => '1700651-40518ad9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hey boy.

Make\' em whistle like
A missile bomb, bomb
Every time I show up, blow up uh
Make\' em whistle like
A missile bomb, bomb
Every time I show up, blow up uh.

Neon neomu areumdawo
Neol ijeul s...',
      'music_length' => 230,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/BlackPink~Y3NuX2FydGlzdH4xNDY3Mw==.html">BlackPink</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1647231,
      'music_title_url' => 'once-again-music-bank-descendants-of-the-sun-special-stage-live~mad-clown-dawon',
      'music_title' => 'Once Again (Music Bank Descendants Of The Sun Special Stage Live)',
      'music_artist' => 'Mad Clown;Dawon',
      'music_artist_id' => '4521;15974',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538551804,
      'music_last_update_time' => 1459753670,
      'music_title_search' => 'once again; muxic bank dexcendantx of the xun xpecial xtage live',
      'music_artist_search' => '; mad clown; dawon;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9272,
      'music_track_id' => 0,
      'music_filename' => '1647231-f690ab34.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Dasi neoreul bol su isseulkka
Dasi seuchyeo jinaga beorin
Unmyeong ape seo isseo
Kkaeji moshal kkumieosseulkka uri
Meoreojineun neoege
Jeonhaji moshaesseo
Hanbeondo.

Neol saranghae
Nae gipeun maeu...',
      'music_length' => 247,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Mad-Clown~Y3NuX2FydGlzdH40NTIx.html">Mad Clown</a>, <a href="/ca-si/Dawon~Y3NuX2FydGlzdH4xNTk3NA==.html">Dawon</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1663636,
      'music_title_url' => 'fire~bts',
      'music_title' => 'Fire',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538888677,
      'music_last_update_time' => 1462252884,
      'music_title_search' => 'fire',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 109501,
      'music_track_id' => 0,
      'music_filename' => '1663636-4d2a17e6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Bltaoreune.

Fire
Fire
Fire
Fire

When I wake up in my room nan mwodo eopji
Haega jigo nan hu biteuldaemyeo geotji
Da mansinchangiro chwihaesseo chwihaesseo
Mak yokhae gireseo gireseo
Na masi gaji...',
      'music_length' => 294,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/BTS~Y3NuX2FydGlzdH40NzQ4.html">BTS</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1712493,
      'music_title_url' => 'russian-roulette~red-velvet',
      'music_title' => 'Russian Roulette',
      'music_artist' => 'Red Velvet',
      'music_artist_id' => '4719',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538886501,
      'music_last_update_time' => 1473522553,
      'music_title_search' => 'ruxian roulete',
      'music_artist_search' => '; red velvet;',
      'music_album_search' => '',
      'music_composer' => 'Albi Albertsson; Belle Humble; Markus Lindell; Jo Yoon Kyung',
      'music_album' => '',
      'music_listen' => 26910,
      'music_track_id' => 0,
      'music_filename' => '1712493-45bfa42e.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'La-la-la-la-la~.

Nalkaroun secret dulleossan
Yaegin beil soge
Jeomjeom deo gipeun h-h-hush
Mameul gyeonweo ije
Yeogin ontong eoduun bamhaneulsaek
Geurimjajocha gireul ilke hae.

Oh neon hangsang l...',
      'music_length' => 211,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Red-Velvet~Y3NuX2FydGlzdH40NzE5.html">Red Velvet</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1622822,
      'music_title_url' => 'im-young~taehyun',
      'music_title' => 'I\'m Young',
      'music_artist' => 'Taehyun',
      'music_artist_id' => '52323',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538798842,
      'music_last_update_time' => 1454317392,
      'music_title_search' => 'i m ioung',
      'music_artist_search' => '; taehiun;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4224,
      'music_track_id' => 0,
      'music_filename' => '1622822-eef24627.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Neoui hyeonsireneun nae jariga eopseosseo
Mundeuk bureoon seollem ttaemune
Jari jabasseo
Sigani jinalsurok
Joeyeooneun sesangi museopjiman
Nan nega johdeora.

Geuegen naega jimiya
Geuegen ajik kkum...',
      'music_length' => 340,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Taehyun~Y3NuX2FydGlzdH41MjMyMw==.html">Taehyun</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1628597,
      'music_title_url' => 'i-need-you-dope-5th-gaon-chart-k-pop-awards-live~bts',
      'music_title' => 'I Need You; Dope (5th Gaon Chart K-Pop Awards Live)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538925349,
      'music_last_update_time' => 1455783964,
      'music_title_search' => 'i ned iou; dope; 5th gaon chart k pop awardx live',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3432,
      'music_track_id' => 0,
      'music_filename' => '1628597-f3acb7ea.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Fall fall fall heuteojine
Fall fall fall tteoreojine.

Neo ttaeme na ireohge manggajyeo
Geumanhallae ije neo an gajyeo
Moshagesseo mwot gataseo
Jebal pinggye gateun geon samgajwo.

Niga nahante ire...',
      'music_length' => 305,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/BTS~Y3NuX2FydGlzdH40NzQ4.html">BTS</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1635659,
      'music_title_url' => 'breathe~lee-hi',
      'music_title' => 'Breathe',
      'music_artist' => 'Lee Hi',
      'music_artist_id' => '2713',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538827354,
      'music_last_update_time' => 1457495104,
      'music_title_search' => 'breathe',
      'music_artist_search' => '; le hi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 13584,
      'music_track_id' => 0,
      'music_filename' => '1635659-a5277d6f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Sumeul keuge swieobwayo
Dangsinui gaseum yangjjogi jeorige
Jogeumeun apaol ttaekkaji
Sumeul deo baeteobwayo
Dangsinui ane nameun ge eopsdago
Neukkyeojil ttaekkaji
Sumi beokchaollado gwaenchanhayo
A...',
      'music_length' => 294,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Lee-Hi~Y3NuX2FydGlzdH4yNzEz.html">Lee Hi</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1639042,
      'music_title_url' => 'one-of-these-nights~red-velvet',
      'music_title' => 'One Of These Nights',
      'music_artist' => 'Red Velvet',
      'music_artist_id' => '4719',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538826665,
      'music_last_update_time' => 1458203063,
      'music_title_search' => '1 of thexe nightx',
      'music_artist_search' => '; red velvet;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 17200,
      'music_track_id' => 0,
      'music_filename' => '1639042-51c2b882.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Geunyang kkumeseo kkaen geosppuniya
Tto dasi kkamadeukhan jeo seulpeun byeol hana
Jal ga seotulge insahago
Dwidoraseo oneun gireun
Cham meolgido hada
Gateun sigane just for a minute
Gateun gonggane...',
      'music_length' => 270,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Red-Velvet~Y3NuX2FydGlzdH40NzE5.html">Red Velvet</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1644487,
      'music_title_url' => 'talk-love-music-bank-descendants-of-the-sun-special-stage-live~kwill',
      'music_title' => 'Talk Love (Music Bank Descendants Of The Sun Special Stage Live)',
      'music_artist' => 'K.Will',
      'music_artist_id' => '1528',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538930332,
      'music_last_update_time' => 1459143364,
      'music_title_search' => 'talk love; muxic bank dexcendantx of the xun xpecial xtage live',
      'music_artist_search' => '; k wil;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 25488,
      'music_track_id' => 0,
      'music_filename' => '1644487-f9b9223a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Amu mal eopsi naegeseo
Keojyeoman ganeun ge
Amuraedo idaeron an doegesseo
Eojjeoda naega ireohge.

Nege ppajin geonji
Iyureul nado moreugesseo.

Neon wae naegeseo maemdora
Mwol haedo singyeongdo ss...',
      'music_length' => 225,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/KWill~Y3NuX2FydGlzdH4xNTI4.html">K.Will</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1656462,
      'music_title_url' => 'youre-so-fine-the-show-live~cnblue',
      'music_title' => 'You\'re So Fine (The Show Live)',
      'music_artist' => 'CNBlue',
      'music_artist_id' => '2069',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538468026,
      'music_last_update_time' => 1461224719,
      'music_title_search' => 'iou re xo fine; the thow live',
      'music_artist_search' => '; cnblue;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3208,
      'music_track_id' => 0,
      'music_filename' => '1656462-65f03aa1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nae chingudeuri neol bogo nan dwi
Hanagati malhae neon neungryeogi joha
Wanbyeokhan chemistry seoroga bappeul ttaemyeon
Aegyo seokkin selfiero daedaphaneun girl.

Namjadeureun da ttokgatdae cheoeum...',
      'music_length' => 236,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/CNBlue~Y3NuX2FydGlzdH4yMDY5.html">CNBlue</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    32 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1677486,
      'music_title_url' => 'if-i-leave-king-of-mask-singer-live~hyelin',
      'music_title' => 'If I Leave (King Of Mask Singer Live)',
      'music_artist' => 'Hyelin',
      'music_artist_id' => '17258',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538997879,
      'music_last_update_time' => 1466839716,
      'music_title_search' => 'if i leave; king of maxk xinger live',
      'music_artist_search' => '; hilin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1980,
      'music_track_id' => 0,
      'music_filename' => '1677486-2a2cb639.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Sseulsseulhan dalbich alae
Nae geulimja hana saeng-gi geodeun
Geuttaen malhae bolkkayoi ma-eum deul-eo na julago
Mundeug saebyeog-eul allineun geu balam hanagajina geodeun
Geujeo hansum swideus mul...',
      'music_length' => 264,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Hyelin~Y3NuX2FydGlzdH4xNzI1OA==.html">Hyelin</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1679844,
      'music_title_url' => 'monster-m-countdown-live~exo',
      'music_title' => 'Monster (M Countdown Live)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538717150,
      'music_last_update_time' => 1466828280,
      'music_title_search' => 'monxter; m countdown live',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Kenzie; Deepflow; LDN Noise; Rodnae &quot;Chikk&quot; Bell',
      'music_album' => '',
      'music_listen' => 4495,
      'music_track_id' => 0,
      'music_filename' => '1679844-82fb812f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'She got me gone crazy
Wae simjangi ttwini.

Neon areumdawo naui goddess
Dathyeoissji Yeah yeah 
Dudeuril teni nal deuryeobonaellae? 
Gamchwojin seurireul julge.

Nundongjaui hogisime imi neon ppajy...',
      'music_length' => 232,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1681576,
      'music_title_url' => 'lucky-one-monster-suwon-k-pop-concert-live~exo',
      'music_title' => 'Lucky One; Monster (Suwon K-Pop Concert Live)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538460518,
      'music_last_update_time' => 1467335217,
      'music_title_search' => 'lucki one; monxter; xuwon k pop concert live',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2812,
      'music_track_id' => 0,
      'music_filename' => '1681576-716d6b31.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '[Lucky One]

Oh taeyangi tteunda
Neol chajajul jidoreul deulgo
Jwapyoreul ttara naseoneun hangro
No matter jeo eunbit nachimbaneun neoreul hyanghal teni.

Neoreul talmeun haneureun areumdawo
Oneuld...',
      'music_length' => 460,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    35 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1682273,
      'music_title_url' => 'lie-show-champion-goodbye-stage-live~exid',
      'music_title' => 'L.I.E (Show Champion Goodbye Stage Live)',
      'music_artist' => 'EXID',
      'music_artist_id' => '13209',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1539015756,
      'music_last_update_time' => 1467597273,
      'music_title_search' => 'l i e; thow champion godbi xtage live',
      'music_artist_search' => '; exid;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1147,
      'music_track_id' => 0,
      'music_filename' => '1682273-ec7a25c2.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Lie lie lie lie eh eh.

I bame daeche eodi yeonrakhae
Cham aneun yeoja dongsaengdeul manhne
Go (go) a way (a way)
Nae chinguga neol gireseo bwassdae
Nega naege jandago han geuttae
Go (go) a way
(li...',
      'music_length' => 211,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/EXID~Y3NuX2FydGlzdH4xMzIwOQ==.html">EXID</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1685585,
      'music_title_url' => 'lie-the-show-goodbye-stage-live~exid',
      'music_title' => 'L.I.E (The Show Goodbye Stage Live)',
      'music_artist' => 'EXID',
      'music_artist_id' => '13209',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538917786,
      'music_last_update_time' => 1467854656,
      'music_title_search' => 'l i e; the thow godbi xtage live',
      'music_artist_search' => '; exid;',
      'music_album_search' => '',
      'music_composer' => 'Shinsadong Tiger; Beomi; Nangi; LE',
      'music_album' => '',
      'music_listen' => 1926,
      'music_track_id' => 0,
      'music_filename' => '1685585-98ada065.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Lie lie lie lie eh eh.

I bame daeche eodi yeonrakhae
Cham aneun yeoja dongsaengdeul manhne
Go (go) a way (a way)
Nae chinguga neol gireseo bwassdae
Nega naege jandago han geuttae
Go (go) a way
(li...',
      'music_length' => 215,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/EXID~Y3NuX2FydGlzdH4xMzIwOQ==.html">EXID</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1700648,
      'music_title_url' => 'boombayah~blackpink',
      'music_title' => 'Boombayah',
      'music_artist' => 'BlackPink',
      'music_artist_id' => '14673',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538468520,
      'music_last_update_time' => 1472996260,
      'music_title_search' => 'bombaiah',
      'music_artist_search' => '; blackpink;',
      'music_album_search' => '',
      'music_composer' => 'Teddy; Bekuh Boom',
      'music_album' => '',
      'music_listen' => 90473,
      'music_track_id' => 0,
      'music_filename' => '1700648-39dee9e0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Blackpink in your area
Blackpink in your area.

Been a bad girl, I know I am
And I\'m so hot, I need a fan
I don\'t want a boy, I need a man.

Click-clack
Badda bing badda boom
Muneul bakchamyeon mod...',
      'music_length' => 243,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/BlackPink~Y3NuX2FydGlzdH4xNDY3Mw==.html">BlackPink</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1708127,
      'music_title_url' => 'louder-lotto-music-bank-live~exo',
      'music_title' => 'Louder (Lotto) (Music Bank Live)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538453039,
      'music_last_update_time' => 1472217481,
      'music_title_search' => 'louder; loto ; muxic bank live',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'JQ; Jo Yun Gyeong; Kim Min Ji; Seo Rim; Rodnae &quot;Chikk&quot; Bell; LDN Noise; Adrian Mckinnon',
      'music_album' => '',
      'music_listen' => 6312,
      'music_track_id' => 0,
      'music_filename' => '1708127-59d040a2.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Oh yeah yeah oh yeah yeah.

Byeol gwansimi eopsneun cheok siseoneul pihaeseo ga
Ihaehae modeun geol georeoyaman hal tenikka
Seuchyeoman bwado Oh yeah
Dareun yeojawaneun hwak dalla
Dwidorabwado bunm...',
      'music_length' => 203,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1720617,
      'music_title_url' => 'lotto-star-show-360-ep02~exo',
      'music_title' => 'Lotto (Star Show 360 EP.02)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538716653,
      'music_last_update_time' => 1475134263,
      'music_title_search' => 'loto; xtar thow 360 ep 02',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'LDN Noise',
      'music_album' => '',
      'music_listen' => 2208,
      'music_track_id' => 0,
      'music_filename' => '1720617-2863c42a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Oh yeah yeah oh yeah yeah
Byeol gwansimi eopsneun cheok
Siseoneul pihaeseo ga
Ihaehae modeun geol
Georeoyaman hal tenikka
Seuchyeoman bwado Oh yeah
Dareun yeojawaneun hwak dalla
Dwidorabwado bunmye...',
      'music_length' => 193,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
  ),
  5 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1650059,
      'music_title_url' => 'flash~perfume',
      'music_title' => 'Flash',
      'music_artist' => 'Perfume',
      'music_artist_id' => '11906',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538533136,
      'music_last_update_time' => 1477450285,
      'music_title_search' => 'flath',
      'music_artist_search' => '; perfume;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3115,
      'music_track_id' => 1,
      'music_filename' => '1650059-0c741708.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Hana no iro ga hen wareru hodo no
Nagai toki no mitsudo ni chikaku te
Furēmu wa isshun surōmōshon de
Icchokusen hikari saku yō ni.

Kūki o yurase kodō o narase
Shizuka na yoru ni ima hi o tsukeru n...',
      'music_length' => 276,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1698428,
      'music_title_url' => 'ima-naraba-saya-milky~nmb48',
      'music_title' => 'Ima Naraba (今ならば) / Saya Milky',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538471170,
      'music_last_update_time' => 1477450504,
      'music_title_search' => 'ima naraba; 今ならば ; xaia milki',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2774,
      'music_track_id' => 2,
      'music_filename' => '1698428-4ade0eb1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Kono michi wo nan kai
Aruita darou
Anata ni aeru you de...
Machi no kaku wo ikutsu
Tachidomatte sagashite kita ka?

Toki wa kitai wo sasete
Nani mo naku sugiru mono
Hanashite mitai to
Omotte ita no...',
      'music_length' => 245,
      'music_width' => 864,
      'music_height' => 480,
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1726280,
      'music_title_url' => 'renai-circulation~hanazawa-kana',
      'music_title' => 'Renai Circulation (恋愛サーキュレーション)',
      'music_artist' => 'Hanazawa Kana',
      'music_artist_id' => '14756',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538540640,
      'music_last_update_time' => 1479234320,
      'music_title_search' => 'renai circulation; 恋愛サーキュレーション',
      'music_artist_search' => '; hanazawa kana;',
      'music_album_search' => '',
      'music_composer' => 'meg rock',
      'music_album' => '',
      'music_listen' => 3387,
      'music_track_id' => 0,
      'music_filename' => '1726280-f30b6f73.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '(せーの♪）
(Se~ no ♪)
Một ~ Hai♪

でも そんなんじゃ だめ
Demo  sonnan ja  dame
Nhưng chẳng tốt chút nào hết
もう そんなんじゃ ほら
Mou  sonnan ja  hora
Nhưng chẳng tốt chút nào hết
心は進化するよ
Kokoro wa shinka suru yo
Trái ti...',
      'music_length' => 91,
      'music_width' => 720,
      'music_height' => 480,
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1733813,
      'music_title_url' => 'dear-bride~nishino-kana',
      'music_title' => 'Dear Bride',
      'music_artist' => 'Nishino Kana',
      'music_artist_id' => '13693',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538735618,
      'music_last_update_time' => 1477618454,
      'music_title_search' => 'dear bride',
      'music_artist_search' => '; nithino kana;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2632,
      'music_track_id' => 1,
      'music_filename' => '1733813-6ed9154f.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_length' => 334,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1735723,
      'music_title_url' => 'suki-na-hito-ga-iru-koto~jy',
      'music_title' => 'Suki Na Hito Ga Iru Koto (好きな人がいること)',
      'music_artist' => 'JY',
      'music_artist_id' => '80855',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538891444,
      'music_last_update_time' => 1478144807,
      'music_title_search' => 'xuki na hito ga iru koto; 好きな人がいること',
      'music_artist_search' => '; ji;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11860,
      'music_track_id' => 0,
      'music_filename' => '1735723-6091c7dc.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Moshi gohun mae ni modoreru nara
Nani wo shimasuka?
Watashi wa sakki no henji mou ichido shitai
Doushite anna ni sokkenaku suruu shichatta no?
Anata no mae dato nandaka umaku ikanai.

Jinsei wa kou...',
      'music_length' => 302,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1634563,
      'music_title_url' => 'max-toki-315go-max-315~ngt48',
      'music_title' => 'Max Toki 315go (Max とき315 号)',
      'music_artist' => 'NGT48',
      'music_artist_id' => '13635',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538961366,
      'music_last_update_time' => 1501024722,
      'music_title_search' => 'max toki 315go; max とき315 号',
      'music_artist_search' => '; ngt48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6658,
      'music_track_id' => 3,
      'music_filename' => '1634563-28abcae7.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Saigo no tonneru wo
Nukere ba chikadzuku utsukushii ano machi
Kibou ga sumu to shinjite kita
Watashi ga umaresodatta
Subete wo shitte hoshii.

Ichiban daiji na hito wo
Tsurete kaeru koto
Deatta ano...',
      'music_length' => 357,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1740046,
      'music_title_url' => 'buranko-under-members-akb48-show-ep132-nogizaka46-show-20161112~nogizaka46',
      'music_title' => 'Buranko (ブランコ) / Under Members (AKB48 SHOW! Ep132 (Nogizaka46 SHOW!) 2016.11.12)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538566162,
      'music_last_update_time' => 1505705714,
      'music_title_search' => 'buranko; ブランコ ; under memberx; akb48 thow ep132; novaka46 thow 2016 1 12',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1318,
      'music_track_id' => 3,
      'music_filename' => '1740046-bf846f96.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'kimi no koto wo gokai shitetanda
boku wo shiranai tte omottetanda
juubun kyori wo oita tsumori ga
zutto boku wa mirarete ita no ka...
hitotsu aita hajikko no BURANKO
kaze no you ni guuzen suwatte
k...',
      'music_length' => 304,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1749791,
      'music_title_url' => 'futari-saison~keyakizaka46',
      'music_title' => 'Futari Saison (二人セゾン)',
      'music_artist' => 'Keyakizaka46',
      'music_artist_id' => '15964',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538678496,
      'music_last_update_time' => 1481513265,
      'music_title_search' => 'futari xaixon; 二人セゾン',
      'music_artist_search' => '; keiakizaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11289,
      'music_track_id' => 1,
      'music_filename' => '1749791-27451a42.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'futari SEZON
futari SEZON
harunatsu de koi wo shite
futari SEZON
futari SEZON
akifuyu de satte iku
issho ni sugoshita kisetsu yo
koukai wa shitenai ka?
futari SEZON

michibata saiteru zassou ni mo...',
      'music_length' => 328,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1749793,
      'music_title_url' => 'bokutachi-no-sensou-five-cards~keyakizaka46',
      'music_title' => 'Bokutachi no Sensou (僕たちの戦争) / FIVE CARDS',
      'music_artist' => 'Keyakizaka46',
      'music_artist_id' => '15964',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538678939,
      'music_last_update_time' => 1481513271,
      'music_title_search' => 'bokutachi no xenxou; 僕たちの戦争 ; five cardx',
      'music_artist_search' => '; keiakizaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 431,
      'music_track_id' => 2,
      'music_filename' => '1749793-403e0733.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'kimi no PAPA ga futari no koto hantai shiteru to kiite
soba no PETTOBOTORU wo kabe ni nageta
KYAPPU ga hazure fukidashita awa wa tomerarenai (kanjou)
boku no nani wo shitte iru to iu no da?

ochits...',
      'music_length' => 267,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1754487,
      'music_title_url' => 'darkness~ske48',
      'music_title' => 'Darkness',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538826118,
      'music_last_update_time' => 1482745815,
      'music_title_search' => 'darknex',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3526,
      'music_track_id' => 0,
      'music_filename' => '1754487-e518ad9c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Love is darkness...

If night were to fall, oh, upon the two of us
Everything would vanish, oh, like a shooting star

[Kiz/Mat/Yag] ima no ai wa ichi SENCHI saki ga mienakute
[Kin/Kuw/Ish/Tak] tesa...',
      'music_length' => 264,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1766405,
      'music_title_url' => 'boku-wa-shitteiru-movie-ver~ske48',
      'music_title' => 'Boku wa Shitteiru (僕は知っている) Movie ver.',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539028987,
      'music_last_update_time' => 1487465619,
      'music_title_search' => 'boku wa thiteiru; 僕は知っている movi ver',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1439,
      'music_track_id' => 0,
      'music_filename' => '1766405-f7abf2e5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 243,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1779783,
      'music_title_url' => 'nandemonaiya-fns-kayousai-20161207-first-night~kamishiraishi-mone',
      'music_title' => 'Nandemonaiya (なんでもないや) (FNS Kayousai - 2016.12.07 - First Night)',
      'music_artist' => 'Kamishiraishi Mone',
      'music_artist_id' => '90218',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538574717,
      'music_last_update_time' => 1492316923,
      'music_title_search' => 'nandemonaia; なんでもないや ; fnx kaiouxai; 2016 12 07; firxt night',
      'music_artist_search' => '; kamithiraithi mone;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2176,
      'music_track_id' => 0,
      'music_filename' => '1779783-42fa4be3.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_length' => 207,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1759905,
      'music_title_url' => 'saba-kaidou~iwasa-misaki',
      'music_title' => 'Saba Kaidou (鯖街道)',
      'music_artist' => 'Iwasa Misaki',
      'music_artist_id' => '40397',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529693425,
      'music_last_update_time' => 1484888365,
      'music_title_search' => 'xaba kaidou; 鯖街道',
      'music_artist_search' => '; iwaxa mixaki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7943,
      'music_track_id' => 1,
      'music_filename' => '1759905-bad92b5b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'obama obama no minato ni saba ga agaru koro
afureru namida wa kareru deshou ka

owatta koi wo shiodzuke ni shite
negorozaka koeru

kyou wa toote mo juuhachi sato
miren seoi hitoritabi
anata ga itos...',
      'music_length' => 220,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1773211,
      'music_title_url' => 'two-roses~ske48',
      'music_title' => 'TWO ROSES',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529744585,
      'music_last_update_time' => 1489654300,
      'music_title_search' => '2 roxex',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => 'Akimoto Yasushi',
      'music_album' => '',
      'music_listen' => 2142,
      'music_track_id' => 9,
      'music_filename' => '1773211-94d27287.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'me to me ga atta sono shunkan ni
mienai te ga nobite kite
nanika daiji na mono
nusumareta

watashi hajime wa kizukanakatta
mune no dokoka SUUSUU shite
ana ga aita mitai ni
oboreru

sonna setsuna sa...',
      'music_length' => 290,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1755890,
      'music_title_url' => 'boku-igai-no-dareka-kusaka-konomi-dance-version~nmb48',
      'music_title' => 'Boku Igai no Dareka (僕以外の誰か) -Kusaka Konomi Dance Version-',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1518176914,
      'music_last_update_time' => 1483403601,
      'music_title_search' => 'boku igai no dareka; 僕以外の誰か kuxaka konomi dance verxion',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9671,
      'music_track_id' => 2,
      'music_filename' => '1755890-9b71ef97.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 232,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1766410,
      'music_title_url' => 'kiss-position~ske48',
      'music_title' => 'Kiss Position (キスポジション)',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530328065,
      'music_last_update_time' => 1487465639,
      'music_title_search' => 'kix poxition; キスポジション',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1995,
      'music_track_id' => 0,
      'music_filename' => '1766410-c8319dd5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 284,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1750415,
      'music_title_url' => 'sakasazaka-jankenmin~akb48',
      'music_title' => 'Sakasazaka (逆さ坂) / Jankenmin',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1499204696,
      'music_last_update_time' => 1481683718,
      'music_title_search' => 'xakaxazaka; 逆さ坂 ; jankenmin',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3547,
      'music_track_id' => 1,
      'music_filename' => '1750415-52f7ff5d.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 307,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1766406,
      'music_title_url' => 'is-that-your-secret~ske48',
      'music_title' => 'Is that your secret？',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530851006,
      'music_last_update_time' => 1487465622,
      'music_title_search' => 'ix that iour xecret？',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1265,
      'music_track_id' => 0,
      'music_filename' => '1766406-0040e8e0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 244,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1766413,
      'music_title_url' => 'aishiteru-to-ka-aishiteta-to-ka~ske48',
      'music_title' => 'Aishiteru to ka, Aishiteta to ka (愛してるとか、愛してたとか)',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529679863,
      'music_last_update_time' => 1487465648,
      'music_title_search' => 'aithiteru to ka aithiteta to ka; 愛してるとか、愛してたとか',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1241,
      'music_track_id' => 0,
      'music_filename' => '1766413-6d211721.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 234,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1772593,
      'music_title_url' => 'kiss-datte-hidarikiki~ske48',
      'music_title' => 'Kiss Datte Hidarikiki (キスだって左利き)',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534430330,
      'music_last_update_time' => 1489456779,
      'music_title_search' => 'kix date hidarikiki; キスだって左利き',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => 'Akimoto Yasushi',
      'music_album' => '',
      'music_listen' => 2713,
      'music_track_id' => 27,
      'music_filename' => '1772593-e99a8b9b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'KISU datte hidarikiki
watashi me wo tojite kizuita yo
anata sukoshi hidari ue kara
hora ne kuchibiru kasaneru

[Kiz/Mat/Mat/Tak] hidarite no FOOKU de
[Kiz/Mat/Mat/Tak] kiyou ni PASUTA wo maiteru
[O...',
      'music_length' => 362,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1650059,
      'music_title_url' => 'flash~perfume',
      'music_title' => 'Flash',
      'music_artist' => 'Perfume',
      'music_artist_id' => '11906',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538533136,
      'music_last_update_time' => 1477450285,
      'music_title_search' => 'flath',
      'music_artist_search' => '; perfume;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3115,
      'music_track_id' => 1,
      'music_filename' => '1650059-0c741708.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Hana no iro ga hen wareru hodo no
Nagai toki no mitsudo ni chikaku te
Furēmu wa isshun surōmōshon de
Icchokusen hikari saku yō ni.

Kūki o yurase kodō o narase
Shizuka na yoru ni ima hi o tsukeru n...',
      'music_length' => 276,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Perfume~Y3NuX2FydGlzdH4xMTkwNg==.html">Perfume</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1698428,
      'music_title_url' => 'ima-naraba-saya-milky~nmb48',
      'music_title' => 'Ima Naraba (今ならば) / Saya Milky',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538471170,
      'music_last_update_time' => 1477450504,
      'music_title_search' => 'ima naraba; 今ならば ; xaia milki',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2774,
      'music_track_id' => 2,
      'music_filename' => '1698428-4ade0eb1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Kono michi wo nan kai
Aruita darou
Anata ni aeru you de...
Machi no kaku wo ikutsu
Tachidomatte sagashite kita ka?

Toki wa kitai wo sasete
Nani mo naku sugiru mono
Hanashite mitai to
Omotte ita no...',
      'music_length' => 245,
      'music_width' => 864,
      'music_height' => 480,
      'music_artist_html' => '<a href="/ca-si/NMB48~Y3NuX2FydGlzdH4xNjgyNg==.html">NMB48</a>',
      'music_bitrate_html' => '<span style="color: darkblue">864x480</span>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1726280,
      'music_title_url' => 'renai-circulation~hanazawa-kana',
      'music_title' => 'Renai Circulation (恋愛サーキュレーション)',
      'music_artist' => 'Hanazawa Kana',
      'music_artist_id' => '14756',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538540640,
      'music_last_update_time' => 1479234320,
      'music_title_search' => 'renai circulation; 恋愛サーキュレーション',
      'music_artist_search' => '; hanazawa kana;',
      'music_album_search' => '',
      'music_composer' => 'meg rock',
      'music_album' => '',
      'music_listen' => 3387,
      'music_track_id' => 0,
      'music_filename' => '1726280-f30b6f73.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '(せーの♪）
(Se~ no ♪)
Một ~ Hai♪

でも そんなんじゃ だめ
Demo  sonnan ja  dame
Nhưng chẳng tốt chút nào hết
もう そんなんじゃ ほら
Mou  sonnan ja  hora
Nhưng chẳng tốt chút nào hết
心は進化するよ
Kokoro wa shinka suru yo
Trái ti...',
      'music_length' => 91,
      'music_width' => 720,
      'music_height' => 480,
      'music_artist_html' => '<a href="/ca-si/Hanazawa-Kana~Y3NuX2FydGlzdH4xNDc1Ng==.html">Hanazawa Kana</a>',
      'music_bitrate_html' => '<span style="color: darkgreen">720x480</span>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1733813,
      'music_title_url' => 'dear-bride~nishino-kana',
      'music_title' => 'Dear Bride',
      'music_artist' => 'Nishino Kana',
      'music_artist_id' => '13693',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538735618,
      'music_last_update_time' => 1477618454,
      'music_title_search' => 'dear bride',
      'music_artist_search' => '; nithino kana;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2632,
      'music_track_id' => 1,
      'music_filename' => '1733813-6ed9154f.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_length' => 334,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Nishino-Kana~Y3NuX2FydGlzdH4xMzY5Mw==.html">Nishino Kana</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1735723,
      'music_title_url' => 'suki-na-hito-ga-iru-koto~jy',
      'music_title' => 'Suki Na Hito Ga Iru Koto (好きな人がいること)',
      'music_artist' => 'JY',
      'music_artist_id' => '80855',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538891444,
      'music_last_update_time' => 1478144807,
      'music_title_search' => 'xuki na hito ga iru koto; 好きな人がいること',
      'music_artist_search' => '; ji;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11860,
      'music_track_id' => 0,
      'music_filename' => '1735723-6091c7dc.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Moshi gohun mae ni modoreru nara
Nani wo shimasuka?
Watashi wa sakki no henji mou ichido shitai
Doushite anna ni sokkenaku suruu shichatta no?
Anata no mae dato nandaka umaku ikanai.

Jinsei wa kou...',
      'music_length' => 302,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/JY~Y3NuX2FydGlzdH44MDg1NQ==.html">JY</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1634563,
      'music_title_url' => 'max-toki-315go-max-315~ngt48',
      'music_title' => 'Max Toki 315go (Max とき315 号)',
      'music_artist' => 'NGT48',
      'music_artist_id' => '13635',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538961366,
      'music_last_update_time' => 1501024722,
      'music_title_search' => 'max toki 315go; max とき315 号',
      'music_artist_search' => '; ngt48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6658,
      'music_track_id' => 3,
      'music_filename' => '1634563-28abcae7.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Saigo no tonneru wo
Nukere ba chikadzuku utsukushii ano machi
Kibou ga sumu to shinjite kita
Watashi ga umaresodatta
Subete wo shitte hoshii.

Ichiban daiji na hito wo
Tsurete kaeru koto
Deatta ano...',
      'music_length' => 357,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/NGT48~Y3NuX2FydGlzdH4xMzYzNQ==.html">NGT48</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1740046,
      'music_title_url' => 'buranko-under-members-akb48-show-ep132-nogizaka46-show-20161112~nogizaka46',
      'music_title' => 'Buranko (ブランコ) / Under Members (AKB48 SHOW! Ep132 (Nogizaka46 SHOW!) 2016.11.12)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538566162,
      'music_last_update_time' => 1505705714,
      'music_title_search' => 'buranko; ブランコ ; under memberx; akb48 thow ep132; novaka46 thow 2016 1 12',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1318,
      'music_track_id' => 3,
      'music_filename' => '1740046-bf846f96.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'kimi no koto wo gokai shitetanda
boku wo shiranai tte omottetanda
juubun kyori wo oita tsumori ga
zutto boku wa mirarete ita no ka...
hitotsu aita hajikko no BURANKO
kaze no you ni guuzen suwatte
k...',
      'music_length' => 304,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Nogizaka46~Y3NuX2FydGlzdH4xMzU1Nw==.html">Nogizaka46</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1749791,
      'music_title_url' => 'futari-saison~keyakizaka46',
      'music_title' => 'Futari Saison (二人セゾン)',
      'music_artist' => 'Keyakizaka46',
      'music_artist_id' => '15964',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538678496,
      'music_last_update_time' => 1481513265,
      'music_title_search' => 'futari xaixon; 二人セゾン',
      'music_artist_search' => '; keiakizaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11289,
      'music_track_id' => 1,
      'music_filename' => '1749791-27451a42.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'futari SEZON
futari SEZON
harunatsu de koi wo shite
futari SEZON
futari SEZON
akifuyu de satte iku
issho ni sugoshita kisetsu yo
koukai wa shitenai ka?
futari SEZON

michibata saiteru zassou ni mo...',
      'music_length' => 328,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/Keyakizaka46~Y3NuX2FydGlzdH4xNTk2NA==.html">Keyakizaka46</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1749793,
      'music_title_url' => 'bokutachi-no-sensou-five-cards~keyakizaka46',
      'music_title' => 'Bokutachi no Sensou (僕たちの戦争) / FIVE CARDS',
      'music_artist' => 'Keyakizaka46',
      'music_artist_id' => '15964',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538678939,
      'music_last_update_time' => 1481513271,
      'music_title_search' => 'bokutachi no xenxou; 僕たちの戦争 ; five cardx',
      'music_artist_search' => '; keiakizaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 431,
      'music_track_id' => 2,
      'music_filename' => '1749793-403e0733.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'kimi no PAPA ga futari no koto hantai shiteru to kiite
soba no PETTOBOTORU wo kabe ni nageta
KYAPPU ga hazure fukidashita awa wa tomerarenai (kanjou)
boku no nani wo shitte iru to iu no da?

ochits...',
      'music_length' => 267,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/Keyakizaka46~Y3NuX2FydGlzdH4xNTk2NA==.html">Keyakizaka46</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1754487,
      'music_title_url' => 'darkness~ske48',
      'music_title' => 'Darkness',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538826118,
      'music_last_update_time' => 1482745815,
      'music_title_search' => 'darknex',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3526,
      'music_track_id' => 0,
      'music_filename' => '1754487-e518ad9c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Love is darkness...

If night were to fall, oh, upon the two of us
Everything would vanish, oh, like a shooting star

[Kiz/Mat/Yag] ima no ai wa ichi SENCHI saki ga mienakute
[Kin/Kuw/Ish/Tak] tesa...',
      'music_length' => 264,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SKE48~Y3NuX2FydGlzdH4xMzY5NQ==.html">SKE48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1766405,
      'music_title_url' => 'boku-wa-shitteiru-movie-ver~ske48',
      'music_title' => 'Boku wa Shitteiru (僕は知っている) Movie ver.',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539028987,
      'music_last_update_time' => 1487465619,
      'music_title_search' => 'boku wa thiteiru; 僕は知っている movi ver',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1439,
      'music_track_id' => 0,
      'music_filename' => '1766405-f7abf2e5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 243,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SKE48~Y3NuX2FydGlzdH4xMzY5NQ==.html">SKE48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1779783,
      'music_title_url' => 'nandemonaiya-fns-kayousai-20161207-first-night~kamishiraishi-mone',
      'music_title' => 'Nandemonaiya (なんでもないや) (FNS Kayousai - 2016.12.07 - First Night)',
      'music_artist' => 'Kamishiraishi Mone',
      'music_artist_id' => '90218',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538574717,
      'music_last_update_time' => 1492316923,
      'music_title_search' => 'nandemonaia; なんでもないや ; fnx kaiouxai; 2016 12 07; firxt night',
      'music_artist_search' => '; kamithiraithi mone;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2176,
      'music_track_id' => 0,
      'music_filename' => '1779783-42fa4be3.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_length' => 207,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/Kamishiraishi-Mone~Y3NuX2FydGlzdH45MDIxOA==.html">Kamishiraishi Mone</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1759905,
      'music_title_url' => 'saba-kaidou~iwasa-misaki',
      'music_title' => 'Saba Kaidou (鯖街道)',
      'music_artist' => 'Iwasa Misaki',
      'music_artist_id' => '40397',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529693425,
      'music_last_update_time' => 1484888365,
      'music_title_search' => 'xaba kaidou; 鯖街道',
      'music_artist_search' => '; iwaxa mixaki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7943,
      'music_track_id' => 1,
      'music_filename' => '1759905-bad92b5b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'obama obama no minato ni saba ga agaru koro
afureru namida wa kareru deshou ka

owatta koi wo shiodzuke ni shite
negorozaka koeru

kyou wa toote mo juuhachi sato
miren seoi hitoritabi
anata ga itos...',
      'music_length' => 220,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Iwasa-Misaki~Y3NuX2FydGlzdH40MDM5Nw==.html">Iwasa Misaki</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1773211,
      'music_title_url' => 'two-roses~ske48',
      'music_title' => 'TWO ROSES',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529744585,
      'music_last_update_time' => 1489654300,
      'music_title_search' => '2 roxex',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => 'Akimoto Yasushi',
      'music_album' => '',
      'music_listen' => 2142,
      'music_track_id' => 9,
      'music_filename' => '1773211-94d27287.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'me to me ga atta sono shunkan ni
mienai te ga nobite kite
nanika daiji na mono
nusumareta

watashi hajime wa kizukanakatta
mune no dokoka SUUSUU shite
ana ga aita mitai ni
oboreru

sonna setsuna sa...',
      'music_length' => 290,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SKE48~Y3NuX2FydGlzdH4xMzY5NQ==.html">SKE48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1755890,
      'music_title_url' => 'boku-igai-no-dareka-kusaka-konomi-dance-version~nmb48',
      'music_title' => 'Boku Igai no Dareka (僕以外の誰か) -Kusaka Konomi Dance Version-',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1518176914,
      'music_last_update_time' => 1483403601,
      'music_title_search' => 'boku igai no dareka; 僕以外の誰か kuxaka konomi dance verxion',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9671,
      'music_track_id' => 2,
      'music_filename' => '1755890-9b71ef97.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 232,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/NMB48~Y3NuX2FydGlzdH4xNjgyNg==.html">NMB48</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1766410,
      'music_title_url' => 'kiss-position~ske48',
      'music_title' => 'Kiss Position (キスポジション)',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530328065,
      'music_last_update_time' => 1487465639,
      'music_title_search' => 'kix poxition; キスポジション',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1995,
      'music_track_id' => 0,
      'music_filename' => '1766410-c8319dd5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 284,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SKE48~Y3NuX2FydGlzdH4xMzY5NQ==.html">SKE48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1750415,
      'music_title_url' => 'sakasazaka-jankenmin~akb48',
      'music_title' => 'Sakasazaka (逆さ坂) / Jankenmin',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1499204696,
      'music_last_update_time' => 1481683718,
      'music_title_search' => 'xakaxazaka; 逆さ坂 ; jankenmin',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3547,
      'music_track_id' => 1,
      'music_filename' => '1750415-52f7ff5d.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 307,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1766406,
      'music_title_url' => 'is-that-your-secret~ske48',
      'music_title' => 'Is that your secret？',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1530851006,
      'music_last_update_time' => 1487465622,
      'music_title_search' => 'ix that iour xecret？',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1265,
      'music_track_id' => 0,
      'music_filename' => '1766406-0040e8e0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 244,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SKE48~Y3NuX2FydGlzdH4xMzY5NQ==.html">SKE48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1766413,
      'music_title_url' => 'aishiteru-to-ka-aishiteta-to-ka~ske48',
      'music_title' => 'Aishiteru to ka, Aishiteta to ka (愛してるとか、愛してたとか)',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529679863,
      'music_last_update_time' => 1487465648,
      'music_title_search' => 'aithiteru to ka aithiteta to ka; 愛してるとか、愛してたとか',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1241,
      'music_track_id' => 0,
      'music_filename' => '1766413-6d211721.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 234,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SKE48~Y3NuX2FydGlzdH4xMzY5NQ==.html">SKE48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1772593,
      'music_title_url' => 'kiss-datte-hidarikiki~ske48',
      'music_title' => 'Kiss Datte Hidarikiki (キスだって左利き)',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1534430330,
      'music_last_update_time' => 1489456779,
      'music_title_search' => 'kix date hidarikiki; キスだって左利き',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => 'Akimoto Yasushi',
      'music_album' => '',
      'music_listen' => 2713,
      'music_track_id' => 27,
      'music_filename' => '1772593-e99a8b9b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'KISU datte hidarikiki
watashi me wo tojite kizuita yo
anata sukoshi hidari ue kara
hora ne kuchibiru kasaneru

[Kiz/Mat/Mat/Tak] hidarite no FOOKU de
[Kiz/Mat/Mat/Tak] kiyou ni PASUTA wo maiteru
[O...',
      'music_length' => 362,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SKE48~Y3NuX2FydGlzdH4xMzY5NQ==.html">SKE48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
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
      'music_id' => 1740136,
      'music_title_url' => 'huyen-su-ca-mot-nguoi-mang-ten-quoc~hoang-oanh-ca-doan-ngan-khoi',
      'music_title' => 'Huyền Sử Ca Một Người Mang Tên Quốc',
      'music_artist' => 'Hoàng Oanh;Ca Đoàn Ngàn Khơi',
      'music_artist_id' => '1630;91666',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538633711,
      'music_last_update_time' => 1479117811,
      'music_title_search' => 'hin xu ca 1 ngui mang ten quc',
      'music_artist_search' => '; hoang oanh; ca doan ngan khoi;',
      'music_album_search' => '',
      'music_composer' => 'Phạm Duy',
      'music_album' => '',
      'music_listen' => 19914,
      'music_track_id' => 0,
      'music_filename' => '1740136-335ff910.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Anh Quốc ơi từ nay trong gió ra khơi 
Từ nay trên cánh mây trôi có hồn anh trong cõi lòng tôi 
Anh Quốc ơi nghìn thu anh nhớ đến tôi 
Thì xin cho Thái Dương soi nước Việt Nam sáng rọi muôn đời 
Nướ...',
      'music_length' => 301,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1721175,
      'music_title_url' => 'ppap-pen-pineapple-apple-pen~piko-taro',
      'music_title' => 'PPAP (Pen Pineapple Apple Pen)',
      'music_artist' => 'Piko-Taro',
      'music_artist_id' => '89787',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538823976,
      'music_last_update_time' => 1475442535,
      'music_title_search' => 'pap; pen pineaple aple pen',
      'music_artist_search' => '; piko taro;',
      'music_album_search' => '',
      'music_composer' => 'Piko-Taro',
      'music_album' => '',
      'music_listen' => 78911,
      'music_track_id' => 0,
      'music_filename' => '1721175-2c68afc0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'P-P-A-P
I have a pen
I have an apple
Ah, apple pen.

I have a pen
I have a pineapple
Ah, pineapple pen.

Apple pen, pineapplepen.',
      'music_length' => 68,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1723183,
      'music_title_url' => 'dear-bride~kana-nishino',
      'music_title' => 'Dear Bride',
      'music_artist' => 'Kana Nishino',
      'music_artist_id' => '1661',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538735484,
      'music_last_update_time' => 1475729200,
      'music_title_search' => 'dear bride',
      'music_artist_search' => '; kana nithino;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2382,
      'music_track_id' => 0,
      'music_filename' => '1723183-54deb89d.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 334,
      'music_width' => 1910,
      'music_height' => 1080,
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1812659,
      'music_title_url' => 'ay-mi-dios~iamchino-pitbull-yandel-chacal',
      'music_title' => 'Ay Mi Dios',
      'music_artist' => 'Iamchino;Pitbull;Yandel;Chacal',
      'music_artist_id' => '99059;1814;960;99060',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538753069,
      'music_last_update_time' => 1501814956,
      'music_title_search' => 'ai mi diox',
      'music_artist_search' => '; iamchino; pitbul; iandel; chacal;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1591,
      'music_track_id' => 0,
      'music_filename' => '1812659-41ff228c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Quizá se le olvido (Mr. WorldWide) 
1Que los besos más humildes le borraron de la piel el Chanel (Yandel) 
Yo no reclamo na\' 
Eso quedó en el ayer (Yandel) 
Agradecerle a estos ojos que la vieron l...',
      'music_length' => 288,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1611089,
      'music_title_url' => 'le-ua~danh-dat',
      'music_title' => 'Lệ Úa',
      'music_artist' => 'Danh Đạt',
      'music_artist_id' => '71965',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 8,
      'cover_id' => 0,
      'music_download_time' => 1495958817,
      'music_last_update_time' => 1452477754,
      'music_title_search' => 'le ua',
      'music_artist_search' => '; danh dat;',
      'music_album_search' => '',
      'music_composer' => 'Huy Phương',
      'music_album' => '',
      'music_listen' => 387,
      'music_track_id' => 0,
      'music_filename' => '1611089-e0a90ccf.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Giọt lệ này em dành cho anh
Khi dòng sông chia hai lối rẽ
Giọt lệ này xin dành cho anh
Khóc người thương, khóc ai phụ mình
Ru bên đời bằng mảnh tình dở dang
Phút giây này dao động trong ta.

[ĐK:]...',
      'music_length' => 271,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1611478,
      'music_title_url' => 'mashup-mua-phi-truong-mua-buon-live~trung-quan-dj-huy-dx-mastal',
      'music_title' => 'Mashup: Mưa Phi Trường; Mưa Buồn (Live)',
      'music_artist' => 'Trung Quân;DJ Huy DX;Mastal',
      'music_artist_id' => '2045;77392;77391',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1452672037,
      'music_last_update_time' => 1452649113,
      'music_title_search' => 'mathup; mua phi chung; mua bun; live',
      'music_artist_search' => '; chung quan; dj hi dx; maxtal;',
      'music_album_search' => '',
      'music_composer' => 'Việt Anh; Hoài Anh',
      'music_album' => '',
      'music_listen' => 691,
      'music_track_id' => 0,
      'music_filename' => '1611478-b9e80bcf.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '= Mưa Phi Trường = 

Bước, bước trong chiều mưa 
Đi về bước chân lẻ loi 
Phố cũ vẫn còn đây 
Phố xưa vắng em chờ anh. 

Đưa người về nơi giá băng 
Nước mắt em chung lệ tôi 
Biết rằng, từ nay mất nh...',
      'music_length' => 348,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1618900,
      'music_title_url' => 'dxdxd-music-japan-live~shinee',
      'music_title' => 'DxDxD (Music Japan Live)',
      'music_artist' => 'SHINee',
      'music_artist_id' => '1821',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1520664015,
      'music_last_update_time' => 1453624429,
      'music_title_search' => 'dxdxd; muxic japan live',
      'music_artist_search' => '; thine;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 387,
      'music_track_id' => 0,
      'music_filename' => '1618900-48220e4a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'What\'cha gonna do tonight?
Gira tsu iteru floor
Se yo funō no launcher.

Hute ki no all-rounder
Ishin furan ni spinnin\' around
Tanoshī koto shiyou
Toji kometa jo onets yeah.

De guchi sagsh teru ye...',
      'music_length' => 125,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1618901,
      'music_title_url' => 'the-time-we-have-spent-together~2pm',
      'music_title' => 'The Time We Have Spent Together',
      'music_artist' => '2PM',
      'music_artist_id' => '1820',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1520529249,
      'music_last_update_time' => 1453624388,
      'music_title_search' => 'the time we have xpent together',
      'music_artist_search' => '; 2pm;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 953,
      'music_track_id' => 0,
      'music_filename' => '1618901-81fbd77d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Me ga au tabi, egao ni naru
Ta to tenigiri aruku tabi ni
Ippo ippo, sono ashiato
Mune ni nokoru omoide sa.

Me no mae hiraiteita
Wakaremichi no mae
Mukiatte tatteiru yo.

Mou jikan wa nai kedo
Itsu...',
      'music_length' => 322,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1618903,
      'music_title_url' => 'love-me-right-romantic-universe-the-exoluxion-in-tokyo-live~exo',
      'music_title' => 'Love Me Right ~Romantic Universe~ (The EXO\'luXion In Tokyo Live)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1519456598,
      'music_last_update_time' => 1453624324,
      'music_title_search' => 'love me right romantic univerxe ; the exo luxion in tokio live',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8401,
      'music_track_id' => 0,
      'music_filename' => '1618903-d4921c44.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Oh Yeah! C\'mon!

Take your time
Seinaru tsuki ga terasu
(Na Na Na Na x 2)
So tonight
Tenkuu kakeru yo kon\'ya wa
(Yea Yea Yea Yea x 2)

Just right
Shidou wa joujou akuseru datte joukigen
O dekake ts...',
      'music_length' => 231,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1622686,
      'music_title_url' => 'we-belong-together~jannine-weigel',
      'music_title' => 'We Belong Together (เพราะเราคู่กัน)',
      'music_artist' => 'Jannine Weigel',
      'music_artist_id' => '67803',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1505653897,
      'music_last_update_time' => 1454291573,
      'music_title_search' => 'we belong together; เพราะเราคู่กัน',
      'music_artist_search' => '; janine weigel;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1413,
      'music_track_id' => 0,
      'music_filename' => '1622686-1c63ae06.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 181,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1624362,
      'music_title_url' => 'dont-stop~nicole',
      'music_title' => 'Don\'t Stop',
      'music_artist' => 'Nicole',
      'music_artist_id' => '2965',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536559152,
      'music_last_update_time' => 1454567700,
      'music_title_search' => 'don t xtop',
      'music_artist_search' => '; nicole;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2130,
      'music_track_id' => 0,
      'music_filename' => '1624362-66f8a242.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_length' => 217,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1625167,
      'music_title_url' => 'nhu-ngay-hom-qua-japanese-cover~mingoz',
      'music_title' => 'Như Ngày Hôm Qua (Japanese Cover)',
      'music_artist' => 'Mingoz',
      'music_artist_id' => '67600',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537469753,
      'music_last_update_time' => 1456040997,
      'music_title_search' => 'nhu ngai hom qua; japanexe cover',
      'music_artist_search' => '; mingoz;',
      'music_album_search' => '',
      'music_composer' => 'Sơn Tùng M-TP; Chuyển Ngữ: XXI; Mika Shimura',
      'music_album' => '',
      'music_listen' => 7849,
      'music_track_id' => 0,
      'music_filename' => '1625167-8f5414c6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 253,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1625404,
      'music_title_url' => 'around-the-world-love-train-laugh-laugh-laugh-buzz-rhythm-live-2015~got7',
      'music_title' => 'Around The World; Love Train; Laugh Laugh Laugh (Buzz Rhythm Live 2015)',
      'music_artist' => 'Got7',
      'music_artist_id' => '4157',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1507787845,
      'music_last_update_time' => 1455870669,
      'music_title_search' => 'around the world; love chain; laugh laugh laugh; buz rhithm live 2015',
      'music_artist_search' => '; got7;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 956,
      'music_track_id' => 0,
      'music_filename' => '1625404-910df67c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Around the world]

I got i got i got i got 7.

Hade na big wave sou kore ga movement
Let\'s rock the party
What\'s up!? Around the world
Kimi no mimi de jidai wo feel it
Kiki nogasenai
What\'s up!? A...',
      'music_length' => 720,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1626453,
      'music_title_url' => 'fantastic-baby-bang-bang-bang-japanese-version-music-station-live~big-bang',
      'music_title' => 'Fantastic Baby; Bang Bang Bang (Japanese Version) (Music Station Live)',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1534697338,
      'music_last_update_time' => 1455869124,
      'music_title_search' => 'fantaxtic babi; bang bang bang; japanexe verxion ; muxic xtation live',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9993,
      'music_track_id' => 0,
      'music_filename' => '1626453-a9ca37dc.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Fantastic baby]

Yoru ga kita mezamashina
We gon party like
Lilili rarara
Atsumarina
Kono pāti wa
Korekara sa
Lilili rarara.

Shunkan de kyatchi shita sono-me wa mada
Asobi tarite inai allright
Ha...',
      'music_length' => 327,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1630399,
      'music_title_url' => 'white-forces~fripside',
      'music_title' => 'White Forces',
      'music_artist' => 'fripSide',
      'music_artist_id' => '18068',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512471503,
      'music_last_update_time' => 1456187113,
      'music_title_search' => 'white forcex',
      'music_artist_search' => '; fripxide;',
      'music_album_search' => '',
      'music_composer' => 'Satoshi Yaginuma',
      'music_album' => '',
      'music_listen' => 933,
      'music_track_id' => 5,
      'music_filename' => '1630399-c82748e5.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_length' => 309,
      'music_width' => 864,
      'music_height' => 486,
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1630732,
      'music_title_url' => 'kimi-wa-melody~akb48',
      'music_title' => 'Kimi Wa Melody',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529305319,
      'music_last_update_time' => 1456393303,
      'music_title_search' => 'kimi wa melodi',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => 'Akimoto Yasushi',
      'music_album' => '',
      'music_listen' => 11895,
      'music_track_id' => 0,
      'music_filename' => '1630732-0ee3106d.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Haru no mahou ni hizashi wa kawatte
Hito mo machi mo akarume ni kigaeta
Kaze ni sasoware kidzukeba shirazu ni
Boku wa kuchizusandeita.

Tooi mukashi no kioku no kanata ni
Wasurekaketeta futari no f...',
      'music_length' => 288,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1630959,
      'music_title_url' => 'brand-new-days~a-pink',
      'music_title' => 'Brand New Days',
      'music_artist' => 'A Pink',
      'music_artist_id' => '2310',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535785442,
      'music_last_update_time' => 1456546726,
      'music_title_search' => 'brand new daix',
      'music_artist_search' => '; a pink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9324,
      'music_track_id' => 0,
      'music_filename' => '1630959-05d5207a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 228,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1631226,
      'music_title_url' => 'brand-new-days-dance-version~a-pink',
      'music_title' => 'Brand New Days (Dance Version)',
      'music_artist' => 'A Pink',
      'music_artist_id' => '2310',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1505128017,
      'music_last_update_time' => 1456748076,
      'music_title_search' => 'brand new daix; dance verxion',
      'music_artist_search' => '; a pink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2054,
      'music_track_id' => 0,
      'music_filename' => '1631226-a1e3fe18.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 222,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1632679,
      'music_title_url' => 'intro-mrmr-japanese-version-4th-tour-phantasia-in-japan-live~girls-generation',
      'music_title' => 'Intro; Mr.Mr. (Japanese Version) (4th Tour Phantasia In Japan Live)',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1518403590,
      'music_last_update_time' => 1456709164,
      'music_title_search' => 'incho; mr mr ; japanexe verxion ; 4th tour phantaxia in japan live',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => 'The Underdogs; Kim Hee Jeong; Cho Yoon Kyung',
      'music_album' => '',
      'music_listen' => 4515,
      'music_track_id' => 0,
      'music_filename' => '1632679-ecd77321.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Let\'s go! Ai o osorete
Zutto! Kino nai furi wa
Naze! Saguri saguri de
Oh oh oh~, Oh oh oh~ 
Nee haruka naru yume no kanata
Mayu i yuwa o mo kieru se naka
Tsui tei, kitai noni
You Bad Bad Bad Boy, Y...',
      'music_length' => 378,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1632682,
      'music_title_url' => 'catch-me-if-you-can-japanese-version-4th-tour-phantasia-in-japa~girls-generation',
      'music_title' => 'Catch Me If You Can (Japanese Version) (4th Tour Phantasia In Japan Live)',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1516685641,
      'music_last_update_time' => 1456837560,
      'music_title_search' => 'catch me if iou can; japanexe verxion ; 4th tour phantaxia in japan live',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4807,
      'music_track_id' => 0,
      'music_filename' => '1632682-043b750b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '(Did it) Kotoba yori
(Did it) Karada dake
(Did it) Shinjiteru
(Did it) Chishiki yori
(Did it) Ishiki dake
(Did it) Takameteru.

Sakki no watashi ni koi o shite
Ima kara KISU suru no
Ichibyou mae ga...',
      'music_length' => 280,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1740136,
      'music_title_url' => 'huyen-su-ca-mot-nguoi-mang-ten-quoc~hoang-oanh-ca-doan-ngan-khoi',
      'music_title' => 'Huyền Sử Ca Một Người Mang Tên Quốc',
      'music_artist' => 'Hoàng Oanh;Ca Đoàn Ngàn Khơi',
      'music_artist_id' => '1630;91666',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538633711,
      'music_last_update_time' => 1479117811,
      'music_title_search' => 'hin xu ca 1 ngui mang ten quc',
      'music_artist_search' => '; hoang oanh; ca doan ngan khoi;',
      'music_album_search' => '',
      'music_composer' => 'Phạm Duy',
      'music_album' => '',
      'music_listen' => 19914,
      'music_track_id' => 0,
      'music_filename' => '1740136-335ff910.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Anh Quốc ơi từ nay trong gió ra khơi 
Từ nay trên cánh mây trôi có hồn anh trong cõi lòng tôi 
Anh Quốc ơi nghìn thu anh nhớ đến tôi 
Thì xin cho Thái Dương soi nước Việt Nam sáng rọi muôn đời 
Nướ...',
      'music_length' => 301,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Hoang-Oanh~Y3NuX2FydGlzdH4xNjMw.html">Hoàng Oanh</a>, <a href="/ca-si/Ca-Doan-Ngan-Khoi~Y3NuX2FydGlzdH45MTY2Ng==.html">Ca Đoàn Ngàn Khơi</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1721175,
      'music_title_url' => 'ppap-pen-pineapple-apple-pen~piko-taro',
      'music_title' => 'PPAP (Pen Pineapple Apple Pen)',
      'music_artist' => 'Piko-Taro',
      'music_artist_id' => '89787',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538823976,
      'music_last_update_time' => 1475442535,
      'music_title_search' => 'pap; pen pineaple aple pen',
      'music_artist_search' => '; piko taro;',
      'music_album_search' => '',
      'music_composer' => 'Piko-Taro',
      'music_album' => '',
      'music_listen' => 78911,
      'music_track_id' => 0,
      'music_filename' => '1721175-2c68afc0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'P-P-A-P
I have a pen
I have an apple
Ah, apple pen.

I have a pen
I have a pineapple
Ah, pineapple pen.

Apple pen, pineapplepen.',
      'music_length' => 68,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Piko-Taro~Y3NuX2FydGlzdH44OTc4Nw==.html">Piko-Taro</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1723183,
      'music_title_url' => 'dear-bride~kana-nishino',
      'music_title' => 'Dear Bride',
      'music_artist' => 'Kana Nishino',
      'music_artist_id' => '1661',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538735484,
      'music_last_update_time' => 1475729200,
      'music_title_search' => 'dear bride',
      'music_artist_search' => '; kana nithino;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2382,
      'music_track_id' => 0,
      'music_filename' => '1723183-54deb89d.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 334,
      'music_width' => 1910,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Kana-Nishino~Y3NuX2FydGlzdH4xNjYx.html">Kana Nishino</a>',
      'music_bitrate_html' => '<span style="color: orange">1910x1080</span>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1812659,
      'music_title_url' => 'ay-mi-dios~iamchino-pitbull-yandel-chacal',
      'music_title' => 'Ay Mi Dios',
      'music_artist' => 'Iamchino;Pitbull;Yandel;Chacal',
      'music_artist_id' => '99059;1814;960;99060',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538753069,
      'music_last_update_time' => 1501814956,
      'music_title_search' => 'ai mi diox',
      'music_artist_search' => '; iamchino; pitbul; iandel; chacal;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1591,
      'music_track_id' => 0,
      'music_filename' => '1812659-41ff228c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Quizá se le olvido (Mr. WorldWide) 
1Que los besos más humildes le borraron de la piel el Chanel (Yandel) 
Yo no reclamo na\' 
Eso quedó en el ayer (Yandel) 
Agradecerle a estos ojos que la vieron l...',
      'music_length' => 288,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Iamchino~Y3NuX2FydGlzdH45OTA1OQ==.html">Iamchino</a>, <a href="/ca-si/Pitbull~Y3NuX2FydGlzdH4xODE0.html">Pitbull</a>, <a href="/ca-si/Yandel~Y3NuX2FydGlzdH45NjA=.html">Yandel</a>, <a href="/ca-si/Chacal~Y3NuX2FydGlzdH45OTA2MA==.html">Chacal</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1611089,
      'music_title_url' => 'le-ua~danh-dat',
      'music_title' => 'Lệ Úa',
      'music_artist' => 'Danh Đạt',
      'music_artist_id' => '71965',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 8,
      'cover_id' => 0,
      'music_download_time' => 1495958817,
      'music_last_update_time' => 1452477754,
      'music_title_search' => 'le ua',
      'music_artist_search' => '; danh dat;',
      'music_album_search' => '',
      'music_composer' => 'Huy Phương',
      'music_album' => '',
      'music_listen' => 387,
      'music_track_id' => 0,
      'music_filename' => '1611089-e0a90ccf.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Giọt lệ này em dành cho anh
Khi dòng sông chia hai lối rẽ
Giọt lệ này xin dành cho anh
Khóc người thương, khóc ai phụ mình
Ru bên đời bằng mảnh tình dở dang
Phút giây này dao động trong ta.

[ĐK:]...',
      'music_length' => 271,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Danh-Dat~Y3NuX2FydGlzdH43MTk2NQ==.html">Danh Đạt</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1611478,
      'music_title_url' => 'mashup-mua-phi-truong-mua-buon-live~trung-quan-dj-huy-dx-mastal',
      'music_title' => 'Mashup: Mưa Phi Trường; Mưa Buồn (Live)',
      'music_artist' => 'Trung Quân;DJ Huy DX;Mastal',
      'music_artist_id' => '2045;77392;77391',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1452672037,
      'music_last_update_time' => 1452649113,
      'music_title_search' => 'mathup; mua phi chung; mua bun; live',
      'music_artist_search' => '; chung quan; dj hi dx; maxtal;',
      'music_album_search' => '',
      'music_composer' => 'Việt Anh; Hoài Anh',
      'music_album' => '',
      'music_listen' => 691,
      'music_track_id' => 0,
      'music_filename' => '1611478-b9e80bcf.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '= Mưa Phi Trường = 

Bước, bước trong chiều mưa 
Đi về bước chân lẻ loi 
Phố cũ vẫn còn đây 
Phố xưa vắng em chờ anh. 

Đưa người về nơi giá băng 
Nước mắt em chung lệ tôi 
Biết rằng, từ nay mất nh...',
      'music_length' => 348,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Trung-Quan~Y3NuX2FydGlzdH4yMDQ1.html">Trung Quân</a>, <a href="/ca-si/DJ-Huy-DX~Y3NuX2FydGlzdH43NzM5Mg==.html">DJ Huy DX</a>, <a href="/ca-si/Mastal~Y3NuX2FydGlzdH43NzM5MQ==.html">Mastal</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1618900,
      'music_title_url' => 'dxdxd-music-japan-live~shinee',
      'music_title' => 'DxDxD (Music Japan Live)',
      'music_artist' => 'SHINee',
      'music_artist_id' => '1821',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1520664015,
      'music_last_update_time' => 1453624429,
      'music_title_search' => 'dxdxd; muxic japan live',
      'music_artist_search' => '; thine;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 387,
      'music_track_id' => 0,
      'music_filename' => '1618900-48220e4a.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'What\'cha gonna do tonight?
Gira tsu iteru floor
Se yo funō no launcher.

Hute ki no all-rounder
Ishin furan ni spinnin\' around
Tanoshī koto shiyou
Toji kometa jo onets yeah.

De guchi sagsh teru ye...',
      'music_length' => 125,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SHINee~Y3NuX2FydGlzdH4xODIx.html">SHINee</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1618901,
      'music_title_url' => 'the-time-we-have-spent-together~2pm',
      'music_title' => 'The Time We Have Spent Together',
      'music_artist' => '2PM',
      'music_artist_id' => '1820',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1520529249,
      'music_last_update_time' => 1453624388,
      'music_title_search' => 'the time we have xpent together',
      'music_artist_search' => '; 2pm;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 953,
      'music_track_id' => 0,
      'music_filename' => '1618901-81fbd77d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Me ga au tabi, egao ni naru
Ta to tenigiri aruku tabi ni
Ippo ippo, sono ashiato
Mune ni nokoru omoide sa.

Me no mae hiraiteita
Wakaremichi no mae
Mukiatte tatteiru yo.

Mou jikan wa nai kedo
Itsu...',
      'music_length' => 322,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/2PM~Y3NuX2FydGlzdH4xODIw.html">2PM</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1618903,
      'music_title_url' => 'love-me-right-romantic-universe-the-exoluxion-in-tokyo-live~exo',
      'music_title' => 'Love Me Right ~Romantic Universe~ (The EXO\'luXion In Tokyo Live)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1519456598,
      'music_last_update_time' => 1453624324,
      'music_title_search' => 'love me right romantic univerxe ; the exo luxion in tokio live',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8401,
      'music_track_id' => 0,
      'music_filename' => '1618903-d4921c44.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Oh Yeah! C\'mon!

Take your time
Seinaru tsuki ga terasu
(Na Na Na Na x 2)
So tonight
Tenkuu kakeru yo kon\'ya wa
(Yea Yea Yea Yea x 2)

Just right
Shidou wa joujou akuseru datte joukigen
O dekake ts...',
      'music_length' => 231,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1622686,
      'music_title_url' => 'we-belong-together~jannine-weigel',
      'music_title' => 'We Belong Together (เพราะเราคู่กัน)',
      'music_artist' => 'Jannine Weigel',
      'music_artist_id' => '67803',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1505653897,
      'music_last_update_time' => 1454291573,
      'music_title_search' => 'we belong together; เพราะเราคู่กัน',
      'music_artist_search' => '; janine weigel;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1413,
      'music_track_id' => 0,
      'music_filename' => '1622686-1c63ae06.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 181,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Jannine-Weigel~Y3NuX2FydGlzdH42NzgwMw==.html">Jannine Weigel</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1624362,
      'music_title_url' => 'dont-stop~nicole',
      'music_title' => 'Don\'t Stop',
      'music_artist' => 'Nicole',
      'music_artist_id' => '2965',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536559152,
      'music_last_update_time' => 1454567700,
      'music_title_search' => 'don t xtop',
      'music_artist_search' => '; nicole;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2130,
      'music_track_id' => 0,
      'music_filename' => '1624362-66f8a242.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_length' => 217,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Nicole~Y3NuX2FydGlzdH4yOTY1.html">Nicole</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1625167,
      'music_title_url' => 'nhu-ngay-hom-qua-japanese-cover~mingoz',
      'music_title' => 'Như Ngày Hôm Qua (Japanese Cover)',
      'music_artist' => 'Mingoz',
      'music_artist_id' => '67600',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537469753,
      'music_last_update_time' => 1456040997,
      'music_title_search' => 'nhu ngai hom qua; japanexe cover',
      'music_artist_search' => '; mingoz;',
      'music_album_search' => '',
      'music_composer' => 'Sơn Tùng M-TP; Chuyển Ngữ: XXI; Mika Shimura',
      'music_album' => '',
      'music_listen' => 7849,
      'music_track_id' => 0,
      'music_filename' => '1625167-8f5414c6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 253,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Mingoz~Y3NuX2FydGlzdH42NzYwMA==.html">Mingoz</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1625404,
      'music_title_url' => 'around-the-world-love-train-laugh-laugh-laugh-buzz-rhythm-live-2015~got7',
      'music_title' => 'Around The World; Love Train; Laugh Laugh Laugh (Buzz Rhythm Live 2015)',
      'music_artist' => 'Got7',
      'music_artist_id' => '4157',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1507787845,
      'music_last_update_time' => 1455870669,
      'music_title_search' => 'around the world; love chain; laugh laugh laugh; buz rhithm live 2015',
      'music_artist_search' => '; got7;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 956,
      'music_track_id' => 0,
      'music_filename' => '1625404-910df67c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Around the world]

I got i got i got i got 7.

Hade na big wave sou kore ga movement
Let\'s rock the party
What\'s up!? Around the world
Kimi no mimi de jidai wo feel it
Kiki nogasenai
What\'s up!? A...',
      'music_length' => 720,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/Got7~Y3NuX2FydGlzdH40MTU3.html">Got7</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1626453,
      'music_title_url' => 'fantastic-baby-bang-bang-bang-japanese-version-music-station-live~big-bang',
      'music_title' => 'Fantastic Baby; Bang Bang Bang (Japanese Version) (Music Station Live)',
      'music_artist' => 'Big Bang',
      'music_artist_id' => '982',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1534697338,
      'music_last_update_time' => 1455869124,
      'music_title_search' => 'fantaxtic babi; bang bang bang; japanexe verxion ; muxic xtation live',
      'music_artist_search' => '; big bang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9993,
      'music_track_id' => 0,
      'music_filename' => '1626453-a9ca37dc.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Fantastic baby]

Yoru ga kita mezamashina
We gon party like
Lilili rarara
Atsumarina
Kono pāti wa
Korekara sa
Lilili rarara.

Shunkan de kyatchi shita sono-me wa mada
Asobi tarite inai allright
Ha...',
      'music_length' => 327,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Big-Bang~Y3NuX2FydGlzdH45ODI=.html">Big Bang</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1630399,
      'music_title_url' => 'white-forces~fripside',
      'music_title' => 'White Forces',
      'music_artist' => 'fripSide',
      'music_artist_id' => '18068',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512471503,
      'music_last_update_time' => 1456187113,
      'music_title_search' => 'white forcex',
      'music_artist_search' => '; fripxide;',
      'music_album_search' => '',
      'music_composer' => 'Satoshi Yaginuma',
      'music_album' => '',
      'music_listen' => 933,
      'music_track_id' => 5,
      'music_filename' => '1630399-c82748e5.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '',
      'music_length' => 309,
      'music_width' => 864,
      'music_height' => 486,
      'music_artist_html' => '<a href="/ca-si/fripSide~Y3NuX2FydGlzdH4xODA2OA==.html">fripSide</a>',
      'music_bitrate_html' => '<span style="color: darkblue">864x486</span>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1630732,
      'music_title_url' => 'kimi-wa-melody~akb48',
      'music_title' => 'Kimi Wa Melody',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529305319,
      'music_last_update_time' => 1456393303,
      'music_title_search' => 'kimi wa melodi',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => 'Akimoto Yasushi',
      'music_album' => '',
      'music_listen' => 11895,
      'music_track_id' => 0,
      'music_filename' => '1630732-0ee3106d.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Haru no mahou ni hizashi wa kawatte
Hito mo machi mo akarume ni kigaeta
Kaze ni sasoware kidzukeba shirazu ni
Boku wa kuchizusandeita.

Tooi mukashi no kioku no kanata ni
Wasurekaketeta futari no f...',
      'music_length' => 288,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1630959,
      'music_title_url' => 'brand-new-days~a-pink',
      'music_title' => 'Brand New Days',
      'music_artist' => 'A Pink',
      'music_artist_id' => '2310',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535785442,
      'music_last_update_time' => 1456546726,
      'music_title_search' => 'brand new daix',
      'music_artist_search' => '; a pink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9324,
      'music_track_id' => 0,
      'music_filename' => '1630959-05d5207a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 228,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/A-Pink~Y3NuX2FydGlzdH4yMzEw.html">A Pink</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1631226,
      'music_title_url' => 'brand-new-days-dance-version~a-pink',
      'music_title' => 'Brand New Days (Dance Version)',
      'music_artist' => 'A Pink',
      'music_artist_id' => '2310',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1505128017,
      'music_last_update_time' => 1456748076,
      'music_title_search' => 'brand new daix; dance verxion',
      'music_artist_search' => '; a pink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2054,
      'music_track_id' => 0,
      'music_filename' => '1631226-a1e3fe18.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 222,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/A-Pink~Y3NuX2FydGlzdH4yMzEw.html">A Pink</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1632679,
      'music_title_url' => 'intro-mrmr-japanese-version-4th-tour-phantasia-in-japan-live~girls-generation',
      'music_title' => 'Intro; Mr.Mr. (Japanese Version) (4th Tour Phantasia In Japan Live)',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1518403590,
      'music_last_update_time' => 1456709164,
      'music_title_search' => 'incho; mr mr ; japanexe verxion ; 4th tour phantaxia in japan live',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => 'The Underdogs; Kim Hee Jeong; Cho Yoon Kyung',
      'music_album' => '',
      'music_listen' => 4515,
      'music_track_id' => 0,
      'music_filename' => '1632679-ecd77321.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Let\'s go! Ai o osorete
Zutto! Kino nai furi wa
Naze! Saguri saguri de
Oh oh oh~, Oh oh oh~ 
Nee haruka naru yume no kanata
Mayu i yuwa o mo kieru se naka
Tsui tei, kitai noni
You Bad Bad Bad Boy, Y...',
      'music_length' => 378,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH45MjI=.html">Girls\' Generation</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1632682,
      'music_title_url' => 'catch-me-if-you-can-japanese-version-4th-tour-phantasia-in-japa~girls-generation',
      'music_title' => 'Catch Me If You Can (Japanese Version) (4th Tour Phantasia In Japan Live)',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1516685641,
      'music_last_update_time' => 1456837560,
      'music_title_search' => 'catch me if iou can; japanexe verxion ; 4th tour phantaxia in japan live',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4807,
      'music_track_id' => 0,
      'music_filename' => '1632682-043b750b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '(Did it) Kotoba yori
(Did it) Karada dake
(Did it) Shinjiteru
(Did it) Chishiki yori
(Did it) Ishiki dake
(Did it) Takameteru.

Sakki no watashi ni koi o shite
Ima kara KISU suru no
Ichibyou mae ga...',
      'music_length' => 280,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH45MjI=.html">Girls\' Generation</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
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