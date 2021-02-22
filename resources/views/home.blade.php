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
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
      {{-- <script src="{{asset('ckeditor/ckeditor.js')}}"></script> --}}
</head>

<body>
    <div class="wrapper">

        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
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
            <a class='btn btn-primary' href="" data-toggle="modal" data-target="#exampleModal">Add</a>

                <table id="table" class="table">
            
  <thead class="thead-dark">
   
    <tr>  
      <th scope="col">Action</th>
      <th scope="col">Type</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach(App\Models\News_Event::get() as $indexKey =>$item)
    <tr>
      <td>     <a href="" onclick="return confirm('Are You Sure {{$item->name}}?')"  class="fa fa-remove" title="Remove this item"><i class="fa fa-trash"></i></a>
        <a href="" class="remove" title="Remove this item"><i class="fa fa-edit"></i></a></td>
      <td>{{$item->type}}</td>
      <td>{{$item->title}}</td>
      <td style="overflow-y: scroll;"><p>{!!$item->description!!}</p></td>
      @if($item->image)
      <td><img class="img-circle" style="width:50px;height:50px;" src="{{asset('image/news/' . $item->image) }}" alt="Standard Post with Image"></td>
      @endif
    </tr>
    @endforeach
   
  </tbody>
</table>

        </div>
    </div>
   
    
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
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-left">
                        <form accept-charset="utf-8" id="template-jobform2">
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
                                                console.log(image.name)
                                                $.ajax({
                                                    type:'POST',
                                                    url:'{{ route ('news_post')}}',
                                                    data: fd,
                                                    processData: false,
                                                    contentType: false,
                                                    success: function (data,imagename) {
                                                      console.log(imagename);
                                                      $('#exampleModal').modal('hide');
                                                    $('#table tbody').prepend('<tr><td></td><td>'+data.type+'</td><td>'+data.title+'</td><td>'+data.description+'</td><td><img src="image/news/'+image.name+'" style="width:50px;height:50px;"/></td></tr>')                                                         },
                                                    error:function(data){
                                                        var errors = data.responseJSON;
                                                        console.log(errors);
                                                    },
                                                        });
                                                        });
      });
</script>
</html>