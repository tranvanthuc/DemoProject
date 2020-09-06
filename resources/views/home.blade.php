@extends('layout')

@section('title')
    Home Page
@endsection

@section('content')
    <p>This is Home Page </p>
    <h4>for</h4>
    @for ($i = 0; $i < 2; $i++)
        <p>The current value is {{ $i }}</p>
    @endfor

    <h4>foreach</h4>
    @foreach ($users as $user)
        <p>This is user {{ $user['id'] }}</p>
    @endforeach

    <h4>forelse</h4>
    @forelse ($users as $user)
        <li>{{ $user['name'] }}</li>
    @empty
        <p>No users</p>
    @endforelse

    <h4>while</h4>
    @while ($count < 3)
        <p>$count is {{ $count }}</p>
        @php
        $count++;
        @endphp
    @endwhile
@endsection
