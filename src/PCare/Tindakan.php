<?php

namespace MySundoro\Bpjs\PCare;

class Tindakan extends PcareService
{
    protected $feature = 'tindakan';

    public function kodeTkp($kodeTkp)
    {
        $this->feature .= "/kdTkp/{$kodeTkp}";
        return $this;
    }

    public function kunjungan($nomorKunjungan)
    {
        $this->feature .= "/kunjungan/{$nomorKunjungan}";
        return $this;
    }
}