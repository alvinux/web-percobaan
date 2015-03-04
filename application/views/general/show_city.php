<div class="form-group">
    <label for="inputProvinsi" class="col-md-4 control-label">Kabupaten / Kota</label>
    <div class="col-md-6">
        <!-- #kabupaten digunakan untuk menampilkan #kecamatan melalui ajax -->
        <select name="kabupaten" id="inputkabupaten" class="form-control">
            <?php foreach ($kab_kota as $row) { ?>
            <option value="<?php echo $row->id_kab_kota; ?>"><?php echo $row->kab_kota; ?></option>
            <?php } ?>
        </select>
    </div>
    <label class="col-md-4 control-label text-danger"><?php echo form_error('kabupaten'); ?></label>
</div>