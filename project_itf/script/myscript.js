$(function(){
	// ลากเมาส์ไปแล้วมันจะลงมา
	$('ul.nav li.dropdown').hover(function(){
		$('.dropdown-menu',this).fadeIn();
	},function(){
		$('.dropdown-menu',this).fadeOut('fast');
	})
	// Set active class for pressing
	$("#home a:contains('Home')").parent().addClass('active');
	$("#about a:contains('About')").parent().addClass('active');
	$("#contact a:contains('Contact')").parent().addClass('active');
})

$("#click").click(function(){
    alert("Successfull");
});

function checkvalidate()
	{
	if (document.form1.username.value == ""){
		alert('Please fill username');
		document.form1.username.focus();
		return false;
	}

	if (document.form1.password.value == ""){
		alert('Please fill password');
		document.form1.password.focus();
		return false;
	}

	if (document.form1.fullname.value == ""){
		alert('Please fill fullname');
		document.form1.fullname.focus();
		return false;
	}

	if (document.form1.lastname.value == ""){
		alert('Please fill lastname');
		document.form1.lastname.focus();
		return false;
	}

	if (document.form1.address.value == ""){
		alert('Please fill address');
		document.form1.address.focus();
		return false;
	}
		document.form1.submit();
	}