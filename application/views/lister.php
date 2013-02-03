	 <section id="form" class="well span7 input-append">
		 <?php
			//form igniter
			echo form_open('message/curler', array('methodes' => 'post'));
			echo form_label('Type your website :', 'message');
			$MsgInput = array(
				'name' => 'message',
				'id' => 'message',
				'class' => 'span6'
			);
			echo form_input($MsgInput);
			
			$submit = array(
				'name' => 'check',
				'value' => 'Curl !',
				'class' => 'btn btn-info btn-large'
			);
			echo form_submit($submit);

			echo form_close();
		?>   
	</section>
	
	<?php if (isset($erreur)) { echo $erreur; } ?>
	
	<?php if(isset($curl_site)) : ?>
	<section id="curl" class="span_4_of_4">
			<?php if(isset($img)): ?>
				<div class="img">
					<a href="<?php if(isset($curl_site)) : echo $curl_site; endif; ?>" title="visiter <?php if(isset($curl_titre)) : echo $curl_titre; endif; ?>">
						<?php foreach ($img[1] as $image) : ?>
							<figure>
								<img src="<?php echo $image; ?>" alt="<?php if(isset($curl_titre)) : echo $curl_titre; endif; ?>" />
							</figure>
						<?php endforeach; ?>
					</a>
					<button id="previous">prev</button>
					<button id="next">Next</button>
				</div>
			<?php endif; ?>
			<header class="curl_titre span_3_of_4">
				<a href="<?php if(isset($curl_site)) : echo $curl_site; endif; ?>" title="visiter <?php if(isset($curl_titre)) : echo $curl_titre; endif; ?>">
					<?php  if(isset($curl_titre)) : echo $curl_titre; endif; ?>
				</a>
			</header>
			<footer class="curl_description span_3_of_4">
				<a href="<?php if(isset($curl_site)) : echo $curl_site; endif; ?>" title="visiter <?php if(isset($curl_titre)) : echo $curl_titre; endif; ?>">
					<?php  if(isset($curl_description)) : echo $curl_description; endif; ?>
				</a>
			</footer>
		<?php endif; ?>
		
		<?php
			//form igniter
			echo form_open('message/ajouter', array('methodes' => 'post'));
			
			$nomInput = array(
				'name' => 'nom',
				'type' => 'hidden',
				'value' => isset($curl_titre) ? $curl_titre : ''
			);
			echo form_input($nomInput);
			
			$descInput = array(
				'name' => 'desc',
				'type' => 'hidden',
				'value' => isset($curl_description) ? $curl_description : ''
			);
			echo form_input($descInput);
			
			$imgInput = array(
				'name' => 'img',
				'type' => 'hidden',
				'value' => isset($image) ? $image : ''
			);
			echo form_input($imgInput);
			
			$submit = array(
				'name' => 'ajouter',
				'value' => 'Add',
				'id' => 'add',
				'class' => 'btn'
			);
			echo form_submit($submit);

			echo form_close();
		?>

	 </section>
     
	<section>

		<?php if(isset($message)) : 
			foreach ($message as $msg) : ?>
			<div id="lien">
				<h3><?php echo $msg['titre']; ?></h3>
				<p><?php echo $msg['description']; ?></p>
				<img src="<?php echo $msg['image']; ?>" alt="<?php echo $msg['titre']; ?>" />
				<a href="message/supprimer/<?php echo $msg['id']; ?>" title="supprimer ce lien" class="delete">SUPPRIMER</a>
			</div>
			
		<?php endforeach; endif; ?>
	</section>
		
</div>