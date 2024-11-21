
// Effet d'écriture dans les titres
const titles = document.querySelectorAll(".container h1");

titles.forEach((title) => {
    const text = title.textContent;
    title.textContent = "";
    let i = 0;
    const typing = setInterval(() => {
        if (i < text.length) {
            title.textContent += text.charAt(i);
            i++;
        } else {
            clearInterval(typing);
        }
    }, 100); // Ajuste la vitesse d'écriture
});
