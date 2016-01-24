<?php

$form = $this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'linkForm',
	'htmlOptions'=>array('class'=>'well')
));

?>
<div id="form">
	<fieldset>
		<label>Επιλογή αρχείου</label>  
		<input type="text" class="span3" id="xFilePath" name="fullfile"/>
		<input type="button" value="Επιλογή απο file browser" onclick="BrowseServer();" />
		<br/>
		<label>Εξωτερικό αρχείο</label>  
		<input type="text" class="span3" id="xFilePath2" name="extfile"/>
	</fieldset>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'submit', 'icon'=>'ok', 'label'=>'Εισαγωγή αρχείου')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>