@foreach($permissions as $permission)
    <tr>
        <td>
            <span class="text-capitalize">{{ __($permission->attribute) }}</span>
        </td>
        <td>
            @foreach ($permission->keywords as $key => $keyword)
                <div class="custom-control custom-checkbox">
                    @if ($keyword != '')
                        @if(old('permissions'))
                            <input type="checkbox"
                                   class="custom-control-input read common-key"
                                   id="{{ $keyword }}" name="permissions[]"
                                   value="{{ $keyword }}"
                                {{ in_array($keyword, old('permissions')) ? 'checked' : '' }}>
                            <label class="custom-control-label" style=""
                                   for="{{ $keyword }}">{{ __($key) }}</label>
                        @else
                            <input type="checkbox" class="custom-control-input read common-key" name="permissions[]"
                                   value="{{$keyword}}"
                                   id="{{$keyword}}" {{in_array($keyword, $role_permissions) ? 'checked':''}}>
                            <label class="custom-control-label" for="{{$keyword}}">{{__($key)}}</label>
                        @endif
                    @endif
                </div>
            @endforeach
        </td>
    </tr>

@endforeach
