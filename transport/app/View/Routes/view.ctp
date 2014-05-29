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
        <?php echo $this->Form->input('route',array('id'=>"select_route"));?>
    </div>
            <?php $data = $this->Js->get('#select_route')->serializeForm(array('isForm' => true, 'inline' => true));
                                  
                                  $this->Js->get('#select_route')->event(
                                  'change',
                                  $this->Js->request(
                                  array('action' => 'show_stops', 'controller' => 'Routes'),
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