<?php

class connection{

  /*public $g_conn;

  public $g_hostaddr = "sql208.ihostfull.com";

  public $g_username = "uoolo_29149294";

  public $g_password = "bhura@112";

  public $g_db       = "uoolo_29149294_eweb";
*/
  public $g_conn;
  public $g_hostaddr = "127.0.0.1";
  public $g_username = "root";
  public $g_password = "";
  public $g_db       = "embedded_web";

  function database_connect($dbname)
  {
      $this->g_conn = new mysqli($this->g_hostaddr,$this->g_username, $this->g_password,$this->g_db);
  }

  function database_disconnect(){

  }

  function database_close(){

  }
  function database_read() {

  }

  function database_write() {

  }

  function database_update() {

  }

}

?>

