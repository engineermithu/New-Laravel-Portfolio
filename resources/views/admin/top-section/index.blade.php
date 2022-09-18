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
                                <table class="table table-border">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
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
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Title">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea id="description" class="form-control summernote" id="description" placeholder="Enter Description"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="status"> {{__('Status')}}  </label>
{{--                                    <div class="form-check">--}}
                                        <input class="form-check-input ml-3" type="radio" id="status"  name="status" value="1" />
                                        <label class="form-check-label ml-3" for="status"> Published </label>

                                        <input class="form-check-input ml-2" type="radio" id="status"  name="status"  value="0" />
                                        <label class="form-check-label ml-2" for="status">Unpublished</label>
{{--                                    </div>--}}
                                </div>
                                <input type="hidden" class="form-control" id="id" />
                                <div class="form-group text-right">
                                    <button type="submit" id="addTC" class="btn btn-secondary" onclick="addTopContent()">Add</button>
                                    <button type="submit" id="updateTC" class="btn btn-secondary " onclick="updateData()">Update</button>
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

           var title        = $('#title').val();
           var description  = $('#description').val();
           var status       = $('#status').val();

           $.ajax({
               type: "POST",
               dataType: "json",
               data: {title:title, description:description, status:status},
               url: "/section-top-store",
               success: function (data){
                   clearTopContent();
                   allTopContent();
                   console.log(data)
               }
           })
        }

        function clearTopContent(){
          $('#title').val('');
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
                        data = data + "<td>"+value.title+"</td>"
                        data = data + "<td>"+value.description+"</td>"
                        data = data + "<td>"
                        data = data + "<button class='btn btn-info text-light m-1'> Edit</button>"
                        data = data + "<button class='btn btn-danger text-light m-1'> Delete</button>"
                        data = data + "</td>"
                        data = data +"</tr>"
                    })
                    $('tbody').html(data)
                }
            })
        }
        allTopContent();

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



