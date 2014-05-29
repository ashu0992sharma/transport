


<script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
        
      google.load('visualization', '1', {packages:['table']});
      google.setOnLoadCallback(drawTable);
      function drawTable() {
        var data = new google.visualization.DataTable();
        
        data.addColumn('string', 'Route');
        data.addColumn('string', 'From');
        data.addColumn('string', 'To');
        data.addColumn('string', 'Vehicle');
        <?php foreach($routes as $rt){?>
                <?php if(empty($rt['Vehicle'])){?>
                          data.addRows([
          ['<?php echo $rt['Route']['name'];?>'  ,
          '<?php echo $rt['Route']['from_address'];?>','<?php echo $rt['Route']['to_address'];?>','<?php echo 'NO VEHICLE AT THIS ROUTE ';?>'],
        ]);
                <?php }?>
                <?php foreach($rt['Vehicle'] as $veh=>$val){?>
              
        data.addRows([
          ['<?php echo $rt['Route']['name'];?>'  ,
          '<?php echo $rt['Route']['from_address'];?>','<?php echo $rt['Route']['to_address'];?>','<?php echo $val['name'];?>'],
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