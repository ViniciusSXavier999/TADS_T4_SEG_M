<?php
# Vamos configurar o recebimento dos dados enviados pelo formulário
# Para capturarmos valores enviados através de um formulário,
# usamos o comando $_POST['nome_do_campo']

if ($_POST['operacao'] == 'novo') {

    # Na próxima aula, vamos chamar aqui o Model para informar os dados a serem gravados
    print('RA: ' . $_POST['ra']);
    print('<br>');

    print('NOME: ' . $_POST['nome']);
    print('<br>');

    print('CURSO: ' . $_POST['curso']);
    print('<br>');
} else {
    print('Nada a fazer');
}