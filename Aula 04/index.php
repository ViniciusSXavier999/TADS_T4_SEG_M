<?php

# Para mostrar algo na tela (navegador) usamos o print("");
print("Olá Mundo!<br>");

# Variáveis
# São espaços reservados na memória do computador
# para fazermos operações, tanto matemáticas como textuais

# Em PHP, para determinarmos, ou seja, declararmos uma variável
# precisamos colocar antes do nome o símbolo $ (cifrão ou dólar)
# Ex.: $x, $y, $nome, $idade, etc.
# Atenção: Não podem conter espaços e caracteres especiais
# Ex.: $ nome, $nome completo, etc.

# Usando variáveis com o print()
# Ex.:
$curso = '<strong>TADS</strong>'; # variável do tipo Texto ou String
$semestre = 3; # tipo inteiro
$mensalidade = 250.78; # é um número real (double)
$tem_alunos = true; # variável booleana (true ou false)
$quebra = '<br>';

# Mostrando os valores das variáveis (echo ou print())
print($curso . $quebra);
print($semestre . $quebra);
echo $mensalidade . $quebra;
echo $tem_alunos . $quebra . $quebra;

# Operações com variáveis
# Aritméticas
$n1 = 5; # O operador "=" tem o nome de atribuição
$n2 = 7;

print("Operações Aritméticas<br>");
# Adição ou soma (+)
# Subtração (-)
# Multiplicação (*)
# Divisão (/)
# Resto da divisão ou módulo (%)

print('n1 + n2: ' . ($n1 + $n2) . $quebra);
print('n1 - n2: ' . ($n1 - $n2) . $quebra);
print('n1 * n2: ' . ($n1 * $n2) . $quebra);
print('n1 / n2: ' . ($n1 / $n2) . $quebra);
print('n1 % n2: ' . ($n1 % $n2) . $quebra);

#$soma = $n1 + $n2;
#print($soma * 2);
#print(($n1 + $n2) * 2);

# Exercícios
# Declarar as váriaveis a, b e c e calcular:
# 1 - a+b+c/3
# 2 - a*(b+c)-a*b
$a = 15;
$b = 6;
$c = 4;

print('1: ' . ($a + $b + $c / 3));
print($quebra);
print('2: ' . ($a * ($b + $c) - $a * $b));