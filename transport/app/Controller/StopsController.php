<?php

class StopsController extends AppController
{
    public function add()
    {
        if($this->request->is('post'))
        {
            
            foreach($this->request->data as $data)
            {
                if(empty($this->data['Stop']))
                {
                    echo 'NO DATA PROVIDED';
                }
                else
                    $this->Stop->saveAll($data);
            }
        }
    }
    
    public function view()
    {
        $stp=$this->Stop->find('list',array('fields'=>array('id','name')));
        $this->set('stops',$stp);
    }
    
    public function delete()
    {
        $stp=$this->Stop->find('list',array('fields'=>array('id','name')));
        $this->set('stops',$stp);
        if($this->request->is('post'))
        {
            $this->Stop->delete($this->request->data['stop']);
        }
    }
    public function show_routes()
    {
        $stp=$this->data['Stop']['stop'];
        $this->loadModel('RoutesStop');
        $rt=$this->Stop->find('all',array('contain'=>'Route','conditions'=>array('id'=>$stp)));
        $this->set('route',$rt);
       
    }
    public function edit()
    {
        $stp=$this->Stop->find('list',array('fields'=>array('id','name')));
        $this->set('stops',$stp);
        if($this->request->is('post'))
        {
            
            //$this->Stop->save($this->request->data);
            foreach($this->request->data as $data)
            {
                //$this->Stop->delete($data['Stop']['id']);
                $address=  strval($data['Stop']['address']);
                $address=strval($address);
                $address = "'" . str_replace(",", "','", $address) . "'";
                $this->Stop->updateAll(array(
                                'Stop.latitude'=>$data['Stop']['latitude'],
                                  'Stop.address'=>$address,
                                 'Stop.longitude'=>$data['Stop']['longitude'],
                                    
                        
                        ),array('Stop.id'=>$data['Stop']['id']));
                
            }
        }
    }
    public function edit_stops()
    {
        $stp=$this->data[0]['Stop']['id'];
        $stop=$this->Stop->find('all',array('contain'=>'Stop','conditions'=>array('id'=>$stp)));
        $this->set('data',$stop);
        
    }
}
