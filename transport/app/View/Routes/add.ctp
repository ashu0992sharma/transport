<style>
  #map_from {
    width: 400px;
    height: 200px;
    
    margin-top:  50px;
    border: 2px solid;
        
  }
  
  </style>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();


function updateMarkerAddress1(str) {
    
  document.getElementById('from_address').value = str;
}

function geocodePosition1(pos) {
  
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
        
      updateMarkerAddress1(responses[0].formatted_address);
    } else {
      updateMarkerAddress1('Cannot determine address at this location.');
    }
  });
}



function initialize() {
  var latLng = new google.maps.LatLng('28.5700', '77.3200');
  var map = new google.maps.Map(document.getElementById('map_from'), {
    zoom: 15,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
    draggable: true
  });
  
  // Update current position info.
  
  // Add dragging event listeners.
  
  
  google.maps.event.addListener(marker, 'dragend', function (event) {
    document.getElementById("from_lat").value = this.getPosition().lat();
    document.getElementById("from_long").value = this.getPosition().lng();
        geocodePosition1(marker.getPosition());
});
}

// Onload handler to fire off the app.

google.maps.event.addDomListener(window, 'load', initialize);

</script>

<style>
  #map_to {
    width: 400px;
    height: 200px;
    
    margin-top:  50px;
    border: 2px solid;
        
  }
  
  </style>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();


function updateMarkerAddress(str) {
    
  document.getElementById('to_address').value = str;
}

function geocodePosition(pos) {
  
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
        
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('Cannot determine address at this location.');
    }
  });
}



function initialize1() {
  var latLng = new google.maps.LatLng('28.5700', '77.3200');
  var map = new google.maps.Map(document.getElementById('map_to'), {
    zoom: 15,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
    draggable: true
  });
  
  // Update current position info.
  
  // Add dragging event listeners.
  
  
  google.maps.event.addListener(marker, 'dragend', function (event) {
    document.getElementById("to_lat").value = this.getPosition().lat();
    document.getElementById("to_long").value = this.getPosition().lng();
        geocodePosition(marker.getPosition());
});
}

// Onload handler to fire off the app.

google.maps.event.addDomListener(window, 'load', initialize1);

</script>


<script>

var i=1;
var j=1;


function  route_stops()
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
function vehicle_routes()
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
    
    <?php foreach($veh as $v=>$val){?>
            
        var option=document.createElement("option");
        option.value="<?php echo $v; ?>";
        option.text="<?php echo $val; ?>";
        input_vehicle.appendChild(option);
    <?php }?>
    input_vehicle.name="data[Vehicle_route]["+j+"][vehicle_id]";
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
    input3.name="data[Vehicle_route]["+j+"][capacity]";
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
    input1.name="data[Vehicle_route]["+j+"][start_time]";
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
    input2.name="data[Vehicle_route]["+j+"][end_time]";
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

