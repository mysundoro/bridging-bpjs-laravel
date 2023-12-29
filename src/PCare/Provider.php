<?php

namespace MySundoro\Bpjs\PCare;

class Provider extends PcareService
{
    protected $feature = 'provider';

    public function getProvider($offset = null, $limit = null)
    {
        $this->setOffset($offset);
        $this->setLimit($limit);

        $this->setResponse($this->index($this->offset, $this->limit));

        return $this->response;
    }
}