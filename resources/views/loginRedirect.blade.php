@extends('layouts.app')
{{--@include('layouts.header')--}}

<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-5">
                <div class="header-top-welcome">
                    <p>Welcome to Ecomart in Your Dream Online Store!</p>
                </div>
            </div>
            <div class="col-md-5 col-lg-3">
                <div class="header-top-select">
                    <div class="header-select">
                        <i class="icofont-world"></i
                        ><select class="select">
                            <option value="english" selected>english</option>
                            <option value="bangali">bangali</option>
                            <option value="arabic">arabic</option>
                        </select>
                    </div>
                    <div class="header-select">
                        <i class="icofont-money"></i
                        ><select class="select">
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
            <div class="header-media-group">
                <button class="header-user">
                    <img src="{{asset('images/user.png')}}" alt="user" /></button
                ><a href="index.html"><img src="{{asset('images/logo.png')}}" alt="logo" /></a
                ><button class="header-src"><i class="fas fa-search"></i></button>
            </div>
            <a href="index.html" class="header-logo"
            ><img src="{{asset('images/logo.png')}}" alt="logo" /></a>
            <a href="login.html" class="header-widget" title="My Account">
               <span>REGISTER</span></a>


        </div>
    </div>
</header>






{{--Content Section--}}
<section class="inner-section single-banner" style="background: url({{asset('images/single-banner.jpg')}}) no-repeat center;">
    <div class="container">
        <h2>LOGIN</h2>

    </div>
</section>


<section class="inner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="top-filter">

                    <div class="filter-short">

                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 isotope-items" style="position: relative; height: 900px; margin-left: 310px">
            <div class="col all vegetables" style="position: absolute; left: 0px; top: 0px;">
                <div class="brand-wrap">
                    <div class="brand-media">
                        {{--<img src="{{asset('images/brand/01.jpg')}}" alt="brand">--}}
                        <div class="brand-overlay"><a href="{{route('adminLogin')}}"><i class="fas fa-user"></i></a></div>
                    </div>
                    <div>
                        </br>
                        </br>
                        </br>
                    </div>
                    <div class="brand-meta">
                        <h4>ADMIN</h4>
                        <p>Login as a admin</p>
                    </div>
                </div>
            </div>
            <div class="col all fruits" style="position: absolute; left: 264px; top: 0px;">
                <div class="brand-wrap">
                    <div class="brand-media">
                        <div class="brand-overlay"><a href="{{route('vendorLogin')}}"><i class="fas fa-user"></i></a></div>
                    </div>
                    <div>
                        </br>
                        </br>
                        </br>
                    </div>
                    <div class="brand-meta">
                        <h4>VENDOR</h4>
                        <p>Login as a vendor</p>
                    </div>
                </div>
            </div>
            <div class="col all drinks" style="position: absolute; left: 528px; top: 0px;">
                <div class="brand-wrap">
                    <div class="brand-media">
                        <div class="brand-overlay"><a href="{{route('userLogin')}}l"><i class="fas fa-user"></i></a></div>
                    </div>
                    <div>
                    </br>
                    </br>
                    </br>
                    </div>
                    <div class="brand-meta">
                        <h4>USER</h4>
                        <p>Login as a user</p>
                    </div>
                </div>
            </div>



        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="bottom-paginate">
                    <p class="page-info">Showing 12 of 60 Results</p>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">...</li>
                        <li class="page-item"><a class="page-link" href="#">60</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


@include('layouts.footer')
