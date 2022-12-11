const cpfInput = document.getElementById("cpf");
cpfInput.addEventListener("blur", () => {
    cpfInput.value = cpfFormat(cpfInput.value);
});

const telInput = document.getElementById("tel");
telInput.addEventListener("blur", () => {
    telInput.value = telFormat(telInput.value);
});

function cpfFormat(cpf) {
    return cpf.replace(/[^\d]/g, "").replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
}

function telFormat(tel) {
    return tel.replace(/[^\d]/g, "").replace(/(\d{2})(\d{5})(\d{4})/, "($1) $2-$3");
}