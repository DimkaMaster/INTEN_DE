jQuery(document).ready(function () {
     
     $(".phone").mask("+49-999-99999999"); 
    
   
    jQuery('.send-form').click( function() {
    	var form = jQuery(this).closest('form');
    	
    	if ( form.valid() ) {
    		form.css('opacity','.5');
    		var actUrl = form.attr('action');

    		jQuery.ajax({
    			url: actUrl,
    			type: 'post',
    			dataType: 'html',
    			data: form.serialize(),
    			success: function(data) {
    				form.html(data);
    				form.css('opacity','1');
                    form.find('.status').html('Děkujeme, Vaše objednávka byla úspěšně odeslána!');
                    $('#myModal').modal('show') // должно открыться модальное окно
    			},
    			error:	 function() {
    			     form.find('.status').html('Server ERROR');
                     $('#myModal').modal('show') // должно открыться модальное окно
    			}
    		});
    	}
    });


});