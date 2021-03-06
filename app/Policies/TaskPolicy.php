<?php
namespace App\Policies;

use App\Task;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }
/* uses "policies" to organize authorization logic into simple, small classes*/
    public function destroy(User $user, Task $task) {
        return $user->id === $task->user_id;
    }
}
