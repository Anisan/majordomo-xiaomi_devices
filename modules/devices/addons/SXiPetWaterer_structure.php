<?php
$this->device_types['pet_waterer'] = array(
    'TITLE'=>'XiPetWaterer',
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SXiPetWaterer',
    'PROPERTIES'=>array(
        'mode'=>array('DESCRIPTION'=>"Mode",'_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'1=Standart,2=Smart'),
        'led'=>array('DESCRIPTION'=>"Led indicator",'_CONFIG_TYPE'=>'yesno'),
        'water'=>array('DESCRIPTION'=>"Water",'ONCHANGE'=>'stateUpdated','_CONFIG_TYPE'=>'readonly'),
        'fault'=>array('DESCRIPTION'=>'Fault','ONCHANGE'=>'faultUpdated','DATA_KEY'=>1,'_CONFIG_TYPE'=>'readonly'),
        'filter_left_time'=>array('DESCRIPTION'=>'Filter left (days)','ONCHANGE'=>'filterUpdated','DATA_KEY'=>1,'_CONFIG_TYPE'=>'readonly'),
        'remain_clean_time'=>array('DESCRIPTION'=>'Remain clean time(days)','ONCHANGE'=>'remainCleanUpdated','DATA_KEY'=>1,'_CONFIG_TYPE'=>'readonly'),
    ),
    'METHODS'=>array(
        'waterUpdated'=>array('DESCRIPTION'=>'Water Updated'),
        'faultUpdated'=>array('DESCRIPTION'=>'Fault Updated'),
        'filterUpdated'=>array('DESCRIPTION'=>'Filter left time Updated'),
        'remainCleanUpdated'=>array('DESCRIPTION'=>'Remain clean time Updated'),
    ),

);
