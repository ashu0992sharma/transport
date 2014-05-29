<?php
App::uses('PHPExcel', 'Lib');	


class VehiclesController extends AppController
{
    public $helpers = array('PHPExcel','GoogleCharts');
    
    public function add()
    {
        $this->loadModel('Employee');
        $emp=$this->Employee->find('list',array('fields'=>'name'));
        $this->set('employees',$emp);
        $this->loadModel('VehiclesEmployee');
        if($this->request->is('post'))
        {
            if(empty($this->request->data['Vehicle']))
            {
                echo 'NO DATA PROVIDED';
            }
            else
            {
                $this->Vehicle->save($this->request->data);
                $emp=array();
                foreach($this->request->data['vehicles_employees'] as $data)
                {
                
                    $emp['VehiclesEmployee']['name']=$data['name'];
                    $emp['VehiclesEmployee']['designation']=$data['designation'];
                    $emp['VehiclesEmployee']['vehicle_id']=$this->Vehicle->id;
                
                    $this->VehiclesEmployee->saveAll($emp);
                }
            
            }    
            
        }
    }
    
    public function edit()
    {
        $veh=$this->Vehicle->find('list',array('fields'=>array('id','name')));
        $this->set('vehicles',$veh);
        
        if($this->request->is('post'))
        {
            
                  return $this->redirect(array
                   ('controller'=>'Vehicles',
                   'action' => 'edit_vehicles',
                   '?'=> array(
                   'vehicle_id'=>$this->request->data['vehicle']
                   )));

        }
    }
    
    public function edit_vehicles()
    {
        $veh=$this->params['url']['vehicle_id'];
        
        if(!empty($this->request->data))
        {
            
            $this->Vehicle->delete($veh);
            $this->Vehicle->save($this->request->data);
            $emp=array();
            $this->loadModel('VehiclesEmployee');
            foreach($this->request->data['vehicles_employees'] as $data)
            {
                
                $emp['VehiclesEmployee']['name']=$data['name'];
                $emp['VehiclesEmployee']['designation']=$data['designation'];
                $emp['VehiclesEmployee']['vehicle_id']=$this->Vehicle->id;
                
                $this->VehiclesEmployee->saveAll($emp);
            }
            
            
            
        }
        else {
            $data=$this->Vehicle->find('first',array('conditions'=>array('id'=>$veh)));
            $this->data=$data;
            $this->loadModel('VehiclesEmployee');
            $emp=$this->VehiclesEmployee->find('all',array('conditions'=>array('vehicle_id'=>$veh)));
            $this->set('veh_emp',$emp);
            $this->set('data',$data);
            $this->loadModel('Employee');
            $emp=$this->Employee->find('list',array('fields'=>'name'));
            $this->set('employees',$emp);


        }
        
    }
    
    public function vehicle_report()
    {
        $veh=$this->Vehicle->find('all');
        //debug($veh);
        $this->set('vehicle',$veh);
    }
    
    public function vehicle_excel()
    {
        $veh=$this->Vehicle->find('all');
        $this->set('vehicle',$veh);
    }
    
    public function select_vehicle_employee()
    {
        $veh=$this->Vehicle->find('list');
        $this->set('vehicle',$veh);
        if($this->request->is('post'))
        {
            
            
                  return $this->redirect(array
                   ('controller'=>'Vehicles',
                   'action' => 'vehicle_employee_report',
                   '?'=> array(
                   'vehicle_id'=>$this->request->data['vehicle']
                   )));

        }
    }
    
    public function vehicle_employee_report()
    {
        $vehicle_id=$this->params['url']['vehicle_id'];
        $this->loadModel('VehiclesEmployee');
        if($vehicle_id=='a')
        {
            $veh=$this->VehiclesEmployee->find('all');
            $veh_list=$this->VehiclesEmployee->find('list');
            foreach($veh_list as $list)
            {
                $veh_data=$this->Vehicle->find('list',array('fields'=>'name'));
            }
            $this->set('vehicle',$veh);
            $this->set('data',$veh_data);
            
        }
        else
        {
            $veh=$this->VehiclesEmployee->find('all',array('conditions'=>array('vehicle_id'=>$vehicle_id)));
               
            $veh_data=$this->Vehicle->find('list',array('fields'=>'name','conditions'=>array('id'=>$vehicle_id)));
                
            
            $this->set('vehicle',$veh);
            $this->set('data',$veh_data);
            
        }
    }
    
    
            
}
