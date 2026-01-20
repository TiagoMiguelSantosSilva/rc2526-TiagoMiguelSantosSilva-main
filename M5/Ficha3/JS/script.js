function Calcular() {
    let txtvalor1 = document.getElementById("txtvalor1"); // Valor colocado na textbox 1
    let txtvalor2 = document.getElementById("txtvalor2"); // Valor colocado na textbox 2
    let txttotal = document.getElementById("txttotal"); // Valor total a calcular para colocar na textbox 3

    // Calcular a soma - propriedade 'value' para os valores das textboxes
    txttotal.value = parseFloat(txtvalor1.value) + parseFloat(txtvalor2.value);
}

function Adicionar() {
    let lista1 = document.getElementById("lista1"); // Lista das disciplinas
    let lista2 = document.getElementById("lista2"); // Lista das disciplinas selecionadas
    let indice = lista1.selectedIndex; // Índice selecionado da lista 1
    let opcao = lista1.options[indice]; // Opção selecionada

    lista2.add(opcao); // Adicionar a opção selecionada à lista 2
    lista2.selectedIndex = -1; // Nenhum item fica selecionado
}

function Remover() {
    let lista1 = document.getElementById("lista1"); // Lista das disciplinas
    let lista2 = document.getElementById("lista2"); // Lista das disciplinas selecionadas
    let indice = lista2.selectedIndex; // Índice selecionado da lista 2
    let opcao = lista2.options[indice]; // Opção selecionada

    lista1.add(opcao); // Adicionar a opção selecionada à lista 1
    lista1.selectedIndex = -1; // Nenhum item fica selecionado
}

function MudaImagem() {
    let smile = document.getElementById("smile"); // Imagem
    smile.src = "Images/smile2.png"; // Muda o source da imagem
}

function MudaImagem2() {
    let smile = document.getElementById("smile"); // Imagem
    smile.src = "Images/smile1.png"; // Muda o source da imagem
}

function Negrito() {
    let palavras = document.getElementsByClassName("normal"); // Palavrar com a classe 'normal'

    for (let i = 0; i < palavras.length; i++) {
        palavras[i].classList.toggle("negrito"); // Troca a classe de 'normal' para 'negrito'
    }
}

function AddIng() {
    let item = document.getElementById("item"); // Textbox
    let listaIng = document.getElementById("listaIng"); // Lista de ingredientes
    let li = document.createElement("li"); // Criar uma tag <li></li>
    let img = document.createElement("img"); // Criar uma tag <img></img>

    li.innerHTML = item.value;
    listaIng.appendChild(li); // Adiciona o item à lista

    li.appendChild(img); // Adicionar a imagem à lista
    img.src = "Images/lixo.png"; // Imagem do lixo
    img.onclick = function () { li.remove(); };
}

function Mensagem() {
    let inputNome = document.getElementById("inputNome"); // Textbox do nome
    let inputMorada = document.getElementById("inputMorada"); // Textbox da morada
    let gridRadios = document.getElementsByName("gridRadios"); // Grid radio do género
    let selectPais = document.getElementById("selectPais"); // Select do país
    let indice = selectPais.selectedIndex; // Índice selecionado do país
    let opcao = selectPais.options[indice]; // Opção selecionada do país
    let hobbies = document.getElementsByName("hobbies"); // Hobbies

    let genero = "Masculino"; // Género por defeito

    if (gridRadios[1].checked) {
        genero = "Feminino";
    }

    let strHobbies = "";
    hobbies.forEach(hobbie => {
        if (hobbie.checked) {
            strHobbies += hobbie.value + " ";
        }
    });

    let mensagem = document.getElementById("mensagem"); // Div da mensagem

    mensagem.innerHTML = "Nome: " + inputNome.value + " Morada: " + inputMorada.value + " Género: " + genero + " País: " + opcao.text + " Hobbies: " + strHobbies;
}