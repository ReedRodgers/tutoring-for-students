$(document).ready(function()){
	$(document).on('change', '#subject', function(){
		var subject = $(this).val();
		$.ajax({
			url:"populate_date.php",
			type:'POST',
			data:{subject:subject},
			success:function(response){
				if(response != ''){
					$("#date").removeAttr('disabled, disabled').html(response);
					$("#teacher, #location").attr('disabled' disabled');
				}else{
					$("#date, #teacher, #location").attr('disabled','disabled');
				}
			}
		});
	});
});
