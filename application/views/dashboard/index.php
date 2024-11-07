    <!-- Main content -->
    <?php

		use Brick\Money\Money;
		?>
    <div class="content">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-lg-12">
    				<div class="card">
    					<div class="card-header">
    						<h3 class="card-title">Tasks</h3>
    						<?php if (hasRole(['admin', 'user'])) { ?>
    							<div class="card-tools">
    								<a type="button" class="btn btn-block btn-primary" href="<?= site_url('tasks/create') ?>"><i class="fas fa-plus"></i> Create Task</a>
    							</div>
    						<?php } ?>
    					</div>
    					<!-- /.card-header -->
    					<div class="card-body">
    						<table class="table table-bordered">
    							<thead>
    								<tr>
    									<th style="width: 10px">#</th>
    									<th>Service</th>
    									<th>Sub-Service</th>
    									<th>Date</th>
    									<th>Time</th>
    									<th>Amount</th>
    								</tr>
    							</thead>
    							<tbody>
    								<?php foreach ($tasks as $task) { ?>
    									<tr>
    										<td></td>
    										<td><?= $task->sname ?></td>
    										<td><?= $task->ssname ?></td>
    										<td><?= $task->date ?></td>
    										<td><?= $task->time ?></td>
    										<td><?= Money::ofMinor($task->amount, 'MYR'); ?></td>
    									</tr>
    								<?php } ?>
    							</tbody>
    						</table>
    					</div>
    					<!-- /.card-body -->
    					<div class="card-footer clearfix">
    						<ul class="pagination pagination-sm m-0 float-right">
    							<li class="page-item"><a class="page-link" href="#">«</a></li>
    							<li class="page-item"><a class="page-link" href="#">1</a></li>
    							<li class="page-item"><a class="page-link" href="#">2</a></li>
    							<li class="page-item"><a class="page-link" href="#">3</a></li>
    							<li class="page-item"><a class="page-link" href="#">»</a></li>
    						</ul>
    					</div>
    				</div>
    			</div>
    			<!-- /.col-md-6 -->
    		</div>
    		<!-- /.row -->
    	</div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
