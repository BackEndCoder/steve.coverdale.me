<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this->Html->Link('Steve Coverdale', '/', array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="/github/">Github</a></li>
			<li><a href="https://www.linkedin.com/in/cakephpdevelopment/">Linkedin</a></li>
			<li><a href="/contact/">Contact</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sites <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="http://culturefrieze.com/">Culture Frieze</a></li>
					<li><a href="http://guestlist.net/">Guestlist</a></li>
					<li><a href="http://utterlybaked.com/">Utterly Baked</a></li>
				</ul>
			</li>
		</ul><!-- /.nav navbar-nav -->
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->