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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../global/header.css" />
    <link rel="stylesheet" href="../../../global/foot.css" />
    <link rel="stylesheet" href="style.css" />

    <title>Embedded Web - Learn Atmega Controllers</title>
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
            <li class="active"><a href="../mega">ATMega</a></li>
              <li><a href="../xmega">XMega</a></li>
              <li><a href="../ardiuno">Arduino</a></li>
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
              <img src="../../../img/flip-card-front.svg">
            </picture>
            <div class="content-col">
              <h2 class="center-me">ATmega Series</h2>
         
              <h4> 
              The ATmega series features a microcontroller that provides a solid amount of program memory, as well as a wide range of pins available. It does also have functionality such as: </h4>

              <h4>Extended instruction set (multiply instructions and instructions for handling larger program memories) </h4>
              <h4>Extensive peripheral set </h4>
              <h4>New peripherals with enhanced functionality </h4>
              <h4>Improved AVRxt instruction set </h4>
            </div>
          </div>
        </section> 
        
        <section class="top-section-subsec">
          <div class="card-sec">
               <a href="at89c51/"> 
                  <div class="atmellogo">
                    <h2>AT89C51</h2>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

               <a href="atmega8/"> 
                  <div class="mchiplogo">
                   <h2>ATMega8</h2>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>       
                
                <a href="atmega16/"> 
                  <div class="mchiplogo">
                   <h2>ATMega16</h2>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>       

                <a href="atmega32/"> 
                  <div class="mchiplogo">
                   <h2>ATMega32</h2>
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
    <?php include_once '../../../global/foot.php'; ?>
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
