document.addEventListener('DOMContentLoaded', function () {

    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const mobileMenu = document.getElementById('mobileMenu');
    const overlay = document.getElementById('overlay');

    // Verificação de segurança (IMPORTANTE)
    if (!openMenu || !closeMenu || !mobileMenu || !overlay) {
        return;
    }

    openMenu.addEventListener('click', () => {
        mobileMenu.classList.add('active');
        overlay.classList.add('active');
    });

    closeMenu.addEventListener('click', fecharMenu);
    overlay.addEventListener('click', fecharMenu);

    function fecharMenu() {
        mobileMenu.classList.remove('active');
        overlay.classList.remove('active');
    }

            
});