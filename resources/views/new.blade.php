@extends('layout')
  @section('title_section')
    New Message
  @endsection

  @section('main_section')
    <div class="container">
      <h1>New Message</h1>
      <form class="" action="{{route('message.newmessagecheck')}}" method="post">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Name: </label>
            <input type="text" name="name" id="name" class="form-control" required>
          </div>
          <div class="form-group col-md-6">
            <label>Email: </label>
            <input type="email" name="email" id="email" class="form-control" required>
          </div>
        </div>
        <div class="form-group">
          <label>Message: </label>
          <textarea name="message" id="message" class="form-control" required></textarea>
        </div>
        <button type="submit" name="button" class="btn btn-primary">Send</button>
      </form>
    </div>
  @endsection
