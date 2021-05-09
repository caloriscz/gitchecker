<?php

class GitChecker {

    private $gitStr;

    public function __construct() {
        $this->gitStr = file_get_contents('.git/HEAD');
    }

    public function getSnapshot() {

        $branch = rtrim(preg_replace("/(.*?\/){2}/", '', $this->gitStr));
        $gitPathBranch = '.git/refs/heads/'.$branch;

        return file_get_contents($gitPathBranch);
    }

    public function getBranch() {
        return rtrim(preg_replace("/(.*?\/){2}/", '', $this->gitStr));
    }

    public function getDate() {
        $branch = rtrim(preg_replace("/(.*?\/){2}/", '', $this->gitStr));
        $gitPathBranch = '.git/refs/heads/'.$branch;

        return date(DATE_ATOM, filemtime($gitPathBranch));
    }
}