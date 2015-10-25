
<div class="rightpanel">
        

        <ul class="breadcrumbs">
            <div class="container">
                <li><a href="dashboard.html"><i class="fa fa-home"></i></a> Laporan</li>
            </div>
        </ul>
        
        
        <div class="maincontent">
            <div class="maincontentinner">
            
      

            <div class="widgetbox profile-notifications">
                                    <h4 class="widgettitle"><i class="fa fa-search"></i> Pencarian Data Surat Masuk</h4>
                                    <div class="widgetcontent">
                                    <?php echo form_open('laporan/cari',array('class' =>'stdform')); ?>

                            



                                        <p>
                                            <span class="formwraper">
                                                <input type="text" class="input-xxlarge" name="parameter" value="<?php if (isset($this->session->all_userdata()['parameter'])){echo $this->session->all_userdata()['parameter'];} ?>" placeholder="Parameter"/>&nbsp; &nbsp;
                                                <input value="no_agenda" type="radio" checked="checked" name="berdasarkan" /> No Agenda &nbsp; &nbsp;
                                                <input value="no_surat" type="radio" name="berdasarkan" /> No Surat &nbsp; &nbsp;
                                                <input value="pengirim" type="radio" name="berdasarkan" /> Pengirim  &nbsp; &nbsp;
                                                <input value="tgl_surat" type="radio" name="berdasarkan" /> Tanggal Surat &nbsp; &nbsp;
                                                <input value="tgl_masuk" type="radio" name="berdasarkan" /> Tanggal Masuk &nbsp; &nbsp;
                                                <input value="perihal" type="radio" name="berdasarkan" /> Perihal &nbsp; &nbsp;
                                                <button class="btn btn-success"><i class="fa fa-search"></i> Cari</button>
                                            </span>
                                        </p>
                                    </form>
                                    </div>
                                </div>
                
            <?php 
            //if ($this->session->all_userdata()['parameter'] != "")
            if (isset($this->session->all_userdata()['parameter']))
            { 
            ?>
              <a style="color:#fff;" class="btn btn-success" href="<?php echo base_url('laporan/excel'); ?>">Simpan ke Excel</a>
              <a style="color:#fff;" class="btn btn-success" href="<?php echo base_url('laporan/pdf'); ?>">Simpan ke PDF</a>
            <?php
          }
            ?>

            <div style="overflow-x:auto;" class="tabel" id="customers">
            
                <table class="table table-bordered">
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
            </div>
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->