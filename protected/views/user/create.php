<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	//'Users'=>array('index'),
	'Tambah User',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Form Tambah User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>