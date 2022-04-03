  <div class="col-lg-12 col-md-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
      {{-- <div class="member">
          <div class="member-img">
              @if (empty(Auth::user()->gambar))
              <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" class="img-fluid" alt="">
              @else
              <img src="{{url('images')}}/{{Auth::user()->gambar}}" class="img-fluid" alt="">
              @endif
              <div class="social">
                  <a href="/profile"><i class="bi bi-person-circle"></i></a>
                  <a href="/logout"><i class="bi bi-box-arrow-left"></i></a>
              </div>
          </div>
          <div class="member-info">
              <h4>{{ Auth::user()->name }}</h4>
              <p >{{ Auth::user()->email }}</p>
          </div>
      </div> --}}
      <div class="member">
          <div class="member-img">
              @if (empty(Auth::user()->gambar))
                  <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" class="img-fluid" alt="">
              @else
                  <img src="{{ url('images') }}/{{ Auth::user()->gambar }}" class="img-fluid" alt="">
              @endif
              <div class="social">
                 <a href="/profile"><i class="bi bi-person-circle"></i></a>
                  <a href="/logout"><i class="bi bi-box-arrow-left"></i></a>
              </div>
          </div>
          <div class="member-info">
             <h4>{{ Auth::user()->name }}</h4>
              <p >{{ Auth::user()->email }}</p>
          </div>
      </div>
  </div>
