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
                    <h4 class="card-title">Add New Category</h4>
                    <?= form_open_multipart('product_category/update/'. $cate['id']); ?>

                    <div class="form-group">
                        <label for="type">Category name</label>
                    
                        <input type='text' class="form-control" name="category_name" placeholder="Enter category name" value="<?php echo($cate['category_management_name']); ?>" required/>
                    </div>

                    <div class="form-group">
                        <label for="gender">Status</label>
                        <select class="js-example-basic-single" name="category_status" style="width:100%">
                            <?php
                            if($cate['category_status'] == '1'){ ?>
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
                    <a class="btn btn-danger text-white" href="<?= base_url(); ?>product_category">Cancel</a>
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