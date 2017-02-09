Birthday Selector
=================
Birthday Selector

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist jkreet/yii2-birthday-select-widget "*"
```

or add

```
"jkreet/yii2-birthday-select-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

<?= $form->field($model, 'birthday')->widget(BirthdaySelectWidget::className()) ?>