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
   <div class="page-content">
       <div class="table-icon" id="MO-icon" onclick="onMOClicked()">
         <i class="material-icons-outlined menu-open-icon">menu_open</i>
       </div>

       <div id= "table-container" class="table-container">
        <div class="table">
            <div class="table-header">
                 
            </div>
            <div class="table-body">
                
                     <h3 href="#"> <a href="#">Architecture </a></h3>
                     <h3 href="#"> <a href="#">Type </a></h3>
                     <h3 href="#"> <a href="#">Documents </a> </h3>
                     <h3 href="#"> <a href="#">Source code </a> </h3>
                     <h3 href="#"> <a href="#">Data </a> </h3>
            </div>
            <div class="table-body">
               
            </div>
        </div>
       </div>

       <div class="content-container">
           <div class="abt-pg">
           <h1 class="ct-h-p">Stack Data Structure</h1>
            <p class="ct-d-p">
            In this tutorial, you will learn about variables and rules for naming a variable. You will also learn about different literals in C programming and how to create constants.
            </p>
            <hr class="hrc-bottom">
        </div>
       

        <div class="abt-pg">
          <p class="ct-h-p">Queue Data Structure</p>
          <br>
              <p>CSS Linear Gradients ... 
              To create a linear gradient you must define at least two color stops. 
              Color stops are the colors you want to render smooth transitions 
              <br>
              A wiki (/ˈwɪki/ (About this soundlisten) WIK-ee) is a hypertext publication collaboratively edited and managed by its own audience directly using a web browser. A typical wiki contains multiple pages for the subjects or scope of the project and could be either open to the public or limited to use within an organization for maintaining its internal knowledge base.
          </p> 
          <hr class="hrc-bottom">
        </div>
        
       </div>
      
   </div>
  </body>
</html>