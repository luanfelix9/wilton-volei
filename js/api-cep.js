const addressForm = document.querySelector("#addPessoa");
const cepInput = document.querySelector("#RP-cep");
const paisInput = document.querySelector("#RP-pais");
const ufInput = document.querySelector("#RP-uf");
const cddInput = document.querySelector("#RP-cdd");
const logInput = document.querySelector("#RP-log");
const bairroInput = document.querySelector("#RP-bairro");
const formInputs = document.querySelectorAll("[data-input]");

// VADILAÇÃO DO INPUT CEP 
cepInput.addEventListener("keypress", (e) => {
    const onlyNumbers = /[0-9]/;
    const key = String.fromCharCode(e.keyCode);

    if(!onlyNumbers.test(key)) {
        e.preventDefault();
        return;
    }
});

// PEGANDO CEP DIGITADO
cddInput.addEventListener("keyup", (e) => {
    const inputValue = e.target.value;

    if(inputValue.length === 8) {
        getAddress(inputValue);
    }
});

const getAddress = async (cep) => {
    cepInput.blur();
    const apiUrl = `https://viacep.com.br/ws/${cep}/json/`;
    const response = await fetch(apiUrl);
    const data = await response.json();

    console.log(data);
};