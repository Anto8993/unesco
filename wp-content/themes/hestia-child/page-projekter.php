<?php
/**
 * The template for displaying all single posts and attachments.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

get_header();

do_action( 'hestia_before_single_page_wrapper' );

?>
<div class="<?php echo hestia_layout(); ?>">
	<head>
	<link rel="stylesheet" href="https://use.typekit.net/wal1xws.css">
	</head>

	<div class="blog-post <?php esc_attr( $class_to_add ); ?>">
		<!-- Her ligger sidens indhold. Udover en overskrift og knapper til filtrering,
		ligger der også en section som vi tilføjer indhold til ved hjælp af javascript  -->
		<div class="container">
			<h1 id="overskrift">Filtrer efter niveau:</h1>
			<nav id="filtrering"><button data-maal="alle">Alle</button></nav>
			<section id="maal-oversigt"></section>
		</div>
		<!-- Her har vi lavet vores template til at udskrive json data i vores loopview. -->
			<template>
				<article>
					<h3></h3>
				</article>
			</template>
	</div>
<style>

* {
  padding: none;
  margin: none;
}

button {
	font-family: neue-haas-grotesk-text, sans-serif;
	font-weight: 400;
	font-style: normal;
}

h1 {
	font-family: neue-haas-grotesk-text, sans-serif;
	font-weight: 700;
	font-style: normal;
}

h3 {
	font-family: neue-haas-grotesk-text, sans-serif;
	font-weight: 400;
	font-style: normal;
}

button{
	font-size: smaller;
}

#post-48 {
  margin: 4%;
}

#post-152 > div > div:nth-child(10) > div:nth-child(1),
#post-152 > div > div:nth-child(10) > div:nth-child(2),
#post-152 > div > div:nth-child(10) > div:nth-child(3),
#post-152 > div > div:nth-child(11) > div:nth-child(1) {
  outline: solid;
}
#post-152 > div > div:nth-child(10) > div:nth-child(1) > h4,
#post-152 > div > div:nth-child(10) > div:nth-child(2) > h4,
#post-152 > div > div:nth-child(10) > div:nth-child(3) > h4,
#post-152 > div > div:nth-child(11) > div:nth-child(1) > h4 {
  margin-left: 10px;
}

#post-152 > div > div:nth-child(10) > div:nth-child(1) > p,
#post-152 > div > div:nth-child(10) > div:nth-child(2) > p,
#post-152 > div > div:nth-child(10) > div:nth-child(3) > p,
#post-152 > div > div:nth-child(11) > div:nth-child(1) > p {
  margin-left: 10px;
}

#post-279 > div > div > span {
  width: 100%;
}

#post-154 > div > div.wp-block-columns > div:nth-child(1),
#post-154 > div > div.wp-block-columns > div:nth-child(2),
#post-154 > div > div.wp-block-columns > div:nth-child(3) {
  outline: solid;
  margin-top: 5%;
}
#post-154 > div > div.wp-block-columns > div:nth-child(1) > div > div > a,
#post-154 > div > div.wp-block-columns > div:nth-child(2) > div > div > a,
#post-154 > div > div.wp-block-columns > div:nth-child(3) > div > div > a,
#post-154 > div > div.wp-block-columns > div:nth-child(1) > h2,
#post-154 > div > div.wp-block-columns > div:nth-child(2) > h2,
#post-154 > div > div.wp-block-columns > div:nth-child(3) > h2,
#post-154 > div > div.wp-block-columns > div:nth-child(1) > p,
#post-154 > div > div.wp-block-columns > div:nth-child(2) > p,
#post-154 > div > div.wp-block-columns > div:nth-child(3) > p {
  margin-bottom: 5%;
  margin-left: 5%;
}

article img {
  height: auto;
  width: 100%;
}

/* #blog-post {
} */

#maal-oversigt {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 40px;
  margin-left: 5%;
  margin-right: 5%;
}

#filtrering {
  display: flex;
  justify-items: space-between;
  gap: 1px;
}

