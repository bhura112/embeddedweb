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

    <title>Learn Xmega - ATxMega8E5 micro-controller</title>
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
              <li class="active"><a href="../../xmega">XMega</a></li>
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
              <h2 class="center-me">ATxMega8E5</h2>
              <h4>  The XMEGA® E devices feature an innovative XMEGA® Custom Logic module (XCL) consisting of two independent 8-bit timer/counters and two lookup tables used for defining glue logic. </h4>
              <h4>   It is designed to reduce the bill of material (BOM) and PCB size, as the XCL can replace external circuitry such as delay elements, RS-latches, D-latches, D-flip-flops chip-select logic, AND, NAND, OR, NOR, XOR, XNOR, NOT, MUX AND/OR/XOR logic gates. Also, it can, together with the USART, enable customized communication protocols. By executing powerful instructions in a single clock cycle, the device achieves throughputs approaching one MIPS per MHz, balancing power consumption and processing speed.</h4>
            </div>
          </div>
        </section> 
      </main>
    </div>
    
    <div class="page-space"></div>
    <?php include_once '../../../../global/foot.php';?>
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
