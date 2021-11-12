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
   
  <section class="body-top-section">
         
              <h1><?php  echo $mainData['topic']; ?></h1>
         
              <p> 
                 Microcontroller is a small computer on a single metal-oxide-semiconductor (MOS) integrated circuit (IC) chip. 
                 A microcontroller contains one or more CPUs (processor cores) along with memory and programmable input/output peripherals. 
              </p>

              <p>
                 Microcontrollers are designed for embedded applications, in contrast to the microprocessors used in personal computers or other general 
                 purpose applications consisting of various discrete chips.
               </p>
  </section> 
        
        <section class="body-card-section">
          <div class="card-sec">
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
        </section>
  
  <div class="page-content">
       <div class="table-icon" id="MO-icon" onclick="onMOClicked()">
         <i class="material-icons-outlined menu-open-icon">menu_open</i>
       </div>

       <div id= "table-container" class="table-container">
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

         <div id="Stack" class="pg">
            
            <div class="pg-content">
              <h1>Stack</h1>
              <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>

              <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>
              <h4><strong>Type of stack data structure</strong></h4>
              
              <h5>1.Reverse Stack</h5>
              <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>
              <a href=".">show is link</a>
              <h5>1.Forword Stack</h5>
              <p>
              In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
              </p>
            </div>
            <hr>
          </div>
       

          <div id="Queue" class="pg">
           <h1>Queue</h1>
            <p>
            In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
            </p>
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