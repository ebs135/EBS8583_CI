<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require APPPATH . 'libraries/JAK8583.php';
require APPPATH . 'libraries/EBS8583_CI.php';

class ParseISO extends CI_Controller {
  public function index()
  {
    // the iso message to parse
    $iso	= '0800822000000000000004000000000000000329230539462811301';
    
    // create the EBS8583_CI object
    $jak = new EBS8583_CI();

    // add data
    $jak->addISO($iso);

    // validate the iso message
    $is_valid = $jak->validateISO();

    // if valid...continue to proccess
    if ($is_valid)
    {
      //get parsing result
      echo 'ISO: '. $jak->getISO(). "<br>";
      echo 'MTI: '. $jak->getMTI(). "<br>";
      echo 'Bitmap: '. $jak->getBitmap(). "<br>";
      echo 'BinMap: '. $jak->getBinBitmap(). '<br>';
      echo 'Data Element: <br>';
      foreach ($jak->getData() as $key => $value) {
        echo "DE[" . $key . "] => " . $value . "<br>";
      }
    }
    else
    {
      echo 'ISO Message NOT VALID';
    }
  }
}