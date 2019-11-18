<?php

class Database{

  private static $_instance;
  private $_connection;
  private $_hostname='localhost';
  private $_username='root';
  private $_passwd='';
  private $_database='toreBet';


  function __construct(){

    $_connnection= new mysqli($this->_hostname,$this->_username,$this->_passwd,$this->_database);

    if (mysqli_connect_error()){
      echo 'THERE IS SOME ERRORS'.mysqli_connect_error();
    }

  }


  public function getConnection() {
          return $this->_connection;
      }


      /*
      Get an instance of the Database
      @return Instance
      */
      public static function getInstance() {
          if(!self::$_instance) { // If no instance then make one
              self::$_instance = new self();
          }
          return self::$_instance;
      }

}
