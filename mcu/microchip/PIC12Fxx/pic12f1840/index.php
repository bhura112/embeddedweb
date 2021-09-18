<?php 
   
   require_once '../../../../database/connection.php';
   $rowobj;
   $db = new connection();

   $db->database_connect('embedded_web');

   if( $db->g_conn->connect_error) {
     echo "database error 10500db01";
     exit();
    }
   
    if( $result = $db->g_conn->query("SELECT * FROM index_tab "))
    {
        while( $rowobj = $result->fetch_object())
        {
        if( $rowobj->page_id == 1)
        break;
        }
        $result -> free_result();
    }

    $db->g_conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../../global/header.css" />
    <link rel="stylesheet" href="../../../../global/foot.css" />
    <link rel="stylesheet" href="style.css" />

    <title><?php  echo $rowobj->page_title; ?></title>
  </head>

  <body>
    <a class="anchor" id="top"></a>
    <header class="header">
      <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="../"
              ><b><?php  echo $rowobj->web_name; ?></b></a
            >
          </div>
          <div id="menu-topics" class="menu-topics">
            <ul id="navbar-nav" class="nav navbar-nav">
            <li><a href="../../PIC10Fxx">PIC10</a></li>
              <li class="active"><a href="../../PIC12Fxx">PIC12</a></li>
              <li><a href="../../PIC16Fxx">PIC16</a></li>
              <li><a href="../../PIC18Fxx">PIC18</a></li>
              <li><a href="../../PIC24Fxx">PIC24</a></li>
              <li><a href="../../PIC32Fxx">PIC32</a></li>
            </ul>
          </div>

          <div onclick="burgerClicked()" class="burger-menu">
            <i id="burgericon" class="fa fa-bars fa-2x" aria-hidden="true"></i>
          </div>
        </div>
      </nav>
    </header>

  <div class="main-container">
      <main class="main">
        <section class="top-section">
          <div class="content">
            <picture>
              <img src="../../../../img/flip-card-front.svg">
            </picture>
            <div class="content-col">
              <h2 class="center-me">PIC12F1840</h2>
         
              <h4> 
                 Microcontroller is a small computer on a single metal-oxide-semiconductor (MOS) integrated circuit (IC) chip. 
                 A microcontroller contains one or more CPUs (processor cores) along with memory and programmable input/output peripherals. 
              </h4>

              <h4>
                 Microcontrollers are designed for embedded applications, in contrast to the microprocessors used in personal computers or other general 
                 purpose applications consisting of various discrete chips.
               </h4>
            </div>
          </div>
        </section> 
      </main>
    </div>
    
    <div class="page-space"></div>
    <?php include_once '../../../../global/foot.php'; ?>
  </body>
  <script src="script.js"></script>
  <script src="../../../../global/headerScript.js"></script>
  <script src="../../../../global/footerScript.js"></script>
  <script
    src="https://kit.fontawesome.com/2197d61e3b.js"
    crossorigin="anonymous"
  ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</html>
