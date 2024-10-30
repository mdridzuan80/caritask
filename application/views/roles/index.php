    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
		  <div class="card">
              <div class="card-header">
                <h3 class="card-title">Role List</h3>
				<?php if(hasRole('admin')){ ?>
				<div class="card-tools">
					<a type="button" class="btn btn-block btn-primary" href="#"><i class="fas fa-plus"></i> Create Role</a>
                </div>
				<?php } ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Display Name</th>
					  <th>Description</th>
					  <th style="width: 40px">Status</th>
					  <th style="width: 40px"></th>
                    </tr>
                  </thead>
                  <tbody>
					<?php foreach($roles as $role){?>
                    <tr>
                      <td>1.</td>
                      <td><?=$role->name?></td>
                      <td><?=$role->display_name?></td>
					  <td><?=$role->description?></td>
					  <td><span class="badge bg-primary">Active</span></td>
					  <td>
					  <div class="btn-group" >
                    <button type="button" class="btn btn-default">Action</button>
                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu" style="left: inherit; right: 0px;">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
					  </td>
                    </tr>
					<?php }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div> -->
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

