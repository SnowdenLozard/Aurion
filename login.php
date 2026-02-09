<?php include("config.php"); ?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>AURION - LOGIN</title>

  <!-- Fontes Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/login.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  
</head>
<body>
  <form action="verificar.php" method="post" id="form">

  <input type="hidden" name="recaptcha_token" id="recaptcha_token">
  
        <div class="glass">
          <div class="form-header">
            <div class="form-title">Bem-vindo, <span>Faça Login</span></div>
          </div>

          <div class="inputbox">
            <input class="input" type="email" name="email" placeholder="Email" oninput="emailValidate()" required>

            <span class="span-required">Degite um email válido por favor</span>
          </div>

          <div class="inputbox">
            <input class="input" id="senha" placeholder="Senha" type="password" oninput="mainPasswordValidate()" autocomplete="current-password" required>
            <span class="span-required">Cria uma senha com no minimo 8 caracteres, números e caracteres especiais</span>
          </div>
          
          
          <div class="row checkbox-row">
            <label class="remember">
              <input type="checkbox"> Lembrar-me
            </label>
            <a href="<?php echo INCLUDE_PATH; ?>?url=forgetpass" class="forgot-link">Esqueci a palavra-passe</a>
          </div>
          <div class="register-text">
            Não tenho uma conta?
            <a href="<?php echo INCLUDE_PATH; ?>cadastrar.php" class="create-account">Criar Conta</a>
          </div>
          <button class="btn" type="submit">Entrar</button>

        </div>
  </form>

  <script src="https://www.google.com/recaptcha/api.js?render=6Le2QxcsAAAAACAXrBRh4RfYUTGPSI4eIDXGQVeo"></script>

     <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le2QxcsAAAAACAXrBRh4RfYUTGPSI4eIDXGQVeo', {action: 'login'}).then(function(token) {
                // Envie o token para o backend
                document.getElementById('recaptcha_token').value = token;
            });
        });
      </script>

    <script src="<?php echo INCLUDE_PATH; ?>script/validate_login.js"></script>
    
</body>
</html>
