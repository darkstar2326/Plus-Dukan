<!DOCTYPE html>
<html>
<head>
    <title>Send an Email</title>
</head>
<body>

    <center>
        <h4 class="sent-notification"></h4>
        <div class="form">
        <form id="myForm">
            <h2>Send an Email</h2>

            <label>Name</label>
            <input id="name" type="text" placeholder="Enter Name" class="input">
            <br><br>

            <label>Email</label>
            <input id="email" type="text" placeholder="Enter Email" class="input">
            <br><br>

            <label>Subject</label>
            <input id="subject" type="text" placeholder=" Enter Subject" class="input">
            <br><br>

            <p>Message</p>
            <textarea id="body" rows="5" placeholder="Type Message" class="input"></textarea><!--textarea tag should be closed (In this coding UI textarea close tag cannot be used)-->
            <br><br>

            <button type="button" onclick="sendEmail()" value="Send An Email" class="button">Submit</button>
        </form>
    </center>
</div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

    <style type="text/css">
      #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
            text-align: center;
        }
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
        }
        #box{
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
        .form{
            width: 300px;
            box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.3);
            background: #fff;
            padding: 20px;
            margin: 8% auto 0;
            text-align: center;
            border-radius: 50px;

            
        }
        .text{
            font-size: 25px;
            text-align: center;
        }
        .form h1{
            color: #1c8adb;
            margin-bottom: 30px;
        }
        .input{
            border-radius: 20px;
            padding: 10px;
            margin: 10px 0;
            width: 90%;
            border: 1px solid #999;
            outline: none;
            text-align: center;
        }
        .button{
            color: #fff;
            width: 100%;
            padding: 10px;
            border-radius: 20px;
            font-size: 15px;
            margin: 10px 0;
            border: none;
            outline: none;
            cursor: pointer;
            background-color: #1c8adb;
            transition:  1s;

        }
        .button:hover{
            background-color: #6734eb;
        }
        a{
            text-decoration: none;
            font-size: 20px;
        }
        img{
            width: 70px;
            margin-top: -50px;
        }
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-image: url(stars.jpg);
            background-size: cover;
            background-position: center;
            text-align: center;
        }

</style>

</body>
</html>
      