<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
	
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('header_style');
                
                echo $this->Html->css('styles');
                echo $this->Html->css('menu');

		echo $this->Html->css('simple_menu');
                echo $this->Html->script(array('jquery','jquery-ui'));
                
                echo $this->Html->css('flick_jquery/jquery-ui');
                
                echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
                
                echo $scripts_for_layout;
                
                echo $this->Js->writeBuffer(array('cache'=>true));
        
        ?>
    
        <script>
            
            $(function() {
                   $(".datepicker").datepicker(
                            { 
                                dateFormat: 'dd-mm-yy',
                                changeMonth:true,
                                changeYear: true
                            }
                        );
               
            });
        </script>
</head>
<body>
<div id="container">
    
    <!------------ Header ----------------->

    <header id="uHeader">
      <hgroup>
        <a href="#" id="uLogo"></a>
        
      </hgroup>
    </header>
    <div id="menu">
        <?php echo $this->fetch('menu');?>
        <ul id="menu-bar">
 
 <li>
        <?php echo $this->Html->link('Vehicle',array('controller'=>'Vehicles','action'=>'add'));?>
 
 </li>
 <li><?php echo $this->Html->link('Stops',array('controller'=>'Stops','action'=>'add'));?>
 
 </li>
 <li><?php echo $this->Html->link('Routes',array('controller'=>'Routes','action'=>'add'));?>
 
 </li>
 <li><?php echo $this->Html->link('Associate Student',array('controller'=>'Studentroutestops','action'=>'add'));?></li>
 <li><?php echo $this->Html->link('Add Student Location',array('controller'=>'Students','action'=>'add_location'));?></li>
 <li><?php echo $this->Html->link('Stop Distance',array('controller'=>'Students','action'=>'select_student_distance'));?></li>
 <li><?php echo $this->Html->link('User Portal',array('controller'=>'Students','action'=>'portal'));?></li>
 <li><?php echo $this->Html->link('Google Reports',array('controller'=>'Students','action'=>'google_reports'));?></li>
</ul>
    </div>
    <div id="content">
                    
		<?php echo $this->Session->flash(); ?>

       	<?php echo $this->fetch('content'); ?>
        
    	</div>
</div>
 <?php echo $this->Js->writeBuffer(array('cache'=>true)); ?>
	
</body>
</html>
