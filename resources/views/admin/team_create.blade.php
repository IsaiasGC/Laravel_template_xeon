@extends('xeon_admin');

@section('content');

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <h3>New Team Member</h3>
            {!! Form::open(['url' => '/admin/team/store', 'method' => 'post']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('jop', 'Jop')}}
                    {{Form::text('jop', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('foto', 'Foto')}}
                    {{Form::text('foto', null, ['class'=>'form-control'])}}
                </div>
            <a href="{{ route('admin.team') }}" class="btn btn-default"><i class="icon-arrow-left"></i> Return</a>
            <button type="submit" class="btn btn-primary"><i class="icon-save"></i> Save</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection