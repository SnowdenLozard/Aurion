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

  <fieldset role="main" aria-label="Liquid glass login card demo">

    <legend><b>AURION - LOGIN</b></legend>
    <div class="bg-shape g1" aria-hidden="true"></div>
    <div class="bg-shape g2" aria-hidden="true"></div>

      <div class="showcase">
        <div class="glass">
          <div class="form-header">
            <div class="form-title">Bem-vindo, <span>Faça Login</span></div>
            <div class="muted">Acesso seguro</div>
          </div>

          <div class="inputbox">
            <input class="input" type="EMAIL" placeholder="Degite seu email" oninput="emailValidate()" required>
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
          
          <input class="btn" type="submit" name="submit" id="submit">
        </div>

        <div class="register-text">
          Não tenho uma conta?
          <a href="<?php echo INCLUDE_PATH; ?>cadastrar.php" class="create-account">Criar Conta</a>
        </div>
      </div>

      <div class="right-panel">
        <div class="glass info-panel">
          <p class="info-text">
            Transforme sua visão em realidade. Com segurança inabalável e design excepcional, o futuro começa aqui com o <span>AURION</span>.
          </p>
        </div>

        <div class="bubbles" aria-hidden="true">
          <div class="bubble b1"></div>
          <div class="bubble b2"></div>
          <div class="bubble b3"></div>
        </div>
      </div>
  </fieldset>
  
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
