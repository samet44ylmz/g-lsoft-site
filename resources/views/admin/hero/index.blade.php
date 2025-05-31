@extends('admin.layouts.layout')
@section('content')
<div class="container-fluid py-4">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Hero Section</h1>
     
    </div>

    
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
          <div class="card shadow-sm">
            <div class="card-header">
              <h4>Update Hero Section</h4>
            </div>

            <div class="card-body">

              <form action="{{ route('admin.hero.update', 1) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row mb-4 align-items-center">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                  <div class="col-12 col-md-9 col-lg-9">
                    <input type="text" name="title" class="form-control" value="{{ $hero->title }}">
                  </div>
                </div>
                <div class="form-group row mb-4 align-items-center">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                  <div class="col-12 col-md-9 col-lg-9">
                    <textarea name="description" id="" class="form-control" style="min-height: 100px">{{$hero->description}}</textarea>
                  </div>
                </div>
                <div class="form-group row mb-4 align-items-center">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button Text</label>
                  <div class="col-12 col-md-9 col-lg-9">
                    <input type="text" name="btn_text" class="form-control" value="{{ $hero->btn_text }}">
                  </div>
                </div>
                <div class="form-group row mb-4 align-items-center">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button Url</label>
                  <div class="col-12 col-md-9 col-lg-9">
                    <input type="text" name="btn_url" class="form-control" value="{{ $hero->btn_url }}">
                  </div>
                </div> 

               @if ($hero->image)
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Preview Image</label>
                    <div class="col-sm-12 col-md-7">
                        <img class="w-25" src="{{ asset($hero->image) }}" alt="">
                    </div>
                </div>
               @endif


              <div class="form-group row mb-4 align-items-center">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">İmage</label>
                <div class="col-12 col-md-9 col-lg-9">
                  <div class="custom-file mb-3">
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </div>
              </div>
              {{-- Başlıklar ve açıklamalar kutucukları --}}
              <div class="form-group row mb-4 align-items-center">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Titles</label>
                <div class="col-12 col-md-9 col-lg-9">
                  <input type="text" name="sub_title_1" class="form-control mb-2" placeholder="Başlık 1" value="{{ $hero->sub_title_1 }}">
                  <input type="text" name="sub_title_2" class="form-control mb-2" placeholder="Başlık 2" value="{{ $hero->sub_title_2 }}">
                  <input type="text" name="sub_title_3" class="form-control" placeholder="Başlık 3" value="{{ $hero->sub_title_3 }}">
                </div>
              </div>
              <div class="form-group row mb-4 align-items-center">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Descriptions</label>
                <div class="col-12 col-md-9 col-lg-9">
                  <textarea class="form-control mb-2" name="description_1" rows="2" placeholder="Açıklama 1">{{ $hero->description_1 }}</textarea>
                  <textarea class="form-control mb-2" name="description_2" rows="2" placeholder="Açıklama 2">{{ $hero->description_2 }}</textarea>
                  <textarea class="form-control" name="description_3" rows="2" placeholder="Açıklama 3">{{ $hero->description_3 }}</textarea>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" ></label>
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
