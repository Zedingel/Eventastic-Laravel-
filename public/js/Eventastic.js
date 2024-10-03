//step 1: get DOM used for carousel
let nextDom = document.getElementById('next');
let prevDom = document.getElementById('prev');

let carouselDom = document.querySelector('.carousel');
let SliderDom = carouselDom.querySelector('.carousel .list');
let thumbnailBorderDom = document.querySelector('.carousel .thumbnail');
let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll('.item');
let timeDom = document.querySelector('.carousel .time');

thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
let timeRunning = 3000;
let timeAutoNext = 7000;
// functionality for the Manual Navigation buttons
nextDom.onclick = function(){
    showSlider('next');    
}

prevDom.onclick = function(){
    showSlider('prev');    
}
let runTimeOut;
let runNextAuto = setTimeout(() => {
    next.click();
}, timeAutoNext)
// Function that displays the slides
function showSlider(type){
    let  SliderItemsDom = SliderDom.querySelectorAll('.carousel .list .item');
    let thumbnailItemsDom = document.querySelectorAll('.carousel .thumbnail .item');
    
    if(type === 'next'){
        SliderDom.appendChild(SliderItemsDom[0]);
        thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
        carouselDom.classList.add('next');
    }else{
        SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
        thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
        carouselDom.classList.add('prev');
    }
// Controls the enable/disable of the buttons    
    clearTimeout(runTimeOut);
    runTimeOut = setTimeout(() => {
        carouselDom.classList.remove('next');
        carouselDom.classList.remove('prev');
    }, timeRunning);

    clearTimeout(runNextAuto);
    runNextAuto = setTimeout(() => {
        next.click();
    }, timeAutoNext)
}

// Log in Toogle Functionality

var x=document.getElementById('login');
var y=document.getElementById('register');
var z=document.getElementById('btn');
function register()
{
    x.style.left='-400px';
    y.style.left='50px';
    z.style.left='110px';
}
function login()
{
    x.style.left='50px';
    y.style.left='450px';
    z.style.left='0px';
}


var modal = document.getElementById('login-form');
 function eventaaa() 
{
    if (target == modal) 
    {
        modal.style.display = "none";
    }
}
document.addEventListener('DOMContentLoaded', function() {
    const submitBtn = document.querySelector('submit-btn');

    submitBtn.addEventListener('click', function() {
       eventaaa()
    });
});

var counter = 200;
var opacityCount = 0;
var lastScroll = 0;

window.addEventListener("scroll",function(event){
	var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;
	if (currentScroll > 0 && lastScroll <= currentScroll){
		lastScroll = currentScroll;
		if( counter < 201   && counter > 100 ){
			counter -= 1;
			opacityCount += 0.015;
			if(opacityCount >1){ opacityCount = 1}
			console.log(counter)
			$(".banner").css({"background-size":"auto "+counter+"%"});
			$(".banner-overlay").css({"opacity":opacityCount});
		}
	}else{
		lastScroll = currentScroll;
		if( counter < 200 ){
			counter += 1;
			opacityCount -= 0.015;
			if(opacityCount < 0.01){ opacityCount = 0.01}
			console.log(counter)
			$(".banner").css({"background-size":"auto "+counter+"%"});
			$(".banner-overlay").css({"opacity":opacityCount});
			
		}
	}
});


// TESTIMONIAL  
document.querySelectorAll(".box").forEach(box => {
    VanillaTilt.init(box, {
        max: 10,
        speed: 300,
        glare: true,
    });
});
    
// Nav bar sticky
window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;function myFunction() {
    if (window.scrollY >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }


  function bookEvent() {
    // Redirect to the booking page
    window.location.href = "RbookEvent.html"; 
}



function convertPxToEm(pxValue, baseFontSize) {
    return pxValue / baseFontSize + 'em';
}

function convertExternalCssPxToEm(cssText) {
    const baseFontSize = 16; // Base font size in pixels

    const emCssText = cssText.replace(/(\d+)px/g, (match, p1) => convertPxToEm(parseInt(p1), baseFontSize));

    const styleTag = document.createElement('style');
    styleTag.innerHTML = emCssText;
    document.head.appendChild(styleTag);
}

fetch('Eventastic.css') 
    .then(response => response.text())
    .then(cssText => {
        convertExternalCssPxToEm(cssText);
    });


    