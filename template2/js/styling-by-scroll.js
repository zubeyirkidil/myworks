  var g = 0;

 $(document).scroll(function() {
        
    // variables
    var x = $(this).scrollTop();
    var y = document.querySelectorAll('.menu ul a');

    var section1 = document.querySelector('#section-1').offsetTop-10;
    var section2 = document.querySelector('#section-2').offsetTop-10;
    var section3 = document.querySelector('#section-3').offsetTop-10;
    var contact = document.querySelector('#contact').offsetTop-10;

    var color = 'darkred';
      
      //events occur when screen between 500 and 1000;

      if (x>=100 && x<=850){  

          if(g==0){

            typeNumbers();
            g=g+1;
          }
          
          
      }

       if (x>=0 && x<=section1){  

        
          for(var i=0;i<=y.length;i++){

          y[0].style.backgroundColor=color;
          y[i].style.backgroundColor="inherit";

        }
         
      }

      if (x>=section1 && x<=section2){

          for(var i=0;i<=y.length;i++){

          y[1].style.backgroundColor=color;
          y[i].style.backgroundColor="inherit";
        }


      }

      if (x>=section2 && x<=section3){

          for(var i=0;i<=y.length;i++){

          y[2].style.backgroundColor=color;
          y[i].style.backgroundColor="inherit";
        }
      }

      if (x>=section3 && x<=contact){

          for(var i=0;i<=y.length;i++){

          y[3].style.backgroundColor=color;
          y[i].style.backgroundColor="inherit";
        }
      }
       
      if (x>=contact){

          for(var i=0;i<=y.length;i++){

          y[4].style.backgroundColor=color;
          y[i].style.backgroundColor="inherit";
        }
      }

  });

 