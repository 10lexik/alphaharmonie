<!DOCTYPE html> 
<html lang="fr">
<head>
  <meta charset="utf-8" />	
  <title>Alpha harmonie accueil</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="css/jquery.mobile.structure-1.1.0.css" />
	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Snippet|Open+Sans+Condensed:300,300italic|IM+Fell+English:400,400italic|IM+Fell+English+SC|Raleway:100|Meddon|Aclonica|Kameron|Open Sans ">
    <link rel="stylesheet" href="css/styles.css" />
    
</head> 
<body> 

<div data-role="page" id="accueil">
	
	<div class="collapsableNav">
		<ul>
			<li><a href="#seminaireSolo" data-transition="slide">Séances personnalisées</a></li>
			<li><a href="#seminaireGroupe" data-transition="slide">Séminaires groupe</a></li>
		</ul>
	</div>
	
	<nav data-role="header" class="navbar">
		<a href="#" class="toggle-menu">Menu</a>
		<a href="#plus" data-transition="flip" class="infoBtn">infos</a>
	</nav>

		<header>
			<img src="img/logo.png" alt="Alpha Harmonie" />
			<h1><span>a</span>lpha<span>h</span>armonie</h1>
            <nav>
            	<a href="#seminaireSolo">Séances</a>
                <a href="#seminaireGroupe">Séminaires</a>
                <a href="#plus" data-transition="flip">Infos</a>
                <ul>
	                <li>
	                	<a href="#">Exercices</a>
	                	<a href="#">Relaxation</a>
	                	<a href="#" data-transition="pop">Reservation</a>
	                </li>
                </ul>
            </nav>
		</header><!-- /header -->
	
		<blockquote>"Osez vous conna&icirc;tre"</blockquote>
	
    <div data-role="content" class="content">	
		
		<section>
			<h2>Accueil</h2>
            
  			<p>L'harmonie entre les différentes parties de l’homme lui assure une bonne santé physique.</p>

			<p>Le centre de développement personnel Alphaharmonie se propose d’apporter une aide aussi bien au
			niveau physique que psychique.</p>
		</section>
        
		<nav id="navAccueil" >
        
			<a href="#seminaireSolo" data-transition="slidefade"><h3>Séances personnalisées</h3
            ><p>Un paragraphe court de 2 lignes plutôt court</p
            ></a
            ><a href="#seminaireGroupe" data-transition="slidefade"><h3>Seminaires groupe</h3
            ><p>Un paragraphe court de 2 lignes plutôt court</p
            ></a>
            
		</nav>	
        
        <h3>Introduction</h3>
        
        <section>
        <p>Comprendre les causes de nos échecs et/ou de nos réussites, savoir comment entrer en contact avec
			notre partie intuitive, comprendre comment les causes influencent les effets, mais comprendre aussi
			comment les effets influencent les causes : « <i>ce qui est en haut et comme ce qui est bas, et ce qui est
			en bas est le reflet de ce qui est en haut </i>» Hermès Trismégiste, nous permet d’éviter de retomber dans
			des schémas de vie difficiles déjà connus.</p>
        
        </section>

		<section>
        
        <p>La pratique de l’observation et du silence nous met dans le principe de vivre le moment présent et
			développe notre capacité de concentration.</p>
			
			<p>Comprendre le rôle de l’introspection, apprendre à diriger notre concentration en maîtrisant nos
			pensées.</p><br>
        
        </section>        
        
        
	</div><!-- /content -->
    
    <footer>
    
	<p>Vous pouvez <a href="mailto:arn.sider@gmail.com,gwlarcher@gmail.com">nous contacter</a>,<br>et c'est avec plaisir que nous répondrons à vos demandes.</p>
    
    <div id="contact-form">
		<!--[if (lt IE 9)|!(IE)]><img src="images/interface/h2_contact.png" alt="Contactez-nous!"/><![endif]-->

		<?php
		//init variables
		$cf = array();
		$sr = false;
		
		if(isset($_SESSION['cf_returndata'])){
			$cf = $_SESSION['cf_returndata'];
			$sr = true;
		}
		?>
        
        
		<ul id="errors" class="
		<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>
        ">
			<li id="info">Oups, il y a eu un petit souci:</li>
				<?php 
					if(isset($cf['errors']) && count($cf['errors']) > 0) :
						foreach($cf['errors'] as $error) :
				?>
            
			<li>
				<?php echo $error ?>
            </li>
				<?php
				endforeach;
				endif;
				?>
		</ul>
        
		<p id="success" class="
			<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>
        ">Merci! Message envoy&eacute;!</p>
        
        
		<form method="post" action="process.php">
        <section id="inlineForm">
			<label for="name">Nom: <span class="required">*</span></label>
			<input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="Votre nom complet" required />
			
			<label for="email">Adresse mail: <span class="required">*</span></label>
			<input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="domaine@exemple.com" required />
            
            <label for="name">Téléphone: (optionel)</label>
			<input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="ex: 01 01 01 01 01" required />
            </section>
            
            
			<section id="inlineForm2">
			<label for="message">Message: <span class="required">*</span></label>
			<textarea id="message" name="message" placeholder="Votre message doit contenir plus de 20 caractères" required data-minlength="20"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
            
			<span id="loading"></span>
            
			<input type="submit" value="Envoyer!" id="submit-button" />
			<p id="req-field-desc"><span class="required">*</span> Champs obligatoires</p>
            </section>
		</form>
		
		<?php unset($_SESSION['cf_returndata']); ?>	
		
		
		            
	</div><!-- /end #contact-form -->
    
