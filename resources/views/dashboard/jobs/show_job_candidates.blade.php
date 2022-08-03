@extends('layouts.dashboard')

@section('header')
    @include('dashboard.partials.__header', [
        'pageName' => __('site.jobs'),
        'mainRoute' => route('dashboard.jobs.index'),
        'subname' => __('site.edit'),
        'subRoute' => route('dashboard.jobs.edit', $job->id),
    ])
@endsection

@section('content')
    <div class="card py-3 px-3">

        <div class="table-responsive">
            <table class="mb-0 table table-bordered table-2 text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('site.name') </th>
                        <th>@lang('site.email')</th>
                        <th>@lang('site.apply_date')</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($job->users as $index => $user)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->pivot->created_at }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td class="font-bold" colspan="5">@lang('site.no_data_found')</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endsection
