let lastKnownScrollPosition = 0;
let ticking = false;

var s_container = document.getElementById('sticky-container');
var s_elemet    = document.getElementById('sticky-c');

function doSomething(scrollPos) {
  var ele_rec = s_container.getBoundingClientRect();
  var sloc = document.body.clientHeight - scrollPos;
  console.log(sloc);

  if(sloc < 1500) {
    s_elemet.style.position = "relative";
    s_elemet.style.top = "";
    s_elemet.style.left="";
    s_elemet.style.margin = "";
  }else  if (ele_rec.top < 200){
    s_elemet.style.position = "fixed";
    s_elemet.style.top = "50px";
    s_elemet.style.margin = "0px -50px";
  }
  else {
    s_elemet.style.position = "relative";
    s_elemet.style.top = "";
    s_elemet.style.left="";
    s_elemet.style.margin = "";
  }

  console.log();
}

document.addEventListener('scroll', function(e) {
  lastKnownScrollPosition = window.scrollY;

  if (!ticking) {
    window.requestAnimationFrame(function() {
      doSomething(lastKnownScrollPosition);
      ticking = false;
    });

    ticking = true;
  }
});