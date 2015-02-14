<?php

namespace Aztech\Layers\Rest\ResourceProvider;

use Aztech\Layers\Layer;
use Symfony\Component\HttpFoundation\Request;

interface DeleteResourceProvider extends ResourceProvider
{
    /**
     * Handler for a DELETE resource call.
     *
     * @param Request $request Contains the full request data for the call.
     * @param string $resourceId Id of the requested resource.
     * @return ResourceOperationResult
     */
    public function getResource(Request $request, $resourceId);
}