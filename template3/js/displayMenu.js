

var menu = document.querySelector('.menu');
var hamburgerButton = document.querySelector('.hamburger-button');
var hamburgerButtonDiv = document.querySelectorAll('.hamburger-button div');

var counter = 0;

hamburgerButton.addEventListener('click',()=>{


if(counter==0){

	hamburgerButtonDiv[0].style.transform='rotate(-135deg)';
	hamburgerButtonDiv[0].style.marginTop='8px';

	hamburgerButtonDiv[1].style.transform='translateX(-1000%)';

	hamburgerButtonDiv[2].style.transform='rotate(135deg)';
	hamburgerButtonDiv[2].style.marginTop='-15px';

	hamburgerButtonDiv[0].style.backgroundColor='red';
	hamburgerButtonDiv[1].style.backgroundColor='red';
	hamburgerButtonDiv[2].style.backgroundColor='red';

	menu.style.transform='translateX(0%)';
	counter=1;
}else if(counter==1){

	hamburgerButtonDiv[0].style.transform='rotate(0deg)';
	hamburgerButtonDiv[0].style.marginTop='0px';

	hamburgerButtonDiv[1].style.transform='translateX(0%)';
	hamburgerButtonDiv[2].style.transform='rotate(0deg)';
	hamburgerButtonDiv[2].style.marginTop='0px';

	hamburgerButtonDiv[0].style.backgroundColor='#000';
	hamburgerButtonDiv[1].style.backgroundColor='#000';
	hamburgerButtonDiv[2].style.backgroundColor='#000';

	menu.style.transform='translateX(-100%)';
	counter=0;
}


});

