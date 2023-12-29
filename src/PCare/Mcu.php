<?php

namespace MySundoro\Bpjs\PCare;

class Mcu extends PcareService
{
    protected $feature = 'mcu';

    public function kunjungan($nomorKunjungan)
    {
        $this->feature .= "/kunjungan/{$nomorKunjungan}";
        return $this;
    }
}