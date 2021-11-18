<?php 
   require_once $_SERVER['DOCUMENT_ROOT']."/database/dataHandler.php";
   GetMain(4);
   GetHeadData(4);
   GetBodyData(4);
   GetfootData(4);
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
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <title><?php  echo $mainData['title']; ?></title>
</head>

  <body>
  <?php include_once $_SERVER['DOCUMENT_ROOT']."/global/header.php"; ?>
  <div class="top-spacing"></div> 
  <div class="body-top-contents">
        <div class="row-1"></div>
        <div class="row-2">
            <div class="col-1">
            <span class="material-icons-outlined">integration_instructions</span>
            </div>
            <div class="col-2">
                <h1><?php  echo $mainData['topic']; ?></h1>
                <p>
                Qt is a cross-platform application development framework for desktop, embedded and mobile. 
                Supported Platforms include Linux, OS X, Windows, VxWorks, QNX, Android, iOS, BlackBerry, 
                Sailfish OS and others. <br> <br>
               </p>
               <p>
               Qt is not a programming language on its own. It is a framework written in C++. 
                 A preprocessor, the MOC (Meta-Object Compiler), is used to extend the C++ language with features like signals and slots. 
                </p>   
            </div>
        </div>
        <div class="row-3"></div>
    </div>
           
    <div class="body-cards-div">
          <a class="card card-background-1" href="desktop/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">Desktop</h2>
                </div>
                <div class="foot">
                  <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
                </div>
              </a>

              <a class="card card-background-2" href="embedded/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">Embedded</h2>
                </div>
                <div class="foot">
                  <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
                </div>
              </a>

              <a class="card card-background-2" href="android/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">Android</h2>
                </div>
                <div class="foot">
                  <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
                </div>
              </a>
     </div>


     <div class="page-content">

       <div class="page-content-col1">
      <div class="page-content-col1-top">
        <div class="table-icon" id="MO-icon" onclick="onMOClicked()">
          <i class="material-icons-outlined menu-open-icon">menu_open</i>
        </div>

        <div id="table-container" class="table-content-container">
          <div class="table">
            <div class="table-header">

            </div>
            <div id="MO-table" class="table-body">

             
                     <h3 > <a href="#Introduction">Introduction </a></h3>
                     <h3 > <a href="#TTI">Tools To Install </a></h3>
                     <h3 > <a href="#EIA">Examples In Action </a> </h3>
            
            </div>
            <div class="table-body">

            </div>
          </div>
        </div>

      </div>

      <div id="sticky-container" class="page-content-col1-bottom">
        <div id="sticky-c" class="sticky-c">
          <div class="page-video">
            <iframe src="https://www.youtube.com/embed/yRnrEpG680o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div id="table-container" class="table-content-container">
            <div class="table">
              <div class="table-header">
                <h3>Getting Started...with</h3>
              </div>
              <div class="table-body">

                <h3> <a href="#Introduction">MICROCHIP </a></h3>
                <h3> <a href="#Types">ARM </a></h3>
                <h3> <a href="#GettingStarted">RTOS </a> </h3>
                <h3> <a href="#EditorIde">QT</a> </h3>
                <h3> <a href="#Compiler">Linux</a> </h3>
              </div>
              <div class="table-body">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

       <div class="content-container">

         <div id="Introduction" class="content">
            
            <div class="container">
              <h1>Introduction</h1>
              <p>Qt is an application development framework based on C++. Traditionally, C++ is the major programming language used to develop with Qt.</p>
              <figure class="fig-sim">
               
                <img src="img/qtframework.jpg" alt="" srcset="">
                <figcaption> Qt Framework</figcaption>
              </figure>
              <p>Since the introduction of Qt Quick (Qt UI Creation Kit) in the beginning of 2011, Qt has been supporting script-based declarative programming with QML. QML is very easy to understand for anybody who is familiar with JavaScript as well as for all other developers who are familiar the basics of object oriented programming and have worked with other scripting languages. Designers who are familiar with web development can start with QML and implement their ideas in executable code which can later be powered by more application logic developed by engineering teams.</p>
              <p>A solid understanding of the basics of C++ is essential for those planning on using Qt for C++. You do not need to be a C++ expert to begin. Qt simplifies many aspects of C++ development, making it a lot of fun. The overall development effort is minimal since Qt API are easy to understand and application functionality can be implemented with a smaller amount of code. C++ experts will find a lot of powerful APIs and tools in Qt which will make complicated things simple and new features easy to get done.</p>

            </div>
            <hr>
          </div>
       

          <div id="TTI" class="content">
            
            <div class="container">
              <h1>Tools to install</h1>
              <p>Qt is a full development framework with tools designed to streamline the creation of applications and user interfaces for desktop, embedded, and mobile platforms.</p>
              <p>Qt provides a range of tools for all steps in application development for desktops and devices. Tools are integrated into packages that are easily installed on several platforms. You have following options:</p>
              <h3>Qt SDK</h3> 
              <p>- one package with all the tools you need for the creation of applications for Symbian and Maemo in addition to desktop platforms such as Microsoft Windows, Mac OS X, and Linux.</p>
              <h3>Qt Creator</h3> 
              <p>- a cross-platform integrated development environment (IDE). Note, that the Qt Creator package does not contain the Qt framework itself. You can either configure it to use with a version of Qt already installed on your machine or download a new version of Qt separately.</p>
              <h3>Qt binary package</h3> 
              <p>- a ready-to-go installer for Mac, Linux and Windows containing a precompiled tool chain, libraries, include files, documentation, demos and examples.</p>
              <h3>Qt source code packages</h3> 
              <p>- Qt and Qt creator are available in source code as zip or tar archives as well as on the Public Qt Repository.</p>
              <p>All packages above are available for download on the Downloads page. We recommend starting with Qt SDK since it contains all you need in one package. Later on you can consider installing other packages separately. They can all coexist on your machine and be configured to work with each other.</p>
                    
            </div>
            <hr>
          </div>
          
          <div id="EIA" class="content">
                    <div class="container">
                      <h1>Examples in action</h1>
                      <p>One of the most popular ways of discovering new technologies is to walk through examples.</p>
                      <p>Qt provides a large selection of examples and demos which are available in source code (check demos and examples directories in your installation).The main difference between examples and demos is that examples are smaller and more focused on one functionality whereas demos are complete, more complex applications using many Qt features.</p>
                      <p>Most of the examples and demos are precompiled and integrated into the Examples and Demos Launcher.</p>
                      <p>Run it and see Qt's features in action. You can also start all examples and demos from it as separate applications or browse to the source code. Qt Creator allows loading of examples as projects with a wizard on the "Welcome" page.</p>
                       <p>Additionally, Qt Widget Gallery provides overviews of selected Qt desktop widgets in each of the styles used on various supported platforms.</p>
                    </div>
                    <hr>
              </div>
       </div>
      
   </div>


 
    <div class="page-space"></div>
    <?php include_once $_SERVER['DOCUMENT_ROOT']."/global/foot.php"; ?>
  </body>
</html>
