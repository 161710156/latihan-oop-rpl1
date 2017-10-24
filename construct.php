<?php

require_once 'identitas.php';

$biodata = new identitas('Salman', 'Bandung', 'XI RPL 1', 'Menikah');
echo "Namanya... ".$biodata->get_nama().'<br>';
echo "Tempat Lahir... ".$biodata->get_tl().'<br>';
echo "Kelas... ".$biodata->get_kelas().'<br>';
echo "Status... ".$biodata->get_status().'<br>';
?>