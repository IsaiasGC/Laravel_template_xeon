@extends('xeon_admin');

@section('content');

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <h3>New Portafolio Item</h3>
            {!! Form::open(['url' => '/admin/portafolio/destroy/'.$item->id, 'method' => 'delete']) !!}
                <div class="form-group">
                    {{Form::label('client_name', 'Client Name')}}
                    {{Form::text('client_name', $item->client_name, ['class'=>'form-control', 'readonly'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'Description')}}
                    {{Form::textarea('description', $item->description, ['class'=>'form-control', 'readonly'])}}
                </div>
                <div class="form-group">
                    {{Form::label('foto', 'Foto')}}
                    {{Form::text('foto', $item->foto, ['class'=>'form-control', 'readonly'])}}
                </div>
                <div class="form-group">
                    <img src="{{asset('images/portfolio/full/'.$item->foto)}}" alt=""/>
                </div>
                <div class="form-group">
                    {{Form::label('made_date', 'Made Date')}}
                    {{Form::date('made_date', $item->made_date, ['class'=>'form-control', 'readonly'])}}
                </div>
                <div class="form-group">
                    {{Form::label('type', 'Types')}}
                    {{Form::text('type', $item->type, ['class'=>'form-control', 'readonly'])}}
                </div>
            <a href="{{ route('admin.portafolio') }}" class="btn btn-default"><i class="icon-arrow-left"></i> Return</a>
            <button type="submit" class="btn btn-danger"><i class="icon-trash"></i> Delete</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection