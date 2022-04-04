@extends('layouts.app')

<section class="user-form-part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10">
                <div class="user-form-logo"><a href="{{route('vendorDashboard')}}"><img src="{{asset('images/logo.png')}}" alt="logo"></a></div>
                <div class="user-form-card">
                    <div class="user-form-title">
                        <h2>welcome!</h2>
                        <p>Use your credentials to access the vendor page</p>
                    </div>

                    {{--FORM PART--}}
                    <div class="user-form-group">
                        <ul class="user-form-social">
                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>login with facebook</a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>login with twitter</a></li>
                            <li><a href="#" class="google"><i class="fab fa-google"></i>login with google</a></li>
                            <li><a href="#" class="instagram"><i class="fab fa-instagram"></i>login with instagram</a></li>
                        </ul>
                        <div class="user-form-divider">
                            <p>or</p>
                        </div>
                        <form class="user-form" action="{{ route('vendorLogin')}}"  method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter your email">
                            </div>

                            <div class="form-group">
                                <input type="password"  name="password" class="form-control" placeholder="Enter your password">
                            </div>

                            <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="check">
                                        <label class="form-check-label" for="check">Remember Me</label>
                            </div>

                            <div class="form-button">
                                <button type="submit">login</button>
                                <p>Forgot your password?<a href="{{asset('reset-password.html')}}">reset here</a></p>
                            </div>
                        </form>
                    </div>
                    {{--END FORM PART--}}

                </div>
                <div class="user-form-remind">
                    <p>Don't have any account?<a href="{{asset('register.html')}}">register here</a></p>
                </div>
                <div class="user-form-footer">
                    <p>Greeny | &COPY; Copyright by <a href="#">Mironcoder</a></p>
                </div>
            </div>
        </div>
    </div>
</section>




