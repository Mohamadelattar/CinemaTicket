@extends('layouts.app', ['activePage' => 'film', 'titlePage' => __('Film')])

@section('content')
 
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <form method="post" action="{{ route('film.update', $film) }}" enctype='multipart/form-data' autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit Film') }}</h4>
                <p class="card-category">{{ __('Film information') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="titre" id="input-title" type="text" placeholder="{{ __('Titre') }}" value="{{ old('titre', $film->titre ) }}" required="true" aria-required="true"/>
                      @if ($errors->has('title'))
                        <span id="title-error" class="error text-danger" for="input-title">{{ $errors->first('titre') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Prix') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('prix') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('string') ? ' is-invalid' : '' }}" name="prix" id="input-prix" type="email" placeholder="{{ __('Prix') }}" value="{{ old('prix',$film->prix) }}" required />
                      @if ($errors->has('string'))
                        <span id="prix-error" class="error text-danger" for="input-prix">{{ $errors->first('string') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                <a  href="/acteur" class="btn btn-primary">{{ __('Retour') }}</a>
              </div>
            </div>
          </form>
        </div>
      </div>

@endsection