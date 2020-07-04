@extends('master')

@section('content')
<div class="ml-3 mt-3">
<div class="card-header">
                <h3 class="card-title">List Jawaban</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
<table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Pertanyaan</th>
                      <th>Jawaban</th>
                      <th style="width: 40px">Tanggal</th>
                      <th style="width: 40px">Update</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($jawaban as $key => $jawaban)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$jawaban->judul}}</td>
                    <td>{{$jawaban->isi}}</td>
                    <td>{{$jawaban->tanggal_dibuat}}</td>
                    <td>{{$jawaban->tanggal_diperbaharui}}</td>
                    <td><a href="/pertanyaan/{{$pertanyaan->id}}" class= "btn btn-sm btn-info"> Show </a>
                    <a href="/pertanyaan/{{$pertanyaan->id}}/edit" class= "btn btn-sm btn-default"> Edit </a> 
                    <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"> Delete</button>
                    </td>
                  </tr>
                  @endforeach
                    
                    
                  </tbody>
                </table>
                </div>
<a href="/pertanyaan/create" class="btn btn-primary">
Buat Pertanyaan
</a>
</div>
@endsection