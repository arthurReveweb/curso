<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 27/11/2016
 * Time: 21:56
 */

namespace LaravelProject\Presenters;

use LaravelProject\Transformers\ProjectTransformer;
use Prettus\Repository\Presenter\FractalPresenter;
class ProjectPresenter extends FractalPresenter
{
    public function getTransformer()
    {
        return new ProjectTransformer();
    }

}