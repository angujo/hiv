/**
 * Created by Angujo Barrack on 15-Feb-17.
 */
"use strict";
(function ($) {
    $(document).ready(function () {
        $(window).resize(function () {
            resizer();
        });
        $('textarea.summernote').summernote({height:250});
        resizer();
    });
})(jQuery);

function resizer() {
    var nH = $('nav').height(), wH = $(window).height();
    $('#page-wrapper').css({'min-height': (wH - nH) + 'px'});
}