<span class="modal-background"></span>
<div class="modal">
	<span class="modal-title primary">
		<h2 class=""><?=$trad['log']['modal-title']?></h2>
		<a class="btn close-modal disabled">&nbsp;&times;&nbsp;</a>
	</span>
	<div class="modal-content">
		<form action="?p=home" method="post">
			<h3><?=$trad['log']['modal-content']['header']?></h3>
			<table style="width: 100%;">
				<tr>
					<td><input type="text" name="user" placeholder="<?=$trad['frequent']['username']?>" class="form-control"/></td>
					<td><input type="password" name="pass" placeholder="<?=$trad['frequent']['password']?>" class="form-control"/></td>
				</tr>
				<tr>
					<td style="text-align: right;  padding-right: 16px;"><a href="?p=signin"><?=$trad['log']['modal-content']['sign-in']?></a></td>
					<td style="text-align: left; padding-left: 16px;"><button class="btn l"><?=$trad['log']['modal-content']['log-in']?></button></td>
				</tr>
			</table>
		</form>
	</div>
</div>
