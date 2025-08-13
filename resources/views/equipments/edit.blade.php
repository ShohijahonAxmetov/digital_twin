@extends('layouts.app')

@section('title', $pageTitle)

@section('content')

<div class="container-fluid">
	<div class="row mb-30">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-end">
						<a href="{{route('admin.equipments.elements', ['equipment' => $equipment])}}" class="btn bg-primary mr-3">Добавить элементы</a>
						<a href="" class="btn bg-success">Сохранить изменения</a>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="row">
    	<div class="col-12">
    		
		</div>
    </div>
</div>

@endsection