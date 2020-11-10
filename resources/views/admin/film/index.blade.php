@extends('layouts.app', ['activePage' => 'film', 'titlePage' => __('Film')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Film Table</h4>
            <p class="card-category"> Film table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Title
                  </th>
                  <th>
                    Prix
                  </th>
                  <th>
                   Horaire
                  </th>
                  <th>
                    
                  </th>
                  <th>
                    
                  </th>
 
                  <th></th>
                  <th></th>
                </thead>
                <tbody>
                  @foreach($films as $film)
                  <tr>
                    <td>
                      {{ $film->id  }}
                    </td>
                    <td>
                      {{ $film->titre  }}
                    </td>
                    <td>
                      {{ $film->prix  }}
                    </td>
                    <td>
                      {{ $film->horaire  }}
                    </td>
                    <td>
                      <div class="card-footer ml-auto mr-auto"> 
                        <a class=" " href="{{ route('film.edit', $film) }}">
                         <button type="submit" class="btn btn-primary">{{ __('Edit') }}</button>
                        </a>
                      </div>
                  </td>
                      <form  method="POST" action="{{ route('film.destroy', $film) }}">
                        @csrf
                        @method('DELETE')
                        
                    <td>
                        <div class="card-footer ml-auto mr-auto">
                          <input class="btn btn-primary" type="submit" value="Delete" name="deletefilm">
                        </div>
                    </td>
                  </form>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
       
@endsection