<!-- File upload form -->
<div class="container">
	<div class="row">
        <div class="col-xl-8 col-lg-7">
		<!-- Alert msg -->
		<?php			
			if($this->session->flashdata('flagError'))
            {
            ?>
                <div class="alert alert-danger msg-alert" id="successMessage">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong><?php echo $this->session->flashdata('flagError');?></strong>
                </div>
            <?php
            }
           if($this->session->flashdata('flagSuccess'))
            {
            ?>
                <div class="alert alert-success msg-alert" id="successMessage">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong><?php echo $this->session->flashdata('flagSuccess');?></strong>
                </div>
            <?php
            } ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Gallary Image Upload</h6>
                </div>
                <div class="card-body">
					<form method="post" action="" enctype="multipart/form-data">
						<div class="chart">
							<div class="row">
								<div class="col-xl-6 col-lg-6">
									<div class="form-group">						
										<input type="file" class="form" name="files[]" multiple />
									</div>
								</div>
								<div class="col-xl-5 col-lg-5">
									<div class="form-group">
										<input class="btn btn-primary" type="submit" name="fileSubmit" value="UPLOAD"/>
									</div>
								</div>
							</div>
						</div>
					</form>
                </div>
            </div>
		</div>
    </div>
	
	
	
	<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Gallary Images List</h6>
        </div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Sr.No.</th>
							<th>Image</th>
							<th>Upload Date</th>							
							<th>Action</th>	
						</tr>
					</thead>                  
					<tbody>
					<?php 
						if(!empty($files))
						{ $srno=0;
							foreach($files as $file)
							{  $srno++;
					?>
						<tr>
							<td style="text-align: center;"><p><?php echo $srno; ?></p></td>
							<td><img class="img-rounded" src="<?php echo base_url('uploads/files/gallary/'.$file['file_name']); ?>" style="height:100px; width:100px;"></td>
							<td><p>Uploaded On <?php echo date("j M Y",strtotime($file['uploaded_on'])); ?></p></td>							
							<td>
								<a href="javascript:void(0);" onclick="deleteimage('<?php echo $file['id'];?>','<?php echo $file['file_name'];?>');" class="btn btn-danger btn-circle" alt="Delete" title="Delete">
									<span class="icon text-white-50">
										<i class="fas fa-trash"></i>
									</span>									
								</a>
							</td>
						</tr>
						
					<?php 	} 
					}
					else
					{ ?>
						<p>Record not found...</p>
					<?php } ?>
					</tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function deleteimage(id, imgname)
{   
    if(confirm("Do you want to Delete Image?"))
    {
		if(id)
		{
			location.href  = '<?php echo base_url();?>'+'admin/upload_files/delete/id/'+id+'/imgname/'+imgname;
		}		
    }
}
</script>