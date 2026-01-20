function toggle() { 
    let text = document.getElementById("texto"); 
    let btnToggle = document.getElementById("btnToggle");
    
    if (text.style.display == "none") {
        text.style.display = "block"
        btnToggle.innerHTML = "Esconder";
    } else {
        text.style.display = "none"
        btnToggle.innerHTML = "Mostrar"
    } 
}

function contador() {
    let numero = document.getElementById("contador");
    let count = parseInt(numero.innerHTML);

    count++;
    numero.innerHTML = count;
}

function mudaCor(cor) {
    let luz = document.getElementById("luz");
    luz.style.backgroundColor = cor;
}

function listaTarefas() {
    let input_tarefa = document.getElementById("inputTarefa");
    let lista = document.getElementById("lista");
    let li = document.createElement("li");
    li.classList.add("d-flex");
    let span = document.createElement("span");
    span.innerHTML = " " + input_tarefa.value;
    let checkbox = document.createElement("input");
    checkbox.type = 'checkbox';
    checkbox.classList.add("form-check-input");
    checkbox.classList.add("me-2");

    checkbox.onclick = function() {
        if (this.checked) {
            span.style.textDecoration = "line-through";
        } else {
            span.style.textDecoration = "none";
        }
    }

    li.appendChild(checkbox);
    li.appendChild(span);
    lista.appendChild(li);
    input_tarefa.value = "";
}

function converter() {
    let inputCelsius = document.getElementById("tempC");
    let resultado = document.getElementById("resultado");
    let Fahrenheit = (parseInt(inputCelsius.value) * 1.8) + 32;
    resultado.innerHTML = Math.round(Fahrenheit * 100) / 100 + " °F";
}

function verificar() {
    
}