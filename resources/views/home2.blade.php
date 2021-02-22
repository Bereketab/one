<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 8 AJAX CRUD using DataTable js Tutorial From Scratch - Tutsmake.com</title>
<meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- <script src="{{asset('ckeditor/ckeditor.js')}}"></script> --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</head>
<body>
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
                <div class="pull-right mb-2">
                    <a class="btn btn-success" onClick="add()" href="javascript:void(0)"> Create Company</a>
                    </div>
                    
<div class="container mt-2">
<div class="row">
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<div class="card-body">
<table class="table table-bordered" id="ajax-crud-datatable">
<thead>
<tr>
<th>Id</th>
<th>Type</th>
<th>Title</th>
<th>Image</th>
<th>Description</th>
<th>Created at</th>
<th>Action</th>
</tr>
</thead>
</table>
</div>
</div>
<!-- boostrap company model -->
<div class="modal fade" id="company-modal" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="CompanyModal"></h4>
</div>
<div class="modal-body">
<form action="javascript:void(0)" id="CompanyForm" name="CompanyForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
    {{-- @csrf --}}
<input type="hidden" name="id" id="id">
<div class="form-group">
    <div class="form-group">
        <label for="email">Type</label>
        <select class="form-control" id="type" name='type'>
            <option value="News">News</option>
            <option value="Event">Event</option>
          </select>
    </div>
    <div class="form-group">
        <label for="text">Title</label>
        <input type="text" id='title' name="title" placeholder="Title" class="form-control">
    </div>
    <div id='img'>
        <label for="text">privious Image</label>
        <img  name="image2" id="image2"  class="form-control">
    </div>
    <div class="form-group">
        <input type="file" name="image" id="image" class="form-control">
    </div>
    <div class="form-group">
        <label for="text">Description</label>
        <textarea type="text" id="description" name="description" placeholder="Description" class="form-control ckeditor"></textarea>
    </div>
</div>
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-primary" id="btn-save">Save changes
</button>
</div>
</form>
</div>
</div>
</div>
</div>
<!-- end bootstrap model -->
</body>
<script type="text/javascript">
$(document).ready( function () {
    $('#img').css({'display':'none'})
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$('#ajax-crud-datatable').DataTable({
processing: true,
serverSide: true,
ajax: "{{ url('home') }}",
columns: [
{ data: 'id', name: 'id' },
{ data: 'type', name: 'type' },
{ data: 'title', name: 'title' },
{ data: 'image', name: 'image', render: function( data, type, full, meta ) {
                        return "<img src=\"image/news/" + data + "\" height=\"50\"/>"; }},
{ data: 'description', name: 'description' },
{ data: 'created_at', name: 'created_at' },
{data: 'action', name: 'action', orderable: false},
],
order: [[0, 'desc']]
});
});
function add(){
    $('#img').css({'display':'none'})
$('#CompanyForm').trigger("reset");
$('#CompanyModal').html("Add Company");
$('#company-modal').modal('show');
$('#id').val('');
}   
function editFunc(id){
$.ajax({
type:"POST",
url: "{{ url('News_Events/edit') }}",
data: { id: id },
dataType: 'json',
success: function(res){
$('#CompanyModal').html("Edit Company");
$('#company-modal').modal('show');
$('#id').val(res.id);
$('#type').val(res.type);
$('#title').val(res.title);
$('#description').val(res.description);
$('#img').show()
$('#image2').attr('src','image/news/'+res.image);
}
});
}  
function deleteFunc(id){
if (confirm("Delete Record?") == true) {
var id = id;
// ajax
$.ajax({
type:"POST",
url: "{{ url('News_Events/delete') }}",
data: { id: id },
dataType: 'json',
success: function(res){
var oTable = $('#ajax-crud-datatable').dataTable();
oTable.fnDraw(false);
}
});
}
}
$('#CompanyForm').submit(function(e) {
e.preventDefault();

var fd = new FormData();
                                                      var type = $("select[name='type']").val();
                                                      var description = $("textarea[name='description']").val();
                                                      var id = $("input[name='id']").val();
                                                      var title = $("input[name='title']").val();
                                                      var image =  $("input[name='image']").prop('files')[0];

                                                      fd.append('type',type);
                                                fd.append('description',description);
                                                fd.append('id',id);  
                                                fd.append('title',title);
                                                fd.append('image',image);
                                                console.log(fd)


$.ajax({
type:'POST',
url: "{{ url('Add/News_Events')}}",
data: fd,
cache:false,
contentType: false,
processData: false,
success: (data) => {
$("#company-modal").modal('hide');
var oTable = $('#ajax-crud-datatable').dataTable();
oTable.fnDraw(false);
$("#btn-save").html('Submit');
$("#btn-save"). attr("disabled", false);
},
error: function(data){
console.log(data);
}
});
});
</script>
</html>