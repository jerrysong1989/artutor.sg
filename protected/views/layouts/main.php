<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>


    <?php include "include.php" ?>


    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">


    <!--  <?php include "header.php" ?>  -->

    <div class="navbar navbar-inverse">
      <a class="navbar-brand" href="#">Title</a>
      <ul class="nav navbar-nav pull right">
        <?php 
            if(Yii::app()->user->isGuest)
            {
                ?>
                    <li class="active"><?php echo CHtml::link('Log In',array('login')); ?></li>
                    <li><?php echo CHtml::link('Register',array('../user?view=register')); ?></li>
                <?php
            }
            else{
              ?>
                <li>
                    <?php 
                        $linkName = Yii::app()->user->getId();
                        $linkName = 'Log Out ('.$linkName.")";
                        echo CHtml::link($linkName,array('site/')); 
                        Yii::app()->user->logout();
                        ?>
                </li>
             <?php
            }
        ?>

      </ul>
    </div>

    <!-- ----------------------------------------------------------------------------------------------------------- -->
    <?php
        // main content
        echo $content;
    ?>
    <!-- ----------------------------------------------------------------------------------------------------------- -->

    <div class="clear"></div>

    <?php include "footer.php" ?>

<!--     <div id="footer">
        Copyright &copy; <?php echo date('Y'); ?> by ISHU Pte. Ltd.<br/>
        All Rights Reserved.<br/>
    </div> -->

</div><!-- page -->

</body>
</html>
