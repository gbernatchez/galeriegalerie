<?php include('inc/header.php'); ?>

<style>

#expo1 {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-image: url('assets/images/expo1/bg.png');
    background-position: center center;
    background-attachment: fixed;
    background-size: cover;
    z-index: 10;
}

#video {
    height: 62%;
    left: 10%;
    position: fixed;
    top: 12%;
    width: 56%;
    z-index: 5;

    iframe {
        height: 100%;
        width: 100%;
    }
}

</style>

<div id="expo1"></div>
<div id="video">

<?php /* ?><iframe width="560" height="315" src="https://www.youtube.com/embed/YQHsXMglC9A?rel=0&amp;autoplay=1&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
<?php */ ?><iframe src="https://player.vimeo.com/video/132881119?autoplay=1&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0" width="500" height="313" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>

<?php include('inc/footer.php'); ?>