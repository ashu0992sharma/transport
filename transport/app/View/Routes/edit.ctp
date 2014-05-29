<div class="main_content">
<div class="formc">
                 <?php echo $this->Form->create('Route',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
                ?>
    <div class="middle-inputtext"  align='center'>
        <label>Select Route:</label>
        
        
        <select name='route'>
            <option value='NULL'>Select</option>
       <?php foreach($routes as $rt=>$val)
        {
           echo '<option value='.$rt.'>'.$val.'</option>';
        }
        ?>
        </select>
    </div>
    <div align='center'>
    <?php echo $this->Form->input('Continue',array('class'=>'form_button','type'=>'submit'));?>
     </div>
</div>
</div>