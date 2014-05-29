<div class="formc">
                     <?php echo $this->Form->create('Vehicle',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
                    ?>
    <div class="middle-inputtext" align="center">
        <label>Select Vehicle:</label>
        
        <select name='vehicle' id='select_vehicle'>
            <option value='NULL'>Select</option>
            <?php foreach($vehicles as $veh=>$val)
            {
                echo '<option value='.$veh.'>'.$val.'</option>';
            }
        ?>
        </select>
        
    </div>
    <?php echo $this->Form->input('Continue',array('class'=>'form_button','type'=>'submit'));?>
</div>