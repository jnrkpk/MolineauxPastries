<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Assignment</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/main.css" />

    </head>
    <body>
        <form name="myform" submit="validateForm">
            Name:
            <input type ="text" name="username"/><cbr/>
            Email:
            <input type = "text" name="email"/><cbr/>
            <input type = "submit" name="registration" value ="register"/>
        </form>
        <script>
            function validateForm(){
                var u=document.forms["myform"]["username"].value;
                var e=document.forms.myform.email.value;
                if(u==""){
                    alert("username and email are required");
                }
                else(alert("looks good"))
            }
            function ValidateEmail(mail) 
                {
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
                    {
                        return (true)
                    }
                alert("You have entered an invalid email address!")
                return (false)
                }
        </script>
    </body>
</html> 