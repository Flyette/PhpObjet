<style>
	form#monform div label::after {
		content: ' : ';
	}
</style>					
					
		<h1>Formulaire de contact</h1>
		<div class="jumbotron">
		<form id="monform" class="form-horizontal" method="post" action="CtrlContact/enregistrerForm">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 control-label" for="nom">Nom</label>
				<div class="col-xs-12 col-sm-7">
				<input class="form-control" name="nom" id="nom" value="" placeholder="Entrer votre nom"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 control-label" for="prenom">Prénom</label>
				<div class="col-xs-12 col-sm-7">
				<input class="form-control" name="prenom" id="prenom" value="" placeholder="Entrer votre prénom"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 control-label" for="tel">Tel</label>
				<div class="col-xs-12 col-sm-7">
				<input class="form-control" name="tel" id="tel" value="" placeholder="Entrer votre téléphone"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 control-label" for="email">Email</label>
				<div class="col-xs-12 col-sm-7">
				<input class="form-control" name="email" id="email" value="" placeholder="Entrer votre email"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 control-label" for="message">Message</label>
				<div class="col-xs-12 col-sm-7">
				<textarea class="form-control" name="message" id="message" placeholder="Entrer votre message" rows="" cols=""></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-12 col-sm-7 col-sm-offset-3">
					<button type="reset" class="btn btn-default">Annuler</button>
					<button id="valider" type="button" style="float:right;" class="btn btn-success">Valider</button>
				</div>
			</div>
		</form>
		</div>
					
		<script src="js/<?= $params['content']?>.js"></script>
		