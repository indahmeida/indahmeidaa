<?php


function getAllperpustakaan($db)
{
    $sql = <<<SQL
    SELECT 
        *
    FROM tb_perpustakaan
    ORDER BY buku DESC;
    SQL;

    $result =  mysqli_query($db, $sql);

    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

function findperpustakaanByID($db, $id)
{
    $sql = <<<SQL
    SELECT 
        *
    FROM tb_perpustakaan
    WHERE id = $id
    LIMIT 1;
    SQL;

    $result =  mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 0) {
        return null;
    }

    return mysqli_fetch_assoc($result);
}

function newperpustakaan($db, $data)
{
    $sql = <<<SQL
    INSERT INTO `tb_perpustakaan` 
    VALUES (
        NULL,
        '{$data['nama']}',
        '{$data['buku']}',
        '{$data['peminjaman']}',
        '{$data['pengembalian']}',
        NOW(),
        NOW()
    )
    SQL;

    if (mysqli_query($db, $sql)) {
        return mysqli_insert_id($db);
    } else {
        return null;
    }
}


function updateperpustakaanByID($db, $id, $data)
{
    $sql = <<<SQL
    UPDATE tb_perpustakaan
    SET 
        nama = '{$data['nama']}',
        buku = '{$data['buku']}',
        peminjaman = '{$data['peminjaman']}',
        pengembalian = '{$data['pengembalian']}',
        updated_at = NOW()
    WHERE id = $id;
    SQL;

    if (mysqli_query($db, $sql)) {
        return $id;
    } else {
        return null;
    }
}

function deleteperpustakaan($db, $id)
{
    $sql = <<<SQL
    DELETE FROM tb_perpustakaan WHERE id = $id;
    SQL;

    if (mysqli_query($db, $sql)) {
        return true;
    } else {
        return false;
    }
}
