<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="./Logo.png" type="image/x-icon">
    <title>ICC account sign in</title>
    <style type="text/css">
    :root {
        --input-padding-x: 1.5rem;
        --input-padding-y: 0.75rem;
    }

    .login,
    .image {
        min-height: 100vh;
    }

    .bg-image {
        background-image: url('./signbackg.jpg');
        background-size: cover;
        background-position: center;
    }

    .login-heading {
        font-weight: 300;
    }

    .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
        border-radius: 2rem;
    }

    .form-label-group {
        position: relative;
        margin-bottom: 1rem;
    }

    .form-label-group>input,
    .form-label-group>label {
        padding: var(--input-padding-y) var(--input-padding-x);
        height: auto;
        border-radius: 2rem;
    }

    .form-label-group>label {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        margin-bottom: 0;
        /* Override default `<label>` margin */
        line-height: 1.5;
        color: #495057;
        cursor: text;
        /* Match the input under the label */
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
    }

    .form-label-group input::-webkit-input-placeholder {
        color: transparent;
    }

    .form-label-group input:-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-moz-placeholder {
        color: transparent;
    }

    .form-label-group input::placeholder {
        color: transparent;
    }

    .form-label-group input:not(:placeholder-shown) {
        padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
        padding-bottom: calc(var(--input-padding-y) / 3);
    }

    .form-label-group input:not(:placeholder-shown)~label {
        padding-top: calc(var(--input-padding-y) / 3);
        padding-bottom: calc(var(--input-padding-y) / 3);
        font-size: 12px;
        color: #777;
    }

    /* Fallback for Edge
-------------------------------------------------- */

    @supports (-ms-ime-align: auto) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input::-ms-input-placeholder {
            color: #777;
        }
    }

    /* Fallback for IE
-------------------------------------------------- */

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input:-ms-input-placeholder {
            color: #777;
        }
    }
    </style>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="text/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">
                                    <?php
                                        if(isset($_GET['error'])){
                                            echo $_GET['error'];
                                        }else{
                                            echo "Sign In ICC!";
                                        }
                                    ?>
                                </h3>
                                <form action="../inc/login.php" method="POST">
                                    <div class="form-label-group">
                                        <input type="text" name="name" id="inputEmail" class="form-control" placeholder="Email address" autofocus>
                                        <label for="inputEmail">Your Registered English Name</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                                        <label for="inputPassword">Password</label>
                                    </div>
        
                                    <button name="submit" id="subb" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">ICC Account Sign in </button>
                                    <div class="text-center">
                                        <a class="small" href="#">Forgot password?->Contact Peter Ye Cao for Assistance<br/>1228748438@qq.com</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        document.getElementById('subb').addEventListener("click",function(e){
            if(document.getElementById('inputEmail').value.length === 0
               ){
                alert("You haven't input username.");
                e.preventDefault();
                document.getElementById('inputEmail').focus();
            }else if(document.getElementById('inputPassword').value.length === 0){
                alert("You haven't input password.");
                e.preventDefault();
                document.getElementById('inputPassword').focus();
            }
        });
    </script>
</body>

</html>