<?php
namespace kilyakus\widget\navedge;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Inflector;
use kilyakus\nav\Nav;

class NavEdge extends Widget
{
	public $pluginName = 'nav-edge';

	const THEME_DEFAULT = 'default';
	const THEME_DARK = 'dark';
	const THEME_LIGHT = 'light';

	const SIZE_XS = 'xs';
	const SIZE_SM = 'sm';
	const SIZE_MD = 'md';
	const SIZE_LG = 'lg';
	const SIZE_XL = 'xl';

	const ICON_POSITION_LEFT = 'left';
	const ICON_POSITION_RIGHT = 'right';

	public $size;

	public $top;

	public $left;

	public $right;

	public $bottom;

	public $theme = self::THEME_DEFAULT;

	private $_sizes = [
		self::SIZE_XS,
		self::SIZE_SM,
		self::SIZE_MD,
		self::SIZE_LG,
		self::SIZE_XL,
	];

	protected static $_inbuiltTypes = [
		self::THEME_DEFAULT,
		self::THEME_DARK,
		self::THEME_LIGHT,
	];

	public function run()
	{

		if(isset($this->left['items'])){
		    echo Nav::widget([
		        'options' => [
		            'class' => 'nav-edge nav-edge--left nav-edge--'.$this->left['theme'],
		        ],
		        'items' => $this->left['items']
		    ]);

		}

		if(isset($this->right['items'])){
		    
		    echo Nav::widget([
		        'options' => [
		            'class' => 'nav-edge nav-edge--right nav-edge--'.$this->right['theme'],
		        ],
		        'items' => $this->right['items']
		    ]);

		}

		// $this->registerPlugin('nav-edge');
		$this->registerAssets();
	}

	public function registerAssetBundle()
	{
		$view = $this->getView();
		NavEdgeAsset::register($view);

		if ($this->left['theme'] && in_array($this->left['theme'], self::$_inbuiltTypes)) {
			$bundleClass = __NAMESPACE__ . '\Theme' . Inflector::id2camel($this->left['theme']) . 'Asset';
			$bundleClass::register($view);
		}

		if ($this->right['theme'] && in_array($this->right['theme'], self::$_inbuiltTypes)) {
			$bundleClass = __NAMESPACE__ . '\Theme' . Inflector::id2camel($this->right['theme']) . 'Asset';
			$bundleClass::register($view);
		}
	}

	public function registerAssets()
	{
		$this->registerAssetBundle();
		// $this->registerPlugin($this->pluginName);
	}
}
