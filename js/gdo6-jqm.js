"use strict";
/**
 * Allow 405 response codes.
 * Autocompletion by gizmore@wechall.net and stack overflow.
 * @returns
 */
$(function() {
	
	$.mobile.ajaxEnabled = false; 

	$('input.gdo-autocomplete').each(function(){
		var $this = $(this);
		var config = JSON.parse($this.attr('data-config'));
		var $ul = $('#autocomplete-'+config.name);
		var $hidden = $('#autocomplete-id-'+config.name);
		$hidden.val(config.selected.id);
		if (config.selected.id > 0) {
			$this.val(config.selected.text);
		} else {
			$this.attr('data-placeholder', 'true');
		}
		$ul.on('filterablebeforefilter', function(e, data) {
			$ul.html('');
			$ul.show();
			$ul.html("<li><div class='ui-loader'><span class='ui-icon ui-icon-loading'></span></div></li>");
            $ul.listview("refresh");
            if ($this.val().length >= 2) {
            	$.ajax({
            		url: config.completionHref + '&query=' + $this.val(),
            		dataType: "json",
            		withCredentials: true
            	})
            	.then(function(response) {
            		var html = '';
            		$.each(response, function(i, val) {
            			html += "<li data-id='"+val.id+"' data-text='"+val.text+"'><div>" + val.display + "</div></li>";
            		});
            		$ul.html(html);
            		$ul.listview("refresh");
            		$ul.trigger("updatelayout");
            		$ul.removeClass('ui-screen-hidden');
            		$ul.show();
            	});
            }
            else {
            	$ul.hide();
            }
		});
		$ul.delegate('li', 'click', function () {
			var $li = $(this);
			$hidden.val($li.attr('data-id'));
		    $this.val($li.attr('data-text'));
		    $ul.hide();
		 });
	});

});
