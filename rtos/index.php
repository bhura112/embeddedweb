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
       <section class="page-container">
         <div class="article">
           <h2>What is RTOS?</h2>
           <h4>A Real Time Operating System, commonly known as an RTOS, is a software component that rapidly switches between tasks, giving the impression that multiple programs are being executed at the same time on a single processing core.</h4>
           <h4>In actual fact the processing core can only execute one program at any one time, and what the RTOS is actually doing is rapidly switching between individual programming threads (or Tasks) to give the impression that multiple programs are executing simultaneously.</h4>
          </div>
          <div class="topics">
            <div class="table-of-content">
              <h3>Table Index</h3>
              <a href="#architecture">Architectures</a>
              <a href="#characteristics">Characteristics </a>
            </div>
            <div class="table-topic">
              <div id="architecture" class="table-topic-container">
                     <h2>Architectures</h2>
              </div>
              <div id="characteristics" class="table-topic-container">
                     <h2>Characteristics</h2>
              </div>
            </div>
          </div>
       </section>

      
      </main>
    </div>
    
    <div class="page-space"></div>
    <?php include_once '../global/foot.php' ?>
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
