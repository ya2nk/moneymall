<footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            @include('frontend.layout.partials.logo')
          </a>
          <div class="pt-3">
           <p class="footer-contact-text">Money Mall is a trading platform that provides real-time market insights, expert guidance, and user-friendly tools to help traders of all levels navigate global markets with confidence.</p>
          </div>
          <div class="d-flex mt-4">
            @include('frontend.layout.partials.social')
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Contact Us</h4>
          <ul>
            <li><a href="#">Customer Support</a></li>
            <li><a href="#">Email Support</a></li>
            <li><a href="{{ url('policy/complaint') }}">Complaint</a></li>
            
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>About Us</h4>
          <ul>
            <li><a href="{{ url('about') }}">company Profile</a></li>
            <li><a href="{{ url('about') }}">Legality</a></li>
            <li><a href="#">Product</a></li>
            
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Download</h4>
          <ul>
            <li><a href="#">MM Trader Desktop</a></li>
            <li><a href="#">MM Trader App</a></li>
            <li><a href="#">Business Proposal</a></li>
            <li><a href="#">Trading Hours</a></li>
            
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Money Mall Subscription</h4>
          <p>Join 3000+ newsletter subscriber</p>
          <div class="row">
            <form>
              <div class="col-md-8">
                <input type="email">
              </div>
              <div class="col-md-4">
                <button>SEND</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright mt-4">
      <div class="row">
        <div class="col-lg-6 text-start">
          © 2025 PT Gatra Mega Berjangka - Money Mall. All rights reserved
        </div>
        <div class="col-lg-6 text-end">
          <a href="{{ url('policy/privacy-policy') }}" class="me-2">Privacy Policy</a> - 
          <a href="{{ url('policy/general-policy') }}" class="ms-2">General Policy</a> 
        </div>
    </div>

  </footer>