<?php

namespace VendorName\ProjectName;

use Aura\Session\Segment;
use Aura\Session\Session;
use Psr\Http\Message\{ResponseInterface as Response, ServerRequestInterface as Request};
use Slim\Interfaces\RouterInterface;
use Slim\Views\Twig;
use Species\App\Controller\TwigController;

/**
 * An example controller using Twig.
 */
final class ExampleController extends TwigController
{

    /** @var Segment */
    private $session;



    /**
     * @param RouterInterface $router
     * @param Twig            $twig
     * @param Session         $session
     */
    public function __construct(RouterInterface $router, Twig $twig, Session $session)
    {
        parent::__construct($router, $twig);

        $this->session = $session->getSegment(self::class);
    }



    /**
     * @param Request  $request
     * @param Response $response
     * @return Response
     */
    public function __invoke(Request $request, Response $response): Response
    {
        if ($request->getMethod() === 'POST') {
            $name = $request->getParsedBody()['name'] ?? null;
            $this->session->setFlash('name', $name);

            return $this->temporaryRedirect($response, $this->pathFor('example.home'));
        }

        return $this->twig($response, 'example.twig', [
            'name' => $this->session->getFlash('name'),
            'testObject' => $this,
        ]);
    }

}
