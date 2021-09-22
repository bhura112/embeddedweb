<?php 
   
   require_once '../database/connection.php';
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
    <link rel="stylesheet" href="../global/header.css" />
    <link rel="stylesheet" href="../global/foot.css" />
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
              <li class="active"><a href=".">MICRO CONTROLLER</a></li>
              <li><a href="../rtos/">RTOS</a></li>
              <li><a href="../linux/">LINUX</a></li>
              <li><a href="../qt/">Qt</a></li>
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
              <img src="../img/flip-card-front.svg">
            </picture>
            <div class="content-col">
              <h2 class="center-me"><?php  echo $rowobj->page_topic; ?></h2>
         
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
        
        <section class="top-section-subsec">
          <div class="card-sec">
               <a href="atmel/"> 
                  <div class="atmellogo">
                    <p><img src="img/atmellogo.svg" style="width:80%;"></p>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

               <a href="microchip/"> 
                  <div class="mchiplogo">
                    <p><img src="img/microchiplogo.svg" style="width:80%;"> </p> 
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

               <a href="arm/"> 
                  <div class="armlogo">
                   <p><img src="img/armlogo.svg" style="width:80%;"> </p>
                   <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div>  
                  </div> 
                </a>

          
                </div>
        </section>

        <section class="page-container">
         <div class="article">
           <h4>Welcome to the World of Microcontrollers, a tiny (yet very powerful) device that changed the face of Embedded Systems. 
               In this tutorial / article, you will learn about the Rise of Microcontrollers, few Basics of Microcontrollers, Microcontroller’s Structure and also few differences between Microprocessor and Microcontroller.
               Before going in to the details of Basics of Microcontrollers, you need to know what a Microcontroller</h4>
           <h2>What is Microcontroller?</h2>
           <h4>A Microcontroller is a VLSI (Very Large Scale Integration) Integrated Circuit (IC) that contains electronic computing unit and logic unit (combinedly known as CPU), Memory (Program Memory and Data Memory), I/O Ports (Input / Output Ports) and few other components integrated on a single chip.
           <h4>Microcontrollers are omnipresent. If a device or an application involves measuring, storing, calculating, controlling or displaying information, then device contains a Microcontroller in it. Let us see some of the areas where microcontrollers are used.
           <h4>The biggest user of Microcontrollers is probably the Automobiles Industry. Almost every car that comes out of the assembly factory contains at least one Microcontroller for the purpose of engine control. You can find many more Microcontrollers for controlling additional systems.
          </h4> 
          </div>

          <div class="topics">
            <div class="table-of-content">
              <h3>Table Index</h3>
              <a href="#architecture">Architectures</a>
              <a href="#mem">Memory </a>
              <a href="#io">Input/Output </a>
              <a href="#timer">Timer</a>
              <a href="#uart" >Uart</a>
              <a href="#i2c">I2C</a>
              <a href="#spi">SPI </a>
            </div>
            <div class="table-topic">
              <div id="architecture" class="table-topic-container jumptarget">
                     <div class="container-body">
                       <h2>Architectures</h2>
                       <h5 class="fa fa-2x">Von Neumann Architecture</h5>
                       <h4>This type of architecture has common Memory for storage of data and programs.</h4>
                       <img src="img/von.png" alt="">
                        <h4>The heart of the von Neumann computer architecture is the Central Processing Unit (CPU), consisting of the control unit and the ALU (Arithmetic and Logic Unit). The CPU interacts with a
                            memory and an input/output (I/O) subsystem and executes a stream of instructions (the computer
                            program) that process the data stored in memory and perform I/O operations. The key concept
                            of the von Neumann architecture is that data and instructions are stored in the memory system in exactly the same way.</h4>
                       <h5 class="fa fa-2x">Harvard Architecture</h5>
                       <h4>This architecture has separate Memory units for Program and Data Storage and separate Busses for transfer of data and instructions.</h4>
                       <img src="img/harvard.png" alt="">
                       <h4>Harvard architecture is a type of computer architecture that separates its memory into two parts so
                            data and instructions are stored separately. The architecture also has separate buses for data
                            transfers and instruction fetches. This allows the CPU to fetch data and instructions at the same time.</h4>
                      </div>
              </div>
              <div id="mem" class="table-topic-container jumptarget">
                     <div class="container-body">
                     <h2>Memory</h2>
                    </div>
              </div>
            </div>
         </div>  
        </section>
         <section class="page-container">
          <div class="conatiner introduction">
            
            <p></p>
               <p> Microcontrollers are similar to Microprocessors, but they have few additional components on the same chip.</p>
          </div>

          <div class="conatiner whatis">

          <h2>What is a Microcontroller?</h2>
          <p></p>

          <p>Sometimes, a Microcontroller is also called as a Computer-on-a-Chip or a Single-Chip-Computer. Since the Microcontroller and its supporting circuitry are often embedded in the device it controls, a Microcontroller is also called as an Embedded Controller.
          </p>
          <p>Microcontrollers are omnipresent. If a device or an application involves measuring, storing, calculating, controlling or displaying information, then device contains a Microcontroller in it. Let us see some of the areas where microcontrollers are used.
          </p>

          <p>The biggest user of Microcontrollers is probably the Automobiles Industry. Almost every car that comes out of the assembly factory contains at least one Microcontroller for the purpose of engine control. You can find many more Microcontrollers for controlling additional systems.
          </p>
          <p>Consumer Electronics is another area which is loaded with Microcontrollers. Microcontrollers are a part of Digital Cameras, Video Camcorders, CD and DVD Players, Washing Machines, Ovens, etc.
          </p>
          <p>Microcontrollers are also used in test and measurement equipment like Multimeters, Oscilloscopes, Function Generators, etc. You can also find microcontrollers near your desktop computer like Printers, Routers, Modems, Keyboards, etc.
          </p>
          <p>The above definitions of the Microcontroller might seem complicated or confusing to newbies in Electronics or Embedded Systems but the concept will become clear as we move forward.
          </p>   </div>
         </section>
       <!-- <section class="page-section">

          <div class= "page-content"> 
            <div class="left-page-index">
              <div class="container">
              <h4 class="heading">Table Of Contents</h4>
                  <ul class="pageindex-list">
                    <li><a href="#introduction"><h4>Introduction</h4></a></li>
                    <li><a href="#architecture"><h4>Architecture</h4></a></li>
                    <li><a href="#peripherals"><h4>Peripherals</h4></a></li>
                  </ul>
              </div>
            </div>

            <div class="right-topic-index">

              <div class="topicindex jumptarget" id="introduction"> 
                <div class="container"> 
                  <h4 class="heading">Introduction</h4>
                  <ul class="topicindex-list">
                  <li> <a href="t/index.php?introduction#started">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">Getting Started</div></div>
                    </a></li>

                    <li> <a href="t/index.php?introduction#esys">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">Embedded Systems</div></div>
                    </a></li>

                    <li> <a href="t/index.php?introduction#embeddedc">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">Embedded C</div></div>
                    </a></li>

                    <li> <a href="t/index.php?introduction#microcontroller">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">Micro controller</div></div>
                    </a></li>
                    <li> <a href="t/index.php?introduction#microprocessor">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list eoflist"> </div>
                        </div> <div class="listname">Micro Processor</div></div>
                    </a></li> 
                  </ul>
                </div>  
              </div>

              <div class="topicindex jumptarget" id="architecture">  
                <div class="container">
                    <h4 class="heading">Architecture</h4>
                    <ul class="topic-list">
                    <li> <a href="t/index.php?architechture#vonn">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">VON NEUMAN</div></div>
                    </a></li>  

                    <li> <a href="t/index.php?architechture#harvard">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">HARVARD</div></div>
                    </a></li>  

                    <li> <a href="t/index.php?architechture#risc">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">RISC</div></div>
                    </a></li>  
                    <li> <a href="t/index.php?architechture#cisc">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list eoflist"> </div>
                        </div> <div class="listname">CISC</div></div>
                    </a></li>  
                  
                  </ul>  
                </div>
              </div>

              <div class="topicindex jumptarget" id="peripherals">
                <div class="container">
                  <h4 class="heading">Peripherals</h4>     
                  <ul class="topic-list">
                  <li> <a href="t/index.php?pheriperals#memory">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">MEMORY </div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#mode">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">MODE</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#gpio">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">GPIO</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#timer">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">TIMER</div></div>
                    </a></li>
                     <li> <a href="t/index.php?pheriperals#adc">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">ADC</div></div>
                    </a></li> 
                    <li> <a href="t/index.php?pheriperals#dma">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">DMA</div></div>
                    </a></li>  
                    <li> <a href="t/index.php?pheriperals#uart">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">UART</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#i2c">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">I2C</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#spi">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">SPI</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#rtc">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">RTC</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#usb">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">USB</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#can">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">CAN</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#ethernet">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">ETHERNET</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#watchdog">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list eoflist"> </div>
                        </div> <div class="listname">WATCH DOG TIMER</div></div>
                    </a></li>
                    </ul>
                </div>  
              </div>
            </div>
          </div>
          <div class="page-content-data">
                
             
          </div>
        </section>-->
      </main>
    </div>

    
    <div class="page-space"></div>
    <?php include_once '../global/foot.php'; ?>
  </body>
  <script src="script.js"></script>
  <script src="../global/headerScript.js"></script>
  <script src="../global/footerScript.js"></script>
  <script
    src="https://kit.fontawesome.com/2197d61e3b.js"
    crossorigin="anonymous"
  ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</html>
