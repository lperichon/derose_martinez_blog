<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since SwáSthya en Martinez 1.0
 */
?>

	</div>
	<div class="clear"></div>
</div>

	<div class="footer-wrap">
  <div class="footer">
        <div class="footer-left proxima-nova-condensed">
            <div class="footer-title">SEGUÍNOS ONLINE</div>
            <div class="footer-social">
                <div class="social-link"><a href="http://twitter.com/twentyeleven" class="twitter" target="_blank"></a></div>
                <div class="social-link"><a href="http://www.facebook.com/pages/SwaSthya-Yoga-Martinez/131942976866386" class="facebook" target="_blank"></a></div>
                <div class="social-link"><a href="http://www.linkedin.com/pub/natalia-sanmart%C3%ADn-gil/22/2aa/816" class="linkedin" target="_blank"></a></div>
                <div class="social-link"><a href="http://www.youtube.com/user/DeRoseMetodo" class="youtube" target="_blank"></a></div>
                <div class="social-link"><a href="http://feeds.feedburner.com/yogaenmartinez" class="rss" target="_blank" type="application/atom+xml"></a></div>
                <div class="social-link"><a href="#" class="foursquare" target="_blank"></a></div>
            </div>
        </div>
        <div class="footer-left-middle proxima-nova-condensed">
            <div class="footer-title">SITEMAP</div>
            <div class="ai-links">
                <div class="ai-links-left">
                    <a href="/">Blog</a><br>
                    <a href="http://yogaenmartinez.com.ar">Sitio</a><br>
                </div>
            </div>
        </div>
        <div class="footer-right-middle proxima-nova-condensed">
<script src="http://connect.facebook.net/es_LA/all.js#xfbml=1"></script><fb:like href="http://www.facebook.com/pages/SwaSthya-Yoga-Martinez/131942976866386" show_faces="true" width="285" colorscheme="dark"></fb:like>
        </div>
        <div class="footer-right proxima-nova-condensed">
            <div class="footer-chat-box">
                <div class="footer-title">ÚLTIMAS NOTICIAS</div>
                <div id="tweet" class="proximamente">
                   
                </div>
<script type="text/javascript">
$.getJSON("http://twitter.com/statuses/user_timeline/swasthyaMTZ.json", function(data) {
     $("#tweet").html(data[0].text);
});
</script>
            </div>
            <div class="below-chat-box">
                <div class="footer-twitter"><a href="http://twitter.com/twentyeleven" target="_blank">Seguínos en Twitter</a></div>
            </div>
        </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>