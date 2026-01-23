document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.querySelector('.sidebar');
    const menuBtn = document.querySelector('.menu-btn');
    const dropdowns = document.querySelectorAll('.menu-item-dropdownc');

    // 1. Botón de hamburguesa: Funciona igual (abre/cierra manualmente)
    menuBtn.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
    });

    // 2. Lógica específica para los menús
    dropdowns.forEach(item => {
        const link = item.querySelector('.menu-link');
        
        link.addEventListener('click', (e) => {
            const isCollapsed = sidebar.classList.contains('collapsed');

            // SI EL SIDEBAR ESTÁ ACHICADO y hacemos clic en un desplegable:
            if (isCollapsed) {
                e.preventDefault(); // Evitamos que intente navegar
                sidebar.classList.remove('collapsed'); // Abrimos el sidebar
                item.classList.add('open'); // Abrimos el submenú inmediatamente
            } else {
                // SI EL SIDEBAR YA ESTÁ ABIERTO: Comportamiento de acordeón normal
                e.preventDefault();
                
                // Opcional: Cerrar otros que estén abiertos
                dropdowns.forEach(other => {
                    if (other !== item) other.classList.remove('open');
                });

                item.classList.toggle('open');
            }
        });
    });
});