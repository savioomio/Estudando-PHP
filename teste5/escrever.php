<?php
function escreverArquivoArray($arr)
{
    $fp = fopen('../teste4/Tudo sobre flex.txt', 'a+');

    if ($fp) {
        foreach ($arr as $cpf => $dados) {
            if (!empty($dados)) {
                $linha = $cpf . " - " . $dados['nome'] . " - " . $dados['endereco'] . " - " . $dados['telefone'];
                fputs($fp, "$linha\n");
            }
        }
        fclose($fp);
    }
    echo "[OK] Dados escritos com Sucesso!";
}
