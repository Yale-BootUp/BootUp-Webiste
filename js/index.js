$(document).ready(function() { 
  changeWhat();
});

var whatArr = ['news', 'internships', 'events', 'jobs', 'hackathons', 
               'fun', 'opportunities', 'change', 'tech talks'];
function changeWhat() {
  $('#what').slideUp(300, 'easeInOutCubic', function() {
    var val = whatArr.shift();
    $(this).text(val).slideDown(300, 'easeInOutCubic', function() {
      setTimeout(function() {
        changeWhat();
      }, 1500);
    });
    whatArr.push(val);
  });
}