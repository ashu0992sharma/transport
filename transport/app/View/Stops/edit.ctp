
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
        <?php echo $this->Form->input('stop',array('id'=>"select_stop",'name'=>'data[0][Stop][id]'));?>
    </div>
            <?php $data = $this->Js->get('#select_stop')->serializeForm(array('isForm' => true, 'inline' => true));
                                  
                                  $this->Js->get('#select_stop')->event(
                                  'change',
                                  $this->Js->request(
                                  array('action' => 'edit_stops', 'controller' => 'Stops'),
                                  array(
                                  'update' => '#show_stops',
                                  'data' => $data,
                                  'async' => true,    
                                  'dataExpression'=>true,
                                  'method' => 'POST'
                                )
                            )
                            );
                        ?>
    <br>
    <br>
    <div id="show_stops">
        
    </div>
</div>
</div>