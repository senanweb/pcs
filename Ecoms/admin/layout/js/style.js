// placeholder
$(function(){
    'use strict';
    $('[placeholder]').focus(function(){
        $(this).attr('data-test',$(this).attr('placeholder'));
        $(this).attr('placeholder', '');
    }).blur(function(){
        $(this).attr('placeholder',$(this).attr('data-test'));
    });
});
// placeholder TT