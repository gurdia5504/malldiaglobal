
<head>
    <title>Connexion</title>



</head>
<style type="text/css">
    .wrapper #error {
        background: red;
        color: white;
        padding: 5px;
        font-size: 18px;
        text-align: center;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }
</style>
<style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    html,
    body {
        display: grid;
        height: 100%;
        width: 100%;
        place-items: center;
        background: #f2f2f2;
    }

    ::selection {
        background: #bb2782;
        color: #fff;
    }

    .wrapper {
        width: 380px;
        background: #fff;
        border-radius: 15px;
        box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
    }

    .wrapper .title {
        font-size: 35px;
        font-weight: 600;
        text-align: center;
        line-height: 100px;
        color: #fff;
        user-select: none;
        border-radius: 15px 15px 0 0;
        background-color: #bb2782;
    }

    .wrapper form {
        padding: 10px 30px 50px 30px;
    }

    .wrapper form .field {
        height: 50px;
        width: 100%;
        margin-top: 20px;
        position: relative;
    }

    .wrapper form .field input {
        height: 100%;
        width: 100%;
        outline: none;
        font-size: 17px;
        padding-left: 20px;
        border: 1px solid lightgrey;
        border-radius: 25px;
        transition: all 0.3s ease;
    }

    .wrapper form .field input:focus,
    form .field input:valid {
        border-color: #bb2782;
    }

    .wrapper form .field label {
        position: absolute;
        top: 50%;
        left: 20px;
        color: #999999;
        font-weight: 400;
        font-size: 17px;
        pointer-events: none;
        transform: translateY(-50%);
        transition: all 0.3s ease;
    }

    form .field input:focus~label,
    form .field input:valid~label {
        top: 0%;
        font-size: 16px;
        color: #bb2782;
        background: #fff;
        transform: translateY(-50%);
    }

    form .content {
        display: flex;
        width: 100%;
        height: 50px;
        font-size: 16px;
        align-items: center;
        justify-content: space-around;
    }

    form .content .checkbox {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    form .content input {
        width: 15px;
        height: 15px;
        background: red;
    }

    form .content label {
        color: #262626;
        user-select: none;
        padding-left: 5px;
    }

    form .content .pass-link {
        color: "";
    }

    form .field input[type="submit"] {
        color: #fff;
        border: none;
        padding-left: 0;
        margin-top: -10px;
        font-size: 20px;
        font-weight: 500;
        cursor: pointer;
        background-color: #bb2782;
        transition: all 0.3s ease;
    }

    form .field input[type="submit"]:active {
        transform: scale(0.95);
    }

    form .signup-link {
        color: #262626;
        margin-top: 20px;
        text-align: center;
    }

    form .pass-link a,
    form .signup-link a {
        color: #bb2782;
        text-decoration: none;
    }

    form .pass-link a:hover,
    form .signup-link a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .wrapper {
            max-width: 90%;
        }
    }

    @media (max-width: 480px) {
        .wrapper {
            margin: 50px auto;
            padding: 10px;
        }
    }
</style>



<div id="wrapper" class="wrapper">
    <div id="login-title" class="title">Forgot your password?


    </div>
    <!-- Session Status -->
    <x-auth.session-status :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth.validation-errors :errors="$errors" />
    <form class="h-add-bottom" method="POST" action="{{ route('login') }}">
        @csrf

       <!-- Email Address -->
        <x-auth.input-email />

        <x-auth.submit title="Email Password Reset Link" />

    </form>
</div>
{{-- <section class="container">
    <div id="wrapper" class="wrapper">
    <div class="row row-x-center s-styles">
        <div class="column large-6 tab-12">

            <!-- Session Status -->
            <x-auth.session-status :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth.validation-errors :errors="$errors" />

            <p class="h-add-bottom">@lang('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.')</p>
            <form class="h-add-bottom" method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <x-auth.input-email />

                <x-auth.submit title="Email Password Reset Link" />

            </form>
        </div>
    </div>
    </div>
</section> --}}

