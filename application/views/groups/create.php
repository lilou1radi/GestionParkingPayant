

  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Gestion
        <small>de Groupes</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Groupes</li>
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
              <h3 class="box-title">Ajouter un groupe</h3>
            </div>
            <form role="form" action="<?php base_url('groups/create') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="group_name">Nom du Groupe</label>
                  <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Enter group name">
                </div>
                <div class="form-group">
                  <label for="permission">Permission</label>

                  <table class="table table-responsive">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Créer</th>
                        <th>Modifier</th>
                        <th>Visualiser</th>
                        <th>Supprimer</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Utilisateurs</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createUser"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateUser"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewUser"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteUser"></td>
                      </tr>
                      <tr>
                        <td>Groupes</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createGroup"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateGroup"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewGroup"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteGroup"></td>
                      </tr>
                      <tr>
                        <td>Catégories</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createCategory"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCategory"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewCategory"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteCategory"></td>
                      </tr>
                      <tr>
                        <td>Réservations</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createRates"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateRates"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewRates"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteRates"></td>
                      </tr>
                      <tr>
                        <td>Places</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createSlots"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateSlots"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewSlots"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteSlots"></td>
                      </tr>
                      <tr>
                        <td>Stationnements</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createParking"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateParking"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewParking"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteParking"></td>
                      </tr>
                      <tr>
                        <td>Rapports</td>
                        <td> - </td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewReports"></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>A propos de nous</td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCompany"></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Paramètres</td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateSetting"></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Profile</td>
                        <td> - </td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewProfile"></td>
                        <td> - </td>
                      </tr>                      
                    </tbody>
                  </table>
                  
                </div>
              </div>
            

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Créer le groupe</button>
                <a href="<?php echo base_url('groups/') ?>" class="btn btn-warning">Annuler</a>
              </div>
            </form>
          </div>
          
        </div>
 
      </div>
    
      

    </section>
   
  </div>
  

  <script type="text/javascript">
    $(document).ready(function() {
      $("#groupSideTree").addClass('active');
      $("#createGroupSideTree").addClass('active');
    });
  </script>
