<?php 
   require_once $_SERVER['DOCUMENT_ROOT']."/database/dataHandler.php";
   GetMain(0);
   GetHeadData(0);
   GetBodyData(0);
   GetfootData(0);
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

    <link rel = "icon" href = "https://cdn.jsdelivr.net/gh/bhura112/embeddedweb@main/global/logo.png" type="image/x-icon">

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

<?php include_once $_SERVER['DOCUMENT_ROOT']."/global/header.php"; ?>
<!-------------  ---------------------------------------- Main Content Start----------------------------------------------------------->


 <div class="page-content"> 
 <div class="subscription-page">
  <div class="row-0-col-1">
 <h2><?php  echo $mainData['topic']; ?></h2>
 <h3> Learn & download free<br/>Design, Simulation,Documents <br/> code and videos</h6>
 <p>Subscribe here for latest <br/>projects and codes</p>
 <form action="#" method="post" class="subscription-form">
  <input class="input-email" type="email" name="email" placeholder="example@xyz.com">
  <input class="input-submit" type="submit" name="submit" value="Subscribe">
 </form>
  </div>

  <div class="row-0-col-2">
  <!-- <img src="https://via.placeholder.com/250/">-->
  <p>
<img src="img/emb.png" alt="embedded web">
  </p>
  </div>
 </div>
</div> 
 <div class="card-section">
 <h2>"What we know is a drop, what we don't know is an ocean." - <i>Isaac Newton</i></h2>
 <div class="card-section-page">
  
  
  <div class="embedded-card">
<div class="flip-card">
 <div class="flip-card-inner">
<div class="flip-card-front">
  <img width="100" height="100" src="/img/flip-card-front.svg" alt="Avatar" >
</div>
<div class="flip-card-back">
  <p>Micro </p> 
  <p>Controllers</p> 
  <a href="mcu/"><p>Start Learning  <i class="fa fa-arrow-right" aria-hidden="true"></i></p></a>
 </div>
 </div>
  </div>
  </div>


  <div class="rtos-card">
<div class="flip-card">
 <div class="flip-card-inner">
<div class="flip-card-front">
  <img width="100" height="100"  src="/img/rtos-card.svg" alt="Avatar" >
</div>
<div class="flip-card-back">
  <p>RTOS</p> 
  <p>OS</p> 
  <a href="rtos/"><p>Start Learning  <i class="fa fa-arrow-right" aria-hidden="true"></i></p></a>
</div>
 </div>
  </div>
  </div>

  <div class="linux-card">
<div class="flip-card">
 <div class="flip-card-inner">
<div class="flip-card-front">
  <img width="100" height="100"  src="/img/linux-card.svg" alt="Avatar" >
</div>
<div class="flip-card-back">
  <p>LINUX</p> 
  <p>OS</p> 
  <a href="linux/"><p>Start Learning  <i class="fa fa-arrow-right" aria-hidden="true"></i></p></a>
 
</div>
 </div>
  </div>
  </div>


  <div class="qt-card">
<div class="flip-card">
 <div class="flip-card-inner">
<div class="flip-card-front">
  <img width="100" height="100"  src="/img/qt-card.svg" alt="Avatar" >
</div>
<div class="flip-card-back">
 <p>Qt</p>
 <p>Frame Work</p>
 <a href="qt/"><p>Start Learning<i class="fa fa-arrow-right" aria-hidden="true"></i></p></a>
 
</div>
 </div>
  </div>
  </div>

 </div>
</div> 

<main>
 <!--<section class="esys-sec">
  <div class="left">
<h3>Embedded Systems</h3>

<h4> An embedded system is a microprocessor-based computer hardware system with software that is designed to
 perform a dedicated function, either as an independent system or as a part of a large system. At the
 core is an integrated circuit designed to carry out computation for real-time operations.</h4>

 <p>An embedded application is software that is placed permanently inside some kind of device to perform a
  very specific set of functions. Some small embedded applications like those in a microwave oven do not
  need an operating system (OS) to control them. </p>
 <h4><a href="embeddedsys/">Learn More <i class="fas fa-arrow-circle-right"></i></h4>
  </div>
  <div class="right">
