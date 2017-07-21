/*
 * WSNB Admin v1.0
 * WPFlask.com
 *
 * Copyright (c) 2015-2016 WPFlask.com
 *
 * License: GNU General Public License v2 or later
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 */

( function( $ ) {

	/** Document Ready */
	$( document ).ready( function() {

		var $activeTab;

		// Easytabs
		$( '#wpflask-admin-columns-tabs' ).easytabs({
			defaultTab: $.cookie( 'wpflask-admin-columns-tab' ) != 'undefined' ? $.cookie( 'wpflask-admin-columns-tab' ) : 'li#tab-1',
			updateHash: false
		});
		$( '#wpflask-admin-columns-tabs' ).bind( 'easytabs:after', function() {
			$activeTab = $( '.section-form-tabs' ).find( 'li.active' );
			$.cookie( 'wpflask-admin-columns-tab', 'li#' + $activeTab.attr( 'id' ), { path: '/' } );
		});

	} );

} )( jQuery );
