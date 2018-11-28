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
      'music_downloads_today' => 36,
      'music_id' => 1950470,
      'music_title_url' => 'nguoi-hay-quen-anh-di~bang-kieu-anh-khang',
      'music_title' => 'Người Hãy Quên Anh Đi',
      'music_artist' => 'Bằng Kiều;Anh Khang',
      'music_artist_id' => '1258;2095',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539072350,
      'music_last_update_time' => 1536051366,
      'music_title_search' => 'ngui hai quen em di',
      'music_artist_search' => '; bang kiu; em khang;',
      'music_album_search' => '',
      'music_composer' => 'Khắc Hưng',
      'music_album' => '',
      'music_listen' => 92101,
      'music_track_id' => 0,
      'music_filename' => '1950470-95a46211.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Người yêu hỡi dù gì cũng xa nhau rồi
Ngày nào chiếc hôn bao đêm rã rời giờ đã hết rồi
Chẳng còn hơi ấm trên đầu môi
Người yêu hỡi giờ đây tiếng yêu phai phôi
Chỉ còn những đêm cô đơn rối bời giọ...',
    ),
    1 => 
    array (
      'music_downloads_today' => 28,
      'music_id' => 1948161,
      'music_title_url' => 'em-muon-anh-dua-em-ve~ho-ngoc-ha',
      'music_title' => 'Em Muốn Anh Đưa Em Về',
      'music_artist' => 'Hồ Ngọc Hà',
      'music_artist_id' => '1468',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539075956,
      'music_last_update_time' => 1536120417,
      'music_title_search' => 'em mun em dua em ve',
      'music_artist_search' => '; ho ngoc ha;',
      'music_album_search' => '',
      'music_composer' => 'Đỗ Hiếu',
      'music_album' => '',
      'music_listen' => 36323,
      'music_track_id' => 0,
      'music_filename' => '1948161-1c7480d3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Trời đang tối cơn mưa phùn
Hôm nay ta hẹn nhau lần đầu tiên
Nhìn ánh mắt anh ngại ngùng
Nhẹ nhàng đặt nụ hồng lên môi em.

Nghe trong em từng khao khát như muốn đoạ
Cay đắng như đã dừng lại...
V...',
    ),
    2 => 
    array (
      'music_downloads_today' => 9,
      'music_id' => 1951590,
      'music_title_url' => 'tan-tro~lan-nha-tuan-kha',
      'music_title' => 'Tàn Tro',
      'music_artist' => 'Lân Nhã;Tuấn Kha',
      'music_artist_id' => '3783;23433',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539068618,
      'music_last_update_time' => 1536541012,
      'music_title_search' => 'tan cho',
      'music_artist_search' => '; lan nha; tuan kha;',
      'music_album_search' => '',
      'music_composer' => 'Lời: Khúc Lan',
      'music_album' => '',
      'music_listen' => 16177,
      'music_track_id' => 0,
      'music_filename' => '1951590-3a814e61.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Giọt nước rơi hay giọt sầu rơi rơi
Lệ vẫn tuôn khóc tình ta nát tan
Thu vẫn trôi giờ biệt ly đến
Anh về đi em vẫn đứng đây.

Nhìn lá rơi nghe lòng ta tan tác
Từng xác hoa phai tàn theo cuối xuân...',
    ),
    3 => 
    array (
      'music_downloads_today' => 17,
      'music_id' => 1956331,
      'music_title_url' => 'canh-hong-phai~hoang-yen-chibi',
      'music_title' => 'Cánh Hồng Phai',
      'music_artist' => 'Hoàng Yến Chibi',
      'music_artist_id' => '4578',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539071263,
      'music_last_update_time' => 1538029108,
      'music_title_search' => 'canh hong phai',
      'music_artist_search' => '; hoang in chibi;',
      'music_album_search' => '',
      'music_composer' => 'Dương Khắc Linh',
      'music_album' => '',
      'music_listen' => 5146,
      'music_track_id' => 0,
      'music_filename' => '1956331-09b15e57.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Nàng như một đoá hồng phai
Hương sắc héo hon theo những ngày dài
Cuộc tình đi qua trong em mang bao tiếc nuối
Trái tim vỡ tan.

Nhặt lại từng cánh rụng rơi
Nàng vẫn xót xa cho chính đời mình
Vì...',
    ),
    4 => 
    array (
      'music_downloads_today' => 10,
      'music_id' => 1955292,
      'music_title_url' => 'con-yeu-dau-ai-roi-di~duc-phuc',
      'music_title' => 'Còn Yêu, Đâu Ai Rời Đi',
      'music_artist' => 'Đức Phúc',
      'music_artist_id' => '15824',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539074817,
      'music_last_update_time' => 1537767039,
      'music_title_search' => 'con iu dau ai roi di',
      'music_artist_search' => '; duc phuc;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Hồng Thuận',
      'music_album' => '',
      'music_listen' => 6212,
      'music_track_id' => 0,
      'music_filename' => '1955292-9ad9bee6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Cuộc tình đầu tiên khi tôi 20
Tôi yêu với những tinh khôi
Sinh viên thì như thế thôi
Chỉ có tiếng hát nụ cười.

Rồi người rời xa bằng lời chê bai
Người trách tôi không tương lai
Tim tôi chỉ biết...',
    ),
    5 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1955116,
      'music_title_url' => 'tim-anh-that-lai~ho-quang-hieu',
      'music_title' => 'Tim Anh Thắt Lại',
      'music_artist' => 'Hồ Quang Hiếu',
      'music_artist_id' => '1991',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539009143,
      'music_last_update_time' => 1537807881,
      'music_title_search' => 'tim em that lai',
      'music_artist_search' => '; ho quang hiu;',
      'music_album_search' => '',
      'music_composer' => 'Wendy Thảo',
      'music_album' => '',
      'music_listen' => 11766,
      'music_track_id' => 0,
      'music_filename' => '1955116-116a9771.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ngày em đi, con tim tôi như thắt lại
Giọt nước mắt cố nén trong lòng
Rồi ngày mai, ngày sau sẽ không còn bên nhau nữa.

Tại vì tôi hay đôi môi ai quá nồng nàn?
Làm tim em phút chốc mơ hồ
Gạt bỏ đi...',
    ),
    6 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1930880,
      'music_title_url' => 'co-ai-thuong-em-nhu-anh~toc-tien',
      'music_title' => 'Có Ai Thương Em Như Anh',
      'music_artist' => 'Tóc Tiên',
      'music_artist_id' => '343',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539066582,
      'music_last_update_time' => 1532054963,
      'music_title_search' => 'co ai thung em nhu em',
      'music_artist_search' => '; toc tin;',
      'music_album_search' => '',
      'music_composer' => 'Bùi Công Nam; Touliver; Minh Đạt',
      'music_album' => '',
      'music_listen' => 57689,
      'music_track_id' => 0,
      'music_filename' => '1930880-cdc0fb2f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Đường về chiều mưa rơi thấy anh cùng ai bước chung
Bỗng nhiên bao nhiêu ký ức quen thuộc cứ hiện lên làm em thấy buồn
Hình như anh đang vui vì thấy anh mỉm cười rất tươi
Nắm tay anh rồi ai đó ôm...',
    ),
    7 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1947243,
      'music_title_url' => 'de-cho-em-khoc~minh-tuyet',
      'music_title' => 'Để Cho Em Khóc',
      'music_artist' => 'Minh Tuyết',
      'music_artist_id' => '30',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539003965,
      'music_last_update_time' => 1535176925,
      'music_title_search' => 'de cho em khoc',
      'music_artist_search' => '; minh tit;',
      'music_album_search' => '',
      'music_composer' => 'Phúc Trường',
      'music_album' => '',
      'music_listen' => 14874,
      'music_track_id' => 0,
      'music_filename' => '1947243-7a0f5d9c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Chỉ là em muốn ôm chặt anh lúc này
Giữ chặt anh lúc này không buông tay
Để cho em khóc, thêm một lần nữa thôi
Thêm một lần cuối cùng, rồi ta sẽ rời xa.
 
Vậy là kết thúc sau nhiều năm nói cười
Ta c...',
    ),
    8 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1951855,
      'music_title_url' => 'ta-phu-nhau-roi~luu-bich-to-chan-phong',
      'music_title' => 'Ta Phụ Nhau Rồi',
      'music_artist' => 'Lưu Bích;Tô Chấn Phong',
      'music_artist_id' => '205;204',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538999154,
      'music_last_update_time' => 1536540812,
      'music_title_search' => 'ta phu nhau roi',
      'music_artist_search' => '; lu bich; to chan phong;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Hồng Thuận',
      'music_album' => '',
      'music_listen' => 3209,
      'music_track_id' => 0,
      'music_filename' => '1951855-10e06e61.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Đêm chia ly, nước mắt hoen mi
Cố bước ra đi để thôi suy nghĩ
Bao năm qua ta đến với nhau
Cho nhau được gì, tay ta còn gì?

Thấy yêu thương đã chết trong nhau
Dối trá cơn đau mà không dám nói
Đi bên...',
    ),
    9 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1951864,
      'music_title_url' => 'tan-cung-noi-nho~will-anvy',
      'music_title' => 'Tận Cùng Nỗi Nhớ',
      'music_artist' => 'Will;Anvy',
      'music_artist_id' => '2133;23486',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539070075,
      'music_last_update_time' => 1536554502,
      'music_title_search' => 'tan cung noi nho',
      'music_artist_search' => '; wil; anvi;',
      'music_album_search' => '',
      'music_composer' => 'Andiez; Đoàn Minh Vũ; Lê Minh Hiếu',
      'music_album' => '',
      'music_listen' => 4782,
      'music_track_id' => 0,
      'music_filename' => '1951864-d047525b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Anh chơi vơi nơi góc phố quen
Mình từng, từng là tất cả
Hôm ấy mây xanh ngát trời
Cố giữ lấy chút ấm áp từ tay em
Nhưng biết sao được, hôm nay mình chia tay.

Những tấm hình kỷ niệm của chúng mì...',
    ),
    10 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1935414,
      'music_title_url' => 'buon-khong-em~dat-g',
      'music_title' => 'Buồn Không Em',
      'music_artist' => 'Đạt G',
      'music_artist_id' => '16818',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538983251,
      'music_last_update_time' => 1535503594,
      'music_title_search' => 'bun khong em',
      'music_artist_search' => '; dat g;',
      'music_album_search' => '',
      'music_composer' => 'Đạt G',
      'music_album' => '',
      'music_listen' => 48625,
      'music_track_id' => 0,
      'music_filename' => '1935414-4fdfc32a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Còn buồn không em, sao đêm về lặng im một mình
Chuyện buồn qua chưa? Đừng khóc nữa nước mắt không thừa
Vài giọt tuôn rơi cũng đủ làm tan nát bầu trời
Không nói nên lời cứ im lặng âm thầm ôm đau.

G...',
    ),
    11 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1957861,
      'music_title_url' => 'dieu-gi-den-se-den~ung-hoang-phuc-pham-quynh-anh',
      'music_title' => 'Điều Gì Đến Sẽ Đến',
      'music_artist' => 'Ưng Hoàng Phúc;Phạm Quỳnh Anh',
      'music_artist_id' => '8;189',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538983152,
      'music_last_update_time' => 1538407848,
      'music_title_search' => 'diu d den xe den',
      'music_artist_search' => '; ung hoang phuc; pham qinh em;',
      'music_album_search' => '',
      'music_composer' => 'Tăng Nhật Tuệ',
      'music_album' => '',
      'music_listen' => 2289,
      'music_track_id' => 0,
      'music_filename' => '1957861-1bb6a6fc.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Mình chia tay nhau đi em, sao em lặng im mãi thế.
Vì chắc có lẽ đến lúc chia đôi một giấc mơ.
Dù ai đúng ai sai chẳng nghĩa chi. Nói đi nói đi em ơi. 
Đừng cố giấu nước mắt để anh mang theo nhiều s...',
    ),
    12 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1932204,
      'music_title_url' => 'doi-la-lam-a-nghen~de-choat',
      'music_title' => 'Đời Lạ Lắm À Nghen',
      'music_artist' => 'Dế Choắt',
      'music_artist_id' => '19646',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 8,
      'cover_id' => 0,
      'music_download_time' => 1539071019,
      'music_last_update_time' => 1538030763,
      'music_title_search' => 'doi la lam a nghen',
      'music_artist_search' => '; de choat;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 31244,
      'music_track_id' => 0,
      'music_filename' => '1932204-73337ff5.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Đời, đời này vui à nghen, đời lạ lắm à nghen 
Đừng bon chen rùm ben coi chừng ăn dép là đen 
Đừng tùm lum từa lưa, đừng lúc nắng rồi mưa 
Đừng quan tâm thị phi đôi khi ta biết dư thừa. 

Tầm này là...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1944377,
      'music_title_url' => 'hen-mot-mua-xuan~dan-nguyen',
      'music_title' => 'Hẹn Một Mùa Xuân',
      'music_artist' => 'Đan Nguyên',
      'music_artist_id' => '2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538754135,
      'music_last_update_time' => 1534594910,
      'music_title_search' => 'hen 1 mua xuan',
      'music_artist_search' => '; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Tiến Đạt',
      'music_album' => '',
      'music_listen' => 7133,
      'music_track_id' => 0,
      'music_filename' => '1944377-88f8b04b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Tôi sẽ về khi mùa xuân đơm hoa trước ngõ 
Để em gái nhỏ vẫn thơ ngây 
Tóc thôi biếng chải vì đợi chờ 
Đêm yên giấc ngủ,cơn mơ dỗ ngọt 
Cho môi em đẹp mùa xuân. 

Tôi sẽ về thăm lại dòng sông con ph...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1881669,
      'music_title_url' => 'khuya-nay-anh-di-roi~y-linh',
      'music_title' => 'Khuya Này Anh Đi Rồi',
      'music_artist' => 'Ý Linh',
      'music_artist_id' => '13291',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538974653,
      'music_last_update_time' => 1520040181,
      'music_title_search' => 'khia nai em di roi',
      'music_artist_search' => '; i linh;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kỳ',
      'music_album' => '',
      'music_listen' => 43440,
      'music_track_id' => 0,
      'music_filename' => '1881669-31524783.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Gió lạnh lạnh buồn ơi
Khuya nay anh đi rồi
Bao nhớ nhung xa vời
Tôi nói không nên lời
Để cạn niềm yêu mến em.

Phút gần gũi này thôi
Khuya nay anh đi rồi
Tay nắm tay không rời
Mắt ngắm xa chân trời...',
    ),
    15 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1906381,
      'music_title_url' => 'bua-yeu~bich-phuong',
      'music_title' => 'Bùa Yêu',
      'music_artist' => 'Bích Phương',
      'music_artist_id' => '2907',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539060635,
      'music_last_update_time' => 1526627289,
      'music_title_search' => 'bua iu',
      'music_artist_search' => '; bich phung;',
      'music_album_search' => '',
      'music_composer' => 'Tiên Cookie; Phạm Thanh Hà; Dương K',
      'music_album' => '',
      'music_listen' => 150480,
      'music_track_id' => 0,
      'music_filename' => '1906381-db094402.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Lâu nay em luôn một mình
Lâu không quan tâm đến người nào
Nhưng tim em đang ồn ào
Khi anh quay sang nói lời chào.

Hẹn hò ngay với em đi, đâu có mấy khi
Sao không yêu nhau bây giờ, yêu luôn đi
T...',
    ),
    16 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1917801,
      'music_title_url' => 'dung-quen-ten-anh~hoa-vinh',
      'music_title' => 'Đừng Quên Tên Anh',
      'music_artist' => 'Hoa Vinh',
      'music_artist_id' => '13304',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539041623,
      'music_last_update_time' => 1529716917,
      'music_title_search' => 'dung quen ten em',
      'music_artist_search' => '; hoa vinh;',
      'music_album_search' => '',
      'music_composer' => 'Đạt G',
      'music_album' => '',
      'music_listen' => 48300,
      'music_track_id' => 0,
      'music_filename' => '1917801-351bf064.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Có mấy lúc ta được ngồi lại bên nhau 
Để nói cho em nghe những câu chuyện mà em từng làm cho anh đau
Cố cắn đôi môi để kể lý do tại sao như thế này
Tại sao em ngồi nơi đây còn hồn em bay.

Thế giới...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1944379,
      'music_title_url' => 'nha-anh-nha-em~chau-ngoc-ha',
      'music_title' => 'Nhà Anh Nhà Em',
      'music_artist' => 'Châu Ngọc Hà',
      'music_artist_id' => '20833',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539013698,
      'music_last_update_time' => 1534594899,
      'music_title_search' => 'nha em nha em',
      'music_artist_search' => '; chau ngoc ha;',
      'music_album_search' => '',
      'music_composer' => 'Anh Sơn; Lời: Hà Liên Tử',
      'music_album' => '',
      'music_listen' => 18919,
      'music_track_id' => 0,
      'music_filename' => '1944379-ff344e3c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nhà anh nhà em cách hai đoạn đường dài
