<?php

namespace App\Services;

use App\Enums\FeedbackLocationEnum;
use App\Models\Feedback;
use Database\Factories\FeedbackFactory;

class FeedbackService
{
    public function create(array $data): bool
    {
        try {
            $factory = new FeedbackFactory(FeedbackLocationEnum::EMAIL);
            $factory->save($data);
            return true;
        } catch (\Throwable) {
            return false;
        }
    }
}
