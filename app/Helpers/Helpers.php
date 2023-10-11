<?php
function rupiahFormat($angka, $prefix = null)
{
    if ($angka == 0 || $angka == null) {
        return "0";
    }

    $rp = $prefix !== null ? $prefix . number_format($angka, 0, ',', '.') : number_format($angka, 0, ',', '.');
    return $rp;
}

// remove rupiah format
function removeRupiah($value)
{
    $rupiah = str_replace('.', '', $value);
    return (int)$rupiah;
}
