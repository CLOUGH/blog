
$(document).ready(function () {
	$('.clickable[href]').click(function(event){
	    window.location.href = $(this).attr('href');
	});
    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
    });
    $('td.actions').click(function(event){
    	event.stopPropagation();
    });
});
