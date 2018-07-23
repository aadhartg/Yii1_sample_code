<?php
/* @var $this HomepageContentController */
/* @var $model HomepageContent */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="row">
        <?php echo $form->label($model, 'id'); ?>
        <?php echo $form->textField($model, 'id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'label_keys'); ?>
        <?php echo $form->textField($model, 'label_keys', array('size' => 20, 'maxlength' => 20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'heading'); ?>
        <?php echo $form->textField($model, 'heading', array('size' => 60, 'maxlength' => 500)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'content'); ?>
        <?php echo $form->textArea($model, 'content', array('rows' => 6, 'cols' => 50)); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->