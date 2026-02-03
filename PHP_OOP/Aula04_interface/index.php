<?php
interface Interface1
{
    public function printMessage($msg);
}

class Classe1 implements Interface1
{
    function printMessage($msg)
    {
        echo $msg;
    }
}

$classe1 = new Classe1();
$classe1->printMessage("Deus!");
?>