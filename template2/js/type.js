// Type

	const kelimeler = ['HELLO THERE.    ','I AM DESIGNER.  ','ENJOY MY DESIGNS :)       '];

	var a = document.querySelector('#type');

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

		a.innerHTML = letter;

		index++;

		if(letter.length === currentText.length){

			count++;
			index = 0;


		}

		setTimeout(type, 400);

	})();