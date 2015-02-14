<?php

namespace Aztech\Layers\Rest\ResourceProvider;

use Symfony\Component\HttpFoundation\Request;

interface PatchResourceProvider extends ResourceProvider
{
    /**
     * Handler for a PACH operation.
     *
     * @param Request $request Contains the full request for the PATCH call.
     * @param array $data Contains the decoded PATCH body.
     * @return ResourceOperationResult
     */
    public function handlePostResource(Request $request, array $data);
}