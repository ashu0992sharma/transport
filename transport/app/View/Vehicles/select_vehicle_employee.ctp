<div class="main_content">
<div class="formc">
             <?php echo $this->Form->create('Vehicle',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
                ?>
    <div class="middle-inputtext">
        <label>Select A Vehicle:</label>
        <select name="vehicle">
            <option value="NULL">select</option>
             <?php foreach($vehicle as $veh=>$val){?>
            <option value='<?php echo $veh;?>'><?php echo $val;?></option>
             <?php }?>
            <option value="a">All</option>
            </select> 
    </div>
    <?php echo $this->Form->input(' Continue ',array('class'=>'form_button','type'=>'submit'));?>
</div>
</div>