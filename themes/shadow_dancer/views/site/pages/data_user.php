<?php
$this->pageTitle=Yii::app()->name . ' - Data User';
$this->breadcrumbs=array(
	'Data User',
);
?>

<h1>Data User</h1>

<div class="dashIcon span-3">
    <a href='/tesk24/index.php?r=user/create'><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-file.png" alt="Inbox" /></a>
    <div class="dashIconText "><a href='/tesk24/index.php?r=user/create'>Tambah User</a></div>
</div>

<div class="dashIcon span-3">
    <a href='/tesk24/index.php?r=user/admin'><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-tools.png" alt="Inbox" /></a>
    <div class="dashIconText "><a href='/tesk24/index.php?r=user/admin'>Atur User</a></div>
</div>

<div class="dashIcon span-3">
    <a href='/tesk24/index.php?r=user/index'><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-people.png" alt="Inbox" /></a>
    <div class="dashIconText "><a href='/tesk24/index.php?r=user/index'>List User</a></div>
</div>