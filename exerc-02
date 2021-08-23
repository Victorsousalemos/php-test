<?php
    /*
        2 - Função PrimoInferior($num)
        Crie uma função que receba como parâmetro um número inteiro e retorne o maior número primo inferior ao número recebido como parâmetro. Se o argumento for negativo, a função deverá retornar o valor zero.

        Exemplo para teste:

        Numero 10 = 7
        Número 30 = 29
    */

    function PrimoInferior($num) {
        $maiorPrimoEncontrado = 0; // Variável criada para guardar o maior valor primo encontrado abaixo do número digitado.

        for($i = 2; $i < $num; $i++) {
            $divisoresPrimo = EncontrarPrimo($i);

            if($divisoresPrimo == 0) {
                if($maiorPrimoEncontrado < $i)
                    $maiorPrimoEncontrado = $i;
            }
       }

       if($maiorPrimoEncontrado == 0) {
           return 0;
       }

       return $maiorPrimoEncontrado;
    }

    function EncontrarPrimo($num) {
        $contagemDivisao = 0; // Variável criada para contar quantas vezes o número não pode ser divido. Caso seja maior que um, o número é primo.

        for($i = 2; $i < $num - 1; $i++) {
            if($num % $i == 0)
                $contagemDivisao++;
        }

        // Caso contagem Divisao seja zero, este número não é primo.
        return $contagemDivisao;
    }

    echo PrimoInferior(10);
