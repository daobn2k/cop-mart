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
                                    $customer_dob = $_POST['customer_dob'];
                                    $customer_role_title = $_POST['customer_role_title'];
                                    if($customer_dob !== ''&& $customer_role_id !== ''){
                                            $sql = "INSERT INTO customer_role (customer_role_title,role_date) VALUES ('$customer_role_title', '$customer_dob')";
                                            execute($sql);
                                            $message ='Thêm thành công rùi nhó';
                                            header('Location: listrole.php?msg='.urlencode(serialize($message)));
                                         
                                    }else{
                                        showMessage('Làm ơn kiểm tra lại đi thiếu gì rồi');
                                    }
                                  
                                }
                            ?>

                              
                                <form method="POST" action="" >        
                              
                                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tên Loại tài khoản</label>
                                        <input type="text" name="customer_role_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                
                                </div>
                                <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Ngày Tạo</label>
                                        <input type="date" class="form-control" name="customer_dob" value="<?php echo date('MM-DD-YYYY'); ?>" />
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