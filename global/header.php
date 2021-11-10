<?php 
   require_once $_SERVER['DOCUMENT_ROOT']."/database/dataHandler.php";
?>
<header class="header">
  <nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="<?php echo $mainData["web_link"]; ?>"> <b><?php echo $mainData['web_name']; ?></b></a>
    </div>
    <div id="menu-topics" class="menu-topics">
        <ul id="navbar-nav" class="nav navbar-nav">
            <?php 
              for($i = 0; $i < sizeof($headData); $i++){
                $link = '<li><a href="'.$headData[$i]["head_link"].'">'.$headData[$i]["head_name"].'</a></li>';
                echo $link;
              }
            ?>
        </ul>
    </div>
    <div onclick="burgerClicked()" class="burger-menu">
    <i id="burgericon" class="fa fa-bars fa-2x" aria-hidden="true"></i>
    </div>
    </div>
  </nav>
 </header>