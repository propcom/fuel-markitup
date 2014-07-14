<?php

namespace Propeller;

class MarkItUp {

	public static function inject_assets() {
		\Propeller\Asset::add_path('assets/markitup/');
		\Propeller\AssetInjector::add_js('textile.js');
		\Propeller\AssetInjector::add_js('jquery.markitup.js');
		\Propeller\AssetInjector::add_js('init.js');
	}

	public static function inject_bb_assets() {
		\Propeller\Asset::add_path('assets/markitup/');
		\Propeller\AssetInjector::add_js('jquery.markitup.js');
		\Propeller\AssetInjector::add_js('bb-code.js');
	}
}
