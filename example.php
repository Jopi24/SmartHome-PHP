<?php
/**
 * Created with IntelliJ IDEA.
 * Project: SmartHome PHP
 * User: Bubelbub <bubelbub@gmail.com>
 * Date: 07.12.13
 * Time: 15:44
 */

require_once 'SmartHome.php';
require_once 'Request/BaseRequest.php';
require_once 'Request/LoginRequest.php';
require_once 'Request/GetEntitiesRequest.php';
require_once 'Request/GetShcInformationRequest.php';
require_once 'Request/GetAllLogicalDeviceStatesRequest.php';
require_once 'Request/GetApplicationTokenRequest.php';
require_once 'Request/GetShcTypeRequest.php';
require_once 'Request/GetAllPhysicalDeviceStatesRequest.php';
require_once 'Request/GetMessageListRequest.php';

$newLine = php_sapi_name() == 'cli' ? "\n" : '<br />';

$sh = new \Bubelbub\SmartHomePHP\SmartHome('Hostname or IP address', 'Username', 'Password');

// get your current session id
echo 'Your session id is ' . $sh->getSessionId() . $newLine;

// get your current version
echo 'Your current version is ' . $sh->getVersion() . $newLine;

// get your current configuration version
echo 'Your current configuration version is ' . $sh->getConfigVersion() . $newLine;

// Get all logical devices states
print_r($sh->getAllLogicalDeviceStates());

// Get all messages
print_r($sh->getMessageList());
