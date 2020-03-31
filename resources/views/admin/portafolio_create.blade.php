@extends('xeon_admin');

@section('content');

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <h3>New Portafolio Item</h3>
            {!! Form::open(['url' => '/admin/portafolio/store', 'method' => 'post']) !!}
                <div class="form-group">
                    {{Form::label('client_name', 'Client Name')}}
                    {{Form::text('client_name', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'Description')}}
                    {{Form::textarea('description', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('foto', 'Foto')}}
                    {{Form::text('foto', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('made_date', 'Made Date')}}
                    {{Form::date('made_date', \Carbon\Carbon::now(), ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('type', 'Types')}}
                    {{Form::text('type', null, ['class'=>'form-control'])}}
                </div>
            <a href="{{ route('admin.portafolio') }}" class="btn btn-default"><i class="icon-arrow-left"></i> Return</a>
            <button type="submit" class="btn btn-primary"><i class="icon-save"></i> Save</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection