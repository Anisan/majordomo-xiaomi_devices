<?php

$this->device_types['humidifier'] = array(
    'TITLE'=>'XiHumidifier',
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SXiHumidifier',
    'PROPERTIES'=>array(
        'humidity'=>array('DESCRIPTION'=>'Humidity'),
        'temperature'=>array('DESCRIPTION'=>'Temperature'),
        'mode'=>array('DESCRIPTION'=>'Mode','_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'auto=Auto,high=High,medium=Meduim, silent=Silent'),
        'depth'=>array('DESCRIPTION'=>'Water level'),
        'speed'=>array('DESCRIPTION'=>'Speed'),
        'dry'=>array('DESCRIPTION'=>'Dry','_CONFIG_TYPE'=>'yesno'),
        'use_time'=>array('DESCRIPTION'=>'Use time (sec)'),
        'led_b'=>array('DESCRIPTION'=>'Led','_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'bright=Bright, dim=Dim, off=Off'),
        'buzzer'=>array('DESCRIPTION'=>'Buzzer','_CONFIG_TYPE'=>'yesno'),
        'child_lock'=>array('DESCRIPTION'=>'Child lock','_CONFIG_TYPE'=>'yesno'),
        'limit_hum'=>array('DESCRIPTION'=>'Limit humidity','_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'20,30,40,50,60,70,80')
    ),
    'METHODS'=>array(
        'modeAuto'=>array('DESCRIPTION'=>'Set auto mode','_CONFIG_SHOW'=>1),
        'modeHigh'=>array('DESCRIPTION'=>'Set high mode','_CONFIG_SHOW'=>1),
        'modeMeduim'=>array('DESCRIPTION'=>'Set medium mode','_CONFIG_SHOW'=>1),
        'modeSilent'=>array('DESCRIPTION'=>'Set silent mode','_CONFIG_SHOW'=>1)
    ),
);
