@extends('layout')

@section('content')
<div class="containerLogin"> 
    
    <div class="main"> 

        <div class="container a-container" id="a-container">
            <form class="form" id="a-form" method="post" action="{{route('loginOrSignUp')}}">
                @csrf
                <h2 class="form_title title">Create Account</h2>
                <input class="form__input" name="firstName" type="text" placeholder="First Name">
                <input class="form__input" name="lastName" type="text" placeholder="Last Name">
                <input class="form__input" name="phone" type="text" placeholder="Phone">
                <input class="form__input" name="email" type="text" placeholder="Email">
                <input class="form__input" name="password" type="password" placeholder="Password">
                <input type="hidden" name="req" value="signUp">
                <button type="submit" class="form__button button submit">SIGN UP</button>
            </form>
        </div>

        <div class="container b-container" id="b-container">
            <form class="form" id="b-form" method="post" action="{{route('loginOrSignUp')}}">
                @csrf
                <h2 class="form_title title">Sign in to Website</h2>
                <input class="form__input" name="email" type="text" placeholder="Email">
                <input class="form__input" name="password" type="password" placeholder="Password">
                <input type="hidden" name="req" value="login">
                <a class="form__link">Forgot your password?</a>
                <button class="form__button button submit">SIGN IN</button>
            </form>
        </div>


        <div class="switch" id="switch-cnt">

            <div class="switch__circle"></div>
            <div class="switch__circle switch__circle--t"></div>

            <div class="switch__container" id="switch-c1">
                <h2 class="switch__title title">Welcome Back !</h2>
                <p class="switch__description description">To keep connected with us please login with your personal info</p>
                <button class="switch__button button switch-btn">SIGN IN</button>
            </div>

            <div class="switch__container is-hidden" id="switch-c2">
                <h2 class="switch__title title">Hello Friend !</h2>
                <p class="switch__description description">Enter your personal details and start journey with us</p>
                <button class="switch__button button switch-btn">SIGN UP</button>
            </div>

        </div>

    </div>
                
</div>    
    
@endsection