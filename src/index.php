<?php

include __DIR__ . "/../etc/bootstrap.php";

class App {

    /**
     * Lychee
     * 
     * @access *
     * @uses view
    */
    public function index() {
        View::Display();
    }

    /**
     * @access *
     * @uses view
    */
    public function album($id) {
        $pool = new Table("album");
        $album = $pool->where(["id" => $id])->find();
        $usr_session = accessController::has_user_session();
        $usr_ss = $usr_session ? "keeps" :"delete";

        if (Utils::isDbNull($album)) {
            RFC7231Error::err404("There is no album which its id equals to $id");
        }

        $images = (new Table("photo_groups"))
            ->left_join("photo")
            ->on(["photo" => "id", "photo_groups" => "photo_id"])
            ->where(["album_id" => $id])
            ->select([
                "`photo_id` as `id`","`description` as `desc`","`name`","exif"
            ]);

        for($i =0; $i < count($images); $i++) {
            $exif = json_decode($images[$i]["exif"], true);
            $w = $exif["width"];
            $h = $exif["height"];
            $images[$i]["size"] = "$w-$h";
        }

        View::Display([
            "title" => $album["name"],
            "album_title" => $album["name"],
            "album_desc" => $album["note"],
            "usr_ss" => $usr_ss,
            "image" => $images
        ]);
    }

    /**
     * Gallery
     * 
     * @access *
     * @uses view
    */
    public function gallery() {
        View::Display();
    }

    /**
     * Login
     * 
     * @access *
     * @uses view
    */
    public function login() {
        View::Display();
    }
}