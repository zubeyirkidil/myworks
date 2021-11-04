//variables
var menu = document.querySelector('.main-image img');

var tl = gsap.timeline();



tl.fromTo('.animation-box-top', {height: "50vh"}, {height: "0px", duration: 1, delay: 0.4} );
tl.fromTo('.animation-box-bottom', {height: "50vh"}, {height: "0px", duration: 1}, "-=1" );
tl.fromTo('#main-image', {width: "95%"}, {width: "100%", duration: 1}, "-=1");
tl.fromTo('.header', {opacity: 0}, {opacity: 1 , duration: 1} );
tl.fromTo('.slogan', {opacity: 0}, {opacity: 1, duration: 1}, "-=1");