<?php
include("header.php");
//include("include/config.php");
include "db.php" ;


if (isset($_POST['submit']))  {

$NewID = $_POST['new_id'] ;
$OldID = $_GET['truth_or_dare_id'] ;

if ($NewID > 0 ) {
	
$Old = $OldID ;
$New = $NewID ;

$array = array() ;

if ( $NewID < $OldID ){
	
		for($x = $NewID ; $x <= $OldID ; $x ++){
			
			$sql ="SELECT truth_or_dare_id FROM truth_or_dare WHERE truth_or_dare_id = $Old";
            $query=  mysqli_query($conn, $sql);
			$row = $query->fetch_assoc() ;
			$id = $row['truth_or_dare_id'];
			if ($id != NULL){
				$array[] = $id ;	
			}
			$Old -- ;
		}	
			
			$count = count($array);
			$i = 1 ;
			$New = 10000000 ;
			
			$sql = "UPDATE truth_or_dare SET truth_or_dare_id = $New WHERE truth_or_dare_id = $OldID ";
			$query = mysqli_query($conn, $sql);
			
		for($y = 1 ; $y <= $count ; $y ++){	
			
			$ii = $array[$i] ;
			$iii = $array[$i-1] ;
			
			$sql = "UPDATE truth_or_dare SET truth_or_dare_id = $iii WHERE truth_or_dare_id = $ii ";
			$query = mysqli_query($conn, $sql);
			
			$i ++ ;	
		}	
		
			$sql = "UPDATE truth_or_dare SET truth_or_dare_id = $NewID WHERE truth_or_dare_id = 10000000 ";
			$query = mysqli_query($conn, $sql);
			
}
elseif ($OldID < $NewID ){
	
	for($x = $OldID ; $x <= $NewID ; $x ++){
			
			$sql ="SELECT truth_or_dare_id FROM truth_or_dare WHERE truth_or_dare_id = $New";
            $query=  mysqli_query($conn, $sql);
			$row = $query->fetch_assoc() ;
			$id = $row['truth_or_dare_id'];
			if ($id != NULL){
				$array[] = $id ;	
			}
			$New -- ;
		}	
			
			$count = count($array);
			$New = 10000000 ;
			
			$sql = "UPDATE truth_or_dare SET truth_or_dare_id = $New WHERE truth_or_dare_id = $NewID ";
			$query = mysqli_query($conn, $sql);
			
		for($y = 1 ; $y <= $count ; $y ++){	
			
			$ii = $array[$i] ;
			$iii = $array[$i-1] ;
			
			$sql = "UPDATE truth_or_dare SET truth_or_dare_id = $iii WHERE truth_or_dare_id = $ii ";
			$query = mysqli_query($conn, $sql);
			
			$i ++ ;	
		}	
		
			$sql = "UPDATE truth_or_dare SET truth_or_dare_id = $OldID WHERE truth_or_dare_id = 10000000 ";
			$query = mysqli_query($conn, $sql);
	
}
else {
	echo "You Enter The Same Order !! " ;
} 

    // header("location:edit_store.php?truth_or_dare_id=" . $_REQUEST['truth_or_dare_id'] . "");
}			
else{
	
	echo "You Must Enter Postive Number Greater Than 0 " ;
}
}

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
                        <form  method="POST" class="form-inline" enctype="multipart/form-data">	
                            <div class="col-md-12 col-sm-12 form-group">
                                <label for="phase" class="col-md-12" style="padding: 0;font-weight: bold">The order</label>
                                <input type="text" class="form-control col-md-12" name="old_id" value="<?php echo $_GET['truth_or_dare_id'] ?>" disabled>
                            </div>
                                <div class="col-md-12 col-sm-12 form-group">
                                <label for="phase" class="col-md-12" style="padding: 0;font-weight: bold">The new Order</label>
                               <input type="text" class="form-control col-md-12" name="new_id"  required="" placeholder="Enter the new Order">
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
