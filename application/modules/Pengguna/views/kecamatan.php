<option value="0">Pilih KECAMATAN</option>
  <?php foreach ($get_kec as $kec) { ?>
    <option value="<?php echo $kec->kode;?>"><?php echo $kec->nama;?></option>
  <?php }?>
