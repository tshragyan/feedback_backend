<?php

namespace Database\Factories;

use App\Enums\FeedbackLocationEnum;
use App\Mail\FeedbackMail;
use App\Models\Feedback;
use Illuminate\Support\Facades\Mail;

class FeedbackFactory
{
    public function __construct(
        protected FeedbackLocationEnum $location
    )
    {
    }

    public function save($data): bool
    {
        if ($this->location === FeedbackLocationEnum::DATABASE) {
            $this->saveInDatabase($data);
            return true;
        }

        $this->sendEmail($data);
        return true;
    }

    private function saveInDatabase($data): void
    {
        $model = new Feedback();
        $model->name = $data['name'];
        $model->feedback = $data['feedback'];
        $model->save();
    }

    private function sendEmail($data): void
    {
        Mail::to(config('mail.default_to'))
            ->send(new FeedbackMail($data['name'], $data['feedback']));
    }

}
