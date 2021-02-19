Carpfish - Yii2 Slim Scroll
================================
[![Latest Stable Version](https://poser.pugx.org/carpfish/yii2-slimscroll/v/stable)](https://packagist.org/packages/carpfish/yii2-slimscroll) [![Total Downloads](https://poser.pugx.org/carpfish/yii2-slimscroll/downloads)](https://packagist.org/packages/carpfish/yii2-slimscroll) [![Latest Unstable Version](https://poser.pugx.org/carpfish/yii2-slimscroll/v/unstable)](https://packagist.org/packages/carpfish/yii2-slimscroll) [![License](https://poser.pugx.org/carpfish/yii2-slimscroll/license)](https://packagist.org/packages/carpfish/yii2-slimscroll)

### 说明:
### SLimScroll - 是一个4.6kb的很小的jQuery插件，可将任何div转换成一个带有好看的滚动条的可滚动区域。SlimScroll不占用任何视觉空间，因为它只出现在用户鼠标移入到这个div上的时候，也就是说，当用户进行onmouseover等鼠标移入的动作，这个好看的滚动条才会显示出来。用户可以拖动滚动条或使用鼠标滚轮改变滚动值。

------------

安装:

------------

```
php composer.phar require "carpfish/yii2-slimscroll" "*"
```
或

```
composer require carpfish/yii2-slimscroll
```

或添加到composer.json文件中

```
"carpfish/yii2-slimscroll": "*"
```

### 用法:
------------
```php
<?php
use carpfish\slimscroll\SlimScrollAsset;
SlimScrollAsset::register($this);
?>
```
```html
 <div class="slimScroll" style="height: 50px;">
        <p>Большой блок с полосой прокрутки.</p>
</div>
------------
# 依赖库参考:
## [Slim Scroll](http://rocha.la/jQuery-slimScroll)
------------
