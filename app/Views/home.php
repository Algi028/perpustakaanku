<?= $this->extend('main')?>

<?= $this->section('content')?>
		<!-- page content -->
		<div class="right_col" role="main">
          <!-- top tiles -->
			<div class="row">
				<div class="col-12">
					<div class="tile_count">
						<div class="row" >
							<div class="col-md-2  tile_stats_count">
								<span class="count_top"><i class="fa fa-user"></i> Staff</span>
								<div class="count"><?=$qstaff?></div>
							</div>
							<div class="col-md-2  tile_stats_count">
								<span class="count_top"><i class="fa fa-clock-o"></i> Borrower</span>
								<div class="count"><?=$qborrower?></div>
							</div>
							<div class="col-md-2  tile_stats_count">
								<span class="count_top"><i class="fa fa-user"></i> Book</span>
						   		<div class="count green"><?=$qbook?></div>
							</div>
							<div class="col-md-2  tile_stats_count">
								<span class="count_top"><i class="fa fa-user"></i> Publisher</span>
								<div class="count"><?=$qpublisher?></div>
							</div>
							<div class="col-md-2  tile_stats_count">
								<span class="count_top"><i class="fa fa-user"></i> Category</span>
								<div class="count"><?=$qcategory?></div>
							</div>
							<div class="col-md-2  tile_stats_count">
								<span class="count_top"><i class="fa fa-user"></i> Borrow</span>
								<div class="count"><?=$qborrow?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /top tiles -->
          <!-- /top tiles -->
          <br />
          <hr />
        
      </div>
    </div>
        <!-- /page content -->

<?= $this->endsection() ?>
		