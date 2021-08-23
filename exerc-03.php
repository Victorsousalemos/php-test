<?php
    /*
        3 - Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. Depois informe qual número mais se repetiu e quantas vezes ele se repetiu.

        Exemplo:

        Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
        O número que mais se repete é o 2.
        Ele se repete 4 vezes.
    */

    function brincandoArray() {
        $arrayAleatorio = array(); // Criando váriavel do array aleatório

        for($i = 1; $i <= 20; $i++) {
            array_push($arrayAleatorio, rand(1, 10)); // Adicionando valores randômicos ao array aleatório
        }

        // Exibindo o array
        print_r($arrayAleatorio);

        $ocorrencias = array_count_values($arrayAleatorio); // Contando ocorrência de cada número no array

        // Criando variáveis de resposta
        $numero = 0;
        $qtdVezes = 0;

        // Utilizando o foreach com chave e valor para selecionar o número que repete mais e a quantidade de repetições
        foreach($ocorrencias as $chave => $valor) {
            if($qtdVezes < $valor) {
                $numero = $chave;
                $qtdVezes = $valor;
            }
        }

        return "<meta charset='utf-8' /> <br /> O numero que mais se repete é {$numero}. <br /> Ele se repete {$qtdVezes} vezes.";
    }

    echo brincandoArray();
