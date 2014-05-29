

<script>
    var i;
    var j;
function route_stops(i)
{
    
    var container=document.getElementById("stops");
    
    
    var header=document.createElement('div');
    header.innerHTML="Stop Details";
    header.className="form-header";
    
    
    
    var div=document.createElement('div');
    div.appendChild(header);
    container.appendChild(div);
    
    var rowcontain4 = document.createElement('tr');
    var container_stop=document.createElement("td");
    container_stop.className='middle-inputtext';
    var input_stop = document.createElement('select');
    var label_stop=document.createElement('label');
    label_stop.innerHTML="Stop:";
    
    <?php foreach($st as $stp=>$value){?>
            
        var option=document.createElement("option");
        option.value="<?php echo $stp; ?>";
        option.text="<?php echo $value; ?>";
        input_stop.appendChild(option);
    <?php }?>
        
    input_stop.name="data[Route_stop]["+i+"][stop_id]";
    container_stop.appendChild(label_stop);
    container_stop.appendChild(input_stop);
    rowcontain4.appendChild(container_stop);
    div.appendChild(rowcontain4);
    container.appendChild(div);
    
    
    var container_lat=document.createElement("td");
    container_lat.className='middle-inputtext';
    var input2 = document.createElement('input');
    var label2=document.createElement('label');
    label2.innerHTML="Amount";
    input2.type = "text";
    
    input2.name="data[Route_stop]["+i+"][amount]";
    container_lat.appendChild(label2);
    container_lat.appendChild(input2);
    rowcontain4.appendChild(container_lat);
    div.appendChild(rowcontain4);
    container.appendChild(div);
    //container.appendChild(rowcontain4);
    
    var rowcontain3 = document.createElement("tr");
    var container_sequence=document.createElement("td");
    //container_sequence.className='middle-inputtext';
    container_sequence.className='middle-inputtext';
    var input4 = document.createElement('input');
    var label4=document.createElement('label');
    label4.innerHTML="Sequence";
    input4.name="data[Route_stop]["+i+"][sequence]";
    container_sequence.appendChild(label4);
    container_sequence.appendChild(input4);
    rowcontain3.appendChild(container_sequence);
    div.appendChild(rowcontain3);
    container.appendChild(div);
    //container.appendChild(rowcontain3);
    
    var container_stoppage=document.createElement("td");
    container_stoppage.className='middle-inputtext';
    var input5 = document.createElement('input');
    var label5=document.createElement('label');
    label5.innerHTML="Stoppage Time";
    input5.name="data[Route_stop]["+i+"][stoppage_time]";
    container_stoppage.appendChild(label5);
    container_stoppage.appendChild(input5);
    rowcontain3.appendChild(container_stoppage);
    div.appendChild(rowcontain3);
    container.appendChild(div);
    //container.appendChild(rowcontain3);
    
    var rowcontain5 = document.createElement('tr');
    var container_arrival=document.createElement("td");
    container_arrival.className='middle-inputtext';
    var input6 = document.createElement('input');
    var label6=document.createElement('label');
    label6.innerHTML="Arrival Time";
    input6.name="data[Route_stop]["+i+"][arrival_time]";
    container_arrival.appendChild(label6);
    container_arrival.appendChild(input6);
    rowcontain5.appendChild(container_arrival);
    div.appendChild(rowcontain5);
    container.appendChild(div);
    //container.appendChild(rowcontain5);
    
    
     var container_button=document.createElement("td");
        container_button.className ='row_but';
        var button_X = document.createElement("button");
        var t = document.createTextNode("X");
    button_X.type="button"; 
        button_X.className="row_but";
    button_X.appendChild(t); 
        button_X.onclick=function(){
          container.removeChild(div);
          i=i-1;
    };
    
        container_button.appendChild(button_X);
        
        rowcontain5.appendChild(container_button);
        div.appendChild(rowcontain5);
        container.appendChild(div);
           
}

