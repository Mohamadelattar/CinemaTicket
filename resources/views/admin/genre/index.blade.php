@extends('layouts.app', ['activePage' => 'genre', 'titlePage' => __('Genre')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Genre Table</h4>
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
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                    <div class="card-footer ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary">{{ __('Edit') }}</button>
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