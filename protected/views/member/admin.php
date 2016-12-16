<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	//'Members'=>array('index'),
	'Atur Member',
);

$this->menu=array(
	array('label'=>'List Member', 'url'=>array('index')),
	array('label'=>'Create Member', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#member-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Atur Member</h1>
<pre>PETUNJUK :

Gunakan tombol <img src="\tesk24\assets\7caeeb6\gridview\view.png"></img> untuk melihat data user.
Gunakan tombol <img src="\tesk24\assets\7caeeb6\gridview\update.png"></img> untuk edit data user.
Gunakan tombol <img src="\tesk24\assets\7caeeb6\gridview\delete.png"></img> untuk menghapus data user.
Anda dapat melakukan pencarian data dengan mengisi kolom kosong yang telah disediakan.
</pre>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'member-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nama_member',
		'alamat_member',
		'tgl_lahir_member',
		'email_member',
		'telp_member',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
