<?php
  include_once 'products_crud.php';
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Kai Cannaries Trading Sdn Bhd : Products</title>
   <!-- Bootstrap -->
  <link rel="icon" href="img/foodcanned2.ico" type="image/icon type">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body style="background-color: #e0e0eb;">



   <?php include_once 'nav_bar.php'; ?>
    
    <div class="container-fluid">
       <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2><b>Create New Product</b></h2>
      </div>
       <form action="products.php" method="post" class="form-horizontal" enctype="multipart/form-data" id="products-form" onsubmit="return checkValidation()">
      
       <div class="form-group">
          <label for="productid" class="col-sm-3 control-label">Product ID</label>
          <div class="col-sm-9">
      <input name="pid" type="text" class="form-control" id="productid" placeholder="Product ID"  value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_num']; else echo $num; ?>" readonly required>
      </div>
        </div>

      <div class="form-group">
          <label for="productname" class="col-sm-3 control-label">Product Name</label>
          <div class="col-sm-9">
       <input name="name" type="text" class="form-control" id="productname" placeholder="Product Name" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_name']; ?>" required>  
      </div>
        </div>

        <div class="form-group">
          <label for="productprice" class="col-sm-3 control-label">Price (RM)</label>
          <div class="col-sm-9">
        <input name="price" type="number" class="form-control" id="productprice" placeholder="Product Price" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_price']; ?>" min="0.0" step="0.01" required>
           </div>
        </div>

      <div class="form-group">
          <label for="productbrand" class="col-sm-3 control-label">Brand</label>
          <div class="col-sm-9">
          <select name="brand" class="form-control" id="productbrand" required="">
        <option value="" selected>Please Select</option>
        <option value="Yeos Canned Food" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Yeos Canned Food") echo "selected"; ?>>Yeos Canned Food</option>
        <option value="El-Dina" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="El-Dina") echo "selected"; ?>>El-Dina</option>
        <option value="Spam" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Spam") echo "selected"; ?>>Spam</option>
        <option value="MaLing" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="MaLing") echo "selected"; ?>>MaLing</option>
        <option value="Tulip" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Tulip") echo "selected"; ?>>Tulip</option>
        <option value="GuLong" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="GuLong") echo "selected"; ?>>GuLong</option>
        <option value="Lotte" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Lotte") echo "selected"; ?>>Lotte</option>
        <option value="MOON" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="MOON") echo "selected"; ?>>MOON</option>
        <option value="Meaty" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Meaty") echo "selected"; ?>>Meaty</option>
        <option value="Porkies" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Porkies") echo "selected"; ?>>Porkies</option>
        <option value="Golden Bridge" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Golden Bridge") echo "selected"; ?>>Golden Bridge</option>
        <option value="Ayam Brand" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Ayam Brand") echo "selected"; ?>>Ayam Brand</option>
        <option value="Meining" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Meining") echo "selected"; ?>>Meining</option>
        <option value="S&W" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="S&W<") echo "selected"; ?>>S&W<</option>
        <option value="Highway" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Highway") echo "selected"; ?>>Highway</option>
        <option value="Hobe" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Hobe") echo "selected"; ?>>Hobe</option>
        <option value="TST" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="TST") echo "selected"; ?>>TST</option>
        <option value="Snappy Tom" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Snappy Tom") echo "selected"; ?>>Snappy Tom</option>
        <option value="Pedigree" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Pedigree") echo "selected"; ?>>Pedigree</option>
        <option value="Greatwall" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Greatwall") echo "selected"; ?>>Greatwall</option>
        <option value="Hosen" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Hosen") echo "selected"; ?>>Hosen</option>
        <option value="Fancy Feast" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Fancy Feast") echo "selected"; ?>>Fancy Feast</option>
        <option value="Kit Cat" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Kit Cat") echo "selected"; ?>>Kit Cat</option>
        <option value="Prego" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Prego") echo "selected"; ?>>Prego</option>
        <option value="Lee" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Lee") echo "selected"; ?>>Lee</option>
        <option value="Queen Bell" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Queen Bell") echo "selected"; ?>>Queen Bell</option>
         <option value="M-Shrooms" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="M-Shrooms") echo "selected"; ?>>M-Shrooms</option></select>
       </div>
        </div>  

        <div class="form-group">
          <label for="productlabelled" class="col-sm-3 control-label">Labelled</label>
          <div class="col-sm-9">
          <div class="radio">
            <label>
      <input name="cond" type="radio" id="productlabelled" value="Halal" <?php if(isset($_GET['edit'])) if($editrow['fld_product_condition']=="Halal") echo "checked"; ?> required> Halal 
      </label>
          </div>
          <div class="radio">
            <label>
      <input name="cond" type="radio" id="productlabelled" value="Non-Halal" <?php if(isset($_GET['edit'])) if($editrow['fld_product_condition']=="Non-Halal") echo "checked"; ?>> Non-Halal
      </label>
          </div>
          <div class="radio">
            <label>
      <input name="cond" type="radio" id="productlabelled" value="Unknown" <?php if(isset($_GET['edit'])) if($editrow['fld_product_condition']=="Unknown") echo "checked"; ?>> Unknown
      </label>
            </div>
          </div>   
      </div>

        <div class="form-group">
          <label for="productnetweight" class="col-sm-3 control-label">Net Weight (gm)</label>
          <div class="col-sm-9">
         <input name="weight" type="text" class="form-control" id="productnetweight" placeholder="Net Weight" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_weight']; ?>" required>

      </div>
        </div>  
      <div class="form-group">
          <label for="productq" class="col-sm-3 control-label">Quantity</label>
          <div class="col-sm-9">
      <input name="quantity" type="number" class="form-control" id="productq" placeholder="Quantity" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_weight']; ?>" min="0" required >
    </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
      <?php if (isset($_GET['edit'])) { ?>
      <input type="hidden" name="oldpid" value="<?php echo $editrow['fld_product_num']; ?>">
   
      <button class="btn btn-default" type="submit" name="update" onclick="return checkValidation();"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
      <?php } else { ?>
      <button class="btn btn-default" type="submit" name="create" onclick="return checkValidation();"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
       <?php } ?>
      <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
       </div>
      </div>
    </form>
    </div>
  </div>
  
    <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <div class="page-header">
        <h2><b>Products List</b></h2>
      </div>
      <table class="table table-striped table-bordered">
      
      <tr>
        <td><b>Product ID</b></td>
        <td><b>Product Name</b></td>
        <td><b>Price (RM)</b></td>
        <td><b>Brand</b></td>
        <td><b>Labelled</b></td>
        <td><b>Net Weight (gm)</b></td>
        <td><b>In-Stock Qty</b></td>
        <td></td>
      </tr>
       <?php
      // Read we set limit 5 row data per page
        $per_page = 5;
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;
      $start_from = ($page-1) * $per_page;
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
           $stmt = $conn->prepare("select * from tbl_products_a174366_pt2 LIMIT $start_from, $per_page");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>   
      <tr>
        <td><?php echo $readrow['fld_product_num']; ?></td>
        <td><?php echo $readrow['fld_product_name']; ?></td>
        <td><?php echo $readrow['fld_product_price']; ?></td>
        <td><?php echo $readrow['fld_product_brand']; ?></td>
        <td><?php echo $readrow['fld_product_condition']; ?></td>
        <td><?php echo $readrow['fld_product_weight']; ?></td>
        <td><?php echo $readrow['fld_product_quantity']; ?></td>
        <td>
          <a href="products_details.php?pid=<?php echo $readrow['fld_product_num']; ?>" class="btn btn-warning btn-xs" role="button">Details</a>
          <a href="products.php?edit=<?php echo $readrow['fld_product_num']; ?>" class="btn btn-success btn-xs" role="button"> Edit </a>
          <a href="products.php?delete=<?php echo $readrow['fld_product_num']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a>
        </td>
      </tr>
       <?php
      }
      $conn = null;
      ?>
    </table>
  </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <nav>
          <ul class="pagination">
          <?php
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM tbl_products_a174366_pt2");
            $stmt->execute();
            $result = $stmt->fetchAll();
            $total_records = count($result);
          }
          catch(PDOException $e){
                echo "Error: " . $e->getMessage();
          }
          $total_pages = ceil($total_records / $per_page);
          ?>
          <?php if ($page==1) { ?>
            <li class="disabled"><span aria-hidden="true">«</span></li>
          <?php } else { ?>
            <li><a href="products.php?page=<?php echo $page-1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <?php
          }
          for ($i=1; $i<=$total_pages; $i++)
            if ($i == $page)
              echo "<li class=\"active\"><a href=\"products.php?page=$i\">$i</a></li>";
            else
              echo "<li><a href=\"products.php?page=$i\">$i</a></li>";
          ?>
          <?php if ($page==$total_pages) { ?>
            <li class="disabled"><span aria-hidden="true">»</span></li>
          <?php } else { ?>
            <li><a href="products.php?page=<?php echo $page+1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>
 </div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

<?php include_once 'footer.php';?>

<script type="text/javascript">
      var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
      };

      function checkValidation(){
        var productID = document.getElementById("productid").value;
        var productName = document.getElementById("productname").value;
        var productPrice = document.getElementById("productprice").value;
        var productBrand = document.getElementById("productbrand").value;
        var productLabelled = document.getElementById("productlabelled").value;
        var productNetweight = document.getElementById("productnetweight").value;
        var productQuantity = document.getElementById("productq").value;
        

        var firstletter = productID.slice(0, 1);
        var lastword = productID.slice(1, productID.length);

        var errorMsg = "-WARNING-\n\n";
        // console.log(lastword);
        // console.log(firstletter);
        // if(firstletter !== 'P'){
        //  alert('Please use capital "P" letter for product ID');
        //  return false;
        // }
        if(productName == ""){
          errorMsg += '-Please enter product name-\n';
        }
        if(productPrice == ""){
          errorMsg += '-Please enter product price-\n';
        }
        if(productBrand == ""){
          errorMsg += '-Please choose a product brand-\n';
        }
        if(productLabelled == ""){
          errorMsg += '-Please choose a product label-\n';
        }
        if(productNetweight == ""){
          errorMsg += '-Please enter product net weight-\n';
        }
        if(productQuantity == ""){
          errorMsg += '-Please enter a product quantity-\n';
        }

        if(errorMsg !== "-WARNING-\n\n"){
          alert(errorMsg);
          return false;
        }

        return true;
      }
    </script>
</body>
</html>