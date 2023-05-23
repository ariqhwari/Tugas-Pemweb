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

$Dir = "C:\\xampp\\htdocs";
$DirOpen = opendir($Dir);
while ($CurFile = readdir($DirOpen)) {
    $class = is_dir($Dir . "\\" . $CurFile) ? 'directory' : 'file';
    echo "<span class='$class'>" . $CurFile . "</span><br />";
}
closedir($DirOpen);