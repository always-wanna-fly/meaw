@extends('layouts.app')

@section('content')
<div class="container">

    @foreach ($users as $user)

        {{ $user->name }}
        <br>

    @endforeach

</div>

{{ $users->links() }}

@endsection