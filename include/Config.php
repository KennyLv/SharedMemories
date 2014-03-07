<?php
/*****************************
*数据库连接
*****************************/
/**
 * Database configuration
 */
 //For local test
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123456');
define('DB_HOST', 'localhost');
/*
//For product release
define('DB_USERNAME', 'b15_14447457');
define('DB_PASSWORD', 'qwertyui1');
define('DB_HOST', 'sql113.byethost15.com');
*/

define('DB_NAME', 'webgame');

define('USER_CREATED_SUCCESSFULLY', 0);
define('USER_CREATE_FAILED', 1);
define('USER_ALREADY_EXISTED', 2);

?>