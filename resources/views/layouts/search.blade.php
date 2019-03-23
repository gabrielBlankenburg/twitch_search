<form class="form-group" action="/search" name="search" onsubmit="return validateForm()">
	<div class="row">
		<div class="col-sm-10">
			<input class="form-control form-control-lg mt-4" type="text" name="term" placeholder="busca">
		</div>
		<div class="col-sm-2">
			<button type="submit" class="btn btn-primary mt-4 submit">submit</button>
		</div>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="type" id="channel" value="channel" {{ $type == 'channel' ? 'checked' : '' }}>
		<label class="form-check-label" for="channel">
		Channel
		</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="type" id="game" value="game" {{ $type == 'game' ? 'checked' : '' }}>
		<label class="form-check-label" for="game">
		Game
		</label>
	</div>
</form>