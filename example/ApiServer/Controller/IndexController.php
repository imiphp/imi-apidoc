<?php
namespace ImiApp\ApiServer\Controller;

use Imi\Server\Route\Annotation\Route;
use Imi\Server\Route\Annotation\Action;
use Imi\Controller\SingletonHttpController;
use Imi\Server\Route\Annotation\Controller;

/**
 * @OA\Info(title="My First API", version="0.1")
 * @Controller("/")
 */
class IndexController extends SingletonHttpController
{
    /**
     * @Action
     * @Route("/")
     * 
     *
     * @return void
     */
    public function index()
    {

    }

    /**
     * @Action
     * @Route(url="login", method="POST")
     *
     * @return void
     */
    public function login(string $username, int $password)
    {

    }

    /**
     * @Action
     * @Route("register")
     * @OA\Get(
     *     path="/register",
     *     @OA\Response(response="200", description="An example resource")
     * )
     *
     * @return void
     */
    public function register(string $username, int $password
    , string $birthday)
    {

    }

}
