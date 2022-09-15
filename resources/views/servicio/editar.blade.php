@extends('adminlte::page')

@section('title', 'Cleaningup-app')

@section('content_header')
    <h1>Edit Service</h1>
@stop

@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Check the fields!</strong>
                            @foreach ($errors->all() as $error)
                                <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    @endif

                <form action="{{ route('service.update',$service->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                               <label for="name_client">Fullname Client</label>
                               <input type="text" name="name_client" id="name_client" class="form-control" value="{{ $service->name_client }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                               <label for="mobile_number_client">Mobile number client</label>
                               <input type="text" name="mobile_number_client" id="mobile_number_client" class="form-control" value="{{ $service->mobile_number_client }}" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="solicited_service_id">Solicited services</label>
                                <select class="form-control" name="solicited_service_id" id="solicited_service_id">
                                    <option selected disabled>Select it</option>
                                    @foreach ($solicited as $item)
                                       @if( $item->id == $service->solicited_service_id )
                                        <option selected value="{{ $item->id}}">{{ $item->name_solicited_services }}</option>
                                        @else
                                        <option value="{{ $item->id}}">{{ $item->name_solicited_services }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="comment_client">Comment client</label>
                                <textarea class="form-control" id="comment_client" name="comment_client" rows="3" maxlength="250">{{ $service->comment_client }}</textarea>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                               <label for="date_service">Date service</label>
                               <input type="date" name="date_service" id="date_service" class="form-control" value="{{ $service->date_service }}" >
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                               <label for="hour_service">Hour service</label>
                               <input type="time" min="09:00" max="18:00" name="hour_service" id="hour_service" class="form-control" value="{{ $service->hour_service }}" >
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="status_service_id">Status services</label>
                                <select class="form-control" name="status_service_id" id="status_service_id">
                                    @foreach ($status as $item)
                                        @if( $item->id == $service->status_service_id)
                                        <option selected value="{{ $item->id}}">{{ $item->name_status_services }}</option>
                                        @else
                                        <option value="{{ $item->id}}">{{ $item->name_status_services }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                               <label for="cost_service">Cost service</label>
                               <input type="number" step="any" name="cost_service" class="form-control" value="{{ $service->cost_service }}" >
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="personal_service_id">Personal service</label>
                                <select class="form-control" name="personal_service_id">
                                    @foreach ($personal as $item)
                                        @if( $item->id == $service->personal_service_id)
                                            <option selected value="{{ $item->id}}">{{ $item->name_personal_services }}</option>
                                        @else
                                            <option value="{{ $item->id}}">{{ $item->name_personal_services }}</option>
                                        @endif

                                    @endforeach
                                </select>
                            </div>
                        </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
