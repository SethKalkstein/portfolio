// let currentDomain = document.domain;
const contactForm = document.getElementById("contact");
const submitButton = document.getElementById("submit");

submitButton.addEventListener('click', () => contactForm.setAttribute("action", "resources/formProc.php"));
