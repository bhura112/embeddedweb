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

        <section class="page-section">

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
        </section>
      </main>
    </div>

    

    <!-- Main Content ver 1.01 
    <div class="main-section">
      <div class="page">
        <div class="page-head">
          <p>
            <img
              id="page-topic-icon"
              src="../img/flip-card-front.svg"
              width="130"
              height="150"
            />
          </p>
          <div class="page-top-content">
            <h1 id="page-topic-name">Learn Microcontrollers</h1>
            <nav class="page-topics">
              <ul>
                <li><a class="topic-active" href="#"> Controllers</a></li>
                <li><a href="/Referances/"> Referances</a></li>
                <li><a href="/Documents/"> Documents</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="card-section">
        <h3>Learn Different Controllers</h3>
        <div class="cc-cards"> 

          
        
          <a href="." class="card 8051-card">
              <h4>8051</h4>
          </a>

          <a href="." class="card avr-card">
              <h4>AVR</h4>
          </a>

          <a href="." class="card pic-card">
            <h4>PIC</h4>
          </a>

          <a href="." class="card arm-card">
          <h4>ARM</h4>
          </a>
        </div>
         
        </div>
        <div class="content">
          <div class="content-section">
            <ul class="content-tab">
              <li>
                <a href=".">
                  <h3>Micro Controller</h3>
                  <h3><i class="fas fa-angle-right"></i></h3>
                </a>
              </li>
              <li>
                <a href=".">
                  <h3>RISC</h3>
                  <h3><i class="fas fa-angle-right"></i></h3>
                </a>
              </li>
              <li>
                <a href=".">
                  <h3>CISC</h3>
                  <h3><i class="fas fa-angle-right"></i></h3>
                </a>
              </li>
              <li>
                <a href=".">
                  <h3>MEMORY</h3>
                  <h3><i class="fas fa-angle-right"></i></h3>
                </a>
              </li>
              <li>
                <a href=".">
                  <h3>BOOT LOADER</h3>
                  <h3><i class="fas fa-angle-right"></i></h3>
                </a>
              </li>
              <li>
                <a href=".">
                  <h3>GPIO</h3>
                  <h3><i class="fas fa-angle-right"></i></h3>
                </a>
              </li>
              <li>
                <a href=".">
                  <h3>TIMER</h3>
                  <h3><i class="fas fa-angle-right"></i></h3>
                </a>
              </li>
              <li>
                <a href=".">
                  <h3>UART</h3>
                  <h3><i class="fas fa-angle-right"></i></h3>
                </a>
              </li>
              <li>
                <a href=".">
                  <h3>SPI</h3>
                  <h3><i class="fas fa-angle-right"></i></h3>
                </a>
              </li>
              <li>
                <a href=".">
                  <h3>I2C</h3>
                  <h3><i class="fas fa-angle-right"></i></h3>
                </a>
              </li>
              <li>
                <a href=".">
                  <h3>WATCH DOG</h3>
                  <h3><i class="fas fa-angle-right"></i></h3>
                </a>
              </li>
            </ul>
          </div>
          <div class="content-data">
              <div class="whatIs">
                <h2>Micro Controllers</h2>
                <br><br>
                <p><i class="fa fa-info-circle" aria-hidden="true"></i> Microcontroller is a small computer on a single meta-oxide-semiconductor <i>ic (integrated circuit)</i> <br>or chip. It's also called <i>SOC (small of computer)</i>.</p>

                <p>These micro computers are used for a specific task. A Microcontroller cantains cpu <i>single core or multi-core </i>, <br>memory unit, bootloader, gpio ,Timer, communication interface like : <i> UART, USART, SPI, I2C, Ethernet </i> <br>and many other features.</p>
              </div>
              <div class="microcontroller-img">
               <img src="../img/mircocontroller.svg">
             </div>


             <div class="topic-progress">
              <div class="topic-area">
                <div class="topic-details">
                  <h5> Learn Micro Contollers</h5>
                  <p> Micro Controllers</p>
               </div>
               <div class="topic-bar">
                   <p>bar</p> 
               </div>
              </div>
              <div class="topic-buttons">
                <div class="prev"> <a href="."><i class="fas fa-angle-left"></i> Prev </a></div>
                <div class="next"> <a href=".">Next <i class="fas fa-angle-right"></i></a></div>
              </div>
             </div>
          </div>
        </div>
      </div>
    </div>

-->
    
    <div class="page-space"></div>
    <footer class="footer">
      <div class="foot-content">
              <div class="mcu"> 
                  <a href="javascript:void(0)"><h4>MICRO CONTROLLERS</h4></a>
                  <a href="javascript:void(0)">8051</a>
                  <a href="javascript:void(0)">ATMEL</a>
                  <a href="javascript:void(0)">PIC</a>
                  <a href="javascript:void(0)">ARM</a>
                  <a href="javascript:void(0)">MCP</a>
              </div>

              <div class="rtos"> 
                  <a href="javascript:void(0)"><h4>FREE RTOS</h4></a>
                  <a href="javascript:void(0)">Porject Managment</a>
                  <a href="javascript:void(0)">Heap Managment</a>
                  <a href="javascript:void(0)">Task Managment</a>
                  <a href="javascript:void(0)">Queue Managment</a>
                  <a href="javascript:void(0)">Timer Management</a>
                  <a href="javascript:void(0)">Interrupt Managment</a>
                  <a href="javascript:void(0)">Resource management</a>
                  <a href="javascript:void(0)">Event Group</a>
                  <a href="javascript:void(0)">Porting</a>
              </div>

              <div class="linux"> 
                  <a href="javascript:void(0)"><h4>LINUX</h4></a>
                  <a href="javascript:void(0)">Shell Scripting</a>
                  <a href="javascript:void(0)">IPC</a>
                  <a href="javascript:void(0)">Socket</a>
                  <a href="javascript:void(0)">Memory</a>
                  <a href="javascript:void(0)">Process</a>
                  <a href="javascript:void(0)">Device Drivers</a>
              </div>

              <div class="qt"> 
                  <a href="javascript:void(0)"><h4>QT Framework</h4></a>
                  <a href="javascript:void(0)">Basics</a>
                  <a href="javascript:void(0)">App Development</a>
                 </div>
      </div>
     

     <div class="contacts"> 
      <h4>contact@embeddedweb.in</h4>
      <h4>All Rights@ Reserved </h4>
      <a href="javascript:void(0)"><a href="#"> <i class="fa fa-youtube"></i></a>
      <a href="javascript:void(0)"><a href="#"> <i class="fa fa-twitter"></i></a>
      <a href="javascript:void(0)"><a href="#"> <i class="fa fa-linkedin"></i></a>
     </div>
    
  </footer> 
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