Tuy xa mà gần tuy gần mà xa
Rồi còn xa mấy nữa khi em đi lấy chồng
Một chiều thu úa lá, một con đò sang sông
Một cõi lòng băng giá, một thoáng buồn mênh mông....',
    ),
    18 => 
    array (
      'music_downloads_today' => 5,
      'music_id' => 1955568,
      'music_title_url' => 'thanh-xuan~da-lab',
      'music_title' => 'Thanh Xuân',
      'music_artist' => 'Da LAB',
      'music_artist_id' => '13701',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539062708,
      'music_last_update_time' => 1538029901,
      'music_title_search' => 'thanh xuan',
      'music_artist_search' => '; da lab;',
      'music_album_search' => '',
      'music_composer' => 'Da LAB',
      'music_album' => '',
      'music_listen' => 517,
      'music_track_id' => 0,
      'music_filename' => '1955568-1348b642.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro/Outro:]
Hôm nay ta thức dậy cũng như thường nhật 
Thấy thanh xuân ngày nào bỗng dưng trở lại 
Em soi gương cười duyên chẳng còn thấy đâu những vết đồi mồi 
Mặc một chiếc váy xinh ngồi chờ an...',
    ),
    19 => 
    array (
      'music_downloads_today' => 7,
      'music_id' => 1930241,
      'music_title_url' => 'ngay-sau-se-ra-sao~thien-quang-phuong-anh',
      'music_title' => 'Ngày Sau Sẽ Ra Sao',
      'music_artist' => 'Thiên Quang;Phương Anh',
      'music_artist_id' => '4784;1430',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539067865,
      'music_last_update_time' => 1531873781,
      'music_title_search' => 'ngai xau xe ra xao',
      'music_artist_search' => '; thin quang; phung em;',
      'music_album_search' => '',
      'music_composer' => 'Minh Kỳ; Lê Dinh',
      'music_album' => '',
      'music_listen' => 16690,
      'music_track_id' => 0,
      'music_filename' => '1930241-7d937f00.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ngày xưa tôi có quen một người em gái nhỏ
Tuổi đang mười sáu mái tóc chớm ngang vai
Tình như nụ hoa nở trong lòng đời ngọt ngào.

Rồi yêu thương ai đem ghép cho đôi tim non
Đến xuân qua cho nhau th...',
    ),
    20 => 
    array (
      'music_downloads_today' => 36,
      'music_id' => 1950470,
      'music_title_url' => 'nguoi-hay-quen-anh-di~bang-kieu-anh-khang',
      'music_title' => 'Người Hãy Quên Anh Đi',
      'music_artist' => 'Bằng Kiều;Anh Khang',
      'music_artist_id' => '1258;2095',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539072350,
      'music_last_update_time' => 1536051366,
      'music_title_search' => 'ngui hai quen em di',
      'music_artist_search' => '; bang kiu; em khang;',
      'music_album_search' => '',
      'music_composer' => 'Khắc Hưng',
      'music_album' => '',
      'music_listen' => 92101,
      'music_track_id' => 0,
      'music_filename' => '1950470-95a46211.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Người yêu hỡi dù gì cũng xa nhau rồi
Ngày nào chiếc hôn bao đêm rã rời giờ đã hết rồi
Chẳng còn hơi ấm trên đầu môi
Người yêu hỡi giờ đây tiếng yêu phai phôi
Chỉ còn những đêm cô đơn rối bời giọ...',
      'music_artist_html' => '<a href="/ca-si/Bang-Kieu~Y3NuX2FydGlzdH4xMjU4.html">Bằng Kiều</a>, <a href="/ca-si/Anh-Khang~Y3NuX2FydGlzdH4yMDk1.html">Anh Khang</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 28,
      'music_id' => 1948161,
      'music_title_url' => 'em-muon-anh-dua-em-ve~ho-ngoc-ha',
      'music_title' => 'Em Muốn Anh Đưa Em Về',
      'music_artist' => 'Hồ Ngọc Hà',
      'music_artist_id' => '1468',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539075956,
      'music_last_update_time' => 1536120417,
      'music_title_search' => 'em mun em dua em ve',
      'music_artist_search' => '; ho ngoc ha;',
      'music_album_search' => '',
      'music_composer' => 'Đỗ Hiếu',
      'music_album' => '',
      'music_listen' => 36323,
      'music_track_id' => 0,
      'music_filename' => '1948161-1c7480d3.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Trời đang tối cơn mưa phùn
Hôm nay ta hẹn nhau lần đầu tiên
Nhìn ánh mắt anh ngại ngùng
Nhẹ nhàng đặt nụ hồng lên môi em.

Nghe trong em từng khao khát như muốn đoạ
Cay đắng như đã dừng lại...
V...',
      'music_artist_html' => '<a href="/ca-si/Ho-Ngoc-Ha~Y3NuX2FydGlzdH4xNDY4.html">Hồ Ngọc Hà</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 9,
      'music_id' => 1951590,
      'music_title_url' => 'tan-tro~lan-nha-tuan-kha',
      'music_title' => 'Tàn Tro',
      'music_artist' => 'Lân Nhã;Tuấn Kha',
      'music_artist_id' => '3783;23433',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539068618,
      'music_last_update_time' => 1536541012,
      'music_title_search' => 'tan cho',
      'music_artist_search' => '; lan nha; tuan kha;',
      'music_album_search' => '',
      'music_composer' => 'Lời: Khúc Lan',
      'music_album' => '',
      'music_listen' => 16177,
      'music_track_id' => 0,
      'music_filename' => '1951590-3a814e61.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Giọt nước rơi hay giọt sầu rơi rơi
Lệ vẫn tuôn khóc tình ta nát tan
Thu vẫn trôi giờ biệt ly đến
Anh về đi em vẫn đứng đây.

Nhìn lá rơi nghe lòng ta tan tác
Từng xác hoa phai tàn theo cuối xuân...',
      'music_artist_html' => '<a href="/ca-si/Lan-Nha~Y3NuX2FydGlzdH4zNzgz.html">Lân Nhã</a>, <a href="/ca-si/Tuan-Kha~Y3NuX2FydGlzdH4yMzQzMw==.html">Tuấn Kha</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 17,
      'music_id' => 1956331,
      'music_title_url' => 'canh-hong-phai~hoang-yen-chibi',
      'music_title' => 'Cánh Hồng Phai',
      'music_artist' => 'Hoàng Yến Chibi',
      'music_artist_id' => '4578',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539071263,
      'music_last_update_time' => 1538029108,
      'music_title_search' => 'canh hong phai',
      'music_artist_search' => '; hoang in chibi;',
      'music_album_search' => '',
      'music_composer' => 'Dương Khắc Linh',
      'music_album' => '',
      'music_listen' => 5146,
      'music_track_id' => 0,
      'music_filename' => '1956331-09b15e57.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Nàng như một đoá hồng phai
Hương sắc héo hon theo những ngày dài
Cuộc tình đi qua trong em mang bao tiếc nuối
Trái tim vỡ tan.

Nhặt lại từng cánh rụng rơi
Nàng vẫn xót xa cho chính đời mình
Vì...',
      'music_artist_html' => '<a href="/ca-si/Hoang-Yen-Chibi~Y3NuX2FydGlzdH40NTc4.html">Hoàng Yến Chibi</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 10,
      'music_id' => 1955292,
      'music_title_url' => 'con-yeu-dau-ai-roi-di~duc-phuc',
      'music_title' => 'Còn Yêu, Đâu Ai Rời Đi',
      'music_artist' => 'Đức Phúc',
      'music_artist_id' => '15824',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539074817,
      'music_last_update_time' => 1537767039,
      'music_title_search' => 'con iu dau ai roi di',
      'music_artist_search' => '; duc phuc;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Hồng Thuận',
      'music_album' => '',
      'music_listen' => 6212,
      'music_track_id' => 0,
      'music_filename' => '1955292-9ad9bee6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Cuộc tình đầu tiên khi tôi 20
Tôi yêu với những tinh khôi
Sinh viên thì như thế thôi
Chỉ có tiếng hát nụ cười.

Rồi người rời xa bằng lời chê bai
Người trách tôi không tương lai
Tim tôi chỉ biết...',
      'music_artist_html' => '<a href="/ca-si/Duc-Phuc~Y3NuX2FydGlzdH4xNTgyNA==.html">Đức Phúc</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1955116,
      'music_title_url' => 'tim-anh-that-lai~ho-quang-hieu',
      'music_title' => 'Tim Anh Thắt Lại',
      'music_artist' => 'Hồ Quang Hiếu',
      'music_artist_id' => '1991',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539009143,
      'music_last_update_time' => 1537807881,
      'music_title_search' => 'tim em that lai',
      'music_artist_search' => '; ho quang hiu;',
      'music_album_search' => '',
      'music_composer' => 'Wendy Thảo',
      'music_album' => '',
      'music_listen' => 11766,
      'music_track_id' => 0,
      'music_filename' => '1955116-116a9771.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ngày em đi, con tim tôi như thắt lại
Giọt nước mắt cố nén trong lòng
Rồi ngày mai, ngày sau sẽ không còn bên nhau nữa.

Tại vì tôi hay đôi môi ai quá nồng nàn?
Làm tim em phút chốc mơ hồ
Gạt bỏ đi...',
      'music_artist_html' => '<a href="/ca-si/Ho-Quang-Hieu~Y3NuX2FydGlzdH4xOTkx.html">Hồ Quang Hiếu</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1930880,
      'music_title_url' => 'co-ai-thuong-em-nhu-anh~toc-tien',
      'music_title' => 'Có Ai Thương Em Như Anh',
      'music_artist' => 'Tóc Tiên',
      'music_artist_id' => '343',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539066582,
      'music_last_update_time' => 1532054963,
      'music_title_search' => 'co ai thung em nhu em',
      'music_artist_search' => '; toc tin;',
      'music_album_search' => '',
      'music_composer' => 'Bùi Công Nam; Touliver; Minh Đạt',
      'music_album' => '',
      'music_listen' => 57689,
      'music_track_id' => 0,
      'music_filename' => '1930880-cdc0fb2f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Đường về chiều mưa rơi thấy anh cùng ai bước chung
Bỗng nhiên bao nhiêu ký ức quen thuộc cứ hiện lên làm em thấy buồn
Hình như anh đang vui vì thấy anh mỉm cười rất tươi
Nắm tay anh rồi ai đó ôm...',
      'music_artist_html' => '<a href="/ca-si/Toc-Tien~Y3NuX2FydGlzdH4zNDM=.html">Tóc Tiên</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1947243,
      'music_title_url' => 'de-cho-em-khoc~minh-tuyet',
      'music_title' => 'Để Cho Em Khóc',
      'music_artist' => 'Minh Tuyết',
      'music_artist_id' => '30',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539003965,
      'music_last_update_time' => 1535176925,
      'music_title_search' => 'de cho em khoc',
      'music_artist_search' => '; minh tit;',
      'music_album_search' => '',
      'music_composer' => 'Phúc Trường',
      'music_album' => '',
      'music_listen' => 14874,
      'music_track_id' => 0,
      'music_filename' => '1947243-7a0f5d9c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Chỉ là em muốn ôm chặt anh lúc này
Giữ chặt anh lúc này không buông tay
Để cho em khóc, thêm một lần nữa thôi
Thêm một lần cuối cùng, rồi ta sẽ rời xa.
 
Vậy là kết thúc sau nhiều năm nói cười
Ta c...',
      'music_artist_html' => '<a href="/ca-si/Minh-Tuyet~Y3NuX2FydGlzdH4zMA==.html">Minh Tuyết</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1951855,
      'music_title_url' => 'ta-phu-nhau-roi~luu-bich-to-chan-phong',
      'music_title' => 'Ta Phụ Nhau Rồi',
      'music_artist' => 'Lưu Bích;Tô Chấn Phong',
      'music_artist_id' => '205;204',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538999154,
      'music_last_update_time' => 1536540812,
      'music_title_search' => 'ta phu nhau roi',
      'music_artist_search' => '; lu bich; to chan phong;',
      'music_album_search' => '',
      'music_composer' => 'Nguyễn Hồng Thuận',
      'music_album' => '',
      'music_listen' => 3209,
      'music_track_id' => 0,
      'music_filename' => '1951855-10e06e61.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Đêm chia ly, nước mắt hoen mi
Cố bước ra đi để thôi suy nghĩ
Bao năm qua ta đến với nhau
Cho nhau được gì, tay ta còn gì?

Thấy yêu thương đã chết trong nhau
Dối trá cơn đau mà không dám nói
Đi bên...',
      'music_artist_html' => '<a href="/ca-si/Luu-Bich~Y3NuX2FydGlzdH4yMDU=.html">Lưu Bích</a>, <a href="/ca-si/To-Chan-Phong~Y3NuX2FydGlzdH4yMDQ=.html">Tô Chấn Phong</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1951864,
      'music_title_url' => 'tan-cung-noi-nho~will-anvy',
      'music_title' => 'Tận Cùng Nỗi Nhớ',
      'music_artist' => 'Will;Anvy',
      'music_artist_id' => '2133;23486',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539070075,
      'music_last_update_time' => 1536554502,
      'music_title_search' => 'tan cung noi nho',
      'music_artist_search' => '; wil; anvi;',
      'music_album_search' => '',
      'music_composer' => 'Andiez; Đoàn Minh Vũ; Lê Minh Hiếu',
      'music_album' => '',
      'music_listen' => 4782,
      'music_track_id' => 0,
      'music_filename' => '1951864-d047525b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Anh chơi vơi nơi góc phố quen
Mình từng, từng là tất cả
Hôm ấy mây xanh ngát trời
Cố giữ lấy chút ấm áp từ tay em
Nhưng biết sao được, hôm nay mình chia tay.

Những tấm hình kỷ niệm của chúng mì...',
      'music_artist_html' => '<a href="/ca-si/Will~Y3NuX2FydGlzdH4yMTMz.html">Will</a>, <a href="/ca-si/Anvy~Y3NuX2FydGlzdH4yMzQ4Ng==.html">Anvy</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1935414,
      'music_title_url' => 'buon-khong-em~dat-g',
      'music_title' => 'Buồn Không Em',
      'music_artist' => 'Đạt G',
      'music_artist_id' => '16818',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538983251,
      'music_last_update_time' => 1535503594,
      'music_title_search' => 'bun khong em',
      'music_artist_search' => '; dat g;',
      'music_album_search' => '',
      'music_composer' => 'Đạt G',
      'music_album' => '',
      'music_listen' => 48625,
      'music_track_id' => 0,
      'music_filename' => '1935414-4fdfc32a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Còn buồn không em, sao đêm về lặng im một mình
Chuyện buồn qua chưa? Đừng khóc nữa nước mắt không thừa
Vài giọt tuôn rơi cũng đủ làm tan nát bầu trời
Không nói nên lời cứ im lặng âm thầm ôm đau.

G...',
      'music_artist_html' => '<a href="/ca-si/Dat-G~Y3NuX2FydGlzdH4xNjgxOA==.html">Đạt G</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1957861,
      'music_title_url' => 'dieu-gi-den-se-den~ung-hoang-phuc-pham-quynh-anh',
      'music_title' => 'Điều Gì Đến Sẽ Đến',
      'music_artist' => 'Ưng Hoàng Phúc;Phạm Quỳnh Anh',
      'music_artist_id' => '8;189',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538983152,
      'music_last_update_time' => 1538407848,
      'music_title_search' => 'diu d den xe den',
      'music_artist_search' => '; ung hoang phuc; pham qinh em;',
      'music_album_search' => '',
      'music_composer' => 'Tăng Nhật Tuệ',
      'music_album' => '',
      'music_listen' => 2289,
      'music_track_id' => 0,
      'music_filename' => '1957861-1bb6a6fc.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Mình chia tay nhau đi em, sao em lặng im mãi thế.
Vì chắc có lẽ đến lúc chia đôi một giấc mơ.
Dù ai đúng ai sai chẳng nghĩa chi. Nói đi nói đi em ơi. 
Đừng cố giấu nước mắt để anh mang theo nhiều s...',
      'music_artist_html' => '<a href="/ca-si/Ung-Hoang-Phuc~Y3NuX2FydGlzdH44.html">Ưng Hoàng Phúc</a>, <a href="/ca-si/Pham-Quynh-Anh~Y3NuX2FydGlzdH4xODk=.html">Phạm Quỳnh Anh</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1932204,
      'music_title_url' => 'doi-la-lam-a-nghen~de-choat',
      'music_title' => 'Đời Lạ Lắm À Nghen',
      'music_artist' => 'Dế Choắt',
      'music_artist_id' => '19646',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 8,
      'cover_id' => 0,
      'music_download_time' => 1539071019,
      'music_last_update_time' => 1538030763,
      'music_title_search' => 'doi la lam a nghen',
      'music_artist_search' => '; de choat;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 31244,
      'music_track_id' => 0,
      'music_filename' => '1932204-73337ff5.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Đời, đời này vui à nghen, đời lạ lắm à nghen 
Đừng bon chen rùm ben coi chừng ăn dép là đen 
Đừng tùm lum từa lưa, đừng lúc nắng rồi mưa 
Đừng quan tâm thị phi đôi khi ta biết dư thừa. 

Tầm này là...',
      'music_artist_html' => '<a href="/ca-si/De-Choat~Y3NuX2FydGlzdH4xOTY0Ng==.html">Dế Choắt</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1944377,
      'music_title_url' => 'hen-mot-mua-xuan~dan-nguyen',
      'music_title' => 'Hẹn Một Mùa Xuân',
      'music_artist' => 'Đan Nguyên',
      'music_artist_id' => '2347',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538754135,
      'music_last_update_time' => 1534594910,
      'music_title_search' => 'hen 1 mua xuan',
      'music_artist_search' => '; dan ngin;',
      'music_album_search' => '',
      'music_composer' => 'Tiến Đạt',
      'music_album' => '',
      'music_listen' => 7133,
      'music_track_id' => 0,
      'music_filename' => '1944377-88f8b04b.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Tôi sẽ về khi mùa xuân đơm hoa trước ngõ 
Để em gái nhỏ vẫn thơ ngây 
Tóc thôi biếng chải vì đợi chờ 
Đêm yên giấc ngủ,cơn mơ dỗ ngọt 
Cho môi em đẹp mùa xuân. 

Tôi sẽ về thăm lại dòng sông con ph...',
      'music_artist_html' => '<a href="/ca-si/Dan-Nguyen~Y3NuX2FydGlzdH4yMzQ3.html">Đan Nguyên</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1881669,
      'music_title_url' => 'khuya-nay-anh-di-roi~y-linh',
      'music_title' => 'Khuya Này Anh Đi Rồi',
      'music_artist' => 'Ý Linh',
      'music_artist_id' => '13291',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538974653,
      'music_last_update_time' => 1520040181,
      'music_title_search' => 'khia nai em di roi',
      'music_artist_search' => '; i linh;',
      'music_album_search' => '',
      'music_composer' => 'Châu Kỳ',
      'music_album' => '',
      'music_listen' => 43440,
      'music_track_id' => 0,
      'music_filename' => '1881669-31524783.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Gió lạnh lạnh buồn ơi
Khuya nay anh đi rồi
Bao nhớ nhung xa vời
Tôi nói không nên lời
Để cạn niềm yêu mến em.

Phút gần gũi này thôi
Khuya nay anh đi rồi
Tay nắm tay không rời
Mắt ngắm xa chân trời...',
      'music_artist_html' => '<a href="/ca-si/Y-Linh~Y3NuX2FydGlzdH4xMzI5MQ==.html">Ý Linh</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1906381,
      'music_title_url' => 'bua-yeu~bich-phuong',
      'music_title' => 'Bùa Yêu',
      'music_artist' => 'Bích Phương',
      'music_artist_id' => '2907',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539060635,
      'music_last_update_time' => 1526627289,
      'music_title_search' => 'bua iu',
      'music_artist_search' => '; bich phung;',
      'music_album_search' => '',
      'music_composer' => 'Tiên Cookie; Phạm Thanh Hà; Dương K',
      'music_album' => '',
      'music_listen' => 150480,
      'music_track_id' => 0,
      'music_filename' => '1906381-db094402.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. Lâu nay em luôn một mình
Lâu không quan tâm đến người nào
Nhưng tim em đang ồn ào
Khi anh quay sang nói lời chào.

Hẹn hò ngay với em đi, đâu có mấy khi
Sao không yêu nhau bây giờ, yêu luôn đi
T...',
      'music_artist_html' => '<a href="/ca-si/Bich-Phuong~Y3NuX2FydGlzdH4yOTA3.html">Bích Phương</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1917801,
      'music_title_url' => 'dung-quen-ten-anh~hoa-vinh',
      'music_title' => 'Đừng Quên Tên Anh',
      'music_artist' => 'Hoa Vinh',
      'music_artist_id' => '13304',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539041623,
      'music_last_update_time' => 1529716917,
      'music_title_search' => 'dung quen ten em',
      'music_artist_search' => '; hoa vinh;',
      'music_album_search' => '',
      'music_composer' => 'Đạt G',
      'music_album' => '',
      'music_listen' => 48300,
      'music_track_id' => 0,
      'music_filename' => '1917801-351bf064.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Có mấy lúc ta được ngồi lại bên nhau 
Để nói cho em nghe những câu chuyện mà em từng làm cho anh đau
Cố cắn đôi môi để kể lý do tại sao như thế này
Tại sao em ngồi nơi đây còn hồn em bay.

Thế giới...',
      'music_artist_html' => '<a href="/ca-si/Hoa-Vinh~Y3NuX2FydGlzdH4xMzMwNA==.html">Hoa Vinh</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1944379,
      'music_title_url' => 'nha-anh-nha-em~chau-ngoc-ha',
      'music_title' => 'Nhà Anh Nhà Em',
      'music_artist' => 'Châu Ngọc Hà',
      'music_artist_id' => '20833',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539013698,
      'music_last_update_time' => 1534594899,
      'music_title_search' => 'nha em nha em',
      'music_artist_search' => '; chau ngoc ha;',
      'music_album_search' => '',
      'music_composer' => 'Anh Sơn; Lời: Hà Liên Tử',
      'music_album' => '',
      'music_listen' => 18919,
      'music_track_id' => 0,
      'music_filename' => '1944379-ff344e3c.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Nhà anh nhà em cách hai đoạn đường dài
Tuy xa mà gần tuy gần mà xa
Rồi còn xa mấy nữa khi em đi lấy chồng
Một chiều thu úa lá, một con đò sang sông
Một cõi lòng băng giá, một thoáng buồn mênh mông....',
      'music_artist_html' => '<a href="/ca-si/Chau-Ngoc-Ha~Y3NuX2FydGlzdH4yMDgzMw==.html">Châu Ngọc Hà</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 5,
      'music_id' => 1955568,
      'music_title_url' => 'thanh-xuan~da-lab',
      'music_title' => 'Thanh Xuân',
      'music_artist' => 'Da LAB',
      'music_artist_id' => '13701',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539062708,
      'music_last_update_time' => 1538029901,
      'music_title_search' => 'thanh xuan',
      'music_artist_search' => '; da lab;',
      'music_album_search' => '',
      'music_composer' => 'Da LAB',
      'music_album' => '',
      'music_listen' => 517,
      'music_track_id' => 0,
      'music_filename' => '1955568-1348b642.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro/Outro:]
Hôm nay ta thức dậy cũng như thường nhật 
Thấy thanh xuân ngày nào bỗng dưng trở lại 
Em soi gương cười duyên chẳng còn thấy đâu những vết đồi mồi 
Mặc một chiếc váy xinh ngồi chờ an...',
      'music_artist_html' => '<a href="/ca-si/Da-LAB~Y3NuX2FydGlzdH4xMzcwMQ==.html">Da LAB</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 7,
      'music_id' => 1930241,
      'music_title_url' => 'ngay-sau-se-ra-sao~thien-quang-phuong-anh',
      'music_title' => 'Ngày Sau Sẽ Ra Sao',
      'music_artist' => 'Thiên Quang;Phương Anh',
      'music_artist_id' => '4784;1430',
      'cat_id' => 1,
      'cat_level' => 1,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539067865,
      'music_last_update_time' => 1531873781,
      'music_title_search' => 'ngai xau xe ra xao',
      'music_artist_search' => '; thin quang; phung em;',
      'music_album_search' => '',
      'music_composer' => 'Minh Kỳ; Lê Dinh',
      'music_album' => '',
      'music_listen' => 16690,
      'music_track_id' => 0,
      'music_filename' => '1930241-7d937f00.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Ngày xưa tôi có quen một người em gái nhỏ
Tuổi đang mười sáu mái tóc chớm ngang vai
Tình như nụ hoa nở trong lòng đời ngọt ngào.

Rồi yêu thương ai đem ghép cho đôi tim non
Đến xuân qua cho nhau th...',
      'music_artist_html' => '<a href="/ca-si/Thien-Quang~Y3NuX2FydGlzdH40Nzg0.html">Thiên Quang</a>, <a href="/ca-si/Phuong-Anh~Y3NuX2FydGlzdH4xNDMw.html">Phương Anh</a>',
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1913302,
      'music_title_url' => 'girls-like-you~maroon-5-cardi-b',
      'music_title' => 'Girls Like You',
      'music_artist' => 'Maroon 5;Cardi B',
      'music_artist_id' => '4678;14993',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539040363,
      'music_last_update_time' => 1527819767,
      'music_title_search' => 'drlx like iou',
      'music_artist_search' => '; maron 5; cardi b;',
      'music_album_search' => '',
      'music_composer' => 'Jason Evigan; Cardi B; Starrah; Cirkut; Adam Levine',
      'music_album' => '',
      'music_listen' => 72316,
      'music_track_id' => 1,
      'music_filename' => '1913302-99b0ecde.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Verse 1: Adam Levine]
Spent 24 hours, I need more hours with you
You spent the weekend getting even, ooh
We spent the late nights making things right between us.

[Pre-Chorus: Adam Levine]
But now...',
    ),
    1 => 
    array (
      'music_downloads_today' => 9,
      'music_id' => 1948831,
      'music_title_url' => 'thunderclouds~lsd',
      'music_title' => 'Thunderclouds',
      'music_artist' => 'LSD',
      'music_artist_id' => '14504',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539072785,
      'music_last_update_time' => 1536053961,
      'music_title_search' => 'thundercloudx',
      'music_artist_search' => '; lxd;',
      'music_album_search' => '',
      'music_composer' => 'Jr. Blender; King Henry; Sia; Labrinth; Diplo',
      'music_album' => '',
      'music_listen' => 12236,
      'music_track_id' => 1,
      'music_filename' => '1948831-ed8bca2a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: Sia]
All I need is one
[t1]Tất cả những gì em cần chỉ là một
One old man is enough
[t1]Một người đàn ông trưởng thành thôi là đủ
Babe, you gotta
[t1]Anh ơi, anh chì cần
Just turn your fea...',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1867949,
      'music_title_url' => 'for-you~liam-payne-rita-ora',
      'music_title' => 'For You',
      'music_artist' => 'Liam Payne;Rita Ora',
      'music_artist_id' => '13435;2708',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538985812,
      'music_last_update_time' => 1517649046,
      'music_title_search' => 'for iou',
      'music_artist_search' => '; liam paine; rita ora;',
      'music_album_search' => '',
      'music_composer' => 'Watt; Ali Tamposi; Ali Payami',
      'music_album' => '',
      'music_listen' => 77777,
      'music_track_id' => 0,
      'music_filename' => '1867949-c2220711.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: Rita Ora]
In your eyes, I\'m alive
Inside you\'re beautiful
Something so unusual in your eyes
I know I\'m home (yeah)
Every tear, every fear
Gone with the thought of you
Changing what I thou...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1898101,
      'music_title_url' => 'call-out-my-name~the-weeknd',
      'music_title' => 'Call Out My Name',
      'music_artist' => 'The Weeknd',
      'music_artist_id' => '14618',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539025193,
      'music_last_update_time' => 1523671774,
      'music_title_search' => 'cal out mi name',
      'music_artist_search' => '; the weknd;',
      'music_album_search' => '',
      'music_composer' => 'Frank Dukes; Nicolas Jaar; The Weeknd',
      'music_album' => '',
      'music_listen' => 2520,
      'music_track_id' => 0,
      'music_filename' => '1898101-c44558f5.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
We found each other
[t1]Hai ta gặp được nhau
I helped you out of a broken place
[t1]Anh giải thoát em khỏi nơi con tim tan vỡ
You gave me comfort
[t1]Em trao anh sự khuây khoả
But fallin...',
    ),
    4 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1952956,
      'music_title_url' => 'burn-out~martin-garrix',
      'music_title' => 'Burn Out',
      'music_artist' => 'Martin Garrix',
      'music_artist_id' => '13343',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539001011,
      'music_last_update_time' => 1537270962,
      'music_title_search' => 'burn out',
      'music_artist_search' => '; martin garix;',
      'music_album_search' => '',
      'music_composer' => 'Martin Garrix; Justin Mylo; Dewain Whitmore',
      'music_album' => '',
      'music_listen' => 3885,
      'music_track_id' => 0,
      'music_filename' => '1952956-a5f352f8.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
Flash far, I\'m coming for ya
You\'re gonna fill me like the summer, like the sun in your eyes
Hold tight, another minute
Another hour, baby, imma\' show you.

[Pre-Chorus:]
You can rely on...',
    ),
    5 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1906330,
      'music_title_url' => 'audio~lsd-sia-diplo-labrinth',
      'music_title' => 'Audio',
      'music_artist' => 'LSD;Sia;Diplo;Labrinth',
      'music_artist_id' => '14504;9255;8835;4738',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538959492,
      'music_last_update_time' => 1526235854,
      'music_title_search' => 'audio',
      'music_artist_search' => '; lxd; xia; diplo; labrinth;',
      'music_album_search' => '',
      'music_composer' => 'King Henry; Labrinth; Gustave Rudman; Sia; Diplo; Jr. Blender',
      'music_album' => '',
      'music_listen' => 17266,
      'music_track_id' => 0,
      'music_filename' => '1906330-52844ae4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: Sia &amp; Labrinth]
We got a ride, we got the night
I got the bottle, you got the light
We got the stars (stars)
We got audio.

We\'re gonna fly, we\'re getting high
You got the moon dust,...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1907318,
      'music_title_url' => 'my-heart-will-go-on~celine-dion',
      'music_title' => 'My Heart Will Go On',
      'music_artist' => 'Celine Dion',
      'music_artist_id' => '192',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538924345,
      'music_last_update_time' => 1529467154,
      'music_title_search' => 'mi heart wil go on',
      'music_artist_search' => '; celine dion;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4600,
      'music_track_id' => 0,
      'music_filename' => '1907318-d69bb6ae.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Every night in my dreams i see you, i feel you
That is how i know you go on
Far across the distance 
And spaces between us 
You have come to show you go on.

[Chorus:]
Near, far, wherever you ar...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1913254,
      'music_title_url' => 'solo~clean-bandit-demi-lovato',
      'music_title' => 'Solo',
      'music_artist' => 'Clean Bandit;Demi Lovato',
      'music_artist_id' => '13836;965',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538932399,
      'music_last_update_time' => 1527819789,
      'music_title_search' => 'xolo',
      'music_artist_search' => '; clean bandit; demi lovato;',
      'music_album_search' => '',
      'music_composer' => 'Jack Patterson; Grace Chatto; Fred Gibson; Camille Purcell; Demi Lovato',
      'music_album' => '',
      'music_listen' => 15134,
      'music_track_id' => 1,
      'music_filename' => '1913254-2d255fef.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
It solo, solo, everybody
[t1]Đây là cơ chế tự thoát nước, thưa quý vị
It solo, everybody
[t1]Tự giải toả
It solo, solo, everybody
[t1]Tự khiến mình cảm thấy hạnh phúc
Woop woop woop woop w...',
    ),
    8 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1929105,
      'music_title_url' => 'summer-on-you~prettymuch',
      'music_title' => 'Summer on You',
      'music_artist' => 'PRETTYMUCH',
      'music_artist_id' => '13499',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538997966,
      'music_last_update_time' => 1531752536,
      'music_title_search' => 'xumer on iou',
      'music_artist_search' => '; pretimuch;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3914,
      'music_track_id' => 0,
      'music_filename' => '1929105-b44ad0d0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Brandon]
Baby, I ain\'t got no money
All I got is time
And I\'m gon\' spend that time on you
But when they pay me
And I can buy the sunshine
Take you away, we\'ll drink champagne
While holed up...',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1904347,
      'music_title_url' => 'one-kiss~calvin-harris-dua-lipa',
      'music_title' => 'One Kiss',
      'music_artist' => 'Calvin Harris;Dua Lipa',
      'music_artist_id' => '2474;14519',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538841670,
      'music_last_update_time' => 1525390919,
      'music_title_search' => '1 kix',
      'music_artist_search' => '; calvin harix; dua lipa;',
      'music_album_search' => '',
      'music_composer' => 'Jessie Reyez; Dua Lipa; Calvin Harris',
      'music_album' => '',
      'music_listen' => 3704,
      'music_track_id' => 0,
      'music_filename' => '1904347-3e4b5f1a.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Chorus:]
One kiss is all it takes
[t1]Em chỉ cần một nụ hôn thôi
Fallin\' in love with me
[t1]Hãy yêu em đi
Possibilities
[t1]Em nói thật đó
I look like all you need.
[t1]Có vẻ như, tất cả những gì...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1924918,
      'music_title_url' => 'simple~florida-georgia-line',
      'music_title' => 'Simple',
      'music_artist' => 'Florida Georgia Line',
      'music_artist_id' => '18141',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538931028,
      'music_last_update_time' => 1530845948,
      'music_title_search' => 'ximple',
      'music_artist_search' => '; florida georda line;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4064,
      'music_track_id' => 0,
      'music_filename' => '1924918-3aa0cda8.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Verse 1:]
The way your fingers fit in mine
It\'s five plus five, not rocket science
This day in time, that\'s hard to find, it\'s true
The road we\'re on ain\'t a traffic jam
It\'s a Sunday drive on a p...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1862847,
      'music_title_url' => 'idontwannabeyouanymore~billie-eilish',
      'music_title' => 'Idontwannabeyouanymore',
      'music_artist' => 'Billie Eilish',
      'music_artist_id' => '13400',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538906713,
      'music_last_update_time' => 1515823713,
      'music_title_search' => 'idontwanabeiouanimore',
      'music_artist_search' => '; bili eilith;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1602,
      'music_track_id' => 0,
      'music_filename' => '1862847-132afb2c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
Don\'t be that way
Fall apart twice a day
I just wish you could feel what you say
Show, never tell
But I know you too well
Kind of mood that you wish you could sell.

[Chorus:]
If teardro...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1904809,
      'music_title_url' => 'caterpillar~eminem-royce-da-59-king-green',
      'music_title' => 'Caterpillar',
      'music_artist' => 'Eminem, Royce Da 5\'9, King Green',
      'music_artist_id' => '14669',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538727168,
      'music_last_update_time' => 1525576397,
      'music_title_search' => 'caterpilar',
      'music_artist_search' => '; eminem roice da 5 9 king gren;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2296,
      'music_track_id' => 0,
      'music_filename' => '1904809-9eb6785c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'The hem of her dress spills over
What covers the seat
N\'flutters in the breeze like 
Caterpillars on a leaf.

Hair the hue of lions
beaches dried by morning suns
Promise you will write me a poem
Of...',
    ),
    13 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1943854,
      'music_title_url' => 'solo-feat-demi-lovato-japan-edition~clean-bandit',
      'music_title' => 'Solo feat. Demi Lovato [Japan Edition]',
      'music_artist' => 'Clean Bandit',
      'music_artist_id' => '13836',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539012954,
      'music_last_update_time' => 1534501663,
      'music_title_search' => 'xolo feat demi lovato; japan edition',
      'music_artist_search' => '; clean bandit;',
      'music_album_search' => '',
      'music_composer' => 'Jack Patterson; Grace Chatto; Fred Gibson; Camille Purcell; Demi Lovato',
      'music_album' => '',
      'music_listen' => 4514,
      'music_track_id' => 0,
      'music_filename' => '1943854-65736a82.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro]
