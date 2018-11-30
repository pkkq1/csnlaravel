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
      'music_downloads_today' => 27,
      'music_id' => 1948832,
      'music_title_url' => 'phan-gai-thuyen-quyen~dan-nguyen-hoang-nhung',
      'music_title' => 'Phận Gái Thuyền Quyên',
      'music_artist' => 'Đan Nguyên;Hoàng Nhung',
      'music_artist_id' => '2347;13828',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539075815,
      'music_last_update_time' => 1535715479,
      'music_title_search' => 'phan gai thin qin',
      'music_artist_search' => '; dan ngin; hoang nhung;',
      'music_album_search' => '',
      'music_composer' => 'Giao Tiên',
      'music_album' => '',
      'music_listen' => 50549,
      'music_track_id' => 0,
      'music_filename' => '1948832-06052b18.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Từ nay thôi đành duyên mình lỡ đôi
Dù vương vấn mãi cũng thế mà thôi
Khi xưa thầm nói yêu nhau
Bao nhiêu mộng thắm ban đầu
Thôi xin đừng tiếc nhớ thương chi.

Từ nay đôi mình thôi đừng nhớ mong
Mườ...',
      'music_length' => 318,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    1 => 
    array (
      'music_downloads_today' => 6,
      'music_id' => 1944838,
      'music_title_url' => 'gap-lai-co-nhan~dan-nguyen',
      'music_title' => 'Gặp Lại Cố Nhân',
      'music_artist' => 'Đan Nguyên',
      'music_artist_id' => '2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539052757,
      'music_last_update_time' => 1534594888,
      'music_title_search' => 'gap lai co nhan',
      'music_artist_search' => '; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Hàn Sinh',
      'music_album' => '',
      'music_listen' => 17065,
      'music_track_id' => 0,
      'music_filename' => '1944838-37b67c93.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Lâu lắm xa rồi mình lại gặp nhau
Hai đứa không còn ngày vui bên nhau
Giờ em vui bước bên ai
Còn tôi lòng vẫn chưa phai
Mối tình xưa nhiều chua cay.

Em có thương gì kỷ niệm đầu tiên
Hai đứa xây mộn...',
      'music_length' => 302,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1798667,
      'music_title_url' => 'hoa-trinh-nu~phuong-anh',
      'music_title' => 'Hoa Trinh Nữ',
      'music_artist' => 'Phương Anh',
      'music_artist_id' => '1430',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538969723,
      'music_last_update_time' => 1498113777,
      'music_title_search' => 'hoa chinh nu',
      'music_artist_search' => '; phung em;',
      'music_album_search' => '',
      'music_composer' => 'Trần Thiện Thanh',
      'music_album' => '',
      'music_listen' => 236369,
      'music_track_id' => 0,
      'music_filename' => '1798667-3df36ead.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Qua một rừng hoang gió núi theo sang giũ bụi đường trên vai
Hái cây hoa dại lẻ loi bên đường gọi là hoa trinh nữ
Hoa trinh nữ không mặn mà bằng nàng hồng kiêu sa
Hoa đâu dám khoe màu cùng một nàng...',
      'music_length' => 354,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    3 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1942951,
      'music_title_url' => 'noi-lai-tinh-xua~huong-lan-che-linh',
      'music_title' => 'Nối Lại Tình Xưa',
      'music_artist' => 'Hương Lan;Chế Linh',
      'music_artist_id' => '1631;4615',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539051840,
      'music_last_update_time' => 1534181878,
      'music_title_search' => 'noi lai tinh xua',
      'music_artist_search' => '; hung lan; che linh;',
      'music_album_search' => '',
      'music_composer' => 'Ngân Giang',
      'music_album' => '',
      'music_listen' => 21866,
      'music_track_id' => 0,
      'music_filename' => '1942951-3ab4dbb5.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Về đây bên nhau, ta nối lại tình xưa
Chuyện tình mà bao năm qua, em gói ghém từng kỷ niệm
Phai nắng con đường xưa, những chiều hẹn hò mưa đổ
Mưa ướt lạnh vai anh, em thấy lòng mình xót xa.

Mùa thu...',
      'music_length' => 348,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    4 => 
    array (
      'music_downloads_today' => 7,
      'music_id' => 1834297,
      'music_title_url' => 'cham-khe-tim-anh-mot-chut-thoi~noo-phuoc-thinh',
      'music_title' => 'Chạm Khẽ Tim Anh Một Chút Thôi',
      'music_artist' => 'Noo Phước Thịnh',
      'music_artist_id' => '1611',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539074926,
      'music_last_update_time' => 1507863044,
      'music_title_search' => 'cham khe tim em mot chut thoi',
      'music_artist_search' => '; no phuc thinh;',
      'music_album_search' => '',
      'music_composer' => 'Tăng Nhật Tuệ',
      'music_album' => '',
      'music_listen' => 191491,
      'music_track_id' => 0,
      'music_filename' => '1834297-7ed3708b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Chạm nhẹ vào đôi mắt chạm nhẹ vào bờ vai 
Chạm nhẹ vào đôi môi ngày mai xa anh rồi
Chạm nhẹ vào trí nhớ chạm nhẹ vào cơn mơ 
Mình đã chạm khẽ vào nhau những ngày ngây thơ 
Anh yêu cô gái nhỏ bé.

T...',
      'music_length' => 550,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    5 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1947746,
      'music_title_url' => 'chuyen-tinh-lan-va-diep-4~nhu-quynh',
      'music_title' => 'Chuyện Tình Lan Và Điệp 4',
      'music_artist' => 'Như Quỳnh',
      'music_artist_id' => '32',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538990285,
      'music_last_update_time' => 1535458312,
      'music_title_search' => 'chin tinh lan va dip 4',
      'music_artist_search' => '; nhu qinh;',
      'music_album_search' => '',
      'music_composer' => 'Hamlet Trương',
      'music_album' => '',
      'music_listen' => 4881,
      'music_track_id' => 0,
      'music_filename' => '1947746-52e21941.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Hoàng hôn buông xuống trên mái đầu còn xanh mà tim chẳng lành 
Chân bước thật mau đời còn gì ngày sau khi đã cách xa nhau 
Điệp đến tìm Lan trong nỗi hoang mang 
Chẳng biết người xưa có đang u sầu...',
      'music_length' => 373,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    6 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1870564,
      'music_title_url' => 'lien-khuc-doan-buon-dem-mua-mua-dem-tinh-nho~manh-quynh-le-quyen',
      'music_title' => 'Liên Khúc: Đoạn Buồn Đêm Mưa; Mưa Đêm Tỉnh Nhỏ',
      'music_artist' => 'Mạnh Quỳnh;Lệ Quyên',
      'music_artist_id' => '1583;1662',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539005611,
      'music_last_update_time' => 1517968292,
      'music_title_search' => 'lin khuc; doan bun dem mua; mua dem tinh nho',
      'music_artist_search' => '; manh qinh; le qin;',
      'music_album_search' => '',
      'music_composer' => 'Vinh Sử; Hà Phương',
      'music_album' => '',
      'music_listen' => 15444,
      'music_track_id' => 0,
      'music_filename' => '1870564-f90b2bf7.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Đoạn Buồn Đêm Mưa]

Đêm nay trên phố mưa tơi bời
Lòng nghe bao nhớ nhung đầy vơi
Làm sao cho anh vui còn ai cho
Em vui bằng môi trên đôi môi
Ôi tuyệt vời.

Đêm nay em biết anh thương nhiều
Buồn tê...',
      'music_length' => 349,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1881230,
      'music_title_url' => 'ca-mot-troi-thuong-nho~ho-ngoc-ha',
      'music_title' => 'Cả Một Trời Thương Nhớ',
      'music_artist' => 'Hồ Ngọc Hà',
      'music_artist_id' => '1468',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538920951,
      'music_last_update_time' => 1519963057,
      'music_title_search' => 'ca 1 choi thung nho',
      'music_artist_search' => '; ho ngoc ha;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Minh Cường',
      'music_album' => '',
      'music_listen' => 3552,
      'music_track_id' => 0,
      'music_filename' => '1881230-c8d5303e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Cả một trời thương nhớ, một trời ngu ngơ, một trời ngây thơ
Cả một đời lầm lỡ, để rồi bơ vơ, để rồi tan vỡ
Chỉ là nước mắt cứ thế rơi, chỉ là nỗi nhớ muốn cất lời
Chỉ là những ngón tay không thể bu...',
      'music_length' => 435,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    8 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1822327,
      'music_title_url' => 'nguoi-di-ngoai-pho~phuong-anh',
      'music_title' => 'Người Đi Ngoài Phố',
      'music_artist' => 'Phương Anh',
      'music_artist_id' => '1430',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539008303,
      'music_last_update_time' => 1504583250,
      'music_title_search' => 'ngui di ngoai pho',
      'music_artist_search' => '; phung em;',
      'music_album_search' => '',
      'music_composer' => 'Anh Việt Thu',
      'music_album' => '',
      'music_listen' => 268296,
      'music_track_id' => 0,
      'music_filename' => '1822327-d1b1354d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Người đi đi ngoài phố, chiều nắng tắt bên sông 
Người đi đi ngoài phố, bóng dáng xưa mịt mù 
Thành ghế đá chiều công viên 
Ngày xưa, ngày xưa, ngày xưa đã hết rồi.

Người đi đi ngoài phố, chiều bỡ...',
      'music_length' => 281,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    9 => 
    array (
      'music_downloads_today' => 7,
      'music_id' => 1767409,
      'music_title_url' => 'em-thi-khong~my-tam-karik',
      'music_title' => 'Em Thì Không',
      'music_artist' => 'Mỹ Tâm;Karik',
      'music_artist_id' => '4812;1793',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539069571,
      'music_last_update_time' => 1487823563,
      'music_title_search' => 'em thi khong',
      'music_artist_search' => '; mi tam; karik;',
      'music_album_search' => '',
      'music_composer' => 'Lời: Châu Đăng Khoa',
      'music_album' => '',
      'music_listen' => 124105,
      'music_track_id' => 0,
      'music_filename' => '1767409-07bdeae1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1.Anh lung linh, cao sang như mỹ nam 
Nên bao cô luôn đeo theo bước anh, em thì không! 
Cô khen anh ga lăng, không nếp nhăn 
Đưa đi ăn, đi chơi đi khắp nơi, em thì không!

Cô ta đi bên anh trông rấ...',
      'music_length' => 337,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    10 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1840854,
      'music_title_url' => 'vung-la-me-bay~quynh-trang',
      'music_title' => 'Vùng Lá Me Bay',
      'music_artist' => 'Quỳnh Trang',
      'music_artist_id' => '14182',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538989649,
      'music_last_update_time' => 1510209162,
      'music_title_search' => 'vung la me bai',
      'music_artist_search' => '; qinh chang;',
      'music_album_search' => '',
      'music_composer' => 'Anh Việt Thanh',
      'music_album' => '',
      'music_listen' => 15834,
      'music_track_id' => 0,
      'music_filename' => '1840854-d5d68ffa.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Nhìn lá me bay nhớ kỷ niệm hai chúng mình
Ngày đó quen nhau vương chút tình trên tóc mây
Đôi mắt thơ ngây, hoa nắng ươm đầy
Đẹp tựa như lá me bay nên tình anh trót vay.

Ngày đó yêu nhau chúng ta t...',
      'music_length' => 317,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    11 => 
    array (
      'music_downloads_today' => 7,
      'music_id' => 1765773,
      'music_title_url' => 'chieu-san-ga~giang-tien',
      'music_title' => 'Chiều Sân Ga',
      'music_artist' => 'Giáng Tiên',
      'music_artist_id' => '2355',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539068078,
      'music_last_update_time' => 1487146924,
      'music_title_search' => 'chiu xan ga',
      'music_artist_search' => '; dang tin;',
      'music_album_search' => '',
      'music_composer' => 'Sông Trà',
      'music_album' => '',
      'music_listen' => 71967,
      'music_track_id' => 0,
      'music_filename' => '1765773-0df32933.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Lần đầu gặp em khi phố kia chưa lên đèn 
Giờ này gặp nhau trên sân ga chiều loan nắng 
Vụng về hỏi thăm em mấy câu đi về đâu 
Cớ sao đứng chờ cớ sao đứng đợi.

Đường tàu mùa xuân ai biết em đang mo...',
      'music_length' => 310,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1843267,
      'music_title_url' => 'mua-tren-cuoc-tinh~duong-edward',
      'music_title' => 'Mưa Trên Cuộc Tình',
      'music_artist' => 'Dương Edward',
      'music_artist_id' => '13798',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538742126,
      'music_last_update_time' => 1510761178,
      'music_title_search' => 'mua chen cuc tinh',
      'music_artist_search' => '; dung edward;',
      'music_album_search' => '',
      'music_composer' => 'Lê Quang',
      'music_album' => '',
      'music_listen' => 46103,
      'music_track_id' => 0,
      'music_filename' => '1843267-c01fab65.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Từng hạt mưa, rơi tí tách bên hiên nhà nàng
Lòng thầm mong một ánh mắt, thấp thoáng mong chờ
Người yêu hỡi, mãi mãi yêu nàng
Em dù biết, vẫn luôn hững hờ
Mặc cho anh, đêm đêm vẫn mơ, cuộc tình đôi...',
      'music_length' => 342,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    13 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1857878,
      'music_title_url' => 'giot-buon-khong-ten~y-linh',
      'music_title' => 'Giọt Buồn Không Tên',
      'music_artist' => 'Ý Linh',
      'music_artist_id' => '13291',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538972635,
      'music_last_update_time' => 1514339860,
      'music_title_search' => 'dot bun khong ten',
      'music_artist_search' => '; i linh;',
      'music_album_search' => '',
      'music_composer' => 'Tô Giang',
      'music_album' => '',
      'music_listen' => 13109,
      'music_track_id' => 0,
      'music_filename' => '1857878-d44e9c77.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Vừa chiều hôm nao anh với tôi đi dạo phố
Hai đứa vòng tay âu yếm như đôi tình nhân
Cười tươi như cô gái thơ ngây vui tin xuân
Chúng mình thân quá thân.

Phòng trà nghỉ chân nghe thái thanh ca biệt...',
      'music_length' => 303,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1792156,
      'music_title_url' => 'nhat-ky-doi-toi~dan-nguyen-mai-thien-van',
      'music_title' => 'Nhật Ký Đời Tôi',
      'music_artist' => 'Đan Nguyên;Mai Thiên Vân',
      'music_artist_id' => '2347;2316',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538887444,
      'music_last_update_time' => 1496455960,
      'music_title_search' => 'nhat ki doi toi',
      'music_artist_search' => '; dan ngin; mai thin van;',
      'music_album_search' => '',
      'music_composer' => 'Thanh Sơn',
      'music_album' => '',
      'music_listen' => 242224,
      'music_track_id' => 0,
      'music_filename' => '1792156-4aafd15c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Ngược thời gian, trở về quá khứ phút giây chạnh lòng
Bao nhiêu kỷ niệm, bao nhiêu ân tình chỉ còn lại con số không
Ai thương ai rồi và ai quên nhau rồi
Trong xuốt cuộc đời tương lai trả lời thôi....',
      'music_length' => 279,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1796357,
      'music_title_url' => 'hai-ky-niem-mot-chuyen-di~phuong-anh',
      'music_title' => 'Hai Kỷ Niệm Một Chuyến Đi',
      'music_artist' => 'Phương Anh',
      'music_artist_id' => '1430',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538974402,
      'music_last_update_time' => 1497499227,
      'music_title_search' => '2 ki nim 1 chin di',
      'music_artist_search' => '; phung em;',
      'music_album_search' => '',
      'music_composer' => 'Tuấn Khanh',
      'music_album' => '',
      'music_listen' => 92163,
      'music_track_id' => 0,
      'music_filename' => '1796357-0208959d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Tôi đưa người đi bước chân hoa mộng vào đời
Một chiều nhẹ mưa bay thành u buồn giăng lối
Pháo buông trên đường về mắt em xanh màu trời
Hết rồi ngày mai ơi!

Khi yêu nghe mộng đẹp trong vòng tay
Có...',
      'music_length' => 341,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    16 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1870559,
      'music_title_url' => 'thuo-ay-co-em-live~thai-chau',
      'music_title' => 'Thuở Ấy Có Em (Live)',
      'music_artist' => 'Thái Châu',
      'music_artist_id' => '4648',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538985242,
      'music_last_update_time' => 1517968171,
      'music_title_search' => 'thu ai co em; live',
      'music_artist_search' => '; thai chau;',
      'music_album_search' => '',
      'music_composer' => 'Huỳnh Anh',
      'music_album' => '',
      'music_listen' => 1173,
      'music_track_id' => 0,
      'music_filename' => '1870559-75c8ca68.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Thuở ấy có em anh yêu cuộc đời
Yêu đôi môi hồng điểm nét son tươi
Yêu đôi tay ngà làn má thắm
Tóc xanh buông lả lơi
Nhớ em nhớ bao thuở ấy.

Thuở ấy có em anh chưa từng buồn
Chưa đi âm thầm ngoài p...',
      'music_length' => 285,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1953351,
      'music_title_url' => 'yeu-tieng-hat-ngay-xua~tam-doan-ha-vy',
      'music_title' => 'Yêu Tiếng Hát Ngày Xưa',
      'music_artist' => 'Tâm Đoan;Hạ Vy',
      'music_artist_id' => '1769;3807',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538750763,
      'music_last_update_time' => 1537269766,
      'music_title_search' => 'iu ting hat ngai xua',
      'music_artist_search' => '; tam doan; ha vi;',
      'music_album_search' => '',
      'music_composer' => 'Thanh Sơn',
      'music_album' => '',
      'music_listen' => 837,
      'music_track_id' => 0,
      'music_filename' => '1953351-661ce45b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Đôi mắt em buồn buồn 
Gợi giấc mơ hồi tưởng 
Một thời bên nhau dễ thương.

Rồi biết đâu mà tìm 
Bên trời chiều loang tím 
Cho kỷ niệm đau trái tim.

Hương ái ân tàn rồi 
Lòng bỗng dưng bồi hồi 
Còn...',
      'music_length' => 266,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1766189,
      'music_title_url' => 'vung-la-me-bay~phuong-anh',
      'music_title' => 'Vùng Lá Me Bay',
      'music_artist' => 'Phương Anh',
      'music_artist_id' => '1430',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538730768,
      'music_last_update_time' => 1487297386,
      'music_title_search' => 'vung la me bai',
      'music_artist_search' => '; phung em;',
      'music_album_search' => '',
      'music_composer' => 'Anh Việt Thanh',
      'music_album' => '',
      'music_listen' => 180535,
      'music_track_id' => 0,
      'music_filename' => '1766189-3389c9e6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Nhìn lá me bay nhớ kỷ niệm hai chúng mình
Ngày đó quen nhau vương chút tình trên tóc mây
Đôi mắt thơ ngây, hoa nắng ươm đầy
Đẹp tựa như lá me bay nên tình anh trót vay.

Ngày đó yêu nhau chúng ta t...',
      'music_length' => 302,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    19 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1779589,
      'music_title_url' => 'neu-duoc-lam-nguoi-tinh~quynh-trang',
      'music_title' => 'Nếu Được Làm Người Tình',
      'music_artist' => 'Quỳnh Trang',
      'music_artist_id' => '14182',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539011385,
      'music_last_update_time' => 1492046020,
      'music_title_search' => 'neu duc lam ngui tinh',
      'music_artist_search' => '; qinh chang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 239051,
      'music_track_id' => 0,
      'music_filename' => '1779589-c8b3b5b7.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Nếu được làm người tình
Lạc vào mắt nai tơ 
Cho hồn bớt dại khờ.

Nếu được làm người tình 
Đùa tóc trong chiều vắng 
Làm gió thoáng môi hôn.

Ngàn vì sao trên trời
Nhìn người yêu tôi cười
Thẹn thùn...',
      'music_length' => 340,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    20 => 
    array (
      'music_downloads_today' => 27,
      'music_id' => 1948832,
      'music_title_url' => 'phan-gai-thuyen-quyen~dan-nguyen-hoang-nhung',
      'music_title' => 'Phận Gái Thuyền Quyên',
      'music_artist' => 'Đan Nguyên;Hoàng Nhung',
      'music_artist_id' => '2347;13828',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539075815,
      'music_last_update_time' => 1535715479,
      'music_title_search' => 'phan gai thin qin',
      'music_artist_search' => '; dan ngin; hoang nhung;',
      'music_album_search' => '',
      'music_composer' => 'Giao Tiên',
      'music_album' => '',
      'music_listen' => 50549,
      'music_track_id' => 0,
      'music_filename' => '1948832-06052b18.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Từ nay thôi đành duyên mình lỡ đôi
Dù vương vấn mãi cũng thế mà thôi
Khi xưa thầm nói yêu nhau
Bao nhiêu mộng thắm ban đầu
Thôi xin đừng tiếc nhớ thương chi.

Từ nay đôi mình thôi đừng nhớ mong
Mườ...',
      'music_length' => 318,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>, <a href="/ca-si/Hoang-Nhung~Y3NuX2FydGlzdH4xMzgyOA==.html">Hoàng Nhung</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    21 => 
    array (
      'music_downloads_today' => 6,
      'music_id' => 1944838,
      'music_title_url' => 'gap-lai-co-nhan~dan-nguyen',
      'music_title' => 'Gặp Lại Cố Nhân',
      'music_artist' => 'Đan Nguyên',
      'music_artist_id' => '2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539052757,
      'music_last_update_time' => 1534594888,
      'music_title_search' => 'gap lai co nhan',
      'music_artist_search' => '; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Hàn Sinh',
      'music_album' => '',
      'music_listen' => 17065,
      'music_track_id' => 0,
      'music_filename' => '1944838-37b67c93.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Lâu lắm xa rồi mình lại gặp nhau
Hai đứa không còn ngày vui bên nhau
Giờ em vui bước bên ai
Còn tôi lòng vẫn chưa phai
Mối tình xưa nhiều chua cay.

Em có thương gì kỷ niệm đầu tiên
Hai đứa xây mộn...',
      'music_length' => 302,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1798667,
      'music_title_url' => 'hoa-trinh-nu~phuong-anh',
      'music_title' => 'Hoa Trinh Nữ',
      'music_artist' => 'Phương Anh',
      'music_artist_id' => '1430',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538969723,
      'music_last_update_time' => 1498113777,
      'music_title_search' => 'hoa chinh nu',
      'music_artist_search' => '; phung em;',
      'music_album_search' => '',
      'music_composer' => 'Trần Thiện Thanh',
      'music_album' => '',
      'music_listen' => 236369,
      'music_track_id' => 0,
      'music_filename' => '1798667-3df36ead.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Qua một rừng hoang gió núi theo sang giũ bụi đường trên vai
Hái cây hoa dại lẻ loi bên đường gọi là hoa trinh nữ
Hoa trinh nữ không mặn mà bằng nàng hồng kiêu sa
Hoa đâu dám khoe màu cùng một nàng...',
      'music_length' => 354,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Phuong-Anh~Y3NuX2FydGlzdH4xNDMw.html">Phương Anh</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    23 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1942951,
      'music_title_url' => 'noi-lai-tinh-xua~huong-lan-che-linh',
      'music_title' => 'Nối Lại Tình Xưa',
      'music_artist' => 'Hương Lan;Chế Linh',
      'music_artist_id' => '1631;4615',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539051840,
      'music_last_update_time' => 1534181878,
      'music_title_search' => 'noi lai tinh xua',
      'music_artist_search' => '; hung lan; che linh;',
      'music_album_search' => '',
      'music_composer' => 'Ngân Giang',
      'music_album' => '',
      'music_listen' => 21866,
      'music_track_id' => 0,
      'music_filename' => '1942951-3ab4dbb5.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Về đây bên nhau, ta nối lại tình xưa
Chuyện tình mà bao năm qua, em gói ghém từng kỷ niệm
Phai nắng con đường xưa, những chiều hẹn hò mưa đổ
Mưa ướt lạnh vai anh, em thấy lòng mình xót xa.

Mùa thu...',
      'music_length' => 348,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Huong-Lan~Y3NuX2FydGlzdH4xNjMx.html">Hương Lan</a>, <a href="/ca-si/Che-Linh~Y3NuX2FydGlzdH40NjE1.html">Chế Linh</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    24 => 
    array (
      'music_downloads_today' => 7,
      'music_id' => 1834297,
      'music_title_url' => 'cham-khe-tim-anh-mot-chut-thoi~noo-phuoc-thinh',
      'music_title' => 'Chạm Khẽ Tim Anh Một Chút Thôi',
      'music_artist' => 'Noo Phước Thịnh',
      'music_artist_id' => '1611',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539074926,
      'music_last_update_time' => 1507863044,
      'music_title_search' => 'cham khe tim em mot chut thoi',
      'music_artist_search' => '; no phuc thinh;',
      'music_album_search' => '',
      'music_composer' => 'Tăng Nhật Tuệ',
      'music_album' => '',
      'music_listen' => 191491,
      'music_track_id' => 0,
      'music_filename' => '1834297-7ed3708b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Chạm nhẹ vào đôi mắt chạm nhẹ vào bờ vai 
Chạm nhẹ vào đôi môi ngày mai xa anh rồi
Chạm nhẹ vào trí nhớ chạm nhẹ vào cơn mơ 
Mình đã chạm khẽ vào nhau những ngày ngây thơ 
Anh yêu cô gái nhỏ bé.

T...',
      'music_length' => 550,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Noo-Phuoc-Thinh~Y3NuX2FydGlzdH4xNjEx.html">Noo Phước Thịnh</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    25 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1947746,
      'music_title_url' => 'chuyen-tinh-lan-va-diep-4~nhu-quynh',
      'music_title' => 'Chuyện Tình Lan Và Điệp 4',
      'music_artist' => 'Như Quỳnh',
      'music_artist_id' => '32',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538990285,
      'music_last_update_time' => 1535458312,
      'music_title_search' => 'chin tinh lan va dip 4',
      'music_artist_search' => '; nhu qinh;',
      'music_album_search' => '',
      'music_composer' => 'Hamlet Trương',
      'music_album' => '',
      'music_listen' => 4881,
      'music_track_id' => 0,
      'music_filename' => '1947746-52e21941.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Hoàng hôn buông xuống trên mái đầu còn xanh mà tim chẳng lành 
Chân bước thật mau đời còn gì ngày sau khi đã cách xa nhau 
Điệp đến tìm Lan trong nỗi hoang mang 
Chẳng biết người xưa có đang u sầu...',
      'music_length' => 373,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Nhu-Quynh~Y3NuX2FydGlzdH4zMg==.html">Như Quỳnh</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    26 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1870564,
      'music_title_url' => 'lien-khuc-doan-buon-dem-mua-mua-dem-tinh-nho~manh-quynh-le-quyen',
      'music_title' => 'Liên Khúc: Đoạn Buồn Đêm Mưa; Mưa Đêm Tỉnh Nhỏ',
      'music_artist' => 'Mạnh Quỳnh;Lệ Quyên',
      'music_artist_id' => '1583;1662',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539005611,
      'music_last_update_time' => 1517968292,
      'music_title_search' => 'lin khuc; doan bun dem mua; mua dem tinh nho',
      'music_artist_search' => '; manh qinh; le qin;',
      'music_album_search' => '',
      'music_composer' => 'Vinh Sử; Hà Phương',
      'music_album' => '',
      'music_listen' => 15444,
      'music_track_id' => 0,
      'music_filename' => '1870564-f90b2bf7.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Đoạn Buồn Đêm Mưa]

Đêm nay trên phố mưa tơi bời
Lòng nghe bao nhớ nhung đầy vơi
Làm sao cho anh vui còn ai cho
Em vui bằng môi trên đôi môi
Ôi tuyệt vời.

Đêm nay em biết anh thương nhiều
Buồn tê...',
      'music_length' => 349,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Manh-Quynh~Y3NuX2FydGlzdH4xNTgz.html">Mạnh Quỳnh</a>, <a href="/ca-si/Le-Quyen~Y3NuX2FydGlzdH4xNjYy.html">Lệ Quyên</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1881230,
      'music_title_url' => 'ca-mot-troi-thuong-nho~ho-ngoc-ha',
      'music_title' => 'Cả Một Trời Thương Nhớ',
      'music_artist' => 'Hồ Ngọc Hà',
      'music_artist_id' => '1468',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538920951,
      'music_last_update_time' => 1519963057,
      'music_title_search' => 'ca 1 choi thung nho',
      'music_artist_search' => '; ho ngoc ha;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Minh Cường',
      'music_album' => '',
      'music_listen' => 3552,
      'music_track_id' => 0,
      'music_filename' => '1881230-c8d5303e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Cả một trời thương nhớ, một trời ngu ngơ, một trời ngây thơ
Cả một đời lầm lỡ, để rồi bơ vơ, để rồi tan vỡ
Chỉ là nước mắt cứ thế rơi, chỉ là nỗi nhớ muốn cất lời
Chỉ là những ngón tay không thể bu...',
      'music_length' => 435,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/Ho-Ngoc-Ha~Y3NuX2FydGlzdH4xNDY4.html">Hồ Ngọc Hà</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    28 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1822327,
      'music_title_url' => 'nguoi-di-ngoai-pho~phuong-anh',
      'music_title' => 'Người Đi Ngoài Phố',
      'music_artist' => 'Phương Anh',
      'music_artist_id' => '1430',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539008303,
      'music_last_update_time' => 1504583250,
      'music_title_search' => 'ngui di ngoai pho',
      'music_artist_search' => '; phung em;',
      'music_album_search' => '',
      'music_composer' => 'Anh Việt Thu',
      'music_album' => '',
      'music_listen' => 268296,
      'music_track_id' => 0,
      'music_filename' => '1822327-d1b1354d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Người đi đi ngoài phố, chiều nắng tắt bên sông 
Người đi đi ngoài phố, bóng dáng xưa mịt mù 
Thành ghế đá chiều công viên 
Ngày xưa, ngày xưa, ngày xưa đã hết rồi.

Người đi đi ngoài phố, chiều bỡ...',
      'music_length' => 281,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Phuong-Anh~Y3NuX2FydGlzdH4xNDMw.html">Phương Anh</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    29 => 
    array (
      'music_downloads_today' => 7,
      'music_id' => 1767409,
      'music_title_url' => 'em-thi-khong~my-tam-karik',
      'music_title' => 'Em Thì Không',
      'music_artist' => 'Mỹ Tâm;Karik',
      'music_artist_id' => '4812;1793',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539069571,
      'music_last_update_time' => 1487823563,
      'music_title_search' => 'em thi khong',
      'music_artist_search' => '; mi tam; karik;',
      'music_album_search' => '',
      'music_composer' => 'Lời: Châu Đăng Khoa',
      'music_album' => '',
      'music_listen' => 124105,
      'music_track_id' => 0,
      'music_filename' => '1767409-07bdeae1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1.Anh lung linh, cao sang như mỹ nam 
Nên bao cô luôn đeo theo bước anh, em thì không! 
Cô khen anh ga lăng, không nếp nhăn 
Đưa đi ăn, đi chơi đi khắp nơi, em thì không!

Cô ta đi bên anh trông rấ...',
      'music_length' => 337,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/My-Tam~Y3NuX2FydGlzdH40ODEy.html">Mỹ Tâm</a>, <a href="/ca-si/Karik~Y3NuX2FydGlzdH4xNzkz.html">Karik</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    30 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1840854,
      'music_title_url' => 'vung-la-me-bay~quynh-trang',
      'music_title' => 'Vùng Lá Me Bay',
      'music_artist' => 'Quỳnh Trang',
      'music_artist_id' => '14182',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538989649,
      'music_last_update_time' => 1510209162,
      'music_title_search' => 'vung la me bai',
      'music_artist_search' => '; qinh chang;',
      'music_album_search' => '',
      'music_composer' => 'Anh Việt Thanh',
      'music_album' => '',
      'music_listen' => 15834,
      'music_track_id' => 0,
      'music_filename' => '1840854-d5d68ffa.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Nhìn lá me bay nhớ kỷ niệm hai chúng mình
Ngày đó quen nhau vương chút tình trên tóc mây
Đôi mắt thơ ngây, hoa nắng ươm đầy
Đẹp tựa như lá me bay nên tình anh trót vay.

Ngày đó yêu nhau chúng ta t...',
      'music_length' => 317,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Quynh-Trang~Y3NuX2FydGlzdH4xNDE4Mg==.html">Quỳnh Trang</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    31 => 
    array (
      'music_downloads_today' => 7,
      'music_id' => 1765773,
      'music_title_url' => 'chieu-san-ga~giang-tien',
      'music_title' => 'Chiều Sân Ga',
      'music_artist' => 'Giáng Tiên',
      'music_artist_id' => '2355',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539068078,
      'music_last_update_time' => 1487146924,
      'music_title_search' => 'chiu xan ga',
      'music_artist_search' => '; dang tin;',
      'music_album_search' => '',
      'music_composer' => 'Sông Trà',
      'music_album' => '',
      'music_listen' => 71967,
      'music_track_id' => 0,
      'music_filename' => '1765773-0df32933.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Lần đầu gặp em khi phố kia chưa lên đèn 
Giờ này gặp nhau trên sân ga chiều loan nắng 
Vụng về hỏi thăm em mấy câu đi về đâu 
Cớ sao đứng chờ cớ sao đứng đợi.

Đường tàu mùa xuân ai biết em đang mo...',
      'music_length' => 310,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Giang-Tien~Y3NuX2FydGlzdH4yMzU1.html">Giáng Tiên</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1843267,
      'music_title_url' => 'mua-tren-cuoc-tinh~duong-edward',
      'music_title' => 'Mưa Trên Cuộc Tình',
      'music_artist' => 'Dương Edward',
      'music_artist_id' => '13798',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538742126,
      'music_last_update_time' => 1510761178,
      'music_title_search' => 'mua chen cuc tinh',
      'music_artist_search' => '; dung edward;',
      'music_album_search' => '',
      'music_composer' => 'Lê Quang',
      'music_album' => '',
      'music_listen' => 46103,
      'music_track_id' => 0,
      'music_filename' => '1843267-c01fab65.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Từng hạt mưa, rơi tí tách bên hiên nhà nàng
Lòng thầm mong một ánh mắt, thấp thoáng mong chờ
Người yêu hỡi, mãi mãi yêu nàng
Em dù biết, vẫn luôn hững hờ
Mặc cho anh, đêm đêm vẫn mơ, cuộc tình đôi...',
      'music_length' => 342,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Duong-Edward~Y3NuX2FydGlzdH4xMzc5OA==.html">Dương Edward</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    33 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1857878,
      'music_title_url' => 'giot-buon-khong-ten~y-linh',
      'music_title' => 'Giọt Buồn Không Tên',
      'music_artist' => 'Ý Linh',
      'music_artist_id' => '13291',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538972635,
      'music_last_update_time' => 1514339860,
      'music_title_search' => 'dot bun khong ten',
      'music_artist_search' => '; i linh;',
      'music_album_search' => '',
      'music_composer' => 'Tô Giang',
      'music_album' => '',
      'music_listen' => 13109,
      'music_track_id' => 0,
      'music_filename' => '1857878-d44e9c77.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Vừa chiều hôm nao anh với tôi đi dạo phố
Hai đứa vòng tay âu yếm như đôi tình nhân
Cười tươi như cô gái thơ ngây vui tin xuân
Chúng mình thân quá thân.

Phòng trà nghỉ chân nghe thái thanh ca biệt...',
      'music_length' => 303,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Y-Linh~Y3NuX2FydGlzdH4xMzI5MQ==.html">Ý Linh</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1792156,
      'music_title_url' => 'nhat-ky-doi-toi~dan-nguyen-mai-thien-van',
      'music_title' => 'Nhật Ký Đời Tôi',
      'music_artist' => 'Đan Nguyên;Mai Thiên Vân',
      'music_artist_id' => '2347;2316',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538887444,
      'music_last_update_time' => 1496455960,
      'music_title_search' => 'nhat ki doi toi',
      'music_artist_search' => '; dan ngin; mai thin van;',
      'music_album_search' => '',
      'music_composer' => 'Thanh Sơn',
      'music_album' => '',
      'music_listen' => 242224,
      'music_track_id' => 0,
      'music_filename' => '1792156-4aafd15c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Ngược thời gian, trở về quá khứ phút giây chạnh lòng
Bao nhiêu kỷ niệm, bao nhiêu ân tình chỉ còn lại con số không
Ai thương ai rồi và ai quên nhau rồi
Trong xuốt cuộc đời tương lai trả lời thôi....',
      'music_length' => 279,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>, <a href="/ca-si/Mai-Thien-Van~Y3NuX2FydGlzdH4yMzE2.html">Mai Thiên Vân</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1796357,
      'music_title_url' => 'hai-ky-niem-mot-chuyen-di~phuong-anh',
      'music_title' => 'Hai Kỷ Niệm Một Chuyến Đi',
      'music_artist' => 'Phương Anh',
      'music_artist_id' => '1430',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538974402,
      'music_last_update_time' => 1497499227,
      'music_title_search' => '2 ki nim 1 chin di',
      'music_artist_search' => '; phung em;',
      'music_album_search' => '',
      'music_composer' => 'Tuấn Khanh',
      'music_album' => '',
      'music_listen' => 92163,
      'music_track_id' => 0,
      'music_filename' => '1796357-0208959d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Tôi đưa người đi bước chân hoa mộng vào đời
Một chiều nhẹ mưa bay thành u buồn giăng lối
Pháo buông trên đường về mắt em xanh màu trời
Hết rồi ngày mai ơi!

Khi yêu nghe mộng đẹp trong vòng tay
Có...',
      'music_length' => 341,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Phuong-Anh~Y3NuX2FydGlzdH4xNDMw.html">Phương Anh</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    36 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1870559,
      'music_title_url' => 'thuo-ay-co-em-live~thai-chau',
      'music_title' => 'Thuở Ấy Có Em (Live)',
      'music_artist' => 'Thái Châu',
      'music_artist_id' => '4648',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538985242,
      'music_last_update_time' => 1517968171,
      'music_title_search' => 'thu ai co em; live',
      'music_artist_search' => '; thai chau;',
      'music_album_search' => '',
      'music_composer' => 'Huỳnh Anh',
      'music_album' => '',
      'music_listen' => 1173,
      'music_track_id' => 0,
      'music_filename' => '1870559-75c8ca68.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Thuở ấy có em anh yêu cuộc đời
Yêu đôi môi hồng điểm nét son tươi
Yêu đôi tay ngà làn má thắm
Tóc xanh buông lả lơi
Nhớ em nhớ bao thuở ấy.

Thuở ấy có em anh chưa từng buồn
Chưa đi âm thầm ngoài p...',
      'music_length' => 285,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Thai-Chau~Y3NuX2FydGlzdH40NjQ4.html">Thái Châu</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1953351,
      'music_title_url' => 'yeu-tieng-hat-ngay-xua~tam-doan-ha-vy',
      'music_title' => 'Yêu Tiếng Hát Ngày Xưa',
      'music_artist' => 'Tâm Đoan;Hạ Vy',
      'music_artist_id' => '1769;3807',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538750763,
      'music_last_update_time' => 1537269766,
      'music_title_search' => 'iu ting hat ngai xua',
      'music_artist_search' => '; tam doan; ha vi;',
      'music_album_search' => '',
      'music_composer' => 'Thanh Sơn',
      'music_album' => '',
      'music_listen' => 837,
      'music_track_id' => 0,
      'music_filename' => '1953351-661ce45b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Đôi mắt em buồn buồn 
Gợi giấc mơ hồi tưởng 
Một thời bên nhau dễ thương.

Rồi biết đâu mà tìm 
Bên trời chiều loang tím 
Cho kỷ niệm đau trái tim.

Hương ái ân tàn rồi 
Lòng bỗng dưng bồi hồi 
Còn...',
      'music_length' => 266,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Tam-Doan~Y3NuX2FydGlzdH4xNzY5.html">Tâm Đoan</a>, <a href="/ca-si/Ha-Vy~Y3NuX2FydGlzdH4zODA3.html">Hạ Vy</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1766189,
      'music_title_url' => 'vung-la-me-bay~phuong-anh',
      'music_title' => 'Vùng Lá Me Bay',
      'music_artist' => 'Phương Anh',
      'music_artist_id' => '1430',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538730768,
      'music_last_update_time' => 1487297386,
      'music_title_search' => 'vung la me bai',
      'music_artist_search' => '; phung em;',
      'music_album_search' => '',
      'music_composer' => 'Anh Việt Thanh',
      'music_album' => '',
      'music_listen' => 180535,
      'music_track_id' => 0,
      'music_filename' => '1766189-3389c9e6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Nhìn lá me bay nhớ kỷ niệm hai chúng mình
Ngày đó quen nhau vương chút tình trên tóc mây
Đôi mắt thơ ngây, hoa nắng ươm đầy
Đẹp tựa như lá me bay nên tình anh trót vay.

Ngày đó yêu nhau chúng ta t...',
      'music_length' => 302,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Phuong-Anh~Y3NuX2FydGlzdH4xNDMw.html">Phương Anh</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    39 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1779589,
      'music_title_url' => 'neu-duoc-lam-nguoi-tinh~quynh-trang',
      'music_title' => 'Nếu Được Làm Người Tình',
      'music_artist' => 'Quỳnh Trang',
      'music_artist_id' => '14182',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539011385,
      'music_last_update_time' => 1492046020,
      'music_title_search' => 'neu duc lam ngui tinh',
      'music_artist_search' => '; qinh chang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 239051,
      'music_track_id' => 0,
      'music_filename' => '1779589-c8b3b5b7.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Nếu được làm người tình
Lạc vào mắt nai tơ 
Cho hồn bớt dại khờ.

Nếu được làm người tình 
Đùa tóc trong chiều vắng 
Làm gió thoáng môi hôn.

Ngàn vì sao trên trời
Nhìn người yêu tôi cười
Thẹn thùn...',
      'music_length' => 340,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Quynh-Trang~Y3NuX2FydGlzdH4xNDE4Mg==.html">Quỳnh Trang</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1829164,
      'music_title_url' => 'havana~camila-cabello',
      'music_title' => 'Havana',
      'music_artist' => 'Camila Cabello',
      'music_artist_id' => '13959',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539060030,
      'music_last_update_time' => 1514536463,
      'music_title_search' => 'havana',
      'music_artist_search' => '; camila cabelo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 134204,
      'music_track_id' => 0,
      'music_filename' => '1829164-dd66a63f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Havana, ooh na-na (ay)
[t1]Havana, ooh na-na (ay)
Half of my heart is in Havana, ooh-na-na (ay, ay)
[t1]Một nửa con tim tôi dành cho Havana
He took me back to East Atlanta, na-na-na
[t1]Anh khiến t...',
      'music_length' => 229,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    1 => 
    array (
      'music_downloads_today' => 6,
      'music_id' => 1773769,
      'music_title_url' => 'symphony~clean-bandit-zara-larsson',
      'music_title' => 'Symphony',
      'music_artist' => 'Clean Bandit;Zara Larsson',
      'music_artist_id' => '13836;13586',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539069677,
      'music_last_update_time' => 1499404648,
      'music_title_search' => 'ximphoni',
      'music_artist_search' => '; clean bandit; zara larxon;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 57005,
      'music_track_id' => 0,
      'music_filename' => '1773769-1f5294e6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: Zara Larsson]
I\'ve been hearing symphonies
Before all I heard was silence
A rhapsody for you and me
And every melody is timeless
Life was stringing me along
Then you came and you cut me l...',
      'music_length' => 246,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    2 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1783304,
      'music_title_url' => 'boom~tisto-sevenn',
      'music_title' => 'Boom',
      'music_artist' => 'Tiësto;Sevenn',
      'music_artist_id' => '15594;80772',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539029895,
      'music_last_update_time' => 1494470782,
      'music_title_search' => 'bom',
      'music_artist_search' => '; tiëxto; xeven;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 71147,
      'music_track_id' => 0,
      'music_filename' => '1783304-f81906df.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 154,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1761737,
      'music_title_url' => 'scared-to-be-lonely~martin-garrix-dua-lipa',
      'music_title' => 'Scared To Be Lonely',
      'music_artist' => 'Martin Garrix;Dua Lipa',
      'music_artist_id' => '13343;14519',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538822366,
      'music_last_update_time' => 1486523574,
      'music_title_search' => 'xcared to be loneli',
      'music_artist_search' => '; martin garix; dua lipa;',
      'music_album_search' => '',
      'music_composer' => 'Martin Garrix',
      'music_album' => '',
      'music_listen' => 35785,
      'music_track_id' => 0,
      'music_filename' => '1761737-54d80acd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. It was great at the very start
Hands on each other
Couldn\'t stand to be far apart
Closer the better.

[Pre-Chorus:]
Now we\'re picking fights
And slamming doors
Magnifying all our flaws
And I won...',
      'music_length' => 230,
      'music_width' => 1920,
      'music_height' => 1012,
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1847721,
      'music_title_url' => 'so-far-away~martin-garrix-david-guetta-jamie-scott-romy-dya',
      'music_title' => 'So Far Away',
      'music_artist' => 'Martin Garrix;David Guetta;Jamie Scott;Romy Dya',
      'music_artist_id' => '13343;651;52033;102269',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539001320,
      'music_last_update_time' => 1512180368,
      'music_title_search' => 'xo far awai',
      'music_artist_search' => '; martin garix; david gueta; jami xcot; romi dia;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 45735,
      'music_track_id' => 0,
      'music_filename' => '1847721-492ba96b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: Jamie Scott]
Light \'em up, light \'em up
Tell me where you are, tell me where you are
Summer nights, bright lights
And the shooting stars, they break my heart.

[Pre-Chorus: Jamie Scott]
C...',
      'music_length' => 183,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    5 => 
    array (
      'music_downloads_today' => 5,
      'music_id' => 1762389,
      'music_title_url' => 'shape-of-you~ed-sheeran',
      'music_title' => 'Shape Of You',
      'music_artist' => 'Ed Sheeran',
      'music_artist_id' => '2653',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539062152,
      'music_last_update_time' => 1486475602,
      'music_title_search' => 'thape of iou',
      'music_artist_search' => '; ed theran;',
      'music_album_search' => '',
      'music_composer' => 'Steve Mac',
      'music_album' => '',
      'music_listen' => 124185,
      'music_track_id' => 0,
      'music_filename' => '1762389-2d7cb57b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
The club isn\'t the best place to find a lover
So the bar is where I go
Me and my friends at the table doing shots
Drinking fast and then we talk slow
Come over and start up a conversatio...',
      'music_length' => 263,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    6 => 
    array (
      'music_downloads_today' => 5,
      'music_id' => 1803486,
      'music_title_url' => 'new-rules~dua-lipa',
      'music_title' => 'New Rules',
      'music_artist' => 'Dua Lipa',
      'music_artist_id' => '14519',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539070499,
      'music_last_update_time' => 1510655024,
      'music_title_search' => 'new rulex',
      'music_artist_search' => '; dua lipa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 15850,
      'music_track_id' => 0,
      'music_filename' => '1803486-6538cd36.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
One, one, one...

[Verse 1:]
Talkin\' in my sleep at night
Makin\' myself crazy
(Out of my mind, out of my mind)
Wrote it down and read it out
Hopin\' it would save me
(Too many times, too ma...',
      'music_length' => 224,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1770544,
      'music_title_url' => 'something-just-like-this~jfla',
      'music_title' => 'Something Just Like This',
      'music_artist' => 'J.Fla',
      'music_artist_id' => '14116',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538924187,
      'music_last_update_time' => 1488849629,
      'music_title_search' => 'xomething juxt like thix',
      'music_artist_search' => '; j fla;',
      'music_album_search' => '',
      'music_composer' => 'Andrew Taggart; Chris Martin; Guy Berryman; Jonny Buckland; Will Champion; The Chainsmokers',
      'music_album' => '',
      'music_listen' => 62523,
      'music_track_id' => 0,
      'music_filename' => '1770544-41e85055.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I\'ve been reading books of old
[t1]Tôi vẫn luôn chìm đắm trong những cuốn sách cũ
The legends and the myths
[t1]Những câu truyện thần thoại và những vị thần
Achilles and his gold
[t1]Achilles vớ...',
      'music_length' => 154,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1774598,
      'music_title_url' => 'rockabye~madilyn-bailey',
      'music_title' => 'Rockabye',
      'music_artist' => 'Madilyn Bailey',
      'music_artist_id' => '17906',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538895855,
      'music_last_update_time' => 1490145832,
      'music_title_search' => 'rockabi',
      'music_artist_search' => '; madilin bailei;',
      'music_album_search' => '',
      'music_composer' => 'Clean Bandit; Sean Paul; Anne-Marie',
      'music_album' => '',
      'music_listen' => 6131,
      'music_track_id' => 0,
      'music_filename' => '1774598-944b1bee.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'She works the nights by the water
She\'s gone astray so far away
From her father\'s daughter
She just wants a life all for her baby
All on her own, no one will come
She\'s got to save him.

She tells...',
      'music_length' => 165,
      'music_width' => 854,
      'music_height' => 480,
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1825875,
      'music_title_url' => 'the-spectre~alan-walker-danny-shah',
      'music_title' => 'The Spectre',
      'music_artist' => 'Alan Walker;Danny Shah',
      'music_artist_id' => '14991;97519',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538963378,
      'music_last_update_time' => 1510736972,
      'music_title_search' => 'the xpeche',
      'music_artist_search' => '; alan walker; dani thah;',
      'music_album_search' => '',
      'music_composer' => 'Alan Walker; Marcus Arnbekk; Anders Froen; Lars Kistian Rosness; Jesper Borgen; Tommy Laverdi',
      'music_album' => '',
      'music_listen' => 184753,
      'music_track_id' => 0,
      'music_filename' => '1825875-418cb3c2.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Verse 1:]
Hello, hello
[t1]Em ơi
Can you hear me, as I scream your name
[t1]Em có nghe thấy anh, khi anh gào thét tên em
Hello, hello
[t1]Em này
Do you meet me, before I fade away.
[t1]Em sẽ gặp a...',
      'music_length' => 195,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1841969,
      'music_title_url' => 'perfect~ed-sheeran',
      'music_title' => 'Perfect',
      'music_artist' => 'Ed Sheeran',
      'music_artist_id' => '2653',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538579164,
      'music_last_update_time' => 1510283241,
      'music_title_search' => 'perfect',
      'music_artist_search' => '; ed theran;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 61187,
      'music_track_id' => 0,
      'music_filename' => '1841969-2e4944f1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
I found a love for me
[t1]Anh đã tìm được cho mình một tình yêu
Darling, just dive right in and follow my lead
[t1]Em yêu, chớ ngại ngùng và cứ để anh dẫn
Well, I found a girl, beautiful...',
      'music_length' => 279,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1769614,
      'music_title_url' => 'thats-what-i-like~bruno-mars',
      'music_title' => 'That\'s What I Like',
      'music_artist' => 'Bruno Mars',
      'music_artist_id' => '2001',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538937551,
      'music_last_update_time' => 1488512823,
      'music_title_search' => 'that x what i like',
      'music_artist_search' => '; bruno marx;',
      'music_album_search' => '',
      'music_composer' => 'Bruno Mars',
      'music_album' => '',
      'music_listen' => 61014,
      'music_track_id' => 0,
      'music_filename' => '1769614-8bf145c6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I got a condo in Manhattan
Baby girl, what\'s hatnin\'?
You and your ass invited
So gon\' and get to clappin\'
So pop it for a pimp
Pop, pop it for me
Turn around and drop it for a pimp
Drop, drop i...',
      'music_length' => 210,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1795477,
      'music_title_url' => 'secrets~the-weeknd',
      'music_title' => 'Secrets',
      'music_artist' => 'The Weeknd',
      'music_artist_id' => '14618',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538839745,
      'music_last_update_time' => 1497324179,
      'music_title_search' => 'xecretx',
      'music_artist_search' => '; the weknd;',
      'music_album_search' => '',
      'music_composer' => 'The Weeknd; Pete Solley; Wally Palamarchuk; Ronald Orzabal; Dylan Wiggins; Henry Russel Walter; Doc McKinney',
      'music_album' => '',
      'music_listen' => 1919,
      'music_track_id' => 0,
      'music_filename' => '1795477-917093fd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
Everybody here wants you
My love, my love
And I know that you want him too
My love, my love
I ask you what your heart desires
My love, my love
You tell me I\'m the only one
My love, my lo...',
      'music_length' => 198,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    13 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1823404,
      'music_title_url' => 'dusk-till-dawn~zayn-sia',
      'music_title' => 'Dusk Till Dawn',
      'music_artist' => 'ZAYN;Sia',
      'music_artist_id' => '15954;9255',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539016733,
      'music_last_update_time' => 1505700823,
      'music_title_search' => 'duxk til dawn',
      'music_artist_search' => '; zain; xia;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 29331,
      'music_track_id' => 0,
      'music_filename' => '1823404-77794fb2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: ZAYN]
Not tryna be indie
Not tryna be cool
Just tryna be in this
Tell me, are you too?
Can you feel where the wind is?
Can you feel it through
All of the windows
Inside this room?

[Inter...',
      'music_length' => 337,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1768319,
      'music_title_url' => 'bad-things-i-dont-wanna-live-forever~jfla',
      'music_title' => 'Bad Things; I Don\'t Wanna Live Forever',
      'music_artist' => 'J.Fla',
      'music_artist_id' => '14116',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538873441,
      'music_last_update_time' => 1488154981,
      'music_title_search' => 'bad thingx; i don t wana live forever',
      'music_artist_search' => '; j fla;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8665,
      'music_track_id' => 0,
      'music_filename' => '1768319-bcf157fa.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Bad Things]

[Chorus:]

1. Nothing\'s that bad
[t1]Bấy nhiêu đấy đã là gì đâu em
If it feels good
[t1]Chỉ cần em cảm thấy hài lòng
So you come back
[t1]Rồi em lại về đây thôi
Like I knew you would...',
      'music_length' => 148,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1842877,
      'music_title_url' => 'havana-live~camilla-cabello',
      'music_title' => 'Havana (Live)',
      'music_artist' => 'Camilla Cabello',
      'music_artist_id' => '101854',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538932835,
      'music_last_update_time' => 1514536476,
      'music_title_search' => 'havana; live',
      'music_artist_search' => '; camila cabelo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3382,
      'music_track_id' => 0,
      'music_filename' => '1842877-8cbc8d20.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Havana, ooh na-na (ay)
[t1]Havana, ooh na-na (ay)
Half of my heart is in Havana, ooh-na-na (ay, ay)
[t1]Một nửa con tim tôi dành cho Havana
He took me back to East Atlanta, na-na-na
[t1]Anh khiến t...',
      'music_length' => 224,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1766417,
      'music_title_url' => 'see-you-again~jfla',
      'music_title' => 'See You Again',
      'music_artist' => 'J.Fla',
      'music_artist_id' => '14116',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538577792,
      'music_last_update_time' => 1487466472,
      'music_title_search' => 'xe iou again',
      'music_artist_search' => '; j fla;',
      'music_album_search' => '',
      'music_composer' => 'Charlie Puth',
      'music_album' => '',
      'music_listen' => 59354,
      'music_track_id' => 0,
      'music_filename' => '1766417-5424287d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Hook: Charlie Puth] 
It\'s been a long day, without you my friend
And I\'ll tell you all about it when I see you again
We\'ve come a long way from where we began
Oh I\'ll tell you all about it when I...',
      'music_length' => 173,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    17 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1783089,
      'music_title_url' => 'ignite~alan-walker-k-391',
      'music_title' => 'Ignite',
      'music_artist' => 'Alan Walker;K-391',
      'music_artist_id' => '14991;14990',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539070816,
      'music_last_update_time' => 1493525769,
      'music_title_search' => 'ignite',
      'music_artist_search' => '; alan walker; k 391;',
      'music_album_search' => '',
      'music_composer' => 'Alan Walker; K-391',
      'music_album' => '',
      'music_listen' => 18987,
      'music_track_id' => 0,
      'music_filename' => '1783089-e2fcd52f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 227,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    18 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1782961,
      'music_title_url' => 'young-lyric-video~the-chainsmokers',
      'music_title' => 'Young (Lyric Video)',
      'music_artist' => 'The Chainsmokers',
      'music_artist_id' => '13339',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538986073,
      'music_last_update_time' => 1493172476,
      'music_title_search' => 'ioung; liric video',
      'music_artist_search' => '; the chainxmokerx;',
      'music_album_search' => '',
      'music_composer' => 'CVBZ; Peter Hannah; Andrew Taggart',
      'music_album' => '',
      'music_listen' => 2054,
      'music_track_id' => 0,
      'music_filename' => '1782961-d1159058.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
Young
We were so young when we thought that we knew how to love
Fought about anything, everything that did is function
But we just gotta own that shit
Don\'t let it go like this
Maybe we...',
      'music_length' => 231,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1804613,
      'music_title_url' => 'know-no-better~major-lazer-travis-scott-camila-cabello-quavo',
      'music_title' => 'Know No Better',
      'music_artist' => 'Major Lazer;Travis Scott;Camila Cabello;Quavo',
      'music_artist_id' => '13367;14617;13959;15216',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538545993,
      'music_last_update_time' => 1499822647,
      'music_title_search' => 'know no beter',
      'music_artist_search' => '; major lazer; chavix xcot; camila cabelo; quavo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3828,
      'music_track_id' => 0,
      'music_filename' => '1804613-183542c3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Travis Scott]
Yeah
Straight up.

[Verse: Travis Scott]
Wrist look like it been dipped
Dipped in that, dipped in that, dipped in that
Script look like it been flipped
Flippin\' that, flippin\'...',
      'music_length' => 225,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    20 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1829164,
      'music_title_url' => 'havana~camila-cabello',
      'music_title' => 'Havana',
      'music_artist' => 'Camila Cabello',
      'music_artist_id' => '13959',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539060030,
      'music_last_update_time' => 1514536463,
      'music_title_search' => 'havana',
      'music_artist_search' => '; camila cabelo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 134204,
      'music_track_id' => 0,
      'music_filename' => '1829164-dd66a63f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Havana, ooh na-na (ay)
[t1]Havana, ooh na-na (ay)
Half of my heart is in Havana, ooh-na-na (ay, ay)
[t1]Một nửa con tim tôi dành cho Havana
He took me back to East Atlanta, na-na-na
[t1]Anh khiến t...',
      'music_length' => 229,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Camila-Cabello~Y3NuX2FydGlzdH4xMzk1OQ==.html">Camila Cabello</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    21 => 
    array (
      'music_downloads_today' => 6,
      'music_id' => 1773769,
      'music_title_url' => 'symphony~clean-bandit-zara-larsson',
      'music_title' => 'Symphony',
      'music_artist' => 'Clean Bandit;Zara Larsson',
      'music_artist_id' => '13836;13586',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539069677,
      'music_last_update_time' => 1499404648,
      'music_title_search' => 'ximphoni',
      'music_artist_search' => '; clean bandit; zara larxon;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 57005,
      'music_track_id' => 0,
      'music_filename' => '1773769-1f5294e6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: Zara Larsson]
I\'ve been hearing symphonies
Before all I heard was silence
A rhapsody for you and me
And every melody is timeless
Life was stringing me along
Then you came and you cut me l...',
      'music_length' => 246,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Clean-Bandit~Y3NuX2FydGlzdH4xMzgzNg==.html">Clean Bandit</a>, <a href="/ca-si/Zara-Larsson~Y3NuX2FydGlzdH4xMzU4Ng==.html">Zara Larsson</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    22 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1783304,
      'music_title_url' => 'boom~tisto-sevenn',
      'music_title' => 'Boom',
      'music_artist' => 'Tiësto;Sevenn',
      'music_artist_id' => '15594;80772',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539029895,
      'music_last_update_time' => 1494470782,
      'music_title_search' => 'bom',
      'music_artist_search' => '; tiëxto; xeven;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 71147,
      'music_track_id' => 0,
      'music_filename' => '1783304-f81906df.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 154,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Tisto~Y3NuX2FydGlzdH4xNTU5NA==.html">Tiësto</a>, <a href="/ca-si/Sevenn~Y3NuX2FydGlzdH44MDc3Mg==.html">Sevenn</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1761737,
      'music_title_url' => 'scared-to-be-lonely~martin-garrix-dua-lipa',
      'music_title' => 'Scared To Be Lonely',
      'music_artist' => 'Martin Garrix;Dua Lipa',
      'music_artist_id' => '13343;14519',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538822366,
      'music_last_update_time' => 1486523574,
      'music_title_search' => 'xcared to be loneli',
      'music_artist_search' => '; martin garix; dua lipa;',
      'music_album_search' => '',
      'music_composer' => 'Martin Garrix',
      'music_album' => '',
      'music_listen' => 35785,
      'music_track_id' => 0,
      'music_filename' => '1761737-54d80acd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. It was great at the very start
Hands on each other
Couldn\'t stand to be far apart
Closer the better.

[Pre-Chorus:]
Now we\'re picking fights
And slamming doors
Magnifying all our flaws
And I won...',
      'music_length' => 230,
      'music_width' => 1920,
      'music_height' => 1012,
      'music_artist_html' => '<a href="/ca-si/Martin-Garrix~Y3NuX2FydGlzdH4xMzM0Mw==.html">Martin Garrix</a>, <a href="/ca-si/Dua-Lipa~Y3NuX2FydGlzdH4xNDUxOQ==.html">Dua Lipa</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1847721,
      'music_title_url' => 'so-far-away~martin-garrix-david-guetta-jamie-scott-romy-dya',
      'music_title' => 'So Far Away',
      'music_artist' => 'Martin Garrix;David Guetta;Jamie Scott;Romy Dya',
      'music_artist_id' => '13343;651;52033;102269',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539001320,
      'music_last_update_time' => 1512180368,
      'music_title_search' => 'xo far awai',
      'music_artist_search' => '; martin garix; david gueta; jami xcot; romi dia;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 45735,
      'music_track_id' => 0,
      'music_filename' => '1847721-492ba96b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: Jamie Scott]
Light \'em up, light \'em up
Tell me where you are, tell me where you are
Summer nights, bright lights
And the shooting stars, they break my heart.

[Pre-Chorus: Jamie Scott]
C...',
      'music_length' => 183,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Martin-Garrix~Y3NuX2FydGlzdH4xMzM0Mw==.html">Martin Garrix</a>, <a href="/ca-si/David-Guetta~Y3NuX2FydGlzdH42NTE=.html">David Guetta</a>, <a href="/ca-si/Jamie-Scott~Y3NuX2FydGlzdH41MjAzMw==.html">Jamie Scott</a>, <a href="/ca-si/Romy-Dya~Y3NuX2FydGlzdH4xMDIyNjk=.html">Romy Dya</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    25 => 
    array (
      'music_downloads_today' => 5,
      'music_id' => 1762389,
      'music_title_url' => 'shape-of-you~ed-sheeran',
      'music_title' => 'Shape Of You',
      'music_artist' => 'Ed Sheeran',
      'music_artist_id' => '2653',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539062152,
      'music_last_update_time' => 1486475602,
      'music_title_search' => 'thape of iou',
      'music_artist_search' => '; ed theran;',
      'music_album_search' => '',
      'music_composer' => 'Steve Mac',
      'music_album' => '',
      'music_listen' => 124185,
      'music_track_id' => 0,
      'music_filename' => '1762389-2d7cb57b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
The club isn\'t the best place to find a lover
So the bar is where I go
Me and my friends at the table doing shots
Drinking fast and then we talk slow
Come over and start up a conversatio...',
      'music_length' => 263,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Ed-Sheeran~Y3NuX2FydGlzdH4yNjUz.html">Ed Sheeran</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    26 => 
    array (
      'music_downloads_today' => 5,
      'music_id' => 1803486,
      'music_title_url' => 'new-rules~dua-lipa',
      'music_title' => 'New Rules',
      'music_artist' => 'Dua Lipa',
      'music_artist_id' => '14519',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539070499,
      'music_last_update_time' => 1510655024,
      'music_title_search' => 'new rulex',
      'music_artist_search' => '; dua lipa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 15850,
      'music_track_id' => 0,
      'music_filename' => '1803486-6538cd36.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
One, one, one...

[Verse 1:]
Talkin\' in my sleep at night
Makin\' myself crazy
(Out of my mind, out of my mind)
Wrote it down and read it out
Hopin\' it would save me
(Too many times, too ma...',
      'music_length' => 224,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Dua-Lipa~Y3NuX2FydGlzdH4xNDUxOQ==.html">Dua Lipa</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1770544,
      'music_title_url' => 'something-just-like-this~jfla',
      'music_title' => 'Something Just Like This',
      'music_artist' => 'J.Fla',
      'music_artist_id' => '14116',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538924187,
      'music_last_update_time' => 1488849629,
      'music_title_search' => 'xomething juxt like thix',
      'music_artist_search' => '; j fla;',
      'music_album_search' => '',
      'music_composer' => 'Andrew Taggart; Chris Martin; Guy Berryman; Jonny Buckland; Will Champion; The Chainsmokers',
      'music_album' => '',
      'music_listen' => 62523,
      'music_track_id' => 0,
      'music_filename' => '1770544-41e85055.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I\'ve been reading books of old
[t1]Tôi vẫn luôn chìm đắm trong những cuốn sách cũ
The legends and the myths
[t1]Những câu truyện thần thoại và những vị thần
Achilles and his gold
[t1]Achilles vớ...',
      'music_length' => 154,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/JFla~Y3NuX2FydGlzdH4xNDExNg==.html">J.Fla</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1774598,
      'music_title_url' => 'rockabye~madilyn-bailey',
      'music_title' => 'Rockabye',
      'music_artist' => 'Madilyn Bailey',
      'music_artist_id' => '17906',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538895855,
      'music_last_update_time' => 1490145832,
      'music_title_search' => 'rockabi',
      'music_artist_search' => '; madilin bailei;',
      'music_album_search' => '',
      'music_composer' => 'Clean Bandit; Sean Paul; Anne-Marie',
      'music_album' => '',
      'music_listen' => 6131,
      'music_track_id' => 0,
      'music_filename' => '1774598-944b1bee.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'She works the nights by the water
She\'s gone astray so far away
From her father\'s daughter
She just wants a life all for her baby
All on her own, no one will come
She\'s got to save him.

She tells...',
      'music_length' => 165,
      'music_width' => 854,
      'music_height' => 480,
      'music_artist_html' => '<a href="/ca-si/Madilyn-Bailey~Y3NuX2FydGlzdH4xNzkwNg==.html">Madilyn Bailey</a>',
      'music_bitrate_html' => '<span style="color: darkblue">MV 480p</span>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1825875,
      'music_title_url' => 'the-spectre~alan-walker-danny-shah',
      'music_title' => 'The Spectre',
      'music_artist' => 'Alan Walker;Danny Shah',
      'music_artist_id' => '14991;97519',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538963378,
      'music_last_update_time' => 1510736972,
      'music_title_search' => 'the xpeche',
      'music_artist_search' => '; alan walker; dani thah;',
      'music_album_search' => '',
      'music_composer' => 'Alan Walker; Marcus Arnbekk; Anders Froen; Lars Kistian Rosness; Jesper Borgen; Tommy Laverdi',
      'music_album' => '',
      'music_listen' => 184753,
      'music_track_id' => 0,
      'music_filename' => '1825875-418cb3c2.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Verse 1:]
Hello, hello
[t1]Em ơi
Can you hear me, as I scream your name
[t1]Em có nghe thấy anh, khi anh gào thét tên em
Hello, hello
[t1]Em này
Do you meet me, before I fade away.
[t1]Em sẽ gặp a...',
      'music_length' => 195,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Alan-Walker~Y3NuX2FydGlzdH4xNDk5MQ==.html">Alan Walker</a>, <a href="/ca-si/Danny-Shah~Y3NuX2FydGlzdH45NzUxOQ==.html">Danny Shah</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1841969,
      'music_title_url' => 'perfect~ed-sheeran',
      'music_title' => 'Perfect',
      'music_artist' => 'Ed Sheeran',
      'music_artist_id' => '2653',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538579164,
      'music_last_update_time' => 1510283241,
      'music_title_search' => 'perfect',
      'music_artist_search' => '; ed theran;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 61187,
      'music_track_id' => 0,
      'music_filename' => '1841969-2e4944f1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
I found a love for me
[t1]Anh đã tìm được cho mình một tình yêu
Darling, just dive right in and follow my lead
[t1]Em yêu, chớ ngại ngùng và cứ để anh dẫn
Well, I found a girl, beautiful...',
      'music_length' => 279,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Ed-Sheeran~Y3NuX2FydGlzdH4yNjUz.html">Ed Sheeran</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1769614,
      'music_title_url' => 'thats-what-i-like~bruno-mars',
      'music_title' => 'That\'s What I Like',
      'music_artist' => 'Bruno Mars',
      'music_artist_id' => '2001',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538937551,
      'music_last_update_time' => 1488512823,
      'music_title_search' => 'that x what i like',
      'music_artist_search' => '; bruno marx;',
      'music_album_search' => '',
      'music_composer' => 'Bruno Mars',
      'music_album' => '',
      'music_listen' => 61014,
      'music_track_id' => 0,
      'music_filename' => '1769614-8bf145c6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I got a condo in Manhattan
Baby girl, what\'s hatnin\'?
You and your ass invited
So gon\' and get to clappin\'
So pop it for a pimp
Pop, pop it for me
Turn around and drop it for a pimp
Drop, drop i...',
      'music_length' => 210,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Bruno-Mars~Y3NuX2FydGlzdH4yMDAx.html">Bruno Mars</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1795477,
      'music_title_url' => 'secrets~the-weeknd',
      'music_title' => 'Secrets',
      'music_artist' => 'The Weeknd',
      'music_artist_id' => '14618',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538839745,
      'music_last_update_time' => 1497324179,
      'music_title_search' => 'xecretx',
      'music_artist_search' => '; the weknd;',
      'music_album_search' => '',
      'music_composer' => 'The Weeknd; Pete Solley; Wally Palamarchuk; Ronald Orzabal; Dylan Wiggins; Henry Russel Walter; Doc McKinney',
      'music_album' => '',
      'music_listen' => 1919,
      'music_track_id' => 0,
      'music_filename' => '1795477-917093fd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
Everybody here wants you
My love, my love
And I know that you want him too
My love, my love
I ask you what your heart desires
My love, my love
You tell me I\'m the only one
My love, my lo...',
      'music_length' => 198,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/The-Weeknd~Y3NuX2FydGlzdH4xNDYxOA==.html">The Weeknd</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    33 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1823404,
      'music_title_url' => 'dusk-till-dawn~zayn-sia',
      'music_title' => 'Dusk Till Dawn',
      'music_artist' => 'ZAYN;Sia',
      'music_artist_id' => '15954;9255',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539016733,
      'music_last_update_time' => 1505700823,
      'music_title_search' => 'duxk til dawn',
      'music_artist_search' => '; zain; xia;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 29331,
      'music_track_id' => 0,
      'music_filename' => '1823404-77794fb2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: ZAYN]
Not tryna be indie
Not tryna be cool
Just tryna be in this
Tell me, are you too?
Can you feel where the wind is?
Can you feel it through
All of the windows
Inside this room?

[Inter...',
      'music_length' => 337,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/ZAYN~Y3NuX2FydGlzdH4xNTk1NA==.html">ZAYN</a>, <a href="/ca-si/Sia~Y3NuX2FydGlzdH45MjU1.html">Sia</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1768319,
      'music_title_url' => 'bad-things-i-dont-wanna-live-forever~jfla',
      'music_title' => 'Bad Things; I Don\'t Wanna Live Forever',
      'music_artist' => 'J.Fla',
      'music_artist_id' => '14116',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538873441,
      'music_last_update_time' => 1488154981,
      'music_title_search' => 'bad thingx; i don t wana live forever',
      'music_artist_search' => '; j fla;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8665,
      'music_track_id' => 0,
      'music_filename' => '1768319-bcf157fa.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Bad Things]

[Chorus:]

1. Nothing\'s that bad
[t1]Bấy nhiêu đấy đã là gì đâu em
If it feels good
[t1]Chỉ cần em cảm thấy hài lòng
So you come back
[t1]Rồi em lại về đây thôi
Like I knew you would...',
      'music_length' => 148,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/JFla~Y3NuX2FydGlzdH4xNDExNg==.html">J.Fla</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1842877,
      'music_title_url' => 'havana-live~camilla-cabello',
      'music_title' => 'Havana (Live)',
      'music_artist' => 'Camilla Cabello',
      'music_artist_id' => '101854',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538932835,
      'music_last_update_time' => 1514536476,
      'music_title_search' => 'havana; live',
      'music_artist_search' => '; camila cabelo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3382,
      'music_track_id' => 0,
      'music_filename' => '1842877-8cbc8d20.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Havana, ooh na-na (ay)
[t1]Havana, ooh na-na (ay)
Half of my heart is in Havana, ooh-na-na (ay, ay)
[t1]Một nửa con tim tôi dành cho Havana
He took me back to East Atlanta, na-na-na
[t1]Anh khiến t...',
      'music_length' => 224,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Camilla-Cabello~Y3NuX2FydGlzdH4xMDE4NTQ=.html">Camilla Cabello</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1766417,
      'music_title_url' => 'see-you-again~jfla',
      'music_title' => 'See You Again',
      'music_artist' => 'J.Fla',
      'music_artist_id' => '14116',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538577792,
      'music_last_update_time' => 1487466472,
      'music_title_search' => 'xe iou again',
      'music_artist_search' => '; j fla;',
      'music_album_search' => '',
      'music_composer' => 'Charlie Puth',
      'music_album' => '',
      'music_listen' => 59354,
      'music_track_id' => 0,
      'music_filename' => '1766417-5424287d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Hook: Charlie Puth] 
It\'s been a long day, without you my friend
And I\'ll tell you all about it when I see you again
We\'ve come a long way from where we began
Oh I\'ll tell you all about it when I...',
      'music_length' => 173,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/JFla~Y3NuX2FydGlzdH4xNDExNg==.html">J.Fla</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    37 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1783089,
      'music_title_url' => 'ignite~alan-walker-k-391',
      'music_title' => 'Ignite',
      'music_artist' => 'Alan Walker;K-391',
      'music_artist_id' => '14991;14990',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539070816,
      'music_last_update_time' => 1493525769,
      'music_title_search' => 'ignite',
      'music_artist_search' => '; alan walker; k 391;',
      'music_album_search' => '',
      'music_composer' => 'Alan Walker; K-391',
      'music_album' => '',
      'music_listen' => 18987,
      'music_track_id' => 0,
      'music_filename' => '1783089-e2fcd52f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 227,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Alan-Walker~Y3NuX2FydGlzdH4xNDk5MQ==.html">Alan Walker</a>, <a href="/ca-si/K-391~Y3NuX2FydGlzdH4xNDk5MA==.html">K-391</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    38 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1782961,
      'music_title_url' => 'young-lyric-video~the-chainsmokers',
      'music_title' => 'Young (Lyric Video)',
      'music_artist' => 'The Chainsmokers',
      'music_artist_id' => '13339',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538986073,
      'music_last_update_time' => 1493172476,
      'music_title_search' => 'ioung; liric video',
      'music_artist_search' => '; the chainxmokerx;',
      'music_album_search' => '',
      'music_composer' => 'CVBZ; Peter Hannah; Andrew Taggart',
      'music_album' => '',
      'music_listen' => 2054,
      'music_track_id' => 0,
      'music_filename' => '1782961-d1159058.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
Young
We were so young when we thought that we knew how to love
Fought about anything, everything that did is function
But we just gotta own that shit
Don\'t let it go like this
Maybe we...',
      'music_length' => 231,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/The-Chainsmokers~Y3NuX2FydGlzdH4xMzMzOQ==.html">The Chainsmokers</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1804613,
      'music_title_url' => 'know-no-better~major-lazer-travis-scott-camila-cabello-quavo',
      'music_title' => 'Know No Better',
      'music_artist' => 'Major Lazer;Travis Scott;Camila Cabello;Quavo',
      'music_artist_id' => '13367;14617;13959;15216',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538545993,
      'music_last_update_time' => 1499822647,
      'music_title_search' => 'know no beter',
      'music_artist_search' => '; major lazer; chavix xcot; camila cabelo; quavo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3828,
      'music_track_id' => 0,
      'music_filename' => '1804613-183542c3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Travis Scott]
Yeah
Straight up.

[Verse: Travis Scott]
Wrist look like it been dipped
Dipped in that, dipped in that, dipped in that
Script look like it been flipped
Flippin\' that, flippin\'...',
      'music_length' => 225,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Major-Lazer~Y3NuX2FydGlzdH4xMzM2Nw==.html">Major Lazer</a>, <a href="/ca-si/Travis-Scott~Y3NuX2FydGlzdH4xNDYxNw==.html">Travis Scott</a>, <a href="/ca-si/Camila-Cabello~Y3NuX2FydGlzdH4xMzk1OQ==.html">Camila Cabello</a>, <a href="/ca-si/Quavo~Y3NuX2FydGlzdH4xNTIxNg==.html">Quavo</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
  ),
  3 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1802543,
      'music_title_url' => 'co-len-ban-toi-amigo~tfboys',
      'music_title' => 'Cố Lên! Bạn Tôi (加油! Amigo)',
      'music_artist' => 'TFBOYS',
      'music_artist_id' => '22052',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538929557,
      'music_last_update_time' => 1499311629,
      'music_title_search' => 'co len ban toi; 加油 amigo',
      'music_artist_search' => '; tfboix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5282,
      'music_track_id' => 0,
      'music_filename' => '1802543-25912883.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hé:
1 2 3 amigo
4 5 6 jiāyóu jiāyóu
1 2 3 amigo
4 5 6
Xiǎoyǔzhòu
Gogogo jiāyóu wǒ de péngyǒu
Hohoho nǐ shì wǒ zuì hǎo péngyǒu
Wǒ huì tǐng nǐ dào zuìhòu
Dà mèngxiǎng
Gogogo jiāyóu wǒ de péngyǒu
Hoho...',
      'music_length' => 267,
      'music_width' => 1920,
      'music_height' => 1072,
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1793633,
      'music_title_url' => 'just-one-smile-is-very-alluring~duong-duong',
      'music_title' => 'Just One Smile Is Very Alluring',
      'music_artist' => 'Dương Dương',
      'music_artist_id' => '15898',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538939612,
      'music_last_update_time' => 1496842403,
      'music_title_search' => 'juxt 1 xmile ix veri aluring',
      'music_artist_search' => '; dung dung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1868,
      'music_track_id' => 0,
      'music_filename' => '1793633-88fb92f1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 205,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1758548,
      'music_title_url' => 'up-down-chinese-version~exid',
      'music_title' => 'Up &amp; Down (Chinese Version)',
      'music_artist' => 'EXID',
      'music_artist_id' => '13209',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538961499,
      'music_last_update_time' => 1484457132,
      'music_title_search' => 'up down; chinexe verxion',
      'music_artist_search' => '; exid;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12984,
      'music_track_id' => 0,
      'music_filename' => '1758548-11665b7e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wi arae wi wi arae wi arae wi wi arae
Wi arae wi wi arae up~
Wi arae wi wi arae wi arae wi wi arae
Wi arae wi wi arae down~.

Nan molla sunjinhan cheok haneun ne donggong
Nal ne mamdaero deureotdag...',
      'music_length' => 195,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1789593,
      'music_title_url' => 'happy-birthday~snh48',
      'music_title' => 'Happy Birthday (生日快乐)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538588590,
      'music_last_update_time' => 1495545707,
      'music_title_search' => 'hapi birthdai; 生日快乐',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => 'Khương Phàm (姜帆)',
      'music_album' => '',
      'music_listen' => 3321,
      'music_track_id' => 1,
      'music_filename' => '1789593-0469533b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '祝你 生日快乐 祝你 生日快乐

祝你 生日快乐 祝你 生日快乐

眼睛明亮清澈 欣赏着崭新的景色

骑着梦想单车 踩下一路曲折

被时光唱成歌 点燃青春的火热

古灵精怪本色 让这美丽世界 多好多快乐

祝你生日快乐

来给地球 加点颜色

彩虹上 唱着歌

祝你天天快乐

人生剧本 自写角色

做未来 的代言者

Happy birthday to you

Happy birthday...',
      'music_length' => 235,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1817232,
      'music_title_url' => 'we-young-chinese-version~nct-dream',
      'music_title' => 'We Young (青春漾) (Chinese Version)',
      'music_artist' => 'NCT Dream',
      'music_artist_id' => '15817',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533580251,
      'music_last_update_time' => 1503103990,
      'music_title_search' => 'we ioung; 青春漾 ; chinexe verxion',
      'music_artist_search' => '; nct dream;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 742,
      'music_track_id' => 0,
      'music_filename' => '1817232-ce5c1390.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Xiang jian dao ni jin tian chong man qi dai
Ting ni shuo xi huan tian se qian lan.

Xiang ge ma que wo
Xin qing zheng zai qi fei ah
Gan jue bu cuo yu gan
Hui fa sheng hao shi.

We\'ll dance wo cai z...',
      'music_length' => 238,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1760039,
      'music_title_url' => 'skin-to-skin~luhan',
      'music_title' => 'Skin To Skin',
      'music_artist' => 'Luhan',
      'music_artist_id' => '17771',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532880640,
      'music_last_update_time' => 1484960919,
      'music_title_search' => 'xkin to xkin',
      'music_artist_search' => '; luhan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10668,
      'music_track_id' => 0,
      'music_filename' => '1760039-7ae2caa5.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Take your time
Love me in the middle of your lowest night
I\'ll be sure to lift you if you promise me
Give me your affection
And your honesty
If I could feel your touch
If I could be your love
I wan...',
      'music_length' => 221,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1817880,
      'music_title_url' => 'so-far~zhu-ya',
      'music_title' => 'So Far',
      'music_artist' => 'Zhu Ya',
      'music_artist_id' => '99468',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537242904,
      'music_last_update_time' => 1504581513,
      'music_title_search' => 'xo far',
      'music_artist_search' => '; zhu ia;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6047,
      'music_track_id' => 0,
      'music_filename' => '1817880-d68141ca.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 272,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1783271,
      'music_title_url' => '7senses~snh48-7senses',
      'music_title' => '7Senses',
      'music_artist' => 'SNH48 7SENSES',
      'music_artist_id' => '96184',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538173715,
      'music_last_update_time' => 1494470799,
      'music_title_search' => '7xenxex',
      'music_artist_search' => '; xnh48 7xenxex;',
      'music_album_search' => '',
      'music_composer' => 'Tiger; Lời: Tiểu7',
      'music_album' => '',
      'music_listen' => 32180,
      'music_track_id' => 2,
      'music_filename' => '1783271-f6e34945.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '平行空间视觉一闪而过

发光的轨道

触发听觉加速跳动

谁在舞蹈

嗅觉寻找那条线索

Lucky Seven耀眼的闪烁

若隐若现神秘面孔

准备着降临的时刻

第七感的讯号

一轮星月划过等待揭晓

第七感在闪耀

金木水火土也会将我们围绕

我解开假面 众人眼前 小宇宙燃烧

在新的世界 七种感觉 独特的符号 hey

解开假面 众人眼前 小宇宙燃烧

在新的世界 七种感觉

Luc...',
      'music_length' => 248,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    8 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1756299,
      'music_title_url' => 'whos-that-girl~meng-jia',
      'music_title' => 'Who\'s That Girl (她是谁)',
      'music_artist' => 'Meng Jia',
      'music_artist_id' => '92182',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539037295,
      'music_last_update_time' => 1483500709,
      'music_title_search' => 'who x that drl; 她是谁',
      'music_artist_search' => '; meng jia;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3569,
      'music_track_id' => 0,
      'music_filename' => '1756299-77e71670.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 249,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764380,
      'music_title_url' => 'my-first-and-last-chinese-version~nct-dream',
      'music_title' => 'My First And Last (Chinese Version)',
      'music_artist' => 'NCT Dream',
      'music_artist_id' => '15817',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536218038,
      'music_last_update_time' => 1486695166,
      'music_title_search' => 'mi firxt and laxt; chinexe verxion',
      'music_artist_search' => '; nct dream;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2116,
      'music_track_id' => 0,
      'music_filename' => '1764380-64f8eb8d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[ Verse 1: Haechan ]
Oh maybe maybe
ài qíng yǐ jīng zhuàng shàng wǒ dí tóu
Chú liǎo nǐ yǎn qián shí me dū méi yǒu
Dào dǐ xiàn zài shì bù shì duì dí shí hòu
Ràng ài dí jiàn shè zhōng xiōng kǒu

[ Ve...',
      'music_length' => 206,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764576,
      'music_title_url' => 'left-ear~jane',
      'music_title' => 'Left Ear (左耳)',
      'music_artist' => 'Jane',
      'music_artist_id' => '57761',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531820009,
      'music_last_update_time' => 1486804952,
      'music_title_search' => 'left ear; 左耳',
      'music_artist_search' => '; jane;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3709,
      'music_track_id' => 0,
      'music_filename' => '1764576-35c2a013.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 291,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764577,
      'music_title_url' => 'in-your-eyes~jane',
      'music_title' => 'In Your Eyes (在你眼裡)',
      'music_artist' => 'Jane',
      'music_artist_id' => '57761',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537685807,
      'music_last_update_time' => 1486804963,
      'music_title_search' => 'in iour eix; 在你眼裡',
      'music_artist_search' => '; jane;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2418,
      'music_track_id' => 0,
      'music_filename' => '1764577-dc60f2ba.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 271,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764579,
      'music_title_url' => 'so-i-can-be-happy~jane',
      'music_title' => 'So I Can Be Happy (原來我也可以幸福)',
      'music_artist' => 'Jane',
      'music_artist_id' => '57761',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525397493,
      'music_last_update_time' => 1502250679,
      'music_title_search' => 'xo i can be hapi; 原來我也可以幸福',
      'music_artist_search' => '; jane;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1873,
      'music_track_id' => 0,
      'music_filename' => '1764579-d83a3958.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 323,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764580,
      'music_title_url' => 'thanks-for-your-love~r-chord',
      'music_title' => 'Thanks For Your Love (謝謝妳愛我)',
      'music_artist' => 'R-chord',
      'music_artist_id' => '94399',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535997270,
      'music_last_update_time' => 1486806157,
      'music_title_search' => 'thankx for iour love; 謝妳愛我',
      'music_artist_search' => '; r chord;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2910,
      'music_track_id' => 0,
      'music_filename' => '1764580-7dbe0705.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 227,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764581,
      'music_title_url' => 'starring~vu-mong-lung',
      'music_title' => 'Starring (凝视 官方)',
      'music_artist' => 'Vu Mong Lung',
      'music_artist_id' => '94400',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536850381,
      'music_last_update_time' => 1486804806,
      'music_title_search' => 'xtaring; 凝视 官方',
      'music_artist_search' => '; vu mong lung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2488,
      'music_track_id' => 0,
      'music_filename' => '1764581-9d35f04c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 277,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764582,
      'music_title_url' => 'a-person-had~vu-mong-lung',
      'music_title' => 'A Person Had (个人过 官方版)',
      'music_artist' => 'Vu Mong Lung',
      'music_artist_id' => '94400',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498425912,
      'music_last_update_time' => 1486805176,
      'music_title_search' => 'a perxon had; 个人过 官方版',
      'music_artist_search' => '; vu mong lung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1593,
      'music_track_id' => 0,
      'music_filename' => '1764582-0476628f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 295,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    16 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1764585,
      'music_title_url' => 'self-directed~vu-mong-lung',
      'music_title' => 'Self-Directed (自導自演)',
      'music_artist' => 'Vu Mong Lung',
      'music_artist_id' => '94400',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539036305,
      'music_last_update_time' => 1486805135,
      'music_title_search' => 'xelf directed; 自導自演',
      'music_artist_search' => '; vu mong lung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1680,
      'music_track_id' => 0,
      'music_filename' => '1764585-a5f952e0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 203,
      'music_width' => 1920,
      'music_height' => 804,
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764587,
      'music_title_url' => 'drip~meng-jia',
      'music_title' => 'Drip (给我乖)',
      'music_artist' => 'Meng Jia',
      'music_artist_id' => '92182',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529482999,
      'music_last_update_time' => 1486805083,
      'music_title_search' => 'drip; 给我乖',
      'music_artist_search' => '; meng jia;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2256,
      'music_track_id' => 0,
      'music_filename' => '1764587-35105624.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 172,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764591,
      'music_title_url' => 'cat-and-mouse~by2',
      'music_title' => 'Cat and Mouse',
      'music_artist' => 'By2',
      'music_artist_id' => '45154',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531664252,
      'music_last_update_time' => 1486804100,
      'music_title_search' => 'cat and mouxe',
      'music_artist_search' => '; bi2;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1635,
      'music_track_id' => 0,
      'music_filename' => '1764591-a95c736c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 249,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764590,
      'music_title_url' => 'peach-blossom-cheongsam~by2',
      'music_title' => 'Peach Blossom Cheongsam (高清官方完整版)',
      'music_artist' => 'By2',
      'music_artist_id' => '45154',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538227041,
      'music_last_update_time' => 1486804531,
      'music_title_search' => 'peach bloxom cheongxam; 高清官方完整版',
      'music_artist_search' => '; bi2;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2841,
      'music_track_id' => 0,
      'music_filename' => '1764590-d1c38905.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 225,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1802543,
      'music_title_url' => 'co-len-ban-toi-amigo~tfboys',
      'music_title' => 'Cố Lên! Bạn Tôi (加油! Amigo)',
      'music_artist' => 'TFBOYS',
      'music_artist_id' => '22052',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538929557,
      'music_last_update_time' => 1499311629,
      'music_title_search' => 'co len ban toi; 加油 amigo',
      'music_artist_search' => '; tfboix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5282,
      'music_track_id' => 0,
      'music_filename' => '1802543-25912883.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Hé:
1 2 3 amigo
4 5 6 jiāyóu jiāyóu
1 2 3 amigo
4 5 6
Xiǎoyǔzhòu
Gogogo jiāyóu wǒ de péngyǒu
Hohoho nǐ shì wǒ zuì hǎo péngyǒu
Wǒ huì tǐng nǐ dào zuìhòu
Dà mèngxiǎng
Gogogo jiāyóu wǒ de péngyǒu
Hoho...',
      'music_length' => 267,
      'music_width' => 1920,
      'music_height' => 1072,
      'music_artist_html' => '<a href="/ca-si/TFBOYS~Y3NuX2FydGlzdH4yMjA1Mg==.html">TFBOYS</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1793633,
      'music_title_url' => 'just-one-smile-is-very-alluring~duong-duong',
      'music_title' => 'Just One Smile Is Very Alluring',
      'music_artist' => 'Dương Dương',
      'music_artist_id' => '15898',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538939612,
      'music_last_update_time' => 1496842403,
      'music_title_search' => 'juxt 1 xmile ix veri aluring',
      'music_artist_search' => '; dung dung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1868,
      'music_track_id' => 0,
      'music_filename' => '1793633-88fb92f1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 205,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Duong-Duong~Y3NuX2FydGlzdH4xNTg5OA==.html">Dương Dương</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1758548,
      'music_title_url' => 'up-down-chinese-version~exid',
      'music_title' => 'Up &amp; Down (Chinese Version)',
      'music_artist' => 'EXID',
      'music_artist_id' => '13209',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538961499,
      'music_last_update_time' => 1484457132,
      'music_title_search' => 'up down; chinexe verxion',
      'music_artist_search' => '; exid;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12984,
      'music_track_id' => 0,
      'music_filename' => '1758548-11665b7e.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Wi arae wi wi arae wi arae wi wi arae
Wi arae wi wi arae up~
Wi arae wi wi arae wi arae wi wi arae
Wi arae wi wi arae down~.

Nan molla sunjinhan cheok haneun ne donggong
Nal ne mamdaero deureotdag...',
      'music_length' => 195,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/EXID~Y3NuX2FydGlzdH4xMzIwOQ==.html">EXID</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1789593,
      'music_title_url' => 'happy-birthday~snh48',
      'music_title' => 'Happy Birthday (生日快乐)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538588590,
      'music_last_update_time' => 1495545707,
      'music_title_search' => 'hapi birthdai; 生日快乐',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => 'Khương Phàm (姜帆)',
      'music_album' => '',
      'music_listen' => 3321,
      'music_track_id' => 1,
      'music_filename' => '1789593-0469533b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '祝你 生日快乐 祝你 生日快乐

祝你 生日快乐 祝你 生日快乐

眼睛明亮清澈 欣赏着崭新的景色

骑着梦想单车 踩下一路曲折

被时光唱成歌 点燃青春的火热

古灵精怪本色 让这美丽世界 多好多快乐

祝你生日快乐

来给地球 加点颜色

彩虹上 唱着歌

祝你天天快乐

人生剧本 自写角色

做未来 的代言者

Happy birthday to you

Happy birthday...',
      'music_length' => 235,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SNH48~Y3NuX2FydGlzdH4xNTk2Ng==.html">SNH48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1817232,
      'music_title_url' => 'we-young-chinese-version~nct-dream',
      'music_title' => 'We Young (青春漾) (Chinese Version)',
      'music_artist' => 'NCT Dream',
      'music_artist_id' => '15817',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533580251,
      'music_last_update_time' => 1503103990,
      'music_title_search' => 'we ioung; 青春漾 ; chinexe verxion',
      'music_artist_search' => '; nct dream;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 742,
      'music_track_id' => 0,
      'music_filename' => '1817232-ce5c1390.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Xiang jian dao ni jin tian chong man qi dai
Ting ni shuo xi huan tian se qian lan.

Xiang ge ma que wo
Xin qing zheng zai qi fei ah
Gan jue bu cuo yu gan
Hui fa sheng hao shi.

We\'ll dance wo cai z...',
      'music_length' => 238,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/NCT-Dream~Y3NuX2FydGlzdH4xNTgxNw==.html">NCT Dream</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1760039,
      'music_title_url' => 'skin-to-skin~luhan',
      'music_title' => 'Skin To Skin',
      'music_artist' => 'Luhan',
      'music_artist_id' => '17771',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532880640,
      'music_last_update_time' => 1484960919,
      'music_title_search' => 'xkin to xkin',
      'music_artist_search' => '; luhan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10668,
      'music_track_id' => 0,
      'music_filename' => '1760039-7ae2caa5.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Take your time
Love me in the middle of your lowest night
I\'ll be sure to lift you if you promise me
Give me your affection
And your honesty
If I could feel your touch
If I could be your love
I wan...',
      'music_length' => 221,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Luhan~Y3NuX2FydGlzdH4xNzc3MQ==.html">Luhan</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1817880,
      'music_title_url' => 'so-far~zhu-ya',
      'music_title' => 'So Far',
      'music_artist' => 'Zhu Ya',
      'music_artist_id' => '99468',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537242904,
      'music_last_update_time' => 1504581513,
      'music_title_search' => 'xo far',
      'music_artist_search' => '; zhu ia;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6047,
      'music_track_id' => 0,
      'music_filename' => '1817880-d68141ca.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 272,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/Zhu-Ya~Y3NuX2FydGlzdH45OTQ2OA==.html">Zhu Ya</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1783271,
      'music_title_url' => '7senses~snh48-7senses',
      'music_title' => '7Senses',
      'music_artist' => 'SNH48 7SENSES',
      'music_artist_id' => '96184',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538173715,
      'music_last_update_time' => 1494470799,
      'music_title_search' => '7xenxex',
      'music_artist_search' => '; xnh48 7xenxex;',
      'music_album_search' => '',
      'music_composer' => 'Tiger; Lời: Tiểu7',
      'music_album' => '',
      'music_listen' => 32180,
      'music_track_id' => 2,
      'music_filename' => '1783271-f6e34945.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '平行空间视觉一闪而过

发光的轨道

触发听觉加速跳动

谁在舞蹈

嗅觉寻找那条线索

Lucky Seven耀眼的闪烁

若隐若现神秘面孔

准备着降临的时刻

第七感的讯号

一轮星月划过等待揭晓

第七感在闪耀

金木水火土也会将我们围绕

我解开假面 众人眼前 小宇宙燃烧

在新的世界 七种感觉 独特的符号 hey

解开假面 众人眼前 小宇宙燃烧

在新的世界 七种感觉

Luc...',
      'music_length' => 248,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SNH48-7SENSES~Y3NuX2FydGlzdH45NjE4NA==.html">SNH48 7SENSES</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    28 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1756299,
      'music_title_url' => 'whos-that-girl~meng-jia',
      'music_title' => 'Who\'s That Girl (她是谁)',
      'music_artist' => 'Meng Jia',
      'music_artist_id' => '92182',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539037295,
      'music_last_update_time' => 1483500709,
      'music_title_search' => 'who x that drl; 她是谁',
      'music_artist_search' => '; meng jia;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3569,
      'music_track_id' => 0,
      'music_filename' => '1756299-77e71670.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 249,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Meng-Jia~Y3NuX2FydGlzdH45MjE4Mg==.html">Meng Jia</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764380,
      'music_title_url' => 'my-first-and-last-chinese-version~nct-dream',
      'music_title' => 'My First And Last (Chinese Version)',
      'music_artist' => 'NCT Dream',
      'music_artist_id' => '15817',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536218038,
      'music_last_update_time' => 1486695166,
      'music_title_search' => 'mi firxt and laxt; chinexe verxion',
      'music_artist_search' => '; nct dream;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2116,
      'music_track_id' => 0,
      'music_filename' => '1764380-64f8eb8d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[ Verse 1: Haechan ]
Oh maybe maybe
ài qíng yǐ jīng zhuàng shàng wǒ dí tóu
Chú liǎo nǐ yǎn qián shí me dū méi yǒu
Dào dǐ xiàn zài shì bù shì duì dí shí hòu
Ràng ài dí jiàn shè zhōng xiōng kǒu

[ Ve...',
      'music_length' => 206,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/NCT-Dream~Y3NuX2FydGlzdH4xNTgxNw==.html">NCT Dream</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764576,
      'music_title_url' => 'left-ear~jane',
      'music_title' => 'Left Ear (左耳)',
      'music_artist' => 'Jane',
      'music_artist_id' => '57761',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531820009,
      'music_last_update_time' => 1486804952,
      'music_title_search' => 'left ear; 左耳',
      'music_artist_search' => '; jane;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3709,
      'music_track_id' => 0,
      'music_filename' => '1764576-35c2a013.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 291,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Jane~Y3NuX2FydGlzdH41Nzc2MQ==.html">Jane</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764577,
      'music_title_url' => 'in-your-eyes~jane',
      'music_title' => 'In Your Eyes (在你眼裡)',
      'music_artist' => 'Jane',
      'music_artist_id' => '57761',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537685807,
      'music_last_update_time' => 1486804963,
      'music_title_search' => 'in iour eix; 在你眼裡',
      'music_artist_search' => '; jane;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2418,
      'music_track_id' => 0,
      'music_filename' => '1764577-dc60f2ba.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 271,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/Jane~Y3NuX2FydGlzdH41Nzc2MQ==.html">Jane</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764579,
      'music_title_url' => 'so-i-can-be-happy~jane',
      'music_title' => 'So I Can Be Happy (原來我也可以幸福)',
      'music_artist' => 'Jane',
      'music_artist_id' => '57761',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525397493,
      'music_last_update_time' => 1502250679,
      'music_title_search' => 'xo i can be hapi; 原來我也可以幸福',
      'music_artist_search' => '; jane;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1873,
      'music_track_id' => 0,
      'music_filename' => '1764579-d83a3958.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 323,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Jane~Y3NuX2FydGlzdH41Nzc2MQ==.html">Jane</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764580,
      'music_title_url' => 'thanks-for-your-love~r-chord',
      'music_title' => 'Thanks For Your Love (謝謝妳愛我)',
      'music_artist' => 'R-chord',
      'music_artist_id' => '94399',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535997270,
      'music_last_update_time' => 1486806157,
      'music_title_search' => 'thankx for iour love; 謝妳愛我',
      'music_artist_search' => '; r chord;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2910,
      'music_track_id' => 0,
      'music_filename' => '1764580-7dbe0705.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 227,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/R-chord~Y3NuX2FydGlzdH45NDM5OQ==.html">R-chord</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764581,
      'music_title_url' => 'starring~vu-mong-lung',
      'music_title' => 'Starring (凝视 官方)',
      'music_artist' => 'Vu Mong Lung',
      'music_artist_id' => '94400',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1536850381,
      'music_last_update_time' => 1486804806,
      'music_title_search' => 'xtaring; 凝视 官方',
      'music_artist_search' => '; vu mong lung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2488,
      'music_track_id' => 0,
      'music_filename' => '1764581-9d35f04c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 277,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Vu-Mong-Lung~Y3NuX2FydGlzdH45NDQwMA==.html">Vu Mong Lung</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764582,
      'music_title_url' => 'a-person-had~vu-mong-lung',
      'music_title' => 'A Person Had (个人过 官方版)',
      'music_artist' => 'Vu Mong Lung',
      'music_artist_id' => '94400',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1498425912,
      'music_last_update_time' => 1486805176,
      'music_title_search' => 'a perxon had; 个人过 官方版',
      'music_artist_search' => '; vu mong lung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1593,
      'music_track_id' => 0,
      'music_filename' => '1764582-0476628f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 295,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Vu-Mong-Lung~Y3NuX2FydGlzdH45NDQwMA==.html">Vu Mong Lung</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    36 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1764585,
      'music_title_url' => 'self-directed~vu-mong-lung',
      'music_title' => 'Self-Directed (自導自演)',
      'music_artist' => 'Vu Mong Lung',
      'music_artist_id' => '94400',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539036305,
      'music_last_update_time' => 1486805135,
      'music_title_search' => 'xelf directed; 自導自演',
      'music_artist_search' => '; vu mong lung;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1680,
      'music_track_id' => 0,
      'music_filename' => '1764585-a5f952e0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 203,
      'music_width' => 1920,
      'music_height' => 804,
      'music_artist_html' => '<a href="/ca-si/Vu-Mong-Lung~Y3NuX2FydGlzdH45NDQwMA==.html">Vu Mong Lung</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764587,
      'music_title_url' => 'drip~meng-jia',
      'music_title' => 'Drip (给我乖)',
      'music_artist' => 'Meng Jia',
      'music_artist_id' => '92182',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529482999,
      'music_last_update_time' => 1486805083,
      'music_title_search' => 'drip; 给我乖',
      'music_artist_search' => '; meng jia;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2256,
      'music_track_id' => 0,
      'music_filename' => '1764587-35105624.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 172,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Meng-Jia~Y3NuX2FydGlzdH45MjE4Mg==.html">Meng Jia</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764591,
      'music_title_url' => 'cat-and-mouse~by2',
      'music_title' => 'Cat and Mouse',
      'music_artist' => 'By2',
      'music_artist_id' => '45154',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1531664252,
      'music_last_update_time' => 1486804100,
      'music_title_search' => 'cat and mouxe',
      'music_artist_search' => '; bi2;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1635,
      'music_track_id' => 0,
      'music_filename' => '1764591-a95c736c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 249,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/By2~Y3NuX2FydGlzdH40NTE1NA==.html">By2</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764590,
      'music_title_url' => 'peach-blossom-cheongsam~by2',
      'music_title' => 'Peach Blossom Cheongsam (高清官方完整版)',
      'music_artist' => 'By2',
      'music_artist_id' => '45154',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538227041,
      'music_last_update_time' => 1486804531,
      'music_title_search' => 'peach bloxom cheongxam; 高清官方完整版',
      'music_artist_search' => '; bi2;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2841,
      'music_track_id' => 0,
      'music_filename' => '1764590-d1c38905.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 225,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/By2~Y3NuX2FydGlzdH40NTE1NA==.html">By2</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
  ),
  4 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1781680,
      'music_title_url' => 'palette~iu-g-dragon',
      'music_title' => 'Palette',
      'music_artist' => 'IU;G-Dragon',
      'music_artist_id' => '2059;1682',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538887209,
      'music_last_update_time' => 1492963444,
      'music_title_search' => 'palete',
      'music_artist_search' => '; iu; g dragon;',
      'music_album_search' => '',
      'music_composer' => 'IU',
      'music_album' => '',
      'music_listen' => 56005,
      'music_track_id' => 0,
      'music_filename' => '1781680-7a8b1874.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Isanghagedo yojeumen
Geunyang swiun ge joha
Hagin geuraedo yeojeonhi
Korin eumageun johdeora.

Hot pinkboda
Jinhan borasaegeul deo johahae
Tto mwodeora danchu issneun
Pajamat, lipstick
Jom jisgujeu...',
      'music_length' => 218,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    1 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1848098,
      'music_title_url' => 'energetic-pick-me-2017-mama-in-hong-kong-live~wanna-one',
      'music_title' => 'Energetic; Pick Me (2017 MAMA In Hong Kong Live)',
      'music_artist' => 'Wanna One',
      'music_artist_id' => '13510',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538963228,
      'music_last_update_time' => 1512351001,
      'music_title_search' => 'energetic; pick me; 2017 mama in hong kong live',
      'music_artist_search' => '; wana 1;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1681,
      'music_track_id' => 0,
      'music_filename' => '1848098-51f4abb1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Energetic]

Neowa naui ibsuri jeomjeom
Neukkyeojineun i sungan soge tteugeoun gonggi
Onmome jeonyuri wa
Ije neowa naega sseo naeril Story.

I don\'t know why
Nado moreuge
Deo ppajyeodeureoga
Sum ma...',
      'music_length' => 439,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    2 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1767051,
      'music_title_url' => 'not-today~bts',
      'music_title' => 'Not Today',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539028243,
      'music_last_update_time' => 1487672557,
      'music_title_search' => 'not todai',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 99493,
      'music_track_id' => 0,
      'music_filename' => '1767051-54548536.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'All the underdogt in the world
A day may come when we lose
but it is not today
Today we fight!

No not today
eonjenga kkocceun jigessji
but no not today
geu ttaega oneureun aniji
No no not today
aj...',
      'music_length' => 290,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1782803,
      'music_title_url' => 'lonely~jonghyun-taeyeon',
      'music_title' => 'Lonely',
      'music_artist' => 'Jonghyun;Taeyeon',
      'music_artist_id' => '4252;1664',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538903038,
      'music_last_update_time' => 1494471027,
      'music_title_search' => 'loneli',
      'music_artist_search' => '; jonghiun; taeion;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6614,
      'music_track_id' => 0,
      'music_filename' => '1782803-c208de84.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Jonghyun] Mianhae nae tasiya gomawo deokbuniya
Tukhamyeon naebaetdeon ne geu malbeoreut
Neodo himdeun geol nan da aneunde
Ama neon naega babon jul ana bwa.

[Taeyeon] Uneun eolgullo na himdeulda h...',
      'music_length' => 247,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    4 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1845906,
      'music_title_url' => 'mic-drop-steve-aoki-remix~bts',
      'music_title' => 'MIC Drop (Steve Aoki Remix)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539028504,
      'music_last_update_time' => 1511750556,
      'music_title_search' => 'mic drop; xteve aoki remix',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 95826,
      'music_track_id' => 0,
      'music_filename' => '1845906-f97e5df6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Yeah nuga nae sujeo deoreopdae
I don\'t care maikeu jabeum
Geumsujeo yeoreot pae
Beoreokhae jal mot igeun geosdeul
Seutekki yeoreo gae
Geodeuphaeseo ssibeojulge seutaui jeonyeoge
World Business haek...',
      'music_length' => 274,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1774538,
      'music_title_url' => 'cover-up~taeyeon',
      'music_title' => 'Cover Up',
      'music_artist' => 'Taeyeon',
      'music_artist_id' => '1664',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538858596,
      'music_last_update_time' => 1490056826,
      'music_title_search' => 'cover up',
      'music_artist_search' => '; taeion;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7812,
      'music_track_id' => 0,
      'music_filename' => '1774538-ae10a1ae.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Oneuldo byeolcheoreom ne maeumeul ttara
Tto neoye gyeoteul maemdolji
Stop nan eojireowo seonmyeonghan ne mameul
Ijen algo shipeojyeo

Bamhaneuredo georiedo
Jeonbu neoye moseubi gadeukhan geol
Jom d...',
      'music_length' => 206,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1813275,
      'music_title_url' => 'holiday~girls-generation',
      'music_title' => 'Holiday',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538661069,
      'music_last_update_time' => 1501903099,
      'music_title_search' => 'holidai',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11674,
      'music_track_id' => 0,
      'music_filename' => '1813275-e4f7c230.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ho-Ho-Holiday Ho-Ho-Holiday
Ho-Ho-Holiday Ho-Ho-Holiday
I\'m feeling good inareul gidaryeo wasseo cheoeum mannan
geu sungancheoreom dashi mannan neowa na
I\'m feeling cool ijeya wanbyeokaejeosseo
ni...',
      'music_length' => 203,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1757313,
      'music_title_url' => 'bing-bing-excuse-me-inkigayo-comeback-stage~aoa',
      'music_title' => 'Bing Bing; Excuse Me (Inkigayo Comeback Stage)',
      'music_artist' => 'AOA',
      'music_artist_id' => '4133',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538927147,
      'music_last_update_time' => 1483951384,
      'music_title_search' => 'bing bing; excuxe me; inkigaio comeback xtage',
      'music_artist_search' => '; aoa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1813,
      'music_track_id' => 0,
      'music_filename' => '1757313-0a022f70.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Bing Bing]

Hey I know what you want
Look look at me now AOA come on
Ol deut mal deut
Like a little boy mangseoriji ma
Gal deut mal deut
Meomchithage dwae geureon neol bomyeon
Jom soljikhaejyeo bw...',
      'music_length' => 432,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764378,
      'music_title_url' => 'my-first-and-last~nct-dream',
      'music_title' => 'My First And Last',
      'music_artist' => 'NCT Dream',
      'music_artist_id' => '15817',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538825640,
      'music_last_update_time' => 1486906763,
      'music_title_search' => 'mi firxt and laxt',
      'music_artist_search' => '; nct dream;',
      'music_album_search' => '',
      'music_composer' => 'August Rigo; Justin Davey; Ryan S.Jhun; Jeon Gan Di; Mark',
      'music_album' => '',
      'music_listen' => 6959,
      'music_track_id' => 0,
      'music_filename' => '1764378-ca07cfcd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Oh maybe maybe
Igeon sarangiljido molla
Imi nae nuneneun neoman boyeo nan
Ajik anil geora geopeul meogeodo
Oh naegedo on geot gata.

Chaege jeokhin geuljadeuri hyeonshiri dwae
Gaseumi got teojyeo b...',
      'music_length' => 206,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1767728,
      'music_title_url' => 'monster-lotto-6th-gaon-chart-music-awards-live~exo',
      'music_title' => 'Monster; Lotto (6th Gaon Chart Music Awards Live)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538453279,
      'music_last_update_time' => 1487855348,
      'music_title_search' => 'monxter; loto; 6th gaon chart muxic awardx live',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2966,
      'music_track_id' => 0,
      'music_filename' => '1767728-570668ca.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Monster]

She got me gone crazy
Wae simjangi ttwini.

Neon areumdawo naui goddess
Dathyeoissji Yeah yeah 
Dudeuril teni nal deuryeobonaellae? 
Gamchwojin seurireul julge.

Nundongjaui hogisime imi...',
      'music_length' => 375,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1792606,
      'music_title_url' => 'show-time-produce-101-season-2-live~its',
      'music_title' => 'Show Time (Produce 101 Season 2 Live)',
      'music_artist' => 'It\'s',
      'music_artist_id' => '18409',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538488488,
      'music_last_update_time' => 1496971555,
      'music_title_search' => 'thow time; produce 101 xeaxon 2 live',
      'music_artist_search' => '; it x;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9899,
      'music_track_id' => 0,
      'music_filename' => '1792606-844f859f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ja ije Show Time
Dagawa First Time
Neol wihae na Long Time
Junbihan Show Show Show Show
Perfect hwaksilhan Impact boyeojulge
Pyeongsaeng ijji moshal neomanui Show Time

Deudieo ol geosi wasseo
Cha...',
      'music_length' => 215,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    11 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1786457,
      'music_title_url' => 'new-face~psy',
      'music_title' => 'New Face',
      'music_artist' => 'PSY',
      'music_artist_id' => '2645',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538978914,
      'music_last_update_time' => 1494471342,
      'music_title_search' => 'new face',
      'music_artist_search' => '; pxi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 26028,
      'music_track_id' => 0,
      'music_filename' => '1786457-829de459.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Eodil chyeodaboneun geonyago
Soljikhi neo geurae neo saengpan
Cheoeum mannan neo
Wae neol chyeodaboneun geonyago
Gunggeumhaeseo seolleseo
Natseoleoseo
Uh dugeun dugeun dugeun woah.

Chimchakhage se...',
      'music_length' => 201,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1796894,
      'music_title_url' => 'monster-dream-concert-2017-live~exo',
      'music_title' => 'Monster (Dream Concert 2017 Live)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538719544,
      'music_last_update_time' => 1497667608,
      'music_title_search' => 'monxter; dream concert 2017 live',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Kenzie; Deepflow; LDN Noise; Rodnae &quot;Chikk&quot; Bell',
      'music_album' => '',
      'music_listen' => 685,
      'music_track_id' => 0,
      'music_filename' => '1796894-21853b70.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'She got me gone crazy
Wae simjangi ttwini.

Neon areumdawo naui goddess
Dathyeoissji Yeah yeah 
Dudeuril teni nal deuryeobonaellae? 
Gamchwojin seurireul julge.

Nundongjaui hogisime imi neon ppajy...',
      'music_length' => 250,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    13 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1798696,
      'music_title_url' => 'happy-performance-version~wjsn',
      'music_title' => 'Happy (Performance Version)',
      'music_artist' => 'WJSN',
      'music_artist_id' => '13519',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539014710,
      'music_last_update_time' => 1498187896,
      'music_title_search' => 'hapi; performance verxion',
      'music_artist_search' => '; wjxn;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 587,
      'music_track_id' => 0,
      'music_filename' => '1798696-55475b8e.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Yeah! Happy! Uh huh oh
Shilkeot bwa dalha eopseojyeodo 
Sanggwaneopsji nan
Gachi ga maeil derigo danyeo 
Jumeoni neoheo gatgo
Tto useumyeonseo meoriman sseudamsseudamhae 
Eugueugu eugueugu hing
Neu...',
      'music_length' => 184,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1818175,
      'music_title_url' => 'gashina~sunmi',
      'music_title' => 'Gashina',
      'music_artist' => 'Sunmi',
      'music_artist_id' => '4284',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538564468,
      'music_last_update_time' => 1531392060,
      'music_title_search' => 'gathina',
      'music_artist_search' => '; xunmi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 40394,
      'music_track_id' => 0,
      'music_filename' => '1818175-d1c42938.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Neoui ssaneulhaejin geu nunbichi
Nareul jugineun geoya 
Keojideon ni mamui bulssi
Jaeman nameun geoya wae
Sigani yagingabwa 
Eojjae galsurok na yakajana
Seulpeun apeumdo 
Hamkke mudyeojineun geoya...',
      'music_length' => 250,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827484,
      'music_title_url' => 'go-go-comeback-show-live~bts',
      'music_title' => 'Go Go (Comeback Show Live)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538926673,
      'music_last_update_time' => 1506048276,
      'music_title_search' => 'go go; comeback thow live',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => 'Pdogg; Hitman Bang; Supreme Boi',
      'music_album' => '',
      'music_listen' => 16027,
      'music_track_id' => 0,
      'music_filename' => '1827484-fd0eeeda.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Dollar dollar
Haruachime jeonbu tangjin
Dallyeo dallyeo naega beoreo naega sachi
Dallyeo dallyeo dallyeo dallyeo
Dallyeo dallyeo.

Nan wonhae cruisin\' on the bay
Wonhae cruisin\' like nemo
Doneun eo...',
      'music_length' => 243,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827481,
      'music_title_url' => 'mic-drop-comeback-show-live~bts',
      'music_title' => 'Mic Drop (Comeback Show Live)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538925931,
      'music_last_update_time' => 1506300682,
      'music_title_search' => 'mic drop; comeback thow live',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => 'Pdogg; Supreme Boi; Hitman Bang; J-Hope; Rap Monster',
      'music_album' => '',
      'music_listen' => 9346,
      'music_track_id' => 0,
      'music_filename' => '1827481-0ffee173.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Yeah nuga nae sujeo deoreopdae
I don\'t care maikeu jabeum
Geumsujeo yeoreot pae
Beoreokhae jal mot igeun geosdeul
Seutekki yeoreo gae
Geodeuphaeseo ssibeojulge seutaui jeonyeoge
World Business haek...',
      'music_length' => 241,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827677,
      'music_title_url' => 'last-night-story~iu',
      'music_title' => 'Last Night Story',
      'music_artist' => 'IU',
      'music_artist_id' => '2059',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538828493,
      'music_last_update_time' => 1506302621,
      'music_title_search' => 'laxt night xtori',
      'music_artist_search' => '; iu;',
      'music_album_search' => '',
      'music_composer' => 'Park Gunho, Lee Hojoon',
      'music_album' => '',
      'music_listen' => 933,
      'music_track_id' => 0,
      'music_filename' => '1827677-353abbc7.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Eojetbame nan nega miweojyeosseo
Eojetbame nan nega shireojyeosseo
Binggeulbinggeul doraganeun bulbiteureul barabomyeo
Na honja gaseum apasseo
Nae chingudeuri neoye soneul japgo chumchul ttaemada
G...',
      'music_length' => 252,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1830254,
      'music_title_url' => 'mic-drop-dna-music-bank-live~bts',
      'music_title' => 'Mic Drop; DNA (Music Bank Live)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538925854,
      'music_last_update_time' => 1506746075,
      'music_title_search' => 'mic drop; dna; muxic bank live',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2445,
      'music_track_id' => 0,
      'music_filename' => '1830254-cad06421.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Mic Drop]

Yeah nuga nae sujeo deoreopdae
I don\'t care maikeu jabeum
Geumsujeo yeoreot pae
Beoreokhae jal mot igeun geosdeul
Seutekki yeoreo gae
Geodeuphaeseo ssibeojulge seutaui jeonyeoge
World B...',
      'music_length' => 481,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1837145,
      'music_title_url' => 'dna-fire-open-concert-live~bts',
      'music_title' => 'DNA; Fire (Open Concert Live)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538926140,
      'music_last_update_time' => 1508982036,
      'music_title_search' => 'dna; fire; open concert live',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 999,
      'music_track_id' => 0,
      'music_filename' => '1837145-0527613b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[DNA]

Cheotnune neol araboge dwaesseo
Seorol bulleowassdeon geotcheoreom
Nae hyeolgwan sok DNAga malhaejwo
Naega chaja hemaedeon neoraneun geol.

Uri mannameun suhagui gongsik
Jonggyoui yulbeop uj...',
      'music_length' => 480,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1781680,
      'music_title_url' => 'palette~iu-g-dragon',
      'music_title' => 'Palette',
      'music_artist' => 'IU;G-Dragon',
      'music_artist_id' => '2059;1682',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538887209,
      'music_last_update_time' => 1492963444,
      'music_title_search' => 'palete',
      'music_artist_search' => '; iu; g dragon;',
      'music_album_search' => '',
      'music_composer' => 'IU',
      'music_album' => '',
      'music_listen' => 56005,
      'music_track_id' => 0,
      'music_filename' => '1781680-7a8b1874.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Isanghagedo yojeumen
Geunyang swiun ge joha
Hagin geuraedo yeojeonhi
Korin eumageun johdeora.

Hot pinkboda
Jinhan borasaegeul deo johahae
Tto mwodeora danchu issneun
Pajamat, lipstick
Jom jisgujeu...',
      'music_length' => 218,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/IU~Y3NuX2FydGlzdH4yMDU5.html">IU</a>, <a href="/ca-si/G-Dragon~Y3NuX2FydGlzdH4xNjgy.html">G-Dragon</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    21 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1848098,
      'music_title_url' => 'energetic-pick-me-2017-mama-in-hong-kong-live~wanna-one',
      'music_title' => 'Energetic; Pick Me (2017 MAMA In Hong Kong Live)',
      'music_artist' => 'Wanna One',
      'music_artist_id' => '13510',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538963228,
      'music_last_update_time' => 1512351001,
      'music_title_search' => 'energetic; pick me; 2017 mama in hong kong live',
      'music_artist_search' => '; wana 1;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1681,
      'music_track_id' => 0,
      'music_filename' => '1848098-51f4abb1.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Energetic]

Neowa naui ibsuri jeomjeom
Neukkyeojineun i sungan soge tteugeoun gonggi
Onmome jeonyuri wa
Ije neowa naega sseo naeril Story.

I don\'t know why
Nado moreuge
Deo ppajyeodeureoga
Sum ma...',
      'music_length' => 439,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Wanna-One~Y3NuX2FydGlzdH4xMzUxMA==.html">Wanna One</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    22 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1767051,
      'music_title_url' => 'not-today~bts',
      'music_title' => 'Not Today',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539028243,
      'music_last_update_time' => 1487672557,
      'music_title_search' => 'not todai',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 99493,
      'music_track_id' => 0,
      'music_filename' => '1767051-54548536.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'All the underdogt in the world
A day may come when we lose
but it is not today
Today we fight!

No not today
eonjenga kkocceun jigessji
but no not today
geu ttaega oneureun aniji
No no not today
aj...',
      'music_length' => 290,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/BTS~Y3NuX2FydGlzdH40NzQ4.html">BTS</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1782803,
      'music_title_url' => 'lonely~jonghyun-taeyeon',
      'music_title' => 'Lonely',
      'music_artist' => 'Jonghyun;Taeyeon',
      'music_artist_id' => '4252;1664',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538903038,
      'music_last_update_time' => 1494471027,
      'music_title_search' => 'loneli',
      'music_artist_search' => '; jonghiun; taeion;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 6614,
      'music_track_id' => 0,
      'music_filename' => '1782803-c208de84.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Jonghyun] Mianhae nae tasiya gomawo deokbuniya
Tukhamyeon naebaetdeon ne geu malbeoreut
Neodo himdeun geol nan da aneunde
Ama neon naega babon jul ana bwa.

[Taeyeon] Uneun eolgullo na himdeulda h...',
      'music_length' => 247,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Jonghyun~Y3NuX2FydGlzdH40MjUy.html">Jonghyun</a>, <a href="/ca-si/Taeyeon~Y3NuX2FydGlzdH4xNjY0.html">Taeyeon</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    24 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1845906,
      'music_title_url' => 'mic-drop-steve-aoki-remix~bts',
      'music_title' => 'MIC Drop (Steve Aoki Remix)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539028504,
      'music_last_update_time' => 1511750556,
      'music_title_search' => 'mic drop; xteve aoki remix',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 95826,
      'music_track_id' => 0,
      'music_filename' => '1845906-f97e5df6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Yeah nuga nae sujeo deoreopdae
I don\'t care maikeu jabeum
Geumsujeo yeoreot pae
Beoreokhae jal mot igeun geosdeul
Seutekki yeoreo gae
Geodeuphaeseo ssibeojulge seutaui jeonyeoge
World Business haek...',
      'music_length' => 274,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/BTS~Y3NuX2FydGlzdH40NzQ4.html">BTS</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1774538,
      'music_title_url' => 'cover-up~taeyeon',
      'music_title' => 'Cover Up',
      'music_artist' => 'Taeyeon',
      'music_artist_id' => '1664',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538858596,
      'music_last_update_time' => 1490056826,
      'music_title_search' => 'cover up',
      'music_artist_search' => '; taeion;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7812,
      'music_track_id' => 0,
      'music_filename' => '1774538-ae10a1ae.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Oneuldo byeolcheoreom ne maeumeul ttara
Tto neoye gyeoteul maemdolji
Stop nan eojireowo seonmyeonghan ne mameul
Ijen algo shipeojyeo

Bamhaneuredo georiedo
Jeonbu neoye moseubi gadeukhan geol
Jom d...',
      'music_length' => 206,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Taeyeon~Y3NuX2FydGlzdH4xNjY0.html">Taeyeon</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1813275,
      'music_title_url' => 'holiday~girls-generation',
      'music_title' => 'Holiday',
      'music_artist' => 'Girls\' Generation',
      'music_artist_id' => '922',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538661069,
      'music_last_update_time' => 1501903099,
      'music_title_search' => 'holidai',
      'music_artist_search' => '; drlx generation;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11674,
      'music_track_id' => 0,
      'music_filename' => '1813275-e4f7c230.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ho-Ho-Holiday Ho-Ho-Holiday
Ho-Ho-Holiday Ho-Ho-Holiday
I\'m feeling good inareul gidaryeo wasseo cheoeum mannan
geu sungancheoreom dashi mannan neowa na
I\'m feeling cool ijeya wanbyeokaejeosseo
ni...',
      'music_length' => 203,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Girls-Generation~Y3NuX2FydGlzdH45MjI=.html">Girls\' Generation</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1757313,
      'music_title_url' => 'bing-bing-excuse-me-inkigayo-comeback-stage~aoa',
      'music_title' => 'Bing Bing; Excuse Me (Inkigayo Comeback Stage)',
      'music_artist' => 'AOA',
      'music_artist_id' => '4133',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538927147,
      'music_last_update_time' => 1483951384,
      'music_title_search' => 'bing bing; excuxe me; inkigaio comeback xtage',
      'music_artist_search' => '; aoa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1813,
      'music_track_id' => 0,
      'music_filename' => '1757313-0a022f70.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Bing Bing]

Hey I know what you want
Look look at me now AOA come on
Ol deut mal deut
Like a little boy mangseoriji ma
Gal deut mal deut
Meomchithage dwae geureon neol bomyeon
Jom soljikhaejyeo bw...',
      'music_length' => 432,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/AOA~Y3NuX2FydGlzdH40MTMz.html">AOA</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764378,
      'music_title_url' => 'my-first-and-last~nct-dream',
      'music_title' => 'My First And Last',
      'music_artist' => 'NCT Dream',
      'music_artist_id' => '15817',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538825640,
      'music_last_update_time' => 1486906763,
      'music_title_search' => 'mi firxt and laxt',
      'music_artist_search' => '; nct dream;',
      'music_album_search' => '',
      'music_composer' => 'August Rigo; Justin Davey; Ryan S.Jhun; Jeon Gan Di; Mark',
      'music_album' => '',
      'music_listen' => 6959,
      'music_track_id' => 0,
      'music_filename' => '1764378-ca07cfcd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Oh maybe maybe
Igeon sarangiljido molla
Imi nae nuneneun neoman boyeo nan
Ajik anil geora geopeul meogeodo
Oh naegedo on geot gata.

Chaege jeokhin geuljadeuri hyeonshiri dwae
Gaseumi got teojyeo b...',
      'music_length' => 206,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/NCT-Dream~Y3NuX2FydGlzdH4xNTgxNw==.html">NCT Dream</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1767728,
      'music_title_url' => 'monster-lotto-6th-gaon-chart-music-awards-live~exo',
      'music_title' => 'Monster; Lotto (6th Gaon Chart Music Awards Live)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538453279,
      'music_last_update_time' => 1487855348,
      'music_title_search' => 'monxter; loto; 6th gaon chart muxic awardx live',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2966,
      'music_track_id' => 0,
      'music_filename' => '1767728-570668ca.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Monster]

She got me gone crazy
Wae simjangi ttwini.

Neon areumdawo naui goddess
Dathyeoissji Yeah yeah 
Dudeuril teni nal deuryeobonaellae? 
Gamchwojin seurireul julge.

Nundongjaui hogisime imi...',
      'music_length' => 375,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1792606,
      'music_title_url' => 'show-time-produce-101-season-2-live~its',
      'music_title' => 'Show Time (Produce 101 Season 2 Live)',
      'music_artist' => 'It\'s',
      'music_artist_id' => '18409',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538488488,
      'music_last_update_time' => 1496971555,
      'music_title_search' => 'thow time; produce 101 xeaxon 2 live',
      'music_artist_search' => '; it x;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 9899,
      'music_track_id' => 0,
      'music_filename' => '1792606-844f859f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ja ije Show Time
Dagawa First Time
Neol wihae na Long Time
Junbihan Show Show Show Show
Perfect hwaksilhan Impact boyeojulge
Pyeongsaeng ijji moshal neomanui Show Time

Deudieo ol geosi wasseo
Cha...',
      'music_length' => 215,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Its~Y3NuX2FydGlzdH4xODQwOQ==.html">It\'s</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    31 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1786457,
      'music_title_url' => 'new-face~psy',
      'music_title' => 'New Face',
      'music_artist' => 'PSY',
      'music_artist_id' => '2645',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538978914,
      'music_last_update_time' => 1494471342,
      'music_title_search' => 'new face',
      'music_artist_search' => '; pxi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 26028,
      'music_track_id' => 0,
      'music_filename' => '1786457-829de459.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Eodil chyeodaboneun geonyago
Soljikhi neo geurae neo saengpan
Cheoeum mannan neo
Wae neol chyeodaboneun geonyago
Gunggeumhaeseo seolleseo
Natseoleoseo
Uh dugeun dugeun dugeun woah.

Chimchakhage se...',
      'music_length' => 201,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/PSY~Y3NuX2FydGlzdH4yNjQ1.html">PSY</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1796894,
      'music_title_url' => 'monster-dream-concert-2017-live~exo',
      'music_title' => 'Monster (Dream Concert 2017 Live)',
      'music_artist' => 'EXO',
      'music_artist_id' => '2572',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538719544,
      'music_last_update_time' => 1497667608,
      'music_title_search' => 'monxter; dream concert 2017 live',
      'music_artist_search' => '; exo;',
      'music_album_search' => '',
      'music_composer' => 'Kenzie; Deepflow; LDN Noise; Rodnae &quot;Chikk&quot; Bell',
      'music_album' => '',
      'music_listen' => 685,
      'music_track_id' => 0,
      'music_filename' => '1796894-21853b70.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'She got me gone crazy
Wae simjangi ttwini.

Neon areumdawo naui goddess
Dathyeoissji Yeah yeah 
Dudeuril teni nal deuryeobonaellae? 
Gamchwojin seurireul julge.

Nundongjaui hogisime imi neon ppajy...',
      'music_length' => 250,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/EXO~Y3NuX2FydGlzdH4yNTcy.html">EXO</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    33 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1798696,
      'music_title_url' => 'happy-performance-version~wjsn',
      'music_title' => 'Happy (Performance Version)',
      'music_artist' => 'WJSN',
      'music_artist_id' => '13519',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539014710,
      'music_last_update_time' => 1498187896,
      'music_title_search' => 'hapi; performance verxion',
      'music_artist_search' => '; wjxn;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 587,
      'music_track_id' => 0,
      'music_filename' => '1798696-55475b8e.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Yeah! Happy! Uh huh oh
Shilkeot bwa dalha eopseojyeodo 
Sanggwaneopsji nan
Gachi ga maeil derigo danyeo 
Jumeoni neoheo gatgo
Tto useumyeonseo meoriman sseudamsseudamhae 
Eugueugu eugueugu hing
Neu...',
      'music_length' => 184,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/WJSN~Y3NuX2FydGlzdH4xMzUxOQ==.html">WJSN</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1818175,
      'music_title_url' => 'gashina~sunmi',
      'music_title' => 'Gashina',
      'music_artist' => 'Sunmi',
      'music_artist_id' => '4284',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538564468,
      'music_last_update_time' => 1531392060,
      'music_title_search' => 'gathina',
      'music_artist_search' => '; xunmi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 40394,
      'music_track_id' => 0,
      'music_filename' => '1818175-d1c42938.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Neoui ssaneulhaejin geu nunbichi
Nareul jugineun geoya 
Keojideon ni mamui bulssi
Jaeman nameun geoya wae
Sigani yagingabwa 
Eojjae galsurok na yakajana
Seulpeun apeumdo 
Hamkke mudyeojineun geoya...',
      'music_length' => 250,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Sunmi~Y3NuX2FydGlzdH40Mjg0.html">Sunmi</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827484,
      'music_title_url' => 'go-go-comeback-show-live~bts',
      'music_title' => 'Go Go (Comeback Show Live)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538926673,
      'music_last_update_time' => 1506048276,
      'music_title_search' => 'go go; comeback thow live',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => 'Pdogg; Hitman Bang; Supreme Boi',
      'music_album' => '',
      'music_listen' => 16027,
      'music_track_id' => 0,
      'music_filename' => '1827484-fd0eeeda.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Dollar dollar
Haruachime jeonbu tangjin
Dallyeo dallyeo naega beoreo naega sachi
Dallyeo dallyeo dallyeo dallyeo
Dallyeo dallyeo.

Nan wonhae cruisin\' on the bay
Wonhae cruisin\' like nemo
Doneun eo...',
      'music_length' => 243,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/BTS~Y3NuX2FydGlzdH40NzQ4.html">BTS</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827481,
      'music_title_url' => 'mic-drop-comeback-show-live~bts',
      'music_title' => 'Mic Drop (Comeback Show Live)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538925931,
      'music_last_update_time' => 1506300682,
      'music_title_search' => 'mic drop; comeback thow live',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => 'Pdogg; Supreme Boi; Hitman Bang; J-Hope; Rap Monster',
      'music_album' => '',
      'music_listen' => 9346,
      'music_track_id' => 0,
      'music_filename' => '1827481-0ffee173.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'Yeah nuga nae sujeo deoreopdae
I don\'t care maikeu jabeum
Geumsujeo yeoreot pae
Beoreokhae jal mot igeun geosdeul
Seutekki yeoreo gae
Geodeuphaeseo ssibeojulge seutaui jeonyeoge
World Business haek...',
      'music_length' => 241,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/BTS~Y3NuX2FydGlzdH40NzQ4.html">BTS</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827677,
      'music_title_url' => 'last-night-story~iu',
      'music_title' => 'Last Night Story',
      'music_artist' => 'IU',
      'music_artist_id' => '2059',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538828493,
      'music_last_update_time' => 1506302621,
      'music_title_search' => 'laxt night xtori',
      'music_artist_search' => '; iu;',
      'music_album_search' => '',
      'music_composer' => 'Park Gunho, Lee Hojoon',
      'music_album' => '',
      'music_listen' => 933,
      'music_track_id' => 0,
      'music_filename' => '1827677-353abbc7.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Eojetbame nan nega miweojyeosseo
Eojetbame nan nega shireojyeosseo
Binggeulbinggeul doraganeun bulbiteureul barabomyeo
Na honja gaseum apasseo
Nae chingudeuri neoye soneul japgo chumchul ttaemada
G...',
      'music_length' => 252,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/IU~Y3NuX2FydGlzdH4yMDU5.html">IU</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1830254,
      'music_title_url' => 'mic-drop-dna-music-bank-live~bts',
      'music_title' => 'Mic Drop; DNA (Music Bank Live)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538925854,
      'music_last_update_time' => 1506746075,
      'music_title_search' => 'mic drop; dna; muxic bank live',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2445,
      'music_track_id' => 0,
      'music_filename' => '1830254-cad06421.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[Mic Drop]

Yeah nuga nae sujeo deoreopdae
I don\'t care maikeu jabeum
Geumsujeo yeoreot pae
Beoreokhae jal mot igeun geosdeul
Seutekki yeoreo gae
Geodeuphaeseo ssibeojulge seutaui jeonyeoge
World B...',
      'music_length' => 481,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/BTS~Y3NuX2FydGlzdH40NzQ4.html">BTS</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1837145,
      'music_title_url' => 'dna-fire-open-concert-live~bts',
      'music_title' => 'DNA; Fire (Open Concert Live)',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538926140,
      'music_last_update_time' => 1508982036,
      'music_title_search' => 'dna; fire; open concert live',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 999,
      'music_track_id' => 0,
      'music_filename' => '1837145-0527613b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '[DNA]

Cheotnune neol araboge dwaesseo
Seorol bulleowassdeon geotcheoreom
Nae hyeolgwan sok DNAga malhaejwo
Naega chaja hemaedeon neoraneun geol.

Uri mannameun suhagui gongsik
Jonggyoui yulbeop uj...',
      'music_length' => 480,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/BTS~Y3NuX2FydGlzdH40NzQ4.html">BTS</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
  ),
  5 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827002,
      'music_title_url' => 'as-if-its-your-last-boombayah-kr-ver-m-on-live-blackpink-premium-debut~blackpink',
      'music_title' => 'AS IF IT\'S YOUR LAST + BOOMBAYAH -KR Ver.- (M-ON! LIVE BLACKPINK PREMIUM DEBUT SHOWCASE 2017.07.20)',
      'music_artist' => 'BlackPink',
      'music_artist_id' => '14673',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538898482,
      'music_last_update_time' => 1516098136,
      'music_title_search' => 'ax if it x iour laxt bombaiah kr ver ; m on live blackpink premium debut thowcaxe 2017 07 20',
      'music_artist_search' => '; blackpink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12787,
      'music_track_id' => 0,
      'music_filename' => '1827002-5c8327cf.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_length' => 490,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1781978,
      'music_title_url' => 'mazariau-mono-nogizaka-akb-kojimatsuri-kojima-haruna-kanshasa-day-1-201702~akb48',
      'music_title' => 'Mazariau Mono (混ざり合うもの) / Nogizaka AKB (Kojimatsuri ～Kojima Haruna Kanshasa～ DAY 1 2017.02.21)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538986280,
      'music_last_update_time' => 1494338847,
      'music_title_search' => 'mazariau mono; 混ざり合うもの ; novaka akb; kojimatxuri ～kojima haruna kanthaxa～ dai 1 2017 02 21',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => 'Toyama Daisuke; Tanimura Yohei; Lời: Akimoto Yasushi',
      'music_album' => '',
      'music_listen' => 48688,
      'music_track_id' => 17,
      'music_filename' => '1781978-7dcdfd66.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'donna ni kirei na iro to iro mo
issho ni mazatte shimaeba kitanaku naru
kataku na ni boku wa se wo mukete
tomodachi wa iranai to BARIA wo hatte ita

hitoridatte ikite yukeru yo
tsuyoku naritainda t...',
      'music_length' => 520,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1810696,
      'music_title_url' => 'sparkle-your-name-music-video-edition~radwimps',
      'music_title' => 'Sparkle (スパークル) - Your name. Music Video edition -',
      'music_artist' => 'RADWIMPS',
      'music_artist_id' => '18652',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538745411,
      'music_last_update_time' => 1501208805,
      'music_title_search' => 'xparkle; スパークル ; iour name muxic video edition;',
      'music_artist_search' => '; radwimpx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1865,
      'music_track_id' => 0,
      'music_filename' => '1810696-5086d03c.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'mada kono sekai wa boku o kainarashitetai mitai da
nozomidoori darou? utsukushiku mogaku yo

tagai no sunadokei nagamenagara kisu o shiyou yo
&quot;sayonara&quot; kara ichiban tooi basho de machiaw...',
      'music_length' => 412,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1787261,
      'music_title_url' => 'seifuku-wo-kita-meitantei-dreaming-girl-akb48-show-ep151-20170513~ske48',
      'music_title' => 'Seifuku wo Kita Meitantei (制服を着た名探偵) / Dreaming Girl (AKB48 SHOW! ep151 2017.05.13)',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538942409,
      'music_last_update_time' => 1494721542,
      'music_title_search' => 'xeifuku wo kita meitantei; 制服を着た名探偵 ; dreaming drl; akb48 thow ep151 2017 05 13',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1281,
      'music_track_id' => 1,
      'music_filename' => '1787261-cbd2ef38.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 242,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1852453,
      'music_title_url' => 'a-whole-new-world-2017-fns-kayousai-day2-20171213~watanabe-mayu-inoue-yoshio',
      'music_title' => 'A Whole New World (ホール・ニュー・ワールド) (2017 FNS Kayousai DAY2 2017.12.13)',
      'music_artist' => 'Watanabe Mayu;Inoue Yoshio',
      'music_artist_id' => '42196;102649',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538574179,
      'music_last_update_time' => 1513234430,
      'music_title_search' => 'a whole new world; ホール・ニュー・ワールド ; 2017 fnx kaiouxai dai2 2017 12 13',
      'music_artist_search' => '; watanabe maiu; inoue iothio;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 455,
      'music_track_id' => 0,
      'music_filename' => '1852453-dc1bd02d.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 165,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764239,
      'music_title_url' => '365nichi-no-kamihikouki-365-piano-ver-yokoyama-yui-akb48-group-douji-kaisa~akb48',
      'music_title' => '365nichi no Kamihikouki (365日の紙飛行機) -Piano ver.- / Yokoyama Yui (AKB48 Group Douji Kaisai Concert in Yokohama 2016.09.15)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538663498,
      'music_last_update_time' => 1510988438,
      'music_title_search' => '365nichi no kamihikouki; 365日の紙飛行機 piano ver ; iokoiama iui; akb48 group douji kaixai concert in iokohama 2016 09 15',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1273,
      'music_track_id' => 19,
      'music_filename' => '1764239-69d1b938.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_length' => 245,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    6 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1780588,
      'music_title_url' => 'bokutachi-wa-tsukiatteiru-hiragana-keyakizaka46-akb48-show-ep148-ke~keyakizaka46',
      'music_title' => 'Bokutachi wa Tsukiatteiru (僕たちは付き合っている) / Hiragana Keyakizaka46 (AKB48 SHOW! ep148 (Keyakizaka46 SHOW!) 2017.04.15)',
      'music_artist' => 'Keyakizaka46',
      'music_artist_id' => '15964',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538946080,
      'music_last_update_time' => 1492391476,
      'music_title_search' => 'bokutachi wa txukiateiru; 僕たちは付き合っている ; hiragana keiakizaka46; akb48 thow ep148; keiakizaka46 thow 2017 04 15',
      'music_artist_search' => '; keiakizaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1585,
      'music_track_id' => 3,
      'music_filename' => '1780588-954ce10c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 278,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    7 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1767658,
      'music_title_url' => 'natsu-yo-isoge~ske48',
      'music_title' => 'Natsu yo, Isoge! (夏よ、急げ！)',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538986320,
      'music_last_update_time' => 1487835838,
      'music_title_search' => 'natxu io ixoge ; 夏よ、急げ！',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 54771,
      'music_track_id' => 1,
      'music_filename' => '1767658-d34dc118.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'mada nani mo nai
shiroi sunahama
nami ga shizuka ni
tsugi no kisetsu wo matsu you ni...
kimi to no kioku
massara na mama
atarashii sekai
ega kou to shiteru

honegumi no dekita umi no ie
kansei suru...',
      'music_length' => 245,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    8 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1776490,
      'music_title_url' => 'frontiers~the-rampage-from-exile-tribe',
      'music_title' => 'Frontiers',
      'music_artist' => 'THE RAMPAGE from EXILE TRIBE',
      'music_artist_id' => '14051',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539016715,
      'music_last_update_time' => 1530761797,
      'music_title_search' => 'frontirx',
      'music_artist_search' => '; the rampage from exile chibe;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10561,
      'music_track_id' => 1,
      'music_filename' => '1776490-fa6c9b25.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_length' => 297,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1785494,
      'music_title_url' => 'fuusen-wa-ikiteiru-under-members-akb48-show-ep150-nogizaka46-show-201~nogizaka46',
      'music_title' => 'Fuusen wa Ikiteiru (風船は生きている) / Under Members @ AKB48 SHOW! ep150 (Nogizaka46 SHOW!) (2017.05.06)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538566318,
      'music_last_update_time' => 1495070614,
      'music_title_search' => 'fuxen wa ikiteiru; 風船は生きている ; under memberx akb48 thow ep150; novaka46 thow ; 2017 05 06',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4489,
      'music_track_id' => 2,
      'music_filename' => '1785494-df1c6e5d.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 268,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1815324,
      'music_title_url' => 'playing-with-fire-japanese-ver~blackpink',
      'music_title' => 'PLAYING WITH FIRE -Japanese ver.-',
      'music_artist' => 'BlackPink',
      'music_artist_id' => '14673',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538917309,
      'music_last_update_time' => 1502416708,
      'music_title_search' => 'plaing with fire japanexe ver',
      'music_artist_search' => '; blackpink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1181,
      'music_track_id' => 0,
      'music_filename' => '1815324-c58e8049.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 208,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1852435,
      'music_title_url' => 'te-wo-tsunagu-riyuu-2017-fns-kayousai-day2-20171213~nishino-kana',
      'music_title' => 'Te wo Tsunagu Riyuu (手をつなぐ理由) (2017 FNS Kayousai DAY2 2017.12.13)',
      'music_artist' => 'Nishino Kana',
      'music_artist_id' => '13693',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538573230,
      'music_last_update_time' => 1513224409,
      'music_title_search' => 'te wo txunagu riu; 手をつなぐ理由 ; 2017 fnx kaiouxai dai2 2017 12 13',
      'music_artist_search' => '; nithino kana;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 223,
      'music_track_id' => 0,
      'music_filename' => '1852435-0f72a54b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 182,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1821781,
      'music_title_url' => 'mirai-no-kotae-3rd-gen-akb48-show-ep162-nogizaka46-show-20170902~nogizaka46',
      'music_title' => 'Mirai no Kotae (未来の答え) / 3rd Gen (AKB48 SHOW! Ep162 (Nogizaka46 SHOW!) 2017.09.02)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538945473,
      'music_last_update_time' => 1504402911,
      'music_title_search' => 'mirai no kotae; 未来の答え ; 3rd gen; akb48 thow ep162; novaka46 thow 2017 09 02',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1361,
      'music_track_id' => 0,
      'music_filename' => '1821781-d19df87b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 328,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1823615,
      'music_title_url' => 'itsuka-dekirukara-kyou-dekiru-music-station-20170908~nogizaka46',
      'music_title' => 'Itsuka Dekirukara Kyou Dekiru (いつかできるから今日できる) (MUSIC STATION 2017.09.08)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538493094,
      'music_last_update_time' => 1504875957,
      'music_title_search' => 'itxuka dekirukara kiou dekiru; いつかできるから今日できる ; muxic xtation 2017 09 08',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3578,
      'music_track_id' => 0,
      'music_filename' => '1823615-181a4216.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 206,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1852455,
      'music_title_url' => 'minshu-no-uta-les-miserables-2017-fns-kayousai-da~chinen-rina-niizuma-seiko-ikut',
      'music_title' => 'Minshu no Uta (民衆の歌) -Les Misérables- (2017 FNS Kayousai DAY2 2017.12.13)',
      'music_artist' => 'Chinen Rina;Niizuma Seiko;Ikuta Erika;Kon Natsumi;Yamazaki Ikusaburo;Inoue Yoshio',
      'music_artist_id' => '102651;102652;17229;102650;17230;102649',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538575955,
      'music_last_update_time' => 1513234433,
      'music_title_search' => 'minthu no uta; 民衆の歌 lex mixerablex ; 2017 fnx kaiouxai dai2 2017 12 13',
      'music_artist_search' => '; chinen rina; nizuma xeiko; ikuta erika; kon natxumi; iamazaki ikuxaburo; inoue iothio;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 368,
      'music_track_id' => 0,
      'music_filename' => '1852455-cabb2529.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 142,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1828871,
      'music_title_url' => 'nigemizu-naitatte-iijanaika-zip-natsu-matsuri-2017-20170408~nogizaka46',
      'music_title' => 'Nigemizu (逃げ水) + Naitatte Iijanaika (泣いたっていいじゃないか) (ZIP! Natsu Matsuri 2017 2017.04.08)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538718495,
      'music_last_update_time' => 1506394284,
      'music_title_search' => 'nigemizu; 逃げ水 naitate ijanaika; 泣いたっていじゃないか ; zip natxu matxuri 2017 2017 04 08',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2046,
      'music_track_id' => 0,
      'music_filename' => '1828871-8ea02fee.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 539,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1833012,
      'music_title_url' => 'junjo-yoroshiku-dance-senbatsu-akb48-show-ep164-20171007~ngt48',
      'music_title' => 'Junjo Yoroshiku (純情よろしく) / Dance Senbatsu (AKB48 SHOW! ep164 2017.10.07)',
      'music_artist' => 'NGT48',
      'music_artist_id' => '13635',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538782272,
      'music_last_update_time' => 1507432369,
      'music_title_search' => 'junjo iorothiku; 純情よろしく ; dance xenbatxu; akb48 thow ep164 2017 10 07',
      'music_artist_search' => '; ngt48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1626,
      'music_track_id' => 0,
      'music_filename' => '1833012-0a2eca63.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 291,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    17 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1836406,
      'music_title_url' => 'anogoro-no-gohyaku-yen-dama~akb48',
      'music_title' => 'Anogoro no Gohyaku Yen Dama (あの頃の五百円玉)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539016689,
      'music_last_update_time' => 1508559833,
      'music_title_search' => 'anogoro no gohiaku in dama; あの頃の五百円玉',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 574,
      'music_track_id' => 0,
      'music_filename' => '1836406-7a396771.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 308,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1837818,
      'music_title_url' => 'itsuka-dekirukara-kyou-dekiru-cdtv-special-halloween-music-festival-2~nogizaka46',
      'music_title' => 'Itsuka Dekirukara Kyou Dekiru (いつかできるから今日できる) (CDTV Special! Halloween Music Festival 2017)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538493469,
      'music_last_update_time' => 1508984856,
      'music_title_search' => 'itxuka dekirukara kiou dekiru; いつかできるから今日できる ; cdtv xpecial halowen muxic fextival 2017',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 531,
      'music_track_id' => 0,
      'music_filename' => '1837818-255159eb.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 146,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1846816,
      'music_title_url' => 'itsuka-dekirukara-kyou-dekiru-ntv-best-artist-2017-20171128~nogizaka46',
      'music_title' => 'Itsuka Dekirukara Kyou Dekiru (いつかできるから今日できる) (NTV Best Artist 2017 2017.11.28)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538493532,
      'music_last_update_time' => 1511880997,
      'music_title_search' => 'itxuka dekirukara kiou dekiru; いつかできるから今日できる ; ntv bext artixt 2017 2017 1 28',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 539,
      'music_track_id' => 0,
      'music_filename' => '1846816-ac37adb0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 154,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827002,
      'music_title_url' => 'as-if-its-your-last-boombayah-kr-ver-m-on-live-blackpink-premium-debut~blackpink',
      'music_title' => 'AS IF IT\'S YOUR LAST + BOOMBAYAH -KR Ver.- (M-ON! LIVE BLACKPINK PREMIUM DEBUT SHOWCASE 2017.07.20)',
      'music_artist' => 'BlackPink',
      'music_artist_id' => '14673',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538898482,
      'music_last_update_time' => 1516098136,
      'music_title_search' => 'ax if it x iour laxt bombaiah kr ver ; m on live blackpink premium debut thowcaxe 2017 07 20',
      'music_artist_search' => '; blackpink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 12787,
      'music_track_id' => 0,
      'music_filename' => '1827002-5c8327cf.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_length' => 490,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/BlackPink~Y3NuX2FydGlzdH4xNDY3Mw==.html">BlackPink</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1781978,
      'music_title_url' => 'mazariau-mono-nogizaka-akb-kojimatsuri-kojima-haruna-kanshasa-day-1-201702~akb48',
      'music_title' => 'Mazariau Mono (混ざり合うもの) / Nogizaka AKB (Kojimatsuri ～Kojima Haruna Kanshasa～ DAY 1 2017.02.21)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538986280,
      'music_last_update_time' => 1494338847,
      'music_title_search' => 'mazariau mono; 混ざり合うもの ; novaka akb; kojimatxuri ～kojima haruna kanthaxa～ dai 1 2017 02 21',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => 'Toyama Daisuke; Tanimura Yohei; Lời: Akimoto Yasushi',
      'music_album' => '',
      'music_listen' => 48688,
      'music_track_id' => 17,
      'music_filename' => '1781978-7dcdfd66.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'donna ni kirei na iro to iro mo
issho ni mazatte shimaeba kitanaku naru
kataku na ni boku wa se wo mukete
tomodachi wa iranai to BARIA wo hatte ita

hitoridatte ikite yukeru yo
tsuyoku naritainda t...',
      'music_length' => 520,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1810696,
      'music_title_url' => 'sparkle-your-name-music-video-edition~radwimps',
      'music_title' => 'Sparkle (スパークル) - Your name. Music Video edition -',
      'music_artist' => 'RADWIMPS',
      'music_artist_id' => '18652',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538745411,
      'music_last_update_time' => 1501208805,
      'music_title_search' => 'xparkle; スパークル ; iour name muxic video edition;',
      'music_artist_search' => '; radwimpx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1865,
      'music_track_id' => 0,
      'music_filename' => '1810696-5086d03c.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => 'mada kono sekai wa boku o kainarashitetai mitai da
nozomidoori darou? utsukushiku mogaku yo

tagai no sunadokei nagamenagara kisu o shiyou yo
&quot;sayonara&quot; kara ichiban tooi basho de machiaw...',
      'music_length' => 412,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/RADWIMPS~Y3NuX2FydGlzdH4xODY1Mg==.html">RADWIMPS</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1787261,
      'music_title_url' => 'seifuku-wo-kita-meitantei-dreaming-girl-akb48-show-ep151-20170513~ske48',
      'music_title' => 'Seifuku wo Kita Meitantei (制服を着た名探偵) / Dreaming Girl (AKB48 SHOW! ep151 2017.05.13)',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538942409,
      'music_last_update_time' => 1494721542,
      'music_title_search' => 'xeifuku wo kita meitantei; 制服を着た名探偵 ; dreaming drl; akb48 thow ep151 2017 05 13',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1281,
      'music_track_id' => 1,
      'music_filename' => '1787261-cbd2ef38.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 242,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/SKE48~Y3NuX2FydGlzdH4xMzY5NQ==.html">SKE48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1852453,
      'music_title_url' => 'a-whole-new-world-2017-fns-kayousai-day2-20171213~watanabe-mayu-inoue-yoshio',
      'music_title' => 'A Whole New World (ホール・ニュー・ワールド) (2017 FNS Kayousai DAY2 2017.12.13)',
      'music_artist' => 'Watanabe Mayu;Inoue Yoshio',
      'music_artist_id' => '42196;102649',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538574179,
      'music_last_update_time' => 1513234430,
      'music_title_search' => 'a whole new world; ホール・ニュー・ワールド ; 2017 fnx kaiouxai dai2 2017 12 13',
      'music_artist_search' => '; watanabe maiu; inoue iothio;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 455,
      'music_track_id' => 0,
      'music_filename' => '1852453-dc1bd02d.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 165,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Watanabe-Mayu~Y3NuX2FydGlzdH40MjE5Ng==.html">Watanabe Mayu</a>, <a href="/ca-si/Inoue-Yoshio~Y3NuX2FydGlzdH4xMDI2NDk=.html">Inoue Yoshio</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1764239,
      'music_title_url' => '365nichi-no-kamihikouki-365-piano-ver-yokoyama-yui-akb48-group-douji-kaisa~akb48',
      'music_title' => '365nichi no Kamihikouki (365日の紙飛行機) -Piano ver.- / Yokoyama Yui (AKB48 Group Douji Kaisai Concert in Yokohama 2016.09.15)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538663498,
      'music_last_update_time' => 1510988438,
      'music_title_search' => '365nichi no kamihikouki; 365日の紙飛行機 piano ver ; iokoiama iui; akb48 group douji kaixai concert in iokohama 2016 09 15',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1273,
      'music_track_id' => 19,
      'music_filename' => '1764239-69d1b938.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_length' => 245,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    26 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1780588,
      'music_title_url' => 'bokutachi-wa-tsukiatteiru-hiragana-keyakizaka46-akb48-show-ep148-ke~keyakizaka46',
      'music_title' => 'Bokutachi wa Tsukiatteiru (僕たちは付き合っている) / Hiragana Keyakizaka46 (AKB48 SHOW! ep148 (Keyakizaka46 SHOW!) 2017.04.15)',
      'music_artist' => 'Keyakizaka46',
      'music_artist_id' => '15964',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538946080,
      'music_last_update_time' => 1492391476,
      'music_title_search' => 'bokutachi wa txukiateiru; 僕たちは付き合っている ; hiragana keiakizaka46; akb48 thow ep148; keiakizaka46 thow 2017 04 15',
      'music_artist_search' => '; keiakizaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1585,
      'music_track_id' => 3,
      'music_filename' => '1780588-954ce10c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 278,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Keyakizaka46~Y3NuX2FydGlzdH4xNTk2NA==.html">Keyakizaka46</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    27 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1767658,
      'music_title_url' => 'natsu-yo-isoge~ske48',
      'music_title' => 'Natsu yo, Isoge! (夏よ、急げ！)',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538986320,
      'music_last_update_time' => 1487835838,
      'music_title_search' => 'natxu io ixoge ; 夏よ、急げ！',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 54771,
      'music_track_id' => 1,
      'music_filename' => '1767658-d34dc118.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'mada nani mo nai
shiroi sunahama
nami ga shizuka ni
tsugi no kisetsu wo matsu you ni...
kimi to no kioku
massara na mama
atarashii sekai
ega kou to shiteru

honegumi no dekita umi no ie
kansei suru...',
      'music_length' => 245,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/SKE48~Y3NuX2FydGlzdH4xMzY5NQ==.html">SKE48</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    28 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1776490,
      'music_title_url' => 'frontiers~the-rampage-from-exile-tribe',
      'music_title' => 'Frontiers',
      'music_artist' => 'THE RAMPAGE from EXILE TRIBE',
      'music_artist_id' => '14051',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539016715,
      'music_last_update_time' => 1530761797,
      'music_title_search' => 'frontirx',
      'music_artist_search' => '; the rampage from exile chibe;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10561,
      'music_track_id' => 1,
      'music_filename' => '1776490-fa6c9b25.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_length' => 297,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/THE-RAMPAGE-from-EXILE-TRIBE~Y3NuX2FydGlzdH4xNDA1MQ==.html">THE RAMPAGE from EXILE TRIBE</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1785494,
      'music_title_url' => 'fuusen-wa-ikiteiru-under-members-akb48-show-ep150-nogizaka46-show-201~nogizaka46',
      'music_title' => 'Fuusen wa Ikiteiru (風船は生きている) / Under Members @ AKB48 SHOW! ep150 (Nogizaka46 SHOW!) (2017.05.06)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538566318,
      'music_last_update_time' => 1495070614,
      'music_title_search' => 'fuxen wa ikiteiru; 風船は生きている ; under memberx akb48 thow ep150; novaka46 thow ; 2017 05 06',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4489,
      'music_track_id' => 2,
      'music_filename' => '1785494-df1c6e5d.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 268,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Nogizaka46~Y3NuX2FydGlzdH4xMzU1Nw==.html">Nogizaka46</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1815324,
      'music_title_url' => 'playing-with-fire-japanese-ver~blackpink',
      'music_title' => 'PLAYING WITH FIRE -Japanese ver.-',
      'music_artist' => 'BlackPink',
      'music_artist_id' => '14673',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538917309,
      'music_last_update_time' => 1502416708,
      'music_title_search' => 'plaing with fire japanexe ver',
      'music_artist_search' => '; blackpink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1181,
      'music_track_id' => 0,
      'music_filename' => '1815324-c58e8049.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 208,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/BlackPink~Y3NuX2FydGlzdH4xNDY3Mw==.html">BlackPink</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1852435,
      'music_title_url' => 'te-wo-tsunagu-riyuu-2017-fns-kayousai-day2-20171213~nishino-kana',
      'music_title' => 'Te wo Tsunagu Riyuu (手をつなぐ理由) (2017 FNS Kayousai DAY2 2017.12.13)',
      'music_artist' => 'Nishino Kana',
      'music_artist_id' => '13693',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538573230,
      'music_last_update_time' => 1513224409,
      'music_title_search' => 'te wo txunagu riu; 手をつなぐ理由 ; 2017 fnx kaiouxai dai2 2017 12 13',
      'music_artist_search' => '; nithino kana;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 223,
      'music_track_id' => 0,
      'music_filename' => '1852435-0f72a54b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 182,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Nishino-Kana~Y3NuX2FydGlzdH4xMzY5Mw==.html">Nishino Kana</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1821781,
      'music_title_url' => 'mirai-no-kotae-3rd-gen-akb48-show-ep162-nogizaka46-show-20170902~nogizaka46',
      'music_title' => 'Mirai no Kotae (未来の答え) / 3rd Gen (AKB48 SHOW! Ep162 (Nogizaka46 SHOW!) 2017.09.02)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538945473,
      'music_last_update_time' => 1504402911,
      'music_title_search' => 'mirai no kotae; 未来の答え ; 3rd gen; akb48 thow ep162; novaka46 thow 2017 09 02',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1361,
      'music_track_id' => 0,
      'music_filename' => '1821781-d19df87b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 328,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Nogizaka46~Y3NuX2FydGlzdH4xMzU1Nw==.html">Nogizaka46</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1823615,
      'music_title_url' => 'itsuka-dekirukara-kyou-dekiru-music-station-20170908~nogizaka46',
      'music_title' => 'Itsuka Dekirukara Kyou Dekiru (いつかできるから今日できる) (MUSIC STATION 2017.09.08)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538493094,
      'music_last_update_time' => 1504875957,
      'music_title_search' => 'itxuka dekirukara kiou dekiru; いつかできるから今日できる ; muxic xtation 2017 09 08',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3578,
      'music_track_id' => 0,
      'music_filename' => '1823615-181a4216.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 206,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Nogizaka46~Y3NuX2FydGlzdH4xMzU1Nw==.html">Nogizaka46</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1852455,
      'music_title_url' => 'minshu-no-uta-les-miserables-2017-fns-kayousai-da~chinen-rina-niizuma-seiko-ikut',
      'music_title' => 'Minshu no Uta (民衆の歌) -Les Misérables- (2017 FNS Kayousai DAY2 2017.12.13)',
      'music_artist' => 'Chinen Rina;Niizuma Seiko;Ikuta Erika;Kon Natsumi;Yamazaki Ikusaburo;Inoue Yoshio',
      'music_artist_id' => '102651;102652;17229;102650;17230;102649',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538575955,
      'music_last_update_time' => 1513234433,
      'music_title_search' => 'minthu no uta; 民衆の歌 lex mixerablex ; 2017 fnx kaiouxai dai2 2017 12 13',
      'music_artist_search' => '; chinen rina; nizuma xeiko; ikuta erika; kon natxumi; iamazaki ikuxaburo; inoue iothio;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 368,
      'music_track_id' => 0,
      'music_filename' => '1852455-cabb2529.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 142,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Chinen-Rina~Y3NuX2FydGlzdH4xMDI2NTE=.html">Chinen Rina</a>, <a href="/ca-si/Niizuma-Seiko~Y3NuX2FydGlzdH4xMDI2NTI=.html">Niizuma Seiko</a>, <a href="/ca-si/Ikuta-Erika~Y3NuX2FydGlzdH4xNzIyOQ==.html">Ikuta Erika</a>, <a href="/ca-si/Kon-Natsumi~Y3NuX2FydGlzdH4xMDI2NTA=.html">Kon Natsumi</a>, <a href="/ca-si/Yamazaki-Ikusaburo~Y3NuX2FydGlzdH4xNzIzMA==.html">Yamazaki Ikusaburo</a>, <a href="/ca-si/Inoue-Yoshio~Y3NuX2FydGlzdH4xMDI2NDk=.html">Inoue Yoshio</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1828871,
      'music_title_url' => 'nigemizu-naitatte-iijanaika-zip-natsu-matsuri-2017-20170408~nogizaka46',
      'music_title' => 'Nigemizu (逃げ水) + Naitatte Iijanaika (泣いたっていいじゃないか) (ZIP! Natsu Matsuri 2017 2017.04.08)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538718495,
      'music_last_update_time' => 1506394284,
      'music_title_search' => 'nigemizu; 逃げ水 naitate ijanaika; 泣いたっていじゃないか ; zip natxu matxuri 2017 2017 04 08',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2046,
      'music_track_id' => 0,
      'music_filename' => '1828871-8ea02fee.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 539,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Nogizaka46~Y3NuX2FydGlzdH4xMzU1Nw==.html">Nogizaka46</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1833012,
      'music_title_url' => 'junjo-yoroshiku-dance-senbatsu-akb48-show-ep164-20171007~ngt48',
      'music_title' => 'Junjo Yoroshiku (純情よろしく) / Dance Senbatsu (AKB48 SHOW! ep164 2017.10.07)',
      'music_artist' => 'NGT48',
      'music_artist_id' => '13635',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538782272,
      'music_last_update_time' => 1507432369,
      'music_title_search' => 'junjo iorothiku; 純情よろしく ; dance xenbatxu; akb48 thow ep164 2017 10 07',
      'music_artist_search' => '; ngt48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1626,
      'music_track_id' => 0,
      'music_filename' => '1833012-0a2eca63.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 291,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/NGT48~Y3NuX2FydGlzdH4xMzYzNQ==.html">NGT48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    37 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1836406,
      'music_title_url' => 'anogoro-no-gohyaku-yen-dama~akb48',
      'music_title' => 'Anogoro no Gohyaku Yen Dama (あの頃の五百円玉)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539016689,
      'music_last_update_time' => 1508559833,
      'music_title_search' => 'anogoro no gohiaku in dama; あの頃の五百円玉',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 574,
      'music_track_id' => 0,
      'music_filename' => '1836406-7a396771.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 308,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1837818,
      'music_title_url' => 'itsuka-dekirukara-kyou-dekiru-cdtv-special-halloween-music-festival-2~nogizaka46',
      'music_title' => 'Itsuka Dekirukara Kyou Dekiru (いつかできるから今日できる) (CDTV Special! Halloween Music Festival 2017)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538493469,
      'music_last_update_time' => 1508984856,
      'music_title_search' => 'itxuka dekirukara kiou dekiru; いつかできるから今日できる ; cdtv xpecial halowen muxic fextival 2017',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 531,
      'music_track_id' => 0,
      'music_filename' => '1837818-255159eb.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 146,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Nogizaka46~Y3NuX2FydGlzdH4xMzU1Nw==.html">Nogizaka46</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1846816,
      'music_title_url' => 'itsuka-dekirukara-kyou-dekiru-ntv-best-artist-2017-20171128~nogizaka46',
      'music_title' => 'Itsuka Dekirukara Kyou Dekiru (いつかできるから今日できる) (NTV Best Artist 2017 2017.11.28)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538493532,
      'music_last_update_time' => 1511880997,
      'music_title_search' => 'itxuka dekirukara kiou dekiru; いつかできるから今日できる ; ntv bext artixt 2017 2017 1 28',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 539,
      'music_track_id' => 0,
      'music_filename' => '1846816-ac37adb0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_length' => 154,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Nogizaka46~Y3NuX2FydGlzdH4xMzU1Nw==.html">Nogizaka46</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
  ),
  6 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1855673,
      'music_title_url' => 'downtown~anitta-j-balvin-lele-pons-juanpa-zurita',
      'music_title' => 'Downtown',
      'music_artist' => 'Anitta;J Balvin;Lele Pons;Juanpa Zurita',
      'music_artist_id' => '14238;13436;22051;102819',
      'cat_id' => 1,
      'cat_level' => 6,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538996531,
      'music_last_update_time' => 1514015706,
      'music_title_search' => 'downtown',
      'music_artist_search' => '; anita; j balvin; lele ponx; juanpa zurita;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3189,
      'music_track_id' => 0,
      'music_filename' => '1855673-08482b63.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 194,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1771706,
      'music_title_url' => 'hey-ma-spanish-version~pitbull-j-balvin-camila-cabello',
      'music_title' => 'Hey Ma (Spanish Version)',
      'music_artist' => 'Pitbull;J Balvin;Camila Cabello',
      'music_artist_id' => '1814;13436;13959',
      'cat_id' => 1,
      'cat_level' => 6,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538618931,
      'music_last_update_time' => 1489206335,
      'music_title_search' => 'hei ma; xpanith verxion',
      'music_artist_search' => '; pitbul; j balvin; camila cabelo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 16274,
      'music_track_id' => 0,
      'music_filename' => '1771706-33b3190c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: J Balvin]
Dale, sin miedo
Arriésgate y sígueme el juego
Sola, creo
Di a tus amigas hasta luego
No des explicaciones, solo vente
Que tu mente es malvada, eso yo lo sé
En tu mirada yo lo pu...',
      'music_length' => 223,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    2 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1855673,
      'music_title_url' => 'downtown~anitta-j-balvin-lele-pons-juanpa-zurita',
      'music_title' => 'Downtown',
      'music_artist' => 'Anitta;J Balvin;Lele Pons;Juanpa Zurita',
      'music_artist_id' => '14238;13436;22051;102819',
      'cat_id' => 1,
      'cat_level' => 6,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538996531,
      'music_last_update_time' => 1514015706,
      'music_title_search' => 'downtown',
      'music_artist_search' => '; anita; j balvin; lele ponx; juanpa zurita;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3189,
      'music_track_id' => 0,
      'music_filename' => '1855673-08482b63.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_length' => 194,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Anitta~Y3NuX2FydGlzdH4xNDIzOA==.html">Anitta</a>, <a href="/ca-si/J-Balvin~Y3NuX2FydGlzdH4xMzQzNg==.html">J Balvin</a>, <a href="/ca-si/Lele-Pons~Y3NuX2FydGlzdH4yMjA1MQ==.html">Lele Pons</a>, <a href="/ca-si/Juanpa-Zurita~Y3NuX2FydGlzdH4xMDI4MTk=.html">Juanpa Zurita</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1771706,
      'music_title_url' => 'hey-ma-spanish-version~pitbull-j-balvin-camila-cabello',
      'music_title' => 'Hey Ma (Spanish Version)',
      'music_artist' => 'Pitbull;J Balvin;Camila Cabello',
      'music_artist_id' => '1814;13436;13959',
      'cat_id' => 1,
      'cat_level' => 6,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538618931,
      'music_last_update_time' => 1489206335,
      'music_title_search' => 'hei ma; xpanith verxion',
      'music_artist_search' => '; pitbul; j balvin; camila cabelo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 16274,
      'music_track_id' => 0,
      'music_filename' => '1771706-33b3190c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: J Balvin]
Dale, sin miedo
Arriésgate y sígueme el juego
Sola, creo
Di a tus amigas hasta luego
No des explicaciones, solo vente
Que tu mente es malvada, eso yo lo sé
En tu mirada yo lo pu...',
      'music_length' => 223,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Pitbull~Y3NuX2FydGlzdH4xODE0.html">Pitbull</a>, <a href="/ca-si/J-Balvin~Y3NuX2FydGlzdH4xMzQzNg==.html">J Balvin</a>, <a href="/ca-si/Camila-Cabello~Y3NuX2FydGlzdH4xMzk1OQ==.html">Camila Cabello</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
  ),
  7 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1763377,
      'music_title_url' => 'chantaje-version-salsa~shakira-maluma',
      'music_title' => 'Chantaje (Version Salsa)',
      'music_artist' => 'Shakira;Maluma',
      'music_artist_id' => '112;13396',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538906936,
      'music_last_update_time' => 1501030048,
      'music_title_search' => 'chantaje; verxion xalxa',
      'music_artist_search' => '; thakira; maluma;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 14518,
      'music_track_id' => 0,
      'music_filename' => '1763377-5a6ab3b6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Maluma] 
Cuando estás bien te alejas de mí 
Te sientes sola y siempre estoy ahí 
Es una guerra de toma y dame 
Pues dame de eso que tiene\' ahí 

Oye baby no seas mala 
No me dejes con las ganas 
S...',
      'music_length' => 227,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1849710,
      'music_title_url' => 'chambea~bad-bunny',
      'music_title' => 'Chambea',
      'music_artist' => 'Bad Bunny',
      'music_artist_id' => '13509',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538944787,
      'music_last_update_time' => 1512695855,
      'music_title_search' => 'chambea',
      'music_artist_search' => '; bad buni;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 90305,
      'music_track_id' => 0,
      'music_filename' => '1849710-83651c45.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Coro]
Chambea, jala, cabrón ya no te quedan balas
Chambea, jala, cabrón ya no te quedan balas
Yo siempre picheo, enrolo otra vez
Yo siempre picheo, enrolo otra vez
Yo siempre picheo, enrolo otra v...',
      'music_length' => 235,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827654,
      'music_title_url' => 'pescaito~carlos-vives',
      'music_title' => 'Pescaíto',
      'music_artist' => 'Carlos Vives',
      'music_artist_id' => '14439',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538787997,
      'music_last_update_time' => 1506302501,
      'music_title_search' => 'pexcaito',
      'music_artist_search' => '; carlox vivex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2153,
      'music_track_id' => 0,
      'music_filename' => '1827654-2f7881e4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'No hay nada mas bacano
Que sentarme a tu lado
Y respirar el aire
Que respiras.

Tomarnos de la mano
Cruzar del monte al claro
Para llegar a una playa escondida.

Y agua
Metidos en el agua
Nadando e...',
      'music_length' => 203,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    3 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1856540,
      'music_title_url' => 'bonita-remix~j-balvin-jowell-randy-nicky-jam-wisin-yandel-ozuna',
      'music_title' => 'Bonita (Remix)',
      'music_artist' => 'J Balvin;Jowell;Randy;Nicky Jam;Wisin;Yandel;Ozuna',
      'music_artist_id' => '13436;18556;3735;16017;959;960;14556',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538947567,
      'music_last_update_time' => 1514014787,
      'music_title_search' => 'bonita',
      'music_artist_search' => '; j balvin; jowel; randi; nicki jam; wixin; iandel; ozuna;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 111827,
      'music_track_id' => 0,
      'music_filename' => '1856540-1076d85c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: J Balvin, Wisin, Nicky Jam]
(Dayme &amp; El High)
This is the remix
Ella se tarda arreglándose un par de horas
Llama a su amiga, no le gusta salir sola
Y de la noche, dejarse llevar, oh
N.I...',
      'music_length' => 322,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1788086,
      'music_title_url' => 'despacito~jfla',
      'music_title' => 'Despacito',
      'music_artist' => 'J.Fla',
      'music_artist_id' => '14116',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538492024,
      'music_last_update_time' => 1495071436,
      'music_title_search' => 'dexpacito',
      'music_artist_search' => '; j fla;',
      'music_album_search' => '',
      'music_composer' => 'Luis Fonsi; Erika Ender; Andrés Torres; Mauricio Rengífo',
      'music_album' => '',
      'music_listen' => 245802,
      'music_track_id' => 0,
      'music_filename' => '1788086-9cd8e1fd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Luis Fonsi &amp; Daddy Yankee]
Ay, ¡Fonsi! ¡D.Y.!
Ohhh, oh, no, oh, no, oh
Hey, yeah!
Dididiri Daddy, Go!

[Intro: Luis Fonsi &amp; Daddy Yankee]
Sí, sabes que ya llevo un rato mirándote
Te...',
      'music_length' => 162,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1817783,
      'music_title_url' => 'felices-los-4-salsa-version~maluma-marc-anthony',
      'music_title' => 'Felices Los 4 (Salsa Version)',
      'music_artist' => 'Maluma;Marc Anthony',
      'music_artist_id' => '13396;2256',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538905518,
      'music_last_update_time' => 1503274861,
      'music_title_search' => 'felicex lox 4; xalxa verxion',
      'music_artist_search' => '; maluma; marc anthoni;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 14676,
      'music_track_id' => 0,
      'music_filename' => '1817783-5a63ce0a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verso 1: Marc Anthony]
Apenas sale el sol y tú te vas corriendo
Sé que pensarás que esto me está doliendo
Yo no estoy pensando en lo que estás haciendo
Si somos ajenos y así nos queremos.

[Pre Co...',
      'music_length' => 312,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1821292,
      'music_title_url' => 'el-orgullo-de-mi-patria~carlos-vives',
      'music_title' => 'El Orgullo De Mi Patria',
      'music_artist' => 'Carlos Vives',
      'music_artist_id' => '14439',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538596050,
      'music_last_update_time' => 1504580821,
      'music_title_search' => 'el orgulo de mi pachia',
      'music_artist_search' => '; carlox vivex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1059,
      'music_track_id' => 0,
      'music_filename' => '1821292-cf6e2f02.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Yo conozco su cara
Y conozco su alma
Que no hay gente más buena que yo haya visto en otro lugar
Es mi pueblo, es mi herencia
Que me dio mi bandera
Que se alegra la vida cuando un domingo sale a pas...',
      'music_length' => 218,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827644,
      'music_title_url' => 'happy-happy~nacho-los-mendoza',
      'music_title' => 'Happy Happy',
      'music_artist' => 'Nacho;Los Mendoza',
      'music_artist_id' => '15093;100408',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538615958,
      'music_last_update_time' => 1506302010,
      'music_title_search' => 'hapi hapi',
      'music_artist_search' => '; nacho; lox mendoza;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 96029,
      'music_track_id' => 0,
      'music_filename' => '1827644-2c02ae83.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Happy happy, happy happy happy Happy happy, happy happy happy You may think that I wanna run away But what I really want is to hug you once again Pero no sabes que tu… Vives en mis pensamientos Que...',
      'music_length' => 197,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1796576,
      'music_title_url' => 'despacito-live-from-conan-2017~luis-fonsi',
      'music_title' => 'Despacito (Live From Conan 2017)',
      'music_artist' => 'Luis Fonsi',
      'music_artist_id' => '11252',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538788890,
      'music_last_update_time' => 1497582334,
      'music_title_search' => 'dexpacito; live from conan 2017',
      'music_artist_search' => '; luix fonxi;',
      'music_album_search' => '',
      'music_composer' => 'Luis Fonsi; Erika Ender; Andrés Torres; Mauricio Rengífo',
      'music_album' => '',
      'music_listen' => 20124,
      'music_track_id' => 0,
      'music_filename' => '1796576-3c092aa6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Luis Fonsi &amp; Daddy Yankee]
Ay, ¡Fonsi! ¡D.Y.!
Ohhh, oh, no, oh, no, oh
Hey, yeah!
Dididiri Daddy, Go!

[Intro: Luis Fonsi &amp; Daddy Yankee]
Sí, sabes que ya llevo un rato mirándote
Te...',
      'music_length' => 224,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1813324,
      'music_title_url' => 'robarte-un-beso~carlos-vives-sebastian-yatra',
      'music_title' => 'Robarte Un Beso',
      'music_artist' => 'Carlos Vives;Sebastian Yatra',
      'music_artist_id' => '14439;13432',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538797320,
      'music_last_update_time' => 1501903178,
      'music_title_search' => 'robarte un bexo',
      'music_artist_search' => '; carlox vivex; xebaxtian iacha;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 46331,
      'music_track_id' => 0,
      'music_filename' => '1813324-c5c77a3f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Yatra Yatra
Son muchos años que pasaron sin decir que
Y en verdad te quiero
Pero encuentro formas de engañar mi corazón.

Son muchos años que pasaron sin robarte un beso
Solo quiero un beso
Y por e...',
      'music_length' => 197,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1821037,
      'music_title_url' => 'felices-los-4~maluma',
      'music_title' => 'Felices Los 4',
      'music_artist' => 'Maluma',
      'music_artist_id' => '13396',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538614251,
      'music_last_update_time' => 1504236415,
      'music_title_search' => 'felicex lox 4',
      'music_artist_search' => '; maluma;',
      'music_album_search' => '',
      'music_composer' => 'Mario Cáceres; Servando Moriche Primera Mussett; Miky La Sensa; Maluma',
      'music_album' => '',
      'music_listen' => 8440,
      'music_track_id' => 0,
      'music_filename' => '1821037-cab41cc2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
Maluma baby.

[Verso 1:]
Apenas sale el sol y tú te vas corriendo
Sé que pensarás que esto me está doliendo
Yo no estoy pensando en lo que estás haciendo
Si somos ajenos y así nos queremos...',
      'music_length' => 290,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    11 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1843916,
      'music_title_url' => 'echame-la-culpa~luis-fonsi-demi-lovato',
      'music_title' => 'Échame La Culpa',
      'music_artist' => 'Luis Fonsi;Demi Lovato',
      'music_artist_id' => '11252;965',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539069721,
      'music_last_update_time' => 1521102051,
      'music_title_search' => 'echame la culpa',
      'music_artist_search' => '; luix fonxi; demi lovato;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 189813,
      'music_track_id' => 0,
      'music_filename' => '1843916-c7db64d2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Demi Lovato &amp; Luis Fonsi]
Hey Fonsi?
Oh no
¿Qué pasa Demi?
Hey yeah.

[Verso: Luis Fonsi &amp; Demi Lovato]
Tengo en esta historia algo que confesar
Ya entendí muy bien que fue lo que p...',
      'music_length' => 210,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1850354,
      'music_title_url' => 'corazon~maluma-nego-do-borel',
      'music_title' => 'Corazón',
      'music_artist' => 'Maluma;Nego Do Borel',
      'music_artist_id' => '13396;15612',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538907326,
      'music_last_update_time' => 1512787069,
      'music_title_search' => 'corazon',
      'music_artist_search' => '; maluma; nego do borel;',
      'music_album_search' => '',
      'music_composer' => 'Kevin Mauricio Jiménez Londoño; Bryan Snaider Lezcano; Jefferson Junior; Romeu R3; Umberto Tavares; Maluma',
      'music_album' => '',
      'music_listen' => 7589,
      'music_track_id' => 0,
      'music_filename' => '1850354-324f2c23.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Coro]
Alright to right, baby
Tu me partiste el corazón (Maluma baby)
Pero mi amor no hay problema, no, no
Ahora puedo regalar
Un pedacito a cada nena
Sólo un pedacito.

Tu me partiste el corazón (...',
      'music_length' => 214,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1849657,
      'music_title_url' => 'sensualidad~bad-bunny-prince-royce-j-balvin',
      'music_title' => 'Sensualidad',
      'music_artist' => 'Bad Bunny;Prince Royce;J Balvin',
      'music_artist_id' => '13509;15610;13436',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538996323,
      'music_last_update_time' => 1512695704,
      'music_title_search' => 'xenxualidad',
      'music_artist_search' => '; bad buni; prince roice; j balvin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4465,
      'music_track_id' => 0,
      'music_filename' => '1849657-b65edc9a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Pre-Coro: Prince Royce]
Ay baby, tu sensualidad
Me tiene al borde de la locura
Y esto no es casualidad
Te beso y sube la temperatura.

Ay baby, tu sensualidad
Me tiene al borde de la locura
Y esto...',
      'music_length' => 319,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1860381,
      'music_title_url' => 'dejala-que-vuelva~piso-21-manuel-turizo',
      'music_title' => 'Déjala Que Vuelva',
      'music_artist' => 'Piso 21;Manuel Turizo',
      'music_artist_id' => '15109;18547',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538932337,
      'music_last_update_time' => 1514905293,
      'music_title_search' => 'dejala que vuelva',
      'music_artist_search' => '; pixo 21; manuel turizo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5805,
      'music_track_id' => 0,
      'music_filename' => '1860381-a961baa1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Déjala Que Vuelva
Ay ya ya.

[Intro]
¿Como podrás respirar cuando te falte mi piel?
Si fuiste tú quien se alejó
Pero esta vez no me dolió baby (No me dolió)
No quiero verte llorar por mi
Entiendo n...',
      'music_length' => 234,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1853167,
      'music_title_url' => 'buscando-huellas~major-lazer-j-balvin-sean-paul',
      'music_title' => 'Buscando Huellas',
      'music_artist' => 'Major Lazer;J Balvin;Sean Paul',
      'music_artist_id' => '13367;13436;257',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538507723,
      'music_last_update_time' => 1513560247,
      'music_title_search' => 'buxcando huelax',
      'music_artist_search' => '; major lazer; j balvin; xean paul;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 469,
      'music_track_id' => 0,
      'music_filename' => '1853167-d113680c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Sean Paul]
Major Lazer
J Balvin
Tell dem gyals dem.

[Verse 1: J Balvin]
Mai tú pareces de Island
Hay algo en ti que no es normal
Y a mí ése algo me encanta
Me parece súper especial
Se ve q...',
      'music_length' => 178,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1807540,
      'music_title_url' => 'despacito~luis-fonsi-daddy-yankee-justin-bieber',
      'music_title' => 'Despacito',
      'music_artist' => 'Luis Fonsi;Daddy Yankee;Justin Bieber',
      'music_artist_id' => '11252;433;1798',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1500537041,
      'music_last_update_time' => 1500512986,
      'music_title_search' => 'dexpacito',
      'music_artist_search' => '; luix fonxi; dadi ianke; juxtin biber;',
      'music_album_search' => '',
      'music_composer' => 'Luis Fonsi; Erika Ender; Andrés Torres; Mauricio Rengífo',
      'music_album' => '',
      'music_listen' => 2816,
      'music_track_id' => 0,
      'music_filename' => '1807540-e2d7e62b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Justin Bieber]
Comin\' over in my direction
So thankful for that, it\'s such a blessin\', yeah
Turn every situation into heaven, yeah
Oh-oh, you are
My sunrise on the darkest day
Got me feelin...',
      'music_length' => 234,
      'music_width' => 1280,
      'music_height' => 720,
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1834693,
      'music_title_url' => 'parcera~tomas-the-latin-boy-farina',
      'music_title' => 'Parcera',
      'music_artist' => 'Tomas The Latin Boy;Farina',
      'music_artist_id' => '101179;83140',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512661518,
      'music_last_update_time' => 1508122345,
      'music_title_search' => 'parcera',
      'music_artist_search' => '; tomax the latin boi; farina;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 456,
      'music_track_id' => 0,
      'music_filename' => '1834693-7e4c2368.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ya tú sabes quién soy, Tomas The Latin Boy
Creo que es temprano para saber si cada mañana te voy a ver
O solo una noche serás mía
Mejor me relajo y dejo que fluya
Y cuando mi boca toque la tuya
Ya...',
      'music_length' => 191,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1814948,
      'music_title_url' => 'me-descontrola~alexis-y-fido',
      'music_title' => 'Me Descontrola',
      'music_artist' => 'Alexis y Fido',
      'music_artist_id' => '99192',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535653196,
      'music_last_update_time' => 1502325766,
      'music_title_search' => 'me dexconchola',
      'music_artist_search' => '; alexix i fido;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5121,
      'music_track_id' => 0,
      'music_filename' => '1814948-d25f47df.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '(Intro) 
Tiene algo al caminar
Sus ojos negros combinan con su pelo
Yeh! Yeh!
No la puedo olvidar 
No! No! 
Es un problema y quisiera ignorarla pero...
 
(Coro)
Es que tiene algo que enamora 
Me po...',
      'music_length' => 227,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1792910,
      'music_title_url' => 'me-enamore~shakira',
      'music_title' => 'Me Enamoré',
      'music_artist' => 'Shakira',
      'music_artist_id' => '112',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529969885,
      'music_last_update_time' => 1496625570,
      'music_title_search' => 'me enamore',
      'music_artist_search' => '; thakira;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5383,
      'music_track_id' => 0,
      'music_filename' => '1792910-f1979b53.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'La vida me empezó a cambiar
La noche que te conocí
Tenía poco que perder
Y la cosa siguió así
Yo con mis sostén a rayas
Y mi pelo a medio hacer
Pensé: &quot;Este todavía es un niño&quot;
Pero, ¿qué...',
      'music_length' => 232,
      'music_width' => 1920,
      'music_height' => 1080,
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1763377,
      'music_title_url' => 'chantaje-version-salsa~shakira-maluma',
      'music_title' => 'Chantaje (Version Salsa)',
      'music_artist' => 'Shakira;Maluma',
      'music_artist_id' => '112;13396',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538906936,
      'music_last_update_time' => 1501030048,
      'music_title_search' => 'chantaje; verxion xalxa',
      'music_artist_search' => '; thakira; maluma;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 14518,
      'music_track_id' => 0,
      'music_filename' => '1763377-5a6ab3b6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Maluma] 
Cuando estás bien te alejas de mí 
Te sientes sola y siempre estoy ahí 
Es una guerra de toma y dame 
Pues dame de eso que tiene\' ahí 

Oye baby no seas mala 
No me dejes con las ganas 
S...',
      'music_length' => 227,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Shakira~Y3NuX2FydGlzdH4xMTI=.html">Shakira</a>, <a href="/ca-si/Maluma~Y3NuX2FydGlzdH4xMzM5Ng==.html">Maluma</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1849710,
      'music_title_url' => 'chambea~bad-bunny',
      'music_title' => 'Chambea',
      'music_artist' => 'Bad Bunny',
      'music_artist_id' => '13509',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538944787,
      'music_last_update_time' => 1512695855,
      'music_title_search' => 'chambea',
      'music_artist_search' => '; bad buni;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 90305,
      'music_track_id' => 0,
      'music_filename' => '1849710-83651c45.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Coro]
Chambea, jala, cabrón ya no te quedan balas
Chambea, jala, cabrón ya no te quedan balas
Yo siempre picheo, enrolo otra vez
Yo siempre picheo, enrolo otra vez
Yo siempre picheo, enrolo otra v...',
      'music_length' => 235,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Bad-Bunny~Y3NuX2FydGlzdH4xMzUwOQ==.html">Bad Bunny</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827654,
      'music_title_url' => 'pescaito~carlos-vives',
      'music_title' => 'Pescaíto',
      'music_artist' => 'Carlos Vives',
      'music_artist_id' => '14439',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538787997,
      'music_last_update_time' => 1506302501,
      'music_title_search' => 'pexcaito',
      'music_artist_search' => '; carlox vivex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2153,
      'music_track_id' => 0,
      'music_filename' => '1827654-2f7881e4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'No hay nada mas bacano
Que sentarme a tu lado
Y respirar el aire
Que respiras.

Tomarnos de la mano
Cruzar del monte al claro
Para llegar a una playa escondida.

Y agua
Metidos en el agua
Nadando e...',
      'music_length' => 203,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Carlos-Vives~Y3NuX2FydGlzdH4xNDQzOQ==.html">Carlos Vives</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    23 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1856540,
      'music_title_url' => 'bonita-remix~j-balvin-jowell-randy-nicky-jam-wisin-yandel-ozuna',
      'music_title' => 'Bonita (Remix)',
      'music_artist' => 'J Balvin;Jowell;Randy;Nicky Jam;Wisin;Yandel;Ozuna',
      'music_artist_id' => '13436;18556;3735;16017;959;960;14556',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538947567,
      'music_last_update_time' => 1514014787,
      'music_title_search' => 'bonita',
      'music_artist_search' => '; j balvin; jowel; randi; nicki jam; wixin; iandel; ozuna;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 111827,
      'music_track_id' => 0,
      'music_filename' => '1856540-1076d85c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: J Balvin, Wisin, Nicky Jam]
(Dayme &amp; El High)
This is the remix
Ella se tarda arreglándose un par de horas
Llama a su amiga, no le gusta salir sola
Y de la noche, dejarse llevar, oh
N.I...',
      'music_length' => 322,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/J-Balvin~Y3NuX2FydGlzdH4xMzQzNg==.html">J Balvin</a>, <a href="/ca-si/Jowell~Y3NuX2FydGlzdH4xODU1Ng==.html">Jowell</a>, <a href="/ca-si/Randy~Y3NuX2FydGlzdH4zNzM1.html">Randy</a>, <a href="/ca-si/Nicky-Jam~Y3NuX2FydGlzdH4xNjAxNw==.html">Nicky Jam</a>, <a href="/ca-si/Wisin~Y3NuX2FydGlzdH45NTk=.html">Wisin</a>, <a href="/ca-si/Yandel~Y3NuX2FydGlzdH45NjA=.html">Yandel</a>, <a href="/ca-si/Ozuna~Y3NuX2FydGlzdH4xNDU1Ng==.html">Ozuna</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1788086,
      'music_title_url' => 'despacito~jfla',
      'music_title' => 'Despacito',
      'music_artist' => 'J.Fla',
      'music_artist_id' => '14116',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538492024,
      'music_last_update_time' => 1495071436,
      'music_title_search' => 'dexpacito',
      'music_artist_search' => '; j fla;',
      'music_album_search' => '',
      'music_composer' => 'Luis Fonsi; Erika Ender; Andrés Torres; Mauricio Rengífo',
      'music_album' => '',
      'music_listen' => 245802,
      'music_track_id' => 0,
      'music_filename' => '1788086-9cd8e1fd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Luis Fonsi &amp; Daddy Yankee]
Ay, ¡Fonsi! ¡D.Y.!
Ohhh, oh, no, oh, no, oh
Hey, yeah!
Dididiri Daddy, Go!

[Intro: Luis Fonsi &amp; Daddy Yankee]
Sí, sabes que ya llevo un rato mirándote
Te...',
      'music_length' => 162,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/JFla~Y3NuX2FydGlzdH4xNDExNg==.html">J.Fla</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1817783,
      'music_title_url' => 'felices-los-4-salsa-version~maluma-marc-anthony',
      'music_title' => 'Felices Los 4 (Salsa Version)',
      'music_artist' => 'Maluma;Marc Anthony',
      'music_artist_id' => '13396;2256',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538905518,
      'music_last_update_time' => 1503274861,
      'music_title_search' => 'felicex lox 4; xalxa verxion',
      'music_artist_search' => '; maluma; marc anthoni;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 14676,
      'music_track_id' => 0,
      'music_filename' => '1817783-5a63ce0a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verso 1: Marc Anthony]
Apenas sale el sol y tú te vas corriendo
Sé que pensarás que esto me está doliendo
Yo no estoy pensando en lo que estás haciendo
Si somos ajenos y así nos queremos.

[Pre Co...',
      'music_length' => 312,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Maluma~Y3NuX2FydGlzdH4xMzM5Ng==.html">Maluma</a>, <a href="/ca-si/Marc-Anthony~Y3NuX2FydGlzdH4yMjU2.html">Marc Anthony</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1821292,
      'music_title_url' => 'el-orgullo-de-mi-patria~carlos-vives',
      'music_title' => 'El Orgullo De Mi Patria',
      'music_artist' => 'Carlos Vives',
      'music_artist_id' => '14439',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538596050,
      'music_last_update_time' => 1504580821,
      'music_title_search' => 'el orgulo de mi pachia',
      'music_artist_search' => '; carlox vivex;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1059,
      'music_track_id' => 0,
      'music_filename' => '1821292-cf6e2f02.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Yo conozco su cara
Y conozco su alma
Que no hay gente más buena que yo haya visto en otro lugar
Es mi pueblo, es mi herencia
Que me dio mi bandera
Que se alegra la vida cuando un domingo sale a pas...',
      'music_length' => 218,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Carlos-Vives~Y3NuX2FydGlzdH4xNDQzOQ==.html">Carlos Vives</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1827644,
      'music_title_url' => 'happy-happy~nacho-los-mendoza',
      'music_title' => 'Happy Happy',
      'music_artist' => 'Nacho;Los Mendoza',
      'music_artist_id' => '15093;100408',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538615958,
      'music_last_update_time' => 1506302010,
      'music_title_search' => 'hapi hapi',
      'music_artist_search' => '; nacho; lox mendoza;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 96029,
      'music_track_id' => 0,
      'music_filename' => '1827644-2c02ae83.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Happy happy, happy happy happy Happy happy, happy happy happy You may think that I wanna run away But what I really want is to hug you once again Pero no sabes que tu… Vives en mis pensamientos Que...',
      'music_length' => 197,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Nacho~Y3NuX2FydGlzdH4xNTA5Mw==.html">Nacho</a>, <a href="/ca-si/Los-Mendoza~Y3NuX2FydGlzdH4xMDA0MDg=.html">Los Mendoza</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1796576,
      'music_title_url' => 'despacito-live-from-conan-2017~luis-fonsi',
      'music_title' => 'Despacito (Live From Conan 2017)',
      'music_artist' => 'Luis Fonsi',
      'music_artist_id' => '11252',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538788890,
      'music_last_update_time' => 1497582334,
      'music_title_search' => 'dexpacito; live from conan 2017',
      'music_artist_search' => '; luix fonxi;',
      'music_album_search' => '',
      'music_composer' => 'Luis Fonsi; Erika Ender; Andrés Torres; Mauricio Rengífo',
      'music_album' => '',
      'music_listen' => 20124,
      'music_track_id' => 0,
      'music_filename' => '1796576-3c092aa6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Luis Fonsi &amp; Daddy Yankee]
Ay, ¡Fonsi! ¡D.Y.!
Ohhh, oh, no, oh, no, oh
Hey, yeah!
Dididiri Daddy, Go!

[Intro: Luis Fonsi &amp; Daddy Yankee]
Sí, sabes que ya llevo un rato mirándote
Te...',
      'music_length' => 224,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Luis-Fonsi~Y3NuX2FydGlzdH4xMTI1Mg==.html">Luis Fonsi</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1813324,
      'music_title_url' => 'robarte-un-beso~carlos-vives-sebastian-yatra',
      'music_title' => 'Robarte Un Beso',
      'music_artist' => 'Carlos Vives;Sebastian Yatra',
      'music_artist_id' => '14439;13432',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538797320,
      'music_last_update_time' => 1501903178,
      'music_title_search' => 'robarte un bexo',
      'music_artist_search' => '; carlox vivex; xebaxtian iacha;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 46331,
      'music_track_id' => 0,
      'music_filename' => '1813324-c5c77a3f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Yatra Yatra
Son muchos años que pasaron sin decir que
Y en verdad te quiero
Pero encuentro formas de engañar mi corazón.

Son muchos años que pasaron sin robarte un beso
Solo quiero un beso
Y por e...',
      'music_length' => 197,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Carlos-Vives~Y3NuX2FydGlzdH4xNDQzOQ==.html">Carlos Vives</a>, <a href="/ca-si/Sebastian-Yatra~Y3NuX2FydGlzdH4xMzQzMg==.html">Sebastian Yatra</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1821037,
      'music_title_url' => 'felices-los-4~maluma',
      'music_title' => 'Felices Los 4',
      'music_artist' => 'Maluma',
      'music_artist_id' => '13396',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538614251,
      'music_last_update_time' => 1504236415,
      'music_title_search' => 'felicex lox 4',
      'music_artist_search' => '; maluma;',
      'music_album_search' => '',
      'music_composer' => 'Mario Cáceres; Servando Moriche Primera Mussett; Miky La Sensa; Maluma',
      'music_album' => '',
      'music_listen' => 8440,
      'music_track_id' => 0,
      'music_filename' => '1821037-cab41cc2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
Maluma baby.

[Verso 1:]
Apenas sale el sol y tú te vas corriendo
Sé que pensarás que esto me está doliendo
Yo no estoy pensando en lo que estás haciendo
Si somos ajenos y así nos queremos...',
      'music_length' => 290,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Maluma~Y3NuX2FydGlzdH4xMzM5Ng==.html">Maluma</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    31 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1843916,
      'music_title_url' => 'echame-la-culpa~luis-fonsi-demi-lovato',
      'music_title' => 'Échame La Culpa',
      'music_artist' => 'Luis Fonsi;Demi Lovato',
      'music_artist_id' => '11252;965',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539069721,
      'music_last_update_time' => 1521102051,
      'music_title_search' => 'echame la culpa',
      'music_artist_search' => '; luix fonxi; demi lovato;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 189813,
      'music_track_id' => 0,
      'music_filename' => '1843916-c7db64d2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Demi Lovato &amp; Luis Fonsi]
Hey Fonsi?
Oh no
¿Qué pasa Demi?
Hey yeah.

[Verso: Luis Fonsi &amp; Demi Lovato]
Tengo en esta historia algo que confesar
Ya entendí muy bien que fue lo que p...',
      'music_length' => 210,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Luis-Fonsi~Y3NuX2FydGlzdH4xMTI1Mg==.html">Luis Fonsi</a>, <a href="/ca-si/Demi-Lovato~Y3NuX2FydGlzdH45NjU=.html">Demi Lovato</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1850354,
      'music_title_url' => 'corazon~maluma-nego-do-borel',
      'music_title' => 'Corazón',
      'music_artist' => 'Maluma;Nego Do Borel',
      'music_artist_id' => '13396;15612',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538907326,
      'music_last_update_time' => 1512787069,
      'music_title_search' => 'corazon',
      'music_artist_search' => '; maluma; nego do borel;',
      'music_album_search' => '',
      'music_composer' => 'Kevin Mauricio Jiménez Londoño; Bryan Snaider Lezcano; Jefferson Junior; Romeu R3; Umberto Tavares; Maluma',
      'music_album' => '',
      'music_listen' => 7589,
      'music_track_id' => 0,
      'music_filename' => '1850354-324f2c23.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Coro]
Alright to right, baby
Tu me partiste el corazón (Maluma baby)
Pero mi amor no hay problema, no, no
Ahora puedo regalar
Un pedacito a cada nena
Sólo un pedacito.

Tu me partiste el corazón (...',
      'music_length' => 214,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Maluma~Y3NuX2FydGlzdH4xMzM5Ng==.html">Maluma</a>, <a href="/ca-si/Nego-Do-Borel~Y3NuX2FydGlzdH4xNTYxMg==.html">Nego Do Borel</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1849657,
      'music_title_url' => 'sensualidad~bad-bunny-prince-royce-j-balvin',
      'music_title' => 'Sensualidad',
      'music_artist' => 'Bad Bunny;Prince Royce;J Balvin',
      'music_artist_id' => '13509;15610;13436',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538996323,
      'music_last_update_time' => 1512695704,
      'music_title_search' => 'xenxualidad',
      'music_artist_search' => '; bad buni; prince roice; j balvin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4465,
      'music_track_id' => 0,
      'music_filename' => '1849657-b65edc9a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Pre-Coro: Prince Royce]
Ay baby, tu sensualidad
Me tiene al borde de la locura
Y esto no es casualidad
Te beso y sube la temperatura.

Ay baby, tu sensualidad
Me tiene al borde de la locura
Y esto...',
      'music_length' => 319,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Bad-Bunny~Y3NuX2FydGlzdH4xMzUwOQ==.html">Bad Bunny</a>, <a href="/ca-si/Prince-Royce~Y3NuX2FydGlzdH4xNTYxMA==.html">Prince Royce</a>, <a href="/ca-si/J-Balvin~Y3NuX2FydGlzdH4xMzQzNg==.html">J Balvin</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1860381,
      'music_title_url' => 'dejala-que-vuelva~piso-21-manuel-turizo',
      'music_title' => 'Déjala Que Vuelva',
      'music_artist' => 'Piso 21;Manuel Turizo',
      'music_artist_id' => '15109;18547',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538932337,
      'music_last_update_time' => 1514905293,
      'music_title_search' => 'dejala que vuelva',
      'music_artist_search' => '; pixo 21; manuel turizo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5805,
      'music_track_id' => 0,
      'music_filename' => '1860381-a961baa1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Déjala Que Vuelva
Ay ya ya.

[Intro]
¿Como podrás respirar cuando te falte mi piel?
Si fuiste tú quien se alejó
Pero esta vez no me dolió baby (No me dolió)
No quiero verte llorar por mi
Entiendo n...',
      'music_length' => 234,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Piso-21~Y3NuX2FydGlzdH4xNTEwOQ==.html">Piso 21</a>, <a href="/ca-si/Manuel-Turizo~Y3NuX2FydGlzdH4xODU0Nw==.html">Manuel Turizo</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1853167,
      'music_title_url' => 'buscando-huellas~major-lazer-j-balvin-sean-paul',
      'music_title' => 'Buscando Huellas',
      'music_artist' => 'Major Lazer;J Balvin;Sean Paul',
      'music_artist_id' => '13367;13436;257',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538507723,
      'music_last_update_time' => 1513560247,
      'music_title_search' => 'buxcando huelax',
      'music_artist_search' => '; major lazer; j balvin; xean paul;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 469,
      'music_track_id' => 0,
      'music_filename' => '1853167-d113680c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Sean Paul]
Major Lazer
J Balvin
Tell dem gyals dem.

[Verse 1: J Balvin]
Mai tú pareces de Island
Hay algo en ti que no es normal
Y a mí ése algo me encanta
Me parece súper especial
Se ve q...',
      'music_length' => 178,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Major-Lazer~Y3NuX2FydGlzdH4xMzM2Nw==.html">Major Lazer</a>, <a href="/ca-si/J-Balvin~Y3NuX2FydGlzdH4xMzQzNg==.html">J Balvin</a>, <a href="/ca-si/Sean-Paul~Y3NuX2FydGlzdH4yNTc=.html">Sean Paul</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1807540,
      'music_title_url' => 'despacito~luis-fonsi-daddy-yankee-justin-bieber',
      'music_title' => 'Despacito',
      'music_artist' => 'Luis Fonsi;Daddy Yankee;Justin Bieber',
      'music_artist_id' => '11252;433;1798',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1500537041,
      'music_last_update_time' => 1500512986,
      'music_title_search' => 'dexpacito',
      'music_artist_search' => '; luix fonxi; dadi ianke; juxtin biber;',
      'music_album_search' => '',
      'music_composer' => 'Luis Fonsi; Erika Ender; Andrés Torres; Mauricio Rengífo',
      'music_album' => '',
      'music_listen' => 2816,
      'music_track_id' => 0,
      'music_filename' => '1807540-e2d7e62b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Justin Bieber]
Comin\' over in my direction
So thankful for that, it\'s such a blessin\', yeah
Turn every situation into heaven, yeah
Oh-oh, you are
My sunrise on the darkest day
Got me feelin...',
      'music_length' => 234,
      'music_width' => 1280,
      'music_height' => 720,
      'music_artist_html' => '<a href="/ca-si/Luis-Fonsi~Y3NuX2FydGlzdH4xMTI1Mg==.html">Luis Fonsi</a>, <a href="/ca-si/Daddy-Yankee~Y3NuX2FydGlzdH40MzM=.html">Daddy Yankee</a>, <a href="/ca-si/Justin-Bieber~Y3NuX2FydGlzdH4xNzk4.html">Justin Bieber</a>',
      'music_bitrate_html' => '<span style="color: orange">HD 720p</span>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1834693,
      'music_title_url' => 'parcera~tomas-the-latin-boy-farina',
      'music_title' => 'Parcera',
      'music_artist' => 'Tomas The Latin Boy;Farina',
      'music_artist_id' => '101179;83140',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1512661518,
      'music_last_update_time' => 1508122345,
      'music_title_search' => 'parcera',
      'music_artist_search' => '; tomax the latin boi; farina;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 456,
      'music_track_id' => 0,
      'music_filename' => '1834693-7e4c2368.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ya tú sabes quién soy, Tomas The Latin Boy
Creo que es temprano para saber si cada mañana te voy a ver
O solo una noche serás mía
Mejor me relajo y dejo que fluya
Y cuando mi boca toque la tuya
Ya...',
      'music_length' => 191,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Tomas-The-Latin-Boy~Y3NuX2FydGlzdH4xMDExNzk=.html">Tomas The Latin Boy</a>, <a href="/ca-si/Farina~Y3NuX2FydGlzdH44MzE0MA==.html">Farina</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1814948,
      'music_title_url' => 'me-descontrola~alexis-y-fido',
      'music_title' => 'Me Descontrola',
      'music_artist' => 'Alexis y Fido',
      'music_artist_id' => '99192',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535653196,
      'music_last_update_time' => 1502325766,
      'music_title_search' => 'me dexconchola',
      'music_artist_search' => '; alexix i fido;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5121,
      'music_track_id' => 0,
      'music_filename' => '1814948-d25f47df.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '(Intro) 
Tiene algo al caminar
Sus ojos negros combinan con su pelo
Yeh! Yeh!
No la puedo olvidar 
No! No! 
Es un problema y quisiera ignorarla pero...
 
(Coro)
Es que tiene algo que enamora 
Me po...',
      'music_length' => 227,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Alexis-y-Fido~Y3NuX2FydGlzdH45OTE5Mg==.html">Alexis y Fido</a>',
      'music_bitrate_html' => '<span style="color: red">HD 1080p</span>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1792910,
      'music_title_url' => 'me-enamore~shakira',
      'music_title' => 'Me Enamoré',
      'music_artist' => 'Shakira',
      'music_artist_id' => '112',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1529969885,
      'music_last_update_time' => 1496625570,
      'music_title_search' => 'me enamore',
      'music_artist_search' => '; thakira;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5383,
      'music_track_id' => 0,
      'music_filename' => '1792910-f1979b53.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'La vida me empezó a cambiar
La noche que te conocí
Tenía poco que perder
Y la cosa siguió así
Yo con mis sostén a rayas
Y mi pelo a medio hacer
Pensé: &quot;Este todavía es un niño&quot;
Pero, ¿qué...',
      'music_length' => 232,
      'music_width' => 1920,
      'music_height' => 1080,
      'music_artist_html' => '<a href="/ca-si/Shakira~Y3NuX2FydGlzdH4xMTI=.html">Shakira</a>',
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