<?php
if(isset($user)) echo $user->getLogin().' '.$user->getId();
else echo "nie zalogowano";