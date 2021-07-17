<?php
function DNA_strand($dna) {
  if ( strlen($dna) < 1 ) {
    return false;
  }
  else {
    $dna = strtr($dna, array(
      "T"=>"A",
      "A"=>"T",
      "C"=>"G",
      "G"=>"C",
   ));
  }
  return $dna;
}

?>