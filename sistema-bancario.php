<?php

$saldo = 1000;

echo "****************************************
       Bem vinda Camille Gabrieli
         saldo atual: 1000
 ************************************* 
    1. Consultar saldo atual
    2. Sacar valor
    3. Depositar valor
    4. Sair \n";

    do{
        echo "Digite  um numero:\n";
        $numero = fgets(STDIN);

        
    if ($numero == 1){
        echo "seu saldo é: $saldo\n";
    }
    elseif ($numero == 2){ 
        echo "digite o valor que quer sacar:\n";
        $valor = fgets(STDIN);
        
        $saldo = $saldo - $valor;

        echo "Saque realizado com sucesso ! seu saldo agora é: $saldo\n";
     }
    elseif($numero == 3){
        echo "digite o valor que quer depositar:\n";
        $deposito =fgets(STDIN);

        $saldo = $saldo += $deposito;

        echo "deposito realizado com sucesso! seu saldo atual agora é: $saldo\n";
    }
    elseif($numero == 4){
        echo "saindo do sistema ate mais!\n";
    }
    else{
        echo "valor invalido.";
    }

    echo "\n";
}

   while($numero != 4);
   
   

 