function vehicle_routes(j)
{
    
    var container=document.getElementById("vehicle");
    
    var header=document.createElement('div');
    header.innerHTML="Vehicle Details";
    header.className="form-header";
    
    var div=document.createElement('div');
    div.appendChild(header);
    container.appendChild(div);
    //container.appendChild(header);
    
    var rowcontain4 = document.createElement('tr');
    var container_vehicle=document.createElement("td");
    container_vehicle.width="400px";
    container_vehicle.className='middle-inputtext';
    var input_vehicle = document.createElement('select');
    var label_vehicle=document.createElement('label');
    label_vehicle.innerHTML="Vehicle";
    
    <?php foreach($vehicle as $v=>$val){?>
            
        var option=document.createElement("option");
        option.value="<?php echo $v; ?>";
        option.text="<?php echo $val; ?>";
        input_vehicle.appendChild(option);
    <?php }?>
    input_vehicle.name="data[VehiclesRoute]["+j+"][vehicle_id]";
    container_vehicle.appendChild(label_vehicle);
    container_vehicle.appendChild(input_vehicle);
    
    rowcontain4.appendChild(container_vehicle);
    div.appendChild(rowcontain4);
    container.appendChild(div);
    
    var container_long=document.createElement("td");
    container_long.className='middle-inputtext';
    container_long.width="500px";
    var input3 = document.createElement('input');
    var label3=document.createElement('label');
    label3.innerHTML="Capacity";
    input3.type = "text";
    input3.name="data[VehiclesRoute]["+j+"][capacity]";
    container_long.appendChild(label3);
    container_long.appendChild(input3);
    rowcontain4.appendChild(container_long);
    div.appendChild(rowcontain4);
    container.appendChild(div);
    
    var rowcontain1 = document.createElement('tr');
    var container_name=document.createElement("td");
    container_name.className='middle-inputtext';
    var input1 = document.createElement('input');
    var label1=document.createElement('label');
    label1.innerHTML="Start Time";
    input1.type = "text";
    input1.name="data[VehiclesRoute]["+j+"][start_time]";
    container_name.appendChild(label1);
    container_name.appendChild(input1);
    rowcontain1.appendChild(container_name);
    div.appendChild(rowcontain1);
    container.appendChild(div);
    
    
    
    var container_lat=document.createElement("td");
    container_lat.width="400px";
    container_lat.className='middle-inputtext';
    var input2 = document.createElement('input');
    var label2=document.createElement('label');
    label2.innerHTML="End Time";
    input2.type = "text";
    input2.name="data[VehiclesRoute]["+j+"][end_time]";
    container_lat.appendChild(label2);
    container_lat.appendChild(input2);
    rowcontain1.appendChild(container_lat);
    div.appendChild(rowcontain1);
    container.appendChild(div);
    //container.appendChild(rowcontain1);
    
    
     var container_button=document.createElement("td");
        container_button.className ='row_but';
        var button_X = document.createElement("button");
        var t = document.createTextNode("X");
    button_X.type="button"; 
        button_X.className="row_but";
    button_X.appendChild(t); 
        button_X.onclick=function(){
          container.removeChild(div);
          j=j-1;
    };
    
        container_button.appendChild(button_X);
        rowcontain1.appendChild(container_button);
        
        div.appendChild(rowcontain1);
        container.appendChild(div);
    
    
    
    j++;
}
function remove_stop(k)
{
    
    var element = document.getElementById("stop_"+k);
    element.parentNode.removeChild(element);
    document.getElementById("header_"+k).style.display="none";
}

