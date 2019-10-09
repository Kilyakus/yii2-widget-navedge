<?php
namespace kilyakus\widget\navedge;

use Yii;
use yii\base\Widget;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Inflector;

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
		echo $this->render('test',['left' => $this->left, 'right' => $this->right]);
		// $this->registerPlugin('nav-edge');
		$this->registerAssets();
	}

	public function registerAssetBundle()
	{
		$view = $this->getView();
		NavEdgeAsset::register($view);
		if (in_array($this->theme, self::$_inbuiltTypes)) {
			$bundleClass = __NAMESPACE__ . '\Theme' . Inflector::id2camel($this->theme) . 'Asset';
			$bundleClass::register($view);
		}
	}

	public function registerAssets()
	{
		$this->registerAssetBundle();
		// $this->registerPlugin($this->pluginName);
	}
}
