<!-- partial -->
<div class="content-wrapper">
    <div class="row justify-content-md-center">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?php if ($this->session->flashdata('demo')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $this->session->flashdata('demo'); ?>
                        </div>
                    <?php endif; ?>
                    <h4 class="card-title">Update Product</h4>
                    <?= form_open_multipart('product/update/'. $product['id']); ?>

                    <div class="form-group">
                        <label for="type">Category name</label>
                    
                        <input type='text' class="form-control" name="category_name" placeholder="Enter category name" value="<?php echo($product['category_id']); ?>" required/>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="type">Product name</label>
                    
                        <input type='text' class="form-control" name="product_name" placeholder="Enter Product name" value="<?php echo($product['product_name']); ?>" required/>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="type">Product Price</label>
                    
                        <input type='text' class="form-control" name="product_price" placeholder="Enter Product price" value="<?php echo($product['price']); ?>" required/>
                    </div>
                    
                    

                    <div class="form-group">
                        <label for="gender">Status</label>
                        <select class="js-example-basic-single" name="product_status" style="width:100%">
                            <?php
                            if($product['status'] == '1'){ ?>
                                 <option value="1" selected>Active</option>
                               <option value="0">Nonactive</option>
                                
                                <?php
                            }else{
                            ?>
                             <option value="1" >Active</option>
                               <option value="0" selected>Nonactive</option>
                            <?php 
                            }
                            ?>
                          
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <a class="btn btn-danger text-white" href="<?= base_url(); ?>product">Cancel</a>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function admSelectCheck(nameSelect) {
        console.log(nameSelect);
        if (nameSelect) {
            serviceValue = document.getElementById("service").value;
            linkValue = document.getElementById("link").value;
            if (serviceValue == nameSelect.value) {
                document.getElementById("linktes").required = false;
                document.getElementById("servicecheck").style.display = "block";
                document.getElementById("linkcheck").style.display = "none";
            } else if (linkValue == nameSelect.value) {
                document.getElementById("linktes").required = true;
                document.getElementById("linkcheck").style.display = "block";
                document.getElementById("servicecheck").style.display = "none";
            }
        } else {
            document.getElementById("servicecheck").style.display = "block";
        }
    }
</script>