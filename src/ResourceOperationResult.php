<?php

namespace Aztech\Layers\Rest;

class ResourceOperationResult
{
    const METHOD_DELETE = 'delete';

    const METHOD_GET = 'get';

    const METHOD_PATCH = 'patch';

    const METHOD_POST = 'post';

    const METHOD_PUT = 'put';

    private $success;

    private $operation;

    /**
     *
     * @var Resource
     */
    private $resource;
}