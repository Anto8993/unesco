<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Hestia
 * @since Hestia 1.0
 */
?>
			<?php ?>
		</div>
	</div>
      <footer>
        <div id="sej_flex">
          <div id="fkontakt">
            <address>
              <hr />
              <br />
			  <div id="ad_flex">
			  <div>
              <p class="kontaktinfo"> <b>Kontaktinformation:</b></p>
			  National Koordinator <br />
			  Poul Erik Christoffersen <br />
              +45 4491 4646 <br />
              <a href="mailto:pec@ungdomsbyen.dk" class="email">pec@ungdomsbyen.dk</a><br />
			  </div>
			  <div>
			  <br />
			  Ungdomsbyen <br />
              c/o Global Platform <br />
			  Faelledvej 12C, 3. sal <br />
			  2200 Copenhagen N
			  </div>
			  </div>
            </address>
          </div>
          <div id="flinks">
            <hr />
            <br />
            <a href="https://lasse-godtkjaer.dk/kea/2_sem/09/unesco/">Forside</a> <br />
            <a href="https://lasse-godtkjaer.dk/kea/2_sem/09/unesco/om-verdensmalsskoler/">Om verdensmålsskoler</a> <br />
            <a href="https://lasse-godtkjaer.dk/kea/2_sem/09/unesco/de-17-verdensmal/">De 17 verdensmål</a> <br />
            <a href="https://lasse-godtkjaer.dk/kea/2_sem/09/unesco/undervisningsmateriale/mission-for-fn/">Mission for FN</a> <br />
            <a href="https://lasse-godtkjaer.dk/kea/2_sem/09/unesco/projekter/">Projekter</a>
          </div>
        </div>
        <div id="fhr">
          <hr />
          <br />
          <div id="fsome">
		  <a href="https://www.facebook.com/unescodanmark/">facebook</a> <br />
            <a href="https://www.linkedin.com/company/unesco-associated-schools-network-denmark/about/">linkedin</a> <br />
			<br />
          </div>
        </div>
      </footer>
 
	  <?php wp_footer(); ?>
<style>
footer {
  margin: 0;
  padding: 30px 60px 10px 60px;
  background-color: #176B9D;
  gap: 50px;
  line-height: 1.5;
  justify-content: space-between;
  grid-area: 1/1;
}

address {
  font-style: normal;
  color: white;
  margin-bottom: 30px;
}

footer a {
  font-size: 1.4rem;
  color: white;
  text-decoration: none;
}

footer p {
  color: white;
  margin: 0;
}

footer a:hover {
  text-decoration: underline;
  color:white;
}
#flinks {
  margin-bottom: 30px;
}
#fsome {
  gap: 10px;
}
#flinks a {
  max-width: 9%;
}

hr {
  color: white;
}

footer img {
  width: 20px;
  height: 20px;
}
@media (min-width: 800px) {
  footer {
    display: flex;
    padding: 30px 60px 10px 60px;
  }

  #flinks {
  margin-bottom: 30px;
  width:45vw;
}

  #sej_flex {
    display: flex;
    gap: 35%;
  }
  #fhr {
    width: 35%;
  }
  #fsome {
    text-align:right;
  }

  #ad_flex{
	display:flex;
	gap:10%;
	width:30vw;

}
}

</style>
</body>
</html>
