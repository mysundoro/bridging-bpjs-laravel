<?php

namespace MySundoro\Bpjs\PCare;

use Illuminate\Http\Request;

class Pendaftaran extends PcareService
{
    protected $feature = 'pendaftaran';

    public function peserta($nomorKartu)
    {
        $this->feature .= "/peserta/{$nomorKartu}";
        return $this;
    }

    public function tanggalDaftar($tanggalDaftar)
    {
        $this->feature .= "/tglDaftar/{$tanggalDaftar}";
        return $this;
    }

    public function nomorUrut($nomorUrut)
    {
        $this->feature .= "/noUrut/{$nomorUrut}";
        return $this;
    }

    public function kodePoli($kodePoli)
    {
        $this->feature .= "/kdPoli/{$kodePoli}";
        return $this;
    }

    public function addPendaftaran(Request $request)
    {
        $this->setResponse($this->store($request->all()));

        return $this->response;
    }

    public function deletePendaftaran(string $nomorKartu, string $tanggalDaftar, string $nomorUrut, string $kodePoli)
    {
        $this->setResponse(
            $this
                ->peserta($nomorKartu)
                ->tanggalDaftar($tanggalDaftar)
                ->nomorUrut($nomorUrut)
                ->kodePoli($kodePoli)
                ->destroy()
        );

        return $this->response;
    }

    public function getPendaftaranProvider(string $date, int $offset, int $limit)
    {
        $this->setResponse($this->tanggalDaftar($date)->index($offset, $limit));

        return $this->response;
    }
}