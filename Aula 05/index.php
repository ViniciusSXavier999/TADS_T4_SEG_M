<?php

# Variáveis 'normais' - default ( padrão )
$nome = 'Edson'; # tipo String ( texto )
$idade = 50; # tipo inteiro
$salario = 1200.78; # tipo real

# Variáveis especiais: arrays
# São variáveis que podem armazenar 'vários' valores
# de uma só vez. Dica: sempre nomear essas variáveis
# no 'plural'.

# Como criar uma variável do tipo array ( vetor )
$alunos = ['Edson', 'Leonardo', 'Pedro', 'Nathalia'];

# Um array é composto por índice e valores
# O índice sempre é iniciado em zero ( 0 )
# Índice      0          1         2          3      4
$alunos = ['Edson', 'Leonardo', 'Pedro', 'Nathalia', 50];

# mostra um array via print
print_r( $alunos );

# mostra, além do conteúdo, o tipo dos dados e tamanho de cada um
var_dump( $alunos );

# Como acessar um valor dentro de um array
# Através de seu índice, dentro dos colchetes
print( $alunos[0] . '\n' );
print( $alunos[1] . '\n' );
print( $alunos[2] . '\n' );
print( $alunos[3] . '\n' );
print( $alunos[4] . '\n' );

# Arrays múltiplos
$array_multiplo = [
    ['Edson', 'Maria'], # 0 - nome
    [50, 25] # 1 - idade
];

# mostrando valores em arrays múltiplos
print( $array_multiplo[0][0] . ' - ' . $array_multiplo[1][0] );

# Vamos treinar
# Criar um array que contenha: nome, idade, curso, semestre
# Popular o array com 5 itens
# Mostrar os itens que tiverem índice par
# Tempo: 5 minutos

$dados = [
    ['Edson', 50, 'TADS', 2],       # 0
    ['Pedro', 23, 'CC', 4],         # 1
    ['Maria', 19, 'Biologia', 7],   # 2
    ['Ana', 20, 'CC', 3],           # 3
    ['João', 22, 'Redes', 6],       # 4
];
print( $dados[0][0] . '' . $dados[0][1] . ',' . $dados[0][2] . ',' . $dados[0][3]);
print("\n");
print( $dados[2][0] . '-' . $dados[2][1] . ',' . $dados[2][2] . ',' . $dados[2][3]);
print("\n");
print( $dados[4][0] . '-' . $dados[4][1] . ',' . $dados[4][2] . ',' . $dados[4][3]);

# count() - conta a quantidade de itens dentro de um array
for ($i = 0; $i < count($dados); $i+=2){
    if ($i % 2 == 0){ # somente os índices pares
        print($dados[$i][0] . "\n");
    }
}

# Laço de reptiçãso do tipo for (para)
# variável é o controlador/contador
# condição_lógica é um True ou False
#incremento/decremento é o valor adicionado ou subtraído a cada iteração
#for(variável; condição_lógica; incremento/decremento){
#    <comandos/instruções>
#}

# ++ é equivalente a: $i = $i + 1
for($i = 0; $i < 5; $i++){ #++ é uma sobrecarga de operador (+) chamada de pós-incremento
    print($i . " ");
}
print("\n" . $i. "\n");

# pré-incremento
for($i = 0; $i < 5; ++$i){ #++ é uma sobrecarga de operador (+) chamada de pós-incremento
    print($i . " ");
}
print("\n" . $i. "\n");

$v = 10;
print($v++ . "\n"); # 10 -> mostra 10 e soma 1
print($v . "\n"); # 11 -> mostra 11
print(++$v . "\n"); # 12 -> soma um ao 11 e mostra 12

for ($i=10; $i > 0; $i--) { # ordem decrescente (decremento)
    print($i . "\n");
}

# Quando falamos (trabalhamos) com arrays, logo nos vem a mente: laços de repetição
# Vamos pensar para treinar
# Dado um array com 5 números, calcular a soma dos valores
#            0   1   2   3   4
$numeros = [1, 2, 3, 4, 5];
$soma = 0;
for ($i = 0; $i < count($numeros); $i++) { 
    $soma += $numeros[$i];
}
print($soma);