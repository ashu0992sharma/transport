<?php

class StudentsController extends AppController
{
    public function add_location()
    {
        $st=$this->Student->find('list',array('fields'=>array('id','first_name')));
        $this->set('student',$st);
        if($this->request->is('post'))
        {
             //$this->Student->update($this->request->data);
            
            $address=  strval($this->request->data['address']);
            $address=strval($address);
            $address = "'" . $address . "'";
            $latitude=strval($this->request->data['latitude']);
            $latitude=strval($latitude);
            $this->Student->updateAll(array(
                                'Student.latitude'=>$this->request->data['latitude'],
                                  'Student.address'=>$address,
                                 'Student.longitude'=>$this->request->data['longitude'],
                                    
                        
                        ),array('Student.id'=>$this->request->data['student']));

        }

    }
    
    public function select_student()
    {
        $st=$this->Student->find('list',array('fields'=>array('id','first_name')));
        $this->set('student',$st);
        $this->loadModel('Route');
        $rt=$this->Route->find('list',array('fields'=>array('id','name')));
        $this->set('route',$rt);
        if($this->request->is('post'))
        {
            
                  return $this->redirect(array
                   ('controller'=>'Students',
                   'action' => 'recommend_stop_cost',
                   '?'=> array(
                   'student_id'=>$this->request->data['student'],
                   'route_id'=>$this->request->data['route'],
                   )));

        }
    }
    
    public function recommend_stop_cost()
    {
        $student_id=$this->params['url']['student_id'];
        $student=$this->Student->find('first',array('conditions'=>array('id'=>$student_id)));
        $route_id=$this->params['url']['route_id'];
        $this->loadModel('RoutesStop');
        $stp=$this->RoutesStop->find('first',array('conditions'=>array('route_id'=>$route_id)));
        debug($stp);
        debug($student);
    }
    
    public function google_reports()
    {
        
    }
    
    
    public function select_student_distance()
    {
        $st=$this->Student->find('list',array('fields'=>array('id','first_name')));
        $this->set('student',$st);
        
        if($this->request->is('post'))
        {
            
                  return $this->redirect(array
                   ('controller'=>'Students',
                   'action' => 'min_distance',
                   '?'=> array(
                   'student_id'=>$this->request->data['student'],
        
                   )));

        }
    }
    
    public function min_distance()
    {
       $student_id=$this->params['url']['student_id'];
       $student=$this->Student->find('first',array('conditions'=>array('id'=>$student_id)));
       $this->set('student',$student);
       $this->loadModel('Stop');
       $stp=$this->Stop->find('all');
       $stop=$this->Stop->find('list');
       $this->loadModel('RoutesStop');
       
       
       
       
       $this->set('stop',$stp);
    }
    
    public function portal()
    {
        $this->loadModel('Stop');
        $stp=$this->Stop->find('all');
        $this->set('stop',$stp);
        
        //$this->Session->write("id","ashu");
    }

}
