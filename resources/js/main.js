// capture the toggler button and the icon + create a on/off
let togglerButton = document.querySelector('#togglerButton');
let arrowTogglerButton = document.querySelector('#arrowTogglerButton')
let isClickedTogglerButton = true;

// create the event click for change arrow icon direction when click the button in collapse navbar
togglerButton.addEventListener('click', ()=> {
    if(isClickedTogglerButton == true ){
        arrowTogglerButton.style.transform = "rotate(180deg)";
        isClickedTogglerButton=false;
    }else{
        arrowTogglerButton.style.transform = "rotate(360deg)";
        isClickedTogglerButton=true;
    }
})

