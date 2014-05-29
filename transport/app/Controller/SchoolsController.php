<?php

class SchoolsController extends AppController
{
    public function add()
    {
        $this->loadModel('Stop');
        $stp=$this->Stop->find('all');
        $this->set('stop',$stp);
    }
}
