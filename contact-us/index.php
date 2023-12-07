<?php
$page = "Contact Us";
include './../includes/header.php'
?>

<body>
    <div class="content">
        <div class="container">
            <a href="./../" class="back-to-top d-flex justify-content-center align-items-center"><i class="bi bi-arrow-left-short"></i></a>
            <div class="row justify-content-center">
                <div class="col-md-10">

                    <div class="row justify-content-center">
                        <div class="col-md-6">

                            <h3 class="heading mb-4">Let's talk about everything!</h3>

                            <p><img src="./../assets/images/undraw-contact.svg" alt="Image" class="img-fluid"></p>

                        </div>
                        <div class="col-md-6">

                            <form class="mb-5" action="./send-email.php" method="post" id="contactForm" name="contactForm">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" value="Send Message" class="btn rounded-0 py-2 px-4">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </form>

                            <div id="form-message-warning mt-4"></div>
                            <div id="form-message-success">
                                Your message was sent, thank you!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="./../assets/js/main.js" defer></script>
    <script src="./../assets/js/jquery-3.3.1.min.js"></script>
    <script src="./../assets/js/popper.min.js"></script>
    <script src="./../assets/js/bootstrap.min.js"></script>
    <script src="./../assets/js/jquery.validate.min.js"></script>

</body>

</html>