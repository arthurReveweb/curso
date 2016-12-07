<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 26/11/2016
 * Time: 19:40
 */

namespace LaravelProject\Repositories;


use LaravelProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    public function model()
    {
        return Client::class;
    }
}