


<script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
        
      google.load('visualization', '1', {packages:['table']});
      google.setOnLoadCallback(drawTable);
      function drawTable() {
        var data = new google.visualization.DataTable();
        
        data.addColumn('string', 'Route');
        data.addColumn('string', 'From');
        data.addColumn('string', 'To');
        data.addColumn('string', 'Stop');
        data.addColumn('string', 'Arrival Time ');
        data.addColumn('string', 'Stoppage Time');
        <?php foreach($routes as $rt){?>
                <?php if(empty($rt['Stop'])){?>
          data.addRows([
          ['<?php echo $rt['Route']['name'];?>'  ,
          '<?php echo $rt['Route']['from_address'];?>','<?php echo $rt['Route']['to_address'];?>','<?php echo 'No Stop';?>',
          '<?php echo '  ';?>','<?php echo ' ';?>'
        ]
        ]);
                <?php }?>
                <?php foreach($rt['Stop'] as $stp=>$val){?>
              
        data.addRows([
          ['<?php echo $rt['Route']['name'];?>'  ,
          '<?php echo $rt['Route']['from_address'];?>','<?php echo $rt['Route']['to_address'];?>','<?php echo $val['name'];?>',
          '<?php echo $val['RoutesStop']['arrival_time'];?>','<?php echo $val['RoutesStop']['stoppage_time'];?>'
        ],
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