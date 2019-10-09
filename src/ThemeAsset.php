<?php
namespace kilyakus\widget\navedge;

class ThemeAsset extends \kilyakus\widgets\AssetBundle
{
    public $depends = [
        'kilyakus\library\base\BaseAsset',
        'kilyakus\widget\navedge\NavEdgeAsset'
    ];
}
