@extends('layouts.app', ['activePage' => 'acteur', 'titlePage' => __('Acteur Edit')])

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <form method="post" action="{{ route('acteur.update', $acteur) }}" enctype='multipart/form-data' autocomplete="off" class="form-horizontal">
                @csrf
                @method('put')
    
                <div class="card ">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">{{ __('Edit Acteur') }}</h4>
                    <p class="card-category">{{ __('Acteur information') }}</p>
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
                      <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                      <div class="col-sm-7">
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', $acteur->nom ) }}" required="true" aria-required="true"/>
                          @if ($errors->has('name'))
                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                      <div class="col-sm-7">
                        <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('string') ? ' is-invalid' : '' }}" name="image" id="input-email" type="email" placeholder="{{ __('Image') }}" value="{{ old('image',$acteur->image) }}" required />
                          @if ($errors->has('string'))
                            <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('string') }}</span>
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