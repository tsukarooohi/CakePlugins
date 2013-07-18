$(function(){
	
	$('.constant_list .edit_select').each(function(e){
		
		$(this).click(function(){
			
			var constant = $(this).data('constant-values');
			
			$('.constant_add #ConstantName').val(constant.name);
			$('.constant_add #ConstantValue').val(constant.value);
			$('.constant_add #ConstantExplanation').val(constant.explanation);
			$('.ConstantAddForm').children().remove('#hide_id').parent().append('<input type="hidden" name=data[Constant][id] id ="hide_id" value="' + constant.id + '">');
			$('.constant_add_button').children().remove("#dele").parent().append('<input type="submit" name="data[dele]" id="dele" value="削 除">');
		});
		
	});
	
	$('input[name="reset"]').click(function(){
		
		$('.ConstantAddForm #hide_id:hidden, .ConstantAddForm #dele:input').remove();
	});

});
