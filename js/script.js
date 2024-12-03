// script.js

document.addEventListener("DOMContentLoaded", () => {
    // Registration Form Validation
    const registrationForm = document.querySelector("form[action='php/register.php']");
    if (registrationForm) {
        registrationForm.addEventListener("submit", (e) => {
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm-password").value;

            if (password !== confirmPassword) {
                e.preventDefault();
                alert("Passwords do not match!");
            }
        });
    }

    // Login Form Validation
    const loginForm = document.querySelector("form[action='php/login.php']");
    if (loginForm) {
        loginForm.addEventListener("submit", (e) => {
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            if (!email || !password) {
                e.preventDefault();
                alert("Please fill in all fields!");
            }
        });
    }
});


document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll("nav ul li a");
    navLinks.forEach(link => {
        if (link.href === window.location.href) {
            link.style.fontWeight = "bold";
            link.style.textDecoration = "underline";
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const eventSection = document.querySelector(".intro");

    if (eventSection) {
        const events = [
            { name: "Corporate Meeting", date: "2024-12-10" },
            { name: "Birthday Party", date: "2024-12-15" },
            { name: "Wedding Ceremony", date: "2025-01-05" },
        ];

        const eventList = document.createElement("ul");
        events.forEach(event => {
            const listItem = document.createElement("li");
            listItem.textContent = `${event.name} - ${event.date}`;
            eventList.appendChild(listItem);
        });

        eventSection.appendChild(eventList);
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("modal");
    const closeModal = document.querySelector(".modal .close");

    if (modal) {
        modal.style.display = "flex"; // Show the modal
        closeModal.addEventListener("click", () => {
            modal.style.display = "none"; // Hide the modal
        });
    }
});
