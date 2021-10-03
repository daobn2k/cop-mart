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
                            <input style='height: 42px; border-radius:4px 0 0 4px;' type="search" name="search" class="form-control" placeholder="Tìm Kiếm Loại Tài Khoản" aria-label="Recipient's username" aria-describedby="button-addon2">
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
                            <form method="POST" action ="/cop-mart/viewCustomerRole/addrole.php">
                            <button type="submit" class="btn btn-primary" style="height: 42px;" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-plus-square"></i> Thêm Mới Khách Hàng</button>
                            </form>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col" name="thead-customer" style="text-transform:unset;font-size:16px">Số thứ tự</th>
                                    <th scope="col" name="thead-customer" style="text-transform:unset;font-size:16px">Loại Tài Khoản</th>
                                    <th scope="col" name="thead-customer" style="text-transform:unset;font-size:16px">Ngày tạo</th>
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
                                                    
                                                        $sqlcategory = " SELECT * FROM customer_role WHERE customer_role_title like '%$search_value%'";

                                                        $customerRole = Result($sqlcategory);
                                                        
                                                     foreach( $customerRole as $key => $customerRole){

                                                ?>
                                                <tr>
                                                        <td><?php echo $i++;?></td>
                                                        <td><?php echo $customerRole['customer_role_title']; ?></td>
                                                        <td><?php echo $customerRole['role_date']; ?></td>
                                                        <td>
                                                        <a style="color:#404040;" href=""><i class="far fa-trash-alt"></i></a> || 
                                                        <a style="color:#404040;" href="/cop-mart/viewCustomerRole/editrole.php?id=<?php$customerRole['customer_role_id']?>"><i class="far fa-edit"></i></a></td>
                                                        </td>

                                                </tr>
                                      <?php 
                                            }
                                         }
                               else{
                                 return null;
                               }
                                 ?>
                                </tbody>
                                 
                                 <?php 
                                    }else{
                                $sqlQuery = 'SELECT * FROM customer_role ';
                                $customerRole = Result($sqlQuery);
                                $i = 1;
                                foreach( $customerRole as $key => $customerRole){
                                  ?>
                                    <tr>
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $customerRole['customer_role_title']; ?></td>
                                        <td><?php echo $customerRole['role_date']; ?></td>

                                        <td style="display:flex;aligns-item:center;">
                                        <a style="color:#404040;margin-right:4px;" href="/cop-mart/viewCustomerRole/editrole.php?delete_id=<?php echo $customerRole['customer_role_id']?>"><i class="far fa-trash-alt"></i></a>|| 
                                        <a style="color:#404040;margin-left:4px;" href="/cop-mart/viewCustomerRole/editrole.php?id=<?php echo $customerRole['customer_role_id']?>"><i class="far fa-edit"></i></a></td>
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