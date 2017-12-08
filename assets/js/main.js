/*jshint devel: true */
/*global _dcq*/

// if ('querySelector' in document && 'addEventListener' in window && Array.prototype.forEach) {
//     document.documentElement.className += 'js';
// }

jQuery(document).ready(function($) {
    
    $('html').addClass('js');

    var _di = setInterval(function() {
        if (Object.keys(_dcq).length !== 0) {
            $('style:last-of-type:not(#theme-style)','head').remove();
			clearInterval(_di);
        }
    }, 1);

    // setTimeout(function() {
    //     _dcq.push(["showForm", { id: "862837615" }]);
    // }, 2000);

});