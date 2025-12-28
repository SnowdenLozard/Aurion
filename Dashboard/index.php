<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Aurion</title>
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
                    <li><a href="<?php echo INCLUDE_PATH; ?>?url=depoimentos"><i data-lucide="megaphone"></i></a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>?url=sobre"><i data-lucide="info"></i></a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>?url=contato"><i data-lucide="mail"></i></a></li>
                    <button class="btn3" onclick="redict()">Cadastrar-se</button>
                </ul>
            </div>
             
        </nav>

        <!-- Botão Hambúrguer -->
        <button class="menu-toggle" id="openMenu">
            <i data-lucide="menu"></i>
        </button>

        <!-- Menu Mobile -->
         <div class="clear"></div>
    </header>

            <nav class="mobile-menu direita" id="mobileMenu">
            <button class="close-menu" id="closeMenu">
                <i data-lucide="x"></i>
            </button>

            <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>?url=home"><i data-lucide="home"></i></a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>?url=depoimentos"><i data-lucide="megaphone"></i></a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>?url=sobre"><i data-lucide="info"></i></a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>?url=contato"><i data-lucide="mail"></i></a></li>
                </ul>
        </nav>

        <div class="overlay" id="overlay"></div>
</body>
</html>