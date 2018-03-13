<div class="panel panel-success">
	<div class="panel-heading">
		<span class="panel-title">
			<?php echo __('My Documents'); ?>
		</span>
		<span class="panel-title-right">
			<?php echo $this->Html->link(__('Add Documents', true), ['action'=>'add'], ['class'=>'btn btn-default']); ?>
		</span>
		<span class="panel-title-right">
			<?php echo $this->Html->link(__('Documents Home', true), ['action'=>'index'], ['class'=>'btn btn-default']); ?>
		</span>
	</div>
	<div class="panel-body">
        <div class="alert alert-info" style="text-align: left;">

			<span style="margin-top:20px;"><strong><p>Suggested documents to upload:</p></strong>	

		<table>
			<tr>
				<td>
		<ul>
		<li>Marketing Collateral</li>
		<li>Job Description Examples</li>
		<li>Office Operations</li>
		<li>Presentations</li>
		</ul>
				</td>
				<td>
		<ul>
		<li>Innovation (cool things people are on)</li>
		<li>Recruitment Strategy</li>
		<li>Recruiters Best Practice</li>
		</ul>
				</td>
			</tr>
		
		</table>
	</span>
   </div>
		<?php echo $this->element('../Documents/all_mydocuments'); ?>
	</div>
</div>