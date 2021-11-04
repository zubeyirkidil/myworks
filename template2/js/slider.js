// Slider
	
	var slider = document.querySelector('.slider');
	var images = document.querySelectorAll('.slider img');

	var prevBtn = document.querySelector('#prevBtn');
	var nextBtn = document.querySelector('#nextBtn');

	var size = images[0].clientWidth;

	var counter = 0;

	//images.length: 3;

	nextBtn.addEventListener("click", ()=>{

			slider.style.transition='0.4s';

			if(counter == images.length-1){

				counter = 0;
				slider.style.transform = 'translateX(' + (-100 * counter) + '%)';
			}else{

				counter++;
				slider.style.transform = 'translateX(' + (-100 * counter) + '%)';
			}
	});



	prevBtn.addEventListener("click", ()=>{

		slider.style.transition='0.4s';

		if(counter == 0){

				counter = images.length-1;
				slider.style.transform = 'translateX(' + (-100 * counter) + '%)';
			}else{

				counter--;
				slider.style.transform = 'translateX(' + (-100 * counter) + '%)';
			}
	});

	setInterval(()=>{

			slider.style.transition='1s ease';

			if(counter == images.length-1){

				counter = 0;
				slider.style.transform = 'translateX(' + (-100 * counter) + '%)';
			}else{

				counter++;
				slider.style.transform = 'translateX(' + (-100 * counter) + '%)';
			}
	},6000)


