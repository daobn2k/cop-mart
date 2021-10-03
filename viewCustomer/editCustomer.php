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
                            if(isset($_GET['delete_id'])){
                                $message = "Xóa thành công rùi hjhj";
                                $id = $_GET['delete_id'];
                                $sql ="DELETE FROM customer_account WHERE customer_id = ".$id;
                                execute($sql);
                                header('Location: listCustomer.php?msg='.urlencode(serialize($message)));
                                return  $resultmessage = true;

                                
                            }else{

                            if(isset($_GET['id'])){
                               
                                $id = $_GET['id'];
                                $sql = "SELECT * FROM customer_account WHERE customer_id= ".$id;

                                $result = Result($sql);
                                foreach($result as $key => $result){

                          
                               if(isset($_POST['btn_save'])){
                                     $message = "Sửa thành công rùi hjhj";

                                    $customer_name = $_POST['customer_name'];
                                    $customer_phone = $_POST['customer_phone'];
                                    $customer_dob = $_POST['customer_dob'];
                                    $customer_address = $_POST['customer_address'];
                                    $customer_emai = $_POST['customer_emai'];
                                    $customer_role_id = $_POST['customer_role_id'];
                                
                                    $sql = "UPDATE  customer_account SET  customer_name= '$customer_name',customer_dob ='$customer_dob', customer_phone ='$customer_phone',customer_address='$customer_address',customer_emai ='$customer_emai',customer_role_id = '$customer_role_id' WHERE  customer_id = ".$id;
                                    execute($sql);
                                    header('Location: listCustomer.php?msg='.urlencode(serialize($message)));
                                }
                            ?>

                              
                                <form method="POST" action="" >        
                              
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Họ và Tên</label>
                                        <input type="text" value="<?php echo $result['customer_name'] ?>" name="customer_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Ngày sinh</label>
                                        <input type="date" value="<?php echo $result['customer_dob'] ?>"  class="form-control" name="customer_dob" value="<?php echo date('MM-DD-YYYY'); ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                                        <input type="text"value="<?php echo $result['customer_phone'] ?>"  name="customer_phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                                        <input type="text" value="<?php echo $result['customer_address'] ?>" name="customer_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" value="<?php echo $result['customer_emai'] ?>" name="customer_emai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Đánh giá tài khoản</label>
                                        <input type="text" name="customer_role_id" value="<?php echo $result['customer_role_id'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                
                                </div>
                                <div class="modal-footer" style="justify-content:center;">
                                 <button style="width:30%; margin-right:15px;" type="button" class="btn btn-secondary" data-dismiss="modal">Hủy Bỏ</button>
                                   <button style="width:30%;" type="submit" name="btn_save" class="btn btn-primary" >Lưu Thay Đổi</button>
                                </div>
                                </form>
                                <?php
                                      }
                                    }
                            }

                                ?>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include('../layout/footer.php'); 
?>