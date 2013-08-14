<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="row">
    <div class="col-lg-9">
        <?php echo $content;?>  
    </div>
    <div class="col-lg-3">
        <div class="bs-sidebar affix">
        <?php
    		/*$this->beginWidget('zii.widgets.CPortlet', array(
    			'title'=>'Operations',
    		));*/
    		$this->widget('zii.widgets.CMenu', array(
    			'items'=>$this->menu,
    			'htmlOptions'=>array('class'=>'nav bs-sidenav'),
    		));
    		/*$this->endWidget();*/
    	?>
	   </div>
    </div>
</div><!-- content -->
<?php $this->endContent(); ?>
