<?php
$dir = '@vendor';

//~ create bash session
exec("\"C:\Program Files\Git\bin\sh.exe\" --login -i -c \"bower install\"");
//~ exit session
exec('exit');
