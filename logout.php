<?php

session_destroy();

unset($nome);

header("Location: autentica.php");