<?php 

   require_once "db.php";
   
   global $dbhost;
   global $dbuser;
   global $dbpass;
   global $dbname;
   global $mainData;
   global $headData;  

   define('LOCAL',1);
   define('SERVER',0);

 if(LOCAL) {
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = "";
   $dbname = 'embedded_web';
 }
 if(SERVER) {
    $dbhost = "sql310.epizy.com";
    $dbuser = "epiz_29643920";
    $dbpass = "yeFg1Tc6oy";  
    $dbname = "epiz_29643920_eweb";
  
 }
    function hCallBack($r) {
        global $headData;
        $headData[] = $r;
    }
    function GetMain($pageId) {
        global $dbhost;
        global $dbuser;
        global $mainData;
        global $dbpass;
        global $dbname;
        $mdb = new db($dbhost, $dbuser, "", $dbname);        
        $mainObj = $mdb->query('SELECT * FROM main WHERE page_id='.$pageId)->fetchArray();
        $mdb->close();
        $mainData = $mainObj;
    }
    function GetHeadData($pageId) {
        global $dbhost;
        global $dbuser;
        global $mainData;
        global $dbpass;
        global $dbname;
        $hdb = new db($dbhost, $dbuser, $dbpass, $dbname);        
        $headObj = $hdb->query('SELECT * FROM header WHERE page_id='.$pageId)->fetchAll(hCallBack);
        $hdb->close();
    }

    function GetBodyData($pageId) {

    }
    function GetfootData($pageId) {

    }
?>