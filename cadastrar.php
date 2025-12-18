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

  <fieldset role="main" aria-label="Liquid glass login card demo">

    <legend><b>AURION - CADASTRAR</b></legend>
    <div class="bg-shape g1" aria-hidden="true"></div>
    <div class="bg-shape g2" aria-hidden="true"></div>

      <div class="showcase">
        <div class="glass">
          <div class="form-header">
            <div class="form-title">Bem-vindo, <span>Cadastra-se</span></div>
            <div class="muted">Acesso seguro</div>
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

          <div class="row checkbox-row">
            <input class="inputu" type="date" name="born" id="born">
            <input  class="inputu" type="text" name="turma" id="turma" placeholder="turma">
          </div>

          <div class="esc_cur">
            <select name="curso" id="curso">
              <option value="">Selecione seu curso</option>
              <option value="Informática">Informática</option>
              <option value="Informática e sistemas multimédia">Informática e sistemas multimédia</option>
              <option value="Eletronica">Eletronica</option>
            </select>
          </div>

                    
          <input class="btn" type="submit" name="submit" id="submit">
        </div> 

        <div class="register-text">
          Já tenho uma conta.
          <a href="<?php echo INCLUDE_PATH; ?>login.php" class="create-account">Fazer Login</a>
        </div>
      </div>

      <div class="right-panel">
        <div class="glass info-panel">
          <p class="info-text">
            Inteligência que conecta mentes brilhantes <span>AURION</span>.
          </p>

          <!-- <div class="sign_goo_git">
            <input class="goo" type="button" value="Google">
            <input class="git" type="button" value="Git Hub">
          </div> -->
        </div>

        <div id="error-box" class="error-box"></div>


        
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
            grecaptcha.execute('6Le2QxcsAAAAACAXrBRh4RfYUTGPSI4eIDXGQVeo', {action: 'cadastro'}).then(function(token) {
                // Envie o token para o backend
                document.getElementById('recaptcha_token').value = token;
            });
        });
        </script>

    <script src="<?php echo INCLUDE_PATH; ?>script/validate_cadas.js"></script>
  
</body>
</html>
