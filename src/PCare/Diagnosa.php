<?php

namespace MySundoro\Bpjs\PCare;

class Diagnosa extends PcareService
{
    protected $feature = 'diagnosa';

    public function getDiagnosa($keyword = null, $offset = null, $limit = null)
    {
        $this->setKeyword($keyword);
        $this->setOffset($offset);
        $this->setLimit($limit);

        $this->setResponse($this->keyword($this->keyword)->index($this->offset, $this->limit));

        return $this->response;
    }
}