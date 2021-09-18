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

    <title>Embedded Web - Learn Arduino Uno</title>
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
            <li class="active"><a href="../arduinouno">Arduino Uno</a></li>
              <li><a href="../arduinonano">Arduino Nano</a></li>
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
              <h2 class="center-me">Arduino Uno</h2>
         
              <h4> 
              The Arduino Uno is an open-source microcontroller board based on the Microchip ATmega328P microcontroller and developed by Arduino. </h4>

              <h4>
              The board is equipped with sets of digital and analog input/output (I/O) pins that may be interfaced to various expansion boards (shields) and other circuits.[1] The board has 14 digital I/O pins (six capable of PWM output), 6 analog I/O pins, and is programmable with the Arduino IDE (Integrated Development Environment), via a type B USB cable.  </h4>
            </div>
          </div>
        </section> 
        
       <!-- <section class="top-section-subsec">
          <div class="card-sec">
               <a href="arduinouno/"> 
                  <div class="atmellogo">
                    <h2>Arduino Uno</h2>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

               <a href="arduinonano/"> 
                  <div class="mchiplogo">
                   <h2>Arduino Nano</h2>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>          
                </div>
        </section>-->

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
