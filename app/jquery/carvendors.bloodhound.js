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
'Audi', 
'BMW', 
'Chevrolet', 
'Citroen', 
'Dacia',
'Daewoo',
'Fiat', 
'Ford', 
'Geely', 
'Honda', 
'Hyundai', 
'Kia', 
'Lada', 
'Lexus', 
'Mazda', 
'Mercedes',
'Mercedes-Benz', 
'Mitsubishi', 
'Nissan', 
'Opel',
'Peugeot', 
'Renault', 
'Skoda',
'Ssang Yong', 
'Toyota', 
'UAZ',
'VAZ',
'VolksWagen', 
'Volvo',
'ZAZ',
'ZAZ FORZA'
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
  }).unwrap();
}