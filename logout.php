<?php
session_start();
session_destroy();
echo 'Vous etes deconnecter. <a href="/projet">Retour</a>';
