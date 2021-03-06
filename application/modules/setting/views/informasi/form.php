<div class="row">
	<div class="col-md-12">
		<div id="message"></div>
		<div class="box box-primary box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?= isset($head) ? $head : ''; ?></h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<form id="formID" role="form" action="" method="post">
			<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
			<!-- box-body -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('judul') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Judul','judul');
							$data = array('class'=>'form-control','name'=>'judul','id'=>'judul','type'=>'text','value'=>set_value('judul', $record->judul));
							echo form_input($data);
							echo form_error('judul') ? form_error('judul', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('informasi') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Informasi','informasi');
							?>
							<textarea class='form-control' name='informasi' id='informasi'><?= set_value('informasi', $record->informasi); ?></textarea>
							<?
							echo form_error('informasi') ? form_error('informasi', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('tanggal') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Tanggal','tanggal');
							$data = array('class'=>'form-control','name'=>'tanggal','id'=>'tanggal','type'=>'text','value'=>set_value('tanggal', ddmmyyyy($record->tanggal)));
							echo form_input($data);
							echo form_error('tanggal') ? form_error('tanggal', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
				</div>
			</div>
			<!-- ./box-body -->
			<div class="box-footer">
				<button type="button" class="btn btn-sm btn-flat btn-success" onclick="save()"><i class="fa fa-save"></i> Simpan</button>
				<button type="button" class="btn btn-sm btn-flat btn-info" onclick="saveout();"><i class="fa fa-save"></i> Simpan & Keluar</button>
				<button type="reset" class="btn btn-sm btn-flat btn-warning"><i class="fa fa-refresh"></i> Reset</button>
				<button type="button" class="btn btn-sm btn-flat btn-danger" onclick="back();"><i class="fa fa-close"></i> Keluar</button>
			</div>
			</form>
		</div>
	</div>
</div>