It solo, solo, everybody
[t1]Đây là cơ chế tự thoát nước, thưa quý vị
It solo, everybody
[t1]Tự giải toả
It solo, solo, everybody
[t1]Tự khiến mình cảm thấy hạnh phúc
Woop woop woop woop wo...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1929110,
      'music_title_url' => 'be-alright~dean-lewis',
      'music_title' => 'Be Alright',
      'music_artist' => 'Dean Lewis',
      'music_artist_id' => '19601',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538918138,
      'music_last_update_time' => 1531753322,
      'music_title_search' => 'be alright',
      'music_artist_search' => '; dean lewix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11220,
      'music_track_id' => 0,
      'music_filename' => '1929110-c5627b0d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I look up from the ground to see your sad and teary eyes
You look away from me
And I see there\'s something you\'re trying to hide, and I
I reach for your hand
But it\'s cold, you pull away again
A...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1937279,
      'music_title_url' => 'darkside~alan-walker-aura-tomine-harket',
      'music_title' => 'Darkside',
      'music_artist' => 'Alan Walker;Au/Ra;Tomine Harket',
      'music_artist_id' => '14991;20451;20450',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538833567,
      'music_last_update_time' => 1533266286,
      'music_title_search' => 'darkxide',
      'music_artist_search' => '; alan walker; au;ra; tomine harket;',
      'music_album_search' => '',
      'music_composer' => 'Alan Walker; Lars Kristian Rosness; Marcus Arnbekk; Fredrik Borch Olsen; Anders Froen; Gunnar Greve; James Njie; Jesper Borgen; Tommy LaVerdi; Atle Pettersen; William Wiik Larsen; Jamie Stenzel; Andrew Frampton',
      'music_album' => '',
      'music_listen' => 20021,
      'music_track_id' => 0,
      'music_filename' => '1937279-d5ea3a1c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Verse 1: Tomine Harket]
We\'re not in love
[t1]Chúng ta không hề yêu nhau
We share no stories
[t1]Và câu chuyện của mỗi người cũng khác biệt
Just something in your eyes
[t1]Nhưng có điều gì đó tron...',
    ),
    16 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1953112,
      'music_title_url' => 'happy-now~zedd-elley-duhe',
      'music_title' => 'Happy Now',
      'music_artist' => 'Zedd;Elley Duhé',
      'music_artist_id' => '3785;19951',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539003281,
      'music_last_update_time' => 1537269680,
      'music_title_search' => 'hapi now',
      'music_artist_search' => '; zed; elei duhe;',
      'music_album_search' => '',
      'music_composer' => 'Noonie Bao; Sarah Aarons; Linus Wiklund; Anton Zaslavski',
      'music_album' => '',
      'music_listen' => 990,
      'music_track_id' => 0,
      'music_filename' => '1953112-765ee42f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Chorus: Elley Duhé]
You\'re a world away
[t1]Anh giờ đây đã ở một chân trời xa
Somewhere in the crowd
[t1]Một nơi nào đó giữa dòng người tấp nập
In a foreign place
[t1]Một nơi nào đó xa lạ
Are you...',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1957869,
      'music_title_url' => 'more-than-friends~jason-mraz-meghan-trainor',
      'music_title' => 'More Than Friends',
      'music_artist' => 'Jason Mraz;Meghan Trainor',
      'music_artist_id' => '941;14983',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538741677,
      'music_last_update_time' => 1538407885,
      'music_title_search' => 'more than frindx',
      'music_artist_search' => '; jaxon mraz; meghan chainor;',
      'music_album_search' => '',
      'music_composer' => 'Jason Mraz; Meghan Trainor',
      'music_album' => '',
      'music_listen' => 327,
      'music_track_id' => 0,
      'music_filename' => '1957869-52f10a07.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: Jason Mraz]
It feels like we\'ve been friends forever, yeah
[t1]Cảm giác như ta đã là bạn của nhau suốt cuộc đời
And we always see eye to eye
[t1]Và lúc nào, ánh mắt ta cũng gặp nhau
The m...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1862854,
      'music_title_url' => 'anxiety~blackbear-frnd',
      'music_title' => 'Anxiety',
      'music_artist' => 'Blackbear;FRND',
      'music_artist_id' => '16687;19994',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538707786,
      'music_last_update_time' => 1515722563,
      'music_title_search' => 'anxiti',
      'music_artist_search' => '; blackbear; frnd;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 796,
      'music_track_id' => 0,
      'music_filename' => '1862854-9a38e8f8.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Blackbear]
Yeah, yeah, yeah
Yeah, yeah.

[Verse: Blackbear]
Every time you cross my mind you get right under my skin
Am I crazy out my mind the situation I\'m in
And it gets harder just to b...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1863357,
      'music_title_url' => 'idgaf~dua-lipa',
      'music_title' => 'IDGAF',
      'music_artist' => 'Dua Lipa',
      'music_artist_id' => '14519',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538475560,
      'music_last_update_time' => 1515823803,
      'music_title_search' => 'idgaf',
      'music_artist_search' => '; dua lipa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7400,
      'music_track_id' => 0,
      'music_filename' => '1863357-34f22ebe.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
You call me all friendly
Tellin\' me how much you miss me
That\'s funny, I guess you\'ve heard my songs
Well, I\'m too busy for your business
Go find a girl who wants to listen
\'Cause if you...',
    ),
    20 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1913302,
      'music_title_url' => 'girls-like-you~maroon-5-cardi-b',
      'music_title' => 'Girls Like You',
      'music_artist' => 'Maroon 5;Cardi B',
      'music_artist_id' => '4678;14993',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539040363,
      'music_last_update_time' => 1527819767,
      'music_title_search' => 'drlx like iou',
      'music_artist_search' => '; maron 5; cardi b;',
      'music_album_search' => '',
      'music_composer' => 'Jason Evigan; Cardi B; Starrah; Cirkut; Adam Levine',
      'music_album' => '',
      'music_listen' => 72316,
      'music_track_id' => 1,
      'music_filename' => '1913302-99b0ecde.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Verse 1: Adam Levine]
Spent 24 hours, I need more hours with you
You spent the weekend getting even, ooh
We spent the late nights making things right between us.

[Pre-Chorus: Adam Levine]
But now...',
      'music_artist_html' => '<a href="/ca-si/Maroon-5~Y3NuX2FydGlzdH40Njc4.html">Maroon 5</a>, <a href="/ca-si/Cardi-B~Y3NuX2FydGlzdH4xNDk5Mw==.html">Cardi B</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 9,
      'music_id' => 1948831,
      'music_title_url' => 'thunderclouds~lsd',
      'music_title' => 'Thunderclouds',
      'music_artist' => 'LSD',
      'music_artist_id' => '14504',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539072785,
      'music_last_update_time' => 1536053961,
      'music_title_search' => 'thundercloudx',
      'music_artist_search' => '; lxd;',
      'music_album_search' => '',
      'music_composer' => 'Jr. Blender; King Henry; Sia; Labrinth; Diplo',
      'music_album' => '',
      'music_listen' => 12236,
      'music_track_id' => 1,
      'music_filename' => '1948831-ed8bca2a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: Sia]
All I need is one
[t1]Tất cả những gì em cần chỉ là một
One old man is enough
[t1]Một người đàn ông trưởng thành thôi là đủ
Babe, you gotta
[t1]Anh ơi, anh chì cần
Just turn your fea...',
      'music_artist_html' => '<a href="/ca-si/LSD~Y3NuX2FydGlzdH4xNDUwNA==.html">LSD</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1867949,
      'music_title_url' => 'for-you~liam-payne-rita-ora',
      'music_title' => 'For You',
      'music_artist' => 'Liam Payne;Rita Ora',
      'music_artist_id' => '13435;2708',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538985812,
      'music_last_update_time' => 1517649046,
      'music_title_search' => 'for iou',
      'music_artist_search' => '; liam paine; rita ora;',
      'music_album_search' => '',
      'music_composer' => 'Watt; Ali Tamposi; Ali Payami',
      'music_album' => '',
      'music_listen' => 77777,
      'music_track_id' => 0,
      'music_filename' => '1867949-c2220711.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: Rita Ora]
In your eyes, I\'m alive
Inside you\'re beautiful
Something so unusual in your eyes
I know I\'m home (yeah)
Every tear, every fear
Gone with the thought of you
Changing what I thou...',
      'music_artist_html' => '<a href="/ca-si/Liam-Payne~Y3NuX2FydGlzdH4xMzQzNQ==.html">Liam Payne</a>, <a href="/ca-si/Rita-Ora~Y3NuX2FydGlzdH4yNzA4.html">Rita Ora</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1898101,
      'music_title_url' => 'call-out-my-name~the-weeknd',
      'music_title' => 'Call Out My Name',
      'music_artist' => 'The Weeknd',
      'music_artist_id' => '14618',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539025193,
      'music_last_update_time' => 1523671774,
      'music_title_search' => 'cal out mi name',
      'music_artist_search' => '; the weknd;',
      'music_album_search' => '',
      'music_composer' => 'Frank Dukes; Nicolas Jaar; The Weeknd',
      'music_album' => '',
      'music_listen' => 2520,
      'music_track_id' => 0,
      'music_filename' => '1898101-c44558f5.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
We found each other
[t1]Hai ta gặp được nhau
I helped you out of a broken place
[t1]Anh giải thoát em khỏi nơi con tim tan vỡ
You gave me comfort
[t1]Em trao anh sự khuây khoả
But fallin...',
      'music_artist_html' => '<a href="/ca-si/The-Weeknd~Y3NuX2FydGlzdH4xNDYxOA==.html">The Weeknd</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1952956,
      'music_title_url' => 'burn-out~martin-garrix',
      'music_title' => 'Burn Out',
      'music_artist' => 'Martin Garrix',
      'music_artist_id' => '13343',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539001011,
      'music_last_update_time' => 1537270962,
      'music_title_search' => 'burn out',
      'music_artist_search' => '; martin garix;',
      'music_album_search' => '',
      'music_composer' => 'Martin Garrix; Justin Mylo; Dewain Whitmore',
      'music_album' => '',
      'music_listen' => 3885,
      'music_track_id' => 0,
      'music_filename' => '1952956-a5f352f8.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
Flash far, I\'m coming for ya
You\'re gonna fill me like the summer, like the sun in your eyes
Hold tight, another minute
Another hour, baby, imma\' show you.

[Pre-Chorus:]
You can rely on...',
      'music_artist_html' => '<a href="/ca-si/Martin-Garrix~Y3NuX2FydGlzdH4xMzM0Mw==.html">Martin Garrix</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1906330,
      'music_title_url' => 'audio~lsd-sia-diplo-labrinth',
      'music_title' => 'Audio',
      'music_artist' => 'LSD;Sia;Diplo;Labrinth',
      'music_artist_id' => '14504;9255;8835;4738',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538959492,
      'music_last_update_time' => 1526235854,
      'music_title_search' => 'audio',
      'music_artist_search' => '; lxd; xia; diplo; labrinth;',
      'music_album_search' => '',
      'music_composer' => 'King Henry; Labrinth; Gustave Rudman; Sia; Diplo; Jr. Blender',
      'music_album' => '',
      'music_listen' => 17266,
      'music_track_id' => 0,
      'music_filename' => '1906330-52844ae4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: Sia &amp; Labrinth]
We got a ride, we got the night
I got the bottle, you got the light
We got the stars (stars)
We got audio.

We\'re gonna fly, we\'re getting high
You got the moon dust,...',
      'music_artist_html' => '<a href="/ca-si/LSD~Y3NuX2FydGlzdH4xNDUwNA==.html">LSD</a>, <a href="/ca-si/Sia~Y3NuX2FydGlzdH45MjU1.html">Sia</a>, <a href="/ca-si/Diplo~Y3NuX2FydGlzdH44ODM1.html">Diplo</a>, <a href="/ca-si/Labrinth~Y3NuX2FydGlzdH40NzM4.html">Labrinth</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1907318,
      'music_title_url' => 'my-heart-will-go-on~celine-dion',
      'music_title' => 'My Heart Will Go On',
      'music_artist' => 'Celine Dion',
      'music_artist_id' => '192',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538924345,
      'music_last_update_time' => 1529467154,
      'music_title_search' => 'mi heart wil go on',
      'music_artist_search' => '; celine dion;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4600,
      'music_track_id' => 0,
      'music_filename' => '1907318-d69bb6ae.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '1. Every night in my dreams i see you, i feel you
That is how i know you go on
Far across the distance 
And spaces between us 
You have come to show you go on.

[Chorus:]
Near, far, wherever you ar...',
      'music_artist_html' => '<a href="/ca-si/Celine-Dion~Y3NuX2FydGlzdH4xOTI=.html">Celine Dion</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1913254,
      'music_title_url' => 'solo~clean-bandit-demi-lovato',
      'music_title' => 'Solo',
      'music_artist' => 'Clean Bandit;Demi Lovato',
      'music_artist_id' => '13836;965',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538932399,
      'music_last_update_time' => 1527819789,
      'music_title_search' => 'xolo',
      'music_artist_search' => '; clean bandit; demi lovato;',
      'music_album_search' => '',
      'music_composer' => 'Jack Patterson; Grace Chatto; Fred Gibson; Camille Purcell; Demi Lovato',
      'music_album' => '',
      'music_listen' => 15134,
      'music_track_id' => 1,
      'music_filename' => '1913254-2d255fef.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
It solo, solo, everybody
[t1]Đây là cơ chế tự thoát nước, thưa quý vị
It solo, everybody
[t1]Tự giải toả
It solo, solo, everybody
[t1]Tự khiến mình cảm thấy hạnh phúc
Woop woop woop woop w...',
      'music_artist_html' => '<a href="/ca-si/Clean-Bandit~Y3NuX2FydGlzdH4xMzgzNg==.html">Clean Bandit</a>, <a href="/ca-si/Demi-Lovato~Y3NuX2FydGlzdH45NjU=.html">Demi Lovato</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1929105,
      'music_title_url' => 'summer-on-you~prettymuch',
      'music_title' => 'Summer on You',
      'music_artist' => 'PRETTYMUCH',
      'music_artist_id' => '13499',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538997966,
      'music_last_update_time' => 1531752536,
      'music_title_search' => 'xumer on iou',
      'music_artist_search' => '; pretimuch;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3914,
      'music_track_id' => 0,
      'music_filename' => '1929105-b44ad0d0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Brandon]
Baby, I ain\'t got no money
All I got is time
And I\'m gon\' spend that time on you
But when they pay me
And I can buy the sunshine
Take you away, we\'ll drink champagne
While holed up...',
      'music_artist_html' => '<a href="/ca-si/PRETTYMUCH~Y3NuX2FydGlzdH4xMzQ5OQ==.html">PRETTYMUCH</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1904347,
      'music_title_url' => 'one-kiss~calvin-harris-dua-lipa',
      'music_title' => 'One Kiss',
      'music_artist' => 'Calvin Harris;Dua Lipa',
      'music_artist_id' => '2474;14519',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538841670,
      'music_last_update_time' => 1525390919,
      'music_title_search' => '1 kix',
      'music_artist_search' => '; calvin harix; dua lipa;',
      'music_album_search' => '',
      'music_composer' => 'Jessie Reyez; Dua Lipa; Calvin Harris',
      'music_album' => '',
      'music_listen' => 3704,
      'music_track_id' => 0,
      'music_filename' => '1904347-3e4b5f1a.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Chorus:]
One kiss is all it takes
[t1]Em chỉ cần một nụ hôn thôi
Fallin\' in love with me
[t1]Hãy yêu em đi
Possibilities
[t1]Em nói thật đó
I look like all you need.
[t1]Có vẻ như, tất cả những gì...',
      'music_artist_html' => '<a href="/ca-si/Calvin-Harris~Y3NuX2FydGlzdH4yNDc0.html">Calvin Harris</a>, <a href="/ca-si/Dua-Lipa~Y3NuX2FydGlzdH4xNDUxOQ==.html">Dua Lipa</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1924918,
      'music_title_url' => 'simple~florida-georgia-line',
      'music_title' => 'Simple',
      'music_artist' => 'Florida Georgia Line',
      'music_artist_id' => '18141',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538931028,
      'music_last_update_time' => 1530845948,
      'music_title_search' => 'ximple',
      'music_artist_search' => '; florida georda line;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4064,
      'music_track_id' => 0,
      'music_filename' => '1924918-3aa0cda8.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Verse 1:]
The way your fingers fit in mine
It\'s five plus five, not rocket science
This day in time, that\'s hard to find, it\'s true
The road we\'re on ain\'t a traffic jam
It\'s a Sunday drive on a p...',
      'music_artist_html' => '<a href="/ca-si/Florida-Georgia-Line~Y3NuX2FydGlzdH4xODE0MQ==.html">Florida Georgia Line</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1862847,
      'music_title_url' => 'idontwannabeyouanymore~billie-eilish',
      'music_title' => 'Idontwannabeyouanymore',
      'music_artist' => 'Billie Eilish',
      'music_artist_id' => '13400',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538906713,
      'music_last_update_time' => 1515823713,
      'music_title_search' => 'idontwanabeiouanimore',
      'music_artist_search' => '; bili eilith;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1602,
      'music_track_id' => 0,
      'music_filename' => '1862847-132afb2c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
Don\'t be that way
Fall apart twice a day
I just wish you could feel what you say
Show, never tell
But I know you too well
Kind of mood that you wish you could sell.

[Chorus:]
If teardro...',
      'music_artist_html' => '<a href="/ca-si/Billie-Eilish~Y3NuX2FydGlzdH4xMzQwMA==.html">Billie Eilish</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1904809,
      'music_title_url' => 'caterpillar~eminem-royce-da-59-king-green',
      'music_title' => 'Caterpillar',
      'music_artist' => 'Eminem, Royce Da 5\'9, King Green',
      'music_artist_id' => '14669',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538727168,
      'music_last_update_time' => 1525576397,
      'music_title_search' => 'caterpilar',
      'music_artist_search' => '; eminem roice da 5 9 king gren;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2296,
      'music_track_id' => 0,
      'music_filename' => '1904809-9eb6785c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'The hem of her dress spills over
What covers the seat
N\'flutters in the breeze like 
Caterpillars on a leaf.

Hair the hue of lions
beaches dried by morning suns
Promise you will write me a poem
Of...',
      'music_artist_html' => '<a href="/ca-si/Eminem-Royce-Da-59-King-Green~Y3NuX2FydGlzdH4xNDY2OQ==.html">Eminem, Royce Da 5\'9, King Green</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1943854,
      'music_title_url' => 'solo-feat-demi-lovato-japan-edition~clean-bandit',
      'music_title' => 'Solo feat. Demi Lovato [Japan Edition]',
      'music_artist' => 'Clean Bandit',
      'music_artist_id' => '13836',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539012954,
      'music_last_update_time' => 1534501663,
      'music_title_search' => 'xolo feat demi lovato; japan edition',
      'music_artist_search' => '; clean bandit;',
      'music_album_search' => '',
      'music_composer' => 'Jack Patterson; Grace Chatto; Fred Gibson; Camille Purcell; Demi Lovato',
      'music_album' => '',
      'music_listen' => 4514,
      'music_track_id' => 0,
      'music_filename' => '1943854-65736a82.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro]
It solo, solo, everybody
[t1]Đây là cơ chế tự thoát nước, thưa quý vị
It solo, everybody
[t1]Tự giải toả
It solo, solo, everybody
[t1]Tự khiến mình cảm thấy hạnh phúc
Woop woop woop woop wo...',
      'music_artist_html' => '<a href="/ca-si/Clean-Bandit~Y3NuX2FydGlzdH4xMzgzNg==.html">Clean Bandit</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1929110,
      'music_title_url' => 'be-alright~dean-lewis',
      'music_title' => 'Be Alright',
      'music_artist' => 'Dean Lewis',
      'music_artist_id' => '19601',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538918138,
      'music_last_update_time' => 1531753322,
      'music_title_search' => 'be alright',
      'music_artist_search' => '; dean lewix;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11220,
      'music_track_id' => 0,
      'music_filename' => '1929110-c5627b0d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '1. I look up from the ground to see your sad and teary eyes
You look away from me
And I see there\'s something you\'re trying to hide, and I
I reach for your hand
But it\'s cold, you pull away again
A...',
      'music_artist_html' => '<a href="/ca-si/Dean-Lewis~Y3NuX2FydGlzdH4xOTYwMQ==.html">Dean Lewis</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1937279,
      'music_title_url' => 'darkside~alan-walker-aura-tomine-harket',
      'music_title' => 'Darkside',
      'music_artist' => 'Alan Walker;Au/Ra;Tomine Harket',
      'music_artist_id' => '14991;20451;20450',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538833567,
      'music_last_update_time' => 1533266286,
      'music_title_search' => 'darkxide',
      'music_artist_search' => '; alan walker; au;ra; tomine harket;',
      'music_album_search' => '',
      'music_composer' => 'Alan Walker; Lars Kristian Rosness; Marcus Arnbekk; Fredrik Borch Olsen; Anders Froen; Gunnar Greve; James Njie; Jesper Borgen; Tommy LaVerdi; Atle Pettersen; William Wiik Larsen; Jamie Stenzel; Andrew Frampton',
      'music_album' => '',
      'music_listen' => 20021,
      'music_track_id' => 0,
      'music_filename' => '1937279-d5ea3a1c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Verse 1: Tomine Harket]
We\'re not in love
[t1]Chúng ta không hề yêu nhau
We share no stories
[t1]Và câu chuyện của mỗi người cũng khác biệt
Just something in your eyes
[t1]Nhưng có điều gì đó tron...',
      'music_artist_html' => '<a href="/ca-si/Alan-Walker~Y3NuX2FydGlzdH4xNDk5MQ==.html">Alan Walker</a>, <a href="/ca-si/AuRa~Y3NuX2FydGlzdH4yMDQ1MQ==.html">Au/Ra</a>, <a href="/ca-si/Tomine-Harket~Y3NuX2FydGlzdH4yMDQ1MA==.html">Tomine Harket</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1953112,
      'music_title_url' => 'happy-now~zedd-elley-duhe',
      'music_title' => 'Happy Now',
      'music_artist' => 'Zedd;Elley Duhé',
      'music_artist_id' => '3785;19951',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539003281,
      'music_last_update_time' => 1537269680,
      'music_title_search' => 'hapi now',
      'music_artist_search' => '; zed; elei duhe;',
      'music_album_search' => '',
      'music_composer' => 'Noonie Bao; Sarah Aarons; Linus Wiklund; Anton Zaslavski',
      'music_album' => '',
      'music_listen' => 990,
      'music_track_id' => 0,
      'music_filename' => '1953112-765ee42f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Chorus: Elley Duhé]
You\'re a world away
[t1]Anh giờ đây đã ở một chân trời xa
Somewhere in the crowd
[t1]Một nơi nào đó giữa dòng người tấp nập
In a foreign place
[t1]Một nơi nào đó xa lạ
Are you...',
      'music_artist_html' => '<a href="/ca-si/Zedd~Y3NuX2FydGlzdH4zNzg1.html">Zedd</a>, <a href="/ca-si/Elley-Duhe~Y3NuX2FydGlzdH4xOTk1MQ==.html">Elley Duhé</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1957869,
      'music_title_url' => 'more-than-friends~jason-mraz-meghan-trainor',
      'music_title' => 'More Than Friends',
      'music_artist' => 'Jason Mraz;Meghan Trainor',
      'music_artist_id' => '941;14983',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538741677,
      'music_last_update_time' => 1538407885,
      'music_title_search' => 'more than frindx',
      'music_artist_search' => '; jaxon mraz; meghan chainor;',
      'music_album_search' => '',
      'music_composer' => 'Jason Mraz; Meghan Trainor',
      'music_album' => '',
      'music_listen' => 327,
      'music_track_id' => 0,
      'music_filename' => '1957869-52f10a07.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1: Jason Mraz]
It feels like we\'ve been friends forever, yeah
[t1]Cảm giác như ta đã là bạn của nhau suốt cuộc đời
And we always see eye to eye
[t1]Và lúc nào, ánh mắt ta cũng gặp nhau
The m...',
      'music_artist_html' => '<a href="/ca-si/Jason-Mraz~Y3NuX2FydGlzdH45NDE=.html">Jason Mraz</a>, <a href="/ca-si/Meghan-Trainor~Y3NuX2FydGlzdH4xNDk4Mw==.html">Meghan Trainor</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1862854,
      'music_title_url' => 'anxiety~blackbear-frnd',
      'music_title' => 'Anxiety',
      'music_artist' => 'Blackbear;FRND',
      'music_artist_id' => '16687;19994',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538707786,
      'music_last_update_time' => 1515722563,
      'music_title_search' => 'anxiti',
      'music_artist_search' => '; blackbear; frnd;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 796,
      'music_track_id' => 0,
      'music_filename' => '1862854-9a38e8f8.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Blackbear]
Yeah, yeah, yeah
Yeah, yeah.

[Verse: Blackbear]
Every time you cross my mind you get right under my skin
Am I crazy out my mind the situation I\'m in
And it gets harder just to b...',
      'music_artist_html' => '<a href="/ca-si/Blackbear~Y3NuX2FydGlzdH4xNjY4Nw==.html">Blackbear</a>, <a href="/ca-si/FRND~Y3NuX2FydGlzdH4xOTk5NA==.html">FRND</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1863357,
      'music_title_url' => 'idgaf~dua-lipa',
      'music_title' => 'IDGAF',
      'music_artist' => 'Dua Lipa',
      'music_artist_id' => '14519',
      'cat_id' => 1,
      'cat_level' => 2,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538475560,
      'music_last_update_time' => 1515823803,
      'music_title_search' => 'idgaf',
      'music_artist_search' => '; dua lipa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 7400,
      'music_track_id' => 0,
      'music_filename' => '1863357-34f22ebe.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
