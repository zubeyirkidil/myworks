
//Button Animation

var button = document.querySelector('.menu-button');
var buttonDivs = document.querySelectorAll('.menu-button div');

var box = document.querySelectorAll('.box div');

var box1 = box[0];
var box2 = box[1];
var box3 = box[2];

var div1 = buttonDivs[0];
var div2 = buttonDivs[1];
var div3 = buttonDivs[2];

var counter=0;

box1.addEventListener('mouseover',()=>{

	box1.style.height='35px';
})

box1.addEventListener('mouseout',()=>{

	box1.style.height='8px';
})

box2.addEventListener('mouseover',()=>{

	box2.style.height='35px';
})

box2.addEventListener('mouseout',()=>{

	box2.style.height='8px';
})

box3.addEventListener('mouseover',()=>{

	box3.style.height='35px';
})

box3.addEventListener('mouseout',()=>{

	box3.style.height='8px';
})

button.addEventListener("click",()=>{


	if(counter==0){

		div2.style.transition='0s';
		div2.style.transform='translateX(1000%)';

		div1.style.backgroundColor='#a33';
		div3.style.backgroundColor='#a33';

		div1.style.transform='rotate(225deg)';
		div3.style.transform='rotate(-225deg)';

		div1.style.marginTop='10px';
		div3.style.marginTop='-15px';

		
		box1.style.height='35px';
		box2.style.height='35px';
		box3.style.height='35px';

		counter=1;

	}else if(counter==1){

		
		div2.style.transform='translateX(0%)';

		div1.style.backgroundColor='#fff';
		div3.style.backgroundColor='#fff';

		div1.style.transform='rotate(0deg)';
		div3.style.transform='rotate(0deg)';

		div1.style.marginTop='0px';
		div3.style.marginTop='0px';

		box1.style.height='8px';
		box2.style.height='8px';
		box3.style.height='8px';

		counter=0;
	
	}

	
})