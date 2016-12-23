<?php
/** This code is needed to check if session is already started. **/
(session_id() === '') ? session_start() : '';
?>