<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\reg\RegSoftware */
/* @var $form \kartik\form\ActiveForm */
?>
<div class="reg-software-test">

    <div class="reg-software-form">

        <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_initial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bootstrap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cover')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brief_introduction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'version')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_setting')->textInput() ?>

    <?= $form->field($model, 'is_rule')->textInput() ?>

    <?= $form->field($model, 'parent_rule_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'route_map')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'default_config')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'console')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_id')->textInput() ?>

    <?= $form->field($model, 'updated_id')->textInput() ?>

    <?= $form->field($model, 'sortOrder')->textInput() ?>


        <?php if (!Yii::$app->request->isAjax){ ?>
        <div class="form-group">
            <?= Html::submitButton("test", ['class' => 'btn btn-primary']) ?>
        </div>
        <?php } ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>
