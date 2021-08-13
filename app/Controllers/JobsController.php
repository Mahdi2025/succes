<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\UserModel;
use App\Helpers\Helper;
use App\Models\JobsModel;
use App\Libraries\MySql;

class JobsController extends Controller
{

    public function index()
    {
            
            $userId = Helper::getUserIdFromSession();
            $Job   = jobsModel::load()->userJobs($userId);
            
            return View::render('jobs/index.view', [
                'jobs' => $Job
            ]);
    }

    /**
     * Store a user record into the database
     */
    public function store()
    {
        $Job = $_POST;
        $Job['created_by'] = Helper::getUserIdFromSession();
        $Job['created'] = date('Y-m-d');
        $Job['user_id'] = Helper::getUserIdFromSession();
        JobsModel::load()->store($Job);
        view::redirect('job');

    }
    
    public function create()
    {
        return View::render('jobs/create.view', [
            'action' => '/job/store',
            'method'=> 'POST',
            'users'     => UserModel::load()->all()
        ]);
    }

    public function show()
    {
    }

    public function edit()
    {
        $JobId = Helper::getIdFromUrl('job');
        $Jobs = JobsModel::load()->get($JobId);
        return View::render('jobs/edit.view', [
            'action' => '/job/' . $JobId . '/update',
            'job' => $Jobs,
            'method' => 'POST',

        ]);

    }
    /**
     * Updates a user record into the database
     */
    public function update()
    {
        $JobsId = Helper::getIdFromUrl('job');
        $Jobs = $_POST;
        $Jobs['updated_by'] = Helper::getUserIdFromSession();
        $Jobs['updated'] = date('Y-m-d H:i:s');
        JobsModel::load()->update($Jobs, $JobsId);
        view::redirect('job'); 
    }

    /**
     * Archive a user record into the database
     */
    public function destroy()
    { 
        $JobsId = Helper::getIdFromUrl('jobs');
        JobsModel::load()->destroy($JobsId);
        view::redirect('jobs');
    }
}