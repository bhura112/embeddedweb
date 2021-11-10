<?php 
   
   require_once '../../../database/connection.php';
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
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bhura112/embeddedweb@master/global/style.css">

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
    <?php include_once $_SERVER['DOCUMENT_ROOT']."/global/header.php"; ?>

  <div class="main-container">
      <main class="main">
        <section class="top-section">
          <div class="content">
            <picture>
              <img src="../../../img/flip-card-front.svg">
            </picture>
            <div class="content-col">
              <h2 class="center-me">STM Series</h2>
         
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
               <a href="stm32f103t6/"> 
                  <div class="atmellogo">
                    <h2>STM32F103T6</h2>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

               <a href="stm32f401vb/"> 
                  <div class="mchiplogo">
                   <h2>STM32F401VB</h2>
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
    <div class="page-space"></div>
    <?php include_once $_SERVER['DOCUMENT_ROOT']."/global/foot.php"; ?>
  </body>
</html>
