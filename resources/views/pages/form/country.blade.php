@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'country'
])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-1 col-md-10"> 
                <form  method="post" action="{{route('country.store')}}"> 
                @csrf
                    <div class="card">
                        <div class="card-header card-header-primary bg-primary">
                            <h4 class="card-title text-white " >{{ __('Country Form') }}</h4>
                        </div>
                        <div class="card-body ml-3 mr-3">
                            <div class="row" >
                                <div class="form-group col-md-6">
                                    <label for="country">Country Name </label>
                                    <div class="input-container">
                                        <i class="fa fa-sitemap icon" ></i>
                                        <input type="text" class="form-control"  name="country" value="{{old('country')}}"  placeholder="Country Name">
                                    </div>
                                       
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 ml-2">
                            <button class="btn btn-primary "></i> Add</button>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
</div>
@endsection
