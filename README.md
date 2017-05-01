VueJs and Axios assets for Yii2
======================================
This assets allow to use vueJs in your Yii2 application. It contains vue.js and axios.js

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist tolik505/yii2-vuejs-assets "*"
```

or add

```
"tolik505/yii2-vuejs-assets": "*"
```

to the require section of your `composer.json` file.


Usage
-----

If you want to utilize Vue with Vue-resource, add this code in your view :

```php
<?php \tolik505\vuejs\VueBundleAsset::register($this); ?>
```

If you want to utilize only pure Vue, add this code in your view :

```php
<?php \tolik505\vuejs\VueAsset::register($this); ?>
```
