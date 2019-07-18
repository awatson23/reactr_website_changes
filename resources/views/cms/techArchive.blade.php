@extends('layout.cmsLayout')
@section('cmsContent')
<h1 class="hide">Technology Archive</h1>
<section id="tech_container">
  <h2 class="hide">Technologies</h2>

  <section class="searchAdd">
    <h2 class="hide">Search Projects or Add New</h2>
    <form action="/searchTech" method="post">
      @csrf
      <input type="text" class="searchBar" placeholder="search tech..." name="searchTech">
    </form>
    <a href="/createTech" class="button">ADD TECH</a>
  </section>

  <!-- loop through tech -->
  @foreach($techs as $tech)
  <div class="techSingle">
    <div class="techImage">
      <img src="images/{{$tech->tech_src}}" alt="tech">
    </div>
    <p class="title">{{$tech->tech_name}}</p>
    <div class="techActions">
      <ul>
        <li><a href="/editTech/{{$tech->tech_id}}">edit</a></li>
        <li class="delete"><a href="/deleteTech/{{$tech->tech_id}}">delete</a></li>
      </ul>
    </div>
  </div>
  @endforeach

</section>
@endsection
