<?php 

    require_once 'database/connection.php';
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
        if( $rowobj->page_id == 0)
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
    <link rel="stylesheet" href="global/header.css">
    <link rel="stylesheet" href="global/foot.css">
    <link rel="stylesheet" href="global/style.css">
    <link rel="stylesheet" href="style.css">

    <title><?php  echo $rowobj->page_title; ?></title>
</head>

<body>
 <header class="header">
  <nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="."><b><?php  echo $rowobj->web_name; ?></b></a>
    </div>
    <div id="menu-topics" class="menu-topics">
        <ul id="navbar-nav" class="nav navbar-nav">
            <li><a href="mcu/">MICRO CONTROLLER</a></li>
            <li><a href="rtos/">RTOS</a></li>
            <li><a href="linux/">LINUX</a></li>
            <li><a href="qt/">Qt</a></li>
        </ul>
    </div>

    <div onclick="burgerClicked()" class="burger-menu">
    <i id="burgericon" class="fa fa-bars fa-2x" aria-hidden="true"></i>
    </div>
    </div>
  </nav>
 </header>

<!-------------  ---------------------------------------- Main Content Start----------------------------------------------------------->


 <div class="page-content"> 
 <div class="subscription-page">
  <div class="row-0-col-1">
 <h2><?php  echo $rowobj->page_topic; ?></h5>
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
<script src="global/headerScript.js"></script>
<script src="global/footerScript.js"></script>
<script src="https://kit.fontawesome.com/2197d61e3b.js" crossorigin="anonymous"></script>

</html>