<script>
	if (!Modernizr.input.placeholder){
	$('input[placeholder], textarea[placeholder]').placeholder();
	}
</script>    	
    
    </footer>

</div><!-- /page accueil-->


<div data-role="page" id="seminaireSolo">
<a id="top" name="top"></a>
        <header>
			<a href="#accueil" class="retourAccueil" data-transition="slide" data-direction="reverse"><img src="img/logo.png" alt="Alpha Harmonie" /></a>
			<h1><span>a</span>lpha<span>h</span>armonie</h1>
            <nav>
            	<a href="#seminaireSolo">Séances</a>
                <a href="#seminaireGroupe">Séminaires</a>
                <a href="#plus" data-transition="flip">Infos</a>
                <ul>
	                <li>
	                	<a href="#">Exercices</a>
	                	<a href="#">Relaxation</a>
	                	<a href="#" data-transition="pop">Reservation</a>
	                </li>
                </ul>
            </nav>
		</header><!-- /header -->

	<div class="collapsableNav">
		<ul>
			<li><a href="#seminaireSolo" data-transition="slide">Séances personnalisées</a></li>
			<li><a href="#seminaireGroupe" data-transition="slide">Séminaires groupe</a></li>
		</ul>
	</div>
	
	<nav data-role="header" class="navbar">
		<a href="#" class="toggle-menu">Menu</a>
		<a href="#accueil" class="retourAccueil" data-transition="slide" data-direction="reverse">alphaHarmonie</a>
		<a href="#plus" data-transition="flip" >infos</a>
	</nav>


	<div data-role="content" class="content">	
	<h1>Séances personnalisées</h1>
	<p>Augmenter notre capacité de concentration en apprenant à diriger notre attention en maitrisant nos pensées.</p>
	<p>Détecter nos croyances limitantes afin de les transformer en croyances dynamisantes.</p>
	<p>Pour ce faire des exercices énergétiques basés sur la respiration sont mis en place. Ainsi que des conseils nutritionnels et sportifs.</p>
	<p>L’acquisition de ces nouveaux principes vous permettra de diriger vos objectifs avec succès.</p>
	
		<section id="unSeminaire">
		
			<h2>Intitulé</h2>
			<p class="sous-titre">Un paragraphe donnera une description synthétique du séminaire</p>
			<p>Celui ci comprendra plusieurs themes, comme un premier, celui qui vient après, et peut être même d'autres.</p>
			<ul class="listview">
				<li>Neque porro quisquam est qui dolorem </li>
				<li>ipsum quia dolor sit amet</li>
				<li>onsectetur, adipisci velit...</li>
			</ul>
		
        	<nav class="icons">
            	<a href="#top" data-ajax="false" class="btnTop scroll">haut de page</a>
            	<a href="#deuxSeminaire" data-ajax="false" class="btnDown scroll">suivant</a>
            </nav>
        
		</section>

		<section id="deuxSeminaire">
		
			<h2>Intitulé</h2>
			<p class="sous-titre">Un paragraphe donnera une description synthétique du séminaire</p>
			<p>Celui ci comprendra plusieurs themes, comme un premier, celui qui vient après, et peut être même d'autres.</p>
			<ul class="listview">
				<li>Neque porro quisquam est qui dolorem </li>
				<li>ipsum quia dolor sit amet</li>
				<li>onsectetur, adipisci velit...</li>
			</ul>
            
        	<nav class="icons">            	
            <a href="#top" data-ajax="false" class="btnTop scroll">haut de page</a>
           	<a href="#unSeminaire" data-ajax="false" class="btnUp scroll">précédent</a>
            </nav>

		</section>
	
	</div><!-- /content -->

</div><!-- /page seminaireSolo-->

<div data-role="header">
</div>

