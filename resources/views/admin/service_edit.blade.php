@extends('xeon_admin');

@section('content');

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <h3>Edit Service</h3>
            {!! Form::open(['url' => '/admin/service/update/'.$service->id, 'method' => 'put']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', $service->name, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'Description')}}
                    {{Form::textarea('description', $service->description, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('icon', 'Icon')}}
                    {{Form::text('icon', $service->icon, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    <i class="{{$service->icon}}" style=""></i>
                </div>
            <a href="{{ route('admin.service') }}" class="btn btn-default"><i class="icon-arrow-left"></i> Return</a>
            <button type="submit" class="btn btn-success"><i class="icon-save"></i> Update</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection