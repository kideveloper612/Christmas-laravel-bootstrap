$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo").attr('src');
    
    /* Remove iframe src attribute on page load to
    prevent autoplay in background */
    $("#cartoonVideo").attr('src', '');
	
	/* Assign the initially stored url back to the iframe src
    attribute when modal is displayed */
    $("#myModal").on('shown.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });

});

$('#photo1').change(function() {
  var i = $('#photo1-name').clone();
  var file_name = $('#photo1')[0].files[0].name;
  $('#photo1-name').text(file_name);
});

$('#photo2').change(function() {
  var i = $('#photo2-name').clone();
  var file_name = $('#photo2')[0].files[0].name;
  $('#photo2-name').text(file_name);
});

$('#Family_Photo').change(function() {
  var i = $('#Family_Photo-Name').clone();
  var file_name = $('#Family_Photo')[0].files[0].name;
  $('#Family_Photo_Name').text(file_name);
});

$('#Room_Photo').change(function() {
  var i = $('#Room_Photo-Name').clone();
  var file_name = $('#Room_Photo')[0].files[0].name;
  $('#Room_Photo_Name').text(file_name);
});

$('#Letter_Photo').change(function() {
  var i = $('#Letter_Photo-Name').clone();
  var file_name = $('#Letter_Photo')[0].files[0].name;
  $('#Letter_Photo_Name').text(file_name);
});


$(document).ready(function () {
});