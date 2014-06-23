<?php the_content(); ?>
 
<?php if ( wp_is_mobile() ) : ?>
<div class="set-1">
<ul>
<li><a class="twitter-small" href="https://twitter.com/share?text=<?php the_title(); ?>&nbsp;@Twitter名" target="_blank">Twitter</a></li>
<li><a href="javascript:void window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href),'_blank', 'width=550, height=360, left=100, top=50, scrollbars=1, resizable=1', 0);" class="facebook-small">Facebook</a></li>
<li><a class="line-small" href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>">">LINE</a></li>
</ul>
</div>
<?php else: ?>
<div class="set-2">
<ul>  
<li><a class="twitter-big" href="https://twitter.com/share?text=<?php the_title(); ?>&nbsp;@Twitter名" target="_blank">ツイートする</a></li>
<li><a class="facebook-big" href="javascript:void window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href),'_blank', 'width=550, height=360, left=100, top=50, scrollbars=1, resizable=1', 0);">facebookでシェア</a></li>
 
<li><a class="gplus-big" href="" target="_blank">Googleでシェア</a></li>
 
<li><a class="hatena-big" href="http://b.hatena.ne.jp/append?<?php the_permalink(); ?>" target="_blank">　</a></li>
</ul>
</div>
<?php endif; ?>