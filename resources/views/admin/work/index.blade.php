@extends('admin.layouts.layout')
@section('content')
<div class="container-fluid py-4">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Work Section</h1>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header">
            <h4>Update Work Section</h4>
          </div>
          <div class="card-body">

<form action="{{ route('admin.work.update', 1) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    {{-- Bölüm 1 --}}
    <div class="border rounded p-3 mb-4">
      <h5 class="mb-3">Adım 1</h5>
      <div class="form-group row mb-4 align-items-center">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Başlık 1</label>
        <div class="col-12 col-md-9 col-lg-9">
          <input type="text" name="title_1" class="form-control" value="{{ $work->title_1 }}">
        </div>
      </div>
      <div class="form-group row mb-0">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Açıklama 1</label>
        <div class="col-sm-12 col-md-7">
          <textarea name="description_1" cols="30" rows="4" class="form-control">{{$work->description_1}}</textarea>
        </div>
      </div>
    </div>

    {{-- Bölüm 2 --}}
    <div class="border rounded p-3 mb-4">
      <h5 class="mb-3">Adım 2</h5>
      <div class="form-group row mb-4 align-items-center">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Başlık 2</label>
        <div class="col-12 col-md-9 col-lg-9">
          <input type="text" name="title_2" class="form-control" value="{{ $work->title_2 }}">
        </div>
      </div>
      <div class="form-group row mb-0">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Açıklama 2</label>
        <div class="col-sm-12 col-md-7">
          <textarea name="description_2" cols="30" rows="4" class="form-control">{{$work->description_2}}</textarea>
        </div>
      </div>
    </div>

    {{-- Bölüm 3 --}}
    <div class="border rounded p-3 mb-4">
      <h5 class="mb-3">Adım 3</h5>
      <div class="form-group row mb-4 align-items-center">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Başlık 3</label>
        <div class="col-12 col-md-9 col-lg-9">
          <input type="text" name="title_3" class="form-control" value="{{ $work->title_3 }}">
        </div>
      </div>
      <div class="form-group row mb-0">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Açıklama 3</label>
        <div class="col-sm-12 col-md-7">
          <textarea name="description_3" cols="30" rows="4" class="form-control">{{$work->description_3}}</textarea>
        </div>
      </div>
    </div>

    {{-- Bölüm 4 --}}
    <div class="border rounded p-3 mb-4">
      <h5 class="mb-3">Adım 4</h5>
      <div class="form-group row mb-4 align-items-center">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Başlık 4</label>
        <div class="col-12 col-md-9 col-lg-9">
          <input type="text" name="title_4" class="form-control" value="{{ $work->title_4 }}">
        </div>
      </div>
      <div class="form-group row mb-0">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Açıklama 4</label>
        <div class="col-sm-12 col-md-7">
          <textarea name="description_4" cols="30" rows="4" class="form-control">{{$work->description_4}}</textarea>
        </div>
      </div>
    </div>

    <div class="form-group row mb-4">
      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
      <div class="col-12 col-md-9 col-lg-9">
        <button class="btn btn-primary">Update</button>
      </div>
    </div>
</form>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
