jQuery(document).ready(function() {

p = jQuery('.popup__overlay');
jQuery('#popup__toggle').click(function() {
        p.css('display', 'block');
})
p.click(function(event) {
    e = event || window.event
    if (e.target == this) {
        jQuery(p).css('display', 'none')
        jQuery('.wpcf7-not-valid-tip').remove();
        jQuery('div.wpcf7-response-output').empty().css('display', 'none');
    }
})
jQuery('.popup__close').click(function() {
    p.css('display', 'none');
    jQuery('.wpcf7-not-valid-tip').remove();
    jQuery('div.wpcf7-response-output').empty().css('display', 'none');
})


});