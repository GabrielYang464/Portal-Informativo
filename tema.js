document.addEventListener("DOMContentLoaded", () => {
    const botaoTema = document.getElementById("btn-tema");
    const body = document.body;

    // Verifica se o usuário já escolheu o tema claro anteriormente
    const temaSalvo = localStorage.getItem("tema");

    if (temaSalvo === "claro") {
        body.classList.add("tema-claro");
        botaoTema.textContent = "⏾ Escuro";
    } else {
        botaoTema.textContent = "☀︎ Claro";
    }

    // Alterna o tema ao clicar no botão e salva no navegador
    botaoTema.addEventListener("click", () => {
        body.classList.toggle("tema-claro");

        if (body.classList.contains("tema-claro")) {
            localStorage.setItem("tema", "claro");
            botaoTema.textContent = "⏾ Escuro";
        } else {
            localStorage.setItem("tema", "escuro");
            botaoTema.textContent = "☀︎ Claro";
        }
    });
});