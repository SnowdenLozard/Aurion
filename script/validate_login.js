
		const form   = document.getElementById('form');
		const campos = document.querySelectorAll('.input');
		const spans  = document.querySelectorAll('.span-required');
		const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

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

		function emailValidate(){
			if(!emailRegex.test(campos[0].value))
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

		function mainPasswordValidate(){
			if(campos[1].value.length < 8){
				setError(1);
                if(campos[1].value.length == 0){
                    mantcert(1);
                }
			}else{
				removeError(1);
			}
		}