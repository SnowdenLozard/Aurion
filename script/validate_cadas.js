		const form   = document.getElementById('form');
		const campos = document.querySelectorAll('.input');
		const spans  = document.querySelectorAll('.span-required');
		const checkbox = document.querySelector('input[name="remember"]');
		const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;



		form.addEventListener("submit", function (e) {
		if (!checkbox.checked) {
			e.preventDefault();
			alert("Você precisa marcar o checkbox.");
		}
		});


        function mantcert(index){
            campos[index].style.border = '';
            spans[index].style.display = 'none';
        }

		function setError(index){
			campos[index].style.border = '2px solid #e63636';
			spans[index].style.display = 'block';
		}

		function removeError(index){
			campos[index].style.border = '';
			spans[index].style.display = 'none';
		}

		function nameValidate(){
			if(campos[0].value.length < 5)
			{
				setError(0);
                if(campos[0].value.length == 0){
                    mantcert(0);
                }
			}
			else
			{
				removeError(0);
			}
		}

		function emailValidate(){
			if(!emailRegex.test(campos[1].value))
			{
				setError(1);
                if(campos[1].value.length == 0){
                    mantcert(1);
                }
			}
			else
			{
				removeError(1);
			}
		}

		function mainPasswordValidate(){
			if(campos[2].value.length < 8)
			{
				setError(2);
                if(campos[2].value.length == 0){
                    mantcert(2);
                }
			}
			else
			{
				removeError(2);
				checkPassword();
			}
		}

		function checkPassword(){
			if(campos[2].value == campos[3].value && campos[3].value.length >= 8)
			{
				removeError(3);
			}
			else
			{
				setError(3);
                if(campos[2].value == campos[3].value && campos[3].value.length == 0){
                    mantcert(3);
                }
			}
		}
