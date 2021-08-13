<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\EducationModel;
use App\Models\UserModel;
use App\Models\SkillsModel;
use App\Models\HobbiesModel;
use App\Models\JobsModel;
use App\Helpers\Helper;
use App\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        if (isset($_SESSION) && isset($_SESSION['user'])) {
            return View::render('credentials/me.view');
        } else {
            header('Location: login');
        }
        
    }

    public function changeEmail()
    {

    }
    public function callAll()
    
    {
        $userId = Helper::getUserIdFromSession();
        
        return View::render('credentials/me.view', [
            'user'  => Usermodel::load()->get($userId),
            'educations' => EducationModel::load()->all(NULL, $userId),
            'skills' => SkillsModel::load()->all(NULL, $userId),
            'jobs' => JobsModel::load()->all(NULL, $userId),
            'hobbies' => HobbiesModel::load()->all(NULL, $userId),
        ]);


    }
}

 