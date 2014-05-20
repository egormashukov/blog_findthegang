<?php
$form = $this->beginWidget('CActiveForm', array('action' => Yii::app()->createAbsoluteUrl('articles/create'))); ?>

<?php echo $form->errorSummary($model); ?>

<div>
    <?php echo $form->labelEx($model,'theme'); ?>
    <?php echo $form->textField($model,'theme',array('size'=>20,'maxlength'=>255)); ?>
    <?php echo $form->error($model,'theme'); ?>
</div>

<div>
    <?php echo $form->labelEx($model,'text'); ?>
    <?php echo $form->textArea($model,'text'); ?>
    <?php echo $form->error($model,'text'); ?>
</div>

<div>
    <?php echo CHtml::submitButton('Create'); ?>
</div>

<?php $this->endWidget(); ?>
