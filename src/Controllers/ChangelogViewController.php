<?php

namespace ChangelogView\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ChangelogViewController extends BaseController
{
    public function index()
    {
        $fileChangelog = fopen('../CHANGE_LOG.txt', "r");

        $changeLog = [];
        $isVersion = true;
        $version = null;

        while(($row = fgets($fileChangelog)) !== false){
            if($isVersion){
                $version = $row;
                $isVersion = false;
                $changeLog[$version] = [];
            }else if(empty(trim($row))){
                $isVersion = true;
            }else{
                $changeLog[$version][] = $row;
            }
        }
        fclose($fileChangelog);
        return view('changelog-view::index', ['changeLog' => $changeLog]);
    }
}
