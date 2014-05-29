<div class="main_content">
    <div class="formc">
        
         <?php echo $this->Form->create('Vehiclelogcontract',array(
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
                <b>  Contract Details   </b>
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
                <td class="middle-inputtext">
                    <label>
                        Vehicle
                    </label>
                    <?php echo $this->Form->input('vehicle',array('name'=>'data[Odomterreading][vehicle_id]'));?>
                </td>
            
                <td class="middle-inputtext">
                    <label>
                        Odometer value
                    </label>
                    <?php echo $this->Form->input('odometer',array('name'=>'data[Odomterreading][value]'));?>
                </td>
            </tr>
            
            <tr>
                <td class="middle-inputtext">
                    <label>
                       Type  
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogcontract][name]'));?>
                </td>
                <td class="middle-inputtext">
                    <label>
                        Name
                    </label>
                    <?php echo $this->Form->input('odometer',array('name'=>'data[Odomterreading][name]'));?>
                </td>
            </tr>
            <tr>
                <td class="middle-inputtext">
                    <label>
                       Cost Generated
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogcontract][cost_amount]'));?>
                </td>
            </tr>
            
            <tr>
                <td class="middle-inputtext">
                    <label>
                       Cost Amount
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogcontract][cost_generated]'));?>
                </td>
            </tr>
            
            <div>
                
            </div>
            <tr height="50px"></tr>
            <tr>
                <td class="middle-inputtext">
                      <label>
                       Start Date
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogcontract][start_date]'));?>
                </td>
                <td class="middle-inputtext">
                      <label>
                       Purchaser Id
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogcontract][purchaser_id]'));?>
                </td>
            </tr>
            <tr>
                <td class="middle-inputtext">
                      <label>
                       Expiration date
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogcontract][expiration_date]'));?>
                </td>
                <td class="middle-inputtext">
                      <label>
                       Insurer Reference
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogcontract][ins_ref]'));?>
                </td>
            </tr>
            <tr>
                <td class="middle-inputtext">
                    <label>
                        Insurer Id
                        
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogcontract][insurer_id]'));?>
                </td>
                <td class="middle-inputtext">
                    <label>
                        Vehicle CostId
                    </label>
                    <?php echo $this->Form->input('cost',array('name'=>'data[Vehiclelogcontract][vehiclecost_id]'));?>
                </td>
            </tr>
            <tr>
                <td class="middle-inputtext">
                    <label>
                        Notes
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogcontract][notes]','type'=>'textarea','rows'=>2,'cols'=>40));?>
                </td>
                
            </tr>
            <tr>
                <td>
            <?php echo $this->Form->end('Save and Continue',array('type'=>'submit','class'=>'form_button'));?>
                    </td>
                </tr>
        </table>
    </div>
</div>