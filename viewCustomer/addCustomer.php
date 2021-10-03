<?php
include('../layout/navbar.php'); 
include('../layout/header.php'); 
?>



<div class="pcoded-main-container" style="background:#fff;">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="main-body">
						<div class="page-wrapper">
							<div class="page-header">
								<div class="page-block">
									<div class="row align-items-center">
										<div class="col-md-12">
											<div class="page-header-title">
												<h5>Quản Lý Khách Hàng</h5>
											</div>
											<ul class="breadcrumb">
												<li class="breadcrumb-item"><a href="home.php"><i class="feather icon-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#!">Khách Hàng</a></li>
												<li class="breadcrumb-item"><a href="#!">Thêm Khách Hàng</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
                          
                            <?php 
                                if(isset($_POST['btn_add'])){
                                    $customer_name = $_POST['customer_name'];
                                    $customer_phone = $_POST['customer_phone'];
                                    $customer_dob = $_POST['customer_dob'];
                                    $customer_address = $_POST['customer_address'];
                                    $customer_emai = $_POST['customer_emai'];
                                    $customer_role_id = $_POST['customer_role_id'];
                                    $customer_code ='A' . rand(0,99999);
                                    $customer_date_create = date("y/m/d");
                                    if( $customer_name && $customer_phone &&  $customer_dob && $customer_address &&    $customer_emai && $customer_role_id ){
                                            $sql = "INSERT INTO customer_account (customer_name,customer_dob, customer_phone,customer_address,customer_emai,customer_code,customer_role_id,customer_date_create) VALUES ('$customer_name', '$customer_dob', '$customer_phone','$customer_address','$customer_emai','$customer_code','$customer_role_id','$customer_date_create')";
                                            execute($sql);
                                            $message ='Thêm thành công rùi nhó';
                                            header('Location: listCustomer.php?msg='.urlencode(serialize($message)));
                                         
                                    }else{
                                        showMessage('Làm ơn kiểm tra lại đi thiếu gì rồi');
                                    }
                                  
                                }
                            ?>

                              
                                <form method="POST" action="" >        
                              
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Họ và Tên</label>
                                        <input type="text" name="customer_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Ngày sinh</label>
                                        <input type="date" class="form-control" name="customer_dob" value="<?php echo date('MM-DD-YYYY'); ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                                        <input type="text" name="customer_phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                                        <input type="text" name="customer_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" name="customer_emai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Đánh giá tài khoản</label>
                                        <input type="text" name="customer_role_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                
                                </div>
                                <div class="modal-footer" style="justify-content:center;">
                                 <button style="width:30%; margin-right:15px;" type="button" class="btn btn-secondary" data-dismiss="modal">Hủy Bỏ</button>
                                   <button style="width:30%;" type="submit" name="btn_add" class="btn btn-primary" >Tạo Mới</button>
                                </div>
                                </form>

                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include('../layout/footer.php'); 
?>