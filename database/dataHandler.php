<?php 

   require_once "db.php";
   
   global $headData;    
   global $mainData;

    function hCallBack($r) {
        global $headData;
        $headData[] = $r;
    }
    function GetMain($pageId) {
        global $mainData;
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'embedded_web';
        $mdb = new db($dbhost, $dbuser, $dbpass, $dbname);        
        $mainObj = $mdb->query('SELECT * FROM main WHERE page_id='.$pageId)->fetchArray();
        $mdb->close();
        $mainData = $mainObj;
    }
    function GetHeadData($pageId) {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'embedded_web';
        $hdb = new db($dbhost, $dbuser, $dbpass, $dbname);        
        $headObj = $hdb->query('SELECT * FROM header WHERE page_id='.$pageId)->fetchAll(hCallBack);
        $hdb->close();
    }

    function GetBodyData($pageId) {

    }
    function GetfootData($pageId) {

    }
?>