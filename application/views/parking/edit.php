


  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Gestion
        <small>des Stationnements</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Stationnements</li>
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
              <h3 class="box-title">Modifier un stationnement</h3>
            </div>
            <form role="form" action="<?php base_url('parking/edit') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="group_name">Place</label>
                  <select class="form-control" id="parking_slot" name="parking_slot">
                    <option value="">~~Selectionnez~~</option>
                    <?php foreach ($slot_data as $k => $v): ?>
                        <option value="<?php echo $v['id'] ?>" <?php if($save_parking_data['slot_id'] == $v['id']) {
                          echo "selected";
                        } ?> ><?php echo $v['slot_name']; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="group_name">Catégorie</label>
                  <select class="form-control" id="vehicle_cat" name="vehicle_cat">
                    <option value="">~~Selectionnez~~</option>
                    <?php foreach ($vehicle_cat as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>" <?php if($save_parking_data['vehicule_cat_id'] == $v['id']) {
                        echo "selected";
                      } ?> ><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="group_name">Matricule</label>
                  <select class="form-control" id="vehicle_rate" name="vehicle_rate">
                    <?php if($save_parking_data['rate_id']) { ?>
                      <?php foreach ($get_used_rate_data as $rate_v): ?>
                        <option value="<?php echo $rate_v['id']; ?>" <?php if($rate_v['id'] == $save_parking_data['rate_id']) { echo "selected"; } ?>><?php echo $rate_v['matricule'] ?></option>
                      <?php endforeach ?>
                    <?php } else { ?>
                    <option value="">~~Selectionnez~~</option>
                    <?php } ?>
                  </select>
                </div>
                
              </div>


              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                <a href="<?php echo base_url('parking/') ?>" class="btn btn-warning">Précédent</a>
              </div>
            </form>
          </div>

        </div>

      </div>


      <div class="row">
        <div class="col-md-12">
          <?php if($this->session->flashdata('payment_error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('payment_error'); ?>
            </div>
          <?php endif; ?>

          <div class="box">
            <div class="box-header">
              <h3>Mettre à jour le paiement
</h3>
            </div>

            <form action="<?php echo base_url('parking/updatepayment/') ?>" method="post">
            <div class="box-body">
              <?php $date = strtotime('now'); ?>
              <div class="form-group">
                <label for="">Date de départ : <?php echo date('Y-m-d', $date); ?></label> <br />
                <label for="">Heure de départ : <?php echo date('h:i a', $date); ?></label>
              </div>
              <div class="form-group">
                <label class="payment_status">Etat du payment</label>
                <select class="form-control" name="payment_status" id="payment_status">
                  <option value="">~~Selectionnez~~</option>
                  <option value="1">Payé</option>
                  <option value="0">Non payé</option>
                </select>
              </div>
            </div>
            <div class="box-footer">
              <input type="hidden" name="parking_id" id="parking_id" value="<?php echo $save_parking_data['id'];  ?>">
              <button type="submit" class="btn btn-primary">Mettre à jour le payment</button>
              <a href="<?php echo base_url('parking/') ?>" class="btn btn-warning">Précédent</a>
            </div>   

            </form>

          </div>
        </div>
      </div>
      

    </section>
    
  </div>



  <script type="text/javascript">
    $(document).ready(function() {
      $("#parkingSideTree").addClass('active');
      $("#manageParkingSideTree").addClass('active');
      
      $('#parking_slot').select2();
      
      $("#vehicle_cat").on('change', function() {
        var value = $(this).val();

        $.ajax({
          url: <?php echo "'". base_url('parking/getCategoryRate/') . "'"; ?>  + value,
          type: 'post',
          dataType: 'json',
          success:function(response) {
            $("#vehicle_rate").html(response);
          }
        });
      });
    });
  </script>
