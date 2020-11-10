@extends('layouts.app', ['activePage' => 'film', 'titlePage' => __('Film')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Film Table</h4>
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
                    Title
                  </th>
                  <th>
                    Description
                  </th>
                  <th>
                    Price Ticket
                  </th>
                  <th>
                    Time
                  </th>
                  <th>
                    Date
                  </th>
                  <th>
                    Salle
                  </th>
                  <th>
                    Reservations Limit
                  </th>
                  <th>
                    Reservations Number
                  </th>
                  <th></th>
                  <th></th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-primary">
                      $36,738
                    </td>
                    <td class="text-primary">
                      $36,738
                    </td>
                    <td class="text-primary">
                      $36,738
                    </td>
                    <td class="text-primary">
                      $36,738
                    </td>
                    <td>
                    <div class="card-footer ml-auto mr-auto">
                        <a href="{{ route('film.edit', $film) }}" class=" ">
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
                   
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
       
@endsection