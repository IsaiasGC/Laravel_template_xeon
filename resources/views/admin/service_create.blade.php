@extends('xeon_admin');

@section('content');

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <h3>New Service</h3>
            {!! Form::open(['url' => '/admin/service/store', 'method' => 'post']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'Description')}}
                    {{Form::textarea('description', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('icon', 'Icon')}}
                    {{Form::text('icon', null, ['class'=>'form-control'])}}
                </div>
            <a href="{{ route('admin.service') }}" class="btn btn-default"><i class="icon-arrow-left"></i> Return</a>
            <button type="submit" class="btn btn-primary"><i class="icon-save"></i> Save</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection