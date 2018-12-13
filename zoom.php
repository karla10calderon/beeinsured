<!--
  ## Introduction

  Best known for his work on documentaries, Ken Burns developed a signature effect which consisted of a combination of panning and zooming over an image. It has since been used popularly.
  We can achieve this simple yet captivating effect by combining the 'pan' and 'zoom' animations in `amp-story`. Here's how to do it.
-->
<!-- -->
<!doctype html>
<html ⚡>

<head>
  <meta charset="utf-8">
  <link rel="canonical" href="/stories/visual_effects/ken_burns/">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <style amp-custom>


    .img-container {
      position: absolute;
      width: 0px;
      height: 0px;
    }
  </style>
  <title>Visual Effects</title>
  <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
</head>

<body>

    <!-- ## Ken Burns Effect-->
    <!--The general idea is to nest elements to combine the animations: the container element will animate the zoom, and the image inside the container will be animated with a panning.
* Start by creating an `<amp-story-page>` with a `<amp-story-grid-layer` using the fill template.
* Add a `<div>` element which will act as the image container. Set its style class to `position:absolute`. This will ensure image coordinates correspond to those of the viewport, which is important for the animation.
* Set its animation to be `animate-in="zoom-in"` or `animate-in="zoom-out"` and its duration with `"animate-in-duration=30s"`.


<div class="ampstart-card info">
**Tip:** In this demo we use 30 seconds but your mileage may vary. Try experimenting with different values to see what works best for your desired results.
</div>

* Inside this container, add an `<amp-img>` element with the `src` attribute pointing at your image, describe the size of the image with the `width` and `height` attributes of the [`<amp-img>` element](/components/amp-img/). Set `layout="fixed"` so that the image outsizes the screen real estate (We want to use a large image that can be panned over. We recommend 1600 x 1200 px or larger).
* Animate the `<amg-img>` element using the `animate-in="pan-right"`. (You can also use `pan-left`, `pan-up`, and `pan-down`). [See amp-story animations list.](/stories/features/animations/#zoom-in)


<div class="ampstart-card info">
**Tip:** It's important that the **image** sets the **panning animation**, whereas the image **container** sets the **zoom animation**. Otherwise the dimensions of the image will change, causing undesired results in the animation.
</div>
    -->
   

    <!-- ## Using Multiple Images -->
    <!--
      You can even implement a slideshow transitioning between multiple pages using this effect.

      Just combine the animations as described in the [combining animations section](/stories/features/animations/#combining-animations). Remember all the elements being animated after certain animation must include the `animate-in-after` attribute. Including the children being animated. See below for the code sample.

      We also reset the sizes of the nested `<div>` elements so that they don't change the dimensions used for the animations. See the `img-container` style class in the code sample.

      Keep in mind results may vary depending on the image size and animations you use. Experiment with different animation durations and presets to see what you like best!
    -->

    
     <div animate-in="zoom-in" animate-in-duration="30s" class="img-container">
          <amp-img id="ken-burns-img1" src="https://picsum.photos/1600/1200?image=1077" animate-in="pan-left" animate-in-duration="30s"
            layout="fixed" width="1600" height="1200">
          </amp-img>
        </div>
</body>

</html>