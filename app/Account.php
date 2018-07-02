<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\User;

class Account extends Model{
    function __construct(){
        $this->user = new User;
    }

    public function viewUser($uid = null){
    	if($uid){
    		return $uid;
    	}else{
            return $this->user::orderBy('id', 'asc')->get();
    	}
    }
    
    public function addUser($getForm){
        foreach($getForm as $key => $field){
            if($field != null){
                $values[$key] = $field;
            }
        }

        $values['remember_token'] = md5(time().rand(0,100));
        
        $addUser = $this->user::create($values);

        return $addUser->id;
    }

    public function editUser($getForm, $uid){
        $editUser = $this->user::find($uid->id);

        foreach($getForm as $key => $field){
            if($field != null){
                $values[$key] = $field;
            }
        }

        $editUser->update($values);

        return $editUser->id;
    }

    public function deleteUser($uid){
        $deleteUser = $this->user::find($uid->id);

        return $deleteUser->delete();
    }
}