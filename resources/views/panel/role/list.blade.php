@extends('panel.layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Role</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Role List</h5>
                </div>
                <div class="col-md-6 mt-2" style="text-align: right">
                    <a href="{{ url('panel/add') }}" class="btn btn-primary">+ Add</a>
                </div>
            </div>

            <!-- Table with stripped rows -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($getRecord as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->created_at }}</td>
                    <td>
                        <a href="" class="btn btn-info">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>
      </div>
    </div>
  </section>


    <!-- End #main -->
@endsection
