<?php
    // profile.php - test Plates
    $this->layout('template', ['title' => 'User Profile']) 
?>

<h1>User Profile</h1>

<p>
    Hello, <?=$this->e($name)?>
</p>
