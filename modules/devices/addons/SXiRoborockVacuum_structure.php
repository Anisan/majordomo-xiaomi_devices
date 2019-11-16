<?php

$this->device_types['roborock_vacuum'] = array(
    'TITLE'=>'XiRoborockVacuum',
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SXiRoborockVacuum',
    'PROPERTIES'=>array(
        'state'=>array('DESCRIPTION'=>'State','ONCHANGE'=>'stateUpdated','DATA_KEY'=>1),
        'state_description'=>array('DESCRIPTION'=>'State description'),
        'battery'=>array('DESCRIPTION'=>'Battery','DATA_KEY'=>1),
        'error'=>array('DESCRIPTION'=>'Error','ONCHANGE'=>'errorUpdated','DATA_KEY'=>1),
        'error_description'=>array('DESCRIPTION'=>'Error description'),
    ),
    'METHODS'=>array(
        'stateUpdated'=>array('DESCRIPTION'=>'State Updated'),
        'errorUpdated'=>array('DESCRIPTION'=>'Error Updated'),
    ),
);

@include_once(ROOT.'languages/SXiRoborockVacuum_'.SETTINGS_SITE_LANGUAGE.'.php');
@include_once(ROOT.'languages/SXiRoborockVacuum_default'.'.php'); 