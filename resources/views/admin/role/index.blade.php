@extends('admin.partials.master')

@section('title')
    Portfolio -Role page
@endsection

@section('top_section_active')
    active
@endsection
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="container">
                <div class="row py-5">
                    <div class="d-flex justify-content-between">
                        <div class="d-block">
                            <h2 class="section-title">{{ __('Role') }}</h2>
                            <p class="section-lead">
                                {{ __('You have total') . ' ' . count($roles) . ' ' . __('User roles') }}
                            </p>
                        </div>
{{--                        @if(hasPermission('role_create'))--}}
                            <div class="buttons add-button">
                                <a href="{{route('admin.create.role')}}" class="btn btn-outline-primary">
                                    <i class="fa fa-plus"></i>{{ __(' Add New Role') }}</a>
                            </div>
{{--                        @endif--}}
                    </div>
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-dark"> {{__('Role Lists')}} </h4>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped table-md ">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{__('Role')}}</th>
                                            <th>{{__('Permissions')}}</th>
                                            <th>{{__('Created At')}}</th>
                                            <th>{{__('Options')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {{--                                @foreach($roles as $role)--}}
                                        {{--                                    <tr>--}}
                                        {{--                                        <td>{{ $loop->iteration }}</td>--}}
                                        {{--                                        <td>{{ $role->name }}</td>--}}
                                        {{--                                        <td>--}}
                                        {{--                                            @if (!empty($role->permissions))--}}
                                        {{--                                                <label class="label label-default"><span--}}
                                        {{--                                                        class="btn btn-outline-success btn-round">{{ count($role->permissions) }}</span></label>--}}
                                        {{--                                            @else--}}
                                        {{--                                                <label--}}
                                        {{--                                                    class="label label-default"><span>{{ __('No Permission') }}</span></label>--}}
                                        {{--                                            @endif--}}
                                        {{--                                        </td>--}}
                                        {{--                                        <td>{{$role->created_at->diffForHumans()}}</td>--}}
                                        {{--                                        <td>--}}
                                        {{--                                            @if(hasPermission('role_update'))--}}
                                        {{--                                                <a href="{{route('admin.edit.role',['id'=> $role->id])}}"--}}
                                        {{--                                                   class="btn btn-outline-warning btn-round "--}}
                                        {{--                                                   data-toggle="tooltip" title="" data-original-title="{{__('Edit') }}">--}}
                                        {{--                                                    <i class='bx bx-edit'></i>--}}
                                        {{--                                                </a>--}}
                                        {{--                                            @endif--}}
                                        {{--                                            @if(hasPermission('role_delete'))--}}
                                        {{--                                                <a href="javascript:void(0)"--}}
                                        {{--                                                   onclick="delete_row('delete/roles/', {{ $role->id }})"--}}
                                        {{--                                                   class="btn  btn-outline-danger btn-circle" data-toggle="tooltip" title=""--}}
                                        {{--                                                   data-original-title="{{ __('Delete') }}"><i class='bx bx-trash'></i>--}}
                                        {{--                                                </a>--}}
                                        {{--                                            @endif--}}
                                        {{--                                        </td>--}}
                                        {{--                                    </tr>--}}
                                        {{--                                @endforeach--}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
