@extends('layouts.dashboard')

@section('header')
    @include('dashboard.partials.__header', [
        'pageName' => __('site.admins'),
        'mainRoute' => route('dashboard.admins.index'),
        'subname' => __('site.add'),
        'subRoute' => route('dashboard.admins.create'),
    ])
@endsection

@section('content')
    <div class="card py-3 px-3">
        <form class="needs-validation" action="{{ route('dashboard.admins.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-xl-6 mb-3">
                    <label for="validationTooltip01">{{ __('site.name') }}</label>
                    <input type="text" name="name" class="form-control" id="validationTooltip01"
                        placeholder="{{ __('site.name') }}" value="{{ old('name', '') }}">
                    @error('name')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="col-xl-12 mb-3">
                    <label for="validationTooltipUsername">{{ __('site.email') }}</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        </div>
                        <input type="email" name="email" class="form-control" id="validationTooltipUsername"
                            placeholder="{{ __('site.email') }}" aria-describedby="validationTooltipUsernamePrepend"
                            value="{{ old('email', '') }}">
                    </div>
                    @error('email')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-xl-6 mb-3">
                    <label for="validationTooltip02">{{ __('site.password') }}</label>
                    <input type="password" name="password" class="form-control" id="validationTooltip02"
                        placeholder="{{ __('site.password') }}">
                    @error('password')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-xl-6 mb-3">
                    <label for="validationTooltip02">{{ __('site.password_confirmation') }}</label>
                    <input type="password" name="password_confirmation" class="form-control" id="validationTooltip02"
                        placeholder="{{ __('site.password_confirmation') }}">
                    @error('password_confirmation')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
               
            </div>

            <button class="btn btn-primary font-bold px-3" type="submit">{{ __('site.add') }}</button>
        </form>
    </div>
@endsection
