<?php
	ob_start();
		if(!isset($_SESSION['id'])) {
			session_start();
		}
		session_destroy();
		unset($_SESSION['csrf_token']);
			header("Location: /backend/");
	ob_end_flush();