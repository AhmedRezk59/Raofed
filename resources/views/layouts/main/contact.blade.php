<!-- Start Contact -->
    <section id="contact">
      <div class="container">
        <div class="contact-cont">
          <div class="contact-form">
            <h3 class="section-title"  data-sal="slide-up">إتصل بنا</h3>
            <p class="section-desc"  data-sal="slide-up" style="--sal-delay: 0.2s">
              قم بالتواصل معنا وعرض إستفساراتك وسيتم الاتصال بك في اقرب وقت ممكن
            </p>
            <form data-sal="zoom-in" action="{{ route('dashboard.send_message')}}" method="POST" style="--sal-delay: 0.4s">
              @csrf
              <div class="form-group">
                <input type="text" name="name" placeholder="الاسم" class="form-control" />
                @error('name')
                  <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <input
                  type="tel"
                  name="tel"
                  placeholder="رقم الجوال"
                  class="form-control"
                />
                @error('tel')
                  <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" placeholder="رسالتك"></textarea>
                @error('message')
                  <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">إرسـال</button>
            </form>
          </div>
          <div class="contact-img" data-sal="zoom-in" style="--sal-delay: 0.2s">
            <img src="images/contact.png" class="img-fluid" />
          </div>
        </div>
        <div class="contact-methods">
          <a href="tel:920011821" class="contact-method">
            <div class="icon">
              <figure class="pattern">
                <img src="images/pattern/contact.png" />
              </figure>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="35.334"
                height="35.336"
                viewBox="0 0 35.334 35.336"
              >
                <path
                  id="noun-telephone-1126730"
                  d="M149.491,52.465a8.367,8.367,0,0,1,8.34,8.218h0q.007.066.008.133A27.018,27.018,0,0,1,130.853,87.8h0a1.323,1.323,0,0,1-.151-.008,8.366,8.366,0,0,1-8.2-8.34,8.088,8.088,0,0,1,1.932-5.287h0a1.361,1.361,0,0,1,.878-.464l9.667-1.083c.046-.006.092-.009.138-.011a1.36,1.36,0,0,1,.831.273,7.753,7.753,0,0,1,1.794,2.163c.09.14.077.133.157.263a17.146,17.146,0,0,0,7.448-7.443c-.132-.081-.125-.067-.268-.159a7.76,7.76,0,0,1-2.163-1.794h0a1.361,1.361,0,0,1-.263-.969l1.083-9.667a1.361,1.361,0,0,1,.464-.881,8.1,8.1,0,0,1,5.287-1.93Zm0,2.718a5.329,5.329,0,0,0-3.121,1.043l-.934,8.319a8.874,8.874,0,0,0,1.12.876c.567.366.952.575,1.064.637h0a1.359,1.359,0,0,1,.778,1.72q-.015.047-.035.093c0,.009-.009.017-.013.027h0l-.019.037A19.9,19.9,0,0,1,138,78.28l-.021.011c-.022.009-.042.022-.064.032a1.359,1.359,0,0,1-1.834-.767c-.071-.128-.265-.485-.621-1.038a8.91,8.91,0,0,0-.876-1.12l-8.319.934a5.321,5.321,0,0,0-1.043,3.121,5.612,5.612,0,0,0,5.63,5.63A24.262,24.262,0,0,0,155.12,60.815a5.614,5.614,0,0,0-5.63-5.632Z"
                  transform="translate(-122.505 -52.465)"
                />
              </svg>
            </div>
            <div class="contact-text">
              <strong> اتصل بنا </strong>
              <span> 920011821 </span>
            </div>
          </a>
          <a href="https://wa.me/+96552553250" class="contact-method">
            <div class="icon">
              <figure class="pattern">
                <img src="images/pattern/contact.png" />
              </figure>
              <svg
                id="_2253"
                data-name="2253"
                xmlns="http://www.w3.org/2000/svg"
                width="34.46"
                height="34.461"
                viewBox="0 0 34.46 34.461"
              >
                <path
                  id="Path_55242"
                  data-name="Path 55242"
                  d="M22.533,17.774l-.013.108c-3.157-1.574-3.488-1.783-3.9-1.172-.283.424-1.107,1.384-1.355,1.668s-.5.3-.928.108a11.653,11.653,0,0,1-3.45-2.132,13.027,13.027,0,0,1-2.384-2.972c-.421-.727.459-.83,1.261-2.346a.789.789,0,0,0-.036-.752c-.108-.215-.965-2.326-1.324-3.167s-.7-.732-.965-.732a2.137,2.137,0,0,0-1.964.494c-2.317,2.547-1.733,5.175.25,7.969,3.9,5.1,5.973,6.039,9.77,7.343a5.94,5.94,0,0,0,2.7.174,4.419,4.419,0,0,0,2.895-2.048,3.554,3.554,0,0,0,.258-2.046c-.106-.194-.388-.3-.818-.5Z"
                  transform="translate(2.605 2.769)"
                />
                <path
                  id="Path_55243"
                  data-name="Path 55243"
                  d="M29.464,4.952C18.423-5.72.152,2.02.145,17.077a17,17,0,0,0,2.29,8.536L0,34.461l9.1-2.372a17.188,17.188,0,0,0,25.364-15A16.935,16.935,0,0,0,29.442,5.008Zm2.128,12.086a14.3,14.3,0,0,1-21.555,12.21l-.517-.307-5.384,1.4,1.443-5.234-.343-.538A14.241,14.241,0,0,1,27.415,7a14.054,14.054,0,0,1,4.177,10.037Z"
                  transform="translate(0 0)"
                />
              </svg>
            </div>
            <div class="contact-text">
              <strong> راسلنا عبر الواتساب </strong>
              <span> +965 5255 3250 </span>
            </div>
          </a>
          <a href="mailto:Roafed@info.com" class="contact-method">
            <div class="icon">
              <figure class="pattern">
                <img src="images/pattern/contact.png" />
              </figure>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="42.09"
                height="36.227"
                viewBox="0 0 42.09 36.227"
              >
                <g id="sms" transform="translate(1.5 1.5)">
                  <path
                    id="Vector"
                    d="M29.318,33.227H9.773C3.909,33.227,0,30.295,0,23.454V9.773C0,2.932,3.909,0,9.773,0H29.318c5.864,0,9.772,2.932,9.772,9.773V23.454C39.09,30.295,35.181,33.227,29.318,33.227Z"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="3"
                  />
                  <path
                    id="Vector-2"
                    data-name="Vector"
                    d="M19.545,0,13.427,4.886a6.187,6.187,0,0,1-7.329,0L0,0"
                    transform="translate(9.773 10.75)"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="3"
                  />
                </g>
              </svg>
            </div>
            <div class="contact-text">
              <strong> راسلنا عبر البريد الإلكتروني </strong>
              <span> Roafed@info.com </span>
            </div>
          </a>
        </div>
      </div>
    </section>
    <!-- End Contact -->