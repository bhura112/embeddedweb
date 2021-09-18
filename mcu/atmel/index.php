<?php 
   
   require_once '../../database/connection.php';
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
    <link rel="stylesheet" href="../../global/header.css" />
    <link rel="stylesheet" href="../../global/foot.css" />
    <link rel="stylesheet" href="style.css" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8795837294797076"
     crossorigin="anonymous"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TFF1PLC6Q9"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-TFF1PLC6Q9');
    </script>
    <title>Learn Atmel Micro controllers</title>
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
              <li class="active"><a href=".">ATMEL</a></li>
              <li><a href="../microchip">MICROCHIP</a></li>
              <li><a href="../arm">ARM</a></li>
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
              <img src="../../img/flip-card-front.svg">
            </picture>
            <div class="content-col">
              <h2 class="center-me">ATMEL</h2>
         
              <h4> 
              AVR is a family of microcontrollers developed since 1996 by Atmel, acquired by Microchip Technology in 2016. These are modified Harvard architecture 8-bit RISC single-chip microcontrollers. AVR was one of the first microcontroller families to use on-chip flash memory for program storage, as opposed to one-time programmable ROM, EPROM, or EEPROM used by other microcontrollers at the time.

           </h4>

              <h4>
              AVR microcontrollers find many applications as embedded systems. They are especially common in hobbyist and educational embedded applications, popularized by their inclusion in many of the Arduino line of open hardware development boards.
   </h4>
            </div>
          </div>
        </section> 
        
        <section class="top-section-subsec">
          <div class="card-sec">
               <a href="mega/"> 
                  <div class="atmellogo">
                    <h1>ATMega</h1>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

               <a href="xmega/"> 
                  <div class="atmellogo">
                  <h1>XMega</h1>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

               <a href="arduino/"> 
                  <div class="atmellogo">
                  <h1>Ardiuno</h1>
                   <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div>  
                  </div> 
                </a>
          
                </div>
        </section>
      </main>
    </div>
    <div class="page-space"></div>
    <?php include_once '../../global/foot.php'; ?>
 
  </body>
  <script src="script.js"></script>
  <script src="../../global/headerScript.js"></script>
  <script src="../../global/footerScript.js"></script>
  <script
    src="https://kit.fontawesome.com/2197d61e3b.js"
    crossorigin="anonymous"
  ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</html>
