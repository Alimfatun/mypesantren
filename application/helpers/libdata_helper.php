<?php

// Format tangal ke dd-mm-yyyy
function date_to_id($tanggal)
{
    $tgl = date('d-m-Y', strtotime($tanggal));
    if ($tgl == '01-01-1970') {
        return '';
    } else {
        return $tgl;
    }
}

//kode anggota
function nong($data) {
  if($data==0){
    $n = "A";  $a = 1;
    return $data = $n.$a.date('m').date('Y');
  } else {
    $n = "A"; $a = $data+1;
    return $data = $n.$a.date('m').date('Y');
    }
}

//kode simpan
function nosm($data) {
  if($data==0){
    $n = "S";  $a = 1;
    return $data = $n.$a.date('m').date('Y');
  } else {
    $n = "S"; $a = $data+1;
    return $data = $n.$a.date('m').date('Y');
  }

}

//kode saldo simpan
function nosl($data) {
  if($data==0){
    $n = "SL";  $a = 1;
    return $data = $n.$a.date('m').date('Y');
  } else {
    $n = "SL"; $a = $data+1;
    return $data = $n.$a.date('m').date('Y');
  }
}

//kode pinjaman
function nopn($data) {
  if($data==0){
    $n = "P";  $a = 1;
    return $data = $n.$a.date('m').date('Y');
  } else {
    $n = "P"; $a = $data+1;
    return $data = $n.$a.date('m').date('Y');
  }
}

//kode saldo pinjaman
function nopl($data) {
  if($data==0){
    $n = "PL";  $a = 1;
    return $data = $n.$a.date('m').date('Y');
  } else {
    $n = "PL"; $a = $data+1;
    return $data = $n.$a.date('m').date('Y');
  }
}

function format_rp($rp)
{
    return number_format($rp, 2, ',', '.' );
}

function gender($kelamin)
{
    if ($kelamin == '1') {
        return 'Laki-laki';
    } else {
        return 'Perempuan';
    }
}

function status($status)
{
    if ($status == '11') {
        return 'PNS';
    } else {
        return 'Honerer';
    }
}

function simpn($data)
{
    if ($data == '11') {
        return 'Simpanan Pokok';
    } else if($data == '12') {
        return 'Simpanan Hari Raya';
    } else if($data == '13') {
        return 'Simpanan Sukarela';
    }
}

function simp($data)
{
    if ($data == '11') {
        return 100000;
    } else {
        return 75000;
    }
}

function pinjm($data)
{
    if ($data == '21') {
        return 'Pinjaman Umum';
    } else if($data == '22') {
        return 'Pinjaman Instidental';
    }
}

function tempo($data) {
  if($data<5000000) {
   return 20;
  } else if($data<=10000000) {
  return 30;
  } else if($data>10000000) {
  return 40;
  }
}

function jlap($data) {
 if($data=='1') {
   return 'Data Anggota';
 } else if($data=='2') {
   return 'Data Pinjaman';
 } else if($data=='3') {
   return 'Data Simpanan';
 }
}

function convert ($data) {
  if($data==1) { return 'I';} else if($data==2) {return 'II';} else if($data==3) { return 'III';}
  else if($data==4) {return 'IV';} else if($data==5) {return 'V';} else if($data==6) {return 'VI';}
  else if($data==7) {return 'VII';} else if($data==8) {return 'VIII';} else if($data==9) {return 'IX';}
  else if($data==10) {return 'X';} else if($data==11) {return 'XI';} else if($data==12) {return 'XII';}
}


function kelas($data) {
  if($data==4) {
    return 'kelas 3, 4 SD / MI';
  } else if($data==5) {
    return 'kelas 5 SD / MI';
  } else if($data==6) {
    return 'kelas 6 SD / MI';
  } else if($data==7) {
    return 'kelas 7 SMP /MTs';
  } else if($data==8) {
    return 'kelas 8 SMP /MTs';
  } else if($data==9) {
    return 'kelas 9 SMP /MTs';
  } else if($data==10) {
    return 'kelas 10 SMA /MA';
  } else if($data==11) {
    return 'kelas 11 SMA /MA';
  } else if($data==12) {
    return 'kelas 12 SMA /MA';
  }

}

function aktif($data) {
  if($data==11) {
    return 'Akftif';
  } else {
    return 'Cuti';  
  }
}