<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Faker\Factory as Faker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BiroKementerianController extends Controller
{
    private $biro;
    private $faker;

    public function __construct() {
        $this->faker = Faker::create('id_ID');
        $nama = Route::current()->parameter('nama');
        switch ($nama) {
            case 'administrasi':
                $this->biro = true;
                break;
            case 'puskominfo':
                $this->biro = true;
                break;
            case 'psdm':
                $this->biro = false;
                break;
            case 'pora':
                $this->biro = false;
                break;
            case 'perhubungan':
                $this->biro = false;
                break;
            case 'sosma':
                $this->biro = false;
                break;
            case 'advokesma':
                $this->biro = false;
                break;
            case 'kastrat':
                $this->biro = false;
                break;
            default:
                $this->biro = false;
                break;
        }
    }

    public function index($nama)
    {
        $biro = $this->biro;
        $logo = $this->faker->imageUrl(630, 200, null, true, 'logo');
        $desc = $this->faker->paragraphs(3, true);
        $imgKepengurusan = $this->faker->imageUrl(730, 310, null, true, 'kepengurusan');
        $imgProker = $this->faker->imageUrl();

        return view('user.bk.index', compact('biro', 'logo', 'desc', 'imgKepengurusan', 'imgProker', 'nama'));
    }

    public function kepengurusan($nama)
    {
        $names = [];
        for ($i=0; $i < 10; $i++) { 
            $names[] = $this->faker->name();
        }

        return view('user.bk.kepengurusan', compact('names', 'nama'));
    }

    public function proker($nama)
    {
        $proker = 'VOKASI CUP';
        $imgProkers = [];
        for ($i=0; $i < 3; $i++) { 
            $imgProkers[] = $this->faker->imageUrl(500, 200, null, true, 'proker');
        }
        return view('user.bk.proker', compact('proker', 'imgProkers', 'nama'));
    }
}
