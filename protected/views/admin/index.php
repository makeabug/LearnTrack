<?php
/* @var $this AdminController */

$this->breadcrumbs=array(
	'Admin',
);
?>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1> 
 
<?php if (!Yii::app()->user->isGuest): ?> 
 <p>
    You last logged in on <?php echo date('Y-m-d H:i:s', Yii::app()->user->lastLoginTime); ?>. 
</p>
<?php endif; ?>