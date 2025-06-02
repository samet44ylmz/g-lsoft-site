@extends('admin.layouts.layout')
@section('content')
<div class="container-fluid py-4">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Services Section</h1>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header">
            <h4>Update Services Section</h4>
          </div>
          <div class="card-body">

<form action="{{ route('admin.services.update', 1) }}" method="POST" enctype="multipart/form-data">
                @csrf

                @method('PUT')

          
              <div class="form-group row mb-4 align-items-center">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Test</label>
                <div class="col-12 col-md-9 col-lg-9">
                  <input type="text" name="title_1" class="form-control" value="{{ $services->title_1 }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                <div class="col-sm-12 col-md-7">
                  <textarea name="description_1" id="" cols="30" rows="10">{{$services->description_1}}</textarea>
                </div>
              </div>
              


              
              <div class="form-group row mb-4 align-items-center">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Test</label>
                <div class="col-12 col-md-9 col-lg-9">
                  <input type="text" name="title_2" class="form-control" value="{{ $services->title_2 }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                <div class="col-sm-12 col-md-7">
                  <textarea name="description_2" id="" cols="30" rows="10">{{$services->description_2}}</textarea>
                </div>
              </div>


                                                                                                                                                  


              
              <div class="form-group row mb-4 align-items-center">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Test</label>
                <div class="col-12 col-md-9 col-lg-9">
                  <input type="text" name="title_3" class="form-control" value="{{ $services->title_3 }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                <div class="col-sm-12 col-md-7">
                  <textarea name="description_3" id="" cols="30" rows="10">{{$services->description_3}}</textarea>
                </div>
              </div>






              
              <div class="form-group row mb-4 align-items-center">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Test</label>
                <div class="col-12 col-md-9 col-lg-9">
                  <input type="text" name="title_4" class="form-control" value="{{ $services->title_4}}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                <div class="col-sm-12 col-md-7">
                  <textarea name="description_4" id="" cols="30" rows="10">{{$services->description_4}}</textarea>
                </div>
              </div>


              <div class="form-group row mb-4 align-items-center">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Test</label>
                <div class="col-12 col-md-9 col-lg-9">
                  <input type="text" name="title_5" class="form-control" value="{{ $services->title_5}}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                <div class="col-sm-12 col-md-7">
                  <textarea name="description_5" id="" cols="30" rows="10">{{$services->description_5}}</textarea>
                </div>
              </div>



              <div class="form-group row mb-4 align-items-center">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Test</label>
                <div class="col-12 col-md-9 col-lg-9">
                  <input type="text" name="title_6" class="form-control" value="{{ $services->title_6}}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                <div class="col-sm-12 col-md-7">
                  <textarea name="description_6" id="" cols="30" rows="10">{{$services->description_6}}</textarea>
                </div>
              </div>



              <div class="form-group row mb-4 align-items-center">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Test</label>
                <div class="col-12 col-md-9 col-lg-9">
                  <input type="text" name="title_7" class="form-control" value="{{ $services->title_7}}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                <div class="col-sm-12 col-md-7">
                  <textarea name="description_7" id="" cols="30" rows="10">{{$services->description_7}}</textarea>
                </div>
              </div>
              


             
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-12 col-md-9 col-lg-9">
                  <button class="btn btn-primary">Update</button>
                </div>
              </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</form>
@endsection
