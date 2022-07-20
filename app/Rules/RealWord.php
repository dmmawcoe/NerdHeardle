<?php

namespace App\Rules;

use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Http;

class RealWord implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $client = new \GuzzleHttp\Client();
        $headers = ['X-api-key' => '1IDx6NSa8jMMsrs0AS8RVA==h8q9V64ygHP9et1L'];
        $request = new Request('GET', 'https://api.api-ninjas.com/v1/dictionary?word=' . $value, $headers);
        $hostgroup = $client->send($request, ['timeout' => 2]);
        if (json_decode($hostgroup->getBody()->getContents())->valid) {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be a real word.';
    }
}
