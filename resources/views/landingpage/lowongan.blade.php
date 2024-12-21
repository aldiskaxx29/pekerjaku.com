@extends('tamplate.app')

@section('content')
    <!-- Hero Section Begin -->
    <section class="categories">
      <div class="container">
          <div>
            <h4>Lowongan Kerja Rumah Tangga</h4>
          </div>
          <div class="row">
              <div class="categories__slider owl-carousel">
                  {{-- @foreach ($kategori as $item)
                      <div class="col-lg-3">
                          <div class="categories__item set-bg" data-setbg="img/content/kategori.jpg">
                              <h5><a href="#">{{ $item->name }}</a></h5>
                          </div>
                      </div>
                  @endforeach --}}
                  {{-- <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="img/content/kategori.jpg">
                          <h5><a href="#">Dried Fruit</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="img/content/kategori.jpg">
                          <h5><a href="#">Vegetables</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="img/content/kategori.jpg">
                          <h5><a href="#">drink fruits</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="img/content/kategori.jpg">
                          <h5><a href="#">drink fruits</a></h5>
                      </div>
                  </div> --}}
              </div>
          </div>
      </div>
  </section>
    <!-- Hero Section End -->
@endsection