@extends('admin.partials.master')

@section('title')
    Portfolio -Top section
@endsection

@section('top_section_active')
    active
@endsection

@section('content')
    <div class="section py-5 ">
        <div class="section-body justify-content-center">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr class="bg-info text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Title Part One</th>
                                        <th scope="col">Title Part Two</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header section-header">
                                <span id="addT">Add new Section top Content</span>
                                <span id="UpdateT">Update Section top Content</span>
                            </div>
                            <div class="card-body">
                                {{--                    <form>--}}
                                <div class="mb-3">
                                    <label for="title_one" class="form-label">Title Part One</label>
                                    <input type="text" class="form-control" id="title_one" placeholder="Enter Title">
                                </div>
                                <div class="mb-3">
                                    <label for="title_two" class="form-label">Title Part Two</label>
                                    <input type="text" class="form-control" id="title_two" placeholder="Enter Title">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea id="description1" class="form-control summernote"  placeholder="Enter Description"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea id="description" class="form-control"  placeholder="Enter Description"></textarea>
                                </div>
                                <div class="mb-3"><br>
                                    <label for="status"> {{__('Status')}}  </label>
                                    <label class="custom-switch mt-2">
{{--                                        <input type="checkbox" name="custom-switch-checkbox" value="video-quality-status/"   class= custom-switch-input">--}}
                                        <span class="custom-switch-indicator"></span>
                                    </label>
{{--                                    <label><input type="radio" name="status" {{ $data->status== 1 ? 'checked': '' }} id="status" value="1" required /> Published</label>--}}
{{--                                    <label><input type="radio" name="status" {{ $data->status== 0 ? 'checked': '' }}  id="status" value="0" required /> Unpublished</label>--}}
                                </div>
                                <input type="hidden" class="form-control" id="id" />
                                <div class="form-group text-right">
                                    <button type="submit" id="addTC" class="btn btn-primary" onclick="addTopContent()">Add</button>
                                    <button type="submit" id="updateTC" class="btn btn-primary " onclick="updateData()">Update</button>
                                </div>
                                {{--                    </form>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('admin-js')
    <script type="text/javascript">
        $('#addT').show();
        $('#UpdateT').hide();
        $('#addTC').show();
        $('#updateTC').hide();

        $.ajaxSetup({
            headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        function addTopContent(){
           var title_one    = $('#title_one').val();
           var title_two    = $('#title_two').val();
           var description  = $('#description').val();
           var status       = $('#status').val();

           $.ajax({
               type: "POST",
               dataType: "json",
               data: {title_one:title_one,title_two:title_two, description:description, status:status},
               url: "/section-top-store",
               success: function (data){
                   clearTopContent();
                   allTopContent();
                   // Alert
                   const Msg = Swal.mixin({
                       toast:'true',
                       position: 'top-end',
                       icon: 'success',
                       showConfirmButton: false,
                       timer: 1600
                   });
                   Msg.fire({
                       type: 'success',
                       title: 'Data Added Successfully'
                   })
                   // End Alert
                   console.log(data)
               }
           })
        }

        function clearTopContent(){
          $('#title_one').val('');
          $('#title_two').val('');
          $('#description').val('');
          $('#status').val('');
        }

        function allTopContent(){
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "/top-section-all",
                success: function (response){
                    var data = "";
                    $.each(response, function (key, value){
                        data = data +"<tr>"
                        data = data + "<td>"+value.id+"</td>"
                        data = data + "<td>"+value.title_one+"</td>"
                        data = data + "<td>"+value.title_two+"</td>"
                        data = data + "<td>"+value.description+"</td>"
                        data = data + "<td>"+value.status+"</td>"
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
        allTopContent();
        deleteTopContent()


        function deleteTopContent(id){

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
                                type: "delete",
                                dataType: "json",
                                url: "/section-top-destroy/"+id,
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
        function editTopContent(id){
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "/top-section-edit/"+id,
                success: function (data){
                    $('#addT').hide();
                    $('#UpdateT').show();
                    $('#addTC').hide();
                    $('#updateTC').show();

                    $('#id').val(data.id);
                    $('#title_one').val(data.title_one);
                    $('#title_two').val(data.title_two);
                    $('#description').val(data.description);
                    $('#status').val(data.status);
                }
            })
        }



    </script>
@endsection














{{--    <section class="py-3">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="card ">--}}
{{--                        <div class="card-header bg-dark text-warning">--}}
{{--                            <h1 class="text-center">All Units</h1>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="page-content fade-in-up">--}}
{{--                                <div class="ibox">--}}
{{--                                    <div class="ibox-head">--}}
{{--                                        <div class="ibox-title">Data Table</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ibox-body">--}}
{{--                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">--}}
{{--                                            <thead>--}}
{{--                                            <tr>--}}
{{--                                                <th>SL</th>--}}
{{--                                                <th>Unit Name</th>--}}
{{--                                                <th>Unit Description</th>--}}
{{--                                                <th>Unit Status</th>--}}
{{--                                                <th>Unit Added</th>--}}
{{--                                                <th>Action</th>--}}
{{--                                            </tr>--}}
{{--                                            </thead>--}}
{{--                                            <tbody>--}}
{{--                                            @foreach($units as $unit)--}}
{{--                                                <tr>--}}
{{--                                                    <td>{{ $loop->iteration }}</td>--}}
{{--                                                    <td>{{$unit->name}}</td>--}}
{{--                                                    <td>{{$unit->description}}</td>--}}
{{--                                                    <td>{{$unit->status==1 ? 'Published':'Unpublished'}}</td>--}}
{{--                                                    <td>{{$unit->created_at->diffForHumans()}}</td>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="{{ route('edit-unit',['id' =>$unit->id]) }}" class="fa fa-edit btn btn-primary"> </a><br><br>--}}
{{--                                                        <a href="{{ route('delete-unit',['id' =>$unit->id]) }}" onclick="return confirm('Are you sure to delete?')" class="fa fa-trash btn btn-danger"> </a>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                            @endforeach--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <a class="adminca-banner" href="http://admincast.com/adminca/" target="_blank">--}}
{{--                                        <div class="adminca-banner-ribbon"><i class="fa fa-trophy mr-2"></i>PREMIUM TEMPLATE</div>--}}
{{--                                        <div class="wrap-1">--}}
{{--                                            <div class="wrap-2">--}}
{{--                                                <div>--}}
{{--                                                    <img src="{{ asset('/admin_assets/') }}/assets/img/adminca-banner/adminca-preview.jpg" style="height:160px;margin-top:50px;" />--}}
{{--                                                </div>--}}
{{--                                                <div class="color-white" style="margin-left:40px;">--}}
{{--                                                    <h1 class="font-bold">ADMINCA</h1>--}}
{{--                                                    <p class="font-16">Save your time, choose the best</p>--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>High Quality Design</li>--}}
{{--                                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Fully Customizable and Easy Code</li>--}}
{{--                                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Bootstrap 4 and Angular 5+</li>--}}
{{--                                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Best Build Tools: Gulp, SaSS, Pug...</li>--}}
{{--                                                        <li><i class="ti-check m-r-5"></i>More layouts, pages, components</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div style="flex:1;">--}}
{{--                                                <div class="d-flex justify-content-end wrap-3">--}}
{{--                                                    <div class="adminca-banner-b m-r-20">--}}
{{--                                                        <img src="{{ asset('/admin_assets/') }}/assets/img/adminca-banner/bootstrap.png" style="width:40px;margin-right:10px;" />Bootstrap v4</div>--}}
{{--                                                    <div class="adminca-banner-b m-r-10">--}}
{{--                                                        <img src="{{ asset('/admin_assets/') }}/assets/img/adminca-banner/angular.png" style="width:35px;margin-right:10px;" />Angular v5+</div>--}}
{{--                                                </div>--}}
{{--                                                <div class="dev-img">--}}
{{--                                                    <img src="{{ asset('/admin_assets/') }}/assets/img/adminca-banner/sprite.png" />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}



