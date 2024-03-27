<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\{User, Post, Comment, Contact, Courses, Department};
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @return View
     */
    public function index(Post $post, User $user, Comment $comment, Contact $contact, Department $department, Courses $courses)
    {
        $users = isRole('admin') ? $this->getUnreads($user) : null;
        $contacts = isRole('admin') ? $this->getUnreads($contact) : null;
        $posts = isRole('admin') ? $this->getUnreads($post) : null;
        $courses = isRole('admin') ? $this->getUnreads($courses) : null;
        $departments = isRole('admin') ? $this->getUnreads($department) : null;
        $comments = $this->getUnreads($comment, isRole('instructor'));

        return view('back.index', compact('posts', 'users', 'contacts','courses','comments','departments'));
    }

    /**
     * Get the unread notifications.
     *
     * @return boolean
     */
    protected function getUnreads($model, $instructor = null)
    {
        $query = $instructor ?
            $model->whereHas('post.user', function ($query) {
                $query->where('users.id', auth()->id());
            }) :
            $model->newQuery();

        return $query->has('unreadNotifications')->count();
    }

    /**
     * Purge notifications.
     *
     * @param  String $model
     * @return \Illuminate\Http\Response
     */
    public function purge($model)
    {
        $model = 'App\Models\\' . ucfirst($model);

        DB::table('notifications')->where('notifiable_type', $model)->delete();

        return back();
    }
}
