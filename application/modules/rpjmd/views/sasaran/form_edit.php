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
			<input type="hidden" name="periode_idx" id="periode_idx" value="<?= set_value('periode_id', $record->periode_id)  ?>" />
			<input type="hidden" name="visi_idx" id="visi_idx" value="<?= set_value('visi_idx', $record->visi_id)  ?>" />
			<input type="hidden" name="misi_idx" id="misi_idx" value="<?= set_value('misi_idx', $record->misi_id)  ?>" />
			<input type="hidden" name="tujuan_idx" id="tujuan_idx" value="<?= set_value('tujuan_idx', $record->tujuan_id)  ?>" />
			<!-- box-body -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('periode_id') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Periode RPJMD','periode_id');
							$selected = set_value('periode_id', $record->periode_id);
							echo form_dropdown('periode_id', $periode, $selected, "class='form-control select2' name='periode_id' id='periode_id'");
							echo form_error('periode_id') ? form_error('periode_id', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('visi_id') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Visi RPJMD','visi_id');
							echo form_dropdown('visi_id', array(''=>'Pilih Visi RPJMD'), '', "class='form-control select2' name='visi_id' id='visi_id'");
							echo form_error('visi_id') ? form_error('visi_id', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('misi_id') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Misi RPJMD','misi_id');
							echo form_dropdown('misi_id', array(''=>'Pilih Misi RPJMD'), '', "class='form-control select2' name='misi_id' id='misi_id'");
							echo form_error('misi_id') ? form_error('misi_id', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('tujuan_id') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Tujuan Misi RPJMD','tujuan_id');
							echo form_dropdown('tujuan_id', array(''=>'Pilih Tujuan Misi RPJMD'), '', "class='form-control select2' name='tujuan_id' id='tujuan_id'");
							echo form_error('tujuan_id') ? form_error('tujuan_id', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('sasaran') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Sasaran Tujuan Misi RPJMD','sasaran');
							$data = array('class'=>'form-control','name'=>'sasaran','id'=>'sasaran','type'=>'text','value'=>set_value('sasaran', $record->sasaran));
							echo form_input($data);
							echo form_error('sasaran') ? form_error('sasaran', '<p class="help-block">','</p>') : '';
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