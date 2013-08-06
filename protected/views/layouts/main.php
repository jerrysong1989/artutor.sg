<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/_public/css/screen.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/_public/css/print.css" media="print" />
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/_public/css/ie.css" media="screen, projection" />
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/_public/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/_public/css/form.css" />

    <?php
        // register yii-bootstrap
        Yii::app()->bootstrap->register();
    ?>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
    <?php
    // this is the navBar which is universal to all main-layout views
    $this->widget('bootstrap.widgets.TbNavbar', array(
        'type'=>'inverse', // null or 'inverse'
        'brand'=>Yii::app()->name,
        'brandUrl'=>Yii::app()->request->baseUrl,
        'collapse'=>true, // requires bootstrap-responsive.css
        'items'=>array(
            array(
                'class'=>'bootstrap.widgets.TbMenu',
                'items'=>array(
                    array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
                        array('label'=>'Action', 'url'=>'#'),
                        array('label'=>'Another action', 'url'=>'#'),
                        array('label'=>'Something else here', 'url'=>'#'),
                        '---',
                        array('label'=>'NAV HEADER'),
                        array('label'=>'Separated link', 'url'=>'#'),
                        array('label'=>'One more separated link', 'url'=>'#'),
                    )),
                ),
            ),

            array(
                'class'=>'bootstrap.widgets.TbMenu',
                'htmlOptions'=>array('class'=>'pull-right'),
                'items'=>array(
                    array('label'=>'Register', 'url'=>Yii::app()->request->baseUrl.'/user/register', 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Login', 'url'=>Yii::app()->request->baseUrl.'/site/login', 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Logout ('.Yii::app()->user->getState('displayName').')','url'=>Yii::app()->request->baseUrl.'/site/logout', 'visible'=>!Yii::app()->user->isGuest)
                ),
            ),
        ),
    ));
    ?>



    <!-- ----------------------------------------------------------------------------------------------------------- -->
    <?php
        // main content
        echo $content;
    ?>
    <!-- ----------------------------------------------------------------------------------------------------------- -->

    <div class="clear"></div>

    <div id="footer">
        Copyright &copy; <?php echo date('Y'); ?> by ISHU Pte. Ltd.<br/>
        All Rights Reserved.<br/>
    </div><!-- footer -->

</div><!-- page -->

</body>
</html>
