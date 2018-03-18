<?php
namespace App\Traits;

use App\Models\Teacher;
use App\Http\Repositories\TeacherRepository;

trait MenuTrait {

    private function load_menu_teachers() {
        $teacherRepo = new TeacherRepository( new Teacher() );
        $this->setData('menu_teachers', $teacherRepo->get_for_menu() );
    }

}