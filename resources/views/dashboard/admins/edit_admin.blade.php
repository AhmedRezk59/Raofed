@extends('layouts.dashboard')

@section('header')
    @include('dashboard.partials.__header', [
        'pageName' => __('site.admins'),
        'mainRoute' => route('dashboard.admins.index'),
        'subname' => __('site.edit'),
        'subRoute' => route('dashboard.admins.edit', $admin->id),
    ])
@endsection

@section('content')
    <div class="card py-3 px-3">
        <form class="needs-validation" action="{{ route('dashboard.admins.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-row">
                <div class="col-xl-12 mb-3">
                    <label for="validationTooltip01">{{ __('site.name') }}</label>
                    <input type="text" name="name" class="form-control" id="validationTooltip01"
                        placeholder="{{ __('site.name') }}" value="{{ $admin->name }}">
                    @error('name')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
               
                <div class="col-xl-12 mb-3">
                    <label for="validationTooltipadminname">{{ __('site.email') }}</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipadminnamePrepend">@</span>
                        </div>
                        <input type="email" name="email" class="form-control" id="validationTooltipadminname"
                            placeholder="{{ __('site.email') }}" aria-describedby="validationTooltipadminnamePrepend"
                            value="{{ $admin->email }}">
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

            <button class="btn btn-primary font-bold px-3" type="submit">{{ __('site.update') }}</button>
        </form>
    </div>
@endsection
