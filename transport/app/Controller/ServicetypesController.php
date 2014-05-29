<?php

class ServicetypesController extends AppController
{
    public function add()
    {
        $this->loadModel('Vehicle');
        $vehicle=$this->Vehicle->find('list');
        $this->set('vehicles',$vehicle);
        if($this->request->is('post'))
        {
            $this->Servicetype->save($this->request->data);
            $this->loadModel('Odometerreading');
            $data=array();
            $data['name']=  $this->request->data['Odomterreading']['name'];
            $data['value']=  $this->request->data['Odomterreading']['value'];
            $data['vehicle_id']=  $this->request->data['Odomterreading']['vehicle_id'];
            $this->Odometerreading->save($data);
        }
    }
}
