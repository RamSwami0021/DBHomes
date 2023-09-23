<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <div>
        @include('header')
    </div>


    <section class="signup-wparrer">
        <div class="container">
            <div class="signup-sec">
                <div class="row">
                    <div class="col-sm-5 col-md-5">
                        <div class="signup-leftcon">
                            <img src="images/sign-up.webp" />
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-7">
                        <div class="signup-rightcon">
                            <h4>Start with your free account today</h4>
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
                                        placeholder="john@example.com" aria-describedby="register-email" tabindex="2"
                                        required />
                                    <small id="email-error" class="text-danger"></small>
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="register-mobile">Mobile Number</label>
                                    <input class="form-control" id="register-mobile" type="text" name="mobile_number"
                                        placeholder="Mobile Number" aria-describedby="register-mobile" tabindex="3"
                                        required />
                                    <small id="mobile-error" class="text-danger"></small>
                                </div>
                                <div class="mb-1">
                                    <label class="form-label">User Type</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="user_type" id="buyer"
                                            value="buyer" tabindex="4" required />
                                        <label class="form-check-label" for="buyer">Buyer</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="user_type" id="seller"
                                            value="seller" tabindex="5" required />
                                        <label class="form-check-label" for="seller">Seller</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="user_type" id="agent"
                                            value="agent" tabindex="6" required />
                                        <label class="form-check-label" for="agent">Agent</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="user_type" id="owner"
                                            value="owner" tabindex="7" required />
                                        <label class="form-check-label" for="owner">Owner</label>
                                    </div>
                                    <small id="user-type-error" class="text-danger"></small>
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="register-password">Password</label>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input class="form-control form-control-merge" id="register-password"
                                            type="password" name="password" placeholder="············"
                                            aria-describedby="register-password" tabindex="3" required />
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>
                                    <small id="password-error" class="text-danger"></small>
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="register-confirm-password">Confirm Password</label>
                                    <input class="form-control" id="register-confirm-password" type="password"
                                        name="password_confirmation" placeholder="············"
                                        aria-describedby="register-confirm-password" tabindex="4" required />
                                    <small id="confirm-password-error" class="text-danger"></small>
                                </div>

                                <div class="mb-1">
                                    <div class="form-check">
                                        <input class="form-check-input" id="register-privacy-policy" type="checkbox"
                                            tabindex="8" required />
                                        <label class="form-check-label" for="register-privacy-policy">I agree to <a
                                                href="#">&nbsp;privacy policy & terms</a></label>
                                    </div>
                                    <small id="privacy-policy-error" class="text-danger"></small>
                                </div>
                                <button class="btn btn-primary w-100" tabindex="9">Sign up</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>




    <div>
        @include('footer')
    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="secBG/header.js"></script>
    <script src="secBG/footer.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>

    <script>
    function validateForm() {
        var username = document.getElementById("register-username").value;
        var email = document.getElementById("register-email").value;
        var mobile = document.getElementById("register-mobile").value;
        var password = document.getElementById("register-password").value;
        var confirmPassword = document.getElementById("register-confirm-password").value;
        var privacyPolicy = document.getElementById("register-privacy-policy").checked;
        var userType = document.querySelector('input[name="user_type"]:checked');

        var usernameError = document.getElementById("username-error");
        var emailError = document.getElementById("email-error");
        var mobileError = document.getElementById("mobile-error");
        var passwordError = document.getElementById("password-error");
        var confirmPasswordError = document.getElementById("confirm-password-error");
        var privacyPolicyError = document.getElementById("privacy-policy-error");
        var userTypeError = document.getElementById("user-type-error");

        usernameError.textContent = "";
        emailError.textContent = "";
        mobileError.textContent = "";
        passwordError.textContent = "";
        confirmPasswordError.textContent = "";
        privacyPolicyError.textContent = "";
        userTypeError.textContent = "";

        if (!username) {
            usernameError.textContent = "Username is required";
            return false;
        }

        if (!email) {
            emailError.textContent = "Email is required";
            return false;
        }

        if (!mobile) {
            mobileError.textContent = "Mobile number is required";
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

        if (!emailPattern.test(email)) {
            emailError.textContent = "Invalid email format";
            return false;
        }

        var passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[\W_]).{8,}$/;

        if (!passwordPattern.test(password)) {
            passwordError.textContent =
                "Password must be at least 8 characters and include at least one uppercase letter, one lowercase letter, one digit, and one special character";
            return false;
        }

        if (!privacyPolicy) {
            privacyPolicyError.textContent = "You must agree to the privacy policy and terms";
            return false;
        }

        if (!userType) {
            userTypeError.textContent = "Please select a user type";
            return false;
        }

        // Additional URL validation code here

        return true;
    }
</script>


</body>

</html>