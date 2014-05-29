<div class="main_content">
<div class="formc">
                 <?php echo $this->Form->create('Studentroutestop',array(
                                        'inputDefaults'=>array(    
                                            'div'=>false,
                                            'label'=>false
                                        )
                       ));
                ?>
    <table>
        <tr id="routes">
            <td>
                <label>Student:</label>
                <select name ="student_id" id="student">
                <?php foreach($student as $st){?>
                    <option value="<?php echo $st['Student']['id'];?>"><?php echo $st['Student']['first_name'].' '.$st['Student']['last_name'];?></option>
                <?php }?>
                </select>
                <?php $data = $this->Js->get('#student')->serializeForm(array('isForm' => true, 'inline' => true));
                                  
                                  $this->Js->get('#student')->event(
                                  'change',
                                  $this->Js->request(
                                  array('action' => 'show_routes', 'controller' => 'Studentroutestops'),
                                  array(
                                  'update' => '#route',
                                  'data' => $data,
                                  'async' => true,    
                                  'dataExpression'=>true,
                                  'method' => 'POST'
                                )
                            )
                            );
                        ?>
            </td>
            
        </tr>
    </table>
</div>
</div>