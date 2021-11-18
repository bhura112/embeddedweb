<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/database/dataHandler.php";
GetMain(11);
GetHeadData(11);
GetBodyData(11);
GetfootData(11);
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
  <link rel="stylesheet" href="../../global/style.css">
  <link rel="stylesheet" href="https://bhura112.github.io/embeddedweb/global/header.css">
  <link rel="stylesheet" href="https://bhura112.github.io/embeddedweb/global/foot.css">

  <link rel="icon" href="https://bhura112.github.io/embeddedweb/global/logo.png" type="image/x-icon">

  <script src="https://kit.fontawesome.com/2197d61e3b.js" crossorigin="anonymous"></script>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8795837294797076" crossorigin="anonymous"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-TFF1PLC6Q9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-TFF1PLC6Q9');
  </script>
  <script src="script.js" defer></script>
  <link rel="stylesheet" href="style.css">
  <title><?php echo $rowobj->page_title; ?></title>
</head>

<body>
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/global/header.php"; ?>

  <div class="top-spacing"></div>

  <div class="body-top-contents">
    <div class="row-1"></div>
    <div class="row-2">
      <div class="col-1">
        <span class="material-icons-outlined">memory</span>
      </div>
      <div class="col-2">
        <h1><?php echo $mainData['topic']; ?></h1>
        <p>
          AVR is a family of microcontrollers developed since 1996 by Atmel, acquired by Microchip Technology in 2016. These are modified Harvard architecture 8-bit RISC single-chip microcontrollers. AVR was one of the first microcontroller families to use on-chip flash memory for program storage, as opposed to one-time programmable ROM, EPROM, or EEPROM used by other microcontrollers at the time.
          <br><br>
        </p>

        <p>
          AVR microcontrollers find many applications as embedded systems. They are especially common in hobbyist and educational embedded applications, popularized by their inclusion in many of the Arduino line of open hardware development boards.
        </p>
      </div>
    </div>
    <div class="row-3"></div>
  </div>

  <div class="body-cards-div">

    <a class="card card-background-3" href="tinyavr/">
      <div class="head">
        <img src="../../global/icon-mcu.png" alt="" srcset="">
      </div>
      <div class="body">
        <h2 class="txt-center">TinyAvr</h2>
      </div>
      <div class="foot">
        <h4>Learn <i class="fa fa-1x fa-arrow-right"></i></h4>
      </div>
    </a>

    <a class="card card-background-1" href="mega/">
      <div class="head">
        <img src="../../global/icon-mcu.png" alt="" srcset="">
      </div>
      <div class="body">
        <h2 class="txt-center">ATmega</h2>
      </div>
      <div class="foot">
        <h4>Learn <i class="fa fa-1x fa-arrow-right"></i></h4>
      </div>
    </a>

    <a class="card card-background-2" href="xmega/">
      <div class="head">
        <img src="../../global/icon-mcu.png" alt="" srcset="">
      </div>
      <div class="body">
        <h2 class="txt-center">Xmega</h2>
      </div>
      <div class="foot">
        <h4>Learn <i class="fa fa-1x fa-arrow-right"></i></h4>
      </div>
    </a>

    <a class="card card-background-3" href="arduino/">
      <div class="head">
        <img src="../../global/icon-mcu.png" alt="" srcset="">
      </div>
      <div class="body">
        <h2 class="txt-center">Arduino</h2>
      </div>
      <div class="foot">
        <h4>Learn <i class="fa fa-1x fa-arrow-right"></i></h4>
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

              <h3> <a href="#Introduction">Introduction </a></h3>
              <h3> <a href="#Types">Types </a></h3>
              <h3> <a href="#GettingStarted">Getting Started </a> </h3>
              <h3> <a href="#EditorIde">Editor/Ide</a> </h3>
              <h3> <a href="#Compiler">Compiler</a> </h3>
              <h3> <a href="#LibsTools">Libs & Tools</a> </h3>
              <h3> <a href="#BD">Books & Documents</a> </h3>
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
          <p>Atmel was acquired by Microchip in April 2016. Atmel Corporation is an industry leader in the design and manufacture of advanced semiconductors, with focus on microcontrollers, nonvolatile memory, logic, radio frequency (RF) components and sensors. These functions are marketed as standard products, application-specific standard products (ASSPs) or customer-specific products (ASICs) in order to provide a rapid and flexible response to the needs of Atmel’s customers.</p>

          <figure class="fig-sim">
            <img src="img/card.jfif" alt="" srcset="">
            <figcaption> Stack represtation smiliar to pile of plates</figcaption>
          </figure>

          <p>Atmel's corporate headquarters is in San Jose, California, in the North San Jose Innovation District. Other locations include Trondheim, Norway; Colorado Springs, Colorado; Chennai, India; Shanghai, China; Taipei, Taiwan; Rousset, France; Nantes, France; Patras, Greece; Heilbronn, Germany; Munich, Germany; Whiteley, United Kingdom; Cairo, Egypt. Atmel makes much of its product line at vendor fabrication facilities.</p>
          <p> It owns a facility in Colorado Springs, Colorado that manufactures its XSense line of flexible touch sensors.</p>



        </div>
        <hr>
      </div>

      <div id="Types" class="content">
        <div class="container">
          <h1>Types</h1>
          <p>AVR microcontrollers are available in three categories:</p>
          <h3>TinyAVR </h3>
          <img class="ins-img" src="img/tiny.jfif" alt="" srcset="">
          <p>Less memory, small size, suitable only for simpler applications</p>
          <h3>MegaAVR</h3>
          <img class="ins-img" src="img/xmega.png" alt="" srcset="">
          <p>These are the most popular ones having good amount of memory (upto 256 KB), higher number of inbuilt peripherals and suitable for moderate to complex applications.</p>
          <h3>XmegaAVR</h3>
          <img class="ins-img" src="img/xmega.png" alt="" srcset="">
          <p>Used commercially for complex applications, which require large program memory and high speed.</p>

          <h3>Arduino</h3>
          <img class="ins-img" src="img/arduino.jpg" alt="" srcset="">
          <p>Used commercially for complex applications, which require large program memory and high speed.</p>
        </div>
        <hr>
      </div>

      <div id="GettingStarted" class="content">
        <div class="container">
          <h1>Getting Started</h1>
          <p>This Getting Started training for Atmel Studio 7 will guide you through all the major features of the IDE. It
            is designed as a video series with accompanying hands-ons.</p>
          <p> Each section starts with a video, which covers that section.</p>
          <h3>Prerequisites</h3>
          Much of the training could be completed by using the editor and simulator, however, in order to cover
          everything the following is recommended.


        </div>
        <hr>
      </div>

      <div id="EditorIde" class="content">
        <div class="container">
          <h1>Installation</h1>
          <h3> Run Installer </h3>

          <img src="img/install-ico.png">
          <p>Go to the location where you downloaded the installer and run the installer:</p>
          <h4>as-installer-X.X.XXXX-full.exe.</h4>

          <p>Depending on your Windows security settings, you may get a window asking if you are sure you want to run this program. Click on Yes, if it prompts you.
          </p>
          <img class="ins-img" src="img/install1.png" alt="" srcset="">
          <h3>Agree to License and Choose Installation Location</h3>
          <p>Read the License Agreement and then check the box to agree to the license terms and conditions.</p>
          <p>Choose the installation path. The default is <strong>C:\Program Files (x86)\Atmel\Studio\</strong></p>
          <p>Click Next.</p>


          <h3>Select the architecture(s) you plan to work with</h3>
          <p>AVR® 8-bit MCU</p>
          <p>AVR 32-bit MCU</p>
          <p>SMART ARM MCU</p>
          <img class="ins-img" src="img/install2.png" alt="" srcset="">
          <p>Click Next.</p>


          <h3>Choose whether to install the Atmel Software Framework and Example Projects</h3>
          <p>The Atmel Software Famework provides:</p>

          <p>Common software framework for 8-bit AVR, 32-bit AVR and ARM</p>
          <p>Drivers for each MCU peripheral</p>
          <p>Hardware components driver</p>
          <p>Demo applications that use all drivers</p>
          <p>RTOS-ready source code</p>
          <p>Complete software framework in C code, optimization in assembly code</p>
          <p>Full projects compatible with GNU GCC</p>
          <p>Designed to run on Atmel evaluation kits and reference design and easily portable to any other hardware platform</p>
          <p>Designed to help develop software applications for Atmel microcontrollers</p>

          <img class="ins-img" src="img/install3.png" alt="" srcset="">

          <h3>Accept System Validation</h3>
          <img class="ins-img" src="img/install4.png" alt="" srcset="">
          <p>Click Next.</p>

          <h3>Begin Installation</h3>
          <img class="ins-img" src="img/install5.png" alt="" srcset="">
          <p>Click Install.</p>

          <h3>Accept Secondary Installations</h3>
          <p>The main installer may launch secondary installers to install the components you selected in previous steps. Allow these installers to run.</p>
          <img class="ins-img" src="img/install6.png" alt="" srcset="">
          <p>Click Install.</p>

          <h3>Installation Complete</h3>
          <img class="ins-img" src="img/install7.png" alt="" srcset="">
          <p>Click Close.</p>
        </div>
        <hr>
      </div>


      <!--<div id="Compiler" class="content">
        <div class="container">


        </div>
        <hr>
      </div>

      <div id="LibsTools" class="content">
        <div class="container">


        </div>
        <hr>
      </div>

      <div id="BD" class="content">
        <div class="container">


        </div>
        <hr>
      </div>-->

    </div>
  </div>
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/global/foot.php"; ?>

</body>

</html>