@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create New </div>
                {{ Form::open(['url' => 'guest/new']) }}
                 {{ Form::label('name', 'nom') }}
                   {{ Form::text('text') }}
                   {{ Form::label('sex', 'Sexe') }}
                   {{ Form::select('sex', [0 => 'Féminin', 1 => 'Masculin']) }}
                   {{ Form::label('com', 'Coms')}}
                   {{ Form::select('coms[]',$coms, $comsId, ['multiple' => true])}}
                   {{ Form::submit('Créer') }}
                 {{ Form::close() }}
                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
