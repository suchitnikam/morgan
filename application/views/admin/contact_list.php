<!-- File upload form -->
<div class="container">
	<div class="row">
        <div class="col-xl-8 col-lg-7">
		<!-- Alert msg -->
		<?php			
			if($this->session->flashdata('contact_listflagSuccess'))
            {
            ?>
                <div class="alert alert-success msg-alert" id="successMessage">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong><?php echo $this->session->flashdata('contact_listflagSuccess');?></strong>
                </div>
            <?php
            }           
            ?>
		</div>
    </div>
	
	
	
	<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Contact Us List</h6>
        </div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Sr.No.</th>
							<th>Name</th>
							<th>Email ID</th>							
							<th>Subject</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</thead>                  
					<tbody>
					<?php 
						if(!empty($contact_list))
						{ $srno=0;
							foreach($contact_list as $list)
							{ 
								$srno++;
					?>
						<tr>
							<td style="text-align: center;"><p><?php echo $srno; ?></p></td>
							<td><p><?php echo $list['full_name']; ?></p></td>
							<td><p><?php echo $list['email_id']; ?></p></td>
							<td><p><?php echo $list['subject']; ?></p></td>
							<td><p><?php echo $list['message']; ?></p></td>
							<td>
								<a href="javascript:void(0);" onclick="deletecontactlist('<?php echo $list['id'];?>');" class="btn btn-danger btn-circle" alt="Delete" title="Delete">
									<span class="icon text-white-50">
										<i class="fas fa-trash"></i>
									</span>									
								</a>
							</td>
						</tr>
						
					<?php 
						} 
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
function deletecontactlist(id)
{   
    if(confirm("Do you want to Delete Contact?"))
    {
		if(id)
		{
			location.href  = '<?php echo base_url();?>'+'admin/contact_list/delete/id/'+id;
		}		
    }
}
</script>