<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.table .delete').each(function(){
    var href = $(this).attr('href');
    $(this).attr('href', '#')
    .click(function(){
        post(href);
    });
});
");
?>

<h1>Manage Posts</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Type</th>
            <th>Creat User</th>
            <th>Create Time</th>
            <th>Opreate</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dataProvider as $data):?>
        <tr>
            <td><?php echo CHtml::encode($data->id);?></td>
            <td><?php echo CHtml::encode($data->title);?></td>
            <td><?php echo CHtml::encode($data->getTypeText());?></td>
            <td><?php echo CHtml::encode($data->create_user->username);?></td>
            <td><?php echo CHtml::encode($data->create_time);?></td>
            <td>
                <?php echo CHtml::link('Show', array('post/view', 'id'=>$data->id));?> | 
                <?php echo CHtml::link('Edit', array('post/update', 'id'=>$data->id));?> | 
                <?php echo CHtml::link('Delete', array('post/delete', 'id'=>$data->id), array('class'=>'delete'));?>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
