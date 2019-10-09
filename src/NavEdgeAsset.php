<?php
namespace kilyakus\widget\navedge;

class NavEdgeAsset extends \kilyakus\widgets\AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/nav-edge'],'widget-nav-edge');
        parent::init();
    }
}
