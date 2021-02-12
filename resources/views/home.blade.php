<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.0
* Author: Alexis Luna
* Copyright 2020 Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Bootstrap Simple Admin Template</title>
    <link href="{{asset('assets/vendor/fontawesome/css/fontawesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/fontawesome/css/solid.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/fontawesome/css/brands.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/master.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/flagiconcss/css/flag-icon.min.css')}}" rel="stylesheet">
      {{-- <script src="{{asset('ckeditor/ckeditor.js')}}"></script> --}}
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="dashboard.html"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                
               
                <li>
                    <a href="#uielementsmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i> Add News and Event</a>
                    <ul class="collapse list-unstyled" id="uielementsmenu">
                        <li>
                            <a href="{{route ('news_get')}}" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-angle-right"></i>Add</a>
                        </li>
                        <li>
                            <a href="ui-badges.html"><i class="fas fa-angle-right"></i>Mange</a>
                        </li>
                    </ul>
                </li>
               
            </ul>
        </nav>
        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                       
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle text-secondary" data-toggle="dropdown"><i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="{{route ('update_password')}}" class="dropdown-item"><i class="fas fa-envelope"></i> Change Password</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="{{route ('logout')}}" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        
        </div>
    </div>
    <div class="card-body text-center">
        <div id="tableview"></div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-left">
                        <form accept-charset="utf-8" id="template-jobform">
                            @csrf
                            <div class="form-group">
                                <label for="email">Type</label>
                                <select class="form-control" id="" name='type'>
                                    <option value="News">News</option>
                                    <option value="Event">Event</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="text">Title</label>
                                <input type="text" name="title" placeholder="Title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="text">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="text">Description</label>
                                <textarea type="text" name="description" placeholder="Description" class="form-control ckeditor"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

</body>
<script>
      $(function() {    
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $("#template-jobform").on('submit',function(e){
                                                e.preventDefault();
                                                var fd = new FormData();
                                                var _token = $("input[name='_token']").val();
                                                var title = $("input[name='title']").val();
                                                var type = $("select[name='type']").val();
                                                var description = $("textarea[name='description']").text();
                                                var desc = CKEDITOR.instances['description'].getData();
                                                var image =  $("input[name='image']").prop('files')[0];
                                                fd.append('_token',_token);
                                                fd.append('title',title);
                                                fd.append('type',type);
                                                fd.append('description',desc);
                                                fd.append('image',image);
                                                console.log(description)
                                                $.ajax({
                                                    type:'POST',
                                                    url:'{{ route ('news_post')}}',
                                                    data: fd,
                                                    processData: false,
                                                    contentType: false,
                                                    success: function (data) {
                                                      console.log(true);
                                                      var op='';
                                                      $('#exampleModal').modal('hide');
                                                      op+='<table class="table table-striped">';
        op+='<tr><th>SN</th><th>Type</th><th>Title</th><th>Description</th><th>Image</th></tr>';
        for(var i=0;i<data.length;i++){
          op+='<tr>';
          op+='<td>'+(i+1)+'</td><td>'+data[i].type+'</td><td>'+data[i].title+'</td><td>'+data[i].description+'</td><td>'+data[i].image+'</td></tr>';
        }
         op+='</table>';
         $('#tableview').html(op);
                                                         },
                                                    error:function(data){
                                                        var errors = data.responseJSON;
                                                        console.log(errors);
                                                    },
                                                        });
                                                        });
      });
</script>
</html>