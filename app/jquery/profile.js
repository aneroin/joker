function updateProfile(){
  var XHR = new XMLHttpRequest();
  var FD  = new FormData();

  // We push our data into our FormData object
  FD.append('firstname', $('input[id=FirstName]').val());
  FD.append('middlename', $('input[id=MiddleName]').val());
  FD.append('surname', $('input[id=Surname]').val());
  //FD.append('birthdate', $('input[id=BirthDate]').val());
  FD.append('address', $('input[id=Address]').val());

  // We define what will happen if the data are successfully sent
  XHR.addEventListener('load', function(event) {
    location.reload();
  });

  // We define what will happen in case of error
  XHR.addEventListener('error', function(event) {
    alert('запит завершився невдачею');
  });

  // We setup our request
  XHR.open('POST', 'http://taxijoker.com/user/update');

  // We just send our FormData object, HTTP headers are set automatically
  XHR.send(FD);
}
