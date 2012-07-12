<?php

namespace Propeller;

class MarkItUp {

	public static function inject_assets() {
		AssetInjector::add_css('markitup/markitup.css');
		AssetInjector::add_js('markitup/jquery.markitup.js');

		AssetInjector::add_js('markitup/textile.js');
		AssetInjector::add_css('markitup/textile.css');
	}

}
