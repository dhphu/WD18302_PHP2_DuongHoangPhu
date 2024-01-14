<?php
require_once "vendor/autoload.php";


use App\Core\Field;
use App\Core\Form;

// $field = new Field;

// $field ->getName();
?>

<div class="container">
    <h1>Create an account</h1>
    <? $form = Form::begin('','post'); ?>
    <div class="row">
        <div class="col">
            <? echo $form ->field('firstname'); ?>
        </div>
        <div class="col">
            <? echo $form ->field('lastname'); ?>
        </div>
    </div>
    <? echo $form->field('email');  ?>
    <? echo $form->field('password') -> passwordField();  ?>
    <? echo $form->field('confirmPassword') -> passwordField();  ?>
    <button type="submit" class="btn btn-primary">Submit</button>
    <? echo Form::end(); ?>
</div>
<h1>Bài thêm</h1>
<?php

use App\Model\BaseModel;

$model = new BaseModel;
$model ->create();

