jQuery(document).ready(function(){
		  jQuery('.textwidget').bind('inview', function (event, visible) {
		  if (visible == true) {
				  jQuery('.bk-services').slideDown([5000], function() {
				  });
		  } else {
// element has gone out of viewport
		  }
		  });
	  });