<picture>
 <img src="img/embsys.png">
</picture>
  </div>
 </section>-->

 <section class="esys-sec">
  <div class="left">
<h3>Micro Contollers</h3>

    <h4> 
        Microcontroller is a small computer on a single metal-oxide-semiconductor (MOS) integrated circuit (IC) chip. 
        A microcontroller contains one or more CPUs (processor cores) along with memory and programmable input/output peripherals. 
    </h4>

    <p>
        Microcontrollers are designed for embedded applications, in contrast to the microprocessors used in personal computers or other general 
        purpose applications consisting of various discrete chips.
  </p>
 <h4><a href="mcu/">Learn More <i class="fas fa-arrow-circle-right"></i></h4>
  </div>
  <div class="right">
<picture>
 <img src="img/mcu.png">
</picture>
  </div>
 </section>

 <section>
  <div class="left">
<h3>Real Time Operating System</h3>

<h4>Real-time operating system (RTOS) is an operating system intended to serve real time application that
 process data as it comes in, mostly without buffer delay. The full form of RTOS is Real time operating
 system. </h4>

 <p>In a RTOS, Processing time requirement are calculated in tenths of seconds increments of time. It is
  time-bound system that can be defined as fixed time constraints. In this type of system, processing must
  be done inside the specified constraints. Otherwise, the system will fail.
 </p>
 <h4><a href="rtos/">Learn More <i class="fas fa-arrow-circle-right"></i></h4>
  </div>
  <div class="right">
<picture>
 <img src="img/rtos.png">
</picture>
  </div>
 </section>

 <section>
  <div class="left">
<h3>Linux</h3>
<h4>Just like Windows, iOS, and Mac OS, Linux is an operating system. In fact, one of the most popular
 platforms on the planet, Android, is powered by the Linux operating system. An operating system is
 software that manages all of the hardware resources associated with your desktop or laptop. To put it
 simply, the operating system manages the communication between your software and your hardware. Without
 the operating system (OS), the software wouldn?t function.</h4>
 <p> Linux is also distributed under an open source license. Open source follows these key tenants:
 </p>
 <p>The freedom to run the program, for any purpose.</p>
 <p>The freedom to study how the program works, and change it to make it do what you wish.</p>
 <p>The freedom to redistribute copies so you can help your neighbor.</p>
 <p>The freedom to distribute copies of your modified versions to others.</p>
 <h4><a href="/linux">Learn More <i class="fas fa-arrow-circle-right"></i></h4>
  </div>
  <div class="right">
<picture>
 <img src="img/linux.png">
</picture>
  </div>
 </section>

 <section>
  <div class="left">
<h3>Qt</h3>
<h4>Qt (pronounced as "cute", not "cu-tee") is a cross-platform framework that is usually used as a
 graphical toolkit, although it is also very helpful in creating CLI applications. It runs on the three
 major desktop OSes, as well as on mobile OSes, such as Symbian, Nokia Belle, Meego Harmattan, MeeGo or
 BB10, and on embedded devices. Ports for Android (Necessitas) and iOS are also in development.</h4>

<p> Qt used its own paint engine and controls, emulating the look of the different
 platforms it runs on when it drew its widgets. This made the porting work easier because very few
 classes in Qt really depended on the target platform.</p>
 <h4><a href="qt/">Learn More <i class="fas fa-arrow-circle-right"></i></h4>
  </div>

  <div class="right">
<picture>
 <img src="img/qt.png">
</picture>
  </div>
 </section>
</main>
 <div class="page-space"></div>

 <?php include_once $_SERVER['DOCUMENT_ROOT']."/global/foot.php"; ?>
</body>
</html>