You call me all friendly
Tellin\' me how much you miss me
That\'s funny, I guess you\'ve heard my songs
Well, I\'m too busy for your business
Go find a girl who wants to listen
\'Cause if you...',
      'music_artist_html' => '<a href="/ca-si/Dua-Lipa~Y3NuX2FydGlzdH4xNDUxOQ==.html">Dua Lipa</a>',
    ),
  ),
  3 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1869214,
      'music_title_url' => 'the-boots~gugudan',
      'music_title' => 'The Boots',
      'music_artist' => 'Gugudan',
      'music_artist_id' => '13520',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538924793,
      'music_last_update_time' => 1517560806,
      'music_title_search' => 'the botx',
      'music_artist_search' => '; gugudan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 801,
      'music_track_id' => 0,
      'music_filename' => '1869214-d12ba3bb.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Eotteon gillo galji goleuji ma
Hwipalameul buleo eodilado
Neol wihan gil so lucky
Hamjeong ape deolkeog geobmeogji ma
Neomeo beolyeo sappun byeol il anya nothing
Oh nae mal majji
Oh baby come on co...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1911255,
      'music_title_url' => 'quy-luat-rung-xanh-drama-ver~snh48',
      'music_title' => 'Quy Luật Rừng Xanh (森林法则) -Drama ver.-',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1528942375,
      'music_last_update_time' => 1528282724,
      'music_title_search' => 'qi luat rung xanh; 森林法则 drama ver',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => 'ASPJ',
      'music_album' => '',
      'music_listen' => 235,
      'music_track_id' => 0,
      'music_filename' => '1911255-657e25c9.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Take a look all the junk god made

We need to find a new place to stay

Legend has told some people has says

A paradise existed

存在是种资格

命运青睐强者

输赢一线隔

赌上一切风驰电掣

生命太多选择

而我拒绝附和

我是终结者

我自己谱自己的赞歌...',
    ),
    2 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1910355,
      'music_title_url' => '9to9-ngo-triet-ham~snh48',
      'music_title' => '9to9 / Ngô Triết Hàm',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1527132719,
      'music_title_search' => '9to9 ; ngo chit ham',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 42,
      'music_track_id' => 0,
      'music_filename' => '1910355-a91773e3.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1860335,
      'music_title_url' => 'miss-you~kris-wu-zhao-liying',
      'music_title' => 'Miss You',
      'music_artist' => 'Kris Wu;Zhao Liying',
      'music_artist_id' => '15837;103109',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532420479,
      'music_last_update_time' => 1514905744,
      'music_title_search' => 'mix iou',
      'music_artist_search' => '; krix wu; zhao ling;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1933,
      'music_track_id' => 0,
      'music_filename' => '1860335-049fffd4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    4 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1860338,
      'music_title_url' => 'sansei-iii~yang-mi-zhang-jie',
      'music_title' => 'Sansei III',
      'music_artist' => 'Yang Mi;Zhang Jie',
      'music_artist_id' => '103112;103113',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1514905805,
      'music_title_search' => 'xanxei i',
      'music_artist_search' => '; iang mi; zhang ji;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 174,
      'music_track_id' => 0,
      'music_filename' => '1860338-9814d912.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1860339,
      'music_title_url' => 'cool~zhang-bichen-jeff-chang',
      'music_title' => 'Cool',
      'music_artist' => 'Zhang Bichen;Jeff Chang',
      'music_artist_id' => '103114;10511',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522494403,
      'music_last_update_time' => 1514905883,
      'music_title_search' => 'col',
      'music_artist_search' => '; zhang bichen; jef chang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 546,
      'music_track_id' => 0,
      'music_filename' => '1860339-bb9d60f1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    6 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1877933,
      'music_title_url' => 'monster-chinese-version~henry',
      'music_title' => 'Monster (Chinese Version)',
      'music_artist' => 'Henry',
      'music_artist_id' => '3573',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1519611551,
      'music_title_search' => 'monxter; chinexe verxion',
      'music_artist_search' => '; henri;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 107,
      'music_track_id' => 0,
      'music_filename' => '1877933-9b63ba8a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Kiss me, bù yào ràng wǒ gēng yuǎn jù lí baby
Bù yào ràng wǒ zé guài zì jǐ
Bié huái yí wǒ yǐ shī qù zhèng zā lì qì
Yī diǎn yī dī dū shì nǐ baby.

Dāng huí yì bèi jiě kāi xī wàng zài cì zhòng lái
Huì...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1880524,
      'music_title_url' => 'mr-chinese-new-year-song-2018~muse-girls',
      'music_title' => 'Mr旺 (Chinese New Year Song 2018)',
      'music_artist' => 'Muse Girls',
      'music_artist_id' => '104645',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535738799,
      'music_last_update_time' => 1519962860,
      'music_title_search' => 'mr旺; chinexe new iar xong 2018',
      'music_artist_search' => '; muxe drlx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 598,
      'music_track_id' => 0,
      'music_filename' => '1880524-9ee5f05a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1880526,
      'music_title_url' => 'red-hot-year~malaysia-50-kols',
      'music_title' => 'Red Hot Year',
      'music_artist' => 'Malaysia 50 KOLs',
      'music_artist_id' => '104646',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1528766415,
      'music_last_update_time' => 1519779994,
      'music_title_search' => 'red hot iar',
      'music_artist_search' => '; malaixia 50 kolx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 338,
      'music_track_id' => 0,
      'music_filename' => '1880526-ab6546e8.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1891337,
      'music_title_url' => 'combo~seungri-al-rocco-ivy-tpa',
      'music_title' => 'Combo',
      'music_artist' => 'Seungri;Al Rocco;Ivy;TPA',
      'music_artist_id' => '12709;103523;10108;15846',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522078764,
      'music_last_update_time' => 1522140392,
      'music_title_search' => 'combo',
      'music_artist_search' => '; xeungri; al roco; ivi; tpa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 186,
      'music_track_id' => 0,
      'music_filename' => '1891337-2e2a5331.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Watch you name more
Watch you name more
Watch you name more
Watch you name more
Watch you name more
Watch you name more
Watch you name more
Watch you name more
Watch you name more
Watch you name mo...',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1896206,
      'music_title_url' => 'to-khuc-tuong-lai~snh48',
      'music_title' => 'Tổ Khúc Tương Lai (未来的乐章)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533408103,
      'music_last_update_time' => 1523070381,
      'music_title_search' => 'to khuc tung lai; 未来的乐章',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 403,
      'music_track_id' => 0,
      'music_filename' => '1896206-409c29c5.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1905622,
      'music_title_url' => 'sang-tao-101-101-live~produce-101-china',
      'music_title' => 'Sáng Tạo 101 (创造101) (Live)',
      'music_artist' => 'Produce 101 China',
      'music_artist_id' => '14811',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1526534307,
      'music_last_update_time' => 1526020932,
      'music_title_search' => 'xang tao 101; 创造101 ; live',
      'music_artist_search' => '; produce 101 china;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 295,
      'music_track_id' => 0,
      'music_filename' => '1905622-17dc5b26.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'Hello hello hey 请给我舞台
[t2]Hello hello hey qǐng gěi wǒ wǔtái
[t1]Hãy trao cho mình sân khấu kia

Hello hello hey 成败都可爱
[t2]Hello hello hey chéngbài dōu kě\'ài
[t1]Dù thành công hay thất bại cũng đều...',
    ),
    12 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1905623,
      'music_title_url' => 'sang-tao-101-101~produce-101-china',
      'music_title' => 'Sáng Tạo 101 (创造101)',
      'music_artist' => 'Produce 101 China',
      'music_artist_id' => '14811',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1526020930,
      'music_title_search' => 'xang tao 101; 创造101',
      'music_artist_search' => '; produce 101 china;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 97,
      'music_track_id' => 0,
      'music_filename' => '1905623-3fba8a7c.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Hello hello hey 请给我舞台
[t2]Hello hello hey qǐng gěi wǒ wǔtái
[t1]Hãy trao cho mình sân khấu kia

Hello hello hey 成败都可爱
[t2]Hello hello hey chéngbài dōu kě\'ài
[t1]Dù thành công hay thất bại cũng đều...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1905682,
      'music_title_url' => 'tieng-trung-quoc~produce-101-china',
      'music_title' => 'Tiếng Trung Quốc (中国话)',
      'music_artist' => 'Produce 101 China',
      'music_artist_id' => '14811',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1528928559,
      'music_last_update_time' => 1526020924,
      'music_title_search' => 'ting chung quc; 中国话',
      'music_artist_search' => '; produce 101 china;',
      'music_album_search' => '',
      'music_composer' => 'Trịnh Nam; Thi Nhân Thành; Cốc Túc; Mạc An Kỳ; Hồ Ngạn Bân; Vương Tử; Điền Dã; Trần Vũ Hiên; S.H.E (Nguyên xướng)',
      'music_album' => '',
      'music_listen' => 194,
      'music_track_id' => 0,
      'music_filename' => '1905682-6cbdb810.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Huǒjù yǐ bèi wǒmen chuándì
Xià cì jiàn wǒ qǐng nǐ shuō Chinese Chinese
Everybody start to learn Chinese
Sūn zǐ sūnnǚ
Dōu bì bèi tángshī sòngcí
Zēngzhǎng duìwài màoyì gotta speak my language
Yīnwèi...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1905738,
      'music_title_url' => 'sang-tao-101-101-master-dance-tutorial-version~produce-101-china-vuong-nhat-bac',
      'music_title' => 'Sáng Tạo 101 (创造101) (Master Dance Tutorial Version)',
      'music_artist' => 'Produce 101 China;Vương Nhất Bác',
      'music_artist_id' => '14811;14813',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525864013,
      'music_last_update_time' => 1526020420,
      'music_title_search' => 'xang tao 101; 创造101 ; maxter dance tutorial verxion',
      'music_artist_search' => '; produce 101 china; vung nhat bac;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 252,
      'music_track_id' => 0,
      'music_filename' => '1905738-a20cbb92.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Hello hello hey 请给我舞台
[t2]Hello hello hey qǐng gěi wǒ wǔtái
[t1]Hãy trao cho mình sân khấu kia

Hello hello hey 成败都可爱
[t2]Hello hello hey chéngbài dōu kě\'ài
[t1]Dù thành công hay thất bại cũng đều...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1905739,
      'music_title_url' => 'giay-cao-got-mau-do~produce-101-china',
      'music_title' => 'Giày Cao Gót Màu Đỏ (红色高跟鞋)',
      'music_artist' => 'Produce 101 China',
      'music_artist_id' => '14811',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1531405580,
      'music_last_update_time' => 1526020919,
      'music_title_search' => 'dai cao got mau do; 红色高跟鞋',
      'music_artist_search' => '; produce 101 china;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 287,
      'music_track_id' => 0,
      'music_filename' => '1905739-007d787f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Gāi zěnme qù xíngróng nǐ zuì tiēqiè
Ná shénme gēn nǐ zuò bǐjiào cái suàn tèbié
Duì nǐ de gǎnjué qiángliè
Què yòu bù tài liǎojiě zhǐ píng zhíjué
Nǐ xiàng wō zài bèizi lǐ de shūfú
Què yòu xiàng fēng...',
    ),
    16 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1905741,
      'music_title_url' => 'toi-lai-tinh-dau-nua~produce-101-china',
      'music_title' => 'Tôi Lại Tình Đầu Nữa (我又初恋了)',
      'music_artist' => 'Produce 101 China',
      'music_artist_id' => '14811',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1526020914,
      'music_title_search' => 'toi lai tinh dau nua; 我又初恋了',
      'music_artist_search' => '; produce 101 china;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 66,
      'music_track_id' => 0,
      'music_filename' => '1905741-6d1759ba.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Měi yīcì cóng ài lǐ líkāi
Jiù xiàng shì xīn bèi qiè yīkuài
Qiè yīkuài
Xià cì zài yě bù gǎn fàngdǎn ài
Shéi zhīdào zhǔ gē cái yībàn
Qiáo duàn dōu hái méi chàng chūlái
Jiù túrán
Nǐ de chūxiàn bàopòle...',
    ),
    17 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1905742,
      'music_title_url' => 'sang-tao-101-101-performance-version~produce-101-china',
      'music_title' => 'Sáng Tạo 101 (创造101) (Performance Version)',
      'music_artist' => 'Produce 101 China',
      'music_artist_id' => '14811',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1526020911,
      'music_title_search' => 'xang tao 101; 创造101 ; performance verxion',
      'music_artist_search' => '; produce 101 china;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 118,
      'music_track_id' => 0,
      'music_filename' => '1905742-a1c10b57.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Hello hello hey 请给我舞台
[t2]Hello hello hey qǐng gěi wǒ wǔtái
[t1]Hãy trao cho mình sân khấu kia

Hello hello hey 成败都可爱
[t2]Hello hello hey chéngbài dōu kě\'ài
[t1]Dù thành công hay thất bại cũng đều...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1912588,
      'music_title_url' => 'tuong-vong~ly-ky',
      'music_title' => 'Tương Vọng (相望)',
      'music_artist' => 'Lý Kỳ',
      'music_artist_id' => '14078',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533904421,
      'music_last_update_time' => 1527581254,
      'music_title_search' => 'tung vong; 相望',
      'music_artist_search' => '; li ki;',
      'music_album_search' => '',
      'music_composer' => 'Điền Nhất Nam;  Ngả Lệ; Cao Vi Nhiên; Tôn Phái; Phú Cách Âm Nhạc',
      'music_album' => '',
      'music_listen' => 682,
      'music_track_id' => 0,
      'music_filename' => '1912588-ff9a6993.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '推窗望 芳华佳色自忙
那春花 娇艳似谁难忘
葱郁无情 却总是能引人惆怅
独自留醉 暂忘是你留香

断桥边 寂寞躲石底藏
往来客 热闹是他人场
酒浇春愁 繁花总是难遮掩住惆怅
独留情深 念念无凭托望

不想认 这竟是烟雨一场
不想看 聚散离合空忙
已过三更 任箫音思量往昔的红妆
今夜醉 抱影入眠相望

断桥边 寂寞躲石底藏
往来客 热闹是他人场
酒浇春愁 繁花总是难遮掩住惆怅
独留情深 念念无...',
    ),
    19 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1915390,
      'music_title_url' => 'quy-luat-rung-xanh-dance-ver~snh48',
      'music_title' => 'Quy Luật Rừng Xanh (森林法则) -Dance ver.-',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1528282764,
      'music_title_search' => 'qi luat rung xanh; 森林法则 dance ver',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => 'ASPJ',
      'music_album' => '',
      'music_listen' => 65,
      'music_track_id' => 0,
      'music_filename' => '1915390-e3c7b598.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Take a look all the junk god made

We need to find a new place to stay

Legend has told some people has says

A paradise existed

存在是种资格

命运青睐强者

输赢一线隔

赌上一切风驰电掣

生命太多选择

而我拒绝附和

我是终结者

我自己谱自己的赞歌...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1869214,
      'music_title_url' => 'the-boots~gugudan',
      'music_title' => 'The Boots',
      'music_artist' => 'Gugudan',
      'music_artist_id' => '13520',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538924793,
      'music_last_update_time' => 1517560806,
      'music_title_search' => 'the botx',
      'music_artist_search' => '; gugudan;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 801,
      'music_track_id' => 0,
      'music_filename' => '1869214-d12ba3bb.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Eotteon gillo galji goleuji ma
Hwipalameul buleo eodilado
Neol wihan gil so lucky
Hamjeong ape deolkeog geobmeogji ma
Neomeo beolyeo sappun byeol il anya nothing
Oh nae mal majji
Oh baby come on co...',
      'music_artist_html' => '<a href="/ca-si/Gugudan~Y3NuX2FydGlzdH4xMzUyMA==.html">Gugudan</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1911255,
      'music_title_url' => 'quy-luat-rung-xanh-drama-ver~snh48',
      'music_title' => 'Quy Luật Rừng Xanh (森林法则) -Drama ver.-',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1528942375,
      'music_last_update_time' => 1528282724,
      'music_title_search' => 'qi luat rung xanh; 森林法则 drama ver',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => 'ASPJ',
      'music_album' => '',
      'music_listen' => 235,
      'music_track_id' => 0,
      'music_filename' => '1911255-657e25c9.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Take a look all the junk god made

We need to find a new place to stay

Legend has told some people has says

A paradise existed

存在是种资格

命运青睐强者

输赢一线隔

赌上一切风驰电掣

生命太多选择

而我拒绝附和

我是终结者

我自己谱自己的赞歌...',
      'music_artist_html' => '<a href="/ca-si/SNH48~Y3NuX2FydGlzdH4xNTk2Ng==.html">SNH48</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1910355,
      'music_title_url' => '9to9-ngo-triet-ham~snh48',
      'music_title' => '9to9 / Ngô Triết Hàm',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1527132719,
      'music_title_search' => '9to9 ; ngo chit ham',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 42,
      'music_track_id' => 0,
      'music_filename' => '1910355-a91773e3.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/SNH48~Y3NuX2FydGlzdH4xNTk2Ng==.html">SNH48</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1860335,
      'music_title_url' => 'miss-you~kris-wu-zhao-liying',
      'music_title' => 'Miss You',
      'music_artist' => 'Kris Wu;Zhao Liying',
      'music_artist_id' => '15837;103109',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532420479,
      'music_last_update_time' => 1514905744,
      'music_title_search' => 'mix iou',
      'music_artist_search' => '; krix wu; zhao ling;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1933,
      'music_track_id' => 0,
      'music_filename' => '1860335-049fffd4.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Kris-Wu~Y3NuX2FydGlzdH4xNTgzNw==.html">Kris Wu</a>, <a href="/ca-si/Zhao-Liying~Y3NuX2FydGlzdH4xMDMxMDk=.html">Zhao Liying</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1860338,
      'music_title_url' => 'sansei-iii~yang-mi-zhang-jie',
      'music_title' => 'Sansei III',
      'music_artist' => 'Yang Mi;Zhang Jie',
      'music_artist_id' => '103112;103113',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1514905805,
      'music_title_search' => 'xanxei i',
      'music_artist_search' => '; iang mi; zhang ji;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 174,
      'music_track_id' => 0,
      'music_filename' => '1860338-9814d912.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Yang-Mi~Y3NuX2FydGlzdH4xMDMxMTI=.html">Yang Mi</a>, <a href="/ca-si/Zhang-Jie~Y3NuX2FydGlzdH4xMDMxMTM=.html">Zhang Jie</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1860339,
      'music_title_url' => 'cool~zhang-bichen-jeff-chang',
      'music_title' => 'Cool',
      'music_artist' => 'Zhang Bichen;Jeff Chang',
      'music_artist_id' => '103114;10511',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522494403,
      'music_last_update_time' => 1514905883,
      'music_title_search' => 'col',
      'music_artist_search' => '; zhang bichen; jef chang;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 546,
      'music_track_id' => 0,
      'music_filename' => '1860339-bb9d60f1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Zhang-Bichen~Y3NuX2FydGlzdH4xMDMxMTQ=.html">Zhang Bichen</a>, <a href="/ca-si/Jeff-Chang~Y3NuX2FydGlzdH4xMDUxMQ==.html">Jeff Chang</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1877933,
      'music_title_url' => 'monster-chinese-version~henry',
      'music_title' => 'Monster (Chinese Version)',
      'music_artist' => 'Henry',
      'music_artist_id' => '3573',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1519611551,
      'music_title_search' => 'monxter; chinexe verxion',
      'music_artist_search' => '; henri;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 107,
      'music_track_id' => 0,
      'music_filename' => '1877933-9b63ba8a.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Kiss me, bù yào ràng wǒ gēng yuǎn jù lí baby
Bù yào ràng wǒ zé guài zì jǐ
Bié huái yí wǒ yǐ shī qù zhèng zā lì qì
Yī diǎn yī dī dū shì nǐ baby.

Dāng huí yì bèi jiě kāi xī wàng zài cì zhòng lái
Huì...',
      'music_artist_html' => '<a href="/ca-si/Henry~Y3NuX2FydGlzdH4zNTcz.html">Henry</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1880524,
      'music_title_url' => 'mr-chinese-new-year-song-2018~muse-girls',
      'music_title' => 'Mr旺 (Chinese New Year Song 2018)',
      'music_artist' => 'Muse Girls',
      'music_artist_id' => '104645',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1535738799,
      'music_last_update_time' => 1519962860,
      'music_title_search' => 'mr旺; chinexe new iar xong 2018',
      'music_artist_search' => '; muxe drlx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 598,
      'music_track_id' => 0,
      'music_filename' => '1880524-9ee5f05a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Muse-Girls~Y3NuX2FydGlzdH4xMDQ2NDU=.html">Muse Girls</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1880526,
      'music_title_url' => 'red-hot-year~malaysia-50-kols',
      'music_title' => 'Red Hot Year',
      'music_artist' => 'Malaysia 50 KOLs',
      'music_artist_id' => '104646',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1528766415,
      'music_last_update_time' => 1519779994,
      'music_title_search' => 'red hot iar',
      'music_artist_search' => '; malaixia 50 kolx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 338,
      'music_track_id' => 0,
      'music_filename' => '1880526-ab6546e8.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Malaysia-50-KOLs~Y3NuX2FydGlzdH4xMDQ2NDY=.html">Malaysia 50 KOLs</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1891337,
      'music_title_url' => 'combo~seungri-al-rocco-ivy-tpa',
      'music_title' => 'Combo',
      'music_artist' => 'Seungri;Al Rocco;Ivy;TPA',
      'music_artist_id' => '12709;103523;10108;15846',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1522078764,
      'music_last_update_time' => 1522140392,
      'music_title_search' => 'combo',
      'music_artist_search' => '; xeungri; al roco; ivi; tpa;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 186,
      'music_track_id' => 0,
      'music_filename' => '1891337-2e2a5331.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Watch you name more
Watch you name more
Watch you name more
Watch you name more
Watch you name more
Watch you name more
Watch you name more
Watch you name more
Watch you name more
Watch you name mo...',
      'music_artist_html' => '<a href="/ca-si/Seungri~Y3NuX2FydGlzdH4xMjcwOQ==.html">Seungri</a>, <a href="/ca-si/Al-Rocco~Y3NuX2FydGlzdH4xMDM1MjM=.html">Al Rocco</a>, <a href="/ca-si/Ivy~Y3NuX2FydGlzdH4xMDEwOA==.html">Ivy</a>, <a href="/ca-si/TPA~Y3NuX2FydGlzdH4xNTg0Ng==.html">TPA</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1896206,
      'music_title_url' => 'to-khuc-tuong-lai~snh48',
      'music_title' => 'Tổ Khúc Tương Lai (未来的乐章)',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533408103,
      'music_last_update_time' => 1523070381,
      'music_title_search' => 'to khuc tung lai; 未来的乐章',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 403,
      'music_track_id' => 0,
      'music_filename' => '1896206-409c29c5.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/SNH48~Y3NuX2FydGlzdH4xNTk2Ng==.html">SNH48</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1905622,
      'music_title_url' => 'sang-tao-101-101-live~produce-101-china',
      'music_title' => 'Sáng Tạo 101 (创造101) (Live)',
      'music_artist' => 'Produce 101 China',
      'music_artist_id' => '14811',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1526534307,
      'music_last_update_time' => 1526020932,
      'music_title_search' => 'xang tao 101; 创造101 ; live',
      'music_artist_search' => '; produce 101 china;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 295,
      'music_track_id' => 0,
      'music_filename' => '1905622-17dc5b26.mp4',
      'music_bitrate' => 64,
      'music_shortlyric' => 'Hello hello hey 请给我舞台
[t2]Hello hello hey qǐng gěi wǒ wǔtái
[t1]Hãy trao cho mình sân khấu kia

Hello hello hey 成败都可爱
[t2]Hello hello hey chéngbài dōu kě\'ài
[t1]Dù thành công hay thất bại cũng đều...',
      'music_artist_html' => '<a href="/ca-si/Produce-101-China~Y3NuX2FydGlzdH4xNDgxMQ==.html">Produce 101 China</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1905623,
      'music_title_url' => 'sang-tao-101-101~produce-101-china',
      'music_title' => 'Sáng Tạo 101 (创造101)',
      'music_artist' => 'Produce 101 China',
      'music_artist_id' => '14811',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1526020930,
      'music_title_search' => 'xang tao 101; 创造101',
      'music_artist_search' => '; produce 101 china;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 97,
      'music_track_id' => 0,
      'music_filename' => '1905623-3fba8a7c.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Hello hello hey 请给我舞台
[t2]Hello hello hey qǐng gěi wǒ wǔtái
[t1]Hãy trao cho mình sân khấu kia

Hello hello hey 成败都可爱
[t2]Hello hello hey chéngbài dōu kě\'ài
[t1]Dù thành công hay thất bại cũng đều...',
      'music_artist_html' => '<a href="/ca-si/Produce-101-China~Y3NuX2FydGlzdH4xNDgxMQ==.html">Produce 101 China</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1905682,
      'music_title_url' => 'tieng-trung-quoc~produce-101-china',
      'music_title' => 'Tiếng Trung Quốc (中国话)',
      'music_artist' => 'Produce 101 China',
      'music_artist_id' => '14811',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1528928559,
      'music_last_update_time' => 1526020924,
      'music_title_search' => 'ting chung quc; 中国话',
      'music_artist_search' => '; produce 101 china;',
      'music_album_search' => '',
      'music_composer' => 'Trịnh Nam; Thi Nhân Thành; Cốc Túc; Mạc An Kỳ; Hồ Ngạn Bân; Vương Tử; Điền Dã; Trần Vũ Hiên; S.H.E (Nguyên xướng)',
      'music_album' => '',
      'music_listen' => 194,
      'music_track_id' => 0,
      'music_filename' => '1905682-6cbdb810.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Huǒjù yǐ bèi wǒmen chuándì
Xià cì jiàn wǒ qǐng nǐ shuō Chinese Chinese
Everybody start to learn Chinese
Sūn zǐ sūnnǚ
Dōu bì bèi tángshī sòngcí
Zēngzhǎng duìwài màoyì gotta speak my language
Yīnwèi...',
      'music_artist_html' => '<a href="/ca-si/Produce-101-China~Y3NuX2FydGlzdH4xNDgxMQ==.html">Produce 101 China</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1905738,
      'music_title_url' => 'sang-tao-101-101-master-dance-tutorial-version~produce-101-china-vuong-nhat-bac',
      'music_title' => 'Sáng Tạo 101 (创造101) (Master Dance Tutorial Version)',
      'music_artist' => 'Produce 101 China;Vương Nhất Bác',
      'music_artist_id' => '14811;14813',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1525864013,
      'music_last_update_time' => 1526020420,
      'music_title_search' => 'xang tao 101; 创造101 ; maxter dance tutorial verxion',
      'music_artist_search' => '; produce 101 china; vung nhat bac;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 252,
      'music_track_id' => 0,
      'music_filename' => '1905738-a20cbb92.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Hello hello hey 请给我舞台
