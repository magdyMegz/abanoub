@extends('master')
@section('content')


        {{--<div class="row">--}}
            {{--<div class="col-3">--}}
                {{--<h1> Country </h1>--}}
                {{--<h1> governorate </h1>--}}
                {{--<h1> City {{$companiesInformation->city}}</h1>--}}
                {{--<h1>Address {{$companiesInformation->Company_phone}}</h1>--}}
                {{--<h1>Phone {{$companiesInformation->email}}</h1>--}}
                {{--<h1>Email {{$companiesInformation->address}}</h1>--}}
                {{--<img src="/image/{{$companiesInformation->Tax_card}}" width="400px" height="200px">--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-2 bg-light shadow">
            <div class="row mt-5 ">
                <div class="col-1 ">
                    <i class="fa fa-flag text-primary"></i>
                </div>
                <div class="col-10">
                    <p> {{$companiesInformation->country}}</p></div>
            </div>
            <div class="row ">
                <div class="col-1 ">
                    <i class="fa fa-city text-primary"></i>
                </div>
                <div class="col-10">
                    <p> {{$companiesInformation->governorate}}</p></div>
            </div>

            <div class="row ">
                <div class="col-1 ">
                    <i class="fa fa-home text-primary"></i>
                </div>
                <div class="col-10">
                    <p> {{$companiesInformation->city}}</p></div>
            </div>
            <div class="row ">
                <div class="col-1 ">
                    <i class="fa fa-map-marker-alt text-primary"></i>
                </div>
                <div class="col-10">
                    <p> {{$companiesInformation->address}}</p></div>
            </div>
            <div class="row ">
                <div class="col-1 ">
                    <i class="fa fa-phone text-primary"></i>
                </div>
                <div class="col-10">
                    <p> {{$companiesInformation->Company_phone}}</p></div>
            </div>
            <div class="row ">
                <div class="col-1 ">
                    <i class="fa fa-envelope-open text-primary"></i>
                </div>
                <div class="col-10">
                    <p> {{$companiesInformation->email}}</p></div>
            </div>
            <div class="row ">
                <div class="col-1 ">
                    <i class="fa fa-envelope-open text-primary"></i>
                </div>
                <div class="col-10">
                    <p> {{$companiesInformation->email}}</p></div>
            </div>


        </div>
        <div class="col-9 ml-4">
            <div class="row bg-light mb-4 shadow" >
                <img src="/image/{{$companiesInformation->company_image}}" class="mt-3 p-2" style="width: 12vw;height: 12vw ;border-radius:50%"  >
                <p class="mt-lg-5 ml-lg-3 text-uppercase text-primary" style="font-size: 5vw"> {{$companiesInformation->company_name}}</p>
            </div>

            <div class="row bg-light shadow" >
                <div class="col-5">
                   <img src="/image/d.jpg" class="img-fluid m-2" style="width: 25vw;height:30vw">
                </div>
                <div class="col-3">
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>
</div>

@endsection
