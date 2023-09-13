<?php

namespace App\Listeners;

use App\Events\ClassworkCreated;
use App\Models\Stream;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PostInClassroomStreem
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ClassworkCreated $event): void
    {
        $classwork = $event->classwork;
        $content = __(
            ':name posted a new :type :title',
            [
                'name' => $classwork->user->name,
                'type' => __($classwork->type->value),
                'title' => $classwork->title,
            ]
        );
        Stream::create([
            'user_id' => $classwork->user->id,
            'classroom_id' => $classwork->classroom_id,
            'content' => $content,
            'link' => route('classwork.show', [
                'classroom' => $classwork->classroom,
                'classwork' => $classwork,
            ]),
        ]);
    }
}
