@extends('layouts.main')


@section('container')

@include('partials.picture')

<h3 class="mb-4"><center>Berikan Ucapan</center></h3>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            @include('partials.sayings')
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-lg-12">
            <div id="target" style="overflow: scroll; width: 1300px; height: 450px;">
                <div class="container">
                    <div class="row justify-content-center mb-3">   
                    @foreach ($data as $row)        
                      <div class="col-lg-4 mb-3">
                          <div class="card text-center">
                              <div class="card-header">{{ $row->nama }}
                              </div>
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
            </div>
              <div id="other">
                
              </div>
              <div id="log"></div>
        </div>
    </div>
</div>

@endsection
