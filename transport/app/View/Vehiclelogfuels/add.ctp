<div class="main_content">
    <div class="formc">
        
         <?php echo $this->Form->create('Vehiclelogfuel',array(
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
                <b>  Vehicle Details   </b>
            </div>
            <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
            </td>
            <td width="400px">
                
            <div class="form-header">
                <b>  Refueling Details   </b>
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
                        Litre
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogfuel][litre]','type'=>'text'));?>
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td class="middle-inputtext">
                    <label>
                        Price Per Litre
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogfuel][costperlitre]','type'=>'text'));?>
                </td>    
            </tr>
            <tr>
                <td></td>
                <td class="middle-inputtext">
                    <label>
                       Total Cost
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogfuel][amount]','type'=>'text'));?>
                </td>    
            </tr>
            <tr>
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
                        Odometer value
                    </label>
                    <?php echo $this->Form->input('odometer',array('name'=>'data[Odomterreading][value]'));?>
                </td>
                <td width="400px">
                
                    <div class="form-header">
                        <b>  Additional Details   </b>
                    </div>
                    <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
                </td>
            </tr>
            <tr>
                <td class="middle-inputtext">
                    <label>
                        Odometer Name
                    </label>
                    <?php echo $this->Form->input('odometer',array('name'=>'data[Odomterreading][name   ]'));?>
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td class="middle-inputtext">
                    <label>
                       Invoice No  
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogfuel][invoice_no]'));?>
                </td>
                
            </tr>
            <tr>
                <td></td>
                <td class="middle-inputtext">
                    <label>
                       Vendor Details
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogfuel][vendor_detail]'));?>
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td class="middle-inputtext">
                    <label>
                       Staff Id
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogfuel][staff_id]'));?>
                </td>
            </tr>
            
            <div>
                
            </div>
            
            <tr>
                <td></td>
                <td class="middle-inputtext">
                    <label>
                        Vehicle CostId
                    </label>
                    <?php echo $this->Form->input('cost',array('name'=>'data[Vehiclelogfuel][vehiclecost_id]'));?>
                </td>
                
            </tr>
            
            <tr>
                <td class="middle-inputtext">
                    <label>
                        Notes
                    </label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehiclelogfuel][notes]','type'=>'textarea','rows'=>4,'cols'=>60));?>
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