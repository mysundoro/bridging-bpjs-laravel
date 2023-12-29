<?php

namespace MySundoro\Bpjs\PCare;

class Kesadaran extends PcareService
{
    protected $feature = 'kesadaran';

    public function getKesadaran()
    {
        $this->setResponse($this->index());

        return $this->response;
    }
}