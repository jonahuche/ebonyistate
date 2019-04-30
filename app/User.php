<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Role;

class User extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{

	//Functions to setup database relationships

	//Defines relationship between user and roles
    public function roles(){
    	return $this->belongsToMany('App\Role','user_role', 'role_id', 'user_id');
    }

    public function hasAnyRole($roles)
    {
    	if(is_array($roles)){
    		foreach ($roles as $role) {
    			if ($this->hasRole($role)) {
    				return true;
    			}
    		}
    	}else {
    		if ($this->hasRole($roles)) {
    			return true;
    		}
    	}
    	return false;
    }

    public function hasRole($role)
    {
    	if ($this->roles()->where('name',$role)->first()) {
    		return true;
    	}
    	else {
    		return false;
    	}
    }
}
