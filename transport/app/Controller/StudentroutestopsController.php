<?php

class StudentroutestopsController extends AppController
{
    public function add()
    {
        $this->loadModel('Student');
        $st=$this->Student->find('list',array('fields'=>array('id','first_name')));
        $this->set('student',$st);
        $this->loadModel('Route');
        $rt=$this->Route->find('list',array('fields'=>array('id','name')));
        $this->set('route',$rt);
        $this->loadModel('Stop');
        $stp=$this->Stop->find('list',array('fields'=>array('id','name')));
        $this->set('stop',$stp);
        if($this->request->is('post'))
        {
            foreach($this->request->data as $data)
            {
                if(empty($this->request->data['Studentroutestop']['student_id']) || empty($this->request->data['Studentroutestop']['route_id']))
                {
                    echo 'NO DATA PROVIDED';
                }
                else
                {
                $id=$this->Studentroutestop->find('list',array(
                                        'conditions'=>array(
                                            'student_id'=>$data['Studentroutestop']['student_id'],
                                            'route_id'=>$data['Studentroutestop']['route_id'],
                                            
                                        )
                ));
                if(empty($id))
                {
                    
                    $this->Studentroutestop->saveAll($data);
                }
                else
                {
                    $this->Studentroutestop->delete($id);
                    $this->Studentroutestop->saveAll($data);
                }
            }
        }
        }
    }
    
    
    
    public function edit()
    {
        $st=$this->Studentroutestop->find('all');
        
        $this->set('student',$st);
    }
    
    public function view()
    {
        $this->loadModel('Student');
        $st=$this->Student->find('all');
        $this->set('student',$st);
        $this->loadModel('Route');
        $rt=$this->Route->find('list',array('fields'=>array('id','name')));
        $this->set('routes',$rt);
        $this->loadModel('Stop');
        $stp=$this->Stop->find('list',array('fields'=>array('id','name')));
        $this->set('stops',$stp);
        
        
    }
    
    public function show_stops()
    {
        $rt=$this->data[0]['Studentroutestop']['route_id'];
        $this->loadModel('Route');
        $data=$this->Route->find('all',array('conditions'=>array('id'=>$rt)));
        $this->set('data',$data);
        
    }
    
    public function show_routes()
    {
        
        $st=$this->data['student'];
        $data=$this->Studentroutestop->find('all',array('conditions'=>array('student_id'=>$st)));
        $this->set('student',$st);
        $this->set('data',$data);
    }
    public function show_students()
    {
        $rt=$this->data['Studentroutestop']['route'];
        $data=$this->Studentroutestop->find('all',array('conditions'=>array('route_id'=>$rt)));
        $this->set('student',$rt);
        $this->set('data',$data);
    }
    
    public function show_studentstop()
    {
        $rt=$this->data['Studentroutestop']['stop'];
        $data=$this->Studentroutestop->find('all',array('conditions'=>array('stop_id'=>$rt)));
        $this->set('student',$rt);
        $this->set('data',$data);
    }
}
