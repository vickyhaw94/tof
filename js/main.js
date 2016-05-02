$("#frmRegister").submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "php/register_action.php",
                    data: $("#frmRegister").serialize(),
                    dataType:"JSON",
                    async: false,
                    success: function(data) {
                        
                        if (data["success"] == 1) {
                            if(data["message"] == "registered"){
                                    document.getElementById("registerResponse").innerHTML = "Successfully registered";
                                    $("#registerResponse").fadeOut(2000);
                                    setTimeout(function() {
                                        $("#btnRegister").html("Register");
                                        document.getElementById("frmRegister").reset();
                                        document.location.href = "index.php";
                                    }, 1000);
                            }else if(data["message"]  == "email_used") {
                                document.getElementById("emailError").innerHTML = "Email in used";
                                $("#emailError").fadeOut(4000);
                           
                            } else if (data["message"]  == "password_not_match") {
                                document.getElementById("password").innerHTML = "Password not match with password repeats";
                                document.getElementById("passwordRepeat").innerHTML = "Password not match with password repeats";
                                    $("#password").fadeOut(4000);
                                    $("#passwordRepeat").fadeOut(4000);
                           
                                //document.getElementById("msgContent").innerHTML = "Registration is unsuccessful. Make sure that your password matches.";
                            }
                        }
                    }
        });
});

$("#frmLogin").submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "php/login_action.php",
                    data: $("#frmLogin").serialize(),
                    async:false,
                    success: function(data) {
                        if(data == "success"){
                            
                            document.getElementById("loginResponse").innerHTML = "Logging in..";
                            
                            $("#loginResponse").fadeOut(2000);
                            setTimeout(function() {
                                document.location.href = "home.php";
                            }, 1000);
                        }else if(data == "incorrect"){
                            document.getElementById("loginResponse").innerHTML = "Invalid password or email.";
                            $("#loginResponse").fadeOut(5000);
                        }else if(data == "unsuccessful"){
                            document.getElementById("loginResponse").innerHTML = "Invalid password or email.";
                            $("#loginResponse").fadeOut(5000);
                        }
                    }
                   
                });
             });
