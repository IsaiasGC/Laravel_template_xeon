@extends('xeon_admin');

@section('content');

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <h3>Update Team Member</h3>
            {!! Form::open(['url' => '/admin/team/update/'.$member->id, 'method' => 'put']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', $member->name, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('jop', 'Jop')}}
                    {{Form::text('jop', $member->jop, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('foto', 'Foto')}}
                    {{Form::text('foto', $member->foto, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    <img src="{{asset('images/'.$member->foto)}}" alt=""/>
                </div>
            <a href="{{ route('admin.team') }}" class="btn btn-default"><i class="icon-arrow-left"></i> Return</a>
            <button type="submit" class="btn btn-success"><i class="icon-save"></i> Update</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection