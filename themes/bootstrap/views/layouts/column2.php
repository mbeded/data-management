<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
    <div class="span">
        <div id="content-fuild">
            <div class="pull-right">
            <?php $this->widget('bootstrap.widgets.TbMenu', array(
                'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
                'stacked'=>false, // whether this is a stacked menu
                'items'=>$this->menu,
            )); ?>
            </div>
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
    <!--<div class="span3">
        <div id="sidebar">
        <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'Operations',
            ));
            $this->widget('bootstrap.widgets.TbMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations'),
            ));
            $this->endWidget();
        ?>
        </div>
    </div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>