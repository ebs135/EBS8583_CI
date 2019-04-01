<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/EBS8583_CI.php';

class BuildISO extends CI_Controller {
  public function index()
  {
    // $jak	= new JAK8583();
    $jak = new EBS8583_CI();

    //add data
    $jak->addMTI('0800');
    $jak->addData(7, date("mdHis"));
    $jak->addData(11, rand(1000, 999999));
    $jak->addData(70, '301');
    
    //get iso string
    echo 'ISO Message => ' . $jak->getISO() . '<br>';
    echo 'Bitmap => ' . $jak->getBitmap() . '<br>';
    echo 'MTI => ' . $jak->getMTI() . '<br>';
    echo 'Data Element: <br>';
    foreach ($jak->getData() as $key => $value) {
      echo "DE[" . $key . "] => " . $value . "<br>";
    }
  }
}