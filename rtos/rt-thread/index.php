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
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://gitcdn.link/repo/bhura112/embeddedweb/main/global/headerScript.js"></script>
    <script src="https://gitcdn.link/repo/bhura112/embeddedweb/main/global/footerScript.js"></script>
    
    <link rel="stylesheet" href="https://gitcdn.link/repo/bhura112/embeddedweb/main/global/header.css">
    <link rel="stylesheet" href="https://gitcdn.link/repo/bhura112/embeddedweb/main/global/foot.css">


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
            <li><a href="../freertos">FREE RTOS</a></li>
              <li class="active"><a href="../rt-thread">RT-THREAD</a></li>
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
              <img src="img/logo.png">
            </picture>
            <div class="content-col">
              <h2>RT-THREAD</h2>
              <h4>
              RT-Thread (Real-Time Thread) is an open source embedded real-time operating system and released under Apache License v2.0.
               
               </h4>
               <h4>
               It has a strong scalability: from a nano kernel running on a tiny MCU, for example ARM Cortex-M0, or Cortex-M¾/7, to a rich feature system running on MIPS32, ARM Cortex-A, even the emerging open source RISC-V architecture is supported.
               RT-Thread can run either on single-core systems or on symmetric multi-core processors(SMP) systems.
                </h4>
            </div>

          </div>
        </section>
        
     <!--   <section class="top-section-subsec">
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
        </section>-->
       
      </main>
    </div>
    
    <div class="page-space"></div>
    <?php include_once '../../global/foot.php' ?>
  </body>
</html>
