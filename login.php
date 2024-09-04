<!doctype html>
<html lang="en">

<head>
    <?php include("include/head.php"); ?>
</head>

<body>
    <!-- login section start -->
    <div class='login-section-wrap'>
        <div class="login-section">
            <div class="login-area">
                <div class='login-img'>
                    <img src="./images/login.png" alt="login-img" width="737px" height="825px" />
                    <div class='img-content'>
                        <h1 class='h1'>Lorem Ipsum is simply </h1>
                        <h2 class='h2'>Lorem Ipsum is simply </h2>
                    </div>
                </div>

                <div class='login-content'>
                    <div class='section-title'>Welcome to lorem..!</div>
                    <div class='section-links'>
                        <div class='section-links-item'>
                            <a href="#" target='_self' class='link-active'>Login</a>
                            <a href="#" target='_self' class='link-active link'>Register</a>
                        </div>
                    </div>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                    <form>
                        <div class="form-group">
                            <label for="username" class="form-label">User name</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your User name">
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter Your Password">
                        </div>
                        <div class="form-group-img">
                            <img src='./images/password.png' alt='password-hide' width='18px' height='16px' />
                        </div>

                        <div class="form-group form-check">
                            <div class='form-check'>
                                <input type="checkbox" class="form-check-input" id="checkbox">
                                <label class="form-check-label" for="checkbox">Rememebr me</label>
                            </div>
                            <a href="#" target="_self">Forgot Password</a>
                        </div>

                        <div class='cta-btn'>
                            <input type='submit' value='Login' />
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- login section end -->
    <?php include("include/script.php"); ?>
</body>

</html>