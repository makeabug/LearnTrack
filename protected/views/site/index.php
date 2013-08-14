<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class='row-fluid'>
    <div class='span12 text-center show-grid'>
        <div>
            <h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
        </div>
        <div>
            <form class="form-search">
                <input type="text" class="input-xlarge search-query">
                <button type="submit" class="btn">Search</button>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-3">
        <div class='well text-center show-grid'>
            <div><h2><?php echo CHtml::link('Blog', array('post/'))?></h2></div>
            <div>(<?php echo $blogCount;?>)</div>
        </div>
    </div>
    <div class="col-3">
        <div class='well text-center show-grid'>
            <div><h2><a href='#'>Book</a></h2></div>
            <div>(23)</div>
        </div>
    </div>
    <div class="col-3">
        <div class='well text-center show-grid'>
            <div><h2><a href='#'>Qusetion</a></h2></div>
            <div>(108)</div>
        </div>
    </div>
    <div class="col-3">
        <div class='well text-center show-grid'>
            <div><h2><a href='#'>Favorite</a></h2></div>
            <div>(19)</div>
        </div>
    </div>
</div>

<div class='row'>
    <div class='col-4 show-grid'>
        <div class='box-header well'>
            Top (10)
        </div>
        <div class='box-content'>
            Charisma a fully featued template
Its a fully featured, responsive template for your admin panel. Its optimized for tablet and mobile phones. Scan the QR code below to view it in your mobile device.       
        </div>
    </div>
    <div class='col-4 show-grid'>
        <div class='box-header well'>
            Last(10)
        </div>
        <div class='box-content'>
            Charisma a fully featued template
Its a fully featured, responsive template for your admin panel. Its optimized for tablet and mobile phones. Scan the QR code below to view it in your mobile device.        
        </div>
    </div>
    <div class='col-4 show-grid'>
        <div class='box-header well'>
            Realtime Traffic
        </div>
        <div class='box-content'>
            Charisma a fully featued template
Its a fully featured, responsive template for your admin panel. Its optimized for tablet and mobile phones. Scan the QR code below to view it in your mobile device.
        </div>
    </div>
</div>
