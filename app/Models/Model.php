<?php
namespace App\Models;
use DB;


class Model {

    public function getAllUsers() {
        $users = DB::table("users")->get();
        return $users;
    }

    public function getUser($id) {
        $user = DB::table("users")->where("id", "=", $id)->get();
        return $user;
    }
}
?>