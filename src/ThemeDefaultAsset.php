<?php
namespace kilyakus\widget\navedge;

class ThemeDefaultAsset extends \kilyakus\widgets\AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/nav-edge-default'],'widget-nav-edge-theme-default');
        parent::init();
    }
}
