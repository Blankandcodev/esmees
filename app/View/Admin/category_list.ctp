<pre>
<ul><?php foreach($categories['0']['children'] as $category){ ?>
	<li><?php echo $category['Category']['name']; ?>
		<?php if($category['children']){ ?>
			<ul>
				<?php foreach($category['children'] as $category){ ?>
					<li><?php echo $category['Category']['name']; ?>			
						<?php if($category['children']){ ?>
							<ul>
							<?php foreach($category['children'] as $category){ ?>
								<li><?php echo $category['Category']['name']; ?></li>
							<?php } ?>
							</ul>
						<?php } ?>
					</li>
				<?php } ?>
			</ul>
		<?php } ?>
	</li>
<?php }; ?>
</ul>