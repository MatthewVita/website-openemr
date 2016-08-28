<?php

// TODO: should really split these classes into their own files

echo "hey5";

class Dependency {
	public $order;
	public $assetType;
	public $location;
	public $appliesToWikiOnly;

	public function	__construct( $order, $assetType, $location, $appliesToWikiOnly ) {
		$this->order = $order;
		$this->assetType = $assetType;
		$this->location = $location;
		$this->appliesToWikiOnly = $appliesToWikiOnly;
	}

	public function getOrder() {
		return $this->order;
	}

	public function getLocation() {
		return $this->location;
	}

	public function getAssetType() {
		return $this->assetType;
	}

	public function getAppliesToWikiOnly() {
		return $this->appliesToWikiOnly;
	}
}

echo "hey6";

class CacheBustedDependency extends Dependency {
  public function getLocation() {
    $alreadyContainsQueryString = strpos($this->location, '?');
    $valueForCacheInvalidation = time();

    if ($alreadyContainsQueryString === false) {
      return $this->location . '?v=' . $valueForCacheInvalidation;
    }

    return $this->location . '&v=' . $valueForCacheInvalidation;
  }
}

echo "hey7";

class FrontEndDependencies {
	private $dependencies = [];
	const HTML_LINE_BREAK = "\n";

	public function	__construct() {
		$baseDir = '/wiki/skins/openemr';

		$this->dependencies[] = new Dependency( 0, 'css', $baseDir . '/vendor/styles/bootstrap.min.css', false );
		$this->dependencies[] = new Dependency( 1, 'css', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', false );
    $this->dependencies[] = new Dependency( 2, 'css', '//fonts.googleapis.com/css?family=Montserrat', false );
    $this->dependencies[] = new Dependency( 3, 'css', '//fonts.googleapis.com/css?family=Work+Sans', false );
		$this->dependencies[] = new CacheBustedDependency( 4, 'css', $baseDir . '/main.css', true );
		$this->dependencies[] = new CacheBustedDependency( 5, 'css', $baseDir . '/openemr.css', false );
		$this->dependencies[] = new Dependency( 6, 'js', $baseDir . '/vendor/scripts/jquery.min.js', false );
		$this->dependencies[] = new Dependency( 7, 'js', $baseDir . '/vendor/scripts/bootstrap.min.js', false );
		$this->dependencies[] = new CacheBustedDependency( 8, 'js', $baseDir . '/openemr.js', false );
    $this->dependencies[] = new Dependency( 9, 'shortcut', $baseDir . '/images/favicon.ico', false );
	}

	public function bundleForWiki( &$pageReference ) {
		foreach ( $this->dependencies as $dependency ) {
			$order = $dependency->getOrder();
			$loc = $dependency->getLocation();
			$type = $dependency->getAssetType();

      switch ( $type ) {
        case 'css':
          $pageReference->addHeadItem( $order, '<link rel="stylesheet" href="' . $loc . '" />' . self::HTML_LINE_BREAK );
          break;
        case 'js':
          $pageReference->addHeadItem( $order, '<script type="text/javascript" src="' . $loc . '"></script>' . self::HTML_LINE_BREAK );
          break;
        case 'shortcut':
          $pageReference->addHeadItem( $order, '<link rel="shortcut icon" href="' . $loc . '" />' . self::HTML_LINE_BREAK );
          break;
      }
		}
	}

	public function bundleForNonWiki() {
		$output = [];

		foreach ( $this->dependencies as $dependency ) {
			$loc = $dependency->getLocation();
			$type = $dependency->getAssetType();
			$onlyForWiki = $dependency->getAppliesToWikiOnly();

			if (!$onlyForWiki) {
        switch ( $type ) {
          case 'css':
            array_push( $output, '<link rel="stylesheet" href="' . $loc . '" />' );
            break;
          case 'js':
            array_push( $output, '<script type="text/javascript" src="' . $loc . '"></script>' );
            break;
          case 'shortcut':
            array_push( $output, '<link rel="shortcut icon" href="' . $loc . '" />' );
            break;
        }
			}
		}

		return implode( self::HTML_LINE_BREAK, $output );
	}
}
