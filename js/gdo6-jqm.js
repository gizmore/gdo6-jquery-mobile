"use strict";
/**
 * Allow 405 response codes.
 * Autocompletion by gizmore@wechall.net and stack overflow.
 * @returns
 */
$(function() {
	
	$.mobile.ajaxEnabled = false;
	
	$('.gdt-li-actions > a').each(function(){
		$(this).text('aaa');
	});
	
	$(function() {
		if (window.GDO_FIRST_EDITABLE_FIELD) {
			$('#'+window.GDO_FIRST_EDITABLE_FIELD).focus();
		}
	});
	
});

/** Fix for local tabs **/
$.widget( "ui.tabs", $.ui.tabs, {
	_isLocal: function( anchor ) {
		var path, baseUrl, absUrl;
		path = $.mobile.path;
		baseUrl = path.parseUrl( $.mobile.base.element().attr( "href" ) );
		absUrl = path.parseUrl( path.makeUrlAbsolute( anchor.getAttribute( "href" ),
				baseUrl ) );
		return ( path.isSameDomain( absUrl.href, baseUrl.href ) &&
				absUrl.pathname === baseUrl.pathname );
		return this._superApply( arguments );
	}
});
