@extends('layout.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row mt-4">
          <div class="col-12">
            <div class="card col-11 mx-auto">
              <div class="card-header">
                <h3 class="font-weight-bold">Admin Dashboard</h3>
              </div>
            </div>
            <div class="content mt-3">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card card-primary card-outline mb-3">
                      <div class="card-header font-weight-bold">
                        <h5 class=" font-weight-bold">Data Pelatihan</h5>
                      </div>
                      <div class="card-body">
                        <a href="{{ route('pelatihans.index') }}" class="btn btn-block btn-primary col-3 mx-auto">Check!</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card card-primary card-outline mb-3">
                      <div class="card-header font-weight-bold">
                        <h5 class=" font-weight-bold">Data Category</h5>
                      </div>
                      <div class="card-body">
                        <a href="{{ route('categories.index') }}" class="btn btn-block btn-primary col-3 mx-auto">Check!</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card card-primary card-outline mb-3">
                      <div class="card-header font-weight-bold">
                        <h5 class=" font-weight-bold">Data Portofolio</h5>
                      </div>
                      <div class="card-body">
                        <a href="{{ route('slides.index') }}" class="btn btn-block btn-primary col-3 mx-auto">Check!</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card card-primary card-outline mb-3">
                      <div class="card-header font-weight-bold">
                        <h5 class=" font-weight-bold">Data Contact</h5>
                      </div>
                      <div class="card-body">
                        <a href="{{ route('contacts.index') }}" class="btn btn-block btn-primary col-3 mx-auto">Check!</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <div class="card card-primary card-outline mb-3">
                        <div class="card-header font-weight-bold">
                          <h5 class=" font-weight-bold">Data Subcription</h5>
                        </div>
                        <div class="card-body">
                          <a href="{{ route('subription.index') }}" class="btn btn-block btn-primary col-3 mx-auto">Check!</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="card card-primary card-outline mb-3">
                        <div class="card-header font-weight-bold">
                          <h5 class=" font-weight-bold">Data</h5>
                        </div>
                        <div class="card-body">
                          {{--  <a href="{{ route('rate.index') }}" class="btn btn-block btn-primary col-3 mx-auto">Check!</a>  --}}
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
