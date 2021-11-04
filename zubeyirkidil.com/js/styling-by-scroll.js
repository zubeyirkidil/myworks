
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
  