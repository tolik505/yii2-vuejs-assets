VueJs, Axios, vue-router, vuex, vee-validate assets for Yii2
======================================
This assets allow to use vueJs in your Yii2 application. It contains vue.js, axios.js, vue-router.js, vuex.js and
vee-validate.js (for form validation)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require tolik505/yii2-vuejs-assets "*"
```

or add

```
"tolik505/yii2-vuejs-assets": "*"
```

to the require section of your `composer.json` file.


Usage
-----

You may utilize a bundle of assets by adding of this code in your view :

```php
<?php \tolik505\vuejs\VueBundleAsset::register($this); ?>
```

If you want to utilize only pure Vue, add this code in your view :

```php
<?php \tolik505\vuejs\VueAsset::register($this); ?>
```
