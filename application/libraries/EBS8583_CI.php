<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// +------------------------------------------------------------------------+
// | EBS8583_CI.php                                                         |
// +------------------------------------------------------------------------+
// | Copyright (c) ebs135 2019. All rights reserved.                        |
// | Version       0.1                                                      |
// | Last modified 28/03/2019                                               |
// | Web           http://ebs135.my.id                                      |
// +------------------------------------------------------------------------+
// | This program is adapted and have been modified from class JAK8583 by   |
// | kembaren at https://sourceforge.net/projects/jak8583/. The modification|
// | is intended for using it in CodeIgniter's framework environmet.        |
// |                                                                        |
// | This program is free software; you can redistribute it and/or modify   |
// | it under the terms of the GNU General Public License version 2 as      |
// | published by the Free Software Foundation.                             |
// |                                                                        |
// | This program is distributed in the hope that it will be useful,        |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of         |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the          |
// | GNU General Public License for more details.                           |
// |                                                                        |
// | You should have received a copy of the GNU General Public License      |
// | along with this program; if not, write to the                          |
// |   Free Software Foundation, Inc., 59 Temple Place, Suite 330,          |
// |   Boston, MA 02111-1307 USA                                            |
// |                                                                        |
// | Please give credit on sites that use class.upload and submit changes   |
// | of the script so other people can use them as well.                    |
// | This script is free to use, don't abuse.                               |
// +------------------------------------------------------------------------+

