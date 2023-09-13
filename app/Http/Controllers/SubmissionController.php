<?php

namespace App\Http\Controllers;

use App\Enums\ClassworkUserStatus;
use App\Http\Requests\SubmissionRequest;
use App\Models\Classroom;
use App\Models\Classwork;
use App\Models\ClassworkUser;
use App\Models\Submission;
use App\Rules\ForbiddenFile;
use App\Services\SubmissionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubmissionController extends Controller
{
    public function __construct(public SubmissionService $submissionService)
    {
    }
    public function show(Classroom $classroom, Classwork $classwork)
    {
        $submissions = $this->submissionService->showSubmission($classwork);
        return view();
    }
    public function store(SubmissionRequest $request, Classwork $classwork)
    {
        $this->authorize('create', [Submission::class, $classwork]);
        DB::beginTransaction();
        try {
            $this->submissionService->storeSubmission($request, $classwork);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
    }
    public function file(Submission $submission)
    {
        $this->authorize('view', [$submission]);
        return response()->file(storage_path('app/' . $submission->content));
    }
}
