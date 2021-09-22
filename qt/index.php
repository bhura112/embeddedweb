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

          if( $rowobj->page_id == 4)
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
              <li><a href="../rtos/">RTOS</a></li>
              <li><a href="../linux/">LINUX</a></li>
              <li class="active"><a href=".">Qt</a></li>
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
              <img src="../img/qt-card.svg">
            </picture>
            <div class="content-col">
              <h2><?php  echo $rowobj->page_topic; ?></h2>
              <h4>
                Qt is a cross-platform application development framework for desktop, embedded and mobile. 
                Supported Platforms include Linux, OS X, Windows, VxWorks, QNX, Android, iOS, BlackBerry, 
                Sailfish OS and others.
               </h4>

               <h4>
                 Qt is not a programming language on its own. It is a framework written in C++. 
                 A preprocessor, the MOC (Meta-Object Compiler), is used to extend the C++ language with features like signals and slots. 
               </h4>
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
