<?php

/**
* ZCE 80
* @author by Vuong Nguyen
*/
session_start();

echo (session_id() <=> $_COOKIE['PHPSESSID']) !== false? "hello": "world";