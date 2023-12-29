<?php

namespace MySundoro\Bpjs\PCare;

class Obat extends PcareService
{
    protected $feature = 'obat';

    public function dpho($keyword)
    {
        $this->feature .= "/dpho/{$keyword}";
        return $this;
    }

    public function kunjungan($nomorKunjungan)
    {
        $this->feature .= "/kunjungan/{$nomorKunjungan}";
        return $this;
    }
}