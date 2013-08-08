<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/docs.css" rel="stylesheet">-->
    <style type="text/css" media="all">
        @import url("<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css");
        @import url("<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css");
        @import url("<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css");
    </style>

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">LearnTrack</a>
        <div class="nav-collapse collapse">
        <?php 
            $this->widget('zii.widgets.CMenu', array(
                'id' => 'nav',
                'htmlOptions' => array(
                    'class' => 'nav navbar-nav'
                ),
                'items' => array(
                    array('label' => 'Home', 'url'=>array('/site/index')),
                    //array('label' => 'Blog', 'url'=>array('/post')),
                	array('label' => 'About', 'url'=>array('site/about')),
                	array('label' => 'Contact', 'url' => array('site/contact'))
                ),
            ));
        ?>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
        <?php echo $content;?>
      <!--<div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>-->

    </div><!-- /.container -->

  </body>
</html>