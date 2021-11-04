


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

          <?php if(in_array('createParking', $user_permission)): ?>
            <a href="<?php echo base_url('parking/create') ?>" class="btn btn-primary"> <i class="fa fa-plus"></i> Ajouter un stationnement</a>
            <br /> <br />
          <?php endif; ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Gestion des Stationnements</h3>
            </div>

            <div class="box-body">
              <table id="datatables" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Code du Stationnement</th>
                  <th>Arrivée</th>
                  <th>Sortie</th>
                  <th>Type de vehicule</th>
                  <th>Matricule</th>
                  <th>Tarif</th>
                  <th>Place</th>
                  <th>Temps total</th>
                  <th>Montant total</th>
                  <th>Etat du paiment</th>
                  <?php if(in_array('updateParking', $user_permission) || in_array('deleteParking', $user_permission) || in_array('viewParking', $user_permission)): ?>
                    <th>Action</th>
                  <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($parking_data as $k => $v) {
                    ?>
                    <tr>
                      <td><?php echo $v['parking']['parking_code']; ?></td>
                      <td><?php

                       $date=date('Y-m-d', $v['parking']['in_time']);
                       $time=date('h:i a', $v['parking']['in_time']);

                       echo $date . '<br />' . $time;

                       ?> 
                      </td>
                      <td><?php 

                      if($v['parking']['out_time'] == '') {
                        echo "-";
                      }
                      else {
                         $date= date('Y-m-d', $v['parking']['out_time']);
                         $time= date('h:i a', $v['parking']['out_time']);
  
                         echo $date . '<br />' . $time;

                      }

                      ?></td>
                      <td><?php echo $v['category']['name']; ?></td>
                      <td><?php echo $v['rate']['matricule']; ?></td>
                      <td><?php 
                      echo $company_currency .' ' . $v['rate']['rate']; ?></td>
                      <td><?php echo $v['slot']['slot_name']; ?></td>
                      <td><?php echo $v['parking']['total_time'] . ' hour'; echo ($v['parking']['total_time'] > 1)?'s':'';?></td>
                      <td><?php echo $company_currency .' ' . ($v['parking']['earned_amount'])?:'-'; ?></td>
                      <td><?php echo ($v['parking']['paid_status'] == 1) ? '<label class="label label-success">Payé</label>' : '<label class="label label-warning">Non payé</label>'; ?></td>
                      <?php if(in_array('updateParking', $user_permission) || in_array('deleteParking', $user_permission) || in_array('viewParking', $user_permission)): ?>
                      <td>
                        <?php if(in_array('updateParking', $user_permission)): ?>
                          <a href="<?php echo base_url('parking/edit/'.$v['parking']['id']) ?>" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                        <?php endif; ?>
                        <?php if(in_array('deleteParking', $user_permission)): ?>
                          <a href="<?php echo base_url('parking/delete/'.$v['parking']['id']) ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
                        <?php endif; ?>
                        <?php if(in_array('viewParking', $user_permission)): ?>
                            <a onclick="printParking(<?php echo "'". base_url('parking/printInvoice/'.$v['parking']['id']) . "'"; ?>)" class="btn btn-default"><i class="fa fa-print"></i></a>
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

    function printParking(parking_url)
    {
      $.ajax({
        url: parking_url,
        type: 'post',
        success:function(response) {

          var mywindow = window.open('', 'PRINT', 'height=400,width=600');

          mywindow.document.write(response);


          mywindow.document.close(); 
          mywindow.focus(); 

          mywindow.print();
          mywindow.close(); 

        }
      })
    }

    $(document).ready(function() {
      $('#datatables').DataTable({
        'order': []
      });

      $("#parkingSideTree").addClass('active');
      $("#manageParkingSideTree").addClass('active');

    });
  </script>
