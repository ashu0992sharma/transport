<?php

class VehiclemodelsController extends AppController
{
   public function add()
   {
       $this->autoRender = false;
       $this->Vehiclemodel->save($this->data);
       $model=$this->Vehiclemodel->find('list',array('fields'=>array('name')));
       debug($this->data);
       $data[0] = "<option value=''>".$this->data['Vehiclemodel']['name']."</option>";
        foreach($model as $q => $value)
        {                                                       
            $data[]="<option value='".$q."'>".$value."</option>";              
        }
        print_r($data);
       
   }
}
