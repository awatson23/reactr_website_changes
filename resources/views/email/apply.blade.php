<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Email</title>
</head>
<body style="font-family: arial;">

<h1>Reactr Application</h1>
<h3>{{$data['firstName']}} {{$data['lastName']}}</h3>
<p>Program: {{$data['program']}}</p>
<p>Year: {{$data['year']}}</p>
<p>Student Number: {{$data['studentNumber']}}</p>
<p>Email: {{$data['email']}} FOL email: {{$data['folemail']}}</p>
<p>linkedIn: <a href="{{$data['linkedin']}}">{{$data['linkedin']}}</a></p>
<p>Portfolio: <a href="{{$data['portfolio']}}">{{$data['portfolio']}}</a></p>
<br>
<p>Skills: </p>
<p>{{$data['skills']}}</p>
<br>
<p>Resume is attacted.</p>


</body>
</html>
