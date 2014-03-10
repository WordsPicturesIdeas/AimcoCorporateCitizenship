<?php

//let's set up a root path constant
define('ROOT',getcwd().DIRECTORY_SEPARATOR);
 
//define the includes and config folders
define('INCLUDES',ROOT.'includes'.DIRECTORY_SEPARATOR);
define('CONFIG',ROOT.'config'.DIRECTORY_SEPARATOR);
 
//load in the main configuration file
include_once(CONFIG.'base.inc.php');

//define our status constant
define('STATUS','production');
 

switch (STATUS) 
{
	case 'production': 
		ini_set('display_errors','Off');
		break;

}