	$("#navigation #box").on("click", function(){
		
		$(this).css("background-color", "white").siblings().css("background-color", "#efefef");
		var value = $(this).attr('data-file');
	/*	console.log(value);*/
		$(value).addClass('active').siblings().removeClass('active');
		
	});
