<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	//'Users'=>array('index'),
	'Atur User',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Atur User</h1>
<pre>PETUNJUK :

Gunakan tombol <img src="\tesk24\assets\7caeeb6\gridview\view.png"></img> untuk melihat data user.
Gunakan tombol <img src="\tesk24\assets\7caeeb6\gridview\update.png"></img> untuk edit data user.
Gunakan tombol <img src="\tesk24\assets\7caeeb6\gridview\delete.png"></img> untuk menghapus data user.
Anda dapat melakukan pencarian data dengan mengisi kolom kosong yang telah disediakan.
</pre>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'password',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
