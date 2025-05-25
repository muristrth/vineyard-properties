document.addEventListener('DOMContentLoaded', function() {
  var form = document.getElementById('property-filter-form');
  if (!form) return;
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    var cat = form.elements['category'].value.toLowerCase();
    var loc = form.elements['region'].value.toLowerCase();
    var min = parseInt(form.elements['min_price'].value, 10);
    var max = parseInt(form.elements['max_price'].value, 10);
    var cards = document.querySelectorAll('.property-card');
    cards.forEach(function(card) {
      var ccat = card.getAttribute('data-cat').toLowerCase();
      var cloc = card.getAttribute('data-loc').toLowerCase();
      var cprice = parseInt(card.getAttribute('data-price'), 10);
      var show = true;
      if (cat && cat !== 'all' && ccat !== cat) show = false;
      if (loc && loc !== 'all' && cloc !== loc) show = false;
      if (!isNaN(min) && cprice < min) show = false;
      if (!isNaN(max) && cprice > max) show = false;
      card.classList.toggle('hidden', !show);
    });
  });
});
