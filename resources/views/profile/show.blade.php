<x-app-layout scripts=true>
   

    {{-- <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            {{-- @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif --}}

            {{-- @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif --}}

            {{-- @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif --}}

            {{-- <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>  
    --}}
</x-app-layout>




    @include('../layouts/tempNav')
	<!-- page title -->
	<section class="section section--first section--last section--head" data-bg="/img/bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Profile</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="index.html">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Profile</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->
	
	<!-- section -->
	<section class="section section--last">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="profile" style="margin-bottom: 6%">
						<div class="profile__user">
							<div class="profile__avatar">
								<img src="img/user.svg" alt="">
							</div>
							<div class="profile__meta">
								<h3>{{auth()->user()->name}}</h3>
								<span>GoGame ID: {{auth()->user()->id}}</span>
							</div>
						</div>

						<ul class="nav nav-tabs profile__tabs" id="profile__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">My purchases</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Settings</a>
							</li>
						</ul>
						<form action="{{route('logout')}}" method="POST">
							@csrf
							<button class="profile__logout" type="submit">
								<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256' fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'/></svg>
								<span>Logout</span>
							</button>
						</form>
					</div>
				</div>
			</div>	
		</div>

		<div class="container">
			<!-- content tabs -->
			
			{{-- ------------requests----------- --}}
			<div class="tab-content">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel">
					<div class="row">
						<div class="col-12" style="margin-bottom:40px;">
							<h3 class="section__title" >Requests</h3>
						</div>
						<div class="col-12">
							<div class="table-responsive table-responsive--border">
								<table class="profile__table">
									<thead>
										<tr>
											<th>№</th>
											<th><a href="#">Product <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/></svg></a></th>
											<th><a href="#" class="active">Title <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,13.41,12.71,9.17a1,1,0,0,0-1.42,0L7.05,13.41a1,1,0,0,0,0,1.42,1,1,0,0,0,1.41,0L12,11.29l3.54,3.54a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29A1,1,0,0,0,17,13.41Z"/></svg></a></th>
											<th><a href="#">Platform <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/></svg></a></th>
											<th><a href="#">Traded with <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/></svg></a></th>
											<th><a href="#" class="active">Date <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a></th>
											<th><a href="#">Status <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/></svg></a></th>
											<th></th>
										</tr>
									</thead>

									<tbody>
										@foreach ($requests as $index => $request)
											<tr>
												<td><a href="/trade/{{$request->trade_with_id}}">{{$index + 1}}</a></td>
												<td>
													<div class="profile__img">
														<img src="/img/cards/5.jpg" alt="">
													</div>
												</td>
												<td>{{$request->trade_with_title}}</td>
												<td>{{$request->platform}}</td>
												<td><a href="/trade/{{$request->trade_id}}">View</a></td>
												<td>{{$request->created_at}}</td>
												<td><span class="profile__status {{$request->status  ? 'profile__status--confirmed' :''}}">{{$request->status ? 'Conformed' : 'Pending'}}</span></td>
												<td><button class="profile__delete" type="button"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><line x1='368' y1='368' x2='144' y2='144' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='368' y1='144' x2='144' y2='368' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg></button></td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>

						<!-- paginator -->
						<div class="col-12">
							<div class="paginator">
								<div class="paginator__counter" style="margin-bottom:6%">
									Total of {{$requests->total()}}
								</div>

								<ul class="paginator__wrap">
									{{-- <li class="paginator__item paginator__item--prev">
										<a href="#">
											<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><polyline points='244 400 100 256 244 112' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px'/><line x1='120' y1='256' x2='412' y2='256' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px'/></svg>
										</a>
									</li> --}}
									{{$requests->links()}}
									{{-- <li class="paginator__item paginator__item--active"><a href="#">1</a></li>
									<li class="paginator__item"><a href="#">2</a></li>
									<li class="paginator__item"><a href="#">3</a></li> --}}
									{{-- <li class="paginator__item paginator__item--next">
										<a href="#">
											<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><polyline points='268 112 412 256 268 400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px'/><line x1='392' y1='256' x2='100' y2='256' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px'/></svg>
										</a>
									</li> --}}
								</ul>
							</div>
						</div>
						<!-- end paginator -->
					</div>

					<div class="row">
						<div class="col-12" style="margin-bottom:40px;">
							<h3 class="section__title" >Trades</h3>
						</div>
						<div class="col-12">
							<div class="table-responsive table-responsive--border">
								<table class="profile__table">
									<thead>
										<tr>
											<th>№</th>
											<th><a href="#">Product <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/></svg></a></th>
											<th><a href="#" class="active">Title <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,13.41,12.71,9.17a1,1,0,0,0-1.42,0L7.05,13.41a1,1,0,0,0,0,1.42,1,1,0,0,0,1.41,0L12,11.29l3.54,3.54a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29A1,1,0,0,0,17,13.41Z"/></svg></a></th>
											<th><a href="#">Platform <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/></svg></a></th>
											<th><a href="#" class="active">Date <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a></th>
											<th><a href="#">Status <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/></svg></a></th>
											<th></th>
										</tr>
									</thead>

									<tbody>
										@foreach ($trades as $index => $trade)
											<tr>
												<td><a href="/trade/{{$trade->id}}">{{$index + 1}}</a></td>
												<td>
													<div class="profile__img">
														<img src="/img/cards/5.jpg" alt="">
													</div>
												</td>
												<td>{{$trade->title}}</td>
												<td>{{$trade->name}}</td>
												<td>{{$trade->created_at}}</td>
												<td><span class="profile__status {{$trade->status  ? 'profile__status--confirmed' :''}}">{{$trade->status ? 'Conformed' : 'Pending'}}</span></td>
												<td><button class="profile__delete" type="button"><svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><line x1='368' y1='368' x2='144' y2='144' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='368' y1='144' x2='144' y2='368' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg></button></td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>

						<!-- paginator -->
						<div class="col-12">
									<div class="paginator">
										<div class="paginator__counter">
											Total of {{$trades->total()}}
										</div>
		
										<ul class="paginator__wrap">
											{{-- <li class="paginator__item paginator__item--prev">
												<a href="#">
													<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><polyline points='244 400 100 256 244 112' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px'/><line x1='120' y1='256' x2='412' y2='256' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px'/></svg>
												</a>
											</li> --}}
											{{$trades->links()}}
											{{-- <li class="paginator__item paginator__item--active"><a href="#">1</a></li>
											<li class="paginator__item"><a href="#">2</a></li>
											<li class="paginator__item"><a href="#">3</a></li> --}}
											{{-- <li class="paginator__item paginator__item--next">
												<a href="#">
													<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><polyline points='268 112 412 256 268 400' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px'/><line x1='392' y1='256' x2='100' y2='256' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px'/></svg>
												</a>
											</li> --}}
										</ul>
									</div>
						</div>
								<!-- end paginator -->
					</div>
				</div>


	
				<div class="tab-pane fade" id="tab-2" role="tabpanel">
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')
    
                    <x-jet-section-border />
                    @endif
						<!-- end details form -->

						<!-- password form -->
                        @livewire('profile.update-password-form')
						<!-- end password form -->

                        {{-- two factor auth  --}}
                        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.two-factor-authentication-form')
                            </div>

                            <x-jet-section-border />
                        @endif
                        {{-- two factor auth  --}}

                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.logout-other-browser-sessions-form')
                        </div>
            
                        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                            <x-jet-section-border />
            
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.delete-user-form')
                            </div>
                        @endif
					</div>
				</div>
			</div>
			<!-- end content tabs -->
		</div>
	</section>
	<!-- end section -->

    @include('../layouts/footer')