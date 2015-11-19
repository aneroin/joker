var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
};

var _carvendors = [
'Acura', 'Audi', 'BMW', 'Chevrolet', 'Citroen', 'Fiat', 
'Ford', 'Geely', 'Honda', 'Hyundai', 'Infiniti', 'Kia', 
'Lexus', 'Mazda', 'Mercedes-Benz', 'Mitsubishi', 'Nissan', 
'Peugeot', 'Renault', 'Subaru', 'Toyota', 'VolksWagen', 'Volvo'
];

var carvendors = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.whitespace,
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  local: _carvendors
});

function initialize_typeahead (selector) {
  $(selector).typeahead({
    hint: true,
    highlight: true,
    minLength: 1
  },
  {
    name: 'carvendors',
    source: carvendors
  });
}