<?php
include('../layout/navbar.php'); 
include('../layout/header.php'); 
?>

<div class="pcoded-main-container">
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
                            <div class="top-table" style="width:100%;display:flex;justify-content:space-between;position:relative;">
                            <form action="" method="POST" class="input-group mb-3" style="width:50%;height: 42px;">
                            <input style='height: 42px; border-radius:4px 0 0 4px;' type="search" name="search" class="form-control" placeholder="Tìm Kiếm Khách Hàng" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-secondary" type="submit" id="button-addon2"
                            style="
                            height: 42px; 
                            display: flex;
                            justify-content:center;
                            align-items:center;
                            border-radius:0;
                            border-radius:0 4px 4px 0;
                            position:absolute !important;
                            right:0;
                            z-index: 1;
                            "
                            ><i class="fas fa-search" style="margin-right:0"></i></button>
                            </form>
                            <button type="button" class="btn btn-primary" style="height: 42px;" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-plus-square"></i> Thêm Mới Khách Hàng</button>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thêm khách hàng mới</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form>
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
                                        <input type="email" name="customer_role_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Accept of terms</label>
                                    </div>
                                </div>
                                <div class="modal-footer" style="justify-content:center;">
                                    <button style="width:30%; margin-right:15px;" type="button" class="btn btn-secondary" data-dismiss="modal">Hủy Bỏ</button>
                                    <button style="width:30%;" type="button" class="btn btn-primary" >Tạo Mới</button>
                                </div>
                                </form>

                                </div>
                            </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col" name="thead-customer" style="text-transform:unset;font-size:16px">Số thứ tự</th>
                                    <th scope="col" name="thead-customer" style="text-transform:unset;font-size:16px">Mã thẻ khách hàng</th>
                                    <th scope="col" name="thead-customer" style="text-transform:unset;font-size:16px">Họ và tên</th>
                                    <th scope="col" name="thead-customer" style="text-transform:unset;font-size:16px">Ngày sinh</th>
                                    <th scope="col" name="thead-customer" style="text-transform:unset;font-size:16px">Số điện thoại</th>
                                    <th scope="col" name="thead-customer" style="text-transform:unset;font-size:16px">Địa Chỉ</th>
                                    <th scope="col" name="thead-customer" style="text-transform:unset;font-size:16px">email</th>
                                    <th scope="col" name="thead-customer" style="text-transform:unset;font-size:16px">Đánh giá tài khoản</th>
                                    <th scope="col" name="thead-customer" style="text-transform:unset;font-size:16px">Ngày Tạo</th>
                                    <th scope="col" name="thead-customer" style="text-transform:unset;font-size:16px">Thao Tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                 
                                <?php
                                    if(!empty($_POST["search"])){
                                    $search_value=$_POST["search"];
                                    if( $search_value !== '') {

                                                $sql="select * from customer_account where customer_name like '%$search_value%'";

                                                $customerList = Result($sql);

                                                
                                                $i = 0;
                                                foreach( $customerList as $key => $customerList){
                                                $id = $customerList['customer_role_id'];
                                                    
                                                        $sqlcategory = " SELECT * FROM customer_role WHERE customer_role_id = $id ";
                                                        $customerRole = Result($sqlcategory);
                                                     foreach( $customerRole as $key => $customerRole){

                                                ?>
                                                <tr>
                                                        <td><?php echo $i++;?></td>
                                                        <td><?php echo $customerList['customer_code']; ?></td>
                                                        <td><?php echo $customerList['customer_name']; ?></td>
                                                        <td><?php echo $customerList['customer_dob']; ?></td>
                                                        <td><?php echo $customerList['customer_phone']; ?></td>
                                                        <td><?php echo $customerList['customer_address']; ?></td>
                                                        <td><?php echo $customerList['customer_emai']; ?></td>
                                                        <td><?php echo $customerRole['customer_role_title']; ?></td>
                                                        <td><?php echo $customerList['customer_date_create']; ?></td>
                                                        <td>
                                                        <a style="color:#404040;" href=""><i class="far fa-trash-alt"></i></a> || 
                                                        <a style="color:#404040;" href=""><i class="far fa-edit"></i></a></td>
                                                        </td>

                                                </tr>
                                      <?php 
                                            }
                                         }       
                                         }
                               else{
                                 return null;
                               }
                                 ?>
                                </tbody>
                                 
                                 <?php 
                                    }else{
                                $sql = 'SELECT * FROM customer_account ';
                                $sqlQuery = 'SELECT * FROM customer_role ';
                                $customerList = Result($sql);
                                $customerRole = Result($sqlQuery);
                                $i = 0;
                                foreach( $customerList as $key => $customerList){
                                  ?>
                                    <tr>
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $customerList['customer_code']; ?></td>
                                        <td><?php echo $customerList['customer_name']; ?></td>
                                        <td><?php echo $customerList['customer_dob']; ?></td>
                                        <td><?php echo $customerList['customer_phone']; ?></td>
                                        <td><?php echo $customerList['customer_address']; ?></td>
                                        <td><?php echo $customerList['customer_emai']; ?></td>
                                        <td><?php echo $customerRole[$customerList['customer_role_id']]['customer_role_title']; ?></td>
                                        <td><?php echo $customerList['customer_date_create']; ?></td>
                                        <td style="display:flex;aligns-item:center;justify-content:center;">
                                        <a style="color:#404040;margin-right:4px;" href=""><i class="far fa-trash-alt"></i></a>|| 
                                        <a style="color:#404040;margin-left:4px;" href=""><i class="far fa-edit"></i></a></td>
                                        </td>
                                    </tr>
                                  <?php
                                }
                            }
                                  ?>
                                </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include('../layout/footer.php'); 
?>