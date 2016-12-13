<?php
include("header.php");
//include("include/config.php");
include "db.php" ;
?>
<aside class="right-side">                
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Truth Or Dare
            <ul style="float:right;">
                <a href="truth_or_dare_list.php"><i class="btn btn-primary">Truth Or Dare List</i></a>
            </ul>
        </h1>  
    </section> 
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12"> 
                <!--<div class="box">-->
                <div class="box-body table-responsive">
                    <div class="row" style="padding: 15px;margin-left: 8px;margin-right: 5px">
                        <form  method="post" class="form-inline" enctype="multipart/form-data">										
                            <div class="col-md-12 col-sm-12 form-group">
                                <label for="phase" class="col-md-12" style="padding: 0;font-weight: bold">Truth Or Dare</label>
                                <select name="truth_or_dare" class="form-control col-md-12">
                                    <option value="truth">Truth</option>
                                    <option value="dare">Dare</option>
                                  
                                </select> 
                            </div>
                               <div class="col-md-12 col-sm-12 form-group">
                                   <label for="phase" class="col-md-12" style="padding: 0;font-weight: bold">User Type</label>
                                   <select name="user_type" class="form-control col-md-12">
                                    <option value="kids">Kids</option>
                                    <option value="teens">Teens</option>
                                    <option value="extreme">Extreme</option>                                  
                                </select> 
                            </div>
                         
                            <div class="col-md-12 col-sm-12 form-group">
                                <label  class="col-md-12" style="padding: 0;font-weight: bold">Text</label>
                                <input type="text" class="form-control col-md-12" required="" name="text" placeholder="Text">	   
                            </div> 
                          
                            <center>
                                <div class="col-md-12 col-sm-12 margin-top-bottom-20">
                                    <input type="submit" name="submit" value="submit" class="btn btn-primary">
                                </div>
                            </center>
                        </form>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        </div>
    </section><!-- /.content -->
</aside><!-- /.right-side -->

<?php
$truth_or_dare = $_POST['truth_or_dare'];
$user_type = $_POST['user_type'];
$text = $_POST['text'];


if (isset($_POST['submit'])) {
    $q = "INSERT INTO truth_or_dare(type,user_type,text) VALUES ('$truth_or_dare','$user_type','$text')" ;
	$query = mysqli_query($conn, $q); 
}
?>

