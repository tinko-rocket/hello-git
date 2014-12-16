<?php
/* @var $this MenuitemController */
/* @var $model Menuitem */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menuitem-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sort'); ?>
		<?php echo $form->textField($model,'sort'); ?>
		<?php echo $form->error($model,'sort'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menuname'); ?>
		<?php //echo $form->textField($model,'menuname',array('size'=>15,'maxlength'=>15)); ?>

		<?php echo $form->dropDownList($model, 'menuname', CHtml::listData(Menuitem::model()->findAll(), 'menuname', 'description'),
			array(
				'ajax' => array(
					'type'=>'POST', //request type
					'url'=>CController::createUrl('menuitem/pages'), //url to call.
					//Style: CController::createUrl('currentController/methodToCall')
					'update'=>'#'. CHtml::activeId($model,'parent'), //selector to update
					'data'=>'js:this.value' 
					//'data'=>'js:javascript statement' 
					//leave out the data key to pass all form values through
				))); ?>

		<?php echo $form->error($model,'menuname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent'); ?>
		<?php echo $form->dropDownList($model,'parent', array()); ?>
		<?php echo $form->error($model,'parent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->