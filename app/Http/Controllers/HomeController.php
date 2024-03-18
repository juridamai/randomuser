<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RandomUser;
use App\Models\HasilResponse;
use App\Models\Profesi;

class HomeController extends Controller
{
    private $randomUser;

    function __construct()
    {
        $this->randomUser = new RandomUser();
    }

    public function index(){
        $listUser = HasilResponse::select('hasil_response.*', 'jenis_kelamin.jenis_kelamin as jk','nama_profesi.nama_profesi')
            ->join('jenis_kelamin', 'jenis_kelamin.kode', '=', 'hasil_response.jenis_kelamin')
            ->join('nama_profesi', 'nama_profesi.kode', '=', 'hasil_response.profesi')
            ->paginate(10);

        return view('content.home',compact('listUser'));
    }

    public function profesi(){

        $profesi = Profesi::with('response')->get();

        return view('content.profesi',compact('profesi'));
    }

    public function store(){
        $randomUser = $this->randomUser->getRandomUser(40)->results;

        foreach ($randomUser as $key => $row){
            $gender = 1;
            if($row->gender == "female"){
                $gender = 2;
            }

            $md5 = $row->login->md5;
            $angkaKurang = $this->getAngka(1,$this->extractNumberFromString($md5));
            $angkaLebih = $this->getAngka(2,$this->extractNumberFromString($md5));
            $profesi = $this->randomString();
            $plainJson = json_encode($randomUser[$key]);

            $hasilResponse[] = array(
                'jenis_kelamin' => $gender,
                'nama' => $row->name->first." ".$row->name->last,
                'nama_jalan' => $row->location->street->name,
                'email' => $row->email,
                'angka_kurang' => $angkaKurang,
                'angka_lebih' => $angkaLebih,
                'profesi' => $profesi,
                'plain_json' => $plainJson,
            );
        }

        try {
            HasilResponse::insert($hasilResponse);
            echo "success";
        } catch (\Exception $e) {
            echo "failed";
        }

    }

    private function randomString(){
        $characters = 'ABCDE';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 1; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    private function extractNumberFromString($string){
        return preg_replace("/[^0-9]/", '', $string);
    }

    private function getAngka($jenis, $angka){
        #jenis; 1= <7; 2= >7

        $angka = "4907838856027933452";

        if($jenis == 1){
            $total = 0;
            foreach (str_split($angka) as $letter){
                if($letter <7){
                    $total = $total + 1;
                }
            }
        }else{
            $total = 0;
            foreach (str_split($angka) as $letter){
                if($letter >7){
                    $total = $total + 1;
                }
            }
        }

        return $total;
    }

}
