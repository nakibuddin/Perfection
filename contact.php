<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./fa/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="./css/header.css">
    <link rel="stylesheet" type="text/css" href="./css/carousel.css">
    <link rel="stylesheet" type="text/css" href="./css/signIn.css">
    <link rel="stylesheet" type="text/css" href="./css/signUp.css">
    <link rel="stylesheet" type="text/css" href="./css/userPage.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css"> -->
    <title>Contact</title>
</head>
<body>

    <div class="container py-3">
        <div class="card bg-dark text-white shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">

                <div class="col-md-6 image ">
                    <img src="./images/contact/b.jpg" style="width: 100%">
                </div>

                <div class="col-md-6">
                    <form method="post" class="text-center border border-light p-3" action="sendMessagemail.php">
                        <p class="h4 mb-4 text-dark">Contact us</p>

                        <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name" name="name">

                        <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

                        <label>Subject</label>

                        <select class="browser-default custom-select mb-4" name="option">
                            <option value="" disabled>Choose option</option>
                            <option value="Feedback" selected>Feedback</option>
                            <option value="Report a bug">Report a bug</option>
                            <option value="Others">Others</option>
                        </select>

                        <div class="form-group">

                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message" name="message"></textarea>
                        </div>

                        <button class="btn btn-info btn-block" type="submit" name="send-msg">Send</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/header.js"></script>
    <script src="./js/signIn.js"></script>
    <script src="./js/signUp.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>