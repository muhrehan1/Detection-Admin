<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;
class DetectsController extends Controller
{

    public function __construct(Database $database)
    {

        $this->database =$database;
        $this->tablename = 'usersLocations';
    }

    public function detection()
    {
        $fetch = $this->database->getReference($this->tablename)->getValue();
        $data = [
            'title' => 'Driver Drowsiness Detection ',
             'leftsidebar'=> 'DDDS',
             'LocationMenu' => 'Locations',
             'AdminMenu' => 'Admin',
             'records'=>$fetch,

        ];

      dd($fetch);
        return view('DetectionAdmin.DetectionAdmin', compact('fetch'),$data);

    }


    public function register ()
    {

        $data = ['register' => 'Drowsiness Registration'] ;
        return view('DetectionAdmin.Register',$data);

    }

    public function login()
    {
        $data = ['login'=> 'Detection Login', 'title' => 'Driver Drowsiness Detection ',];
        return view('DetectionAdmin.Login',$data);
    }

    public function adminlist()
    {
        $data = ['adminlist'=> 'Admins', 'title' => 'Driver Drowsiness Detection', 'leftsidebar'=> 'DDDS',
        'LocationMenu' => 'Locations',
        'AdminMenu' => 'Admin','list'=>'View All'];
        return view('DetectionAdmin.list-admin',$data);
    }

    public function adminfrontregister()
    {
        $data = ['adminlist'=> 'Admins', 'title' => 'Driver Drowsiness Detection', 'leftsidebar'=> 'DDDS',
        'LocationMenu' => 'Locations',
        'AdminMenu' => 'Admin','list'=>'View All'];
        return view('DetectionAdmin.add-admin',$data);
    }

}


