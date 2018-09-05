@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">¿En que estas pensando?</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<form action="">
<div class="form-group">
<input type="text"class="form-control">
</div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
