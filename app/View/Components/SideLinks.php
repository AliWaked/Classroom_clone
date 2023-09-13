<?php

namespace App\View\Components;

use App\Models\Classroom;
use App\Models\ClassroomUser;
use App\Models\Classwork;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class SideLinks extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.side-links', [
            'teacherClassrooms' => ClassroomUser::with('classroom:id,name,theme')->teachers()->get(),
            'studentClassrooms' => ClassroomUser::with('classroom:id,name,theme')->students()->get(),
        ]);
    }
}
