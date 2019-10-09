<?php
namespace kilyakus\widget\navedge;

class ThemeLightAsset extends \kilyakus\widgets\AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/nav-edge-light'],'widget-nav-edge-theme-light');
        parent::init();
    }
}
