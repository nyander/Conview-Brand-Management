<?php

function makeImageFromName($name)
{
    $userImage = "";
    $shortName = "";

    $names = explode(" ", $name);



    foreach ($names as $name) {
        $shortName .= $name[0];
    }

    $userImage = '<div class="name-image bg-primary m-auto">' . $shortName . '</div>';
    return $userImage;
}
