<?php
// Class Bg
$name = array("Muhammad", "Ariq", "Hawari", "Adiputra");
$job = array(
        "job1" => "Student",
        "job2" => "Developer",
        "job3" => "Desaigner"
    );
// Class About
$about = array(
    "name" => "Muhammad Ariq Hawari Adiputra",
    "desk" => "I am a student majoring in informatics at a university called UPN Veteran, East Java. 
        I've become familiar with C/C++, HTML, CSS, MySql, PHP, and still learning Javascript. 
        I am very excited when learning new things. I am experienced working with a team, and I have a high work ethic"
);
$date = new DateTime();
$birth = new DateTime('2002-12-29');
$age = $date->diff($birth)->format('%y Years Old');
// class Footer-about
$link = array(
    "Instagram" => "https://www.instagram.com/ariqhwari/",
    "Github" => "https://github.com/ariqhwari/",
    "Email" => "https://mail.google.com/mail/?view=cm&fs=1&to=ariqhawari02@gmail.com&su=Halo beb&body=",
    "Twitter" => "https://twitter.com/ariqlho",
);
