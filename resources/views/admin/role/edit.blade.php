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
                    <div class="col-sm-xs-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div class="d-block">
                                        <h4 class="section-title fw-bold text-primary">{{ __('Edit Role') }}</h4>
                                    </div>
                                    <div class="buttons add-button">
                                        <a href="{{ route('admin.roles') }}" class="btn btn-outline-primary"> <i
                                                class='fa fa-arrow-left'></i>{{ __(' Back') }} </a>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('admin.update.role') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="name"> {{ __('Name') }} *</label>
                                                <input type="hidden" value="{{ $role->id }}" name="role_id">
                                                <input type="text" name="name" id="name"
                                                    value="{{ old('name') ? old('name') : $role->name }}"
                                                    placeholder="{{ __('Enter Name') }}" class="form-control">
                                                @if ($errors->has('name'))
                                                    <div class="text text-danger">
                                                        {{ $errors->first('name') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="slug"> {{ __('Slug') }} </label>
                                                <input type="text" name="slug" id="slug"
                                                    value="{{ old('slug') ? old('slug') : $role->slug }}"
                                                    placeholder="{{ __('Enter Slug') }}" class="form-control">
                                                @if ($errors->has('slug'))
                                                    <div class="text text-danger">
                                                        {{ $errors->first('slug') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body card-body-padding">
                                            <div class="table table-striped table-md col-md-12">
                                                <table class="table table-striped role-create-table role-permission"
                                                    id="permissions-table">
                                                    <thead>
                                                        <tr class="bg-info text-white">
                                                            <th scope="col">{{ __('Module') }}/{{ __('Sub-module') }}
                                                            </th>
                                                            <th scope="col">{{ __('Permissions') }}</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody id="role-permissions">
                                                        @foreach ($permissions as $permission)
                                                            <tr>
                                                                <td>
                                                                    <span
                                                                        class="text-capitalize">{{ $permission->attribute }}</span>
                                                                </td>
                                                                <td>
                                                                    @foreach ($permission->keywords as $key => $keyword)
                                                                        {{--                                                                    {{dd($keyword)}} --}}
                                                                        <div class="custom-control custom-checkbox">
                                                                            @if ($keyword != '')
                                                                                @if (old('permissions'))
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input read common-key"
                                                                                        id="{{ $keyword }}"
                                                                                        name="permissions[]"
                                                                                        value="{{ $keyword }}"
                                                                                        {{ in_array($keyword, old('permissions')) ? 'checked' : '' }}>
                                                                                    <label class="custom-control-label"
                                                                                        style=""
                                                                                        for="{{ $keyword }}">{{ __($key) }}</label>
                                                                                @else
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input read common-key"
                                                                                        id="{{ $keyword }}"
                                                                                        name="permissions[]"
                                                                                        value="{{ $keyword }}"
                                                                                        {{--                                                                            {{dd($role->permissions)}} --}}
                                                                                        {{ $role->permissions ? (in_array($keyword, json_decode($role->permissions, true)) ? 'checked' : '') : '' }}>
                                                                                    <label class="custom-control-label"
                                                                                        style=""
                                                                                        for="{{ $keyword }}">{{ __($key) }}</label>
                                                                                @endif
                                                                            @endif
                                                                        </div>
                                                                    @endforeach
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-outline-primary" tabindex="4">
                                                    {{ __('Update') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
