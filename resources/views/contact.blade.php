Contact
@extends('layout')

@section('title', 'Contacto')

@section('content')
   <h1>Contacto</h1>

  

    <form method="POST" action="{{ route('messages.store') }}"> 

        {{ csrf_field() }}
        <input name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
        {!! $errors->first('name', '<small>:message</small>') !!} <br>

        <input type="text" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
        {!! $errors->first('email', '<small>:message</small<br>') !!}<br>

        <input name="subject" placeholder="Asunto..." value="{{ old('subject')}}"><br>
        {!! $errors->first('subject', '<small>:message</small>') !!} 
        <br>

        <textarea name="content" placeholder="Mensaje..." value="{{ old('content') }}"> </textarea><br>
        <button>Enviar</button>


   </form>


@endsection 