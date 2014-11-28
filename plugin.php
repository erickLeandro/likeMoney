<?php

function insertIcon($idPost, $idAuthor)
{	
	$icone = '<a href="#" data-post="'.$idPost.'" data-autor="'.$idAuthor.'">Like post</a>';
	return $icone;
}