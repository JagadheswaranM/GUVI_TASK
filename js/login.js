$(document).ready(function(){
    $('#login-form').submit(function(event){
        event.preventDefault();

        var email = $('#email').val();
        var pass = $('pass').val();

        $user=localStorage.getItem('email');
        localStorage.getItem('pass');
        localStorage.getItem('email');
        localStorage.setItem('email',email);
        localStorage.setItem('pass',pass);

        $.ajax({
            url:'http://localhost/GUVI_FINAL/php/login.php',
            type:'POST',
            data:{email_id :email, password :pass},
            success: function(response){
                if(response=="success"){
                    $('#message').text("Login successful");
                }else{
                    $('#message').text("Invalid username or password.");
                }
            },
            error: function(){
                $('message')/text("An error occured");
            }
        });
    });
});