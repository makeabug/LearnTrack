<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="bs-docs-section">
    <div class="page-header">
        <h2><?php echo CHtml::link(CHtml::encode($data->title), array('post/view', 'id'=>$data->id));?></h2>
    </div>
    <span><?php echo CHtml::encode($data->update_time);?></span>
    <div class="page-content">
        <?php echo CHtml::encode($data->content); ?>
    </div>
</div>