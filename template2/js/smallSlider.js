// smallSlider
	
	var smallSlider = document.querySelector('.small-slider');
	var imagesSmall = document.querySelectorAll('.small-slider img');

	var prevBtnSmall = document.querySelector('#prevBtnSmall');
	var nextBtnSmall = document.querySelector('#nextBtnSmall');

	var counterSmallSlider = 0;

	var deviceWidth = window.screen.width;

	//imagesSmall.length: 3;

	if(deviceWidth<=800){

	imagesSmall[counterSmallSlider].style.padding = "0px";

	nextBtnSmall.addEventListener("click", ()=>{
		

			smallSlider.style.transition='0.4s';
			

			if(counterSmallSlider == imagesSmall.length-1){

				counterSmallSlider = 0;

				imagesSmall[counterSmallSlider].style.padding = "0px";
				imagesSmall[imagesSmall.length-1].style.padding = "10%";

				smallSlider.style.transform = 'translateX(' + (-100 * counterSmallSlider) + '%)';
			}else{

				imagesSmall[counterSmallSlider].style.padding = "10%";
				imagesSmall[counterSmallSlider+1].style.padding = "0px";

				counterSmallSlider++;
				smallSlider.style.transform = 'translateX(' + (-100 * counterSmallSlider) + '%)';
			}
	});



	prevBtnSmall.addEventListener("click", ()=>{

		smallSlider.style.transition='0.4s';
		
		

			if(counterSmallSlider == 0){

				imagesSmall[counterSmallSlider].style.padding = "10%";
				imagesSmall[imagesSmall.length-1].style.padding = "0px";

				counterSmallSlider = imagesSmall.length-1;
				smallSlider.style.transform = 'translateX(' + (-100 * counterSmallSlider) + '%)';
			}else{

				imagesSmall[counterSmallSlider].style.padding = "10%";
				imagesSmall[counterSmallSlider-1].style.padding = "0px";
				counterSmallSlider--;
				smallSlider.style.transform = 'translateX(' + (-100 * counterSmallSlider) + '%)';
			}
	});

	setInterval(()=>{

			smallSlider.style.transition='0.4s';

			if(counterSmallSlider == imagesSmall.length-1){

				counterSmallSlider = 0;

				imagesSmall[counterSmallSlider].style.padding = "0px";
				imagesSmall[imagesSmall.length-1].style.padding = "10%";

				smallSlider.style.transform = 'translateX(' + (-100 * counterSmallSlider) + '%)';
			}else{

				imagesSmall[counterSmallSlider].style.padding = "10%";
				imagesSmall[counterSmallSlider+1].style.padding = "0px";

				counterSmallSlider++;
				smallSlider.style.transform = 'translateX(' + (-100 * counterSmallSlider) + '%)';
			}
	},5000)

	}
	else if(deviceWidth>800){

	imagesSmall[counterSmallSlider+1].style.padding = "0px";



	nextBtnSmall.addEventListener("click", ()=>{


			smallSlider.style.transition='0.4s';

			if(counterSmallSlider == imagesSmall.length-3){


				counterSmallSlider = 0;
				imagesSmall[imagesSmall.length-2].style.padding = "2%";
				imagesSmall[imagesSmall.length-5].style.padding = "0px";

				smallSlider.style.transform = 'translateX(' + (-33.33 * counterSmallSlider) + '%)';
			}else{

				counterSmallSlider++;
				imagesSmall[counterSmallSlider+1].style.padding = "0px";
				imagesSmall[counterSmallSlider].style.padding = "2%";

				smallSlider.style.transform = 'translateX(' + (-33.33 * counterSmallSlider) + '%)';
			}
	});



	prevBtnSmall.addEventListener("click", ()=>{

		smallSlider.style.transition='0.4s';

		if(counterSmallSlider == 0){

				counterSmallSlider = imagesSmall.length-3;

				imagesSmall[imagesSmall.length-5].style.padding = "2%";
				imagesSmall[imagesSmall.length-2].style.padding = "0px";

				smallSlider.style.transform = 'translateX(' + (-33.33 * counterSmallSlider) + '%)';
			}else{

				counterSmallSlider--;
				imagesSmall[counterSmallSlider+1].style.padding = "0px";
				imagesSmall[counterSmallSlider+2].style.padding = "2%";

				smallSlider.style.transform = 'translateX(' + (-33.33 * counterSmallSlider) + '%)';
			}
	});

	setInterval(()=>{

			smallSlider.style.transition='0.4s';

			

			if(counterSmallSlider == imagesSmall.length-3){

				counterSmallSlider = 0;

				imagesSmall[imagesSmall.length-2].style.padding = "2%";
				imagesSmall[imagesSmall.length-5].style.padding = "0px";

				smallSlider.style.transform = 'translateX(' + (-33.33 * counterSmallSlider) + '%)';
			}else{


				
				counterSmallSlider++;
				imagesSmall[counterSmallSlider+1].style.padding = "0px";
				imagesSmall[counterSmallSlider].style.padding = "2%";
				smallSlider.style.transform = 'translateX(' + (-33.33 * counterSmallSlider) + '%)';
			}
	},5000)

	
}