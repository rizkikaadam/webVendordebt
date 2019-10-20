<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//menyisipkan file script disini
require_once dirname(__FILE__).'/tcpdf/tcpdf.php';
class Pdf_report extends TCPDF
{
    protected $ci;

    public function __construct()
    {
        //$this->ci -& get_instance();
    }
    
}
