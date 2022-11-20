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

            <div class="container py-5">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> {{__('Staff Lists')}} </h4>
                                <div class="card-header-form">
                                    <form class="form-inline" id="sorting">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="q" value="{{ @$q }}"
                                                   placeholder="{{ __('Search') }}">
                                            <div class="input-group-btn">
                                                <button class="btn btn-outline-primary"><i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="d-block">
                                        <p class="section-lead">
{{--                                                                    {{ __('You have total') . ' ' . $staffs->total() . ' ' . __('Staffs') }}--}}
                                        </p>
                                    </div>
{{--                                                   @if(hasPermission('staff_create'))--}}
                                    <div class="buttons add-button">
                                        <a href="" class="btn btn-outline-primary"></a><a href="{{route('admin.staffs.create')}}" class="btn btn-outline-primary">
                                            <i class="fa fa-plus"></i>{{ __('Add New Staff ') }}</a>
                                    </div>
{{--                                    @endif--}}
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped table-md ">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{__('Name')}}</th>
                                            <th>{{__('Phone')}}</th>
                                            <th>{{__('Last Login')}}</th>
                                            <th>{{__('Role')}}</th>
                                            <th>{{__('Created At')}}</th>
                                            <th>{{__('Status')}}</th>
                                            <th>{{__('Options')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {{--                                @foreach($staffs as $key => $staff)--}}
                                        {{--                                    <tr>--}}
                                        {{--                                        <td>{{ $staffs->firstItem() + $key }}</td>--}}
                                        {{--                                        <td width="300">--}}
                                        {{--                                            <div class="d-flex">--}}
                                        {{--                                                <figure class="avatar mr-2">--}}
                                        {{--                                                    <img src="{{ get_image($staff->id,'user_image') }}"--}}
                                        {{--                                                         alt="Not Found!">--}}
                                        {{--                                                    @if(\Illuminate\Support\Facades\Cache::has('user-is-online-' . $staff->id))--}}
                                        {{--                                                        <i class="avatar-presence online"></i>--}}
                                        {{--                                                    @else--}}
                                        {{--                                                        <i class="avatar-presence offline"></i>--}}
                                        {{--                                                    @endif--}}
                                        {{--                                                </figure>--}}
                                        {{--                                                <div class="ml-1">--}}
                                        {{--                                                    {{ $staff->first_name . ' ' . $staff->last_name }}<br/>--}}
                                        {{--                                                    <i class='bx bx-check-circle--}}
                                        {{--                                                            {{ \Cartalyst\Sentinel\Laravel\Facades\Activation::completed($staff) == true ? "text-success" : "text-warning" }} '>--}}
                                        {{--                                                    </i>--}}
                                        {{--                                                    {{ isDemoServer() ? emailAddressMask($staff->email) : $staff->email }}--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </td>--}}
                                        {{--                                        <td>{{ $staff->phone}}</td>--}}
                                        {{--                                        <td>{{$staff->last_login != '' ? date('M d, Y h:i a', strtotime($staff->last_login)) : '' }}</td>--}}
                                        {{--                                        <td>{{ @$staff->role->name }}</td>--}}

                                        {{--                                        <td>{{$staff->created_at->diffForHumans()}}</td>--}}
                                        {{--                                        <td>--}}
                                        {{--                                            @if($staff->is_user_banned == 1)--}}
                                        {{--                                                <div class="d-flex">--}}
                                        {{--                                                    <div--}}
                                        {{--                                                        class="ml-1 badge badge-pill badge-danger">{{ __('Banned') }}</div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            @else--}}
                                        {{--                                                <label--}}
                                        {{--                                                    class="custom-switch mt-2 {{ hasPermission('staff_update') ? '' : 'cursor-not-allowed' }}">--}}
                                        {{--                                                    <input type="checkbox" name="custom-switch-checkbox"--}}
                                        {{--                                                           value="user-status-change/{{$staff->id}}"--}}
                                        {{--                                                           {{ $staff->status == 1 ? 'checked' : '' }}  {{ hasPermission('user_update') ? '' : 'disabled'}} class="{{ hasPermission('user_update') ? 'status-change' : '' }} custom-switch-input">--}}
                                        {{--                                                    <span class="custom-switch-indicator"></span>--}}
                                        {{--                                                </label>--}}
                                        {{--                                            @endif--}}
                                        {{--                                        </td>--}}
                                        {{--                                        <td>--}}
                                        {{--                                            @if(hasPermission('staff_update'))--}}
                                        {{--                                                <a href="{{route('admin.staffs.edit',['id'=> $staff->id])}}"--}}
                                        {{--                                                   class="btn btn-outline-warning btn-round {{ hasPermission('staff_update') ? '' : 'cursor-not-allowed' }}"--}}
                                        {{--                                                   data-toggle="tooltip" title="" data-original-title="{{__('Edit') }}">--}}
                                        {{--                                                    <i class='bx bx-edit'></i>--}}
                                        {{--                                                </a>--}}
                                        {{--                                            @endif--}}
                                        {{--                                            @if(hasPermission('staff_delete'))--}}
                                        {{--                                                <a href="javascript:void(0)"--}}
                                        {{--                                                   onclick="delete_row('delete/staff/', {{ $staff->id }})"--}}
                                        {{--                                                   class="btn  btn-outline-danger btn-circle" data-toggle="tooltip"--}}
                                        {{--                                                   title=""--}}
                                        {{--                                                   data-original-title="{{ __('Delete') }}"><i class='bx bx-trash'></i>--}}
                                        {{--                                                </a>--}}
                                        {{--                                            @endif--}}
                                        {{--                                            <a href="javaScript:void(0)" data-toggle="dropdown"--}}
                                        {{--                                               class="btn btn-outline-secondary btn-circle" title=""--}}
                                        {{--                                               data-original-title="{{ __('Options') }}">--}}
                                        {{--                                                <i class='bx bx-dots-vertical-rounded'></i>--}}
                                        {{--                                            </a>--}}
                                        {{--                                            <div class="dropdown-menu">--}}
                                        {{--                                                @if(hasPermission('staff_update'))--}}
                                        {{--                                                    @if($staff->is_user_banned == 0)--}}
                                        {{--                                                        <a href="{{ route('staff.ban', $staff->id) }}"--}}
                                        {{--                                                           class="dropdown-item has-icon"><i--}}
                                        {{--                                                                class='bx bx-lock'></i>{{ __('Ban This staff') }}</a>--}}
                                        {{--                                                    @else--}}
                                        {{--                                                        <a href="{{ route('staff.ban', $staff->id) }}"--}}
                                        {{--                                                           class="dropdown-item has-icon"><i--}}
                                        {{--                                                                class='bx bx-lock-open'></i>{{ __('Unban This staff') }}--}}
                                        {{--                                                        </a>--}}
                                        {{--                                                    @endif--}}
                                        {{--                                                @endif--}}
                                        {{--                                                @if (hasPermission('staff_update'))--}}
                                        {{--                                                    @if(\Cartalyst\Sentinel\Laravel\Facades\Activation::completed($staff) == true)--}}
                                        {{--                                                        <a href="{{ route('staff.email.verify', $staff->id) }}"--}}
                                        {{--                                                           class="dropdown-item has-icon"><i--}}
                                        {{--                                                                class='bx bx-x-circle'></i>{{ __('Unverify Account') }}--}}
                                        {{--                                                        </a>--}}
                                        {{--                                                    @else--}}
                                        {{--                                                        <a href="{{ route('staff.email.verify', $staff->id) }}"--}}
                                        {{--                                                           class="dropdown-item has-icon"><i--}}
                                        {{--                                                                class='bx bx-check-circle'></i>{{ __('Verify Account') }}--}}
                                        {{--                                                        </a>--}}
                                        {{--                                                    @endif--}}
                                        {{--                                                @endif--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </td>--}}
                                        {{--                                    </tr>--}}
                                        {{--                                @endforeach--}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <nav class="d-inline-block">
                                    {{--                            {{ $staffs->appends(Request::except('page'))->links() }}--}}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
