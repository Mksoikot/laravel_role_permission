@extends('panel.layouts.app')

@section('content')

        <div class="pagetitle">
            <h1>Add New Role</h1>
        </div>
          <section class="section">
            <div class="row">
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Add New Roles</h5>

                    <!-- General Form Elements -->
                    <form action="{{ route('role_insert')}}" method="POST">
                        @csrf
                      <div class="row mb-12">
                        <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-12">
                          <input type="text" name="name" required class="form-control">
                        </div>
                      </div>
                      <div class="row mb-3 mt-2">
                        <div class="col-sm-12" style="text-align: right">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>

                    </form>

                  </div>
                </div>

              </div>
            </div>
          </section>

    <!-- End #main -->
@endsection
