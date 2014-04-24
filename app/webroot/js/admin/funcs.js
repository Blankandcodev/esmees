var AjRunning = false,  ctime;
$(document).ready(function(){
	$.validator.addMethod('selectcheck', function (value) {
        return (value != '0');
    }, "This field is required.");
	$.validator.addClassRules({
        selchk: { selectcheck: true }
    })
	
	$('.fancy').fancybox({
		autoResize:  true,
		autoCenter:  true,
		afterShow: function(){			
			$('form').each(function(){
				$(this).validate();
			});
		}
	});
	$('form').each(function(){
		$(this).validate();
	});
	
	$('body').on('click', '#instafetch', function(e){
		e.preventDefault();
		$(this).parent().html('<h2>Loading...</h2>');
		$('.insta-content').load($(this).attr('href'), function(){
			$(window).scroll(function(){
				if($(window).scrollTop() > 100){
					$('#photoForm .action').addClass('float')
				}else{
					$('#photoForm .action').removeClass('float');
				}
			});
		});
	})
	
	$('body').on('click', '.toggle', function(e){
		e.preventDefault();
		target = "#" + $(this).attr('rel');
		$(target).fadeToggle(200);
	})
	
	$('body').on('click', '.prodPage', function(e){
		e.preventDefault();
		target = "#" + $(this).attr('rel');
		page = $(this).data('page');
		$(target).find('#pageNo').val(page);
		$(target).submit();
	})
	
	$('body').on('submit', 'form.addProduct', function(e){
		e.preventDefault();
		var $this = $(this);
		$this.hide(0);
		$.post($(this).attr('action'), $(this).serialize(), function(data){
			if(data.status == "success"){
				$this.parent().html('<div class="flash flash_success">Product saved successfully</div>')
			}else if (data.status == "error"){
				$this.parent().html('<div class="flash flash_error">Product Already Saved</div>')
			};
		}, "json")
	});
	$('.editor').redactor({
		imageUpload: '/Admin/imgupload',
		imageGetJson: '/img/upload/data.json'
	});
});
$(window).resize(function(){
	$.fancybox.update()
});
function getMerchantList(opts, url, selector){
	$(selector).html('<option>Loading Merchants</option>');
	$.get(url, {afl: opts}, function(data){
		if(data == "ERROR"){
			$(selector).html('<option>Select Affiliate Program first</option>');
		}else{
			$(selector).html(data);
		}
	})
}
