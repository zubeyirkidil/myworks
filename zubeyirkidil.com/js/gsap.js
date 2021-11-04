//variables
var menu = document.querySelector('.main-image img');

var tl = gsap.timeline();

tl.fromTo('.animation-box', {width: "30%"}, {width: "0%", duration: 2, delay: 0.2});
tl.fromTo('.wallpaper', {width: "30%"}, {width: "100%", duration: 2}, "-=2");
tl.fromTo('.slogan', {opacity: 0}, {opacity: 1, duration: 2},"-=1");