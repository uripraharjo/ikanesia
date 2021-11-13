<?php
require_once "../_config/config.php";
if (!isset($_SESSION['user'])) {
	echo "<script>window.location='".base_url('auth/login.php')."';</script>";
} ?>

<h1>WELCOME</h1>
<h2>NGESUK MANING NGEDITE</h2>

<a href="<?=base_url('auth/logout.php')?>"><span class="text-danger">Logout</span></a>