<?php

    require 'classes/Conta.php';

    $minhaConta = new Conta();

    $minhaConta->dono = "BoinGuilherme";
    $minhaConta->numeroConta = "771156";
    $minhaConta->saldo = 500.00;

    $minhaConta->deposita(900);

    $conseguiSacar = $minhaConta->saca(300);

    if ($conseguiSacar){
        echo "consegui sacar \n";
    }else{
        echo "saldo insufuciente para sacar \n";
    }

    echo "O cliente {$minhaConta->dono} (numero de conta {$minhaConta->numeroConta}) tem {$minhaConta->saldo} dinieros";