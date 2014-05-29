<div class="main_content">
    <div class="formc">
        
         <?php echo $this->Form->create('Odometerreading',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
                ?>
        <div class="form-header">
             <b>  Odometer Details   </b>
         </div>
                    <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
        <div class="middle-inputtext">
            <label>Vehicle</label>
            <?php echo $this->Form->input('vehicle',array('name'=>'data[Odometerreading][vehicle_id]'));?>
        </div>
        <div class="middle-inputtext">
            <label>Odometer Value</label>
            <?php echo $this->Form->input('',array('name'=>'data[Odometerreading][value]','type'=>'text'));?>
        </div>
        <div class="middle-inputtext">
            <label>Date</label>
            <?php echo $this->Form->input('',array('name'=>'data[Odometerreading][date]','type'=>'text','class'=>'datepicker'));?>
        </div>
        <br/>
        <br/>
        <div >
            <?php echo $this->Form->input('Save and Continue',array('type'=>'submit','class'=>'form_button'));?>
        </div>
    </div>
</div>