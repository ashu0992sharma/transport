
<script>
    function new_emp()
    {
        var i=1;
        var container=document.getElementById("emp");
        var div=document.createElement('div');
        
        var rowcontain1 = document.createElement('tr');
        var container_name=document.createElement("td");
        container_name.className='middle-inputtext';
        var label1=document.createElement('label');
        
        var input1 = document.createElement('select');
        var options1 = document.createElement('option');
        options1.value='driver';
        options1.text='driver';
        var options2 = document.createElement('option');
        options2.value='cleaner';
        options2.text='cleaner';
        label1.innerHTML="Employee:";
        input1.name="data[vehicles_employees]["+i+"][designation]";
        input1.appendChild(options1);
        input1.appendChild(options2);
        container_name.appendChild(label1);
        container_name.appendChild(input1);
        
        
        
        
        
        var input2 = document.createElement('select');
        
        
        input2.name="data[vehicles_employees]["+i+"][name]";
        <?php foreach($employees as $emp){?>
        var option=document.createElement("option");
        option.value="<?php echo $emp; ?>";
        option.text="<?php echo $emp; ?>";
        input2.appendChild(option);
        <?php }?>
        
        container_name.appendChild(input2);
        rowcontain1.appendChild(container_name);
        div.appendChild(rowcontain1);
        container.appendChild(div);
        
        var container_button=document.createElement("td");
        container_button.className ='row_but';
        var button_X = document.createElement("button");
        var t = document.createTextNode("X");
        button_X.type="button"; 
        button_X.className="row_but";
        button_X.appendChild(t); 
        button_X.onclick=function(){
          container.removeChild(div);
          i=i-1;
    };
    
        container_button.appendChild(button_X);
        rowcontain1.appendChild(container_button);
        div.appendChild(rowcontain1);
        container.appendChild(div);
    }
</script> 
<div class="formc">
        
         <?php echo $this->Form->create('Vehicle',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
         ?>
        <div class="middle-inputtext">
            <label>Model</label>
            <?php echo $this->Form->input('vehiclemodel');?>&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Name</label>
            <?php echo $this->Form->input('name');?>
        </div>
        
        <div class="middle-inputtext">
            <label>License Plate</label>
            <?php echo $this->Form->input('license_plate');?>&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Vehiclestate</label>
            <?php echo $this->Form->input('vehiclestate');?>
        </div>
            <label></label>
            
        
        <table>
            <tr>
            <div class="form-header">
                <b>  General Properties   </b>
            </div>
            <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
            </tr>
            <tr>
                
                
                <td  class="middle-inputtext">
                    
                    <label>Odometer Unit</label>
                    <?php echo $this->Form->input('odometer_unit');?>
                    
                </td>
            <br>
            </tr>
            
            
            <tr>
                <td class="middle-inputtext">
                    <div>
                    <label>Registration Date</label>
                    <?php echo $this->Form->input('registration_date',array('type'=>'text','class'=>'datepicker'));?>
                    </div>
                </td>
            </tr>
            <br>
            <tr>
                
                <td class="middle-inputtext">
                    <label>Acquisition Date</label>
                    <?php echo $this->Form->input('acquisition_date',array('type'=>'text','class'=>'datepicker'));?>
                </td>
            </tr>
            
            <tr>
                <td class="middle-inputtext">
                    <label>Chasis No</label>
                    <?php echo $this->Form->input('chasis_no');?>
                </td>
                <td class="middle-inputtext">
                    <label>Is Active</label>
                    
                    <?php echo $this->Form->input('is_active',array('type'=>'select','options'=>array('YES'=>'YES','NO'=>'NO')));?>
                </td>
            </tr>
            <tr> <td></td></tr>
            
            <tr>
                <th>
            <div class="form-header">Additional Properties</div>
           
            <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
            </th>
            <th>
            <div class="form-header">Engine Options</div>
            <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
            </th>
            </tr>
            
            <tr>
                <td class="middle-inputtext" style="min-width:400px;">
                    <label>Seats</label>
                    <?php echo $this->Form->input('seats');?>
                </td>
                
                <td class="middle-inputtext" style="min-width:400px;">
                    <label>Transmission</label>
                    <?php echo $this->Form->input('transmission');?>
                </td>
                
            </tr>
            <tr>
                <td class="middle-inputtext">
                    <label>Doors</label>
                    <?php echo $this->Form->input('doors');?>
                </td>
                
                <td class="middle-inputtext">
                    <label>Fuel Type</label>
                    <?php echo $this->Form->input('fuel_type');?>
                    
                </td>
            </tr>
            <tr>
                <td class="middle-inputtext">
                    <label>Color</label>
                    <?php echo $this->Form->input('color');?>
                </td>
                
                <td class="middle-inputtext">
                    <label>co2 Emission</label>
                    <?php echo $this->Form->input('co2');?>
                </td>
            </tr>
            <tr>
                <td></td>
                
                <td class="middle-inputtext">
                    <label>Horsepower</label>
                    <?php echo $this->Form->input('Horsepower');?>
                </td>
            </tr>
            <tr>
                <td ></td>
                
                <td class="middle-inputtext">
                    <label>Horsepower Taxation</label>
                    <?php echo $this->Form->input('Horsepower');?>
                </td>
            </tr>    
            <tr>
                <td></td>
                
                <td class="middle-inputtext">
                    <label>Power(Kw)</label>
                    <?php echo $this->Form->input('Power');?>
                </td>
            </tr>    
        </table>
            <?php if(!empty($veh_emp)){?>
        <table id="emp">
            <tr>
            <th>
            <div class="form-header">Employee Association</div>
            <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
            </th>
            </tr>
            
            <tr>
                <td class="middle-inputtext">
                    <label>Employee</label>
                    <?php echo $this->Form->input('',
                            array(
                                'type'=>'select',
                                'name'=>"data[vehicles_employees][0][designation]",
                                'options'=>array($veh_emp[0]['VehiclesEmployee']['designation']=>$veh_emp[0]['VehiclesEmployee']['designation'], 'driver'=>'driver','cleaner'=>'cleaner')
                                )
                            );?>
                    
                    <select  name="data[vehicles_employees][0][name]">
                        <?php echo '<option value='.$veh_emp[0]['VehiclesEmployee']['name'].'>'.$veh_emp[0]['VehiclesEmployee']['name'].'</option>';?>
                       <?php foreach($employees as $emp1){?>
                           <option value='<?php echo $emp1?>'> <?php echo $emp1;?></option>;
                       <?php }?>
                    </select>
                </td>
            </tr>
            
        </table>
            <table>
                <tr>
                    <td width="200"></td>
                <td>
            <?php   echo '<a onclick="new_emp()" class="add_ExpenseRow" >Associate New Employee</a>'; ?>
                </td>
            </tr>
            </table>
            <?php }?>
            <br>
            
            <?php echo $this->Form->input('Save & Continue',array('type'=>'submit','class'=>'form_button')); ?>
            
            <?php echo $this->Form->end(); ?>
            
    </div>
