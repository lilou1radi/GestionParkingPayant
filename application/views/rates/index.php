


  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Gestion
        <small>de Résérvations</small>
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

          <?php if(in_array('createRates', $user_permission)): ?>
            <a href="<?php echo base_url('rates/create') ?>" class="btn btn-primary"> <i class="fa fa-plus"></i> Ajouter une réservation</a>
            <br /> <br />
          <?php endif; ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Gestion de réservations</h3>
            </div>

            <div class="box-body">
              <table id="datatables" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Matricule</th>
                  <th>Type</th>
                  <th>Tarif</th>
                  <th>Catégorie</th>
                  <th>Etat</th>
                  <?php if(in_array('updateRates', $user_permission) || in_array('deleteRates', $user_permission)): ?>
                    <th>Action</th>
                  <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($rates_data as $k => $v) {
                    ?>
                    <tr>
                      <td><?php echo $v['rate_info']['matricule']; ?></td>
                      <td><?php echo ($v['rate_info']['type'] == 1) ? 'Fixed': 'Hourly'; ?></td>
                      <td><?php echo '$ '. $v['rate_info']['rate']; ?></td>
                      <td><?php echo $v['cat_info']['name']; ?></td>
                      <td>
                        <?php if($v['rate_info']['active'] == 1) { ?>
                          <span class="label label-success">Active</span>
                        <?php } 
                        else { ?>
                          <span class="label label-warning">Inactive</span>
                        <?php } ?>
                      </td>
                      <?php if(in_array('updateRates', $user_permission) || in_array('deleteRates', $user_permission)): ?>
                      <td>
                        <?php if(in_array('updateRates', $user_permission)): ?>
                          <a href="<?php echo base_url('rates/edit/'.$v['rate_info']['id']) ?>" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                        <?php endif; ?>
                        <?php if(in_array('deleteRates', $user_permission)): ?>
                          <a href="<?php echo base_url('rates/delete/'.$v['rate_info']['id']) ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
                        <?php endif; ?>
                      </td>
                      <?php endif; ?>
                    </tr>
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

      $("#ratesSideTree").addClass('active');
      $("#manageRatesSideTree").addClass('active');
    });
  </script>
