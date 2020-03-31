@extends('xeon_admin')

@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success text-center">
            {{ session()->get('success') }}
        </div>
    @endif
    <a href="{{ route('admin.service.create') }}" class="btn btn-primary"><i class="icon-plus"></i> New</a>
    <p> </p>
    <div class="table-responsive" style="background-color: white; padding: 10px;">
        <table id="blog-table" class="table table-hover" style="background-color: white; width:100%;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">icon</th>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $index => $service)
                    <tr>
                        <th scope="row">{{$service->id}}</th>
                        <td>{{$service->icon}}</td>
                        <td>{{$service->name}}</td>
                        <td>{{$service->description}}</td>
                        <td><a href="#modal{{$index}}" data-toggle="modal" data-target="#modal{{$index}}" class="btn btn-info"><i class="icon-eye-open
                            "></i></a></td>
                        <td><a href="{{route('admin.service.edit', $service->id)}}" class="btn btn-success"><i class="icon-edit"></i></a></td>
                        <td><a href="{{route('admin.service.delete', $service->id)}}" class="btn btn-danger"><i class="icon-trash"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @foreach ($services as $index => $service)
        <!-- Modal -->
        <div id="modal{{$index}}" class="modal fade" role="dialog">
            <div class="modal-dialog" style="padding-top: 100px;">

                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{$service->name}}</h4>
                </div>
                <div class="modal-body">
                    <i class="{{$service->icon}}" width="100%" height="100%"></i>
                    <p>{{$service->description}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>

            </div>
        </div>
    @endforeach
@endsection