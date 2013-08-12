<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<fieldset>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'title');?>
            <?php echo $form->textField($model,'title',array('maxlength'=>256, 'class'=>'form-control', 'placeholder'=>'Enter title'));?>
            <?php echo $form->error($model,'title'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model,'content'); ?>
            <?php echo $form->textArea($model,'content',array('rows'=>16, 'class'=>'form-control')); ?>
            <?php echo $form->error($model,'content'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model,'type_id'); ?>
            <?php echo $form->dropDownList($model,'type_id', $model->getTypeOptions(), array('class'=>'form-control', 'style'=>'width:120px;')); ?>
		    <?php echo $form->error($model,'type_id'); ?>
        </div>
        <div class="form-group">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
        </div>
	</fieldset>
	
<?php $this->endWidget(); ?>

</div><!-- form -->