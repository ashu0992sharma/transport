<?php

class OdometerreadingsController extends AppController
{
    public function add()
    {
        $this->loadModel('Vehicle');
        $vehicle=$this->Vehicle->find('list');
        $this->set('vehicles',$vehicle);
        if($this->request->is('post'))
        {
            $this->Odometerreading->save($this->request->data);
        }
    }
    
}
