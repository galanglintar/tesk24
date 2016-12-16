<?php
/* @var $this MemberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'List Member',
);

$this->menu=array(
	array('label'=>'Create Member', 'url'=>array('create')),
	array('label'=>'Manage Member', 'url'=>array('admin')),
);
?>

<h1>List Member</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>