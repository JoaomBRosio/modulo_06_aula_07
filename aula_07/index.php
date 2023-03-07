<?php
//Switch, continue e break

//$nome = 'João';

/*
switch($nome){
    case 'João';
    echo 'Minha variavel é João';
    break;
    case 'Guilherme';
    echo 'Minha variavel é Guilherme';
    break;
}
*/


//Break para loop: for, while, do, foreach e switch
/*
for($i = 0; $i < 10; $i++){
    echo $i;
    echo '<hr>';
    if($i == 5)
    break;
}
*/


//Continue: pula o numero selecionado no if e continua a execução | for, while, do, switch.
for($i = 0; $i < 10; $i++){
    if($i == 5)
    continue;
    echo $i;
    echo '<hr>';
}



?>