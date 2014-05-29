<div class="main_content">
<div class="formc">
                 <?php echo $this->Form->create('Stop',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
                ?>
    <div class="middle-inputtext"  align='center'>
        <label>Select Stop:</label>
        <select name="stop">
            <option value="null">select</option>
        <?php foreach($stops as $stp=>$val){?>
            <option value="<?php echo $stp;?>"><?php echo $val;?></option>
        <?php }?>
           </select>
        <br>
        <br>
        <div align="center">
            <?php echo $this->Form->input(' DELETE ',array('type'=>'submit','class'=>'form_button'));?>
        </div>
