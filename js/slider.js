var slider = document.querySelector('.Slider');
var Slider = new Slider(slider);

Slider.on('change', function(event) {
  // event.detail.wallopEl
  // => <div class="Slider">…</div>

  // event.detail.currentItemIndex
  // => number
});
