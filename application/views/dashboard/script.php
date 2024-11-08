<script>
	$(document).ready(function() {
		$(".btn-accept").on('click', function(event) {
			event.preventDefault();

			if (confirm("Are you sure to accept this task?")) {
				$.ajax({
					type: "POST",
					url: '<?= site_url('tasks/accept')?>',
					data: {
						'taskid': $(this).data('taskid')
					},
					success: function(data, textStatus, jqXHR) {
						location.reload();
					},
				});
			}
		});
	});
</script>
