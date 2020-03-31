@extends('xeon_admin')

@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success text-center">
            {{ session()->get('success') }}
        </div>
    @endif
    <a href="{{ route('admin.team.create') }}" class="btn btn-primary"><i class="icon-plus"></i> New</a>
    <p> </p>
    <div class="table-responsive" style="background-color: white; padding: 10px;">
        <table id="blog-table" class="table table-hover" style="background-color: white; width:100%;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">job</th>
                    <th scope="col">foto</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($team as $index => $member)
                    <tr>
                        <th scope="row">{{$member->id}}</th>
                        <td>{{$member->name}}</td>
                        <td>{{$member->jop}}</td>
                        <td>{{$member->foto}}</td>
                        <td><a href="#modal{{$index}}" data-toggle="modal" data-target="#modal{{$index}}" class="btn btn-info"><i class="icon-eye-open
                            "></i></a></td>
                        <td><a href="{{route('admin.team.edit', $member->id)}}" class="btn btn-success"><i class="icon-edit"></i></a></td>
                        <td><a href="{{route('admin.team.delete', $member->id)}}" class="btn btn-danger"><i class="icon-trash"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @foreach ($team as $index => $member)
        <!-- Modal -->
        <div id="modal{{$index}}" class="modal fade" role="dialog">
            <div class="modal-dialog" style="padding-top: 100px;">

                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{$member->name}}</h4>
                </div>
                <div class="modal-body">
                    <img src="{{asset('images/'.$member->foto)}}" width="100%" height="100%" alt=""/>
                    <p>{{$member->jop}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>

            </div>
        </div>
    @endforeach
@endsection