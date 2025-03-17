<?php
    $valor=2400;
    $porcent_reajuste=40;
    $proprietario = "Luiz Gustavo";
    $locador = "Arthur Joab";
    $novo_valor=$valor*($porcent_reajuste/100+1);
    echo ("<H1>Proprietario</H1><br><b>$proprietario</b><br><H1>Locador</H1><br><b>$locador</b><br>");
    echo ("Valor da compra: <mark>$$valor</mark><br>");
    echo ("A porcentagem é de:<mark> $porcent_reajuste%</mark><br>");
    echo ("valor o novo valor reajustado é: <mark>$novo_valor</mark><br>");
?>
