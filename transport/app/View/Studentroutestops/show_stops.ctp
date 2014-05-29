
    <label>Stop</label>
    <?php if(empty($data[0]['Stop']))
    {
       echo 'No Stop At This Route';
    }
    else
    {
    ?>
    <div>
    
    <select name="data[0][Studentroutestop][stop_id]">
        
            
        <?php foreach($data[0]['Stop'] as $stp=>$val)
        {
            echo '<option value='.$stp.'>'.$val['name'].'</option>';
        }
        ?>
    </select>
    </div>
    
    <?php }?>
