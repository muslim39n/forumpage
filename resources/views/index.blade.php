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
    </div>
  @endsection
