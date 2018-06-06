<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>{{ $ticket->title }}</h1>

<h3>{{$ticket->id}}</h3>
<p>{{$ticket->description}}</p>

<a href="{{action('TicketController@edit',$ticket->id)}}" class="btn btn-primary">Edit</a>

<form action="{{action('TicketController@destroy', $ticket->id)}}" method="post">
    {{csrf_field()}}
    <input name="_method" type="hidden" value="DELETE">
    <button class="btn btn-danger" type="submit">Delete</button>
</form>


</body>
</html>