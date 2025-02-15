<?php

namespace JenkinsApi\Exceptions;

class NodeNotFoundException extends JenkinsApiException
{
    public function __construct($nodeName, $code = 404, \Exception $previous = null)
    {
        parent::__construct(sprintf("Node '%s' not found", $nodeName), $code, $previous);
    }
}
