<?php

namespace LaravelProject\Http\Middleware;

use Closure;
use LaravelProject\Repositories\ProjectRepository;

class CheckProjectOwner
{

    /**
     * @var ProjectRepository
     */
    private $repository;

    /**
     * CheckProjectOwner constructor.
     * @param ProjectRepository $repository
     */
    public function __construct(ProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $projectId = $request->project;
        $userId = \Authorizer::getResourceOwnerId();
        if($this->repository->isOwner($projectId, $userId) == false){
            return ['error' => 'Acesso Negado!'];
        }
        return $next($request);
    }
}
