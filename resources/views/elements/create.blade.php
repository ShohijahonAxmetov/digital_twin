@extends('layouts.app')

@section('title', $pageTitle)

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

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
		        <div class="col-lg-6">
				    <!-- Base Vertical Form -->
				    <div class="form-element py-30 vertical-form mb-30">
				        <h4 class="font-20 mb-30">Основная информация</h4>
				        <!-- Form -->
				        <form action="{{route('admin.elements.store')}}" method="POST">
				        	@csrf
				            <!-- Form Group -->
				            <div class="form-group">
				                <label class="font-14 bold mb-2">Наименование</label>
				                <input name="name" type="text" class="theme-input-style" placeholder="Наименование">
				            </div>
				            <!-- End Form Group -->
				            <!-- Form Group -->
				            <div class="form-group">
				                <label class="font-14 bold mb-2">Родительский элемент</label>
				                <select name="parent_id" class="theme-input-style">
									<option value="">Выберите из списка</option>
				                	@foreach($elements as $element)
									<option value="{{$element->id}}">{{$element->name}}</option>
									@endforeach
								</select>
				            </div>

				            <div class="form-group">
				                <label class="font-14 bold mb-2">Оборудование</label>
				                <select name="equipment_id" class="theme-input-style">
									<option value="">Выберите из списка</option>
				                	@foreach($equipments as $equipment)
									<option value="{{$equipment->id}}">{{$equipment->name}}</option>
									@endforeach
								</select>
				            </div>

				            <div class="form-group">
				                <label class="font-14 bold mb-2">Характер отказа</label>
				                <select name="refusal_nature_id" class="theme-input-style">
									<option value="">Выберите из списка</option>
				                	@foreach($refusalNatures as $refusalNature)
									<option value="{{$refusalNature->id}}">{{$refusalNature->name}}</option>
									@endforeach
								</select>
				            </div>
				            <!-- End Form Group -->
				            <!-- Form Group -->
				            <div class="form-row">
				                <div class="col-12 text-right">
				                    <button type="submit" class="btn bg-success">Сохранить</button>
				                </div>
				            </div>
				            <!-- End Form Group -->
				        </form>
				        <!-- End Form -->
				    </div>
				    <!-- End Vertical Form -->
				</div>
		    </div>
		</div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    $('[name="parent_id"]').select2();
	    $('[name="equipment_id"]').select2();
	    $('[name="refusal_nature_id"]').select2();
	});
</script>
@endsection