@extends('layouts.app')

@section('title', $pageTitle)

@section('content')

<div class="container-fluid">
	<div class="row mb-30">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-end">
						<a href="{{route('admin.downtimes.create')}}" class="btn btn-info">Добавить</a>
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
		                        <th>Оборудование</th>
		                        <th>Причина простоя</th>
		                        <th>Время начала</th>
		                        <th>Время окончания</th>
		                        <th>Действия</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@foreach($downtimes as $downtime)
		                    <tr>
		                        <td>{{($downtimes->currentPage() - 1) * $downtimes->perPage() + $loop->iteration}}</td>
		                        <td>{{$downtime->equipment->name}}</td>
		                        <td>{{$downtime->downtimeReason->name}} ({{$downtime->downtimeReason->code}})</td>
		                        <td>{{$downtime->begin_at}}</td>
		                        <td>{{$downtime->ended_at}}</td>
		                        <td>
		                            <a href="{{route('admin.downtimes.destroy', ['downtime' => $downtime])}}" class="mr-3"><img src="/assets/img/svg/delete.svg" alt="" class="svg"></a>
		                            <a href="{{route('admin.downtimes.edit', ['downtime' => $downtime])}}"><img src="/assets/img/svg/c-edit.svg" alt="" class="svg"></a>
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