class EBS8583_CI {
#region "Properties"
  // +-----------------+
  // Private properties
  // +-----------------+
  // Format Data Element
  private $DE = array(
    1	=> array('b', 64, 0),
    2	=> array('n', 19, 1),
    3	=> array('n', 6, 0),
    4	=> array('n', 12, 0),
    5	=> array('n', 12, 0),
    6	=> array('n', 12, 0),
    7	=> array('n', 10, 0),
    8	=> array('n', 8, 0),
    9	=> array('n', 8, 0),
    10	=> array('n', 8, 0),
    11	=> array('n', 6, 0),
    12	=> array('n', 6, 0),
    13	=> array('n', 4, 0),
    14	=> array('n', 4, 0),
    15	=> array('n', 4, 0),
    16	=> array('n', 4, 0),
    17	=> array('n', 4, 0),
    18	=> array('n', 4, 0),
    19	=> array('n', 3, 0),
    20	=> array('n', 3, 0),
    21	=> array('n', 3, 0),
    22	=> array('n', 3, 0),
    23	=> array('n', 3, 0),
    24	=> array('n', 3, 0),
    25	=> array('n', 2, 0),
    26	=> array('n', 2, 0),
    27	=> array('n', 1, 0),
    28	=> array('x+n', 8, 0),
    29	=> array('x+n', 8, 0),
    30	=> array('x+n', 8, 0),
    31	=> array('x+n', 8, 0),
    32	=> array('n', 11, 1),
    33	=> array('n', 11, 1),
    34	=> array('ns', 28, 1),
    35	=> array('z', 37, 1),
    36	=> array('n', 104, 1),
    37	=> array('an', 12, 0),
    38	=> array('an', 6, 0),
    39	=> array('an', 2, 0),
    40	=> array('an', 3, 0),
    41	=> array('ans', 8, 0),
    42	=> array('ans', 15, 0),
    43	=> array('ans', 40, 0),
    44	=> array('an', 25, 1),
    45	=> array('an', 76, 1),
    46	=> array('an', 999, 1),
    47	=> array('an', 999, 1),
    48	=> array('an', 999, 1),
    49	=> array('an', 3, 0),
    50	=> array('an', 3, 0),
    51	=> array('an', 3, 0),
    52	=> array('b', 64, 0),
    53	=> array('n', 16, 0),
    54	=> array('an', 120, 1),
    55	=> array('ans', 999, 1),
    56	=> array('ans', 999, 1),
    57	=> array('ans', 999, 1),
    58	=> array('ans', 999, 1),
    59	=> array('ans', 99, 1),
    60	=> array('ans', 60, 1),
    61	=> array('ans', 99, 1),
    62	=> array('ans', 999, 1),
    63	=> array('ans', 999, 1),
    64	=> array('b', 64, 0),
    65	=> array('b', 1, 0),
    66	=> array('n', 1, 0),
    67	=> array('n', 2, 0),
    68	=> array('n', 3, 0),
    69	=> array('n', 3, 0),
    70	=> array('n', 3, 0),
    71	=> array('n', 4, 0),
    72	=> array('n', 4, 0),
    73	=> array('n', 6, 0),
    74	=> array('n', 10, 0),
    75	=> array('n', 10, 0),
    76	=> array('n', 10, 0),
    77	=> array('n', 10, 0),
    78	=> array('n', 10, 0),
    79	=> array('n', 10, 0),
    80	=> array('n', 10, 0),
    81	=> array('n', 10, 0),
    82	=> array('n', 12, 0),
    83	=> array('n', 12, 0),
    84	=> array('n', 12, 0),
    85	=> array('n', 12, 0),
    86	=> array('n', 16, 0),
    87	=> array('n', 16, 0),
    88	=> array('n', 16, 0),
    89	=> array('n', 16, 0),
    90	=> array('n', 42, 0),
    91	=> array('an', 1, 0),
    92	=> array('an', 2, 0),
    93	=> array('an', 5, 0),
    94	=> array('an', 7, 0),
    95	=> array('an', 42, 0),
    96	=> array('b', 64, 0),
    97	=> array('x+n', 16, 0),
    98	=> array('ans', 25, 0),
    99	=> array('n', 11, 1),
    100	=> array('n', 11, 1),
    101	=> array('ans', 17, 1),
    102	=> array('ans', 28, 1),
    103	=> array('ans', 28, 1),
    104	=> array('ans', 100, 1),
    105	=> array('ans', 999, 1),
    106	=> array('ans', 999, 1),
    107	=> array('ans', 999, 1),
    108	=> array('ans', 999, 1),
    109	=> array('ans', 999, 1),
    110	=> array('ans', 999, 1),
    111	=> array('ans', 999, 1),
    112	=> array('ans', 999, 1),
    113	=> array('n', 11, 1),
    114	=> array('ans', 999, 1),
    115	=> array('ans', 999, 1),
    116	=> array('ans', 999, 1),
    117	=> array('ans', 999, 1),
    118	=> array('ans', 999, 1),
    119	=> array('ans', 999, 1),
    120	=> array('ans', 999, 1),
    121	=> array('ans', 999, 1),
    122	=> array('ans', 999, 1),
    123	=> array('ans', 999, 1),
    124	=> array('ans', 999, 1),
    125	=> array('ans', 999, 1),
    126	=> array('ans', 999, 1),
    127	=> array('ans', 999, 1),
    128	=> array('b', 64, 0)
  );
  // MTI
  private $_mti;
  // Bitmap
  private $_hexBitmap;
  private $_binBitmap;
  // Data Element
  private $_de;
  // ISO Message
  private $_iso;
  // Validity
  private $_valid;
#endregion
  // +-----------------+
  // Class constructor
  // +-----------------+
  function __construct()
  {
    // Inisiate private variable
    $_mti = '';
    $_hexBitmap = '';
    $_binBitmap = '';
    $_de = array();
    $_iso = '';
    $_valid = array();
  }
#region "ISO Builder"
  // +-----------------+
  // ISO Builder
  // +-----------------+
  // Public method
  // +-----------------+
  // Add MTI
  public function addMTI($MTI)
  {
    if (strlen($MTI) == 4 && ctype_digit($MTI))
    {
      // Save MTI
      $this->_mti = $MTI;
    }
  }
  // Add data elemen
  public function addData($bit, $data)
  {
    if ($bit > 1 && $bit <= 128)
    {
      $this->_de[$bit] = $this->_buildElement($this->DE[$bit], $data);
      ksort($this->_de);
      $this->_calculateBitmap();
      // Build ISO Message
      $this->_iso = $this->_mti . $this->_hexBitmap . implode($this->_de);
    }
  }
  // Get formatted ISO Message
  public function getISO()
  {
    return $this->_iso;
  }
  // Get Bitmap
  public function getBitmap()
  {
    return $this->_hexBitmap;
  }
  // Get array Data Element
  public function getData()
  {
    return $this->_de;
  }
  // Get MTI
  public function getMTI()
  {
    return $this->_mti;
  }
#region "Private Builder method"
  // +-----------------+
  // Private method
  // +-----------------+
  private function _buildElement($format_de, $data)
  {
    // Result container
    $result = '';

    // Numeric value
    if ($format_de[0] == 'n' && is_numeric($data) && strlen($data) <= $format_de[1])
    {
      $data = str_replace(".", "", $data);
      // Fixed length
      if ($format_de[2] == 0)
      {
        $result	= sprintf("%0". $format_de[1] ."s", $data);
      }
      // Dynamic length
      else 
      {
        if (strlen($data) <= $format_de[1]) 
        {                
          $result	= sprintf("%0". strlen($format_de[1])."d", strlen($data)). $data;
        }
      }
    }

    // Alpha value
    if ($format_de[0] == 'a' && ctype_alpha($data) && strlen($data) <= $format_de[1] ||
        $format_de[0] == 'an' && ctype_alnum($data) && strlen($data) <= $format_de[1] ||
        $format_de[0] == 'z' && strlen($data) <= $format_de[1] ||
        $format_de[0] == 'ans' && strlen($data) <= $format_de[1])
    {
      // Fixed length
      if ($format_de[2] == 0)
      {
        $result	= sprintf("% ". $format_de[1] ."s", $data);
      }
      // Dynamic length
      else
      {
        if (strlen($data) <= $format_de[1])
        {
          $result	= sprintf("%0". strlen($format_de[1])."s", strlen($data)). $data;
        }
      }
    }

    // Bit value
    if ($format_de[0] == 'b' && strlen($data) <= $format_de[1])
    {
      // Fixed length
      if ($format_de[2] == '0')
      {
        $temp = sprintf('%0' . $format_de[1] . "d, $data");
        while ($temp != '')
        {
          $result .= base_convert(substr($temp, 0, 4), 2, 16);
          $temp = substr($temp, 4, strlen($temp)-4);
        }
      }
    }

    // Return result
    return $result;
  }
  private function _calculateBitmap()
  {
    // Variable temp
    $primaryBitmap = sprintf("%064d", 0);
    $secondaryBitmap = sprintf("%064d", 0);
    foreach ($this->_de as $key => $value) {
      if ($key < 65)
      {
        $primaryBitmap[$key - 1] = 1;
      }
      else
      {
        $primaryBitmap[0] = 1;
        $secondaryBitmap[$key - 65] = 1;
      }
    }

    $result = "";
    if ($primaryBitmap[0] == 1)
    {
      while ($secondaryBitmap != '')
      {
        $result .= base_convert(substr($secondaryBitmap, 0, 4), 2, 16);
        $secondaryBitmap = substr($secondaryBitmap, 4, strlen($secondaryBitmap)-4);
      }
    }

    $main = "";
    while ($primaryBitmap != '')
    {
      $main .= base_convert(substr($primaryBitmap, 0, 4), 2, 16);
      $primaryBitmap = substr($primaryBitmap, 4, strlen($primaryBitmap)-4);
    }
    $this->_hexBitmap = strtoupper($main . $result);

    return $this->_hexBitmap;
  }
  private function _clearData()
  {
    $_mti = '';
    $_hexBitmap = '';
    $_binBitmap = '';
    $_de = array();
    $_iso = '';
  }
#endregion
#endregion
#region "ISO Parser"
  // +-----------------+
  // ISO Parser
  // +-----------------+
  // Public method
  // +-----------------+
  // Add ISO into class
  public function addISO($isoMessage)
  {
    // Clear private property class
    $this->_clearData();
    if ($isoMessage != '')
    {
      // Insert the isoMessage
      $this->_iso = $isoMessage;
      // Now, distribute the isoMessage
      // to other properties respectively
      $this->_parseMTI();
      $this->_parseHexBitmap();
      $this->_parseDE();
    }
  }
  // Get binary Bitmap
  public function getBinBitmap()
  {
    return $this->_binBitmap;
  }
#region "Private Parser method"
  // +-----------------+
  // Private method
  // +-----------------+
#region "Parse MTI"
  private function _parseMTI()
  {
    $this->_valid['mti'] = false;
    $this->addMTI(substr($this->_iso, 0, 4));
    if (strlen($this->_mti) == 4 && (
        $this->_mti[1] == 1 ||
        $this->_mti[1] == 2 ||
        $this->_mti[1] == 3 ||
        $this->_mti[1] == 4 ||
        $this->_mti[1] == 5 ||
        $this->_mti[1] == 8
        ))
    {
      $this->_valid['mti'] = true;
    }
  }
#endregion
#region "Parse Bitmap (hex)"
  private function _parseHexBitmap()
  {
    $fullBitmap = substr($this->_iso, 4, 32);
    // Parse to Binary Bitmap first...
    $this->_parseBinBitmap($fullBitmap);
    // ... then save to Hexa Bitmap
    if ($this->_binBitmap[0] == 1)
    {
      $this->_hexBitmap = $fullBitmap;
    }
    else
    {
      $this->_hexBitmap = substr($fullBitmap, 0, 16);
    }
  }
#endregion
#region "Parse Bitmap (bin)"
  private function _parseBinBitmap($hexBitmap)
  {
    $this->_valid['bitmap'] = false;
    $primary = '';
    $secondary = '';

    if (strlen($hexBitmap) >= 16)
    {
      for ($i = 0; $i < 16; $i++)
      {
        $primary .= sprintf("%04d", base_convert($hexBitmap[$i], 16, 2));
        $this->_valid['bitmap'] = true;
      }

      if ($primary[0] == 1 && strlen($hexBitmap) >= 32)
      {
        for ($i = 16; $i < 32; $i++)
        {
          $secondary .= sprintf("%04d", base_convert($hexBitmap[$i], 16, 2));
        }
        $this->_valid['bitmap'] = true;
      }
    }

    // Merge the primary and secondary bitmap and
    // insert the value to Binary Bitmap property
    $this->_binBitmap = $primary . $secondary;
  }
#endregion
#region "Parse Data Element
  private function _parseDE()
  {
    $this->_valid['de'] = 'true';
    // Temp iso de
    $de = '';
    // If there is secondary bitmap
    if ($this->_binBitmap[0] == 1)
    {
      $de = substr($this->_iso, (4 + 32), (strlen($this->_iso) - 4 - 32));
    }
    // If there is only primary bitmap
    else
    {
      $de = substr($this->_iso, (4 + 16), (strlen($this->_iso) - 4 - 16));
    }
    // Scan Data Element according to binary bitmap
    // Skip first bitmap
    for ($i = 1; $i < strlen($this->_binBitmap); $i++)
    {
      // Read the bitmap
      $bit = substr($this->_binBitmap, $i, 1);
      // Check if there is ada data in that #bit, save it
      if ($bit == 1)
      {
        $this->_valid['data'][($i + 1)] = false;
        // Not binary value
        if ($this->DE[($i + 1)][0] != 'b')
        {
          // Fixed length
          if ($this->DE[($i + 1)][2] == 0)
          {
            $tempDE = substr($de, 0, $this->DE[($i + 1)][1]);
            if (strlen($tempDE) == $this->DE[($i + 1)][1])
            {
              // If numeric value
              if ($this->DE[($i + 1)][0] == 'n')
              {
                $this->_de[($i + 1)] = $tempDE;
              }
              else
              {
                $this->_de[($i + 1)] = ltrim($tempDE);
              }
              $this->_valid['data'][($i + 1)] = true;
              // Cut the data element string that's been used
              $de = substr($de, $this->DE[($i + 1)][1], strlen($de) - $this->DE[($i + 1)][1]);
            }
            else
            {
              $this->_valid['data'][($i + 1)] = false;              
            }
          }
          // Dynamic length
          else
          {
            $len = strlen($this->DE[($i + 1)][1]);
            $tempLength = substr($de, 0, $len);
            if (strlen($tempLength) == $len)
            {
              $num = (integer) $tempLength;
              $de = substr($de, $len, strlen($de) - $len);

              $tempDE = substr($de, 0, $num);
              if (strlen($tempDE) == $num)
              {
                // If numeric value
                if ($this->DE[($i + 1)][0] == 'n')
                {
                  $this->_de[($i + 1)] = (double) $tempDE;
                }
                else
                {
                  $this->_de[($i + 1)] = ltrim($tempDE);
                }
                $this->_valid['data'][($i + 1)] = true;
                // Cut the data element string that's been used
                $de = substr($de, $num, strlen($de) - $num);
              }
              else
              {
                $this->_valid['data'][($i + 1)] = false;
              }
            }
            else
            {
              $this->_valid['data'][($i + 1)] = false;
            }
          }
        }
        if (!$this->_valid['data'][($i + 1)])
        $this->_valid['de'] = false;  
      }     
    }

    return $this->_de;
  }
#region "Validate ISO Message format
  public function validateISO()
  {
    return $this->_valid['mti'] && $this->_valid['bitmap'] && $this->_valid['de'];
  }
#endregion
#endregion
  // +-----------------+
#endregion
#endregion
}