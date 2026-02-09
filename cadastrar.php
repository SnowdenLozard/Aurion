<?php include("config.php"); ?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>AURION - CADASTRAR</title>

  <!-- Fontes Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/login.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  
</head>
<body>
  <form action="verificar.php" method="POST" id="form">
    <input type="hidden" name="recaptcha_token" id="recaptcha_token">

        <div class="showcase">
        <div class="glass">
          <div class="form-header">
            <div class="form-title">Bem-vindo, <span>Cadastra-se</span></div>
          </div>

          <div class="inputbox">
            <input class="input" name="username" type="text" placeholder="Nome completo" oninput="nameValidate()" required>
            <span class="span-required">Nome deve ter no minimo 5 caracteres</span>
          </div>

          <div class="inputbox">
            <input class="input" name="email" type="email" placeholder="Seu email" oninput="emailValidate()" required>
            <span class="span-required">Degite um email válido por favor</span>
          </div>

          <div class="inputbox">
            <input class="input" name="password" type="password" id="senha" placeholder="Senha" oninput="mainPasswordValidate()" required>
            <span class="span-required">Cria uma senha com no minimo 8 caracteres, números e caracteres especiais</span>
          </div>
          
          <div class="inputbox">
            <input class="input" name="passwordcon" id="senha1" placeholder="Confirmar sua senha" type="password" oninput="checkPassword()"  required>
            <span class="span-required">A senhas não são iguais</span>
          </div>

          <div class="inputbox">
            <input class="input" type="date" name="born" id="born" required>
          </div>

          <div class="inputbox">
            <input class="input" type="text" name="turma" id="turma" placeholder="Turma" required>
          </div>

          <div class="inputbox">
            <select class="input select" name="curso" id="curso" required>
              <option value="">Selecione seu curso</option>
              <option value="Informática">Informática</option>
              <option value="Informática e sistemas multimédia">Informática e sistemas multimédia</option>
              <option value="Eletronica">Eletronica</option>
            </select>
          </div>


          <div class="register-text">
            Já tenho uma conta.
            <a href="<?php echo INCLUDE_PATH; ?>login.php" class="create-account">Fazer Login</a>
        </div>
                    
          <button class="btn" type="submit">Cadastrar-se</button>

        </div> 
      </div>


  </form>

  <script src="https://www.google.com/recaptcha/api.js?render=6Le2QxcsAAAAACAXrBRh4RfYUTGPSI4eIDXGQVeo"></script>

        <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le2QxcsAAAAACAXrBRh4RfYUTGPSI4eIDXGQVeo', {action: 'cadastro'}).then(function(token) {
                // Envie o token para o backend
                document.getElementById('recaptcha_token').value = token;
            });
        });
        </script>

    <script src="<?php echo INCLUDE_PATH; ?>script/validate_cadas.js"></script>
  
</body>
</html>
