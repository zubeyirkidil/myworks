
// variables
var hamburgerButton = document.querySelector('.hamburger-menu');
var mobileMenu = document.querySelector('.menu').style;

var lines = document.querySelectorAll('.hamburger-menu div');

var line1 = lines[0];
var line2 = lines[1];
var line3 = lines[2];

var p = 0;

hamburgerButton.addEventListener('click',()=>{

	if(p==0){

		line1.style.backgroundColor='darkred';
		line2.style.backgroundColor='darkred';
		line3.style.backgroundColor='darkred';

		line2.style.transition='0s';
		line2.style.marginLeft='-1000%';

		line1.style.transform='rotate(-225deg)';
		line1.style.marginTop='10px';
		line1.style.width='30px';

		line3.style.transform='rotate(225deg)';
		line3.style.marginTop='-17px';
		line3.style.width='30px';

		mobileMenu.transform='translateY(60px)';
		

		p++;
	}else if(p!=0){

		line1.style.backgroundColor='#fff';
		line2.style.backgroundColor='#fff';
		line3.style.backgroundColor='#fff';

		line2.style.transition='0s';
		line2.style.marginLeft='0px';

		line1.style.transform='rotate(0deg)';
		line1.style.marginTop='0px';
		line1.style.width='100%';

		line3.style.transform='rotate(0deg)';
		line3.style.marginTop='0px';
		line3.style.width='100%';

		mobileMenu.transform='translateY(-65%)';
		p--;
	}
	
});

