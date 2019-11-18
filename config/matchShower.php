<?php


require 'config/database.class.php';

class matchShower{



public function caller(){

     $db=Database::getInstance();
     $addNewMenu=$db->getConnection();



     $queryMenuList=$addNewMenu($query="SELECT * FROM `matches` ");

     while ($fetch_menu=mysqli_fetch_assoc($queryMenuList)) {

       print_r($fetch_menu);
    }

}
