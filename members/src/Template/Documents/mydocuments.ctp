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
<span><p>Any document uploaded is visible and downloadable to all members.  Make sure any document  that is uploaded does not contact sensitive information.  Do not upload any information that you do not own or do not have permissions to share.  NCACE is not responsible for the use of any documents that are downloaded from this site.  If you have any question please contact the President before you upload a document</p></span>
<span style="margin-top:20px;"><strong>Suggested documents to upload:</strong>	

		<table>

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