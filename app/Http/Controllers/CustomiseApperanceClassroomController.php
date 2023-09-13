<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomiseApperanceClassroomRequest;
use App\Models\Classroom;
use App\Services\ClassroomService;
use Illuminate\Http\RedirectResponse;

class CustomiseApperanceClassroomController extends Controller
{
    public function update(CustomiseApperanceClassroomRequest $request, Classroom $classroom, ClassroomService $classroomService): RedirectResponse
    {
        $classroomService->UpdateCustomiseApperanceClassroom($classroom, $request->validated());
        return to_route('classroom.show', $classroom->id)->with('success', "change custoise apperance successflly");
    }
}
