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

// intersection observer counter
let targetCounterId = document.querySelector('#counterId')

function intersectionFadeUpAnimation(entries) {
    entries.map((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.remove('opacity-0')
            entry.target.style.animation = 'fadeUp 1s'
        }
    })
}


let observerCounterShow = new IntersectionObserver(intersectionFadeUpAnimation);
observerCounterShow.observe(targetCounterId)

// create the counter
let counterH4first = document.querySelector('.counterH4first');
let counterH4second = document.querySelector('.counterH4second');
let counterH4third = document.querySelector('.counterH4third');
let counterFirst = 0;
let counterSecond = 0;
let counterThird = 0;

// first counter
function showCounter1(entries) {
    entries.map((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.remove('opacity-0')
            let counterInterval1 = setInterval(() => {
                counterFirst++
                counterH4first.innerHTML =`&dollar;${counterFirst} billion`
                if (counterFirst >= 100) {
                    clearInterval(counterInterval1)
                }
                

            }, 50);
        } 

    })
}

const observerCounterStart1 = new IntersectionObserver(showCounter1);
observerCounterStart1.observe(counterH4first);

// second counter
function showCounter2(entries) {
    entries.map((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.remove('opacity-0')
            let counterInterval2 = setInterval(() => {
                counterSecond++
                counterH4second.innerHTML =`${counterSecond} +`
                if (counterSecond >= 100) {
                    clearInterval(counterInterval2)
                }
                

            }, 50);
        } 

    })
}

const observerCounterStart2 = new IntersectionObserver(showCounter2);
observerCounterStart2.observe(counterH4second);

// third counter
function showCounter3(entries) {
    entries.map((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.remove('opacity-0')
            let counterInterval3 = setInterval(() => {
                counterThird++
                counterH4third.innerHTML =`${counterThird} milion`
                if (counterThird >= 90) {
                    clearInterval(counterInterval3)
                }
                

            }, 50);
        } 

    })
}

const observerCounterStart3 = new IntersectionObserver(showCounter3);
observerCounterStart3.observe(counterH4third);


// Crypto Home table intersection observer
let cryptoHomeTable = document.querySelector('#cryptoHomeTable')
let cryptoHomeTableObserver = new IntersectionObserver(intersectionFadeUpAnimation)
cryptoHomeTableObserver.observe(cryptoHomeTable)

// team member card intersection observer
let teamCardAnimation = document.querySelector('#teamCardAnimation')

let observerTeamCard = new IntersectionObserver(intersectionFadeUpAnimation)
observerTeamCard.observe(teamCardAnimation)

// team member skills intersection observer
let teamSkills = document.querySelector('#teamSkills');

function intersectionFadeLeftAnimation(entries) {
    entries.map((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.remove('opacity-0')
            entry.target.style.animation = 'fadeLeft 1s'
        }
    })
}

let observerTeamSkills = new IntersectionObserver(intersectionFadeLeftAnimation);
observerTeamSkills.observe(teamSkills);














































// remove Successfull sending email div
// let flashDivShow = document.querySelector('#flashDivShow')
// let closeFlashButton = document.querySelector('#closeFlashButton')

// closeFlashButton.addEventListener('click', ()=> {
//     flashDivShow.style = "visibility: hidden";
// })






