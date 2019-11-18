<?php

require 'config/database.class.php';


echo 'hi';


$db=Database::getInstance();
$my=$db->getConnection();
