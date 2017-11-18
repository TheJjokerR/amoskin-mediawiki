<?php
/**
 * SkinTemplate class for the Radius AMO skin
 *
 * @ingroup Skins
 */
class SkinRadiusAMO extends SkinTemplate {
	public $skinname = 'radiusamo', $stylename = 'RadiusAMO',
		$template = 'RadiusAMOTemplate', $useHeadElement = true;

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	public function initPage( OutputPage $out ) {

		$out->addMeta( 'viewport', 'width=device-width, initial-scale=1.0' );

		$out->addModuleStyles( array(
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.radiusamo'
		) );
		$out->addModules( array(
			'skins.radiusamo.js'
		) );
	}

	/**
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}
}
