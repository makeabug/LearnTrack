<?php $this->beginContent('//layouts/main'); ?>	  
<div class="row">
    <div class="col-lg-3">
         <div class="bs-sidebar affix">
            <?php
                $this->widget('zii.widgets.CMenu', array(
                    'htmlOptions' => array('class'=>'nav bs-sidenav'),
                    //'itemCssClass' => 'active',
                    'items' => array(
                        array('label'=>'DashBoard', 'url'=>array('admin/index')),
                        array(
                            'label'=>'Blog', 
                            'url'=>'#', 
                            'submenuOptions' => array('class'=>'nav'), 
                            'items'=>array(
                                array('label'=>'List Blog', 'url'=>array('post/admin')),
                                array('label'=>'Create Blog', 'url'=>array('post/create')),
                            ),
                        ),
                    ),
                ));
            ?>
         </div>
    </div>
    <div class="col-lg-9">
        <?php echo $content;?>  
    </div>
</div>
<?php $this->endContent(); ?>