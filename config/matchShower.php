<?php


require 'config/database.class.php';

class matchShower{



public function caller(){

     $db=Database::getInstance();
     $addNewMenu=$db->getConnection();


     $query_insert = "SELECT * FROM matches";
     $res_insert= $addNewMenu->query($query_insert);

     if ($res_insert == false){
         echo 'PROBLEM';
     }else{
         ECHO 'DONE';}

}



}
