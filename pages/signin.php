<h1><?=$trad['sign-in']['title']?></h1>
<form method="post" action="?p=login&action=create">
	<span>
		<input type="text" name="mail" class="form-control" placeholder="<?=$trad['frequent']['email']?>" onkeyup="checkMail(this);"/>
		<span class="input-addon"></span>
	</span>
	<span>
		<input type="text" name="user" class="form-control" placeholder="<?=$trad['frequent']['username']?>" onkeyup="checkUsername(this);"/>
		<span class="input-addon"></span>
	</span>
	<span>
		<input type="password" name="pass" class="form-control" placeholder="<?=$trad['frequent']['password']?>" onkeyup="checkPassword(this);"/>
		<span class="input-addon" id="pass-feedback"></span>
	</span>
	<button class="btn primary" action="submit">Valider l'inscription</button>
</form>
<script src="./js/check.js"></script>
