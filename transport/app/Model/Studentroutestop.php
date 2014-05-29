<?php

class Studentroutestop extends AppModel
{
    public $belongsTo = array(
        'Student' => array(
            'className' => 'Student',
            'foreignKey' => 'student_id'
        ),
        
        'Route'=>array(
            'className'=>'Route',
            'foreignKey'=>'route_id'
        ),
        'Stop'=>array(
            'className'=>'Stop',
            'foreignKey'=>'stop_id'
            
        )
    );
}
