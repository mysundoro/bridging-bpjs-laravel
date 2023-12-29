<?php

namespace MySundoro\Bpjs\PCare;

use Illuminate\Http\Request;

class Kunjungan extends PcareService
{
    protected $feature = 'kunjungan';

    public function rujukan($nomorKunjungan)
    {
        $this->feature .= "/rujukan/{$nomorKunjungan}";
        return $this;
    }

    public function riwayat($nomorKartu)
    {
        $this->feature .= "/peserta/{$nomorKartu}";
        return $this;
    }

    public function addKunjungan(Request $request)
    {
        $this->setResponse($this->store($request->all()));

        return $this->response;
    }

    public function editKunjungan(Request $request)
    {
        $this->setResponse($this->update($request->all()));

        return $this->response;
    }

    public function deleteKunjungan(string $noKunjungan)
    {
        $this->setResponse($this->destroy($noKunjungan));

        return $this->response;
    }
}