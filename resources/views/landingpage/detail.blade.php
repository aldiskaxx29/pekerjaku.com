@extends('tamplate.app2')

@section('content')
{{-- <header class="header">
  <div class="header__top">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <div class="header__top__left">
                      <ul>
                          <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                          <li>Free Shipping for all Order of $99</li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="header__top__right">
                      <div class="header__top__right__social">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-linkedin"></i></a>
                          <a href="#"><i class="fa fa-pinterest-p"></i></a>
                      </div>
                      <div class="header__top__right__language">
                          <img src="img/language.png" alt="">
                          <div>English</div>
                          <span class="arrow_carrot-down"></span>
                          <ul>
                              <li><a href="#">Spanis</a></li>
                              <li><a href="#">English</a></li>
                          </ul>
                      </div>
                      <div class="header__top__right__auth">
                          <a href="#"><i class="fa fa-user"></i> Login</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-lg-3">
              <div class="header__logo">
                  <a href="./index.html"><img src="img/logo.png" alt=""></a>
              </div>
          </div>
          <div class="col-lg-6">
              <nav class="header__menu">
                  <ul>
                      <li><a href="./index.html">Home</a></li>
                      <li class="active"><a href="./shop-grid.html">Shop</a></li>
                      <li><a href="#">Pages</a>
                          <ul class="header__menu__dropdown">
                              <li><a href="./shop-details.html">Shop Details</a></li>
                              <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                              <li><a href="./checkout.html">Check Out</a></li>
                              <li><a href="./blog-details.html">Blog Details</a></li>
                          </ul>
                      </li>
                      <li><a href="./blog.html">Blog</a></li>
                      <li><a href="./contact.html">Contact</a></li>
                  </ul>
              </nav>
          </div>
          <div class="col-lg-3">
              <div class="header__cart">
                  <ul>
                      <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                      <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                  </ul>
                  <div class="header__cart__price">item: <span>$150.00</span></div>
              </div>
          </div>
      </div>
      <div class="humberger__open">
          <i class="fa fa-bars"></i>
      </div>
  </div>
</header> --}}
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero hero-normal">
  <div class="container">
      <div class="row">
          <div class="col-lg-3">
              <div class="hero__categories">
                  <div class="hero__categories__all">
                      <i class="fa fa-bars"></i>
                      <span>All departments</span>
                  </div>
                  <ul>
                      <li><a href="#">Fresh Meat</a></li>
                      <li><a href="#">Vegetables</a></li>
                      <li><a href="#">Fruit & Nut Gifts</a></li>
                      <li><a href="#">Fresh Berries</a></li>
                      <li><a href="#">Ocean Foods</a></li>
                      <li><a href="#">Butter & Eggs</a></li>
                      <li><a href="#">Fastfood</a></li>
                      <li><a href="#">Fresh Onion</a></li>
                      <li><a href="#">Papayaya & Crisps</a></li>
                      <li><a href="#">Oatmeal</a></li>
                      <li><a href="#">Fresh Bananas</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-9">
              <div class="hero__search">
                  <div class="hero__search__form">
                      <form action="#">
                          <div class="hero__search__categories">
                              All Categories
                              <span class="arrow_carrot-down"></span>
                          </div>
                          <input type="text" placeholder="What do yo u need?">
                          <button type="submit" class="site-btn">SEARCH</button>
                      </form>
                  </div>
                  <div class="hero__search__phone">
                      <div class="hero__search__phone__icon">
                          <i class="fa fa-phone"></i>
                      </div>
                      <div class="hero__search__phone__text">
                          <h5>+65 11.188.888</h5>
                          <span>support 24/7 time</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
{{-- <section class="breadcrumb-section set-bg" style="filter: brightness(50%),position: absolute,
          left: 0px,
          top: 0px,
          z-index: -1" 
  data-setbg="{{ Storage::url($data->user->image) }}">
  <div class="container" style="">
      <div class="row">
          <div class="col-lg-12 text-center">
              <div class="breadcrumb__text">
                  <h2>{{ $data->user->first_name }}</h2>
                  <div class="breadcrumb__option">
                      <a href="./index.html">Home</a>
                      <a href="./index.html">Vegetables</a>
                      <span>Vegetable’s Package</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section> --}}
