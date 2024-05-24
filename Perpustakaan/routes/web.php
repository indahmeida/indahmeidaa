<?php

return [
    ["GET /", "home@index"],

    ["GET /perpustakaan", "perpustakaan@index"],
    ["GET /perpustakaan/create", "perpustakaan@create"],
    ["POST /perpustakaan", "perpustakaan@store"],
    ["GET /perpustakaan/show", "perpustakaan@show"],
    ["GET /perpustakaan/edit", "perpustakaan@edit"],
    ["POST /perpustakaan/update", "perpustakaan@update"],
    ["POST /perpustakaan/destroy", "perpustakaan@destroy"],
];
