
</main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script>
        let thinumber_Icon = document.querySelector('.thinumber_Icon');
        let sidebar = document.querySelector('.sidebar');
        let mainContent = document.querySelector('#main-content');
        const overlay = document.querySelector(".side-overlay");

        thinumber_Icon.addEventListener('click', function() {
            sidebar.classList.toggle('active');
            overlay.classList.add("show");
            mainContent.classList.toggle('dashboard-main-wrapper');
        });

        document.addEventListener("DOMContentLoaded", () => {
            const sidebar = document.querySelector(".sidebar");


            document.querySelectorAll(".side-overlay, .sidebar-close-btn").forEach((e) => {
                e.addEventListener("click", () => {
                    overlay.classList.remove("show");
                    if (sidebar) {
                        sidebar.classList.remove("active");
                    }
                });
            });

        });
    </script>

    <script>
        let dropdownLinks = document.querySelectorAll('.has-dropdown > .sidebar-menu__link');

        dropdownLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                let parent = this.parentElement;
                parent.classList.toggle('active');
            });
        });
    </script>

</body>
</html>
