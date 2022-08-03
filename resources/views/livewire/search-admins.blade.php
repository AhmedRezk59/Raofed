<div>
    <div class="row mb-3">
        <div class="widget-search clearfix w-25">
            <i class="fa fa-search"></i>
            <input wire:model="search" type="search" class="form-control"
                placeholder="@lang('site.search')....">
        </div>
            <a href="{{ route('dashboard.admins.create') }}" class="button ml-3 float-left">@lang('site.add')<i
                    class="fa fa-plus ml-2"></i></a>
    </div>

    <div class="table-responsive">
        <table class="mb-0 table table-bordered table-2 text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>@lang('site.name') </th>
                    <th>@lang('site.email')</th>
                    <th>@lang('site.action')</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($admins as $index => $admin)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td style="width:250px">
                                <a class="button d-inline-block"
                                    href="{{ route('dashboard.admins.edit', $admin->id) }}">@lang('site.edit') <i
                                        class="fa fa-edit"></i></a>
                                <button type="button" class="button d-inline-block"
                                    style="background-color:#dc3545;border-color:#dc3545;" data-toggle="modal"
                                    data-target="#exampleModalCenter{{$admin->id}}"> @lang('site.delete') <i
                                        class="fa fa-trash"></i></button>

                                <div class="modal fade" id="exampleModalCenter{{$admin->id}}" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="modal-title">
                                                    <div class="mb-30 font-bold h4">
                                                        @lang('site.delete')
                                                    </div>
                                                </div>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('dashboard.admins.destroy', $admin->id) }}"
                                                    method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="button"
                                                        style="background-color:#dc3545;border-color:#dc3545;"
                                                        type="submit">@lang('site.confirm_delete') <i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td class="font-bold" colspan="5">@lang('site.no_data_found')</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class=" my-3 d-flex justify-content-center">
            {{ $admins->links() }}
        </div>
    </div>
</div>
