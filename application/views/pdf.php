<?php ob_start(); ?>







<h4>LAPORAN SURAT MASUK</h4>
<h5>BAGIAN ANGGARAN BPKAD KABUPATEN BLITAR</h5>



            
                <table border="1px">
                  <thead>
                    <tr>
                      <th rowspan="2">No</th>
                      <th rowspan="2">No Agenda</th>
                      <th rowspan="2">No Surat</th>
                      <th rowspan="2">Pengirim</th>
                      <th rowspan="2">Tanggal Surat</th>
                      <th rowspan="2">Tanggal Masuk</th>
                      <th rowspan="2">Perihal</th>
                      <th rowspan="2">Isi Singkat</th>
                      <th rowspan="2">Lampiran</th>
                      <th rowspan="2">Nominal</th>
                      <th class="center" colspan="3">Disposisi</th>
                      <th class="center" colspan="3">Disposisi Kepala BPKAD</th>
                      <th class="center" colspan="3">Disposisi Kepala Bidang Anggaran</th>
                      <th class="center" colspan="3">Tindak Lanjut</th>
                    </tr>
                    <tr>
                      <th class="center">Tanggal</th>
                      <th class="center">Oleh</th>
                      <th class="center">Isi</th>
                      <th class="center">Tanggal</th>
                      <th class="center">Oleh</th>
                      <th class="center">Isi</th>
                      <th class="center">Tanggal</th>
                      <th class="center">Oleh</th>
                      <th class="center">Isi</th>
                      <th class="center">Oleh</th>
                      <th class="center">Tanggal</th>
                      <th class="center">Hasil</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; if (isset($laporan)){foreach($laporan as $row){ ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $row->no_agenda; ?></td>
                      <td><?php echo $row->no_surat; ?></td>
                      <td><?php echo $row->pengirim; ?></td>
                      <td><?php echo $row->tgl_surat; ?></td>
                      <td><?php echo $row->tgl_masuk; ?></td>
                      <td><?php echo $row->perihal; ?></td>
                      <td><?php echo $row->uraian_singkat; ?></td>
                      <td><?php echo $row->upload; ?></td>
                      <td><?php echo $row->nominal; ?></td>
                      <td><?php echo $row->tgl_a; ?></td>
                      <td><?php echo $row->disposisi_a; ?></td>
                      <td><?php echo $row->isi_disposisi_a; ?></td>
                      <td><?php echo $row->tgl_b; ?></td>
                      <td><?php echo $row->disposisi_b; ?></td>
                      <td><?php echo $row->isi_disposisi_b; ?></td>
                      <td><?php echo $row->tgl_c; ?></td>
                      <td><?php echo $row->disposisi_c; ?></td>
                      <td><?php echo $row->isi_disposisi_c; ?></td>
                      <td><?php echo $row->pelaksana; ?></td>
                      <td><?php echo $row->tgl_pelaksana; ?></td>
                      <td><?php echo $row->keterangan; ?></td>
                    </tr>
                    <?php $no++; } } ?>
                  </tbody>
                </table>


<!--HTML2PDF START-->
<?php
$filename="coba.pdf"; //Set Nama File
$content = ob_get_clean();

 try
 {
  $html2pdf = new HTML2PDF('L','A4','fr','UTF-8');
  $html2pdf->writeHTML($content);
  $html2pdf->pdf->includeJS('print(TRUE)');
  $html2pdf->Output($filename);
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>
<!--HTML2PDF END-->

