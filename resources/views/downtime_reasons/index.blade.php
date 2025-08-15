@extends('layouts.app')

@section('title', $pageTitle)

@section('content')

<div class="container-fluid">
	<div class="row mb-30">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-end">
						<a href="{{route('admin.downtime_reasons.create')}}" class="btn btn-info">Добавить</a>
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
		                        <th>№</th>
		                        <th>Ноаименование</th>
		                        <th>Описание</th>
		                        <th>Код простоя</th>
		                        <th>Tag</th>
		                        <th>Действия</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@foreach($downtime_reasons as $downtimeReason)
		                    <tr>
		                        <td>{{($downtime_reasons->currentPage() - 1) * $downtime_reasons->perPage() + $loop->iteration}}</td>
		                        <td>{{$downtimeReason->name}}</td>
		                        <td>{{$downtimeReason->desc}}</td>
		                        <td>{{$downtimeReason->code}}</td>
		                        <td>-</td>
		                        <td>
		                            <a href="{{route('admin.downtime_reasons.destroy', ['downtime_reason' => $downtimeReason])}}" class="mr-3"><img src="/assets/img/svg/delete.svg" alt="" class="svg"></a>
		                            <a href="{{route('admin.downtime_reasons.edit', ['downtime_reason' => $downtimeReason])}}"><img src="/assets/img/svg/c-edit.svg" alt="" class="svg"></a>
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