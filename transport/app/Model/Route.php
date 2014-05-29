<?php

class Route extends AppModel
{
     public $hasAndBelongsToMany = array(
         'Vehicle'=>
            array(
               'className' => 'Vehicle',
                'joinTable' => 'vehicles_routes',
                'foreignKey' => 'route_id',
                'associationForeignKey' => 'vehicle_id',
         ),
        'Stop' =>
            array(
                'className' => 'Stop',
                'joinTable' => 'routes_stops',
                'foreignKey' => 'route_id',
                'associationForeignKey' => 'stop_id',
                
            ),
         
    );
}
