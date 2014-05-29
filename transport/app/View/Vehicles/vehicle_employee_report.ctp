


<script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
        
      google.load('visualization', '1', {packages:['table']});
      google.setOnLoadCallback(drawTable);
      function drawTable() {
        var data = new google.visualization.DataTable();
        
        data.addColumn('string', 'Vehicle');
        data.addColumn('string', 'Employee');
        data.addColumn('string', 'Designation');
        
        <?php $j=0; foreach($data as $veh){?>
        data.addRows([
          ['<?php echo $veh;?>'  ,
          '<?php echo $vehicle[$j]['VehiclesEmployee']['name'];?>','<?php echo $vehicle[$j]['VehiclesEmployee']['designation'];?>'
        ],
        ]);
               
        <?php  $j+=1;}?>
        var table = new google.visualization.Table(document.getElementById('div1'));
        table.draw(data, {showRowNumber: true});
      }
    </script>
    
    <div></div>
    <div class="main_content">
        
 <div id="div1"></div>
 </div>