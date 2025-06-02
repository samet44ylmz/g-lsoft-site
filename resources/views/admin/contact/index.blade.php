@extends('admin.layouts.layout')
@section('content')
<div class="container-fluid py-4">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="#" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>İletişim Ayarları</h1>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header">
            <h4>İletişim Bilgilerini Güncelle</h4>
          </div>
          <div class="card-body">

<form action="{{ route('admin.contact.update', 1) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    {{-- 1. Genel Başlık ve Açıklama --}}
    <div class="border rounded p-3 mb-4">
      <h5 class="mb-3">Genel Bilgi</h5>
      <div class="form-group row mb-4 align-items-center">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Genel Başlık</label>
        <div class="col-12 col-md-9 col-lg-9">
          <input type="text" name="title" class="form-control" value="{{ $contact_customer->title }}">
        </div>
      </div>
      <div class="form-group row mb-0">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Genel Açıklama</label>
        <div class="col-sm-12 col-md-7">
          <textarea name="description" cols="30" rows="3" class="form-control">{{$contact_customer->description}}</textarea>
        </div>
      </div>
    </div>

    {{-- 2. Adres Başlığı ve Açıklaması --}}
    <div class="border rounded p-3 mb-4">
      <h5 class="mb-3">Adres Bilgisi</h5>
      <div class="form-group row mb-4 align-items-center">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Adres Başlığı</label>
        <div class="col-12 col-md-9 col-lg-9">
          <input type="text" name="adres_title" class="form-control" value="{{ $contact_customer->adres_title }}">
        </div>
      </div>
      <div class="form-group row mb-0">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Adres Açıklaması</label>
        <div class="col-sm-12 col-md-7">
          <textarea name="adres_description" cols="30" rows="3" class="form-control">{{$contact_customer->adres_description}}</textarea>
        </div>
      </div>
    </div>

    {{-- 3. İletişim Numarası Başlığı ve Açıklaması --}}
    <div class="border rounded p-3 mb-4">
      <h5 class="mb-3">İletişim Numarası</h5>
      <div class="form-group row mb-4 align-items-center">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Numara Başlığı</label>
        <div class="col-12 col-md-9 col-lg-9">
          <input type="text" name="phone_title" class="form-control" value="{{ $contact_customer->phone_title }}">
        </div>
      </div>
      <div class="form-group row mb-0">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Numara Açıklaması</label>
        <div class="col-sm-12 col-md-7">
          <textarea name="phone_description" cols="30" rows="3" class="form-control">{{$contact_customer->phone_description}}</textarea>
        </div>
      </div>
    </div>

    {{-- 4. Açılış Saatleri Başlığı ve Açıklaması --}}
    <div class="border rounded p-3 mb-4">
      <h5 class="mb-3">Açılış Saatleri</h5>
      <div class="form-group row mb-4 align-items-center">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Açılış Saatleri Başlığı</label>
        <div class="col-12 col-md-9 col-lg-9">
          <input type="text" name="hour_title" class="form-control" value="{{ $contact_customer->hour_title }}">
        </div>
      </div>
      <div class="form-group row mb-0">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Açılış Saatleri Açıklaması</label>
        <div class="col-sm-12 col-md-7">
          <textarea name="hour_description" cols="30" rows="3" class="form-control">{{$contact_customer->hour_description}}</textarea>
        </div>
      </div>
    </div>

    <div class="form-group row mb-4">
      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
      <div class="col-12 col-md-9 col-lg-9">
        <button class="btn btn-primary">Güncelle</button>
      </div>
    </div>
</form>

          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Bize Ulaşın Mesajları --}}
  <section class="section mt-5">
    <div class="section-header">
      <h4>Bize Ulaşın Mesajları</h4>
    </div>
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Ad Soyad</th>
              <th>Email</th>
              <th>Mesaj</th>
              <th>Tarih</th>
            </tr>
          </thead>
          <tbody>
          
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
           
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
@endsection
