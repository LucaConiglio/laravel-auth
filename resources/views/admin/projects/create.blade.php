@extends('layouts.app')

<h1 class="text-center text-info py-5">questo é il create</h1>

@section('content')
<div class="container">
  <h1>Nuovo Comic</h1>
  
  <form action="{{ route('admin.projects.store') }}" method="POST">
    @csrf()

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>       
          @endforeach
        </ul>
      </div>
      @endif

    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" class="form-control" name="name">
    </div>

    <div class="mb-3">
      <label class="form-label">Descrizione</label>
      <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Immagine di copertina</label>
      <input type="text" class="form-control" name="cover_img">
    </div>

    <div class="mb-3">
      <label class="form-label">Github link</label>
      <input type="text" class="form-control" name="github_link">
    </div>

    
    

    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Annulla</a>
    <button class="btn btn-primary">Salva</button>
  </form>

</div>

@endsection
