
<?php 
if ($participants != array()) { ?>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/DataTables/datatables.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/DataTables/buttons.dataTables.min.css">
<script type="text/javascript" src="<?=base_url()?>assets/DataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/DataTables/jszip.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/DataTables/pdfmake.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/DataTables/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/DataTables/vfs_fonts.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/DataTables/dataTables.buttons.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#kategori').DataTable({
      dom: 'Bfrtip',
        buttons: [
            $.extend( true, {}, {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7]
                }
            } ),
            $.extend( true, {}, {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7]
                }
            } ),
            $.extend( true, {}, {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7]
                }
            } )
        ]
    });
} );
</script>

<section id="portfolio" class="home-section bg-gray">
    <div class="container">
      <?=$this->session->flashdata('category')?>
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading text-center">
            <h2><?=$participants[0]->cabor_induk?></h2>
            <div class="heading-line"></div>
            <p>Berikut ini daftar peserta pada Porkab Malang VII.</p>
          </div>
        </div>
      </div>
      <div class="row">
<table id="kategori" class="table table-striped table-bordered" style="width:100%">
<thead>
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tempat Tanggal Lahir</th>
        <th>Email</th>
        <th>No Hp</th>
        <th>Kecamatan</th>
        <th>Kelas Cabang Olahraga 1</th>
        <th>Kelas Cabang Olahraga 2</th>
        <th width="116">Action</th>
    </tr>
</thead>
<tbody>
<?php
  foreach ($participants as $key => $value) { ?>
    <tr>
      <td><?=$value->nama?></td>
      <td><?=$value->alamat?></td>
      <td><?=$value->tempat_lahir?>, <?=$value->tanggal_lahir?></td>
      <td><?=$value->email?></td>
      <td><?=$value->no_tlp?></td>
      <td><?=$value->kecamatan?></td>
      <td><?=$value->cabor_induk." ".($value->cabor_jenis != NULL ? $value->cabor_jenis : '')." ".($value->cabor_kelas != NULL ? $value->cabor_kelas : '')." ".($value->cabor_keterangan!=NULL ? $value->cabor_keterangan : '')?></td>
      <td><?=$value->cabor_induk." ".$value->cabor2_jenis." ".$value->cabor2_kelas." ".$value->cabor2_keterangan?></td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
          <a href="<?=base_url()?>edit/<?=$value->id?>" role="button" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
          <a href="<?=base_url()?>hapus/<?=$this->input->get('q')?>/<?=$value->id?>" role="button" class="btn btn-sm btn-warning"><i class="fa fa-trash"></i> Hapus</a>
        </div>
      </td>
    </tr>
  <?php }
?>
</tbody>
</table>
</div>
</div>
</section>
<?php }else{?>
<section id="portfolio" class="home-section bg-gray">
    <div class="container">
      <?=$this->session->flashdata('category')?>
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading text-center">
            <h2>Tidak ditemukan partisipan untuk cabang <?=$this->input->get('q')?></h2>
            <div class="heading-line"></div>
            <p>Coba cari cabang lain</p>
          </div>
        </div>
      </div>
    </div>
</section>
<?php } ?>