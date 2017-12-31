<?php

namespace VendorName\ProjectName;

use Psr\Http\Message\ResponseInterface;
use Species\App\TwigViewController;

/**
 * An example controller using Twig.
 */
final class ExampleController extends TwigViewController
{

    /**
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function home(ResponseInterface $response): ResponseInterface
    {
        return $this->render($response, 'home.twig');
    }

}
