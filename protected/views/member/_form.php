<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'member-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="span-3 right">
	<div class="top">
	<div class="dashIcon span-3">
    	<a href='/tesk24/index.php?r=member/index'><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-people.png" alt="Inbox" /></a>
    <div class="dashIconText "><a href='/tesk24/index.php?r=member/index'>List Member</a></div>
	</div>
	</div>
	</div>

	<div class="span-3 right">
	<div class="top">
	<div class="dashIcon span-3">
    	<a href='/tesk24/index.php?r=member/admin'><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-tools.png" alt="Inbox" /></a>
    <div class="dashIconText "><a href='/tesk24/index.php?r=member/admin'>Atur Member</a></div>
	</div>
	</div>
	</div>

	<p class="note"><span class="required">*</span> Wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_member'); ?>
		<?php echo $form->textField($model,'nama_member',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat_member'); ?>
		<?php echo $form->textField($model,'alamat_member',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'alamat_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_lahir_member'); ?>
		<?php echo $form->textField($model,'tgl_lahir_member'); ?>
		<?php echo $form->error($model,'tgl_lahir_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_member'); ?>
		<?php echo $form->textField($model,'email_member',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telp_member'); ?>
		<?php echo $form->textField($model,'telp_member',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telp_member'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Daftar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->