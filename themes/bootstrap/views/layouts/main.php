<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Area', 'url'=>array('/area/admin'), 'items' => array(
                    array('label' => 'Register New Area', 'url' => array('/area/create')),
                    array('label' => 'Area List', 'url' => array('/area/admin')),
                )),
                array('label'=>'Centres', 'url'=>array('/satsangCentre/admin'), 'items' => array(
                    array('label' => 'Register New Centre', 'url' => array('/satsangCentre/create')),
                    array('label' => 'Centre List', 'url' => array('/satsangCentre/admin'))
                )),
                array('label'=>'Sewadars', 'url'=>array('/sewadars/admin'),'items' => array(
                    array('label'=>'Register New Sewadar', 'url'=>array('/sewadars/create')),
                    array('label'=>'Sewadars List', 'url'=>array('/sewadars/admin')),
                )),
                array('label' => 'Nominal Roll','url'=>array('nominalRoll/index'), 'items' => array(
                    array('label' => 'New Sewa', 'url'=> array('nominalRoll/create')),
                    array('label' => 'Sewa List', 'url'=> array('nominalRoll/admin'))
                )),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container" id="page">
    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'block'=>true, // display a larger alert block?
        'fade'=>true, // use transitions?
        'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
        'alerts'=>array( // configurations per alert type
            'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
            'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
        ),
        )
    );
    ?>
	<?php /*if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
	<?php endif*/ ?>
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">

	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
