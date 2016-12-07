<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 27/11/2016
 * Time: 21:35
 */

namespace LaravelProject\Transformers;

use LaravelProject\Entities\User;
use League\Fractal\TransformerAbstract;

class ProjectMemberTransformer extends TransformerAbstract
{
    public function transform(User $member)
    {
        return [
            'member_id' => $member->id,
            'name' => $member->name
        ];
    }
}