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

          if( $rowobj->page_id == 2)
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
              <li><a href="../mcu/">MICRO CONTROLLER</a></li>
              <li class="active"><a href=".">RTOS</a></li>
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
              <img src="../img/rtos-card.svg">
            </picture>
            <div class="content-col">
              <h2><?php  echo $rowobj->page_topic; ?></h2>
              <h4>
                A real-time operating system (RTOS) is an operating system (OS) intended to serve real-time applications that process data as 
                it comes in, typically without buffer delays. Processing time requirements (including any OS delay) are measured in tenths of 
                seconds or shorter increments of time. 
               </h4>
               <h4>
                A real-time system is a time-bound system which has well-defined, fixed time constraints. 
                Processing must be done within the defined constraints or the system will fail. They either are event-driven or time-sharing.             
                </h4>
            </div>

          </div>
        </section>
        
        <section class="top-section-subsec">
          <div class="card-sec">
               <a href="freertos/"> 
                  <div class="mchiplogo">
                    <h2>FREE RTOS</h2>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

               <a href="rt-thread/"> 
                  <div class="mchiplogo">
                  <h2>RT-THREAD</h2>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>
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
