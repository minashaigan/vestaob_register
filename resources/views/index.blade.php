<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<title>وستاک</title>
		<link rel="shortcut icon" href="/img/favicon.png">
		<link rel="stylesheet" type="text/css" href="/RTL-css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/RTL-css/demo.css" />
		<link rel="stylesheet" type="text/css" href="/RTL-css/component.css" />
		<link rel="stylesheet" type="text/css" href="/RTL-css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="/RTL-css/cs-skin-boxes.css" />
		<link rel="stylesheet" type="text/css" href="/RTL-css/bars-1to10.css" />
		<link rel="stylesheet" type="text/css" href="/RTL-css/custom.css" />
		<script src="/js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>فرم روزمه کارآموزی در وستاک</h1>
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="off">
					<ol class="fs-fields">
						<li>
                            <label class="fs-field-label fs-anim-upper" for="name">اسمت چیه؟</label>
                            <input class="fs-anim-lower" id="name" name="name" type="text" placeholder="استیو جابز" required/>
                            <label class="fs-field-label fs-anim-upper" for="mail">ایمیلتم بگو.</label>
                            <input class="fs-anim-lower" id="mail" name="mail" type="email" placeholder="stevejojo@gmail.com" required/>
                            <label class="fs-field-label fs-anim-upper" for="phone">یه شماره تماسم بده.</label>
                            <input class="fs-anim-lower" id="phone" name="phone" type="number" placeholder="09363636333" required/>
						</li>
						<li>
                            <label class="fs-field-label fs-anim-upper" for="section">در چه مقطعی هستی؟</label>
                            <input class="fs-anim-lower" id="section" name="grade" type="text" placeholder="کارشناسی"/>
                            <label class="fs-field-label fs-anim-upper" for="branch">چه رشته ای؟</label>
                            <input class="fs-anim-lower" id="branch" name="major" type="text" placeholder="مهندسی نرم افزار"/>
                            <label class="fs-field-label fs-anim-upper" for="university">کدوم دانشگاه؟</label>
                            <input class="fs-anim-lower" id="university" name="university" type="text" placeholder="تهران جنوب شرقی"/>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" data-info="گرایش هایی که مهارت های نیاز اونو داری.">در چه گرایش هایی مهارت داری؟</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="back" name="back" type="checkbox" value="back"/><label for="back" class="radio-back">توسعه وب</label></span>
								<span><input id="front" name="front" type="checkbox" value="front"/><label for="front" class="radio-front">طراحی وب</label></span>
								<span><input id="mobile" name="mobile" type="checkbox" value="mobile"/><label for="mobile" class="radio-mobile">موبایل</label></span>
								<span><input id="data" name="data" type="checkbox" value="data"/><label for="data" class="radio-datamining">داده کاوی</label></span>
								<span><input id="graphic" name="graphic" type="checkbox" value="graphic"/><label for="graphic" class="radio-graphic">گرافیک</label></span>
								<span><input id="digital" name="digital" type="checkbox" value="digital"/><label for="digital" class="radio-digital">بازاریابی دیجیتال</label></span>
								<span><input id="project" name="project" type="checkbox" value="project"/><label for="project" class="radio-project">مدیریت پروژه</label></span>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" data-info="مهارت های عمومی مورد نیاز برای هر کار IT.">مهارت های کلی</label>
							<div class="box box-orange fs-radio-group fs-radio-custom clearfix fs-anim-lower box-example-1to10">
								<div class="box-header">مهارت 1</div>
								<div class="box-body">
									<select class="example-1to10" name="rating">
										<option value="" selected="selected"></option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7" >7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</div>
							</div>
							<div class="box box-orange fs-radio-group fs-radio-custom clearfix fs-anim-lower box-example-1to10">
								<div class="box-header">مهارت 1</div>
								<div class="box-body">
									<select class="example-1to10" name="rating">
										<option value="" selected="selected"></option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7" >7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</div>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" data-info="مهارت های موجود در گرایش هایی که انتخاب کردی">مهارت های فنی</label>
							<div class="box box-orange fs-radio-group fs-radio-custom clearfix fs-anim-lower box-example-1to10">
								<div class="box-header">مهارت 1</div>
								<div class="box-body">
									<select class="example1-1to10" name="rating">
										<option value="" selected="selected"></option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7" >7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</div>
							</div>
							<div class="box box-orange fs-radio-group fs-radio-custom clearfix fs-anim-lower box-example-1to10">
								<div class="box-header">مهارت 1</div>
								<div class="box-body">
									<select class="example1-1to10" name="rating">
										<option value="" selected="selected"></option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7" >7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</div>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" data-info="">به چه مهارت هایی علاقه داری؟</label>
							<div class="favorite fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="html" name="html" type="checkbox" value="html"/><label for="html">html</label></span>
								<span><input id="css" name="css" type="checkbox" value="css"/><label for="css">css</label></span>
								<span><input id="bs" name="bs" type="checkbox" value="bs"/><label for="bs">bootstrap</label></span>
								<span><input id="android" name="android" type="checkbox" value="android"/><label for="android">android</label></span>
								<span><input id="sw" name="sw" type="checkbox" value="sw"/><label for="sw" >الگوهای ساخت نرم افزار</label></span>
								<span><input id="psd" name="psd" type="checkbox" value="psd"/><label for="psd" >photoshop</label></span>
								<span><input id="ui" name="ui" type="checkbox" value="ui"/><label for="ui">قابلیت طراحی ui</label></span>
							</div>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="describe">چندخط درباره ی خودت بنویس.</label>
							<textarea class="fs-anim-lower" id="describe" name="describe" placeholder="من توانایی ..."></textarea>
						</li>
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit">بفرست بره!</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->

		</div><!-- /container -->


		<script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js/classie.js"></script>
		<script src="/js/selectFx.js"></script>
		<script src="/js/jquery.barrating.min.js"></script>
        <script src="/js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				/*[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );*/

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
		<script>
            $(document).ready(function () {
                $('html, body').animate({ scrollTop: 0 }, 'slow');
            });
            $('button.fs-continue').click(function () {
               $('html, body').animate({ scrollTop: 20 }, 'slow');
            })
			$('.box-example-1to10').ready(function () {
				/**
				 * Rating plugin
				 */
				$('.example-1to10').barrating('show', {
					theme: 'bars-1to10',
                    allowEmpty: true
				});
			});
			$('.box-example1-1to10').ready(function () {
				/**
				 * Rating plugin
				 */
				$('.example1-1to10').barrating('show', {
					theme: 'bars-1to10',
                    allowEmpty: true
				});
			});
		</script>
	</body>
</html>