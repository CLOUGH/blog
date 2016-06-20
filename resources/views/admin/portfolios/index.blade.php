@extends('layouts.admin')

@section('header')
	
@endsection
@section('content')
	<div class="row wrapper border-bottom white-bg page-heading">
	    <div class="col-lg-10">
	        <h2>Portfolio</h2>
	    </div>
	    <div class="col-lg-2">
			
	    </div>
	</div>
	<div class="wrapper wrapper-content animated fadeIn">
		<div class="ibox">
			<div class="ibox-content">
				<div class="row">
					<div class="col-lg-12 text-right">
						<a href="{{ url('admin/portfolios/create') }}" class="btn btn-primary">Create Portfolios</a>
						<br>
						<br>
					</div>
				</div>
				<div class="row">
					
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th></th>
										<th style="width: 30%">Name</th>
										<th class="text-center">Published</th>
										<th class="text-center">Categories</th>
										<th class="text-center">Updated At</th>
										<th class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach($portfolios as $portfolio)
										<tr class="clickable"  href="{{ url("admin/portfolios/$portfolio->id/edit") }}">
											<td>{{ $portfolio->id }}</td>
											<td>{{ $portfolio->name }}</td>
											<td class="text-center"><input type="checkbox" class="i-checks" {{ $portfolio->published==true ? 'checked': '' }}  disabled="disabled"> </td>
											<td class="text-center"></td>
											<td class="text-center">{{ $portfolio->updated_at->toFormattedDateString() }}</td>
											<td class="text-center actions">
												<div class="btn-group">
		                                            <a onclick="deleteportfolio({{ $portfolio->id }})"}} href="#" class="btn-danger btn btn-xs"><i class="fa fa-trash"></i></a>
		                                        </div>
											</td>
										</tr>
									@endforeach
									@if(empty($portfolios))
										<tr>
											<td colspan="8" class="text-center">No Records Found.</td>
										</tr>
									@endif
								</tbody>
								<tfoot>
									<tr>
	                                    <td colspan="8" class="footable-visible">
	                                        {!! $portfolios->links() !!}
	                                    </td>
	                                </tr>
								</tfoot>
							</table>
						</div>
						
					</div>
				</div>
			</div>
		</div>		
	</div>
@endsection

@section('scripts')
    
@endsection