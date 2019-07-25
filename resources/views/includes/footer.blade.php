<!-- the footer style comes from the controller and chenges the colour based on the view it returns to  -->
<footer id="indexFooter" @if (isset($footerStyle))style="{{$footerStyle}}" @endif>
  <div class="content">

    <div id="footerLogo">
    <a href="/"><img src="/images/reactr.svg" alt="reactr logo" width="191"></a>
    </div>

      <nav id="footerNav">
        <h2 class="hide">Footer Navigation</h2>

        <ul class="smallTitle">
          <li><a href="/">Home</a></li>
          <li><a href="/team">Team</a></li>
          <li><a href="/archive">Projects</a></li>
          <li><a href="/careers" @if (isset($activeCareers))class="{{$activeCareers}}" @endif>Careers</a></li>
          <li><a href="{{ action("ProjectsController@home") }}#contactUs">Partner</a></li>
          <li><a href="/contact" @if (isset($activeContact))class="{{$activeContact}}" @endif>Contact</a></li>
        </ul>
      </nav>

      <div id="socials">
        <ul>
          <li><a href="https://www.behance.net/reactrfanshawe" target="_blank"><img src="/images/behance.svg" alt="behance button" width="35"></a></li>
          <li><a href="https://www.facebook.com/fanshaweInteractive/" target="_blank"><img src="/images/facebook.svg" alt="facebook button" width="35"></a></li>
          <li><a href="https://twitter.com/ReactrFanshawe?lang=en" target="_blank"><img src="/images/twitter.svg" alt="twitter button" width="35"></a></li>
        </ul>
      </div>

      <div id="fanshawe">
        <a href="https://www.fanshawec.ca/" target="_blank"><img src="/images/logo_fanshawe_digital.svg" alt="fanshawe logo" width="190"></a>
      </div>

    <p id="copyright">&copy; Copyright 2018 | Fanshawe College</p>
  </div>
</footer>
