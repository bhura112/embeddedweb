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
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://gitcdn.link/repo/bhura112/embeddedweb/main/global/headerScript.js"></script>
    <script src="https://gitcdn.link/repo/bhura112/embeddedweb/main/global/footerScript.js"></script>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bhura112/embeddedweb@main/global/style.css">


    <link rel = "icon" href = "https://www.embeddedweb.in/global/logo.png?i=1" type="image/x-icon">

    <script src="https://kit.fontawesome.com/2197d61e3b.js" crossorigin="anonymous"></script>
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
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title><?php  echo $rowobj->page_title; ?></title>
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
              <a class="card card-background-1" href="mega/">
              <div class="head"><img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
              <div class="body">
                <h4 class="txt-center">ATMEGA</h4>
                </div>
              <div class="foot">
                <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
              </div>
            </a>

               <a class="card card-background-2" href="xmega/"> 
                  <div class="atmellogo">
                  <h1>XMega</h1>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

               <a class="card card-background-3" href="arduino/"> 
                  <div class="atmellogo">
                  <h1>Ardiuno</h1>
                   <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div>  
                  </div> 
                </a>
          
                </div>
        </section>

        <section class="page-container">
          <div class="topics">
            <div class="table-of-content">
              <h3>Table Index</h3>
              <a href="#architecture">Architectures</a>
              <a href="#types">Types</a>
              <a href="#mem">Memory </a>
              <a href="#io">Input/Output </a>
              <a href="#timer">Timer/Counter</a>
              <a href="#uart" >Uart</a>
              <a href="#spi">SPI</a>
              <a href="#i2c">I2C </a>
            </div>
            <div class="table-topic">
              <div class="description">   
                <p>Atmel was acquired by Microchip in April 2016. Atmel Corporation is an industry leader in the design and manufacture of advanced semiconductors, with focus on microcontrollers, nonvolatile memory, logic, radio frequency (RF) components and sensors. These functions are marketed as standard products, application-specific standard products (ASSPs) or customer-specific products (ASICs) in order to provide a rapid and flexible response to the needs of Atmel’s customers.</p>
                 <p>Atmel's corporate headquarters is in San Jose, California, in the North San Jose Innovation District. Other locations include Trondheim, Norway; Colorado Springs, Colorado; Chennai, India; Shanghai, China; Taipei, Taiwan; Rousset, France; Nantes, France; Patras, Greece; Heilbronn, Germany; Munich, Germany; Whiteley, United Kingdom; Cairo, Egypt. Atmel makes much of its product line at vendor fabrication facilities. It owns a facility in Colorado Springs, Colorado that manufactures its XSense line of flexible touch sensors.</p>
              </div>
             
              <!------------------------------------------------------------------------------------------------ -->
              <div id="architecture" class="table-topic-container jumptarget">
                     <div class="container-header">
                     <p class="txt-bold-2x">Architectures</p>
                     </div>
                     <div class="container-body">
                       
                      <p>The AVR microcontrollers are based on the advanced RISC architecture and consist of 32 x 8-bit general purpose working registers. Within one single clock cycle, AVR can take inputs from two general purpose registers and put them to ALU for carrying out the requested operation, and transfer back the result to an arbitrary register. The ALU can perform arithmetic as well as logical operations
                      over the inputs from the register or between the register and a constant. 
                      </p><h4>Single register operations like taking a complement can also be executed in ALU. We can see that AVR does not have any register like accumulator as in 8051 family of microcontrollers; the operations can be performed between any of the registers and can be stored in either of them.
                      
                      </h4>
                      <h4>AVR follows Harvard Architecture format in which the processor is equipped with separate memories and buses for Program and the Data information. Here while an instruction is being executed, the next instruction is pre-fetched from the program memory.</h4>
                      <img src="../img/harvard.png" alt="" srcset="">
                     <h4>Since AVR can perform single cycle execution, it means that AVR can execute 1 million instructions per second if cycle frequency is 1MHz. The higher is the operating frequency of the controller, the higher will be its processing speed. We need to optimize the power consumption with processing speed and hence need to select the operating frequency accordingly.</h4>  
                    
                    </div>
                    <div class="container-footer"></div>
              </div>

              <div id="types" class="table-topic-container jumptarget">
                    <div class="container-header">
                    <h2>Types</h2>
                    </div>
                    <div class="container-body">
                        <h4>AVR microcontrollers are available in three categories:</h4>
                        <h5 class="fa fa-2x">TinyAVR </h5> 
                        <h4>Less memory, small size, suitable only for simpler applications</h4>
                        <h5 class="fa fa-2x">MegaAVR</h5> 
                        <h4>These are the most popular ones having good amount of memory (upto 256 KB), higher number of inbuilt peripherals and suitable for moderate to complex applications.</h4>
                        <h5 class="fa fa-2x">XmegaAVR</h5> 
                        <h4>Used commercially for complex applications, which require large program memory and high speed.</h4>
                    </div>
                    <div class="container-footer"></div>
              </div>

            </div>
         </div>  
        </section>

      </main>
    </div>
    <div class="page-space"></div>
    <?php include_once '../../global/foot.php'; ?>
 
  </body>
</html>
