<?php
 


$mahasiswa =[
   [   
   "nama" => "Hafiz Nuzula",
  " nrp" => "043040024", 
  "email" => "hnuzula@gmail.com"
   ],
   [   
       "nama" => "budi raharjo",
       " nrp" => "043040121", 
       "email" => "budirrr@gmail.com"
   ] 
 ]; 
   
  
$data = json_encode($mahasiswa);
echo $data;


?>
