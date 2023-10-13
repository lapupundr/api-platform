<?php

namespace App\Entity;

use ApiPlatform\Metadata\Post;
use App\State\BlogPostProcessor;

#[Post(processor: BlogPostProcessor::class)]
class BlogPost
{
}