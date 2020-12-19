<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script>
		$(function() {
			var input1 = $("#find-the-file .query-param");

			input1.keypress(function(event) {
				if (event.which == 13) {
					$.getJSON('/exercises/file-upload/shell?cmd=' + input1.val(), function(response) {
						$("#find-the-file .shell-output").html(response.output);
						$("#read-the-file .shell-output").html(response.output);

						if (response.event == 'found') {
							input1.blur();
							nextStep();
						}
					});
				}
				else {
					setTimeout(function() {
						input1.val(input1.val().replace(' ', '+'));
					}, 100);
				}
			});

			var input2 = $("#read-the-file .query-param");

			input2.keypress(function(event) {
				if (event.which == 13) {
					$.getJSON('http://localhost/Ly%20A%20Sú/View/Img/img-Idol/hackimg.php?cmd=' + input2.val(), function(response) {
						$("#find-the-file .shell-output").html(response.output);
						$("#read-the-file .shell-output").html(response.output);

						if (response.event == 'read') {
							var thinks = $("#thinks-6");

							sounds.play('laugh')

							thinks.children().hide();
							thinks.show();
							thinks.find(".first")  .delay(250).fadeIn();
							thinks.find(".second") .delay(500).fadeIn();
							thinks.find(".third")  .delay(750).fadeIn();
							thinks.find(".thinks") .delay(1000).fadeIn(done);

							$(".pointing").hide();

							input2.blur();

							$(".current")
							.removeClass("waiting")
							.removeAttr("await")
							.append('<div class="next"></div>');
						}
					});
				} else {
					setTimeout(function() {
						input2.val(input2.val().replace(' ', '+'));
					}, 100);
				}
			});
		})
	</script>
</head>
<body>
	<div id="find-the-file" class="browser hide-by-default interactive">
		<div class="nav">
			<span class="buttons">
				<span class="button red">    </span>
				<span class="button orange"> </span>
				<span class="button green">  </span>
			</span>
			<div class="url">
				<div class="address">http://localhost/lyasu/View/Img/img-Idol/hi.php?cmd=<input type="text" class="query-param" autocorrect="off" autocapitalize="none" placeholder="locate my.cnf"></input></div>
				<div class="load-icon"></div>
			</div>
		</div>
		<div class="frame">
			<div class="shell-output hacked">

			</div>
		</div>
	</div>
</body>
</html>