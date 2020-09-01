require('./bootstrap');

var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function() {
  $.ajax(
    {
      url: 'http://127.0.0.1:8000/api/students',
      method: 'GET',
      success: function(dataResponse) {
        var studentArray = dataResponse.students;

        var source = $('#student-template').html();
        var template = Handlebars.compile(source);

        for (var i = 0; i < studentArray.length; i++) {
          var thisStudent = studentArray[i];

          var html = template(thisStudent);
          $('#student-list').append(html);
        }
      },
      error: function() {
        alert('Errore');
      }
    }
  );
});
