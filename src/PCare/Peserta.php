<?php

namespace MySundoro\Bpjs\PCare;

class Peserta extends PcareService
{
    protected $feature = 'peserta';

    public function jenisKartu($jenisKartu)
    {
        $this->feature .= "/{$jenisKartu}";
        return $this;
    }

    public function getPesertaByNoka($keyword = null)
    {
        $this->setKeyword($keyword);

        return $this->getPeserta('noka');
    }

    public function getPesertaByNik($keyword = null)
    {
        $this->setKeyword($keyword);

        return $this->getPeserta('nik');
    }

    private function getPeserta(string $jenisKartu)
    {
        $this->setResponse($this->jenisKartu($jenisKartu)->show($this->keyword));

        return $this->response;
    }
}