<?php

class Stop extends AppModel
{
    public function beforeSave($options = array()) 
   {
        
        parent::beforeSave($options);
        
   }
    public $hasAndBelongsToMany = array(
        'Route' =>
            array(
                'className' => 'Route',
                'joinTable' => 'routes_stops',
                'foreignKey' => 'stop_id',
                'associationForeignKey' => 'route_id',
                
            )
         
    );
}
