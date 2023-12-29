<?php

namespace MySundoro\Bpjs\PCare;

use MySundoro\Bpjs\BpjsService;

class PcareService extends BpjsService
{
    protected $response;
    protected $keyword = '';
    protected $offset = 0;
    protected $limit = 10;

    public function __construct($configurations = [])
    {
        parent::__construct($configurations);
    }

    /**
     * Set keyword for pcare.
     *
     * @param string $keyword
     * @return void
     */
    public function setKeyword($keyword)
    {
        if (!is_null($keyword)) {
            $this->keyword = $keyword;
        }
    }

    /**
     * Set offset for pcare.
     *
     * @param integer $offset
     * @return void
     */
    public function setOffset($offset)
    {
        if (!is_null($offset) and is_numeric($offset)) {
            $this->offset = $offset;
        }
    }

    /**
     * Set limit for pcare.
     *
     * @param integer $limit
     * @return void
     */
    public function setLimit($limit)
    {
        if (!is_null($limit) and is_numeric($limit)) {
            $this->limit = $limit;
        }
    }

    protected function setResponse($response)
    {
        $this->response = $response;

        $responseCode = $this->response['metaData']['code'];
        $successCodes = [
            \Illuminate\Http\Response::HTTP_OK,
            \Illuminate\Http\Response::HTTP_CREATED,
        ];

        if (!in_array($responseCode, $successCodes)) {
            throw new \ErrorException($this->response['metaData']['message'], $this->response['metaData']['code']);
        }
    }
}