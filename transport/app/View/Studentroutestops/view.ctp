<script>
    function view()
    {
        var a=document.getElementById('select').value;
        
        if(a==0)
        {
            
            document.getElementById('select_student').style.display='none';
            document.getElementById('select_route').style.display="none";
            document.getElementById('select_stop').style.display="none";
            
            
        }
        if(a==1)
        {
            
            document.getElementById('select_student').style.display='block';
            document.getElementById('select_route').style.display="none";
            document.getElementById('select_stop').style.display="none";
            
            
        }
        if(a==2)
        {
            document.getElementById('select_route').style.display='block';
            document.getElementById('select_student').style.display='none';
            document.getElementById('select_stop').style.display='none';
        }
        if(a==3)
        {
            document.getElementById('select_stop').style.display='block';
            document.getElementById('select_route').style.display='none';
            document.getElementById('select_student').style.display='none';
        }
    }
</script>
<div class="main_content">
<div class="formc">
                 <?php echo $this->Form->create('Studentroutestop',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
                ?>
    <div align='center'>
        <select name="select" onchange="javascript:view()" id="select">
            <option value="0">Select</option>
            <option value="1">View By Student</option>
            <option value="2">View By Route</option>
            <option value="3">View By Stop</option>
        </select>
    </div>
    <div style="display: none" id="select_student">
        <div>
        <label>Select Student:</label>
        <select name="student" id="student">
        <?php foreach($student as $st){?>
            <option value="<?php echo $st['Student']['id'];?>"><?php echo $st['Student']['first_name'].' '.$st['Student']['last_name'];?></option>
        <?php }?>
        </select>
        <?php $data = $this->Js->get('#student')->serializeForm(array('isForm' => true, 'inline' => true));
                                  
                                  $this->Js->get('#student')->event(
                                  'change',
                                  $this->Js->request(
                                  array('action' => 'show_routes', 'controller' => 'Studentroutestops'),
                                  array(
                                  'update' => '#show_routes',
                                  'data' => $data,
                                  'async' => true,    
                                  'dataExpression'=>true,
                                  'method' => 'POST'
                                )
                            )
                            );
                        ?>
    </div>
        
    <br>
    <br>
    <div id="show_routes">
        
    </div>
    </div>
    <div id='select_route' style="display:none">
        <div>
        <label>Select Route:</label>
        <?php echo $this->Form->input('route',array('id'=>'route'));?>
        
        <?php $data = $this->Js->get('#route')->serializeForm(array('isForm' => true, 'inline' => true));
                                  
                                  $this->Js->get('#route')->event(
                                  'change',
                                  $this->Js->request(
                                  array('action' => 'show_students', 'controller' => 'Studentroutestops'),
                                  array(
                                  'update' => '#show_students',
                                  'data' => $data,
                                  'async' => true,    
                                  'dataExpression'=>true,
                                  'method' => 'POST'
                                )
                            )
                            );
                        ?>
    </div>
    <div id="show_students">
        
    </div>
        </div>
    <div id='select_stop' style="display:none">
    <div>
        <label>Select Stop:</label>
        <?php echo $this->Form->input('stop',array('id'=>'stop'));?>
        
        <?php $data = $this->Js->get('#stop')->serializeForm(array('isForm' => true, 'inline' => true));
                                  
                                  $this->Js->get('#stop')->event(
                                  'change',
                                  $this->Js->request(
                                  array('action' => 'show_studentstop', 'controller' => 'Studentroutestops'),
                                  array(
                                  'update' => '#show_studentstop',
                                  'data' => $data,
                                  'async' => true,    
                                  'dataExpression'=>true,
                                  'method' => 'POST'
                                )
                            )
                            );
                        ?>
    </div>
    <br>
    <br>
    
    <div id="show_studentstop">
        
    </div>
    </div>
</div>
</div>