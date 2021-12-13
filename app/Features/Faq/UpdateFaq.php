<?php

namespace App\Features\Faq;

use App\Models\Faq;
use Illuminate\Support\Facades\Validator;

class UpdateFaq
{
    public function updateFaq(Faq $faq, array $input)
    {
        Validator::make($input, [
            'category' => ['required', 'max:255'],
            'question' => ['required', 'string', 'max:255'],
            'answer' => ['required', 'string'],
            'priority' => ['required', 'integer'],
        ])->validate();

        $faq->category = $input['category'];
        $faq->question = $input['question'];
        $faq->answer = $input['answer'];
        $faq->priority = $input['priority'];
        $faq->created_by = 1;
        $faq->updated_by = 1;
        $faq->save();
    }
}
