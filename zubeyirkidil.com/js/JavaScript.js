
// feedback

var popup = document.querySelector('.popup');

document.addEventListener('click',()=>{

  popup.style.display = 'block';
  popup.style.transform = 'translateX(100%)';
})

// GSAP

var menu = document.querySelector('.main-image img');

var tl = gsap.timeline();

tl.fromTo('.animation-box', {width: "30%"}, {width: "0%", duration: 1.5, delay: 0.2});
tl.fromTo('.wallpaper', {width: "30%"}, {width: "100%", duration: 1.5}, "-=1.5");
tl.fromTo('.slogan', {opacity: 0}, {opacity: 1, duration: 1.5},"-=0.75");

// Type

	const kelimeler = ['tasarım      ','programlama    '];

	var x = document.querySelector('#type');

	var count = 0;
	var index = 0;
	var currentText = '';
	var letter = '';

	(function type(){

		if(count === kelimeler.length){
			count = 0;
		}


		currentText = kelimeler[count];

		letter = currentText.slice(0,index);

		x.innerHTML = letter;

		index++;

		if(letter.length === currentText.length){

			count++;
			index = 0;


		}

		setTimeout(type, 400);

	})();


// Styling By Scroll
    	
 $(document).scroll(function() {
        
    // variables
  
    var x = $(this).scrollTop();

    var menu = document.querySelector('.box');
    var menuItems = document.querySelectorAll('.box div');

    var menu1 =menuItems[0];
    var menu2 =menuItems[1];
    var menu3 =menuItems[2];

    var hakkimda = document.querySelector('#hakkimda').offsetTop-100;
    var tasarimlar = document.querySelector('#tasarimlar').offsetTop-100;
    var iletisim = document.querySelector('#iletisim').offsetTop-100;


    console.log(hakkimda);

    //events occur when screen less the 500;
       
      if (x<=440){

          menu.style.position="static";


         
      }

      if (x>=440){

          menu.style.position="fixed";
          menu.style.top="-40px"; 

      }

      if(x<=hakkimda){

          menu1.style.backgroundColor="rgba(0,0,255,0.2)";
          menu2.style.backgroundColor="rgba(255,0,0,0.2)";
          menu3.style.backgroundColor="rgba(0,255,0,0.2)";

          menu1.style.color="#efefef";
          menu2.style.color="#efefef";
          menu3.style.color="#efefef";

        box1.addEventListener('mouseover',()=>{

        menu1.style.backgroundColor="rgba(0,0,255,0.5)";
      })

      box1.addEventListener('mouseout',()=>{

        menu1.style.backgroundColor="rgba(0,0,255,0.2)";
      })

      box2.addEventListener('mouseover',()=>{

        menu2.style.backgroundColor="rgba(255,0,0,0.5)";
      })

      box2.addEventListener('mouseout',()=>{

        menu2.style.backgroundColor="rgba(255,0,0,0.2)";
      })

      box3.addEventListener('mouseover',()=>{

        menu3.style.backgroundColor="rgba(0,255,0,0.5)";
      })

      box3.addEventListener('mouseout',()=>{

        menu3.style.backgroundColor="rgba(0,255,0,0.2)";
      })
    
      }
     
      if(x>=hakkimda){

          menu1.style.backgroundColor="rgba(255,255,255,1)";
          menu2.style.backgroundColor="rgba(255,255,255,0.5)";
          menu3.style.backgroundColor="rgba(255,255,255,0.5)";

          menu1.style.color="#242424";
          menu2.style.color="#242424";
          menu3.style.color="#242424";

      box1.addEventListener('mouseover',()=>{

        menu1.style.backgroundColor="rgba(255,255,255,1)";
      })

      box1.addEventListener('mouseout',()=>{

        menu1.style.backgroundColor="rgba(255,255,255,1)";
      })

      box2.addEventListener('mouseover',()=>{

        menu2.style.backgroundColor="rgba(255,255,255,1)";
      })

      box2.addEventListener('mouseout',()=>{

        menu2.style.backgroundColor="rgba(255,255,255,0.5)";
      })

      box3.addEventListener('mouseover',()=>{

        menu3.style.backgroundColor="rgba(255,255,255,1)";
      })

      box3.addEventListener('mouseout',()=>{

        menu3.style.backgroundColor="rgba(255,255,255,0.5)";
      })
        
      }
      if(x>=tasarimlar){

          menu1.style.backgroundColor="rgba(255,255,255,0.5)";
          menu2.style.backgroundColor="rgba(255,255,255,1)";
          menu3.style.backgroundColor="rgba(255,255,255,0.5)";

        box1.addEventListener('mouseover',()=>{

        menu1.style.backgroundColor="rgba(255,255,255,1)";
      })

      box1.addEventListener('mouseout',()=>{

        menu1.style.backgroundColor="rgba(255,255,255,0.5)";
      })

      box2.addEventListener('mouseover',()=>{

        menu2.style.backgroundColor="rgba(255,255,255,1)";
      })

      box2.addEventListener('mouseout',()=>{

        menu2.style.backgroundColor="rgba(255,255,255,1)";
      })

      box3.addEventListener('mouseover',()=>{

        menu3.style.backgroundColor="rgba(255,255,255,1)";
      })

      box3.addEventListener('mouseout',()=>{

        menu3.style.backgroundColor="rgba(255,255,255,0.5)";
      })        

      }
      if(x>=iletisim){

          menu1.style.backgroundColor="rgba(255,255,255,0.5)";
          menu2.style.backgroundColor="rgba(255,255,255,0.5)";
          menu3.style.backgroundColor="rgba(255,255,255,1)";

        box1.addEventListener('mouseover',()=>{

        menu1.style.backgroundColor="rgba(255,255,255,1)";
      })

      box1.addEventListener('mouseout',()=>{

        menu1.style.backgroundColor="rgba(255,255,255,0.5)";
      })

      box2.addEventListener('mouseover',()=>{

        menu2.style.backgroundColor="rgba(255,255,255,1)";
      })

      box2.addEventListener('mouseout',()=>{

        menu2.style.backgroundColor="rgba(255,255,255,0.5)";
      })

      box3.addEventListener('mouseover',()=>{

        menu3.style.backgroundColor="rgba(255,255,255,1)";
      })

      box3.addEventListener('mouseout',()=>{

        menu3.style.backgroundColor="rgba(255,255,255,1)";
      })
       
      }

  });
  
  
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

