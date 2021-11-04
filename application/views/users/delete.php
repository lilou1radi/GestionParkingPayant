

 
  <div class="content-wrapper">
  
    <section class="content-header">
      <h1>
        Gestion des
        <small>Utilisateurs</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li><a href="<?php echo base_url('users/') ?>">Utilisateurs</a></li>
        <li class="active">Supprimer</li>
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

          <h1>Voulez-vous vraiment supprimer cet utilisateur ?</h1>

          <form action="<?php echo base_url('users/delete/'.$id) ?>" method="post">
            <input type="submit" class="btn btn-primary" name="confirm" value="Confirmer">
            <a href="<?php echo base_url('users') ?>" class="btn btn-warning">Annuler</a>
          </form>

        </div>
       
      </div>
     
      

    </section>
    
  </div>
  


