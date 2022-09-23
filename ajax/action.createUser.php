<?php

function saveAvatarUser($img)
{
	move_uploaded_file($img['tmp_name'], 'pictures/' . $img['name']);
}



if (isset($_FILES['uploadfile'])) {
	saveAvatarUser($_FILES['uploadfile']);
} else {
	// нужно вернуть текст ошибки
}