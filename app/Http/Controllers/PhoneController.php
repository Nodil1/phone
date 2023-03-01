<?php

namespace App\Http\Controllers;

use App\DTO\PhoneDTO;
use App\Models\Phone;
use App\Http\Requests\StorePhoneRequest;
use App\Http\Requests\UpdatePhoneRequest;
use App\Services\Phone\GetLastActiveNumbersService;
use App\Services\Phone\GetPhoneChunkService;
use App\Services\Phone\GetPhonePageCountService;
use Cache;
use Inertia\Inertia;

class PhoneController extends Controller
{
    public function main()
    {

        $arr = Cache::remember('index', 3600, function () {
            return [
                'propNumbers' => GetPhoneChunkService::execute(10, 1),
                'lastComments' => GetLastActiveNumbersService::execute(),
                'pageCount' => GetPhonePageCountService::execute()
            ];
        });
        return Inertia::render('Index', $arr);
    }

    public function numberPage(string $number)
    {
        return Inertia::render('Number', ['phone' => PhoneDTO::fromModel(Phone::wherePhone($number)->first())]);
    }

    public function phoneList(int $page)
    {
        return Inertia::render('PhonesList',
            [
                'propNumbers' => GetPhoneChunkService::execute(10, $page),
            ]);
    }
}
