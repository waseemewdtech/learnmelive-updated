<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;
  /**
     * Determine whether the user can create posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $this->getPermissions($user,"Add-Role");
    }

    public function show(User $user){
        return $this->getPermissions($user,"List-Role");
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\User  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function update(User $user)
    {
        return $this->getPermissions($user,"Edit-Role");
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\User  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function delete(User $user)
    {
        //
        return $this->getPermissions($user,"Delete-Role");
    }

    protected function getPermissions($user,$p_name)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->permission_name == $p_name) {
                    return true;
                }
            }
        }
        return false;
    }
}
