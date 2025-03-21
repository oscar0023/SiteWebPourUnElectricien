document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch("../backend/contact.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("responseMessage").innerText = data;
        document.getElementById("contactForm").reset();
    })
    .catch(error => console.error("Erreur :", error));
});
//navbar
document.querySelector(".burger").addEventListener("click", () => {
    document.querySelector(".nav-links").classList.toggle("nav-active");
});

