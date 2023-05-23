<?php
echo "<style>
        /* CSS untuk direktori dan file */
        .directory {
            color: blue;
        }
        .file {
            color: green;
        }
        </style>";

$Dir = "C:\\xampp\\htdocs\\transupn";
$DirEntries = scandir($Dir);
foreach ($DirEntries as $Entry) {
    // Menentukan kelas CSS berdasarkan apakah entri tersebut direktori atau file
    $class = is_dir($Dir . "\\" . $Entry) ? 'directory' : 'file';
    echo "<span class='$class'>" . $Entry . "</span><br />";
}