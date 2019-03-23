<?php 
include 'header.php';
include 'sidebar.php';
?>
<!-- İNDEX BAŞ-->
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line">İletişim Formları</h1>

				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><strong><legend>İletişim Formları</legend></strong></h2>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>No</th>
											<th>Ad Soyad</th>
											<th>Telefon</th>
											<th>E-Mail</th>
											<th>Mesaj</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											<?php
											$evsor=mysql_query("select *from iletisim order by iletisim_id desc");
											while($b=mysql_fetch_array($evsor))
											{
												?>
												<td><?php
												$iletisim_id=$b['iletisim_id']; 
												echo "$iletisim_id";
												?></td>
												<td><?php
												$iletisim_ad=$b['iletisim_ad']; 
												echo "$iletisim_ad";
												?></td>
												<td><?php 
												$iletisim_tel=$b['iletisim_tel'];
												echo "$iletisim_tel"; 
												?></td>
												<td><?php
												$iletisim_email=$b['iletisim_email'];
												echo "$iletisim_email";
												?></td>
												<td><?php
												$iletisim_mesaj=$b['iletisim_mesaj'];
												echo "$iletisim_mesaj"; 
												?></td>

												<td><a href="edit1.php?&iletisim_id=<?php echo $iletisim_id ?>">
													<button type="submit" class="btn btn-primary">
														<i class="glyphicon glyphicon-search">
															Edit
														</i></button>
													</a>
												</td>
											</tr>
										<?php }
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>


				</div>




			</div>
			<!-- /. PAGE INNER  -->
		</div>
		<!-- /. PAGE WRAPPER  -->
	</div>
	<!-- İNDEX SON-->

	<?php include 'footer.php';
	?>