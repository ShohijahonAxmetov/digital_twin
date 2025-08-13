@extends('layouts.app')

@section('title', $pageTitle)

@section('content')

<div class="container-fluid">
	<div class="row mb-30">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-end">
						<a href="{{route('admin.elements.create')}}" class="btn btn-info">Добавить</a>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="row">
    	<div class="col-12">
		    <div class="card mb-30">
		        <div class="card-body pt-30">
		            <h4 class="font-20 ">{{$pageTitle}}</h4>
		        </div>
		        <div class="table-responsive">
		            <!-- Invoice List Table -->
		            <table class="text-nowrap table-bordered table-striped dh-table">
		                <thead>
		                    <tr>
		                        <th>Ноаименование</th>
		                        <th>Оборудование</th>
		                        <th>Родитель</th>
		                        <th>Tag</th>
		                        <th>Действия</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@foreach($elements as $element)
		                    <tr>
		                        <td>{{$element->name}}</td>
		                        <td>{{$element->equipment->name}}</td>
		                        <td>{{$element->parent?->name ?? '-'}}</td>
		                        <td>-</td>
		                        <td>
		                            <a href="{{route('admin.elements.destroy', ['element' => $element])}}" class="mr-3"><img src="/assets/img/svg/delete.svg" alt="" class="svg"></a>
		                            <a href="{{route('admin.elements.edit', ['element' => $element])}}"><img src="/assets/img/svg/c-edit.svg" alt="" class="svg"></a>
		                        </td>
		                    </tr>
		                    @endforeach
		                </tbody>
		            </table>
		            <!-- End Invoice List Table -->
		        </div>
		    </div>
		</div>
    </div>
</div>

@endsection