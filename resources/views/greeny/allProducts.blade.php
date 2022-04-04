@extends('layouts.app')


@include('layouts.header')
@include('layouts.navBar')


@include('layouts.categorySidebar')
<aside class="cart-sidebar">
    <div class="cart-header">
        <div class="cart-total"><i class="fas fa-shopping-basket"></i><span>total item (5)</span></div>
        <button class="cart-close"><i class="icofont-close"></i></button>
    </div>
    <ul class="cart-list">
        <li class="cart-item">
            <div class="cart-media"><a href="#"><img src="{{asset('images/product/01.jpg')}}" alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.html">existing product name</a></h6>
                    <p>Unit Price - $8.75</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                    <h6>$56.98</h6>
                </div>
            </div>
        </li>
        <li class="cart-item">
            <div class="cart-media"><a href="#"><img src="{{asset('images/product/02.jpg')}}" alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.html">existing product name</a></h6>
                    <p>Unit Price - $8.75</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                    <h6>$56.98</h6>
                </div>
            </div>
        </li>
        <li class="cart-item">
            <div class="cart-media"><a href="#"><img src="{{asset('images/product/03.jpg')}}" alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.html">existing product name</a></h6>
                    <p>Unit Price - $8.75</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                    <h6>$56.98</h6>
                </div>
            </div>
        </li>
        <li class="cart-item">
            <div class="cart-media"><a href="#"><img src="{{asset('images/product/04.jpg')}}" alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.html">existing product name</a></h6>
                    <p>Unit Price - $8.75</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                    <h6>$56.98</h6>
                </div>
            </div>
        </li>
        <li class="cart-item">
            <div class="cart-media"><a href="#"><img src="{{asset('images/product/05.jpg')}}" alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.html">existing product name</a></h6>
                    <p>Unit Price - $8.75</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                    <h6>$56.98</h6>
                </div>
            </div>
        </li>
    </ul>
    <div class="cart-footer">
        <button class="coupon-btn">Do you have a coupon code?</button>
        <form class="coupon-form"><input type="text" placeholder="Enter your coupon code"><button type="submit"><span>apply</span></button></form>
        <a class="cart-checkout-btn" href="checkout.html"><span class="checkout-label">Proceed to Checkout</span><span class="checkout-price">$369.78</span></a>
    </div>
