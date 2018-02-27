<?php

namespace GetCandy\Client\Jobs\Auth;

use GetCandy\Client\AbstractJob;
use GetCandy\Client\Request;
use Config;
use Session;
use Carbon\Carbon;

class ForgottenPassword extends AbstractJob
{

    protected function setup()
    {
        $action = 'api/v1/password/reset/request';

        if (is_string($this->params)) {
            $action .= '/' . $this->params;
        }

        $this->addRequest('auth-forgotten-password', new Request($action, 'POST', $this->params));
    }

}
