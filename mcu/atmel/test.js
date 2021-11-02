var clicked = false;

function burgerIndexClicked() {
  
    var icontent = document.getElementsByClassName("index-table")[0];
    var icon = document.getElementById("indexburgericon");
  
    clicked = !clicked;
  
    if(clicked) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-close");
        icontent.style.display = "block";
    }else {
        icon.classList.add("fa-bars");
        icon.classList.remove("fa-close");
        icontent.style.display = "none";
    }
        
    
    console.log(icon);
}