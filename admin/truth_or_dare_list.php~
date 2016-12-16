<?php
//Divya Developer
include("header.php");
include "db.php" ;
error_reporting(0);
ini_set('display_errors', '0');     # don't show any errors...
error_reporting(E_ALL | E_STRICT);  # ...but do log them

if (isset($_REQUEST['truth_or_dare_id']) && $_REQUEST['truth_or_dare_id'] != '') {
	$q = "DELETE FROM truth_or_dare WHERE truth_or_dare_id = '" . $_REQUEST['truth_or_dare_id'] . "' ";
   	$query = mysqli_query($conn, $q); 
	
    header("location:truth_or_dare_list.php");
	//var_dump( xdebug_get_headers() );
}
?>
<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<!--script type="text/javascript" src="js/script.js"></script-->

  </head>
    <body>
        <aside class="right-side">                
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                   Truth Or Dare
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12"> 
                        <div class="box">
                            <div class="box-body table-responsive">
                                <table id="" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>1Truth Or Dare Id</th>
                                            <th>Truth Or Dare</th>
                                            <th>User Type</th>
                                            <th>Text</th> 
											<th>Change Order</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody id="sortinglist">
									
                                        <tr class="addrow" id="" style="display:none;">
                                            <td><?php echo $truth_or_dare_row['truth_or_dare_id']; ?></td>
                                            <td class="changetruefalse"> 
											
											<div class="dropdown">
											<div class="dropdown-toggle truth_dare" id="menu1" data-toggle="dropdown">Truth</div>
											<ul id="demolist1" class="dropdown-menu changetruefalseitem" role="menu" aria-labelledby="menu1">
											  <li value="truth" role="presentation"><a role="menuitem" tabindex="-1" href="#">Truth</a></li>
											  <li value="dare" role="presentation"><a role="menuitem" tabindex="-1" href="#">Dare</a></li>
											  
											 
											</ul>
										  </div>
										
										  </td>
                                            <td><div class="dropdown">
											<div class="dropdown-toggle truth_dare" id="menu1" data-toggle="dropdown">Kids
										   </div>
											<ul id="demolist2" class="dropdown-menu changetruefalseitem" role="menu" aria-labelledby="menu1">
											  <li value="kids" role="presentation"><a role="menuitem" tabindex="-1" href="#">Kids</a></li>
											  <li value="teens" role="presentation"><a role="menuitem" tabindex="-1" href="#">Teens</a></li>
											  <li value="extreme" role="presentation"><a role="menuitem" tabindex="-1" href="#">Extreme</a></li>
											  
											 
											</ul>
										  </div></td>
                                            <td contenteditable="true" class="changetext"><?php echo $truth_or_dare_row['text']; ?></td>
											<td class="dragfromhere"><?php echo"<a href='javascript:void(0);'><img src='images/order.png'> </a>" ?></td>
                                            <td><?php echo"<a href='edit_truth_or_dare.php?truth_or_dare_id=$id'><img src='images/edit.png'> </a>" ?></td>
                                            <td><?php echo"<a href ='truth_or_dare_list.php?truth_or_dare_id=$id'><img src='images/delete.png'></a>" ?></td>


                                        </tr>
                                    <?php
                                    $truth_or_dare = "SELECT * FROM truth_or_dare ORDER BY order_id ASC";
                                    $truth_or_dare_result = mysqli_query($conn, $truth_or_dare);
								
									while($truth_or_dare_row = $truth_or_dare_result->fetch_assoc()) {
                                        $id = $truth_or_dare_row['truth_or_dare_id'];
                                        ?>
                                     
                                        <tr id="<?php echo $id; ?>">
                                            <td><?php echo $truth_or_dare_row['truth_or_dare_id']; ?></td>
                                            <td class="changetruefalse"> 
											
											<div class="dropdown">
											<div class="dropdown-toggle truth_dare" id="menu1" data-toggle="dropdown"><?php echo $truth_or_dare_row['type']; ?></div>
											<ul id="demolist1" class="dropdown-menu changetruefalseitem" role="menu" aria-labelledby="menu1">
											  <li value="truth" role="presentation"><a role="menuitem" tabindex="-1" href="#">Truth</a></li>
											  <li value="dare" role="presentation"><a role="menuitem" tabindex="-1" href="#">Dare</a></li>
											  
											 
											</ul>
										  </div>
										
										  </td>
                                            <td><div class="dropdown">
											<div class="dropdown-toggle truth_dare" id="menu1" data-toggle="dropdown"><?php echo $truth_or_dare_row['user_type']; ?>
										   </div>
											<ul id="demolist2" class="dropdown-menu changetruefalseitem" role="menu" aria-labelledby="menu1">
											  <li value="kids" role="presentation"><a role="menuitem" tabindex="-1" href="#">Kids</a></li>
											  <li value="teens" role="presentation"><a role="menuitem" tabindex="-1" href="#">Teens</a></li>
											  <li value="extreme" role="presentation"><a role="menuitem" tabindex="-1" href="#">Extreme</a></li>
											  
											 
											</ul>
										  </div></td>
                                            <td contenteditable="true" class="changetext"><?php echo $truth_or_dare_row['text']; ?></td>
											<td class="dragfromhere"><?php echo"<a href='javascript:void(0);'><img src='images/order.png'> </a>" ?></td>
                                            <td><?php echo"<a href='edit_truth_or_dare.php?truth_or_dare_id=$id'><img src='images/edit.png'> </a>" ?></td>
                                            <td><?php echo"<a href ='truth_or_dare_list.php?truth_or_dare_id=$id'><img src='images/delete.png'></a>" ?></td>


                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                               
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                </div>
            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </body>
</html>