<!-- Breadcrumb Section End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-6">
              <div class="product__details__pic">
                  <div class="product__details__pic__item">
                      <img class="product__details__pic__item--large"
                          src="{{ Storage::url($data->user->image) }}" alt="">
                  </div>
                  {{-- <div class="product__details__pic__slider owl-carousel">
                      <img data-imgbigurl="img/product/details/product-details-2.jpg"
                          src="img/product/details/thumb-1.jpg" alt="">
                      <img data-imgbigurl="img/product/details/product-details-3.jpg"
                          src="img/product/details/thumb-2.jpg" alt="">
                      <img data-imgbigurl="img/product/details/product-details-5.jpg"
                          src="img/product/details/thumb-3.jpg" alt="">
                      <img data-imgbigurl="img/product/details/product-details-4.jpg"
                          src="img/product/details/thumb-4.jpg" alt="">
                  </div> --}}
              </div>
          </div>
          <div class="col-lg-6 col-md-6">
              <div class="product__details__text">
                  <h3>{{ $data->user->first_name }} {{ $data->user->last_name }}</h3>
                  <div class="product__details__rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                      <span>(18 reviews)</span>
                  </div>
                  <div class="product__details__price">RP. {{ number_format($data->salary,0,',','.') }}</div>
                  <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam
                      vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet
                      quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p>
                  {{-- <div class="product__details__quantity">
                      <div class="quantity">
                          <div class="pro-qty">
                              <input type="text" value="1">
                          </div>
                      </div>
                  </div> --}}
                  @if (!empty(auth()->user()->first_name))
                  <a href="https://wa.me/62895334930931" class="primary-btn">Pesan Sekarang</a>
                  @else
                  <a href="/login" class="primary-btn">Pesan Sekarang</a>
                  @endif
                  {{-- <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a> --}}
                  <ul>
                      <li><b>Pendidikan</b> <span>{{ $data->education }}</span></li>
                      <li><b>Tinggi</b> <span>{{ $data->tall }} cm</span></li>
                      <li><b>Berat</b> <span>{{ $data->heavy }} kg</span></li>
                      <li><b>Tanggal Lahir</b> <span>{{ $data->date_of_birth }}</span></li>
                      <li><b>Suku Asal</b> <span>{{ $data->tribe_of_origin }}</span></li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-12">
              <div class="product__details__tab">
                  <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                              aria-selected="true">Description</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                              aria-selected="false">Information</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                              aria-selected="false">Reviews <span>(1)</span></a>
                      </li>
                  </ul>
                  <div class="tab-content">
                      <div class="tab-pane active" id="tabs-1" role="tabpanel">
                          <div class="product__details__tab__desc">
                              <h6>Products Infomation</h6>
                              <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                  Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus
                                  suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam
                                  vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada.
                                  Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat,
                                  accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a
                                  pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula
                                  elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus
                                  et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam
                                  vel, ullamcorper sit amet ligula. Proin eget tortor risus.</p>
                                  <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                  ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                  elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                  porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                  nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                                  Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed
                                  porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum
                                  sed sit amet dui. Proin eget tortor risus.</p>
                          </div>
                      </div>
                      <div class="tab-pane" id="tabs-2" role="tabpanel">
                          <div class="product__details__tab__desc">
                              <h6>Products Infomation</h6>
                              <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                  Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                  Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                  sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                  eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                  Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                  sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                  diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                  ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                  Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                  Proin eget tortor risus.</p>
                              <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                  ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                  elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                  porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                  nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                          </div>
                      </div>
                      <div class="tab-pane" id="tabs-3" role="tabpanel">
                          <div class="product__details__tab__desc">
                              <h6>Products Infomation</h6>
                              <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                  Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                  Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                  sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                  eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                  Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                  sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                  diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                  ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                  Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                  Proin eget tortor risus.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Product Details Section End -->

<!-- Related Product Section Begin -->
<section class="related-product">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="section-title related__product__title">
                  <h2>Pekerjaan</h2>
              </div>
          </div>
      </div>
      <div class="row">
        @foreach ($pekerja as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{ Storage::url($item->user->image) }}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="{{ route('pekerja.detail', $item->id) }}"><i class="fa fa-eye"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">{{ $item->user->first_name }} {{ $item->user->last_name }}</a></h6>
                        <h5>Rp. {{ number_format($item->salary, 0, ',', '.') }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
      </div>
  </div>
</section>
<!-- Related Product Section End -->
@endsection
