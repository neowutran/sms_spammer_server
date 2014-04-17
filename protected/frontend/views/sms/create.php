<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Sms $model
 */

$this->title = 'Create Sms';
$this->params['breadcrumbs'][] = ['label' => 'Sms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
