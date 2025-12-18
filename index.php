<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Aprender, Ensinar, Melhorar, Aprovar, Itel">
    <meta name="description" content="Site pertence ao projecto Aurion core um projecto desenvolvido pelos alunos do ITEL 
    pertencente ao curso de Informática da 10 classe, supervisionado pelos respectivos professor: Nastegio, Euclides Costa, 
    Sansão Queta Jungo, Madalena Sebastião. Com o intuito de melhorar o desempenho academico de vários alunos que pertencem 
    a comunidade estudantil do Itel, fornecendo aulas, provas resolvidas dos anos anteriores.">
    <link rel="preload" href="<?php echo INCLUDE_PATH; ?>estilo/aurion.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="<?php echo INCLUDE_PATH; ?>estilo/contato.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="<?php echo INCLUDE_PATH; ?>estilo/estilos_gerais.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="<?php echo INCLUDE_PATH; ?>estilo/header.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="<?php echo INCLUDE_PATH; ?>estilo/equipa.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="<?php echo INCLUDE_PATH; ?>estilo/footer.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="<?php echo INCLUDE_PATH; ?>estilo/depoimentos.css" as="style" onload="this.rel='stylesheet'">
    <noscript>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/aurion.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/contato.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/estilos_gerais.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/header.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/equipa.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/footer.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/depoimentos.css">
    </noscript>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="imagem/Aurion8.jpg" sizes="32x32" type="image/x-icon">
    <script src="https://unpkg.com/lucide@latest" ></script>
    <title>AURION</title>
</head>

<body>

    <header>
        <div class="esquerda">
                <a href="<?php echo INCLUDE_PATH; ?>?url=home"><img loading="lazy"  src="<?php echo INCLUDE_PATH; ?>imagem/Aurion8.jpg" alt="Img-aurion" class="img_au left"></a> 
        </div>

        
        <nav class="desktop">
            <div class="direita right">
               <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>?url=home"><i data-lucide="home"></i></a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>?url=depoimentos"><i data-lucide="message"></i></a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>?url=sobre"><i data-lucide="info"></i></a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>?url=contato"><i data-lucide="mail"></i></a></li>
                </ul>

            
            </div>
             
        </nav>

        <nav class="mobile" id="mobile">
            <div class="direita right">
               <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>?url=home"><i data-lucide="home"></i></a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>?url=depoimentos"><i data-lucide="message"></i></a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>?url=sobre"><i data-lucide="info"></i></a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>?url=contato"><i data-lucide="mail"></i></a></li>
                </ul>
            </div>
             
        </nav>
        <div class="overlay" id="overlay"></div>
         <div class="clear"></div>
    </header>

    <?php 
    // Captura da URL
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    // Permite apenas letras, números, hífen e underscore
    $url = preg_replace('/[^a-zA-Z0-9_-]/', '', $url);

    // Caminho da página
    $pagina = 'paginas/' . $url . '.php';

    // Se a página existe, inclui
    if (file_exists($pagina)) {
        include($pagina);
    } else {
        // Se for depoimentos, carrega a home
        if($url === 'depoimentos'){
            include('paginas/home.php');
        } else {
            // Para outras URLs, inclui 404
            http_response_code(404);
            include('paginas/404.php');
        }
    }
    ?>



    <footer>
        <div class="footer-top">
            <!-- Newsletter -->
            <div class="newsletter">
                <h3>Assine nossa Newsletter</h3>
                <p>Receba atualizações, novidades e conteúdos exclusivos.</p>
                <form action="#" method="POST" class="newsletter-form">
                    <input type="email" name="email" placeholder="Seu email" required>
                    <button type="submit">Assinar</button>
                </form>
            </div>

            <!-- Redes Sociais -->
            <div class="redes_sociais">
                <h3>Siga-nos</h3>
                <div class="social-icons">
                    <a href="https://wa.me/seunumerodetelefone" target="_blank"><i data-lucide="message-circle"></i></a>
                    <a href="https://www.facebook.com/seupage" target="_blank"><i data-lucide="facebook"></i></a>
                    <a href="https://www.instagram.com/seuperfil" target="_blank"><i data-lucide="instagram"></i></a>
                    <a href="https://twitter.com/seuperfil" target="_blank"><i data-lucide="x"></i></a>
                    <a href="https://www.linkedin.com/in/seuperfil" target="_blank"><i data-lucide="linkedin"></i></a>
                    <a href="https://www.threads.net/seuperfil" target="_blank"><i data-lucide="at-sign"></i></a>
                </div>
            </div>

            <!-- Parceiros -->
            <div class="parceiros">
                <h3>Parceiros</h3>
                <div class="logos-parceiros">
                    <img src="<?php echo INCLUDE_PATH; ?>imagem/A/oficial.png" alt="Instituto de Telecomunicações">
                    <img src="<?php echo INCLUDE_PATH; ?>imagem/curso.png" alt="Curso em Video">
                    <img src="<?php echo INCLUDE_PATH; ?>imagem/A/oficial.png" alt="Parceiro 3">
                </div>
            </div>
        </div>

        <div class="divi"></div>

        <!-- Direitos reservados -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Aurion - Todos os direitos reservados</p>
            <p>Desenvolvido por <span>Equipe Aurion ITEL</span></p>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>