<?php

namespace MySundoro\Bpjs\PCare;

class Dokter extends PcareService
{
    protected $feature = 'dokter';

    public function getDokter($offset = null, $limit = null)
    {
        $this->setOffset($offset);
        $this->setKeyword($limit);

        $this->setResponse($this->index($this->offset, $this->limit));

        return $this->response;
    }
}