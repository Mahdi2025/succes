<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\UserModel;
use App\Helpers\Helper;
use App\Libraries\MySql;
use App\Models\SkillsModel;


class SkillsController extends Controller
{

    public function index()
    {
            $userId = Helper::getUserIdFromSession();
            $skill = skillsModel::load()->userSkills($userId);
            
            return View::render('skills/index.view', [
                'skills'    => $skill
            ]);

    }
    /**
     * Store a user record into the database
     */
    public function store()
    {   
            $Skill = $_POST;
            $Skill['created_by'] = Helper::getUserIdFromSession();
            $Skill['created'] = date('Y-m-d');
            $Skill['user_id'] = Helper::getUserIdFromSession();
            SkillsModel::load()->store($Skill);
            view::redirect('skill');
    }

    public function edit()
    {
        $SkillId = Helper::getIdFromUrl('skill');
        $Skills = SkillsModel::load()->get($SkillId);
        return View::render('skills/edit.view', [
            'method' => 'POST',
            'action' => '/skill/' . $SkillId . '/update',
            'skill' =>  $Skills,
        ]);

    }

    public function create()
    {
         
        return View::render('skills/create.view', [
             'method'=> 'POST',
             'action' => '/skill/store',
        ]);

        
    }

    public function show()
    {
    }

    /**
     * Updates a user record into the database
     */
    public function update()
    {
        
        $SkillId = Helper::getIdFromUrl('skill');
        $Skill = $_POST;
        $Skill['updated_by'] = Helper::getUserIdFromSession();
        $Skill['updated'] = date('Y-m-d H:i:s');
        skillsModel::load()->update($Skill, $SkillId);
        view::redirect('skill');
    
    }

    /**
     * Archive a user record into the database
     */
    public function destroy()
    {
     $SkillId = Helper::getIdFromUrl('skill');      
     skillsModel::load()->destroy($SkillId);
        
     view::redirect('skill');
    }
}