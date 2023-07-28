@extends('layouts.master')
@section('project')

<div id="project" class="project">
    <div class="container">
        <div class="row">
           <div class="col-md-12">
              <div class="titlepage">
                 <h2>Rents Available</h2>
              </div>
           </div>
        </div>
        <div class="row">
        <div class="product_main">
              @foreach ($rentProducts as $data)
              <div class="project_box ">
                 <div class="dark_white_bg" ><ul><img  src="{{$data->imgUrl}}" alt="#"/></ul></div>
                 <h3><ul><a href='rentView/{{$data->rentID}}'>{{$data->name}}</a></ul> <ul>Till: {{$data->duration}}</ul> <ul>Price(per week): {{$data->price}}</ul></h3>
              </div>
              @endforeach
        </div>
        </div>
    </div>
</div>

@endsection