article h3 {
  display: block;
}

.wp-block-button.is-style-outline a:hover {
  background-color: #176B9D;
  color: #fff;
}
.wp-block-button a:hover {
  background-color: #176B9D;
  color: #fff;
}

#filtrering {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));  
}

#overskrift {
	display: flex;
	justify-content: center;
}

.lukMenu {
  display: none;
}

button {
  white-space: normal;
}

#maal-oversigt article:hover {
  transform: scale(103%);
  transition: transform 0.5s; /* Animation */
  box-shadow: 10px 12px 24px 8px #114c6f;
}

#maal-oversigt article {
  padding: 15px;
  background-color: #176B9D;
  cursor: pointer;
}

#maal-oversigt h3 {
  font-size: 25px;
  color: #fff;
}

#maal-oversigt {
  padding-top: 8%;
  padding-bottom: 5%;
}

/* alligner alt i projekter titlen */
.textalligncenter {
  text-align: center;
}

#filterValg:hover {
  transform: scale(110%);
  transition: transform 0.5s; /* Animation */
}

#filtrering > button:hover {
  cursor: pointer;
  text-decoration: none;
  border-color: transparent;
  transform: scale(110%);
  transition: transform 0.5s; /* Animation */
}

</style>
<script>

let maal;
let categories;
let filterMaal = "alle";

// Her laver vi vores links til json og kategori som konstanter
const url = "https://lasse-godtkjaer.dk/kea/2_sem/09/unesco/wp-json/wp/v2/projekt?per_page=100";
const catUrl = "https://lasse-godtkjaer.dk/kea/2_sem/09/unesco/wp-json/wp/v2/categories";

const liste = document.querySelector("#maal-oversigt");
const skabelon = document.querySelector("template");
// let filterMaal = "alle"

// Lytter efter om DOM'en er loadet og starterter derefter functionen Start
document.querySelector("DOMContentLoaded", start)

function start(){
	getJson();
}
// I denne function henter vores script json data iform af 
// categories og projekter. Derudover console logger den og starter
// funktionerne visMaal og opretKnapper.
async function getJson() {
	let response = await fetch(url);
	let catdata = await fetch(catUrl);
	maal = await response.json();
	categories = await catdata.json();
	console.log(categories);
	console.log(maal);
	visMaal();
	opretKnapper();
}
// I denne function opretter vi vores forskellige filtrerings knapper
// udfra vores forskellige WP kategorier. Derudover starter vi functionen
// 	addEventListenersToButtons
function opretKnapper(){	
	categories.forEach(cat =>{
	document.querySelector("#filtrering").innerHTML += `<button class="filter" data-maal="${cat.id}">${cat.name}</button>`
	})		
	addEventListenersToButtons();
}
// I denne function tilføjer vi eventListeners til de knapper vi lavede
// i functionen lige ovenover. 
function addEventListenersToButtons(){
	document.querySelectorAll("#filtrering button").forEach(elm =>{
	elm.addEventListener("click", filtrering);
	})
}
// Denne function gør det muligt at filtrer ved tryk på knapperne
function filtrering(){
	filterMaal = this.dataset.maal;
	console.log(filterMaal)
	visMaal();
}

getJson();

// I denne function udskriver vi vores Json data på siden. Derudover
// tilføjer vi en eventListener, som gør det muligt at åbne singleview.
function visMaal(){
	console.log(maal);
	let temp = document.querySelector("template");
	let container = document.querySelector("#maal-oversigt");
	container.innerHTML = "";
	maal.forEach(maal => {
		if ( filterMaal == "alle" || maal.categories.includes(parseInt(filterMaal))){
		const klon = skabelon.cloneNode(true).content;
		klon.querySelector("h3").textContent = maal.title.rendered;
		klon.querySelector("article").addEventListener("click", () => {location.href=maal.link;})
		liste.appendChild(klon);
		}
	})
}
</script>
</div>
	<?php get_footer(); ?>
