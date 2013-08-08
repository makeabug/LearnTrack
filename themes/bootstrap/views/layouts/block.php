<?php $this->beginContent('//layouts/main'); ?>	  
    <div class="row-fluid">
        <div class="span2">
             <div class="well sidebar-nav">
                <?php $this->renderPartial('_sidebar', array('action'=> 
                    !empty($this->actived) ? $this->actived : $this->getAction()->getId())); ?>
             </div>
        </div>
        <div class="span10">
            <?php echo $content;?>  
        </div>
    </div>
<?php $this->endContent(); ?>