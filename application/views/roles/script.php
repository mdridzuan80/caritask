<script>
	$( document ).ready(function() {
		<?php if($this->session->flashdata('response')) {
				if($this->session->flashdata('response')['status'])
					echo "toastr.info('".$this->session->flashdata('response')['message']."')";
			}
			
		?>
	});
</script>
