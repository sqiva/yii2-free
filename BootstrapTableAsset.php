<?php
namespace sqiva\free;
use yii\web\AssetBundle;

class BootstrapTableAsset extends AssetBundle
{
    public $sourcePath = '@vendor/wenzhixin/bootstrap-table/dist';
	public $css = [
		'bootstrap-table.min.css'
	];
	public $js = [
		'bootstrap-table.min.js'
	];
}
