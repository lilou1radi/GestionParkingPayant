

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tableau de bord
        <small>Panneau de configuration</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Tableau de bord</li>
      </ol>
    </section>

    <section class="content">

      <?php if($is_admin == true): ?>
      <div class="row">

        <div class="col-lg-4 col-xs-12">
          
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $total_slots; ?></h3>

              <p>Nombre total de places de stationnement</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url('slots') ?>" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-4 col-xs-12">
         
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $total_users; ?></h3>

              <p>Nombre total des utilisateurs</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?php echo base_url('users') ?>" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        

        <div class="col-lg-4 col-xs-12">
         
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $total_parking; ?></h3>

              <p>Stationnement total</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url('parking') ?>" class="small-box-footer">Plus d'informations<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        

      </div>
    
      <?php endif; ?>
      

    </section>
  
  </div>
 

  <script type="text/javascript">
    $(document).ready(function() {
      $("#dashboardSideNav").addClass('active');
    }); 
  </script>
