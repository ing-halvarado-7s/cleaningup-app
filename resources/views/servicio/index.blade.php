@extends('adminlte::page')

@section('title', 'Cleaningup-app')

@section('content_header')
    <h1>Cleaning Up Services</h1>
@stop

@section('content')
<section class="section">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    @if (session('destroy'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('destroy') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                                <a class="btn btn-warning" href="{{ route('service.create') }}">Add Service</a>
                        </div>

                        <div class="col-sm">
                            <form action="{{ route('service.index') }}" method="get">
                                <div class="input-group float-right">

                                    <button type="submit" class="btn btn-primary float-right">
                                    <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if (!$services->isEmpty())
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Name client</th>
                                    <th style="color:#fff;">Mobile Number Client</th>
                                    <th style="color:#fff;">Solicited Services</th>
                                    <th style="color:#fff;">Date Services</th>
                                    <th style="color:#fff;">Hour Services</th>
                                    <th style="color:#fff;">Actions</th>
                            </thead>
                            <tbody>
                            @foreach ($services as $service)
                            <tr>
                                <td style="display: none;">{{ $service->id }}</td>
                                <td>{{ $service->name_client }}</td>
                                <td>{{ $service->mobile_number_client }}</td>
                                <td>{{ $service->solicitedServices->name_solicited_services }}</td>
                                @php $fecha= date("d-m-Y", strtotime($service->date_service)); @endphp
                                <td>{{ $fecha }}</td>
                                <td>{{ $service->hour_service }}</td>

                                <td>
                                    <form action="{{ route('service.destroy',$service->id) }}" method="POST" onsubmit="return confirm('Do you want to delete this record?');">
                                            <a class="btn btn-info" href="{{ route('service.edit',$service->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $services->links() !!}
                        </div>
                    @else
                        <h5>No hay resultados disponibles para su búsqueda</h5>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

