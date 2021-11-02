@extends('dashboard.layouts.main')

@section('container')
    <h1 class="mb-4"><center>Daftar Ucapan</center></h1>
    <div class="container">
        <div class="row justify-content-center mb-3">
            @foreach ($data as $row)        
            <div class="col-lg-4 mb-4">
                <div class="card text-center">
                   <div class="card-header">{{ $row->nama }}</div>
                       <div class="card-body">
                           <h5 class="card-title"></h5>
                           <p class="card-text"> {!! $row->ucapan !!}</p>
                       </div>          
                   <div class="card-footer text-muted">
                       {{ $row->created_at->diffForHumans() }}
                   </div>
               </div>
           </div>
       @endforeach 
        </div>
    </div>
  
@endsection