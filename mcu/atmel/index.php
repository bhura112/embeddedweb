<?php 
   require_once $_SERVER['DOCUMENT_ROOT']."/database/dataHandler.php";
   GetMain(11);
   GetHeadData(11);
   GetBodyData(11);
   GetfootData(11);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://bhura112.github.io/embeddedweb/global/headerScript.js"></script>
    <script src="https://bhura112.github.io/embeddedweb/global/footerScript.js"></script>
    <script src="https://bhura112.github.io/embeddedweb/global/script.js"></script>
    
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://bhura112.github.io/embeddedweb/global/style.css">
    <link rel="stylesheet" href="https://bhura112.github.io/embeddedweb/global/header.css">
    <link rel="stylesheet" href="https://bhura112.github.io/embeddedweb/global/foot.css">

    <link rel = "icon" href = "https://bhura112.github.io/embeddedweb/global/logo.png" type="image/x-icon">

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
  <?php include_once $_SERVER['DOCUMENT_ROOT']."/global/header.php"; ?>

  <div class="top-spacing"></div> 

  <div class="body-top-contents">
        <div class="row-1"></div>
        <div class="row-2">
            <div class="col-1">
            <span class="material-icons-outlined">memory</span>
            </div>
            <div class="col-2">
                <h1><?php  echo $mainData['topic']; ?></h1>
                <p> 
                    AVR is a family of microcontrollers developed since 1996 by Atmel, acquired by Microchip Technology in 2016. These are modified Harvard architecture 8-bit RISC single-chip microcontrollers. AVR was one of the first microcontroller families to use on-chip flash memory for program storage, as opposed to one-time programmable ROM, EPROM, or EEPROM used by other microcontrollers at the time.
                    <br><br>
                </p>

               <p>
                AVR microcontrollers find many applications as embedded systems. They are especially common in hobbyist and educational embedded applications, popularized by their inclusion in many of the Arduino line of open hardware development boards.
                </p> 
              </div>
        </div>
        <div class="row-3"></div>
    </div>
           
    <div class="body-cards-div">
          <a class="card card-background-1" href="atmega/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">ATmega</h2>
                </div>
                <div class="foot">
                  <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
                </div>
              </a>

              <a class="card card-background-2" href="xmega/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">Xmega</h2>
                </div>
                <div class="foot">
                  <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
                </div>
              </a>

              <a class="card card-background-3" href="arduino/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">Arduino</h2>
                </div>
                <div class="foot">
                  <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
                </div>
              </a>
     </div>

     <div class="page-content">
       <div class="table-icon" id="MO-icon" onclick="onMOClicked()">
         <i class="material-icons-outlined menu-open-icon">menu_open</i>
       </div>

       <div id= "table-container" class="table-content-container">
        <div class="table">
            <div class="table-header">
                 
            </div>
            <div id="MO-table" class="table-body">
                
                     <h3 > <a href="#Introduction">Introduction </a></h3>
                     <h3 > <a href="#Architectures">Architectures </a></h3>
                     <h3 > <a href="#Types">Types </a> </h3>
                     <h3 > <a href="#Memory">Memory</a> </h3>
                     <h3 > <a href="#IO">Input/Output </a> </h3>
                     <h3 > <a href="#Timer">Timer/Counter </a> </h3>
                     <h3 > <a href="#Uart">Usart/Uart </a> </h3>
                     <h3 > <a href="#SPI">SPI </a> </h3>
            </div>
            <div class="table-body">
               
            </div>
        </div>
       </div>

       <div class="content-container">

         <div id="Introduction" class="content">
            
            <div class="container">
              <h1>Introduction</h1>
              <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>

              <p>
              <strong> In this tutorial</strong>, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>
              <h3><strong>Type of stack data structure</strong></h3>
              
              <h4>1.Reverse Stack</h4>
              <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>
              <a href=".">Learn More ></a>
              <h4>1.Forword Stack</h4>
              <figure class="fig-sim">
               
                <img src="../mcu/img/harvard.png" alt="" srcset="">
                <figcaption> Stack represtation smiliar to pile of plates</figcaption>
              </figure>
             <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>
            </div>
            <hr>
          </div>
       

          <div id="Queue" class="content">
            
            <div class="container">
              <h1>Queue</h1>
              <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>

              <p>
              <strong> In this tutorial</strong>, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>
              <h3><strong>Type of stack data structure</strong></h3>
              
              <h4>1.Reverse Stack</h4>
              <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>
              <a href=".">Learn More ></a>
              <h4>1.Forword Stack</h4>
              <figure class="fig-sim">
               
                <img src="../mcu/img/harvard.png" alt="" srcset="">
                <figcaption> Stack represtation smiliar to pile of plates</figcaption>
              </figure>
             <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>
            </div>
            <hr>
          </div>

          <div id="Linklist" class="pg">
           <h1>Linklist</h1>
            <p>
            In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
            </p>
            <hr>
          </div>


          <div id="Tree" class="pg">
           <h1>Tree</h1>
            <p>
            In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
            </p>
            <hr>
          </div>

          <div id="Graph" class="pg">
           <h1>Graph</h1>
            <p>
            In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
            </p>
            <hr>
          </div>
          
        
       </div>
      
   </div>
        <section class="page-container">
          <div class="topics">
            <div class="table-of-content">
              <h3>Table Index</h3>
              
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
    <?php include_once $_SERVER['DOCUMENT_ROOT']."/global/foot.php"; ?>
 
  </body>
</html>
