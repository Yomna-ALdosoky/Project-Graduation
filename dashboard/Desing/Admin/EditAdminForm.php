


  <!-- Single pro tab start-->
  <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Product Edit</a></li>
                                    <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i> Pictures</a></li>
                                    <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i> Review</a></li>
                                </ul>
                              
                              
                                <?php 
                                    include "Function/Connect.php";
                                    $id = $_GET['id'];
                                    $selectUser = "SELECT * FROM admin WHERE id = $id";
                                    $query = $conn -> query($selectUser);
                                    $admin = $query -> fetch_assoc();

                                    ?>
                              
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                <form  method="post" action="Function/Admin/EditAdmin.php">

                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="top: 74px;">
                                                <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="file" name="img" value="<?=$admin['img']?>" class="form-control" id="exampleInput img">

                                                    </div>
                                                    <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                        <input type="hidden" name="id" value="<?= $admin['id'] ?>" placeholder="id"> 
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt" style="margin-bottom:20%">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" name="name" value="<?=$admin['name']?>" class="form-control" id="exampleInput name">

                                                    </div>
                                                    <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                                        <input type="password" name="password" value="<?=$admin['password']?>"  class="form-control" id="exampleInputEmail1" placeholder="Edit password">

                                                    </div>
                                                    <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                        <span class="input-group-addon"><i class="icon nalika-facebook"></i></span>
                                                        <input type="email" name="email" value="<?=$admin['email']?>" class="form-control" id="exampleInput Email1" >

                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"style="padding-top: 80px;" >
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt" style="margin-bottom:20%">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" name="phone" value="<?=$admin['phone']?>" class="form-control" id="exampleInput phone" >
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt" style="margin-bottom:20%">
                                                        <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" name="address" value="<?=$admin['address']?>" class="form-control" id="exampleInput mobil" >

                                                    </div>
                                                    <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                        <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" name="priv_id" value="<?=$admin['priv_id']?>" class="form-control" id="exampleInput mobil" >

                                                    </div>
                                                    <div class="input-group mg-b-pro-edt" style="margin-bottom:20%">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                          
                                                        <select name="gender" class="form-control" id="exampleFormControlSelect1" >

                                                                <option value="Feemal" >Feemal</option>
                                                                <option  value="Male" >Male</option>

                                                        </select>
                                                    </div>







                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    
                                                        <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Submit</button>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                 
</form>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>