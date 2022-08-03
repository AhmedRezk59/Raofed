@extends('layouts.dashboard')

@section('header')
    @include('dashboard.partials.__header', [
        'pageName' => __('site.jobs'),
        'mainRoute' => route('dashboard.jobs.index'),
        'subname' => __('site.add'),
        'subRoute' => route('dashboard.jobs.create'),
    ])
@endsection

@section('content')
    <div class="card py-3 px-3">
        <form class="needs-validation" action="{{ route('dashboard.jobs.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-xl-12 mb-3">
                    <label for="validationTooltip01">{{ __('site.title') }}</label>
                    <input type="text" name="title" class="form-control" id="validationTooltip01"
                        placeholder="{{ __('site.title') }}" value="{{ old('title', '') }}">
                    @error('title')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>               
                <div class="col-xl-12 mb-3">
                    <label for="validationTooltip01">{{ __('site.title') }}</label>
                    <textarea type="text" name="desc" cols="12" rows="12" class="form-control" id="validationTooltip01"
                        placeholder="{{ __('site.desc') }}" value="{{ old('desc', '') }}"></textarea>
                    @error('desc')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>  

                <div class="col-xl-12 mb-3">
                    <label for="validationTooltip01">{{ __('site.time') }}</label>
                    <input type="text" name="time" class="form-control" id="validationTooltip01"
                        placeholder="{{ __('site.time') }}" value="{{ old('time', '') }}">
                    @error('time')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="col-xl-12 mb-3">
                    <label for="validationTooltip01">{{ __('site.location') }}</label>
                    <input type="text" name="location" class="form-control" id="validationTooltip01"
                        placeholder="{{ __('site.location') }}" value="{{ old('location', '') }}">
                    @error('location')
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
