<?php

namespace GetCandy\Client\Responses;

abstract class AbstractResponse
{
    protected $body = null;
    protected $status = 200;
    protected $failed = false;
    protected $meta = [];

    public function getBody()
    {
        return $this->body;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function hasFailed()
    {
        return $this->failed;
    }

    public function getMeta()
    {
        return $this->meta;
    }
}
