
</main>
    <footer class="footer_Wrapper">
        <div class="footer-container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-sm-between gap-1 gap-sm-2">
                        <p class="m-0">Copyright &copy; 2026 <a href="javascript:void(0)">CSS Docs</a>. All Rights Reserved.</p>
                        <div class="d-flex align-items-center gap-3">
                            <a href="javascript:void(0)" class="text-gray-300 text-13 fw-normal">Contact</a>
                            <a href="javascript:void(0)" class="text-gray-300 text-13 fw-normal">Privacy Policy</a>
                            <a href="javascript:void(0)" class="text-gray-300 text-13 fw-normal">Donations</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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

<!-- <script>
        document.addEventListener("DOMContentLoaded", () => {
            const searchBtn = document.querySelector(".search-btn");
            const searchOverlay = document.querySelector(".search-overlay");
            const searchBar = document.querySelector(".search-bar");
            
            function isMobile() {
                return window.matchMedia("(max-width: 1199px)").matches;
            }

            searchBtn.addEventListener("click", (e) => {
                if (!isMobile()) return;

                e.preventDefault();
                searchOverlay.style.transform = "translateY(0)";
                searchBar.style.transform = "translateY(0)";
            });

            searchOverlay.addEventListener("click", () => {
                if (!isMobile()) return;

                searchOverlay.style.transform = "translateY(-100%)";
                searchBar.style.transform = "translateY(-100%)";
            });
        });
    </script> -->

    <script>
        document.querySelectorAll('a[href="#"]').forEach(link => {
            link.addEventListener("click", (e) => {
                e.preventDefault();
                window.location.href = "404.php";
            });
        });
    </script>

    <script src="search.js"></script>
</body>
</html>