<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $job app\models\Job */
/* @var $form ActiveForm */
?>
<div class="job-edit">
		<h2 class="page-header">Edit Job Details</h2>
    <?php $form = ActiveForm::begin(); ?>
        <?= $form->errorSummary($job); ?> 
        <?= $form->field($job, 'category_id') 
                ->dropDownList(Category::find()
                ->select(['name', 'id'])
                ->indexBy('id')
                ->column(), ['prompt' => "Select Category"])
        ?>
        <?= $form->field($job, 'title') ?>
        <?= $form->field($job, 'description')->textArea(['rows' => '6']) ?>
        <?= $form->field($job, 'type')-> dropDownList([
            'Full Time' => "Full Time",
            'Part Time' => "Part Time",
            'Contract-Based' => "Contract-Based",
            'As Needed' => "As Needed"
        ], ['prompt' => "Select Type"]) ?>
        <?= $form->field($job, 'requirements') ?>
        <?= $form->field($job, 'salary_range')-> dropDownList([
            'Under $20K' => "Under $20K",
            '$20K - $40K' => "$20K - $40K",
            '$40K - $60K' => "$40K - $60K",
            '$60K - $80K' => "$60K - $80K",
            '$80K - $100K' => "$80K - $100K",
            '$100K - $150K' => "$100K - $150K",
            'Over $150K' => "Over $150K"
        ], ['prompt' => "Select Salary"]) ?>
        <?= $form->field($job, 'city') ?>
        <?= $form->field($job, 'state') ?>
        <?= $form->field($job, 'zipcode') ?>
        <?= $form->field($job, 'contact_email') ?>
        <?= $form->field($job, 'contact_phone') ?>
        <?= $form->field($job, 'is_published')->radioList(array('1' => "Yes", '0' => "No")) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- job-create -->
