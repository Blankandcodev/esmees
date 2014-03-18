var AjRunning = false,  ctime;
$(document).ready(function(){
	$.validator.addMethod('selectcheck', function (value) {
        return (value != '0');
    }, "This field is required.");
	$.validator.addClassRules({
        selchk: { selectcheck: true },
        conf: { equalTo : "#pwd" }
    })
	
	$('.fancy').fancybox({
		afterShow: function(){			
			$('form').each(function(){
				$(this).validate();
			});
		}
	});
	$('form').each(function(){
		$(this).validate();
	});
	$('body').on('click', '.toggle', function(e){
		e.preventDefault();
		target = "#" + $(this).attr('rel');
		$(target).fadeToggle(200);
	})
	$('body').on('mouseenter', '.custdrop', function(){
		target = $(this).find('ul.drop');
		$(target).slideDown(200);
	})
	$('body').on('mouseleave', '.custdrop', function(){
		target = $(this).find('ul.drop');
		$(target).slideUp(200);
	})
});
$(window).resize(function(){
	$.fancybox.update()
});