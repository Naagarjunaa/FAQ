<?php

namespace App\Features\Faq;

use App\Models\Faq;
use Illuminate\Support\Facades\Validator;

class CreateFaq
{
    public function create(array $input)
    {
        Validator::make($input, [
            'category' => ['required', 'max:255'],
            'question' => ['required', 'string', 'max:255'],
            'answer' => ['required', 'string'],
            'priority' => ['required', 'integer'],
        ])->validate();

        return Faq::create([
            'category' => $input['category'],
            'question' => $input['question'],
            'answer' => $input['answer'],
            'priority' => $input['priority'],
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
