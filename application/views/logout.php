<?php

	session_start();
	session_destroy();
	redirect ('home');
?>