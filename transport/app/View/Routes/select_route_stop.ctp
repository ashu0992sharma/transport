<div class="main_content">
<div class="formc">
             <?php echo $this->Form->create('Route',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
                ?>
    <div class="middle-inputtext">
        <label>Select A Route:</label>
        <select name="route">
            <option value="NULL">select</option>
             <?php foreach($route as $rt=>$val){?>
            <option value='<?php echo $rt;?>'><?php echo $val;?></option>
             <?php }?>
            <option value="a">All</option>
            </select> 
    </div>
    <?php echo $this->Form->input(' Continue ',array('class'=>'form_button','type'=>'submit'));?>
</div>
</div>