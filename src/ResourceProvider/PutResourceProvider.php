<?php

namespace Aztech\Layers\Rest\ResourceProvider;

use Symfony\Component\HttpFoundation\Request;

interface PutResourceProvider extends ResourceProvider
{
    /**
     * Handler for a PUT operation. Put operations are idempotent (ie, multiple calls will always return the same result).
     *
     * @param Request $request Contains the full request for the PUT call.
     * @param array $data Contains the decoded PUT body.
     * @return ResourceOperationResult
     */
    public function handlePostResource(Request $request, array $data);
}