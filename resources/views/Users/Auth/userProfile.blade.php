@extends('layouts.app')

<div class="backdrop"></div>
<a class="backtop fas fa-arrow-up" href="#"></a>
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-5">
                <div class="header-top-welcome">
                    <p>Welcome to VENDOR section</p>
                </div>
            </div>
            <div class="col-md-5 col-lg-3">
                <div class="header-top-select">
                    <div class="header-select">
                        <i class="icofont-world"></i>
                        <select class="select">
                            <option value="english" selected>english</option>
                            <option value="bangali">bangali</option>
                            <option value="arabic">arabic</option>
                        </select>
                    </div>
                    <div class="header-select">
                        <i class="icofont-money"></i>
                        <select class="select">
                            <option value="english" selected>doller</option>
                            <option value="bangali">pound</option>
                            <option value="arabic">taka</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-4">
                <ul class="header-top-list">
                    <li><a href="offer.html">offers</a></li>
                    <li><a href="faq.html">need help</a></li>
                    <li><a href="contact.html">contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-media-group"><button class="header-user"><img src="{{asset('images/user.pn')}}g" alt="user"></button><a href="{{asset('greeny/dashboard')}}"><img src="images/logo.png" alt="logo"></a><button class="header-src"><i class="fas fa-search"></i></button></div>
            <a href="{{asset('dashboard')}}" class="header-logo"><img src="{{asset('images/logo.png')}}" alt="logo"></a><a href="login.html" class="header-widget" title="My Account"><img src="{{asset('images/user.png')}}" alt="user">
                @if(auth()->guard('users'))
                    <span>
                      Welcome, {{auth()->guard('users')->user()->name}}
                  </span>
                @else
                    <span>
                    Join Us
                </span>
                @endif
            </a>
            <form class="header-form"><input type="text" placeholder="Search anything..."><button><i class="fas fa-search"></i></button></form>
            <div class="header-widget-group"><a href="compare.html" class="header-widget" title="Compare List"><i class="fas fa-random"></i><sup>0</sup></a><a href="wishlist.html" class="header-widget" title="Wishlist"><i class="fas fa-heart"></i><sup>0</sup></a><button class="header-widget header-cart" title="Cartlist"><i class="fas fa-shopping-basket"></i><sup>9+</sup>
                    <span>
                        <div class="account-title">
                            <form method="post" action="{{route('vendorLogout')}}">
                                @csrf
                            <button type="submit" >Logout</button>
                            </form>
                        </div>
                    </span></button></div>
        </div>
    </div>
</header>
@include('layouts.navBar')
@include('layouts.categorySidebar')
@include('layouts.cartSidebar')
@include('layouts.navSideBar')




<div class="mobile-menu"><a href="index.html" title="Home Page"><i class="fas fa-home"></i><span>Home</span></a><button class="cate-btn" title="Category List"><i class="fas fa-list"></i><span>category</span></button><button class="cart-btn" title="Cartlist"><i class="fas fa-shopping-basket"></i><span>cartlist</span><sup>9+</sup></button><a href="wishlist.html" title="Wishlist"><i class="fas fa-heart"></i><span>wishlist</span><sup>0</sup></a><a href="compare.html" title="Compare List"><i class="fas fa-random"></i><span>compare</span><sup>0</sup></a></div>

<section class="inner-section single-banner" style="background: url({{asset('images/single-banner.jpg')}}) no-repeat center;">
    <div class="container">
        <h2>USER PROFILE</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('index.html')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">profile</li>
        </ol>
    </div>
</section>

