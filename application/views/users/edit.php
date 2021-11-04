

  
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Gestion des
        <small>Utilisateurs</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Utilisateurs</li>
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
              <h3 class="box-title">Modifier l'Utilisateur</h3>
            </div>
            <form role="form" action="<?php base_url('users/create') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="groups">Groupes</label>
                  <select class="form-control" id="groups" name="groups">
                    <option value="">Selectionnez un Groupe</option>
                    <?php foreach ($group_data as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>" <?php if($user_group['id'] == $v['id']) { echo 'selected'; } ?> ><?php echo $v['group_name'] ?></option> 
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="username">Nom d'utilisateur</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Nom d'utilisateur" value="<?php echo $user_data['username'] ?>">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $user_data['email'] ?>">
                </div>                

                <div class="form-group">
                  <label for="fname">Nom</label>
                  <input type="text" class="form-control" id="fname" name="fname" placeholder="nom" value="<?php echo $user_data['firstname'] ?>">
                </div>

                <div class="form-group">
                  <label for="lname">Prénom</label>
                  <input type="text" class="form-control" id="lname" name="lname" placeholder="prénom" value="<?php echo $user_data['lastname'] ?>">
                </div>

                <div class="form-group">
                  <label for="phone">Tél</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo $user_data['phone'] ?>">
                </div>

                <div class="form-group">
                  <label for="gender">Genre</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="homme" value="1" <?php if($user_data['gender'] == 1) {
                        echo "checked";
                      } ?>>
                      Homme
                    </label>
                    <label>
                      <input type="radio" name="gender" id="femme" value="2" <?php if($user_data['gender'] == 2) {
                        echo "checked";
                      } ?>>
                      Femme
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Laissez le champ de mot de passe vide si vous ne souhaitez pas le modifier.
                  </div>
                </div>

                <div class="form-group">
                  <label for="password">Mot de passe</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                </div>

                <div class="form-group">
                  <label for="cpassword">Confirmer le mot de passe</label>
                  <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirmer le mot de passe">
                </div>

              </div>
              

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                <a href="<?php echo base_url('users/') ?>" class="btn btn-warning">Précédent</a>
              </div>
            </form>
          </div>
         
        </div>
       
      </div>
     
      

    </section>
   
  </div>


<script type="text/javascript">
  $(document).ready(function() {
    $("#groups").select2();

    $("#userSideTree").addClass('active');
    $("#manageUserSideTree").addClass('active');
  });
</script>
