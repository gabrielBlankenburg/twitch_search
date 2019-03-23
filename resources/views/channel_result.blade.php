<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('layouts/head')
	<title>Resultado</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-8 offset-md-2">
				@include('layouts/search')
			</div>
		</div>
		<h1 class="text-center mb-4 mt-4">Resultados para "{{ $term }}"</h1>
		<div class="row mt-4">
		@foreach ($result['data'] as $data)
			<div class="col-sm-4">
				<div class="card mx-2 mb-3 result-card">
					<img src="{{ $data['logo'] }}" alt="{{$data['name']}} logo" class="img-thumbnail p-1 rounded">
					<div class="card-body mx-3">
						<h5 class="card-title">{{ $data['name'] }}</h5>
						<p>Playing {{ $data['game'] }}</p>
						<footer class="blockquote-footer">
							<ul class="list-inline">
								<li class="list-inline-item">
									<i class="fas fa-eye"></i> 
									{{ $data['views'] }}
								</li>
								<li class="list-inline-item">
									<i class="fas fa-language"></i>
									{{ $data['language'] }}
								</li>
								<li class="list-inline-item">
									<i class="fas fa-external-link-alt"></i>
									<a href="{{ $data['url'] }}" target="_blank">
										{{ $data['url'] }}
									</a>
								</li>
							</ul>
						</footer>
					</div>
				</div>
			</div>
		@endforeach
		</div>
	</div>
</body>
</html>