<?php
system('clear');

maiorValor();
somarValores();
valoresIntercalados();
arrayPares();
embaralharArray();
arrayChave();
ordenarArray();
removaValorDuplicado();
revertaArray();
achatarArray();

function maiorValor() {
    $array_num = [1, 5, 7, 8, 1, 20];

    echo "1. Escreva uma função que receba um array de valores numéricos e retorne o valor mais alto.\n";
    echo "* Entrada: [1, 5, 7, 8, 1, 20]\n";
    usort($array_num, 'ordernaArrayDesc');    
    echo "* Saída: ".$array_num[0]."\n";
}

function somarValores() {
    $array_soma = [1, 5, 7, 1];
    $soma_total = 0;

    echo "\n\n2. Escreva uma função que receba um array de valores numéricos e retorne a soma dos valores.\n";
    echo "* Entrada: [1, 5, 7, 1]\n";    

    foreach ($array_soma as $valor) {
        $soma_total += $valor;
    }
    echo "* Saída: ".$soma_total."\n";
}

function valoresIntercalados() {
    $array_inter1 = [1, 2, 3, 4];
    $array_inter2 = ['a', 'b', 'c', 'd'];        

    echo "\n\n3. Escreva uma função que receba dois arrays e retorne um array de valores intercalados.\n";
    echo "* Entrada: [1, 2, 3, 4], ['a', 'b', 'c', 'd']\n";
    echo "* Saída: [";
    
    foreach ($array_inter1 as $posicao => $valor) {   
        $array_merge[] = $valor;
        $array_merge[] = $array_inter2[$posicao];
    }

    foreach ($array_merge as $pos => $valor) {        
        echo $valor;     

        if ($pos < count($array_merge) -1) {
            echo ", ";
        }
    }
    echo "]\n";
}

function arrayPares() {
    $array1 = [1, 2, 3 ,4];
    $array2 = ['a', 'b', 'c', 'd'];        

    echo "\n\n4. Escreva uma função como a anterior, mas que retorne um array de pares.\n";
    echo "* Entrada: [1, 2, 3, 4], ['a', 'b', 'c', 'd']\n";
    echo "* Saída: [";

    foreach ($array1 as $posicao => $valor_array1) {   
        $array_pares[] = [
            $valor_array1, 
            $array2[$posicao]
        ];        
    }

    foreach ($array_pares as $pos => $valores) {          
        if ($pos > 0 && $pos < count($array_pares)) {
            echo ", ";
        }
        echo "[";
                        
        foreach ($valores as $pos_par => $valores_pares) {
            echo $valores_pares;            

            if ($pos_par == 0) {
                echo ", ";
            }
        };
        echo "]";
    }
    echo "]\n";
}

function embaralharArray() {
    $array_emb = [1, 2, 3, 4, 5];
    
    echo "\n\n5. Escreva uma função que embaralhe um array.\n";
    echo "* Entrada: [1, 2, 3, 4, 5]\n";
    echo "* Saída: [";
    
    usort($array_emb, 'shuffleArray');

    foreach ($array_emb as $key => $valor) {
        echo $valor;

        if ($key < count($array_emb) -1) {
            echo ", ";
        }
    }   
    echo "]\n"; 
}

function arrayChave() {
    $array_asso = [
        'nome' => "Jacó", 
        'idade' => 74, 
        'profissão' => "ancião"
    ];
    $array_string = ['nome', 'profissão'];

    echo "\n\n6. Escreva uma função que receba um array associativo e um array de strings,\n";
    echo "e retorne uma versão do primeiro array somente com as chaves do segundo.\n";
    echo "* Entrada: ['nome' => 'Jacó', 'idade' => 74, 'profissão' => 'ancião'], ['nome', 'profissão']\n";
    echo "* Saída: [";

    foreach ($array_string as $key => $valor) { 
        echo "'".$valor."' => ";       
        echo "'".$array_asso[$valor]."'";

        if ($key < count($array_string) -1) {
            echo ", ";
        }        
    }
    echo "]\n";     
}

function ordenarArray() {
    $array_ord = [1, 5, 2, 4, 3];

    echo "\n\n7. Escreva uma função que ordene um array.\n";
    echo "* Entrada: [1, 5, 2, 4, 3]\n";
    echo "* Saída: [";

    usort($array_ord, 'ordernaArrayAsc');

    foreach ($array_ord as $key => $valor) {
        echo $valor;

        if ($key < count($array_ord) -1) {
            echo ", ";
        } 
    }
    echo "]\n";      
}

function removaValorDuplicado() {
    $array_duplic = [1, 2, 3, 3, 4, 5, 4];        
    $old_valor = null;
    $old_key = null;

    echo "\n\n8. Escreva uma função que remova valores duplicados de um array.\n";
    echo "* Entrada: [1, 2, 3, 3, 4, 5, 4]\n";
    echo "* Saída: [";

    usort($array_duplic, 'ordernaArrayAsc');
    
    foreach ($array_duplic as $key => $valor) {        
        if ($old_valor != $valor) {
            if ($old_key != $key) {
                echo ", ";
            } 
            echo $valor; 
            $old_key = $key;         
        }
        $old_valor = $valor;                    
    }
    echo "]\n";
}

function revertaArray() {
    $array = [1, 2, 3, 4, 5];
    $posicao = -1;    

    echo "\n\n9. Escreva uma função que reverta um array.\n";
    echo "* Entrada: [1, 2, 3, 4, 5]\n";
    echo "* Saída: [";
    
    foreach ($array as $a) {
        $posicao ++;
    }
   
    while ($posicao >= 0) {
        echo $array[$posicao];

        if ($posicao > 0) {
            echo ", ";
        }
        $posicao --;
    }
    echo "]\n"; 
}

function achatarArray() {
    $array = [1, [1, 2], [1, [2, 3], 4]];    
    
    echo "\n\n10. Desafio: escreva uma função que achate um array multidimensional.\n";
    echo "* Entrada: [1, [1, 2], [1, [2, 3], 4]]\n";
    echo "* Saída: [";

    $retorno = achatarArrayMult($array);

    foreach ($retorno as $key => $regi) {
        echo $regi;
        if ($key < count($retorno) -1) {
            echo ", ";
        }
    }
    echo "]\n";    
}

function achatarArrayMult($array_mult) {
    $array_achatado = [];

    foreach ($array_mult as $reg) {
        if (!is_array($reg)) {
            $array_achatado[] = $reg;
        } else {
            $array_achatado = array_merge($array_achatado, achatarArrayMult($reg));
        }
    }
    return $array_achatado;
}

function ordernaArrayAsc($a, $b) {
    return $a > $b;
}

function ordernaArrayDesc($a, $b) {
    return $a < $b;
}

function shuffleArray($a, $b) {    
    return rand(-1, 1);
}

?>
