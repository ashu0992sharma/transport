<?php

class RoutesController extends AppController
{
        public $helpers = array('PHPExcel','GoogleCharts');
    public function add()
    {
        $this->loadModel('Vehicle');
        $vehicle=$this->Vehicle->find('list',array('fields'=>array('id')));
        $k=0;
        foreach($vehicle as $vehicle)
        {
            $k++;
        }
        
        $this->set('l',$k);
        $vehicles=$this->Vehicle->find('list',array('fields'=>array('id','name')));
        $this->set('veh',$vehicles);
        
        $this->loadModel('Stop');
        $st=$this->Stop->find('list',array('contain'=>'Stop', 'fields'=>array('id','name')));
        
        $this->set('st',$st);
        if($this->request->is('post'))
        {
            //debug($this->request->data);
            if(empty($this->request->data['Route']['from_latitude']))
            {
                echo 'NO DATA PROVIDED';
            }
           else
            {
                $this->Route->save($this->request->data);
                $this->loadModel('RoutesStop');
                $stop=array();
                foreach($this->request->data['Route_stop'] as $data1)
                {
                    $stop['RoutesStop']['stop_id']=$data1['stop_id'];
                    $stop['RoutesStop']['amount']=$data1['amount'];
                    $stop['RoutesStop']['sequence']=$data1['sequence'];
                    $stop['RoutesStop']['stoppage_time']=$data1['stoppage_time'];
                    $stop['RoutesStop']['arrival_time']=$data1['arrival_time'];
                    $stop['RoutesStop']['route_id']=$this->Route->id;
                    $this->RoutesStop->saveAll($stop);
                }
            
                $veh=array();
                $this->loadModel('VehiclesRoute');
                foreach($this->request->data['Vehicle_route'] as $data2)
                {
                    $veh['VehiclesRoute']['vehicle_id']=$data2['vehicle_id'];
                    $veh['VehiclesRoute']['capacity']=$data2['capacity'];
                    $veh['VehiclesRoute']['start_time']=$data2['start_time'];
                    $veh['VehiclesRoute']['end_time']=$data2['end_time'];
                    $veh['VehiclesRoute']['route_id']=$this->Route->id;
                    $this->VehiclesRoute->saveAll($veh);
                
                }
            }
            
            
        }
    }
    
    public function view()
    {
        $rt=$this->Route->find('list',array('fields'=>array('id','name')));
        $this->set('routes',$rt);
    }
    
    public function show_stops()
    {
        $stp=$this->data['Route']['route'];
        $rt=$this->Route->find('all',array('contain'=>'Stop','conditions'=>array('id'=>$stp)));
        $this->set('route',$rt);
       
    }
    
    public function select_route_vehicle()
    {
        $rt=$this->Route->find('list');
        $this->set('route',$rt);
        if($this->request->is('post'))
        {
            
            
                  return $this->redirect(array
                   ('controller'=>'Routes',
                   'action' => 'route_vehicle_report',
                   '?'=> array(
                   'route_id'=>$this->request->data['route']
                   )));

        }

    }
    
    public function route_vehicle_report()
    {   
        $route_id=$this->params['url']['route_id'];
        if($route_id=='a')
        {
            $rt=$this->Route->find('all',array('contain'=>'Vehicle'));
        }
        else 
        {
            $rt=$this->Route->find('all',array('contain'=>'Vehicle','conditions'=>array('id'=>$route_id)));
        }
        //debug($rt);
        $this->set('routes',$rt);
        //print($this->Session->read($id));
    }
    
