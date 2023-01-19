addEventListener("DOMContentLoaded", () => {
    let tipo = document.querySelectorAll("td");
    tipo.forEach(element => {
        if (element.textContent === "libre") {
            element.style.backgroundColor = "green";
            element.style.borderColor = "white";
            element.textContent = "";
            element.style.width = "35px";
            element.style.height = "35px";

        } else {
            element.style.backgroundColor = "red";
            element.style.borderColor = "white";
            element.textContent = "";
            element.style.width = "35px";
            element.style.height = "35px";
        }
    });
});
