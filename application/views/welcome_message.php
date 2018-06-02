<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="container">
	<h1><?php echo $page_title; ?></h1>

	<div id="body">
		<table id="datatable" class="table table-bordered table-striped table-hover">
            <thead>
				<tr>
					<th class="text-center">#</th>
					<th class="text-center">Rendering engine</th>
					<th class="text-center">Browser</th>
					<th class="text-center">Platform(s)</th>
					<th class="text-center">Engine version</th>
					<th class="text-center">CSS grade</th>
				</tr>
            </thead>
			<tbody>
			</tbody>
        </table>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
<script>
$(document).ready(function(){
	$('#datatable').dataTable({
		"sPaginationType"	: "bootstrap",
		"bProcessing"		: false,
		"bServerSide"		: true, 
		"iDisplayLength"	:10,
		"aoColumns"			: null,
		"bSort"				: false,
		//"deferRender"		: true,
		"sAjaxSource"		: '<?php echo site_url('welcome/datatable'); ?>',
		"oLanguage": {
			"oPaginate": {
				"sNext": "Selanjutnya",
				"sPrevious": "Sebelumnya",
			},
			"sInfo": "Menampilkan _START_ sampai _END_ dari total _TOTAL_ data",
			"sSearch": "Cari:",
			"sEmptyTable": "Tidak ada data untuk ditampilkan",
			"sInfoEmpty": "Menampilkan 0 sampai 0 dari total 0 data",
			"sLengthMenu": "_MENU_ entri",
		}
	});
})
</script>