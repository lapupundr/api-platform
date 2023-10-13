<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\State\UserProcessor;

#[ApiResource(processor: UserProcessor::class)]
class User
{
}