</aside>
<aside class="nav-sidebar">
    <div class="nav-header"><a href="#"><img src="{{asset('images/logo.png')}}" alt="logo"></a><button class="nav-close"><i class="icofont-close"></i></button></div>
    <div class="nav-content">
        <div class="nav-btn"><a href="login.html" class="btn btn-inline"><i class="fa fa-unlock-alt"></i><span>join here</span></a></div>
        <div class="nav-select-group">
            <div class="nav-select">
                <i class="icofont-world"></i>
                <select class="select">
                    <option value="english" selected>English</option>
                    <option value="bangali">Bangali</option>
                    <option value="arabic">Arabic</option>
                </select>
            </div>
            <div class="nav-select">
                <i class="icofont-money"></i>
                <select class="select">
                    <option value="english" selected>Doller</option>
                    <option value="bangali">Pound</option>
                    <option value="arabic">Taka</option>
                </select>
            </div>
        </div>
        <ul class="nav-list">
            <li>
                <a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                <ul class="dropdown-list">
                    <li><a href="home-grid.html">Home grid</a></li>
                    <li><a href="index.html">Home index</a></li>
                    <li><a href="home-classic.html">Home classic</a></li>
                    <li><a href="home-standard.html">Home standard</a></li>
                    <li><a href="home-category.html">Home category</a></li>
                </ul>
            </li>
            <li>
                <a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                <ul class="dropdown-list">
                    <li><a href="shop-5column.html">shop 5 column</a></li>
                    <li><a href="shop-4column.html">shop 4 column</a></li>
                    <li><a href="shop-3column.html">shop 3 column</a></li>
                    <li><a href="shop-2column.html">shop 2 column</a></li>
                    <li><a href="shop-1column.html">shop 1 column</a></li>
                </ul>
            </li>
            <li>
                <a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                <ul class="dropdown-list">
                    <li><a href="product-tab.html">product tab</a></li>
                    <li><a href="product-grid.html">product grid</a></li>
                    <li><a href="product-video.html">product video</a></li>
                    <li><a href="product-simple.html">product simple</a></li>
                </ul>
            </li>
            <li>
                <a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                <ul class="dropdown-list">
                    <li><a href="profile.html">profile</a></li>
                    <li><a href="wallet.html">wallet</a></li>
                    <li><a href="wishlist.html">wishlist</a></li>
                    <li><a href="compare.html">compare</a></li>
                    <li><a href="checkout.html">checkout</a></li>
                    <li><a href="orderlist.html">order history</a></li>
                    <li><a href="invoice.html">order invoice</a></li>
                    <li><a href="email-template.html">email template</a></li>
                </ul>
            </li>
            <li>
                <a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentic</a>
                <ul class="dropdown-list">
                    <li><a href="login.html">login</a></li>
                    <li><a href="register.html">register</a></li>
                    <li><a href="reset-password.html">reset password</a></li>
                    <li><a href="change-password.html">change password</a></li>
                </ul>
            </li>
            <li>
                <a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                <ul class="dropdown-list">
                    <li><a href="blog-grid.html">blog grid</a></li>
                    <li><a href="blog-standard.html">blog standard</a></li>
                    <li><a href="blog-details.html">blog details</a></li>
                    <li><a href="blog-author.html">blog author</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="offer.html"><i class="icofont-sale-discount"></i>offers</a></li>
            <li><a class="nav-link" href="about.html"><i class="icofont-info-circle"></i>about us</a></li>
            <li><a class="nav-link" href="faq.html"><i class="icofont-support-faq"></i>need help</a></li>
            <li><a class="nav-link" href="contact.html"><i class="icofont-contacts"></i>contact us</a></li>
            <li><a class="nav-link" href="privacy.html"><i class="icofont-warning"></i>privacy policy</a></li>
            <li><a class="nav-link" href="coming-soon.html"><i class="icofont-options"></i>coming soon</a></li>
            <li><a class="nav-link" href="error.html"><i class="icofont-ui-block"></i>404 error</a></li>
            <li><a class="nav-link" href="login.html"><i class="icofont-logout"></i>logout</a></li>
        </ul>
        <div class="nav-info-group">
            <div class="nav-info">
                <i class="icofont-ui-touch-phone"></i>
                <p><small>call us</small><span>(+880) 183 8288 389</span></p>
            </div>
            <div class="nav-info">
                <i class="icofont-ui-email"></i>
                <p><small>email us</small><span>support@example.com</span></p>
            </div>
        </div>
        <div class="nav-footer">
            <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
        </div>
    </div>
</aside>
<div class="mobile-menu"><a href="index.html" title="Home Page"><i class="fas fa-home"></i><span>Home</span></a><button class="cate-btn" title="Category List"><i class="fas fa-list"></i><span>category</span></button><button class="cart-btn" title="Cartlist"><i class="fas fa-shopping-basket"></i><span>cartlist</span><sup>9+</sup></button><a href="wishlist.html" title="Wishlist"><i class="fas fa-heart"></i><span>wishlist</span><sup>0</sup></a><a href="compare.html" title="Compare List"><i class="fas fa-random"></i><span>compare</span><sup>0</sup></a></div>
<div class="modal fade" id="product-view">
    <div class="modal-dialog">
        <div class="modal-content">
            <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
            <div class="product-view">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="view-gallery">
                            <div class="view-label-group"><label class="view-label new">new</label><label class="view-label off">-10%</label></div>
                            <ul class="preview-slider slider-arrow">
                                <li><img src="{{asset('images/product/01.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('images/product/01.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('images/product/01.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('images/product/01.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('images/product/01.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('images/product/01.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('images/product/01.jpg')}}" alt="product"></li>
                            </ul>
                            <ul class="thumb-slider">
                                <li><img src="{{asset('images/product/01.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('images/product/01.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('images/product/01.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('images/product/01.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('images/product/01.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('images/product/01.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('images/product/01.jpg')}}" alt="product"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="view-details">
                            <h3 class="view-name"><a href="product-video.html">existing product name</a></h3>
                            <div class="view-meta">
                                <p>SKU:<span>1234567</span></p>
                                <p>BRAND:<a href="#">radhuni</a></p>
                            </div>
                            <div class="view-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.html">(3 reviews)</a></div>
                            <h3 class="view-price"><del>$38.00</del><span>$24.00<small>/per kilo</small></span></h3>
                            <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit fuga</p>
                            <div class="view-list-group">
                                <label class="view-list-title">tags:</label>
                                <ul class="view-tag-list">
                                    <li><a href="#">organic</a></li>
                                    <li><a href="#">vegetable</a></li>
                                    <li><a href="#">chilis</a></li>
                                </ul>
                            </div>
                            <div class="view-list-group">
                                <label class="view-list-title">Share:</label>
                                <ul class="view-share-list">
                                    <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                    <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                    <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                    <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                </ul>
                            </div>
                            <div class="view-add-group">
                                <button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add to cart</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                            </div>
                            <div class="view-action-group"><a class="view-wish wish" href="#" title="Add Your Wishlist"><i class="icofont-heart"></i><span>add to wish</span></a><a class="view-compare" href="compare.html" title="Compare This Item"><i class="fas fa-random"></i><span>Compare This</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>Shop 1 Column</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">shop-1column</li>
        </ol>
    </div>
