<?php

function index($db)
{
    // dd($_SERVER);
    require BASE_PROJECT_PATH . "/repository/perpustakaan.php";
    $r = getAllperpustakaan($db);

    masterView('perpustakaan/index', ['perpustakaan' => $r]);
}

function show($db)
{
    require BASE_PROJECT_PATH . "/repository/perpustakaan.php";
    $r = findperpustakaanByID($db, $_GET['id']);

    masterView('perpustakaan/show', ['perpustakaan' => $r]);
}

function create($db)
{
    masterView('perpustakaan/insert');
}

function store($db)
{
    require BASE_PROJECT_PATH . "/repository/perpustakaan.php";

    $j = newperpustakaan($db, $_POST);

    header("Location: " . url("/perpustakaan"));
    die();
}

function edit($db)
{
    require BASE_PROJECT_PATH . "/repository/perpustakaan.php";
    $r = findperpustakaanByID($db, $_GET['id']);

    masterView('perpustakaan/edit', ['perpustakaan' => $r]);
}

function update($db)
{
    $id = $_GET['id'];

    require BASE_PROJECT_PATH . "/repository/perpustakaan.php";

    $j = updateperpustakaanByID($db, $id, $_POST);

    header("Location: " . url("/perpustakaan/show?id={$id}"));
    die();
}

function destroy($db)
{
    $id = $_GET['id'];

    require BASE_PROJECT_PATH . "/repository/perpustakaan.php";

    $j = deleteperpustakaan($db, $id);

    header("Location: " . url("/perpustakaan"));
    die();
}
