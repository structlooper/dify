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
                    <h4 class="card-title">Add New Product</h4>
                    <?= form_open_multipart('product/add'); ?>

                    <div class="form-group">
                        <label for="type">Category name</label>
                     
                       
                        
                        
                        
                        <select  class="form-control" name="category_name" >
                            <?php $i = 1; 
                foreach ($categryname as $catdata) { ?>
  <option  class="form-control" value="<?= $catdata->id; ?>"><?= $catdata->category_management_name; ?></option>ars">
  <?php } ?>
  
</select>
                    </div>
                    <div class="form-group">
                        <label for="type">Product name</label>
                    
                        <input type='text' class="form-control" name="product_name" placeholder="Enter Product name" required/>
                    </div>
                    <div class="form-group">
                        <label for="type">Product Price</label>
                    
                        <input type='text' class="form-control" name="product_price" placeholder="Enter Product price" required/>
                    </div>
                    <div class="form-group">
                        <label for="gender">Status</label>
                        <select class="js-example-basic-single" name="category_status" style="width:100%">
                            <option value="1">Active</option>
                            <option value="0">Nonactive</option>
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