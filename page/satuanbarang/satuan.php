




 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Unit Item</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                        <tr>
											<th>No</th>
											<th>Unit Items</th>
											
											<th>Action</th>
                                         
                                        </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from satuan");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['satuan'] ?></td>
											
                                         

											<td>
											<a href="?page=satuanbarang&aksi=ubahsatuan&id=<?php echo $data['id'] ?>" class="btn btn-success" >Edit</a>
											<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=satuanbarang&aksi=hapussatuan&id=<?php echo $data['id'] ?>" class="btn btn-danger" >Delete</a>
											</td>
                                        </tr>
									<?php }?>

										   </tbody>
                                </table>
								<a href="?page=satuanbarang&aksi=tambahsatuan" class="btn btn-primary" >Tambah Satuan Barang</a>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












