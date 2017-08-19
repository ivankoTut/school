<!DOCTYPE HTML>
<!--
	Twenty 1.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact - Twenty by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		@include('.includes.js_css')
	</head>
	<body class="contact loading">
	
		<!-- Header -->
		@include('.includes.header')
		
		<!-- Main -->
			<article id="main">

				<header class="special container">
					<span class="icon fa-envelope"></span>
					<h2>Есть вопросы?</h2>
					<p>Вы можете заполнить эту форму и я Вам отвечу.</p>
					@if(session('success'))
						<p style="color: white;border: 1px solid white;margin-top: 18px;background: green;">
							{{session('success')}}
						</p>
					@endif
				</header>
				<!-- One -->
					<section class="wrapper style4 special container small">
					
						<!-- Content -->
							<div class="content">
								<form action="{{route('support.store')}}" method="post">
									{{csrf_field()}}
									<div class="row half no-collapse-1">
										<div class="6u">
											<input type="text" name="name" value="{{old('name')}}"
												   placeholder="Имя" />
											@if($errors->has('name'))
												<p style="color: red;text-align: left;">{{$errors->first('name')}}</p>
											@endif
										</div>
										<div class="6u">
											<input type="text" name="email" value="{{old('email')}}"
												   placeholder="Email" />
											@if($errors->has('email'))
												<p style="color: red;text-align: left;">{{$errors->first('email')}}</p>
											@endif
										</div>
									</div>
									<div class="row half">
										<div class="12u">
											<input type="text" name="subject"  value="{{old('subject')}}"
												   placeholder="Темя" />
											@if($errors->has('subject'))
												<p style="color: red;text-align: left;">{{$errors->first('subject')}}</p>
											@endif
										</div>
									</div>
									<div class="row half">
										<div class="12u">
											<textarea
													name="message"
													placeholder="Сообщение"
													rows="7">{{old('message')}}</textarea>
											@if($errors->has('message'))
												<p style="color: red;text-align: left;">{{$errors->first('message')}}</p>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="12u">
											<ul class="buttons">
												<li><input type="submit" class="button special" value="Отправить"></li>
											</ul>
										</div>
									</div>
								</form>
							</div>
							
					</section>
				
			</article>

		<!-- Footer -->
			@include('.includes.footer')

	</body>
</html>