[t2]Hello hello hey qǐng gěi wǒ wǔtái
[t1]Hãy trao cho mình sân khấu kia

Hello hello hey 成败都可爱
[t2]Hello hello hey chéngbài dōu kě\'ài
[t1]Dù thành công hay thất bại cũng đều...',
      'music_artist_html' => '<a href="/ca-si/Produce-101-China~Y3NuX2FydGlzdH4xNDgxMQ==.html">Produce 101 China</a>, <a href="/ca-si/Vuong-Nhat-Bac~Y3NuX2FydGlzdH4xNDgxMw==.html">Vương Nhất Bác</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1905739,
      'music_title_url' => 'giay-cao-got-mau-do~produce-101-china',
      'music_title' => 'Giày Cao Gót Màu Đỏ (红色高跟鞋)',
      'music_artist' => 'Produce 101 China',
      'music_artist_id' => '14811',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1531405580,
      'music_last_update_time' => 1526020919,
      'music_title_search' => 'dai cao got mau do; 红色高跟鞋',
      'music_artist_search' => '; produce 101 china;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 287,
      'music_track_id' => 0,
      'music_filename' => '1905739-007d787f.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Gāi zěnme qù xíngróng nǐ zuì tiēqiè
Ná shénme gēn nǐ zuò bǐjiào cái suàn tèbié
Duì nǐ de gǎnjué qiángliè
Què yòu bù tài liǎojiě zhǐ píng zhíjué
Nǐ xiàng wō zài bèizi lǐ de shūfú
Què yòu xiàng fēng...',
      'music_artist_html' => '<a href="/ca-si/Produce-101-China~Y3NuX2FydGlzdH4xNDgxMQ==.html">Produce 101 China</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1905741,
      'music_title_url' => 'toi-lai-tinh-dau-nua~produce-101-china',
      'music_title' => 'Tôi Lại Tình Đầu Nữa (我又初恋了)',
      'music_artist' => 'Produce 101 China',
      'music_artist_id' => '14811',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1526020914,
      'music_title_search' => 'toi lai tinh dau nua; 我又初恋了',
      'music_artist_search' => '; produce 101 china;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 66,
      'music_track_id' => 0,
      'music_filename' => '1905741-6d1759ba.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Měi yīcì cóng ài lǐ líkāi
Jiù xiàng shì xīn bèi qiè yīkuài
Qiè yīkuài
Xià cì zài yě bù gǎn fàngdǎn ài
Shéi zhīdào zhǔ gē cái yībàn
Qiáo duàn dōu hái méi chàng chūlái
Jiù túrán
Nǐ de chūxiàn bàopòle...',
      'music_artist_html' => '<a href="/ca-si/Produce-101-China~Y3NuX2FydGlzdH4xNDgxMQ==.html">Produce 101 China</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1905742,
      'music_title_url' => 'sang-tao-101-101-performance-version~produce-101-china',
      'music_title' => 'Sáng Tạo 101 (创造101) (Performance Version)',
      'music_artist' => 'Produce 101 China',
      'music_artist_id' => '14811',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1526020911,
      'music_title_search' => 'xang tao 101; 创造101 ; performance verxion',
      'music_artist_search' => '; produce 101 china;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 118,
      'music_track_id' => 0,
      'music_filename' => '1905742-a1c10b57.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => 'Hello hello hey 请给我舞台
[t2]Hello hello hey qǐng gěi wǒ wǔtái
[t1]Hãy trao cho mình sân khấu kia

Hello hello hey 成败都可爱
[t2]Hello hello hey chéngbài dōu kě\'ài
[t1]Dù thành công hay thất bại cũng đều...',
      'music_artist_html' => '<a href="/ca-si/Produce-101-China~Y3NuX2FydGlzdH4xNDgxMQ==.html">Produce 101 China</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1912588,
      'music_title_url' => 'tuong-vong~ly-ky',
      'music_title' => 'Tương Vọng (相望)',
      'music_artist' => 'Lý Kỳ',
      'music_artist_id' => '14078',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1533904421,
      'music_last_update_time' => 1527581254,
      'music_title_search' => 'tung vong; 相望',
      'music_artist_search' => '; li ki;',
      'music_album_search' => '',
      'music_composer' => 'Điền Nhất Nam;  Ngả Lệ; Cao Vi Nhiên; Tôn Phái; Phú Cách Âm Nhạc',
      'music_album' => '',
      'music_listen' => 682,
      'music_track_id' => 0,
      'music_filename' => '1912588-ff9a6993.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '推窗望 芳华佳色自忙
那春花 娇艳似谁难忘
葱郁无情 却总是能引人惆怅
独自留醉 暂忘是你留香

断桥边 寂寞躲石底藏
往来客 热闹是他人场
酒浇春愁 繁花总是难遮掩住惆怅
独留情深 念念无凭托望

不想认 这竟是烟雨一场
不想看 聚散离合空忙
已过三更 任箫音思量往昔的红妆
今夜醉 抱影入眠相望

断桥边 寂寞躲石底藏
往来客 热闹是他人场
酒浇春愁 繁花总是难遮掩住惆怅
独留情深 念念无...',
      'music_artist_html' => '<a href="/ca-si/Ly-Ky~Y3NuX2FydGlzdH4xNDA3OA==.html">Lý Kỳ</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1915390,
      'music_title_url' => 'quy-luat-rung-xanh-dance-ver~snh48',
      'music_title' => 'Quy Luật Rừng Xanh (森林法则) -Dance ver.-',
      'music_artist' => 'SNH48',
      'music_artist_id' => '15966',
      'cat_id' => 1,
      'cat_level' => 3,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1528282764,
      'music_title_search' => 'qi luat rung xanh; 森林法则 dance ver',
      'music_artist_search' => '; xnh48;',
      'music_album_search' => '',
      'music_composer' => 'ASPJ',
      'music_album' => '',
      'music_listen' => 65,
      'music_track_id' => 0,
      'music_filename' => '1915390-e3c7b598.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Take a look all the junk god made

We need to find a new place to stay

Legend has told some people has says

A paradise existed

存在是种资格

命运青睐强者

输赢一线隔

赌上一切风驰电掣

生命太多选择

而我拒绝附和

我是终结者

我自己谱自己的赞歌...',
      'music_artist_html' => '<a href="/ca-si/SNH48~Y3NuX2FydGlzdH4xNTk2Ng==.html">SNH48</a>',
    ),
  ),
  4 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 21,
      'music_id' => 1953760,
      'music_title_url' => 'nguoi-hay-quen-em-di-korean-version-2018-dmc-festival-amn-big-concert~my-tam',
      'music_title' => 'Người Hãy Quên Em Đi (Korean Version) (2018 DMC Festival A.M.N Big Concert)',
      'music_artist' => 'Mỹ Tâm',
      'music_artist_id' => '4812',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1539071982,
      'music_last_update_time' => 1537115651,
      'music_title_search' => 'ngui hai quen em di; korean verxion ; 2018 dmc fextival a m n big concert',
      'music_artist_search' => '; mi tam;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 15953,
      'music_track_id' => 0,
      'music_filename' => '1953760-5452997e.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
    ),
    1 => 
    array (
      'music_downloads_today' => 5,
      'music_id' => 1921636,
      'music_title_url' => 'baam~momoland',
      'music_title' => 'Baam',
      'music_artist' => 'Momoland',
      'music_artist_id' => '13391',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539067861,
      'music_last_update_time' => 1530084522,
      'music_title_search' => 'bam',
      'music_artist_search' => '; momoland;',
      'music_album_search' => '',
      'music_composer' => 'Shinsadong Tiger; Beomi',
      'music_album' => '',
      'music_listen' => 15787,
      'music_track_id' => 6,
      'music_filename' => '1921636-9ccba6fa.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[t2]Bae Bae Bae BAAM BAAM
[t2]Bae Bae Bae BAAM BAAM

자꾸 어지러워 생각지도 못한 네가
[t2]Jakku eojireowo saenggakjido mothan nega
[t1]Chóng mặt mãi không nguôi, em thật chưa từng nghĩ tới

훅 훅 훅 들어와 BAAM (BAAM)...',
    ),
    2 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1929495,
      'music_title_url' => 'egotistic~mamamoo',
      'music_title' => 'Egotistic',
      'music_artist' => 'Mamamoo',
      'music_artist_id' => '14892',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539078659,
      'music_last_update_time' => 1531740468,
      'music_title_search' => 'egotixtic',
      'music_artist_search' => '; mamamo;',
      'music_album_search' => '',
      'music_composer' => 'Kim Do Hoon (RBW); Park Woo Sang',
      'music_album' => '',
      'music_listen' => 4750,
      'music_track_id' => 7,
      'music_filename' => '1929495-d507583f.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Nan neoui wiseong ne juwil maemdolji
Geureotago nega taeyangeun anini
Neoui meotdaero jungsimi dwae
Jemeotdaero gulmyeon an dwae
Eotteoke hansunganui tteollimi
Sori eopsi neoui du nuneul garini
Neo...',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1926072,
      'music_title_url' => 'dance-the-night-away~twice',
      'music_title' => 'Dance The Night Away',
      'music_artist' => 'Twice',
      'music_artist_id' => '13388',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539019465,
      'music_last_update_time' => 1531137848,
      'music_title_search' => 'dance the night awai',
      'music_artist_search' => '; twice;',
      'music_album_search' => '',
      'music_composer' => 'Wheesung (Realslow); Anne Judith Wik; Andreas Baertels; Jonatan Gusmark; Ludvig Evers a.k.a Moonshine; Cazzi Opeia; Oh Seung Eun',
      'music_album' => '',
      'music_listen' => 6555,
      'music_track_id' => 0,
      'music_filename' => '1926072-0ad51a82.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Nanananananana nanananananana 
You and me in the moonlight 
Byeol kkot chukje yeollin bam 
Pado sorireul teulgo chumeul chuneun i sungan 
I neukkim jeongmal ttangnya 
Badaya uriwa gachi nora 
Baram...',
    ),
    4 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1897137,
      'music_title_url' => 'what-is-love~twice',
      'music_title' => 'What Is Love?',
      'music_artist' => 'Twice',
      'music_artist_id' => '13388',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539065740,
      'music_last_update_time' => 1523302454,
      'music_title_search' => 'what ix love',
      'music_artist_search' => '; twice;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10673,
      'music_track_id' => 0,
      'music_filename' => '1897137-afae5918.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '매일같이 영화 속에서나
[t2]Maeilgati yeonghwa sogeseona
[t1]Hàng ngày, dù là trong phim ảnh

책 속에서나 드라마 속에서
[t2]Chaek sogeseona deurama sogeseo
[t1]Sách báo, hay là phim truyền hình

사랑을 느껴
[t2]Sarangeul neu...',
    ),
    5 => 
    array (
      'music_downloads_today' => 5,
      'music_id' => 1919140,
      'music_title_url' => 'ddu-du-ddu-du~blackpink',
      'music_title' => 'Ddu-Du Ddu-Du',
      'music_artist' => 'BlackPink',
      'music_artist_id' => '14673',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539064346,
      'music_last_update_time' => 1530370466,
      'music_title_search' => 'du du du du',
      'music_artist_search' => '; blackpink;',
      'music_album_search' => '',
      'music_composer' => 'Teddy; 24; R.Tee; Bekuh Boom',
      'music_album' => '',
      'music_listen' => 130073,
      'music_track_id' => 6,
      'music_filename' => '1919140-2364e511.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '착한 얼굴에 그렇지 못한 태도
[t2]Chakan eolgure geureochi mothan taedo
[t1]Mặt trông thế nhưng chẳng hiền

가녀린 몸매 속 가려진 Volume은 두 배로
[t2]Ganyeorin mommae sok garyeojin Volumeeun du baero
[t1]Body mảnh mai nhưn...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1929509,
      'music_title_url' => 'oh-my~seventeen',
      'music_title' => 'Oh My!',
      'music_artist' => 'Seventeen',
      'music_artist_id' => '14655',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538944072,
      'music_last_update_time' => 1531740724,
      'music_title_search' => 'oh mi',
      'music_artist_search' => '; xeventen;',
      'music_album_search' => '',
      'music_composer' => 'Woozi; Bumzu; S.Coups; Vernon; Park Gi Tae',
      'music_album' => '',
      'music_listen' => 2441,
      'music_track_id' => 7,
      'music_filename' => '1929509-874b0d46.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Naui bameun Deep Deep
Kyeojyeo inneun TV
Sikkeureopji nae mamcheoreom
Neoneun daeche eotteohan iyuro
Nae mameul kkeotda kyeotda ne meotdaeronji
Geuge siltaneun ge anigo
Hoksi nega neomu
Pigonhalkka...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1865541,
      'music_title_url' => 'bboom-bboom~momoland',
      'music_title' => 'BBoom BBoom',
      'music_artist' => 'Momoland',
      'music_artist_id' => '13391',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538873194,
      'music_last_update_time' => 1516762067,
      'music_title_search' => 'bom bom',
      'music_artist_search' => '; momoland;',
      'music_album_search' => '',
      'music_composer' => 'Shinsadong Tiger; Beomi; Nangi',
      'music_album' => '',
      'music_listen' => 25603,
      'music_track_id' => 0,
      'music_filename' => '1865541-a27e29f1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Seolleeo neowa naui langdebyu
(langdebyu)
Nae ma-eum-eul deul-eossda nwassda hae mamdaelu
(mamdaelu)

Jigeum nae nun-en nun-en nun-en
Ne eokkae muleup bal (Oh)
Sum-i tag maghil geos gat-a nan neoma...',
    ),
    8 => 
    array (
      'music_downloads_today' => 5,
      'music_id' => 1959745,
      'music_title_url' => 'first-love~epitone-project',
      'music_title' => 'First Love',
      'music_artist' => 'Epitone Project',
      'music_artist_id' => '46640',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539058748,
      'music_last_update_time' => 1538661526,
      'music_title_search' => 'firxt love',
      'music_artist_search' => '; epitone project;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 762,
      'music_track_id' => 0,
      'music_filename' => '1959745-210443f9.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
    ),
    9 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1936296,
      'music_title_url' => 'soulmate~zico-iu',
      'music_title' => 'SoulMate',
      'music_artist' => 'Zico;IU',
      'music_artist_id' => '14107;2059',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538983088,
      'music_last_update_time' => 1533183481,
      'music_title_search' => 'xoulmate',
      'music_artist_search' => '; zico; iu;',
      'music_album_search' => '',
      'music_composer' => 'Poptime; Zico',
      'music_album' => '',
      'music_listen' => 1440,
      'music_track_id' => 2,
      'music_filename' => '1936296-71db020a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Jeoleumui hanbokpaneseo
Du namnyeoga saneun jageun seom
Ne gibuni yeogi nalssigo
Saeppalgan yeolmaega yeollyeosseo
Jogeum natseoreotdeon majeunpyeon
Ije naega jeil akkineun got
Naogi sileun ibujari...',
    ),
    10 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1908448,
      'music_title_url' => 'fake-love~bts',
      'music_title' => 'Fake Love',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539028088,
      'music_last_update_time' => 1526819700,
      'music_title_search' => 'fake love',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 45818,
      'music_track_id' => 0,
      'music_filename' => '1908448-bb73cce1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Intro: V, Jungkook] 
널 위해서라면 난 슬퍼도 기쁜 척 할 수가 있었어
[t2]Neol wihaeseoramyeon nan seulpeodo gippeun cheok hal suga isseosseo
[t1]Dù đang buồn, nhưng anh luôn cố vui vẻ trước mặt em

널 위해서라면 난 아파도 강한 척...',
    ),
    11 => 
    array (
      'music_downloads_today' => 17,
      'music_id' => 1960802,
      'music_title_url' => 'one-more-time-otra-vez~reik-super-junior',
      'music_title' => 'One More Time (Otra Vez)',
      'music_artist' => 'Reik;Super Junior',
      'music_artist_id' => '23423;213',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539077910,
      'music_last_update_time' => 1538995948,
      'music_title_search' => '1 more time; ocha vez',
      'music_artist_search' => '; reik; xuper junior;',
      'music_album_search' => '',
      'music_composer' => 'Znee; Pablo Preciado; Andreas Stone Johansson; Denniz Jamm; Rudi \'Rudy\' Daouk; Jakob \'Jay\' Mihoubi; Button Pushers',
      'music_album' => '',
      'music_listen' => 464,
      'music_track_id' => 6,
      'music_filename' => '1960802-f5164ad2.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Baby nareul tteonajima nega eopsin
Amugeotdo anin i bameun an doegesseo nan
Neukkyeojineun geol sechage ttwigo inneun
Sarangui heunjeok nal ttokbaro bwa
Jeo bulkkotcheoreom taneun nae nunbit
Tteuge...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1943140,
      'music_title_url' => 'hann-alone~gi-dle',
      'music_title' => 'Hann (Alone)',
      'music_artist' => '(G)I-DLE',
      'music_artist_id' => '14429',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538926782,
      'music_last_update_time' => 1534238428,
      'music_title_search' => 'han; alone',
      'music_artist_search' => '; ; g i dle;',
      'music_album_search' => '',
      'music_composer' => 'Soyeon; Big Sancho (Yummy Tone)',
      'music_album' => '',
      'music_listen' => 8491,
      'music_track_id' => 2,
      'music_filename' => '1943140-bc9e3c13.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Do you remember you remember
Remember what you said
Neoneun naege mwodeun jul geotcheoreom
Mareul geonnetda
Don\'t you remember you remember
Remember what you said
Neoneun machi museun yageul
Meogeu...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1949927,
      'music_title_url' => 'while-dreaming-produce-48-ep12-31082018~produce-48',
      'music_title' => 'While Dreaming (Produce 48 Ep.12 31.08.2018)',
      'music_artist' => 'Produce 48',
      'music_artist_id' => '14984',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538982981,
      'music_last_update_time' => 1536045259,
      'music_title_search' => 'while dreaming; produce 48 ep 12 31 08 2018',
      'music_artist_search' => '; produce 48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1095,
      'music_track_id' => 0,
      'music_filename' => '1949927-2f9ab5ce.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1954505,
      'music_title_url' => 'save-me-save-you~cosmic-girls',
      'music_title' => 'Save Me, Save You',
      'music_artist' => 'Cosmic Girls',
      'music_artist_id' => '15071',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539011393,
      'music_last_update_time' => 1537589155,
      'music_title_search' => 'xave me xave iou',
      'music_artist_search' => '; coxmic drlx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2131,
      'music_track_id' => 7,
      'music_filename' => '1954505-733328d7.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Butakae neoui yaegil deullyeojullae
Algo sipeo geurae
Nega naege geuraetdeut neul malhaetdeut
Josimhi ttaseuhi anajulge
Uri seoro mollatdeon jinachyeotdeon siganeun
Moreun cheok nungameulge
Nae son...',
    ),
    15 => 
    array (
      'music_downloads_today' => 5,
      'music_id' => 1937727,
      'music_title_url' => 'killing-me~ikon',
      'music_title' => 'Killing Me',
      'music_artist' => 'iKON',
      'music_artist_id' => '14359',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539031666,
      'music_last_update_time' => 1533201973,
      'music_title_search' => 'kiling me',
      'music_artist_search' => '; ikon;',
      'music_album_search' => '',
      'music_composer' => 'B.I; Joe Rhee; R.Tee',
      'music_album' => '',
      'music_listen' => 9294,
      'music_track_id' => 6,
      'music_filename' => '1937727-141351b4.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Jukgetda tto eogimeopsi
Neoui heunjeogi
Nama nal goeropinda
Jukgetda nam daehadeusi
Doraseonneunde
Wae naneun oeroulkka
Choyeonhal jul arasseo heeojime daehae
Geunde neol daleun seupgwan hana
Beori...',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1928473,
      'music_title_url' => 'ddu-du-ddu-du-show-music-core-20180714~blackpink',
      'music_title' => 'DDU-DU DDU-DU (뚜두뚜두) (Show Music Core 2018.07.14)',
      'music_artist' => 'BlackPink',
      'music_artist_id' => '14673',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538743635,
      'music_last_update_time' => 1531562633,
      'music_title_search' => 'du du du du; 뚜두뚜두 ; thow muxic core 2018 07 14',
      'music_artist_search' => '; blackpink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5065,
      'music_track_id' => 0,
      'music_filename' => '1928473-e24e9a39.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1951164,
      'music_title_url' => 'idol~nicki-minaj-bts',
      'music_title' => 'Idol',
      'music_artist' => 'Nicki Minaj;BTS',
      'music_artist_id' => '2664;4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538925648,
      'music_last_update_time' => 1537271029,
      'music_title_search' => 'idol',
      'music_artist_search' => '; nicki minaj; btx;',
      'music_album_search' => '',
      'music_composer' => 'Pdogg; Nicki Minaj; Supreme Boi; Hitman Bang; Ali Tamposi; RM; Roman Campolo',
      'music_album' => '',
      'music_listen' => 3545,
      'music_track_id' => 0,
      'music_filename' => '1951164-132017b9.mp4',
      'music_bitrate' => 96,
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
    ),
    18 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1953894,
      'music_title_url' => 'lullaby~got7',
      'music_title' => 'Lullaby',
      'music_artist' => 'GOT7',
      'music_artist_id' => '4464',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538969150,
      'music_last_update_time' => 1537194129,
      'music_title_search' => 'lulabi',
      'music_artist_search' => '; got7;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2946,
      'music_track_id' => 17,
      'music_filename' => '1953894-4b5362b7.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Hannaje kkuneun kkum
Mitgiji aneul ppun
Yeojeonhi nan geojinmal gata
Nun tteobomyeon neoui pum
Andoui hansum
Girl nega bureuneun nae ireum
Mwodeun neol geochimyeon areumdawojyeo
Saero pieona I bloo...',
    ),
    19 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1958320,
      'music_title_url' => 'save-me-save-you-30092018-inkigayo~wjsn',
      'music_title' => 'Save Me, Save You (30.09.2018 Inkigayo)',
      'music_artist' => 'WJSN',
      'music_artist_id' => '13519',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1539013292,
      'music_last_update_time' => 1538308189,
      'music_title_search' => 'xave me xave iou; 30 09 2018 inkigaio',
      'music_artist_search' => '; wjxn;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 464,
      'music_track_id' => 0,
      'music_filename' => '1958320-6da958ce.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '부탁해 너의 얘길 들려줄래
[t2]Butakhae neoui yaegil deullyeojullae
[t1]Có thể hay không, kể cho em nghe về chuyện đời anh

알고 싶어 그래
[t2]Algo sipeo geurae
[t1]Vì em muốn biết về những câu chuyện đó

