<h2>
#All
</h2>
<hr>
<?php foreach ($questions as $question) :?>
	<div class="media">
	  <a class="pull-left" href="#">
		<img class="media-object" src="http://dummyimage.com/48x48" alt="...">
	  </a>
	  <div class="media-body">
		<h3 class="media-heading">
			<?= $question['Question']['title'] ;?> 
		</h3>
		<div>
			<p>質問者: Takuya Nishio  |  回答数: 12 | #All</p> 
		</div>
	  </div>
	</div>
	<hr>
<?php endforeach;?>
