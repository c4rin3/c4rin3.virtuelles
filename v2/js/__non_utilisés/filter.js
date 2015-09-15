$(document).ready(function(){
	/* filter*/
    $('ul#filter li a').click(function() {
        $(this).css('outline','none');
        $('ul#filter .current').removeClass('current');
        $(this).parent().addClass('current');
         
        var filterVal = $(this).text().toLowerCase().replace(' ','-');
                 
        if(filterVal == 'all') {
            $('#nav a.hidden').fadeIn('slow').removeClass('hidden');
        } else {
            $('#nav a').each(function() {
                if(!$(this).hasClass(filterVal)) {
                    $(this).fadeOut('normal').addClass('hidden');
                } else {
                    $(this).fadeIn('slow').removeClass('hidden');
                }
            });
        }         
        return false;
    });
});