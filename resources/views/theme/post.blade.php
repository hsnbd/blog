@extends('master')


@section('content')


@foreach($post as $post)
				<div class="single-top">

					
					<img src="/images/7.jpg" class="img-responsive" alt="">
					
					<br>			

					<div class="artical-links">
					 	<ul>
					 		<li><small> </small><span>{{ $post->created_at }}</span></li>
					 		<li><a href="#"><small class="admin"> </small><span>admin</span></a></li>
					 		<li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
					 		<li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>
					 		<li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
					 	</ul>
					 </div>

					<br>		

					<h2>{{$post->title}}</h2>

										


					<p class="sin">

						{{$post->body}}

					</p>


@endforeach










						

						<div class="respon">
							<h2>Responses so far</h2>
							<div class="strator">
								<h5>ADMINISTRATOR</h5>
								<p>feb 20th, 2015 at 9:41 pm</p>
								<div class="strator-left">
									<img src="/images/co.png" class="img-responsive" alt="">
								</div>
								<div class="strator-right">
									<p class="sin">Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra aug  
										metus auctor fringilla. Donec id elit non mi porta  da at eget me  us, tellus ac   
										ortor mauris ntum nibh, ut fermentum massa risus. Sed posuere consectetur 
										Nulla vitae elit liber. Sed posuere consectetur est at lobortis.</p>
								</div>

								<div class="clearfix"></div>
								<div class="rep">
									<a href="#" class="reply">REPLY</a>
								</div>
							</div>
							<div class="strator1">
								<h5>JANE DOE</h5>
								<p>feb 20th, 2015 at 9:41 pm</p>
									<div class="strator-left">
										<img src="/images/co.png" class="img-responsive" alt="">
									</div>
									<div class="strator-right">
										<p class="sin">Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pti
											metus auctor fringilla. Donec id elit non mi porta  da at eget me  us,
											ortor mauris ntum nibh, ut fermentum massa risus. Sed posuere 
											Nulla vitae elit liber. Sed posuere consectetur.</p>
									</div>
								<div class="clearfix"></div>
								<div class="rep">
									<a href="#" class="reply">REPLY</a>
								</div>
							</div>
							<div class="comment">
								<h2>Leave a comment</h2>
								<form method="post" action="">
								 <input type="text" class="textbox" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
								 <input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
								  <input type="text" class="textbox" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}">
								 <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
								 <div class="smt1">
									<input type="submit" value="add a comment">
								 </div>
							   </form>
							</div>
						</div>
				</div>

@endsection

