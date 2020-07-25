<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../static/css/index.css">
    <link rel="stylesheet" href="../static/css/contact.css">
    
    <title>Vendor Registeration</title>
</head>
<body class="websitebody">
    
    <?php include '..//header.php'?>
        <!-- navbar -->
        <!-- form -->
        <div class="container-contact100">
            <div class="wrap-contact100">
                <form action="../index.php" class="contact100-form validate-form" method="POST">
                    <span class="contact100-form-title">
                        Register as Vendor
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: example@email-provider.com">
                        <span class="label-input100">Official Email</span>
                        <input class="input100" type="email" name="email" placeholder="Enter your company's email">
                        <span class="focus-input100"></span>
                    </div>
    
                    <div class="wrap-input100 validate-input" data-validate="Name is required"> 
                        <!-- PLS NOTE DATA VALIDATE ClASS AFTER JS IS CONNECTED... CREATE IT'S UI TOO..... -->
                        <span class="label-input100">First Name</span>
                        <input class="input100" type="text" name="fname" placeholder="Enter your first name">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Name is required"> 
                        <!-- PLS NOTE DATA VALIDATE ClASS AFTER JS IS CONNECTED... CREATE IT'S UI TOO..... -->
                        <span class="label-input100">Last Name</span>
                        <input class="input100" type="text" name="lname" placeholder="Enter your last name">
                        <span class="focus-input100"></span>
                    </div>
    
                    

                    <div class="wrap-input100 validate-input" data-validate=""> 
                        <!-- PLS NOTE DATA VALIDATE ClASS AFTER JS IS CONNECTED... CREATE IT'S UI TOO..... -->
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Enter a password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate=""> 
                        <!-- PLS NOTE DATA VALIDATE ClASS AFTER JS IS CONNECTED... CREATE IT'S UI TOO..... -->
                        <span class="label-input100">Mobile Number</span>
                        <input class="input100" type="tel" name="phone" placeholder="Enter your mobile number">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "">
                        <span class="label-input100">Company's Type</span>
                        <input class="input100" type="text" name="ctype" placeholder="Enter your company's sector">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate=""> 
                        <!-- PLS NOTE DATA VALIDATE ClASS AFTER JS IS CONNECTED... CREATE IT'S UI TOO..... -->
                        <span class="label-input100">Location</span>
                        <input class="input100" type="text" name="location" placeholder="Enter your Location">
                        <span class="focus-input100"></span>
                    </div>
    
                    
                        <span class="focus-input100"></span>
                    <!-- <div class="wrap-input100 validate-input" data-validate = "Message is required">
                        <span class="label-input100">Message</span>
                        <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
                        <span class="focus-input100"></span>
                    </div> -->
                    <div class="container-contact100-form-btn ">
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>
                            <button class="contact100-form-btn">
                                <span>
                                    Submit
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- form -->

            <!-- Footer -->
    <?php include '..//footer.php'?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>