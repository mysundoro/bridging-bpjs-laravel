<?php

namespace MySundoro\Bpjs\PCare;

class Poli extends PcareService
{
    protected $feature = 'poli';

    public function fktp()
    {
        $this->feature .= "/fktp";
        return $this;
    }

    public function getPoli($offset = null, $limit = null)
    {
        $this->setOffset($offset);
        $this->setLimit($limit);

        $this->setResponse($this->fktp()->index($this->offset, $this->limit));

        return $this->response;
    }
}