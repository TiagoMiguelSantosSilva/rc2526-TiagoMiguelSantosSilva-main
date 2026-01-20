function calcularCusto() {
    // Obter elementos do DOM
    let nDias = document.getElementById("nDias"); // Input do número de dias
    let marca = document.getElementById("marca"); // Select da marca
    let segmento = document.getElementsByName("segmento"); // Radio do segmento
    let extras = document.getElementsByName("extras"); // Checkboxes dos extras
    let resultado = document.getElementById("resultado"); // Input da textbox do resultado
    let opcoes = document.getElementById("opcoes"); // Label das opções selecionadas

    // Obter a marca selecionada
    let indice = marca.selectedIndex; // Índice da marca selecionada
    let opcao = marca[indice]; // Opção da marca selecionada

    // Determinar o segmento selecionado e o preço base
    let precoSegmento = 0; // Preço base do segmento
    let segmentoSelecionado = "Utilitário/Sedan";

    if (segmento[1].checked) {
        segmentoSelecionado = "Carrinha/Combi";
        precoSegmento = 5;
    } else if (segmento[2].checked) {
        segmentoSelecionado = "SUV/Monovolume";
        precoSegmento = 10;
    }

    // Determinar os extras selecionados
    let extrasSelecionados = "";
    let nExtras = 0; // Número de extras selecionados

    extras.forEach((extra, index) => {
        if (extra.checked) {
            extrasSelecionados += extra.value;
            if (index < extras.length - 1) {
                extrasSelecionados += ", ";
            }
            nExtras++;
        }
    });

    // Calcular o custo total
    let custoTotal = (25 + precoSegmento) * parseInt(nDias.value) + (nExtras * 15);

    // Atualizar o resultado e as opções selecionadas
    resultado.value = custoTotal + "€"; // Mostrar o custo total na textbox do resultado
    opcoes.innerHTML = `
        <br>Marca: ${opcao.text}
        <br>Segmento: ${segmentoSelecionado}
        <br>Extras: ${extrasSelecionados}
    `; // Mostrar as opções selecionadas
}