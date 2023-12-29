<?php

namespace MySundoro\Bpjs\PCare;

class Kelompok extends PcareService
{
    protected $feature = 'kelompok';

    public function club($kodeJenisKelompok)
    {
        $this->feature .= "/club/{$kodeJenisKelompok}";
        return $this;
    }

    public function kegiatan($parameter)
    {
        $this->feature .= "/kegiatan/{$parameter}";
        return $this;
    }

    public function peserta($eduId, $nomorKartu = null)
    {
        $this->feature = "/peserta/{$eduId}";
        if ($nomorKartu !== null) {
            $this->feature .= "/{$nomorKartu}";
        }
        return $this;
    }

    public function addKegiatan(Request $request)
    {
        $this->setResponse($this->store($request->all()));

        return $this->response;
    }

    public function addPeserta(Request $request)
    {
        $this->setResponse($this->store($request->all()));

        return $this->response;
    }

    public function deleteKegiatan(string $eduId)
    {
        $this->setResponse(
            $this->destroy($eduId)
        );

        return $this->response;
    }

    public function deletePeserta(string $eduId, string $nomorKartu)
    {
        $this->setResponse(
            $this
                ->eduId($eduId)
                ->nomorKartu($nomorKartu)
                ->destroy()
        );

        return $this->response;
    }
}