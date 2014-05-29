
<div class="main_content">
<div class="formc">
             <?php echo $this->Form->create('Stop',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
                ?>
                     <div class="form-header">
                    <b>  Stop Details   </b>
                    <hr width="100%" color="#f1f1f1" style="margin-top:6px; margin-bottom:6px;"/>
                     </div>

<table>
                


                
                <tr>
                     <td class="middle-inputtext">
                         <label>
                             Name
                         </label>
                         <?php echo $this->Form->input('',array('name'=>'data[0][Stop][name]','type'=>'text','value'=>$data[0]['Stop']['name']));?>
                     </td>
                 
                 
                     <td class="middle-inputtext">
                         <label>
                             Latitude
                         </label>
                         <?php echo $this->Form->input('',array('name'=>'data[0][Stop][latitude]','type'=>'text','value'=>$data[0]['Stop']['latitude'],'id'=>'lat'));?>
                     </td>
                </tr>
                <tr>
                     <td class="middle-inputtext">
                         <label>
                             Longitude
                         </label>
                         <?php echo $this->Form->input('',array('name'=>'data[0][Stop][longitude]','type'=>'text','value'=>$data[0]['Stop']['longitude'],'id'=>'long'));?>
                     </td>
                 </tr>
                 <tr>
                     <td class="middle-inputtext">
                         <label>
                             Address
                         </label>
                         <?php echo $this->Form->input('',array('name'=>'data[0][Stop][address]','type'=>'textarea','rows'=>2,'cols'=>30,'value'=>$data[0]['Stop']['address'],'id'=>'address'));?>
                     </td>
                 
                     
                 </tr>
                 <tr>
                 </tr>
             </table>
    <table id="stops">
        
    </table>
    <table>
        <tr>
            <td align="center">

                    </td>
        </tr>
    </table>
    <div id="mapCanvas"  align="center" ></div> 
    <div align="center">
                          <?php echo $this->Form->input('Save And Continue',array('type'=>'submit','class'=>'form_button'));?>
    </div>
    </div>
  </div>