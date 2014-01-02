<?php

class Statistics {

    private $kernel;

    public function __construct(Kernel $kernel)
    {
        $this->kernel=$kernel;
        $this->sendMail();
    }

    public function sendMail()
    {
       mail('KKamil897@gmail', 'LunyGo - nowe powiadomienie', 'Kolejna strona na LunyGo zostala postawiona!');
    }




}







?>