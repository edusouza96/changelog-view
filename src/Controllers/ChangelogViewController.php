<?php

namespace ChangelogView\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ChangelogViewController extends BaseController
{
    public function index($key = null)
    {
        $fileChangelog = fopen(base_path('CHANGE_LOG.txt'), "r");

        $changeLog = [];
        $isVersion = true;
        $version = null;

        while(($row = fgets($fileChangelog)) !== false){
            if($isVersion){
                $version = trim($row);
                $isVersion = false;
                $changeLog[$version] = [];
            }else if(empty(trim($row))){
                $isVersion = true;
            }else{
                $changeLog[$version][] = $row;
            }
        }
        fclose($fileChangelog);

        if($key && isset($changeLog[$key])){
            $changeLog = array($key => $changeLog[$key]);
        }

        return view('changelog-view::index', ['changeLog' => $changeLog]);
    }
}
