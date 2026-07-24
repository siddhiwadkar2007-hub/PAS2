// ======================================
// Student Dashboard Theme Button
// ======================================

const themeButton = document.getElementById("themeToggle");

if (themeButton) {

    // Load saved theme
    if (localStorage.getItem("theme") === "dark") {

        document.body.classList.remove("light-theme");
        document.body.classList.add("dark-theme");

        themeButton.innerHTML = '<i class="bi bi-sun-fill"></i>';

    } else {

        document.body.classList.remove("dark-theme");
        document.body.classList.add("light-theme");

        themeButton.innerHTML = '<i class="bi bi-moon-fill"></i>';

    }

    // Change theme on click
    themeButton.addEventListener("click", function () {

        if (document.body.classList.contains("dark-theme")) {

            document.body.classList.remove("dark-theme");
            document.body.classList.add("light-theme");

            localStorage.setItem("theme", "light");

            themeButton.innerHTML = '<i class="bi bi-moon-fill"></i>';

        } else {

            document.body.classList.remove("light-theme");
            document.body.classList.add("dark-theme");

            localStorage.setItem("theme", "dark");

            themeButton.innerHTML = '<i class="bi bi-sun-fill"></i>';

        }

    });

}