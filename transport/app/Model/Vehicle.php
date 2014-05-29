<?php

class Vehicle extends AppModel
{
    public function beforeSave($options = array()) 
   {
        
        parent::beforeSave($options);
        if($this->data['Vehicle']['registration_date'])
        {
            $this->data['Vehicle']['registration_date']=date('Y-m-d',  strtotime($this->data['Vehicle']['registration_date']));
        }
        if($this->data['Vehicle']['acquisition_date'])
        {
            $this->data['Vehicle']['acquisition_date']=date('Y-m-d',  strtotime($this->data['Vehicle']['acquisition_date']));
        }
    }
        public $hasAndBelongsToMany = array(
        'Route' =>
            array(
                'className' => 'Route',
                'joinTable' => 'vehicles_routes',
                'foreignKey' => 'vehicle_id',
                'associationForeignKey' => 'route_id',
                
            ),
          
            
         
    );
}
