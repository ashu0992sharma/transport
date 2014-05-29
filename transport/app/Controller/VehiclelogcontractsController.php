<?php

class VehiclelogcontractsController extends AppController
{
    public function add()
    {
        $this->loadModel('Vehicle');
        $vehicle=$this->Vehicle->find('list',array('fields'=>'id'));
        $this->set('vehicles',$vehicle);
        
        $this->loadModel('Vehiclecost');
        $cost_id=$this->Vehiclecost->find('list');
        
        $this->set('costs',$cost_id);
        if($this->request->is('post'))
        {
            $this->Vehiclelogcontract->save($this->request->data);
            $this->loadModel('Odometerreading');
            $data=array();
            $data['name']=  $this->request->data['Odomterreading']['name'];
            $data['value']=  $this->request->data['Odomterreading']['value'];
            $data['vehicle_id']=  $this->request->data['Odomterreading']['vehicle_id'];
            $this->Odometerreading->save($data);
        }
    }
}
