<?php
    /*
        4 - Função SequenciaCrescente($array)
        Receba como parametro um array de números inteiros e responda TRUE or FALSE se é possível obter uma sequência crescente removendo apenas um elemento do array.

        Obs.:
        - É importante realizar todos os testes abaixo para garantir o funcionamento correto.
        - Sequências com apenas um elemento são consideradas como TRUE.
    */

    function SequenciaCrescente($array) {
        $ordemCrescente = true;

        // Verificando se o array está em ordem crescente
        for($i = 1; $i < count($array); $i++) {
            if($array[$i - 1] > $array[$i]) {
                $ordemCrescente = false;
            }
        }
    }

    $numeros = array(1, 2, 3);
    echo SequenciaCrescente($numeros);
