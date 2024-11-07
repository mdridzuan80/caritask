<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Task</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?=site_url("tasks/store")?>">
			  			<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                <div class="card-body">
                  <div class="form-group">
                    <label for="comService">Service</label>
										<select class="form-control" name="comService">
                          <option value="1" >Cleaning service</option>
                          <option value="2">Home Repair</option>
                        </select>
                  </div>
									<div class="form-group">
                    <label for="comSubService">Sub-Service</label>
                    <select class="form-control" name="comSubService">
                          <option value="1">Cleaning service 1</option>
                          <option value="2">Cleaning service 2</option>
                          <option value="3">Home Repair 1</option>
                          <option value="4">Home Repair 2</option>
                        </select>
                  </div>
									<div class="form-group">
                    <label for="txtDate">Date</label>
                    <input type="date" class="form-control" id="txtDate" placeholder="Date" name="txtDate">
                  </div>
									<div class="form-group">
                    <label for="txtTime">Time</label>
                    <input type="time" class="form-control" id="txtTime" placeholder="Time" name="txtTime">
                  </div>
                  <div class="form-group">
                    <label for="comAmount">Amount</label>
                    <select class="form-control" name="comAmount">
                          <option value="5000">RM50</option>
                          <option value="10000">RM100</option>
                          <option value="20000">RM200</option>
                        </select>
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
