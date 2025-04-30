<?php

function getSetting($group,$name)
{
    return DB::table('settings')->where('group',$group)->where('name',$name)->value('payload');
}