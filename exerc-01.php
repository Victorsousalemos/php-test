<?php
    /*
        1 - Função SeculoAno($ano)
        Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

        Exemplos para teste:

        Ano 1905 = século 20
        Ano 1700 = século 17
    */

    function SeculoAno($ano) {
        return ceil($ano / 100); // Utilize o ceil porque a função nativa do PHP para arredondar o valor para cima.
    }

    echo SeculoAno(100);
