<?php

class VehiclestatesController extends AppController
{
    public function add()
    {
        $this->autoRender=false;
        $this->Vehiclestate->save($this->data);
        $state=$this->Vehiclestate->find('list',array('fields'=>array('name')));
        $data[0] = "<option value=''>".$this->data['Vehiclestate']['name']."</option>";
        foreach($state as $q => $value)
        {                                                       
            $data[]="<option value='".$q."'>".$value."</option>";              
        }
        print_r($data);
    }
}
