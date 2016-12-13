<?php
include("header.php");
//Laxman github pull testing from local
//include("include/config.php");
include "db.php" ;

if (isset($_REQUEST['submit']) && $_REQUEST['truth_or_dare_id'] != '') {


    $q = "UPDATE truth_or_dare SET type = '" . $_REQUEST['truth_or_dare'] . "',user_type = '" . $_REQUEST['user_type'] . "',text = '" . $_REQUEST['text']. "' WHERE truth_or_dare_id = '" . $_REQUEST['truth_or_dare_id'] . "'";
	$query = mysqli_query($conn, $q); 
    header("location:edit_store.php?truth_or_dare_id=" . $_REQUEST['truth_or_dare_id'] . "");
}
//$truth_or_dare = mysql_fetch_array(mysql_query("SELECT * FROM truth_or_dare WHERE truth_or_dare_id = '" . $_REQUEST['truth_or_dare_id'] . "'"));
		
		$truth_or_dare = "SELECT * FROM truth_or_dare WHERE truth_or_dare_id = '" . $_REQUEST['truth_or_dare_id'] . "' ";
        $truth_or_dare = mysqli_query($conn, $truth_or_dare);
		$truth_or_dare = $truth_or_dare->fetch_assoc() ;

?>
<aside class="right-side">                
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Truth Or Dare
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
                                <select name="truth_or_dare" class="form-control col-md-12" >
                                    <option value="truth" <?php if ($truth_or_dare['type'] == "truth") echo 'selected="selected"'; ?> >Truth</option>
                                    <option value="dare" <?php if ($truth_or_dare['type'] == "dare") echo 'selected="selected"'; ?> >Dare</option>
                                </select>
                            </div>
                                <div class="col-md-12 col-sm-12 form-group">
                                <label for="phase" class="col-md-12" style="padding: 0;font-weight: bold">User Type</label>
                                <select name="user_type" class="form-control col-md-12" >
                                    <option value="kids" <?php if ($truth_or_dare['user_type'] == "kids") echo 'selected="selected"'; ?> >Kids</option>
                                    <option value="teens" <?php if ($truth_or_dare['user_type'] == "teens") echo 'selected="selected"'; ?> >Teens</option>
                                     <option value="extreme" <?php if ($truth_or_dare['user_type'] == "extreme") echo 'selected="selected"'; ?> >Extreme</option>
                                </select>
                            </div>


                            <div class="col-md-12 col-sm-12 form-group">
                                <label  class="col-md-12" style="padding: 0;font-weight: bold">Store Name:</label>
                                <input type="text" class="form-control col-md-12" name="text" value="<?php echo $truth_or_dare['text']; ?>" required="" placeholder="Text">	   
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
