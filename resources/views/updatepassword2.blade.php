

<!DOCTYPE html>
<html lang="en">
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">      
        <div class="row">
            @if(session('error'))
<div class="alert alert-danger" role="alert">
    
{{session('error')}}
</div>
@endif
         </div>

         <div id="job-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

         <form action="" id="template-jobform" name="template-jobform" method="post" role="form">
@csrf
             <div class="form-process"></div>
             <div class="col_full">
                 <label for="template-jobform-email">Old Password <small>*</small></label>
                 <input type="text" name="oldpassword" id="name" value="" required class="sm-form-control ckeditor " />
</div>
             


             <div class="clear"></div>
             <div class="form-process"></div>
             <div class="col_full">
                 <label for="template-jobform-email">Change Password <small>*</small></label>
                 <input type="text" name="newpassword" id="name" value="" required class="sm-form-control ckeditor " />
</div>
             


             <div class="clear"></div>

             <div class="col_full">
                 <label for="template-jobform-email">Confirm Password <small>*</small></label>
                 <input type="text" name="password_confirmation" id="name" value="" required class="sm-form-control ckeditor " />
</div>

             <div class="col_full">

                 <button class="button button-3d button-large btn-block nomargin" name="template-jobform-apply" type="submit" >submit</button>
             </div>

         </form>

         <script type="text/javascript">

             $("#template-jobform").validate({});
             </script>
        </div>
    </section>

       
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>

