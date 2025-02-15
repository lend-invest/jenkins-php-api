<?php

namespace JenkinsApi\Exceptions;

class JobNotFoundException extends JenkinsApiException
{
    public function __construct($jobname, $code = 404, \Exception $previous = null)
    {
        parent::__construct(sprintf("Job '%s' not found", $jobname), $code, $previous);
    }
}
