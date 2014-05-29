


<script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
        
      google.load('visualization', '1', {packages:['table']});
      google.setOnLoadCallback(drawTable);
      function drawTable() {
        var data = new google.visualization.DataTable();
        
        data.addColumn('string', 'Student');
        data.addColumn('string', 'Route');
        data.addColumn('string', 'Stop');
        
        <?php $i=0; foreach($student as $val){ if((!empty($route[$i][0]['Route']) && (!empty($stop[$i][0]['Stop']['name'])))){?>
        
        
        data.addRows([
          ['<?php echo $val[0]['Student']['first_name'].' '.$val[0]['Student']['last_name'];?>'  ,
          '<?php echo $route[$i][0]['Route']['name'];?>','<?php echo $stop[$i][0]['Stop']['name'];?>'
        ],
        ]);
               
        <?php  $i++;}}?>
        var table = new google.visualization.Table(document.getElementById('div1'));
        table.draw(data, {showRowNumber: true});
      }
    </script>

    <div></div>
    <div class="main_content">
        
 <div id="div1"></div>
 </div>