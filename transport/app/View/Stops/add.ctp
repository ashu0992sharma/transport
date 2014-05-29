  <style>
  #mapCanvas {
    width: 750px;
    height: 300px;
    
    margin-right: 20px;
    border: 2px solid;
        
  }
  
  </style>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();

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

function updateMarkerStatus(str) {
 // document.getElementById('markerStatus').innerHTML = str;
}

function updateMarkerPosition(latLng) {
    
 
  document.getElementById('lat').value=latLng.lat();
  document.getElementById('long').value=latLng.lng();
}

function updateMarkerAddress(str) {
  document.getElementById('address').innerHTML = str;
}

function initialize() {
  var latLng = new google.maps.LatLng(28.5700, 77.3200);
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
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
  updateMarkerPosition(latLng);
  geocodePosition(latLng);
  
  // Add dragging event listeners.
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Dragging...');
  });
  
  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Dragging...');
    updateMarkerPosition(marker.getPosition());
  });
  
  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Drag ended');
    geocodePosition(marker.getPosition());
  });
}

// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div align="right">
        <h3 align="right"><?php echo $this->Html->link('Edit A Stop',array('controller'=>'Stops','action'=>'edit'));?></h3>
        <br>
        <h3 align="right"><?php echo $this->Html->link('Delete A Stop',array('controller'=>'Stops','action'=>'delete'));?></h3>
    </div>
<div class="formc">
             <?php echo $this->Form->create('Stop',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
                ?>
                     <div class="form-header">
                    <b>  Stop Details   </b>
                    <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
                     </div>

<table>
                


                
                <tr>
                     <td class="middle-inputtext">
                         <label>
                             Name
                         </label>
                         <?php echo $this->Form->input('',array('name'=>'data[0][Stop][name]','type'=>'text'));?>
                     </td>
                     &nbsp;&nbsp;&nbsp;
                <tr>
                     <td class="middle-inputtext">
                         <label>
                             Address
                         </label>
                         <?php echo $this->Form->input('',array('name'=>'data[0][Stop][address]','type'=>'textarea','rows'=>2,'cols'=>50,'id'=>"address"));?>
                     </td>
                 </tr>

                     
                </tr>
                    <td class="middle-inputtext">
                         <label>
                             Latitude
                         </label>
                         <?php echo $this->Form->input('',array('name'=>'data[0][Stop][latitude]','type'=>'text','id'=>'lat'));?>
                     </td>
                     &nbsp;&nbsp;&nbsp;
                     <td class="middle-inputtext">
                         <label>
                             Longitude
                         </label>
                         <?php echo $this->Form->input('',array('name'=>'data[0][Stop][longitude]','type'=>'text','id'=>'long'));?>
                     </td>
                 </tr>
                 <tr>
                     
                 </tr>
                 <tr>
                 </tr>
             </table>
    <table id="stops">
        
    </table>
    <table>
        <tr>
            <td align="center">

                    </td>
        </tr>
    </table>
 

    
    <div id="mapCanvas"  align="center" ></div>
    <div align="center">
                          <?php echo $this->Form->input('Save And Continue',array('type'=>'submit','class'=>'form_button'));?>
    </div>
</div>

    
  