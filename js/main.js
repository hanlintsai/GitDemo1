$(window).on('load',function(){
	//alert("Hello World");
	for(var i =0;i <=8;i++){
		var button_id="#button" + i;
		$(button_id).on('click',createCallback(i))
	}
});

function createCallback(num){
	return function(event){
		event.preventDefault();
		//alert("Hello button");
		/*
		$.post('libs/ajax_test.php',{'device':"13"},function(data){
			var value=$.parseJSON(data);
			alert("call back done!");
		});
		*/
		alert("You push the button "+(num+1)+" 就只是個按鈕");
	}
}