네가 내게 그랬듯...',
    ),
    20 => 
    array (
      'music_downloads_today' => 21,
      'music_id' => 1953760,
      'music_title_url' => 'nguoi-hay-quen-em-di-korean-version-2018-dmc-festival-amn-big-concert~my-tam',
      'music_title' => 'Người Hãy Quên Em Đi (Korean Version) (2018 DMC Festival A.M.N Big Concert)',
      'music_artist' => 'Mỹ Tâm',
      'music_artist_id' => '4812',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1539071982,
      'music_last_update_time' => 1537115651,
      'music_title_search' => 'ngui hai quen em di; korean verxion ; 2018 dmc fextival a m n big concert',
      'music_artist_search' => '; mi tam;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 15953,
      'music_track_id' => 0,
      'music_filename' => '1953760-5452997e.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/My-Tam~Y3NuX2FydGlzdH40ODEy.html">Mỹ Tâm</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 5,
      'music_id' => 1921636,
      'music_title_url' => 'baam~momoland',
      'music_title' => 'Baam',
      'music_artist' => 'Momoland',
      'music_artist_id' => '13391',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539067861,
      'music_last_update_time' => 1530084522,
      'music_title_search' => 'bam',
      'music_artist_search' => '; momoland;',
      'music_album_search' => '',
      'music_composer' => 'Shinsadong Tiger; Beomi',
      'music_album' => '',
      'music_listen' => 15787,
      'music_track_id' => 6,
      'music_filename' => '1921636-9ccba6fa.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[t2]Bae Bae Bae BAAM BAAM
[t2]Bae Bae Bae BAAM BAAM

자꾸 어지러워 생각지도 못한 네가
[t2]Jakku eojireowo saenggakjido mothan nega
[t1]Chóng mặt mãi không nguôi, em thật chưa từng nghĩ tới

훅 훅 훅 들어와 BAAM (BAAM)...',
      'music_artist_html' => '<a href="/ca-si/Momoland~Y3NuX2FydGlzdH4xMzM5MQ==.html">Momoland</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1929495,
      'music_title_url' => 'egotistic~mamamoo',
      'music_title' => 'Egotistic',
      'music_artist' => 'Mamamoo',
      'music_artist_id' => '14892',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539078659,
      'music_last_update_time' => 1531740468,
      'music_title_search' => 'egotixtic',
      'music_artist_search' => '; mamamo;',
      'music_album_search' => '',
      'music_composer' => 'Kim Do Hoon (RBW); Park Woo Sang',
      'music_album' => '',
      'music_listen' => 4750,
      'music_track_id' => 7,
      'music_filename' => '1929495-d507583f.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Nan neoui wiseong ne juwil maemdolji
Geureotago nega taeyangeun anini
Neoui meotdaero jungsimi dwae
Jemeotdaero gulmyeon an dwae
Eotteoke hansunganui tteollimi
Sori eopsi neoui du nuneul garini
Neo...',
      'music_artist_html' => '<a href="/ca-si/Mamamoo~Y3NuX2FydGlzdH4xNDg5Mg==.html">Mamamoo</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1926072,
      'music_title_url' => 'dance-the-night-away~twice',
      'music_title' => 'Dance The Night Away',
      'music_artist' => 'Twice',
      'music_artist_id' => '13388',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539019465,
      'music_last_update_time' => 1531137848,
      'music_title_search' => 'dance the night awai',
      'music_artist_search' => '; twice;',
      'music_album_search' => '',
      'music_composer' => 'Wheesung (Realslow); Anne Judith Wik; Andreas Baertels; Jonatan Gusmark; Ludvig Evers a.k.a Moonshine; Cazzi Opeia; Oh Seung Eun',
      'music_album' => '',
      'music_listen' => 6555,
      'music_track_id' => 0,
      'music_filename' => '1926072-0ad51a82.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Nanananananana nanananananana 
You and me in the moonlight 
Byeol kkot chukje yeollin bam 
Pado sorireul teulgo chumeul chuneun i sungan 
I neukkim jeongmal ttangnya 
Badaya uriwa gachi nora 
Baram...',
      'music_artist_html' => '<a href="/ca-si/Twice~Y3NuX2FydGlzdH4xMzM4OA==.html">Twice</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1897137,
      'music_title_url' => 'what-is-love~twice',
      'music_title' => 'What Is Love?',
      'music_artist' => 'Twice',
      'music_artist_id' => '13388',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539065740,
      'music_last_update_time' => 1523302454,
      'music_title_search' => 'what ix love',
      'music_artist_search' => '; twice;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10673,
      'music_track_id' => 0,
      'music_filename' => '1897137-afae5918.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '매일같이 영화 속에서나
[t2]Maeilgati yeonghwa sogeseona
[t1]Hàng ngày, dù là trong phim ảnh

책 속에서나 드라마 속에서
[t2]Chaek sogeseona deurama sogeseo
[t1]Sách báo, hay là phim truyền hình

사랑을 느껴
[t2]Sarangeul neu...',
      'music_artist_html' => '<a href="/ca-si/Twice~Y3NuX2FydGlzdH4xMzM4OA==.html">Twice</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 5,
      'music_id' => 1919140,
      'music_title_url' => 'ddu-du-ddu-du~blackpink',
      'music_title' => 'Ddu-Du Ddu-Du',
      'music_artist' => 'BlackPink',
      'music_artist_id' => '14673',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539064346,
      'music_last_update_time' => 1530370466,
      'music_title_search' => 'du du du du',
      'music_artist_search' => '; blackpink;',
      'music_album_search' => '',
      'music_composer' => 'Teddy; 24; R.Tee; Bekuh Boom',
      'music_album' => '',
      'music_listen' => 130073,
      'music_track_id' => 6,
      'music_filename' => '1919140-2364e511.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '착한 얼굴에 그렇지 못한 태도
[t2]Chakan eolgure geureochi mothan taedo
[t1]Mặt trông thế nhưng chẳng hiền

가녀린 몸매 속 가려진 Volume은 두 배로
[t2]Ganyeorin mommae sok garyeojin Volumeeun du baero
[t1]Body mảnh mai nhưn...',
      'music_artist_html' => '<a href="/ca-si/BlackPink~Y3NuX2FydGlzdH4xNDY3Mw==.html">BlackPink</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1929509,
      'music_title_url' => 'oh-my~seventeen',
      'music_title' => 'Oh My!',
      'music_artist' => 'Seventeen',
      'music_artist_id' => '14655',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538944072,
      'music_last_update_time' => 1531740724,
      'music_title_search' => 'oh mi',
      'music_artist_search' => '; xeventen;',
      'music_album_search' => '',
      'music_composer' => 'Woozi; Bumzu; S.Coups; Vernon; Park Gi Tae',
      'music_album' => '',
      'music_listen' => 2441,
      'music_track_id' => 7,
      'music_filename' => '1929509-874b0d46.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Naui bameun Deep Deep
Kyeojyeo inneun TV
Sikkeureopji nae mamcheoreom
Neoneun daeche eotteohan iyuro
Nae mameul kkeotda kyeotda ne meotdaeronji
Geuge siltaneun ge anigo
Hoksi nega neomu
Pigonhalkka...',
      'music_artist_html' => '<a href="/ca-si/Seventeen~Y3NuX2FydGlzdH4xNDY1NQ==.html">Seventeen</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1865541,
      'music_title_url' => 'bboom-bboom~momoland',
      'music_title' => 'BBoom BBoom',
      'music_artist' => 'Momoland',
      'music_artist_id' => '13391',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538873194,
      'music_last_update_time' => 1516762067,
      'music_title_search' => 'bom bom',
      'music_artist_search' => '; momoland;',
      'music_album_search' => '',
      'music_composer' => 'Shinsadong Tiger; Beomi; Nangi',
      'music_album' => '',
      'music_listen' => 25603,
      'music_track_id' => 0,
      'music_filename' => '1865541-a27e29f1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Seolleeo neowa naui langdebyu
(langdebyu)
Nae ma-eum-eul deul-eossda nwassda hae mamdaelu
(mamdaelu)

Jigeum nae nun-en nun-en nun-en
Ne eokkae muleup bal (Oh)
Sum-i tag maghil geos gat-a nan neoma...',
      'music_artist_html' => '<a href="/ca-si/Momoland~Y3NuX2FydGlzdH4xMzM5MQ==.html">Momoland</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 5,
      'music_id' => 1959745,
      'music_title_url' => 'first-love~epitone-project',
      'music_title' => 'First Love',
      'music_artist' => 'Epitone Project',
      'music_artist_id' => '46640',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539058748,
      'music_last_update_time' => 1538661526,
      'music_title_search' => 'firxt love',
      'music_artist_search' => '; epitone project;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 762,
      'music_track_id' => 0,
      'music_filename' => '1959745-210443f9.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Epitone-Project~Y3NuX2FydGlzdH40NjY0MA==.html">Epitone Project</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1936296,
      'music_title_url' => 'soulmate~zico-iu',
      'music_title' => 'SoulMate',
      'music_artist' => 'Zico;IU',
      'music_artist_id' => '14107;2059',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538983088,
      'music_last_update_time' => 1533183481,
      'music_title_search' => 'xoulmate',
      'music_artist_search' => '; zico; iu;',
      'music_album_search' => '',
      'music_composer' => 'Poptime; Zico',
      'music_album' => '',
      'music_listen' => 1440,
      'music_track_id' => 2,
      'music_filename' => '1936296-71db020a.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Jeoleumui hanbokpaneseo
Du namnyeoga saneun jageun seom
Ne gibuni yeogi nalssigo
Saeppalgan yeolmaega yeollyeosseo
Jogeum natseoreotdeon majeunpyeon
Ije naega jeil akkineun got
Naogi sileun ibujari...',
      'music_artist_html' => '<a href="/ca-si/Zico~Y3NuX2FydGlzdH4xNDEwNw==.html">Zico</a>, <a href="/ca-si/IU~Y3NuX2FydGlzdH4yMDU5.html">IU</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1908448,
      'music_title_url' => 'fake-love~bts',
      'music_title' => 'Fake Love',
      'music_artist' => 'BTS',
      'music_artist_id' => '4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539028088,
      'music_last_update_time' => 1526819700,
      'music_title_search' => 'fake love',
      'music_artist_search' => '; btx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 45818,
      'music_track_id' => 0,
      'music_filename' => '1908448-bb73cce1.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => '[Intro: V, Jungkook] 
널 위해서라면 난 슬퍼도 기쁜 척 할 수가 있었어
[t2]Neol wihaeseoramyeon nan seulpeodo gippeun cheok hal suga isseosseo
[t1]Dù đang buồn, nhưng anh luôn cố vui vẻ trước mặt em

널 위해서라면 난 아파도 강한 척...',
      'music_artist_html' => '<a href="/ca-si/BTS~Y3NuX2FydGlzdH40NzQ4.html">BTS</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 17,
      'music_id' => 1960802,
      'music_title_url' => 'one-more-time-otra-vez~reik-super-junior',
      'music_title' => 'One More Time (Otra Vez)',
      'music_artist' => 'Reik;Super Junior',
      'music_artist_id' => '23423;213',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539077910,
      'music_last_update_time' => 1538995948,
      'music_title_search' => '1 more time; ocha vez',
      'music_artist_search' => '; reik; xuper junior;',
      'music_album_search' => '',
      'music_composer' => 'Znee; Pablo Preciado; Andreas Stone Johansson; Denniz Jamm; Rudi \'Rudy\' Daouk; Jakob \'Jay\' Mihoubi; Button Pushers',
      'music_album' => '',
      'music_listen' => 464,
      'music_track_id' => 6,
      'music_filename' => '1960802-f5164ad2.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Baby nareul tteonajima nega eopsin
Amugeotdo anin i bameun an doegesseo nan
Neukkyeojineun geol sechage ttwigo inneun
Sarangui heunjeok nal ttokbaro bwa
Jeo bulkkotcheoreom taneun nae nunbit
Tteuge...',
      'music_artist_html' => '<a href="/ca-si/Reik~Y3NuX2FydGlzdH4yMzQyMw==.html">Reik</a>, <a href="/ca-si/Super-Junior~Y3NuX2FydGlzdH4yMTM=.html">Super Junior</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1943140,
      'music_title_url' => 'hann-alone~gi-dle',
      'music_title' => 'Hann (Alone)',
      'music_artist' => '(G)I-DLE',
      'music_artist_id' => '14429',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538926782,
      'music_last_update_time' => 1534238428,
      'music_title_search' => 'han; alone',
      'music_artist_search' => '; ; g i dle;',
      'music_album_search' => '',
      'music_composer' => 'Soyeon; Big Sancho (Yummy Tone)',
      'music_album' => '',
      'music_listen' => 8491,
      'music_track_id' => 2,
      'music_filename' => '1943140-bc9e3c13.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Do you remember you remember
Remember what you said
Neoneun naege mwodeun jul geotcheoreom
Mareul geonnetda
Don\'t you remember you remember
Remember what you said
Neoneun machi museun yageul
Meogeu...',
      'music_artist_html' => '<a href="/ca-si/GI-DLE~Y3NuX2FydGlzdH4xNDQyOQ==.html">(G)I-DLE</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1949927,
      'music_title_url' => 'while-dreaming-produce-48-ep12-31082018~produce-48',
      'music_title' => 'While Dreaming (Produce 48 Ep.12 31.08.2018)',
      'music_artist' => 'Produce 48',
      'music_artist_id' => '14984',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1538982981,
      'music_last_update_time' => 1536045259,
      'music_title_search' => 'while dreaming; produce 48 ep 12 31 08 2018',
      'music_artist_search' => '; produce 48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1095,
      'music_track_id' => 0,
      'music_filename' => '1949927-2f9ab5ce.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Produce-48~Y3NuX2FydGlzdH4xNDk4NA==.html">Produce 48</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1954505,
      'music_title_url' => 'save-me-save-you~cosmic-girls',
      'music_title' => 'Save Me, Save You',
      'music_artist' => 'Cosmic Girls',
      'music_artist_id' => '15071',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539011393,
      'music_last_update_time' => 1537589155,
      'music_title_search' => 'xave me xave iou',
      'music_artist_search' => '; coxmic drlx;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2131,
      'music_track_id' => 7,
      'music_filename' => '1954505-733328d7.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Butakae neoui yaegil deullyeojullae
Algo sipeo geurae
Nega naege geuraetdeut neul malhaetdeut
Josimhi ttaseuhi anajulge
Uri seoro mollatdeon jinachyeotdeon siganeun
Moreun cheok nungameulge
Nae son...',
      'music_artist_html' => '<a href="/ca-si/Cosmic-Girls~Y3NuX2FydGlzdH4xNTA3MQ==.html">Cosmic Girls</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 5,
      'music_id' => 1937727,
      'music_title_url' => 'killing-me~ikon',
      'music_title' => 'Killing Me',
      'music_artist' => 'iKON',
      'music_artist_id' => '14359',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539031666,
      'music_last_update_time' => 1533201973,
      'music_title_search' => 'kiling me',
      'music_artist_search' => '; ikon;',
      'music_album_search' => '',
      'music_composer' => 'B.I; Joe Rhee; R.Tee',
      'music_album' => '',
      'music_listen' => 9294,
      'music_track_id' => 6,
      'music_filename' => '1937727-141351b4.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Jukgetda tto eogimeopsi
Neoui heunjeogi
Nama nal goeropinda
Jukgetda nam daehadeusi
Doraseonneunde
Wae naneun oeroulkka
Choyeonhal jul arasseo heeojime daehae
Geunde neol daleun seupgwan hana
Beori...',
      'music_artist_html' => '<a href="/ca-si/iKON~Y3NuX2FydGlzdH4xNDM1OQ==.html">iKON</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1928473,
      'music_title_url' => 'ddu-du-ddu-du-show-music-core-20180714~blackpink',
      'music_title' => 'DDU-DU DDU-DU (뚜두뚜두) (Show Music Core 2018.07.14)',
      'music_artist' => 'BlackPink',
      'music_artist_id' => '14673',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538743635,
      'music_last_update_time' => 1531562633,
      'music_title_search' => 'du du du du; 뚜두뚜두 ; thow muxic core 2018 07 14',
      'music_artist_search' => '; blackpink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 5065,
      'music_track_id' => 0,
      'music_filename' => '1928473-e24e9a39.mp4',
      'music_bitrate' => 256,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/BlackPink~Y3NuX2FydGlzdH4xNDY3Mw==.html">BlackPink</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1951164,
      'music_title_url' => 'idol~nicki-minaj-bts',
      'music_title' => 'Idol',
      'music_artist' => 'Nicki Minaj;BTS',
      'music_artist_id' => '2664;4748',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538925648,
      'music_last_update_time' => 1537271029,
      'music_title_search' => 'idol',
      'music_artist_search' => '; nicki minaj; btx;',
      'music_album_search' => '',
      'music_composer' => 'Pdogg; Nicki Minaj; Supreme Boi; Hitman Bang; Ali Tamposi; RM; Roman Campolo',
      'music_album' => '',
      'music_listen' => 3545,
      'music_track_id' => 0,
      'music_filename' => '1951164-132017b9.mp4',
      'music_bitrate' => 96,
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
      'music_artist_html' => '<a href="/ca-si/Nicki-Minaj~Y3NuX2FydGlzdH4yNjY0.html">Nicki Minaj</a>, <a href="/ca-si/BTS~Y3NuX2FydGlzdH40NzQ4.html">BTS</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1953894,
      'music_title_url' => 'lullaby~got7',
      'music_title' => 'Lullaby',
      'music_artist' => 'GOT7',
      'music_artist_id' => '4464',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538969150,
      'music_last_update_time' => 1537194129,
      'music_title_search' => 'lulabi',
      'music_artist_search' => '; got7;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2946,
      'music_track_id' => 17,
      'music_filename' => '1953894-4b5362b7.mp4',
      'music_bitrate' => 192,
      'music_shortlyric' => 'Hannaje kkuneun kkum
Mitgiji aneul ppun
Yeojeonhi nan geojinmal gata
Nun tteobomyeon neoui pum
Andoui hansum
Girl nega bureuneun nae ireum
Mwodeun neol geochimyeon areumdawojyeo
Saero pieona I bloo...',
      'music_artist_html' => '<a href="/ca-si/GOT7~Y3NuX2FydGlzdH40NDY0.html">GOT7</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1958320,
      'music_title_url' => 'save-me-save-you-30092018-inkigayo~wjsn',
      'music_title' => 'Save Me, Save You (30.09.2018 Inkigayo)',
      'music_artist' => 'WJSN',
      'music_artist_id' => '13519',
      'cat_id' => 1,
      'cat_level' => 4,
      'cat_sublevel' => 0,
      'cat_custom' => 6,
      'cover_id' => 0,
      'music_download_time' => 1539013292,
      'music_last_update_time' => 1538308189,
      'music_title_search' => 'xave me xave iou; 30 09 2018 inkigaio',
      'music_artist_search' => '; wjxn;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 464,
      'music_track_id' => 0,
      'music_filename' => '1958320-6da958ce.mp4',
      'music_bitrate' => 320,
      'music_shortlyric' => '부탁해 너의 얘길 들려줄래
[t2]Butakhae neoui yaegil deullyeojullae
[t1]Có thể hay không, kể cho em nghe về chuyện đời anh

알고 싶어 그래
[t2]Algo sipeo geurae
[t1]Vì em muốn biết về những câu chuyện đó

네가 내게 그랬듯...',
      'music_artist_html' => '<a href="/ca-si/WJSN~Y3NuX2FydGlzdH4xMzUxOQ==.html">WJSN</a>',
    ),
  ),
  5 => 
  array (
    0 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1946758,
      'music_title_url' => 'sentimental-train~akb48',
      'music_title' => 'Sentimental Train (センチメンタルトレイン)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539007769,
      'music_last_update_time' => 1535016383,
      'music_title_search' => 'xentimental chain; センチメンタルトレイン',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10265,
      'music_track_id' => 0,
      'music_filename' => '1946758-d09bdd00.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1959520,
      'music_title_url' => 'boku-datte-naichau-yo~nmb48',
      'music_title' => 'Boku Datte naichau yo (僕だって泣いちゃうよ)',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538998721,
      'music_last_update_time' => 1538631989,
      'music_title_search' => 'boku date naichau io; 僕だって泣いちゃうよ',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 588,
      'music_track_id' => 0,
      'music_filename' => '1959520-1fae48a5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    2 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1953963,
      'music_title_url' => 'curtain-no-gara-team-g~ngt48',
      'music_title' => 'Curtain no Gara (カーテンの柄) / Team G',
      'music_artist' => 'NGT48',
      'music_artist_id' => '13635',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538948754,
      'music_last_update_time' => 1537187990,
      'music_title_search' => 'curtain no gara; カーテンの柄 ; team g',
      'music_artist_search' => '; ngt48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 788,
      'music_track_id' => 0,
      'music_filename' => '1953963-c473eeb0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    3 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1955249,
      'music_title_url' => 'memoria~gfriend',
      'music_title' => 'Memoria',
      'music_artist' => 'GFriend',
      'music_artist_id' => '13390',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538980106,
      'music_last_update_time' => 1537591826,
      'music_title_search' => 'memoria',
      'music_artist_search' => '; gfrind;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4387,
      'music_track_id' => 0,
      'music_filename' => '1955249-e12e7691.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Memoria memoria
Memoria memoria
Hitori taiyou no shimo hitomi o tojitemita
Sou always kanjita nukumori Come back to me
Donnani kanashikute namida o nagashite mo
Kimi to no daiarii kokoro ni kizamar...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1955418,
      'music_title_url' => 'hitonatsu-no-dekigoto-upcoming-girls~akb48',
      'music_title' => 'Hitonatsu no Dekigoto (ひと夏の出来事) / Upcoming Girls',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538825084,
      'music_last_update_time' => 1537622587,
      'music_title_search' => 'hitonatxu no dekigoto; ひと夏の出来事 ; upcoming drlx',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1611,
      'music_track_id' => 0,
      'music_filename' => '1955418-fee50aae.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1950513,
      'music_title_url' => 'jikochuu-de-ikou-akb48-show-ep196-nogizaka46-show-20180902~nogizaka46',
      'music_title' => 'Jikochuu de Ikou! (ジコチューで行こう！) (AKB48 SHOW! ep196 (Nogizaka46 SHOW!) 2018.09.02)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539022445,
      'music_last_update_time' => 1535978425,
      'music_title_search' => 'jikochu de ikou ; ジコチューで行こう！ ; akb48 thow ep196; novaka46 thow 2018 09 02',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 923,
      'music_track_id' => 0,
      'music_filename' => '1950513-7ba99b41.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    6 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1952708,
      'music_title_url' => 'kokoro-ni-taiyou-team-niii~ngt48',
      'music_title' => 'Kokoro ni Taiyou (心に太陽) / Team NIII',
      'music_artist' => 'NGT48',
      'music_artist_id' => '13635',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538997189,
      'music_last_update_time' => 1537187959,
      'music_title_search' => 'kokoro ni taiou; 心に太陽 ; team ni',
      'music_artist_search' => '; ngt48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 856,
      'music_track_id' => 0,
      'music_filename' => '1952708-42e1a5ce.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    7 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1960104,
      'music_title_url' => 'baam-japanaese-version~momoland',
      'music_title' => 'Baam (Japanaese Version)',
      'music_artist' => 'Momoland',
      'music_artist_id' => '13391',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539053244,
      'music_last_update_time' => 1538735659,
      'music_title_search' => 'bam; japanaexe verxion',
      'music_artist_search' => '; momoland;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 276,
      'music_track_id' => 0,
      'music_filename' => '1960104-0dce2911.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    8 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1875596,
      'music_title_url' => 'itsuka-dekirukara-kyou-dekiru-akb48-show-ep176-nogizaka46-show-201802~nogizaka46',
      'music_title' => 'Itsuka Dekirukara Kyou Dekiru (いつかできるから今日できる) (AKB48 SHOW! ep176 (Nogizaka46 SHOW!) 2018.02.17)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538944798,
      'music_last_update_time' => 1518922316,
      'music_title_search' => 'itxuka dekirukara kiou dekiru; いつかできるから今日できる ; akb48 thow ep176; novaka46 thow 2018 02 17',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 919,
      'music_track_id' => 1,
      'music_filename' => '1875596-9f6c1469.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    9 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1950516,
      'music_title_url' => 'jibun-janai-kanji-3rd-generation-akb48-show-ep196-nogizaka46-show-201~nogizaka46',
      'music_title' => 'Jibun janai Kanji (自分じゃない感じ) / 3rd Generation (AKB48 SHOW! ep196 (Nogizaka46 SHOW!) 2018.09.02)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538943238,
      'music_last_update_time' => 1535983993,
      'music_title_search' => 'jibun janai kanji; 自分じゃない感じ ; 3rd generation; akb48 thow ep196; novaka46 thow 2018 09 02',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 958,
      'music_track_id' => 0,
      'music_filename' => '1950516-9e12803c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    10 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1953565,
      'music_title_url' => 'bdz-shibuya-note-presents-twice-request-live-15092018~twice',
      'music_title' => 'BDZ (SHIBUYA NOTE Presents TWICE Request LIVE 15.09.2018)',
      'music_artist' => 'TWICE',
      'music_artist_id' => '13898',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539013587,
      'music_last_update_time' => 1537106547,
      'music_title_search' => 'bv; thibia note prexentx twice requext live 15 09 2018',
      'music_artist_search' => '; twice;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 522,
      'music_track_id' => 0,
      'music_filename' => '1953565-49972834.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Like a bulldozer
Like a tank
Like a soldier
Kowasu yo kimi no kokoro no gādo
Hito-tsu nokorazuubau yo hāto.

Konna kimochi wa hajimete! dai jiken da yo
Kimi ni deatta totan ni dokidoki tomaranai....',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1955294,
      'music_title_url' => 'suki-no-tane-showroom-senbatsu~akb48',
      'music_title' => '&quot;Suki&quot; no Tane (“好き”のたね) / SHOWROOM Senbatsu',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538818669,
      'music_last_update_time' => 1537540842,
      'music_title_search' => '&qut;xuki&qut; no tane; “好き”のたね ; thowrom xenbatxu',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1445,
      'music_track_id' => 0,
      'music_filename' => '1955294-f3b75e20.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    12 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1897228,
      'music_title_url' => 'hayaokuri-calendar~hkt48',
      'music_title' => 'Hayaokuri Calendar (早送りカレンダー)',
      'music_artist' => 'HKT48',
      'music_artist_id' => '14603',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538950577,
      'music_last_update_time' => 1523324781,
      'music_title_search' => 'haiaokuri calendar; 早送りカレンダー',
      'music_artist_search' => '; hkt48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2283,
      'music_track_id' => 0,
      'music_filename' => '1897228-366106c9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1948114,
      'music_title_url' => 'ddu-du-ddu-du-jp-ver-full-ver~blackpink',
      'music_title' => 'DDU-DU DDU-DU (JP Ver.) full ver.',
      'music_artist' => 'BLACKPINK',
      'music_artist_id' => '19565',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538918055,
      'music_last_update_time' => 1535454138,
      'music_title_search' => 'du du du du; jp ver ful ver',
      'music_artist_search' => '; blackpink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1217,
      'music_track_id' => 0,
      'music_filename' => '1948114-afeab3d3.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    14 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1920973,
      'music_title_url' => 'ikinari-punch-line~ske48',
      'music_title' => 'Ikinari Punch Line (いきなりパンチライン)',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539003125,
      'music_last_update_time' => 1529663470,
      'music_title_search' => 'ikinari punch line; いきなりパンチライン',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1025,
      'music_track_id' => 0,
      'music_filename' => '1920973-ba70d571.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1869691,
      'music_title_url' => 'candy-pop-music-station-20180202~twice',
      'music_title' => 'Candy Pop (MUSIC STATION 2018.02.02)',
      'music_artist' => 'TWICE',
      'music_artist_id' => '13898',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538831178,
      'music_last_update_time' => 1517623783,
      'music_title_search' => 'candi pop; muxic xtation 2018 02 02',
      'music_artist_search' => '; twice;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 393,
      'music_track_id' => 0,
      'music_filename' => '1869691-0382aaf5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1875597,
      'music_title_url' => 'unubore-beach-akb48-show-ep176-nogizaka46-show-20180217~nogizaka46',
      'music_title' => 'Unubore Beach (自惚れビーチ) (AKB48 SHOW! ep176 (Nogizaka46 SHOW!) 2018.02.17)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538494411,
      'music_last_update_time' => 1518922575,
      'music_title_search' => 'unubore beach; 自惚れビーチ ; akb48 thow ep176; novaka46 thow 2018 02 17',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 400,
      'music_track_id' => 2,
      'music_filename' => '1875597-a4f8ce9b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    17 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1875598,
      'music_title_url' => 'sono-hito-akb48-show-ep176-nogizaka46-show-20180217~nogizaka46',
      'music_title' => 'Sono Hito (その女) (AKB48 SHOW! ep176 (Nogizaka46 SHOW!) 2018.02.17)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538494471,
      'music_last_update_time' => 1519009184,
      'music_title_search' => 'xono hito; その女 ; akb48 thow ep176; novaka46 thow 2018 02 17',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 309,
      'music_track_id' => 3,
      'music_filename' => '1875598-e1534b25.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    18 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1880784,
      'music_title_url' => 'mou-mori-e-kaerou-ka~keyakizaka46',
      'music_title' => 'Mou Mori e Kaerou ka? (もう森へ帰ろうか?)',
      'music_artist' => 'Keyakizaka46',
      'music_artist_id' => '15964',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539023587,
      'music_last_update_time' => 1519810310,
      'music_title_search' => 'mou mori e kaerou ka ; もう森へ帰ろうか',
      'music_artist_search' => '; keiakizaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1135,
      'music_track_id' => 0,
      'music_filename' => '1880784-cf7a8140.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    19 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1890881,
      'music_title_url' => 'zenmai-shikake-no-yume-yuichanzu-akb48-show-ep180-keyakizaka46-show~keyakizaka46',
      'music_title' => 'Zenmai Shikake no Yume (ゼンマイ仕掛けの夢) / Yuichanzu (AKB48 SHOW! ep180 (Keyakizaka46 SHOW!) 2018.03.24)',
      'music_artist' => 'Keyakizaka46',
      'music_artist_id' => '15964',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538945618,
      'music_last_update_time' => 1521946217,
      'music_title_search' => 'zenmai thikake no iume; ゼンマイ仕掛けの夢 ; iuichanzu; akb48 thow ep180; keiakizaka46 thow 2018 03 24',
      'music_artist_search' => '; keiakizaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 782,
      'music_track_id' => 0,
      'music_filename' => '1890881-ad393c14.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1946758,
      'music_title_url' => 'sentimental-train~akb48',
      'music_title' => 'Sentimental Train (センチメンタルトレイン)',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539007769,
      'music_last_update_time' => 1535016383,
      'music_title_search' => 'xentimental chain; センチメンタルトレイン',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 10265,
      'music_track_id' => 0,
      'music_filename' => '1946758-d09bdd00.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1959520,
      'music_title_url' => 'boku-datte-naichau-yo~nmb48',
      'music_title' => 'Boku Datte naichau yo (僕だって泣いちゃうよ)',
      'music_artist' => 'NMB48',
      'music_artist_id' => '16826',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538998721,
      'music_last_update_time' => 1538631989,
      'music_title_search' => 'boku date naichau io; 僕だって泣いちゃうよ',
      'music_artist_search' => '; nmb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 588,
      'music_track_id' => 0,
      'music_filename' => '1959520-1fae48a5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/NMB48~Y3NuX2FydGlzdH4xNjgyNg==.html">NMB48</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1953963,
      'music_title_url' => 'curtain-no-gara-team-g~ngt48',
      'music_title' => 'Curtain no Gara (カーテンの柄) / Team G',
      'music_artist' => 'NGT48',
      'music_artist_id' => '13635',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538948754,
      'music_last_update_time' => 1537187990,
      'music_title_search' => 'curtain no gara; カーテンの柄 ; team g',
      'music_artist_search' => '; ngt48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 788,
      'music_track_id' => 0,
      'music_filename' => '1953963-c473eeb0.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/NGT48~Y3NuX2FydGlzdH4xMzYzNQ==.html">NGT48</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1955249,
      'music_title_url' => 'memoria~gfriend',
      'music_title' => 'Memoria',
      'music_artist' => 'GFriend',
      'music_artist_id' => '13390',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538980106,
      'music_last_update_time' => 1537591826,
      'music_title_search' => 'memoria',
      'music_artist_search' => '; gfrind;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 4387,
      'music_track_id' => 0,
      'music_filename' => '1955249-e12e7691.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Memoria memoria
Memoria memoria
Hitori taiyou no shimo hitomi o tojitemita
Sou always kanjita nukumori Come back to me
Donnani kanashikute namida o nagashite mo
Kimi to no daiarii kokoro ni kizamar...',
      'music_artist_html' => '<a href="/ca-si/GFriend~Y3NuX2FydGlzdH4xMzM5MA==.html">GFriend</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1955418,
      'music_title_url' => 'hitonatsu-no-dekigoto-upcoming-girls~akb48',
      'music_title' => 'Hitonatsu no Dekigoto (ひと夏の出来事) / Upcoming Girls',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538825084,
      'music_last_update_time' => 1537622587,
      'music_title_search' => 'hitonatxu no dekigoto; ひと夏の出来事 ; upcoming drlx',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1611,
      'music_track_id' => 0,
      'music_filename' => '1955418-fee50aae.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1950513,
      'music_title_url' => 'jikochuu-de-ikou-akb48-show-ep196-nogizaka46-show-20180902~nogizaka46',
      'music_title' => 'Jikochuu de Ikou! (ジコチューで行こう！) (AKB48 SHOW! ep196 (Nogizaka46 SHOW!) 2018.09.02)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539022445,
      'music_last_update_time' => 1535978425,
      'music_title_search' => 'jikochu de ikou ; ジコチューで行こう！ ; akb48 thow ep196; novaka46 thow 2018 09 02',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 923,
      'music_track_id' => 0,
      'music_filename' => '1950513-7ba99b41.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Nogizaka46~Y3NuX2FydGlzdH4xMzU1Nw==.html">Nogizaka46</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1952708,
      'music_title_url' => 'kokoro-ni-taiyou-team-niii~ngt48',
      'music_title' => 'Kokoro ni Taiyou (心に太陽) / Team NIII',
      'music_artist' => 'NGT48',
      'music_artist_id' => '13635',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538997189,
      'music_last_update_time' => 1537187959,
      'music_title_search' => 'kokoro ni taiou; 心に太陽 ; team ni',
      'music_artist_search' => '; ngt48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 856,
      'music_track_id' => 0,
      'music_filename' => '1952708-42e1a5ce.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/NGT48~Y3NuX2FydGlzdH4xMzYzNQ==.html">NGT48</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1960104,
      'music_title_url' => 'baam-japanaese-version~momoland',
      'music_title' => 'Baam (Japanaese Version)',
      'music_artist' => 'Momoland',
      'music_artist_id' => '13391',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539053244,
      'music_last_update_time' => 1538735659,
      'music_title_search' => 'bam; japanaexe verxion',
      'music_artist_search' => '; momoland;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 276,
      'music_track_id' => 0,
      'music_filename' => '1960104-0dce2911.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Momoland~Y3NuX2FydGlzdH4xMzM5MQ==.html">Momoland</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1875596,
      'music_title_url' => 'itsuka-dekirukara-kyou-dekiru-akb48-show-ep176-nogizaka46-show-201802~nogizaka46',
      'music_title' => 'Itsuka Dekirukara Kyou Dekiru (いつかできるから今日できる) (AKB48 SHOW! ep176 (Nogizaka46 SHOW!) 2018.02.17)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538944798,
      'music_last_update_time' => 1518922316,
      'music_title_search' => 'itxuka dekirukara kiou dekiru; いつかできるから今日できる ; akb48 thow ep176; novaka46 thow 2018 02 17',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 919,
      'music_track_id' => 1,
      'music_filename' => '1875596-9f6c1469.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Nogizaka46~Y3NuX2FydGlzdH4xMzU1Nw==.html">Nogizaka46</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1950516,
      'music_title_url' => 'jibun-janai-kanji-3rd-generation-akb48-show-ep196-nogizaka46-show-201~nogizaka46',
      'music_title' => 'Jibun janai Kanji (自分じゃない感じ) / 3rd Generation (AKB48 SHOW! ep196 (Nogizaka46 SHOW!) 2018.09.02)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538943238,
      'music_last_update_time' => 1535983993,
      'music_title_search' => 'jibun janai kanji; 自分じゃない感じ ; 3rd generation; akb48 thow ep196; novaka46 thow 2018 09 02',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 958,
      'music_track_id' => 0,
      'music_filename' => '1950516-9e12803c.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Nogizaka46~Y3NuX2FydGlzdH4xMzU1Nw==.html">Nogizaka46</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1953565,
      'music_title_url' => 'bdz-shibuya-note-presents-twice-request-live-15092018~twice',
      'music_title' => 'BDZ (SHIBUYA NOTE Presents TWICE Request LIVE 15.09.2018)',
      'music_artist' => 'TWICE',
      'music_artist_id' => '13898',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539013587,
      'music_last_update_time' => 1537106547,
      'music_title_search' => 'bv; thibia note prexentx twice requext live 15 09 2018',
      'music_artist_search' => '; twice;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 522,
      'music_track_id' => 0,
      'music_filename' => '1953565-49972834.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => 'Like a bulldozer
Like a tank
Like a soldier
Kowasu yo kimi no kokoro no gādo
Hito-tsu nokorazuubau yo hāto.

Konna kimochi wa hajimete! dai jiken da yo
Kimi ni deatta totan ni dokidoki tomaranai....',
      'music_artist_html' => '<a href="/ca-si/TWICE~Y3NuX2FydGlzdH4xMzg5OA==.html">TWICE</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1955294,
      'music_title_url' => 'suki-no-tane-showroom-senbatsu~akb48',
      'music_title' => '&quot;Suki&quot; no Tane (“好き”のたね) / SHOWROOM Senbatsu',
      'music_artist' => 'AKB48',
      'music_artist_id' => '723',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538818669,
      'music_last_update_time' => 1537540842,
      'music_title_search' => '&qut;xuki&qut; no tane; “好き”のたね ; thowrom xenbatxu',
      'music_artist_search' => '; akb48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1445,
      'music_track_id' => 0,
      'music_filename' => '1955294-f3b75e20.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/AKB48~Y3NuX2FydGlzdH43MjM=.html">AKB48</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1897228,
      'music_title_url' => 'hayaokuri-calendar~hkt48',
      'music_title' => 'Hayaokuri Calendar (早送りカレンダー)',
      'music_artist' => 'HKT48',
      'music_artist_id' => '14603',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538950577,
      'music_last_update_time' => 1523324781,
      'music_title_search' => 'haiaokuri calendar; 早送りカレンダー',
      'music_artist_search' => '; hkt48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2283,
      'music_track_id' => 0,
      'music_filename' => '1897228-366106c9.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/HKT48~Y3NuX2FydGlzdH4xNDYwMw==.html">HKT48</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1948114,
      'music_title_url' => 'ddu-du-ddu-du-jp-ver-full-ver~blackpink',
      'music_title' => 'DDU-DU DDU-DU (JP Ver.) full ver.',
      'music_artist' => 'BLACKPINK',
      'music_artist_id' => '19565',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538918055,
      'music_last_update_time' => 1535454138,
      'music_title_search' => 'du du du du; jp ver ful ver',
      'music_artist_search' => '; blackpink;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1217,
      'music_track_id' => 0,
      'music_filename' => '1948114-afeab3d3.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/BLACKPINK~Y3NuX2FydGlzdH4xOTU2NQ==.html">BLACKPINK</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1920973,
      'music_title_url' => 'ikinari-punch-line~ske48',
      'music_title' => 'Ikinari Punch Line (いきなりパンチライン)',
      'music_artist' => 'SKE48',
      'music_artist_id' => '13695',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539003125,
      'music_last_update_time' => 1529663470,
      'music_title_search' => 'ikinari punch line; いきなりパンチライン',
      'music_artist_search' => '; xke48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1025,
      'music_track_id' => 0,
      'music_filename' => '1920973-ba70d571.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/SKE48~Y3NuX2FydGlzdH4xMzY5NQ==.html">SKE48</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1869691,
      'music_title_url' => 'candy-pop-music-station-20180202~twice',
      'music_title' => 'Candy Pop (MUSIC STATION 2018.02.02)',
      'music_artist' => 'TWICE',
      'music_artist_id' => '13898',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538831178,
      'music_last_update_time' => 1517623783,
      'music_title_search' => 'candi pop; muxic xtation 2018 02 02',
      'music_artist_search' => '; twice;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 393,
      'music_track_id' => 0,
      'music_filename' => '1869691-0382aaf5.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/TWICE~Y3NuX2FydGlzdH4xMzg5OA==.html">TWICE</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1875597,
      'music_title_url' => 'unubore-beach-akb48-show-ep176-nogizaka46-show-20180217~nogizaka46',
      'music_title' => 'Unubore Beach (自惚れビーチ) (AKB48 SHOW! ep176 (Nogizaka46 SHOW!) 2018.02.17)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538494411,
      'music_last_update_time' => 1518922575,
      'music_title_search' => 'unubore beach; 自惚れビーチ ; akb48 thow ep176; novaka46 thow 2018 02 17',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 400,
      'music_track_id' => 2,
      'music_filename' => '1875597-a4f8ce9b.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Nogizaka46~Y3NuX2FydGlzdH4xMzU1Nw==.html">Nogizaka46</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1875598,
      'music_title_url' => 'sono-hito-akb48-show-ep176-nogizaka46-show-20180217~nogizaka46',
      'music_title' => 'Sono Hito (その女) (AKB48 SHOW! ep176 (Nogizaka46 SHOW!) 2018.02.17)',
      'music_artist' => 'Nogizaka46',
      'music_artist_id' => '13557',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538494471,
      'music_last_update_time' => 1519009184,
      'music_title_search' => 'xono hito; その女 ; akb48 thow ep176; novaka46 thow 2018 02 17',
      'music_artist_search' => '; novaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 309,
      'music_track_id' => 3,
      'music_filename' => '1875598-e1534b25.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Nogizaka46~Y3NuX2FydGlzdH4xMzU1Nw==.html">Nogizaka46</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1880784,
      'music_title_url' => 'mou-mori-e-kaerou-ka~keyakizaka46',
      'music_title' => 'Mou Mori e Kaerou ka? (もう森へ帰ろうか?)',
      'music_artist' => 'Keyakizaka46',
      'music_artist_id' => '15964',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539023587,
      'music_last_update_time' => 1519810310,
      'music_title_search' => 'mou mori e kaerou ka ; もう森へ帰ろうか',
      'music_artist_search' => '; keiakizaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 1135,
      'music_track_id' => 0,
      'music_filename' => '1880784-cf7a8140.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Keyakizaka46~Y3NuX2FydGlzdH4xNTk2NA==.html">Keyakizaka46</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1890881,
      'music_title_url' => 'zenmai-shikake-no-yume-yuichanzu-akb48-show-ep180-keyakizaka46-show~keyakizaka46',
      'music_title' => 'Zenmai Shikake no Yume (ゼンマイ仕掛けの夢) / Yuichanzu (AKB48 SHOW! ep180 (Keyakizaka46 SHOW!) 2018.03.24)',
      'music_artist' => 'Keyakizaka46',
      'music_artist_id' => '15964',
      'cat_id' => 1,
      'cat_level' => 5,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538945618,
      'music_last_update_time' => 1521946217,
      'music_title_search' => 'zenmai thikake no iume; ゼンマイ仕掛けの夢 ; iuichanzu; akb48 thow ep180; keiakizaka46 thow 2018 03 24',
      'music_artist_search' => '; keiakizaka46;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 782,
      'music_track_id' => 0,
      'music_filename' => '1890881-ad393c14.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/Keyakizaka46~Y3NuX2FydGlzdH4xNTk2NA==.html">Keyakizaka46</a>',
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
      'music_id' => 1891544,
      'music_title_url' => 'el-clavo~prince-royce',
      'music_title' => 'El Clavo',
      'music_artist' => 'Prince Royce',
      'music_artist_id' => '15610',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538884726,
      'music_last_update_time' => 1522114463,
      'music_title_search' => 'el clavo',
      'music_artist_search' => '; prince roice;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 14069,
      'music_track_id' => 0,
      'music_filename' => '1891544-bd57aeb8.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro]
(Eh, eh, eh, eh, eh)
Eh, no me digas que piensas en él (no)
Con lo mal que te fue
Wo-wo-wo, wo.

[Estribillo]
Si esta noche tu novio te bota
Dile que tú no estás sola
Que tú estás conmigo
Q...',
    ),
    1 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1900826,
      'music_title_url' => 'sin-pijama~becky-g-natti-natasha',
      'music_title' => 'Sin Pijama',
      'music_artist' => 'Becky G;Natti Natasha',
      'music_artist_id' => '13401;13402',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538931937,
      'music_last_update_time' => 1524446238,
      'music_title_search' => 'xin pijama',
      'music_artist_search' => '; becki g; nati natatha;',
      'music_album_search' => '',
      'music_composer' => 'Rafael Pina; Nate Campany; Jon Leone; Ricky Montaner; Daddy Yankee; Mau Montaner; Gaby Music; Camilo Echeverry; Becky G; Natti Natasha',
      'music_album' => '',
      'music_listen' => 47680,
      'music_track_id' => 0,
      'music_filename' => '1900826-5cf42a7c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Becky G, Natti Natasha]
