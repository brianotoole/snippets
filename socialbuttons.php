<!-- Twitter, Facebook, Comments share meta with styling -->
<style>
 .twitter.p-button.has-icon {
background-color: #00aced;
}

.facebook.p-button.has-icon {
background-color: #325a97;
}

.twitter.p-button.has-icon:hover {
background-color: #038abd;
}

.facebook.p-button.has-icon:hover{
background-color: #1d3e70;
}

.comments.p-button.has-icon:hover{
background-color: #000;
}

.has-icon.p-button {
color: #fff!important;
white-space: nowrap;
font-family: inherit;
font-size: 13px;
font-weight: 600;
}

.leave-reply{ 
	display: none;
}

.m-entry__social{
	padding: 15px 0 5px 0px;
}

.p-button, .p-button.has-icon {
font-size: 13px;
font-weight: 500;
text-transform: uppercase;
color: #FFF;
display: inline-block;
background-color: #292929;
border: 0;
padding: 6px 20px 5px 32px;
position: relative;
vertical-align: middle;
margin-right: -1px;
}

.has-icon.p-button .ss-social {
color: #fff;
position: absolute;
top: 6px;
left: 0;
width: 45px;
text-align: center;
}

i.icon-comments-alt{
	margin-left: -10px;
}
</style>



			<div class="m-entry__social">
			  <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?> - <?php the_permalink(); ?>" class="p-button has-icon twitter">
			  <span class="ss-social" unselectable="on"><i class="icon-twitter"></i></span><span class="p-button__social-text">Tweet</span>
			  </a>

			  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="window.open(this.href, '', 'height=279,width=575'); return false;" class="p-button has-icon facebook">
			  <span class="ss-social" unselectable="on"><i class="icon-facebook"></i></span><span class="p-button__social-text">Share</span>
			  </a>
			  
			  <a href="#comments" class="p-button has-icon comments">
			    <span class="comments-count-wrapper"><i class="icon-comments-alt"></i>
			    </span>
			    Comments
			  </a>
		   </div>
