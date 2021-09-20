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

    <title>Embedded Web - Learn XMega ATxMega128A1 Micro Controller</title>
  </head>

  <body>
    <a class="anchor" id="top"></a>
    <header class="header">
      <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="../"
              ><b>Embedded Web</b></a
            >
          </div>
          <div id="menu-topics" class="menu-topics">
            <ul id="navbar-nav" class="nav navbar-nav">
              <li><a href="../../mega">ATMega</a></li>
              <li  class="active"><a href="../../xmega">XMega</a></li>
              <li><a href="../../arduino">Arduino</a></li>
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
              <h2 class="center-me">ATxMega128A1</h2>         
              <h4> Low-power, high-performance 8/16-bit AVR® microcontroller featuring 128 KB self-programming Flash program memory, 8 KB boot code section, 8 KB SRAM, 2 KB EEPROM, external bus interface, 4-channel DMA controller, 8-channel event system, and up to 32 MIPS throughput at 32 MHz. The AVR® XMEGA® A1 series features 100-pin packages. </h4>
              <h4>The device can be used in a wide range of applications, such as building, industrial, motor, board, and climate control; hand-held battery applications; factory automation; power tools; HVAC; networking, metering, large home appliances, and optical and medical devices.</h4>
            </div>
          </div>
        </section> 
      </main>
    </div>
    
    <div class="page-space"></div>
    <?php include_once '../../../../global/foot.php'; ?>
  </body>
  <script src="script.js"></script>
  <script src="../../../global/headerScript.js"></script>
  <script src="../../../global/footerScript.js"></script>
  <script
    src="https://kit.fontawesome.com/2197d61e3b.js"
    crossorigin="anonymous"
  ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</html>