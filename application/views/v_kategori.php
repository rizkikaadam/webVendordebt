<!DOCTYPE html>
<html>
<head>
	<title>Select berhubungan dengan codeigniter dan ajax</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
	<br/>
	<div class="col-md-6 col-md-offset-3">
		<div class="thumbnail">
			<h4><center>Membuat Select berhubungan dengan codeigiter</center></h4><hr/>
			<form class="form-horizontal">
				<div class="form-group">
	                <label class="control-label col-md-3">Kategori</label>
	                <div class="col-md-8">
	                    <select name="id_invoice" id="id_invoice" class="form-control">
	                    	<option value="0">-PILIH-</option>
	                    	<?php foreach($data->result() as $row):?>
	                    		<option value="<?php echo $row->id_invoice;?>"><?php echo $row->kd_invoice;?></option>
	                    	<?php endforeach;?>
	                    </select>
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="control-label col-md-3">Sub Kategori</label>
	                <div class="col-md-8">
	                    <select name="subkategori" class="subkategori form-control">
	                    	<option value="0">-PILIH-</option>
	                    </select>
	                </div>
	                <div class="coba col-md-8"> <!-- nama class tempat dimana nanti menampilkan data --> 
	                    
	                </div>
	            </div>
			</form>
			<hr/>
			<p style="text-align: center;">Powered by <a href="">mfikri.com</a></p>
		</div>
	</div>
	