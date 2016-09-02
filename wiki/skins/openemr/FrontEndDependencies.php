<?php

// TODO START: The following classes should be placed in their own files in
// ~/website-openemr/wiki/skins/openemr/dependencies

class Dependency {
	private $order;
	protected $location;
	private $appliesToWikiOnly;
	private $appliesToNonWikiOnly;
	protected $lineBreakChar = "\n";

	public function	__construct( $order, $location, $appliesToWikiOnly, $appliesToNonWikiOnly ) {
		$this->order = $order;
		$this->location = $location;
		$this->appliesToWikiOnly = $appliesToWikiOnly;
		$this->appliesToNonWikiOnly = $appliesToNonWikiOnly;
	}

	public function getOrder() {
		return $this->order;
	}

	protected function getLocation() {
		return $this->location;
	}

	public function getAppliesToWikiOnly() {
		return $this->appliesToWikiOnly;
	}

	public function getAppliesToNonWikiOnly() {
		return $this->appliesToNonWikiOnly;
	}

}

class JavaScriptDependency extends Dependency {
	public function getHtmlValue() {
		return '<script type="text/javascript" src="' . $this->getLocation() . '"></script>' . $this->lineBreakChar;
	}
}

class CssDependency extends Dependency {
	public function getHtmlValue() {
		return '<link rel="stylesheet" href="' . $this->getLocation() . '" />' . $this->lineBreakChar;
	}
}

class FaviconDependency extends Dependency {
	public function getHtmlValue() {
		return '<link rel="shortcut icon" href="' . $this->getLocation() . '" />' . $this->lineBreakChar;
	}
}

class MetaDependency extends Dependency {
	private $metaData;

	public function __construct( $order, $location, $appliesToWikiOnly, $appliesToNonWikiOnly, $metaData ) {
		parent::__construct( $order, $location, $appliesToWikiOnly, $appliesToNonWikiOnly );
		$this->metaData = $metaData;
	}

	public function getMetaData() {
		return $this->metaData;
	}

	public function getHtmlValue() {
		return '<meta ' . $this->getMetaData() . ' />' . $this->lineBreakChar;
	}
}

class CacheBustedJavaScriptDependency extends JavaScriptDependency {
	protected function getLocation() {
		return CacheBusterUtil::bust( $this->location );
	}
}

class CacheBustedCssDependency extends CssDependency {
	protected function getLocation() {
		return CacheBusterUtil::bust( $this->location );
	}
}

class FrontEndDependencies {
	private $dependencies = array();

	public function	__construct() {
		$baseDir = '/wiki/skins/openemr';

		$this->dependencies[] = new CssDependency( 0, $baseDir . '/vendor/styles/bootstrap.min.css', false, false );
		$this->dependencies[] = new CssDependency( 1, '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', false, false );
		$this->dependencies[] = new CssDependency( 2, '//fonts.googleapis.com/css?family=Montserrat', false, false );
		$this->dependencies[] = new CssDependency( 3, '//fonts.googleapis.com/css?family=Work+Sans', false, false );
		$this->dependencies[] = new CacheBustedCssDependency( 4, $baseDir . '/main.css', true, false );
		$this->dependencies[] = new CacheBustedCssDependency( 5, $baseDir . '/openemr.css', false, false );
		$this->dependencies[] = new JavaScriptDependency( 6, $baseDir . '/vendor/scripts/jquery.min.js', false, false );
		$this->dependencies[] = new JavaScriptDependency( 7, $baseDir . '/vendor/scripts/bootstrap.min.js', false, false );
		$this->dependencies[] = new JavaScriptDependency( 8, $baseDir . '/openemr_google_analytics.js', false, true );
		$this->dependencies[] = new CacheBustedJavaScriptDependency( 9, $baseDir . '/openemr.js', false, false );
		$this->dependencies[] = new FaviconDependency( 10, $baseDir . '/images/favicon.ico', false, false );
		$this->dependencies[] = new MetaDependency( 11, null, false, false, 'name="HandheldFriendly" content="True"' );
		$this->dependencies[] = new MetaDependency( 12, null, false, false, 'name="MobileOptimized" content="320"' );
		$this->dependencies[] = new MetaDependency( 13, null, false, false, 'name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"' );
	}

	public function bundleForWiki( &$pageReference ) {
		foreach ( $this->dependencies as $dependency ) {
			if ( !$dependency->getAppliesToNonWikiOnly() ) {
				$pageReference->addHeadItem( $dependency->getOrder(), $dependency->getHtmlValue() );
			}
		}
	}

	public function bundleForNonWiki() {
		$output = array();

		foreach ( $this->dependencies as $dependency ) {
			if ( !$dependency->getAppliesToWikiOnly() ) {
				array_push( $output, $dependency->getHtmlValue() );
			}
		}

		return implode( $output );
	}
}
// TODO END

// TODO START: The following class should be placed in its own files in
// ~/website-openemr/wiki/skins/openemr/utils
class CacheBusterUtil {
	public static function bust( $file ) {
		$alreadyContainsQueryString = strpos( $file, '?' );
		$valueForCacheInvalidation = time();

		if ( $alreadyContainsQueryString === false ) {
			return $file . '?v=' . $valueForCacheInvalidation;
		}

		return $file . '&v=' . $valueForCacheInvalidation;
	}
}
// TODO END
