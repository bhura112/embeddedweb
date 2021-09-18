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
            <li class="active"><a href="../../arm7">ARM7-TDMI</a></li>
              <li><a href="../../cortex-m0">CORTEX-M0</a></li>
              <li><a href="../../cortex-m3">CORTEX-M3</a></li>
              <li><a href="../../stm">STM</a></li>
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
              <h2 class="center-me">LPC2124</h2>
         
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
    <footer class="footer-distributed">
 
 <div class="footer-left">
 
 <h3>Embedded<span>Web</span></h3>
 
 <p class="footer-links">
 <a href="https://embeddedweb.in/mcu">Micro Controller</a>
 ·
 <a href="https://embeddedweb.in/rtos">RTOS</a>
 ·
 <a href="https://embeddedweb.in/linux">LINUX</a>
 ·
 <a href="https://embeddedweb.in/qt">QT</a>
 </p>
 
 <p class="footer-company-name">embeddedweb &copy; 2021</p>
 </div>
 
 <div class="footer-center">
 
 <div>
 <i class="fa fa-gavel"></i>
 <a href="http://">Terms & Conditions</a>
 </div>
 
 <div>
 <i class="fa fa-lock"></i>
 <a href="http://">Privacy Police</a>
 </div>
 
 <div>
 <i class="fa fa-envelope"></i>
 <p><a href="mailto:contact@embeddedweb.in">contact@embeddedweb.in</a></p>
 </div>
 
 </div>
 
 <div class="footer-right">
 
 <p class="footer-company-about">
 <span>About the company</span>
 Embedded Web is a blog fro Embedded Devlopers,Fimrware/Hardware Desgin,Real Time Operating System and Linux Learner.
 </p>
 
 <div class="footer-icons">
 
 <a href="https://facebook.com/embeddedweb"><i class="fa fa-facebook"></i></a>
 <a href="https://twitter.com/embeddedweb"><i class="fa fa-twitter"></i></a>
 <a href="https://youtube.com/embeddedweb"><i class="fa fa-youtube"></i></a>
 <a href="https://github.com/embeddedweb"><i class="fa fa-github"></i></a>
 
 </div>
 
 </div>
 </footer>
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
