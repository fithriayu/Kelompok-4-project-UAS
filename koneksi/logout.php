<?php
session_start(); // kita mulai session
session_destroy(); // kita hancurkan/hilangkan sessionnya
// kita redirect
header("location:../login.php?pesan=logout");
