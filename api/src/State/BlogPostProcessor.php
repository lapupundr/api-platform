<?php

namespace App\State;

use App\Entity\BlogPost;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;

class BlogPostProcessor implements ProcessorInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = [])
    {
        // call your persistence layer to save $data
        return $data;
    }
}
