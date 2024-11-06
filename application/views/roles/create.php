<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Roles</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?=base_url("roles")?>">
			  	<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                <div class="card-body">
                  <div class="form-group">
                    <label for="txtname">Name</label>
                    <input class="form-control" id="txtname" placeholder="Name" name="txtName">
                  </div>
                  <div class="form-group">
                    <label for="txtDisplayName">Display Name</label>
                    <input class="form-control" id="txtDisplayName" placeholder="Display Name" name="txtDisplayName">
                  </div>
                  <div class="form-group">
                    <label for="txtDescription">Description</label>
                    <input class="form-control" id="txtDescription" placeholder="Description" name="txtDescription">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