<div data-role="page" id="seminaireGroupe">
<a id="top" name="top"></a>
        <header>
			<a href="#accueil" class="retourAccueil" data-transition="slide" data-direction="reverse"><img src="img/logo.png" alt="Alpha Harmonie" /></a>
			<h1><span>a</span>lpha<span>h</span>armonie</h1>
            <nav>
            	<a href="#seminaireSolo">Séances</a>
                <a href="#seminaireGroupe">Séminaires</a>
                <a href="#plus" data-transition="flip">Infos</a>
                <ul>
	                <li>
	                	<a href="#">Exercices</a>
	                	<a href="#">Relaxation</a>
	                	<a href="#" data-transition="pop">Reservation</a>
	                </li>
                </ul>
            </nav>
		</header><!-- /header -->

	<div class="collapsableNav">
		<ul>
			<li><a href="#seminaireSolo" data-transition="slide">Séances personnalisées</a></li>
			<li><a href="#seminaireGroupe" data-transition="slide">Séminaires groupe</a></li>
		</ul>
	</div>
	
	<nav data-role="header" class="navbar">
		<a href="#" class="toggle-menu">Menu</a>
		<a href="#accueil" class="retourAccueil" data-transition="slide" data-direction="reverse">alphaHarmonie</a>
		<a href="#plus" data-transition="flip" >infos</a>
	</nav>


	<div data-role="content" class="content">	
	<h1>Séminaires groupe</h1>
	<p>Augmenter notre capacité de concentration en apprenant à diriger notre attention en maitrisant nos pensées.</p>
	<p>Détecter nos croyances limitantes afin de les transformer en croyances dynamisantes.</p>
	<p>Pour ce faire des exercices énergétiques basés sur la respiration sont mis en place. Ainsi que des conseils nutritionnels et sportifs.</p>
	<p>L’acquisition de ces nouveaux principes vous permettra de diriger vos objectifs avec succès.</p>


		<section id="unSeminaire">
		
			<h2>Intitulé</h2>
			<p class="sous-titre">Un paragraphe donnera une description synthétique du séminaire</p>
			<p>Celui ci comprendra plusieurs themes, comme un premier, celui qui vient après, et peut être même d'autres.</p>
			<ul class="listview">
				<li>Neque porro quisquam est qui dolorem </li>
				<li>ipsum quia dolor sit amet</li>
				<li>onsectetur, adipisci velit...</li>
			</ul>
		
        	<nav class="icons">
            	<a href="#top" data-ajax="false" class="btnTop scroll">haut de page</a>
            	<a href="#deuxSeminaire" data-ajax="false" class="btnDown scroll">suivant</a>
            </nav>
        
		</section>

		<section id="deuxSeminaire">
		
			<h2>Intitulé</h2>
			<p class="sous-titre">Un paragraphe donnera une description synthétique du séminaire</p>
			<p>Celui ci comprendra plusieurs themes, comme un premier, celui qui vient après, et peut être même d'autres.</p>
			<ul class="listview">
				<li>Neque porro quisquam est qui dolorem </li>
				<li>ipsum quia dolor sit amet</li>
				<li>onsectetur, adipisci velit...</li>
			</ul>
            
        	<nav class="icons">            	
            <a href="#top" data-ajax="false" class="btnTop scroll">haut de page</a>
           	<a href="#unSeminaire" data-ajax="false" class="btnUp scroll">précédent</a>
            </nav>

		</section>



	</div><!-- /content -->

</div><!-- /page seminaireGroupe-->

<div data-role="page" id="plus" data-add-back-btn="true" data-back-btn-text="retour">
<div data-role="header">
</div>
	<div data-role="content" class="content">	
	<h1>Qui suis-je ?</h1>
	<p>Après plusieurs années de construction personnelle à travers divers domaines d’activités, je me suis souvent posé la question : 
		<em>Pourquoi certains réussissent et d'autres pas ?</em>
		<br/>Cette problématique, m’a amené à me tourner vers une formation de thérapeute holistique, spécialisée dans le comportemental.
	</p>

	<p>Partant de ce principe, je me suis rendu compte de la véracité de la fameuse loi de cause à effet :
		<q>« Notre vie d’aujourd’hui est à l’image de nos pensées d’hier. 
		<br/>Notre vie de demain sera à l’image de nos pensées d’aujourd’hui. »
		</q>
	</p>
 
	<p>Le résultat de mes recherches m’a donné envie de partager mes découvertes par l’intermédiaire d’une structure de professionnels.</p>

	<p class="signature">Joël Larcher</p>
	</div><!-- /content -->

</div><!-- /page plus-->

</body>
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

<script type="text/javascript">
	
$(document).bind('pagechange', function(event){
//Nav accordéon
	$(".collapsableNav").removeClass( "openMenu" );
		$(".toggle-menu").removeClass( "on" )	
	$(".collapsableNav").addClass("closeMenu");

	$(".toggle-menu").off();		

 	$(".toggle-menu").on("click", function(event){
		
		$(".collapsableNav").toggleClass( "openMenu" )
		$(".collapsableNav").toggleClass( "closeMenu" )
		$(".toggle-menu").toggleClass( "on" )	
		
	});

////Ancres déroulantes
//	$(".scroll").click(function(event){		
//			e.preventDefault();
//			$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
//		});
	
});//pagechange



   </script>

<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>

</html>

<!-- 
utiliser data-title="Page x" 
regler h1 pour coller à la grille


-->