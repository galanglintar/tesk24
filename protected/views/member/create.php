<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	//'Members'=>array('index'),
	'Pendaftaran Member',
);

$this->menu=array(
	array('label'=>'List Member', 'url'=>array('index')),
	array('label'=>'Manage Member', 'url'=>array('admin')),
);
?>

<h1>Form Pendaftaran Member</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>