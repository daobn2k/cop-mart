<?php
include('../layout/navbar.php'); 
include('../layout/header.php'); 

if(!empty($_GET['msg'])){ 
  $msg = unserialize(urldecode($_GET['msg']));

  showMessage($msg);
}
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
                            <form method="POST" action ="/cop-mart/viewCustomer/addCustomer.php">
                            <button type="submit" class="btn btn-primary" style="height: 42px;" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-plus-square"></i> Thêm Mới Khách Hàng</button>
                            </form>
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

                                                
                                                $i = 1;
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
                                                        <a style="color:#404040;" href="/cop-mart/viewCustomer/addCustomer.php?id=$customerList['id']"><i class="far fa-edit"></i></a></td>
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
                                $i = 1;
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
                                        <a style="color:#404040;margin-right:4px;" href="/cop-mart/viewCustomer/editCustomer.php?delete_id=<?php echo $customerList['customer_id']?>"><i class="far fa-trash-alt"></i></a>|| 
                                        <a style="color:#404040;margin-left:4px;" href="/cop-mart/viewCustomer/editCustomer.php?id=<?php echo $customerList['customer_id']?>"><i class="far fa-edit"></i></a></td>
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