					<div class="page-content">	
								<?php 
							ini_set('error_reporting', 1);
							if ($this->session->flashdata('aktif') == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Aktivasi User Gagal !
								</div>
							<?php elseif ($this->session->flashdata('aktif') == 'sukses'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Aktivasi User Berhasil !
								</div>
							<?php elseif ($this->session->flashdata('aktif') == 'kosong'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									ID User Tidak Ada !
								</div>
							<?php elseif ($this->session->flashdata('nonaktif') == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Nonaktivasi User Gagal !
								</div>
							<?php elseif ($this->session->flashdata('nonaktif') == 'sukses'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Nonaktivasi User Berhasil !
								</div>
							<?php endif ?>
						<div class="page-header">
							<h1>
								Manage User
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Kelola User
								</small>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Admin
								</small>
							</h1>
						</div>
								<div class="row">
									
										<table id="dynamic-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">No.</th>
													<th class="center" style="width: 12px">Nama</th>
													<th class="center">Username</th>
													<th class="center">Password</th>
													<th class="center">Auth</th>
													<th class="center">Previlage</th>
													<th class="center">Status</th>
													<th class="center">Aktivasi User</th>
												</tr>
											</thead>

											<tbody>
												<?php $nomor=1; foreach($karyawan as $data){ ?>
												
												<tr>
													<td class="center">
														<?php echo $nomor++ ?>
													</td>

													<td class="center">
														<?php echo $data['nama_lengkap']?>
													</td>

													<td class="center">
														<?php echo $data['password']?>
													</td>

													<td class="center">
														<?php echo $data['prev_no']?>
													</td>
													
													<td class="center">
														<?php echo $data['status']?>
													</td>

													<td class="center">
													<form action="<?php echo base_url('index.php/home/home/simpan_privilage')?>" method="post">
														<input type="hidden" name="id" value="<?php echo $data['id']?>">

														<?php if(strpos($data['previlage'],"manageuser") > 0){?>
														<input type="checkbox" name="manage_user" value="manageuser" checked> Manage User &nbsp&nbsp&nbsp
														<?php } else{?>
														<input type="checkbox" name="manage_user" value="manageuser"> Manage User &nbsp&nbsp&nbsp
														<?php } ?>

														<?php if(strpos($data['previlage'],"managepegawai") > 0){?>
														<input type="checkbox" name="manage_pegawai" value="managepegawai" checked> Manage Pegawai &nbsp&nbsp&nbsp
														<?php } else{?>
														<input type="checkbox" name="manage_pegawai" value="managepegawai"> Manage Pegawai &nbsp&nbsp&nbsp
														<?php } ?>
														<br>
														<?php if(strpos($data['previlage'],"inputhasilrapat") > 0){?>
														<input type="checkbox" name="input_hasil_rapat" value="inputhasilrapat" checked> Input Hasil Rapat &nbsp&nbsp&nbsp
														<?php } else{?>
														<input type="checkbox" name="input_hasil_rapat" value="inputhasilrapat"> Input Hasil Rapat &nbsp&nbsp&nbsp
														<?php } ?>
														<?php if(strpos($data['previlage'],"handledanomali") > 0){?>
														<input type="checkbox" name="handled_anomali" value="handledanomali" checked> Handled Anomali &nbsp&nbsp&nbsp
														<?php } else{?>
														<input type="checkbox" name="handled_anomali" value="handledanomali"> Handled Anomali &nbsp&nbsp&nbsp
														<?php } ?>
														<br>
														<input type="submit" value="SIMPAN">
													</form>
													</td>
													<td class="center">
														<?php echo $data['aktivasi']?>
													</td>
													<td class="center">
														<div class="hidden-sm hidden-xs btn-group">
															
															<a href="<?php echo base_url(); ?>index.php/super_admin/manage_user/aktivasi/Aktif/<?php echo $data['id']; ?>" class="btn btn-xs btn-info">
																<i class="fa fa-check-circle" aria-hidden="true" value="active"></i> Active
															</a>
															&nbsp;
															<a href="<?php echo base_url(); ?>index.php/super_admin/manage_user/aktivasi/Nonaktif/<?php echo $data['id']; ?>" class="btn btn-xs btn-danger">
																<i class="fa fa-times-circle" aria-hidden="true" value="deactive"></i> Deactive
															</a>
															
														</div>

												
													</td>
												</tr>

												<?php } ?>

											</tbody>
										</table>
									<!-- /.span -->
								</div><!-- /.row -->


						</div>

								
