


<script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['table']});
      google.setOnLoadCallback(drawTable);
      function drawTable() {
        var data = new google.visualization.DataTable();
        
        data.addColumn('string', 'Vehicle');
        data.addColumn('string', 'Route');
        data.addColumn('string', 'Start Time');
        data.addColumn('string', 'End Time');
        <?php foreach($vehicle as $veh){?>
                <?php if(empty($veh['Route'])){?>
                          data.addRows([
          ['<?php echo $veh['Vehicle']['name'];?>'  ,
          '<?php echo 'NOT AT ANY ROUTE ';?>','<?php echo '';?>','<?php echo '';?>'],
        ]);
                <?php }?>
                <?php foreach($veh['Route'] as $rt=>$val){?>
              
        data.addRows([
          ['<?php echo $veh['Vehicle']['name'];?>'  ,
          '<?php echo $val['name'];?>','<?php echo $val['VehiclesRoute']['start_time'];?>','<?php echo $val['VehiclesRoute']['end_time'];?>'],
        ]);
        <?php }?>
        <?php }?>
        var table = new google.visualization.Table(document.getElementById('div1'));
        table.draw(data, {showRowNumber: true});
      }
    </script>
    <div align="right">
        <?php echo $this->Html->link('Vehicle Detail In Excel',array(
            'ext'=>'xls',
            'controller'=>'Vehicles',
            'action'=>'vehicle_excel'));
            ?>
    </div>
    <div></div>
    <div class="main_content">
 <div id="div1"></div>
 </div>