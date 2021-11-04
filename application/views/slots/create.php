

  
  <div class="content-wrapper">
   
    <section class="content-header">
      <h1>
        Gestion
        <small>des places de stationnements</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Places</li>
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

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ajouter une place</h3>
            </div>
            <form role="form" action="<?php base_url('slots/create') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>
                
                <div class="form-group">
                  <label for="group_name">Nom de place</label>
                  <input type="text" class="form-control" id="slot_name" name="slot_name" placeholder="Slot name">
                </div>
                <div class="form-group">
                  <label for="group_name">Active</label>
                  <select class="form-control" id="status" name="status">
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                  </select>
                </div>
                
              </div>
              

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="<?php echo base_url('slots/') ?>" class="btn btn-warning">Précédent</a>
              </div>
            </form>
          </div>
      
        </div>
       
      </div>

      

    </section>
  
  </div>
  

<script type="text/javascript">
  $(document).ready(function() {
    $("#slotsSideTree").addClass('active');
    $("#createSlotsSideTree").addClass('active');
  });
</script>

