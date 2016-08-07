$(document).ready(function(){
	$('#repass').keyup(check_pass_match);
});

$(document).ready(function(){
    $('input.owner').click(function(){
        $('.class-name').show();
    });

    $('input.finder').click(function(){
        $('.class-name').hide();
    });
});

function check_pass_match(){

	var $pass = $("#pass").val();
	var $repass = $("#repass").val();
	
	if($pass == $repass){
		$("#pass_confirm").show();
		$("#pass_error").hide();
	}

	else if($repass == null){
		$("#pass_error").hide();
		$("#pass_confirm").hide();
	}

	else{
		$("#pass_error").show();
		$("#pass_confirm").hide();
	}

}

function CheckPasswordStrength(password) {
    var password_strength = document.getElementById("password_strength");

    //TextBox left blank.
    if (password.length == 0) {
        password_strength.innerHTML = "";
        return;
    }

    //Regular Expressions.
    var regex = new Array();
    regex.push("[A-Z]"); //Uppercase Alphabet.
    regex.push("[a-z]"); //Lowercase Alphabet.
    regex.push("[0-9]"); //Digit.
    regex.push("[$@$!%*#?&]"); //Special Character.

    var passed = 0;

    //Validate for each Regular Expression.
    for (var i = 0; i < regex.length; i++) {
        if (new RegExp(regex[i]).test(password)) {
            passed++;
        }
    }

    //Validate for length of Password.
    if (passed > 2 && password.length > 8) {
        passed++;
    }

    //Display status.
    var color = "";
    var strength = "";
    switch (passed) {
        case 0:
        case 1:
            strength = "Weak";
            color = "red";
            break;
        case 2:
            strength = "Good";
            color = "darkorange";
            break;
        case 3:
        case 4:
            strength = "Strong";
            color = "green";
            break;
        case 5:
            strength = "Very Strong";
            color = "darkgreen";
            break;
    }
    password_strength.innerHTML = strength;
    password_strength.style.color = color;
}

$(window).resize(function(){
    var windowWidth = $(window).width();
    var imgSrc = $('#image');
    if(windowWidth <= 800){         
        imgSrc.attr('src','image1.jpg');
    }
    else if(windowWidth > 800){
        imgSrc.attr('src','image2.jpg');
    }
});