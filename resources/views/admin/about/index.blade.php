@extends('admin.layouts.layout')
@section('content')
<div class="container-fluid py-4">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>About Section</h1>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header">
            <h4>Update About Section</h4>
          </div>
          <div class="card-body">

<form action="{{ route('admin.about.update', 1) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

          
              <div class="form-group row mb-4 align-items-center">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                <div class="col-12 col-md-9 col-lg-9">
                  <input type="string" name="title" class="form-control" value="{{ $about->title }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                <div class="col-sm-12 col-md-7">
                  <textarea name="description" id="" cols="30" rows="10">{{$about->description}}</textarea>
                </div>
              </div>

               @if ($about->image_1)
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Preview Image</label>
                    <div class="col-sm-12 col-md-7">
                        <img class="w-25" src="{{ asset($about->image_1) }}" alt="">
                    </div>
                </div>
               @endif


                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">İmage</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="image_1" id="image-upload" />
                        </div>
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
