<nav id="mainNav">
  @if (Auth::user())
  <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
  <form id="logout-form" action="{{route('logout')}}" method="post" style="display:none;">
    {{ csrf_field() }}
  </form>
  @endif

  <ul>
    <li><a href="/cmsProjects">Projects</a></li>
    <li><a href="/cmsTeam">Team Members</a></li>
    <li><a href="/cmsTech">Technology</a></li>
  </ul>

  <div id="logoContainer">
    <a href="/cmsHome">
      <img src="/images/home_bckgd2.png" alt="reactr logo">
    </a>
  </div>
</nav>
