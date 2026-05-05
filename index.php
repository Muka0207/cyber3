<?php
// Página educacional de simulação de cibersegurança
// Este arquivo NÃO criptografa, NÃO altera e NÃO apaga arquivos.

date_default_timezone_set('America/Sao_Paulo');

$tituloPagina = "SISTEMA COMPROMETIDO";

$mensagemPrincipal = "☠️ OOPS, SEUS ARQUIVOS FORAM CRIPTOGRAFADOS! ☠️";

$subtitulo = "A segurança da sua rede foi comprometida.";

$descricao = "A equipe do 3º Semestre encontrou falhas críticas na sua infraestrutura, passando pelo Web Server até o Active Directory.";

$mensagemPix = 'Para recuperar o "acesso" e aprender como se defender, envie o resgate (um café ☕) para a chave PIX abaixo:';

$chavePix = "terceiro.melhor.que.o.quinto@gmail.com";

$avisoTitulo = "[ AVISO DE SIMULAÇÃO DE CIBERSEGURANÇA ]";

$avisoDescricao = "Esta é uma página educacional inofensiva. Nenhum arquivo real foi criptografado ou alterado.";

$avisoAutorizacao = "Exercício devidamente autorizado pelo professor responsável.";

$dataSimulacao = date("d/m/Y H:i:s");

$idSimulacao = strtoupper(bin2hex(random_bytes(4)));

function protegerSaida($valor) {
    return htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= protegerSaida($tituloPagina); ?></title>

    <style>
        body {
            background-color: #660000; /* Vermelho escuro clássico de ransomware */
            color: white;
            font-family: 'Courier New', Courier, monospace;
            text-align: center;
            padding: 50px;
            margin: 0;
        }

        h1 {
            font-size: 3em;
            color: #ff4d4d;
            text-transform: uppercase;
            text-shadow: 0px 0px 12px #ff0000;
        }

        .container {
            background-color: #000;
            border: 3px solid #ff4d4d;
            padding: 30px;
            margin: 20px auto;
            width: 70%;
            box-shadow: 0px 0px 20px #ff0000;
        }

        .pix-key {
            color: #ffff00;
            font-size: 1.8em;
            font-weight: bold;
            margin: 20px 0;
            word-wrap: break-word;
        }

        .blink {
            animation: blinker 1s linear infinite;
        }

        @keyframes blinker {
            50% { opacity: 0; }
        }

        .disclaimer {
            margin-top: 50px;
            font-size: 0.9em;
            color: #aaaaaa;
            border-top: 1px dashed #aaaaaa;
            padding-top: 20px;
        }

        .status-box {
            margin: 25px auto 0;
            padding: 15px;
            width: 70%;
            background-color: #1a0000;
            border: 1px solid #ff4d4d;
            box-shadow: 0px 0px 10px #990000;
            color: #ffcccc;
            font-size: 0.95em;
        }

        .status-box span {
            color: #ffff00;
            font-weight: bold;
        }

        .tag {
            display: inline-block;
            margin-bottom: 15px;
            padding: 8px 14px;
            background-color: #330000;
            border: 1px solid #ff4d4d;
            color: #ff4d4d;
            font-weight: bold;
            letter-spacing: 1px;
        }

        @media (max-width: 768px) {
            body {
                padding: 25px;
            }

            h1 {
                font-size: 2em;
            }

            .container,
            .status-box {
                width: 90%;
            }

            .pix-key {
                font-size: 1.2em;
            }
        }
    </style>
</head>

<body>

    <h1><?= protegerSaida($mensagemPrincipal); ?></h1>
    
    <div class="container">
        <div class="tag">SIMULAÇÃO AUTORIZADA</div>

        <h2><?= protegerSaida($subtitulo); ?></h2>

        <p><?= protegerSaida($descricao); ?></p>
        
        <p><?= protegerSaida($mensagemPix); ?></p>
        
        <p class="pix-key blink"><?= protegerSaida($chavePix); ?></p>
    </div>

    <div class="status-box">
        <p>ID da Simulação: <span><?= protegerSaida($idSimulacao); ?></span></p>
        <p>Data/Hora da execução: <span><?= protegerSaida($dataSimulacao); ?></span></p>
        <p>Status: <span>Ambiente de laboratório / demonstração educacional</span></p>
    </div>

    <div class="disclaimer">
        <p><strong><?= protegerSaida($avisoTitulo); ?></strong></p>
        <p>
            <?= protegerSaida($avisoDescricao); ?><br>
            <?= protegerSaida($avisoAutorizacao); ?>
        </p>
    </div>

</body>
</html>