</script>
<?php if(!empty($route[0]['Route'])){?>
<div class="main_content">
<div class="formc">
             <?php echo $this->Form->create('Route',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
                ?>
                     <div class="form-header">
                    <b>  Route Details   </b>
                    <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
                     </div>
    <br>
    
    <div class="middle-inputtext">
        <label>Name</label>
        <?php echo $this->Form->input('name',array('type'=>'text','value'=>$route[0]['Route']['name'])) ?>
    </div>
    <br>
    <br>
    <div align='left' width='100px'>
    <label>From Location: </label>
    <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
    </div>
    <div class="middle-inputtext">
        <label>From Latitude</label>
        <?php echo $this->Form->input('from_latitude',array('type'=>'text','value'=>$route[0]['Route']['from_latitude'])) ?>
    </div>
    <div class="middle-inputtext">
        <label>From Longitude</label>
        <?php echo $this->Form->input('from_longitude',array('type'=>'text','value'=>$route[0]['Route']['from_longitude'])) ?>
    </div>
    <div class="middle-inputtext">
        <label>From Address</label>
        <?php echo $this->Form->input('from_address',array('type'=>'text','value'=>$route[0]['Route']['from_address'])) ?>
    </div>
    <br>
    <br>
    <div align='left' width='100px'>
        
    <label>To Location: </label>
    <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
    </div>
    <div class="middle-inputtext">
        <label>To Latitude</label>
        <?php echo $this->Form->input('to_latitude',array('type'=>'text','value'=>$route[0]['Route']['to_latitude'])) ?>
    </div>
    <div class="middle-inputtext">
        <label>To Latitude</label>
        <?php echo $this->Form->input('to_longitude',array('type'=>'text','value'=>$route[0]['Route']['to_longitude'])) ?>
    </div>
    <div class="middle-inputtext">
        <label>To Address</label>
        <?php echo $this->Form->input('to_address',array('type'=>'text','value'=>$route[0]['Route']['to_address'])) ?>
    </div>
    <div>
    <?php if(!empty($route[0]['Stop'][0]['RoutesStop']))
    {
        $i=0;
        foreach($route[0]['Stop'] as $stp)
        {
              echo $this->Form->create('Stop',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
              
              echo '<div class="form-header" id="header_'.$i.'">';
              echo '  <b>  Stop Details   </b>';
              echo '<hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>';
              echo '</div>';
              echo '<table id="stop_'.$i.'" >';
              echo '<div >';
              echo '<tr><td class="middle-inputtext">';
              echo '<label>Stop</label>';
              echo '<select name="data[RoutesStop]['.$i.'][stop_id]">';
              echo '<option value='.$stp['name'].'>'.$stp['name'].'</option>';
              foreach($st as $stop=>$val)
              {
                  echo '<option value='.$stop.'>'.$val.'</option>';
              }
              echo '</select></td>';
              echo '<td class="middle-inputtext">';
              echo '<label>Amount</label>';
              echo '<input type="text" name="data[RoutesStop]['.$i.'][amount]" value='.$stp['RoutesStop']['amount'].'>';
              echo '</td></tr>';
              echo '<tr><td class="middle-inputtext">';
              echo '<label>Sequence</label>';
              echo '<input type="text" name="data[RoutesStop]['.$i.'][sequence]" value='.$stp['RoutesStop']['sequence'].'></td>';
              echo '<td class="middle-inputtext">';
              echo '<label>Stoppage Time</label>';
              echo '<input type="textarea"  rows="3" cols="20" name="data[RoutesStop]['.$i.'][stoppage_time]" value='.$stp['RoutesStop']['stoppage_time'].'>';
              echo '</td></tr>';
              echo '<tr><td class="middle-inputtext">';
              echo '<label>Arrival Time</label>';
              echo '<input type="text" name="data[RoutesStop]['.$i.'][arrival_time]" value='.$stp['RoutesStop']['arrival_time'].'></td>';
              echo '<td>';
              echo '<button type="button" class="form_button" onclick=javascript:remove_stop("'.$i.'")> X </button>';
              echo '</div>';
              echo '</table>';
              
              $i++;
        }
        echo '<table id="stops">';
        echo '</table>';
        echo '<input type="button" onclick="route_stops('.$i.')" class="add_ExpenseRow" value="add more stops"/> ';
    }
    ?>
        </div>
    <br>
    
    
    <div>
        <?php if(!empty($route[0]['Vehicle'][0]['VehiclesRoute']))
    {
        $i=0;
        foreach($route[0]['Vehicle'] as $veh)
        {
              echo $this->Form->create('VehiclesRoute',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
              echo '<div class="form-header">';
              echo '  <b>  Vehicle Details   </b>';
              echo '<hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>';
              echo '</div>';
              echo '<table>';
              echo '<tr><td class="middle-inputtext">';
              echo '<label>Name</label>';
              echo '<select name="data[VehiclesRoute]['.$i.'][vehicle_id]">';
              echo '<option value='.$veh['name'].'>'.$veh['name'].'</option>';
              foreach($vehicle as $vehc=>$val)
              {
                  echo '<option value='.$vehc.'>'.$val.'</option>';
              }
              echo '</select></td>';
              echo '<td class="middle-inputtext">';
              echo '<label>Capacity</label>';
              echo '<input type="text" name="data[VehiclesRoute]['.$i.'][capacity]" value='.$veh['VehiclesRoute']['capacity'].'>';
              echo '</td></tr>';
              echo '<tr><td class="middle-inputtext">';
              echo '<label>Start Time</label>';
              echo '<input type="text" name="data[VehiclesRoute]['.$i.'][start_time]" value='.$veh['VehiclesRoute']['start_time'].'></td>';
              echo '<td class="middle-inputtext">';
              echo '<label>End Time</label>';
              echo '<input type="text" name="data[VehiclesRoute]['.$i.'][end_time]" value='.$veh['VehiclesRoute']['end_time'].'>';
              echo '</td></tr>';
              
              $i++;
        }
        echo '<table id="vehicle">';
        echo '</table>';
        echo '<input type="button" onclick="vehicle_routes('.$i.')" class="add_ExpenseRow" value="add more vehicles"/> ';
    }
    ?>
        </div>
    <div align="center">
                          <?php echo $this->Form->input('Save And Continue',array('type'=>'submit','class'=>'form_button'));?>
    </div>
    </div>
  </div>
<?php }?>