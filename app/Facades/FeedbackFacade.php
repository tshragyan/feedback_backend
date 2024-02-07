<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static create(array $data)
 */
class FeedbackFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'feedbackService';
    }
}
