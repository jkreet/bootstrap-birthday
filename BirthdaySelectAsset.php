<?php
namespace jkreet\birthdayselect;
use yii\web\AssetBundle;

/*
 * It is free for use and modify with one simple rule:
 * regarding credits for the author either it modified or not
 * Author:
 */

/**
 * Description of
 *
 * @author S
 */
class BirthdaySelectAsset extends AssetBundle
{
    public $sourcePath = '@jkreet/birthdayselect';

    public $autoGenerate = true;
    /**
     * @inheritdoc
     */
    public $js = ['bootstrap-birthday.js','action.js'];
    public $css = ['birthday-select.css'];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}