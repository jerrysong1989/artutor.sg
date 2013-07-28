<?php
/* @var $this UserController */
/* @var $model User */
/* @var BootActiveForm $form */
?>

<div style="padding-top: 30px">
    <h4>User Registration</h4>
</div>

<div class="form">
    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'verticalForm',
        'htmlOptions'=>array('class'=>'well'),
    ));

    echo $form->textFieldRow($model, 'displayName', array('class'=>'span3'));
    echo $form->textFieldRow($model, 'username', array('class'=>'span3'));
    echo $form->passwordFieldRow($model, 'password', array('class'=>'span3'));
    ?>

    <br />

    <?php
    $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit','type'=>'primary', 'label'=>'Submit'));
    $this->endWidget();
    ?>
</div>