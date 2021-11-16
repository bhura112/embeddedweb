<?php 
   require_once $_SERVER['DOCUMENT_ROOT']."/database/dataHandler.php";
   GetMain(1);
   GetHeadData(1);
   GetBodyData(0);
   GetfootData(0);
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
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
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
    <title>Test Elements</title>
</head>

  <body>
  <?php include_once $_SERVER['DOCUMENT_ROOT']."/global/header.php"; ?>
  <div class="top-spacing"></div> 
  <div class="body-top-contents">
        <div class="row-1"></div>
        <div class="row-2">
            <div class="col-1">
            <span class="material-icons-outlined">memory</span>
            </div>
            <div class="col-2">
                <h1>Micro Controller</h1>
                <p>Microcontroller is a small computer on a single metal-oxide-semiconductor (MOS) integrated circuit (IC) chip. A microcontroller contains one or more CPUs (processor cores) along with memory and programmable input/output peripherals.
               <br><br>Microcontrollers are designed for embedded applications, in contrast to the microprocessors used in personal computers or other general purpose applications consisting of various discrete chips.</p>
            </div>
        </div>
        <div class="row-3"></div>
    </div>
           
    <div class="body-cards-div">
          <a class="card card-background-1" href="atmel/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">ATMEL</h2>
                </div>
                <div class="foot">
                  <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
                </div>
              </a>

              <a class="card card-background-2" href="microchip/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">MICROCHIP</h2>
                </div>
                <div class="foot">
                  <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
                </div>
              </a>

              <a class="card card-background-3" href="amr/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">ARM</h2>
                </div>
                <div class="foot">
                  <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
                </div>
              </a>
     </div>
  
  <div class="page-content">
       <div class="table-icon" id="MO-icon" onclick="onMOClicked()">
         <i class="material-icons-outlined menu-open-icon">menu_open</i>
       </div>

       <div id= "table-container" class="table-content-container">
        <div class="table">
            <div class="table-header">
                 
            </div>
            <div id="MO-table" class="table-body">
                
                     <h3 > <a href="#Stack">Stack </a></h3>
                     <h3 > <a href="#Queue">Queue </a></h3>
                     <h3 > <a href="#Linklist">Linklist </a> </h3>
                     <h3 > <a href="#Tree">Tree</a> </h3>
                     <h3 > <a href="#Graph">Graph </a> </h3>
            </div>
            <div class="table-body">
               
            </div>
        </div>
       </div>

       <div class="content-container">

         <div id="Stack" class="content">
            
            <div class="container">
              <h1>Stack</h1>
              <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>

              <p>
              <strong> In this tutorial</strong>, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>
              <h3><strong>Type of stack data structure</strong></h3>
              
              <h4>1.Reverse Stack</h4>
              <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>
              <a href=".">Learn More ></a>
              <h4>1.Forword Stack</h4>
              <figure class="fig-sim">
               
                <img src="../mcu/img/harvard.png" alt="" srcset="">
                <figcaption> Stack represtation smiliar to pile of plates</figcaption>
              </figure>
             <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>
            </div>
            <hr>
          </div>
       

          <div id="Queue" class="content">
            
            <div class="container">
              <h1>Queue</h1>
              <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>

              <p>
              <strong> In this tutorial</strong>, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>
              <h3><strong>Type of stack data structure</strong></h3>
              
              <h4>1.Reverse Stack</h4>
              <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>
              <a href=".">Learn More ></a>
              <h4>1.Forword Stack</h4>
              <figure class="fig-sim">
               
                <img src="../mcu/img/harvard.png" alt="" srcset="">
                <figcaption> Stack represtation smiliar to pile of plates</figcaption>
              </figure>
             <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>
            </div>
            <hr>
          </div>

          <div id="Linklist" class="pg">
           <h1>Linklist</h1>
            <p>
            In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
            </p>
            <hr>
          </div>


          <div id="Tree" class="pg">
           <h1>Tree</h1>
            <p>
            In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
            </p>
            <hr>
          </div>

          <div id="Graph" class="pg">
           <h1>Graph</h1>
            <p>
            In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
            </p>
            <hr>
          </div>
          
        
       </div>
      
   </div>
  </body>
</html>