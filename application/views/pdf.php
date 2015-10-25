<?php
class PDF extends FPDF
{
	//Page header
	function Header()
	{
                $this->setFont('Arial','',10);
                $this->setFillColor(255,255,255);
                //$this->cell(100,6,"Laporan daftar pegawai gubugkoding.com",0,0,'L',1); 
                $this->cell(100,6,"Printed date : " . date('d/m/Y'),0,1,'R',1); 
                //$this->Image(base_url().'assets/dist/img/user7-128x128.jpg', 10, 25,'20','20','jpeg');
                
                /*
                $this->Ln(12);
                $this->setFont('Arial','',14);
                $this->setFillColor(255,255,255);
                $this->cell(25,6,'',0,0,'C',0); 
                $this->cell(1,6,'Laporan daftar pegawai gubugkoding.com',1,0,'L',1); 
                */

                $this->SetFont('Times','B',12);
                $this->Cell(10,11,'No',1,0,'C');
                $this->Cell(75,11,'MATERI',1,0,'C');
                $this->Cell(30,6,'SKOR',1,0,'C');
                $this->Cell(65,6,'NILAI',1,1,'C');
                $this->SetX(95);
                $this->SetFont('Times','B',11);
                $this->Cell(15,5,'Teori',1,0,'C');
                $this->Cell(15,5,'Praktik',1,0,'C');
                $this->Cell(15,5,'Teori',1,0,'C');
                $this->Cell(15,5,'Praktik',1,0,'C');
                $this->Cell(20,5,'Jumlah',1,0,'C');
                $this->Cell(15,5,'Total',1,1,'C');
                $this->SetFont('Times','',11);
                
                
                $this->Ln(5);
                $this->setFont('Arial','',10);
                $this->setFillColor(230,230,200);
                $this->cell(10,6,'No.',1,0,'C',1);
                $this->cell(105,6,'Nama Lengkap',1,0,'C',1);
                $this->cell(30,6,'No. HP',1,0,'C',1);
                $this->cell(50,6,'Jenis Kelamin',1,1,'C',1);
                
	}
 
	function Content($laporan)
	{
            $ya = 46;
            $rw = 6;
            $no = 1;
                foreach ($laporan as $key) {
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);	
                        $this->cell(10,10,$no,1,0,'L',1);
                        $this->cell(105,10,$key->perihal,1,0,'L',1);
                        $this->cell(30,10,$key->tgl_masuk,1,0,'L',1);
                        $this->cell(50,10,$key->tgl_surat,1,1,'L',1);
                        $ya = $ya + $rw;
                        $no++;
                }            

	}
	function Footer()
	{
		//atur posisi 1.5 cm dari bawah
		$this->SetY(-15);
		//buat garis horizontal
		//$this->Line(10,$this->GetY(),210,$this->GetY());
		//Arial italic 9
		$this->SetFont('Arial','I',9);
        //        $this->Cell(0,10,'copyright gubugkoding.com Semarang ' . date('Y'),0,0,'L');
		//nomor halaman
		$this->Cell(0,10,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
	}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L');
$pdf->Content($laporan);
$pdf->Output();