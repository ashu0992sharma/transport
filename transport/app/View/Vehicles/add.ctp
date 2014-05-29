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
        var options=document.createElement('option');
        options.value='null';
        options.text='select';
        var options1 = document.createElement('option');
        options1.value='driver';
        options1.text='driver';
        var options2 = document.createElement('option');
        options2.value='cleaner';
        options2.text='cleaner';
        label1.innerHTML="Employee:";
        input1.name="data[vehicles_employees]["+i+"][designation]";
        input1.appendChild(options);
        input1.appendChild(options1);
        input1.appendChild(options2);
        container_name.appendChild(label1);
        container_name.appendChild(input1);
        
        
        
        
        
        var input2 = document.createElement('select');
        
        
        input2.name="data[vehicles_employees]["+i+"][name]";
        var options=document.createElement("option");
        options.value="null";
        options.text="select";
        input2.appendChild(options);
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
<?php         echo $this->Html->css('menu');?>
<div  class="menu_simple" align="right">
    <ul><li><?php echo $this->Html->link('Edit A Vehicle',array('controller'=>'Vehicles','action'=>'edit'));?></li></ul>
    </div>
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
            <label>Model</label>
            <?php echo $this->Form->input('model',array('name'=>'data[Vehicle][vehiclemodel]'));?>&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Name</label>
            <?php echo $this->Form->input('name',array('name'=>'data[Vehicle][name]','required'));?>
        </div>
        
        <div class="middle-inputtext">
            <label>License Plate</label>
            <?php echo $this->Form->input('license_plate',array('name'=>'data[Vehicle][license_plate]','required'));?>&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Vehiclestate</label>
            <?php echo $this->Form->input('state',array('name'=>'data[Vehicle][vehiclestate]'));?>
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
                
                
                <td style="min-width:400px;" class="middle-inputtext">
                    <label>Odometer Unit</label>
                    <?php echo $this->Form->input('odometer_unit',array('name'=>'data[Vehicle][odometer_unit]'));?>
                    
                </td>
                
            </tr>
            
            
            <tr>
                <td class="middle-inputtext" width="300px">
                    <label>Registration Date</label>
                    <?php echo $this->Form->input('registration_date',array('name'=>'data[Vehicle][registration_date]','type'=>'text','class'=>'datepicker'));?>
                    
                </td>
                <td class="middle-inputtext">
                    <label>Acquisition Date</label>
                    <?php echo $this->Form->input('acquisition_date',array('name'=>'data[Vehicle][acquisition_date]','class'=>'datepicker','type'=>'text'));?>
                </td>
            </tr>
            
            <tr>
                <td class="middle-inputtext">
                    <label>Chasis No</label>
                    <?php echo $this->Form->input('chasis_number',array('name'=>'data[Vehicle][chasis_no]'));?>
                </td>
                <td class="middle-inputtext">
                    <label>Is Active</label>
                    <?php echo $this->Form->input('',array('name'=>'data[Vehicle][is_active]','type'=>'select','options'=>array('null'=>'select','Yes'=>'Yes','No'=>'No')));?>
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
                    <?php echo $this->Form->input('seats_number',array('name'=>'data[Vehicle][seats]','type'=>'number'));?>
                </td>
                
                <td class="middle-inputtext" style="min-width:400px;">
                    <label>Transmission</label>
                    <?php echo $this->Form->input('Transmission',array('name'=>'data[Vehicle][transmission]'));?>
                </td>
                
            </tr>
            <tr>
                <td class="middle-inputtext">
                    <label>Doors</label>
                    <?php echo $this->Form->input('doors_number',array('name'=>'data[Vehicle][doors]','type'=>'number'));?>
                </td>
                
                <td class="middle-inputtext">
                    <label>Fuel Type</label>
                    <?php echo $this->Form->input('fuel_type',array('name'=>'data[Vehicle][fuel_type]','type'=>'select','options'=>array('null'=>'select','LPG'=>'LPG','CNG'=>'CNG','Petrol'=>'Petrol','Diesel'=>'Diesel')));?>
                </td>
            </tr>
            <tr>
                <td class="middle-inputtext">
                    <label>Color</label>
                    <?php echo $this->Form->input('color',array('name'=>'data[Vehicle][color]'));?>
                </td>
                
                <td class="middle-inputtext">
                    <label>co2 Emission</label>
                    <?php echo $this->Form->input('co2 Emission',array('name'=>'data[Vehicle][co2]'));?>
                </td>
            </tr>
            <tr>
                <td></td>
                
                <td class="middle-inputtext">
                    <label>Horsepower</label>
                    <?php echo $this->Form->input('Horsepower',array('name'=>'data[Vehicle][horse_power]'));?>
                </td>
            </tr>
            <tr>
                <td ></td>
                
                <td class="middle-inputtext">
                    <label>Horsepower Taxation</label>
                    <?php echo $this->Form->input('Horsepower',array('name'=>'data[Vehicle][horse_powertax]'));?>
                </td>
            </tr>    
            <tr>
                <td></td>
                
                <td class="middle-inputtext">
                    <label>Power</label>
                    <?php echo $this->Form->input('Power(Kw)',array('name'=>'data[Vehicle][power]'));?>
                </td>
            </tr>    
        </table>
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
                                'options'=>array('null'=>'select','driver'=>'driver','cleaner'=>'cleaner')
                                )
                            );?>
                    
                    <select  name="data[vehicles_employees][0][name]">
                        <option value="null">select</option>
                        <?php foreach($employees as $em){?>
                        <option value="<?php echo $em; ?>"><?php echo $em;?></option>
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
            <br>
            
            <?php echo $this->Form->input('Save & Continue',array('type'=>'submit','class'=>'form_button')); ?>
    </div>
</div>