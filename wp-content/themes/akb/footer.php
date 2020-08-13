<footer>
  <div class="container">
    <div class="row">
      
      <div class="col-lg-3 right">
        <div class="widget">
          <p class="widgetheading" onclick = "location.href = 'http://pb-dom.ru/kontakty/';" style = "cursor: pointer">Contact us</p>
          <address>
            St. Petersburg <br>
            ul. Vatutina, 24 <br>
            +7 (953) 159-92-33 </address>
          </div>
      </div>
      
      <div class="col-lg-3 right  margin-footer">
        <div class="widget">
          <p class="widgetheading">Меню</p>
          <?php
          wp_nav_menu(
                        array(
              "menu" => "footer",
              "menu_class" => "link-list",
                            "container" => false,
            )
          );?>
        </div>
      </div>
      
      <div class="col-lg-3">
        <div class="text-center">
          <span>Разработка сайта:</span><br>
          <a href="https://seosky.su/uslugi/razrabotka-sajtov/" target="_blank"><img src="/wp-content/uploads/2016/01/seosky.png" width="89" height="15" alt="Разработка сайтов СПб"></a><br>
          <p class="logo-size">Агенство интернет - маркетинга</p>
        </div>
      </div>
    </div>
  <?php wp_footer();?>
  </div>
<!--— Yandex.Metrika counter —-->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48950435 = new Ya.Metrika({
                    id:48950435,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48950435" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!--— /Yandex.Metrika counter —-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133561887-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133561887-1');
</script>
</footer>

<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
</div>
</body>
</html>