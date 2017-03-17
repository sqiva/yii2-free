<?php
namespace sqiva\free;
use yii\web\AssetBundle;

class FreeAsset extends AssetBundle
{
    public $sourcePath = '@bower';
	public $css = [
		'sqiva/free/dist/css/bootstrap.min.css',
		'sqiva/free/dist/css/normalize.css',
		'sqiva/free/dist/css/bootstrap-datetimepicker.min.css',
		//~ 'sqiva/free/dist/css/bootstrap-table.min.css',
		'sqiva/free/dist/css/bootstrap-select.css',
		'sqiva/free/dist/css/font-awesome.min.css',
		'sqiva/free/dist/css/sm-core-css.css',
		'sqiva/free/dist/css/jquery.smartmenus.bootstrap.css',
		// CUSTOM
		'sqiva/free/dist/css/freestyle.css',
		'sqiva/free/dist/css/theme1.css',
		'bootstrap-table/src/bootstrap-table.css',
		//~ 'fonts/open-sans/opensans.css',
	];
	public $js = [
		'sqiva/free/dist/js/bootstrap.min.js',
		'sqiva/free/dist/js/moment.min.js',
		'sqiva/free/dist/js/bootstrap-datetimepicker.min.js',
		//~ 'sqiva/free/dist/js/bootstrap-table.min.js',
		'sqiva/free/dist/js/bootstrap-select.min.js',
		'sqiva/free/dist/js/bootstrap-maxlength.js',
		'sqiva/free/dist/js/jquery.number.min.js',
		'sqiva/free/dist/js/Chart.bundle.min.js',
		'sqiva/free/dist/js/jquery.smartmenus.min.js',
		'sqiva/free/dist/js/jquery.smartmenus.bootstrap.min.js',
		// CUSTOM
		'sqiva/free/dist/js/freescript.js',
		'sqiva/free/dist/js/list_menu.js',
		'bootstrap-table/src/bootstrap-table.js',
	];
	public $depends = [
		//~ 'sqiva\free\BootstrapTableAsset'
	];
}
