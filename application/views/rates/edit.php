


  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Gestion
        <small>de Réservations</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Réservations</li>
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
              <h3 class="box-title">Modifier une réservation</h3>
            </div>
            <form role="form" action="<?php base_url('rates/edit') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>
                <div class="form-group">
                  <label for="group_name">Matricule</label>
                  <input type="text" class="form-control" id="matricule" name="matricule" placeholder="Matricule" value="<?php echo ($this->input->post('matricule'))?:$rate_data['matricule']; ?>">
                </div>
                <div class="form-group">
                  <label for="group_name">Catégorie</label>
                  <select class="form-control" id="category_name" name="category_name">
                    <option value="">Selectionnez une catégorie</option>
                    <?php foreach ($category_data as $k => $v) { ?>
                      <option value="<?php echo $v['id']; ?>" <?php echo ($rate_data['vehicule_cat_id'] == $v['id']) ? 'selected' : ''; ?>><?php echo $v['name'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="group_name">Type</label>
                  <select class="form-control" id="type" name="type">
                    <option value="">Selectionnez le taux</option>
                    <option value="1" <?php echo ($rate_data['type'] == 1) ? 'selected':''; ?>>Fixe</option>
                    <option value="2" <?php echo ($rate_data['type'] == 2) ? 'selected':''; ?>>Par heure</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="group_name">Tarif</label>
                  <input type="text" class="form-control" id="rate" name="rate" placeholder="Rate" value="<?php echo ($this->input->post('rate'))?:$rate_data['rate']; ?>">
                </div>
                <div class="form-group">
                  <label for="group_name">Active</label>
                  <select class="form-control" id="rate_status" name="rate_status">
                    <option value="1" <?php echo ($rate_data['active'] == 1) ? 'selected' : ''; ?>>Active</option>
                    <option value="2" <?php echo ($rate_data['active'] == 2) ? 'selected' : ''; ?>>Inactive</option>
                  </select>
                </div>
                
              </div>


              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                <a href="<?php echo base_url('rates/') ?>" class="btn btn-warning">Précédent</a>
              </div>
            </form>
          </div>

        </div>

      </div>

      

    </section>

  </div>


<script type="text/javascript">
  $(document).ready(function() {
    $("#ratesSideTree").addClass('active');
    $("#manageRatesSideTree").addClass('active');
  });
</script>
