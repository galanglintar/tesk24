<?php  
  $baseUrl = Yii::app()->theme->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile('http://www.google.com/jsapi');
  $cs->registerCoreScript('jquery');
  $cs->registerScriptFile($baseUrl.'/js/jquery.gvChart-1.0.1.min.js');
  $cs->registerScriptFile($baseUrl.'/js/pbs.init.js');
  $cs->registerCssFile($baseUrl.'/css/jquery.css');

?>

<?php $this->pageTitle=Yii::app()->name; ?>

<?php if(Yii::app()->user->hasFlash('sLogin')):?>
	<div class="flash-success">
    <?php echo Yii::app()->user->getFlash('sLogin'); ?>
    </div>
<?php endif; ?>

<h1>Dashboard <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<p></p>
<div class="flash-notice">Website ini dibuat dengan menggunakan Yii versi 1.1.17.</div>
<div class="flash-notice">Silahkan login sebagai admin untuk mendapat akses penuh dari website ini.</div>
<div class="flash-notice">User Admin : admin, Pass: admin123.</div>