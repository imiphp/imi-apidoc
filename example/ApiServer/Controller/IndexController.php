<?php

declare(strict_types=1);

namespace ApiDocApp\ApiServer\Controller;

use Imi\Server\Http\Controller\HttpController;
use Imi\Server\Http\Route\Annotation\Action;
use Imi\Server\Http\Route\Annotation\Controller;
use Imi\Server\Http\Route\Annotation\Route;

/**
 * @OA\Info(title="My First API", version="0.1")
 *
 * @Controller("/")
 */
class IndexController extends HttpController
{
    /**
     * @Action
     *
     * @Route("/")
     */
    public function index(): void
    {
    }

    /**
     * @Action
     *
     * @Route(url="login", method="POST")
     *
     * @param string $username 用户名
     * @param int    $password 密码
     */
    public function login(string $username, int $password): void
    {
    }

    /**
     * @Action
     *
     * @Route(method={"GET", "POST"})
     */
    public function multiMethod1(int $id, int $type, array $tags): void
    {
    }

    /**
     * @Action
     *
     * @Route(method={"PUT", "POST"})
     *
     * @param int[] $tags 标签
     */
    public function multiMethod2(int $id, int $type, array $tags): void
    {
    }

    /**
     * @Action
     *
     * @Route("register")
     *
     * @OA\Get(
     *     path="/register",
     *
     *     @OA\Response(response="200", description="An example resource")
     * )
     *
     * @param string $username 用户名
     * @param int    $password 密码
     * @param string $birthday 生日
     */
    public function register(string $username, int $password, string $birthday): void
    {
    }

    /**
     * @Action
     */
    public function get(int $id): void
    {
    }
}
