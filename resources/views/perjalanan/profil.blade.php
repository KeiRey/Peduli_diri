  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
      <div class="member">
          <div class="member-img">
              <img src="{{url('images')}}/{{Auth::user()->gambar}}" class="img-fluid" alt="">
              <div class="social">
                  <a href="/profile"><i class="bi bi-person-circle"></i></a>
                  <a href="/logout"><i class="bi bi-box-arrow-left"></i></a>
              </div>
          </div>
          <div class="member-info">
              <h4>{{ Auth::user()->name }}</h4>
              <span>{{ Auth::user()->email }}</span>
          </div>
      </div>
  </div>