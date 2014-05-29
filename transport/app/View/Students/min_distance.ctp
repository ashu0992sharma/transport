<style>

    
      #content-pane {
        float:center;
        width:48%;
        padding-left: 2%;
      }
      #outputDiv {
        font-size: 11px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
var map;
var geocoder;
var bounds = new google.maps.LatLngBounds();
var markersArray = [];

var origin1 = new google.maps.LatLng(<?php echo $student['Student']['latitude']?>,<?php echo $student['Student']['longitude']?>);
var destination=[];
var stop_distance=[];
var stop_duration=[];
var i=0;
<?php  $i=0;foreach($stop as $stp){?>
destination[<?php echo $i ?>] = new google.maps.LatLng(<?php echo $stp['Stop']['latitude']?>,<?php echo $stp['Stop']['longitude']?>);
<?php $i++;}?>
var destinationIcon = 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=D|FF0000|000000';
var originIcon = 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=O|FFFF00|000000';

function initialize() {
  var opts = {
    center: new google.maps.LatLng(55.53, 9.4),
    zoom: 10
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), opts);
  geocoder = new google.maps.Geocoder();
}

function calculateDistances() {
  var service = new google.maps.DistanceMatrixService();
  service.getDistanceMatrix(
    {
      origins: [origin1],
      destinations: [
              <?php $i=0;foreach($stop as $stp){ ?>
              destination[<?php echo $i?>],
              <?php $i++;}?>],
      travelMode: google.maps.TravelMode.DRIVING,
      unitSystem: google.maps.UnitSystem.METRIC,
      avoidHighways: false,
      avoidTolls: false
    }, callback);
}

function display(stop_distance)
{
    var table=document.createElement("table");
    var outputDiv = document.getElementById('outputDiv');
    outputDiv.innerHTML = '';
        var row=document.createElement("tr");
        var col1=document.createElement("td");
        col1.className='middle-inputtext';
        var label1=document.createElement("h1");
        label1.innerHTML='Stops';
        var col2=document.createElement("td");
        col2.className='middle-inputtext';
        var label2=document.createElement("h1");
        label2.innerHTML='Distance';
        var col3=document.createElement("td");
        col3.className='middle-inputtext';
        var label3=document.createElement("h1");
        label3.innerHTML='Duration <br>';
        col3.appendChild(label3);
        col1.appendChild(label1);
        col2.appendChild(label2);
        row.appendChild(col1);
        row.appendChild(col2);
        row.appendChild(col3);
        table.appendChild(row);
        outputDiv.appendChild(table);
    
    <?php $i=0;foreach($stop as $stp){?>
        var row=document.createElement("tr");
        var col1=document.createElement("td");
        col1.className='middle-inputtext';
        var label1=document.createElement("label");
        label1.innerHTML='<?php  echo $stp['Stop']['name']?>';
        var col2=document.createElement("td");
        col2.className='middle-inputtext';
        var label2=document.createElement("label");
        label2.innerHTML=stop_distance[<?php echo $i?>];
        var col3=document.createElement("td");
        col3.className='middle-inputtext';
        var label3=document.createElement("label");
        label3.innerHTML=stop_duration[<?php echo $i?>];
        col3.appendChild(label3);
        col1.appendChild(label1);
        col2.appendChild(label2);
        row.appendChild(col1);
        row.appendChild(col2);
        row.appendChild(col3);
        table.appendChild(row);
        outputDiv.appendChild(table);
    <?php $i++;}?>
    
}
function callback(response, status) {
  if (status != google.maps.DistanceMatrixStatus.OK) {
    alert('Error was: ' + status);
  } 
  
  else {
    var origins = response.originAddresses;
    var destinations = response.destinationAddresses;
    var outputDiv = document.getElementById('outputDiv');
    outputDiv.innerHTML = '';
    deleteOverlays();
    
    for (var i = 0; i < origins.length; i++) {
      var results = response.rows[i].elements;
      var k=0;
      //addMarker(origins[i], false);
      for (var j = 0; j < results.length; j++) {
        //addMarker(destinations[j], true);
        
        stop_distance[k]=results[j].distance.text;
        stop_duration[k]=results[j].duration.text;
        
        outputDiv.innerHTML += origins[i] + ' to ' + destinations[j]
            + ': ' + results[j].distance.text + ' in '
            + results[j].duration.text + '<br>';
    k++;
      }
      
    }
    
    display(stop_distance);
  }
  
}
var timeout=200;
function addMarker(location, isDestination) {
  var icon;
  if (isDestination) {
    icon = destinationIcon;
  } else {
    icon = originIcon;
  }
  geocoder.geocode({'address': location}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      bounds.extend(results[0].geometry.location);
      map.fitBounds(bounds);
      var marker = new google.maps.Marker({
        map: map,
        position: results[0].geometry.location,
        icon: icon
      });
      markersArray.push(marker);
    }
    else if(google.maps.GeocoderStatus.OVER_QUERY_LIMIT){
        setTimeout(function(){},300);
    }
     
    
    else {
      alert('Geocode was not successful for the following reason: '
        + status);
    }
  });
}

function deleteOverlays() {
  for (var i = 0; i < markersArray.length; i++) {
    markersArray[i].setMap(null);
  }
  markersArray = [];
}

google.maps.event.addDomListener(window, 'load', calculateDistances);    
</script>
<div class="formc">
<div id="content-pane">
      <div id="inputs">
        <pre>
        </pre>


      </div>
        <div id="outputDiv">
              
    </div>
    </div>
    <div id="map-canvas"></div>
    </div>