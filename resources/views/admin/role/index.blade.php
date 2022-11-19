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
                                {{ __('You have total') . ' ' . count(json_decode($roles)) . ' ' . __('User roles') }}
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
{{--                                        @foreach($roles as $role)--}}
{{--                                            <tr class="role-row-{{$role->id}}">--}}
{{--                                                <td>{{ $loop->iteration }}</td>--}}
{{--                                                <td>{{ $role->name }}</td>--}}
{{--                                                <td>--}}
{{--                                                    @if (!empty($role->permissions))--}}
{{--                                                        @php--}}
{{--                                                            $rolePermisions = json_decode($role->permissions, true);--}}
{{--                                                        @endphp--}}
{{--                                                        <label class="label "><span--}}
{{--                                                                class="btn btn-outline-success btn-circle">{{ count($rolePermisions) }}</span></label>--}}
{{--                                                    @else--}}
{{--                                                        <label class="label label-default"><span--}}
{{--                                                                class="text-warning fst-normal">{{ __('No Permission') }}</span></label>--}}
{{--                                                    @endif--}}
{{--                                                </td>--}}
{{--                                                <td>{{$role->created_at->diffForHumans()}}</td>--}}
{{--                                                <td>--}}
{{--                                                    --}}{{--                                                                                    @if(hasPermission('role_update'))--}}
{{--                                                    <a href=""--}}
{{--                                                       --}}{{--                                                                                        <a href="{{route('admin.edit.role',['id'=> $role->id])}}"--}}
{{--                                                       class="btn btn-outline-warning btn-round "--}}
{{--                                                       data-toggle="tooltip" title=""--}}
{{--                                                       data-original-title="{{__('Edit') }}">--}}
{{--                                                        <i class='bx bx-edit'></i>--}}
{{--                                                    </a>--}}
{{--                                                    --}}{{--                                                                                    @endif--}}
{{--                                                    --}}{{--                                                                                    @if(hasPermission('role_delete'))--}}
{{--                                                    <button--}}
{{--                                                        class="btn btn-outline-danger btn-circle delete-btn"--}}
{{--                                                        data-toggle="tooltip" value="{{$role->id}}" onclick="deleteRole({{$role->id}})"--}}
{{--                                                        title="Delete" data-original-title="{{ __('Delete') }}"><i--}}
{{--                                                            class='fa fa-trash mt-1'></i>--}}
{{--                                                    </button>--}}
{{--                                                    --}}{{--                                                                                    @endif--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
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

@section('font-js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        // $(document).on("click", ".delete-btn", function () {
        //     let roleId = $(this).val();
        //     $.ajax({
        //         type: "GET",
        //         dataType: "json",
        //         url: "/admin/delete/roles/" + roleId,
        //         success: function (res) {
        //             alert(res);
        //             toastr.success('Data Added Successfully');
        //             $('.role-row-'+roleId).remove();
        //         }
        //     })
        // });

        function allTopContent(){
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "/admin/role-all",
                success: function (response){
                    console.log(response.jnj)
                    var data = "";
                    $.each(response, function (key, value){
                        data = data +"<tr>"
                        data = data + "<td>"+value.id+"</td>"
                        data = data + "<td>"+value.title_one+"</td>"
                        data = data + "<td>"+value.title_two+"</td>"
                        data = data + "<td>"+value.description+"</td>"
                        data = data + "<td>"+value.status+"</td>"
                        //     data = data + "<td>"
                        //        " <label class="switch switch-status">
                        //         <input type="checkbox" class="status" id="31" checked="">
                        //         <span class="slider round"></span>
                        // </label>
                        //     <input type="checkbox" class="status" id="31" checked="">
                        //         <span class="slider round"></span>
                        //     </label>"
                        //         // +value.status+
                        //
                        //         "</td>"
                        data = data + "<td>"
                        data = data + "<button class='btn btn-outline-success rounded-circle m-1' onclick='editTopContent("+value.id+")'><i class='fa fa-edit'></i> </button>"
                        data = data + "<button class='btn btn-outline-danger rounded-circle m-1' onclick='deleteTopContent("+value.id+")'><i class='fa fa-trash'></i> </button>"
                        data = data + "</td>"
                        data = data +"</tr>"
                    })
                    $('tbody').html(data)
                }
            })
        }

        function deleteRole(id){

            if(id){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                })
                    .then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: "get",
                                dataType: "json",
                                url: "/admin/delete/roles/"+id,
                                success: function (data){
                                    Swal.fire(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                    )
                                }
                            })

                        }
                        allTopContent();
                    })
            }
        }


    </script>
@endsection