</section>

{{-- inner section--}}
<section class="inner-section shop-part">
    <div class="container">
        <div class="row content-reverse">
            <div class="col-lg-3">
                <div class="shop-widget-promo"><a href="#"><img src="{{asset('images/promo/shop/01.jpg')}}" alt="promo"></a></div>
                <div class="shop-widget">
                    <h6 class="shop-widget-title">Filter by Price</h6>
                    <form>
                        <div class="shop-widget-group"><input type="text" placeholder="Min - 00"><input type="text" placeholder="Max - 5k"></div>
                        <button class="shop-widget-btn"><i class="fas fa-search"></i><span>search</span></button>
                    </form>
                </div>
                <div class="shop-widget">
                    <h6 class="shop-widget-title">Filter by Rating</h6>
                    <form>
                        <ul class="shop-widget-list">
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="feat1"><label for="feat1"><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i></label></div>
                                <span class="shop-widget-number">(13)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="feat2"><label for="feat2"><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star"></i></label></div>
                                <span class="shop-widget-number">(28)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="feat3"><label for="feat3"><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label></div>
                                <span class="shop-widget-number">(35)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="feat4"><label for="feat4"><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label></div>
                                <span class="shop-widget-number">(47)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="feat5"><label for="feat5"><i class="fas fa-star active"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label></div>
                                <span class="shop-widget-number">(59)</span>
                            </li>
                        </ul>
                        <button class="shop-widget-btn"><i class="far fa-trash-alt"></i><span>clear filter</span></button>
                    </form>
                </div>
                <div class="shop-widget">
                    <h6 class="shop-widget-title">Filter by Tag</h6>
                    <form>
                        <ul class="shop-widget-list">
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="tag1"><label for="tag1">new items</label></div>
                                <span class="shop-widget-number">(13)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="tag2"><label for="tag2">sale items</label></div>
                                <span class="shop-widget-number">(28)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="tag3"><label for="tag3">rating items</label></div>
                                <span class="shop-widget-number">(35)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="tag4"><label for="tag4">feature items</label></div>
                                <span class="shop-widget-number">(47)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="tag5"><label for="tag5">discount items</label></div>
                                <span class="shop-widget-number">(59)</span>
                            </li>
                        </ul>
                        <button class="shop-widget-btn"><i class="far fa-trash-alt"></i><span>clear filter</span></button>
                    </form>
                </div>
                <div class="shop-widget">
                    <h6 class="shop-widget-title">Filter by Brand</h6>
                    <form>
                        <input class="shop-widget-search" type="text" placeholder="Search...">
                        <ul class="shop-widget-list shop-widget-scroll">
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand1"><label for="brand1">mari gold</label></div>
                                <span class="shop-widget-number">(13)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand2"><label for="brand2">tredar</label></div>
                                <span class="shop-widget-number">(28)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand3"><label for="brand3">keya</label></div>
                                <span class="shop-widget-number">(35)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand4"><label for="brand4">diamond</label></div>
                                <span class="shop-widget-number">(47)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand5"><label for="brand5">lilly's</label></div>
                                <span class="shop-widget-number">(59)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand6"><label for="brand6">fremant</label></div>
                                <span class="shop-widget-number">(64)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand7"><label for="brand7">avocads</label></div>
                                <span class="shop-widget-number">(77)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand8"><label for="brand8">boroclas</label></div>
                                <span class="shop-widget-number">(85)</span>
                            </li>
                        </ul>
                        <button class="shop-widget-btn"><i class="far fa-trash-alt"></i><span>clear filter</span></button>
                    </form>
                </div>
                <div class="shop-widget">
                    <h6 class="shop-widget-title">Filter by Category</h6>
                    <form>
                        <input class="shop-widget-search" type="text" placeholder="Search...">
                        <ul class="shop-widget-list shop-widget-scroll">
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate1"><label for="cate1">vegetables</label></div>
                                <span class="shop-widget-number">(13)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate2"><label for="cate2">groceries</label></div>
                                <span class="shop-widget-number">(28)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate3"><label for="cate3">fruits</label></div>
                                <span class="shop-widget-number">(35)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate4"><label for="cate4">dairy farm</label></div>
                                <span class="shop-widget-number">(47)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate5"><label for="cate5">sea foods</label></div>
                                <span class="shop-widget-number">(59)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate6"><label for="cate6">diet foods</label></div>
                                <span class="shop-widget-number">(64)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate7"><label for="cate7">dry foods</label></div>
                                <span class="shop-widget-number">(77)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate8"><label for="cate8">fast foods</label></div>
                                <span class="shop-widget-number">(85)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate9"><label for="cate9">drinks</label></div>
                                <span class="shop-widget-number">(92)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate10"><label for="cate10">coffee</label></div>
                                <span class="shop-widget-number">(21)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate11"><label for="cate11">meats</label></div>
                                <span class="shop-widget-number">(14)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate12"><label for="cate12">fishes</label></div>
                                <span class="shop-widget-number">(56)</span>
                            </li>
                        </ul>
                        <button class="shop-widget-btn"><i class="far fa-trash-alt"></i><span>clear filter</span></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-filter">
                            <div class="filter-show">
                                <label class="filter-label">Show :</label>
                                <select class="form-select filter-select">
                                    <option value="1">12</option>
                                    <option value="2">24</option>
                                    <option value="3">36</option>
                                </select>
                            </div>
                            <div class="filter-short">
                                <label class="filter-label">Short by :</label>
                                <select class="form-select filter-select">
                                    <option selected>default</option>
                                    <option value="3">trending</option>
                                    <option value="1">featured</option>
                                    <option value="2">recommend</option>
                                </select>
                            </div>
                            <div class="filter-action"><a href="shop-3column.html" title="Three Column"><i class="fas fa-th"></i></a><a href="shop-2column.html" title="Two Column"><i class="fas fa-th-large"></i></a><a href="shop-1column.html" class="active" title="One Column"><i class="fas fa-th-list"></i></a></div>
                        </div>
                    </div>
                </div>


                {{--product display part--}}
                <div class="row">


                    @foreach($products as $p)

                    <div class="col">
                        <div class="product-standard">
                            <div class="standard-label-group"><label class="standard-label off">-15%</label></div>
                            <div class="standard-media">
                                <a class="standard-image" href="product-video.html"><img src="{{asset ('images/product/01.jpg')}}" alt="product"></a>
                                <div class="standard-widget"><a title="Product Compare" href="compare.html" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                            </div>
                            <div class="standard-content">
                                <h4 class="standard-name"><a href="product-video.html">{{$p->product_name}}</a></h4>
                                <h5 class="standard-price"><del>$34</del><span>$28<small>/piece</small></span></h5>
                                <div class="standard-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.html">(3)</a></div>
                                <p class="standard-desc"> {{$p->desc}}</p>
                                <div class="standard-action-group">
                                    <button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add to cart</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                                    <button class="standard-wish wish" title="Add to Wishlist"><i class="fas fa-heart"></i><span>add to wish</span></button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>



                </div>
                {{--product display part end--}}



                {{--paginate part--}}
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
        </div>
    </div>
</section>
{{-- inner section--}}

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
