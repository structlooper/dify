<style>
    .card{
          border:1px solid red;
    }
    .btn{
       
        height:30px;
        border:1px solid #ccc;
    }
  
</style>
<!-- partial -->
<div class="content-wrapper">
  <div class="card">
    <div class="card-body">
      <div>
        <a class="btn btn-info" href="<?= base_url(); ?>product/add"><i class="mdi mdi-plus-circle-outline"></i>Add Product</a>
      </div>
      <br>
      <?php if ($this->session->flashdata('demo') or $this->session->flashdata('hapus')) : ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('demo'); ?>
          <?php echo $this->session->flashdata('hapus'); ?>
        </div>
      <?php endif; ?>
      <?php if ($this->session->flashdata('ubah') or $this->session->flashdata('tambah')) : ?>
        <div class="alert alert-succees" role="alert">
          <?php echo $this->session->flashdata('ubah'); ?>
          <?php echo $this->session->flashdata('tambah'); ?>
        </div>
      <?php endif; ?>
      <h4 class="card-title">Product Management</h4>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Category Name</th>
              
                  <th>Product Name</th>
                 
                  <th>status</th>
                   <th>price</th>
                   <th>Action</th>
                </tr>
              </thead>
                   <?php $i = 1; 
                foreach ($product as $pr) { ?>
                
                  <tr>
                    <td><?= $i ?></td>
                   
                    <td><?= $pr->category_id; ?></td>
                     <td><?= $pr->product_name; ?></td>
                    <td><?php if($pr->status == '1') {?> <label class="badge badge-success">Active</label> <?php }else{ ?><label class="badge badge-danger">Non Active</label><?php } ?></td>
                   <td><?= $pr->price; ?></td>
                    <td>
                      <a href="<?= base_url(); ?>product/update/<?= $pr->id; ?>" >
                        <button class="btn btn-primary">Edit</button></a>
                      <a href="<?= base_url(); ?>product/delete/<?= $pr->id; ?>" onclick="return confirm ('are you sure?')">
                        <button class="btn btn-danger">Delete</button></a>
                    </td>
                  </tr>
                <?php $i++;
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->