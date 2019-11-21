<?php

@include_once(ROOT.'languages/SXiRoborockVacuum_'.SETTINGS_SITE_LANGUAGE.'.php');
@include_once(ROOT.'languages/SXiRoborockVacuum_default'.'.php'); 

$this->device_types['roborock_vacuum'] = array(
    'TITLE'=>'XiRoborockVacuum',
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SXiRoborockVacuum',
    'PROPERTIES'=>array(
        'state'=>array('DESCRIPTION'=>'State','ONCHANGE'=>'stateUpdated','DATA_KEY'=>1),
        'state_icon'=>array('DESCRIPTION'=>'State icon (fontawesome)'),
        'state_description'=>array('DESCRIPTION'=>'State description'),
        'battery'=>array('DESCRIPTION'=>'Battery','DATA_KEY'=>1),
        'error'=>array('DESCRIPTION'=>'Error','ONCHANGE'=>'errorUpdated','DATA_KEY'=>1),
        'error_description'=>array('DESCRIPTION'=>'Error description'),
        'command'=>array('DESCRIPTION'=>'Command'),
        'clean_time'=>array('DESCRIPTION'=>'Clean time'),
        'clean_area'=>array('DESCRIPTION'=>'Clean area'),
    ),
    'METHODS'=>array(
        'stateUpdated'=>array('DESCRIPTION'=>'State Updated'),
        'errorUpdated'=>array('DESCRIPTION'=>'Error Updated'),
        'start'=>array('DESCRIPTION'=>'Start','_CONFIG_SHOW'=>1),
        'stop'=>array('DESCRIPTION'=>'Stop','_CONFIG_SHOW'=>1),
        'pause'=>array('DESCRIPTION'=>'Pause','_CONFIG_SHOW'=>1),
        'charge'=>array('DESCRIPTION'=>'Charge','_CONFIG_SHOW'=>1),
    ),
);

