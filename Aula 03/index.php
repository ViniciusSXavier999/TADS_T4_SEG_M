<?php

# Um comentário é um texto que o compilador ignora durante o processo de execução.
# Todo comentário deve ser precedido do sinal "#" sustenido ou Hashtag (do inglês Sharp)
# Serve para sabermos o que estamos fazendo (dicas ou lembretes).

# Mostrando dados (output)
# O comando "echo" faz a saída de um "valor", podendo ser na tela (navegador) ou no terminal.

# sintaxe: <comando> valor;
# Se o valor for um texto, deverá estar entre aspas (simples ou dupla))

# O comando abaixo mostra a frase Olá Mundo! na tela
# Documentação do echo: https://www.php.net/manual/en/function.echo.php
echo "Olá Mundo!<br>";

# Outra forma de fazer uma saída, mas agora como comando print(valor)
# Documentação do print(): https://www.php.net/manual/en/function.print.php
print("Olá Mundo!");

# Concatenar = "juntar"
# Serve para "agregarmos" valores textuais. Cuidado, não servem para cálculos com números
print("<br>Olá" . " Mundo!");

# Variáveis
# Variável é um espaço reservado na memória do computador para armazenar dados temporariamente.

# Vejamos um caso sem variáveis (chamamos de literal)
print("<br>" . (2 + 2));

print("<br>");
print(2 + 2);

print("<br>");
print(3 * 3);

# Para criar uma variável no PHP, precisamos indicar com o sinal cifrão $nome_da_variável
# Regras:
# 1 . Não pode começar com número
# 2 . Não pode ter espaço
# 3 . Não pode ter caracteres especiais
# 4 . Não pode usar nomes reservados (comandos)
# Ex. de variáveis válidas
# $nome
# $valor
# $idade

# Números Inteiros => Z
# Números Reais R (fração ou decimais)
# O símbolo "=" significa "operador de atribuição", ou seja, lê-se: $x recebe 2
# Documentação: https://www.php.net/manual/en/language.variables.basics.php
$x = 2;
$y = 3;

print("<br>");
print($x + $y); # adição

print("<br>");
print($x * $y); # multiplicação

# Podemos também criar outras variáveis e guardar o resultado de uma operação nelas.
$resultado = 0;
$resultado = $x * $y; # guarda o resultado da operação entre x e y
print("<br>");
print($resultado + $x);

# Outro exemplo de variável, mas agora armazenando um texto
$nome = "Edson Melo";
print("<br>");
print($nome);

# ATENÇÃO:
# Abaixo trocamos o valor numérico da variável $x por um texto.
# Isso é perfeitamente possível, pois o PHP é fracamente tipado (não exigue informar o tipo do dado a aser armazenado).
# Entretanto, não é usual fazer esse tipo de atribuição mista, pois pode causar problemas na implementação da lógica.
$x = "Tio Patinhas";
print("<br>");
print($x);

# No caso abaixo não será realizada nenhuma operação, apenas a junção entre 10 e 2 (102) porque é uma concatenação
print("<br>");
print("10" . "2");

# Exercício (resolvido)
# Escreva um código que mostre a divisão entre dois números (usando variáveis)
print("<br>");
$j = 4;
$k = 8;
print($j / $k);
