<?php
function getBgColorByCategory($nama_kategori)
{
    if ($nama_kategori == 'Politik') {
        return 'red';
    } elseif ($nama_kategori == 'Kesehatan') {
        return 'green';
    } elseif ($nama_kategori == 'Olahraga') {
        return 'blue';
    } else {
        return 'purple';
    }
}