Solo, sólito en la habitación
Busca, que busca de mi calor, uoh-oh, no-no
Quiere\' remedio pa\' tu dolor
Nadie te lo hace mejor que yo, uoh-oh, no-no.

[Pre-coro: Natt...',
    ),
    2 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1924913,
      'music_title_url' => 'estamos-bien~bad-bunny',
      'music_title' => 'Estamos Bien',
      'music_artist' => 'Bad Bunny',
      'music_artist_id' => '13509',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539058667,
      'music_last_update_time' => 1530845751,
      'music_title_search' => 'extamox bin',
      'music_artist_search' => '; bad buni;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11077,
      'music_track_id' => 0,
      'music_filename' => '1924913-51c446dd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
Yeah, yeah (yeah)

[Coro:]
\'Tamos bien (wuh), yeh
Sobran los billetes de cien, yeah
No hay nada mal, estamos bien, \'tá to\' bien, hey
To\'s los míos están bien, \'tamos bien, hey

No te preoc...',
    ),
    3 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1886148,
      'music_title_url' => 'x-equis~nicky-jam-j-balvin',
      'music_title' => 'X (EQUIS)',
      'music_artist' => 'Nicky Jam;J. Balvin',
      'music_artist_id' => '16017;19166',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539051273,
      'music_last_update_time' => 1520905966,
      'music_title_search' => 'x; equix',
      'music_artist_search' => '; nicki jam; j balvin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 36245,
      'music_track_id' => 0,
      'music_filename' => '1886148-f112bd6f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Nicky Jam]
Aquel día te vi y tu energía sentí
Desde eso no te quiero lejos de mí (lejos de mí)
Sé que no sabes de mí (de mí)
Y no te puedo mentir
Lo que dicen en la calle sobre mí (sobre mí...',
    ),
    4 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1898044,
      'music_title_url' => 'magenta-riddim~dj-snake',
      'music_title' => 'Magenta Riddim',
      'music_artist' => 'DJ Snake',
      'music_artist_id' => '14774',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538738033,
      'music_last_update_time' => 1523673302,
      'music_title_search' => 'magenta ridim',
      'music_artist_search' => '; dj xnake;',
      'music_album_search' => '',
      'music_composer' => 'William Grigahcine',
      'music_album' => '',
      'music_listen' => 963,
      'music_track_id' => 0,
      'music_filename' => '1898044-76c00583.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Verse 1:] x4
Pig gam ba li
De la pig gam ba li ba
Pig gam ba li
De la pig gam ba li ba:

[verse 2:]
Pig gam ba li
De la pig gam ba li ba
Pig gam ba li
De la pig gam ba li ba
Bamb bamb bamb di gi d...',
    ),
    5 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1950192,
      'music_title_url' => 'mala-mia~maluma',
      'music_title' => 'Mala Mia',
      'music_artist' => 'Maluma',
      'music_artist_id' => '13396',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538573964,
      'music_last_update_time' => 1536052380,
      'music_title_search' => 'mala mia',
      'music_artist_search' => '; maluma;',
      'music_album_search' => '',
      'music_composer' => 'Nyal; Edgar Barrera; Miky La Sensa; Bryan Snaider Lezcano Chaverra; Kevin ADG; Maluma',
      'music_album' => '',
      'music_listen' => 802,
      'music_track_id' => 0,
      'music_filename' => '1950192-b3eeacc6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro]
Maluma baby, yeah.

[Pre-estribillo]
Me besé a tu novia, mala mía
[t1]Tao đã lỡ hôn con ghệ của mày, lỗi tao
Me pasé de tragos, mala mía
[t1]Tao đã trót quá chén, lỗi tao
Me cagué en el par...',
    ),
    6 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1866363,
      'music_title_url' => 'dura~daddy-yankee',
      'music_title' => 'Dura',
      'music_artist' => 'Daddy Yankee',
      'music_artist_id' => '433',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538932159,
      'music_last_update_time' => 1516760856,
      'music_title_search' => 'dura',
      'music_artist_search' => '; dadi ianke;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 14269,
      'music_track_id' => 0,
      'music_filename' => '1866363-4792c1dc.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
(Me gusta mi reggae)
Tiritiritiririti-Daddy
(Los Evo Jedi)

[Pre-Coro:]
Cuando yo la vi
Dije: &quot;Si esa mujer fuera para mí&quot;
Perdóname, te lo tenía que decir.

[Coro:]
\'Tás dura, d...',
    ),
    7 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1875565,
      'music_title_url' => 'amorfoda~bad-bunny',
      'music_title' => 'Amorfoda',
      'music_artist' => 'Bad Bunny',
      'music_artist_id' => '13509',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538996169,
      'music_last_update_time' => 1519183299,
      'music_title_search' => 'amorfoda',
      'music_artist_search' => '; bad buni;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 80522,
      'music_track_id' => 0,
      'music_filename' => '1875565-0cff2afb.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Estribillo]
No quiero que más nadie me hable de amor
Ya me cansé, to\' esos trucos ya me los sé
Esos dolores los pasé, yeh, yeh, yeh
No quiero que más nadie me hable de amor
Ya me cansé, to\' esos t...',
    ),
    8 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1897177,
      'music_title_url' => 'balenciaga~ozuna-ele-a-el-dominio',
      'music_title' => 'Balenciaga',
      'music_artist' => 'Ozuna;Ele A El Dominio',
      'music_artist_id' => '14556;106027',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538519716,
      'music_last_update_time' => 1523346718,
      'music_title_search' => 'balenciaga',
      'music_artist_search' => '; ozuna; ele a el dominio;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3065,
      'music_track_id' => 0,
      'music_filename' => '1897177-b654a6d0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Ele A El Dominio, Ozuna]
Yeh
El Dominio, nigga
Real G4 Life
Codeine, nigga
Trap Cartel (pew)
Ah
Dímelo, Ozuna (baby)
Vamo\' a quedarno\' con las bebesitas
Pew pew
Pew pew
Pew pew
Pew pew
Teng...',
    ),
    9 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1944229,
      'music_title_url' => 'satisfaccion~nicky-jam-bad-bunny-arcangel',
      'music_title' => 'Satisfacción',
      'music_artist' => 'Nicky Jam;Bad Bunny;Arcangel',
      'music_artist_id' => '16017;13509;17868',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538995920,
      'music_last_update_time' => 1534570717,
      'music_title_search' => 'xatixfacion',
      'music_artist_search' => '; nicki jam; bad buni; arcangel;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 731,
      'music_track_id' => 0,
      'music_filename' => '1944229-1b8ecdc2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Nicky Jam]
Cuando ella me llama al teléfono
Ya yo sé lo que ella quiere
Yo soy el que ella prefiere
Siempre me lo pide
Ella ya no cree en el amor
Quiere que le dé satisfacción
Una dama en l...',
    ),
    10 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1950193,
      'music_title_url' => 'ya-no-tiene-novio~sebastian-yatra-mau-y-ricky',
      'music_title' => 'Ya No Tiene Novio',
      'music_artist' => 'Sebastian Yatra;Mau Y Ricky',
      'music_artist_id' => '13432;17881',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539043299,
      'music_last_update_time' => 1536052413,
      'music_title_search' => 'ia no tine novio',
      'music_artist_search' => '; xebaxtian iacha; mau i ricki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 808,
      'music_track_id' => 0,
      'music_filename' => '1950193-3c921466.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro]
Yatra, Yatra
Okay, sí, sí
Mau y Ricky.

[Coro: Sebastián Yatra, Mau y Ricky]
Hace rato no la ven, pero hoy salió a beber
Porque ya no tiene novio
Ella sabe como soy, si me llama, yo le doy...',
    ),
    11 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1882547,
      'music_title_url' => 'azukita~steve-aoki-daddy-yankee-play-n-skillz-elvis-crespo',
      'music_title' => 'Azukita',
      'music_artist' => 'Steve Aoki;Daddy Yankee;Play N Skillz;Elvis Crespo',
      'music_artist_id' => '13358;433;57014;53199',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538940422,
      'music_last_update_time' => 1520300288,
      'music_title_search' => 'azukita',
      'music_artist_search' => '; xteve aoki; dadi ianke; plai n xkilz; elvix crexpo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 682,
      'music_track_id' => 0,
      'music_filename' => '1882547-1898c38c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Daddy Yankee, Elvis Crespo]
Re-, re-, re-, re-, re-, re-
¡Masivo!
D-D-D-D-DY
Elvis Crespo (play, skills)
Su-su-su-sube, Aoki
¡Multitude\'!

[Verse 1: Elvis Crespo, Daddy Yankee]
La morena ti...',
    ),
    12 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1904333,
      'music_title_url' => 'por-algo-sera~jencarlos-joy',
      'music_title' => 'Por Algo Será',
      'music_artist' => 'Jencarlos;Joy',
      'music_artist_id' => '14513;5059',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538960045,
      'music_last_update_time' => 1525379427,
      'music_title_search' => 'por algo xera',
      'music_artist_search' => '; jencarlox; joi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 454,
      'music_track_id' => 0,
      'music_filename' => '1904333-443a8acf.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Jencarlos Canela]
Sé que no es casualidad, no
Esto es algo ya del destino
Muchas vienen y van
Pero al final aquí has permanecido
Tú siempre presente
Si no estás, llegas a mi mente
Hemos ten...',
    ),
    13 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1919227,
      'music_title_url' => 'zum-zum~daddy-yankee-rkm-ken-y-arcangel',
      'music_title' => 'Zum Zum',
      'music_artist' => 'Daddy Yankee;Rkm &amp;Ken-Y;Arcangel',
      'music_artist_id' => '433;17867;6311;17868',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538763101,
      'music_last_update_time' => 1529158488,
      'music_title_search' => 'zum zum',
      'music_artist_search' => '; dadi ianke; rkm ken i; arcangel;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 713,
      'music_track_id' => 0,
      'music_filename' => '1919227-abafa780.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Pinar Records
Attention.

Everybody to the dance floor
Everybody to the dance floor
Estamos ready
Rkm y Ken-Y
Are you ready.

Déjate llevar, por la adrenalina
Y el ritmo de esta canción
Manos para...',
    ),
    14 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1944257,
      'music_title_url' => 'cuando-te-bese~becky-g-paulo-londra',
      'music_title' => 'Cuando Te Besé',
      'music_artist' => 'Becky G;Paulo Londra',
      'music_artist_id' => '13401;20990',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538876372,
      'music_last_update_time' => 1534570719,
      'music_title_search' => 'cuando te bexe',
      'music_artist_search' => '; becki g; paulo londra;',
      'music_album_search' => '',
      'music_composer' => 'Paulo Londra; Ovy On The Drums; Cristian Andrés Salazar',
      'music_album' => '',
      'music_listen' => 1226,
      'music_track_id' => 0,
      'music_filename' => '1944257-9264a7a8.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Paulo Londra, Becky G]
