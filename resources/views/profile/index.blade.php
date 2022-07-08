@extends('layouts.master')

@section('content')
<section class="dashboard section">
	<!-- Container Start -->
	<div class="container">
		<!-- Row Start -->
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<div class="profile-thumb">
							<img src="{{$profileInfo->image}}" alt="" class="rounded-circle">
						</div>
						<!-- User Name -->
						<h5 class="text-center">{{$profileInfo->name}}</h5>
						<p>Joined {{$profileInfo->created_at}}</p>
						<a href="user-profile.html" class="btn btn-main-sm">Edit Profile</a>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li class="active">
								<a href="dashboard-my-ads.html"><i class="fa fa-user"></i> My Ads</a></li>
							<li>
								<a href="dashboard-favourite-ads.html"><i class="fa fa-bookmark-o"></i> Favourite Ads <span>5</span></a>
							</li>
							<li>
								<a href="dashboard-archived-ads.html"><i class="fa fa-file-archive-o"></i>Archeved Ads <span>12</span></a>
							</li>
							<li>
								<a href="dashboard-pending-ads.html"><i class="fa fa-bolt"></i> Pending Approval<span>23</span></a>
							</li>
							<li>
								<a href="logout.html"><i class="fa fa-cog"></i> Logout</a>
							</li>
							<li>
								<a href="delete-account.html"><i class="fa fa-power-off"></i>Delete Account</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					<h3 class="widget-header">My Ads</h3>
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Image</th>
								<th>Product Title</th>
								<th class="text-center">Category</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($allAds as $ad)
							<tr>
								
								<td class="product-thumb">
									<img width="80px" height="auto" src={{$ad->image}} alt="image description"></td>
								<td class="product-details">
									<h3 class="title">{{$ad->title}}</h3>
									<span class="add-id"><strong>Ad ID:</strong> {{$ad->id}}</span>
									<span><strong>Posted on: </strong><time>{{$ad->created_at}}</time> </span>
									<span class="status {{$ad->status ? 'active' : ''}}"><strong>Status</strong>{{$ad->status == 0 ? 'Pending' : 'Active'}}</span>
									<span class="location"><strong>Location</strong>{{$getCategory($ad->category_id)->name}}</span>
								</td>
								<td class="product-category"><span class="categories">{{$getCategory($ad->category_id)->name}}</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="view" href="">
													<i class="fa fa-eye"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					@if ($allAds->hasPages())
						<div class="pagination-wrapper">
							{{ $allAds->links('pagination::bootstrap-4') }}
						</div>
					@endif
					
				</div>
			</div>
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->
</section>
@endsection