@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('loginEth') }}">
                    <!--    {{ csrf_field() }} -->
                        <div class="form-group{{ $errors->has('ethid') ? ' has-error' : '' }}">
                            <label for="ethid" class="col-md-4 control-label">eth.id</label>
                            <div class="col-md-6">
                                <input id="ethid" type="text" class="form-control" name="ethid" value="{{ old('ethid') }}" required>
                                @if ($errors->has('ethid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ethid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                             
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
