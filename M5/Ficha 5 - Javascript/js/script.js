function capitalizarPalavras() {
    let txtString = document.getElementById('txtString');
    let frase = txtString.value;
    let palavras = frase.split(" ");
    let txtStringMod = document.getElementById('txtStringMod');

    for (let i = 0; i < palavras.length; i++) {
        palavras[i] = palavras[i].charAt(0).toUpperCase() + palavras[i].slice(1);
    }

    txtStringMod.value = palavras.join(" ");
}

function ordenarCaracteres() {
    let txtString = document.getElementById('txtString');
    let txtStringMod = document.getElementById('txtStringMod');
    let frase = txtString.value;
    let palavras = frase.split("");
    palavras = palavras.sort();
    frase = palavras.join("");

    txtStringMod.value = frase;
}

function determinarIdade() {
    let txtDtNasc = document.getElementById('txtDtNasc');
    let txtIdade = document.getElementById('txtIdade');
    let dataNasc = new Date(txtDtNasc.value);
    let dataAtual = new Date();

    let idade = dataAtual.getFullYear() - dataNasc.getFullYear();

    if (dataAtual.getMonth() < dataNasc.getMonth()) {
        idade--;
    }
    else if (dataAtual.getMonth() == dataNasc.getMonth()) {
        if (dataAtual.getDate() < dataNasc.getDate()) {
            idade--;
        }
    }

    txtIdade.value = idade + " anos";
}

function determinarMes() {
    let data = new Date(prompt("Insira uma data: "));
    let nMes = data.getMonth();
    let txtMes = document.getElementById('txtMes');

    let meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    txtMes.value = meses[nMes];
}

function removerRepetidos() {
    let array = new Array(1, 23, 23, 34, 51, 34, 34, 51, 1, 2, 3, 4);
    let novoArray = new Array();
    let txtArray = document.getElementById('txtArray');
    let txtArrayMod = document.getElementById('txtArrayMod');

    array.forEach(valor => {
        if (!novoArray.includes(valor)) {
            novoArray.push(valor);
        }
    })

    txtArray.value = array.join(", ");
    txtArrayMod.value = novoArray.join(", ");
}

function modificarParagrafo() {
    let text = document.getElementById('text');

    text.style.fontFamily = "Arial, sans-serif";
    text.style.fontSize = "20px";
    text.style.color = "blue";
}

function validarLogin() {
    let txtLogin = document.getElementById("txtLogin");
    let txtPass = document.getElementById("txtPass");
    let login = txtLogin.value;
    let pass = txtPass.value;
    let lblValida = document.getElementById("lblValida");

    if (login == "admin" && pass == "1234") {
        lblValida.innerText = "Login bem sucedido!";
    }
    else {
        lblValida.innerText = "Login ou password incorretos.";
    }
}

function carregaConcelhos() {
    let selDistrito = document.getElementById("selDistrito");
    let selConcelho = document.getElementById("selConcelho");
    let concelhos = new Array();

    switch (selDistrito.value) {
        case "LB":
            concelhos = new Array("Oeiras", "Mafra", "Sintra");
            break;
        case "PT":
            concelhos = new Array("Maia", "Gaia", "Matosinhos");
            break;
        case "BG":
            concelhos = new Array("Vila Verde", "Guimarães", "Vizela");
            break;
    }

    selConcelho.innerHTML = "";
    selConcelho.disabled = false;
    concelhos.forEach(concelho => {
        let option = document.createElement("option");
        option.value = concelho;
        option.text = concelho;
        selConcelho.appendChild(option);
    });
}