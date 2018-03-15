var jq = jQuery.noConflict();


(function(jq){
	'use strict';
	jq(document).ready(function(){

		//fitVids
		jq(".container").fitVids();

		// Mixitup		
		if(jq('.portfolio-filter').length){
            var containerEl = document.querySelector('.mixitup-container');
			var mixer = mixitup(containerEl);
        }

	});
})(jq);


