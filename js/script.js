$(document).ready(function () {
  
  //-----------------------JSON from Czarek---------------------------//

  $('#get-data').click(function () {
    var showData = $('.show-data');

    $.getJSON('http://172.21.78.149:8081/rest/contacts', function (data) {
      
      console.log(data);

      var items = data.items.map(function (item) {
        return item.key + ': ' + item.value;
      });

      console.log(items);

      showData.empty();

      if (items.length) {
        var content = '<li>' + items.join('</li><li>') + '</li>';
        var list = $('<ul />').html(content);
        showData.append(list);
      }
    });

    showData.text('Loading the JSON file...');
  });

  //-----------------------notyfikacje---------------------------//

  var Notification = new XMLHttpRequest();
  Notification.open('GET', 'json_data.json');
  Notification.onload = function() {

    var data = JSON.parse(Notification.responseText);

    var i = 0, last = data.length;

    setInterval(function() {
      if(i<last) {
        $.notify(data[i].name, 'info');
        i++;
      }
      else i = 0;
    }, 5050);

  };
  Notification.send();

});