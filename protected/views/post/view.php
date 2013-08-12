<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<div class="bs-docs-section">
    <div class="page-header">
        </h1><?php echo CHtml::encode($model->title);?></h1>
    </div>
    <span><?php echo CHtml::encode($model->update_time);?></span>
    <div class="page-content">
        <?php echo CHtml::encode($model->content); ?>
    </div>
</div>