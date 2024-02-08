<?php
$nameRegex = '/^[a-zA-z]+$/';
$emailPattern = '/^(?!\.)([a-z\d\.-]{1,64})@([a-z\d]+)\.([a-z]{2,3})(\.[a-z]{2,3})?$/m';
$passwordPattern = '/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s])([^\s]){8,20}$/m';
$numberPattern = '/^[0-9]{10}$/';
?>