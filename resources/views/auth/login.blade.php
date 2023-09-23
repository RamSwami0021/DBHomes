<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div>
@include('header')
</div>





    <section class="login-wrapper">
        <div class="container">
            <div class="login-sec">
                <form  action="{{ route('login') }}" method="POST" onsubmit="return validateForm()">
                @csrf
                <div class="row">
                    <div class="col-sm-5 col-md-5">
                        <div class="login-leftcon">
                            <img src="images/login.gif"/>
                            <div class="login-lefttext">
                                <h5><span>Do more</span> with your homeonline account</h5>
                                <p>Search 3 million + properties across 70+ Cities, explore curated showcase of NRI/luxury properties, post single property for Free, Explore events & more</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-7">
                        <div class="login-rightcon">
                            <h4>Log In</h4>
                            <p>for a personalized Homeonline</p>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Enter email" aria-label="Enter email or mobile" aria-describedby="basic-addon1"/>
                                <small id="email-error" class="text-danger"></small>
                            </div>
                            <div class="input-group mb-3 login-pass">
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" aria-label="Enter Password" aria-describedby="basic-addon2"/>
                                <small id="email-error" class="text-danger"></small>
                                <span class="input-group-text" id="basic-addon2">Login With OTP?</span>
                            </div>
                            <ul>
                                <li><button>Log In</button></li>
                                <li class="forget-passlog"><a to="/">Forget Password?</a></li>
                            </ul>
                            <div class="log-rig-bottom">
                                <h5>Don't have a Homeonline account?</h5>
                                <a to="">Sign up Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>






    <div>
  @include('footer')
  </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="secBG/header.js"></script>
    <script src="secBG/footer.js"></script>
    <script>
    function validateForm() {
        var email = document.getElementById("login-email").value;
        var password = document.getElementById("login-password").value;
        var emailError = document.getElementById("email-error");
        var passwordError = document.getElementById("password-error");

        emailError.textContent = "";
        passwordError.textContent = "";

        if (!email) {
            emailError.textContent = "Email is required";
            return false;
        }

        if (!password) {
            passwordError.textContent = "Password is required";
            return false;
        }

        return true;
    }
</script>
    
</body>
</html>