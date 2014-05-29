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


<div class="main_content">
<div class="formc">
             <?php echo $this->Form->create('Student',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
                ?>
    <div class="middle-inputtext">
        <label>Select A Student:</label>
        <select name="student">
            <option value="NULL">select</option>
             <?php foreach($student as $st=>$val){?>
            <option value='<?php echo $st;?>'><?php echo $val;?></option>
             <?php }?>
            
            </select> 
    </div>
    <div class="middle-inputtext">
        
        <?php echo $this->form->input('latitude',array('id'=>'lat'));?>
    </div>
    <div class="middle-inputtext">
        
        <?php echo $this->form->input('longitude',array('id'=>'long'));?>
    </div>
    <div class="middle-inputtext">
        
        <?php echo $this->form->input('address',array('type'=>'textarea','rows'=>2,'cols'=>50,'id'=>"address"));?>
    </div>
    <div id="mapCanvas"  align="center" ></div>
    
    <?php echo $this->Form->input(' Continue ',array('class'=>'form_button','type'=>'submit'));?>
    
</div>
</div>