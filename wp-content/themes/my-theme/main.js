/* global AJAX */
jQuery(function($) {

var $form = $('form');

$form.submit(function(e){
    e.preventDefault();

    $.post(AJAX.URL, $form.serialize(), function(res){
        console.log(res);
    });
})

});