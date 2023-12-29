<?php

namespace MySundoro\Bpjs\PCare;

class StatusPulang extends PcareService
{
    protected $feature = 'statuspulang';
    private $status = 'true';

    public function rawatInap(bool $status = true)
    {
        if ($status === true) {
            $this->status = 'true';
        } else {
            $this->status = 'false';
        }

        $this->feature .= "/rawatInap/{$this->status}";
        
        return $this;
    }

    public function getStatusPulang(bool $status)
    {
        $this->setResponse($this->rawatInap($status)->index());

        return $this->response;
    }

    public function getStatusPulangRawatInap()
    {
        return $this->getStatusPulang(true);
    }

    public function getStatusPulangRawatJalan()
    {
        return $this->getStatusPulang(false);
    }
}