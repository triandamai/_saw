<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of My_Controller
 *
 * @author zaenur
 */
class My_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    protected function tgl_indo($tanggal) {
        $bulan = array(
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );

        $pecahkan = explode('-', $tanggal);
        return $pecahkan[0] . '-' . $bulan[(int) $pecahkan[1]] . '-' . $pecahkan[2];
    }

    protected function exportPDFL($view, $data, $fname) {

        $tgl = $this->tgl_indo(date('d-m-Y'));
        ini_set('memory_limit', '256M');
        $this->load->library('pdf');
        date_default_timezone_set('Asia/Jakarta');
        $t = date('G:i:s');
        $this->pdf->set_paper("A4", "landscape");
        $this->pdf->load_view($view, $data);
        $this->pdf->render();
        $canvas = $this->pdf->get_canvas();
        $font = Font_Metrics::get_font("Courier new", "bold");
        $d = date('d F Y');
        $canvas->page_text(25, 540, "___________________________________________________________________________________________________________________________________", $font, 10, array(0, 0, 0));
        $canvas->page_text(25, 540, "___________________________________________________________________________________________________________________________________", $font, 10, array(0, 0, 0));
        $canvas->page_text(27, 540, "___________________________________________________________________________________________________________________________________", $font, 10, array(0, 0, 0));
        $canvas->page_text(27, 540, "___________________________________________________________________________________________________________________________________", $font, 10, array(0, 0, 0));
        $canvas->page_text(30, 560, "Tanggal Cetak : $d, $t", $font, 10, array(0, 0, 0));
        $canvas->page_text(700, 560, " Halaman: {PAGE_NUM} dari {PAGE_COUNT}", $font, 10, array(0, 0, 0));
        $filename = $fname . "_" . $tgl . "_" . $t;
        $this->pdf->stream($filename . '.pdf', ["Attachment" => 0]);
    }

    protected function exportPDFP($view, $data) {

        $tgl = $this->tgl_indo(date('d-m-Y'));
        ini_set('memory_limit', '256M');
        $this->load->library('pdf');
        date_default_timezone_set('Asia/Jakarta');

        $t = date('G:i:s', time() - 3600);
        $this->pdf->set_paper("A4", "portrait");
        $this->pdf->load_view($view, $data);
        $this->pdf->render();
        $canvas = $this->pdf->get_canvas();
        $font = Font_Metrics::get_font("Courier new", "bold");
        $d = date('d F Y');
        $canvas->page_text(25, 770, "_____________________________________________", $font, 20, array(0, 0, 0));
        $canvas->page_text(30, 800, "Tanggal Cetak : $d, $t", $font, 10, array(0, 0, 0));
        $canvas->page_text(455, 800, " Halaman: {PAGE_NUM} dari {PAGE_COUNT}", $font, 10, array(0, 0, 0));
        $filename = "Nilai_" . $tgl . "_" . $t;
        $this->pdf->stream($filename . '.pdf', ["Attachment" => 0]);
    }

}
