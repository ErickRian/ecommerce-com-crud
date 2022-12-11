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

const cepInput = document.getElementById("cep");

const estado = document.getElementById("uf");
const cidade = document.getElementById("cidade");
const bairro = document.getElementById("bairro");
const rua = document.getElementById("rua");

cepInput.addEventListener("blur", async () => {
    const req = await fetch(`https://viacep.com.br/ws/${cep.value}/json/`);
    const res = await req.json();

    estado.value = res.uf;
    cidade.value = res.localidade;
    bairro.value = res.bairro;
    rua.value = res.logradouro;
});