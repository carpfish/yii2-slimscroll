<?php
/**
 * Created by PhpStorm.
 * User: Carpfish - http://fishome.org
 * Date: 02.19.2021
 * Time: 11:15
 */

namespace carpfish\slimscroll;

use yii\web\AssetBundle;

/**
 * Class AssetBundle
 */
class SlimScrollAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/slimscroll';

    /**
     * @inherit
     */
    public $css = [

    ];

    /**
     * @inherit
     */
    public $js = [
        'jquery.slimscroll.min.js',
    ];

    public function init()
    {
        $this->registerJs();
        parent::init();
    }

    protected function registerJs()
    {
        $js = <<<JS
        $('.slimScroll').slimScroll();
JS;
        \Yii::$app->view->registerJs($js);
        return $this;
    }
}