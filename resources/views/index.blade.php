@extends('layout')
  @section('title_section')
    ForumPage
  @endsection

  @section('main_section')
    <div class="container">
      <h1>Start Page</h1>
      @if(session('name'))
        <div class="alert alert-success">
          <h3>Message: {{session('message') ?? 'xxx'}}</h3>
          <p>Name: {{session('name') ?? 'xxx'}}</p>
          <p>Email: {{session('email') ?? 'xxx'}}</p>
        </div>
      @endif
      <a href="{{ route('message.newmessage') }}" class="btn btn-success">New Message</a>

      @foreach($messages as $mes)
      <div class="card" style="margin-top: 10px;">
        <div class="card-header">
          {{ $mes->name }} | {{ $mes->email }}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $mes->message }}</h5>
          <p class="card-text">Created at: {{ $mes->created_at }}</p>
        </div>
      </div>
      @endforeach
    </div>
  @endsection
