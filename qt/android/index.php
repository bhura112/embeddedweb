<?php 
   require_once $_SERVER['DOCUMENT_ROOT']."/database/dataHandler.php";
   GetMain(43);
   GetHeadData(21);
   GetBodyData(43);
   GetfootData(43);
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
    <title><?php  echo $mainData['title']; ?></title>
</head>

  <body>
    <a class="anchor" id="top"></a>
    <?php include_once $_SERVER['DOCUMENT_ROOT']."/global/header.php"; ?>

    <div class="main-container">
      <main class="main">
        <section class="top-section">
          <div class="content">
            <picture>
              <img src="../img/qt-card.svg">
            </picture>
            <div class="content-col">
              <h2><?php  echo $mainData['topic']; ?></h2>
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
        
        <section class="top-section-subsec">
          <div class="card-sec">
               <a href="desktop/"> 
                  <div class="cardlogo">
                    <h4>Desktop Developtment</h4>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

                <a href="embedded/"> 
                  <div class="cardlogo">
                  <h4>Embedded Development</h4>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

               <a href="mobile/"> 
                  <div class="cardlogo">
                  <h4>Android Development</h4>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>
                </div>
        </section>
       <section class="page-container">
          <div class="topics">
            <div class="table-of-content">
              <h3>Table Index</h3>
              <a href="#tti">Tools to install</a>
              <a href="#eia">Examples in action</a>
            </div>
            <div class="table-topic">
              <div class="description">            
                <h5>Qt is an application development framework based on C++. Traditionally, C++ is the major programming language used to develop with Qt.</h5>
                <h5>Since the introduction of Qt Quick (Qt UI Creation Kit) in the beginning of 2011, Qt has been supporting script-based declarative programming with QML. QML is very easy to understand for anybody who is familiar with JavaScript as well as for all other developers who are familiar the basics of object oriented programming and have worked with other scripting languages. Designers who are familiar with web development can start with QML and implement their ideas in executable code which can later be powered by more application logic developed by engineering teams.</h5>
                <h5>A solid understanding of the basics of C++ is essential for those planning on using Qt for C++. You do not need to be a C++ expert to begin. Qt simplifies many aspects of C++ development, making it a lot of fun. The overall development effort is minimal since Qt API are easy to understand and application functionality can be implemented with a smaller amount of code. C++ experts will find a lot of powerful APIs and tools in Qt which will make complicated things simple and new features easy to get done.</h5>
              </div>
             
              <!------------------------------------------------------------------------------------------------ -->
              <div id="tti" class="table-topic-container jumptarget">
                    <div class="container-body">
                      <h2>Tools to install</h2>
                      <h4>Qt is a full development framework with tools designed to streamline the creation of applications and user interfaces for desktop, embedded, and mobile platforms.</h4>
                      <h4>Qt provides a range of tools for all steps in application development for desktops and devices. Tools are integrated into packages that are easily installed on several platforms. You have following options:</h4>
                      <h5 class="fa fa-2x">Qt SDK</h5> 
                      <h4>- one package with all the tools you need for the creation of applications for Symbian and Maemo in addition to desktop platforms such as Microsoft Windows, Mac OS X, and Linux.</h4>
                      <h5 class="fa fa-2x">Qt Creator</h5> 
                      <h4>- a cross-platform integrated development environment (IDE). Note, that the Qt Creator package does not contain the Qt framework itself. You can either configure it to use with a version of Qt already installed on your machine or download a new version of Qt separately.</h4>
                      <h5 class="fa fa-2x">Qt binary package</h5> 
                      <h4>- a ready-to-go installer for Mac, Linux and Windows containing a precompiled tool chain, libraries, include files, documentation, demos and examples.</h4>
                      <h5 class="fa fa-2x">Qt source code packages</h5> 
                      <h4>- Qt and Qt creator are available in source code as zip or tar archives as well as on the Public Qt Repository.</h4>
                      <h4>All packages above are available for download on the Downloads page. We recommend starting with Qt SDK since it contains all you need in one package. Later on you can consider installing other packages separately. They can all coexist on your machine and be configured to work with each other.</h4>
                    
                    </div>
              </div>

              <div id="eia" class="table-topic-container jumptarget">
                    <div class="container-body">
                      <h2>Examples in action</h2>
                      <h4>One of the most popular ways of discovering new technologies is to walk through examples.</h4>
                      <h4>Qt provides a large selection of examples and demos which are available in source code (check demos and examples directories in your installation).The main difference between examples and demos is that examples are smaller and more focused on one functionality whereas demos are complete, more complex applications using many Qt features.</h4>
                      <h4>Most of the examples and demos are precompiled and integrated into the Examples and Demos Launcher.</h4>
                      <h4>Run it and see Qt's features in action. You can also start all examples and demos from it as separate applications or browse to the source code. Qt Creator allows loading of examples as projects with a wizard on the "Welcome" page.</h4>
                       <h4>Additionally, Qt Widget Gallery provides overviews of selected Qt desktop widgets in each of the styles used on various supported platforms.</h4>
                    </div>
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
