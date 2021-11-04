		
function typeNumbers(){

	const numbers = [87,25,5];

	var z = document.querySelectorAll('.metrics-item');

	var currentNumber1 = 0;
	var currentNumber2 = 0;
	var currentNumber3 = 0;
	var sayi = 0;
	var sayi2 = 0;
	var sayi3 = 0;

	(function typeNumber1(){


		if(sayi==numbers[0]){

			clearTimeout(inc);
		}else{

			sayi = currentNumber1++;
			z[0].innerHTML = sayi;


		setTimeout(typeNumber1, 100);

		}

	})();

	(function typeNumber2(){


		if(sayi2==numbers[1]){

			clearTimeout(typeNumber2);
		}else{

			sayi2 = currentNumber2++;
			z[1].innerHTML = sayi2;


		setTimeout(typeNumber2, 100);

		}

	})();

	(function typeNumber3(){


		if(sayi3==numbers[2]){

			clearTimeout(typeNumber3);
		}else{

			sayi3 = currentNumber3++;
			z[2].innerHTML = sayi3;


		setTimeout(typeNumber3, 100);

		}

	})();


	}

