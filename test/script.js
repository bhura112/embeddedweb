
function onMOClicked()
{
    var Mo_Menu = document.getElementById('table-container');
    var Mo_Icon = document.getElementById('MO-icon');
    var Mo_Tab  = document.getElementById('MO-table');

    Mo_Menu.classList.toggle('MO-clicked');
    Mo_Icon.classList.toggle('MO-close');
    

    function Mo_TabFunc() {
        Mo_Menu.classList.toggle('MO-clicked');
        Mo_Icon.classList.toggle('MO-close');
        console.log("Hello");
    }
    
    Mo_Tab.removeEventListener("click", Mo_TabFunc);
    
    Mo_Tab.addEventListener('click', Mo_TabFunc,{once: true});

}