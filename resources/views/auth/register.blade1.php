<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Register DBHomes</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo--><a class="brand-logo" href="index.html">
                            <h2 class="brand-text text-primary ms-1">DBHomes</h2>
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img
                                    class="img-fluid" src="../../../app-assets/images/pages/register-v2.svg"
                                    alt="Register V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Register-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bold mb-1">Adventure starts here 🚀</h2>
                                <p class="card-text mb-2">Make your app management easy and fun!</p>
                                <form class="auth-register-form mt-2" action="{{ route('register') }}" method="POST"
                                    onsubmit="return validateForm()">
                                    @csrf
                                    <div class="mb-1">
                                        <label class="form-label" for="register-username">Username</label>
                                        <input class="form-control" id="register-username" type="text" name="name"
                                            placeholder="johndoe" aria-describedby="register-username" autofocus=""
                                            tabindex="1" required />
                                        <small id="username-error" class="text-danger"></small>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-email">Email</label>
                                        <input class="form-control" id="register-email" type="email" name="email"
                                            placeholder="john@example.com" aria-describedby="register-email"
                                            tabindex="2" required />
                                        <small id="email-error" class="text-danger"></small>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-password">Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="register-password"
                                                type="password" name="password" placeholder="············"
                                                aria-describedby="register-password" tabindex="3" required />
                                            <span class="input-group-text cursor-pointer"><i
                                                    data-feather="eye"></i></span>
                                        </div>
                                        <small id="password-error" class="text-danger"></small>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-confirm-password">Confirm
                                            Password</label>
                                        <input class="form-control" id="register-confirm-password" type="password"
                                            name="password_confirmation" placeholder="············"
                                            aria-describedby="register-confirm-password" tabindex="4" required />
                                        <small id="confirm-password-error" class="text-danger"></small>
                                    </div>

                                    <div class="mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" id="register-privacy-policy" type="checkbox"
                                                tabindex="4" required />
                                            <label class="form-check-label" for="register-privacy-policy">I agree to <a
                                                    href="#">&nbsp;privacy policy & terms</a></label>
                                        </div>
                                        <small id="privacy-policy-error" class="text-danger"></small>
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="5">Sign up</button>
                                </form>

                                <p class="text-center mt-2"><span>Already have an account?</span>
                                <a href="{{ route('login') }}"><span>&nbsp;Sign in instead</span></a>
                            </p>
                                <div class="divider my-2">
                                    <div class="divider-text">or</div>
                                </div>
                                <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook"
                                        href="#"><i data-feather="facebook"></i></a><a class="btn btn-twitter white"
                                        href="#"><i data-feather="twitter"></i></a><a class="btn btn-google" href="#"><i
                                            data-feather="mail"></i></a><a class="btn btn-github" href="#"><i
                                            data-feather="github"></i></a></div>
                            </div>
                        </div>
                        <!-- /Register-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/auth-register.js"></script>
    <!-- END: Page JS-->

    <script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
    </script>
    <script>
    function validateForm() {
        var username = document.getElementById("register-username").value;
        var email = document.getElementById("register-email").value;
        var password = document.getElementById("register-password").value;
        var confirmPassword = document.getElementById("register-confirm-password").value;
        var privacyPolicy = document.getElementById("register-privacy-policy").checked;

        var usernameError = document.getElementById("username-error");
        var emailError = document.getElementById("email-error");
        var passwordError = document.getElementById("password-error");
        var confirmPasswordError = document.getElementById("confirm-password-error");
        var privacyPolicyError = document.getElementById("privacy-policy-error");

        usernameError.textContent = "";
        emailError.textContent = "";
        passwordError.textContent = "";
        confirmPasswordError.textContent = "";
        privacyPolicyError.textContent = "";

        if (!username) {
            usernameError.textContent = "Username is required";
            return false;
        }

        if (!email) {
            emailError.textContent = "Email is required";
            return false;
        }

        if (!password) {
            passwordError.textContent = "Password is required";
            return false;
        }

        if (password !== confirmPassword) {
            confirmPasswordError.textContent = "Passwords do not match";
            return false;
        }

        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if (!passwordPattern.test(password)) {
            passwordError.textContent =
                "Password must be at least 8 characters and include at least one uppercase letter, one lowercase letter, one digit, and one special character";
            return false;
        }

        if (!privacyPolicy) {
            privacyPolicyError.textContent = "You must agree to the privacy policy and terms";
            return false;
        }

        return true;
    }
    </script>

</body>
<!-- END: Body-->

</html>