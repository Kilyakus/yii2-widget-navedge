<?php
namespace kilyakus\widget\navedge;

class ThemeDarkAsset extends \kilyakus\widgets\AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/nav-edge-dark'],'widget-nav-edge-theme-dark');
        parent::init();
    }
}