Y cuando te vi, supe que no era\' para mí (Paulo)
Seguro tenías a alguien que no lo ibas a dejar ir (Becky G), ey
Pero cuando te vi te juro que me decidí
Acercarme y d...',
    ),
    15 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1897252,
      'music_title_url' => 'shonichi~bnk48',
      'music_title' => 'Shonichi (วันแรก)',
      'music_artist' => 'BNK48',
      'music_artist_id' => '99243',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532875547,
      'music_last_update_time' => 1523341982,
      'music_title_search' => 'thonichi; วันแรก',
      'music_artist_search' => '; bnk48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 381,
      'music_track_id' => 0,
      'music_filename' => '1897252-711b92b6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
    ),
    16 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1868703,
      'music_title_url' => 'amantes-de-una-noche~natti-natasha-bad-bunny',
      'music_title' => 'Amantes De Una Noche',
      'music_artist' => 'Natti Natasha;Bad Bunny',
      'music_artist_id' => '13402;13509',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537833493,
      'music_last_update_time' => 1517366531,
      'music_title_search' => 'amantex de una noche',
      'music_artist_search' => '; nati natatha; bad buni;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2614,
      'music_track_id' => 0,
      'music_filename' => '1868703-d980aa5d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Bad Bunny &amp; Natti Natasha]
Yeeh, yeh, yeh, yeh
Yeeh, yeh, yeeeeh
Aunque lo bueno se tarde, espero
No tengo prisa, pero es que quiero yo (baby tú solo dime y)
Estar contigo, vista al mar...',
    ),
    17 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1900818,
      'music_title_url' => 'aprovechame~yandel',
      'music_title' => 'Aprovéchame',
      'music_artist' => 'Yandel',
      'music_artist_id' => '960',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1524429851,
      'music_title_search' => 'aprovechame',
      'music_artist_search' => '; iandel;',
      'music_album_search' => '',
      'music_composer' => 'Yandel',
      'music_album' => '',
      'music_listen' => 34,
      'music_track_id' => 0,
      'music_filename' => '1900818-ae84850b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
Aprovéchame hoy que quizás mañana te pueda faltar
No te confíes, por ahí existen muchas más
No hay tiempo, solo hay este momento y
No dejes que esto se enfríe, mantenlo despierto.

[Pre-...',
    ),
    18 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1866368,
      'music_title_url' => 'mamita~cnco',
      'music_title' => 'Mamita',
      'music_artist' => 'CNCO',
      'music_artist_id' => '20329',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538336677,
      'music_last_update_time' => 1516760923,
      'music_title_search' => 'mamita',
      'music_artist_search' => '; cnco;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8669,
      'music_track_id' => 0,
      'music_filename' => '1866368-2f334932.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Christopher]
Cuando me miras así
No sabes lo que te haría
Un poco por acá
Un toque por allí
Del mundo te olvidarías.

[Pre-Coro: Joel]
No te lo guardes mami
Que ganas si desconfías
En esta...',
    ),
    19 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1862850,
      'music_title_url' => 'shanghai~flori-mumajesi-dj-vicky',
      'music_title' => 'Shanghai',
      'music_artist' => 'Flori Mumajesi;DJ Vicky',
      'music_artist_id' => '99187;103297',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1524530416,
      'music_last_update_time' => 1515718634,
      'music_title_search' => 'thanghai',
      'music_artist_search' => '; flori mumajexi; dj vicki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 334,
      'music_track_id' => 0,
      'music_filename' => '1862850-9c0e7cf1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Flori:] 
A t\'ka mungu ndjenja ime, ndoshta 
Me t\'perqafu a t\'ka mungu, ndoshta 
T\'ka marr malli per mu, ndoshta 
Do vije ti me mu, ndoshta 
Me mu, hajde 
Shanghai, hajde 
Singapore, hajde 
Me mu,...',
    ),
    20 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1891544,
      'music_title_url' => 'el-clavo~prince-royce',
      'music_title' => 'El Clavo',
      'music_artist' => 'Prince Royce',
      'music_artist_id' => '15610',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538884726,
      'music_last_update_time' => 1522114463,
      'music_title_search' => 'el clavo',
      'music_artist_search' => '; prince roice;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 14069,
      'music_track_id' => 0,
      'music_filename' => '1891544-bd57aeb8.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro]
(Eh, eh, eh, eh, eh)
Eh, no me digas que piensas en él (no)
Con lo mal que te fue
Wo-wo-wo, wo.

[Estribillo]
Si esta noche tu novio te bota
Dile que tú no estás sola
Que tú estás conmigo
Q...',
      'music_artist_html' => '<a href="/ca-si/Prince-Royce~Y3NuX2FydGlzdH4xNTYxMA==.html">Prince Royce</a>',
    ),
    21 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1900826,
      'music_title_url' => 'sin-pijama~becky-g-natti-natasha',
      'music_title' => 'Sin Pijama',
      'music_artist' => 'Becky G;Natti Natasha',
      'music_artist_id' => '13401;13402',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538931937,
      'music_last_update_time' => 1524446238,
      'music_title_search' => 'xin pijama',
      'music_artist_search' => '; becki g; nati natatha;',
      'music_album_search' => '',
      'music_composer' => 'Rafael Pina; Nate Campany; Jon Leone; Ricky Montaner; Daddy Yankee; Mau Montaner; Gaby Music; Camilo Echeverry; Becky G; Natti Natasha',
      'music_album' => '',
      'music_listen' => 47680,
      'music_track_id' => 0,
      'music_filename' => '1900826-5cf42a7c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Becky G, Natti Natasha]
Solo, sólito en la habitación
Busca, que busca de mi calor, uoh-oh, no-no
Quiere\' remedio pa\' tu dolor
Nadie te lo hace mejor que yo, uoh-oh, no-no.

[Pre-coro: Natt...',
      'music_artist_html' => '<a href="/ca-si/Becky-G~Y3NuX2FydGlzdH4xMzQwMQ==.html">Becky G</a>, <a href="/ca-si/Natti-Natasha~Y3NuX2FydGlzdH4xMzQwMg==.html">Natti Natasha</a>',
    ),
    22 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1924913,
      'music_title_url' => 'estamos-bien~bad-bunny',
      'music_title' => 'Estamos Bien',
      'music_artist' => 'Bad Bunny',
      'music_artist_id' => '13509',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539058667,
      'music_last_update_time' => 1530845751,
      'music_title_search' => 'extamox bin',
      'music_artist_search' => '; bad buni;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 11077,
      'music_track_id' => 0,
      'music_filename' => '1924913-51c446dd.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
Yeah, yeah (yeah)

[Coro:]
\'Tamos bien (wuh), yeh
Sobran los billetes de cien, yeah
No hay nada mal, estamos bien, \'tá to\' bien, hey
To\'s los míos están bien, \'tamos bien, hey

No te preoc...',
      'music_artist_html' => '<a href="/ca-si/Bad-Bunny~Y3NuX2FydGlzdH4xMzUwOQ==.html">Bad Bunny</a>',
    ),
    23 => 
    array (
      'music_downloads_today' => 3,
      'music_id' => 1886148,
      'music_title_url' => 'x-equis~nicky-jam-j-balvin',
      'music_title' => 'X (EQUIS)',
      'music_artist' => 'Nicky Jam;J. Balvin',
      'music_artist_id' => '16017;19166',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539051273,
      'music_last_update_time' => 1520905966,
      'music_title_search' => 'x; equix',
      'music_artist_search' => '; nicki jam; j balvin;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 36245,
      'music_track_id' => 0,
      'music_filename' => '1886148-f112bd6f.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Nicky Jam]
Aquel día te vi y tu energía sentí
Desde eso no te quiero lejos de mí (lejos de mí)
Sé que no sabes de mí (de mí)
Y no te puedo mentir
Lo que dicen en la calle sobre mí (sobre mí...',
      'music_artist_html' => '<a href="/ca-si/Nicky-Jam~Y3NuX2FydGlzdH4xNjAxNw==.html">Nicky Jam</a>, <a href="/ca-si/J-Balvin~Y3NuX2FydGlzdH4xOTE2Ng==.html">J. Balvin</a>',
    ),
    24 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1898044,
      'music_title_url' => 'magenta-riddim~dj-snake',
      'music_title' => 'Magenta Riddim',
      'music_artist' => 'DJ Snake',
      'music_artist_id' => '14774',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538738033,
      'music_last_update_time' => 1523673302,
      'music_title_search' => 'magenta ridim',
      'music_artist_search' => '; dj xnake;',
      'music_album_search' => '',
      'music_composer' => 'William Grigahcine',
      'music_album' => '',
      'music_listen' => 963,
      'music_track_id' => 0,
      'music_filename' => '1898044-76c00583.mp4',
      'music_bitrate' => 128,
      'music_shortlyric' => '[Verse 1:] x4
Pig gam ba li
De la pig gam ba li ba
Pig gam ba li
De la pig gam ba li ba:

[verse 2:]
Pig gam ba li
De la pig gam ba li ba
Pig gam ba li
De la pig gam ba li ba
Bamb bamb bamb di gi d...',
      'music_artist_html' => '<a href="/ca-si/DJ-Snake~Y3NuX2FydGlzdH4xNDc3NA==.html">DJ Snake</a>',
    ),
    25 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1950192,
      'music_title_url' => 'mala-mia~maluma',
      'music_title' => 'Mala Mia',
      'music_artist' => 'Maluma',
      'music_artist_id' => '13396',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538573964,
      'music_last_update_time' => 1536052380,
      'music_title_search' => 'mala mia',
      'music_artist_search' => '; maluma;',
      'music_album_search' => '',
      'music_composer' => 'Nyal; Edgar Barrera; Miky La Sensa; Bryan Snaider Lezcano Chaverra; Kevin ADG; Maluma',
      'music_album' => '',
      'music_listen' => 802,
      'music_track_id' => 0,
      'music_filename' => '1950192-b3eeacc6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro]
Maluma baby, yeah.

[Pre-estribillo]
Me besé a tu novia, mala mía
[t1]Tao đã lỡ hôn con ghệ của mày, lỗi tao
Me pasé de tragos, mala mía
[t1]Tao đã trót quá chén, lỗi tao
Me cagué en el par...',
      'music_artist_html' => '<a href="/ca-si/Maluma~Y3NuX2FydGlzdH4xMzM5Ng==.html">Maluma</a>',
    ),
    26 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1866363,
      'music_title_url' => 'dura~daddy-yankee',
      'music_title' => 'Dura',
      'music_artist' => 'Daddy Yankee',
      'music_artist_id' => '433',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538932159,
      'music_last_update_time' => 1516760856,
      'music_title_search' => 'dura',
      'music_artist_search' => '; dadi ianke;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 14269,
      'music_track_id' => 0,
      'music_filename' => '1866363-4792c1dc.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro:]
(Me gusta mi reggae)
Tiritiritiririti-Daddy
(Los Evo Jedi)

[Pre-Coro:]
Cuando yo la vi
Dije: &quot;Si esa mujer fuera para mí&quot;
Perdóname, te lo tenía que decir.

[Coro:]
\'Tás dura, d...',
      'music_artist_html' => '<a href="/ca-si/Daddy-Yankee~Y3NuX2FydGlzdH40MzM=.html">Daddy Yankee</a>',
    ),
    27 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1875565,
      'music_title_url' => 'amorfoda~bad-bunny',
      'music_title' => 'Amorfoda',
      'music_artist' => 'Bad Bunny',
      'music_artist_id' => '13509',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538996169,
      'music_last_update_time' => 1519183299,
      'music_title_search' => 'amorfoda',
      'music_artist_search' => '; bad buni;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 80522,
      'music_track_id' => 0,
      'music_filename' => '1875565-0cff2afb.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Estribillo]
No quiero que más nadie me hable de amor
Ya me cansé, to\' esos trucos ya me los sé
Esos dolores los pasé, yeh, yeh, yeh
No quiero que más nadie me hable de amor
Ya me cansé, to\' esos t...',
      'music_artist_html' => '<a href="/ca-si/Bad-Bunny~Y3NuX2FydGlzdH4xMzUwOQ==.html">Bad Bunny</a>',
    ),
    28 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1897177,
      'music_title_url' => 'balenciaga~ozuna-ele-a-el-dominio',
      'music_title' => 'Balenciaga',
      'music_artist' => 'Ozuna;Ele A El Dominio',
      'music_artist_id' => '14556;106027',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538519716,
      'music_last_update_time' => 1523346718,
      'music_title_search' => 'balenciaga',
      'music_artist_search' => '; ozuna; ele a el dominio;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 3065,
      'music_track_id' => 0,
      'music_filename' => '1897177-b654a6d0.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Ele A El Dominio, Ozuna]
Yeh
El Dominio, nigga
Real G4 Life
Codeine, nigga
Trap Cartel (pew)
Ah
Dímelo, Ozuna (baby)
Vamo\' a quedarno\' con las bebesitas
Pew pew
Pew pew
Pew pew
Pew pew
Teng...',
      'music_artist_html' => '<a href="/ca-si/Ozuna~Y3NuX2FydGlzdH4xNDU1Ng==.html">Ozuna</a>, <a href="/ca-si/Ele-A-El-Dominio~Y3NuX2FydGlzdH4xMDYwMjc=.html">Ele A El Dominio</a>',
    ),
    29 => 
    array (
      'music_downloads_today' => 2,
      'music_id' => 1944229,
      'music_title_url' => 'satisfaccion~nicky-jam-bad-bunny-arcangel',
      'music_title' => 'Satisfacción',
      'music_artist' => 'Nicky Jam;Bad Bunny;Arcangel',
      'music_artist_id' => '16017;13509;17868',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538995920,
      'music_last_update_time' => 1534570717,
      'music_title_search' => 'xatixfacion',
      'music_artist_search' => '; nicki jam; bad buni; arcangel;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 731,
      'music_track_id' => 0,
      'music_filename' => '1944229-1b8ecdc2.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Nicky Jam]
Cuando ella me llama al teléfono
Ya yo sé lo que ella quiere
Yo soy el que ella prefiere
Siempre me lo pide
Ella ya no cree en el amor
Quiere que le dé satisfacción
Una dama en l...',
      'music_artist_html' => '<a href="/ca-si/Nicky-Jam~Y3NuX2FydGlzdH4xNjAxNw==.html">Nicky Jam</a>, <a href="/ca-si/Bad-Bunny~Y3NuX2FydGlzdH4xMzUwOQ==.html">Bad Bunny</a>, <a href="/ca-si/Arcangel~Y3NuX2FydGlzdH4xNzg2OA==.html">Arcangel</a>',
    ),
    30 => 
    array (
      'music_downloads_today' => 4,
      'music_id' => 1950193,
      'music_title_url' => 'ya-no-tiene-novio~sebastian-yatra-mau-y-ricky',
      'music_title' => 'Ya No Tiene Novio',
      'music_artist' => 'Sebastian Yatra;Mau Y Ricky',
      'music_artist_id' => '13432;17881',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1539043299,
      'music_last_update_time' => 1536052413,
      'music_title_search' => 'ia no tine novio',
      'music_artist_search' => '; xebaxtian iacha; mau i ricki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 808,
      'music_track_id' => 0,
      'music_filename' => '1950193-3c921466.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro]
Yatra, Yatra
Okay, sí, sí
Mau y Ricky.

[Coro: Sebastián Yatra, Mau y Ricky]
Hace rato no la ven, pero hoy salió a beber
Porque ya no tiene novio
Ella sabe como soy, si me llama, yo le doy...',
      'music_artist_html' => '<a href="/ca-si/Sebastian-Yatra~Y3NuX2FydGlzdH4xMzQzMg==.html">Sebastian Yatra</a>, <a href="/ca-si/Mau-Y-Ricky~Y3NuX2FydGlzdH4xNzg4MQ==.html">Mau Y Ricky</a>',
    ),
    31 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1882547,
      'music_title_url' => 'azukita~steve-aoki-daddy-yankee-play-n-skillz-elvis-crespo',
      'music_title' => 'Azukita',
      'music_artist' => 'Steve Aoki;Daddy Yankee;Play N Skillz;Elvis Crespo',
      'music_artist_id' => '13358;433;57014;53199',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538940422,
      'music_last_update_time' => 1520300288,
      'music_title_search' => 'azukita',
      'music_artist_search' => '; xteve aoki; dadi ianke; plai n xkilz; elvix crexpo;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 682,
      'music_track_id' => 0,
      'music_filename' => '1882547-1898c38c.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Daddy Yankee, Elvis Crespo]
Re-, re-, re-, re-, re-, re-
¡Masivo!
D-D-D-D-DY
Elvis Crespo (play, skills)
Su-su-su-sube, Aoki
¡Multitude\'!

[Verse 1: Elvis Crespo, Daddy Yankee]
La morena ti...',
      'music_artist_html' => '<a href="/ca-si/Steve-Aoki~Y3NuX2FydGlzdH4xMzM1OA==.html">Steve Aoki</a>, <a href="/ca-si/Daddy-Yankee~Y3NuX2FydGlzdH40MzM=.html">Daddy Yankee</a>, <a href="/ca-si/Play-N-Skillz~Y3NuX2FydGlzdH41NzAxNA==.html">Play N Skillz</a>, <a href="/ca-si/Elvis-Crespo~Y3NuX2FydGlzdH41MzE5OQ==.html">Elvis Crespo</a>',
    ),
    32 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1904333,
      'music_title_url' => 'por-algo-sera~jencarlos-joy',
      'music_title' => 'Por Algo Será',
      'music_artist' => 'Jencarlos;Joy',
      'music_artist_id' => '14513;5059',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538960045,
      'music_last_update_time' => 1525379427,
      'music_title_search' => 'por algo xera',
      'music_artist_search' => '; jencarlox; joi;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 454,
      'music_track_id' => 0,
      'music_filename' => '1904333-443a8acf.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Jencarlos Canela]
Sé que no es casualidad, no
Esto es algo ya del destino
Muchas vienen y van
Pero al final aquí has permanecido
Tú siempre presente
Si no estás, llegas a mi mente
Hemos ten...',
      'music_artist_html' => '<a href="/ca-si/Jencarlos~Y3NuX2FydGlzdH4xNDUxMw==.html">Jencarlos</a>, <a href="/ca-si/Joy~Y3NuX2FydGlzdH41MDU5.html">Joy</a>',
    ),
    33 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1919227,
      'music_title_url' => 'zum-zum~daddy-yankee-rkm-ken-y-arcangel',
      'music_title' => 'Zum Zum',
      'music_artist' => 'Daddy Yankee;Rkm &amp;Ken-Y;Arcangel',
      'music_artist_id' => '433;17867;6311;17868',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538763101,
      'music_last_update_time' => 1529158488,
      'music_title_search' => 'zum zum',
      'music_artist_search' => '; dadi ianke; rkm ken i; arcangel;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 713,
      'music_track_id' => 0,
      'music_filename' => '1919227-abafa780.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => 'Pinar Records
Attention.

Everybody to the dance floor
Everybody to the dance floor
Estamos ready
Rkm y Ken-Y
Are you ready.

Déjate llevar, por la adrenalina
Y el ritmo de esta canción
Manos para...',
      'music_artist_html' => '<a href="/ca-si/Daddy-Yankee~Y3NuX2FydGlzdH40MzM=.html">Daddy Yankee</a>, <a href="/ca-si/Rkm-amp~Y3NuX2FydGlzdH4xNzg2Nw==.html">Rkm &amp</a>, <a href="/ca-si/Ken-Y~Y3NuX2FydGlzdH42MzEx.html">Ken-Y</a>, <a href="/ca-si/Arcangel~Y3NuX2FydGlzdH4xNzg2OA==.html">Arcangel</a>',
    ),
    34 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1944257,
      'music_title_url' => 'cuando-te-bese~becky-g-paulo-londra',
      'music_title' => 'Cuando Te Besé',
      'music_artist' => 'Becky G;Paulo Londra',
      'music_artist_id' => '13401;20990',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538876372,
      'music_last_update_time' => 1534570719,
      'music_title_search' => 'cuando te bexe',
      'music_artist_search' => '; becki g; paulo londra;',
      'music_album_search' => '',
      'music_composer' => 'Paulo Londra; Ovy On The Drums; Cristian Andrés Salazar',
      'music_album' => '',
      'music_listen' => 1226,
      'music_track_id' => 0,
      'music_filename' => '1944257-9264a7a8.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Paulo Londra, Becky G]
Y cuando te vi, supe que no era\' para mí (Paulo)
Seguro tenías a alguien que no lo ibas a dejar ir (Becky G), ey
Pero cuando te vi te juro que me decidí
Acercarme y d...',
      'music_artist_html' => '<a href="/ca-si/Becky-G~Y3NuX2FydGlzdH4xMzQwMQ==.html">Becky G</a>, <a href="/ca-si/Paulo-Londra~Y3NuX2FydGlzdH4yMDk5MA==.html">Paulo Londra</a>',
    ),
    35 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1897252,
      'music_title_url' => 'shonichi~bnk48',
      'music_title' => 'Shonichi (วันแรก)',
      'music_artist' => 'BNK48',
      'music_artist_id' => '99243',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1532875547,
      'music_last_update_time' => 1523341982,
      'music_title_search' => 'thonichi; วันแรก',
      'music_artist_search' => '; bnk48;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 381,
      'music_track_id' => 0,
      'music_filename' => '1897252-711b92b6.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '',
      'music_artist_html' => '<a href="/ca-si/BNK48~Y3NuX2FydGlzdH45OTI0Mw==.html">BNK48</a>',
    ),
    36 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1868703,
      'music_title_url' => 'amantes-de-una-noche~natti-natasha-bad-bunny',
      'music_title' => 'Amantes De Una Noche',
      'music_artist' => 'Natti Natasha;Bad Bunny',
      'music_artist_id' => '13402;13509',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1537833493,
      'music_last_update_time' => 1517366531,
      'music_title_search' => 'amantex de una noche',
      'music_artist_search' => '; nati natatha; bad buni;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 2614,
      'music_track_id' => 0,
      'music_filename' => '1868703-d980aa5d.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Bad Bunny &amp; Natti Natasha]
Yeeh, yeh, yeh, yeh
Yeeh, yeh, yeeeeh
Aunque lo bueno se tarde, espero
No tengo prisa, pero es que quiero yo (baby tú solo dime y)
Estar contigo, vista al mar...',
      'music_artist_html' => '<a href="/ca-si/Natti-Natasha~Y3NuX2FydGlzdH4xMzQwMg==.html">Natti Natasha</a>, <a href="/ca-si/Bad-Bunny~Y3NuX2FydGlzdH4xMzUwOQ==.html">Bad Bunny</a>',
    ),
    37 => 
    array (
      'music_downloads_today' => 0,
      'music_id' => 1900818,
      'music_title_url' => 'aprovechame~yandel',
      'music_title' => 'Aprovéchame',
      'music_artist' => 'Yandel',
      'music_artist_id' => '960',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 0,
      'music_last_update_time' => 1524429851,
      'music_title_search' => 'aprovechame',
      'music_artist_search' => '; iandel;',
      'music_album_search' => '',
      'music_composer' => 'Yandel',
      'music_album' => '',
      'music_listen' => 34,
      'music_track_id' => 0,
      'music_filename' => '1900818-ae84850b.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Verse 1:]
Aprovéchame hoy que quizás mañana te pueda faltar
No te confíes, por ahí existen muchas más
No hay tiempo, solo hay este momento y
No dejes que esto se enfríe, mantenlo despierto.

[Pre-...',
      'music_artist_html' => '<a href="/ca-si/Yandel~Y3NuX2FydGlzdH45NjA=.html">Yandel</a>',
    ),
    38 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1866368,
      'music_title_url' => 'mamita~cnco',
      'music_title' => 'Mamita',
      'music_artist' => 'CNCO',
      'music_artist_id' => '20329',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1538336677,
      'music_last_update_time' => 1516760923,
      'music_title_search' => 'mamita',
      'music_artist_search' => '; cnco;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 8669,
      'music_track_id' => 0,
      'music_filename' => '1866368-2f334932.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Intro: Christopher]
Cuando me miras así
No sabes lo que te haría
Un poco por acá
Un toque por allí
Del mundo te olvidarías.

[Pre-Coro: Joel]
No te lo guardes mami
Que ganas si desconfías
En esta...',
      'music_artist_html' => '<a href="/ca-si/CNCO~Y3NuX2FydGlzdH4yMDMyOQ==.html">CNCO</a>',
    ),
    39 => 
    array (
      'music_downloads_today' => 1,
      'music_id' => 1862850,
      'music_title_url' => 'shanghai~flori-mumajesi-dj-vicky',
      'music_title' => 'Shanghai',
      'music_artist' => 'Flori Mumajesi;DJ Vicky',
      'music_artist_id' => '99187;103297',
      'cat_id' => 1,
      'cat_level' => 7,
      'cat_sublevel' => 0,
      'cat_custom' => 0,
      'cover_id' => 0,
      'music_download_time' => 1524530416,
      'music_last_update_time' => 1515718634,
      'music_title_search' => 'thanghai',
      'music_artist_search' => '; flori mumajexi; dj vicki;',
      'music_album_search' => '',
      'music_composer' => '',
      'music_album' => '',
      'music_listen' => 334,
      'music_track_id' => 0,
      'music_filename' => '1862850-9c0e7cf1.mp4',
      'music_bitrate' => 96,
      'music_shortlyric' => '[Flori:] 
A t\'ka mungu ndjenja ime, ndoshta 
Me t\'perqafu a t\'ka mungu, ndoshta 
T\'ka marr malli per mu, ndoshta 
Do vije ti me mu, ndoshta 
Me mu, hajde 
Shanghai, hajde 
Singapore, hajde 
Me mu,...',
      'music_artist_html' => '<a href="/ca-si/Flori-Mumajesi~Y3NuX2FydGlzdH45OTE4Nw==.html">Flori Mumajesi</a>, <a href="/ca-si/DJ-Vicky~Y3NuX2FydGlzdH4xMDMyOTc=.html">DJ Vicky</a>',
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