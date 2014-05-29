<div class="formc">
             <?php echo $this->Form->create('Student',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
                ?>
    <div class="middle-inputtext">
        <label>Select A Student:</label>
        <select name="student">
            <option value="NULL">select</option>
             <?php foreach($student as $st=>$val){?>
            <option value='<?php echo $st;?>'><?php echo $val;?></option>
             <?php }?>
            
        </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label>Select A Route:</label>
        <select name="route">
            <option value="NULL">select</option>
             <?php foreach($route as $rt=>$val){?>
            <option value='<?php echo $rt;?>'><?php echo $val;?></option>
             <?php }?>
            
            </select> 
    </div>
    <br>
    <br>
    <div align="center">
        <?php echo $this->Form->input(' Continue ',array('class'=>'form_button','type'=>'submit'));?>   
        </div>
</div>