<div class="main_content">
    <div class="formc">
        
         <?php echo $this->Form->create('Servicetype',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
                ?>
        <table>
            <tr>
            <td width="400px">
            <div class="form-header">
                <b>  Service Details   </b>
            </div>
            <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
            </td>
            <td width="400px">                
               <div class="form-header">
                <b>  Odometer Details   </b>
               </div>
               <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
            </td>
            </tr>
            <tr>
                <td class="middle-inputtext" width='400px'>
                    <label>
                        Vehicle
                    </label>
                    <?php echo $this->Form->input('vehicle',array('name'=>'data[Odomterreading][vehicle_id]'));?>
                </td>
                <td class="middle-inputtext" width='400px'>
                    <label>
                        Odometer value
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Odomterreading][value]','type'=>'text'));?>
                </td>
            </tr>
            
            <tr>
                 <td class="middle-inputtext">
                    <label>
                       Service Types
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Servicetype][name]','type'=>'text'));?>
                </td>    
                <td class="middle-inputtext">
                    <label>
                        Name
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Odomterreading][name]','type'=>'text'));?>
                </td>    
            </tr>
            
            <tr>
                <td class="middle-inputtext">
                <label>
                       Category
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Servicetype][category]','type'=>'text'));?>
                </td>
                
            </tr>
         
            <tr>
                <td>
                   <?php echo $this->Form->input('Save and Continue',array('type'=>'submit','class'=>'form_button'));?>
                </td>
                </tr>
        </table>
    </div>
</div>