    public function select_route_stop()
    {
        $rt=$this->Route->find('list');
        $this->set('route',$rt);
        if($this->request->is('post'))
        {
            
            
                  return $this->redirect(array
                   ('controller'=>'Routes',
                   'action' => 'route_stop_report',
                   '?'=> array(
                   'route_id'=>$this->request->data['route']
                   )));

        }

    }
    public function route_stop_report()
    {
        $route_id=$this->params['url']['route_id'];
        if($route_id=='a')
        {
            $rt=$this->Route->find('all',array('contain'=>'Stop'));
        }
        else 
        {
            $rt=$this->Route->find('all',array('contain'=>'Vehicle','conditions'=>array('id'=>$route_id)));
        }
        
        $this->set('routes',$rt);
    }
    
    public function student_route_report()
    {
        $this->loadModel('Studentroutestop');
        
        $strp=$this->Studentroutestop->find('all',array(
                                     'fields'=>array(
                                         'route_id','student_id','stop_id'
                                     
                                )));
        
        $student=array();
        
        $this->loadModel('Student');
        $this->loadModel('Route');
        $this->loadModel('Stop');
        
        foreach($strp as $st=>$val)
        {
            $student[$st]=$this->Student->find('all',array('conditions'=>array('id'=>$val['Studentroutestop']['student_id']),'fields'=>array('first_name','last_name')));
            $route[$st]=$this->Route->find('all',array('conditions'=>array('id'=>$val['Studentroutestop']['route_id']),'fields'=>array('name')));
            $stop[$st]=$this->Stop->find('all',array('conditions'=>array('id'=>$val['Studentroutestop']['stop_id']),'fields'=>array('name')));
        }
        $this->set('student',$student);
        $this->set('route',$route);
        $this->set('stop',$stop);
        
        
    }
    
    public function edit()
    {
        $rt=$this->Route->find('list',array('fields'=>array('id','name')));
        $this->set('routes',$rt);
        if($this->request->is('post'))
        {
            
                  return $this->redirect(array
                   ('controller'=>'Routes',
                   'action' => 'edit_route',
                   '?'=> array(
                   'route_id'=>$this->request->data['route']
                   )));

        }
    }
    
    public function edit_route()
    {
        $id=$this->params['url']['route_id'];
        $route=$this->Route->find('all',array('contain'=>'Stop','conditions'=>array('id'=>$id)));
        $this->set('route',$route);
        $this->loadModel('Stop');
        $st=$this->Stop->find('list',array('contain'=>'Stop', 'fields'=>array('id','name')));
        $this->set('st',$st);
        $this->loadModel('Vehicle');
        $veh=$this->Vehicle->find('list',array( 'fields'=>array('id','name')));
        $this->set('vehicle',$veh);
        if($this->request->is('post'))
        {
            
            $this->Route->delete($id);
            $this->Route->save($this->request->data);
            $this->loadModel('RoutesStop');
            $stop=array();
            if(!empty($this->request->data['RoutesStop']))
            {
            foreach($this->request->data['RoutesStop'] as $data1)
            {
                $stop['RoutesStop']['stop_id']=$data1['stop_id'];
                $stop['RoutesStop']['amount']=$data1['amount'];
                $stop['RoutesStop']['sequence']=$data1['sequence'];
                $stop['RoutesStop']['stoppage_time']=$data1['stoppage_time'];
                $stop['RoutesStop']['arrival_time']=$data1['arrival_time'];
                $stop['RoutesStop']['route_id']=$this->Route->id;
                $this->RoutesStop->saveAll($stop);
            }
            }
            $veh=array();
            $this->loadModel('VehiclesRoute');
            foreach($this->request->data['VehiclesRoute'] as $data2)
            {
                $veh['VehiclesRoute']['vehicle_id']=$data2['vehicle_id'];
                $veh['VehiclesRoute']['capacity']=$data2['capacity'];
                $veh['VehiclesRoute']['start_time']=$data2['start_time'];
                $veh['VehiclesRoute']['end_time']=$data2['end_time'];
                $veh['VehiclesRoute']['route_id']=$this->Route->id;
                $this->VehiclesRoute->saveAll($veh);
                
            }
            
            
            
        }
        
    }
    
    public function distance()
    {
        
    }
}
