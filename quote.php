<?php
if(isset($_POST['get_quote']))
{
			$quote=array(

		'Art WASHES AWAY from the soul the dust of everyday life. -- Pablo Picasso' ,
		'An ARTIST can paint square wheels, but an ARCHITECT must make them round. -- Paul Klee',
		'Art is a religion. Its aim is the elevation of mind. No jokes, no girls, no wine.',
		'Material philosophy has to do with the laws. Two parts. Science of NATURE is physics. Science of FREEDOM (will of MAN) is ethics. --Kant' ,
		'Sometimes I get very upset when people talk forever but they don\'t know what they are talking about because they don\'t have a DRAWING. -Helmut Jahn' ,
		'An architecture that promotes: richness and ambiguity OVER unity and clarity, contradiction and redundancy OVER harmony and simplicity. --Robert Venturi' ,
		'Let us strive for, conceive and create the new building of the future that will unite every discipline, architecture and sculpture and painting, and which will one day rise heavenwards from the million hands of craftsmen as a clear symbol of a new belief to come. --Walter Gropius'
			);

			$var=mt_rand(0, count($quote)-1);
			echo json_encode($quote[$var]);
			exit();
}
?>