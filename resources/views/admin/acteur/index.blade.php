@extends('layouts.app', ['activePage' => 'acteur', 'titlePage' => __('Acteur')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Acteurs Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                  <th></th>
                  <th></th>
                </thead>
                <tbody>
                    @foreach($acteurs as $acteur)
                  <tr>
                    <td>
                      {{ $acteur->id  }}
                    </td>
                    <td>
                        {{ $acteur->nom  }}
                    </td>
                    <td>
                    <div class="card-footer ml-auto mr-auto"> 
                        <a class=" " href="{{ route('acteur.edit', $acteur) }}">
                           <button type="submit" class="btn btn-primary">{{ __('Edit') }}</button>
                          </a>
                    </div>
                    </td>
                    <td>
                    <div class="card-footer ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary">{{ __('Delete') }}</button>
                    </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
       
@endsection