// Form1 popup function
function pop_Form1(){
	$('body').css('background-iamge', 'url(./../iamges/Form1/Form1-background.png)');
	$.ajax({
		url: '/Form1',
		method: 'GET',
		success: function(){
			alert("success");
		},
		error: function(){
			alert('error');
		}
	})
}