


  <div class="content-wrapper">
  
    <section class="content-header">
      <h1>
        Gestion
        <small>de Catégories</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Catégories</li>
      </ol>
    </section>

  
    <section class="content">
    
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>

          <?php if(in_array('createCategory', $user_permission)): ?>
            <a href="<?php echo base_url('category/create') ?>" class="btn btn-primary"> <i class="fa fa-plus"></i> Ajouter une catégorie</a>
            <br /> <br />
          <?php endif; ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Gestion de Catégories</h3>
            </div>
        
            <div class="box-body">
              <table id="datatables" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom du groupe</th>
                  <th>Etat</th>
                  <?php if(in_array('updateCategory', $user_permission) || in_array('deleteCategory', $user_permission)): ?>
                    <th>Action</th>
                  <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($category_data as $k => $v) {
                    ?>
                    <tr>
                      <td><?php echo $v['name']; ?></td>
                      <td>
                        <?php if($v['active'] == 1) { ?>
                          <span class="label label-success">Active</span>
                        <?php } 
                        else { ?>
                          <span class="label label-warning">Inactive</span>
                        <?php } ?>
                      </td>
                      <?php if(in_array('updateCategory', $user_permission) || in_array('deleteCategory', $user_permission)): ?>
                      <td>
                        <?php if(in_array('updateCategory', $user_permission)): ?>
                          <a href="<?php echo base_url('category/edit/'.$v['id']) ?>" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                        <?php endif; ?>
                        <?php if(in_array('deleteCategory', $user_permission)): ?>
                          <a href="<?php echo base_url('category/delete/'.$v['id']) ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
                        <?php endif; ?>
                      </td>
                    </tr>
                    <?php endif; ?>
                    <?php
                  } ?>
                </tbody>
              </table>
            </div>
        
          </div>
       
        </div>
      
      </div>
    
      

    </section>
    
  </div>
  

  <script type="text/javascript">
    $(document).ready(function() {
      $('#datatables').DataTable();

      $("#categorySideTree").addClass('active');
      $("#manageCategorySideTree").addClass('active');
      
    });
  </script>
