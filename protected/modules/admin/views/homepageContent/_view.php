<?php
/* @var $this HomepageContentController */
/* @var $data HomepageContent */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('label_keys')); ?>:</b>
    <?php echo CHtml::encode($data->label_keys); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('heading')); ?>:</b>
    <?php echo CHtml::encode($data->heading); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
    <?php echo CHtml::encode($data->content); ?>
    <br />


</div>