<section class="inner-section profile-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title">
                        <h4>Your Profile</h4>
                        <button data-bs-toggle="modal" data-bs-target="#profile-edit">edit profile</button>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="profile-image"><a href="#"><img src="{{asset('images/user.png')}}" alt="user"></a></div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group"><label class="form-label">name</label><input class="form-control" type="text" value="{{auth()->guard('users')->user()->name}}"></div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group"><label class="form-label">Email</label><input class="form-control" type="email" value= "{{auth()->guard('users')->user()->email}}" > </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="profile-btn"><a href="change-password.html">change pass.</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title">
                        <h4>contact number</h4>
                        <button data-bs-toggle="modal" data-bs-target="#contact-add">add contact</button>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="profile-card contact active">
                                    <h6>primary</h6>
                                    <p>+8801838288389</p>
                                    <ul>
                                        <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#contact-edit"></button></li>
                                        <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="profile-card contact">
                                    <h6>secondary</h6>
                                    <p>+8801941101915</p>
                                    <ul>
                                        <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#contact-edit"></button></li>
                                        <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="profile-card contact">
                                    <h6>secondary</h6>
                                    <p>+8801747875727</p>
                                    <ul>
                                        <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#contact-edit"></button></li>
                                        <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title">
                        <h4>delivery address</h4>
                        <button data-bs-toggle="modal" data-bs-target="#address-add">add address</button>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="profile-card address active">
                                    <h6>Home</h6>
                                    <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
                                    <ul class="user-action">
                                        <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#address-edit"></button></li>
                                        <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="profile-card address">
                                    <h6>Office</h6>
                                    <p>east tejturi bazar, dhaka-1200. word no-04, road no-13/c, house no-4/b</p>
                                    <ul class="user-action">
                                        <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#address-edit"></button></li>
                                        <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="profile-card address">
                                    <h6>Bussiness</h6>
                                    <p>kawran bazar, dhaka-1100. word no-02, road no-13/d, house no-7/m</p>
                                    <ul class="user-action">
                                        <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#address-edit"></button></li>
                                        <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="account-card mb-0">
                    <div class="account-title">
                        <h4>payment option</h4>
                        <button data-bs-toggle="modal" data-bs-target="#payment-add">add card</button>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="payment-card payment active">
                                    <img src="{{asset('images/payment/png/01.png')}}" alt="payment">
                                    <h4>card number</h4>
                                    <p><span>****</span><span>****</span><span>****</span><sup>1876</sup></p>
                                    <h5>miron mahmud</h5>
                                    <button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="payment-card payment">
                                    <img src="{{asset('images/payment/png/02.png')}}" alt="payment">
                                    <h4>card number</h4>
                                    <p><span>****</span><span>****</span><span>****</span><sup>1876</sup></p>
                                    <h5>miron mahmud</h5>
                                    <button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="payment-card payment">
                                    <img src="{{asset('images/payment/png/03.png')}}" alt="payment">
                                    <h4>card number</h4>
                                    <p><span>****</span><span>****</span><span>****</span><sup>1876</sup></p>
                                    <h5>miron mahmud</h5>
                                    <button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="contact-add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title">
                    <h3>add new contact</h3>
                </div>
                <div class="form-group">
                    <label class="form-label">title</label>
                    <select class="form-select">
                        <option selected>choose title</option>
                        <option value="primary">primary</option>
                        <option value="secondary">secondary</option>
                    </select>
                </div>
                <div class="form-group"><label class="form-label">number</label><input class="form-control" type="text" placeholder="Enter your number"></div>
                <button class="form-btn" type="submit">save contact info</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="address-add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title">
                    <h3>add new address</h3>
                </div>
                <div class="form-group">
                    <label class="form-label">title</label>
                    <select class="form-select">
                        <option selected>choose title</option>
                        <option value="home">home</option>
                        <option value="office">office</option>
                        <option value="Bussiness">Bussiness</option>
                        <option value="academy">academy</option>
                        <option value="others">others</option>
                    </select>
                </div>
                <div class="form-group"><label class="form-label">address</label><textarea class="form-control" placeholder="Enter your address"></textarea></div>
                <button class="form-btn" type="submit">save address info</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="payment-add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title">
                    <h3>add new payment</h3>
                </div>
                <div class="form-group"><label class="form-label">card number</label><input class="form-control" type="text" placeholder="Enter your card number"></div>
                <button class="form-btn" type="submit">save card info</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title">
                    <h3>edit profile info</h3>
                </div>
                <div class="form-group"><label class="form-label">profile image</label><input class="form-control" type="file"></div>
                <div class="form-group"><label class="form-label">name</label><input class="form-control" type="text" value="Miron Mahmud"></div>
                <div class="form-group"><label class="form-label">email</label><input class="form-control" type="text" value="mironcoder@gmail.com"></div>
                <button class="form-btn" type="submit">save profile info</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="contact-edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title">
                    <h3>edit contact info</h3>
                </div>
                <div class="form-group">
                    <label class="form-label">title</label>
                    <select class="form-select">
                        <option value="primary" selected>primary</option>
                        <option value="secondary">secondary</option>
                    </select>
                </div>
                <div class="form-group"><label class="form-label">number</label><input class="form-control" type="text" value="+8801838288389"></div>
                <button class="form-btn" type="submit">save contact info</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="address-edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title">
                    <h3>edit address info</h3>
                </div>
                <div class="form-group">
                    <label class="form-label">title</label>
                    <select class="form-select">
                        <option value="home" selected>home</option>
                        <option value="office">office</option>
                        <option value="Bussiness">Bussiness</option>
                        <option value="academy">academy</option>
                        <option value="others">others</option>
                    </select>
                </div>
                <div class="form-group"><label class="form-label">address</label><textarea class="form-control" placeholder="jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A"></textarea></div>
                <button class="form-btn" type="submit">save address info</button>
            </form>
        </div>
    </div>
</div>
<section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 col-xl-7">
                <div class="news-text">
                    <h2>Get 20% Discount for Subscriber</h2>
                    <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                </div>
            </div>
            <div class="col-md-7 col-lg-6 col-xl-5">
                <form class="news-form"><input type="text" placeholder="Enter Your Email Address"><button><span><i class="icofont-ui-email"></i>Subscribe</span></button></form>
            </div>
        </div>
    </div>
</section>
<section class="intro-part">
    <div class="container">
        <div class="row intro-content">
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-truck"></i></div>
                    <div class="intro-content">
                        <h5>free home delivery</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
                    <div class="intro-content">
                        <h5>instant return policy</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-headset"></i></div>
                    <div class="intro-content">
                        <h5>quick support system</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-lock"></i></div>
                    <div class="intro-content">
                        <h5>secure payment way</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')