</script>
<div id="content"></div>
<div class="main_content">
    <div align="right">
        <h3 align="right"><?php echo $this->Html->link('Edit A Route',array('controller'=>'Routes','action'=>'edit'));?></h3>
    </div>
    <div class="formc">
        
         <?php echo $this->Form->create('Route',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
                ?>
        <div class="form-header">
            <b>  Routes Details   </b>
         </div>
         <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
    
         <table>
             <tr>
                 <td class="middle-inputtext">
                     <label>
                         Name
                     </label>
                     <?php echo $this->Form->input('',array('name'=>'data[Route][name]','type'=>'text'));?>
                 </td>
             
             </tr>
             <tr height="20px"></tr>
             <tr>
                 <td>
                     <label>
                         Location From:
                     </label>
                     <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>  
                 </td>
             </tr>
             <tr>
                 
                 <td class="middle-inputtext">
                     
                     <label>Latitude</label>
                     <?php echo $this->Form->input('',array('name'=>'data[Route][from_latitude]','type'=>'text','id'=>'from_lat'));?>
                     <br>
                     <br>
                     <br>
                     <label>Longitude</label>
                     <?php echo $this->Form->input('',array('name'=>'data[Route][from_longitude]','type'=>'text','id'=>'from_long'));?>
                     <br>
                     <br>
                     <br>
                     <label>Address</label>
                     <?php echo $this->Form->input('',array('name'=>'data[Route][from_address]','type'=>'textarea','rows'=>'5','cols'=>'20', 'id'=>'from_address'));?>

                 </td>
                 <td width="20px"></td>
                 <td id="map_from">
                     
                 </td>
             </tr>
             <tr height="20px">
             <tr>
                 
                 <td>
                     <label>
                         Location To:
                     </label>
                     <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>  
                 </td>
             </tr>
             <tr>
                 
                 <td class="middle-inputtext">
                     
                     <label>Latitude</label>
                     <?php echo $this->Form->input('',array('name'=>'data[Route][to_latitude]','type'=>'text','id'=>'to_lat'));?>
                     <br>
                     <br>
                     <br>
                     <label>Longitude</label>
                     <?php echo $this->Form->input('',array('name'=>'data[Route][to_longitude]','type'=>'text','id'=>'to_long'));?>
                     <br>
                     <br>
                     <br>
                     <label>Address</label>
                     <?php echo $this->Form->input('',array('name'=>'data[Route][to_address]','type'=>'textarea','rows'=>'5','cols'=>'20', 'id'=>'to_address'));?>

                 </td>
                 <td width="20px"></td>
                 <td id="map_to">
                     
                 </td>
             </tr>
             
             
         </table>
         <div id="from_map" style="display: none"></div>
         <table id="stops"> 
             <tr>
                    <div class="form-header">
                    <b> Stop Details   </b>
                    </div>
                    <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
            </tr>
            <tr>
                <td class="middle-inputtext">
                    <label>Stop:</label>
                    <select name="data[Route_stop][0][stop_id]">
                        <?php foreach($st as $stp=>$value){?>
                        <option value="<?php echo $stp;?>"><?php echo $value;?></option>
                        <?php }?>
                    </select>
                </td>
                <td class="middle-inputtext">
                    <label>Amount</label>
                    <?php echo $this->Form->input('',array('name'=>'data[Route_stop][0][amount]','type'=>'text'));?>
                </td>
            </tr>
            <tr>
                <td class="middle-inputtext">
                    <label>Sequence</label>
                    <?php echo $this->Form->input('',array('name'=>'data[Route_stop][0][sequence]','type'=>'text'));?>
                </td>
                <td class="middle-inputtext">
                    <label>Stoppage Time</label>
                    <?php echo $this->Form->input('',array('name'=>'data[Route_stop][0][stoppage_time]','type'=>'text'));?>
                </td>
            </tr>
            <tr>
                <td class="middle-inputtext">
                    <label>Arrival Time</label>
                    <?php echo $this->Form->input('',array('name'=>'data[Route_stop][0][arrival_time]','type'=>'text'));?>
                </td>
                
            </tr>
         </table>
         <table id="stops">
             
             </table>
         <table>
             <tr>
                <td align="center">
                    <?php   echo '<a onclick="route_stops()" class="add_ExpenseRow" >Add Stops</a>'; ?>
                </td>

             </tr>
         </table>
         <table id="vehicle">
             <tr>
                    <div class="form-header">
                    <b> Vehicle Details   </b>
                </div>
                <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
                     <td class="middle-inputtext">
                         <label>
                             Vehicle
                         </label>
                         
                    <select name="data[Vehicle_route][0][vehicle_id]">
                        <?php foreach($veh as $vh=>$vl){?>
                        <option value="<?php echo $vh;?>"><?php echo $vl;?></option>
                        <?php }?>
                    </select>
                     </td>
                     <td class="middle-inputtext">
                         <label>
                             Capacity
                         </label>
                         <?php echo $this->Form->input('',array('name'=>'data[Vehicle_route][0][capacity]','type'=>'text'));?>
                     </td>
             </tr>
             <tr>
                     <td class="middle-inputtext">
                         <label>
                             Start Time
                         </label>
                         <?php echo $this->Form->input('',array('name'=>'data[Vehicle_route][0][start_time]','type'=>'text'));?>
                     </td>
                     <td class="middle-inputtext">
                         <label>
                             End Time
                         </label>
                         <?php echo $this->Form->input('',array('name'=>'data[Vehicle_route][0][end_time]','type'=>'text'));?>
                     </td>
             </tr>
         </table>
         <table>
             
             <tr height="30px"></tr>
             <tr>
                 
                
                <td align="center">
                    <?php   echo '<a onclick="vehicle_routes()" class="add_ExpenseRow" >Add Vehicle_Routes</a>'; ?>
                </td>
                <td width="200px"></td>
                <td>
                    <?php echo $this->Form->input('Save And Continue',array('type'=>'submit','class'=>'form_button'));?>
                </td>
            </tr>
         </table>
    </div>
</div>