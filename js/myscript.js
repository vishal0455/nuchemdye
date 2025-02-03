document.addEventListener('DOMContentLoaded', () => {
    const dropdowns = document.querySelectorAll('.nav-item.dropdown');

    dropdowns.forEach(dropdown => {
        const link = dropdown.querySelector('.nav-link');

        link.addEventListener('click', function (e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                dropdown.classList.toggle('show');

                // Redirect if dropdown is already visible
                if (dropdown.classList.contains('show')) {
                    window.location.href = link.getAttribute('href');
                }
            }
        });
    });
});
