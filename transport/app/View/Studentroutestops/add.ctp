<script>
    var i=1;
    function append()
    {
        var container=document.getElementById("new");
        
        var rowcontain4 = document.createElement('tr');
        var container_student=document.createElement("td");
        container_student.className='middle-inputtext';
        var input_student = document.createElement('select');
        var label_student=document.createElement('label');
        label_student.innerHTML="Student:";
    
        <?php foreach($student as $st=>$value){?>
            
         var option=document.createElement("option");
         option.value="<?php echo $st; ?>";
         option.text="<?php echo $value; ?>";
         input_student.appendChild(option);
        <?php }?>
        
        input_student.name="data["+i+"][Studentroutestop][student_id]";
        container_student.appendChild(label_student);
        container_student.appendChild(input_student);
        rowcontain4.appendChild(container_student);
        container.appendChild(rowcontain4);
        
        var container_route=document.createElement("td");
        container_route.className='middle-inputtext';
        var input_route = document.createElement('select');
        var label_route=document.createElement('label');
        label_route.innerHTML="&nbsp;Route:";
        <?php foreach($route as $rt=>$value){?>
        var option=document.createElement("option");
        option.value="<?php echo $rt; ?>";
        option.text="<?php echo $value; ?>";
        input_route.appendChild(option);
        <?php }?>
        
        input_route.name="data["+i+"][Studentroutestop][route_id]";
        container_route.appendChild(label_route);
        container_route.appendChild(input_route);
        rowcontain4.appendChild(container_route);
        
        var container_stop=document.createElement("td");
        container_stop.className='middle-inputtext';
        var input_stop = document.createElement('select');
        var label_stop=document.createElement('label');
        label_stop.innerHTML="&nbsp; Stop:";
        <?php foreach($stop as $stp=>$value){?>
        var option=document.createElement("option");
        option.value="<?php echo $stp; ?>";
        option.text="<?php echo $value; ?>";
        input_stop.appendChild(option);
        <?php }?>
        
        input_stop.name="data["+i+"][Studentroutestop][stop_id]";
        container_stop.appendChild(label_stop);
        container_stop.appendChild(input_stop);
        rowcontain4.appendChild(container_stop);
        

    

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
    <table>
        <tr>
            <td class="middle-inputtext">
                <label>Student:</label>
                <select name="data[0][Studentroutestop][student_id]">
                    <option value="NULL">select</option>
                <?php foreach($student as $st=>$val){?>
                    <option value="<?php echo $st;?>"><?php echo $val;?></option>
                <?php }?>
               </select>
            </td>
            <td width="400">
                
            </td>
            <td class="middle-inputtext">
                <label>Route:</label>
                <select name="data[0][Studentroutestop][route_id]" id="route">
                    <option value="NULL">select</option>
                <?php foreach($route as $rt=>$val){?>
                    <option value="<?php echo $rt;?>"><?php echo $val;?></option>
                <?php }?>
               </select>
            </td>
            
            <?php $data = $this->Js->get('#route')->serializeForm(array('isForm' => true, 'inline' => true));
                                  
                                  $this->Js->get('#route')->event(
                                  'change',
                                  $this->Js->request(
                                  array('action' => 'show_stops', 'controller' => 'Studentroutestops'),
                                  array(
                                  'update' => '#show_stops',
                                  'data' => $data,
                                  'async' => true,    
                                  'dataExpression'=>true,
                                  'method' => 'POST'
                                )
                            )
                            );
                        ?>
        </tr>
    
    <br>
    <br>
    
        <tr>
            <td></td>
            <td align="center" id="show_stops" class="middle-inputtext"></td>
            <td></td>
        </tr>
    </table>
    
    <table id="new">
        
    </table>
    <div>
         <?php echo $this->Form->input('Save And Continue',array('type'=>'submit','class'=>'form_button'));?>
    </div>
</div>
</div>