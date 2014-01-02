<?php

class user_index_index {

    private $kernel;

    public function __construct(Kernel $kernel)
    {
        $this->kernel = $kernel;
        $this->index();
    }
    public function index()
    {
        $this->kernel->modules('template')->getTemp('header');
        echo '<h3>Twoja ranga '.$this->kernel->modules('user')->checkLogin().' to: '.$this->kernel->modules('user')->checkGroup().'</h3>';
    
    }
	
	
}






?>