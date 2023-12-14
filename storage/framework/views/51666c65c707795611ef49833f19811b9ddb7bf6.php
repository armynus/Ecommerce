<!DOCTYPE html>
<html lang="en">

<head>

        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo e(asset('css/sb-admin-2.min.css')); ?>"  rel="stylesheet">
    <link href="<?php echo e(asset('css/upfile.css')); ?>"  rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/sweetalert.css')); ?>">
    
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <title>Hồ sơ cửa hàng</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>"  rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.css')); ?>"  rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">    

    <input type = "hidden" name = "_token" value = '<?php echo csrf_token(); ?>'>
    <style>
		label.error{
			color: red;
            font-size: 14px;
            display: block;
            font-weight: 400;
		}
        .error {
            color: #5a5c69;
            /* font-size: 7rem; */
            font-size: 16px;
            line-height: 1;
            position: relative;
            width: 100%;
        }
	</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php echo $__env->make('shop.sidebarshop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php echo $__env->make('shop.topbarshop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="xMDeox">
                    <div class="Hvae38" role="main">
                        <div style="display: contents;">
                        <div class="b7wtmP">
                            <div class="_66hYBa">
                                <h1 class="SbCTde">Hồ sơ của tôi</h1>
                                <div class="zptdmA">Thay đổi thông tin cửa hàng</div>
                            </div>
                            <?php
                            $message = Session::get('message');
                            $error = Session::get('error');
                            if(isset($message)){
                                echo '<div class="alert alert-success" role="alert">'.$message.'</div>';
                                Session::put('message',null);
                            }
                            if(isset($error)){
                                echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
                                Session::put('error',null);
                            }
                            ?>
                            <form action="<?php echo e(route('change_profile_shop')); ?>" method="POST" enctype="multipart/form-data" id="form_post">
                                <?php echo csrf_field(); ?>
                            <div class="R-Gpdg">
                                <div class="volt8A">
                                    <table class="Zj7UK+">
                                        
                                        <tr>
                                            <td class="espR83">
                                                <label>Tên Shop</label>
                                            </td>
                                            <td class="Tmj5Z6">
                                                <div>
                                                    <div class="W50dp5">
                                                        <input type="text" placeholder="" class="CMyrTJ" value="<?php echo e($shop->shopname); ?>" name="shopname">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="espR83">
                                                <label>Email</label>
                                            </td>
                                            <td class="Tmj5Z6">
                                                <div class="W50dp5">
                                                    <input type="email" placeholder="" class="CMyrTJ" value="<?php echo e($shop->email); ?>" name="email">
                                                </div>
                                            </td>
                                        </tr>
                                       
                                        <tr>
                                            <td class="espR83">
                                                <label></label>
                                            </td>
                                            <td class="Tmj5Z6">
                                                <button type="submit" id="sub_button" class="btn btn-solid-primary btn--m btn--inline" aria-disabled="false">Lưu</button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="IQPHvE">
                                    <div class="scvgOW">
                                        <div class="XWsmVn">
                                            <div class="LoNm4g" style="background-image: url(&quot;<?php echo e(asset('storage/'.$shop->shopImg)); ?>&quot;);"></div>
                                        </div>
                                        <input class="bMWDYw" type="file" accept=".jpg,.jpeg,.png" name="shop_img">
                                        <label  class="btn btn-light btn--m btn--inline" id="button_img">Chọn ảnh</label>
                                        <div class="L4SAGB">
                                            <div class="SlaeTm">Dụng lượng file tối đa 1 MB</div>
                                            <div class="SlaeTm">Định dạng:.JPEG, .PNG</div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

         <!-- Bootstrap core JavaScript-->
         <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('js/sb-admin-2.min.js')); ?>"></script>
    <!-- Page level plugins -->
    <script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo e(asset('js/demo/datatables-demo.js')); ?>"></script>
    <!-- include jQuery library -->
    <!-- include jQuery validate library -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <!-- include Ajax  library -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- include jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- include jQuery validate library -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script>
    $("#form_post").validate({
        rules: {
            "shopname": {
                required: true,
                maxlength: 20,
                minlength: 2,
            },
           
            "email": {
                required: true,
                email: true,
            },
        },
        messages: {
            "shopname": {
                required: "Vui lòng nhập tên người dùng",
                maxlength: "Họ người dùng không được vượt quá 20 ký tự",
                minlength: "Họ người dùng phải có ít nhất 2 ký tự",
            },
           
            "email": {
                required: "Vui lòng nhập email người dùng",
                email: "Vui lòng nhập đúng định dạng email",

            },
        },
        submitHandler: function(form) {
            $(form).submit();
        }
    
    });
    </script>

<script>
    const shopname = document.querySelector('input[name="shopname"]');
    const email = document.querySelector('input[name="email"]');
    const button = document.getElementById('sub_button');
    button.addEventListener('click', function(){
        if(shopname.value == ''){
            
            swal("Vui lòng nhập họ người dùng");
            return false;
        }
        if(shopname.value.length < 2){    
            swal("Họ người dùng phải có ít nhất 2 ký tự");
            return false;
        }
        if(shopname.value.length > 20){
            swal("Họ người dùng không được vượt quá 20 ký tự");
            return false;
        }
        if(email.value == ''){
            swal("Vui lòng nhập email người dùng");
            return false;
        }
        if(email.value.length < 2){
            swal("Vui lòng nhập đúng định dạng email");
            return false;
        }
    });
</script>
<script>
    const button_img = document.getElementById('button_img');
    const input_img = document.querySelector('.bMWDYw');
    const img = document.querySelector('.LoNm4g');
    
    button_img.addEventListener('click', function(){
        input_img.click();
    });
    input_img.addEventListener('change', function(){
        const file = this.files[0];
        if(file){
            const reader = new FileReader();
            reader.onload = function(){
                const result = reader.result;
                img.style.backgroundImage = `url(${result})`;
                
            }
            reader.readAsDataURL(file);
        }
        else{
            img.style.backgroundImage = `url("<?php echo e(asset('storage/users_img/user.png')); ?>")`;
        }
    });
</script>
<script>
    $(document).ready(function(){
        $('.user_cancel_order').click(function(){
            var order_id = $(this).data('order_id');
            var _token = $('input[name="_token"]').val();
            console.log(order_id);
            swal("Xác Nhận Hủy Đơn Hàng?", {
                buttons: {
                    cancel: "Không",
                    catch: {
                    text: "Xác Nhận",
                    value: "catch",
                    },
                },
            })
            .then((value) => {
                switch (value) {
                    case "catch":
                    $.ajax({
                        url: '<?php echo e(route('user_cancel_order')); ?>',
                        method: 'POST',
                        data:{
                            order_id: order_id,
                            _token: _token,
                        },
                        success: function(data){
                            $status = data.status; 
                            $product = data.product;
                            if($status == true){
                                location.reload();
                            }
                            else{
                                swal("");
                            }
                        },
                        error: function(data){
                            var errors = data.responseJSON;
                            console.log(errors);
                        }
                    });
                    break;
                    default:
                      
                }
            });
        });
    });
   
</script>
</body>

</html><?php /**PATH D:\Ecommerce\resources\views/shop/shop_profile.blade.php ENDPATH**/ ?>