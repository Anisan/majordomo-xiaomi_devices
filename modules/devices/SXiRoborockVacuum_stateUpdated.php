<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;

@include_once(ROOT.'languages/SXiRoborockVacuum_'.SETTINGS_SITE_LANGUAGE.'.php');
@include_once(ROOT.'languages/SXiRoborockVacuum_default'.'.php'); 

$state = $params['NEW_VALUE'];
$desc = constant('LANG_DEVICES_VACUUM_STATE_'. $state);

$this->setProperty('state_description', $desc);

say(LANG_DEVICES_VACUUM_STATE . ": " . $desc);

if ($state == 8)
    $this->setProperty('status', 0);
else
    $this->setProperty('status', 1);


