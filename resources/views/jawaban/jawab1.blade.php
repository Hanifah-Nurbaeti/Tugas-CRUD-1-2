@extends('master')

@section('content')
<div class= "ml-3 mt-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                Jawaban</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan" method="POST">
              @csrf
              
                <div class="card-body">
                 <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{$jawaban->judul}}">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_dibuat">Tanggal dibuat</label>
                    <input type="date" class="form-control" id="tanggal_dibuat" name="tanggal_dibuat" value="{{$pertanyaan->tanggal_dibuat}}">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_diperbaharui">Tanggal Diperbaharui</label>
                    <input type="date" class="form-control" id="tanggal_diperbaharui" name="tanggal_diperbaharui">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Jawab</button>
                </div>
              </form>
            </div>
            </div>
@endsection