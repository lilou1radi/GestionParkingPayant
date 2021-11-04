

  
  <div class="content-wrapper">
   
    <section class="content-header">
      <h1>
        Profile
        <small>de l'utilisateur</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>

    
    <section class="content">
     
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Votre Profile</h3>
            </div>
            
            <div class="box-body">
              <table class="table table-bordered table-condensed table-hovered">
                <tr>
                  <th>Nom d'utilisateur</th>
                  <td><?php echo $user_data['username']; ?></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><?php echo $user_data['email']; ?></td>
                </tr>
                <tr>
                  <th>Nom</th>
                  <td><?php echo $user_data['firstname']; ?></td>
                </tr>
                <tr>
                  <th>Prénom</th>
                  <td><?php echo $user_data['lastname']; ?></td>
                </tr>
                <tr>
                  <th>Genre</th>
                  <td><?php echo ($user_data['gender'] == 1) ? 'Homme' : 'Femme'; ?></td>
                </tr>
                <tr>
                  <th>Tél</th>
                  <td><?php echo $user_data['phone']; ?></td>
                </tr>
                <tr>
                  <th>Groupe</th>
                  <td><span class="label label-info"><?php echo $user_group['group_name']; ?></span></td>
                </tr>
              </table>
            </div>
            
          </div>
          
        </div>
        
      </div>
      
      

    </section>
    
  </div>
  

<script type="text/javascript">
  $(document).ready(function() {
    $("#profileSideTree").addClass('active');
  }); 
</script>
 
